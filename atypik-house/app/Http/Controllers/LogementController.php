<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logement;
use App\Models\Avis;
use App\Models\Conciergerie;
use App\Models\Restauration;
use App\Http\Controllers\HomeController;
use App\Models\Reservation;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class LogementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logements = Logement::all();
        $notes = Avis::all();
        return view('logements',[
            "logements"=> $logements,
            'notes'=> $notes
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexBoutique()
    {
        $logements = Logement::all();
        $notes = Avis::all();
        return view('boutique',[
            "logements"=> $logements,
            'notes'=> $notes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Url::create($request->all());        
        return redirect('/'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $logement = Logement::findOrFail($id);
        $restaurations = Restauration::all();
        $conciergeries = Conciergerie::all();
        $reservations = Reservation::all();
        $reservation = $reservations->where('user_id' ,'=', auth()->id())->where('logement_id' ,'=', $id)->where('date_sortie' ,'<', date('Y-m-d'));

        return view('detail_logement', [
            'logement' => $logement,
            'restaurations' => $restaurations,
            'conciergeries' => $conciergeries,
            'reservation' => $reservation
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Logement $logement)
    {
        return view('edit',['logement' => $logement]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $u = Url::find($request->id);
        $u->update($request->all());
        return redirect('/show/'.$request->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logement $logement)
    {
        $logement->delete();
        return redirect ("/");
    }

    /**
     * Search function of the Homepage
     * 
     */
    public function search()
    {
        $destination = request()->input('destination');
        $nombreVacanciers = request()->input('nombre-vacanciers');
        $dateDebut = request()->input('date-debut');
        $dateFin = request()->input('date-fin');
        $notes = Avis::all();
        
        $destination = request()->input('destination');
        $nombreVacanciers = request()->input('nombre-vacanciers');
        $dateDebut = request()->input('date-debut');
        $dateFin = request()->input('date-fin');
        $notes = Avis::all();

        if($nombreVacanciers == null && $destination == null){
            $logements = Logement::all();
        }else{
            if($nombreVacanciers == null){
                $logements = Logement::where(function($query) {
                    $destination = request()->input('destination');
                    $query->where('ville', 'like', "%$destination%")
                    ->orWhere('code_postal', 'like', "%$destination%")
                    ->orWhere('pays', 'like', "%$destination%")
                    ->orWhere('nom', 'like', "%$destination%");})
                ->get();
            }
            elseif($destination == null){
                    $logements = Logement::where('capacite','>=', "$nombreVacanciers")
                    ->get();
            }else{
                $logements = Logement::where('capacite','>=', "$nombreVacanciers")
                ->where(function($query) {
                    $destination = request()->input('destination');
                    $query->where('ville', 'like', "%$destination%")
                    ->orWhere('code_postal', 'like', "%$destination%")
                    ->orWhere('pays', 'like', "%$destination%")
                    ->orWhere('nom', 'like', "%$destination%");})
                ->get();
            }
        }
           
        
        
        return view('resultat_recherche', [
            'logements' => $logements,
            'destination' => $destination,
            'nombreVacanciers' => $nombreVacanciers,
            'dateDebut' => $dateDebut,
            'dateFin' => $dateFin,
            'notes' => $notes,
        ]);
        
    }

    public function avis($id)
    {
        $logement = Logement::findOrFail($id);
        return view('donner_avis', [
            'logement' => $logement
        ]);
    }

    public function confirmAvis(Request $request, $pId)
    {
        $request->validate([
            'avis' => 'required|min:5|max:255'
        ]);
        Avis::create([
            'user_id' => auth()->id(),
            'logement_id' => $pId,
            'note' => $request->input('note'),
            'text' => $request->input('avis')
        ]);
        return view('avis_confirmation');
    }


}
