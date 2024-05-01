<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Menus extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_menu',
        'nom_menu',
        'id_sandwich',
        'id_boisson',
        'id_snack',
        'image_url',
        'prix',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'id_menu' => 'integer',
        'nom_menu' => 'string',
        'id_sandwich' => 'integer',
        'id_boisson' => 'integer',
        'id_snack' => 'integer',
        'image_url' => 'string',
        'prix' => 'integer'
    ];

    public $timestamps = false;

    protected $table = "menus";
}
