let note = 0;
let etoiles = document.querySelectorAll('.etoile');
let buttonAvis = document.getElementById('buttonAvis')
 
etoiles.forEach((etoile, id) => {
  etoile.addEventListener('click', (elem) => {
    note = (id + 1);
    elem.target.parentNode.children[0].value = note;
    elem.target.classList.remove('text-dark-green-atypik');
    elem.target.classList.add('text-light-green-atypik');
    buttonAvis.disabled = false;
  });
  etoile.addEventListener('mouseenter', (elem) => {
    let cible = elem.target.classList;
    cible.remove('text-light-grey3-atypik');
    cible.remove('text-light-green-atypik');
    cible.add('text-dark-green-atypik');
     
    for (let i = 0; i < etoiles.length; i++) {
      let classes = etoiles[i].classList;
      if (i < id) {
        classes.add('text-light-green-atypik');
        classes.remove('text-light-grey3-atypik');
        classes.remove('text-dark-green-atypik');
      }
      if (i > id) {
        classes.add('text-light-grey3-atypik');
        classes.remove('text-dark-green-atypik');
        classes.remove('text-light-green-atypik');
      }
    }
  });
  
});

