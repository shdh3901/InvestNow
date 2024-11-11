const images = document.querySelectorAll('.hero-images .circle');
let activeIndex = 0;

function cycleImages() {
    // Видаляємо класи для плавного переміщення зображень
    images.forEach((img) => {
        img.classList.remove('active', 'inactive');
    });

    // Додаємо клас 'active' до поточного активного зображення
    images[activeIndex].classList.add('active');

    // Додаємо клас 'inactive' до всіх інших зображень
    images.forEach((img, index) => {
        if (index !== activeIndex) {
            img.classList.add('inactive');
        }
    });

    // Збільшуємо індекс для наступного зображення по колу
    activeIndex = (activeIndex + 1) % images.length;
}

// Викликаємо `cycleImages` кожні 2 секунди
setInterval(cycleImages, 2000);
