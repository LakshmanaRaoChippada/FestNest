-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 20, 2022 at 07:24 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `festnest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(1) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_pass`, `admin_username`) VALUES
(1, 'admin', 'admin_321!@', 'Fest Nest');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `events_id` int(11) NOT NULL AUTO_INCREMENT,
  `events_name` varchar(255) NOT NULL,
  `events_info` text NOT NULL,
  `events_image` varchar(255) NOT NULL,
  `events_video` varchar(255) DEFAULT NULL,
  `events_price` int(11) NOT NULL,
  `events_status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`events_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `orders_id` int(11) NOT NULL AUTO_INCREMENT,
  `orders_name` varchar(255) NOT NULL,
  `orders_student` varchar(255) NOT NULL,
  `orders_txnno` varchar(255) NOT NULL,
  `orders_price` int(11) NOT NULL,
  `orders_image` varchar(255) NOT NULL,
  `orders_type` varchar(255) NOT NULL,
  `orders_status` int(1) NOT NULL DEFAULT '1',
  `orders_approve` int(1) NOT NULL DEFAULT '0',
  `orders_stuid` varchar(255) NOT NULL,
  PRIMARY KEY (`orders_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_email` varchar(255) NOT NULL,
  `student_pass` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_college` varchar(255) NOT NULL,
  `student_phone` varchar(255) NOT NULL,
  `student_status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

DROP TABLE IF EXISTS `workshop`;
CREATE TABLE IF NOT EXISTS `workshop` (
  `workshop_id` int(11) NOT NULL AUTO_INCREMENT,
  `workshop_name` varchar(255) NOT NULL,
  `workshop_info` text NOT NULL,
  `workshop_image` varchar(255) NOT NULL,
  `workshop_video` varchar(255) DEFAULT NULL,
  `workshop_price` int(11) NOT NULL,
  `workshop_status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`workshop_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
