@extends('base.base')
@section('content')

{{-- barre avancement de commande  --}}

<section class="flex mx-auto sm:h-24 m-6 sm:px-8 sm:py-2 sm:p-4 sm:w-3/4 sm:gap-2 ">


    <div class="place-self-center flex flex-col w-40">
        <i class="flex1 inline-block fa-solid fa-suitcase fa-2xl text-dark-green-atypik"></i>
        <span class="flex justify-center text-xs text-dark-green-atypik">Récapitulatif</span>
    </div>

    <div class="inline-block self-center mt-5 w-1/4 mx-auto">
        <div class="w-full bg-gray-400 h-1 mb-6">
            <div class=" bg-dark-green-atypik h-1" style="width: 100%">
            </div>
        </div>
    </div>

    <div class="place-self-center flex flex-col w-40">
        <i class="flex2  text-dark-green-atypik inline-block fa-solid fa-bell-concierge fa-2xl"></i>
        <span class="flex justify-center text-xs text-dark-green-atypik ">Activités & services
        </span>
    </div>

    <div class="inline-block self-center mt-5 w-1/4 mx-auto">
        <div class="w-full bg-gray-400 h-1 mb-6">
            <div class=" bg-dark-green-atypik h-1" style="width: 100%">
            </div>
        </div>
    </div>

    <div class="place-self-center flex flex-col w-40">
        <i class="flex3 inline-block fa-solid fa-address-card fa-2xl text-dark-green-atypik"></i>
        <span class="flex justify-center text-xs text-dark-green-atypik">Coordonnées</span>
    </div>

    <div class="inline-block self-center mt-5 w-1/4 mx-auto">
        <div class="w-full bg-gray-400 h-1 mb-6">
            <div class=" bg-dark-green-atypik h-1" style="width: 100%">
            </div>
        </div>
    </div>

    <div class="place-self-center flex flex-col w-40">
        <i class="flex4 inline-block fa-solid fa-credit-card fa-2xl text-dark-green-atypik"></i>
        <span class="flex justify-center text-xs text-dark-green-atypik">Paiement</span>
    </div>

    <div class="place-self-center flex flex-col w-40">
      <a href="/forgetPanier"><input type="button" value="Supprimer" class="cursor-pointer ml-32 shadow-lg bg-red-500 hover:bg-red-800 text-light-grey1-atypik py-2 px-2 h-full rounded-full inline-flex items-center"></a>
    </div>
</section>


{{-- div coordonner et valider commande panier3 --}}

{{-- coordonner --}}

