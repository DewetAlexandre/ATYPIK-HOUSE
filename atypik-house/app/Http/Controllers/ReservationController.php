<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logement;
use App\Models\Reservation;
use App\Models\Avis;
use App\Models\User;
use App\Models\Conciergerie;
use App\Models\Paiements;
use App\Models\Restauration;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\Types\Null_;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createFlexible(Request $request, $id)
    {
        $logement = Logement::findOrFail($id);
        $notes = Avis::all();
        $restaurations = Restauration::all();
        $conciergeries = Conciergerie::all();

        return view('panier2', [
            'logement' => $logement,
            'notes' => $notes,
            'restaurations' => $restaurations,
            'conciergeries' => $conciergeries
        ]);
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNotFlexible(Request $request, $id)
    {
        $logement = Logement::findOrFail($id);
        $notes = Avis::all();
        $restaurations = Restauration::all();
        $conciergeries = Conciergerie::all();

        return view('panier2', [
            'logement' => $logement,
            'notes' => $notes,
            'restaurations' => $restaurations,
            'conciergeries' => $conciergeries
        ]);
    }

            /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function panierOneToPanierTwo(Request $request, $id)
    {
        $request->session()->put('dateA',$request->input('start'));
        $request->session()->put('dateD',$request->input('end'));
        $request->session()->put('nbrVac',$request->input('vac'));
        $request->session()->put('nuitée',$request->input('nuit'));
        $request->session()->put('flexibility',$request->input('flexibility'));

        if($request->input('flexibility') == 'no'){
            $request->session()->put('prixTotal',$request->input('prixTotalNF'));
        } else if($request->input('flexibility') == 'yes'){
            $request->session()->put('prixTotal',$request->input('prixTotalF'));
        }
        
        $logement = Logement::findOrFail($id);
        $notes = Avis::all();
        $restaurations = Restauration::all();
        $conciergeries = Conciergerie::all();

        return view('panier2', [
            'logement' => $logement,
            'notes' => $notes,
            'restaurations' => $restaurations,
            'conciergeries' => $conciergeries
        ]);
    }
                /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function panierThreeToPanierFour(Request $request, $id)
    {
        $request->validate([
            'phone' => 'required|size:10',
            'adresse' => ['required','min:5','regex:((?=.*\d)(?=.*[A-Z])(?=.*[a-z]))'],
            'CP' => ['required','size:5'],
            'ville' => ['required','regex:/^[a-zA-Z ]+$/'],
            'pays' => ['required','regex:/^[a-zA-Z ]+$/'],
        ]);
        $request->session()->put('phone',$request->input('phone'));
        $request->session()->put('adresse',$request->input('adresse'));
        $request->session()->put('CP',$request->input('CP'));
        $request->session()->put('ville',$request->input('ville'));
        $request->session()->put('pays',$request->input('pays'));

        $idUser = auth()->id();

        $user = User::findOrFail($idUser);
        $logement = Logement::findOrFail($id);
        $note = Avis::all();
        return view('panier4', [
            'logement' => $logement,
            'user' => $user,
            'note' => $note
        ]);
    }
                /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function panierFourToPanierFive(Request $request, $id)
    {
        $request->validate([
            'titulaire' => 'required',
            'number' => ['required','size:16'],
            'crypto' => ['required','size:3']
        ]);
        $request->session()->put('MDP',$request->input('MDP'));
        $request->session()->put('titulaire',$request->input('titulaire'));
        $request->session()->put('number',$request->input('number'));
        $request->session()->put('crypto',$request->input('crypto'));


        $idUser = auth()->id();
        $user = User::findOrFail($idUser);
        $this->updateUser($user);

        $logement = Logement::findOrFail($id);
        $reservationId = $this->createReservation($id, $idUser);

        $moyen = session('MDP');
        $this->createPaiement($moyen,$idUser,$reservationId);

        ///reservation
        $this->createService($reservationId);
        $note = Avis::all();
        return view('panier5', [
            'logement' => $logement,
            'user' => $user,
            'note' => $note
        ]);
    }

                        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createService($pReservationId)
    {
        $max = Restauration::all();
        for ($i=0; $i <= count($max); $i++) { 
            if(session()->has('Restau_'.$i.'_id')){
                Service::create([
                    'reservation_id' => $pReservationId,
                    'restauration_id' => session('Restau_'.$i.'_id'),
                    'conciergerie_id' => NULL,
                    'type_service_id' => 2,
                    'personnes_restau' => session('Restau_'.$i.'_personnes')
                ]);
            } else {
                $i = $i + count($max);
            }
        }
        for ($i=0; $i <= count($max); $i++) { 
            if(session()->has('Conc_'.$i.'_id')){
                Service::create([
                    'reservation_id' => $pReservationId,
                    'restauration_id' => NULL,
                    'conciergerie_id' => session('Conc_'.$i.'_id'),
                    'type_service_id' => 1,
                    'personnes_restau' => NULL
                ]);
            } else {
                $i = $i + count($max);
            }
        }
    }

                    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateUser($pUser)
    {
        $pUser->telephone = session('phone');
        $pUser->adresse = session('adresse');
        $pUser->code_postal = session('CP');
        $pUser->ville = session('ville');
        $pUser->pays = session('pays');
        $pUser->update();
    }

                        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createReservation($pLogementId,$pUserId)
    {
        if(session('flexibility') == 'no'){
            Reservation::create([
                'logement_id' => $pLogementId,
                'user_id' => $pUserId,
                'date_entree' => session('dateA'),
                'date_sortie' => session('dateD'),
                'flexible' => 0,
                'prix_total' => session('prixTotal'),
                'personnes_loge' => session('nbrVac'),
            ]);
        } elseif(session('flexibility') == 'yes'){
            Reservation::create([
                'logement_id' => $pLogementId,
                'user_id' => $pUserId,
                'date_entree' => session('dateA'),
                'date_sortie' => session('dateD'),
                'flexible' => 1,
                'prix_total' => session('prixTotal'),
                'personnes_loge' => session('nbrVac'),
            ]);
        }

        return DB::table('reservations')->where('user_id',auth()->id())->latest()->value('id');
    }

                        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPaiement($pMoyen,$pUser,$pReservation)
    {
        if($pMoyen == 'visa'){
            Paiements::create([
                'user_id' => $pUser,
                'reservation_id' =>$pReservation,
                'type_paiement_id' => 1,
                'montant' =>session('prixTotal'),
                'titulaire' =>session('titulaire'),
            ]);
        }elseif($pMoyen == 'master card'){
            Paiements::create([
                'user_id' => $pUser,
                'reservation_id' => $pReservation,
                'type_paiement_id' => 2,
                'montant' =>session('prixTotal'),
                'titulaire' =>session('titulaire'),
            ]);            
        }elseif($pMoyen == 'american express'){
            Paiements::create([
                'user_id' => $pUser,
                'reservation_id' => $pReservation,
                'type_paiement_id' => 3,
                'montant' =>session('prixTotal'),
                'titulaire' =>session('titulaire'),
            ]);
        }
    }



                    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function toPanierOne()
    {

        $id = session('panier');
        $logement = Logement::findOrFail($id);
        $notes = Avis::all();

        return view('panier', [
            'logement' => $logement,
            'notes' => $notes
        ]);
    }

                        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addToPanier($id)
    {
        session()->put('panier',$id);
        $logement = Logement::findOrFail($id);
        $notes = Avis::all();
        $restaurations = Restauration::all();
        $conciergeries = Conciergerie::all();

        return view('panier', [
            'logement' => $logement,
            'notes' => $notes,
            'restaurations' => $restaurations,
            'conciergeries' => $conciergeries
        ]);
    }


                        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function forgetPanier(Request $request)
    {
        $request->session()->forget('panier');

        $logements = Logement::all();
        $notes = Avis::all();
        return view('logements',[
            "logements"=> $logements,
            'notes'=> $notes
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showPanierUn($id)
    {
        $logement = Logement::findOrFail($id);
        return view('panier', [
            'logement' => $logement
        ]);
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showPanierDeux($id)
    {
        $logement = Logement::findOrFail($id);
        
        return view('panier2', [
            'logement' => $logement
        ]);
    }

    public function showPanierQuatre($id){
        $logement = Logement::findOrFail($id);
        $reservation = Reservation::findOrFail($id);
        return view('panier4', [
        'logement' => $logement,
        'reservation' => $reservation]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function panierTwoToPanierThree(Request $request, $id)
    {
        $logement = Logement::findOrFail($id);
        $request->session()->forget('prixTotal');
        $request->session()->put('prixTotal',$request->input('prixTotalUpdate'));
        $idUser = auth()->id();
        $num = 0;
        
        $restaurations = Restauration::all();
        $restau = $restaurations->where('logement_id', $logement->id);
        foreach ($restau as $rest){
            $nomSession = "Restau_".$num."_personnes";
            $getNom = $num.'_restau';
            $request->session()->put($nomSession,$request->input($getNom));
            $num = $num+1;
        }
        $num = 0;
        foreach ($restau as $rest){
            $nomSession = "Restau_".$num."_id";
            $getNom = $num.'_restau_id';
            $request->session()->put($nomSession,$request->input($getNom));
            $num = $num+1;
        }
        $num = 0;

        $conciergeries = Conciergerie::all();
        $concs = $conciergeries->where('logement_id', $logement->id);
        foreach ($concs as $conc){
            $nomSession = "Conc_".$num."_id";
            $getNom = $num.'_conc_id';
            $request->session()->put($nomSession,$request->input($getNom));
            $num = $num+1;
        }
        


        
        $user = User::findOrFail($idUser);
        
        $notes = Avis::all();
        return view('panier3-imen', [
            'logement' => $logement,
            'user' => $user,
            'notes' => $notes
        ]);
    }




}
