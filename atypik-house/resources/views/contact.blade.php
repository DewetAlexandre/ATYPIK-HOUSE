@extends('base.base')
@section('content')

<div class="titre">
    <h4>Nous Contacter</h4>
</div>
<div id="container" class="flex mb-6">
    <div
        class="grow float-left bg-light-grey1-atypik ml-3 px-4 py-8 sm:grid-cols-1  md:grid-cols-2 lg:grid-cols-3 xl-grid-cols-4 w-1/2 xl:w-1/3 rounded-2xl border-2 shadow-lg">

        <form action="" id="formulaire" class="form">
            @csrf
            <div class="flex flex-col">
                <label for="nom">Nom :</label>
                <input
                    class="rounded-md bg-light-grey3-atypik placeholder:text-light-grey1-atypik placeholder:italic border-2"
                    type="text" name="nom" id="nom" placeholder="Votre Nom">

                <label for="Prenom">Prenom :</label>
                <input
                    class="rounded-md bg-light-grey3-atypik placeholder:text-light-grey1-atypik placeholder:italic border-2"
                    type="text" name="Prenom" id="Prenom" placeholder="Jean, Johan">

                <label for="Email">Email :</label>
                <input
                    class="rounded-md bg-light-grey3-atypik placeholder:text-light-grey1-atypik placeholder:italic border-2"
                    type="text" name="Email" id="Email" placeholder="****@****.**">

                <label for="Sujet">Sujet :</label>
                <select class="rounded-md bg-light-grey3-atypik text-light-grey1-atypik placeholder:italic border-2"
                    name="sujet" id="sujet">
                    <option option value="">-Selectionnez une question... </option>
                    <option value="technique">Problème Technique</option>
                    <option value="reservation">Reservation</option>
                    <option value="paiement">Paiement</option>
                    <option value="annulation">Annulation</option>
                    <option value="modif">Modification</option>
                    <option value="autre">Autre</option>
                </select>

                <label for="Prenom">Informations Supplémentaires :</label>
                <textarea name="prob"
                    class="textarea rounded-md bg-light-grey3-atypik text-light-grey1-atypik placeholder:italic border-2"
                    placeholder="Décrivez votre problème..." id="prob" cols="150" rows="5"></textarea>
                <br>
                <div class="div relative">
                    <input
                        class="py-2 rounded-3xl w-[25%] text-light-grey1-atypik bg-light-green-atypik hover:bg-dark-green-atypik absolute bottom-0 right-0"
                        name="submit" type="submit" value="Envoyer">
                </div>
            </div>

        </form>

    </div>
    <div class="grow w-1/4 md:w-1/3 float-right ml-6 text-center">
        <img class="m-auto w-40 md:w-60 lg:w-80 hover:shadow-lg my-2" src="{{ asset('img/logo.png') }}">
        <p class="text-dark-green-atypik flex mx-4"><i class="fa-solid fa-house-chimney text-dark-green-atypik"> </i>35
            avenues des loisir, 59000 Lille</p><br>
        <p class="text-dark-green-atypik flex mx-4"><i class="fa-solid fa-phone-volume text-dark-green-atypik"> </i>09
            67 89 75 35 (appel non surtaxé)</p><br>
        <p class="text-dark-green-atypik flex mx-4"><i class="fa-solid fa-clock text-dark-green-atypik"> </i>Du lundi au
            vendredi de 09h00 à 18h00</p><br>
        <p class="text-dark-green-atypik flex mx-4"><i class="fa-solid fa-at text-dark-green-atypik">
            </i>contact@atypikhouse.com</p>
    </div>
</div>






        @endsection