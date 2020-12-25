var img = document.querySelectorAll('.main__body img');
var imgActive = ('main__img--active');
var dataImg = ('data-img-namber');

for (let i = 0; i < img.length; i++) {
    img[i].setAttribute(dataImg, i);
    img[i].onclick = imgClick;
}

function imgClick() {
    for (let i = 0; i < img.length; i++) {
        img[i].classList.remove(imgActive);
    }
    let a = this.getAttribute(dataImg);
    img[a].classList.add(imgActive);
}

let buttonIp = document.querySelector('#show_ip');
let divMy_ip = document.querySelector('.my-ip__body');

if (buttonIp != null) {
    buttonIp.onclick = onclickButtonIp;
    function onclickButtonIp() {
        ajaxGet('blocks/ip.php');
    }

    function ajaxGet(url) {
        var request = new XMLHttpRequest();

        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {
                console.log('Запрос получен');
                divMy_ip.innerHTML = request.responseText;
            }
        }

        request.open('GET', url);
        request.send();
    }
}

var divResult = document.querySelector('.result');
var inp_email = document.querySelector('input[name=email]');
var inp_phone = document.querySelector('input[name=phone]');
var inp_name = document.querySelector('input[name=name]');
var btnSend = document.querySelector('#send');
var divForms = document.querySelector('.forms__form');

if (btnSend != null) {
    btnSend.onclick = function () {
        var params = 'email=' + inp_email.value + '&' + 'phone=' + inp_phone.value + '&' + 'name=' + inp_name.value;
        ajaxPost(params);
    }
}

function ajaxPost(params) {
    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            console.log('Запрос получен');
            divResult.innerHTML = request.responseText;
            if (request.responseText == 1) {
                divResult.innerHTML = 'Форма успешно отправленна';
                divForms.style.display = 'none';
            }
            else {
                divResult.innerHTML = request.responseText;
            }
        }
    }

    request.open('POST', 'email.php');
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send(params);
}

let mainContentDiv = document.querySelector('.main__content');
let btnStart = document.querySelector('.main__btn.start');
let btnReset = document.querySelector('.main__btn.reset');
let mainInput = document.querySelector('.main__input');
var toggle = 0;


if (btnStart != null && btnReset != null) {
    console.log(mainInput.value);
    btnStart.onclick = onclickSuperButton;
    btnReset.onclick = onclickSuperButton2;
}

function addMainContentDiv(url, LongArr) {
    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            console.log('Запрос получен');
            console.log(toggle);
            mainContentDiv.innerHTML = request.responseText;
        }
    }

    request.open('POST', url);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send(LongArr);
}

function onclickSuperButton() {
    toggle = 1;
    btnReset.classList.add('reset--active');
    var LongArr = 'LongArray=' + mainInput.value;
    addMainContentDiv('blocks/Super.php', LongArr);
}

function onclickSuperButton2() {
    toggle = 0;
    btnReset.classList.remove('reset--active');
    mainInput.value = 2;
    addMainContentDiv('blocks/Super.php', 'LongArray=1');
}
