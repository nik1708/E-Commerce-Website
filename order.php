<?php
    session_start();
    include("db.php");
    include("PHPMailer/order_success_mail.php");
    if ($_SESSION['check']) {      
      $query = "INSERT INTO `orders_info` (`user_id`,`pid`,`ptitle`, `fname`, `lname`, `email`, `address`, `image`, `price`) VALUES
  	  ('".$_SESSION['id']."','".$_SESSION['pid']."','".$_SESSION['title']."', '".$_SESSION['fname']."', '".$_SESSION['lname']."', '".$_SESSION['email']."','".$_SESSION['address']."','".$_SESSION['image']."','".$_SESSION['price']."')";
      $con->query($query);
      $location = $_SESSION["prev"];
      unset($_SESSION["prev"]);
      echo '
      <script>
        alert("ORDER SUCCESSFULL");
        const locate = '.json_encode($location).';
        window.open(locate,"_self"); 
      </script>
    ';    
    }
    else{
      echo '
      <script>
        alert("ERROR...!!! Order Not Successfull");
        window.open("index.php","_SELF");
      </script>';
    }
?>