-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 04, 2019 at 12:14 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slpost`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `Emp_id` varchar(20) NOT NULL,
  `Emp_name` varchar(30) NOT NULL,
  `Emp_nic` int(10) NOT NULL,
  `Emp_contact_no` int(10) NOT NULL,
  `Emp_address` varchar(100) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `Emp_user_name` varchar(20) NOT NULL,
  `Emp_password` varchar(20) NOT NULL,
  `Emp_email` varchar(30) NOT NULL,
  PRIMARY KEY (`Emp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_id`, `Emp_name`, `Emp_nic`, `Emp_contact_no`, `Emp_address`, `Designation`, `Branch`, `Emp_user_name`, `Emp_password`, `Emp_email`) VALUES
('PO01', 'ishani', 764532643, 23456789, 'Eheliyagoda', 'Officer', 'Eheliyagoda', 'ishi', '123', 'ishi@slpost.lk');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

DROP TABLE IF EXISTS `package`;
CREATE TABLE IF NOT EXISTS `package` (
  `package_No` int(20) NOT NULL AUTO_INCREMENT,
  `Sender_name` varchar(30) NOT NULL,
  `Sender_nic` varchar(10) NOT NULL,
  `Sender_contact_no` int(10) NOT NULL,
  `Sender_address` varchar(100) NOT NULL,
  `Receiver_address` varchar(100) NOT NULL,
  `Initial_PO` varchar(20) NOT NULL,
  `Destination_PO` varchar(20) NOT NULL,
  `Current_PO` varchar(20) NOT NULL,
  `Package_weight` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Package_code` varchar(50) NOT NULL,
  PRIMARY KEY (`package_No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_office`
--

DROP TABLE IF EXISTS `post_office`;
CREATE TABLE IF NOT EXISTS `post_office` (
  `PO_id` varchar(20) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `PO_Address` varchar(50) NOT NULL,
  `PO_Head_Id` varchar(20) NOT NULL,
  `Head_name` varchar(50) NOT NULL,
  `PO_Head_Address` varchar(100) NOT NULL,
  `PO_Head_Contact_no` varchar(10) NOT NULL,
  `PO_Head_Email` varchar(20) NOT NULL,
  `PO_Head_Uname` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`PO_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_office`
--

INSERT INTO `post_office` (`PO_id`, `Branch`, `PO_Address`, `PO_Head_Id`, `Head_name`, `PO_Head_Address`, `PO_Head_Contact_no`, `PO_Head_Email`, `PO_Head_Uname`, `password`) VALUES
('agfgda', 'aaa@fg.ghj', '', '', 'asd', '0', '0', '0', '0', 'asd'),
('PO1', 'Eheliyagoda', 'Eheliyagoda', 'POH1', 'Sanjula', 'Mahingoda', '1234567897', 'sanju@slpost.lk', 'sanju', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

insert into package VALUES ('p01','Anil','942680380V',94713213140,'S-Address','R-Address','Makola','Galle','Ambalangoda','220g','date','pcode');
