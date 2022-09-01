<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruitiers extends Model
{
    use HasFactory;
    protected $guarded = [];

    public $fillable = ['variete', 'description', 'recompenses', 'fruitierimg', 'prix', 'rendement', 'sucre', 'acidite', 'parfum', 'hauteur_cm', 'largeur_cm', 'maladies', 'couleur'];
}
