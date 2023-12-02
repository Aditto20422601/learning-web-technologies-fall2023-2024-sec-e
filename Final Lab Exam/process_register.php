<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $fullname = $_POST["fullname"];

    $employeeData = [
        "username" => $username,
        "password" => $password,
        "fullname" => $fullname,
    ];

    echo "Registration successful!";
} else {
    header("Location: register_employee.php");
    exit();
}
?>