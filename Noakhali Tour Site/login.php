<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title> Salma </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2>SIGN IN</h2>
        </div>

        <style>
            body {
                background-image: url('image/1.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%;
            }
        </style>

        <form method="post" action="login.php">
            <?php include('errors.php'); ?>
            <div class="input-group">
                <label> Username</label>
                <input type="text" name="username" placeholder="username">
            </div>        

            <div class="input-group">
                <label> Password</label>
                <input type="password" name="password"placeholder="password">
            </div>
   
            <div class="input-group">
                <button type="submit" name="login" class="btn">Log in</button>
            </div>

            <p>
                Not yet a member? <a href="register.php">Sign Up</a>
            </p>

        </form>
    </body>
</html>