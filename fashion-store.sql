-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2022 at 07:49 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion-store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `qty` int(5) NOT NULL,
  `image` varchar(100) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `category` varchar(10) NOT NULL,
  `description` varchar(250) NOT NULL,
  `short_des` varchar(100) NOT NULL,
  `old_price` int(10) NOT NULL,
  `price` int(8) NOT NULL,
  `image` varchar(100) NOT NULL,
  `desc_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `category`, `description`, `short_des`, `old_price`, `price`, `image`, `desc_image`) VALUES
(10, 'Regular Men Grey Jeans', 'Men', 'Inspire a trendsetting look with these blue jeans from Levis. These designer jeans features phenomenal slim fit. Made from cotton fabric, it is light in weight and will be soft against your skin. They can be teamed up with a graphic t-shirt and a pai', 'Stylish shorts for men are available in a variety of styles, including athletic, casual, and preppy.', 1200, 600, '943362469jeans.jpg', '2086172204jeans-2.jpg'),
(11, 'Pack of 2 Solid Men Grey, Blac', 'Men', 'Perfect for a semi-formal occasion, these trendy and versatile Levis®Mens 511 Slim Fit Chinos make for a great pick. Dress up or down with these navy chinos that feature a solid pattern. These chinos are crafted from cotton in a slim fit.', 'Stylish shorts for men are available in a variety of styles, including athletic, casual, and preppy.', 750, 600, '1211200144pants1.jpg', '620921507pants2.jpg'),
(12, 'Solid Men Polo Neck Dark Green', 'Men', 'Get the perfect finish to your laid-back looks with this red t-shirt from Levis. Made from cotton fabric, this t-shirt is light in weight. Featuring a crew neck, short sleeves and graphic pattern, this regular fit t-shirt ensures a comfort all day lo', 'Plain polo t-shirts represent the dynamic and ever-evolving face of t-shirts. The polo neck t-shirt ', 1200, 1100, '541987881t-shirt1.jpg', '720000990tshirt.jpg'),
(13, 'Printed Bollywood Chiffon Sare', 'Women', 'The Kanjeevaram fabric is considered to be one of the most durable and strong fabrics. As the saree is made of three Silk threads twisted .', 'These saris are worn as bridal & special occasion saris by most women in Tamil Nadu, Kerala, Karnata', 5000, 3500, '1456660465sdfdsf.jpg', '547422704sdfse.jpg'),
(14, 'Embroidered Bollywood Net Sare', 'Women', 'The Kanjeevaram fabric is considered to be one of the most durable and strong fabrics. As the saree is made of three Silk threads twisted .', 'These saris are worn as bridal & special occasion saris by most women in Tamil Nadu, Kerala, Karnata', 6500, 4523, '815114685rggserg.jpg', '1622430457zdcdsdaf.jpg'),
(15, 'Floral Print Banarasi Cotton S', 'Women', 'The Kanjeevaram fabric is considered to be one of the most durable and strong fabrics. As the saree is made of three Silk threads twisted .', 'These saris are worn as bridal & special occasion saris by most women in Tamil Nadu, Kerala, Karnata', 6800, 6499, '1852213641wedfsd.jpg', '594326548sdfsdsfd.jpg'),
(16, 'Embellished Georgette Straight', 'Women', 'Inspire a trendsetting look with these blue jeans from puma. These designer jeans features phenomenal slim fit. Made from cotton fabric, it is light in weight and will be soft against your skin. They can be teamed up with a graphic t-shirt and a pair', 'These saris are worn as bridal & special occasion saris by most women in Tamil Nadu, Kerala, Karnata', 450, 339, '95270636434532153.jpg', '180024656934532153.jpg'),
(17, 'Solid Viscose Rayon A-line Kur', 'Women', 'Inspire a trendsetting look with these blue jeans from Levis. These designer jeans features phenomenal slim fit. Made from cotton fabric, it is light in weight and will be soft against your skin. They can be teamed up with a graphic t-shirt and a pai', 'These saris are worn as bridal & special occasion saris by most women in Tamil Nadu, Kerala, Karnata', 1200, 850, '181933612132442.jpg', '195219123643141.jpg'),
(18, 'Viscose Rayon Anarkali Kurta', 'Women', 'Get the perfect finish to your laid-back looks with this red t-shirt from Levis. Made from cotton fabric, this t-shirt is light in weight. Featuring a crew neck, short sleeves and graphic pattern, this regular fit t-shirt ensures a comfort all day lo', 'Stylish shorts for men are available in a variety of styles, including athletic, casual, and preppy.', 7802, 6850, '8952907643421412.jpg', '18571404292313412.jpg'),
(19, 'Men Round Neck Dark Blue', 'Men', 'Get the perfect finish to your laid-back looks with this red t-shirt from Levis. Made from cotton fabric, this t-shirt is light in weight. Featuring a crew neck, short sleeves and graphic pattern, this regular fit t-shirt ensures a comfort all day lo', 'Stylish shorts for men are available in a variety of styles, including athletic, casual, and preppy.', 850, 845, '34722661123.jpg', '783869072123.png'),
(20, 'Color Block Men Hooded Neck Re', 'Men', 'Inspire a trendsetting look with these blue jeans from Levis. These designer jeans features phenomenal slim fit. Made from cotton fabric, it is light in weight and will be soft against your skin. They can be teamed up with a graphic t-shirt and a pai', 'Stylish shorts for men are available in a variety of styles, including athletic, casual, and preppy.', 450, 399, '7517245211.jpg', '21401710931234.jpg'),
(21, 'Striped Men Polo Neck Blue', 'Men', 'Inspire a trendsetting look with these blue jeans from Levis. These designer jeans features phenomenal slim fit. Made from cotton fabric, it is light in weight and will be soft against your skin. They can be teamed up with a graphic t-shirt and a pai', 'Stylish shorts for men are available in a variety of styles, including athletic, casual, and preppy.', 6650, 6613, '129019073312563.jpg', '1188417443132.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `pur_id` int(10) NOT NULL,
  `user_email` text NOT NULL,
  `product_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pin` int(7) NOT NULL,
  `district` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `tot_amt` bigint(10) NOT NULL,
  `del_date` date DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Not Delivered'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`pur_id`, `user_email`, `product_id`, `name`, `address`, `pin`, `district`, `phone`, `tot_amt`, `del_date`, `status`) VALUES
(3, 'vishnusatheeshpulickal555@gmail.com', 8, 'Vishnu satheesh', 'Kakkije', 574228, 'DK', 8137833845, 400, '2022-08-15', 'Delivered'),
(4, 'vishnusatheeshpulickal555@gmail.com', 8, 'Vishnu satheesh', 'Kakkije', 574228, 'DK', 8137833845, 400, '2022-08-15', 'Delivered'),
(5, 'jish@gmail.com', 10, 'Jishwan', 'Kakkije', 574228, 'DK', 9874563320, 600, '2022-08-16', 'Delivered'),
(6, 'sebin@gmail.com', 21, 'sebin', 'Thodupuzha', 688655, 'Idukki', 7844556321, 6613, '2022-08-16', 'Delivered'),
(7, 'sebin@gmail.com', 19, 'sebin', 'Pala', 686653, 'kottayam', 652314789, 845, NULL, 'Not Delivered'),
(8, 'abc@gmail.com', 10, 'Vishnu satheesh', 'Kakkije', 574228, 'DK', 8137833845, 600, NULL, 'Not Delivered'),
(9, 'vimanshu@gmail.com', 12, 'vimanshu', 'Uduppi', 574335, 'Uduppi', 9874563211, 1100, NULL, 'Not Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `phone`) VALUES
(9, 'abc', 'abc@gmail.com', '$2y$10$KH0taJAlTULBVZVufEzeH.2xHSmfOynQUM0AuO3GBJEJfw/bkGKEO', 9874563210),
(5, 'Jishwan', 'jish@gmail.com', '$2y$10$3Y0hVnHshE3o1hs1C1I72uTiiiVstUjUEZd6wTVf1jQmD3Mr6SNdC', 9874563210),
(4, 'Jishnu', 'jishnusatheesh@gmail.com', '$2y$10$DfV01u9KfbVd5bwp8KBV6eujneAow.pNKBKkrYdVU5QAX4gsq/JAi', 9874563210),
(6, 'rahul', 'rahul@gmail.com', '$2y$10$e2QVKP8bDEClV6SknWs1NOFlnNW25Zr3XZPfVt6V2GTmDMtO/A1FS', 9874563210),
(8, 'sebin', 'sebin@gmail.com', '$2y$10$m2e9/ZgmwnEgLS3VELV4t.tKJ7ND5rCE6u71..mIURyQLexymJsRi', 7896541230),
(7, 'vijay', 'vijay@gmail.com', '$2y$10$ENn/c7WROb4Z6p5KFarIleA6bALIVMcxaT9APAWailbuegAhv16ky', 7896541230),
(10, 'vimanshu', 'vimanshu@gmail.com', '$2y$10$DF7aptJGdrbAH0sJkZfcKeOR1OeAWpCSpvEJ.ONd6MEdm2SXHi/te', 9874563210),
(1, 'Vishnu', 'vishnusatheeshpulickal555@gmail.com', '$2y$10$46P4TwrnJevTMXexrnOn.eggiyYfi7ufPQvdjIC3ZAnJSU8kzNxAq', 8137833845);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`pur_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `pur_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
