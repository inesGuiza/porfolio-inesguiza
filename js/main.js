
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

// COULEUR DE LA NAV
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

// DATA-HIJACKING

// // actualBlock is the section we are animation
// var offset = $(window).scrollTop() - actualBlock.offset().top,
// windowHeight = $(window).innerHeight();

// if (offset >= -windowHeight && offset <= 0 ) {
//     // section entering the viewport
//     translateY = (-offset)*100/windowHeight;
//     scale = 1;
//     opacity = 1;
// } else if (offset > 0 && offset <= windowHeight ) {
//     // section leaving the viewport
//     scale = (1 - (offset * 0.3/windowHeight));
//     opacity = ( 1 - ( offset/windowHeight) );
//     translateY = 0;
//     boxShadowBlur = 40*(offset/windowHeight);
// }

