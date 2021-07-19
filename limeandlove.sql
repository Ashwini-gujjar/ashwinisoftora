-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 05:21 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `limeandlove`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uemail` varchar(50) CHARACTER SET latin1 NOT NULL,
  `upassword` varchar(250) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uemail`, `upassword`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `food_id` int(10) NOT NULL,
  `food_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `food_quantity` int(10) NOT NULL,
  `food_amount` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `total_amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`) VALUES
(1, 'BURGERS'),
(2, 'DESSERTS'),
(3, 'MOCKTAILS');

-- --------------------------------------------------------

--
-- Table structure for table `fooddetails`
--

CREATE TABLE `fooddetails` (
  `id` int(11) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `fname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fooddetails`
--

INSERT INTO `fooddetails` (`id`, `cat_id`, `fname`, `amount`) VALUES
(1, 1, 'Veg burger', 150),
(2, 1, 'Doublecheese burger', 200),
(3, 1, 'Aloo tikki burger', 150),
(4, 1, 'Spicy Paneer burger', 200),
(5, 1, 'Veg burger with fries', 200),
(6, 2, 'Blueberry cheesecake', 200),
(7, 2, 'Hot fudge nutty sundae', 180),
(8, 2, 'Chocolate waffles', 210),
(9, 2, 'Frozen mud pie', 200),
(10, 2, 'Ferrero rocher cupcakes', 280),
(11, 3, 'Fruit punch', 220),
(12, 3, 'Shirley Temple', 240),
(13, 3, 'White horse', 250),
(14, 3, 'Honey dew', 230),
(15, 3, 'Melody', 280);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `user_id` varchar(10) CHARACTER SET latin1 NOT NULL,
  `food_id` varchar(10) CHARACTER SET latin1 NOT NULL,
  `food_quantity` int(10) NOT NULL,
  `user_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `user_phone` varchar(50) CHARACTER SET latin1 NOT NULL,
  `user_address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `timestamp` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `user_id`, `food_id`, `food_quantity`, `user_name`, `user_phone`, `user_address`, `timestamp`) VALUES
(4, 'LALHT898393', '1', '10', 1, 'ashwini', '1234567890', 'hiriyur', '18:07:2021 09:57:59pm'),
(5, 'LALHT754317', '1', '9', 1, 'ashwini', '1234567890', 'hiriyur', '18:07:2021 10:05:39pm'),
(6, 'LALHT266574', '3', '1', 1, 'arjun', '9876543210', 'bangalore', '18:07:2021 10:07:48pm'),
(7, 'LALHT266574', '3', '15', 1, 'arjun', '9876543210', 'bangalore', '18:07:2021 10:07:48pm'),
(8, 'LALHT483289', '6', '4', 1, 'aishwarya', '8976543210', 'bangalore', '19:07:2021 01:08:16am'),
(9, 'LALHT483289', '6', '8', 1, 'aishwarya', '8976543210', 'bangalore', '19:07:2021 01:08:16am'),
(10, 'LALHT742398', '7', '5', 1, 'reshma', '9867543210', 'mysore', '19:07:2021 01:09:17am'),
(11, 'LALHT742398', '7', '6', 1, 'reshma', '9867543210', 'mysore', '19:07:2021 01:09:17am'),
(12, 'LALHT742398', '7', '14', 1, 'reshma', '9867543210', 'mysore', '19:07:2021 01:09:17am'),
(13, 'LALHT720103', '8', '3', 1, 'rakshitha', '8956743210', 'goa', '19:07:2021 01:10:49am'),
(14, 'LALHT720103', '8', '10', 1, 'rakshitha', '8956743210', 'goa', '19:07:2021 01:10:49am'),
(15, 'LALHT720103', '8', '12', 1, 'rakshitha', '8956743210', 'goa', '19:07:2021 01:10:49am'),
(16, 'LALHT793148', '1', '1', 1, 'ashwini', '1234567890', 'hiriyur', '19:07:2021 08:49:08am'),
(17, 'LALHT793148', '1', '7', 2, 'ashwini', '1234567890', 'hiriyur', '19:07:2021 08:49:08am'),
(18, 'LALHT793148', '1', '13', 4, 'ashwini', '1234567890', 'hiriyur', '19:07:2021 08:49:08am'),
(19, 'LALHT793148', '1', '11', 1, 'ashwini', '1234567890', 'hiriyur', '19:07:2021 08:49:08am');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(40) CHARACTER SET latin1 NOT NULL,
  `password` varchar(200) CHARACTER SET latin1 NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `phone` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `address` varchar(100) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `phone`, `address`) VALUES
(1, 'ashwini@gmail.com', 'ashwini', 'ashwini', '1234567890', 'hiriyur'),
(3, 'arjun@gmail.com', 'arjun', 'arjun', '9876543210', 'bangalore'),
(6, 'aishwarya@gmail.com', 'aishwarya', 'aishwarya', '8976543210', 'bangalore'),
(7, 'reshma@gmail.com', 'reshma', 'reshma', '9867543210', 'mysore'),
(8, 'rakshitha@gmail.com', 'rakshitha', 'rakshitha', '8956743210', 'goa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `food_id` (`food_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fooddetails`
--
ALTER TABLE `fooddetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
