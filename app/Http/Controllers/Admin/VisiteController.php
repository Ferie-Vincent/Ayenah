<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVisiteRequest;
use App\Http\Requests\UpdateVisiteRequest;
use App\Models\Visite;
use App\Traits\LogsActivity;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Mews\Purifier\Facades\Purifier;

class VisiteController extends Controller
{
    use LogsActivity;
    public function index()
    {
        $visites = Visite::orderBy('created_at', 'desc')->get();
        return view('admin.visit', compact('visites'));
    }

    public function store(StoreVisiteRequest $request)
    {
        $validated = $request->validated();

        DB::transaction(function () use ($request, &$validated) {
            $validated['description'] = Purifier::clean($validated['description']);

            $imageFields = ['cover_image', 'image1', 'image2', 'image3', 'image4'];
            foreach ($imageFields as $field) {
                if ($request->hasFile($field)) {
                    $validated[$field] = $request->file($field)->store('visites', 'public');
                }
            }

            $visite = Visite::create($validated);
            $this->logAction('create', $visite, 'Création de l\'actualité : ' . $visite->title);
        });

        return redirect()->route('visit')->with('success', 'Visite ajoutée avec succès !');
    }

    public function edit(string $id)
    {
        $visite = Visite::findOrFail($id);
        return view('admin.visit', compact('visite'));
    }

    public function update(UpdateVisiteRequest $request, string $id)
    {
        $visite = Visite::findOrFail($id);
        $validated = $request->validated();

        DB::transaction(function () use ($request, $visite, &$validated) {
            $validated['description'] = Purifier::clean($validated['description']);

            $imageFields = ['cover_image', 'image1', 'image2', 'image3', 'image4'];
            foreach ($imageFields as $field) {
                if ($request->hasFile($field)) {
                    if ($visite->$field && !str_contains($visite->$field, '..') && Storage::disk('public')->exists($visite->$field)) {
                        Storage::disk('public')->delete($visite->$field);
                    }
                    $validated[$field] = $request->file($field)->store('visites', 'public');
                }
            }

            $visite->update($validated);
            $this->logAction('update', $visite, 'Modification de l\'actualité : ' . $visite->title);
        });

        return redirect()->route('visit')->with('success', 'Visite mise à jour avec succès !');
    }

    public function destroy(string $id)
    {
        $visite = Visite::findOrFail($id);

        DB::transaction(function () use ($visite) {
            $imageFields = ['cover_image', 'image1', 'image2', 'image3', 'image4'];
            foreach ($imageFields as $field) {
                if ($visite->$field && !str_contains($visite->$field, '..') && Storage::disk('public')->exists($visite->$field)) {
                    Storage::disk('public')->delete($visite->$field);
                }
            }

            $this->logAction('delete', $visite, 'Suppression de l\'actualité : ' . $visite->title);
            $visite->delete();
        });

        return redirect()->route('visit')->with('success', 'Actualité supprimée avec succès !');
    }
}
