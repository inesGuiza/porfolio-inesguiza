// CONTACT APPARITION

let contactButton = document.getElementById('contact-ines');
let contactContainer = document.getElementById('contact-form-ines');
let fondContainer = document.getElementById('contact-form-fond');
let closeButton = document.getElementsByClassName('close-icon')[0];
let sectionContact = document.getElementById('contact');

function ajoutcontact() {

    contactContainer.classList.add('d-block');
    fondContainer.classList.add('fondOpaque');
}

contactButton.addEventListener('click', ajoutcontact);

function removecontact() {
    contactContainer.classList.remove('d-block');
    fondContainer.classList.remove('fondOpaque');
}

closeButton.addEventListener('click', removecontact);
window.addEventListener('scroll', removecontact); 