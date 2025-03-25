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
