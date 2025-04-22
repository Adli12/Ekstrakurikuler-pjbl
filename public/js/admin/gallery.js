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
