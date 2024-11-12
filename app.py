import os
from flask import Flask, request, render_template, url_for

app = Flask(__name__)
registration_file = 'registrations.txt'

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/register', methods=['GET', 'POST'])
def show_register():
    if request.method == 'POST':
        name = request.form['name']
        email = request.form['email']
        password = request.form['password']
        user_type = request.form['userType']

        data = f"Name: {name}\nEmail: {email}\nPassword: {password}\nUser Type: {user_type}\n---\n"
        with open(registration_file, 'a') as file:
            file.write(data)

        success_message = "Запит успішно надіслано. Чекайте на підтвердження."
        return render_template('register.html', success_message=success_message)

    return render_template('register.html', success_message=None)

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

        # Читання файлу з кодуванням 'cp1251'
        with open(registration_file, 'r', encoding='cp1251') as file:
            content = file.read()
        return render_template('show_info.html', content=content)
    except UnicodeDecodeError:
        return "Error decoding file content.", 500

if __name__ == '__main__':
    # Запуск сервера на хості 0.0.0.0 і порту з змінної середовища
    app.run(host='0.0.0.0', port=int(os.environ.get('PORT', 10000)), debug=True)
