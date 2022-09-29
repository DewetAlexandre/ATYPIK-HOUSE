let $inscription = document.getElementById('inscription');
let $connexion = document.getElementById('connexion');


function hideInscription(){
    $inscription.className = "hidden";
    $connexion.className = "flex min-h-[30em] w-full lg:w-2/3 p-7 my-11 mx-auto border-2 border-solid border-red-50 rounded-xl shadow-xl";
}

function hideConnexion(){
    $inscription.className = "flex min-h-[30em] w-full lg:w-2/3 p-7 my-11 mx-auto border-2 border-solid border-red-50 rounded-xl shadow-xl";
    $connexion.className = "hidden";
}

function showOrHideMdp($id){
    let $mdp = document.getElementById($id);
    // $icon = document.getElementById($eye);

    if($mdp.getAttribute('type') == 'password'){
        $mdp.setAttribute('type','text');
        // $icon.className = "fa-solid fa-eye-slash absolute top-[0.4rem] right-2";
    } else {
        $mdp.setAttribute('type','password')
        // $icon.className = 'fa-solid fa-eye absolute top-[0.4rem] right-2';
    }
        
}

// modalConnexion du header

let $modal = document.getElementById('overlay');

function showModal(){
    $modal.className = "bg-black bg-opacity-50 absolute inset-0 flex justify-center items-center";
}

function hideModal(){
    $modal.className = "hidden"
}


