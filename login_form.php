<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <div><span class="log_form_close">X</span></div>
        <div class="subcontainer">
            <div class="in">
                <form class="signin" action="login.php" method="post">
                    <h1>Sign in</h1>
                    <p>CONTINUE USING...</p>
                    <div class="google">
                        <a class="google_login"><img src="images/logos/google.png" alt=""></a>
                    </div>
                    <p>Or User Your Account</p>
                    <input name="email" type="email" placeholder="Email" required
                    value="<?php if(isset($_POST['email'])){echo htmlentities($_POST['email']);} ?>">
                    <input name="password" type="password" placeholder="Password" required  
                    value="<?php if(isset($_POST['password'])){echo htmlentities($_POST['password']);} ?>">
                    <input name="location" type="hidden" 
                    value="<?php 
                    if(!isset($_SESSION['login_redirect'])){echo $_SERVER['HTTP_REFERER'];}
                    else{echo $_SESSION['login_redirect'];}
                    ?>">
                    <a href="reset_pass_form.php" class="a">Forgot your pasword?</a>
                    <button name="login" class="b"><a href="" class="ba"><b>Sign in</b></a></button>
                </form>
            </div>
            <div class="up">
                <div>                
                    <h1 class="uph1">Hey There...!!!</h1>
                    <h3 class="upp1">Enter Your Personal Details &</h3>
                    <h3 class="upp2">Shop Clothes which you want...</h3>
                    <form action="register.php" method="post">
                        <input name="reg_location" type="hidden" 
                        value="<?php 
                        if(!isset($_SESSION['login_redirect'])){echo $_SERVER['HTTP_REFERER'];}
                        else{echo $_SESSION['login_redirect'];}
                        ?>">
                        <button type="submit" class="upb"><b>Sign up</b></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var modalClose = document.querySelector('.log_form_close');
        modalClose.addEventListener('click', function(){
        window.open("index.php","_self");
        });

        var modalClose = document.querySelector('.google_login');
        modalClose.addEventListener('click', function(){
            alert("Under Development...!!!\nSorry for the inconvenience ");
        });

    </script>
</body>
</html>