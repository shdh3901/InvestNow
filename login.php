<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вхід</title>
    <link rel="stylesheet" href="styles/login-and-reg.css">
</head>
<body>
    <div class="form-container">
        <h2>Вхід до акаунту</h2>
        <form onsubmit="showAlert(event)" method="POST">
            <div class="input-group">
                <label for="username">Логін</label>
                <input type="text" id="username" name="username" placeholder="Введіть ваш логін" required>
            </div>
            <div class="input-group">
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" placeholder="Введіть ваш пароль" required>
            </div>
            <div class="form-footer">
                <button type="submit" class="btn">Увійти</button>
                <a href="forgot-password.html" class="forgot-password">Забули пароль?</a>
            </div>
        </form>
    </div>
    <script>
        function showAlert(event) {
            event.preventDefault(); 
            alert("Введені направельні логін або пароль");
        }
    </script>
</body>
</html>
