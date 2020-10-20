/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.

import $ from 'jquery';

import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
// import 'bootstrap/js/dist/util';
// import 'bootstrap/js/dist/alert';
import '../css/app.scss';

//Ckeditor
import './components/ckeditor'

//a2lix
import a2lix_lib from '@a2lix/symfony-collection/src/a2lix_sf_collection';

console.log(
    '%cWELCOME TO FRIDGE_APP V2.00',
    "color:royalblue;font-family:'Poppins', sans-serif;font-size:2rem;-webkit-text-stroke: 2px white;font-weight:bold"
    );

//A2lix
a2lix_lib.sfCollection.init({
    collectionsSelector: 'form div[data-prototype]',
    manageRemoveEntry: true,
    lang: {
        add: 'Add',
        remove: 'Remove'
    }
})

//ToolTip
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

//On upload files
var label = document.querySelector('.custom-file-label')

var input = document.getElementById('product_imagefile')

input.onchange= function () {
    label.innerHTML = this.value.replace(/^.*\\/, "");
}
