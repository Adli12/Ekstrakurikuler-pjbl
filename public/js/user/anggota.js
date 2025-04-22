const modal = document.getElementById("modal");
const openModal = document.getElementById("openModal");
const closeModal = document.getElementById("closeModal");
const updateModal = document.getElementById("updatemodal");
const openUpdate = document.getElementById("openUpdate");
const closeUpdate = document.getElementById("closeModalUpdate");

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

// update

closeUpdate.addEventListener("click", () => {
    updateModal.classList.add("hidden");
});

window.addEventListener("click", (e) => {
    const updateModal = document.getElementById("updatemodal");
    if (e.target === updateModal) {
        updateModal.classList.add("hidden");
    }
});

function openUpdateModal(id, nama, kelas, jurusan) {
    // Tampilkan modal update
    updateModal.classList.remove("hidden");

    // Isi input form update
    document.getElementById("updateNama").value = nama;
    document.getElementById("updateKelas").value = kelas;
    document.getElementById("updateJurusan").value = jurusan;

    // Ubah action form update agar sesuai ID
    const updateForm = document.getElementById("updateForm");
    updateForm.action = `/user/anggota/${id}`;
}

//delete
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
