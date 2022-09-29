@extends('base.base')
@section('content')

<!-- Bouttons -->
<section class="mb-40">
    <p class="text-center text-2xl mt-12">Tableau de bord</p>
    <fieldset id="buttons" class="flex justify-center mt-12 space-x-20">
        <div id="bgButton1" class="h-40 w-48 rounded-xl bg-dark-green-atypik border-2">
            <label style="cursor: pointer;" class=" w-full h-full items-center">
                <div class="">
                    <input id="button1" type="radio" value="1" name="button" class="" checked style="position:absolute; opacity: 0;" onclick="buttonsMenu()">
                    <i id="faRadio1" class="fa-solid fa-users mt-4 w-full h-20 text-light-grey1-atypik"></i>
                    <p id="textRadio1" name="textRadio1" class="font-bold text-center text-light-grey1-atypik">{{count($users->where('role', 'c'))}}</p>
                    <p id="textRadio1" name="textRadio1" class="font-bold text-center text-light-grey1-atypik">Clients</p>
                </div>
            </label>
        </div>
        <div id="bgButton2" class="h-40 w-48 rounded-xl bg-light-grey3-atypik border-2">
            <label style="cursor: pointer;" class=" w-full h-full items-center">
                <div class="">
                    <input id="button2" type="radio" value="2" name="button" class="" checked style="position:absolute; opacity: 0;" onclick="buttonsMenu()">
                    <i id="faRadio2" class="fa-solid fa-people-roof mt-4 w-full h-20 text-dark-grey-atypik mt-4"></i>
                    <p id="textRadio2" name="textRadio2" class="font-bold text-center text-dark-grey-atypik">{{count($users->where('role', 'h'))}}</p>
                    <p id="textRadio2" name="textRadio2" class="font-bold text-center text-dark-grey-atypik">Hébergeurs</p>
                </div>
            </label>
        </div>
        <div id="bgButton3" class="h-40 w-48 rounded-xl  bg-light-grey3-atypik border-2">
            <label style="cursor: pointer;" class="rounded-xl w-full h-full">
                <div class="">
                    <input id="button3" type="radio" value="3" name="button" class="" style="position:absolute; opacity: 0;" onclick="buttonsMenu()">
                    <i id="faRadio3" class="fa-solid fa-house w-full mt-4 h-20 text-dark-grey-atypik"></i>
                    <p id="textRadio3" name="textRadio3" class="font-bold text-center text-dark-grey-atypik">{{count($logements)}}</p>
                    <p id="textRadio3" name="textRadio3" class="font-bold text-center text-dark-grey-atypik">Logements</p>
                </div>
            </label>
        </div>
        <div id="bgButton4" class="h-40 w-48 rounded-xl  bg-light-grey3-atypik border-2">
            <label style="cursor: pointer;" class="rounded-xl w-full h-full">
                <div class="">
                    <input id="button4" type="radio" value="4" name="button" class="" style="position:absolute; opacity: 0;" onclick="buttonsMenu()">
                    <i id="faRadio4" class="fa-solid fa-calendar-days w-full mt-4 h-20 text-dark-grey-atypik"></i>
                    <p id="textRadio4" name="textRadio4" class="font-bold text-center text-dark-grey-atypik">{{count($reservations)}}</p>
                    <p id="textRadio4" name="textRadio4" class="font-bold text-center text-dark-grey-atypik">Reservations</p>
                </div>
            </label>
        </div>
    </fieldset>
    <div class="mt-8 h-auto w-7/8 ml-8 mr-8 border-dark-grey-atypik">
        <!-- Clients -->
        <div id="div1" class="">
            <table class="w-full">
            <th></th>
                <tr>
                    <td class="border-2 border-black text-center font-bold ">id</td>
                    <td class="border-2 border-black text-center font-bold ">prenom</td>
                    <td class="border-2 border-black text-center font-bold ">nom</td>
                    <td class="border-2 border-black text-center font-bold ">email</td>
                    <td class="border-2 border-black text-center font-bold ">adresse</td>
                    <td class="border-2 border-black text-center font-bold ">telephone</td>
                </tr>
                @foreach ($users->where('role', 'c') as $client)
                <tr>
                    <td class="border-2 border-black text-center">{{$client->id}}</td>
                    <td class="border-2 border-black text-center">{{$client->prenom}}</td>
                    <td class="border-2 border-black text-center">{{$client->nom}}</td>
                    <td class="border-2 border-black text-center">{{$client->email}}</td>
                    <td class="border-2 border-black text-center">{{$client->adresse}}, {{$client->ville}} {{$client->code_postal}} {{$client->pays}}</td>
                    <td class="border-2 border-black text-center">{{$client->telephone}}</td>
                    <td class="flex">
                        <div id="" class="ml-2 rounded-xl">
                            <label style="cursor: pointer;" class="rounded-xl w-full h-full">
                                <div class="">
                                    <input id="reservationButton" type="button" class="" style="position:absolute; opacity: 0;" onclick="window.location.href='/profil/modifierUser/{{$client->id}}'">
                                    <i id="" class="fa-solid fa-pen text-yellow-900"></i>
                                </div>
                            </label>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <!-- Hebergeurs -->
        <div id="div2" class="hidden">
            <table class="w-full">
            <th></th>
                <tr>
                    <td class="border-2 border-black text-center font-bold ">id</td>
                    <td class="border-2 border-black text-center font-bold ">Prenom</td>
                    <td class="border-2 border-black text-center font-bold ">Nom</td>
                    <td class="border-2 border-black text-center font-bold ">Email</td>
                    <td class="border-2 border-black text-center font-bold ">Adresse</td>
                    <td class="border-2 border-black text-center font-bold ">Telephone</td>
                    <td class="border-2 border-black text-center font-bold ">Logements</td>
                </tr>
                @foreach ($users->where('role', 'h') as $hebergeur)
                <tr>
                    <td class="border-2 border-black text-center">{{$hebergeur->id}}</td>
                    <td class="border-2 border-black text-center">{{$hebergeur->prenom}}</td>
                    <td class="border-2 border-black text-center">{{$hebergeur->nom}}</td>
                    <td class="border-2 border-black text-center">{{$hebergeur->email}}</td>
                    <td class="border-2 border-black text-center">{{$hebergeur->adresse}}, {{$hebergeur->ville}} {{$hebergeur->code_postal}} {{$hebergeur->pays}}</td>
                    <td class="border-2 border-black text-center">{{$hebergeur->telephone}}</td>
                    <td class="border-2 border-black text-center">@foreach($logements as $logsHebeg) @if($logsHebeg->user_id == $hebergeur->id)<p>{{$logsHebeg->nom}}
                        <p>@endif @endforeach
                    </td>
                    <td class="flex">
                        <div id="" class="ml-2 rounded-xl">
                            <label style="cursor: pointer;" class="rounded-xl w-full h-full">
                                <div class="">
                                    <input id="reservationButton" type="button" class="" style="position:absolute; opacity: 0;" onclick="window.location.href='/profil/modifierUser/{{$hebergeur->id}}'">
                                    <i id="" class="fa-solid fa-pen text-yellow-900"></i>
                                </div>
                            </label>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <!-- Logements -->
        <div id="div3" class="flex hidden">
            <table class="w-full">
                <th></th>
                <tr>
                    <td class="border-2 border-black text-center font-bold ">id</td>
                    <td class="border-2 border-black text-center font-bold ">nom</td>
                    <td class="border-2 border-black text-center font-bold ">categorie</td>
                    <td class="border-2 border-black text-center font-bold ">id hebergeur</td>
                    <td class="border-2 border-black text-center font-bold ">hébergeur</td>
                    <td class="border-2 border-black text-center font-bold ">adresse</td>
                    <td class="border-2 border-black text-center font-bold ">capacité</td>
                    <td class="border-2 border-black text-center font-bold ">superficie</td>
                    <td class="border-2 border-black text-center font-bold ">prix / jour</td>
                    <td><a href="/addLogement"><label style="cursor: pointer;" ><div ><input id="reservationButton" type="button" class="" style="position:absolute; opacity: 0;"><i id="" class="rounded-lg p-2 fa-sharp fa-solid fa-plus  bg-light-green-atypik border  text-light-grey1-atypik"></i></div></label></td></a>
                </tr>
                @foreach ($logements as $logement)
                <tr>
                    <td class="border-2 border-black text-center">{{$logement->id}}</td>
                    <td class="border-2 border-black text-center">{{$logement->nom}}</td>
                    <td class="border-2 border-black text-center">{{$categorie_logements->where('id', $logement->categorie_id)->value('nom')}}</td>
                    <td class="border-2 border-black text-center">{{$logement->user_id}}</td>
                    <td class="border-2 border-black text-center">{{$users->where('id', '=', $logement->user_id)->value('nom')}} {{$users->where('id', '=', $logement->user_id)->value('prenom')}}</td>
                    <td class="border-2 border-black text-center">{{$logement->adresse}}, {{$logement->ville}} {{$logement->code_postal}} {{$logement->pays}}</td>
                    <td class="border-2 border-black text-center">{{$logement->capacite}}</td>
                    <td class="border-2 border-black text-center">{{$logement->superficie}} m²</td>
                    <td class="border-2 border-black text-center">{{$logement->prix_jour}}€</td>
                    <td class="flex">

                        <div id="" class="ml-2 rounded-xl">
                            <label style="cursor: pointer;" class="rounded-xl w-full h-full">
                                <div class="">
                                    <input id="reservationButton" type="button" class="" style="position:absolute; opacity: 0;" onclick="window.location.href='/profil/modifierLogement/{{$logement->id}}'">
                                    <i id="" class="fa-solid fa-pen text-yellow-900"></i>
                                </div>
                            </label>
                        </div>
                    </td>
                    </label>
        </div>
        </tr>
        @endforeach
        </table>
    </div>
    <!--reservations-->
    <div id="div4" class="hidden">
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

        <table class="w-full border-2 border-black">
            <thead>
                <tr>
                    <th class="border-2 border-black text-center font-bold ">id</td>
                    <th class="border-2 border-black text-center font-bold ">logement</td>
                    <th class="border-2 border-black text-center font-bold ">client</td>
                    <th class="border-2 border-black text-center font-bold ">Période</td>
                    <th class="border-2 border-black text-center font-bold ">Personnes</td>
                    <th class="border-2 border-black text-center font-bold ">Prix total</td>
                </tr>
            </thead>
            <!-- En cours -->
            <tbody id="divNav1" class="w-full border-2 border-black" name="div">
            @foreach($reservations as $reservationA) <tr>
                @php  $date_entree = strtotime($reservationA->date_entree); $date_sortie = strtotime($reservationA->date_sortie); $date_sortie = date('Y-m-d',$date_sortie); $date_entree = date('Y-m-d',$date_entree); @endphp
                @if(date('Y-m-d') <= $date_sortie && date('Y-m-d') >= $date_entree)
                    <td class="border-2 border-black text-center">{{$reservationA->id}}</td>
                    <td class="border-2 border-black text-center">{{$logements->where('id', $reservationA->logement_id)->value('nom')}}</td>
                    <td class="border-2 border-black text-center">{{$client->where('id', $reservationA->user_id)->value('nom')}} {{$client->where('id', $reservationA->user_id)->value('prenom')}}</td>
                    <td class="border-2 border-black text-center">Du {{$reservationA->date_entree}} au {{$reservationA->date_sortie}}</td>
                    <td class="border-2 border-black text-center">{{$reservationA->personnes_loge}}</td>
                    <td class="border-2 border-black text-center">{{$reservationA->prix_total}}</td>
                    </tr>
                    @endif
                    @endforeach
            </tbody>
            <!-- à venirs -->
            <tbody id="divNav2" class="w-full border-2 border-black" name="div">
            @foreach($reservations->Where('date_entree','>',date('Y-m-d')) as $reservationB)
                <tr>
                    <td class="border-2 border-black text-center">{{$reservationB->id}}</td>
                    <td class="border-2 border-black text-center">{{$logements->where('id', $reservationB->logement_id)->value('nom')}}</td>
                    <td class="border-2 border-black text-center">{{$client->where('id', $reservationB->user_id)->value('nom')}} {{$client->where('id', $reservationB->user_id)->value('prenom')}}</td>
                    <td class="border-2 border-black text-center">Du {{$reservationB->date_entree}} au {{$reservationB->date_sortie}}</td>
                    <td class="border-2 border-black text-center">{{$reservationB->personnes_loge}}</td>
                    <td class="border-2 border-black text-center">{{$reservationB->prix_total}}</td>
                </tr>
                @endforeach
            </tbody>
            <!-- Passées -->
            <tbody id="divNav3" class="w-full border-2 border-black" name="div">
            @foreach($reservations->Where('date_sortie','<',date('Y-m-d')) as $reservationC) <tr>
                    <td class="border-2 border-black text-center">{{$reservationC->id}}</td>
                    <td class="border-2 border-black text-center">{{$logements->where('id', $reservationC->logement_id)->value('nom')}}</td>
                    <td class="border-2 border-black text-center">{{$user->where('id', $reservationC->user_id)->value('nom')}} {{$user->where('id', $reservationC->user_id)->value('prenom')}}</td>
                    <td class="border-2 border-black text-center">Du {{$reservationC->date_entree}} au {{$reservationC->date_sortie}}</td>
                    <td class="border-2 border-black text-center">{{$reservationC->personnes_loge}}</td>
                    <td class="border-2 border-black text-center">{{$reservationC->prix_total}}</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
    </div>
</section>
@endsection