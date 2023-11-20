document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('form').addEventListener('submit', function (event) {
        let email = document.querySelector('input[name="email"]').value;
        let password = document.querySelector('input[name="userpassword"]').value;
        let emailError = document.getElementById('email-error');
        let passwordError = document.getElementById('password-error');

        if (email === '') {
            emailError.innerHTML = 'Email is required';
            event.preventDefault();
        } else {
            emailError.innerHTML = '';
        }

        if (password === '') {
            passwordError.innerHTML = 'Password is required';
            event.preventDefault();
        } else {
            passwordError.innerHTML = '';
        }
    });
});
