<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use App\Models\Avis;
use App\Models\Logement;
use App\Models\Categorie_logement;
use App\Models\Restauration;
use App\Models\Conciergerie;
use App\Models\Service;
use App\Models\Types_service;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfil()
    {
        $idUser = auth()->id();
        $user = User::findOrFail($idUser);
        $users = User::all();
        $notes = Avis::all();
        $reservations = Reservation::all();
        $conciergeries = Conciergerie::all();
        $restaurations = Restauration::all();
        $logements = Logement::all();
        $services = Service::all();
        $types_services = Types_service::all();
        $categorie_logements = Categorie_logement::all();

        switch($user->role){
            case 'c':
                return view('profils/client', [
                    'users' => $users,
                    'user' => $user,
                    'notes' => $notes,
                    'logements' => $logements,
                    'reservations' => $reservations,
                    'conciergeries' => $conciergeries,
                    'restaurations' => $restaurations,
                    'services' => $services,
                    'types_services' => $types_services
                ]);
                break;
            
            case 'h':
                return view('profils/hebergeur', [
                    'users' => $users,
                    'user' => $user,
                    'logements' => $logements,
                    'notes' => $notes,
                    'reservations' => $reservations,
                    'conciergeries' => $conciergeries,
                    'restaurations' => $restaurations,
                    'services' => $services,
                    'types_services' => $types_services
                ]);
                break;
            case 'a':
                return view('profils/admin', [
                    'users' => $users,
                    'user' => $user,
                    'logements' => $logements,
                    'notes' => $notes,
                    'reservations' => $reservations,
                    'conciergeries' => $conciergeries,
                    'restaurations' => $restaurations,
                    'services' => $services,
                    'types_services' => $types_services,
                    'categorie_logements' => $categorie_logements
                ]);
                break;
        }

        
        
    }

    public function showProfilUpdate(Request $request){
        $idUser = auth()->id();
        $user = User::findOrFail($idUser);
        $notes = Avis::all();
        $reservations = Reservation::all();
        $conciergeries = Conciergerie::all();
        $restaurations = Restauration::all();
        $logements = Logement::all();
        $services = Service::all();
        $types_services = types_service::all();
        $users = User::all();

        $request->session()->put('nomUser', $request->input('nom'));
        $request->session()->put('prenomUser', $request->input('prenom'));
        $request->session()->put('telephoneUser', $request->input('telephone'));
        $request->session()->put('emailUser', $request->input('email'));
        $request->session()->put('adresseUser', $request->input('adresse'));
        $request->session()->put('code_postalUser', $request->input('code_postal'));
        $request->session()->put('villeUser', $request->input('ville'));
        $request->session()->put('paysUser', $request->input('pays'));

        $this->updateUser($user);

        switch($user->role){
            case 'c':
                return view('profils/client', [
                    'users' => $users,
                    'user' => $user,
                    'notes' => $notes,
                    'logements' => $logements,
                    'reservations' => $reservations,
                    'conciergeries' => $conciergeries,
                    'restaurations' => $restaurations,
                    'services' => $services,
                    'types_services' => $types_services
                ]);
                break;
            
            case 'h':
                return view('profils/hebergeur', [
                    'users' => $users,
                    'user' => $user,
                    'logements' => $logements,
                    'notes' => $notes,
                    'reservations' => $reservations,
                    'conciergeries' => $conciergeries,
                    'restaurations' => $restaurations,
                    'services' => $services,
                    'types_services' => $types_services
                ]);
                break;
            
        }
        
        
        
    }


    public function updateUser($pUser)
    {
        $pUser->nom = session('nomUser');
        $pUser->prenom = session('prenomUser');
        $pUser->telephone = session('telephoneUser');
        $pUser->email = session('emailUser');
        $pUser->adresse = session('adresseUser');
        $pUser->code_postal = session('code_postalUser');
        $pUser->ville = session('villeUser');
        $pUser->pays = session('paysUser');
        if(!empty(session('roleUser'))){
            $pUser->role = session('roleUser');
        }
        $pUser->update();
    }


    public function updateLogement($pLogement){
        $pLogement->nom = session('nomLogement');
        $pLogement->image = session('imageLogement');
        $pLogement->categorie_id = session('categorie_idLogement');
        $pLogement->user_id = session('hebergeur_idLogement');
        $pLogement->capacite = session('capaciteLogement');
        $pLogement->particularite = session('particulariteLogement');
        $pLogement->superficie = session('superficieLogement');
        $pLogement->prix_jour = session('prix_jourLogement');
        $pLogement->adresse = session('adresseLogement');
        $pLogement->code_postal = session('code_postalLogement');
        $pLogement->ville = session('villeLogement');
        $pLogement->pays = session('paysLogement');
        
        $pLogement->update();
    }
    


    public function showAdminUpdateUser($id){
        $user = User::findOrFail($id);
        $logements = Logement::All();
        $restaurations = Restauration::all();
        $conciergeries = Conciergerie::all();
        $services = Service::all();
        return view('profils/modifierUser', [
            'user' => $user,
            'logements' => $logements,
            'conciergeries' => $conciergeries,
            'restaurations' => $restaurations,
            'services' => $services
    ]);
    }

    public function adminUpdateUser(Request $request, $id){
        $user = User::findOrFail($id);
        $logements = Logement::All();
        $restaurations = Restauration::all();
        $conciergeries = Conciergerie::all();
        $services = Service::all();

        $request->session()->put('nomUser', $request->input('nom'));
        $request->session()->put('prenomUser', $request->input('prenom'));
        $request->session()->put('telephoneUser', $request->input('telephone'));
        $request->session()->put('emailUser', $request->input('email'));
        $request->session()->put('adresseUser', $request->input('adresse'));
        $request->session()->put('code_postalUser', $request->input('code_postal'));
        $request->session()->put('villeUser', $request->input('ville'));
        $request->session()->put('paysUser', $request->input('pays'));
        $request->session()->put('roleUser', $request->input('role'));

        $this->updateUser($user);

        return view('profils/modifierUser', [
            
                'user' => $user,
                'logements' => $logements,
                'conciergeries' => $conciergeries,
                'restaurations' => $restaurations,
                'services' => $services
        ]);
    }

    public function showAdminUpdateLogement($id){
        $logement = Logement::findOrFail($id);
        $restaurations = Restauration::all();
        $conciergeries = Conciergerie::all();
        $services = Service::all();
        $notes = Avis::all();
        $users = User::all();

        return view('profils/modifierLogement', [
                'users' => $users,
                'notes' => $notes,
                'logement' => $logement,
                'conciergeries' => $conciergeries,
                'restaurations' => $restaurations,
                'services' => $services
        ]);
    }


    public function adminUpdateLogement(Request $request, $id){
        $logement = Logement::findOrFail($id);
        $restaurations = Restauration::all();
        $conciergeries = Conciergerie::all();
        $services = Service::all();
        $notes = Avis::all();
        $users = User::all();

        $request->session()->put('nomLogement', $request->input('nomLogement'));
        $request->session()->put('imageLogement', $request->input('imageLogement'));
        $request->session()->put('categorie_idLogement', $request->input('categorie_idLogement'));
        $request->session()->put('hebergeur_idLogement', $request->input('hebergeur_idLogement'));
        $request->session()->put('capaciteLogement', $request->input('capaciteLogement'));
        $request->session()->put('particulariteLogement', $request->input('particulariteLogement'));
        $request->session()->put('superficieLogement', $request->input('superficieLogement'));
        $request->session()->put('prix_jourLogement', $request->input('prix_jourLogement'));
        $request->session()->put('adresseLogement', $request->input('adresseLogement'));
        $request->session()->put('code_postalLogement', $request->input('code_postalLogement'));
        $request->session()->put('villeLogement', $request->input('villeLogement'));
        $request->session()->put('paysLogement', $request->input('paysLogement'));

        $this->updateLogement($logement);

        return view('profils/modifierLogement', [
                'users' => $users,
                'notes' => $notes,
                'logement' => $logement,
                'conciergeries' => $conciergeries,
                'restaurations' => $restaurations,
                'services' => $services
        ]);
    }

    public function deleteProfil($id){

        $logement = Logement::findOrFail($id);
        $restaurations = Restauration::where('logement_id',$id);
        $conciergeries = Conciergerie::where('logement_id',$id);

        $restaurations->delete();
        $conciergeries->delete();
        $logement->delete();



        $idUser = auth()->id();
        $user = User::findOrFail($idUser);
        $users = User::all();
        $notes = Avis::all();
        $reservations = Reservation::all();
        $conciergeries = Conciergerie::all();
        $restaurations = Restauration::all();
        $logements = Logement::all();
        $services = Service::all();
        $types_services = Types_service::all();
        $categorie_logements = Categorie_logement::all();

        return view('profils/admin', [
            'users' => $users,
            'user' => $user,
            'logements' => $logements,
            'notes' => $notes,
            'reservations' => $reservations,
            'conciergeries' => $conciergeries,
            'restaurations' => $restaurations,
            'services' => $services,
            'types_services' => $types_services,
            'categorie_logements' => $categorie_logements
        ]);
    }

    public function addLogement(){

        $categorie_logements = Categorie_logement::all();
        $users = User::all();
        $hebergeurs = $users->where('role','h');
        return view('profils/addLogement',[
            'categories' => $categorie_logements,
            'hebergeurs' => $hebergeurs
        ]);
    }

    public function addProfil(Request $request){
        $request->validate([
            'nomLogement' => 'required|max:255',
            'categorie_idLogement' => 'required|numeric|max:99999999999',
            'hebergeur_idLogement' => 'required|numeric|max:99999999999',
            'capaciteLogement' => 'required|numeric|max:99',
            'particulariteLogement' => 'required|max:255',
            'superficieLogement' => 'required|numeric|max:99999999999',
            'prix_jourLogement' => 'required|numeric',
            'adresseLogement' => 'required|max:255',
            'code_postalLogement' => 'required|numeric',
            'villeLogement' => 'required|max:255',
            'paysLogement' => 'required|max:255',
        ]);
        
        Logement::create([
            'categorie_id' => $request->input('categorie_idLogement'),
            'user_id' => $request->input('hebergeur_idLogement'),
            'nom' => $request->input('nomLogement'),
            'image' => '/img/logements/yourtenature.jpg',
            'capacite' => $request->input('capaciteLogement'),
            'adresse' => $request->input('adresseLogement'),
            'particularite' => $request->input('particulariteLogement'),
            'superficie' => $request->input('superficieLogement'),
            'prix_jour' => $request->input('prix_jourLogement'),
            'ville' => $request->input('villeLogement'),
            'code_postal' => $request->input('code_postalLogement'),
            'pays' => $request->input('paysLogement'),
        ]);
        




        $idUser = auth()->id();
        $user = User::findOrFail($idUser);
        $users = User::all();
        $notes = Avis::all();
        $reservations = Reservation::all();
        $conciergeries = Conciergerie::all();
        $restaurations = Restauration::all();
        $logements = Logement::all();
        $services = Service::all();
        $types_services = Types_service::all();
        $categorie_logements = Categorie_logement::all();

        return view('profils/admin', [
            'users' => $users,
            'user' => $user,
            'logements' => $logements,
            'notes' => $notes,
            'reservations' => $reservations,
            'conciergeries' => $conciergeries,
            'restaurations' => $restaurations,
            'services' => $services,
            'types_services' => $types_services,
            'categorie_logements' => $categorie_logements
        ]);
    }

}


