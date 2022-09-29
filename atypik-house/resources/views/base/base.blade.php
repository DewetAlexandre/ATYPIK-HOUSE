<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/indexlamia.css') }}">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <title>Atypik house</title>
</head>
@php
use App\Models\User;
use App\Models\Logement;
$user = User::all();
@endphp

<body>

    <header id="header" class=" shadow-lg items">
        <div id="sitefictif" class="md:w-full sm:w-full rounded-lg shadow-lg bg-white my-3">
            <div class="bg-light-green-atypik text-center text-2xl py-4 text-light-grey1-atypik ">
                Ce site est un site fictif réalisé dans le cadre d'un projet d'étude.
            </div>
        </div>

<nav class="flex overflow-hidden h-16;
            sm:h-20 gap-1 justify-around;
            md:h-24;
            lg:h-32; grid-cols-3">

               
<span class="w-0 lg:w-1/4">
    <a href="/"><img class="hover:shadow-lg w-0  md:h-full md:w-auto "
    src="{{ asset('img/logo.png') }}"></a>
</span>

<!--menu mobile-->
<div class="mx-auto ml-2 flex justify-between">
    
<div class="mt-3 mr-2">   
    <div class="sm:hidden flex items-center">
    <button class="mobile-menu-button text-3xl text-dark-grey-atypik">
    <ion-icon name="menu"></ion-icon>
    </button>
    </div>

</div>
    

<div class="mobile-menu hidden sm:hidden mt-6 ">
    <ul class="my-5">
        <li>
            <a class="block py-2 px-2 nav-link text-tiny md:text-lg xl:text-xl font-semibold text-dark-grey-atypik hover:underline decoration-4  decoration-light-green-atypik hover:font-bold" href="/">Accueil</a>
        </li>
        <li>
            <a class="block py-2 px-2 nav-link text-tiny md:text-lg xl:text-xl font-semibold text-dark-grey-atypik hover:underline decoration-4  decoration-light-green-atypik hover:font-bold" href="/logements">Hébergement</a>
        </li>
        <li>
            <a class="block py-2 px-2 nav-link text-tiny md:text-lg xl:text-xl font-semibold text-dark-grey-atypik hover:underline decoration-4  decoration-light-green-atypik hover:font-bold" href="/blog">Blog</a>
        </li>
        <li>
            <a class="block py-2 px-2 nav-link text-tiny md:text-lg xl:text-xl font-semibold text-dark-grey-atypik hover:underline decoration-4  decoration-light-green-atypik hover:font-bold" href="/contact"> Contact</a>
        </li>
        <li>
            <a class="block py-2 px-2 nav-link text-tiny md:text-lg xl:text-xl font-semibold text-dark-grey-atypik hover:underline decoration-4  decoration-light-green-atypik hover:font-bold" href="/devenir-hote">Devenir Hôte</a>
        </li>
        <li>
            <a class="block py-2 px-2 nav-link text-tiny md:text-lg xl:text-xl font-semibold text-dark-grey-atypik hover:underline decoration-4  decoration-light-green-atypik hover:font-bold" href="/faq">FAQ</a>
        </li>
    </ul>
</div>
</div>
<!--fin menu mobile-->

<ul class="flex sflex-nowrap lg:w-1/2 grid-cols-3 gap-4 items-center lg:justify-center hidden sm:flex">
    <a class="nav-link text-tiny md:text-lg xl:text-xl font-semibold text-dark-grey-atypik hover:underline decoration-4  decoration-light-green-atypik hover:font-bold" href="/">Accueil</a>
    <a class="nav-link text-tiny md:text-lg xl:text-xl font-semibold text-dark-grey-atypik hover:underline decoration-4  decoration-light-green-atypik hover:font-bold" href="/logements">Hébergement</a>
    <a class="nav-link text-tiny md:text-lg xl:text-xl font-semibold text-dark-grey-atypik hover:underline decoration-4  decoration-light-green-atypik hover:font-bold" href="/blog">Blog</a>
    <a class="nav-link text-tiny md:text-lg xl:text-xl font-semibold text-dark-grey-atypik hover:underline decoration-4  decoration-light-green-atypik hover:font-bold" href="/contact"> Contact</a>
    <a class="nav-link text-tiny md:text-lg xl:text-xl text-center font-semibold text-dark-grey-atypik hover:underline decoration-4  decoration-light-green-atypik hover:font-bold" href="/devenir-hote">Devenir Hôte</a>
    <a class="nav-link mr-3 md:mr-0 text-tiny md:text-lg xl:text-xl font-semibold text-dark-grey-atypik hover:underline decoration-4  decoration-light-green-atypik hover:font-bold " href="/faq">FAQ</a>
</ul>


