<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="shortcut icon" href="images/logos/company.png" type="image/x-icon">
    <title>Favourite Tailor</title>
</head>
<body>
    </style>
    <header class="Header1">
        <div class="img">
            <a href="index.php"><img src="images/logos/company.png" alt="" class="image"></a>
        </div>
        <nav class="nav1">
            <ul class="ul1">
                <li class="li1"><a href="index.php" class="li1a"> HOME</a></li>
                <li class="li1">
                    <div class="dropdown">
                        <a href="shirt.php" class="li1a"> SHIRTS</a>
                        <div class="dropdown-content" style="width:130px;"> 
                            <a class="dropdown-item" href="shirt1.php">Plain Shirt</a>
                            <a class="dropdown-item" href="shirt2.php">Checks Shirt</a>
                            <a class="dropdown-item" href="shirt3.php">Pattern Shirt</a>
                        </div>
                    </div>
                </li>
                <li class="li1">
                    <div class="dropdown">
                        <a href="pant.php" class="li1a"> PANTS</a>
                        <div class="dropdown-content" style="width:130px;"> 
                            <a class="dropdown-item" href="pant1.php">Simple Pant</a>
                            <a class="dropdown-item" href="pant2.php">Checks Pant</a>
                            <a class="dropdown-item" href="pant3.php">Pattern Pant</a>
                        </div>
                    </div>
                </li>
                <li class="li1"><a href="blazer.php" class="li1a"> BLAZERS</a></li>
                <li class="li1"><a href="query.php" class="li1a"> QUERY  </a></li>
            </ul>
        </nav>
        <nav class="right">
            <ul class="ul1">
                <li class="li1">
                    <?php
                        include "db.php";
                        if(isset($_SESSION["id"])){
                            $sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[id]'";
                            $query = mysqli_query($con,$sql);
                            $row=mysqli_fetch_array($query);
                            echo '
                                <div class="dropdown">
                                    <button class="button1"><a class="li1a1" href="#">
                                        Hey '.$_SESSION["fname"].'
                                    </a></button>
                                    <div class="dropdown-content">
                                        <a class="dropdown-item" href="profile.php">My Profile</a>
                                        <a class="dropdown-item" href=cart_page.php>My Cart</a>
                                        <a class="dropdown-item" href="logout.php">Log out</a>
                                    </div>
                                </div>';
                        }
                        else{ 
                            echo '
                                <div class="dropdown">
                                    <button class="button1"><a class="li1a1">
                                        My Account
                                    </a></button>
                                    <div class="dropdown-content">
                                        <a class="dropdown-item" href="login.php">Login</a>
                                        <a class="dropdown-item" href="register.php">Register</a>
                                    </div>
                                </div>';
                        }
                    ?>
                </li>
            </ul>
        </nav>
    </header>