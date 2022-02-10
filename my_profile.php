<?php include("header.php");?>
<link rel="stylesheet" href="css/my_profile.css">
<div class="pr">
    <div class="pr1">
        <h2 class="prh">Your Profile</h2>
        <form action="" id="profile" method="post">
                <label for="">Name: <?php echo $_SESSION["fname"].' '.$_SESSION["lname"];?></label><br><br><br>
                <label for="">Age: <?php echo $_SESSION["age"];?></label><br><br><br>
                <label for="">Contact: <?php echo $_SESSION["mobile"];?></label><br><br><br>
                <label for="">E-mail: <?php echo $_SESSION["email"];?></label><br><br><br>
                <label for="">Address: <?php echo $_SESSION["address"];?></label><br>
        </form>
    </div>
</div>
<script>
</script>
<?php include("footer.php") ?>