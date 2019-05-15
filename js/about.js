window.onscroll = function () {
    colorChange()
};

/* CHANGEMENT DE COULEUR ARROW */

let arrowBack = document.getElementsByClassName("arrow-retour")[0];
let bodyAbout = document.getElementById("banner-about");
let bodyRest = document.getElementsByClassName("page");

console.log(arrowBack);

var sticky2 = header.offsetTop + 0;


function colorChange() {
if (window.pageYOffset > sticky2 + 700 ) {
    arrowBack.classList.add("arrow-color")
} else {
    arrowBack.classList.remove("arrow-color")
    }
};