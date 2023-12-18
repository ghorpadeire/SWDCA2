-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2022 at 04:07 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int(6) UNSIGNED NOT NULL,
  `did` varchar(30) NOT NULL,
  `rid` varchar(30) NOT NULL,
  `hamount` varchar(50) DEFAULT NULL,
  `message` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `nid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `did`, `rid`, `hamount`, `message`, `status`, `nid`) VALUES
(12, '11', '12', '5000', 'thanks for helping me your help memorible to me.', '0', 6),
(13, '15', '12', '2000', NULL, '1', 6);

-- --------------------------------------------------------

--
-- Table structure for table `need`
--

CREATE TABLE `need` (
  `id` int(6) UNSIGNED NOT NULL,
  `rid` varchar(30) NOT NULL,
  `ntype` varchar(30) NOT NULL,
  `nphoto` varchar(50) DEFAULT NULL,
  `nname` varchar(30) NOT NULL,
  `ndetails` varchar(50) DEFAULT NULL,
  `ramount` varchar(50) DEFAULT NULL,
  `ldate` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `need`
--

INSERT INTO `need` (`id`, `rid`, `ntype`, `nphoto`, `nname`, `ndetails`, `ramount`, `ldate`, `status`) VALUES
(6, '12', 'Health', '../upload/reciept.jpg', 'kidney problem', 'please help me i need money for kidney opertion', '45000', '2022-07-03T19:22', '0'),
(8, '14', 'Home', '../upload/homeless.jpg', 'home damage', 'i home damage plese help me', '85000', '2022-05-26T19:36', '1');

-- --------------------------------------------------------

--
-- Table structure for table `needtype`
--

CREATE TABLE `needtype` (
  `id` int(6) UNSIGNED NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `needtype`
--

INSERT INTO `needtype` (`id`, `type`) VALUES
(4, 'Health'),
(5, 'Home');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(6) UNSIGNED NOT NULL,
  `role` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role`, `fname`, `lname`, `photo`, `address`, `mobile`, `email`, `pass`) VALUES
(10, 'Admin', 'fadmin', 'ladmin', '../upload/images.jpg', 'pune', '9988776655', 'admin1@gmail.com', '1'),
(11, 'Donor', 'fdonor', 'ldonor', '../upload/donor.jpg', 'nashik', '9966332255', 'donor1@gmail.com', '1'),
(12, 'Recipient', 'frecipient', 'lrecipient', '../upload/reciept1.jpg', 'mumbai', '9955447766', 'recipient1@gmail.com', '1'),
(14, 'Recipient', 'frecipient1', 'lrecipient1', '../upload/reciept2.jpg', 'nagpur', '9922114556', 'recipient2@gmail.com', '1'),
(15, 'Donor', 'donor1', 'donor2', '../upload/donor1.jpg', 'satara', '955221144', 'donor2@gmail.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `need`
--
ALTER TABLE `need`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `needtype`
--
ALTER TABLE `needtype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `need`
--
ALTER TABLE `need`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `needtype`
--
ALTER TABLE `needtype`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
