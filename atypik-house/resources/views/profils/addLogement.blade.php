@extends('base.base')
@section('content')

<div id="" class=" mt-12 rounded-xl">
    <label style="cursor: pointer;" class=" rounded-xl w-40 h-full">
        <div class="ml-12">
            <input id="reservationButton" type="button" class="" style="position:absolute; opacity: 0;" onclick="window.location.href='/profil'">
            <i id="" class="p-2 h-16 w-32 fa-sharp fa-solid fa-arrow-left  bg-light-green-atypik border border-black text-light-grey1-atypik"></i>
        </div>
    </label>
    <br>


    <form id="" class="mb-12" action="/addProfil">
        <div class="grid grid-cols-2 place-items-center mt-4 ">
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Nom</label>
                <input id="nomInput" name="nomLogement"  class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Image</label>
                <input id="image" name="imageLogement"  class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text">
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for=""></label>
                <select id="categorie_id" name="categorie_idLogement" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required><option value="">Id de la catégorie</option> 
                @foreach($categories as $cl)
            <option value="{{$cl->id}}">{{$cl->nom}}</option>
            @endforeach
            </select>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for=""></label>
                <select id="hebergeur_id" name="hebergeur_idLogement" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required><option value="">Id de l'hébergeur</option>
            @foreach($hebergeurs as $h)
            <option value="{{$h->id}}">{{$h->prenom}} {{$h->nom}}</option>
            @endforeach
            </select>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Capacité</label>
                <input id="capacite" name="capaciteLogement" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Particularité</label>
                <textarea maxlength="800" id="particulariteText" rows="5" class="text-center border-1 bg-light-grey3-atypik text-black w-auto mb-3 p-2 rounded " type="text" required onchange="updateParticulariteHiddenButton()"></textarea>
                <input id="particularite" name="particulariteLogement" class="hidden text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text">
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Superficie</label>
                <input id="superficie" name="superficieLogement" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Prix par jour</label>
                <input id="prix_jour" name="prix_jourLogement" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Numéro et Rue</label>
                <input id="numrueInput" name="adresseLogement" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Code Postal</label>
                <input id="codepostalInput" name="code_postalLogement" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Ville</label>
                <input id="villeInput" name="villeLogement" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Pays</label>
                <input id="paysInput" name="paysLogement" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required>
            </div>
        </div>
        <div class="flex justify-center mt-8">
            <button class="bg-light-green-atypik hover:bg-dark-green-atypik p-2 w-40 rounded-full text-white">Valider</button>
        </div>
    </form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    @endsection