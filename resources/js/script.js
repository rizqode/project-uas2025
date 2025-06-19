const mainImage = document.getElementById("mainImage");
const thumbnails = document.querySelectorAll(".thumb");
const images = Array.from(thumbnails).map((img) => img.src);
let currentIndex = 0;
let autoSlideInterval;

function showImage(index) {
    mainImage.src = images[index];
    thumbnails.forEach((thumb, i) => {
        thumb.classList.toggle("active", i === index);
    });
    currentIndex = index;
}

function nextImage() {
    let nextIndex = (currentIndex + 1) % images.length;
    showImage(nextIndex);
}

function prevImage() {
    let prevIndex = (currentIndex - 1 + images.length) % images.length;
    showImage(prevIndex);
}

function startAutoSlide() {
    autoSlideInterval = setInterval(nextImage, 4000); // geser setiap 4 detik
}

function stopAutoSlide() {
    clearInterval(autoSlideInterval);
}

// Event tombol
document.querySelector(".next").addEventListener("click", () => {
    nextImage();
    stopAutoSlide();
    startAutoSlide();
});
document.querySelector(".prev").addEventListener("click", () => {
    prevImage();
    stopAutoSlide();
    startAutoSlide();
});

// Event klik thumbnail
thumbnails.forEach((thumb, index) => {
    thumb.addEventListener("click", () => {
        showImage(index);
        stopAutoSlide();
        startAutoSlide();
    });
});

// Mulai auto-slide saat halaman selesai dimuat
window.addEventListener("DOMContentLoaded", () => {
    showImage(currentIndex);
    startAutoSlide();
});
