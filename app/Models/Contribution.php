<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    use HasFactory;

    protected $fillable = [
        'lastname',
        'firstname',
        'email',
        'phone',
        'profession',
        'location',
        'amount',
        'projet_id',
        'message'
    ];
}
