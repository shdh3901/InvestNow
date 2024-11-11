<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Інвестиційний Сайт</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <header class="header">
        <div class="logo">InvestNow</div>
        <nav class="nav">
            <a href="index.php">Головна</a>
            <a href="about-as.php">Про нас</a>
            <a href="index.php#services">Послуги</a>
            <a href="contact-page.php">Контакти</a>
            <button class="btn login" onclick="window.location.href='login.php'">Увійти</button>
            <button class="btn register" onclick="window.location.href='register.php'">Зареєструватись</button>
        </nav>
        <!-- Гамбургер-меню -->
        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

    <!-- Мобільне меню -->
    <nav class="mobile-nav" id="mobileNav">
        <a href="index.php">Головна</a>
        <a href="about-as.php">Про нас</a>
        <a href="index.php#services">Послуги</a>
        <a href="contact-page.php">Контакти</a>
        <button class="btn mobile-login" onclick="window.location.href='login.php'">Увійти</button>
        <button class="btn mobile-register" onclick="window.location.href='register.php'">Зареєструватись</button>
    </nav>


    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-images">
            <img src="https://images.pexels.com/photos/259027/pexels-photo-259027.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Клієнт 1" class="circle active">
            <img src="https://images.pexels.com/photos/1097946/pexels-photo-1097946.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1https://images.pexels.com/photos/1097946/pexels-photo-1097946.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Клієнт 3" class="circle small">
            <img src="https://images.pexels.com/photos/159888/pexels-photo-159888.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Клієнт 2" class="circle small">
        </div>
        <div class="hero-content">
            <h1>Інвестиції в Майбутнє Сьогодні</h1>
            <p>Експертні консультації для впевнених інвестицій у криптовалюти, акції та інші фінансові інструменти.</p>
            <a class="btn hero-btn">Почати зараз</a>
            <a href="about-as.php" class="btn hero-btn">Дізнатися більше</a>
        </div>
    </section>

    <!-- Client Counter -->
    <section class="client-counter" id="client-counter">
        <h2>Наші Досягнення</h2>
        <p><span id="clients-count" data-count="300">0+</span> задоволених клієнтів</p>
        <p><span id="managed-funds" data-count="200">0+</span> мільйонів доларів під управлінням</p>
    </section>


    <!-- Overview Section -->
    <section class="overview">
        <h2>Чому обирають нас?</h2>
        <div class="features">
            <div class="feature">
                <h3>Надійність</h3>
                <p>Ми гарантуємо безпечні інвестиції з прозорим підходом.</p>
            </div>
            <div class="feature">
                <h3>Експертиза</h3>
                <p>Досвідчені аналітики допоможуть вам досягти фінансових цілей.</p>
            </div>
            <div class="feature">
                <h3>Прозорість</h3>
                <p>Всі операції доступні для перегляду у вашому акаунті.</p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <h2>Наші послуги</h2>

        <div class="service">
            <div class="service-text">
                <h3>Інвестиції в криптовалюту</h3>
                <p>Отримуйте найкращі поради щодо інвестування в криптовалюти та підтримку в реальному часі для забезпечення вашої вигоди.</p>
            </div>
            <div class="service-image">
                <img src="https://images.pexels.com/photos/1447418/pexels-photo-1447418.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Криптовалюта">
            </div>
        </div>

        <div class="service reverse">
            <div class="service-text">
                <h3>Інвестиції в акції</h3>
                <p>Знайомтесь з нашим підходом до торгівлі акціями. Ми надаємо професійну підтримку для досягнення ваших фінансових цілей.</p>
            </div>
            <div class="service-image">
                <img src="https://images.pexels.com/photos/6120214/pexels-photo-6120214.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Акції">
            </div>
        </div>

        <div class="service">
            <div class="service-text">
                <h3>Фінансове консультування</h3>
                <p>Наші експерти з фінансів готові допомогти вам створити стабільний та прибутковий інвестиційний портфель.</p>
            </div>
            <div class="service-image">
                <img src="https://images.pexels.com/photos/2977565/pexels-photo-2977565.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Фінансове консультування">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 InvestNow. Всі права захищені.</p>
            <div class="social-links">
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
                <a href="#">LinkedIn</a>
            </div>
        </div>
    </footer>
    
    <script src="scripts/script.js"></script>
    <script src="scripts/client-counter.js"></script>
    <script src="scripts/circle-anim.js"></script>
    <script src="scripts/header-btns.js"></script>
    <script src="scripts/toggle-menu.js"></script>

    <script>
        function selectUserType(type) {
            const userButtons = document.querySelectorAll('.user-type-btn');
            userButtons.forEach(btn => {
                if (btn.textContent.includes(type)) {
                    btn.classList.add('selected');
                } else {
                    btn.classList.remove('selected');
                }
            });
        }
    </script>
</body>
</html>

<?php

?>