const block = document.getElementById("memo");
const user = document.getElementById("userId").value;

const update = function() {
    const memo = document.getElementById("memo").innerHTML;
    console.log(user);
    console.log(memo);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/user/memo", true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send(JSON.stringify({
        id: user,
        memo: memo
    }));
};

block.addEventListener('blur', update);