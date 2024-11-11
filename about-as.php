<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Про нас | InvestNow</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/about-as.css">
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

    <!-- About Us Section -->
    <section class="about-us">
        <div class="about-us-content">
            <h1>Про нас</h1> 
            <p>InvestNow — лідер у сфері інвестицій, який допомагає нашим клієнтам досягати фінансової незалежності. Наша компанія зібрала команду професіоналів, які розробляють інноваційні стратегії для управління капіталом та досягнення фінансових цілей наших клієнтів. Ми спеціалізуємося на інвестиціях у криптовалюти, акції, облігації та інші фінансові інструменти.</p>
            <p>Ми надаємо комплексні консультації та аналітику для підприємців, інвесторів та всіх, хто прагне досягти фінансового успіху в умовах змінного ринку.</p>
        </div>
        <div class="about-us-image">
            <img src="https://cdn.pixabay.com/photo/2021/12/27/19/28/e-commerce-6898102_1280.png" alt="Про нас">
        </div>
    </section>

    <!-- Our Values -->
    <section class="values">
        <h2>Наші цінності</h2>
        <div class="values-container">
            <div class="value">
                <h3>Надійність</h3>
                <p>Ми ставимо на перше місце безпеку ваших інвестицій. Всі наші стратегії ґрунтуються на досвіді та глибокому аналізі.</p>
            </div>
            <div class="value">
                <h3>Прозорість</h3>
                <p>Кожен крок і кожна операція доступні для перегляду. Ви завжди в курсі стану ваших інвестицій.</p>
            </div>
            <div class="value">
                <h3>Експертиза</h3>
                <p>Наша команда складається з висококваліфікованих аналітиків, які використовують передові методи для створення успішних інвестиційних стратегій.</p>
            </div>
        </div>
    </section>

    <!-- Our Team -->
    <section class="team">
        <h2>Наша команда</h2>
        <div class="team-members">
            <div class="team-member">
                <img src="https://cdn.pixabay.com/photo/2019/08/11/11/28/man-4398724_1280.jpg" alt="Член команди 1">
                <h3>Олександр Іванов</h3>
                <p>Керівник департаменту інвестицій. 15 років досвіду на ринках акцій та криптовалют.</p>
            </div>
            <div class="team-member">
                <img src="https://images.pexels.com/photos/1181424/pexels-photo-1181424.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Член команди 2">
                <h3>Марія Ковальчук</h3>
                <p>Фінансовий аналітик, експерт з облігацій і корпоративних фінансів.</p>
            </div>
            <div class="team-member">
                <img src="https://cdn.pixabay.com/photo/2019/08/11/11/28/man-4398727_1280.jpg" alt="Член команди 3">
                <h3>Тимур Ярмоленко</h3>
                <p>Головний стратег, спеціаліст з прогнозування ринку та цифрових активів.</p>
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
    <script src="scripts/log-and-reg.js"></script>
    <script src="scripts/toggle-menu.js"></script>
</body>
</html>

<?php

?>