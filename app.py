import os
import re
from flask import Flask, request, render_template, url_for

app = Flask(__name__)
app.secret_key = os.environ.get('SECRET_KEY', 'change-this')
registration_file = os.environ.get('REGISTRATION_FILE', 'registrations.txt')

EMAIL_RE = re.compile(r"[^@]+@[^@]+\.[^@]+")

def is_valid_email(value: str) -> bool:
    """Return True if email has a basic valid format."""
    return EMAIL_RE.match(value or "") is not None

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/register', methods=['GET', 'POST'])
def show_register():
    if request.method == 'POST':
        name = request.form.get('name', '').strip()
        email = request.form.get('email', '').strip()
        password = request.form.get('password', '')
        confirm = request.form.get('confirm-password', '')
        user_type = request.form.get('userType', '')

        errors = []
        if not is_valid_email(email):
            errors.append('Невірний формат email.')
        if password != confirm:
            errors.append('Паролі не співпадають.')

        if errors:
            return render_template('register.html', success_message=None, errors=errors)

        data = f"Name: {name}\nEmail: {email}\nPassword: {password}\nUser Type: {user_type}\n---\n"
        with open(registration_file, 'a', encoding='utf-8') as file:
            file.write(data)

        success_message = "Запит успішно надіслано. Чекайте на підтвердження."
        return render_template('register.html', success_message=success_message, errors=None)

    return render_template('register.html', success_message=None, errors=None)

@app.route('/contact-page')
def show_contact():
    return render_template('contact-page.html')

@app.route('/about')
def show_about():
    return render_template('about-as.html')

@app.route('/login')
def show_login():
    return render_template('login.html')

@app.route('/show_info')
def show_info():
    try:
        # Перевірка на існування файлу перед відкриттям
        if not os.path.exists(registration_file):
            return "The registration file does not exist.", 404

        # Читання файлу з кодуванням 'utf-8'
        with open(registration_file, 'r', encoding='utf-8') as file:
            content = file.read()
        return render_template('show_info.html', content=content)
    except UnicodeDecodeError:
        return "Error decoding file content.", 500

if __name__ == '__main__':
    # Запуск сервера на хості 0.0.0.0 і порту з змінної середовища
    app.run(host='0.0.0.0', port=int(os.environ.get('PORT', 10000)), debug=True)
