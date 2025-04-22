const modal = document.getElementById("modal");
const openModal = document.getElementById("openModal");
const closeModal = document.getElementById("closeModal");
const updateModal = document.getElementById("updatemodal");
const closeUpdate = document.getElementById("closeModalUpdate");

// Buka modal tambah absen
openModal.addEventListener("click", () => {
    modal.classList.remove("hidden");
});

// Tutup modal tambah absen
closeModal.addEventListener("click", () => {
    modal.classList.add("hidden");
});

// Tutup modal tambah absen saat klik di luar
window.addEventListener("click", (e) => {
    if (e.target === modal) {
        modal.classList.add("hidden");
    }
});

// Tutup modal update absen
closeUpdate.addEventListener("click", () => {
    updateModal.classList.add("hidden");
});

// Tutup modal update absen saat klik di luar
window.addEventListener("click", (e) => {
    if (e.target === updateModal) {
        updateModal.classList.add("hidden");
    }
});

// Buka modal update absen
function openUpdateModal(id, nama, kelas, keterangan, tanggal) {
    updateModal.classList.remove("hidden");

    document.getElementById("updateNama").value = nama;
    document.getElementById("updateKelas").value = kelas;
    document.getElementById("updateKeterangan").value = keterangan;
    document.getElementById("updateTanggal").value = tanggal;

    const updateForm = document.getElementById("updateForm");
    updateForm.action = `/user/absen/${id}`;
}

// delete absen
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

function toggleInputAbsen() {
    const isMobile = window.innerWidth < 768;
    document.querySelectorAll("td").forEach((td) => {
        const radios = td.querySelectorAll(".absen-radio");
        const select = td.querySelector(".absen-select");

        if (radios.length && select) {
            radios.forEach((radio) => {
                radio.disabled = isMobile;
            });
            select.disabled = !isMobile;
        }
    });
}

// Initial run
toggleInputAbsen();

// Re-run on window resize
window.addEventListener("resize", toggleInputAbsen);
