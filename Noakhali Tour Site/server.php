<?php

   //session_start();
    $username = "";
    $email = "";
    $password = "";
    $errors = array();
   

    $db = mysqli_connect('localhost', 'root', "", 'registration');

    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password_1 = $_POST['password_1'];
        $password_2 = $_POST['password_2'];
        
        if(empty($username)){
            array_push($errors, "Username is required");
        }

        if(empty($email)){
            array_push($errors, "Email is required");
        }
        
        if(empty($password_1)){
            array_push($errors, "Password is required"); 
        }

        if($password_1 != $password_2){
            array_push($errors, "Passwords do not match"); 
        }


        if(count( $errors) == 0){

            $password = md5($password_1);

            $query = "select * from users where USERNAME='$username' && PASS='$password'";
            
            $result = mysqli_query($db,$query);
            $num = mysqli_num_rows($result);

            
                if($num == 0){

                    $sql = "INSERT INTO users (USERNAME, EMAIL, PASS)
                    VALUES('$username', '$email', '$password')"; 
                    mysqli_query($db, $sql);         
                    header('location: home.php');
                    exit;
    
                    
                }
                    
                else{
                    array_push($errors, "Already Has an account");
                } 
          
        }       
   
    }

    if(isset($_POST['login'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if(empty($username)){
            array_push($errors,"Username is required");
        }

        if(empty($password)){
            array_push($errors,"Password is required");
        }

        if(count( $errors) == 0){

            $password = md5($password);
            $query = "select * from users where USERNAME='$username' && PASS='$password' ";

            $result = mysqli_query($db,$query);
            $num = mysqli_num_rows($result);

            
                if($num == 1){

                    $_SESSION['username'] = $username;
                    header('location:home.php');
                    
                }
                    
                else{
                    array_push($errors, "wrong username/password combination");
                }         
                   
        }
    }


    if(isset($_GET['logout'])){
        sesion_destroy();
        unset($_SESSION['username']);
        header('location:login.php');
        exit;
    }
    ?>