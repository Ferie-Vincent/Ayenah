<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enregistrement extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'lastname',
        'firstname',
        'email',
        'phone',
        'profession',
        'location',
        'project_name',
        'amount',
        'thematique',
        'volet',
        'message',
        'validation_token',
        'validated_at',
        'validation_sent_at',
    ];

    protected $casts = [
        'amount'             => 'decimal:2',
        'validated_at'       => 'datetime',
        'validation_sent_at' => 'datetime',
    ];

    public function isValidated(): bool
    {
        return $this->validated_at !== null;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'email', 'email');
    }
}
