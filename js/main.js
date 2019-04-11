// NAVBAR APPARITION

window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop+0;

function myFunction() {
    if (window.pageYOffset > 0) {
        header.classList.remove("sticky2");
        header.classList.add("sticky");
    } else if (window.pageYOffset > sticky-150) {
        header.classList.add("sticky2");
    } else {
        header.classList.remove("sticky2");
        header.classList.remove("sticky");
    }
};

let maxWidth = window.getComputedStyle(document.body).width;

if(maxWidth >= 768) {
    
}