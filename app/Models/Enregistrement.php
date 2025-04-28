<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enregistrement extends Model
{
    use HasFactory;

    /**
     * Les champs qui peuvent être remplis massivement
     *
     * @var array
     */
    protected $fillable = [
        'lastname',
        'firstname',
        'email',
        'phone',
        'profession',  // Note: doit correspondre exactement au name="profession" du formulaire
        'location',
        'project_name',
        'amount',
        'thematique',
        'message'
    ];

    /**
     * Les conversions de type
     *
     * @var array
     */
    protected $casts = [
        'amount' => 'decimal:2',  // Pour s'assurer que le montant est bien un décimal
    ];
}