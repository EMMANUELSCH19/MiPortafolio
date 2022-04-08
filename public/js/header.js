document.getElementById("btn-menu").addEventListener("click", open_close_menu);

const menu = document.getElementById("menu");
const btnMenu = document.getElementById("btn-menu");

function open_close_menu(){
    btnMenu.classList.toggle('active');
    menu.classList.toggle('show');   
}
