@extends('base.base')
@section('content')

<div class="flex justify-center mb-4">

    <p class=" mt-4 text-center text-dark-grey-atypik font-bold text-2xl">
        Envoyez-nous votre candidature !
    </p>

</div>
<div id="container" class="mb-20 mx-2 my-4 flex flex-wrap ">
    <div class="mx-auto dblock w-2/3 bg-light-grey1-atypik px-2 py-4 rounded-2xl shadow-lg;
    sm: flex flex-wrap;">
        <form action="/recrutementConfirm" id="formulaire" class="form">
            @csrf
            <div class=" flex flex-col">
                <label for="nom">Nom :</label>
                <input class="rounded-md bg-light-grey3-atypik placeholder:text-light-grey1-atypik placeholder:italic border-2" type="text" name="nom" id="nom" placeholder="Dupont" required>

                <label for="Prenom">Prenom :</label>
                <input class="rounded-md bg-light-grey3-atypik placeholder:text-light-grey1-atypik placeholder:italic border-2" type="text" name="Prenom" id="Prenom" placeholder="Jean" required>

                <label for="Email">Email :</label>
                <input class="rounded-md bg-light-grey3-atypik placeholder:text-light-grey1-atypik placeholder:italic border-2" type="text" name="Email" id="Email" placeholder="****@****.**" required>

                <label for="telephone">Téléphone :</label>
                <input class="rounded-md bg-light-grey3-atypik placeholder:text-light-grey1-atypik placeholder:italic border-2" type="text" name="telephone" id="telephone" placeholder="0768706896" required>

                <label for="cv">CV :</label>
                <input class="block mb-5 w-full text-xs text-dark-grey-atypik bg-light-grey3-atypik rounded-lg border border-light-grey3-atypik cursor-pointer focus:outline-none" id="cv" type="file" required>

                <label for="lm">Lettre de motivation :</label>
                <input class="block mb-5 w-full text-xs text-dark-grey-atypik bg-light-grey3-atypik rounded-lg border border-light-grey3-atypik cursor-pointer focus:outline-none" id="lm" type="file" required>

                <br>

                <div class="div relative">
                    <input class="py-2 rounded-3xl w-[25%] text-light-grey1-atypik bg-light-green-atypik hover:bg-dark-green-atypik absolute bottom-0 right-0" name="submit" type="submit" value="Envoyer" onclick="">

                </div>
            </div>

        </form>
    </div>
</div>

@endsection