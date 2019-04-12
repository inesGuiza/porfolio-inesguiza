// NAVBAR APPARITION

window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop+0;


    // box-shadow: 0 0px 50px 0px rgba(0, 0, 0, 0.5)
    // background-color: $mauve

function myFunction() {
    if (window.pageYOffset > sticky+150) {
        header.classList.add("mauve");
    } else {
        header.classList.remove("mauve");
    } 
};

let maxWidth = window.getComputedStyle(document.body).width;

if(maxWidth >= 768) {
    
}