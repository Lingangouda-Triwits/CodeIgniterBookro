-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 11:26 AM
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
  `totalPeople` varchar(50) NOT NULL,
  `total_fare` float NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) DEFAULT 'completed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `completed`
--

INSERT INTO `completed` (`slno`, `email`, `demail`, `name`, `pickup`, `drop`, `distance`, `totalPeople`, `total_fare`, `time_stamp`, `status`) VALUES
(4, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'sagar', 'asdgrf', 'eryerr', '234', '', 3.51, '2023-07-03 05:04:16', 'completed'),
(5, '0', 'rushirpatil491@gmail.com', 'pallavi babaleswar', 'bijapur', 'kadapatti', '6756', '', 101.34, '2023-07-03 05:34:37', 'completed'),
(6, '0', 'rushirpatil491@gmail.com', 'pallavi babaleswar', 'bijapur', 'kadapatti', '67567', '', 1013.51, '2023-07-03 05:36:01', 'completed'),
(7, '0', 'rushirpatil491@gmail.com', 'pallavi babaleswar', 'bijapur', 'yiohi', '54', '', 0.81, '2023-07-03 05:37:28', 'completed'),
(8, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'abc', 'rtyrt', 'retyhrt', '5674456', '', 85116.8, '2023-07-03 05:45:32', 'completed'),
(9, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'vikram', 'sdgag', 'agdasrfwre', '5645', '', 84.675, '2023-07-03 05:46:02', 'completed'),
(10, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'vikram', 'rtyrt', 'retyhrt', '54675', '', 820.125, '2023-07-03 05:48:25', 'completed'),
(11, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'pallavi babaleswar', 'rtyrt', 'retyhrt', '65546', '', 983.19, '2023-07-03 05:49:08', 'completed'),
(12, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'pallavi', 'sdfsa', 'sdfas', '7', '', 105, '2023-07-06 04:52:34', 'completed'),
(13, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'fghj', 'gjft', 'fgjhf', '7897', '', 118455, '2023-07-06 05:43:43', 'completed'),
(14, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'sagar', 'polo ground', 'solapur', '89', '', 1335, '2023-07-07 04:10:36', 'completed'),
(15, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'sdfg', 'sdfs', 'sdfgas', '56', '', 840, '2023-07-07 04:40:46', 'completed'),
(16, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'sgds', 'bijapur', 'retyhrt', '54', '', 810, '2023-07-07 04:41:05', 'completed'),
(17, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'sagar', 'polo ground', 'solapur', '2', '', 30, '2023-07-07 04:58:24', 'completed'),
(18, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'sdf', 'sdf', 'sdfsa', '5', '', 75, '2023-07-07 05:03:46', 'completed'),
(19, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'pallavi', 'polo ground', 'hunnur', '70', '2', 1050, '2023-07-07 05:11:42', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactUs` (
  `slno` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactUs` (`slno`, `fname`, `lname`, `email`, `message`) VALUES
(1, 'govind', 'bosco', 'admin@gmail.com', 'sdfvasdfgadsf'),
(2, 'govind', 'dfghdf', 'dfg@g', 'dfgd'),
(3, 'Ravi', 'bosco', 'rushirpatil14@gmail.com', 'hello am facing some issues'),
(4, 'govind', 'dixit', 'rushirpatil14@gmail.com', 'asdgvfasd'),
(5, 'santosh', 'bosco', 'rushirpatil14@gmail.com', 'sdgvdfgdf'),
(6, 'govind', 'huljantti', 'rushirpatil14@gmail.com', 'jifogj'),
(7, 'sagar', 'huljantti', 'rushirpatil14@gmail.com', 'hello'),
(8, 'santosh', 'dfgsd', 'rushirpatil14@gmail.com', 'sdgf gf');

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
(5, 'lsdjfltyt', 'vsva@gmail.com', 433252342, 'dfcwsfc342xc', 'newyork', '2023-07-04 11:49:11'),
(8, 'rushi patil', 'rushirpatil14@gmail.com', 9741812482, '$2y$10$icafjYf9CfsCXg450F0ZCuRN8j4HIzm5s.1AJFyie4HtvnBkQRbG2', 'Bijapur', '2023-06-27 04:11:45'),
(9, 'rushi patil', 'rushirpatil491@gmail.com', 9740802088, '$2y$10$n7keQYqCrkhnhURPC5y26O5F.vosKHrqsxngjKfFBy/oFJvIQvXOC', 'Bijapur', '2023-06-28 04:08:14'),
(10, 'vikram jha', 'rushirpatil14@gmail.om', 7777777777, '$2y$10$3hd47GSS2mJl5RPe9dx0COv/5yqknkCkJmgway5dckkVDv8YmMYJ.', 'Mangaloor', '2023-07-04 11:49:22');

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
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `carName` varchar(50) NOT NULL,
  `carNum` varchar(50) NOT NULL,
  `licenseNum` varchar(50) NOT NULL,
  `rcCard` varchar(50) NOT NULL,
  `aadharNum` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`slno`, `name`, `email`, `mobile`, `password`, `city`, `photo`, `time_stamp`, `carName`, `carNum`, `licenseNum`, `rcCard`, `aadharNum`) VALUES
