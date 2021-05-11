-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2017 at 06:18 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `dep_id` varchar(20) DEFAULT NULL,
  `dep_name` varchar(20) DEFAULT NULL,
  `dep_tiime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `dep_name`, `dep_tiime`) VALUES
('123456', 'CSE', '2017-04-01 23:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `file_id` varchar(20) DEFAULT NULL,
  `file_name` varchar(20) DEFAULT NULL,
  `department` varchar(20) DEFAULT NULL,
  `dispatch_stat` tinyint(1) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`file_id`, `file_name`, `department`, `dispatch_stat`, `date_time`) VALUES
('test', 'testing', 'CSE', 0, '2017-04-02 00:08:48'),
('test', 'testing', 'CSE', 0, '2017-04-02 00:10:37');

-- --------------------------------------------------------

--
-- Table structure for table `file_transaction`
--

CREATE TABLE IF NOT EXISTS `file_transaction` (
  `login_id` varchar(20) DEFAULT NULL,
  `file_id` varchar(20) DEFAULT NULL,
  `send_dep_name_from` varchar(20) DEFAULT NULL,
  `send_dep_name_to` varchar(20) DEFAULT NULL,
  `remark` varchar(20) DEFAULT NULL,
  `dispatch_status` varchar(20) DEFAULT NULL,
  `received` varchar(20) DEFAULT NULL,
  `current_location` varchar(20) DEFAULT NULL,
  `file_status` varchar(20) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` varchar(20) DEFAULT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `department_name` varchar(20) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `department_name`, `date_time`) VALUES
('ankur123', 'ankur', 'ankur', 'CSE', '2017-04-02 00:03:09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
