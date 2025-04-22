const modal = document.getElementById("modal");
const openModal = document.getElementById("openModal");
const closeModal = document.getElementById("closeModal");

// Buka modal
openModal.addEventListener("click", () => {
    modal.classList.remove("hidden");
});

// Tutup modal saat tombol close diklik
closeModal.addEventListener("click", () => {
    modal.classList.add("hidden");
});

// Tutup modal saat klik di luar modal
window.addEventListener("click", (e) => {
    if (e.target === modal) {
        modal.classList.add("hidden");
    }
});

function openUpdateModal(id, judul, tanggal) {
    const modal = document.getElementById("updatemodal");
    modal.classList.remove("hidden");
    document.getElementById("updateJudul").value = judul;
    document.getElementById("updateForm").action = `/user/laporan/${id}`;
    document.getElementById("UpdateTanggal").value = tanggal;
}

document
    .getElementById("closeModalUpdate")
    .addEventListener("click", function () {
        document.getElementById("updatemodal").classList.add("hidden");
    });

let deleteForm = null;

function openDeleteModal(form) {
    deleteForm = form;
    document.getElementById("deleteModal").classList.remove("hidden");
}

function closeDeleteModal() {
    document.getElementById("deleteModal").classList.add("hidden");
}

function confirmDelete() {
    if (deleteForm) deleteForm.submit();
}

