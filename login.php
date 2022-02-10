<?php
    session_start();
    include("db.php");
    include("login_form.php");
    $errors = array();
    if(isset($_POST['login'])){
        if(!isset($_SESSION["login_redirect"])){
            $_SESSION["login_redirect"] = $_POST['location'];
        }
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($email)) { array_push($errors, "Email is required"); }
        if (empty($password)) { array_push($errors, "Password is required"); }

        $email_search = "select * from user_info  where email='$email'";
        $query = mysqli_query($con,$email_search);
        
        $email_count = mysqli_num_rows($query);
        if($email_count){
            $email_pass = mysqli_fetch_assoc($query);
            $db_pass = $email_pass['password'];
            if(!empty($password)){
                $password = md5($password);
                if($password == $db_pass){}
                else{
                    array_push($errors, "INCORRECT PASSWORD");
                }
            }
        }
        else{
            if(!empty($email)){
                array_push($errors, "INCORRECT EMAIL");
            }
        }
        if (count($errors) == 0){
            $_SESSION["id"] = $email_pass["user_id"];
            $_SESSION["fname"] = $email_pass["first_name"];
            $_SESSION["lname"] = $email_pass["last_name"];
            $_SESSION["email"] = $email_pass["email"];
            $_SESSION["mobile"] = $email_pass["mobile"];
            $_SESSION["age"] = $email_pass["age"];
            $_SESSION["address"] = $email_pass["address"];
            header('Location:'.$_SESSION['login_redirect']);
            exit;
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
