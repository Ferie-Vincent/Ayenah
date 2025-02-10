<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = [
        'structure_porteuse',
        'interlocuteur_local',
        'telephone_local',
        'courriel_local',
        'partenaire_diaspora',
        'interlocuteur_diaspora',
        'telephone_diaspora',
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
}
