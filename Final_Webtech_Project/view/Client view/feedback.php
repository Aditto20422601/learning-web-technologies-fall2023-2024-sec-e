<?php
@include 'config.php';
session_start();
require_once('../Model/usermodel.php');
if (isset($_SESSION['flag'])) {

    $conn = getConnection();
    $email = $_SESSION['email'];
    $sql = "select * from users where email='$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Feedback</title>
        <style>
            table,
            th,
            td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>

    <body>
        <br><br>
        <center>

            <button><a href="../view/feedbackview.php">My feedbacks</a></button> <br><br>

            <h1> Send Feedback</h1>

            <div class="container">

                <form action="../Controller/clientcontroller.php" method="post">

                    <label for="fname">Username</label>
                    <input type="text" id="name" name="name" value="<?= $row['username'] ?>" required> <br><br>

                    <label for="lname">Email</label>
                    <input type="text" id="email" name="email" value="<?= $row['email'] ?>" required> <br><br>

                    <label for="country">Country</label>
                    <input type="text" id="country" name="country" required><br><br>


                    <label for="subject">Opinion</label>
                    <textarea id="opinion" name="opinion" placeholder="Write something.." style="height:50px" required></textarea> <br><br>

                    <input type="submit" name="feedback" value="Submit">

                </form>
            </div>
        </center>


    </body>

    </html>

<?php } ?>