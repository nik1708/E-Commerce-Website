<?php
    include("../db.php");
    if(isset($_POST["delete"])){
        $delmail = $_POST['email'];
        $query ="DELETE FROM user_info WHERE email = '$delmail'";
        if ($con->query($query) === TRUE) {
            echo '
                <script>
                    alert("User Deleted");  
                </script> 
            ';
            header("Location: manage_users.php");
        }
        else{
            echo '
            <script>
                alert("User Not Deleted");  
            </script> 
        ';
        }
    }
?>