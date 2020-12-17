var main = document.querySelector('.global-main');
var btnColor = document.querySelector('.btn-color');

if (main != null && btnColor != null) {
    btnColor.onclick = function () {
        main.classList.toggle('main--color');
    }
}
