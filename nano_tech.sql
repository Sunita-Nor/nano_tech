-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 11:17 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nano_tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `ad_id` int(11) NOT NULL,
  `ad_address` varchar(100) NOT NULL,
  `ad_tambol` varchar(100) NOT NULL,
  `ad_amphur` varchar(100) NOT NULL,
  `ad_province` varchar(100) NOT NULL,
  `ad_postcode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`ad_id`, `ad_address`, `ad_tambol`, `ad_amphur`, `ad_province`, `ad_postcode`) VALUES
(1, '-', '-', '-', '-', '-'),
(21, '250 NO.6', 'sssss', 'sssssss', 'ssssss', '73000'),
(22, 'as', 'dasd', 'asd', 'asdasd', '33342'),
(23, '250 NO.6', 'sssss', 'sssssss', 'ssssss', '73000'),
(24, 'fdghdf', 'ghdfghdfg', 'hdfgh', 'dfghdfgh', '23422');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mb_id` int(11) NOT NULL,
  `mb_email` varchar(100) NOT NULL,
  `mb_username` varchar(100) NOT NULL,
  `mb_password` varchar(10) NOT NULL,
  `mb_Cpassword` varchar(10) NOT NULL,
  `mb_firstName` varchar(100) NOT NULL,
  `mb_lastName` varchar(100) NOT NULL,
  `mb_date` date NOT NULL,
  `mb_gender` varchar(10) NOT NULL,
  `mb_phone` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mb_id`, `mb_email`, `mb_username`, `mb_password`, `mb_Cpassword`, `mb_firstName`, `mb_lastName`, `mb_date`, `mb_gender`, `mb_phone`, `status`) VALUES
(1, 'sunita42.sn@gmail.com', 'Sunita', '576942', '576942', 'Sunita', 'Norkrueakam', '1999-08-14', 'Female', '0983302622', 'ADMIN'),
(13, '6103011011@feu.edu', 'Asss', '11111111', '11111111', 'asd', 'asd', '2021-11-16', 'male', '1111111111', 'USER'),
(14, '123123@feu.edu', 'asdfasdf', '11111111', '11111111', 'gfg', 'asddfgdfg', '2021-11-15', 'male', '1111111111', 'USER');

-- --------------------------------------------------------

--
-- Table structure for table `member_address`
--

CREATE TABLE `member_address` (
  `ma_id` int(11) NOT NULL,
  `mb_id` int(11) NOT NULL,
  `ad_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_address`
--

INSERT INTO `member_address` (`ma_id`, `mb_id`, `ad_id`) VALUES
(9, 13, 21),
(10, 13, 22),
(11, 14, 23),
(12, 14, 24);

-- --------------------------------------------------------

--
-- Table structure for table `productmaster`
--

CREATE TABLE `productmaster` (
  `pm_id` int(11) NOT NULL,
  `pt_id` int(11) NOT NULL,
  `pm_name` varchar(100) NOT NULL,
  `pm_price` int(11) NOT NULL,
  `pm_certification` varchar(100) NOT NULL,
  `pm_mateial` varchar(100) NOT NULL,
  `pm_detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productmaster`
--

INSERT INTO `productmaster` (`pm_id`, `pt_id`, `pm_name`, `pm_price`, `pm_certification`, `pm_mateial`, `pm_detail`) VALUES
(1, 121, 'qqq', 159, 'ce', 'Plastic', 'dddddd');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `pd_id` int(11) NOT NULL,
  `pm_id` int(11) NOT NULL,
  `pd_color` varchar(100) NOT NULL,
  `pd_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_img`
--

CREATE TABLE `product_img` (
  `img_id` int(11) NOT NULL,
  `pm_id` int(11) NOT NULL,
  `img_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `pt_id` int(11) NOT NULL,
  `pt_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`pt_id`, `pt_name`) VALUES
(120, 'Imagine Dragons1'),
(121, 'The Weekend'),
(122, 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mb_id`);

--
-- Indexes for table `member_address`
--
ALTER TABLE `member_address`
  ADD PRIMARY KEY (`ma_id`),
  ADD KEY `ad_id` (`ad_id`),
  ADD KEY `mb_id` (`mb_id`);

--
-- Indexes for table `productmaster`
--
ALTER TABLE `productmaster`
  ADD PRIMARY KEY (`pm_id`),
  ADD KEY `pt_id` (`pt_id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`pd_id`),
  ADD KEY `pm_id` (`pm_id`);

--
-- Indexes for table `product_img`
--
ALTER TABLE `product_img`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `product_img_ibfk_1` (`pm_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`pt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `member_address`
--
ALTER TABLE `member_address`
  MODIFY `ma_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `productmaster`
--
ALTER TABLE `productmaster`
  MODIFY `pm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `pd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_img`
--
ALTER TABLE `product_img`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `pt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member_address`
--
ALTER TABLE `member_address`
  ADD CONSTRAINT `member_address_ibfk_1` FOREIGN KEY (`ad_id`) REFERENCES `address` (`ad_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `member_address_ibfk_2` FOREIGN KEY (`mb_id`) REFERENCES `member` (`mb_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD CONSTRAINT `product_detail_ibfk_1` FOREIGN KEY (`pm_id`) REFERENCES `productmaster` (`pm_id`);

--
-- Constraints for table `product_img`
--
ALTER TABLE `product_img`
  ADD CONSTRAINT `product_img_ibfk_1` FOREIGN KEY (`pm_id`) REFERENCES `productmaster` (`pm_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
