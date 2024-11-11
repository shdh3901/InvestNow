function openPage(page) {
    document.querySelectorAll('.form-container').forEach(form => form.style.display = 'none');
    if (page === 'login') {
        document.getElementById('loginPage').style.display = 'flex';
    } else if (page === 'register') {
        document.getElementById('registerPage').style.display = 'flex';
        showForm('user');
    }
}

function showForm(role) {
    document.getElementById('userForm').style.display = role === 'user' ? 'block' : 'none';
    document.getElementById('employeeForm').style.display = role === 'employee' ? 'block' : 'none';
    
    document.getElementById('userBtn').classList.toggle('selected', role === 'user');
    document.getElementById('employeeBtn').classList.toggle('selected', role === 'employee');
}
