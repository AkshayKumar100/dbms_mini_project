-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jan 07, 2021 at 03:51 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecourts`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `mycases` ()  SELECT * FROM case_ ORDER BY CASE_ID DESC$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `advocate`
--

CREATE TABLE `advocate` (
  `ADV_ID` varchar(20) NOT NULL,
  `ADV_NAME` varchar(20) DEFAULT NULL,
  `EMAIL_ID` varchar(20) DEFAULT NULL,
  `CONTACT_NO` varchar(20) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `WORK_PROFILE` int(3) DEFAULT NULL,
  `STREET` varchar(20) DEFAULT NULL,
  `PINCODE` int(10) DEFAULT NULL,
  `CITY` varchar(30) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advocate`
--

INSERT INTO `advocate` (`ADV_ID`, `ADV_NAME`, `EMAIL_ID`, `CONTACT_NO`, `DOB`, `WORK_PROFILE`, `STREET`, `PINCODE`, `CITY`, `password`) VALUES
('9999', 'Prajwal K V', 'kvp.18.beis@acharya.', '9448189904', '2000-07-21', 3, 'TAPCMS, SVT road, ko', 577126, 'Koppa', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `case_`
--

CREATE TABLE `case_` (
  `CASE_ID` varchar(10) NOT NULL,
  `CASE_TYPE` varchar(20) DEFAULT NULL,
  `CASE_DETAILS` varchar(20) DEFAULT NULL,
  `LAST_HEARING_DATE` date DEFAULT NULL,
  `NEXT_HEARING_DATE` date DEFAULT NULL,
  `CLIENT_ID` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `case_`
--

INSERT INTO `case_` (`CASE_ID`, `CASE_TYPE`, `CASE_DETAILS`, `LAST_HEARING_DATE`, `NEXT_HEARING_DATE`, `CLIENT_ID`) VALUES
('101', 'crime', 'asdf', '2001-07-21', '2002-07-21', '007');

--
-- Triggers `case_`
--
DELIMITER $$
CREATE TRIGGER `case_added` AFTER INSERT ON `case_` FOR EACH ROW INSERT INTO logs VALUES(
    null, new.case_id,"Added",now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `CLIENT_ID` varchar(10) NOT NULL,
  `CLIENT_NAME` varchar(20) DEFAULT NULL,
  `CLIENT_ADDRESS` varchar(20) DEFAULT NULL,
  `CONTACT_NO` int(10) DEFAULT NULL,
  `CASE_ID` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `junior_adv`
--

CREATE TABLE `junior_adv` (
  `Jr_name` varchar(20) DEFAULT NULL,
  `Jr_type` varchar(20) DEFAULT NULL,
  `Jr_contact` varchar(20) DEFAULT NULL,
  `Jr_experience` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `junior_adv`
--

INSERT INTO `junior_adv` (`Jr_name`, `Jr_type`, `Jr_contact`, `Jr_experience`) VALUES
('Prajwal K V ', 'asd', '9972743100', '1'),
('Revanth', 'asd', '8951800125', '2');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `case_id` varchar(10) NOT NULL,
  `action` varchar(20) NOT NULL,
  `c_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PAYMENT_ID` varchar(10) NOT NULL,
  `CASE_ID` varchar(10) DEFAULT NULL,
  `DATE_OF_PAYMENT` date DEFAULT NULL,
  `CLIENT_ID` varchar(10) DEFAULT NULL,
  `STATUS` varchar(10) DEFAULT NULL,
  `Amount` int(7) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PAYMENT_ID`, `CASE_ID`, `DATE_OF_PAYMENT`, `CLIENT_ID`, `STATUS`, `Amount`) VALUES
('01', '101', '2020-12-26', '9945', NULL, 1040),
('02', '101', '2021-01-02', '2', NULL, 123456);

-- --------------------------------------------------------

--
-- Table structure for table `sign_upcli`
--

CREATE TABLE `sign_upcli` (
  `user_id` varchar(20) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password123` varchar(20) DEFAULT NULL,
  `repeat_password` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_upcli`
--

INSERT INTO `sign_upcli` (`user_id`, `email`, `password123`, `repeat_password`) VALUES
('007', '007@gmail.com', '00000000', '00000000'),
('1234', '1234@gmail.com', '1234', '1234'),
('prajwal123', 'prajwalkv2000@gmail.', '1234', '1234'),
('prajwal1234', 'kvp.18.beis@acharya.', '1234', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advocate`
--
ALTER TABLE `advocate`
  ADD PRIMARY KEY (`ADV_ID`);

--
-- Indexes for table `case_`
--
ALTER TABLE `case_`
  ADD PRIMARY KEY (`CASE_ID`),
  ADD KEY `CLIENT_ID` (`CLIENT_ID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`CLIENT_ID`),
  ADD KEY `CASE_ID` (`CASE_ID`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PAYMENT_ID`);

--
-- Indexes for table `sign_upcli`
--
ALTER TABLE `sign_upcli`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
