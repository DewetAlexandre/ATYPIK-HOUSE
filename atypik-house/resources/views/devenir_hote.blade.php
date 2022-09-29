@extends('base.base')
@section('content')
<section class="flex flex-col items-center mt-10 mb-10">

    <div class="flex justify-center mb-4">

        <div class="text-center text-dark-grey-atypik font-bold text-2xl">
            Vous êtes propriétaire d'un ou plusieurs <span
                class="inline-block text-dark-green-atypik font-bold">HEBERGEMENTS INSOLITES</span><br>
            et vous souhaitez apparaitre sur notre site ? Rien de plus simple
        </div>

    </div>

    <div class="h-1 w-96 bg-dark-green-atypik rounded-full mb-6"></div>

    <div class="flex text-dark-grey-atypik font-bold justify-center text-lg">
        Voici les 4 étapes à suivre
    </div>

    <div class=" space-x-0 sm:space-x-0 md:flex md:space-x-3 lg:space-x-5 m-8 justify-evenly mb-8">
        <div class="flex">
            <div
                class="relative mt-4 md:mt-0 lg:mt-0 text-xs text-dark-grey-atypik text-center py-16 rounded-3xl box-border h-15 w-32 box-content h-180 w-180 p-4 border-2 shadow-md">
                <span
                    class="absolute bottom-28 left-3 text-dark-green-atypik font-bold text-5xl md:text-7xl lg: text-7xl">
                    1
                </span>
                Remplir notre formulaire en ligne.
            </div>

            <div
                class="relative mt-4 md:mt-0 lg:mt-0 text-xs text-dark-grey-atypik text-center pt-12 rounded-3xl box-border h-26 w-32 box-content h-180 w-180 p-4 border-2 shadow-md">
                <span
                    class="absolute bottom-28 left-3 text-dark-green-atypik font-bold text-5xl md:text-7xl lg: text-7xl">
                    2
                </span>
                Notre équipe prends connaissance de votre demande et l'étudie.
                Cela peut prendre quelques jours.
            </div>
        </div>
        <div class="flex">
            <div
                class="relative mt-4 md:mt-0 lg:mt-0 text-xs text-dark-grey-atypik text-center pt-12 rounded-3xl box-border h-26 w-32 box-content h-180 w-180 p-4 border-2 shadow-md">
                <span
                    class="absolute bottom-28 left-3 text-dark-green-atypik font-bold text-5xl md:text-7xl lg: text-7xl">
                    3
                </span>
                Nous organisons avec vous un rendez-vous téléphonique afin de répondre à vos questions et compléter
                votre dossier.
            </div>

            <div
                class="relative mt-4 md:mt-0 lg:mt-0 text-xs text-dark-grey-atypik text-center pt-12 rounded-3xl box-border h-26 w-32 box-content h-180 w-180 p-4 border-2 shadow-md">
                <span
                    class="absolute bottom-28 left-3 text-dark-green-atypik font-bold text-5xl md:text-7xl lg: text-7xl">
                    4
                </span>
                Votre hébergement est mis en ligne sous vos conditions et vous commencez à recevoir vos premiers
                voyageurs Atipik !
            </div>

        </div>
    </div>
    <div
        class="max-w-2xl mx-auto px-4 py-8 grid-cols-1 gap-y-10 gap-x-8 sm:grid-cols-1  md:grid-cols-2 lg:grid-cols-3 xl-grid-cols-4 w-3/4  rounded-2xl border-2 shadow-lg">

        <form class="mb-2 mt-18 justify-center" action="#" method="post">
            @csrf
            <div class="flex flex-col top-3 left-5 mb-2">
                <h2 class="block mb-1">FORMULAIRE POUR DEVENIR UN HÔTE</h2>
                <span class="h-2 w-10 bg-dark-green-atypik rounded-full mb-4"></span>
            </div>

            <div class="flex top-12 left-10 mb-3">
                <div class="align-self-center h-2 w-2 bg-dark-green-atypik"></div>
                <div class="justify-center">Vos coodonnées</div>
            </div>

            <div class="md:flex md:space-x-20 mb-4">
                <div class="flex flex-col">
                    <label for="nom" class="text-light-green-atypik">Nom :</label>
                    <input class="rounded-md border-dark-grey-atypik border-2" type="text" name="nom" id="nom"
                        placeholder=" Nom de famille">

                    <label for="email" class="text-light-green-atypik">Email :</label>
                    <input class="rounded-md border-dark-grey-atypik border-2" type="text" name="email" id="email"
                        placeholder=" xxx@xxx.xx">
                </div>

                <div class="flex flex-col">
                    <label for="prenom" class="text-light-green-atypik">Prénom</label>
                    <input class="rounded-md border-dark-grey-atypik border-2" type="text" name="prenom" id="prenom"
                        placeholder=" Jean, Sarah">

                    <label for="num" class="text-light-green-atypik">Numéro de téléphone</label>
                    <input class="rounded-md border-dark-grey-atypik border-2" type="text" name="num" id="nom"
                        placeholder=" 0305070901">
                </div>
            </div>

            <div class="h-2  bg-dark-green-atypik rounded-full mb-4"></div>

            <div class="flex flex-row mb-2">
                <div class="align-self-center h-2 w-2 bg-dark-green-atypik"></div>
                <div>Type d'hébergement</div>
            </div>

            <div class="md:flex flex-row md:space-x-10 md:mb-4">
                <div class="flex flex-col">
                    <div>
                        <input type="radio" name="type_logement" id="cabane_arbre">
                        <label for="cabane_arbre">Cabane dans les arbres</label>
                    </div>
                    <div>
                        <input type="radio" name="type_logement" id="maison_piloti">
                        <label for="maison_piloti">Maison sur pilotis</label>
                    </div>
                    <div>
                        <input type="radio" name="type_logement" id="maison_hobbits">
                        <label for="maison_hobbits">Maison de Hobbits</label>
                    </div>
                </div>

                <div class="flex flex-col">
                    <div>
                        <input type="radio" name="type_logement" id="bulle">
                        <label for="bulle">Bulle</label>
                    </div>
                    <div>
                        <input type="radio" name="type_logement" id="roulotte">
                        <label for="roulotte">Roulotte</label>
                    </div>
                    <div>
                        <input type="radio" name="type_logement" id="chalet">
                        <label for="chalet">Chalet</label>
                    </div>
                </div>

                <div class="flex flex-col">
                    <div>
                        <input type="radio" name="type_logement" id="yourte">
                        <label for="yourte">Yourte</label>
                    </div>
                    <div>
                        <input type="radio" name="type_logement" id="tipi">
                        <label for="tipi">Tipi</label>
                    </div>
                    <div>
                        <input type="radio" name="type_logement" id="autre">
                        <label for="autre">Autre</label>
                    </div>
                </div>
            </div>
            <div class="h-2  bg-dark-green-atypik rounded-full mb-4"></div>
            <div class="md:flex flex-row md:space-x-20">
                <div class="flex flex-col">
                    <div class="h-2 w-2 bg-dark-green-atypik"></div>
                    <label for="nb_hebergement">Nombre d'hébergement(s)</label>
                    <input type="range" min="0" max="10" value="0" id="nb_hebergement" class="slider slider_nb_h mt-2">
                    <p class="text-xs text-dark-grey-atypik mt-2">selectionné : <span id="select1"></span></p>
                </div>

                <div class="flex flex-col mb-4">
                    <div class="h-2 w-2 bg-dark-green-atypik"></div>
                    <label for="cap_hebergement">Capacité d'hébergement</label>
                    <input type="range" min="0" max="10" value="0" id="cap_hebergement"
                        class="slider slider_cap_h mt-2">
                    <p class="text-xs text-dark-grey-atypik mt-2">selectionné : <span id="select2"></span></p>
                </div>
            </div>

            <label for="infos_hebergement">Informations hébergement :</label><br>
            <textarea maxlength="400" class="flex rounded-md border-dark-grey-atypik border-2 justify-center"
                type="text" name="infos_hebergement" id="infos_hebergement" rows="5"
                placeholder=" (Lieu/Département/Région/Pays) " style="min-width: 100%"></textarea><br>


            <label for="particularites">Ses particularités :</label><br>
            <textarea maxlength="400" class="rounded-md border-darker-grey-atypik border-2" type="text"
                name="particularites" id="particularites" rows="5" placeholder=" (Particularités) "
                style="min-width: 100%"></textarea>

            <div class="flex flex-row mb-2">
                <div class="h-2 w-2 bg-dark-green-atypik"></div>
                <div>Visuel hébergement</div>
            </div>

            <div class="md:flex flex-row justify-around border-dark ">
                <button class="self-center h-8 px-2 btn border-2 rounded-md bg-light-grey1-atypik"
                    id="btn_upload">Choisir un fichier</button>
                <!-- <button class="self-center px-8 btn border-2 rounded-full bg-green-800 text-white min-w-min h-12" type="submit" id="btn_submit">valider votre demande</button> -->
                <a href="/devenir-hote-valide"><button
                        class="self-center px-8 btn border-2 rounded-full bg-dark-green-atypik text-white min-w-min h-12 mt-5 sm:mt-0"
                        id="btn_submit" type="button">valider votre demande</button></a>
            </div>

        </form>

    </div>
</section>
@endsection