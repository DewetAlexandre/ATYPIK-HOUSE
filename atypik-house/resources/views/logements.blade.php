@extends('base.base')
@section('content')

<!-- barre de recherche -->
<div class=" bg-light-grey3-atypik p-4 mt-10 mx-4 rounded-lg">
    <form action="/recherche" method="get" class="flex flex-col">
        <div class="flex">
            <div class="w-1/2 p-2">
                <label for="destination" class=" text-dark text-xl">Destination:</label>
                <input
                    class="w-full rounded-md p-1 bg-dark-grey-atypik text-white placeholder:text-slate-200 placeholder:italic"
                    type="text" name="destination" placeholder="ville, code postal">
            </div>
            <div class="w-1/2 p-2">
                <label for="nombre-vacanciers" class=" text-dark text-xl">Nombre de vacanciers:</label>
                <input
                    class="w-full rounded-md p-1 bg-dark-grey-atypik text-white placeholder:text-slate-200 placeholder:italic"
                    type="number" name="nombre-vacanciers" placeholder="nombre de vacanciers">
            </div>
        </div>
        <div class="flex">
            <div class="w-1/2 p-2">
                <label for="date-debut" class=" text-dark text-xl">Date d'arrivée:</label>
                <input class="w-full rounded-md p-1 bg-dark-grey-atypik text-white placeholder:text-slate-100"
                    type="date" name="date-debut">
            </div>
            <div class="w-1/2 p-2">
                <label for="date-fin" class=" text-dark text-xl">Date de départ:</label>
                <input class="w-full rounded-md p-1 bg-dark-grey-atypik text-white placeholder:text-slate-100"
                    type="date" name="date-fin">
            </div>
        </div>
        <button type="submit"
            class="bg-light-green-atypik hover:bg-dark-green-atypik text-white mt-2 px-7 py-1 rounded-3xl mx-auto">Rechercher</button>
    </form>
</div>

<h1 class=" mt-6 text-slate-400 text-center text-3xl font-semibold">Trouvez le logement Atypik de vos rêves</h1>


<!-- barre horizontale verte -->
<div class="h-1 bg-dark-green-atypik my-5 w-1/4 mx-auto"></div>

<!-- section contenant tous les logements -->
@include('include.note')

@endsection
