<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'logement_id',
        'user_id',
        'date_entree',
        'date_sortie',
        'flexible',
        'prix_total',
        'personnes_loge'
    ];
}
