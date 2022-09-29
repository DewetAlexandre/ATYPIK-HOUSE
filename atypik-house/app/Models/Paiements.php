<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiements extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'reservation_id',
        'type_paiement_id',
        'montant',
        'titulaire'
    ];
}
