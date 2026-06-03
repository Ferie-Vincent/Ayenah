<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Projet extends Model
{
    use SoftDeletes;

    public function contributions()
    {
        return $this->hasMany(\App\Models\Contribution::class);
    }

    protected $fillable = [
        'structure_porteuse',
        'interlocuteur_local',
        'telephone_local',
        'courriel_local',
        'partenaire_diaspora',
        'interlocuteur_diaspora',
        'telephone_diaspora',
        'description',
        'statut',
        'date_debut',
        'date_fin_prevue',
        'completude',
        'inscription_active',
        'courriel_diaspora',
        'intitule_projet',
        'lieu_intervention',
        'thematique_projet',
        'autres_partenaires',
        'duree_totale',
        'cout_total',
        'participation_ayenah',
        'fichier_presentation',
        'photo_logo',
    ];

    protected $casts = [
        'date_debut'         => 'date',
        'date_fin_prevue'    => 'date',
        'inscription_active' => 'boolean',
        'completude'         => 'integer',
    ];

    public static array $statutLabels = [
        'en_preparation' => 'En préparation',
        'en_cours'       => 'En cours',
        'suspendu'       => 'Suspendu',
        'termine'        => 'Terminé',
        'annule'         => 'Annulé',
    ];
}
