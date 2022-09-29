    @extends('base.base')
    @section('content')
    <header class="-z-10 bg-center overflow-hidden h-96 opacity-45 shadow-lg mb-3">
        <video autoplay muted loop id="myVideo" class="w-full h-auto align-center">
            <source src="{{ asset('/video/4seasons.mp4')}}" type="video/mp4">
        </video>
    </header>

    <!-- formulaire 2 -->
    <div class="flex flex-wrap w-full h-auto mx-auto">


        <div class="dblock px-8 mx-auto rounded-lg mt-6 shadow-lg p-4">

            <form action="/recherche" method="get">

                <div class="flex flex-wrap mx-6 mb-2">

                    <div class="w-full px-3 mb-2 md:mb-0 ">
                        <label class="block tracking-wide text-dark-grey-atypik text-base mb-2 font-bold"
                            for="destination">
                            Destination :
                        </label>
                        <input
                            class="appearance-none block w-full bg-light-grey3-atypik text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="destination" name="destination" type="text" placeholder="Lyon">
                    </div>

                    <div class="w-full px-3 text-dark-grey-atypik mb-2">
                        <label class="block tracking-wide text-dark-grey-atypik text-base font-bold mb-2"
                            for="nombre-vacanciers">
                            Nombre de vacanciers :
                        </label>
                        <input
                            class="appearance-none block w-full bg-light-grey3-atypik text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="nbVacancier" min="1" name="nombre-vacanciers" type="number" placeholder="5">
                    </div>

                    <div class="w-full flex flex-wrap mb-2 px-3">
                        <label class="text-base block tracking-wide text-dark-grey-atypik font-bold mb-2"
                            for="date-debut">
                            Date arrivée:</label>
                        <input
                            class="appearance-none block w-full bg-light-grey3-atypik text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="arriver" name="date-debut" type="date" placeholder="">
                    </div>

                    <div class="w-full flex flex-wrap mb-2 px-3 ">
                        <label class="block tracking-wide text-dark-grey-atypik text-base font-bold mb-2" for="date-fin"
                            name="date-fin">
                            Date départ:</label>
                        <input
                            class="appearance-none block w-full bg-light-grey3-atypik text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-depart" type="date" placeholder="">

                    </div>
                </div>

                <div class=" flex flex-wrap mb-2 ">
                    <button type="submit"
                        class="bg-dark-green-atypik hover:bg-light-green-atypik text-white font-bold p-4 rounded-full mx-auto w-1/3 mb-2 text-auto">
                        Recherche
                    </button>
                </div>
            </form>

        </div>
        <!-- fin formulaire 2 -->
        <!-- debut carrousel-->
        <div class="dblock px-3 rounded-lg mt-6 mx-auto shadow-lg p-4">
            <div class="relative mx-1 rounded-xl ">

                @foreach($categories as $categorie)
                <div class="slide relative ">
                    <img class="w-full h-[400px]  object-cove" src="{{ $categorie->image }}">

                </div>
                @endforeach

            </div>
            <br>

            <!-- The dots -->
            <div class="flex justify-center items-center space-x-5">
                <div class="dot w-4 h-4 rounded-full cursor-pointer bg-dark-green-atypik" onclick="currentSlide(1)">
                </div>
                <div class="dot w-4 h-4 ml-4 mr-4 rounded-full cursor-pointer bg-dark-green-atypik"
                    onclick="currentSlide(2)">
                </div>
                <div class="dot w-4 h-4 rounded-full cursor-pointer bg-dark-green-atypik" onclick="currentSlide(3)">
                </div>
            </div>

        </div>
        <!--fin carrousel-->

        <!-- debut card 3 -->
        <div class="dblock px-8 py-4 mx-auto rounded-lg mt-6 shadow-lg text-dark-grey-atypik">
            <p class="mb-8 mt-4 mx-4  text-2xl">Des vacances Atypik pour des personnes uniques.</p>



            <div class="flex mb-auto mt-auto mx-4 items-center ">
                <i class="fa-solid fa-house text-dark-green-atypik text-7xl"></i>
                <p class="text-dark-grey-atypik ml-4 text-xl">Des
                    logements pour tous les gouts</p>
            </div>

            <div class="flex mb-10  mt-10 mx-4 items-center">
                <i class="fa-solid fa-circle-dollar-to-slot text-dark-green-atypik text-7xl "></i>
                <p class="text-dark-grey-atypik ml-4 text-xl">Des prix abordables et un paiement en toute
                    sécurité
                </p>

            </div>

            <div class="flex mb-4  mx-4 items-center">
                <i class="fa-solid fa-credit-card text-dark-green-atypik text-7xl "></i>
                <p class="text-dark-grey-atypik ml-4 text-xl">Obtenez des points de fidélité
                    et
                    des
                    réductions.</p>
            </div>
        </div>
        <!-- fin card 3-->
    </div>



    <h1 class=" mt-6 text-dark-grey-atypik text-center text-3xl font-semibold">DECOUVREZ NOS HEBERGEMENTS
        INSOLITES
    </h1>

    <!-- barre horizontale verte -->
    <div class="h-1 bg-light-green-atypik mt-6 mb-6 w-1/4 mx-auto"></div>


    <!-- Carousel adrien -->
    <div id="wrapper">
        <div id="carousel">
            <div id="content">

                <!-- images -->
                @foreach($categories as $categorie)
                <div class="item relative w-[400px] h-[400px]  m-8">
                    <a href="/categories/{{$categorie->id}}">
                        <img class=" w-[400px] h-[400px]  rounded-xl object-cover" src="{{ $categorie->image }}">
                        <div
                            class="absolute rounded-b-xl bottom-0 w-full  px-5 py-3 bg-black/40 text-center font-bold text-xl font-serif text-white">
                            {{ $categorie->nom }}
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>

        <!-- Boutons du Carousel -->
        <button id="prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="none" d="M0 0h24v24H0V0z" />
                <path d="M15.61 7.41L14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z" />
            </svg>
        </button>
        <button id="next">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="none" d="M0 0h24v24H0V0z" />
                <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z" />
            </svg>
        </button>
    </div>

    <!-- Fin de Carousel -->

    <h2 class="mt-6 text-dark-grey-atypik text-center text-3xl font-semibold">LES AVIS DE NOS VOYAGEURS</h2>

    <!-- barre horizontale verte -->
    <div class="h-1 bg-light-green-atypik mt-5 w-1/4 mx-auto"></div>

    <section class="flex p-8 justify-evenly mt-4">
        <!-- Card avis n°1 -->
