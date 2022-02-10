<?php include("header.php"); if(isset($_SESSION['id'])){header("Location: index.php");}?>
    
    <link rel="stylesheet" href="css/reset_pass.css">
    <div><span class="frgt_form_close">X</span></div>
    <div class="ressupdiv1">
      <div class="resdiv1">
          <img src="images/etc/forgot_pass.jpg" alt="" class="resi1">
      </div>
      <div class="resdiv2">
        <h4 class="resh4">
          Forgot your password, Don't Worry...!!!
        </h4>
        <h3 class="resh3">Enter your E-mail</h3>
        <form class="resform" method="post" action="forgot_password.php">
          <p>Enter Email Address To Send Password Link</p><br>
          <input type="text" name="email" placeholder = "Email" required>
          <button type="submit" name="submit_email" class="resb1">Submit</button>  
        </form>
      </div>
    </div>
    <script>
        var modalClose = document.querySelector('.frgt_form_close');
        modalClose.addEventListener('click', function(){
        window.open("index.php","_self");
        });
    </script>
<?php include("footer.php")?>
