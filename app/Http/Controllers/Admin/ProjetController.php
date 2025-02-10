<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjetController extends Controller
{
    public function store(Request $request )
    {
        $validatedData = $request->validate([
            'structure_porteuse' => 'required|string|max:255',
            'interlocuteur_local' => 'required|string|max:255',
            'telephone_local' => 'required|string|max:20',
            'courriel_local' => 'required|email|max:255',
            'partenaire_diaspora' => 'required|string|max:255',
            'interlocuteur_diaspora' => 'required|string|max:255',
            'telephone_diaspora' => 'required|string|max:20',
            'courriel_diaspora' => 'required|email|max:255',
            'intitule_projet' => 'required|string|max:255',
            'lieu_intervention' => 'required|string|max:255',
            'thematique_projet' => 'required|string|max:255',
            'autres_partenaires' => 'nullable|string|max:255',
            'duree_totale' => 'required|string|max:50',
            'cout_total' => 'required|numeric',
            'participation_ayenah' => 'nullable|numeric',
            'fichier_presentation' => 'nullable|file|mimes:pdf,docx',
            'photo_logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

       // Gestion des fichiers
       $validatedData['photo_logo'] = $this->handleFileUpload($request->file('photo_logo'), 'photo_logo');
       $validatedData['fichier_presentation'] = $this->handleFileUpload($request->file('fichier_presentation'), 'fichier_presentation');

        Projet::create($validatedData);
        session()->flash('success', 'Projet ajouté avec succès !');
        return redirect()->route('dashboard');
    }

    public function edit(string $id)
    {
        $projet = Projet::findOrFail($id);
        return view('dashboard', compact('projet'));
    }


    public function update(Request $request, $id)
    {
        $project = Projet::findOrFail($id);

        // Valider les données
        $validatedData = $request->validate([
            'structure_porteuse' => 'required|string|max:255',
            'interlocuteur_local' => 'required|string|max:255',
            'telephone_local' => 'required|string|max:20',
            'courriel_local' => 'required|email|max:255',
            'partenaire_diaspora' => 'required|string|max:255',
            'interlocuteur_diaspora' => 'required|string|max:255',
            'telephone_diaspora' => 'required|string|max:20',
            'courriel_diaspora' => 'required|email|max:255',
            'intitule_projet' => 'required|string|max:255',
            'lieu_intervention' => 'required|string|max:255',
            'thematique_projet' => 'required|string|max:255',
            'autres_partenaires' => 'nullable|string|max:255',
            'duree_totale' => 'required|string|max:50',
            'cout_total' => 'required|numeric',
            'participation_ayenah' => 'nullable|numeric',
            'fichier_presentation' => 'nullable|file|mimes:pdf,docx',
            'photo_logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $projet = Projet::findOrFail($id);

        $validatedData['photo_logo'] = $this->handleFileUpload($request->file('photo_logo'), 'photo_logo', $projet->photo_logo);
        $validatedData['fichier_presentation'] = $this->handleFileUpload($request->file('fichier_presentation'), 'fichier_presentation', $projet->fichier_presentation);

        $projet->update($validatedData);
        session()->flash('success', 'Projet mis à jour avec succès !');
        return redirect()->route('dashboard');
    }

    public function destroy(string $id)
    {
        $projet = Projet::findOrFail($id);

        // Supprimer les fichiers associés
        $this->deleteOldFile($projet->photo_logo);
        $this->deleteOldFile($projet->fichier_presentation);

        $projet->delete();
        session()->flash('error', 'Projet supprimé avec succès !');
        return redirect()->route('dashboard');
    }

    private function handleFileUpload($file, $directory, $oldFile = null)
    {
        if ($file) {
            $this->deleteOldFile($oldFile);
            return $file->store($directory, 'public');
        }

        return $oldFile;
    }

    private function deleteOldFile($filePath)
    {
        if ($filePath && Storage::disk('public')->exists($filePath)) {
            Storage::disk('public')->delete($filePath);
        }
    }

}
