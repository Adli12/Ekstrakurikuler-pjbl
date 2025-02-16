const nav = document.querySelector(".navbar-nav");
const navbar = document.querySelector(".navbar");

// scrolled
window.addEventListener("scroll" , () => {
    const windowPosition = window.scrollY > 0;
    navbar.classList.toggle("scrolled" , windowPosition);
    console.log(window.screenY);
});

// menu
document.querySelector("#menu").onclick = () => {
    nav.classList.toggle("side");
} 

const menu = document.querySelector("#menu");
document.addEventListener("click" , (e) => {
    if(!menu.contains(e.target) && !nav.contains(e.target)){
        nav.classList.remove("side");
    }
})