@extends('base.base')
@section('content')

<p class="text-center text-2xl mt-12">Bienvenue dans votre espace personel</p>
<section class="flex mb-40">
    <!-- Boutons -->
    <fieldset id="bouttons" class="flex flex-col w-36 ml-12 mt-12 space-y-8">
        <div id="bgButton1" class="h-40 rounded-xl bg-dark-green-atypik border-2">
            <label style="cursor: pointer;" class=" w-full h-full items-center">
                <div class="">
                    <input id="button1" type="radio" value="1" name="button" class="" checked style="position:absolute; opacity: 0;" onclick="buttonsMenu()">
                    <i id="faRadio1" class="fa-solid fa-user mt-4 w-full h-20 text-light-grey1-atypik"></i>
                    <p id="textRadio1" name="textRadio1" class="text-center text-light-grey1-atypik">Informations</p>
                    <p id="textRadio1" name="textRadio1" class="text-center text-light-grey1-atypik">Personnelles</p>
                </div>
            </label>
        </div>
        <div id="bgButton2" class="h-40 rounded-xl bg-light-grey3-atypik border-2">
            <label style="cursor: pointer;" class=" w-full h-full items-center">
                <div class="">
                    <input id="button2" type="radio" value="2" name="button" class="" checked style="position:absolute; opacity: 0;" onclick="buttonsMenu()">
                    <i id="faRadio2" class="fa-solid fa-user mt-4 w-full h-20 text-dark-grey-atypik mt-4"></i>
                    <p id="textRadio2" name="textRadio2" class="text-center text-dark-grey-atypik">Mes</p>
                    <p id="textRadio2" name="textRadio2" class="text-center text-dark-grey-atypik">Logements</p>
                </div>
            </label>
        </div>
        <div id="bgButton3" class="h-40 rounded-xl  bg-light-grey3-atypik border-2">
            <label style="cursor: pointer;" class="rounded-xl w-full h-full">
                <div class="">
                    <input id="button3" type="radio" value="3" name="button" class="" style="position:absolute; opacity: 0;" onclick="buttonsMenu()">
                    <i id="faRadio3" class="fa-solid fa-calendar-days w-full mt-4 h-20 text-dark-grey-atypik"></i>
                    <p id="textRadio3" name="textRadio3" class="text-center text-dark-grey-atypik mt-2">Reservations</p>
                </div>
            </label>
        </div>
        <div id="bgButton4" class="h-40 rounded-xl  bg-light-grey3-atypik border-2">
            <label style="cursor: pointer;" class="rounded-xl w-full h-full">
                <div class="">
                    <input id="button4" type="radio" value="4" name="button" class="" style="position:absolute; opacity: 0;" onclick="buttonsMenu()">
                    <i id="faRadio4" class="fa-solid fa-gear w-full mt-4 h-20 text-dark-grey-atypik"></i>
                    <p id="textRadio4" name="textRadio4" class="text-center text-dark-grey-atypik">Gérer Mon</p>
                    <p id="textRadio4" name="textRadio4" class="text-center text-dark-grey-atypik">Compte</p>
                </div>
            </label>
        </div>
    </fieldset>
    <div class="ml-24 mt-8 w-4/5 h-auto border-2 border-dark-grey-atypik">
        <!-- Infos compte -->
        <form id="div1" class="grid grid-cols-2 place-items-center items-baseline mt-4 space-y-8">
            <div class="">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Nom</label>
                <input value="{{$user->nom}}" disabled='disabled' class="text-dark-grey-atypik text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text">
            </div>
            <div class="">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Prénom</label>
                <input value="{{$user->prenom}}" disabled='disabled' class="text-dark-grey-atypik text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text">
            </div>
            <div class="">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Téléphone</label>
                <input value="{{$user->telephone}}" disabled='disabled' class="text-dark-grey-atypik text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text">
            </div>
            <div class="">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">E-mail</label>
                <input value="{{$user->email}}" disabled='disabled' class="text-dark-grey-atypik text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text">
            </div>
            <div class="">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Numéro et Rue</label>
                <input value="{{$user->adresse}}" disabled='disabled' class="text-dark-grey-atypik text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text">
            </div>
            <div class="">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Code Postal</label>
                <input value="{{$user->code_postal}}" disabled='disabled' class="text-dark-grey-atypik text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text">
            </div>
            <div class="">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Ville</label>
                <input value="{{$user->ville}}" disabled='disabled' class="text-dark-grey-atypik text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text">
            </div>
            <div class="">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Pays</label>
                <input value="{{$user->pays}}" disabled='disabled' class="text-dark-grey-atypik text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text">
            </div>
        </form>

        <!-- Logements -->
        <div id="div2" class="hidden w-full space-y-8">
            @foreach ($logements as $logement)
            @if($logement->user_id == $user->id)
            <div class="flex border-2 border-black">
                <img src="{{$logement->image}}" alt="image du logement" class="object-fill h-60 w-60">
                <table class="w-full border-2">
                    <thead>
                        <tr>
                            <th colspan="6">{{$logement->nom}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-2 border-black text-center">Capacitée restante</td>
                            <td class="border-2 border-black text-center">Superficie</td>
                            <td class="border-2 border-black text-center">Adresse</td>
                            <td class="border-2 border-black text-center">Conciergeries</td>
                            <td class="border-2 border-black text-center">Restaurations</td>
                            <td class="border-2 border-black text-center">Prix par jour</td>
                        </tr>
                        <tr>
                            <td class="border-2 border-black text-center">{{$logement->capacite}}</td>
                            <td class="border-2 border-black text-center">{{$logement->superficie}}m²</td>
                            <td class="border-2 border-black text-center">{{$logement->adresse}}, {{$logement->ville}} {{$logement->code_postal}} {{$logement->pays}}</td>
                            <td class="border-2 border-black text-center">
                                @foreach($conciergeries as $conciergerie)
                                @if($conciergerie->logement_id == $logement->id)
                                <div>{{$conciergerie->posibilite_conc}} : {{$conciergerie->prix_jour_conc}}€/jour</div>
                                @endif
                                @endforeach
                            </td>
                            <td class="border-2 border-black text-center">
                                @foreach($restaurations as $restauration)
                                @if($restauration->logement_id == $logement->id)
                                <div>{{$restauration->posibilite_rest}} : {{$restauration->prix_personne_rest}}€/personne</div>
                                @endif
                                @endforeach
                            </td>
                            <td class="border-2 border-black text-center">{{$logement->prix_jour}}€</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            @endif
            @endforeach
        </div>
        <!-- Reservations -->
        <div id="div3" class="hidden">
            <!-- BoutonsNav -->
            <fieldset class="flex">
                <div id="bgButtonNav1" class="h-8 w-1/4  bg-dark-green-atypik">
                    <label style="cursor: pointer;" class="w-full h-full">
                        <div class="">
                            <input id="buttonNav1" name="buttonsNav" type="radio" value="1" checked class="" style="position:absolute; opacity: 0;" onclick="buttonsNav()">
                            <p id="textNav1" class="text-center text-light-grey1-atypik">Tous</p>
                        </div>
                    </label>
                </div>
                <div id="bgButtonNav2" class="h-8 w-1/4  bg-light-grey3-atypik border-2">
                    <label style="cursor: pointer;" class="w-full h-full">
                        <div class="">
                            <input id="" name="buttonsNav" type="radio" value="2" class="" style="position:absolute; opacity: 0;" onclick="buttonsNav()">
                            <p id="textNav2" class="text-center text-dark-grey-atypik">En cours</p>
                        </div>
                    </label>
                </div>
                <div id="bgButtonNav3" class="h-8 w-1/4 bg-light-grey3-atypik border-2">
                    <label style="cursor: pointer;" class="w-full h-full">
                        <div class="">
                            <input id="" name="buttonsNav" type="radio" value="3" class="" style="position:absolute; opacity: 0;" onclick="buttonsNav()">
                            <p id="textNav3" class="text-center text-dark-grey-atypik">A venirs</p>
                        </div>
                    </label>
                </div>
                <div id="bgButtonNav4" class="h-8 w-1/4  bg-light-grey3-atypik border-2">
                    <label style="cursor: pointer;" class="w-full h-full">
                        <div class="">
                            <input id="" name="buttonsNav" type="radio" value="4" class="" style="position:absolute; opacity: 0;" onclick="buttonsNav()">
                            <p id="textNav4" class="text-center text-dark-grey-atypik">Passées</p>
                        </div>
                    </label>
                </div>
            </fieldset>
            <!-- En cours -->
            <div id="divNav1" name="div">
                @foreach ($reservations as $reservation)
                @foreach ($logements as $logement)
                @if($reservation->logement_id == $logement->id && $logement->user_id == $user->id)
                @if($reservation->date_entree >= date('Y-m-d') && $reservation->date_sortie <= date('Y-m-d')) <div class="flex border-2 border-black mb-4">
                    <img src="{{$logement->where('id', $reservation->logement_id)->value('image')}}" alt="image du logement" class="object-fill h-60 w-auto">
                    <table class="w-3/4">
                        <thead>
                            <tr>
                                <th colspan="6">{{$logement->where('id', $reservation->logement_id)->value('nom')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-2 border-black text-center">Période :</td>
                                <td class="border-2 border-black text-center">Personnes</td>
                                <td class="border-2 border-black text-center">Conciergeries</td>
                                <td class="border-2 border-black text-center">Restaurations</td>
                                <td class="border-2 border-black text-center">Prix total</td>
                            </tr>
                            <tr>
                                <td class="border-2 border-black text-center">Du {{$reservation->date_entree}} au {{$reservation->date_sortie}}</td>
                                <td class="border-2 border-black text-center">{{$reservation->personnes_loge}}</td>
                                <td class="border-2 border-black text-center">
                                    @foreach($services as $service)
                                    @if($service->reservation_id == $reservation->id)
                                    @foreach($conciergeries as $conciergerie)
                                    @if($conciergerie->id == $service->conciergerie_id)
                                    <p>{{$conciergerie->posibilite_conc}}</p>
                                    @endif
                                    @endforeach
                                    @endif
                                    @endforeach
                                </td>
                                <td class="border-2 border-black text-center">
                                    @foreach($services as $service)
                                    @if($service->reservation_id == $reservation->id)
                                    @foreach($restaurations as $restauration)
                                    @if($restauration->id == $service->restauration_id)
                                    <p>{{$service->personnes_restau}} * {{$restauration->posibilite_rest}}</p>
                                    @endif
                                    @endforeach
                                    @endif
                                    @endforeach
                                </td>
                                <td class="border-2 border-black text-center">{{$reservation->prix_total}}</td>
                            </tr>
                        </tbody>
                    </table>
                    @foreach($users as $use) @endforeach
                    <div class="ml-2 mt-20">
                        <p class="underline font-bold">Informations client :</p>
                        <div>
                            <p>Nom: {{$use->where('id', $reservation->user_id)->value('nom')}}</p>
                            <p>Prenom: {{$use->where('id', $reservation->user_id)->value('prenom')}}</p>
                            <p>Email: {{$use->where('id', $reservation->user_id)->value('email')}}</p>
                            <p>Telephone: {{$use->where('id', $reservation->user_id)->value('telephone')}}</p>
                        </div>
                    </div>
            </div>
            @endif
            @endif
            @endforeach
            @endforeach
        </div>
        <!-- à venirs -->
        <div id="divNav2" name="div">
            @foreach ($reservations as $reservation)
            @foreach ($logements as $logement)
            @if($reservation->logement_id == $logement->id && $logement->user_id == $user->id)
            @if($reservation->date_entree > date('Y-m-d'))
            <div class="flex border-2 border-black mb-4">
                <img src="{{$logement->where('id', $reservation->logement_id)->value('image')}}" alt="image du logement" class="object-fill h-60 w-auto">
                <table class="w-3/4">
                    <thead>
                        <tr>
                            <th colspan="6">{{$logement->where('id', $reservation->logement_id)->value('nom')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-2 border-black text-center">Période :</td>
                            <td class="border-2 border-black text-center">Personnes</td>
                            <td class="border-2 border-black text-center">Conciergeries</td>
                            <td class="border-2 border-black text-center">Restaurations</td>
                            <td class="border-2 border-black text-center">Prix total</td>
                        </tr>
                        <tr>
                            <td class="border-2 border-black text-center">Du {{$reservation->date_entree}} au {{$reservation->date_sortie}}</td>
                            <td class="border-2 border-black text-center">{{$reservation->personnes_loge}}</td>
                            <td class="border-2 border-black text-center">
                                @foreach($services as $service)
                                @if($service->reservation_id == $reservation->id)
                                @foreach($conciergeries as $conciergerie)
                                @if($conciergerie->id == $service->conciergerie_id)
                                <p>{{$conciergerie->posibilite_conc}}</p>
                                @endif
                                @endforeach
                                @endif
                                @endforeach
                            </td>
                            <td class="border-2 border-black text-center">
                                @foreach($services as $service)
                                @if($service->reservation_id == $reservation->id)
                                @foreach($restaurations as $restauration)
                                @if($restauration->id == $service->restauration_id)
                                <p>{{$service->personnes_restau}} * {{$restauration->posibilite_rest}}</p>
                                @endif
                                @endforeach
                                @endif
                                @endforeach
                            </td>
                            <td class="border-2 border-black text-center">{{$reservation->prix_total}}</td>
                        </tr>
                    </tbody>
                </table>
                @foreach($users as $use) @endforeach
                <div class="ml-2 mt-20">
                    <p class="underline font-bold">Informations client :</p>
                    <div>
                        <p>Nom: {{$use->where('id', $reservation->user_id)->value('nom')}}</p>
                        <p>Prenom: {{$use->where('id', $reservation->user_id)->value('prenom')}}</p>
                        <p>Email: {{$use->where('id', $reservation->user_id)->value('email')}}</p>
                        <p>Telephone: {{$use->where('id', $reservation->user_id)->value('telephone')}}</p>
                    </div>
                </div>
            </div>
            @endif
            @endif
            @endforeach
            @endforeach
        </div>

        <!-- Passées -->
        <div id="divNav3" name="div" classe="hidden">
            @foreach ($reservations as $reservation)
            @foreach ($logements as $logement)
            @if($reservation->logement_id == $logement->id && $logement->user_id == $user->id)
            @if($reservation->date_entree < date('Y-m-d')) <div class="flex border-2 border-black mb-4">
                <img src="{{$logement->where('id', $reservation->logement_id)->value('image')}}" alt="image du logement" class="object-fill h-60 w-auto">
                <table class="w-3/4">
                    <thead>
                        <tr>
                            <th colspan="6">{{$logement->where('id', $reservation->logement_id)->value('nom')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-2 border-black text-center">Période :</td>
                            <td class="border-2 border-black text-center">Personnes</td>
                            <td class="border-2 border-black text-center">Conciergeries</td>
                            <td class="border-2 border-black text-center">Restaurations</td>
                            <td class="border-2 border-black text-center">Prix total</td>
                        </tr>
                        <tr>
                            <td class="border-2 border-black text-center">Du {{$reservation->date_entree}} au {{$reservation->date_sortie}}</td>
                            <td class="border-2 border-black text-center">{{$reservation->personnes_loge}}</td>
                            <td class="border-2 border-black text-center">
                                @foreach($services as $service)
                                @if($service->reservation_id == $reservation->id)
                                @foreach($conciergeries as $conciergerie)
                                @if($conciergerie->id == $service->conciergerie_id)
                                <p>{{$conciergerie->posibilite_conc}}</p>
                                @endif
                                @endforeach
                                @endif
                                @endforeach
                            </td>
                            <td class="border-2 border-black text-center">
                                @foreach($services as $service)
                                @if($service->reservation_id == $reservation->id)
                                @foreach($restaurations as $restauration)
                                @if($restauration->id == $service->restauration_id)
                                <p>{{$service->personnes_restau}} * {{$restauration->posibilite_rest}}</p>
                                @endif
                                @endforeach
                                @endif
                                @endforeach
                            </td>
                            <td class="border-2 border-black text-center">{{$reservation->prix_total}}</td>
                        </tr>
                    </tbody>
                </table>
                @foreach($users as $use) @endforeach
                <div class="ml-2 mt-20">
                    <p class="underline font-bold">Informations client :</p>
                    <div>
                        <p>Nom: {{$use->where('id', $reservation->user_id)->value('nom')}}</p>
                        <p>Prenom: {{$use->where('id', $reservation->user_id)->value('prenom')}}</p>
                        <p>Email: {{$use->where('id', $reservation->user_id)->value('email')}}</p>
                        <p>Telephone: {{$use->where('id', $reservation->user_id)->value('telephone')}}</p>
                    </div>
                </div>
        </div>
        @endif
        @endif
        @endforeach
        @endforeach
    </div>


    </div>
    <!-- Modifier infos compte -->
    <form id="div4" class="hidden" action="/profil_">
        <div class="grid grid-cols-2 place-items-center mt-8 items-baseline mt-4 space-y-8">
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Nom</label>
                <input id="nomInput" name="nom" value="{{$user->nom}}" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Prénom</label>
                <input id="prenomInput" name="prenom" value="{{$user->prenom}}" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" requird>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Téléphone</label>
                <input id="telephoneInput" name="telephone" value="{{$user->telephone}}" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">E-mail</label>
                <input id="emailInput" name="email" value="{{$user->email}}" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="mail" required>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Numéro et Rue</label>
                <input id="numrueInput" name="adresse" value="{{$user->adresse}}" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Code Postal</label>
                <input id="codepostalInput" name="code_postal" value="{{$user->code_postal}}" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Ville</label>
                <input id="villeInput" name="ville" value="{{$user->ville}}" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Pays</label>
                <input id="paysInput" name="pays" value="{{$user->pays}}" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required>
            </div>
        </div>
        <div class="flex justify-center mt-8">
            <button class="bg-light-green-atypik hover:bg-dark-green-atypik p-2 w-40 rounded-full text-white">Valider</button>
        </div>
    </form>
    </div>
</section>

@endsection