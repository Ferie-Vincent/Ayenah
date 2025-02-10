<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom_projet' => 'required|string|max:255',
            'description' => 'nullable|string',
            'thematique' => 'required|string|max:255',
            'porteur_projet' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'email' => 'required|email',
            'association' => 'nullable|string|max:255',
            'nom_entreprise' => 'required|string|max:255',
            'type_entreprise' => 'required|in:Personne morale,Personne physique',
            'montant_souhaite' => 'required|numeric',
            'statut' => 'required|in:En attente,Validé,Rejeté',
            'illustration' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Gestion de l'upload
        if ($request->hasFile('illustration')) {
            $path = $request->file('illustration')->store('illustrations', 'public');
            $validated['illustration'] = $path;
        }
    
        Projet::create($validated);
    
        return redirect()->route('dashboard')->with('success', 'Projet ajouté avec succès');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $projet = Projet::findOrFail($id);
        return view('dashboard', compact('projet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
                // Valide les données envoyées
        $validated = $request->validate([
            'nom_projet' => 'required|string|max:255',
            'description' => 'nullable|string',
            'thematique' => 'required|string|max:255',
            'porteur_projet' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'email' => 'required|email',
            'association' => 'nullable|string|max:255',
            'nom_entreprise' => 'required|string|max:255',
            'type_entreprise' => 'required|in:Personne morale,Personne physique',
            'montant_souhaite' => 'required|numeric',
            'statut' => 'required|in:En attente,Validé,Rejeté',
            'illustration' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $projet = Projet::findOrFail($id);

        // Si un fichier est téléchargé, il est traité
        if ($request->hasFile('illustration')) {
            // Supprimer l'ancienne image si elle existe
            if ($projet->illustration) {
                Storage::disk('public')->delete($projet->illustration);
            }

            // Stocke la nouvelle image
            $path = $request->file('illustration')->store('illustrations', 'public');
            $validated['illustration'] = $path;
        }

        // Mise à jour des données
        $projet->update($validated);

        return redirect()->route('dashboard')->with('success', 'Le projet a été mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $projet = Projet::findOrFail($id);

        // Supprimer l'image s'il existe
        if ($projet->illustration) {
            Storage::disk('public')->delete($projet->illustration);
        }

        // Supprimer le projet
        $projet->delete();

        return redirect()->route('dashboard')->with('success', 'Le projet a été supprimé avec succès.');

    }
}
