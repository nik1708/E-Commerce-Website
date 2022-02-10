<?php
  session_start();
  include("db.php");
  include("register_form.php");

  $errors = array();

  if (isset($_POST['reg_user'])) {
    if(!isset($_SESSION["login_redirect"])){
      $_SESSION["login_redirect"] = $_POST['location'];
    }

    $email = $_POST['email'];
    $password_1 = $_POST['password1'];
    $password_2 = $_POST['password2'];

    $name = $_POST['fullname'];
    $parts = explode(" ", $name);
    if(count($parts) > 2) {
      $last_name = array_pop($parts);
      $middle_name = array_pop($parts);
      $first_name = implode(" ", $parts);
    }
    elseif(count($parts) > 1){
      $last_name = array_pop($parts);
      $middle_name = "";
      $first_name = implode(" ", $parts);
    }
    else{
      $firstname = $name;
      $middle_name = "";
      $lastname = " ";
    } 
    
    $contact = $_POST['contact'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    
    /*if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1) || empty($password_2)) { array_push($errors, "Password is required"); }
    if (empty($first_name)) { array_push($errors, "First Name is required"); }
    if (empty($last_name)) { array_push($errors, "Last Name is required"); }
    if (empty($contact)) { array_push($errors, "Contact is required"); }
    if (empty($address)) { array_push($errors, "Address is required"); }
    if(!empty($first_name)){if(!ctype_alpha($first_name)){array_push($errors, "FIRSTNAME ALPHABETS ONLY");}}
    if(!empty($last_name)){if(!ctype_alpha($last_name)){array_push($errors, "LASTNAME ALPHABETS ONLY");}}
    if(!empty($contact)){
      if(!is_numeric($contact)){array_push($errors, "CONTACT NUMBERS ONLY");}
      if(strlen($contact)!=10){array_push($errors, "INVALID CONTACT");}
    }*/


    if($password_1 <> $password_2){array_push($errors, "Password doesn't Matches");}

    $user_check_query = "SELECT * FROM user_info WHERE email='$email' LIMIT 1";
    $result = mysqli_query($con, $user_check_query);
    $user = mysqli_fetch_assoc($result);
  
    if ($user) { 
      if ($user['email'] === $email) {array_push($errors, "User with that email already exists");}
    }
    if (count($errors) == 0){
    	$password = md5($password_1);
  	  $query = "INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `age`, `address`) VALUES
  	  (0, '$first_name', '$last_name', '$email', '$password', '$contact','$age','$address')";
        
      if ($con->query($query) === TRUE) {
        include("PHPMailer/register_success_mail.php");
        $query = mysqli_query($con,"select * from user_info  where email='$email'");
        $row = mysqli_fetch_assoc($query);
        $_SESSION["id"] = $row["user_id"];
        $_SESSION["fname"] = $row["first_name"];
        $_SESSION["lname"] = $row["last_name"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["mobile"] = $row["mobile"];
        $_SESSION["age"] = $row["age"];
        $_SESSION["address"] = $row["address"];
  	    header('location:'.$_SESSION['login_redirect']);
      } 
      else {
        echo "Error: " . $query . "<br>" . $con->error;
      }        
    }
    else{
      $string = "";
      if (count($errors) > 0) : 
        foreach ($errors as $error) :
            $string = $string.'\n'.$error;
        endforeach;
        echo '<script>alert("'.$string.'");</script>';
      endif;
    }
  }
?>