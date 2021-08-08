-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2016 at 04:28 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydata`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Customer` varchar(64) DEFAULT NULL,
  `Services` varchar(64) DEFAULT NULL,
  `Contact` varchar(64) DEFAULT NULL,
  `Email` varchar(64) DEFAULT NULL,
  `Phone` varchar(64) DEFAULT NULL,
  `Message` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_id` int(8) NOT NULL,
  `Product_name` varchar(36) DEFAULT NULL,
  `Product_image` varchar(36) DEFAULT NULL,
  `Product_price` int(10) DEFAULT NULL,
  `Product_des` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_id`, `Product_name`, `Product_image`, `Product_price`, `Product_des`) VALUES
(1001, 'Nature', 'images/Gallery/random (1).jpg', 120, 'Original work By John Citizen'),
(1002, 'Flower', 'images/Gallery/random (29).jpg', 130, 'Original work By John Citizen'),
(1003, 'Girl', 'images/Gallery/random (24).jpg', 150, 'Original work By John Citizen'),
(1004, 'Sunset', 'images/Gallery/random (5).jpg', 100, 'Original work By John Citizen'),
(1005, 'Wild', 'images/Gallery/random (30).jpg', 170, 'Original work By John Citizen'),
(1006, 'Bird', 'images/Gallery/random (26).jpg', 140, 'Original work By John Citizen'),
(1007, 'Fashion', 'images/Gallery/random (13).jpg', 155, 'Original work By Drew Handy'),
(1008, 'Wedding', 'images/Gallery/random (9).jpg', 160, 'Original work By Drew Handy'),
(1009, 'Love', 'images/Gallery/random (7).jpg', 180, 'Original work By Drew Handy'),
(1010, 'Face', 'images/Gallery/random (6).jpg', 190, 'Original work By Drew Handy');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `customer` varchar(64) NOT NULL,
  `proid` int(8) NOT NULL,
  `quantity` int(5) NOT NULL,
  `del_mthod` varchar(64) NOT NULL,
  `address` varchar(64) NOT NULL,
  `postcode` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone` varchar(64) NOT NULL,
  `message` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
