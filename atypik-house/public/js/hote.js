let slider_nb_h = document.getElementById("nb_hebergement");
let output_nb_h = document.getElementById("select1");
output_nb_h.innerHTML = slider_nb_h.value;

slider_nb_h.oninput = function() {
    output_nb_h.innerHTML = this.value;
}

let slider_cap_h = document.getElementById("cap_hebergement");
let output_cap_h = document.getElementById("select2");
output_cap_h.innerHTML = slider_cap_h.value;

slider_cap_h.oninput = function() {
    output_cap_h.innerHTML = this.value;
}
