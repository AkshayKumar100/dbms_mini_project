-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 26, 2018 at 11:18 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecourts`
--

-- --------------------------------------------------------

--
-- Table structure for table `advocate`
--

DROP TABLE IF EXISTS `advocate`;
CREATE TABLE IF NOT EXISTS `advocate` (
  `ADV_ID` varchar(20) NOT NULL,
  `ADV_NAME` varchar(20) DEFAULT NULL,
  `EMAIL_ID` varchar(20) DEFAULT NULL,
  `CONTACT_NO` varchar(20) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `WORK_PROFILE` int(3) DEFAULT NULL,
  `STREET` varchar(20) DEFAULT NULL,
  `PINCODE` int(10) DEFAULT NULL,
  `CITY` varchar(30) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ADV_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `case_`
--

DROP TABLE IF EXISTS `case_`;
CREATE TABLE IF NOT EXISTS `case_` (
  `CASE_ID` varchar(10) NOT NULL,
  `CASE_TYPE` varchar(20) DEFAULT NULL,
  `CASE_DETAILS` varchar(20) DEFAULT NULL,
  `LAST_HEARING_DATE` date DEFAULT NULL,
  `NEXT_HEARING_DATE` date DEFAULT NULL,
  `CLIENT_ID` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`CASE_ID`),
  KEY `CLIENT_ID` (`CLIENT_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `CLIENT_ID` varchar(10) NOT NULL,
  `CLIENT_NAME` varchar(20) DEFAULT NULL,
  `CLIENT_ADDRESS` varchar(20) DEFAULT NULL,
  `CONTACT_NO` int(10) DEFAULT NULL,
  `CASE_ID` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`CLIENT_ID`),
  KEY `CASE_ID` (`CASE_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `junior_adv`
--

DROP TABLE IF EXISTS `junior_adv`;
CREATE TABLE IF NOT EXISTS `junior_adv` (
  `Jr_name` varchar(20) DEFAULT NULL,
  `Jr_type` varchar(20) DEFAULT NULL,
  `Jr_contact` varchar(20) DEFAULT NULL,
  `Jr_experience` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `PAYMENT_ID` varchar(10) NOT NULL,
  `CASE_ID` varchar(10) DEFAULT NULL,
  `DATE_OF_PAYMENT` date DEFAULT NULL,
  `CLIENT_ID` varchar(10) DEFAULT NULL,
  `STATUS` varchar(10) DEFAULT NULL,
  `Amount` int(7) DEFAULT NULL,
  PRIMARY KEY (`PAYMENT_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sign_upcli`
--

DROP TABLE IF EXISTS `sign_upcli`;
CREATE TABLE IF NOT EXISTS `sign_upcli` (
  `user_id` varchar(20) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password123` varchar(20) DEFAULT NULL,
  `repeat_password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
