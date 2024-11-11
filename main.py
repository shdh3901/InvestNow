from flask import Flask, request, render_template

app = Flask(__name__)

registration_file = 'registrations.txt'

from flask import Flask, render_template

app = Flask(__name__)

@app.route('/')
def home():
    return render_template('home.html') 

@app.route('/register')
def register():
    return render_template('register.html') 

@app.route('/contact-page')
def register():
    return render_template('contact-page.html') 

@app.route('/about-as')
def register():
    return render_template('about-as.html') 

@app.route('/login')
def register():
    return render_template('login.html') 

@app.route('/register')
def register():
    return render_template('register.html') 

@app.route('/register', methods=['POST'])
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
