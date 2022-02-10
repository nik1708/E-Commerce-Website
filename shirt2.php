<?php include("header.php");?>
<link rel="stylesheet" href="css/sample.css">
    <h1 class="bh1">CHECKED SHIRTS</h1>
    <div class="super1">
    <?php
        include("db.php");
        $sql = "SELECT * FROM products WHERE product_title='Check-Shirt'";
        $query = mysqli_query($con,$sql);
        while ($row = mysqli_fetch_assoc($query)){
            if($row["product_id"]%2!=0){echo'<div class="sampleright super">';}
            else{echo'<div class="sampleleft super">';}
            echo'
                <div class="sub1">
                    <img src="images/'.$row["product_image"].'" alt="">
                </div>
                <div class="sub2">
                    <h3 class="h3">Details</h3> 
                    <p>Color: '.$row["product_a"].'</p>
                    <p>Pocket Style: '.$row["product_b"].'</p>
                    <p>Collar: '.$row["product_c"].'</p>
                    <p>Sleave: '.$row["product_d"].'</p>
                    <form action="product.php" method="post">
                        <input type="hidden" name="pid" id="shirt" value='.$row["product_id"].'>
                        <button name="submit" class="b1">Buy now</button>
                        <button name="cart" class="b2">Add to cart</button>
                    </form> 
                </div>
                </div>
            ';
        }
    ?>
 </div>
<?php include("footer.php");?>