@foreach($best4Avis as $avis)
        <div class="w-1/5">
            <img class="rounded-full border border-gray-100 shadow-sm mx-auto"
                src='https://randomuser.me/api/portraits/men/21.jpg' alt="user image" />
            <h5 class="text-light-green-atypik text-center"><b>{{$user->where('id',$avis->user_id)->value('prenom')}} {{$user->where('id',$avis->user_id)->value('nom')}}</b></h5>
            <div class="text-center">
                @if($avis->note == 4)
                <i class="fa-solid fa-star text-light-green-atypik"></i>
                <i class="fa-solid fa-star text-light-green-atypik"></i>
                <i class="fa-solid fa-star text-light-green-atypik"></i>
                <i class="fa-solid fa-star text-light-green-atypik"></i>
                <i class="fa-solid fa-star text-light-grey3-atypik"></i>
                @elseif($avis->note == 5)
                <i class="fa-solid fa-star text-light-green-atypik"></i>
                <i class="fa-solid fa-star text-light-green-atypik"></i>
                <i class="fa-solid fa-star text-light-green-atypik"></i>
                <i class="fa-solid fa-star text-light-green-atypik"></i>
                <i class="fa-solid fa-star text-light-green-atypik"></i>
                @endif

            </div>


            <p class="text-center text-dark-grey-atypik">{{$avis->text}}</p>
        </div>
@endforeach
    </section>


    <!-- encart pour proposer un hebergement -->
    <div class="flex flex-col h-96 bg-devenir-hote bg-cover py-8 justify-center font-bold">
        <h2 class="text-center text-light-grey1-atypik text-4xl">Proposez votre hébergement atypique sur
            Atypik-houseimmo.com et augmentez vos revenus</h2>
        <div class="flex justify-center pt-12">
            <button
                class="shadow-lg bg-light-green-atypik hover:bg-dark-green-atypik text-light-grey1-atypik py-4 px-4 h-full rounded-full inline-flex items-center"><a
                    href="/devenir-hote">Devenir Hôte</a></button>

        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>



















    @endsection