// NAVBAR APPARITION

window.onscroll = function () {
    myFunction();
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

if (maxWidth >= 768) {};

// SCROLL SMOOTH
// var offsetActuel = 0;

// addEventListener("scroll", window);
// var descendre = offsetActuel<document.offsetTop;
// var monter = offsetActuel>document.offsetTop;
// var sections = document.querySelectorAll("scroller");

// switch (offsetActuel) {
//     case offsetActuel>0 && offsetActuel<sections[1].offsetTop:
//     if (descendre) {
//         sections[1].scrollIntoView({
//             behavior: 'smooth'
//         });
//             offsetActuel = sections[1].offsetTop;
// } 
// break;
//     case offsetActuel>sections[1].offsetTop && offsetActuel<sections[2].offsetTop:
//     if (descendre) {
//         sections[2].scrollIntoView({
//             behavior: 'smooth'
//         });
//             offsetActuel = sections[2].offsetTop;
// } 
// break;
//     case offsetActuel>sections[2].offsetTop && offsetActuel<sections[3].offsetTop:
//     if (descendre) {
//         sections[3].scrollIntoView({
//             behavior: 'smooth'
//         });
//             offsetActuel = sections[3].offsetTop;
// } 
// break;
//     case offsetActuel>sections[3].offsetTop && offsetActuel<sections[4].offsetTop:
//     if (descendre) {
//         sections[4].scrollIntoView({
//             behavior: 'smooth'
//         });
//             offsetActuel = sections[4].offsetTop;
// } 
// }

// window.scroll({
//     top: 0, 
//     left: 0, 
//     behavior: 'smooth'
//   });

//   window.scrollBy({ 
//     top: 1000, // could be negative value
//     left: 0, 
//     behavior: 'smooth' 
//   });

//   document.querySelector('.scroller').scrollIntoView({ 
//     behavior: 'smooth' 
//   });

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


/* DEBUT SCROLL PAGE */        

class ScrollPage {
    constructor() {
        this.maxPage = 4;
        this.actualPage = 1;
        window.addEventListener('mousewheel', this.findNextPage);
    }
    findNextPage = (event) => {
        let down = event.deltaY > 0;
        window.removeEventListener('mousewheel', this.findNextPage);
        if (down) this.actualPage++;
        else this.actualPage--;
        if (this.actualPage > this.maxPage) this.actualPage = this.maxPage;
        else if (this.actualPage < 1) this.actualPage = 1;
        this.changePage()
        setTimeout(() => {
            window.addEventListener('mousewheel', this.findNextPage);
        }, 500);
    }

    changePage = () => {
        let hauteurPage = (window.innerHeight);
        this.pageHeight = hauteurPage;
        let y = (this.actualPage - 1) * this.pageHeight;

        window.pageYOffset = y;
      
        console.log("window scrolltop: "+ window.pageYOffset);
        // window.scrollY = window.pageYOffset
        window.scroll(0, y);

        var offset = window.pageYOffset;
        console.log("offset: "+ offset);
     
        // this.changePage.scrollTo(0, y);
        // console.log(this.changePage);

        //let deplacement = window.scrollIntoView(); 
        //console.log(deplacement);

        /*if(y === 722){
            secAbout.scrollIntoView();        
        }*/
        // window.addEventListener('mousewheel', deplacement);
    }
}

new ScrollPage();

/* FIN SCROLL PAGE */
