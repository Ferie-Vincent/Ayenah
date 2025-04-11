<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjetController extends Controller
{
    public function store(Request $request)
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
            'autres_partenaires' => 'nullable|string',
            'duree_totale' => 'required|string|max:50',
            'cout_total' => 'required|numeric',
            'participation_ayenah' => 'nullable|numeric',
            'fichier_presentation' => 'nullable|file|mimes:pdf,docx',
            'photo_logo' => 'nullable|image|mimes:jpg,jpeg,png'
        ]);

        // Gestion des fichiers
        if ($request->hasFile('fichier_presentation')) {
            $validatedData['fichier_presentation'] = $request->file('fichier_presentation')->store('projets/documents', 'public');
        }

        if ($request->hasFile('photo_logo')) {
            $validatedData['photo_logo'] = $request->file('photo_logo')->store('projets/images', 'public');
        }

        // Conversion des noms de champs pour correspondre à la base
        $dbData = [
            'nom_projet' => $validatedData['intitule_projet'],
            'porteur_projet' => $validatedData['structure_porteuse'],
            'telephone' => $validatedData['telephone_local'],
            'email' => $validatedData['courriel_local'],
            'thematique' => $validatedData['thematique_projet'],
            'description' => $validatedData['autres_partenaires'] ?? null,
            'montant_souhaite' => $validatedData['participation_ayenah'] ?? 0,
            'illustration' => $validatedData['photo_logo'] ?? null,
            'type_entreprise' => 'Personne morale', // Valeur par défaut ou à adapter
            'statut' => 'En attente' // Valeur par défaut
        ];

        Projet::create($validatedData);

        return redirect()->route('dashboard')
               ->with('success', 'Projet créé avec succès !');
    }

    public function update(Request $request, $id)
    {
        // Trouver le projet ou échouer
        $projet = Projet::findOrFail($id);

        // Validation des données
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
            'autres_partenaires' => 'nullable|string',
            'duree_totale' => 'required|string|max:50',
            'cout_total' => 'required|numeric',
            'participation_ayenah' => 'nullable|numeric',
            'fichier_presentation' => 'nullable|file|mimes:pdf,docx',
            'photo_logo' => 'nullable|image|mimes:jpg,jpeg,png'
        ]);

        // Gestion des fichiers
        if ($request->hasFile('fichier_presentation')) {
            if ($projet->fichier_presentation) {
                Storage::disk('public')->delete($projet->fichier_presentation);
            }
            $validatedData['fichier_presentation'] = $request->file('fichier_presentation')->store('projets/documents', 'public');
        }

        if ($request->hasFile('photo_logo')) {
            if ($projet->photo_logo) {
                Storage::disk('public')->delete($projet->photo_logo);
            }
            $validatedData['photo_logo'] = $request->file('photo_logo')->store('projets/images', 'public');
        }

        // Mise à jour des données
        $projet->update([
            'nom_projet' => $validatedData['intitule_projet'],
            'telephone' => $validatedData['telephone_local'],
            'email' => $validatedData['courriel_local'],
            'thematique' => $validatedData['thematique_projet'],
            'description' => $validatedData['autres_partenaires'] ?? null,
            'montant_souhaite' => $validatedData['participation_ayenah'] ?? 0,
            'illustration' => $validatedData['photo_logo'] ?? null,
            'type_entreprise' => 'Personne morale',
            'statut' => 'En attente'
        ]);

        // Retour avec un message de succès
        return redirect()->route('dashboard')->with('success', 'Projet mis à jour avec succès !');
    }


    public function destroy($id)
    {
        $projet = Projet::findOrFail($id);

        // Suppression des fichiers
        if ($projet->fichier_presentation) {
            Storage::disk('public')->delete($projet->fichier_presentation);
        }

        if ($projet->photo_logo) {
            Storage::disk('public')->delete($projet->photo_logo);
        }

        $projet->delete();

        return redirect()->route('dashboard')
               ->with('success', 'Projet supprimé avec succès !');
    }
}