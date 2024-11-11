from flask import Flask, request, render_template

app = Flask(__name__)

registration_file = 'registrations.txt'

@app.route('/', methods=['GET', 'POST'])
def register():
    if request.method == 'POST':
        name = request.form['name']
        email = request.form['email']
        password = request.form['password']
        user_type = request.form['userType']
        
        data = f"Ім'я: {name}\nEmail: {email}\nПароль: {password}\nТип користувача: {user_type}\n---\n"
        
        with open(registration_file, 'a') as file:
            file.write(data)
        
        success_message = "Запит успішно надіслано. Чекайте на підтвердження."
        return render_template('register.html', success_message=success_message)

    return render_template('register.html', success_message=None)

if __name__ == '__main__':
    app.run(debug=True)
