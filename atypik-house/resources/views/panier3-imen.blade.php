@extends('base.base')
@section('content')
    {{-- barre avancement de commande --}}
 <section class="flex mx-auto sm:h-24 m-6 sm:px-8 sm:py-2 sm:p-4 sm:w-3/4 sm:gap-2 ">   

      <div class="place-self-center flex flex-col w-40">      
         <i class="flex1 inline-block fa-solid fa-suitcase fa-2xl  text-dark-green-atypik"></i> 
               <span class="flex justify-center text-xs text-dark-green-atypik">Récapitulatif</span>
      </div>      
      <div class="inline-block self-center mt-5 w-1/4 mx-auto">      
         <div class="w-full bg-dark-grey-atypik h-1 mb-6">         
            <div class=" bg-dark-green-atypik h-1" style="width: 100%">
            </div>       
         </div>     
      </div>  

     <div class="place-self-center flex flex-col w-40">       
        <i class="flex2  text-dark-green-atypik inline-block fa-solid fa-bell-concierge fa-2xl"></i>
               <span class="flex justify-center text-xs text-center text-dark-green-atypik ">Activités & services
                </span>     
     </div>      
     <div name="" class="inline-block self-center mt-5 w-1/4 mx-auto">       
        <div class="w-full bg-dark-grey-atypik h-1 mb-6">         
            <div class=" bg-dark-green-atypik h-1" style="width: 100%">
            </div>       
        </div>     
    </div>  

   
    <div class="place-self-center flex flex-col w-40">
       <i class="flex3 inline-block fa-solid fa-address-card fa-2xl text-dark-green-atypik"></i>
       <span class="flex justify-center text-xs text-dark-green-atypik">Coordonnées</span>
    </div>

    <div name="" class="inline-block self-center mt-5 w-1/4 mx-auto">       
        <div class="w-full bg-light-grey3-atypik h-1 mb-6">         
            <div class=" bg-dark-green-atypik h-1" style="width: 50%">
            </div>       
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
{{-- section coordonner et valider commande panier3  --}}

{{-- coordonner --}}

