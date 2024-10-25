// Função slide de imagens

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    grabCursor: true,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});


var radio = document.querySelector('.manual_btn')
var cont = 1

document.getElementById('radio1').checked =  true

setInterval(() => {
    proximaImg()
}, 6000)

function proximaImg(){
    cont++

    if(cont > 4){
        cont = 1
    }

    document.getElementById('radio'+cont).checked = true
}

