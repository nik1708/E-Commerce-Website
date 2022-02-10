<?php
    session_start();
    unset($_SESSION["id"]); 
    unset($_SESSION["fname"]);
    unset($_SESSION["lname"]); 
    unset($_SESSION["email"]); 
    unset($_SESSION["mobile"]);
    unset($_SESSION["address"]);
    unset($_SESSION["login_redirect"]);
    session_destroy();
    header('Location: index.php');
?>
