const $ = require('jquery');
require('bootstrap');
import Cookies from 'js-cookie';

var validationButton = document.getElementById("CookiesValidation");
var rejectButton = document.getElementById("CookiesRefuse");

if(Cookies.get('Cookies'))
{
}
else
{
    setTimeout(modalDisplay, 1000);
    function modalDisplay() {
        $('.modal').modal('toggle')
    }
}

var setCookies = function(){
    Cookies.set('Cookies', "Valided", { expires: 365 });
    $('.modal').modal('hide');

};
var getOut = function(){
    history.back();
};

rejectButton.addEventListener("click", getOut);
validationButton.addEventListener("click", setCookies);



