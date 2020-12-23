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
        ajaxGet('blocks/ip.php', function(data){
            console.log(data);
        });
        ajaxGet('blocks/ip.php?parametrs=newParametrs', function(data){
            divMy_ip.innerHTML = data;
        });
    }

    function ajaxGet(url, callback) {
        var f = callback || function (data) {};
        var request = new XMLHttpRequest();

        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {
                console.log('Запрос получен');
                f(request.responseText);
            }
        }

        request.open('GET', url);
        request.send();
    }
}
