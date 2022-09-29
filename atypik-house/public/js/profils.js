function buttonsNav() {
    let buttonsNav = document.getElementsByName('buttonsNav');
    let num = 1;

    buttonsNav.forEach((buttonNav) => {
        let bgButtonNav = document.getElementById('bgButtonNav' + num);
        let textNav = document.getElementById('textNav' + num);
        if (num == 1) {
            if (buttonNav.checked) {
                bgButtonNav.classList.remove('bg-light-grey3-atypik', 'border-2');
                bgButtonNav.classList.add('bg-dark-green-atypik');

                textNav.classList.remove('text-dark-grey-atypik');
                textNav.classList.add('text-light-grey1-atypik');
                
            } else {
                bgButtonNav.classList.add('bg-light-grey3-atypik', 'border-2');
                bgButtonNav.classList.remove('bg-dark-green-atypik');

                textNav.classList.add('text-dark-grey-atypik');
                textNav.classList.remove('text-light-grey1-atypik');
            }
        }else {
            let nomDiv = "divNav"+(num - 1);
            let divNav = document.getElementById(nomDiv);
            if (buttonNav.checked) {
                divNav.classList.remove('hidden');
                bgButtonNav.classList.add('bg-dark-green-atypik');
                bgButtonNav.classList.remove('bg-light-grey3-atypik', 'border-2');

                textNav.classList.add('text-light-grey1-atypik');
                textNav.classList.remove('text-dark-grey-atypik');
            } else {
                bgButtonNav.classList.remove('bg-dark-green-atypik');
                bgButtonNav.classList.add('bg-light-grey3-atypik', 'border-2');

                textNav.classList.remove('text-light-grey1-atypik');
                textNav.classList.add('text-dark-grey-atypik');
                let buttonNav1 = document.getElementById('buttonNav1')
                if(buttonNav1.checked){
                    divNav.classList.remove('hidden');
                }else{
                    divNav.classList.add('hidden');
                }
            }
        }
        num = num + 1;
    });
}

function buttonsMenu() {
    let buttons = document.getElementsByName('button');
    let num = 1;

    buttons.forEach((button) => {
        let div = document.getElementById('div' + num);
        let bgButton = document.getElementById('bgButton' + num);
        let faRadio = document.getElementById('faRadio' + num);
        let textRadio = document.getElementsByName('textRadio' + num);
        if (button.checked) {
            div.classList.remove('hidden');

            bgButton.classList.remove('bg-light-grey3-atypik');
            bgButton.classList.add('bg-dark-green-atypik');

            faRadio.classList.remove('text-dark-grey-atypik');
            faRadio.classList.add('text-light-grey1-atypik');

            textRadio.forEach((textRadio) => {
                textRadio.classList.remove('text-dark-grey-atypik');
                textRadio.classList.add('text-light-grey1-atypik');
            });
        } else {
            div.classList.add('hidden');
            bgButton.classList.remove('bg-dark-green-atypik');
            bgButton.classList.add('bg-light-grey3-atypik');

            faRadio.classList.remove('text-light-grey1-atypik');
            faRadio.classList.add('text-dark-grey-atypik');

            textRadio.forEach((textRadio) => {
                textRadio.classList.remove('text-light-grey1-atypik');
                textRadio.classList.add('text-dark-grey-atypik');
            });
        }
        num = num + 1;
    });

}

function role_userInput(){
    let buttons = document.getElementsByName('button');
    let type_user = document.getElementById('role');
    buttons.forEach((button) => {
        if (button.checked){
            switch(button.id){
                case "button1":
                    type_user.value = "c";
                break;
                case "button2":
                    type_user.value = "h";
                break;
                case "button3":
                    type_user.value = "a";
                break;
            }
        }
    });
}


function updateParticulariteHiddenButton(){
    let particularite = document.getElementById('particularite');
    let particulariteText = document.getElementById('particulariteText');

    particularite.value = particulariteText.value;
}