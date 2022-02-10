<?php
    session_start();
    include("db.php");
    $errors = array();
    if(1){
        $old_pass = md5($_POST['password1']);
        $new_pass1 = md5($_POST['password2']);
        $new_pass2 = md5($_POST['password3']);
        $email_search = "select password from user_info  where email='".$_SESSION["email"]."'";
        $row = mysqli_fetch_row(mysqli_query($con,$email_search));
        $pass = $row[0];
        if($pass != $old_pass){array_push($errors, "Old Password doesn't Matches");}
        if($new_pass1 <> $new_pass2){array_push($errors, "Password doesn't Matches");}
        if(count($errors) == 0){
            $select=mysqli_query($con,"update user_info set password = '$new_pass1' where email='".$_SESSION["email"]."'");
            echo '
            <script>alert("Password Updated Successfully");
                window.open("logout.php","_SELF");
            </script>
            ';
        }
        else{
            $string = "";
            if (count($errors) > 0) : 
              foreach ($errors as $error) :
                  $string = $string.'\n'.$error;
              endforeach;
              echo '<script>alert("'.$string.'");</script>';
            endif;
            echo'<script>window.open("change_password.php","_SELF")</script>';
        }
    }
?>