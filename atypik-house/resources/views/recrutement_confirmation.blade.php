@extends('base.base')
@section('content')


<section class="flex flex-col items-center px-8 pt-16">

    <div class="rounded-3xl flex flex-col items-center box-content w-92 md:w-96 p-4 border-2 shadow-md md:px-36 mb-8">

        <div class="flex flex-col top-3 left-5 my-4 text-center">
            <h2 class="">CANDIDATURE ENVOYÉE </h2>
            <span class="h-2 w-50 bg-dark-green-atypik rounded-full"></span>
        </div>

        <img class="h-36 w-36 mb-8 mt-8" src="../img/recrutementconfirm.png" alt="recrutement" height=6.25rem
            width=6.25rem>

        <span class="mb-8">Votre candidature a bien été envoyée !</span>
        <span class="mb-8">Elle sera traitée dans les plus brefs délais !</span>
    </div>

</section>


@endsection
