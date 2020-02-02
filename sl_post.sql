-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 08:13 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sl_post`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(20) NOT NULL,
  `admin_name` varchar(40) NOT NULL,
  `admin_pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_pwd`) VALUES
('slpostu0001', 'ishaniw', 'slpost123');

-- --------------------------------------------------------

--
-- Table structure for table `officerdetail`
--

CREATE TABLE `officerdetail` (
  `officer_id` varchar(20) NOT NULL,
  `officer_first_name` varchar(20) NOT NULL,
  `officer_last_name` varchar(20) NOT NULL,
  `officer_nic` varchar(10) NOT NULL,
  `officer_dob` int(20) NOT NULL,
  `officer_addr` varchar(50) NOT NULL,
  `officer_tel` int(10) NOT NULL,
  `officer_email` varchar(30) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `officer_branch` varchar(20) NOT NULL,
  `officer_type` varchar(20) NOT NULL,
  `officer_uname` varchar(20) NOT NULL,
  `officer_pwd` varchar(20) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officerdetail`
--

INSERT INTO `officerdetail` (`officer_id`, `officer_first_name`, `officer_last_name`, `officer_nic`, `officer_dob`, `officer_addr`, `officer_tel`, `officer_email`, `designation`, `officer_branch`, `officer_type`, `officer_uname`, `officer_pwd`, `reg_date`) VALUES
('slemp0001', 'Upul', 'Waduge', '687636523V', 0, 'Bulugahapitiya, Eheliyagoda', 763654212, '', 'Officer', '', '', 'upulw', 'upul123', '2016-02-12'),
('slemp0002', 'Sahan', 'Wijesinghe', '967219844V', 1996, 'Ganemulla, Gampaha', 765342123, 'sahanw@gmail.com', 'Manager', 'Select', 'Select', 'sahanw', 'slpost123', '2020-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `parceldetail`
--

CREATE TABLE `parceldetail` (
  `parcel_id` varchar(20) NOT NULL,
  `to_addr` varchar(50) NOT NULL,
  `from_addr` varchar(50) NOT NULL,
  `parcel_weight` varchar(4) NOT NULL,
  `sender_name` varchar(20) NOT NULL,
  `sender_nic` varchar(10) NOT NULL,
  `sender_tel` int(10) NOT NULL,
  `initial_po` varchar(20) NOT NULL,
  `destination_po` varchar(20) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `postofficedetail`
--

CREATE TABLE `postofficedetail` (
  `po_id` varchar(20) NOT NULL,
  `po_type` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `head_of_po` varchar(10) NOT NULL,
  `register_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trackingpathdetal`
--

CREATE TABLE `trackingpathdetal` (
  `tracking_id` varchar(20) NOT NULL,
  `parcel_id` varchar(20) NOT NULL,
  `current_po` varchar(30) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `check_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `officerdetail`
--
ALTER TABLE `officerdetail`
  ADD PRIMARY KEY (`officer_id`);

--
-- Indexes for table `parceldetail`
--
ALTER TABLE `parceldetail`
  ADD PRIMARY KEY (`parcel_id`);

--
-- Indexes for table `postofficedetail`
--
ALTER TABLE `postofficedetail`
  ADD PRIMARY KEY (`po_id`);

--
-- Indexes for table `trackingpathdetal`
--
ALTER TABLE `trackingpathdetal`
  ADD PRIMARY KEY (`tracking_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
