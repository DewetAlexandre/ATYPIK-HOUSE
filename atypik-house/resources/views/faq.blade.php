@extends('base.base')
@section('content')

<h1 class="text-7xl text-center mt-4 text-light-green-atypik">F.A.Q</h1>

<div class="container">
    <div class="text-2xl text-dark-green-atypik">
        <h2>Je suis Voyageur </h2>
    </div><br>
    <ul>
        <details>
            <summary class="cursor-pointer">J'ai perdu un objet dans le logement lors de mon séjour.</summary>
            <li class="italic text-dark-grey-atypik ml-8 mt-2">Vous trouverez sur vos documents de voyage le numéro de
                téléphone
                de la résidence dans laquelle vous avez séjourné.
                Nous vous invitons à les contacter directement pour toutes informations sur les objets perdus.</li>
        </details><br>
        <details>
            <summary class="cursor-pointer">J'aimerais bloquer des dates sur mon calendrier.</summary>
            <li class="italic text-dark-grey-atypik ml-8 mt-2">Allez sur votre calendrier, cliquez sur la date de
                début
                de
                période, puis choisissez la fin de la période.
                Un petit menu va vous proposer de mettre ces dates en "bloquée" ou "disponible". Normalement, rien
                de
                plus simple.</li>
        </details><br>
        <details>
            <summary class="cursor-pointer">Je n'ai pas reçu mon cadeau fidélité.</summary>
            <li class="italic text-dark-grey-atypik ml-8 mt-2">Veuillez vous rendre dans la partie <a href="/contact"><u class="text-dark-green-atypik">contact</u> </a> , prendre contact avec le service client par mail ou par téléphone pour effectuer votre nouvelle demande de cadeaux fidélité.</li>
        </details><br>
        <details>
            <summary class="cursor-pointer">Je voudrais annuler mon sejour.</summary>
            <li class="italic text-dark-grey-atypik ml-8 mt-2">Pour obtenir un remboursement, vous devez apporter la
                preuve de
                votre incapacité à partir en vacances comme un certificat médical, par exemple. Essayez de vous entendre
                avec le propriétaire pour annuler votre location à moindre frais. Plus vous le contactez tôt, plus vous
                avez de chances d'obtenir un remboursement.</li>
        </details>
    </ul>
    <br>

    <div class="text-2xl  text-dark-green-atypik">
        <h2>Je suis Hôte</h2>
    </div><br>
    <ul>
        <details>
            <summary class="cursor-pointer">J'aimerais bloquer des dates sur mon calandrier.</summary>
            <li class="italic text-dark-grey-atypik ml-8 mt-2">Allez sur votre calendrier, cliquez sur la date de début
                de
                période, puis choisissez la fin de la période.
                Un petit menu va vous proposer de mettre ces dates en "bloquée" ou "disponible". Normalement, rien de
                plus simple.</li>
        </details><br>
        <details>
            <summary class="cursor-pointer">Mon logement a été abimé pendant un séjour.</summary>
            <li class="italic text-dark-grey-atypik ml-8 mt-2">Veuillez vous rendre dans la partie <a href="/contact"><u class="text-dark-green-atypik">contact</u> </a> , Ou nous évoquerons avec vous les dispositions à effectuer pour effectuer une demande de remboursement auprès de l'ancien hébergé.</li>
        </details><br>
        <details>
            <summary class="cursor-pointer">Je n'ai pas encore reçu le paiement du séjour réservé.</summary>
            <li class="italic text-dark-grey-atypik ml-8 mt-2">Si vous ne recevez pas de mail de confirmation
                dans
                l’heure
                qui
                suit votre commande, pensez à vérifier vos spams. Vous pouvez également retrouver le détail de
                votre
                réservation depuis votre compte en cliquant sur l’onglet « Mes réservations ».
                Si vous n'avez pas reçu votre email de confirmation ni dans vos spams ni dans votre boîte de
                réception
                et que votre réservation n’apparaît pas dans la rubrique « mes réservations », nous vous
                invitons à
                contacter notre service clients au 09 67 89 75 35</li>
        </details><br>
    </ul>

</div>





@endsection