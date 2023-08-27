-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 01:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project529`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `cid` bigint(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cdes` varchar(255) NOT NULL,
  `cdate` varchar(255) NOT NULL,
  `ctime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`cid`, `cname`, `cdes`, `cdate`, `ctime`) VALUES
(95, 'accessoriesxx', 'asaa', '04-07-2023', '09:23:45 pm'),
(114, 'electronics', 'All electronics', '26-03-2023', '03:28:40 pm'),
(115, 'clothing', 'All Clothing', '26-03-2023', '03:32:27 pm'),
(116, 'shoes', 'All Shoes', '26-03-2023', '03:32:40 pm'),
(117, 'collectibles', 'Collectibles', '26-03-2023', '03:33:15 pm'),
(118, 'sporting goods', 'All Sportings Good ', '26-03-2023', '03:33:37 pm'),
(119, 'zzzx', 'zx', '06-06-2023', '08:55:46 pm'),
(120, 'valid', 'ssdjjdd', '04-07-2023', '09:22:42 pm'),
(121, 'ss', 'ssd', '04-07-2023', '09:23:26 pm');

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `login_id` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`login_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin'),
(2, 'test@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `product_data`
--

CREATE TABLE `product_data` (
  `pid` bigint(255) NOT NULL,
  `cat1` varchar(255) NOT NULL,
  `subcatagory` varchar(255) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pcode` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `pcompany` varchar(255) NOT NULL,
  `pprice` varchar(255) NOT NULL,
  `supply` varchar(255) NOT NULL,
  `pdate` varchar(255) NOT NULL,
  `ptime` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_data`
--

INSERT INTO `product_data` (`pid`, `cat1`, `subcatagory`, `supplier`, `pname`, `pcode`, `quantity`, `pcompany`, `pprice`, `supply`, `pdate`, `ptime`, `pimage`, `status`) VALUES
(143, '109', '81', '39', 'ddsd', 'sds', '3=', '', '22', ' 233', '19-03-2023', ' 05:14:30 pm', '403603.jpg', 'online'),
(145, '101', '81', '39', 'ssss', 'ssss', '26=', '', '22222', ' 222', '19-03-2023', ' 06:24:17 pm', '558644.jpg', 'offline'),
(146, '101', '80', '43', 'sas', 'asa', '4=', '', '12', ' 122222', '19-03-2023', ' 10:48:02 pm', '353875.jpg', 'offline'),
(147, '102', '80', '43', 'dsd', 'dfd', '26=', '', '23', ' 23', '23-03-2023', ' 10:34:53 pm', '919069.jpg', 'online'),
(148, '114 ', '88', '48', 'new Computer', 'computer', '42', '', '10000', '100', '26-03-2023', '03:59:20 pm', '923762.png', 'online'),
(149, '114 ', '88', '49', 'Latest Computer', 'comutercode', '42', '', '10000', '100', '26-03-2023', '04:01:25 pm', '710689.png', 'online'),
(150, '115 ', '91', '47', 'men suits', 'mensit33', '43', '', '10000', '100', '26-03-2023', '04:02:22 pm', '682371.png', 'online'),
(151, '115 ', '91', '47', 'men suitss', 'mensit33w', '43', '', '10000', '100', '26-03-2023', '04:03:14 pm', '516979.png', 'online'),
(152, '115 ', '92', '47', 'ladies', 'ladies33', '43', '', '10000', '100', '26-03-2023', '04:05:18 pm', '478457.png', 'online'),
(153, '115 ', '92', '47', 'ladies', 'ladies331', '44', '', '100', '100', '26-03-2023', '04:07:24 pm', '950589.png', 'online'),
(154, '115 ', '92', '47', 'ladies', 'ladies', '44', '', '1002', '1002', '26-03-2023', '04:09:07 pm', '776653.png', 'online'),
(155, '116 ', '93', '50', 'men shoes', 'menshoes', '45', '', '10023', '10022', '26-03-2023', '04:10:05 pm', '711364.png', 'online'),
(156, '116', '94', '49', 'Ladies shoes', 'ladies shoes', '41=', '', '100233', ' 1000', '26-03-2023', ' 04:11:52 pm', '842960.png', 'online'),
(157, '116 ', '94', '50', 'ladies shoes', 'shoesladies', '42', '', '3343', '334', '26-03-2023', '04:14:26 pm', '701879.png', 'online'),
(158, '116 ', '95', '50', 'ladies shoe', 'shoesladies', '42', '', '33437', '3347', '26-03-2023', '04:18:01 pm', '666440.png', 'online'),
(159, '117 ', '96', '50', 'beds', 'bedss', '43', '', '10000', '1000', '26-03-2023', '04:19:19 pm', '669901.png', 'online'),
(160, '117 ', '97', '49', 'chairs', 'chairs', '43', '', '30000', '200', '26-03-2023', '04:22:42 pm', '446956.png', 'online'),
(161, '118 ', '99', '48', 'bats', 'batss', '45', '', '3000', '100', '26-03-2023', '04:25:04 pm', '71691.jpg', 'online'),
(162, '118 ', '100', '50', 'ball', 'ball', '43', '', '3000', '100', '26-03-2023', '04:26:57 pm', '229142.jpg', 'online');

-- --------------------------------------------------------

--
-- Table structure for table `quantity_data`
--

CREATE TABLE `quantity_data` (
  `qid` bigint(255) NOT NULL,
  `qname` varchar(255) NOT NULL,
  `qdate` varchar(255) NOT NULL,
  `qtime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quantity_data`
--

INSERT INTO `quantity_data` (`qid`, `qname`, `qdate`, `qtime`) VALUES
(1, 'kg', '20-12-2022', '11:14:17 pm'),
(41, 'darzon', '26-03-2023', '03:56:14 pm'),
(42, '1 pair', '26-03-2023', '03:56:29 pm'),
(43, '10 pairs', '26-03-2023', '03:56:36 pm'),
(44, '10 boxes', '26-03-2023', '03:56:48 pm'),
(45, '29  boxes', '26-03-2023', '03:57:00 pm');

-- --------------------------------------------------------

--
-- Table structure for table `subcatagorys`
--

CREATE TABLE `subcatagorys` (
  `subid` bigint(255) NOT NULL,
  `subname` varchar(255) NOT NULL,
  `subdes` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `subdate` varchar(255) NOT NULL,
  `subtime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcatagorys`
--

INSERT INTO `subcatagorys` (`subid`, `subname`, `subdes`, `catagory`, `subdate`, `subtime`) VALUES
(86, 'headfree', 'All heandfree ', '95', '26-03-2023', '03:35:23 pm'),
(87, 'mobile phone', 'All Mobile phones', '95', '26-03-2023', '03:36:23 pm'),
(88, 'computer', 'All Computer ', '95', '26-03-2023', '03:36:37 pm'),
(89, 'lcd', 'All LCD', '114', '26-03-2023', '03:36:52 pm'),
(90, 'charger', 'All Charger', '114', '26-03-2023', '03:37:17 pm'),
(92, 'ladies suits', 'All ladies suits', '115', '26-03-2023', '03:37:54 pm'),
(93, 'men shoes', 'All  Men shoes\r\n', '116', '26-03-2023', '03:38:15 pm'),
(94, 'ladies shoes', 'All  Ladies Shoes', '116', '26-03-2023', '03:38:28 pm'),
(95, 'children shoes', 'All  children shoes', '116', '26-03-2023', '03:38:41 pm'),
(96, 'bed', 'All Beds', '117', '26-03-2023', '03:40:04 pm'),
(97, 'chairs', 'All Chairs', '117', '26-03-2023', '03:40:43 pm'),
(98, 'tables', 'All table', '117', '26-03-2023', '03:42:01 pm'),
(99, 'bats', 'All Bats', '118', '26-03-2023', '03:42:15 pm'),
(100, 'ball', 'All Ball', '118', '26-03-2023', '03:42:24 pm'),
(101, 'fruits', 'ss', '95', '04-07-2023', '09:28:35 pm');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supid` bigint(255) NOT NULL,
  `supname` varchar(255) NOT NULL,
  `supemail` varchar(255) NOT NULL,
  `supcontact` varchar(255) NOT NULL,
  `supcompanyname` varchar(255) NOT NULL,
  `supdate` varchar(255) NOT NULL,
  `suptime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supid`, `supname`, `supemail`, `supcontact`, `supcompanyname`, `supdate`, `suptime`) VALUES
(47, 'usman ', 'usman@gmail.com', '03034939483', 'clothing', '26-03-2023', '03:46:29 pm'),
(49, 'ahmad pasha', 'Ahmad@gmail.com', '3949429294', 'Laptop Company', '26-03-2023', '03:48:50 pm'),
(50, 'nadar  pasha', 'Nadar pasha', '03933948343', 'Newd', '26-03-2023', '03:50:22 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `product_data`
--
ALTER TABLE `product_data`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `quantity_data`
--
ALTER TABLE `quantity_data`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `subcatagorys`
--
ALTER TABLE `subcatagorys`
  ADD PRIMARY KEY (`subid`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `cid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `login_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_data`
--
ALTER TABLE `product_data`
  MODIFY `pid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `quantity_data`
--
ALTER TABLE `quantity_data`
  MODIFY `qid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `subcatagorys`
--
ALTER TABLE `subcatagorys`
  MODIFY `subid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
