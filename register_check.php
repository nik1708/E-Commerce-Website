<?php
if($_GET['key'] && $_GET['reset'])
{
  include("db.php");
  $email=$_GET['key'];
  $pass=$_GET['reset'];
  
}
?>
