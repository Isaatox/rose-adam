<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageAccueil extends Model
{
    use HasFactory;
    
   protected $guarded = [];

   public $fillable = ['image_1', 'image_2', 'image_3'];
}
