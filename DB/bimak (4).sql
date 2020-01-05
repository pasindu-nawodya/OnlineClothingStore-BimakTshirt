-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 24, 2019 at 02:27 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bimak`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(500) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `aphoto` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `name`, `password`, `aphoto`) VALUES
(1, 'admin', 'admin@example.com', 'Administrator', 'admin', 'admin/admin.png'),
(3, 'cu', 'cu@gmail.com', 'cu', 'cu', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryname`) VALUES
(51, 'Ladies T-Shirts'),
(50, 'T-Shirt Gents'),
(49, 'Couple T-Shirt Collection'),
(52, 'Limited Feather Collection'),
(54, 'cat 1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_account`
--

DROP TABLE IF EXISTS `customer_account`;
CREATE TABLE IF NOT EXISTS `customer_account` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cphoto` blob NOT NULL,
  PRIMARY KEY (`cid`,`email`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_account`
--

INSERT INTO `customer_account` (`cid`, `firstname`, `lastname`, `address`, `telephone`, `email`, `password`, `cphoto`) VALUES
(1, 'Damsiri', 'Dilanjan', 'Kuliyapitiya', '0770885712', 'damsiri@gmail.com  ', '1234  ', 0x637573746f6d65722f64696c616e6a616e2e6a7067),
(2, 'Pasindu', 'Nawodya', 'Nikawaratiya', '0715443619', 'pasindu@gmail.com', '1234', 0x637573746f6d65722f706173696e64752e6a7067),
(3, 'Tharindu', 'Thiwanka', 'Polgahawela', '0767363425', 'thiwanka@gmail.com', '1234', 0x637573746f6d65722f74686977616e6b612e6a7067),
(4, 'Chamod', 'Dilshan', 'Alawwa', '0715577568', 'chamod@gmail.com', '1234', 0x637573746f6d65722f6368616d6f642e6a7067),
(5, 'Madhawa', 'Weerasinghe', 'Dankotuwe', '0776934622', 'madhawa@gmail.com ', '1234 ', 0x637573746f6d65722f6d61646177612e6a7067),
(6, 'Isuru', 'Sathsara', 'Kurunagala', '0776783453', 'isuru@gmail.com', '1234', 0x637573746f6d65722f69737572752e6a7067),
(7, 'Ashen', 'Kavinda', 'Kurunagala', '0775241637', 'Ashen@gmail.com', '1234', 0x637573746f6d65722f617368656e2e6a7067),
(8, 'Kamal', 'Hasitha', 'Madampe', '0774561238', 'kamal@gmail.com', '1234', 0x637573746f6d65722f6b616d616c2e6a7067),
(9, 'Dasun', 'Ekanayaka', 'Maharagama', '0771234567', 'dasun@gmail.com', '1234', 0x637573746f6d65722f646173756e2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_details`
--

DROP TABLE IF EXISTS `delivery_details`;
CREATE TABLE IF NOT EXISTS `delivery_details` (
  `oId` int(11) NOT NULL,
  `cName` varchar(50) NOT NULL,
  `No` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `empId` int(11) DEFAULT NULL,
  `empName` varchar(50) DEFAULT NULL,
  `vId` int(11) DEFAULT NULL,
  `vehicleType` varchar(50) DEFAULT NULL,
  `RegNo` varchar(50) DEFAULT NULL,
  `courier` varchar(50) DEFAULT NULL,
  `assigned_date` date DEFAULT NULL,
  `delivered_date` date DEFAULT NULL,
  `del_status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`oId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_details`
--

INSERT INTO `delivery_details` (`oId`, `cName`, `No`, `city`, `province`, `empId`, `empName`, `vId`, `vehicleType`, `RegNo`, `courier`, `assigned_date`, `delivered_date`, `del_status`) VALUES
(1, '2', '3', '4', 'CP', 5, '6', 7, 'Motor Bike', '8', NULL, '2019-09-21', NULL, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ename` varchar(1000) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `epassword` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `line1` varchar(500) NOT NULL,
  `line2` varchar(500) NOT NULL,
  `type` varchar(100) NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `edesc` varchar(10000) DEFAULT NULL,
  `gender` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `ename`, `nic`, `epassword`, `dob`, `email`, `phone`, `line1`, `line2`, `type`, `image`, `edesc`, `gender`) VALUES
(1, 'Pasindu Nawodya', '982652111v', '1234', '1998-09-21        ', 'pasindu921@gmail.com', '715443619', '96/4,pahala halmilla kotuwa', 'thuththiripitigama', 'diliver', 'images/employee/dilanjan.jpg', '        ', 'male'),
(3, 'Madhawa Weerasinghe', '978765432v', '1234', '2019-08-27', 'madhawa@gmail.com', '0778798654', 'Waliwita Rd', 'Malabe', 'workers', 'images/employee/madawa.jpg', '', 'male'),
(2, 'Tharindu Thiwanka', '982652456v', '1234', '1998-01-29 ', 'tharinduthiwanka1998@gmail.com', '0776545342', 'nimal sewana,Maithree mawatha', 'Polgahawel', 'diliver', 'images/employee/WhatsApp Image 2019-06-26 at 21.33.18.jpeg', ' ', 'male'),
(8, 'Chamod Dilshan', '985623541v', '1234', '2019-09-02', 'chamod.c@gmail.com', '0756985698', 'No 76/A Allawa Rod', 'Polgahawela', 'diliver', 'images/employee/chamod.jpg', '', 'male'),
(5, 'Damsiri Dilanjan', '9876543v', '1234', '1998-08-19', 'dilanjan@gmail.com', '0714354678', 'madampe rd', 'Kuliyapitiya', 'driver', 'images/employee/dilanjan.jpg', '', 'male'),
(6, 'Isuru Sathsara', '976789054v', '1234', '1998-08-13  ', 'isuru@gmail.lk', '0789876543', 'Kurunegala rd', 'Ibbagamuwa', 'driver', 'images/employee/isuru.jpg', '  ', 'male'),
(9, 'Dasun', '984123511v', '1234', '2019-09-10', 'Dasun@icloud.com', '0175698452', 'No 43/A Mahawa road ', 'Mahawa', 'diliver', 'images/employee/dasun.jpg', '', 'male'),
(10, 'Kamal Hasantha', '985478521v', '3214', '2019-09-14', 'kamal.h@gmail.com', '0714453111', 'Nimal sewana, Alawwa ', 'Polgahawela', 'diliver', 'images/employee/kamal.jpg', '', 'male'),
(11, 'Thanura Marapana', '976521454v', '99854', '1999-06-15', 'thanura@gmail.com', '0756885214', 'No 23/A Rambukkana Road', 'Polgahwela', 'cashier', 'images/employee/thanura.jpg', '', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `employee_vehicle`
--

DROP TABLE IF EXISTS `employee_vehicle`;
CREATE TABLE IF NOT EXISTS `employee_vehicle` (
  `empId` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Nic` varchar(50) NOT NULL,
  `vId` int(11) NOT NULL,
  `vType` varchar(50) NOT NULL,
  `RegNo` varchar(100) NOT NULL,
  PRIMARY KEY (`empId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_vehicle`
--

INSERT INTO `employee_vehicle` (`empId`, `Name`, `Nic`, `vId`, `vType`, `RegNo`) VALUES
(1, 'Abeysekara', '8085302145V', 100, 'Van', '123abc'),
(5, 'Jayakody', '985302145V', 103, 'Motor Bike', 'xyz456');

-- --------------------------------------------------------

--
-- Table structure for table `expences`
--

DROP TABLE IF EXISTS `expences`;
CREATE TABLE IF NOT EXISTS `expences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(45) NOT NULL,
  `category` varchar(45) NOT NULL,
  `amount` varchar(45) NOT NULL,
  `note` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expences`
--

INSERT INTO `expences` (`id`, `date`, `category`, `amount`, `note`) VALUES
(2, '2019-08-26', 'Electricity bill', '12000.00', 'Monthly bill'),
(3, '2019-08-26', 'Fuel cost', '2000.00', 'Diesel for vehicles'),
(4, '2019-08-26', 'Repairs', '45000.00', 'A/C machine repair'),
(5, '2019-08-26', 'Water bill', '720.00', 'Monthly Water bill'),
(6, '2019-08-26', 'Machine maintenance', '4200.00', 'for spare parts'),
(8, '2019-08-27', 'Fuel cost', '1000', 'xx'),
(10, '2019-09-24', 'Electricity bill', '15000', 'monthly blls');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iname` varchar(1000) NOT NULL,
  `iprice` double NOT NULL,
  `iqty` int(11) NOT NULL,
  `isize` varchar(10) NOT NULL,
  `itype` varchar(100) NOT NULL,
  `igender` varchar(10) DEFAULT NULL,
  `iphoto` varchar(1000) NOT NULL,
  `idesc` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `iname`, `iprice`, `iqty`, `isize`, `itype`, `igender`, `iphoto`, `idesc`) VALUES
(1, 'Item 1', 1000, 10, 's', '', 'm', 'product/DSC_1169.jpg', 'Black Men T-shirt'),
(3, 'item 3', 1000, 12, 'm', '1', 'f', 'product/DSC_1364.jpg', '5656');

-- --------------------------------------------------------

--
-- Table structure for table `leave_details`
--

DROP TABLE IF EXISTS `leave_details`;
CREATE TABLE IF NOT EXISTS `leave_details` (
  `leave_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `leave_type` varchar(45) DEFAULT NULL,
  `reason` varchar(45) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending..!',
  PRIMARY KEY (`leave_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_details`
--

INSERT INTO `leave_details` (`leave_id`, `emp_id`, `leave_type`, `reason`, `start_date`, `end_date`, `status`) VALUES
(1, 1, 'Sick', 'I am sick', '2019-08-26', '2019-08-27', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `loan_details`
--

DROP TABLE IF EXISTS `loan_details`;
CREATE TABLE IF NOT EXISTS `loan_details` (
  `loan_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `loanDate` date DEFAULT NULL,
  `reason` varchar(45) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending..!',
  PRIMARY KEY (`loan_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_details`
--

INSERT INTO `loan_details` (`loan_id`, `emp_id`, `amount`, `loanDate`, `reason`, `status`) VALUES
(1, 1, '10000', '2019-08-26', 'Pay', 'Approved'),
(2, 1, '332', '2019-09-16', '3123df', 'Pending..!'),
(3, 1, '3123', '2019-09-10', 'dfsf', 'Pending..!'),
(4, 1, '200000', '2019-09-24', 'gh', 'Pending..!');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

DROP TABLE IF EXISTS `orderitems`;
CREATE TABLE IF NOT EXISTS `orderitems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `productprice` varchar(255) NOT NULL,
  `pquantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=233 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `pid`, `orderid`, `productprice`, `pquantity`) VALUES
(214, 57, 163, '860', 10),
(213, 69, 162, '123', 8),
(232, 4, 176, '790', 29),
(231, 3, 175, '780', 21),
(230, 4, 174, '790', 5),
(229, 3, 174, '780', 6),
(228, 2, 172, '850', 1),
(227, 1, 172, '850', 7),
(226, 3, 171, '780', 1),
(225, 4, 171, '790', 1),
(224, 5, 169, '750', 3),
(223, 6, 169, '750', 1),
(222, 2, 169, '850', 1),
(216, 60, 165, '890', 1),
(217, 74, 165, '321', 1),
(218, 60, 166, '890', 6),
(219, 3, 167, '780', 5),
(220, 1, 168, '850', 3),
(221, 4, 169, '790', 1),
(215, 76, 164, '213', 1),
(212, 57, 162, '860', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `totalprice` varchar(255) NOT NULL,
  `orderstatus` varchar(255) NOT NULL,
  `paymentmode` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=177 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `uid`, `totalprice`, `orderstatus`, `paymentmode`, `timestamp`) VALUES
(162, 34, '5284', 'Order Placed', 'Cash on dilvery', '2019-09-24 00:49:40'),
(163, 33, '8600', 'Cancelled', 'Cash on dilvery', '2019-09-24 02:32:03'),
(164, 33, '213', 'Cancelled', 'Cash on dilvery', '2019-09-24 02:35:23'),
(165, 33, '1211', 'Order Placed', 'Cash on dilvery', '2019-09-24 02:40:03'),
(166, 38, '5340', 'Order Placed', 'Cash on dilvery', '2019-09-24 04:56:28'),
(167, 52, '3900', 'Order Placed', 'Cash on dilvery', '2019-09-24 07:38:26'),
(168, 52, '2550', 'Order Placed', 'Cash on dilvery', '2019-09-24 07:40:14'),
(169, 52, '4640', 'Order Placed', 'Cash on dilvery', '2019-09-24 07:40:48'),
(170, 52, '0', 'Order Placed', 'Cash on dilvery', '2019-09-24 07:40:53'),
(171, 52, '1570', 'Order Placed', 'Cash on dilvery', '2019-09-24 07:41:21'),
(172, 52, '6800', 'Order Placed', 'Cash on dilvery', '2019-09-24 07:42:22'),
(173, 52, '0', 'Cancelled', 'Cash on dilvery', '2019-09-24 07:42:27'),
(174, 52, '8630', 'Dispatched', 'Cash on dilvery', '2019-09-24 09:31:21'),
(175, 52, '16380', 'Order Placed', 'Cash on dilvery', '2019-09-24 18:32:00'),
(176, 52, '22910', 'Order Placed', 'Cash on dilvery', '2019-09-24 19:36:41');

-- --------------------------------------------------------

--
-- Table structure for table `ordertracking`
--

DROP TABLE IF EXISTS `ordertracking`;
CREATE TABLE IF NOT EXISTS `ordertracking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertracking`
--

INSERT INTO `ordertracking` (`id`, `orderid`, `status`, `timestamp`, `message`) VALUES
(1, 69, 'Cancelled', '2019-08-30 03:05:58', ' d'),
(2, 66, 'Cancelled', '2019-08-30 14:20:40', ' mistake\r\n'),
(3, 73, 'Cancelled', '2019-08-31 23:48:59', ' empty order'),
(4, 73, 'In Progress', '2019-09-01 00:01:30', ' '),
(5, 73, '', '2019-09-01 00:02:09', ' '),
(6, 74, 'Dispatched', '2019-09-01 00:05:14', ' '),
(7, 73, 'Dispatched', '2019-09-01 00:05:22', ' '),
(8, 72, 'Delivered', '2019-09-01 00:08:33', ' '),
(9, 73, 'Cancelled', '2019-09-01 00:24:12', ' i dont wont now'),
(10, 61, 'Delivered', '2019-09-01 00:36:43', ' '),
(11, 71, 'Delivered', '2019-09-01 00:37:07', ' '),
(12, 75, 'In Progress', '2019-09-01 22:32:06', ' '),
(13, 68, 'In Progress', '2019-09-01 22:35:37', ' '),
(14, 70, 'Dispatched', '2019-09-01 23:28:45', ' '),
(15, 67, 'In Progress', '2019-09-02 14:52:47', ' '),
(16, 65, 'Delivered', '2019-09-02 14:53:07', ' '),
(17, 62, 'In Progress', '2019-09-02 15:14:06', ' '),
(18, 62, 'Delivered', '2019-09-02 15:14:30', ' '),
(19, 64, 'In Progress', '2019-09-02 18:55:27', '019-08-27 12:03:35	Order Placed	code	INR 9890'),
(20, 76, 'Dispatched', '2019-09-03 02:43:39', 'dsa'),
(21, 76, 'Dispatched', '2019-09-03 02:45:00', 'dasdas'),
(22, 76, 'In Progress', '2019-09-03 02:45:16', 'dasdasd'),
(23, 76, 'Delivered', '2019-09-03 02:46:10', 'your dasfa'),
(24, 76, 'Dispatched', '2019-09-03 02:49:28', 'dddddd'),
(25, 76, 'In Dispatched', '2019-09-03 03:33:08', 'dsadsa'),
(26, 76, 'Delivered', '2019-09-03 03:36:17', 'dsadas'),
(27, 76, 'In Progress', '2019-09-03 03:37:53', 'yunytn'),
(28, 76, 'Delivered', '2019-09-03 03:39:58', 'ss'),
(29, 76, 'Delivered', '2019-09-03 03:40:21', 'dsad'),
(30, 76, 'Delivered', '2019-09-03 03:45:59', 'rdydr'),
(31, 84, 'Delivered', '2019-09-03 03:46:53', '6765'),
(32, 88, 'Delivered', '2019-09-04 01:16:48', 'thoge magula de'),
(33, 88, 'In Progress', '2019-09-04 01:18:14', 'huuuuuuu'),
(34, 89, 'Dispatched', '2019-09-04 01:32:06', 'ddddddddddd'),
(35, 87, 'In Progress', '2019-09-04 19:01:13', 'sad'),
(36, 100, 'Delivered', '2019-09-05 23:08:08', ''),
(37, 102, 'Delivered', '2019-09-07 08:15:25', ''),
(38, 71, 'Cancelled', '2019-09-07 21:10:00', ' '),
(39, 104, 'In Progress', '2019-09-13 15:07:29', ''),
(40, 106, 'Dispatched', '2019-09-13 15:07:47', ''),
(41, 106, 'Delivered', '2019-09-13 15:08:12', ''),
(42, 106, 'In Progress', '2019-09-13 15:11:07', 'ffffffffffffffffff'),
(43, 105, 'Dispatched', '2019-09-13 15:11:28', ''),
(44, 105, 'Delivered', '2019-09-13 15:11:44', ''),
(45, 104, 'Dispatched', '2019-09-13 15:19:22', ''),
(46, 104, 'Delivered', '2019-09-13 15:19:57', ''),
(47, 110, 'In Progress', '2019-09-13 17:57:13', 'your  order is in progres'),
(48, 110, 'Delivered', '2019-09-13 17:57:54', ''),
(49, 114, 'In Progress', '2019-09-14 00:14:06', 'toge order eka hambuna'),
(50, 114, 'In Progress', '2019-09-14 00:14:11', 'toge order eka hambuna'),
(51, 114, 'In Progress', '2019-09-14 00:14:16', 'toge order eka hambuna'),
(52, 115, 'Dispatched', '2019-09-19 12:55:34', 'daads'),
(53, 116, 'In Progress', '2019-09-22 16:38:23', ''),
(54, 115, '', '2019-09-22 18:19:10', 'aa'),
(55, 112, 'Dispatched', '2019-09-22 18:20:17', 'sdsd'),
(56, 113, 'Dispatched', '2019-09-22 18:20:28', ''),
(57, 113, 'Dispatched', '2019-09-22 18:29:49', ''),
(58, 110, 'In Progress', '2019-09-22 18:32:31', ''),
(59, 113, 'Dispatched', '2019-09-22 18:41:04', ''),
(60, 113, '', '2019-09-22 18:41:57', ''),
(61, 113, '', '2019-09-22 18:42:57', ''),
(62, 111, 'Dispatched', '2019-09-22 19:01:02', 'qwqweq'),
(63, 110, 'Cancelled', '2019-09-22 20:52:05', ' '),
(64, 163, 'Cancelled', '2019-09-24 02:33:39', ' dont want this'),
(65, 164, 'Cancelled', '2019-09-24 02:35:33', ' sw'),
(66, 174, 'Dispatched', '2019-09-24 09:39:03', 'gaa'),
(67, 173, 'Cancelled', '2019-09-24 18:34:16', ' cc');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `thumbneil` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `qty` int(11) NOT NULL,
  `sellqty` int(11) NOT NULL DEFAULT '0',
  `size` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `categoryid`, `price`, `thumbneil`, `description`, `qty`, `sellqty`, `size`) VALUES
(1, 'BKG-001', 50, '850', 'upload/2.png', 'Bimak Limited Elephant Collection', 0, 10, 'Small'),
(3, 'BKG-003', 50, '780', 'upload/2.png', 'Black Elephant collection', 0, 28, 'Large'),
(4, 'BKL-101', 51, '790', 'upload/5.png', 'Modern Art Collection', 0, 36, 'Small'),
(5, 'BKL-102', 51, '750', 'upload/4.png', 'Elephant Raw Collection', 34, 3, 'Medium'),
(6, 'BKL-022', 51, '750', 'upload/3.png', 'Bimak colorful flower', 32, 1, 'Large'),
(7, 'BKL-023', 51, '750', 'upload/1.png', 'Unique Bird Art ASH', 10, 0, 'Small'),
(10, 'item 1', 51, '1000', 'upload/DSC_1169.jpg', 'desc', 100, 0, 'Small');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `review` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cphoto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `pid`, `uid`, `review`, `timestamp`, `cphoto`) VALUES
(57, 4, 52, 'woow', '2019-09-24 19:37:23', 'images/customer/chamod.jpg'),
(56, 5, 52, 'nice product', '2019-09-24 10:06:05', 'images/customer/chamod.jpg'),
(55, 1, 52, 'good product', '2019-09-24 07:39:56', 'images/customer/chamod.jpg'),
(54, 57, 38, 'WOW GOOD', '2019-09-24 04:57:46', 'images/customer/DSC_1187.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `salamount`
--

DROP TABLE IF EXISTS `salamount`;
CREATE TABLE IF NOT EXISTS `salamount` (
  `aID` int(11) NOT NULL AUTO_INCREMENT,
  `empType` varchar(100) NOT NULL,
  `basic` double NOT NULL,
  PRIMARY KEY (`aID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salamount`
--

INSERT INTO `salamount` (`aID`, `empType`, `basic`) VALUES
(1, 'Driver', 28000),
(2, 'Order Handler', 25000),
(3, 'Cashier', 20000),
(4, 'Workers', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
CREATE TABLE IF NOT EXISTS `salary` (
  `sal_id` int(11) NOT NULL AUTO_INCREMENT,
  `empID` int(11) NOT NULL,
  `basic` double NOT NULL,
  `bonus` double NOT NULL,
  `bonusType` varchar(100) NOT NULL,
  `deduction` double NOT NULL,
  `deductionType` varchar(100) NOT NULL,
  `total` double NOT NULL,
  `sdate` varchar(100) NOT NULL,
  PRIMARY KEY (`sal_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`sal_id`, `empID`, `basic`, `bonus`, `bonusType`, `deduction`, `deductionType`, `total`, `sdate`) VALUES
(1, 3, 28000, 600, 'newYear', 100, 'loan', 28500, '2019-09-09'),
(5, 8, 25000, 5000, 'yearEnd', 2000, 'loan', 28000, '2019-09-10'),
(4, 1, 28000, 5000, 'newYear', 1000, 'loan', 32000, '2019-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `sell_item`
--

DROP TABLE IF EXISTS `sell_item`;
CREATE TABLE IF NOT EXISTS `sell_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemname` varchar(255) NOT NULL,
  `itemqty` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timestemp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `cphoto` varchar(255) NOT NULL DEFAULT 'images/customer/default.png',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `timestemp`, `lastname`, `firstname`, `telephone`, `cphoto`) VALUES
(43, 'damsiri.dilanjan@gmail.com', '$2y$10$56BQRoN/o7d91DY0Vu./Fu5q9/DiCCKz.Gn6IQW/kj7855xMNAmbu', '2019-09-24 06:35:36', 'Dilanjan', 'Damsiri', '0770885712', 'images/customer/default.png'),
(44, 'pasindu@gmail.com', '$2y$10$SJZ3IzDRiilggUBMCi9YtO7jD2i2bQxIdtjyatzVlNgGVhIH4NOsG', '2019-09-24 06:37:32', 'Nawodya', 'Pasindu', '0774561238', 'images/customer/default.png'),
(45, 'thiwanka@gmail.com', '$2y$10$TWGzAf1vGxQamV16sTYv8OqDQRaPfE/alFfPWZ95M405vjkclACBS', '2019-09-24 06:38:16', 'Thiwanka', 'Tharindu', '0771472583', 'images/customer/default.png'),
(47, 'madhawa@gmail.com', '$2y$10$W2bBngiEFcbsRE7CE3aGbuZfbBPddzS8Y3BWfwnPvprt3GEQ1syVu', '2019-09-24 06:39:46', 'Oshan', 'Madhawa', '0711237895', 'images/customer/default.png'),
(48, 'isuru@gmail.com', '$2y$10$Zeth1WAfq5jf8MSfYxZnVeWgS6F35VtxkFS1duiGDINBe9O.qNEvK', '2019-09-24 06:40:32', 'Sathsara', 'Isuru', '0778529634', 'images/customer/default.png'),
(49, 'ashen@gmail.com', '$2y$10$hOfZebX91zTMAIprcq1te.ECyWS/s.0ShSGPn6NatAnLgJ2q/EjzO', '2019-09-24 06:41:21', 'Kavinda', 'Ashen', '0784561239', 'images/customer/default.png'),
(50, 'kamal@gmail.com', '$2y$10$rwmn/pQtGzYfUf8dd08vH.1kVfis1EEZmeuJ8jdhQNnia8S9DwBDS', '2019-09-24 06:42:00', 'Hasitha', 'Kamal', '0775412368', 'images/customer/default.png'),
(51, 'dasun@gmail.com', '$2y$10$FJ1ZFtnanW8lq9QTY8kfGe9jao4Tt9Nm3eZtWuEIHtCXrzzQnSE5K', '2019-09-24 06:42:40', 'Ekanayaka', 'Dasun', '0775214368', 'images/customer/default.png'),
(52, 'chamodcdilshan@gmail.com', '$2y$10$M1cmhxZyJwdLw9QEvDG4Xu3pbJNveGtTcz7MRBWR9YbzajsASpjmC', '2019-09-24 07:36:31', 'dilshan', 'chamod', '0715577568', 'images/customer/chamod.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usersmeta`
--

DROP TABLE IF EXISTS `usersmeta`;
CREATE TABLE IF NOT EXISTS `usersmeta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `usertotal` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersmeta`
--

INSERT INTO `usersmeta` (`id`, `uid`, `firstname`, `lastname`, `company`, `address1`, `address2`, `city`, `state`, `country`, `zip`, `mobile`, `usertotal`) VALUES
(14, 36, 'dilsnjan', 'damsiri', 'sliit', '231', '3213', '3123', '3123', '', '12321', '12312', 12),
(12, 34, 'cj', 'aa', 'aaa', 'aaa', 'aaa', 'aa', 'aa', '', '232', '324', 32696),
(13, 35, 'tao', 'mihiranga', 'sliit', '31/3 narammala road', 'bla baal', 'narammala', 'nw', '', '3424', '3121212490184', 54345),
(11, 33, 'chamod ', 'dilshan', 'sliit', '52/2 Narammala road,', 'Alawwa', 'alawwa', 'ad', '', '3123', '65213', 12162),
(15, 38, 'DSD', 'SDASDSAD', 'DASD', 'DSAD', 'DASDA', 'DASD', 'SDAD', '', '', '3123123', 0),
(16, 52, 'chamod', 'dilshan', 'sliit', '53/kurunegalaff', 'dad', 'alawwa', '231', '', '312312', '0715577567', 79720);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
CREATE TABLE IF NOT EXISTS `vehicle` (
  `vreg_no` varchar(50) NOT NULL,
  `v_type` varchar(50) NOT NULL,
  `vdesc` varchar(50) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  PRIMARY KEY (`vehicle_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vreg_no`, `v_type`, `vdesc`, `vehicle_id`) VALUES
('123abc', 'Van', 'null', 1),
('456cv', 'Motor Bike', 'null', 2),
('sdf123', 'Van', 'null', 3),
('xyz456', 'Motor Bike', 'null', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