<section class=" md:mt-6 sm:mb-10 flex-row items-center justify-between  sm:flex p-1 sm:p-2 md:p-12 ">

    <div class="sm:w-3/5 text-lg font-medium  shadow-moi border-2 md:w-7/12  rounded-3xl shadow-dark-grey-atypik   ">
        <div class=" ml-10 font-semibold text-dark-green-atypik text-3xl mt-16">
            <h2> Mes coordonnées</h2>
        </div>
        <ul class=" ml-10 list-none mx-2 text-dark-grey-atypik font-bold leading-none">
            <li class="mt-2 underline underline-offset-4"> {{$user->prenom}} </li>
            <li class="mt-2 underline underline-offset-4">{{$user->nom}}</li>
            <li class="mt-2 underline underline-offset-4">@php echo session('adresse') @endphp</li>
            <li class="mt-2 underline underline-offset-4"> @php echo session('CP') @endphp, @php echo session('pays') @endphp</li>
            <li class="mt-2 underline underline-offset-4">{{$user->email}}</li>
            <li class="mt-2 underline underline-offset-4">@php echo session('phone') @endphp</li>
            
            
        </ul>
        {{-- ligne de separtion gris --}}
        <div name="" class=" mt-8 border-1 bg-light-grey3-atypik h-1 mb-6 ml-5 mr-5">
        </div>
        <div class=" ml-10 font-semibold text-dark-green-atypik text-3xl mt-12">
            <h2> Moyen de paiement</h2>
        </div>
        {{-- moyen de payement --}}
        <p class="text-light-green-atypik opacity-50 ml-8 sm:ml-10 inline-flex"><i>(Veuillez choisir un moyen de paiement)</i> </p>
        <div class="text-dark-grey-atypik ml-8 sm:ml-10 inline-flex">
            <div onclick='toggleNameVisa()' name='mdp' class="cursor-pointer rounded-xl mr-5 sm:mr-10  text-white bg-dark-grey-atypik hover:bg-light-green-atypik font-bold py-1 px-5" id="visa"> <i class=" active:text-light-green-atypik text-8xl lg:text-10xl fa-brands fa-cc-visa"></i></a>
            </div>
            <div onclick='toggleNameMastercard()' class="cursor-pointer rounded-xl text-white bg-dark-grey-atypik hover:bg-light-green-atypik font-bold py-1 px-5" id="mastercard"> <i class=" active:text-light-green-atypik text-8xl lg:text-10xl  fa-brands fa-cc-mastercard"></i></a>
            </div>
        </div>
        
        <div class="text-dark-grey-atypik  ml-8 sm:ml-10 inline-flex mt-5">
            <div onclick='toggleNameAmericanExpress()' class="cursor-pointer rounded-xl mr-10  text-white bg-dark-grey-atypik hover:bg-light-green-atypik font-bold py-1 px-5" id="americanExpress"> <i class=" active:text-light-green-atypik text-8xl lg:text-10xl  fa-brands fa-cc-amex"></i></a>
            </div>
        </div>



        <form action="/panier5/{{$logement->id}}" method="get">
        <div class=" ml-10 ">
            <label class=" block text-dark-grey-atypik mt-4 text-lg font-semibold break-normal" for="">Titulaire</label>
            <input name='titulaire' placeholder="Nom du titulaire de la carte" class="placeholder-light-grey1-atypik border-1 bg-light-grey3-atypik  w-11/12 mb-3  p-2 rounded" type="text" required>
            @if($errors->has('titulaire'))
            <br>
                    <span class="text-red-atypik text-center text-sm">
                        Doit être uniquement composer de lettres
                    </span>
                    @endif
        </div>

        <div class="ml-10 xl:flex">
            <div class="grow ">
                <label class=" text-dark-grey-atypik mt-4 text-lg font-semibold break-normal" for="">Numéro de carte</label><br>
                <input name='number' placeholder="xxxx xxxx xxxx xxxx" class=" w-11/12 placeholder-light-grey1-atypik border-1 bg-light-grey3-atypik  p-2 rounded" type="number" required>
                @if($errors->has('number'))
                <br>
                    <span class="text-red-atypik text-center text-sm">
                        Doit faire entre 16 et 19 charactères
                    </span>
                    @endif
            </div>
            <div class="xl:ml-1 grow ">
                <label class=" xl:ml-1  text-dark-grey-atypik mt-4 text-lg font-semibold" for="">Crypto</label><br>
                <input name='crypto' placeholder="xxx" class=" w-11/12 xl:w-10/12 xl:ml-2 placeholder-light-grey1-atypik border-1  bg-light-grey3-atypik   p-2 rounded" type="number" required>
            @if($errors->has('crypto'))
            <br>
                    <span class="text-red-atypik text-center text-sm">
                        doit être composé de 3 chiffres
                    </span>
                    @endif             
            </div>
           
        </div>

        <div class=" mr-10 ml-10 pr-10 flex justify-between">
            <span>
                <input type="checkbox" name="cgv" class=" p-4 border-dark-grey-atypik" required>
                <label for="souvenir" class="text-dark-grey-atypik text-sm font-medium ">J'ai bien pris connaissance et j'accepte les conditions générales et particulieres de vente, ainsi que les documents d'information et les conditions générales et particulières de vente des assurances. <br>
                    <a href="/conditions-generales" class="text-dark-grey-atypik underline dark:md:hover:bg-dark-grey-atypik">Voir les CGV </a> et <a href="/politique-donnees-personnelles" class=" underline
                             hover:underline  "> les documents d'informations des assurances.</a>
                </label>
            </span>
        </div>

        <div class="mb-6 mt-6 pr-14 flex items-end  justify-end ">
            <button id="paiement" class="bg-light-green-atypik hover:bg-dark-green-atypik p-2 w-11/12 rounded-full text-light-grey1-atypik" disabled='disabled'>Confirmer & Payer</button>
        </div>
    </div>
    <input type="text" class="hidden" id="hidden" name="MDP">
    </form>
    {{-- detaille et contenu --}}

    <div class="  sm:w-1/3 md:w-4/12 sm:ml-10 mt-6 sm:mt-0 rounded-3xl shadow-dark-grey-atypik shadow-moi border-2">
        <div class=" w-auto">
            <img class=" rounded-t-3xl " src="{{$logement->image }}" alt="">
        </div>
        <h3 class="  text-dark-grey-atypik text-2xl ml-3 md:ml-8 mt-6 font-semibold"> {{$logement->nom}} </h3>
        <h3 class="  text-dark-grey-atypik text-2xl ml-3 md:ml-8 mt-2 font-semibold ">
        </h3>
            <span class="md:ml-8 mt-2 fa fa-star border-1 border-dark-green-atypik text-light-green-atypik"></span>
            <span class="fa fa-star  text-light-green-atypik"></span>
            <span class="fa fa-star  text-light-green-atypik"></span>
            <span class="fa fa-star  text-light-green-atypik"></span>
            <span class="fa fa-star  text-light-green-atypik"></span>

        <h4 class=" ml-3 md:ml-8 text-xs font-bold text-dark-grey-atypik"> Hébergements</h4>
        <p class=" ml-4 mt-2 text-xs font-bold text-dark-grey-atypik "><i class=' mr-2 h-4 w-4   text-light-green-atypik fas'>&#xf186;</i> @php echo session('nuitée') @endphp nuits du @php echo session('dateA') @endphp au @php echo session('dateD') @endphp</p>
        <p class=" ml-4  mt-2 text-xs font-bold text-dark-grey-atypik"><i class=" mr-2 h-4 w-4   text-light-green-atypik fa-solid fa-person"></i> @php echo session('nbrVac') @endphp personnes</p>
        <div class=" mt-4 border-1 bg-dark-grey-atypik h-1 mb-6 ml-5 mr-5">
        </div>

        <h3 class=" ml-4 font-bold text-dark-grey-atypik  ">
            Pour un tarif total du :
        </h3>
        <p class=" mr-4 text-right font-extrabold text-light-green-atypik"> @php echo session('prixTotal') @endphp <i class="text-base text-light-green-atypik fa">&#xf153;</i>
            HT</p>
        <p class="mr-4 mb-12 text-xs text-right font-bold text-dark-grey-atypik">non flexible <br> non modifiable non remboursable</p>


        <h3 class=" ml-4 font-bold text-dark-grey-atypik">
            A propos de nos tarifs
        </h3>
        <p class="ml-4 mb-4 text-xs font-semibold text-dark-grey-atypik ">Les prix affichés comprennent l'hébergement ainsi que toutes les charge et taxes (excepté la taxe de séjour).
        </p>
        <p class=" ml-4 mb-6 text-xs font-semibold text-dark-grey-atypik ">Appelez nos conseillers au 070246100 (0,16<i class="text-sx  fa">&#xf153;</i> /min), du lundi au vendredi de 10h à 19h, le samedi 10h à 17h.</p>
    </div>
</section>

@endsection