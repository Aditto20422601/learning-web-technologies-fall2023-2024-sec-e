<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

</head>

<body>



    <center>

        <section >

        <h2>Signup</h2>



            <form name="" action="../controller/signupvalidation.php" method="post" novalidate>



                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="enter username"> <br> <br>
                <?php if (isset($usernameerror)) { ?><?php echo $usernameerror; ?> <br> <br>  <?php  } ?>



                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="enter email"> <br> <br>
                <?php if (isset($emailerror)) { ?><?php echo $emailerror; ?> <br> <br> <?php  } ?>
                <?php if (isset($invalidemail)) { ?><?php echo $invalidemail; ?> <br> <br> <?php  } ?>


                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" placeholder="enter phone number"> <br> <br>
                <?php if (isset($phoneerror)) { ?><?php echo $phoneerror; ?> <br> <br> <?php  } ?>


                <label for="dob">Date of birth</label>
                <input type="date" name="dob" id="dob" placeholder="enter date of birth"> <br> <br>
                <?php if (isset($doberror)) { ?><?php echo $doberror; ?> <br> <br> <?php  } ?>


                <label for="usertype"> Usertype:</label>
                <select name="usertype" id="usertype">
                    <option value="NULL">Select user</option>
                    <option value="client">client</option>
                </select> <br> <br>


                <label for="address">Address</label>
                <input type="text" name="address" id="address" placeholder="enter address"> <br> <br>
                <?php if (isset($addresserror)) { ?><?php echo $addresserror; ?> <br> <br> <?php  } ?>


                <label for="userpassword">Password</label>
                <input type="password" name="userpassword" id="userpassword" placeholder="enter password"> <br> <br>
                <?php if (isset($passworderror)) { ?><?php echo $passworderror; ?> <br> <br> <?php  } ?>


                <label for="confirmpassword">Confirm password</label>
                <input type="password" name="confirmpassword" id="confirmpassword" placeholder="confirm password"> <br> <br>
                <?php if (isset($passworderror)) { ?><?php echo $passworderror; ?> <br> <br> <?php  } ?> 



            <input id="signup-button" type="submit" value="signup" name="signup">       



            </form>


        </section>

    </center>

</body>

</html>