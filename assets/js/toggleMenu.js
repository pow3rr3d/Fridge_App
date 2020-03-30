import Cookies from 'js-cookie';

var element = document.getElementById('toogleButton');
var menu = document.getElementById('navbar');
var body = document.getElementById('container');
var footer = document.getElementById('containerFooter');

if (Cookies.get('menu')) {
    menu.classList.replace('notHidden', Cookies.get('menu'));
    menu.classList.contains('hidden') ? body.classList.add('col-11') : body.classList.remove('col-11');
} else {

}
var toogleEvent = function () {
    menu.classList.contains('hidden') ? menu.classList.remove('hidden') : menu.classList.add('hidden');
    menu.classList.contains('hidden') ? body.classList.add('col-11') : body.classList.remove('col-11');
    if (menu.classList.contains('hidden')) {

        Cookies.set('menu', 'hidden')
    } else {
        Cookies.set('menu', '')
    }
};

function myFunction(x) {
    if (x.matches) { // If media query matches
        menu.classList.add('hidden');
    } else {
    }
}

var x = window.matchMedia("(max-width: 700px)");
myFunction(x); // Call listener function at run time
x.addListener(myFunction); // Attach listener function on state changes
element.addEventListener('click', toogleEvent);