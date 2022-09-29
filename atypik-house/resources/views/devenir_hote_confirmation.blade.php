@extends('base.base')
@section('content')
<div class="flex justify-center items-center bg-header-atypik bg-center h-96 w-full mt-10 ">
    <span class="self-center text-light-grey1-atypik text-6xl">Devenir Hôte</span>
</div>

<section class="flex flex-col items-center px-8">

    <div class="flex justify-center mb-4">

        <p class=" mt-4 text-center text-dark-grey-atypik font-bold text-2xl">
            Vous êtes propriétaire d'un ou plusieurs <span
                class="inline-block text-dark-green-atypik font-bold">HEBERGEMENTS INSOLITES</span><br>
            et vous souhaitez apparaitre sur notre site ? Rien de plus simple
        </p>

    </div>

    <div class="h-1 w-96 bg-dark-green-atypik rounded-full mb-6"></div>

    <div class="flex text-dark-grey-atypik font-bold justify-center text-lg">
        Voici les 4 étapes à suivre
    </div>

    <div class=" space-x-0 sm:space-x-0 md:flex md:space-x-3 lg:flex lg:space-x-5 m-8 justify-evenly mb-8">
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

    <div class="rounded-3xl flex flex-col items-center box-content w-92 md:w-96 p-4 border-2 shadow-md md:px-36 mb-8">

        <div class="flex flex-col top-3 left-5 my-4 text-center">
            <h2 class="">FORMULAIRE POUR DEVENIR UN HÔTE</h2>
            <span class="h-2 w-50 bg-dark-green-atypik rounded-full"></span>
        </div>

        <img class="h-36 w-36 mb-8 mt-8" src="../img/PitieChat.png" alt="Petite tête de chat roux" height=6.25rem
            width=6.25rem>

        <span class="mb-8">Merci, votre demande a bien été envoyé !</span>
        <span class="mb-8">Nous répondrons à votre demande sous 48 heures !</span>

    </div>

</section>

<div class="flex flex-col justify-center items-center bg-header-atypik bg-center h-96 w-full">
    <div class="flex flex-col justify-center items-center">
        <div class="text-center text-light-grey1-atypik text-3xl">Retrouvez tous nos hebergements atypiques sur<br>
            Atypique-House.com</div>
    </div>
    <a href="/logements"><button
            class="mt-8 self-center px-8 btn rounded-full bg-light-green-atypik hover:bg-dark-green-atypik text-light-grey1-atypik font-bold min-w-min h-12"
            type="submit" id="btn_submit">Hébergement</button></a>

</div>
@endsection