<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjetRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
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
            'autres_partenaires' => 'nullable|string|max:1000',
            'duree_totale' => 'required|string|max:50',
            'cout_total' => 'required|numeric|min:0',
            'participation_ayenah' => 'nullable|numeric|min:0',
            'fichier_presentation' => 'nullable|file|mimes:pdf,docx|max:10240',
            'photo_logo'           => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
            'description'          => 'nullable|string|max:2000',
            'statut'               => 'nullable|in:en_preparation,en_cours,suspendu,termine,annule',
            'date_debut'           => 'nullable|date',
            'date_fin_prevue'      => 'nullable|date|after_or_equal:date_debut',
            'completude'           => 'nullable|integer|min:0|max:100',
            'inscription_active'   => 'nullable|boolean',
        ];
    }
}
