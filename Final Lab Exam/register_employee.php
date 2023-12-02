<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration</title>
</head>
<body>
    <h2>Employee Registration</h2>
    <form action="process_registration.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required><br>

		<label for="contactno">Full Name:</label>
        <input type="number" id="contactno" name="contactno" required><br>
        
        <input type="submit" value="Register">
    </form>
</body>
</html>