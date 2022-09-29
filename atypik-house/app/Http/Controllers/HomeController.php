<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use Illuminate\Http\Request;
use App\Models\Categorie_logement;
use App\Models\User;

class HomeController extends Controller
{
    public function __invoke()
    {
        $categories = Categorie_logement::all();
        $user = User::all();
        $best4Avis = Avis::where('note','>','3')->orderBy('note','desc')->limit(4)->get();
        return view('accueil',[
            'categories' => $categories,
            'user' => $user,
            'best4Avis' => $best4Avis
        ]);
    }
}
