@extends('base.base')
@section('content')


<div class="dblock px-8 mx-auto rounded-lg shadow-lg p-4 m-32">
    <form action="/auth/changeMdp/{{$user->id}}" method="get">

        <div class="flex flex-wrap mx-6 mb-2">

            <div class="w-full px-3 mb-2 md:mb-0 ">
                <label class="block tracking-wide text-dark-grey-atypik text-base mb-2 font-bold" for="grid-destination">
                    Nouveau Mot de passe :
                </label>
                <input class="appearance-none block w-full bg-light-grey3-atypik text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="destination" type="text" placeholder="Ton nouveau mot de passe" name="mdp">
            </div>

            <div class="w-full px-3 mb-2 md:mb-0 ">
                <label class="block tracking-wide text-dark-grey-atypik text-base mb-2 font-bold" for="grid-destination">
                    Confirmer nouveau mot de passe :
                </label>
                <input class="appearance-none block w-full bg-light-grey3-atypik text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="destination" type="text" placeholder="Confirmer nouveau mot de passe" name="confirm-mdp">
            </div>
            @if(session()->has('error'))
            <span class="text-red-atypik text-center text-sm">
                Les mots de passe ne sont pas les mêmes et/ou le mot de passe ne contient pas minimum 8 caractères, 1 majuscule, 1 chiffre et 1 symbole.
            </span>
            @endif



        </div>

        <div class=" flex flex-wrap mb-2 ">
            <button class="bg-dark-green-atypik hover:bg-light-green-atypik text-white font-bold p-4 rounded-full mx-auto w-1/3 mb-2 text-auto">
                Continuer
            </button>
        </div>
    </form>

</div>

@endsection