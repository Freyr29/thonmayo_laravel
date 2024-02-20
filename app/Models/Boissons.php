<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Boissons extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_boisson',
        'nom_boisson',
        'prix',
        'image_url',
        'type',
        'taille_cl'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'id_boisson' => 'integer',
        'prix' => 'integer'
        'image_url' => 'string'
        'type' => 'string'
        'taille_cl' => 'integer'
    ];
}
