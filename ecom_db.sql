-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2016 at 12:05 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `ordered_by` varchar(111) NOT NULL,
  `order_name` varchar(111) NOT NULL,
  `order_items` varchar(222) NOT NULL,
  `order_amount` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `ordered_by`, `order_name`, `order_items`, `order_amount`) VALUES
(4, '', '   2-THE MOTO UTILITY SHIRT x 200 = 400, 1-PALID SHIRT x 62 = 62, 1-MARINE SHIRT x 55 = 55, 1-MARINE TIME SHOE ', ' 5 ', 738),
(7, '', '   1-MARINE BOOTS x 559 = 559, ', ' 1 ', 559),
(9, 'shaiela', '   1-xxpopopopoppo x 15 = 15, ', ' 1 ', 15),
(10, 'rick', '   1-PULLOVER x 124 = 124, 1-Comfy Tshirt x 60 = 60, ', ' 2 ', 184);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_category_id`, `product_price`, `product_description`, `product_image`, `product_quantity`) VALUES
(1, 'THE MOTO UTILITY SHIRT', 1, 200, '        Cotton shirt Long \r\n    ', 'http://localhost/ecomm/raw/images/men/shirt1.jpg', 9),
(2, 'THE ALDER JEAN', 2, 75, 'Long Lasting Jeans', 'http://localhost/ecomm/raw/images/men/BLACK_MENS_DENIM_1.5_640x.progressive.jpg', 8),
(3, 'MARINE CORP. T-SHIRT', 1, 85, '    Polyster with Pure cotton\r\n    ', 'http://localhost/ecomm/raw/images/men/navy_01_309b3601-959c-4b1d-b038-5005881a62e1_large.jpg', 15),
(5, 'MARINE SHIRT', 1, 55, 'Pure Cotton, Exclusive', 'http://localhost/ecomm/raw/images/men/moto_utilityshirt_blue_01_large.jpg', 19),
(6, 'NOIR JACKET PREMIUM', 1, 120, 'Quality Stuff, Pure Silk', 'http://localhost/ecomm/raw/images/men/NOIR_1_480x.progressive.jpg', 7),
(7, 'MARINE TIME SHOE', 1, 221, 'Durable Material premium', 'http://localhost/ecomm/raw/images/men/maritimeboot_olive_01_480x.progressive.jpg', 2),
(8, 'PALID SHIRT', 1, 62, 'Best Material Wool Texture', 'http://localhost/ecomm/raw/images/men/GREY_PLAID_JACK_480x.progressive.jpg', 50),
(9, 'GENUINE LEATHER JACKET', 1, 990, 'Genuine Quality Premium Leather', 'http://localhost/ecomm/raw/images/men/WHISKEY_1_480x.progressive.jpg', 12),
(10, 'MARITIME PULLOVER', 1, 325, 'Nice Material', 'http://localhost/ecomm/raw/images/men/mens_maritime_submariner_ash_product_01_480x.progressive.jpg', 9),
(11, 'MARINE BOOTS', 1, 559, 'Long Lasting Durable', 'http://localhost/ecomm/raw/images/men/maritimeboot_blue_01_480x.progressive.jpg', 5),
(12, 'Long Lasting Jeans', 1, 210, 'Best Quality Pants', 'http://localhost/ecomm/raw/images/men/BLACK_MENS_DENIM_1.5_640x.progressive.jpg', 8),
(13, 'PULLOVER', 1, 124, 'Nice Warm Sweater', 'http://localhost/ecomm/raw/images/men/SWEATER_1_480x.progressive.jpg', 11),
(14, 'Leather Jacket', 2, 878, 'Biker Leather Jacket', 'http://localhost/ecomm/raw/images/women/WHISKEY_1_480x.progressive.jpg', 7),
(15, 'PIPER SHIRT', 2, 220, 'Tapered Premium Shirt', 'http://localhost/ecomm/raw/images/women/piper_1_480x.progressive.jpg', 11),
(16, 'SEYEES SHOES', 2, 224, 'Best of The Class', 'http://localhost/ecomm/raw/images/women/Natural_-_Side_480x.progressive.jpg', 5),
(17, 'SWEATSHIRT', 2, 111, 'Warm and Premium', 'http://localhost/ecomm/raw/images/women/GREY_1_ac1a72b7-ff62-41e1-b034-e71245acb038_480x.progressive.jpg', 45),
(18, 'Nightwear Pajamas', 2, 80, 'Nice and Comfy', 'http://localhost/ecomm/raw/images/women/NAVY_3_6e7b034c-2c3f-42aa-a07e-c3aa894eac61_480x.progressive.jpg', 15),
(19, 'BOYFRIEND SHIRT', 2, 117, 'Wool Structuer Good', 'http://localhost/ecomm/raw/images/women/TAN_WORK_OXFORD_480x.progressive.jpg', 30),
(20, 'OUTLAW STYLE', 2, 117, 'Kimono Japenese', 'http://localhost/ecomm/raw/images/women/KIMONO_1_480x.progressive.jpg', 16),
(21, 'Premium Tshirt', 2, 73, 'Nice Wooly', 'http://localhost/ecomm/raw/images/women/NATURAL-1_480x.progressive.jpg', 8),
(22, 'Camo Pants', 2, 210, 'Best In The Class', 'http://localhost/ecomm/raw/images/women/cavallo_1_03cbc6f7-799d-4de5-a674-a7928144aff0_480x.progressive.jpg', 9),
(23, 'Chamelieon Shoes', 2, 360, 'Durable Best kind', 'http://localhost/ecomm/raw/images/women/Grey_-_Side_480x.progressive.jpg', 12),
(24, 'Comfy Tshirt', 2, 60, 'Nice and Palid', 'http://localhost/ecomm/raw/images/women/INDIGO-1_480x.progressive.jpg', 21),
(34, 'Leather Biker Jacket', 1, 250, 'Goood and Comfy', 'http://localhost/ecomm/raw/images/men/BLACK_1_07e85b2.jpg', 7),
(38, 'xxpopopopoppo', 2, 15, '        nicely done   \r\n    ', 'http://localhost/ecomm/raw/images/men/dsds.jpg', 98),
(39, 'nive', 1, 500, '                            nice\r\n    ', 'http://localhost/ecomm/raw/images/men/lolo.jpg', 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(11) NOT NULL,
  `user_level` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `user_level`) VALUES
(1, 'rick', 'chinmoy1113@gmail.com', '1223', 1),
(2, 'neil', 'neil@nph.com', '1223', 0),
(3, 'Shaiela', 'shaiel@gmail.com', 'password', 0),
(5, 'Alan', 'alana@hotmail.com', '1223', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
