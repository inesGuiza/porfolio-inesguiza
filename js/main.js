// NAVBAR APPARITION

window.onscroll = function () {
    myFunction()
};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop + 0;

// MENU APPARITION
let menuMyContainer = document.getElementById('menu-ines');
let menuButtonA = document.getElementById('aIcon');
let headerMyContainer = document.getElementById('myHeader');

function ajoutmenu() {
    menuMyContainer.classList.toggle('d-none');
}
menuButtonA.addEventListener('click', ajoutmenu);

// menuButtonA.addEventListener('click', () => {
//     menuMyContainer.classList.add("js-open");
// });

// headerMyContainer.addEventListener('click', () => {
//     menuMyContainer.classList.remove("js-open");
// });



// function test2(){
//     menuMyContainer.classList.remove('js-open');
//     menuMyContainer.classList.add('global-nav');
// }
// headerMyContainer.addEventListener('click', test2);

// box-shadow: 0 0px 50px 0px rgba(0, 0, 0, 0.5)
// background-color: $mauve

function myFunction() {
    if (window.pageYOffset > sticky + 150) {
        header.classList.add("mauve");
    } else {
        header.classList.remove("mauve");
    }
};

let maxWidth = window.getComputedStyle(document.body).width;

if (maxWidth >= 768) {

}