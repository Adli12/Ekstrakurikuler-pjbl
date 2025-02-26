const nav = document.querySelector(".navbar-nav");
const navbar = document.querySelector(".navbar");
const menu = document.querySelector("#menu");

// scrolled
window.addEventListener("scroll", () => {
    const windowPosition = window.scrollY > 0;
    navbar.classList.toggle("scrolled", windowPosition);
    console.log(window.screenY);
});

// menu
document.querySelector("#menu").onclick = () => {
    nav.classList.toggle("side");
};

document.addEventListener("click", (e) => {
    if (!menu.contains(e.target) && !nav.contains(e.target)) {
        nav.classList.remove("side");
    }
});

// pop up
document.getElementById("openmodal").addEventListener("click", function () {
    document.getElementById("myModal").style.display = "flex";
});

document.getElementById("closemodal").addEventListener("click", function () {
    document.getElementById("myModal").style.display = "none";
});

window.onclick = function (event) {
    if (event.target === document.getElementById("myModal")) {
        document.getElementById("myModal").style.display = "none";
    }
};

// swipe
let currentIndex = 0;
const totalItems = document.querySelectorAll(".news-box").length;
const isMobile = window.matchMedia("(max-width: 768px)").matches;
const visibleItems = isMobile ? 1 : 3;

function updateCarousel() {
    let carousel = document.querySelector(".news-container");
    let translateX = -currentIndex * (isMobile ? 100 : 33) + "%";
    carousel.style.transform = `translateX(${translateX})`;
}

function nextSlide() {
    if (currentIndex < totalItems - visibleItems) {
        currentIndex++;
        updateCarousel();
    }
}

function prevSlide() {
    if (currentIndex > 0) {
        currentIndex--;
        updateCarousel();
    }
}
