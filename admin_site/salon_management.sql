-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 18, 2019 at 04:37 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salon_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_username` varchar(255) DEFAULT NULL,
  `ad_password` varchar(255) DEFAULT NULL,
  `ad_code` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_username`, `ad_password`, `ad_code`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 1234),
(2, 'admin', 'admin', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `item` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `user_id` int(5) NOT NULL,
  `cart_id` int(5) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(255) DEFAULT NULL,
  `cust_service` varchar(500) DEFAULT NULL,
  `cust_price` int(11) DEFAULT NULL,
  `cust_logs` datetime DEFAULT NULL,
  `cust_mobile` varchar(15) NOT NULL,
  `cust_email` varchar(20) NOT NULL,
  `cust_houseno` varchar(10) NOT NULL,
  `cust_locality` varchar(50) NOT NULL,
  `cust_landmark` varchar(50) NOT NULL,
  `cust_message` varchar(50) NOT NULL,
  `cust_password` varchar(20) NOT NULL,
  `cust_added` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--

-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(5) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `order_time` time(6) NOT NULL,
  `gross_amt` int(10) NOT NULL,
  `order_status` int(10) NOT NULL,
  `payment_type` int(10) NOT NULL,
  `payment_status` int(10) NOT NULL,
  `order_item` varchar(20) NOT NULL,
  `order_amt` varchar(10) NOT NULL,
  `order_qty` varchar(10) NOT NULL,
  `tot_qty` varchar(10) NOT NULL,
  `order_tot_amt` varchar(10) NOT NULL,
  `delivery_amt` varchar(10) NOT NULL,
  `coupon_id` varchar(20) NOT NULL,
  `coupon_amt` int(10) NOT NULL,
  `datetime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(500) DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `product_sold` int(11) NOT NULL DEFAULT '0',
  `product_logs` datetime DEFAULT NULL,
  `product_removed` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_quantity`, `product_sold`, `product_logs`, `product_removed`) VALUES
(1, 'Hair Oil', 20, 0, '2018-05-30 07:53:36', 0),
(2, 'face cream', 150, 0, '2018-05-30 13:24:58', 0),
(3, 'Hair Cream', 10, 5, '2018-05-30 13:46:47', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
