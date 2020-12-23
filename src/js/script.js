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
        ajaxGet('blocks/ip.php?parametrs=newParametrs');
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

function R1 (numb_1 = 0, numb_2 = 0, ins) {
    let res = numb_1 + numb_2;
    let b = ins;
    res += b;
    return res;
}

function R2 (text = 'R1') {
    let a = ' ' + text;
    return a;
}

console.log(R1(100, 200, R2('hellow')));
