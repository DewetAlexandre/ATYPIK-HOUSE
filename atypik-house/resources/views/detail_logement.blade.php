@extends('base.base')
@section('content')

<section class=" mt-6 mb-10 justifiy-between md:flex p-12 ">

    <!--présentation-->

    <div class=" md:w-2/3 lg:w-3/6 mx-auto md:ml-12 rounded-3xl shadow-dark-grey-atypik shadow-moi border-2">
        <div class=" w-auto">
            <img class=" rounded-t-3xl w-full" src="{{$logement->image}}" alt="">
        </div>
        <h3 class="text-2xl font-extrabold tracking-tight text-dark-grey-atypik sm:text-3xl text-center"> {{ $logement->nom }}
        </h3>
        <div class="py-10 lg:pt-6 lg:pb-16 lg:col-start-1 lg:col-span-2 lg:border-r lg:border-light-grey1-atypik lg:pr-8 border-2 rounded-3xl">
            <div class="space-y-6">
                <h3 class="text-xl p-3 font-bold tracking-tight text-dark-grey-atypik sm:text-3xl ">PRESENTATION</h3>
                <p class="text-base p-3 text-dark-grey-atypik">{{ $logement->particularite }}
                </p>
                <div><i class=" fa align-middle  sm:text-2xs p-3 text-light-green-atypik">&#xf041;</i> <span class="mr-2 sm:text-2xs text-dark-grey-atypik">Adresse: {{ $logement->adresse }} </span>
                </div>
                <div><i class=" fa align-middle sm:text-2xs p-3 text-light-green-atypik">&#xf0b2;</i> <span class="mr-2 sm:text-2xs text-dark-grey-atypik">Superficie: {{ $logement->superficie }}m² </span>
                </div>
                <div><i class=" fa-solid fa-person align-middle sm:text-2xs p-3 text-light-green-atypik"></i> <span class="mr-2 sm:text-2xs text-dark-grey-atypik">Capacité : {{ $logement->capacite }} personnes</span>
                </div>
                <div><i class=" fa align-middle sm:text-2xs p-3 text-light-green-atypik">&#xf1b0;</i> <span class="mr-2 sm:text-2xs text-dark-grey-atypik">Animaux acceptés: Non </span>
                </div>
                <div name="" class=" mt-8 border-1 bg-light-grey3-atypik h-1 mb-6 ml-5 mr-5">
                </div>
                <h3 class="text-xl p-3 font-bold tracking-tight text-dark-grey-atypik sm:text-3xl ">SERVICES</h3>
                <p class="text-xl p-3 text-dark-grey-atypik">- Conciergerie -</p>
                @foreach ($conciergeries as $conciergerie)
                @if ($conciergerie->logement_id == $logement->id)
                <div><i class=" fa align-middle p-3 sm:text-2xs text-light-green-atypik ">&#xf107;</i> <span class="mr-2 sm:text-2xs text-dark-grey-atypik">{{$conciergerie->posibilite_conc}}</span>
                </div>
                @endif
                @endforeach
                <p class="text-xl p-3 text-dark-grey-atypik">- Restauration -</p>
                @foreach ($restaurations as $restauration)
                @if ($restauration->logement_id == $logement->id)
                <div><i class=" fa align-middle p-3 sm:text-2xs text-light-green-atypik ">&#xf107;</i> <span class="mr-2 sm:text-2xs text-dark-grey-atypik">{{$restauration->posibilite_rest}}</span>
                </div>
                @endif
                @endforeach
                <div name="" class=" mt-8 border-1 bg-light-grey3-atypik h-1 mb-6 ml-5 mr-5">
                </div>
                <h3 class="text-xl p-3 font-bold tracking-tight text-dark-grey-atypik sm:text-3xl ">EQUIPEMENTS</h3>
                <div><i class=" fa align-middle p-3 sm:text-2xs text-light-green-atypik">&#xf107;</i> <span class="mr-2 sm:text-2xs text-dark-grey-atypik">WiFi </span>
                </div>
                <div><i class=" fa align-middle p-3 sm:text-2xs text-light-green-atypik ">&#xf107;</i> <span class="mr-2 sm:text-2xs text-dark-grey-atypik">Linge de lit </span>
                </div>
                <div><i class=" fa align-middle p-3 sm:text-2xs text-light-green-atypik">&#xf107;</i> <span class="mr-2 sm:text-2xs text-dark-grey-atypik">Linge de toilettes </span>
                </div>
                <div><i class=" fa align-middle p-3 sm:text-2xs text-light-green-atypik">&#xf107;</i> <span class="mr-2 sm:text-2xs text-dark-grey-atypik">Mobilier de jardin </span>
                </div>
                <div><i class=" fa align-middle p-3 sm:text-2xs text-light-green-atypik">&#xf107;</i> <span class="mr-2 sm:text-2xs text-dark-grey-atypik">Chauffage </span>
                </div>
                <div name="" class=" mt-8 border-1 bg-light-grey3-atypik h-1 mb-6 ml-5 mr-5">
                </div>
                <h3 class="text-xl p-3 font-bold tracking-tight text-dark-grey-atypik sm:text-3xl ">CONDITIONS</h3>
                <p class="text-base p-3 text-dark-grey-atypik">Cet hébergement propose un délai de rétractation allant jusqu'à 2 jours avant le début de la date de la réservation.
                    Pendant ce délai, vous pouvez annuler votre réservation sans frais supplémentaire. Une fois votre annulation confirmée par nos services, nous procéderons au remboursement.
                    L'intégralité de la somme dûe vous sera reversée. En cas d'annulation hors de ce délai, vous ne pourrez donc pas être remboursé.
                </p>
            </div>
        </div>
    </div>

    <!--reservation-->
    <div class=" md:w-1/3 mx-auto md:mr-10 md:ml-10 h-2/3 rounded-3xl shadow-dark-grey-atypik shadow-moi border-2">
        <div class=" p-8">

            <div>
                <label for="date-debut" class=" text-dark-green-atypik dblock">Date d'arrivée :</label>
            </div>
            <input class="w-4/5 rounded-md p-3 text-dark-grey-atypik bg-light-grey3-atypik" type="date" name="date-debut">
            <div>
                <label for="date-fin" class="text-dark-green-atypik dblock">Date de départ :</label>
            </div>
            <input class="w-4/5 rounded-md p-3 text-dark-grey-atypik bg-light-grey3-atypik" type="date" name="date-fin">

            <div class=" mt-4 border-1 bg-light-grey3-atypik h-1 mb-6 ml-5 mr-5">
            </div>
            <h3 class=" ml-4 font-bold text-dark-grey-atypik  ">
                Pour un tarif total du :
            </h3>
            <p class=" mr-4 text-right font-bold text-light-green-atypik text-2xl"> {{$logement->prix_jour}} <i class="text-base text-light-greenn-atypik fa">&#xf153;</i>
                TTC/NUIT</p>
            <p class="mr-4 mb-20 text-xs text-right font-bold text-dark-grey-atypik">non flexible <br> non modifiable non remboursable</p>
            <a href="/addPanier/{{$logement->id}}"><button type="submit" class="bg-light-green-atypik hover:bg-dark-green-atypik  w-11/12 ml-5 mb-6 rounded-full  text-light-grey1-atypik  p-7 ">
                    <h3 class="leading-3 text-lg font-semibold mb-0"> Réserver</h3>
                </button> </a>

            <h3 class=" ml-4 font-bold text-dark-grey-atypik">
                A propos de nos tarifs
            </h3>
            <p class="ml-4 mb-4 text-xs font-semibold text-dark-grey-atypik ">Les prix affichés comprennent l'hébergement ainsi que toutes les charge et taxes (excepté la taxe de séjour).
            </p>
            <p class=" ml-4 mb-6 text-xs font-semibold text-dark-grey-atypik ">Appelez nos conseillers au 070246100 (0,16<i class="text-sx  fa">&#xf153;</i> /min), du lundi au vendredi de 10h à 19h, le samedi 10h à 17h.</p>
            @if(count($reservation) > 0)
            <a href="/avis/{{$logement->id}}"><button type="button" class="bg-light-green-atypik hover:bg-dark-green-atypik  w-11/12 ml-5 mb-6 rounded-full  text-light-grey1-atypik  p-7 ">
                    <h3 class="leading-3 text-lg font-semibold mb-0"> Laisser un avis</h3>
                </button> </a>
            @endif
            
        </div>
    </div>
</section>




@endsection