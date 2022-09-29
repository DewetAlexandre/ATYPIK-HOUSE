@extends('base.base')
@section('content')
<section class="flex mx-auto h-24 m-6 px-8 py-2 p-4 w-3/4 gap-2">

    <div class="place-self-center flex flex-col w-40">
        <i class="flex1 inline-block fa-solid fa-suitcase fa-2xl text-dark-green-atypik"></i>
        <span class="flex justify-center text-xs text-dark-green-atypik">Récapitulatif</span>
    </div>

    <div class="inline-block self-center mt-5 w-1/4 mx-auto">
        <div class="w-full bg-dark-green-atypik h-1 mb-6">
            <div class=" bg-dark-green-atypik h-1" style="width: 50%"></div>

        </div>
    </div>

    <div class="place-self-center flex flex-col w-40">
        <i class="flex2 inline-block fa-solid fa-bell-concierge fa-2xl text-dark-green-atypik"></i>
        <span class="flex justify-center text-xs text-dark-green-atypik">Activités & services</span>
    </div>

    <div class="inline-block self-center mt-5 w-1/4 mx-auto">
        <div class="w-full bg-light-grey3-atypik  h-1 mb-6">
            <div class=" bg-dark-green-atypik h-1" style="width: 50%"></div>
        </div>
    </div>

    <div class="place-self-center flex flex-col w-40">
        <i class="flex3 inline-block fa-solid fa-address-card fa-2xl text-light-grey3-atypik"></i>
        <span class="flex justify-center text-xs text-light-grey3-atypik">Coordonnées</span>
    </div>

    <div class="inline-block self-center mt-5 w-1/4 mx-auto">
        <div class="w-full bg-light-grey3-atypik h-1 mb-6">
            <div class=" bg-light-grey3-atypik h-1" style="width: 50%"></div>
        </div>
    </div>

    <div class="place-self-center flex flex-col w-40">
        <i class="flex4 inline-block fa-solid fa-credit-card fa-2xl text-light-grey3-atypik"></i>
        <span class="flex justify-center text-xs text-light-grey3-atypik">Paiement</span>
    </div>

    <div class="place-self-center flex flex-col w-40">
      <a href="/forgetPanier"><input type="button" value="Supprimer" class="cursor-pointer ml-32 shadow-lg bg-red-500 hover:bg-red-800 text-light-grey1-atypik py-2 px-2 h-full rounded-full inline-flex items-center"></a>
    </div>
</section>

