-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 01:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `address_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `Admin_id` int(11) NOT NULL,
  `Admin_Username` varchar(250) NOT NULL,
  `Admin_Password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`Admin_id`, `Admin_Username`, `Admin_Password`) VALUES
(1, 'Admin', '123\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `Cart_id` int(11) NOT NULL,
  `Cart_User_id` int(11) NOT NULL,
  `Cart_Product_id` int(11) NOT NULL,
  `Product_Quantity` int(11) NOT NULL,
  `Product_Price` int(11) NOT NULL,
  `Cart_Status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`Cart_id`, `Cart_User_id`, `Cart_Product_id`, `Product_Quantity`, `Product_Price`, `Cart_Status`) VALUES
(39, 2, 8, 2, 17998, 'Placed'),
(41, 2, 8, 1, 8999, 'Placed'),
(42, 4, 8, 1, 8999, 'Placed'),
(43, 4, 7, 6, 4668, 'Placed');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `Category_id` int(11) NOT NULL,
  `Category_Name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`Category_id`, `Category_Name`) VALUES
(2, 'Cosmetics'),
(3, 'Jewellery');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `Order_id` int(11) NOT NULL,
  `Order_Amount` int(11) NOT NULL,
  `Customer_Name` varchar(250) NOT NULL,
  `Customer_Address` varchar(250) NOT NULL,
  `Customer_Email_Address` varchar(250) NOT NULL,
  `Customer_Working_Ph_No` bigint(20) NOT NULL,
  `Customer_Date_Of_Birth` date NOT NULL,
  `Customer_Remarks` varchar(550) DEFAULT NULL,
  `Order_Date` date NOT NULL,
  `User_id` int(11) NOT NULL,
  `Payment_Method` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`Order_id`, `Order_Amount`, `Customer_Name`, `Customer_Address`, `Customer_Email_Address`, `Customer_Working_Ph_No`, `Customer_Date_Of_Birth`, `Customer_Remarks`, `Order_Date`, `User_id`, `Payment_Method`) VALUES
(2, 778, 'Bushra Haseen', 'A 320 block 5 saadi town', ' zainnizami999@gmail.com', 3326812922, '0000-00-00', 'jksfjkllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll', '0000-00-00', 2, 'Cash On Delivery'),
(3, 26997, 'Bushra Haseen', 'A 320 block 5 saadi town', ' zainnizami999@gmail.com', 3326812922, '0000-00-00', 'jksfjkllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll', '0000-00-00', 2, 'Easy Paisa'),
(4, 26997, 'Bushra Haseen', 'A 320 block 5 saadi town', ' zainnizami456@gmail.com', 3326812922, '0000-00-00', 'jksfjkllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll', '0000-00-00', 2, 'Credit Card'),
(5, 17998, 'Bushra Haseen', 'A 320 block 5 saadi town', ' zainnizami999@gmail.com', 3326812922, '0000-00-00', 'jksfjkllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll', '0000-00-00', 2, 'Easy Paisa'),
(7, 8999, 'Bushra Haseen', 'A 320 block 5 saadi town', ' zainnizami444@gmail.com', 3326812922, '2022-04-15', 'jksfjkllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll', '2022-04-16', 2, 'Easy Paisa'),
(8, 8999, 'Bushra Haseen', 'A 320 block 5 saadi town', ' zainnizami444@gmail.com', 3326812922, '2022-04-08', 'jksfjkllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll', '2022-04-16', 4, 'Easy Paisa'),
(9, 4668, 'Zain', 'A 320 block 5 saadi town', ' ', 3326812922, '2001-01-16', 'jksfjkllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll', '2022-04-16', 4, 'Easy Paisa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `Product_id` int(11) NOT NULL,
  `Product_Name` varchar(250) NOT NULL,
  `Product_Image` varchar(250) NOT NULL,
  `Product_Price` int(11) NOT NULL,
  `Product_Category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`Product_id`, `Product_Name`, `Product_Image`, `Product_Price`, `Product_Category_id`) VALUES
(7, 'abc', 'post-1.jpg', 778, 2),
(8, 'gab', 'post-5.jpg', 8999, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `User_id` int(11) NOT NULL,
  `User_Name` varchar(250) NOT NULL,
  `User_Password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`User_id`, `User_Name`, `User_Password`) VALUES
(2, 'Zain', '$2y$10$XCJBJrPr7fWlvh2/ZWyUZewTvnLQoMliEWZO4PKqbfZ.KvJApIsaW'),
(4, 'saad', '$2y$10$wnx9k8LeS5SWLY7COl7enupjMv388Mvi/f.VKBLrXnWZhHd5ZWBxu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`Cart_id`),
  ADD KEY `Cart_Product_id` (`Cart_Product_id`),
  ADD KEY `Cart_User_id` (`Cart_User_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`Category_id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`Order_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`Product_id`),
  ADD KEY `Product_Category_id` (`Product_Category_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `Cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `Category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `tbl_cart_ibfk_1` FOREIGN KEY (`Cart_Product_id`) REFERENCES `tbl_product` (`Product_id`),
  ADD CONSTRAINT `tbl_cart_ibfk_2` FOREIGN KEY (`Cart_User_id`) REFERENCES `tbl_user` (`User_id`);

--
-- Constraints for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD CONSTRAINT `tbl_orders_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `tbl_user` (`User_id`);

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`Product_Category_id`) REFERENCES `tbl_category` (`Category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
