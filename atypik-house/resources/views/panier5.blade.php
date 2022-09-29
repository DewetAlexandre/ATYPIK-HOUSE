@extends('base.base')
@section('content')
    {{-- detaille et contenu --}}
    <section>
        
        <h1 class="text-center  py-8 ml-4 mt-2 text-3xl font-bold text-dark-grey-atypik">Confirmation de votre réservation</h1>
        
        <div class="max-w-2xl mx-auto px-4 py-8 grid-cols-1 gap-y-10 gap-x-8 sm:grid-cols-1  md:grid-cols-2 lg:grid-cols-3 xl-grid-cols-4 w-3/4  rounded-2xl border-2 shadow-lg ">
 
            <div class=" relative overflow-hidden  rounded-lg" >
                <img src="{{ asset('$logement->image') }}"alt="">
            </div>
            
            <div>
                <h3 class="text-dark-grey-atypik text-2xl ml-6 mt-6 font-semibold"> {{$logement->nom }}
                </h3>    
                <div class="font-semibold ml-6" >
                    <span class="fa fa-star border-1 border-dark-green-atypik text-dark-green-atypik"></span>
                    <span class="fa fa-star  text-dark-green-atypik"></span>
                    <span class="fa fa-star  text-dark-green-atypik"></span>
                    <span class="fa fa-star  text-dark-green-atypik"></span>
                    <span class="fa fa-star  text-dark-green-atypik"></span>
                </div>
            </div>

            <h3 class="text-dark-grey-atypik text-2xl  ml-6 mt-5 mb-5 font-semibold"> Hébergements</h3>
            <p class=" ml-4 mt-2 text-xs font-bold text-dark-grey-atypik ">
                <i class=' mr-2 h-4 w-4   text-dark-green-atypik fas'>&#xf186;</i> @php echo session('nuitée') @endphp nuits du @php echo session('dateA') @endphp au @php echo session('dateD') @endphp</p>
            <p class=" ml-4  mt-2 text-xs font-bold text-dark-grey-atypik"><i class=" mr-2 h-4 w-4   text-dark-green-atypik fa-solid fa-person"></i>
            @php echo session('nbrVac') @endphp  personnes</p>
            <div class=" mt-4 border-1 bg-dark-grey-atypik h-1 mb-6 ml-5 mr-5">
            </div>

            <h3 class=" ml-4 font-bold text-dark-grey-atypik  ">
                Pour un tarif total de :
            </h3>
            <p class=" mr-4 text-right font-extrabold text-dark-green-atypik"> @php echo session('prixTotal') @endphp 
                <i class="text-base text-dark-green-atypik fa">&#xf153;</i> TTC
            </p>
            
            <p class="mr-4 mb-20 text-xs text-right font-bold text-dark-grey-atypik">non flexible <br> non modifiable non
                remboursable</p>
                    
            <p class="mr-4 mb-20 text-xs text-right font-bold text-dark-grey-atypik">flexible <br> modifiable et
                remboursable</p>
            



            <p class=" ml-4 mb-6 text-xs font-semibold text-dark-grey-atypik ">Appelez nos conseillers au 070246100 (0,16<i
                    class="text-sx  fa">&#xf153;</i> /min), du lundi au vendredi de 10h à 19h, le samedi 10h à 17h.</p>
        </div>
        <div>
            <h2 class="text-center  py-8 ml-4 mt-2 text-xl font-bold text-dark-grey-atypik ">Nous vous remercions de votre
                réservation et
                nous vous souhaitons un très bon séjours!</h2>
        </div>
    </section>
@endsection
