const modal = document.getElementById("modal");
const openModal = document.getElementById("openModal");
const closeModal = document.getElementById("closeModal");
const deleteModal = document.getElementById("deleteModal");
const closeDeleteModalBtn = document.getElementById("closeDeleteModal");
const deleteForm = document.getElementById("deleteForm");

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

document
    .getElementById("closeEditModal")
    .addEventListener("click", () =>
        document.getElementById("updateModal").classList.add("hidden")
    );

function openEditModal(id, judul, foto, tanggal) {
    const form = document.getElementById("editForm");
    form.action = `/user/gallery/${id}`; // pastikan route ini sesuai dengan route PUT kamu

    document.getElementById("edit_judul").value = judul;
    document.getElementById("edit_tanggal").value = tanggal;

    document.getElementById("updateModal").classList.remove("hidden");
}

// Delete modal elements

// Buka modal delete

function openDeleteModal(actionUrl) {
    deleteForm.action = actionUrl;
    deleteModal.classList.remove("hidden");
}

function closeDeleteModal() {
    deleteModal.classList.add("hidden");
}

function confirmDelete() {
    deleteForm.submit();
}

// Opsional: Klik di luar modal untuk menutup
window.addEventListener("click", function (e) {
    if (e.target === deleteModal) {
        closeDeleteModal();
    }
});

//gallery pop up
function showImageModal(imageUrl) {
    const modal = document.getElementById("imageModal");
    const modalImg = document.getElementById("modalImage");
    modalImg.src = imageUrl;
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeImageModal() {
    const modal = document.getElementById("imageModal");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}
