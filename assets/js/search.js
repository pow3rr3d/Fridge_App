
var search = document.getElementById('search');
var tr = document.querySelectorAll('tbody>tr');

search.addEventListener('keyup', e => {
    tr.forEach(el => {
        if (el.innerHTML.toUpperCase().includes(search.value.toUpperCase())) {
            el.style.display = "";
        }
        else {
            el.style.display = "none";
        }
    })
})