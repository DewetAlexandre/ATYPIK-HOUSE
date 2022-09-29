<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logement;
use App\Models\Avis;
use App\Models\Categorie_logement;

class Categorie_logementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie_logement::all();
        return view('categories', [
            'categories' => $categories
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $logements = Logement::where('categorie_id', $id)->get();
        $notes = Avis::all();
        $categorieId = $id;
        return view('logement_par_categorie',[
            'logements' => $logements,
            'notes' => $notes,
            'categorieId' => $categorieId
        ]);
    }

    public function search($id)
    {
        $destination = request()->input('destination');
        $nombreVacanciers = request()->input('nombre-vacanciers');
        $dateDebut = request()->input('date-debut');
        $dateFin = request()->input('date-fin');
        $notes = Avis::all();
        $categorieId = $id;

        if($nombreVacanciers == null && $destination == null){
            $logements = Logement::where('categorie_id', $id)
                            ->get();
        }else{
            if($nombreVacanciers == null){
                $logements = Logement::where('categorie_id', $id)
                ->where(function($query) {
                    $destination = request()->input('destination');
                    $query->where('ville', 'like', "%$destination%")
                    ->orWhere('code_postal', 'like', "%$destination%")
                    ->orWhere('pays', 'like', "%$destination%")
                    ->orWhere('nom', 'like', "%$destination%");})
                ->get();
            }
            elseif($destination == null){
                    $logements = Logement::where('categorie_id', $id)
                    ->where('capacite','>=', "$nombreVacanciers")
                    ->get();
            }else{
                $logements = Logement::where('categorie_id', $id)
                ->where('capacite','>=', "$nombreVacanciers")
                ->where(function($query) {
                    $destination = request()->input('destination');
                    $query->where('ville', 'like', "%$destination%")
                    ->orWhere('code_postal', 'like', "%$destination%")
                    ->orWhere('pays', 'like', "%$destination%")
                    ->orWhere('nom', 'like', "%$destination%");})
                ->get();
            }
        }
            
        
        
        
        
        return view('categorie_recherche', [
            'logements' => $logements,
            'destination' => $destination,
            'nombreVacanciers' => $nombreVacanciers,
            'dateDebut' => $dateDebut,
            'dateFin' => $dateFin,
            'notes' => $notes,
            'categorieId' => $categorieId
        ]);

    }

}
