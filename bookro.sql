-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2023 at 07:25 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `slno` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`slno`, `username`, `password`) VALUES
(1, 'Admin', '$2y$10$z5JWo8QNGts6h3gesDMFQu.FK9qtFmLVui9KBpVcam0vVApKeQGyy');

-- --------------------------------------------------------

--
-- Table structure for table `completed`
--

CREATE TABLE `completed` (
  `slno` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `demail` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pickup` varchar(50) NOT NULL,
  `drop` varchar(50) NOT NULL,
  `distance` varchar(50) NOT NULL,
  `total_fare` float NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) DEFAULT 'completed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `completed`
--

INSERT INTO `completed` (`slno`, `email`, `demail`, `name`, `pickup`, `drop`, `distance`, `total_fare`, `time_stamp`, `status`) VALUES
(4, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'sagar', 'asdgrf', 'eryerr', '234', 3.51, '2023-07-03 05:04:16', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `slno` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`slno`, `fname`, `lname`, `email`, `message`) VALUES
(1, 'govind', 'bosco', 'admin@gmail.com', 'sdfvasdfgadsf'),
(2, 'govind', 'dfghdf', 'dfg@g', 'dfgd');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `slno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`slno`, `name`, `email`, `mobile`, `password`, `city`, `time_stamp`) VALUES
(5, 'lsdjfl', 'vsva@gmail.com', 433252342, 'dfcwsfc342xc', 'newyork', '2023-06-22 12:50:00'),
(6, 'efcwqfaq', 'sadfvwer', 32222222, 'ewfgqw', 'wefq', '2023-06-22 10:19:29'),
(8, 'rushi patil', 'rushirpatil14@gmail.com', 9741812482, '$2y$10$icafjYf9CfsCXg450F0ZCuRN8j4HIzm5s.1AJFyie4HtvnBkQRbG2', 'Bijapur', '2023-06-27 04:11:45'),
(9, 'rushi patil', 'rushirpatil491@gmail.com', 9740802088, '$2y$10$n7keQYqCrkhnhURPC5y26O5F.vosKHrqsxngjKfFBy/oFJvIQvXOC', 'Bijapur', '2023-06-28 04:08:14');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `slno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`slno`, `name`, `email`, `mobile`, `password`, `city`, `photo`, `time_stamp`) VALUES
(6, 'rushi patil', 'rushirpatil14@gmail.com', 9741812482, '$2y$10$9MOx4Q.wJUzu1/Tvyw7FbO1OK/l1QWBBL5coNC1QtqyuFFK55ogZy', 'jamkhandi', 'background2.jpg', '2023-06-23 05:19:20'),
(7, 'xyz patil', 'rushirpatil491@gmail.com', 9741812498, '$2y$10$sg3KfKwGsU1jY4HDVQJnhePCefBmnjQRqGFrUCK/OcWs0km3BI97q', 'jamkhandi', '51830004.png', '2023-06-23 05:20:43');

-- --------------------------------------------------------

--
-- Table structure for table `requesttodriver`
--

CREATE TABLE `requesttodriver` (
  `slno` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `boarding` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `demail` varchar(50) NOT NULL,
  `status` enum('pending','accepted') NOT NULL DEFAULT 'pending',
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requesttodriver`
--

INSERT INTO `requesttodriver` (`slno`, `email`, `name`, `mobile`, `boarding`, `destination`, `demail`, `status`, `time_stamp`) VALUES
(42, 'rushirpatil14@gmail.com', 'vikram', 9940567383, 'sdgag', 'agdasrfwre', '', 'pending', '2023-07-03 04:45:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `completed`
--
ALTER TABLE `completed`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `requesttodriver`
--
ALTER TABLE `requesttodriver`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `completed`
--
ALTER TABLE `completed`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `requesttodriver`
--
ALTER TABLE `requesttodriver`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
