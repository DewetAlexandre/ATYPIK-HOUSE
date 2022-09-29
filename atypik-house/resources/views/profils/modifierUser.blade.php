@extends('base.base')
@section('content')

<div id="" class="ml-12 mt-12 rounded-xl">
    <label style="cursor: pointer;" class="rounded-xl w-40 h-full">
        <div class="">
            <input id="reservationButton" type="button" class="" style="position:absolute; opacity: 0;" onclick="window.location.href='/profil'">
            <i id="" class="h-16 w-32 fa-sharp fa-solid fa-arrow-left  bg-light-green-atypik border border-black text-light-grey1-atypik"></i>
        </div>
    </label>

<form id="" class="mb-12" action="/profil/modifierUser_/{{$user->id}}">
    <div class="grid grid-cols-2 place-items-center mt-4 ">
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
        <div class="mt-4">
            <label class="block text-dark-grey-atypik text-lg font-semibold">Rôle :</label>
            <fieldset>
                <div class="">
                    <label>Client</label>
                    <input id="button1" type="radio" value="1" checked name="button" onchange="role_userInput()">
                </div>
                <div class="mt-2">
                    <label>Hebergeur</label>
                    <input id="button2" type="radio" value="2" name="button" onchange="role_userInput()">
                </div>
                <div class="mt-2">
                    <label>Admin</label>
                    <input id="button3" type="radio" value="3" name="button" onchange="role_userInput()">
                </div>
            </fieldset>
        </div>
        <input id="role" name="role" class="hidden" type="text" value="c">
    </div>
    <div class="flex justify-center mt-8">
        <button class="bg-light-green-atypik hover:bg-dark-green-atypik p-2 w-40 rounded-full text-white">Valider</button>
    </div>
</form>
@endsection