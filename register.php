<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реєстрація</title>
    <link rel="stylesheet" href="styles/login-and-reg.css">
</head>
<body>
    <div class="form-container">
        <h2>Реєстрація</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $userType = $_POST['userType'];

            $data = "Ім'я: $name\nEmail: $email\nПароль: $password\nТип користувача: $userType\n---\n";

            file_put_contents('registrations.txt', $data, FILE_APPEND);

            echo "<p style='color: green;'>Запит успішно надіслано. Чекайте на підтвердження.</p>";
        }
        ?>

        <form method="POST">
            <!-- Вибір користувача чи працівника -->
            <div class="user-type-selection">
                <label for="user" class="user-type-btn active" onclick="setUserType('user')">Користувач</label>
                <label for="employee" class="user-type-btn" onclick="setUserType('employee')">Працівник</label>
            </div>
            <input type="hidden" id="userType" name="userType" value="user">

            <div class="input-group">
                <label for="name">Ім'я</label>
                <input type="text" id="name" name="name" placeholder="Введіть ваше ім'я" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Введіть ваш email" required>
            </div>
            <div class="input-group">
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" placeholder="Створіть пароль" required>
            </div>
            <div class="input-group">
                <label for="confirm-password">Підтвердження паролю</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Підтвердьте пароль" required>
            </div>
            <div class="form-footer">
                <button type="submit" class="btn">Зареєструватися</button>
            </div>
        </form>
    </div>

    <script>
        let selectedUserType = 'user';

        function setUserType(type) {
            selectedUserType = type;
            document.getElementById("userType").value = type; 
            document.querySelectorAll('.user-type-btn').forEach(btn => {
                btn.classList.remove('active');
                btn.classList.add('inactive');
            });
            document.querySelector(`label[for=${type}]`).classList.add('active');
            document.querySelector(`label[for=${type}]`).classList.remove('inactive');
        }
    </script>
</body>
</html>
