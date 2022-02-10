<?php
include("db.php");
if(isset($_POST['submit_email']) && $_POST['email'])
{
  $select=mysqli_query($con,"SELECT `email`,`password` FROM user_info WHERE email='".$_POST['email']."'");
  if(mysqli_num_rows($select)==1)
  {
    while($row=mysqli_fetch_array($select))
    {
      $receiver_mail = $row['email'];
      $email=md5($row['email']);
      $pass=md5($row['password']);
    }
    //$link="<a href='http://favouritetailor.42web.io/reset_pass.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";
    $link="<a href='http://localhost/sgp/reset_pass.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";
    include("PHPMailer/reset_mail.php");
    $_SESSION['link_opened'] = false;
    $_SESSION['chance']= 3 ;
    if($_SESSION['check']){
      echo '<script>
        alert("Link Sent");
        window.open("index.php","_self");
      </script>';
    }	
    else{
      echo'
        <script>
          alert("Unexpected Error...!!! Link Not Sent");
          window.open("index.php","_self");
        </script>';
    }
  }
  else{
    echo'
      <script>
        alert("E-mail Not registered...!!!");
          window.open("index.php","_self");
        </script>';
  }   
}
?>