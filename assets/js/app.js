/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import '../css/app.css';


// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.

import $ from 'jquery';
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/js/dist/util';
import 'bootstrap/js/dist/alert';
import * as AColorPicker from "a-color-picker";

AColorPicker.from('.picker')
    .on('change', (picker, color) => {
        document.querySelector('.picker-data').value = AColorPicker.parseColor(color, "hex");
    });


console.log('WELCOME TO FRIDGE_APP V1.04');
