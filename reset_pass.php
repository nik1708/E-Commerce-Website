<?php
session_start();
if($_GET['key'] && $_GET['reset'] && (!$_SESSION['link_opened'])  && ($_SESSION['chance']!=0))
{
  include("db.php");
  $_SESSION['link_opened'] = true;
  $email=$_GET['key'];
  $pass=$_GET['reset'];
  $select=mysqli_query($con,"select email,password from user_info where md5(email)='$email' and md5(password)='$pass'");
  if(mysqli_num_rows($select)==1)
  {
    ?>
    <link rel="stylesheet" href="css/reset_password.css">
    <div class="log">
        <div class="log1">
          <form method="post" action="submit_new.php" class="reset-form">
            <input type="hidden" name="email" value="<?php echo $email;?>">
            <input type="hidden" name="oldpass"  value="<?php echo $pass;?>">
            <label for="">Enter New Password:</label>
            <input type="password" id="password" name='password'>
            <button class="l1" type="submit" name="submit_password" type="submit">Submit</button>
          </form>
          <P class="chance">Chances Left: <?php echo $_SESSION['chance']; ?></P>
        </div>
        <p>*Note: Please Do Not Refresh The Page...!!!</p>
    </div>
    <?php
  }
  else{
    echo '<script>
      alert("Link Expired");
      window.open("index.php","_SELF");
    </script>';
  }
}
else{
  echo '<script>
    alert("Link Expired");
    window.open("index.php","_SELF");
  </script>';
}

?>
