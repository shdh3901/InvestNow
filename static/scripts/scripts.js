document.addEventListener("DOMContentLoaded", function() {
    function animateCounter(id, target) {
        const element = document.getElementById(id);
        let count = 0;
        let isFinal = false; // Додано змінну для контролю фінального стану
        const interval = setInterval(() => {
            count += Math.ceil(target / 100);
            if (count >= target) {
                if (!isFinal) { // Перевіряємо, чи не було додано `+` раніше
                    element.textContent = target + "+";
                    isFinal = true; // Встановлюємо прапорець, щоб додати `+` лише раз
                }
                clearInterval(interval);
            } else {
                element.textContent = count;
            }
        }, 50);
    }
    animateCounter("clients-count", 300);
    animateCounter("managed-funds", 200);
});


const counters = document.querySelectorAll("#client-counter span[data-count]");
const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            counters.forEach((counter) => {
                const targetValue = parseInt(counter.getAttribute("data-count"));
                const increment = Math.ceil(targetValue / 100);
                let currentValue = 0;

                const updateCounter = () => {
                    currentValue += increment;
                    if (currentValue < targetValue) {
                        counter.innerText = currentValue;
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.innerText = `${targetValue}+`;
                    }
                };

                updateCounter();
            });
            observer.disconnect();
        }
    });
});

observer.observe(document.querySelector("#client-counter"));
