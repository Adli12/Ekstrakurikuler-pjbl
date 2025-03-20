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
        var content = document.getElementById("content");

        if (sidebar.classList.contains("sidebar-shrink")) {
            sidebar.classList.remove("sidebar-shrink");
            sidebar.classList.add("sidebar-expand");
            brandName.classList.add("hidden");
            sidebarTexts.forEach((text) => text.classList.add("hidden"));
            content.classList.add("ml-16"); // Sesuaikan ukuran konten saat sidebar kecil
        } else {
            sidebar.classList.remove("sidebar-expand");
            sidebar.classList.add("sidebar-shrink");
            brandName.classList.remove("hidden");
            sidebarTexts.forEach((text) => text.classList.remove("hidden"));
            content.classList.remove("ml-16");
        }
    });

function changeContent(page) {
    const content = document.getElementById("content");
    if (page === "home") {
        content.innerHTML = `<h1 class="text-2xl font-bold">🏠 Home</h1><p>Ini adalah halaman Home.</p>`;
    } else if (page === "search") {
        content.innerHTML = `<h1 class="text-2xl font-bold">🔍 Search</h1><p>Ini adalah halaman Search.</p>`;
    } else if (page === "settings") {
        content.innerHTML = `<h1 class="text-2xl font-bold">⚙️ Settings</h1><p>Ini adalah halaman Settings.</p>`;
    }
}
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
