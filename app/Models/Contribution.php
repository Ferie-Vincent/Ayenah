<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contribution extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'lastname',
        'firstname',
        'email',
        'phone',
        'profession',
        'location',
        'amount',
        'projet_id',
        'message',
    ];

    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }
}
