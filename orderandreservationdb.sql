-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 18, 2024 at 09:56 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orderandreservationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--



-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_description` text,
  `product_color` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `product_price` int NOT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `product_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_description`, `product_color`, `product_price`, `Category`, `product_status`) VALUES
(33, 'a', 's', 'z', 12, 'phone case', NULL),
(34, 'as', 's', 'z', 12, 'phone case', NULL),
(35, 'asdf', 's', 'z', 12, 'phone case', NULL),
(36, 'q', 's', 'z', 12, 'phone case', NULL),
(37, 'qw', 's', 'z', 12, 'phone case', NULL),
(38, 'qwqwwer', 's', 'z', 12, 'phone case', NULL),
(39, 'qwqwweras', 's', 'z', 12, 'phone case', NULL),
(40, 'we', 's', 'z', 12, 'phone case', NULL),
(41, 'weasdf', 's', 'z', 12, 'phone case', NULL),
(49, 'sdf', 'asd', 'qw', 12, 'earpods', NULL),
(50, 'sdf', 'asd', 'qw', 12, 'earpods', NULL),
(52, 'sdf', 'asd', 'qw', 12, 'earpods', NULL),
(53, 'sdf', 'asd', 'qw', 12, 'earpods', NULL),
(54, 'sdf', 'asd', 'qw', 12, 'earpods', NULL),
(55, 'sdf', 'asd', 'qw', 12, 'earpods', NULL),
(56, 'sdf', 'asd', 'qw', 12, 'earpods', NULL),
(57, 'sdf', 'asd', 'qw', 12, 'earpods', NULL),
(58, 'a', 'a', 'a', -43, 'phone case', 'instock'),
(59, 'as', 'asdf', 'black', 40, 'others', 'instock'),
(60, 'as', 'asd', 'zx', 40, 'phone case', 'instock'),
(61, 'as', 'asd', 'zx', 40, 'phone case', 'In Stock'),
(62, 'as', 'asd', 'zx', 40, 'phone case', 'InStock'),
(63, 'fd', 'g', 'b', 15, 'earpods', 'InStock'),
(64, 'fd', 'g', 'b', 15, 'earpods', 'InStock'),
(65, 'fd', 'g', 'b', 15, 'earpods', 'InStock'),
(66, 'fd', 'g', 'b', 15, 'others', 'InStock'),
(67, 'fd', 'a', 'z', 12, 'phone case', 'InStock');

-- --------------------------------------------------------

--
-- Table structure for table `product_img`
--

CREATE TABLE `product_img` (
  `picture_id` int NOT NULL,
  `main_picture` blob,
  `sub_pic1` blob,
  `sub_pic2` blob,
  `sub_pic3` blob,
  `sub_pic4` blob,
  `product_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product_img`
--

INSERT INTO `product_img` (`picture_id`, `main_picture`, `sub_pic1`, `sub_pic2`, `sub_pic3`, `sub_pic4`, `product_id`) VALUES
(18, 0x2e2e2f6173736574732f696d672f646f776e6c6f6164202831292e6a7067, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 33),
(19, 0x2e2e2f6173736574732f696d672f646f776e6c6f6164202832292e6a7067, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 34),
(20, 0x2e2e2f6173736574732f696d672f646f776e6c6f6164202833292e6a7067, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 35),
(21, 0x2e2e2f6173736574732f696d672f646f776e6c6f6164202836292e6a7067, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 36),
(22, 0x2e2e2f6173736574732f696d672f646f776e6c6f61642e706e67, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 37),
(23, 0x2e2e2f6173736574732f696d672f646f776e6c6f6164202833292e6a7067, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 38),
(24, 0x2e2e2f6173736574732f696d672f646f776e6c6f6164202832292e6a7067, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 39),
(25, 0x2e2e2f6173736574732f696d672f646f776e6c6f6164202834292e6a7067, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 40),
(26, 0x2e2e2f6173736574732f696d672f646f776e6c6f6164202835292e6a7067, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 41),
(34, 0x2e2e2f6173736574732f696d672f646f776e6c6f6164202837292e6a7067, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 49),
(35, 0x2e2e2f6173736574732f696d672f646f776e6c6f6164202838292e6a7067, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 50),
(37, 0x2e2e2f6173736574732f696d672f646f776e6c6f6164202839292e6a7067, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 52),
(38, 0x2e2e2f6173736574732f696d672f646f776e6c6f616420283130292e6a7067, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 53),
(39, 0x2e2e2f6173736574732f696d672f646f776e6c6f616420283131292e6a7067, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 54),
(40, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 55),
(41, 0x2e2e2f6173736574732f696d672f696d61676573202831292e6a7067, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 56),
(42, 0x2e2e2f6173736574732f696d672f646f776e6c6f6164202838292e6a7067, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 57),
(43, 0x2e2e2f6173736574732f696d672f646f776e6c6f6164202832292e6a7067, 0x2e2e2f6173736574732f696d672f646f776e6c6f6164202835292e6a7067, 0x2e2e2f6173736574732f696d672f646f776e6c6f61642e706e67, 0x2e2e2f6173736574732f696d672f696d61676573202831292e6a7067, 0x2e2e2f6173736574732f696d672f, 59),
(44, 0x2e2e2f6173736574732f696d672f646f776e6c6f6164202836292e6a7067, 0x2e2e2f6173736574732f696d672f646f776e6c6f6164202838292e6a7067, 0x2e2e2f6173736574732f696d672f646f776e6c6f6164202837292e6a7067, 0x2e2e2f6173736574732f696d672f646f776e6c6f616420283130292e6a7067, 0x2e2e2f6173736574732f696d672f646f776e6c6f616420283131292e6a7067, 60),
(45, 0x2e2e2f6173736574732f696d672f646f776e6c6f6164202831292e6a7067, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 61),
(46, 0x2e2e2f6173736574732f696d672f646f776e6c6f6164202833292e6a7067, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 62),
(47, 0x2e2e2f6173736574732f696d672f53637265656e73686f7420323032342d30382d3137203037333335382e706e67, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 0x2e2e2f6173736574732f696d672f, 63),
(48, 0x2e2e2f6173736574732f696d672f70726f647563745f36352f53637265656e73686f7420323032342d30382d3237203233353334352e706e67, 0x2e2e2f6173736574732f696d672f70726f647563745f36352f, 0x2e2e2f6173736574732f696d672f70726f647563745f36352f, 0x2e2e2f6173736574732f696d672f70726f647563745f36352f, 0x2e2e2f6173736574732f696d672f70726f647563745f36352f, 65),
(49, 0x2e2e2f6173736574732f696d672f70726f647563745f36362f53637265656e73686f7420323032342d30382d3239203039313933312e706e67, 0x2e2e2f6173736574732f696d672f70726f647563745f36362f, 0x2e2e2f6173736574732f696d672f70726f647563745f36362f, 0x2e2e2f6173736574732f696d672f70726f647563745f36362f, 0x2e2e2f6173736574732f696d672f70726f647563745f36362f, 66),
(50, 0x2e2e2f6173736574732f696d672f70726f647563745f36372f53637265656e73686f7420323032342d30382d3237203233353135352e706e67, 0x2e2e2f6173736574732f696d672f70726f647563745f36372f, 0x2e2e2f6173736574732f696d672f70726f647563745f36372f, 0x2e2e2f6173736574732f696d672f70726f647563745f36372f, 0x2e2e2f6173736574732f696d672f70726f647563745f36372f, 67);

-- --------------------------------------------------------

--
-- Table structure for table `p_order`
--

CREATE TABLE `p_order` (
  `order_id` int NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `contact` int NOT NULL,
  `address` varchar(255) NOT NULL,
  `quantity_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `p_order`
