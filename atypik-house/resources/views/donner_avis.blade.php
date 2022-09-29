@extends('base.base')
@section('content')






<div class="dblock px-8 mx-auto rounded-lg shadow-lg p-4 m-32">
    <h3 class="text-light-green-atypik">AVIS</h3>
    <form action="/confirmAvis/{{$logement->id}}" method="get">


        <div class="flex flex-wrap mx-6 mb-2">
        <input type="text" name="note" class="hidden">
            <input type="radio" class="hidden" > <span class="etoile text-light-grey3-atypik ml-3 cursor-pointer text-5xl">★</span></input>
            <input type="radio" class="hidden" > <span class="etoile text-light-grey3-atypik cursor-pointer text-5xl">★</span>
            <input type="radio" class="hidden" > <span class="etoile text-light-grey3-atypik cursor-pointer text-5xl">★</span>
            <input type="radio" class="hidden" > <span class="etoile text-light-grey3-atypik cursor-pointer text-5xl">★</span>
            <input type="radio" class="hidden" > <span class="etoile text-light-grey3-atypik cursor-pointer text-5xl">★</span>

            <div class="w-full px-3 mb-2 md:mb-0 ">
                <label class="block tracking-wide text-dark-grey-atypik text-base mb-2 font-bold" for="grid-destination">
                    Votre avis :
                </label>
                <textarea name="avis" class="appearance-none block w-full bg-light-grey3-atypik text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="destination" required></textarea>
                @if($errors->has('text'))
                    <span class="text-red-atypik text-center text-sm">
                        Le text doit au faire au minimum 5 charactères et au maximum 255.
                    </span>
                    @endif
            </div>




        </div>

        <div class=" flex flex-wrap mb-2 ">
            <p><button type="submit" class="bg-light-green-atypik hover:bg-dark-green-atypik  w-11/12 ml-5 mb-6 rounded-full  text-light-grey1-atypik  p-7 " id="buttonAvis" disabled>
                    <h3 class="leading-3 text-lg font-semibold mb-0"> Confirmer</h3>
                </button></p>
        </div>
    </form>

</div>

@endsection