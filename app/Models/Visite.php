<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Visite extends Model
{
    use SoftDeletes;

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