<div class=" flex flex-nowrap lg:w-1/4 grid-cols-3 gap-4 items-center justify-end mr-0 md:mr-5 hidden sm:flex">
    <div class="flex flex-nowrap content-center h-12">
        <div class="content-center">
            @if(session()->has('panier'))
                <a href="/toPanierOne">
                    <button
                        class=" shadow-lg  bg-light-green-atypik hover:bg-dark-green-atypik text-light-grey1-atypik font-bold py-1 h-full px-3 rounded-lg ">
                            <svg class="fill-current w-1 h-1 mr-1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 10 2"></svg><i class="fa text-2xs">&#xf07a;</i></a>
                    </button>
             @else
                <a href="/logements">
                    <button
                        class=" shadow-lg  bg-light-green-atypik hover:bg-dark-green-atypik text-light-grey1-atypik font-bold py-1 h-full px-3 rounded-lg ">
                            <svg class="fill-current w-1 h-1 mr-1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 10 2"></svg><i class="fa text-2xs">&#xf07a;</i></a>
                    </button>
            @endif
        </div>
    </div>
    <div class="">
        @if(auth()->check())
            <a href="/profil">
                <button
                    class="h-12 mr-4 shadow-lg  bg-light-green-atypik hover:bg-dark-green-atypik text-light-grey1-atypik font-bold py-1 h-full px-3 rounded-lg ">
                        <svg class="fill-current w-1 h-1 mr-1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 10 2"></svg><i class="fa fa-address-card text-2xs "></i></a>
                </button>
        @endif
    </div>
    <div class="">
        @if(auth()->check())
            <a href="/auth/logout">
                <button
                class=" shadow-lg bg-light-green-atypik hover:bg-dark-green-atypik text-light-grey1-atypik py-2 px-2 h-full rounded-full inline-flex items-center">
                    <svg class="fill-current w-1 h-1 " xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 10 2">
                    </svg>
                        <div><span class="mr-2">{{$user->where('id', auth()->id())->max('prenom')}}
                                        {{$user->where('id', auth()->id())->max('nom')}}</span><i
                                        class=" fa align-middle sm:text-2xs">&#xf2bd;</i>
                        </div>
                </button>
            </a>
        @php auth()->id() @endphp
        @else
        <a href="/auth">
            <button class=" shadow-lg bg-light-green-atypik hover:bg-dark-green-atypik text-light-grey1-atypik py-2;
                             lg:py-4 px-2 h-full rounded-full inline-flex items-center">
                <svg class="fill-current w-1 h-1 " xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 10 2">
                </svg>
        <div>
            <span class="mr-2 ">Se Connecter </span><i class=" fa align-middle sm:text-2xs">&#xf2bd;</i>
        </div>
            </button>
        </a>
        @endif

    </div>
</div>

<!--menu mobile les boutons-->
<div class="flex flex-nowrap content-center h-12 sm:hidden my-1">
    <div class="content-center">
        @if(session()->has('panier'))
            <a href="/toPanierOne">
                <button
                    class=" shadow-lg  bg-light-green-atypik hover:bg-dark-green-atypik text-light-grey1-atypik font-bold py-1 h-full px-3 rounded-lg ">
                        <svg class="fill-current w-1 h-1 mr-1" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 10 2"></svg><i class="fa text-2xs">&#xf07a;</i></a>
                </button>
         @else
            <a href="/logements">
                <button
                    class=" shadow-lg  bg-light-green-atypik hover:bg-dark-green-atypik text-light-grey1-atypik font-bold py-1 h-full px-3 rounded-lg ">
                        <svg class="fill-current w-1 h-1 mr-1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 10 2"></svg><i class="fa text-2xs">&#xf07a;</i></a>
                </button>
        @endif
    </div>
</div>

<div class="sm:hidden my-1">
    @if(auth()->check())
        <a href="/profil">
            <button
                class="h-12 mr-4 shadow-lg  bg-light-green-atypik hover:bg-dark-green-atypik text-light-grey1-atypik font-bold py-1 h-full px-3 rounded-lg ">
                    <svg class="fill-current w-1 h-1 mr-1" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 10 2"></svg><i class="fa fa-address-card text-2xs "></i></a>
            </button>
    @endif
</div>

<div class="flex flex-nowrap content-center h-12 sm:hidden my-1 mr-2">
    @if(auth()->check())
        <a href="/auth/logout">
            <button
                class="shadow-lg  bg-light-green-atypik hover:bg-dark-green-atypik text-light-grey1-atypik font-bold py-1 h-full px-3 rounded-lg">
            <svg class="fill-current w-1 h-1 " xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 10 2">
            </svg>
    <div><span class="">{{$user->where('id', auth()->id())->max('prenom')}}
                    {{$user->where('id', auth()->id())->max('nom')}}</span><i
                    class=" fa align-middle sm:text-2xs mb-1 mr-1">&#xf2bd;</i>
    </div>
            </button>
        </a>
    @php auth()->id() @endphp
    @else
    <a href="/auth">
        <button class=" shadow-lg  bg-light-green-atypik hover:bg-dark-green-atypik text-light-grey1-atypik font-bold py-1 h-full px-3 rounded-lg">
            <svg class="fill-current w-1 h-1 " xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 10 2">
            </svg>
            <div><span class="mr-1 ">
                </span><i class=" fa align-middle sm:text-2xs mb-1 mr-1 w-5 h-5">&#xf2bd;</i>
            </div>
        </button></a>
    @endif

