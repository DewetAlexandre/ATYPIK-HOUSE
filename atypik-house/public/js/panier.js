
/*let rightArrow = document.querySelector('.rotate');
rightArrow.addEventListener('click',() =>{
    console.log('ok')
})*/

let divDetail = document.getElementById('detail');
let detailPlus = document.getElementById('+');
let detailMinus = document.getElementById('-');

function showDetail(){
    divDetail.classList.toggle('hidden');
    detailPlus.classList.toggle('hidden');
    detailMinus.classList.toggle('hidden');
}

//LOCAL STORAGE //

function ChangeTiretToSlash(a){
    let d = parseInt(a.slice(8,10));
    let m = parseInt(a.slice(5,7));
    let y = parseInt(a.slice(0,4));

    let slash = m+'/'+d+'/'+y;
    return slash;
}


function updateDate(){
    let dateA = document.getElementById('dateA').value;
    let dateD = document.getElementById('dateD').value;
    let vacancier = document.getElementById('vacanciers').value;
    
    let cDateA = ChangeTiretToSlash(dateA);
    let cDateD = ChangeTiretToSlash(dateD);

    dateA = new Date(cDateA);
    dateD = new Date(cDateD);


    let diff = Math.abs(dateD-dateA);
    let nuit = diff / (1000 * 3600 * 24);

    window.localStorage.clear();
    window.localStorage.setItem('nuit',nuit);
    window.localStorage.setItem('vacancier',vacancier);

    let inputNuitS = document.querySelector('.nuitS');
    let inputNuitA = document.querySelector('.nuitA');
    let inputNuitée = document.getElementById('nuitée');
    inputNuitS.textContent = nuit+' nuitées';
    inputNuitA.textContent = nuit+' nuitées';
    inputNuitée.value = nuit;


    // PRIX TOTAL SANS ASSURANCES //
    let prixS = document.getElementById('prixS');
    let inputPrixS = document.getElementById('prixTotalNF');
    prixS.textContent = prixS.getAttribute('text-format').replace('{PRICE}', ((prixJour)*nuit).toFixed(2));
    inputPrixS.value = ((prixJour)*nuit).toFixed(2);
    // CONDITION SANS ASSURANCES //
    if((prixJour)*nuit >= 100000){
        let redButtonS = document.getElementById('redButtonS');
        let greenButtonS = document.getElementById('greenButtonS');

        redButtonS.classList.toggle('hidden');
        greenButtonS.classList.toggle('hidden');
    } else {
        if(greenButtonS.getAttribute('class') == 'self-center hidden'){
            redButtonS.classList.toggle('hidden');
            greenButtonS.classList.toggle('hidden');
        }
    }

    // PRIX TOTAL AVEC ASSURANCES //
    let prixA = document.getElementById('prixA');
    let inputPrixA = document.getElementById('prixTotalF');
    prixA.textContent = prixA.getAttribute('text-format').replace('{PRICE}', (((prixJour)*nuit)+(((prixJour)*nuit)*0.1)).toFixed(2))
    inputPrixA.value = (((prixJour)*nuit)+(((prixJour)*nuit)*0.1)).toFixed(2);
    //CONDITION AVEC ASSURANCE //
    if(((prixJour)*nuit)+(((prixJour)*nuit)*0.1) >= 100000){
        let redButtonA = document.getElementById('redButtonA');
        let greenButtonA = document.getElementById('greenButtonA');

        redButtonA.classList.toggle('hidden');
        greenButtonA.classList.toggle('hidden');
    } else {
        if(greenButtonA.getAttribute('class') == 'self-center hidden'){
            redButtonA.classList.toggle('hidden');
            greenButtonA.classList.toggle('hidden');
        }
    }
}



function notFlexibility(){
    let inputFlexibility = document.getElementById('flexibility');
    inputFlexibility.value = 'no'
}





