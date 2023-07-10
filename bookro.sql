-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 12:55 PM
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
  `qrPhoto` varchar(500) NOT NULL,
  `rating` int(10) NOT NULL,
  `things` varchar(50) NOT NULL,
  `recs` varchar(50) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) DEFAULT 'completed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `completed`
--

INSERT INTO `completed` (`slno`, `email`, `demail`, `name`, `pickup`, `drop`, `distance`, `totalPeople`, `total_fare`, `qrPhoto`, `rating`, `things`, `recs`, `time_stamp`, `status`) VALUES
(19, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'pallavi', 'polo ground', 'hunnur', '70', '2', 1050, '', 0, '', '', '2023-07-07 05:11:42', 'completed'),
(20, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'div', 'drewfr', 'erfge', '3', '4', 45, '', 2, 'rger', 'etrghrt', '2023-07-08 05:01:34', 'completed'),
(21, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'rushi pagel', 'bijapur', 'solapur', '43', '3', 645, '', 0, '', '', '2023-07-08 09:54:59', 'completed'),
(22, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'sagar', 'kr market', 'solapur', '5', '3', 75, '', 0, '', '', '2023-07-08 10:05:30', 'completed'),
(23, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'sad', 'dfgd', 'dfgd', '2', '1', 30, '', 0, '', '', '2023-07-08 10:06:22', 'completed'),
(24, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'pallavi', 'polo ground', 'solapur', '4', '3', 60, '', 0, '', '', '2023-07-08 10:06:41', 'completed'),
(25, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'xyz abc', 'bijapur', 'solapur', '6', '4', 90, '', 0, '', '', '2023-07-10 09:46:50', 'completed'),
(26, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'rushi patil', 'sdgag', 'hunnur', '5', '2', 75, '', 0, '', '', '2023-07-10 09:51:37', 'completed'),
(27, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'mahesh', 'polo ground', 'solapur', '4', '2', 60, '', 0, '', '', '2023-07-10 09:56:56', 'completed'),
(28, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'pallavi', 'polo ground', 'hunnur', '44', '2', 660, '', 0, '', '', '2023-07-10 09:57:52', 'completed'),
(29, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'vikram', 'bijapur', 'hunnur', '3', '3', 45, '', 0, '', '', '2023-07-10 10:03:56', 'completed'),
(30, 'rushirpatil14@gmail.com', 'rushirpatil491@gmail.com', 'mahesh', 'polo ground', 'retyhrt', '2', '3', 30, '518300021.png', 0, '', '', '2023-07-10 10:14:07', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactUs` (
  `slno` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactUs` (`slno`, `fname`, `lname`, `email`, `message`, `time_stamp`) VALUES
(5, 'santosh', 'bosco', 'rushirpatil14@gmail.com', 'sdgvdfgdf', '2023-07-10 05:21:14'),
(6, 'govind', 'huljantti', 'rushirpatil14@gmail.com', 'jifogj', '2023-07-10 05:21:14'),
(7, 'sagar', 'huljantti', 'rushirpatil14@gmail.com', 'hello', '2023-07-10 05:21:14'),
(8, 'santosh', 'dfgsd', 'rushirpatil14@gmail.com', 'sdgf gf', '2023-07-10 05:21:14');

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
(6, 'rushi patil14', 'rushirpatil14@gmail.com', 9741812482, '$2y$10$9MOx4Q.wJUzu1/Tvyw7FbO1OK/l1QWBBL5coNC1QtqyuFFK55ogZy', 'jamkhandi', 'background2.jpg', '2023-07-10 07:20:44', '', '', '', '', 0),
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
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `acceptedOn` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requesttodriver`
--

INSERT INTO `requestToDriver` (`slno`, `email`, `name`, `mobile`, `boarding`, `destination`, `totalPeople`, `demail`, `status`, `time_stamp`, `acceptedOn`) VALUES
(93, 'rushirpatil14@gmail.com', 'thgrt fhbtr', 9940567383, 'rthrt', 'th5rt', '3', '', 'pending', '2023-07-10 10:17:13', '2023-07-10 10:17:13'),
(94, 'rushirpatil14@gmail.com', 'ryhrt trt', 9678443627, 'grfger', ' rghrthg', '5', '', 'pending', '2023-07-10 10:17:25', '2023-07-10 10:17:25'),
(95, 'rushirpatil14@gmail.com', 'rthtr ghr', 9940567383, 'ertgr', ' rhgrt', '2', '', 'pending', '2023-07-10 10:18:15', '2023-07-10 10:18:15'),
(96, 'rushirpatil14@gmail.com', 'dfbfg fghfrg', 9678443627, '43t3', 'ghrt', '3', '', 'pending', '2023-07-10 10:18:24', '2023-07-10 10:18:24');

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
ALTER TABLE `contactUs`
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
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