--

INSERT INTO `p_order` (`order_id`, `fullname`, `contact`, `address`, `quantity_id`) VALUES
(1, 'ian ian', 12354, 'a', 8),
(2, 'ian ian', 12354, 'a', 8),
(3, 'ian ian', 12354, 'q', 9),
(4, 'ian ian', 12354, 'w', 10),
(5, 'Ianbuna', 456, 'z', 12),
(6, 'Ianbuna', 456, 'z', 12),
(7, 'Ianbuna', 456, 'z', 12),
(8, 'Ianbuna', 456, 'a', 13),
(9, 'Ianbuna', 456, 'z', 12),
(10, 'Ianbuna', 456, 'z', 12),
(11, 'Ianbuna', 456, 'z', 12);

-- --------------------------------------------------------

--
-- Table structure for table `quantity`
--

CREATE TABLE `quantity` (
  `quantity_id` int NOT NULL,
  `quantity` int NOT NULL,
  `product_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `quantity`
--

INSERT INTO `quantity` (`quantity_id`, `quantity`, `product_id`) VALUES
(1, 1, 59),
(2, 1, 59),
(3, 1, 59),
(4, 1, 59),
(5, 1, 59),
(6, 1, 59),
(7, 1, 59),
(8, 1, 59),
(9, 5, 50),
(10, 5, 34),
(11, 1, 34),
(12, 1, 34),
(13, 1, 65),
(14, 1, 66),
(15, 2, 34),
(16, 2, 34);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `downpayment` int NOT NULL,
  `proof` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_img`
--
ALTER TABLE `product_img`
  ADD PRIMARY KEY (`picture_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `p_order`
--
ALTER TABLE `p_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `quantity_id` (`quantity_id`);

--
-- Indexes for table `quantity`
--
ALTER TABLE `quantity`
  ADD PRIMARY KEY (`quantity_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `payment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `product_img`
--
ALTER TABLE `product_img`
  MODIFY `picture_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `p_order`
--
ALTER TABLE `p_order`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `quantity`
--
ALTER TABLE `quantity`
  MODIFY `quantity_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD CONSTRAINT `payment_method_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `p_order` (`order_id`);

--
-- Constraints for table `product_img`
--
ALTER TABLE `product_img`
  ADD CONSTRAINT `product_img_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `p_order`
--
ALTER TABLE `p_order`
  ADD CONSTRAINT `p_order_ibfk_1` FOREIGN KEY (`quantity_id`) REFERENCES `quantity` (`quantity_id`);

--
-- Constraints for table `quantity`
--
ALTER TABLE `quantity`
  ADD CONSTRAINT `quantity_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
