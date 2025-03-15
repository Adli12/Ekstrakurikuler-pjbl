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
new Swiper(".news-container", {
    loop: true,
    spaceBetween: 20,
    centeredSlides: true,
    slidesPerView: 3,

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 1,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});
