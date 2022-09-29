@extends('base.base')
@section('content')

<div id="" class=" mt-12 rounded-xl">
    <label style="cursor: pointer;" class="rounded-xl w-40 h-full">
        <div class="ml-12">
            <input id="reservationButton" type="button" class="" style="position:absolute; opacity: 0;" onclick="window.location.href='/profil'">
            <i id="" class="p-2 h-16 w-32 fa-sharp fa-solid fa-arrow-left  bg-light-green-atypik border border-black text-light-grey1-atypik"></i>
        </div>
    </label>
    <br>
    <label style="cursor: pointer;" class="rounded-xl w-40 h-full">
        <a href="/deleteProfil/{{$logement->id}}"><div class="ml-12">
            <input id="reservationButton" type="button" class="" style="position:absolute; opacity: 0;">
            <i id="" class="p-2 h-16 w-32 fa-sharp fa-solid fa-trash  bg-red-atypik border border-black text-light-grey1-atypik"></i>
        </div></a>
    </label>

    <form id="" class="mb-12" action="/profil/modifierLogement_/{{$logement->id}}">
        <div class="grid grid-cols-2 place-items-center mt-4 ">
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Nom</label>
                <input id="nomInput" name="nomLogement" value="{{$logement->nom}}" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Image</label>
                <input id="image" name="imageLogement" value="{{$logement->image}}" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" requird>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Id de la catégorie</label>
                <input id="categorie_id" name="categorie_idLogement" value="{{$logement->categorie_id}}" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Id de l'hébergeur</label>
                <input id="hebergeur_id" name="hebergeur_idLogement" value="{{$logement->user_id}}" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Capacité</label>
                <input id="capacite" name="capaciteLogement" value="{{$logement->capacite}}" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Particularité</label>
                <textarea maxlength="800" id="particulariteText" rows="5" class="text-center border-1 bg-light-grey3-atypik text-black w-auto mb-3 p-2 rounded " type="text" required onchange="updateParticulariteHiddenButton()">{{$logement->particularite}}</textarea>
                <input id="particularite" name="particulariteLogement" value="{{$logement->particularite}}" class="hidden text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text">
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Superficie</label>
                <input id="superficie" name="superficieLogement" value="{{$logement->superficie}}" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Prix par jour</label>
                <input id="prix_jour" name="prix_jourLogement" value="{{$logement->prix_jour}}" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Numéro et Rue</label>
                <input id="numrueInput" name="adresseLogement" value="{{$logement->adresse}}" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Code Postal</label>
                <input id="codepostalInput" name="code_postalLogement" value="{{$logement->code_postal}}" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Ville</label>
                <input id="villeInput" name="villeLogement" value="{{$logement->ville}}" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required>
            </div>
            <div class="mt-4">
                <label class="text-center block text-dark-grey-atypik text-lg font-semibold" for="">Pays</label>
                <input id="paysInput" name="paysLogement" value="{{$logement->pays}}" class="text-center border-1 bg-light-grey3-atypik  w-auto mb-3 p-2 rounded " type="text" required>
            </div>
        </div>
        <div class="flex justify-center mt-8">
            <button class="bg-light-green-atypik hover:bg-dark-green-atypik p-2 w-40 rounded-full text-white">Valider</button>
        </div>
    </form>
    @endsection