<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title>Registration form</title>
</head>
<body>
    <div class="main">
        <div class="register">
            <span class="reg_form_close">X</span>
            <h2 class="regh2">Register Here</h2>
            <form action="" id="register" method="post">
                <label for="">Full Name : </label>
                <br>
                <input type="text" pattern="[a-zA-Z'-'\s]*" oninvalid="setCustomValidity('ALPHABETS ONLY')"
                id="name" name="fullname" placeholder="FULL NAME" 
                class="ifname" required
                value="<?php if(isset($_POST['fullname'])){echo htmlentities($_POST['fullname']);} ?>"
                oninput="setCustomValidity('')">
                <br><br>
                <label for="">Your age : </label>
                <br>
                <input type="number" min="13" oninvalid="setCustomValidity('Must be 13+ ')"
                id="name" name="age" placeholder="How Old are you...?" class="ifname" required
                value="<?php if(isset($_POST['age'])){echo htmlentities($_POST['age']);} ?>"
                oninput="setCustomValidity('')">
                <br><br>
                <label for="">Mobile Number : </label>
                <br>
                <input type="tel" pattern="[0-9]{10}" oninvalid="setCustomValidity('NUMBERS ONLY [10 Digits]')"
                id="name" name="contact" placeholder="Contact  " class="ifname" required
                value="<?php if(isset($_POST['contact'])){echo htmlentities($_POST['contact']);} ?>"
                oninput="setCustomValidity('')">
                <br><br>
                <label for="">Address : </label>
                <br>
                <textarea type="text" name="address" placeholder="Address  " class="ifname" required id="address"
                ><?php if(isset($_POST['address'])){echo htmlentities($_POST['address']);} ?></textarea>
                <br><br>
                <label for="">Email : </label>
                <br>
                <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" oninvalid="setCustomValidity('eg. abc@xyz.com')"
                id="name" name="email" placeholder="Email" required
                value="<?php if(isset($_POST['email'])){echo htmlentities($_POST['email']);} ?>"
                oninput="setCustomValidity('')">
                <br><br>
                <label for="">Password : </label>
                <br>
                <input type="password" name="password1" placeholder="Password" required
                id="name" value="<?php if(isset($_POST['password1'])){echo htmlentities($_POST['password1']);} ?>">
                <br><br>
                <label for="">Confirm Password : </label>
                <br>
                <input type="password" name="password2" placeholder="Password" required
                id="name" value="<?php if(isset($_POST['password2'])){echo htmlentities($_POST['password2']);} ?>">
                <br><br>
                <input name="location" type="hidden" 
                    value="<?php 
                    if(isset($_POST['reg_location'])){
                        echo $_POST['reg_location'];
                    }
                    else{
                    if(!isset($_SESSION['login_redirect'])){echo $_SERVER['HTTP_REFERER'];}
                    else{echo $_SESSION['login_redirect'];}}
                ?>">
                <input type="submit" name="reg_user" id="submit" value="SUBMIT">
            </form>
        </div>
    </div>
    <script>
        var modalClose = document.querySelector('.reg_form_close');
        modalClose.addEventListener('click', function(){
        window.open("index.php","_self");
        });
    </script>
</body>
</html>