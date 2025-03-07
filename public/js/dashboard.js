let list = document.querySelectorAll(".navigation li");

function activeLink() {
    list.forEach((item) => {
        item.classList.remove("hovered");
    });
    this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
document
    .getElementById("sidebar-toggle")
    .addEventListener("click", function () {
        var sidebar = document.getElementById("sidebar");
        var brandName = document.getElementById("brand-name");
        var sidebarTexts = document.querySelectorAll(".sidebar-text");
        var sidebarName = document.querySelectorAll(".sidebar-name");
        if (sidebar.classList.contains("sidebar-shrink")) {
            sidebar.classList.remove("sidebar-shrink");
            sidebar.classList.add("sidebar-expand");
            brandName.classList.add("hidden");
            sidebarTexts.forEach(function (text) {
                text.classList.add("hidden");
            });
            sidebarName.forEach(function (text) {
                text.classList.add("hidden");
            });
        } else {
            sidebar.classList.remove("sidebar-expand");
            sidebar.classList.add("sidebar-shrink");
            brandName.classList.remove("hidden");
            sidebarTexts.forEach(function (text) {
                text.classList.remove("hidden");
            });
            sidebarName.forEach(function (text) {
                text.classList.remove("hidden");
            });
        }
    });
// dark and light
document.getElementById("settings-icon").addEventListener("click", function () {
    var themeOptions = document.getElementById("theme-options");
    themeOptions.classList.toggle("active");
});

document.getElementById("light-theme").addEventListener("click", function () {
    document.body.classList.remove("bg-gray-900", "text-white");
    document.body.classList.add("bg-white", "text-black");
});

document.getElementById("dark-theme").addEventListener("click", function () {
    document.body.classList.remove("bg-white", "text-black");
    document.body.classList.add("bg-gray-900", "text-white");
});
