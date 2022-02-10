<?php
include("..\db.php");
        session_start();
        $sql = "SELECT * FROM products";
        $query = mysqli_query($con,$sql);
        echo "<style>
            table{
                table-layout: fixed ;
                width: 50% ;    
            }
            td{
                text-align: center;
                width: 25% ;
            }
        </style>";
        echo "<table border='1'>";
        echo "<tr>
            <td><b>Picture</b></td>
            <td><b>Product ID</b></td>
            <td><b>Product Title</b></td>
            <td><b>Amount</b></td>
            </tr>";
        while ($row = mysqli_fetch_assoc($query)){
            $image = '../images/'.$row['product_image'];
            echo "<tr>";
            echo "<td><img src='".$image."' style='width:100px;'></td>";
            echo "<td>".$row['product_id']."</td>";
            echo "<td>".$row['product_title']."</td>";
            echo "<td>".$row['product_price']."</td>";
            echo "</tr>";
        }
?>