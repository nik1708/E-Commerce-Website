<?php
    include("header.php");
    include("query_form.php");

    $errors = array();

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $_SESSION['query_mail'] = $email;

        if (empty($name)) { array_push($errors, "Name is required"); }
        if (empty($email)) { array_push($errors, "Email is required"); }
        if (empty($message)) { array_push($errors, "Message is required"); }

        if(!empty($name)){
            if(!ctype_alpha(str_replace(' ', '', $name))){array_push($errors, "NAME ALPHABETS ONLY");}
        }

        $query = "INSERT INTO `query` (`name`, `email`, `message`) VALUES
        ('$name','$email','$message')";

        if ((count($errors) == 0)){
            include("PHPMailer/query_success_mail.php");
            if($_SESSION['check']){
                if ($con->query($query) === TRUE) {
                    echo '
                    <script>
                        alert("QUERY SUBMITTED SUCCESSFULLY");
                        window.open("index.php","_self");
                    </script>';
                }
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