<section class="sm:flex w-full justify-center y-auto">


    <aside class="flex flex-col w-11/12 justify-start m-4">
        <div class="flex flex-col mt-8 w-full">
            <div class="flex flex-col mx-auto my-8 w-4/5 rounded-lg border-solid border-2 border-light-grey3-atypik md:shadow-xl">

                <div class="flex justify-between mx-8 py-4 w-4/5">
                    <span class="text-dark-grey-atypik font-bold text-2xl justify-between">
                        <i class="fa-solid fa-utensils fa-lg text-dark-grey-atypik"></i>
                        Services de Conciergerie <span class="text-light-grey3-atypik"></span>
                    </span>
                </div>
                <div class="md:grid md:grid-cols-2 xl:grid-cols-3 ">
                @foreach ($conciergeries as $conciergerie)
                    @if ($conciergerie->logement_id == $logement->id)
                <div class="md:flex justify-center md:space-x-8 md:mb-3 mx-2 md:mx-0">
                    <div class="flex flex-col mt-6 px-6 py-3 border-light-grey3-atypik border-2 shadow-md rounded text-xs text-dark-grey-atypik">
                        <img src="{{$conciergerie->image}}" alt="chalet" class="mx-auto w-3/4 sm:w-4/5 md:w-full h-[9.375rem] rounded-2xl mb-4">
                        <span class="text-sm font-medium text-center">{{$conciergerie->posibilite_conc}}</span>
                        <div class="flex justify-between"><span class="font-thin italic mr-5">Pendant toute la durée du séjour</span><a class="underline text-light-green-atypik" href="/logements/{{$logement->id}}">Voir plus +</a></div>
                        <div class="flex justify-between place-items-center mt-4"><span id="{{$conciergerie->id}}_" name="prixConcs" class="font-medium">{{$conciergerie->prix_jour_conc}}</span>€ par jour
                            <div class="flex items-center mb-4">
                                <input id="{{$conciergerie->id}}" name ="checkBoxConc" onclick="updateHiddenServices()" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                        </div>
                    </div>
                    </div>
                    @endif
                @endforeach
                    
                </div>
                
            </div>
        </div>


        <div class=" flex flex-col mx-auto my-8 w-4/5 rounded-lg border-solid border-2 border-light-grey3-atypik md:shadow-xl">

            <div class="flex justify-between mx-8 py-4 w-4/5">
                <span class="text-dark-grey-atypik font-bold text-2xl justify-between">
                    <i class="fa-solid fa-utensils fa-lg text-dark-grey-atypik"></i>
                    Restauration <span class="text-light-grey3-atypik"></span>
                </span>
            </div>
            <div class="md:grid md:grid-cols-2 xl:grid-cols-3 ">
            @php $num = 0; @endphp
                
            
            @foreach ($restaurations as $restauration)
            @if ($restauration->logement_id == $logement->id)
            <div class="justify-center md:space-x-8 md:mb-3 mx-2 md:mx-0">
                <div class="flex flex-col mt-6 px-6 py-3 border-light-grey3-atypik border-2 shadow-md rounded text-xs text-dark-grey-atypik">
                    <img src="{{$restauration->image}}" alt="chalet" class="mx-auto w-3/4 sm:w-4/5 md:w-full h-[9.375rem] rounded-2xl mb-4">
                    <span class="text-sm font-medium text-center">{{$restauration->posibilite_rest}}</span>
                    <div class="flex justify-between"><span class="font-thin italic">A partir de 3 ans</span><a class="underline text-light-green-atypik" href="/logements/{{$logement->id}}">Voir plus +</a></div>
                    <div class="flex justify-between place-items-center mt-4"><span id="PrixRestau" class="font-medium">{{$restauration->prix_personne_rest}}</span>€ par personne
                    <input type="number" name="prixRestaus" class="hidden" value="{{$restauration->prix_personne_rest}}">
                    <i class="fa-solid fa-minus"></i><input id="personnesRest{{$num}}" name="personnesRest{{$num}}" onchange="updateHiddenServices()" value="0" type="number" min="0" class="border-light-grey3-atypik border-2 w-1/5"><i class="fa-solid fa-circle-plus"></i>
                    </div>
                </div>
            </div>
            
            @php $num = $num + 1; @endphp
            
                @endif
                 @endforeach            
                </div>
        </div>
        </div>
        <input type="button" class="bg-light-green-atypik hover:bg-dark-green-atypik text-white font-bold py-2 px-10 rounded-3xl text-sm"  onclick="updateServices()" value="Mettre à jour"></button>
    </aside>
    <!-- <aside class=" bg-red-300 w-1/3 h-96"> coté droit -->
    {{-- detaille et contenu --}}

    <div class="sm:mx-2 md:mx-8 sm:w-2/5 md:w-4/12 mt-6 sm:mt-10 sm:ml-10 rounded-3xl shadow-dark-grey-atypik shadow-moi sm:border-2">

        <img src="{{$logement->image}}" alt="chalet" class="mx-auto w-11/12 sm:w-full sm:h-auto rounded-t-3xl h-[20rem]">

        <h3 class="  text-dark-grey-atypik text-2xl ml-3 mt-4 font-semibold">{{$logement->nom}}</h3>
        <div class="ml-3 font-semibold">
            <span class="fa fa-star border-1 border-light-green-atypik text-light-green-atypik"></span>
            <span class="fa fa-star  text-light-green-atypik"></span>
            <span class="fa fa-star  text-light-green-atypik"></span>
            <span class="fa fa-star  text-light-green-atypik"></span>
            <span class="fa fa-star  text-light-green-atypik"></span>
        </div>
        <h4 class="mt-4 ml-3 text-xs font-bold text-dark-grey-atypik"> Hébergements</h4>
        <p class=" ml-4 mt-2 text-xs font-bold text-dark-grey-atypik "><i class=' mr-2 h-4 w-4   text-light-green-atypik fas'>&#xf186;</i> @php echo session('nuitée') @endphp nuits du @php echo session('dateA') @endphp au @php echo session('dateD') @endphp</p>
        <p class=" ml-4  mt-2 text-xs font-bold text-dark-grey-atypik"><i class=" mr-2 h-4 w-4   text-light-green-atypik fa-solid fa-person"></i>@php echo session('nbrVac') @endphp personnes</p>
        <div class=" mt-4 border-1 bg-dark-grey-atypik h-1 mb-6 ml-5 mr-5">
        </div>

        <form action="/panier3-imen/{{$logement->id}}" method="get">
        <h3 class=" ml-4 font-bold text-dark-grey-atypik">
            Pour un tarif total du :
        </h3>
        <p id="prixTotal" type="text" class=" mr-4 text-right font-extrabold text-light-green-atypik" text-format='{PRICE} €'> @php echo session('prixTotal') @endphp <i class="text-base text-light-green-atypik fa">&#xf153;</i>
            TTC</p>
            <input id='prixTotalUpdate'type="text" class="hidden" name="prixTotalUpdate">
        <p class="mr-4 mb-10 text-xs text-right font-bold text-dark-grey-atypik">non flexible <br> non modifiable non remboursable</p>

        
            @php $numA = 0; @endphp
            
            @foreach ($restaurations as $restauration)
            @if ($restauration->logement_id == $logement->id)
            
                <input id="{{$numA}}_restau" name="{{$numA}}_restau" type="number" value="0" class="hidden">
                <input id="{{$numA}}_restau_id" name="{{$numA}}_restau_id" type="number" value="{{$restauration->id}}" class="hidden">
            
                @php $numA = $numA + 1; @endphp
                

            @endif
            @endforeach

            @php $numB = 0; @endphp

            @foreach ($conciergeries as $conciergerie)
                @if ($conciergerie->logement_id == $logement->id)
                
                    <input id="{{$numB}}_conc_id" name="" type="text" value="{{$conciergerie->id}}" class="hidden">
                
            @php $numB = $numB + 1; @endphp

            @endif
            @endforeach


        @if(auth()->check())
        <button onclick="" class="bg-light-green-atypik w-11/12 ml-4 mb-5 md:ml-4 sm:ml-2 rounded-full text-light-grey1-atypik hover:bg-dark-green-atypik p-2 ">
                <h3 class="leading-3 text-lg font-semibold mb-0"> Continuer</h3>
                <h4 class=" text-xs">Sans Personnalisation</h4>
            </a></button>
        @else
        <a href="/auth"><input type="button" class="bg-light-green-atypik w-11/12 ml-4 mb-5 md:ml-4 sm:ml-2 rounded-full text-light-grey1-atypik hover:bg-dark-green-atypik p-2 " value="Continuer">
            </a></button>
        @endif
        </form>

        <h3 class=" ml-4 font-bold text-dark-grey-atypik">
            A propos de nos tarifs
        </h3>
        <p class="ml-4 mb-4 text-xs font-semibold text-dark-grey-atypik ">Les prix affichés comprennent l'hébergement ainsi que toutes les charges et taxes (excepté la taxe de séjour).
        </p>
        <p class=" ml-4 mb-6 text-xs font-semibold text-dark-grey-atypik ">Appelez nos conseillers au 070246100 (0,16<i class="text-sx  fa">&#xf153;</i> /min), du lundi au vendredi de 10h à 19h et le samedi 10h à 17h.</p>
    </div>

    <!-- </aside> -->

</section>

<script>
    const prixTotal = {{ Session::get('prixTotal') }};
    const nuits = {{ Session::get('nuitée') }};
    var valTabPrixConc = 0;
    var prixConcArray = new Array();
    var valTabPrixRest = 0;
    var prixRestArray = new Array();
    var numRestau = 0;
    var numConc = 0;
</script>

@foreach ($conciergeries as $conc)
@if ($conc->logement_id == $logement->id)
<script>
    prixConcArray[valTabPrixConc] = {{$conc->prix_jour_conc}};
    valTabPrixConc++;
    numConc = numConc +1;
</script>
@endif
@endforeach

@foreach ($restaurations as $rest)
@if ($rest->logement_id == $logement->id)
<script>
    prixRestArray[valTabPrixRest] = {{$rest->prix_personne_rest}};
    valTabPrixRest++;
    numRestau = numRestau +1;
</script>
@endif
@endforeach

@endsection