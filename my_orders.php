<?php 
    session_start();
    include("header.php")
?>
<link rel="stylesheet" href="css/my_order.css">
<div class="div-table">
    <h2 class="table-head">My Orders</h2>
    <table>
        <tr class="table-headings">
            <td><b>Picture</b></td>
            <td><b>Product ID</b></td>
            <td><b>Product Title</b></td>
            <td><b>Amount</b></td>
        </tr>
        <?php
        $sql = "SELECT * FROM orders_info WHERE user_id='".$_SESSION['id']."'";
        $query = mysqli_query($con,$sql);
        while ($row = mysqli_fetch_assoc($query)){
            echo "<tr>";
            echo "<td><img src='images/".$row['image']."' style='width:100px;'></td>";
            echo "<td>".$row['order_id']."</td>";
            echo "<td>".$row['ptitle']."</td>";
            echo "<td>".$row['price']."</td>";
            echo "</tr>";
        }
    ?>
    </table>
</div>    
<?php include("footer.php");?>