<?php include('server.php'); ?>
<?php

session_start();
session_destroy();

header('location:login.php');

?>
