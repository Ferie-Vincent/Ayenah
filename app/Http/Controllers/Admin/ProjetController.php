<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjetRequest;
use App\Http\Requests\UpdateProjetRequest;
use App\Models\Projet;
use App\Traits\LogsActivity;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProjetController extends Controller
{
    use LogsActivity;

    public function index()
    {
        $projets = Projet::orderBy('created_at', 'desc')->get();
        return view('admin.projets.index', compact('projets'));
    }

    public function store(StoreProjetRequest $request)
    {
        $validated = $request->validated();

        DB::transaction(function () use ($request, &$validated) {
            $validated['inscription_active'] = $request->boolean('inscription_active');

            if ($request->hasFile('fichier_presentation')) {
                $validated['fichier_presentation'] = $request->file('fichier_presentation')->store('projets/documents', 'local');
            }

            if ($request->hasFile('photo_logo')) {
                $validated['photo_logo'] = $request->file('photo_logo')->store('projets/images', 'public');
            }

            $projet = Projet::create($validated);
            $this->logAction('create', $projet, 'Création du projet : ' . $projet->intitule_projet);
        });

        return redirect()->route('admin.projets.index')->with('success', 'Projet créé avec succès !');
    }

    public function update(UpdateProjetRequest $request, $id)
    {
        $projet = Projet::findOrFail($id);
        $validated = $request->validated();

        DB::transaction(function () use ($request, $projet, &$validated) {
            $validated['inscription_active'] = $request->boolean('inscription_active');

            if ($request->hasFile('fichier_presentation')) {
                if ($projet->fichier_presentation) {
                    $this->deletePresentationFile($projet->fichier_presentation);
                }
                $validated['fichier_presentation'] = $request->file('fichier_presentation')->store('projets/documents', 'local');
            }

            if ($request->hasFile('photo_logo')) {
                if ($projet->photo_logo) {
                    Storage::disk('public')->delete($projet->photo_logo);
                }
                $validated['photo_logo'] = $request->file('photo_logo')->store('projets/images', 'public');
            }

            $projet->update($validated);
            $this->logAction('update', $projet, 'Modification du projet : ' . $projet->intitule_projet);
        });

        return redirect()->route('admin.projets.index')->with('success', 'Projet mis à jour avec succès !');
    }

    public function destroy($id)
    {
        $projet = Projet::findOrFail($id);

        DB::transaction(function () use ($projet) {
            if ($projet->fichier_presentation) {
                $this->deletePresentationFile($projet->fichier_presentation);
            }

            if ($projet->photo_logo) {
                Storage::disk('public')->delete($projet->photo_logo);
            }

            $this->logAction('delete', $projet, 'Suppression du projet : ' . $projet->intitule_projet);
            $projet->delete();
        });

        return redirect()->route('admin.projets.index')->with('success', 'Projet supprimé avec succès !');
    }

    public function downloadPresentation(Projet $projet)
    {
        abort_unless($this->isProjectDocumentPath($projet->fichier_presentation), 404);

        if (Storage::disk('local')->exists($projet->fichier_presentation)) {
            return Storage::disk('local')->download($projet->fichier_presentation);
        }

        if (Storage::disk('public')->exists($projet->fichier_presentation)) {
            return Storage::disk('public')->download($projet->fichier_presentation);
        }

        abort(404);
    }

    private function deletePresentationFile(?string $path): void
    {
        if (! $this->isProjectDocumentPath($path)) {
            return;
        }

        if (Storage::disk('local')->exists($path)) {
            Storage::disk('local')->delete($path);
            return;
        }

        Storage::disk('public')->delete($path);
    }

    private function isProjectDocumentPath(?string $path): bool
    {
        return is_string($path)
            && str_starts_with($path, 'projets/documents/')
            && ! str_contains($path, '..');
    }
}
