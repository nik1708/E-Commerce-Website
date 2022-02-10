<?php include("header.php");?>
<link rel="stylesheet" href="css/change_password.css">
    <div class="log">
        <div class="log1">
            <h2 class="logh">Login & Security</h2><br><br>
            <form action="update_old_password.php" method="post" id="ref1" >
                <label for="">Enter Old Password:</label>
                <input type="password" name="password1" id="password" placeholder="Old Password" class="pass" required><br><br>
                <label for="">Enter New Password:</label>
                <input type="password" name="password2" id="password" placeholder="New Password" class="pass2" required><br><br>
                <label for="">Confirm New Password:</label>
                <input type="password" name="password3" id="password" placeholder="New Password" class="pass3" required><br><br>
                <button class="l1" name="update_password" type="submit">Save Changes</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php include("footer.php");?>