</div>    
<!--fin menu mobile les boutons-->

</nav>

    </header>

    @yield('content')

    <footer class=" bg-dark-grey-atypik pt-6 w-full">
        <div class="relative text-light-grey1-atypik flex items-stretch text-xl justify-center">

            <div class="mr-4 w-44 lg:w-64 xl:w-80 h-40">
                <img class="rounded ml-4" src="{{ asset('img/logo.png') }}" alt="logo">
            </div>

            <div class=" text-center sm:flex">
                <div class="flex flex-col sm:m-2 md:m-0">
                    <ul class="md:m-6 lg:m-14 xl:m-20">
                        <li class="hover:underline"><a href="/">Accueil</a></li>
                        <li class="hover:underline"><a href="/logements">Hébergement</a></li>
                        <li class="hover:underline"><a href="/blog">Blog</a></li>
                    </ul>
                </div>
                <div class="flex flex-col sm:m-2 md:m-0">
                    <ul class="md:m-6 lg:m-14 xl:m-20">
                        <li class="hover:underline"><a href="/contact">Contact</a></li>
                        <li class="hover:underline"><a href="/qui_sommes_nous">Qui sommes-nous</a></li>
                        <li class="hover:underline"><a href="/faq">FAQ</a></li>
                    </ul>
                </div>
                <div class="flex flex-col sm:m-2 md:m-0">
                    <ul class="md:m-6 lg:m-14 xl:m-20">
                        <li class="hover:underline"><a href="/recrutement">Recrutement</a></li>
                        <li class="hover:underline"><a href="#">Presse</a></li>
                        <li class="hover:underline"><a href="/mentions-legales">Mentions Légales</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex flex-col my-1 space-y-4">
            <div class="m-auto text-center text-2xl text-light-grey1-atypik font-semibold mt-4">
                Abonnez-vous à notre newsletter et recevez les offres spéciales et promotions sur les locations de
                vacances.


                <form class="flex space-x-4 mt-3" method="post" action="mailto:votreemail@email.com">
                    <input class="p-3 w-3/4 text-lg rounded text-dark-grey-atypik text-center
                        sm: ml-4" type="email" placeholder="Votre adresse e-mail">
                    <button class="bg-light-green-atypik hover:bg-dark-green-atypik py-3 text-light-grey1-atypik w-1/4 rounded-xl
                             " onclick="showModal()">
                        <svg class="fill-current w-1 h-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 2"></svg>

                        <a href="#"><span class="text-lg mx-auto">S'abonner</span></a>
                    </button>
                </form>
            </div>
        </div>

        <div class="flex justify-between mt-12 pb-10 border-t-light-grey1-atypik text-center">
            <div class="text-base mx-auto w-[30%]">

                <div class="flex items-center space-x-2 text-light-grey1-atypik"><i
                        class="fa-regular fa-copyright mr-2"></i>
                    2022 Atypik-House, tous droits réservés.
                </div>

                <div class="underline items-center text-sm text-light-grey1-atypik">
                    <a href="/conditions-generales"> Conditions Générales
                        d'Utilisation -</a>
                    <div class="flex justify-start text-sm underline text-light-grey1-atypik">
                        <a href="/politique-donnees-personnelles"> Politiques des Données Personnelles </a>
                    </div>

                    <div class="flex items-center space-x-4 mt-2 mb-6">

                        <a href="https://fr-fr.facebook.com"><em
                                class="fa-brands fa-facebook text-light-grey1-atypik fa-2xl"></em></a>
                        <a href="https://www.instagram.com"><em
                                class="fa-brands fa-instagram text-light-grey1-atypik fa-2xl"></em></a>
                        <a href="http://www.twitter.fr/"><em
                                class="fa-brands fa-twitter text-light-grey1-atypik fa-2xl"></em></a>
                        <a href="https://www.tiktok.com/fr">
                            <em class="fa-brands fa-tiktok text-light-grey1-atypik fa-2xl"></em>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    
    <script src="{{ asset('js/hote.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/panier.js') }}"></script>
    <script src="{{ asset('js/inscription_connexion.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/bandeau.js') }}"></script>
    <script src="{{ asset('js/avis.js') }}"></script>
    <script src="{{ asset('js/profils.js') }}"></script>
    <script src="{{ asset('js/menunavbar.js') }}"></script>
</body>









</html>