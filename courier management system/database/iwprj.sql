-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2022 at 08:41 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwprj`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `marks` int(2) NOT NULL,
  `qualification` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `name`, `mobile`, `address`, `marks`, `qualification`) VALUES
(1, 'Raj', 9465784620, 'Mumbai Maharastra', 3, 'B.A'),
(13, 'kapil Sharma', 987898764, '', 2, '12th grade'),
(14, 'noddy', 987898764, '', 3, 'B.A'),
(29, 'elephant', 9879865410, '', 1, 'B.Com');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `city`, `state`, `phone`) VALUES
(2, 'Venkata Services	', 'Chennai	', 'Tamil Nadu	', 9000879870),
(3, 'Quality Services	', 'Surat	', 'Gujarat	', 8000879302),
(41, 'Flash shipping', 'Delhi', 'uttar pradesh', 9465465410),
(42, 'Epix', 'Ahmedabad', 'Gujarat', 9465465410),
(43, 'Falsh courier services', 'Ahmedabad', 'Gujarat', 9879465410),
(44, 'Very fast courier services', 'delhi', 'uttarpradesh', 9878654510);

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `trkid` varchar(12) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `sph` bigint(10) NOT NULL,
  `scty` varchar(50) NOT NULL,
  `rname` varchar(50) NOT NULL,
  `rph` bigint(10) NOT NULL,
  `rcity` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`trkid`, `sname`, `sph`, `scty`, `rname`, `rph`, `rcity`, `status`) VALUES
('qdor3115zp', 'Myntra  ', 9465465102, 'panipat', 'Gokul Kumar ', 9645454500, 'Kolkata', 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `sir_no` int(5) NOT NULL,
  `trkid` varchar(20) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `cancel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`sir_no`, `trkid`, `addr`, `cancel`) VALUES
(1, 'rigp8mliuc', 'This is my new address, Silk sity. Goa', 'no'),
(2, 'xrd7cpgowi', 'Tree apartment, Banglore 546545, Karnataka', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`trkid`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`sir_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `sir_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
