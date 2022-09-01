<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roses extends Model
{
    use HasFactory;
    protected $guarded = [];

    public $fillable = ['name', 'description', 'marque', 'denomination', 'edition', 'type', 'gamme', 'forme', 'couleur', 'largeur_diam', 'nb_petales', 'parfum', 'port', 'vegetation', 'hauteur_cm', 'largeur_cm', 'feuillage', 'maladies', 'inflorescence', 'floraison', 'recompenses', 'roseimg', 'prix'];

}
