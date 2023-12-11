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
        <title>Payment</title>
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

            <button><a href="../view/invoice.php">My Invoice</a></button> <br><br>

            <h1> Please Pay</h1>

            <div class="container">

                <form action="../Controller/clientcontroller.php" method="post">

                    <label for="account">account</label>
                    <input type="text" id="account" name="account" required> <br><br>

                    <label for="amount">amount</label>
                    <input type="number" id="amount" name="amount" required> <br><br>

                    <label for="method">method</label>
                    <select name="method" id="method" required>
                    <option value="NULL">Select method</option>
                    <option value="bkash">bkash</option>
                    <option value="mastercard">mastercard</option>
                    <option value="visa">visa</option>
                    </select> <br> <br>

                    <label for="pid">bill id</label>
                    <input type="text" id="pid" name="pid" required > <br><br>


                    <input type="submit" name="pay" value="Submit">

                </form>
            </div>
        </center>


    </body>

    </html>

<?php } ?>