(6, 'rushi patil14', 'rushirpatil14@gmail.com', 9741812482, '$2y$10$9MOx4Q.wJUzu1/Tvyw7FbO1OK/l1QWBBL5coNC1QtqyuFFK55ogZy', 'jamkhandi', 'background2.jpg', '2023-07-04 11:30:39', '', '', '', '', 0),
(7, 'xyz patil', 'rushirpatil491@gmail.com', 974181244, '$2y$10$sg3KfKwGsU1jY4HDVQJnhePCefBmnjQRqGFrUCK/OcWs0km3BI97q', 'jamkhandi', '51830004.png', '2023-07-04 05:33:55', 'audi', 'KA48L1085', 'ssdgfd', 'sgrfg45t4', 2147483647),
(9, 'pallavi ', 'admin@gmail.combf', 9678443678, '$2y$10$gbpPiiuJOLVnNo6Hzm3MBOvkwVlEEsVquPOg0BJFDe/B6enQWzLgm', 'qqqqq', 'nature-snapseed-images-editing-background-hd-photos-116793092393r0qiiriyl.jpg', '2023-07-06 10:04:12', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `requesttodriver`
--

CREATE TABLE `requestToDriver` (
  `slno` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `boarding` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `totalPeople` varchar(50) NOT NULL,
  `demail` varchar(50) NOT NULL,
  `status` enum('pending','accepted') NOT NULL DEFAULT 'pending',
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requesttodriver`
--

INSERT INTO `requestToDriver` (`slno`, `email`, `name`, `mobile`, `boarding`, `destination`, `totalPeople`, `demail`, `status`, `time_stamp`) VALUES
(50, 'rushirpatil14@gmail.om', 'pallavi ', 9940567383, 'sfgsdf', 'gtrgret', '', 'rushirpatil491@gmail.com', 'pending', '2023-07-04 04:49:16'),
(51, 'rushirpatil491@gmail.com', 'pallavi  babaleswar', 9741812482, 'polo ground', 'hunnur', '', 'rushirpatil14@gmail.com', 'accepted', '2023-07-04 09:37:27'),
(52, 'rushirpatil491@gmail.com', 'dsfg', 8888888888, 'ytjt', 'ytjty', '', '', 'pending', '2023-07-04 11:02:46'),
(55, 'rushirpatil14@gmail.com', 'fdsg', 989, 'fgh', 'fdgh', '', 'rushirpatil491@gmail.com', 'pending', '2023-07-06 05:43:54'),
(62, 'rushirpatil14@gmail.com', 'pallavi ', 9908564327, 'bijapur', 'solapur', '3', '', 'pending', '2023-07-07 05:19:53'),
(63, 'rushirpatil14@gmail.com', 'pallavi ', 9908564327, 'polo ground', 'solapur', '3', '', 'pending', '2023-07-07 05:20:57'),
(64, 'rushirpatil14@gmail.com', 'pallavi ', 9908564327, 'polo ground', 'retyhrt', '3', '', 'pending', '2023-07-07 05:27:23'),
(65, 'rushirpatil14@gmail.com', 'mahesh', 9741812482, 'kr market', 'solapur', '3', '', 'pending', '2023-07-07 05:28:40'),
(66, 'rushirpatil14@gmail.com', 'mahesh', 9741812482, 'kr market', 'solapur', '3', '', 'pending', '2023-07-07 05:29:18'),
(67, 'rushirpatil14@gmail.com', 'mahesh', 9741812482, 'kr market', 'solapur', '3', '', 'pending', '2023-07-07 05:29:20'),
(68, 'rushirpatil14@gmail.com', 'sagar', 9678443627, 'polo ground', 'solapur', '1', '', 'pending', '2023-07-07 05:29:27'),
(69, 'rushirpatil14@gmail.com', 'sagar', 9678443627, 'polo ground', 'solapur', '1', '', 'pending', '2023-07-07 05:30:08'),
(70, 'rushirpatil14@gmail.com', 'pallavi ', 9678443627, 'polo ground', 'hunnur', '3', '', 'pending', '2023-07-07 05:30:42'),
(71, 'rushirpatil14@gmail.com', 'pallavi ', 9678443627, 'polo ground', 'hunnur', '3', '', 'pending', '2023-07-07 05:30:55'),
(72, 'rushirpatil14@gmail.com', 'pallavi ', 9678443627, 'polo ground', 'hunnur', '3', '', 'pending', '2023-07-07 05:32:11'),
(73, 'rushirpatil14@gmail.com', 'pallavi ', 9678443627, 'polo ground', 'hunnur', '3', '', 'pending', '2023-07-07 05:32:13'),
(74, 'rushirpatil14@gmail.com', 'pallavi ', 9678443627, 'kr market', 'hunnur', '2', '', 'pending', '2023-07-07 05:34:39'),
(75, 'rushirpatil14@gmail.com', 'pallavi  babaleswar', 9940567383, 'polo ground', 'solapur', '3', '', 'pending', '2023-07-07 05:36:18'),
(76, 'rushirpatil14@gmail.com', 'pallavi  babaleswar', 9940567383, 'polo ground', 'solapur', '3', '', 'pending', '2023-07-07 05:36:33'),
(77, 'rushirpatil14@gmail.com', 'mahesh', 9678443627, 'polo ground', 'retyhrt', '3', '', 'pending', '2023-07-07 05:38:40'),
(78, 'rushirpatil14@gmail.com', 'pallavi  babaleswar', 9741812482, 'bijapur', 'solapur', '2', '', 'pending', '2023-07-07 05:44:16'),
(79, 'rushirpatil14@gmail.com', 'vikram', 9741812482, 'bijapur', 'hunnur', '3', '', 'pending', '2023-07-07 05:45:33'),
(80, 'rushirpatil14@gmail.com', 'pallavi ', 9940567383, 'polo ground', 'hunnur', '2', '', 'pending', '2023-07-07 05:48:24'),
(81, 'rushirpatil14@gmail.com', 'pallavi  babaleswar', 9940567383, 'kr market', 'hunnur', '3', '', 'pending', '2023-07-07 05:49:40'),
(82, 'rushirpatil14@gmail.com', 'pallavi ', 9908564327, 'polo ground', 'solapur', '3', '', 'pending', '2023-07-07 05:50:52'),
(83, 'rushirpatil14@gmail.com', 'mahesh', 9908564327, 'polo ground', 'solapur', '3', '', 'pending', '2023-07-07 05:53:04'),
(84, 'rushirpatil14@gmail.com', 'mahesh', 9940567383, 'polo ground', 'solapur', '2', '', 'pending', '2023-07-07 05:57:35'),
(85, 'rushirpatil14@gmail.com', 'pallavi ', 9908564327, 'polo ground', 'solapur', '3', '', 'pending', '2023-07-07 06:09:57'),
(86, 'rushirpatil14@gmail.com', 'rushi patil', 9740802088, 'sdgag', 'hunnur', '2', '', 'pending', '2023-07-07 06:11:27'),
(87, 'rushirpatil14@gmail.com', 'sad', 9898, 'dfgd', 'dfgd', '1', '', 'pending', '2023-07-07 06:14:25'),
(88, 'rushirpatil14@gmail.com', 'div', 9908564327, 'drewfr', 'erfge', '4', 'rushirpatil491@gmail.com', 'accepted', '2023-07-07 06:15:47'),
(89, 'rushirpatil14@gmail.com', 'sagar', 9741812482, 'kr market', 'solapur', '3', '', 'pending', '2023-07-07 06:21:19'),
(90, 'rushirpatil14@gmail.com', 'rushi pagel', 67, 'bijapur', 'solapur', '3', '', 'pending', '2023-07-07 06:44:34');

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
ALTER TABLE `requestToDriver`
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
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactUs`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `requesttodriver`
--
ALTER TABLE `requestToDriver`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
