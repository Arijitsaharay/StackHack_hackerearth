-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2020 at 04:39 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_table`
--

CREATE TABLE `event_table` (
  `order_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `r_type` varchar(30) NOT NULL,
  `event` varchar(40) NOT NULL,
  `ticket` int(10) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `seat` varchar(15) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_table`
--

INSERT INTO `event_table` (`order_id`, `user_id`, `name`, `email`, `phone`, `r_type`, `event`, `ticket`, `unique_id`, `seat`, `image`) VALUES
(50, 8, 'Arijit Saha Ray', 'aipmt9@gmail.com', '2147483647', 'self', 'music', 1, 'event5edc7f9d0b113', 'front', '5.jpg'),
(51, 8, 'Arijit', 'arijitsaharay07@gmail.com', '2147483647', 'self', 'music', 1, 'event5edc82a5da2f2', 'front', '5.jpg'),
(52, 8, 'Arijit Saha Ray', 'aipmt9@gmail.com', '2147483647', 'self', 'music', 1, 'event5edc9907874b9', 'front', '5.jpg'),
(70, 13, 'arijit', 'arijitsaharay07@gmail.com', '', 'corporate', 'code it-code war', 3, 'event5edcda40c33e3', 'front', 'C:UsersARIJIT SAHA RAYPicturesWordpress2.PNG'),
(71, 13, 'Ajay Devgan', 'arijitsaharay07@gmail.com', '+919830887066', 'self', 'music', 1, 'event5edcef6a556fc', 'front', '7.jpg'),
(72, 13, 'sameer', 'aipmt9@gmail.com', '09830887066', 'self', 'gaming-pubg', 1, 'event5edcefd1ef82f', 'front', '8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `r_type` varchar(30) NOT NULL,
  `event` varchar(40) NOT NULL,
  `ticket` int(10) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `seat` varchar(15) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `user_id`, `name`, `email`, `phone`, `r_type`, `event`, `ticket`, `unique_id`, `seat`, `image`) VALUES
(7, 13, 'ARIJIT SAHA RAY', 'arijitsaharay07@gmail.com', '2147483647', 'group', 'dance', 2, 'dejgmjkhlkj/l.k', 'middle', 'ÿØÿà\0JFIF\0\0\0\0\0\0ÿÛ\0„\0					\"\"*%%*424DD\\					\"\"*%%*424DD\\ÿÂ\0Í°\"\0ÿÄ\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
(8, 13, 'ARIJIT SAHA RAY', 'arijitsaharay07@gmail.com', '9830887066', 'group', 'dance', 2, 'gfkjh;kljkh', 'middle', 'ÿØÿá\0Exif\0\0II*\0\0\0\0\0\0\0\0\0\0\0\0ÿì\0Ducky\0\0\0\0\02\0\0ÿá*http://ns.adobe.com/xap/1.0/\0<?xpacket begin=\"ï»¿\" id=\"W5M0MpCehiHzreSzNTczkc9d\"?> <x:xmpmeta xmlns:x=\"adobe:ns:meta/\" x:xmptk=\"Adobe XMP Core 5.6-c1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `u_name`, `password`, `name`, `phone`, `email`) VALUES
(6, 'adarsh', '135', 'Tirthadeep Basak', '09230558095', 'tirthadeepb1999@gmail.com'),
(9, 'rajib2', '12345', 'Tirthadeep Basak', '09230558095', 'tirthadeepb1999@gmail.com'),
(12, 'rajib32', '14587', 'Arijit Saha Ray', '09830887066', 'aipmt9@gmail.com'),
(13, 'lily', '12345', 'Lily Saha Ray', '2145685645', 'lily@gmail.com'),
(14, 'admin', 'admin@123', 'Arijit Saha Ray', '1456231254', 'arijitsaharay07@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_table`
--
ALTER TABLE `event_table`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_table`
--
ALTER TABLE `event_table`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_table`
--
ALTER TABLE `order_table`
  ADD CONSTRAINT `order_table_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