function updateServices(){
    // CONCIERGERIES
    let listCheckBoxConc = document.getElementsByName('checkBoxConc');
    let listConcHiddens = document.getElementsByName('concsHidden')
    let prixTotalConc = 0;
    let iConc = 0;
    listCheckBoxConc.forEach((checkbox) => {
        if(checkbox.checked) {
            prixTotalConc = prixTotalConc + (prixConcArray[iConc] * nuits);
        }
        iConc = iConc + 1;
    });

    
    
    // RESTAURATIONS
    var prixTotalRest = 0;
    var iRest = 0;
    var listprixRestaus = document.getElementsByName("prixRestaus");
    listprixRestaus.forEach((prixRestau) => {
        let nomName = "personnesRest" + iRest;
        personnesRest = document.getElementById(nomName);
        prixTotalRest = prixTotalRest + (prixRestau.value * personnesRest.value)
        iRest++;
    });

    // TOTAL SERVICES
    let inputPrixTotalRestau = document.getElementById('prixTotal');
    let inputPrixTotalRestauUpdate = document.getElementById('prixTotalUpdate');
    inputPrixTotalRestauUpdate.value = parseFloat(prixTotal + prixTotalConc + prixTotalRest).toFixed(2);
    inputPrixTotalRestau.textContent = inputPrixTotalRestau.getAttribute('text-format').replace('{PRICE}', 
    parseFloat(prixTotal + prixTotalConc + prixTotalRest).toFixed(2));


}

let hidden = document.getElementById('hidden');
let visa = document.getElementById('visa');
let mastercard = document.getElementById('mastercard');
let americanExpress = document.getElementById('americanExpress');
let buttonPay = document.getElementById('paiement');

function toggleNameVisa(){
    hidden.value = 'visa';
    visa.setAttribute('style','background-color:green')
    mastercard.removeAttribute('style')
    americanExpress.removeAttribute('style')
    buttonPay.removeAttribute('disabled')
}

function toggleNameMastercard(){
    hidden.value = 'master card';
    visa.removeAttribute('style')
    mastercard.setAttribute('style','background-color:green')
    americanExpress.removeAttribute('style')
    buttonPay.removeAttribute('disabled')
}

function toggleNameAmericanExpress(){
    hidden.value = 'american express';
    visa.removeAttribute('style')
    mastercard.removeAttribute('style')
    americanExpress.setAttribute('style','background-color:green')
    buttonPay.removeAttribute('disabled')
}



function verifDate() {
    let verifDateA = document.getElementById('dateA').value;
    let verifDateD = document.getElementById('dateD').value;

    let verifcDateA = ChangeTiretToSlash(verifDateA);
    let verifccDateD = ChangeTiretToSlash(verifDateD);

    verifDateA = new Date(verifcDateA);
    verifDateD = new Date(verifccDateD);

    let date = new Date();
    let today = date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate();
    let newDateA = verifDateA.getFullYear() + '-' + (verifDateA.getMonth() + 1) + '-' + verifDateA.getDate();
    let newDateD = verifDateD.getFullYear() + '-' + (verifDateD.getMonth() + 1) + '-' + verifDateD.getDate();

    let buttonsChoixNoFlex = document.getElementById('buttonsChoixNoFlex');
    let buttonsChoixFlex = document.getElementById('buttonsChoixFlex');
    let messageErreurDate = document.getElementById('messageErreurDate');
    let buttondate = document.getElementById('buttonDate');

    console.log(buttonsChoixNoFlex);
    console.log(buttonsChoixFlex);
    // suppression dateA > today pour quelque test //
    if(newDateA < newDateD){
        buttondate.disabled = false;
        buttonsChoixNoFlex.disabled = false;
        buttonsChoixFlex.disabled = false;
        messageErreurDate.style.visibility = 'hidden';
    }else{
        buttondate.disabled = true;
        buttonsChoixNoFlex.disabled = true;
        buttonsChoixFlex.disabled = true;
        messageErreurDate.style.visibility = 'visible';
    }

}

function updateHiddenServices(){
    let num = 0;
    let conciergeries = document.getElementsByName('checkBoxConc');
    conciergeries.forEach(conciergerie => {
        let nom = num+'_conc_id';
        let concIdHidden = document.getElementById(nom);
        if(conciergerie.checked){
            concIdHidden.setAttribute('name',nom);
        }
        else{
            concIdHidden.setAttribute('name',null);
        }
        num = num + 1;
    });
    num = 0;
    for(var i = 0; i < numRestau; i++){
        let nomGet = "personnesRest"+num;
        let nomSet = num+'_restau';
        let restau = document.getElementById(nomGet);
        let hiddenRestau = document.getElementById(nomSet);
        hiddenRestau.value = restau.value;
        num = num + 1;
    }
}


/////////// PANIER 3 /////////////////


