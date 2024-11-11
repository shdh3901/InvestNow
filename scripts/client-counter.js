function animateCounter(element, start = 0, end, duration = 2000) {
    let startTime = null;

    const step = (timestamp) => {
        if (!startTime) startTime = timestamp;
        const progress = Math.min((timestamp - startTime) / duration, 1);
        const value = Math.floor(progress * (end - start) + start);

        // Додаємо '+' тільки якщо анімація досягла кінцевого значення
        if (progress === 1) {
            element.textContent = value + "+";
        } else {
            element.textContent = value;
        }

        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };

    window.requestAnimationFrame(step);
}

const observer = new IntersectionObserver(
    (entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const counters = document.querySelectorAll("#client-counter span");
                counters.forEach((counter) => {
                    const endValue = parseInt(counter.getAttribute("data-count"));
                    animateCounter(counter, 0, endValue, 2000);
                });
                observer.unobserve(entry.target); 
            }
        });
    },
    { threshold: 0.5 }
);

const section = document.querySelector("#client-counter");
observer.observe(section);
