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

if (buttonIp != null) {
    buttonIp.onclick = onclickButtonIp;

    function onclickButtonIp() {
        ajaxGet();
    }

    function ajaxGet() {
        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            console.log(request.readyState);
        }
        request.open('GET', 'blocks/ip.php');
        request.send();
    }
}

