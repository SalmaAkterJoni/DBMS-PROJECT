<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title> Salma </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2>SIGN UP</h2>
        </div>

        <style>
            body {
                background-image: url('image/1.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%;
            }
        </style>

        <form method="post" action="register.php">

            <?php include('errors.php'); ?>
            <div class="input-group">
                <label> Username</label>
                <input type="text" name="username"placeholder="username" value="<?php echo $username;?>">
            </div>

            <div class="input-group">
                <label> Email</label>
                <input type="text" name="email"placeholder="valid email" value="<?php echo $email;?>">
            </div>

            <div class="input-group">
                <label> Password</label>
                <input type="password" name="password_1"placeholder="password">
            </div>

            <div class="input-group">
                <label> Confirm Password</label>
                <input type="password" name="password_2" placeholder="re-type password">
            </div>

            <div class="input-group">
                <button type="submit" name="register" class="btn">Register</button>
            </div>

            <p>
                Already a member? <a href="login.php">Sign in</a>
            </p>

        </form>
    </body>
</html>