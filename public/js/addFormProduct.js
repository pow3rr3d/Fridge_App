var element = document.getElementById('addProduct');
var div = document.getElementById('divProduct');
var divClone = div.cloneNode(true);
var input = document.getElementById('form').lastChild.previousSibling;

element.addEventListener('click', function () {
    input.parentNode.insertBefore(divClone, input)
    element.remove();
});

