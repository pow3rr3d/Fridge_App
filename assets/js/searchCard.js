const search = document.getElementById('search');
const card = document.getElementsByName('card')

search.addEventListener('keyup', e => {
    card.forEach(el => {
        if (el.innerHTML.toUpperCase().includes(search.value.toUpperCase())) {
            el.style.display = "";
        }
        else {
            el.style.display = "none";
        }
    })
})