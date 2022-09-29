@extends('base.base')
@section('content')


<!-- Partie inscription -->
@if(session()->has('inscr'))
<div id="inscription"
    class="hidden min-h-[30em] w-full lg:w-2/3 p-7 my-11 mx-auto border-2 border-solid border-red-50 rounded-xl shadow-xl">
    <!-- partie gauche photo -->
    <aside class=" w-2/5 overflow-hidden">
        <img class="h-full w-auto" src="/img/photo_auth.png" alt="maison de foret">
    </aside>
@else
<div id="inscription"
    class="flex min-h-[30em] w-full lg:w-2/3 p-7 my-11 mx-auto border-2 border-solid rounded-xl shadow-xl">
    <!-- partie gauche photo -->
    <aside class=" w-2/5 overflow-hidden">
        <img class="h-full w-auto" src="/img/photo_auth.png" alt="maison de foret">
    </aside>
@endif

    <!-- partie droite -->
    <aside class=" h-full w-3/5 ml-6">

        <div class="border-[1px] border-dark-grey-atypik rounded-md h-12 w-full p-1">
            <div class="flex h-full">
            <button onclick="hideInscription()"
                    class="inline-block h-full w-1/2 ml-1 hover:text-lg text-dark-green-atypik rounded-md text-center ">
                    Connexion
                </button>
                <button class="inline-block w-1/2 mr-1 bg-dark-green-atypik text-white rounded-md text-center">
                    Inscription
                </button>
                
            </div>
        </div>


        <form action="/auth/inscription" method="post" class="flex flex-col h-full text-xl">
            @csrf
            <div class="flex my-2">
                <div class="flex flex-col w-1/2 pr-1">
                    <label for="nom" class="text-dark-grey-atypik">Nom</label>
                    <input type="text" name="nom" class="border-2 border-light-grey3-atypik rounded-sm"
                        value="{{ old('nom') }}" required>
                    @if($errors->has('nom'))
                    <span class="text-red-atypik text-center text-sm">
                        {{ $errors->first('nom') }}
                    </span>
                    @endif
                </div>
                <div class="flex flex-col w-1/2 pl-1">
                    <label for="prenom" class="text-dark-grey-atypik">Prenom</label>
                    <input type="text" name="prenom" class="border-2 border-light-grey3-atypik rounded-sm"
                        value="{{ old('prenom') }}" required>
                    @if($errors->has('prenom'))
                    <span class="text-red-atypik text-center text-sm">
                        {{ $errors->first('prenom') }}
                    </span>
                    @endif
                </div>
            </div>

            <label for="email" class="text-dark-grey-atypik">Email</label>
            <input type="text" name="email" class="mb-2 border-2 border-light-grey3-atypik rounded-sm"
                value="{{ old('email') }}" required>
            @if($errors->has('email'))
            <span class="text-red-atypik text-center text-sm">
                {{ $errors->first('email') }}
            </span>
            @endif
            <!--change-->

            <label for="mdp" class="text-dark-grey-atypik">Mot de passe</label>
            <span class="w-full relative">
                <input id="mdpInscription" type="password" name="password"
                    class="w-full mb-2 border-2 border-light-grey3-atypik rounded-sm" minlength="1" required>
                <!--change-->
                <i id="eyeMdpInscription" onclick="showOrHideMdp('mdpInscription')"
                    class="fa-solid fa-eye absolute top-[0.4rem] right-2"></i>
            </span>
            @if($errors->has('password'))
            <span class="text-red-atypik text-center text-sm">
            {{ $errors->first('password') }}
            </span>
            @endif

            <label for="confirm-mdp" class="text-dark-grey-atypik">Confirmer votre mot de passe</label>
            <span class="w-full relative">
                <input id="confirmMdpInscription" type="password" name="confirm-mdp"
                    class="w-full mb-4 border-2 border-light-grey3-atypik rounded-sm" minlength="1" required>
                <!--change-->
                <i onclick="showOrHideMdp('confirmMdpInscription')"
                    class="fa-solid fa-eye absolute top-[0.4rem] right-2"></i>
            </span>
            @if($errors->has('confirm-mdp'))
            <span class="text-red-atypik text-center text-sm">
                {{ $errors->first('confirm-mdp') }}
            </span>
            @endif
            <span class="mb-5">
                <input type="checkbox" name="pdp" required>
                <label for="pdp" class="text-dark-grey-atypik">
                    J'accepte la <a href="/politique-donnees-personnelles" class="underline">politique de protection des
                        données</a>
                </label>
            </span>

            <button type="submit" class="bg-dark-green-atypik text-white rounded-3xl text-lg p-1">S'inscrire</button>
        </form>
    </aside>

</div>



<!-- Partie connexion -->
@if(session()->has('inscr'))
<div id="connexion"
    class="flex min-h-[30em] w-full lg:w-2/3 p-7 my-11 mx-auto border-2 border-solid rounded-xl shadow-xl">
    <!-- partie gauche photo -->
    <aside class=" w-2/5 overflow-hidden">
        <img class="h-full w-auto" src="/img/photo_auth.png" alt="maison de foret">
    </aside>
@else
<div id="connexion"
    class="hidden min-h-[30em] w-full lg:w-2/3 p-7 my-11 mx-auto border-2 border-solid border-red-50 rounded-xl shadow-xl">
    <!-- partie gauche photo -->
    <aside class=" w-2/5 overflow-hidden">
        <img class="h-full w-auto" src="/img/photo_auth.png" alt="maison de foret">
    </aside>
@endif

    <!-- partie droite -->
    <aside class=" h-full w-3/5 ml-6">

        <div class="border-[1px] border-light-grey3-atypik rounded-md h-12 w-full p-1">
            <div class="flex h-full">
            <button class="inline-block w-1/2 mr-1 bg-dark-green-atypik text-white rounded-md text-center">
                    Connexion
                </button>
                <button onclick="hideConnexion()"
                    class="inline-block h-full w-1/2 ml-1 hover:text-lg text-dark-green-atypik rounded-md text-center ">
                    Inscription
                </button>
                
            </div>
        </div>


        <form action="/auth/login" method="post" class="flex flex-col text-xl">
            @csrf
            <label for="email" class="text-dark-grey-atypik mt-2">Email</label>
            <input type="text" name="email" class=" mb-2 border-2 border-light-grey3-atypik rounded-sm"
                required>

            @if($errors->has('login'))
            <span class="text-red-atypik text-center text-sm">
                {{ $errors->first('login') }}
            </span>
            @endif

            <label for="password" class="text-dark-grey-atypik">Mot de passe</label>
            <span class="w-full relative">
                <input id="mdpConnexion" type="password" name="password"
                    class="w-full border-2 border-light-grey3-atypik rounded-sm" required>
                <i onclick="showOrHideMdp('mdpConnexion')" class="fa-solid fa-eye absolute top-[0.4rem] right-2"></i>
            </span>


            <div class="flex justify-between text-sm mb-6">
                <span>
                    <input type="checkbox" name="souvenir" class="border-light-grey3-atypik">
                    <label for="souvenir" class="text-dark-grey-atypik" id="souvenir">Se souvenir de moi</label>
                </span>

                <a href="/auth/forgetMdp" class="text-dark-grey-atypik underline">Mot de passe oublié ?</a>
            </div>

            <button type="submit" class="bg-dark-green-atypik text-white rounded-3xl text-lg p-1" onsubmit="seSouvenirMoi()">Se connecter</button>
        </form>
    </aside>
</div>

@endsection
