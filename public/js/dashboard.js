let list = document.querySelectorAll(".navigation li");

function activeLink() {
    list.forEach((item) => {
        item.classList.remove("hovered");
    });
    this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
const sidebarToggle = document.getElementById("sidebar-toggle");
const sidebarToggleSidebar = document.getElementById("sidebar-toggle-sidebar");
const sidebar = document.getElementById("sidebar");
const brandName = document.getElementById("brand-name");
const sidebarTexts = document.querySelectorAll(".sidebar-text");

function toogleSidebar() {
    sidebar.classList.toggle("-translate-x-full");
    if (sidebar.classList.contains("sidebar-shrink")) {
        sidebar.classList.remove("sidebar-shrink");
        sidebar.classList.add("sidebar-expand");
        brandName.classList.add("hidden");
        sidebarTexts.forEach((text) => text.classList.add("hidden"));
    } else {
        sidebar.classList.remove("sidebar-expand");
        sidebar.classList.add("sidebar-shrink");
        brandName.classList.remove("hidden");
        sidebarTexts.forEach((text) => text.classList.remove("hidden"));
    }
}
sidebarToggle.addEventListener("click", toogleSidebar);
sidebarToggleSidebar.addEventListener("click", toogleSidebar);

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

// sidebar dropdown
function toggleDropdown(id) {
    const dropdown = document.getElementById(id);
    const icon = document.getElementById("eskulIcon");
    dropdown.classList.toggle("hidden");
    dropdown.classList.toggle("max-h-40"); // Gunakan max-h sesuai kebutuhan
    icon.classList.toggle("rotate-180");
}

const updateModal = document.getElementById("updatemodal");
const openUpdate = document.getElementById("openUpdate");
const closeUpdate = document.getElementById("closeModalUpdate");
function openUpdateModal(id, namaKetua, kelas) {
    updateModal.classList.remove("hidden");

    // Isi input form
    document.getElementById("updateNamaKetua").value = namaKetua;
    document.getElementById("updateKelasKetua").value = kelas;

    // Set action form update
    const updateForm = document.getElementById("updateForm");
    updateForm.action = `/user/anggota/${id}`;
}

// Delete
let deleteForm = null;

function openDeleteModal(form) {
    deleteForm = form;
    document.getElementById("deleteModal").classList.remove("hidden");
}

function closeDeleteModal() {
    deleteForm = null;
    document.getElementById("deleteModal").classList.add("hidden");
}

function confirmDelete() {
    if (deleteForm) {
        deleteForm.submit();
    }
}