<section class=" md:mt-6 sm:mb-10 flex-row items-center justify-between  sm:flex p-1 sm:p-2 md:p-12 ">

 <div class="sm:w-3/5 text-lg font-medium  shadow-moi border-2 md:w-7/12  rounded-3xl shadow-dark-grey-atypik   ">
    <div class="ml-10 sm:ml-2 md:ml-10 font-semibold text-dark-green-atypik text-3xl mt-8 md:mt-16">
      <h2> Mes coordonnées</h2>
    </div>
    <form action="/panier4/{{$logement->id}}" method="get">
    <div class="ml-10 sm:ml-2 md:ml-10">
        <label class="block text-dark-grey-atypik mt-4 text-lg font-semibold" for="">Nom</label>
        <input placeholder="{{$user->nom}}" disabled='disabled'  class ="placeholder-light-grey1-atypik border-1 bg-light-grey3-atypik  w-11/12 mb-3  p-2 rounded" type="text">
    </div>
    <div class="ml-10 sm:ml-2 md:ml-10 ">
        <label class="block text-dark-grey-atypik text-lg font-semibold" for="">Prénom</label>
        <input placeholder="{{$user->prenom}}" disabled='disabled'  class ="placeholder-light-grey1-atypik border-1 bg-light-grey3-atypik  w-11/12 mb-3 p-2 rounded " type="text">
    </div>
    <div class="ml-10 sm:ml-2 md:ml-10 ">
        <label class="block text-dark-grey-atypik text-lg font-semibold" for="">Email</label>
        <input placeholder="{{$user->email}}" disabled='disabled' class ="placeholder-light-grey1-atypik border-1 bg-light-grey3-atypik  w-11/12 mb-3 p-2 roundedborder-2 " type="email">
    </div>
    <div class="ml-10 sm:ml-2 md:ml-10 ">
        <label class="block text-dark-grey-atypik text-lg font-semibold" for="">Téléphone</label>
        <input placeholder="Votre numéro de téléphone" class ="placeholder-light-grey1-atypik border-1 bg-light-grey3-atypik  w-11/12 mb-3 p-2 rounded " type="number" min='1' name="phone" id='phone' required>
    @if($errors->has('phone'))
    <br>
    <span class="text-red-atypik text-center text-sm">
        Le numéro de téléphone doit être composé de 10 chiffres
    </span>
    @endif
    </div>
    
    <div class="ml-10 sm:ml-2 md:ml-10 ">
        <label class="block text-dark-grey-atypik text-lg font-semibold" for="">Adresse</label>
        <input placeholder="Votre adresse postale" class =" placeholder-light-grey1-atypik border-1 bg-light-grey3-atypik  w-11/12 mb-3 p-2 rounded " type="text" name="adresse" id="adresse" required>
        @if($errors->has('adresse'))
    <br>
    <span class="text-red-atypik text-center text-sm">
        L'adresse doit faire minimum 5 charactères, être composé d'un chiffre et d'une lettre
    </span>
    @endif
    </div>
    <div class="ml-10 sm:ml-2 md:ml-10">
        <label class="block text-dark-grey-atypik text-lg font-semibold" for="">Code Postal</label>
        <input placeholder="Votre code postale"  class ="placeholder-light-grey1-atypik border-1 bg-light-grey3-atypik  w-11/12 mb-3 p-2 rounded"  type="number" name="CP" id="CP" required>
        @if($errors->has('CP'))
    <br>
    <span class="text-red-atypik text-center text-sm">
        Le code Postal doit être composé de 5 chiffres
    </span>
    @endif
    </div>
    <div class=" ml-10 sm:ml-2 md:ml-10 ">
        <label class="block text-dark-grey-atypik text-lg font-semibold" for="">Ville</label>
        <input placeholder="Votre ville" class ="placeholder-light-grey1-atypik border-1 bg-light-grey3-atypik  w-11/12 mb-3 p-2 rounded" type="text" name="ville" id="ville" required>
        @if($errors->has('ville'))
    <br>
    <span class="text-red-atypik text-center text-sm">
        Le nom de ville doit être composé uniquement de lettre
    </span>
    @endif
    </div>
    <div class="ml-10 sm:ml-2 md:ml-10 ">
        <label class="block text-dark-grey-atypik text-lg font-semibold" for="">Pays</label>
        <input placeholder="Votre pays" class ="placeholder-light-grey1-atypik border-1 bg-light-grey3-atypik  w-11/12 mb-3 p-2 rounded " type="text" name="pays" id="pays" required>
        @if($errors->has('pays'))
    <br>
    <span class="text-red-atypik text-center text-sm">
    Le nom du pays doit être composé uniquement de lettre
    </span>
    @endif
    </div>
    <div class="mb-6 mt-6 sm:pr-14 flex items-center justify-center sm:items-end  sm:justify-end ">
        <button class="bg-light-green-atypik hover:bg-dark-green-atypik p-2 w-40 rounded-full text-white" id='validPanier3' >Valider</button>
    </div>  
 </div>
 </form>


 {{-- detaille et contenu --}}

 <div class="  sm:w-1/3 md:w-4/12 sm:ml-10 mt-6 sm:mt-0 rounded-3xl shadow-dark-grey-atypik shadow-moi border-2">
    <div class=" w-auto">
        <img class =" rounded-t-3xl " src="{{$logement->image }}" alt="">
    </div>
    <h3 class="  text-dark-grey-atypik text-2xl ml-8 mt-6 font-semibold"> {{$logement->nom }} </h3>
    <h3 class="  text-dark-grey-atypik text-2xl ml-8 mt-2 font-semibold "> 
    </h3>
    
        <span class="ml-8 mt-2 fa fa-star border-1 border-dark-green-atypik text-light-green-atypik"></span>
        <span class="fa fa-star  text-light-green-atypik"></span>
        <span class="fa fa-star  text-light-green-atypik"></span>
        <span class="fa fa-star  text-light-green-atypik"></span>
        <span class="fa fa-star  text-light-green-atypik"></span>
     
    <h4 class=" ml-3 mt-3 text-xs font-bold text-dark-grey-atypik"> Hébergements</h4>
    <p class=" ml-4 mt-2 text-xs font-bold text-dark-grey-atypik "><i  class=' mr-2 h-4 w-4   text-light-green-atypik fas'>&#xf186;</i> @php echo session('nuitée') @endphp nuits du @php echo session('dateA') @endphp au @php echo session('dateD') @endphp</p>
    <p class=" ml-4  mt-2 text-xs font-bold text-dark-grey-atypik"><i  class=" mr-2 h-4 w-4   text-light-green-atypik fa-solid fa-person"></i>  @php echo session('nbrVac') @endphp personnes</p>
    <div class=" mt-4 border-1 bg-light-grey3-atypik h-1 mb-6 ml-5 mr-5">              
     </div>

     <h3 class=" ml-4 font-bold text-dark-grey-atypik  ">  
        Pour un tarif total de : 
    </h3>
        <p class=" mr-4 text-right font-extrabold text-light-green-atypik"> @php echo session('prixTotal') @endphp <i class="text-base text-light-greenn-atypik fa">&#xf153;</i>
            HT</p>
        <p class="mr-4 mb-10 text-xs text-right font-bold text-dark-grey-atypik">non flexible <br> non modifiable non remboursable</p>
 
    <h3 class=" ml-4 font-bold text-dark-grey-atypik" >
        A propos de nos tarifs
     </h3>
     <p class="ml-4 mb-4 text-xs font-semibold text-dark-grey-atypik ">Les prix affichés comprennent l'hébergement ainsi que toutes les charge et taxes (excepté la taxe de séjour).
     </p>
     <p class=" ml-4 mb-6 text-xs font-semibold text-dark-grey-atypik ">Appelez nos conseillers au 070246100 (0,16<i class="text-sx  fa">&#xf153;</i> /min), du lundi au vendredi de 10h à 19h, le samedi 10h à 17h.</p>
</div>
</section>
@endsection