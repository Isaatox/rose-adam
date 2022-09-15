<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roses extends Model
{
    use HasFactory;
    protected $guarded = [];

    public $fillable = ['name', 'description', 'denomination', 'categorie', 'recompenses', 'parfume', 'tige', 'roseimg', 'prix'];

}
