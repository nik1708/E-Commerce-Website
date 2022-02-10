<html>
<body>
<?php
    include("..\db.php");
    session_start();
    $sql = "SELECT * FROM user_info";
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
            <td><b>First Name</b></td>
            <td><b>Email</b></td>
            </tr>";
        while ($row = mysqli_fetch_assoc($query)){
            echo "<tr>";
            echo "<td>".$row['first_name']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "</tr>";
        }
?>
<form action="delete.php" method="post">
    <input type="email" name="email" placeholder="EMAIL">
    <button type="submit" name="delete">DELETE</button>
</form>
</body>
</html>