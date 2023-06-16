let btnadd = document.querySelector('.ajouter');
let listview = document.querySelector('.contact-item');
let btncancel = document.getElementById('.btn-cancel');
let titlemodifie = document.querySelector('.titlemodifie');
let form = document.querySelector('.right');
//let btnsedite = document.querySelector('.btnsedite');


//données de la formulaire
let contacts=[];
let editionMode = false;

btnadd.addEventListener('click', (e) => {
    form.classList.toggle('active');
    titlemodifie.classList.toggle('desactive');
    //btnsedite.classList.toggle('desactive');
});
/*btncancel.addEventListener('click', (e) => {
    btnadd.classList.toggle('');
});*/

// d'afficher la liste



