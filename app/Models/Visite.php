<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visite extends Model
{
    protected $fillable = [
        'title',
        'region',
        'dateVisited',
        'description',
        'cover_image',
        'image1',
        'image2',
        'image3',
        'image4'
    ];
}
