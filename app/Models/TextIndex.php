<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextIndex extends Model
{
    use HasFactory;
   protected $guarded = [];

    public $fillable = ['propos_desc', 'propos_quand', 'propos_pourquoi', 'propos_fait'];
}
