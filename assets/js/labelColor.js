var inputs = Array.from(document.getElementsByClassName("form-control")).forEach(function (input) {
    var div = input.parentElement

    input.onfocus = function () {
        div.classList.add("blue")

    }

    input.onblur = function () {
        div.classList.remove("blue")

    }

})