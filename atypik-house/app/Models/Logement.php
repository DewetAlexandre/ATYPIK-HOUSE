<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logement extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'categorie_id',
        'user_id',
        'nom',
        'image',
        'capacite',
        'adresse',
        'particularite',
        'superficie',
        'prix_jour',
        'ville',
        'code_postal',
        'pays'
    ];
}
