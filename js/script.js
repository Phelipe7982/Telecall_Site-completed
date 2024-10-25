

// Função do botão Mobile para menu

const btnMobile = document.getElementById('btn-mobile');

function toggleMenu() {
    const menu = document.getElementById('menu');
    menu.classList.toggle('active');
}

btnMobile.addEventListener('click', toggleMenu);

// Função Botao usuario
const btnUser = document.querySelector('.btn-user')

btnUser.addEventListener("click", () => {
    let subMenu = document.getElementById("subMenu")
    if(subMenu.classList.contains("open-menu")){

        subMenu.classList.remove("open-menu")
    } else {
        subMenu.classList.add("open-menu")
    }
})





