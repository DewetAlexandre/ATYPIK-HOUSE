<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie_logement extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nom', 'image'];
}
