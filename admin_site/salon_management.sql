-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 24, 2019 at 09:09 PM
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
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`item`, `price`, `user_id`, `cart_id`, `qty`) VALUES
('7', 199, 16, 27, 1),
('33', 211, 17, 37, 1);

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
  `cust_added` date NOT NULL,
  `member` int(1) NOT NULL,
  `member_added` date NOT NULL,
  `wallet_pts` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_service`, `cust_price`, `cust_logs`, `cust_mobile`, `cust_email`, `cust_houseno`, `cust_locality`, `cust_landmark`, `cust_message`, `cust_password`, `cust_added`, `member`, `member_added`, `wallet_pts`) VALUES
(17, 'test', NULL, NULL, '2019-08-25 00:14:42', '8369938940', 'xyz@gmail.com', '101', 'dummy', 'dummy', 'none', 'ash123', '2019-07-24', 1, '2019-07-29', 15),
(16, 'ashwin', NULL, NULL, '2019-08-24 22:48:45', '9167100401', 'test@gmail.com', '191', 'dummy', 'dummy', 'none', 'test123', '2019-07-24', 0, '0000-00-00', 0),
(18, 'random', NULL, NULL, '2019-07-29 20:13:04', '9876543210', 'demo@gmail.com', '', '', '', '', 'demo123', '2019-07-29', 0, '0000-00-00', 0);

-- --------------------------------------------------------

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
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `user_id`, `order_id`, `order_date`, `order_time`, `gross_amt`, `order_status`, `payment_type`, `payment_status`, `order_item`, `order_amt`, `order_qty`, `tot_qty`, `order_tot_amt`, `delivery_amt`, `coupon_id`, `coupon_amt`, `datetime`) VALUES
(1, 16, 1563971419, '2019-07-24', '11:00:00.000000', 200, 0, 3, 1, '[\"Dress Up\"]', '[\"200\"]', '[1]', '1', '200', '0', '-', 0, '2019-07-24 18:00:19.000000'),
(2, 16, 1564601756, '2019-08-01', '05:30:00.000000', 15, 0, 3, 1, '[\"Eyebrow\"]', '[\"15\"]', '[1]', '1', '15', '0', '-', 0, '2019-08-01 01:05:56.000000'),
(3, 16, 1564744482, '2019-10-08', '09:30:00.000000', 15, 0, 2, 0, '[\"Eyebrow\"]', '[\"15\"]', '[1]', '1', '15', '0', '-', 0, '2019-08-02 16:44:42.000000'),
(4, 16, 1564744628, '2019-08-03', '09:30:00.000000', 15, 0, 1, 0, '[\"Eyebrow\"]', '[\"15\"]', '[1]', '1', '15', '0', '-', 0, '2019-08-02 16:47:08.000000'),
(5, 16, 1564744748, '2019-08-03', '09:30:00.000000', 15, 0, 2, 0, '[\"Eyebrow\"]', '[\"15\"]', '[1]', '1', '15', '0', '-', 0, '2019-08-02 16:49:08.000000'),
(6, 16, 1564744847, '2019-08-15', '09:30:00.000000', 25, 0, 2, 0, '[\"Eyebrow + Forehead', '[\"25\"]', '[1]', '1', '25', '0', '-', 0, '2019-08-02 16:50:47.000000'),
(7, 16, 1564770407, '2019-08-31', '02:30:00.000000', 99, 0, 2, 0, '[\"Fruit-Face\"]', '[\"99\"]', '[1]', '1', '99', '0', '-', 0, '2019-08-02 23:56:47.000000'),
(8, 17, 1566647563, '2019-08-28', '02:30:00.000000', 691, 0, 2, 0, '[\"Shehnaz-Hand\",\"Lig', '[\"599\",169', '[\"1\",1,1]', '3', '690.9', '0', '-', 0, '2019-08-24 17:22:43.000000'),
(9, 17, 1566647761, '2019-08-25', '11:00:00.000000', 13, 0, 2, 0, '[\"Eyebrow\"]', '[12.75]', '[1]', '1', '12.75', '0', '-', 0, '2019-08-24 17:26:01.000000'),
(10, 17, 1566650083, '2019-08-25', '11:00:00.000000', 223, 0, 2, 0, '[\"Eyebrow\",\"UnderArm', '[\"15\",\"50\"', '[\"1\",\"1\",\"', '3', '223', '0', '-', 0, '2019-08-24 18:04:43.000000'),
(11, 17, 1566669804, '2019-08-25', '02:30:00.000000', 360, 0, 2, 0, '[\"FullHand-Chocolate', '[\"199\",\"14', '[1,\"1\",\"1\"', '3', '360', '0', '-', 0, '2019-08-24 23:33:24.000000'),
(12, 17, 1566670026, '2019-08-25', '02:30:00.000000', 169, 0, 2, 0, '[\"FullHand-Chocolate', '[169.15000', '[1]', '1', '169.15', '0', '-', 0, '2019-08-24 23:37:06.000000'),
(13, 17, 1566670669, '2019-08-25', '01:00:00.000000', 391, 0, 2, 0, '[\"Air Brush\",\"UnderA', '[\"399\",\"50', '[\"1\",\"1\"]', '2', '441', '0', '-', 0, '2019-08-24 23:47:49.000000'),
(14, 17, 1566670882, '2019-08-25', '02:30:00.000000', 149, 0, 2, 0, '[\"FullHand-Chocolate', '[\"199\"]', '[1]', '1', '199', '0', '-', 0, '2019-08-24 23:51:22.000000'),
(15, 17, 1566671211, '2019-08-25', '02:30:00.000000', 204, 0, 2, 0, '[\"Anti Tan-Hand\"]', '[\"299\"]', '[\"1\"]', '1', '254', '0', '-', 0, '2019-08-24 23:56:51.000000'),
(16, 17, 1566671395, '2019-08-25', '01:00:00.000000', 204, 0, 1, 0, '[\"Anti Tan-Hand\"]', '[\"299\"]', '[\"1\"]', '1', '254', '0', '-', 0, '2019-08-24 23:59:55.000000'),
(17, 17, 1566671711, '2019-08-25', '01:00:00.000000', 149, 0, 1, 0, '[\"FullHand-Chocolate', '[\"199\"]', '[\"1\"]', '1', '169', '0', '-', 0, '2019-08-25 00:05:11.000000'),
(18, 17, 1566671832, '2019-08-25', '02:30:00.000000', 467, 0, 3, 1, '[\"Hair Spa-LOreal\"]', '[466.64999', '[1]', '1', '466.65', '0', '-', 0, '2019-08-25 00:07:12.000000'),
(19, 17, 1566671834, '2019-08-25', '02:30:00.000000', 467, 0, 2, 0, '[\"Hair Spa-LOreal\"]', '[466.64999', '[1]', '1', '466.65', '0', '-', 0, '2019-08-25 00:07:14.000000'),
(20, 17, 1566672178, '2019-08-25', '02:30:00.000000', 169, 0, 2, 0, '[\"FullHand-Chocolate', '[169.15000', '[1]', '1', '169.15', '0', '-', 0, '2019-08-25 00:12:58.000000'),
(21, 17, 1566672321, '2019-08-25', '01:00:00.000000', 153, 0, 2, 0, '[\"FullHand-Chocolate', '[169.15000', '[1]', '1', '169.15', '0', '-', 0, '2019-08-25 00:15:21.000000');

-- --------------------------------------------------------

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
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`);

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
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`);

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
  MODIFY `cart_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
