CREATE DATABASE sgp;

CREATE TABLE `user_info` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `age` int(2) NOT NULL,
  `address` varchar(300) NOT NULL,
   PRIMARY KEY (user_id)
) ENGINE=InNoDB DEFAULT CHARSET=latin1;

INSERT INTO `user_info` (`first_name`, `last_name`, `email`, `password`, `mobile`, `age`,`address`) VALUES
('Nikunj', 'Dave', 'dnikunj1708@gmail.com', MD5('nikunj'), '6352202209',19, 'ABC DEF');

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_a` text NOT NULL,
  `product_b` text NOT NULL,
  `product_c` text NOT NULL,
  `product_d` text NOT NULL,
  `product_image` text NOT NULL,
   PRIMARY KEY (product_id)
) ENGINE=InNoDB DEFAULT CHARSET=latin1;

INSERT INTO `products` (`product_title`, `product_price`, `product_a`,`product_b`,`product_c`,`product_d`, `product_image`) VALUES
('Plain-Shirt', 1000, 'sky Blue','white Line','chinees collor','full sleave', 'shirts/p1.png'),
('Plain-Shirt', 1000, 'light grey','No pocket','Normal','full sleave', 'shirts/p2.png'),
('Plain-Shirt', 1000, 'navy Blue','No pocket','Normal','full sleave', 'shirts/p3.png'),
('Plain-Shirt', 1000, 'Light green','chinees collor','No pocket','full sleave', 'shirts/p4.png'),
('Plain-Shirt', 1000, 'Black','No pocket','Normal','full sleave', 'shirts/p5.png'),
('Plain-Shirt', 1000, 'White','Black patti','chinees collor','full sleave', 'shirts/p6.png'),
('Plain-Shirt', 1000, 'Purpule','No Pocket','Normal','full sleave', 'shirts/p7.png'),
('Plain-Shirt', 1000, 'baby pink','no pocket','chinese collor','half sleave', 'shirts/p8.png'),
('Check-Shirt', 1000, 'sky blue with purpule','No Pocket','Normal','Full sleave', 'shirts/c1.png'),
('Check-Shirt', 1000, 'Dark blue with Green','No Pocket','Normal','Full Sleave', 'shirts/c2.png'),
('Check-Shirt', 1000, 'Blue and Sky blue','No pocket','Normal color','Full sleave', 'shirts/c3.png'),
('Check-Shirt', 1000, 'Pink and White','No Pocket','Normal','Full sleave', 'shirts/c4.png'),
('Check-Shirt', 1000, 'Gray and White','No Pocket','Normal','Full sleave', 'shirts/c5.png'),
('Check-Shirt', 1000, 'white and black','No Pocket','Normal','Full sleave', 'shirts/c6.png'),
('Check-Shirt', 1000, 'Cream and Black','No Pocket','Normal','Full sleave', 'shirts/c7.png'),
('Check-Shirt', 1000, 'Black and Greay','No Pocket','Normal','Full sleave', 'shirts/c8.png'),
('Pattern-Shirt', 1000, 'Black and White','No Pocket','Normal','full sleave', 'shirts/pa1.png'),
('Pattern-Shirt', 1000, 'Blue and White','No pocket','Normal','Half sleave', 'shirts/pa2.png'),
('Pattern-Shirt', 1000, 'navy Blue and sky blue','No pocket','Normal','Half sleave', 'shirts/pa3.png'),
('Pattern-Shirt', 1000, 'White','Normal','No pocket','Full sleave', 'shirts/pa4.png'),
('Pattern-Shirt', 1000, 'Greay and White','V Style','Normal','Half sleave', 'shirts/pa5.png'),
('Pattern-Shirt', 1000, 'Blue','No Pocket','Normal','full sleave', 'shirts/pa6.png'),
('Pattern-Shirt', 1000, 'Purpu','White line','Normal','full sleave', 'shirts/pa7.png'),
('Pattern-Shirt', 1000, 'Red and Blue','No pocket','Normal','Full sleave', 'shirts/pa8.png'),
('Simple-Pant', 1000, 'Grey','Seat Feat','Meti','28-38', 'pants/ps1.png'),
('Simple-Pant', 1000, 'Sky Blue','Normal','Coton','28-38', 'pants/ps2.png'),
('Simple-Pant', 1000, 'Mustared Yellow','Seat Feat','Coton','28-38', 'pants/ps3.png'),
('Simple-Pant', 1000, 'Blue','Narrow','Lycra','28-38', 'pants/ps4.png'),
('Simple-Pant', 1000, 'Blue','Normal','Meti','28-38', 'pants/ps5.png'),
('Simple-Pant', 1000, 'Mustured Yellow','Seat Feat','Coton','28-38', 'pants/ps6.png'),
('Simple-Pant', 1000, 'Black','Seat Feat','Meti','28-38', 'pants/ps7.png'),
('Simple-Pant', 1000, 'Black','Narrow','Lycra','28-38', 'pants/ps8.png'),
('Check-Pant', 1000, 'Grey and Blue','Narrow','Lycra','28-38', 'pants/pc1.png'),
('Check-Pant', 1000, 'White and Black','Seat Feat','Meti','28-38', 'pants/pc2.png'),
('Check-Pant', 1000, 'Red and Blue','Narrow','Lycra','28-38', 'pants/pc3.png'),
('Check-Pant', 1000, 'Greay','Narrow','Lycra','28-38', 'pants/pc4.png'),
('Check-Pant', 1000, 'Greay','Normal','Coton','28-38', 'pants/pc5.png'),
('Check-Pant', 1000, 'Grey and Red','Narrow','Lycra','28-38', 'pants/pc6.png'),
('Check-Pant', 1000, 'Navy Blue and Blue','Seat Feat','Meti','28-38', 'pants/pc7.png'),
('Check-Pant', 1000, 'Red and Blue','Narrow','Meti','28-38', 'pants/pc8.png'),
('Pattern-Pant', 1000, 'Black','Narrow','Lycra','28-38', 'pants/sp1.png'),
('Pattern-Pant', 1000, 'Brown','Normal','Coton','28-38', 'pants/sp2.png'),
('Pattern-Pant', 1000, 'Dark Grey','Narrow','Lycra','28-38', 'pants/sp3.png'),
('Pattern-Pant', 1000, 'Light Brown','Seat Feat','Coton','28-38', 'pants/sp4.png'),
('Pattern-Pant', 1000, 'Light Greay','Narrow','Lycra','28-38', 'pants/sp5.png'),
('Pattern-Pant', 1000, 'Black','Narrow','Coton','28-38', 'pants/sp6.png'),
('Pattern-Pant', 1000, 'Light Greay','Narrow','Meti','28-38', 'pants/sp7.png'),
('Pattern-Pant', 1000, 'Light Greay','One Line','Meti','h28-38', 'pants/sp8.png'),
('Blazer', 1000, 'Grey','Double Button','Hand Wash and Dry Clean','Notch Lapel', 'blazers/bl1.png'),
('Blazer', 1000, 'Light Grey','Double Button','Hand Wash and Dry Clean','Notch Lapel', 'blazers/bl2.png'),
('Blazer', 1000, 'Maroon','Double Button','Hand Wash Only','Contrast Lapel', 'blazers/bl3.png'),
('Blazer', 1000, 'Dark Blue','No Button','Hand Wash Only','Shawl Lapel', 'blazers/bl4.png'),
('Blazer', 1000, 'Light Blue','Double Button','Hand Wash and Dry Clean','Notch Lapel', 'blazers/bl5.png'),
('Blazer', 1000, 'Golden','Single Button','Hand Wash Only','Cloverleaf Lapel', 'blazers/bl6.png'),
('Blazer', 1000, 'Light Silver','Single Button','Hand Wash and Dry Clean','Notch Lapel', 'blazers/bl7.png'),
('Blazer', 1000, 'Black','Double Button','Hand Wash and Dry Clean','Contrast Lapel', 'blazers/bl8.png');

CREATE TABLE `orders_info` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `ptitle` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` int(15) DEFAULT NULL,
  PRIMARY KEY (order_id)
) ENGINE=InNoDB DEFAULT CHARSET=latin1;

CREATE TABLE `query` (
  `query_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (query_id)
  ) ENGINE=InNoDB DEFAULT CHARSET=latin1;