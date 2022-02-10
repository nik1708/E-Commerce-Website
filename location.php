<?php
    session_start();
    $location = $_SESSION["prev"];
    unset($_SESSION["prev"]);
    header("Location:".$location);
?>

