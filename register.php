<?php
// include_once ('../Login/registerprocess.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Lab 1_Shirley/css/style.css">
    <title>Document</title>
</head>
<body>
    <form action="registerprocess.php" method= "POST">
        <div class="container">
         <h1>Register Form</h1>
         <p>Create an account</p>   

         <label for="Fullname"><b> Full name<b></label>
         <input type="text" placeholder="Enter full name" name="fullname" id="fullname" required >

         <label for="email"><b> Email<b></label>
         <input type="text" placeholder="Enter your Email" name="email" id="email" required >

         <label for="psw"><b> Password<b></label>
         <input type="password" placeholder="Enter password" name="password" id="password" 
         pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" 
                title="Must contain at least one number and one uppercase 
                and lowercase letter, and at least 6 or more characters"required >

         <label for="country"><b> Country<b></label>
         <input type="text" placeholder="Enter Country" name="country" id="country" required >

         <label for="contact"><b> Contact<b></label>
         <input type="text" placeholder="Enter your contact" name="contact" id="contact" required >

         <button type= "submit" class = "registerbtn" name="submit"> Register</button>
        </div>

        <div class= "container signin">
            <p> Already have an account? <a href="#">Sign in </p>
        </div>
    </form> 
</body>
</html>


    <!-- <div class="form">
        <h1>Customer Registration</h1>
        <form action="../Login/registerprocess.php" method="POST">
            <div class="form-control">
                <input type="text" placeholder="name" name="name" id="name">
            </div>

            <div class="form-control">
                <input type="email" placeholder="email" name="email" id="email">
            </div>

            <div class="form-control">
                <input type="password" placeholder="password" name="password" id="password">
            </div>

            <div class="form-control">
                <input type="text" placeholder="country" name="country" id="country">
            </div>

            <div class="form-control">
                <input type="text" placeholder="city" name="city" id="city">
            </div>

            <div class="form-control">
                <input type="tel" placeholder="contact" name="contact" id="contact">
            </div>

            

            <div class="form-control">
                <button class="btn" type="submit" name="registerCustomer" id="btn">REGISTER</button>
            </div>
            
        </form>
    </div> -->