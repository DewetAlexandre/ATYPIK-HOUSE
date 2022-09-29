<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//______ACCUEIL_______
Route::get('/', App\Http\Controllers\HomeController::class);

//________AUTH________
Route::get('/isauth', [App\Http\Controllers\CustomAuthController::class,'test']); // Route de test
Route::get('/auth', [App\Http\Controllers\CustomAuthController::class,'index']);
Route::post('/auth/inscription',[App\Http\Controllers\CustomAuthController::class,'customRegistration']);
Route::post('/auth/login',[App\Http\Controllers\CustomAuthController::class,'customLogin']);
Route::get('/auth/logout', [App\Http\Controllers\CustomAuthController::class,'signOut']);

Route::get('/profil', function (){

    return view('profil');
});

// ROUTES DES LOGEMENTS ET CATEGORIES
Route::get('/logements', [App\Http\Controllers\LogementController::class,'index']);
Route::get('/logements/{id}', [App\Http\Controllers\LogementController::class,'show']);
Route::get('/categories',[App\Http\Controllers\Categorie_logementController::class,'index']);
Route::get('/categories/{id}',[App\Http\Controllers\Categorie_logementController::class,'show']);
Route::get('/categories/{id}/recherche',[App\Http\Controllers\Categorie_logementController::class,'search']);
Route::get('/recherche', [App\Http\Controllers\LogementController::class,'search']);
Route::get('/avis/{id}', [App\Http\Controllers\LogementController::class,'avis']);
Route::get('/confirmAvis/{id}', [App\Http\Controllers\LogementController::class,'confirmAvis']);

//ROUTES POUR DEVENIR HOTE
Route::get('/devenir-hote', function () {
    return view('devenir_hote');
});

Route::get('/devenir-hote-valide', function () {
    return view('devenir_hote_confirmation');
});

Route::get('/add', function () {
    return view('ajout_hebergement');
}); // vue ajout hebergement non trouvée



// ROUTES DE CONTACT / FAQ / CONTACT / MENTION LEGALES
Route::get('/contact', function (){

    return view('contact');
});
Route::get('/contactConfirm', function (){

    return view('contact_confirmation');
});
Route::get('/faq', function (){

    return view('faq');
});
Route::get('/mentions-legales', function (){

    return view('mentionsLegales');
});
Route::get('/conditions-generales', function (){

    return view('cgvu');
});

Route::get('/politique-donnees-personnelles', function(){
    return view('pdp');

});

Route::get('/blog', function (){

    return view('blog');
});

Route::get('/panier2', function (){

    return view('panier2');
});

Route::get('/qui_sommes_nous', function(){

    return view('qui_sommes_nous');

});

Route::get('/recrutement', function(){

    return view('recrutement');
});

Route::get('/recrutementConfirm', function(){

    return view('recrutement_confirmation');
});

//ROUTES PANIERS

Route::get('/forgetPanier', [App\Http\Controllers\ReservationController::class,'forgetPanier']);
Route::get('/addPanier/{id}', [App\Http\Controllers\ReservationController::class,'addToPanier']);
Route::get('/toPanierOne', [App\Http\Controllers\ReservationController::class,'toPanierOne']);
Route::get('/panier/{id}', [App\Http\Controllers\ReservationController::class,'showPanierUn']);
Route::get('/panier2/{id}', [App\Http\Controllers\ReservationController::class,'panierOneToPanierTwo']);
Route::get('/panier', function(){
    return view('panier');
});

Route::get('/panier3-imen/{id}', [App\Http\Controllers\ReservationController::class,'panierTwoToPanierThree']);
Route::get('/panier3', function(){
    return view('panier3-imen');
});
Route::get('/panier4/{id}', [App\Http\Controllers\ReservationController::class,'panierThreeToPanierFour']);
Route::get('/panier4', function(){
    return view('panier4');
});
Route::get('/panier5/{id}', [App\Http\Controllers\ReservationController::class,'panierFourToPanierFive']);
Route::get('/panier5', function (){

    return view('panier5');
});


////////////// FORGET MDP ////////////////

Route::get('/auth/forgetMdp', [App\Http\Controllers\CustomAuthController::class,'indexForgetMdp']);
Route::get('/auth/newMdp', [App\Http\Controllers\CustomAuthController::class,'indexNewMdp']);
Route::get('/auth/changeMdp/{id}', [App\Http\Controllers\CustomAuthController::class,'changeMdp']);


// ROUTES PROFILS
Route::get('/profil', [App\Http\Controllers\UserController::class,'showProfil']);
Route::get('/profil_', [App\Http\Controllers\UserController::class,'showProfilUpdate']);
Route::get('/deleteProfil/{id}', [App\Http\Controllers\UserController::class,'deleteProfil']);
Route::get('/addLogement', [App\Http\Controllers\UserController::class,'addLogement']);
Route::get('/addProfil', [App\Http\Controllers\UserController::class,'addProfil']);
Route::get('/profil/modifierUser/{id}', [App\Http\Controllers\UserController::class,'showAdminUpdateUser']);
Route::get('/profil/modifierUser_/{id}', [App\Http\Controllers\UserController::class,'adminUpdateUser']);
Route::get('/profil/modifierLogement/{id}', [App\Http\Controllers\UserController::class,'showAdminUpdateLogement']);
Route::get('/profil/modifierLogement_/{id}', [App\Http\Controllers\UserController::class,'adminUpdateLogement']);