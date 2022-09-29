@extends('base.base')
@section('content')

<!-- barre de recherche -->
<div class=" bg-light-grey1-atypik p-4 mt-4 mx-4 rounded-lg">
    <form action="/categories/{{$categorieId}}/recherche" method="get" class="flex flex-col">
        <div class="flex">
            <div class="w-1/2 p-2">
                <label for="destination" class=" text-dark text-xl">Destination:</label>
                <input class="w-full rounded-md p-1 bg-dark-grey-atypik text-light-grey1-atypik placeholder:text-light-grey3-atypik placeholder:italic"
                       type="text" name="destination" placeholder="ville, code postal, nom de domaine ..."
                       value="{{ $destination }}">
            </div>
            <div class="w-1/2 p-2">
                <label for="nombre-vacanciers" class=" text-dark text-xl">Nombre de vacanciers:</label>
                <input class="w-full rounded-md p-1 bg-dark-grey-atypik text-light-grey1-atypik placeholder:text-light-grey3-atypik placeholder:italic"
                       type="number" min="1" name="nombre-vacanciers" placeholder="nombre de vacanciers"
                       value="{{ $nombreVacanciers }}">
            </div>
        </div>
        <div class="flex">
            <div class="w-1/2 p-2">
                <label for="date-debut" class=" text-dark text-xl">Date d'arrivée:</label>
                <input class="w-full rounded-md p-1 bg-dark-grey-atypik text-light-grey1-atypik placeholder:text-light-grey3-atypik"
                       type="date" name="date-debut"
                       value="{{ $dateDebut }}">
            </div>
            <div class="w-1/2 p-2">
                <label for="date-fin" class=" text-dark text-xl">Date de départ:</label>
                <input class="w-full rounded-md p-1 bg-dark-grey-atypik text-light-grey1-atypik placeholder:text-light-grey3-atypik"
                       type="date" name="date-fin"
                       value="{{ $dateFin }}">
            </div>
        </div>
        <button type="submit" class="bg-light-green-atypik hover:bg-dark-green-atypik text-light-grey1-atypik mt-2 px-7 py-1 rounded-3xl mx-auto">Rechercher</button>
    </form>
</div>

<!-- nombre de resultats -->
<h6 class="ml-4 mb-4 italic">
    <p>@php count($logements) @endphp résultat @php count($logements) <= 1 ? '' : 's' @endphp pour cette recherche</p>
</h6>

<!-- section contenant tous les resultats -->
@include('include.note')

@endsection