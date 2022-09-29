@extends ('base.base')

@section ('content')


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panier</title>
</head>

<body>

  <section class="flex mx-auto sm:h-24 m-6 sm:px-8 sm:py-2 sm:p-4 sm:w-3/4 sm:gap-2 ">

    <div class="place-self-center flex flex-col w-40">
      <i class="flex1 inline-block fa-solid fa-suitcase fa-2xl text-dark-green-atypik"></i>
      <span class="flex justify-center text-xs text-dark-green-atypik">Récapitulatif</span>
    </div>

    <div class="inline-block self-center mt-5 w-1/4 mx-auto">
      <div class="w-full bg-light-grey3-atypik h-1 mb-6">
        <div class=" bg-dark-green-atypik h-1" style="width: 50%"></div>
      </div>
    </div>

    <div class="place-self-center flex flex-col w-40">
      <i class="flex2 inline-block fa-solid fa-bell-concierge fa-2xl text-light-grey3-atypik"></i>
      <span class="flex text-center justify-center text-xs text-light-grey3-atypik">Activités & services</span>
    </div>

    <div class="inline-block self-center mt-5 w-1/4 mx-auto">
      <div class="w-full bg-light-grey3-atypik h-1 mb-6">
        <div class=" bg-light-grey3-atypik  h-1" style="width: 50%"></div>
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

  <section class="flex flex-col mx-auto md:w-11/12 lg:w-3/4 rounded-lg border-solid border-non border-2 shadow-xl p-8 bg-light-grey1-atypik">

    <div class="md:flex grid justify-items-center">

      <div class="mx-2 lg:mx-10 my-2 xl:w-3/5"><img src="{{$logement->image}}" alt="chalet"></div>

      <div class="md:flex md:flex-col mt-2 grid justify-items-center">

        <div>
          <h3 class="inline-block text-dark-grey-atypik text-lg font-bold">Chalet Des Grues Hautes Savoyardes</h3>
        </div>
        <div>
          <i class="place-self-center fa-solid fa-star text-light-green-atypik"></i>
          <i class="place-self-center fa-solid fa-star text-light-green-atypik"></i>
          <i class="place-self-center fa-solid fa-star text-light-green-atypik"></i>
          <i class="place-self-center fa-solid fa-star text-light-green-atypik"></i>
          <i class="place-self-center fa-solid fa-star-half-stroke text-light-green-atypik"></i>
        </div>
        <form action="/panier2/{{$logement->id}}" method="get">
          <div class="md:flex leading-[4] md:leading-[2] xl:leading-[4] grid items-center">

            <div class="text-dark-grey-atypik text-center">
              <h6>Votre date de réservation</h6>
              <div class="flex">
                <div date-rangepicker="" class="flow-root w-60 md:w-48">
                  <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                      <svg class="w-5 h-5 text-dark-grey-atypik dark:text-dark-grey-atypik" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                      </svg>
                    </div><input id='dateA' name="start" type="date" onchange="verifDate()" class="bg-light-grey1-atypik border border-light-grey2-atypik text-gray-900 text-sm rounded-sm block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white datepicker-input" placeholder="Date d'arrivée" required>
                  </div>

                  <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                      <svg class="w-5 h-5 text-dark-grey-atypik dark:text-dark-grey-atypik" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                      </svg>
                    </div><input id='dateD' name="end" type="date" onchange="verifDate()" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white datepicker-input" placeholder="Date de départ" required>
                  </div>
                </div>
                <div class="mt-5">
                  <div class="flex justify-start mb-2">
                    <i class="fa-solid fa-person text-dark-green-atypik mx-2"></i>
                    <p class="text-dark-grey-atypik text-xs">{{$logement->capacite}} personnes</p>
                  </div>
                  <div class="flex justify-start mb-2">
                    <i class="fa-solid fa-square text-dark-green-atypik mx-2"></i>
                    <p class="text-dark-grey-atypik text-xs">{{$logement->superficie}} m²</p>
                  </div>
                </div>
              </div>
              <div id="messageErreurDate" class="flex items-center" style="visibility:hidden"><i class="fa-solid fa-triangle-exclamation text-red-atypik"></i>
                <p class="text-red-atypik">Date incorrect !</p>
              </div>
              <div>
                <h6>Nombre de vacanciers</h6>

                <div>
                  <label for="vacanciers" class="block text-sm font-light text-dark-grey-atypik"></label>
                  <input type="number" value="1" min="1" max='{{$logement->capacite}}' onchange="verifDate()" id="vacanciers" name="vac" class="bg-light-grey1-atypik border border-light-grey2-atypik text-dark-grey-atypik text-sm rounded-sm block w-full p-2.5 dark:bg-dark-grey-atypik dark:border-dark-grey-atypik dark:placeholder-light-grey3-atypik dark:text-light-grey1-atypik" placeholder="" required>
                </div>
              </div>
            </div>

            <div class="mt-20">

            </div>
          </div>
          <div>
            <div class="md:flex md:justify-between text-dark-grey-atypik mt-6 md:mt-12">
              <div onclick="" id='+' class="ml-9 md:ml-0 cursor-pointer text-dark-green-atypik italic underline text-sm ">
                Plus de détails +
              </div>

              <div onclick="" id='-' class="hidden cursor-pointer text-dark-green-atypik italic underline text-sm ">
                Moins de détails -
              </div>

              <div id="detail" name='detail' class="hidden">
                <p>{{$logement->particularite}}</p>
              </div>

              <div class="self-center mt-6 md:mt-0"><input id="buttonDate" type="button" class="bg-light-green-atypik hover:bg-dark-green-atypik text-white font-bold py-2 px-10 rounded-3xl" onclick="updateDate()" value="Mettre à Jour" disabled></input>

              </div>
            </div>




          </div>
      </div>
    </div>

    <div class="sm:flex w-fit flex-col md:px-2 py-2 border-t-light-grey2-atypik border-t-2 mt-6 md:ml-10">

      <div class="sm:flex justify-between text-dark-grey-atypik">

        <div class="flex self-center m-3 sm:m-0">
          <strong>Non flexible: </strong>
          <div> non modifiable, non remboursable</div>
          <div><i class="fa-solid fa-circle-info ml-1 ml-4 text-sm text-light-green-atypik"></i></div>
        </div>

        <div>
          <table class="table-auto">
            <thead>
              <tr class="font-thin">
                <th class="border-r-light-grey3-atypik border-r-2 px-4">Nuitées</th>
                <th class="border-r-light-grey3-atypik border-r-2 px-4">Prix</th>
                <th class="px-4">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-dark-green-atypik text-sm">
                <td class="border-r-light-grey2-atypik border-r-2 px-4 nuitS"></td>
                <td class="border-r-light-grey2-atypik border-r-2 px-4" name='prix'>
                  {{$logement->prix_jour}} € HT / nuit
                </td>
                <td class="border-r-light-grey2-atypik border-r-2 px-4" id="prixS" text-format="{PRICE} € HT">0 € HT</td>
                <input type="text" class="hidden" id='prixTotalNF' name="prixTotalNF" value="0">
              </tr>
            </tbody>
          </table>
        </div>


        <div class="self-center hidden" id="redButtonS">
          <button class="bg-red-atypik  text-white font-bold py-2  px-16 rounded-3xl" disabled><span>Choisir</span></button>
          <div><i class="fa-solid fa-triangle-exclamation text-red-atypik"></i>
            <p class="text-red-atypik">Coût du voyage supérieur à 100.000€</p>
          </div>
        </div>
        <div class="self-center" id="greenButtonS">
          <button id="buttonsChoixNoFlex" name='flexibility' value='no' class="bg-green-600 hover:bg-green-600 text-white font-bold py-2  px-16 rounded-3xl" disabled><span>Choisir</span></button>
        </div>

      </div>

      <div class="flex flex-col px-1 py-2 border-t-light-grey3-atypik border-t-2 mt-6">

        <div class="sm:flex justify-between text-dark-grey-atypik">

          <div class="flex self-center m-3 sm:m-0">
            <strong>Flexible: </strong>
            <div>&nbspannulable et modifiable jusqu'au <br><span> 14/11/2022 </span></div>
            <div><i class="fa-solid fa-circle-info ml-1 ml-4 text-sm text-light-green-atypik"></i></div>
          </div>

          <div>
            <table class="table-auto ml-10">
              <thead>
                <tr class="font-thin">
                  <th class="border-r-light-grey3-atypik border-r-2 px-4">Nuitées</th>
                  <th class="border-r-light-grey3-atypik border-r-2 px-4">Prix</th>
                  <th class="px-4">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-dark-green-atypik text-sm">
                  <td class="border-r-light-grey1-atypik border-r-2 px-4 nuitA"></td>
                  <input type="text" class="hidden" id="nuitée" name='nuit' value="">
                  <td class="border-r-light-grey1-atypik border-r-2 px-4">{{$logement->prix_jour}} € HT / nuit</td>
                  <td class="px-4" id="prixA" text-format='{PRICE} € TTC'>0 € TTC</td>
                  <input type="text" class="hidden" id='prixTotalF' name="prixTotalF" value="0">
                </tr>
              </tbody>
            </table>
          </div>

          <div class="self-center hidden" id="redButtonA">
            <button class="bg-red-atypik  text-white font-bold py-2  px-16 rounded-3xl" disabled><span>Choisir</span></button>
            <div><i class="fa-solid fa-triangle-exclamation text-red-atypik"></i>
              <p class="text-red-atypik">Coût du voyage supérieur à 100.000€</p>
            </div>
          </div>
          <div class="self-center" id="greenButtonA">
            <button id="buttonsChoixFlex" name='flexibility' value='yes' class="bg-green-600 hover:bg-green-600 text-white font-bold py-2  px-16 rounded-3xl" disabled><span>Choisir</span></button>

          </div>
        </div>
      </div>

  </section>
  </form>

  <script>
    const prixJour = {{$logement->prix_jour}};
  </script>
  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

@endsection