document.addEventListener("DOMContentLoaded", function () {
    var form = document.querySelector("form");

    form.addEventListener("submit", function (event) {
        var isValid = true;

        var username = document.getElementById("username").value;
        if (username.trim() === "") {
            alert("Please enter a username");
            isValid = false;
        }

        var email = document.getElementById("email").value;
        if (email.trim() === "") {
            alert("Please enter an email address");
            isValid = false;
        }

        var phone = document.getElementById("phone").value;
        if (phone.trim() === "") {
            alert("Please enter a phone number");
            isValid = false;
        }

        var dob = document.getElementById("dob").value;
        if (dob.trim() === "") {
            alert("Please enter a date of birth");
            isValid = false;
        }

        var usertype = document.getElementById("usertype").value;
        if (usertype === "NULL") {
            alert("Please select a user type");
            isValid = false;
        }

        var address = document.getElementById("address").value;
        if (address.trim() === "") {
            alert("Please enter an address");
            isValid = false;
        }

        var password = document.getElementById("userpassword").value;
        if (password.trim() === "") {
            alert("Please enter a password");
            isValid = false;
        }

        var confirmPassword = document.getElementById("confirmpassword").value;
        if (confirmPassword.trim() === "") {
            alert("Please confirm your password");
            isValid = false;
        }

        if (password !== confirmPassword) {
            alert("Passwords do not match");
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault();
        }
    });
});
