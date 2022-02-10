<?php
session_start();
include("db.php");
if(isset($_POST['submit_password']))
{
  $_SESSION['chance']--;
  $email=$_POST['email'];
  $old_pass=$_POST['oldpass'];
  $pass=md5($_POST['password']);
  $check_pass=mysqli_query($con,"SELECT `password` FROM user_info where md5(email)='$email'");
  $row = mysqli_fetch_assoc($check_pass);
  if($pass == $row['password']){ $_SESSION['link_opened'] = false;echo '<script>alert("Password Same"); window.open("reset_pass.php?key='.$email.'&reset='.$old_pass.'","_SELF")</script>';}
  else{
  $select=mysqli_query($con,"update user_info set password = '$pass' where md5(email)='$email'");
  echo '<script>
      alert("Password Updated Successfully");
      window.open("index.php","_self");
  </script>';}
}
else{
  echo '<script>
    alert("Error...!!!\nPage Not Found");
    window.open("index.php","_self");
  </script>';
}
?>