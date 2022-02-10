<?php
    session_start();
    if(!isset($_SESSION['id'])){
        $_SESSION["login_redirect"] = $_SERVER["HTTP_REFERER"];
        echo '
        <script>
            alert("Please login...!!!");
            window.open("login.php","_self");
        </script>
        ';
    }
?>
<?php
    if(isset($_POST['cart'])){
        header("Location: cart.php");
    }
    echo'<link rel="stylesheet" href="css/product.css">';
    if(!isset($_SESSION["prev"])){
        $_SESSION["prev"] = $_SERVER['HTTP_REFERER'];
        }
        include ("db.php");
        $_SESSION['pid'] = $_POST['pid'];
        $product_search = "SELECT * from products  WHERE product_id='".$_SESSION['pid']."'";
        $query = mysqli_query($con,$product_search);
        $row = mysqli_fetch_assoc($query);
        $_SESSION['image'] = $row['product_image'];
        $_SESSION['title'] = $row['product_title'];
        $_SESSION['a'] = $row['product_a'];
        $_SESSION['b'] = $row['product_b'];
        $_SESSION['c'] = $row['product_c'];
        $_SESSION['d'] = $row['product_d'];
        $_SESSION['price'] = $row['product_price'];
        if(strpos($_SESSION["title"], "Shirt")){
            $_SESSION['detail1'] = "Pocket Style";
            $_SESSION['detail2'] = "Collar";
            $_SESSION['detail3'] = "Sleave";}
        if(strpos($_SESSION["title"], "Pant")){
            $_SESSION['detail1'] = "Style";
            $_SESSION['detail2'] = "Material";
            $_SESSION['detail3'] = "Size";}
        if($_SESSION["title"]=="Blazer"){
            $_SESSION['detail1'] = "Button Style";
            $_SESSION['detail2'] = "Wash Instructions";
            $_SESSION['detail3'] = "Lapel";}
    ?>
    <div class="body">
    <div id="modal-bg" class="modal-bg">
        <div class="modal">
            <div class="sub">
                <span class="modal-close">X</span>
                <div class="l">
                    <?php echo' <img src="images/'.$_SESSION["image"].'" alt=""> ';?>
                </div>
                <div class="r">
                    <div class="form">
                        <h3 class="h3">Details</h3> 
                        <?php echo' <p>Color:  '.$_SESSION["a"].'</p> ';?>
                        <?php echo' <p>'.$_SESSION['detail1'].': '.$_SESSION["b"].'</p> ';?>
                        <?php echo' <p>'.$_SESSION['detail2'].': '.$_SESSION["c"].'</p> ';?>
                        <?php echo' <p>'.$_SESSION['detail3'].': '.$_SESSION["d"].'</p> ';?>                    
                        <?php echo' <p>Price -  '.$_SESSION["price"].'</p> ';?>
                        <form action="order.php" method="post">
                            <button type="submit" name="submit" class="order">Confirm Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        var modalClose = document.querySelector('.modal-close');
        modalClose.addEventListener('click', function(){
        window.open("location.php","_self");});
    </script>
</body>
</html>
