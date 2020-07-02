-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2019 at 03:01 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_myportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ActiveStatus` int(11) DEFAULT NULL,
  `ThemeID` int(11) DEFAULT NULL,
  `DateCreated` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `Username`, `Password`, `Type`, `ActiveStatus`, `ThemeID`, `DateCreated`) VALUES
(1, '100030', 'c4efd5020cb49b9d3257ffa0fbccc0ae', 'E', 1, 1, NULL),
(2, '100022', 'c4efd5020cb49b9d3257ffa0fbccc0ae', 'S', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `account_level`
--

CREATE TABLE `account_level` (
  `AccLevelID` int(11) NOT NULL,
  `AccLevelName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_level`
--

INSERT INTO `account_level` (`AccLevelID`, `AccLevelName`) VALUES
(1, 'Administrator'),
(2, 'Manager'),
(3, 'Supervisor'),
(4, 'Encoder');

-- --------------------------------------------------------

--
-- Table structure for table `account_logs`
--

CREATE TABLE `account_logs` (
  `ID` int(11) NOT NULL,
  `AccountUsername` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `IpAddress` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Device` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Browser` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `BrowserVersion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `OperatingSystem` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateLogs` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account_logs`
--

INSERT INTO `account_logs` (`ID`, `AccountUsername`, `IpAddress`, `Device`, `Browser`, `BrowserVersion`, `OperatingSystem`, `DateLogs`) VALUES
(4, 'ADM_0001', '10.10.10.123', 'PC', 'Chrome', '58.0.3029.110', 'Windows 7', '2017-05-17 02:22:21'),
(3, 'ADM_0001', '10.10.10.123', 'PC', 'Chrome', '58.0.3029.110', 'Windows 7', '2017-05-17 02:21:28'),
(5, 'ADM_0001', '10.10.10.123', 'PC', 'Internet Explorer', '11.0', 'Windows 7', '2017-05-17 02:22:31'),
(6, 'ADM_0001', '10.10.10.123', 'PC', 'Chrome', '58.0.3029.110', 'Windows 7', '2017-05-18 01:13:39'),
(7, 'ADM_0001', '10.10.10.123', 'PC', 'Chrome', '58.0.3029.110', 'Windows 7', '2017-05-17 17:02:31'),
(8, 'ADM_0001', '10.10.10.123', 'PC', 'Chrome', '58.0.3029.110', 'Windows 7', '2017-05-19 01:23:49'),
(9, 'ADM_0001', '10.10.10.123', 'PC', 'Chrome', '58.0.3029.110', 'Windows 7', '2017-05-21 17:38:14'),
(10, 'ADM_0001', '10.10.10.123', 'PC', 'Chrome', '58.0.3029.110', 'Windows 7', '2017-05-23 17:12:43'),
(11, 'ADM_0001', '10.10.10.191', 'PC', 'Chrome', '58.0.3029.110', 'Windows 7', '2017-05-25 01:45:33'),
(12, 'ADM_0001', '10.10.10.123', 'PC', 'Chrome', '58.0.3029.110', 'Windows 7', '2017-05-25 03:02:17'),
(13, 'ADM_0001', '10.10.10.123', 'PC', 'Chrome', '58.0.3029.110', 'Windows 7', '2017-05-24 19:03:31'),
(14, 'ADM_0001', '10.10.10.123', 'PC', 'Chrome', '58.0.3029.110', 'Windows 7', '2017-05-26 03:11:23'),
(15, 'ADM_0001', '10.10.10.123', 'PC', 'Chrome', '58.0.3029.110', 'Windows 7', '2017-05-28 17:07:51'),
(16, 'ADM_0001', '10.10.10.123', 'PC', 'Chrome', '58.0.3029.110', 'Windows 7', '2017-05-28 20:39:17'),
(17, 'ADM_0001', '10.10.10.123', 'PC', 'Chrome', '59.0.3071.115', 'Windows 10', '2017-07-19 18:50:37'),
(18, 'ADM_0001', '10.10.10.123', 'PC', 'Chrome', '59.0.3071.115', 'Windows 10', '2017-07-19 19:50:53'),
(19, 'ADM_0001', '10.10.10.123', 'PC', 'Chrome', '59.0.3071.115', 'Windows 10', '2017-07-19 21:18:39'),
(20, 'ADM_0001', '10.10.10.123', 'PC', 'Chrome', '59.0.3071.115', 'Windows 10', '2017-07-21 01:16:40'),
(21, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '59.0.3071.115', 'Windows 10', '2017-07-21 03:17:17'),
(22, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '59.0.3071.115', 'Windows 10', '2017-07-20 18:09:40'),
(23, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '59.0.3071.115', 'Windows 10', '2017-07-24 01:20:27'),
(24, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '59.0.3071.115', 'Windows 10', '2017-07-23 20:17:20'),
(25, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '59.0.3071.115', 'Windows 10', '2017-07-23 21:46:55'),
(26, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '59.0.3071.115', 'Windows 10', '2017-07-23 21:47:06'),
(27, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '59.0.3071.115', 'Windows 10', '2017-07-25 01:01:02'),
(28, 'ACC_0001', '10.10.10.129', 'PC', 'Chrome', '59.0.3071.115', 'Windows 7', '2017-07-25 03:03:59'),
(29, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '59.0.3071.115', 'Windows 10', '2017-07-26 01:26:44'),
(30, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '59.0.3071.115', 'Windows 10', '2017-07-25 18:33:53'),
(31, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '59.0.3071.115', 'Windows 10', '2017-07-27 01:38:50'),
(32, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '59.0.3071.115', 'Windows 10', '2017-07-26 19:54:53'),
(33, 'ACC_0001', '10.10.10.173', 'PC', 'Chrome', '57.0.2987.133', 'Windows 10', '2017-07-26 19:55:14'),
(34, 'ACC_0002', '10.10.10.103', 'PC', 'Chrome', '56.0.2924.87', 'Windows 7', '2017-07-26 19:58:15'),
(35, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '59.0.3071.115', 'Windows 10', '2017-07-27 20:45:33'),
(36, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '59.0.3071.115', 'Windows 10', '2017-07-31 17:21:50'),
(37, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '59.0.3071.115', 'Windows 10', '2017-08-01 21:18:09'),
(38, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '59.0.3071.115', 'Windows 10', '2017-08-04 03:30:50'),
(39, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '59.0.3071.115', 'Windows 10', '2017-08-08 01:54:31'),
(40, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '59.0.3071.115', 'Windows 10', '2017-08-09 00:46:38'),
(41, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '59.0.3071.115', 'Windows 10', '2017-08-10 02:35:16'),
(42, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.90', 'Windows 10', '2017-08-11 01:17:46'),
(43, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.90', 'Windows 10', '2017-08-14 20:34:49'),
(44, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.90', 'Windows 10', '2017-08-16 02:16:06'),
(45, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.101', 'Windows 10', '2017-08-16 02:35:54'),
(46, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.101', 'Windows 10', '2017-08-17 00:47:47'),
(47, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.101', 'Windows 10', '2017-08-22 01:17:41'),
(48, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.101', 'Windows 10', '2017-08-23 01:11:02'),
(49, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.101', 'Windows 10', '2017-08-22 20:58:28'),
(50, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.101', 'Windows 10', '2017-08-22 21:00:44'),
(51, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.101', 'Windows 10', '2017-08-22 21:03:24'),
(52, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.101', 'Windows 10', '2017-08-22 21:03:45'),
(53, 'ACC_0001', '10.10.10.123', 'PC', 'Firefox', '54.0', 'Windows 10', '2017-08-22 21:37:51'),
(54, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.101', 'Windows 10', '2017-08-24 01:34:33'),
(55, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.101', 'Windows 10', '2017-08-23 21:04:38'),
(56, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.101', 'Windows 10', '2017-08-25 01:26:46'),
(57, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.101', 'Windows 10', '2017-08-25 01:39:26'),
(58, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.101', 'Windows 10', '2017-08-25 01:54:46'),
(59, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.101', 'Windows 10', '2017-08-24 18:34:42'),
(60, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.101', 'Windows 10', '2017-08-24 19:37:24'),
(61, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.101', 'Windows 10', '2017-08-24 19:44:59'),
(62, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.101', 'Windows 10', '2017-08-24 19:47:14'),
(63, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.101', 'Windows 10', '2017-08-24 20:07:11'),
(64, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.101', 'Windows 10', '2017-08-24 20:08:30'),
(65, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.101', 'Windows 10', '2017-08-24 20:10:29'),
(66, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.101', 'Windows 10', '2017-08-24 20:11:05'),
(67, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.101', 'Windows 10', '2017-08-24 20:12:48'),
(68, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-08-29 00:51:22'),
(69, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-08-29 02:09:16'),
(70, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-08-28 19:55:58'),
(71, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-08-28 20:26:23'),
(72, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-08-28 20:36:35'),
(73, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-08-28 20:39:14'),
(74, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-08-30 00:43:50'),
(75, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-08-30 00:44:31'),
(76, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-08-30 00:44:44'),
(77, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-08-30 00:48:06'),
(78, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-08-30 01:04:07'),
(79, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-08-29 17:07:03'),
(80, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-08-29 19:53:07'),
(81, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-08-30 17:16:50'),
(82, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-04 02:46:22'),
(83, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-05 01:04:29'),
(84, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-05 01:04:54'),
(85, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-06 02:10:36'),
(86, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-05 17:33:36'),
(87, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-05 20:05:35'),
(88, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-07 00:50:13'),
(89, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-08 01:30:53'),
(90, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-07 17:39:44'),
(91, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-09 23:37:10'),
(92, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-11 03:53:31'),
(93, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-10 20:11:40'),
(94, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-10 22:13:53'),
(95, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-14 02:13:28'),
(96, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-14 04:56:11'),
(97, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-15 01:07:11'),
(98, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-17 21:02:15'),
(99, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-19 01:06:15'),
(100, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-18 21:18:46'),
(101, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-18 21:26:42'),
(102, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-18 21:30:48'),
(103, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-18 21:33:41'),
(104, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-20 01:01:13'),
(105, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-20 03:43:21'),
(106, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-20 03:49:54'),
(107, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-20 04:59:20'),
(108, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-21 01:09:16'),
(109, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-20 17:00:12'),
(110, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-22 01:30:30'),
(111, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-25 00:53:29'),
(112, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-26 01:09:01'),
(113, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-26 01:18:26'),
(114, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '60.0.3112.113', 'Windows 10', '2017-09-27 01:09:34'),
(115, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-02 01:27:43'),
(116, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-03 01:29:10'),
(117, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-04 01:02:28'),
(118, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-05 01:19:57'),
(119, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-05 03:42:55'),
(120, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-06 00:52:57'),
(121, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-05 17:09:46'),
(122, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-05 17:34:13'),
(123, 'ACC_0001', '10.10.10.123', 'PC', 'Firefox', '55.0', 'Windows 10', '2017-10-05 20:44:21'),
(124, 'ACC_0001', '10.10.10.123', 'PC', 'Firefox', '55.0', 'Windows 10', '2017-10-09 02:28:52'),
(125, 'ACC_0001', '10.10.10.123', 'PC', 'Firefox', '55.0', 'Windows 10', '2017-10-08 17:25:35'),
(126, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-08 17:33:16'),
(127, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-10 01:10:05'),
(128, 'ACC_0001', '10.10.10.123', 'PC', 'Firefox', '55.0', 'Windows 10', '2017-10-10 02:58:28'),
(129, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-09 21:09:58'),
(130, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-11 01:21:13'),
(131, 'ACC_0001', '10.10.10.178', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-10 17:48:16'),
(132, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-12 01:07:08'),
(133, 'ACC_0001', '10.10.10.179', 'PC', 'Internet Explorer', '8.0', 'Windows 7', '2017-10-12 02:35:07'),
(134, 'ACC_0001', '10.10.10.179', 'PC', 'Firefox', '56.0', 'Windows 7', '2017-10-12 02:35:53'),
(135, 'ACC_0001', '10.10.10.179', 'PC', 'Firefox', '56.0', 'Windows 7', '2017-10-12 03:20:25'),
(136, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-11 17:40:28'),
(137, 'ACC_0001', '10.10.10.123', 'PC', 'Firefox', '55.0', 'Windows 10', '2017-10-11 17:49:38'),
(138, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-13 01:09:21'),
(139, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-16 01:07:35'),
(140, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-17 00:57:41'),
(141, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-16 17:10:01'),
(142, 'ACC_0002', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-16 21:26:10'),
(143, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-16 22:05:00'),
(144, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-17 20:06:46'),
(145, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-18 17:04:41'),
(146, 'ACC_0001', '10.10.10.217', 'PC', 'Chrome', '61.0.3163.100', 'Windows 7', '2017-10-18 17:29:21'),
(147, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-20 01:51:58'),
(148, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-24 01:52:11'),
(149, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-25 00:54:06'),
(150, 'ACC_0001', '10.10.10.123', 'PC', 'Firefox', '56.0', 'Windows 10', '2017-10-25 01:10:23'),
(151, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-25 01:17:10'),
(152, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-25 01:19:37'),
(153, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-24 23:41:51'),
(154, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-25 00:31:41'),
(155, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-26 00:54:46'),
(156, 'ACC_0001', '10.10.10.33', 'PC', 'Chrome', '61.0.3163.100', 'Windows 7', '2017-10-26 01:26:31'),
(157, 'ACC_0001', '10.10.10.29', 'PC', 'Chrome', '43.0.2357.124', 'Windows Vista', '2017-10-26 01:27:01'),
(158, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-26 01:56:05'),
(159, 'ACC_0002', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-26 02:33:53'),
(160, 'ACC_0041', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-26 02:42:13'),
(161, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-26 02:59:21'),
(162, 'ACC_0007', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-26 03:00:44'),
(163, 'ACC_0007', '10.10.10.25', 'PC', 'Internet Explorer', '8.0', 'Windows 7', '2017-10-26 03:01:03'),
(164, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-26 03:53:52'),
(165, 'ACC_0007', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-26 03:56:06'),
(166, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-26 04:53:18'),
(167, 'ACC_0001', '10.10.10.123', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-27 02:11:42'),
(168, 'ACC_0001', '10.10.10.58', 'PC', 'Chrome', '59.0.3071.115', 'Windows 7', '2017-10-27 03:19:29'),
(169, 'ACC_0001', '10.10.10.58', 'PC', 'Chrome', '59.0.3071.115', 'Windows 7', '2017-10-26 19:11:48'),
(170, 'ACC_0001', '10.10.10.58', 'PC', 'Chrome', '59.0.3071.115', 'Windows 7', '2017-10-29 23:44:11'),
(171, 'ACC_0002', '10.10.10.103', 'PC', 'Firefox', '56.0', 'Windows 10', '2017-10-29 21:53:29'),
(172, 'ACC_0002', '10.10.10.103', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-29 21:55:24'),
(173, 'ACC_0001', '::1', 'PC', 'Chrome', '61.0.3163.100', 'Windows 10', '2017-10-30 23:59:34'),
(174, 'ACC_0001', '192.168.1.37', 'PC', 'Chrome', '61.0.3163.98', 'Android', '2017-10-31 01:14:35'),
(175, 'ACC_0001', '::1', 'PC', 'Chrome', '69.0.3497.100', 'Windows 10', '2018-10-23 01:13:59'),
(176, 'ACC_0001', '::1', 'PC', 'Chrome', '69.0.3497.100', 'Windows 10', '2018-10-24 22:49:26'),
(177, 'ACC_0001', '::1', 'PC', 'Chrome', '70.0.3538.110', 'Windows 10', '2018-11-28 01:09:31'),
(178, 'ACC_0001', '::1', 'PC', 'Chrome', '70.0.3538.110', 'Windows 10', '2018-12-04 23:09:55'),
(179, 'ACC_0001', '::1', 'PC', 'Chrome', '71.0.3578.98', 'Windows 10', '2018-12-18 01:29:18'),
(180, 'ACC_0001', '::1', 'PC', 'Chrome', '72.0.3626.121', 'Windows 10', '2019-03-15 19:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `account_themes`
--

CREATE TABLE `account_themes` (
  `ThemeID` int(11) NOT NULL,
  `ThemeName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Stylesheet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PrimaryFG` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PrimaryBG` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account_themes`
--

INSERT INTO `account_themes` (`ThemeID`, `ThemeName`, `Description`, `Stylesheet`, `PrimaryFG`, `PrimaryBG`) VALUES
(1, 'BLUE', 'BLUE THEMES', 'site_less_blue.less', '#428bca', '#428bca'),
(2, 'RED', 'RED THEMES', 'site_less_red.less', '#d9534f', '#d9534f'),
(3, 'ORANGE', 'ORANGE THEMES', 'site_less_orange.less', '#f0ad4e', '#f0ad4e'),
(4, 'GREEN', 'GREEN THEMES', 'site_less_green.less', '#5cb85c', '#5cb85c'),
(5, 'LIGHTBLUE', 'LIGHTBLUE THEMES', 'site_less_lightblue.less', '#5bc0de', '#5bc0de'),
(6, 'PINK', 'PINK THEMES', 'site_less_pink.less', '#f26d7e', '#f26d7e'),
(7, 'VIOLET', 'VIOLET THEMES', 'site_less_violet.less', '#643771', '#643771'),
(8, 'MAROON', 'MAROON THEMES', 'site_less_maroon.less', '#9e1847', '#9e1847');

-- --------------------------------------------------------

--
-- Table structure for table `account_type`
--

CREATE TABLE `account_type` (
  `AccountTypeID` int(11) NOT NULL,
  `AccountType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account_type`
--

INSERT INTO `account_type` (`AccountTypeID`, `AccountType`) VALUES
(1, 'SUPER_ADMIN'),
(2, 'ADMINISTRATOR'),
(3, 'EMPLOYEE'),
(4, 'FACULTY'),
(6, 'FACULTY_HEAD'),
(7, 'HR'),
(8, 'IT'),
(9, 'ADMISSION'),
(10, 'REGISTRAR'),
(11, 'GUIDANCE'),
(12, 'STUDENT');

-- --------------------------------------------------------

--
-- Table structure for table `account_user`
--

CREATE TABLE `account_user` (
  `AccountUserID` int(11) NOT NULL,
  `AccountUsername` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AccountTypeID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account_user`
--

INSERT INTO `account_user` (`AccountUserID`, `AccountUsername`, `AccountTypeID`) VALUES
(1, '100030', 1),
(2, '100030', 2),
(3, '100030', 3),
(4, '100030', 4),
(5, '100030', 5),
(6, '100030', 6),
(7, '100030', 7),
(8, '100022', 6);

-- --------------------------------------------------------

--
-- Table structure for table `cat_acad_curriculum`
--

CREATE TABLE `cat_acad_curriculum` (
  `CurriculumID` int(11) NOT NULL,
  `CurriculumName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DepartmentID` int(11) DEFAULT NULL,
  `EducLevelID` int(11) DEFAULT NULL,
  `ActiveStatus` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cat_acad_curriculum`
--

INSERT INTO `cat_acad_curriculum` (`CurriculumID`, `CurriculumName`, `DepartmentID`, `EducLevelID`, `ActiveStatus`) VALUES
(1, 'IT2019', 4, 5, 1),
(2, 'DA2019', 4, 5, 1),
(3, 'BSCE2019', 4, 5, 1),
(4, 'BSECE2019', 4, 5, 1),
(5, 'BSEE2019', 4, 5, 1),
(6, 'BSIE2019', 4, 5, 1),
(8, 'PSYC2019', 2, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cat_acad_curriculum_subject`
--

CREATE TABLE `cat_acad_curriculum_subject` (
  `Curriculum_SubjectID` int(11) NOT NULL,
  `CurriculumID` int(11) DEFAULT NULL,
  `SubjectID` int(11) DEFAULT NULL,
  `YearLevel` int(11) DEFAULT NULL,
  `Semester` int(11) DEFAULT NULL,
  `ForQualifyingExam` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cat_acad_curriculum_subject`
--

INSERT INTO `cat_acad_curriculum_subject` (`Curriculum_SubjectID`, `CurriculumID`, `SubjectID`, `YearLevel`, `Semester`, `ForQualifyingExam`) VALUES
(1, 0, 0, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cat_acad_program`
--

CREATE TABLE `cat_acad_program` (
  `AcaProgramID` int(11) NOT NULL,
  `YearCreated` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AcaProgramCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AcaProgramName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AcaProgramNameDiploma` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ActiveForAdmission` int(11) DEFAULT NULL,
  `ActiveStatus` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cat_acad_program`
--

INSERT INTO `cat_acad_program` (`AcaProgramID`, `YearCreated`, `AcaProgramCode`, `AcaProgramName`, `AcaProgramNameDiploma`, `ActiveForAdmission`, `ActiveStatus`) VALUES
(1, '2019', 'BSIT', 'BS INFORMATION TECHNOLOGY', 'Bachelor of Science in Information Technology', 1, 1),
(2, '2019', 'BSHM', 'BS HOSPITALITY MANAGEMENT', 'Bachelor of Science in Hospitality Management', 1, 1),
(3, '2019', 'BSCE', 'BS CIVIL ENGINEERING', 'Bachelor of Science in Civil Engineering', 1, 1),
(4, '2019', 'BSEE', 'BS ELECTRICAL ENGINEERING', 'Bachelor of Science in Electrical Engineering', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cat_acad_program_curriculum`
--

CREATE TABLE `cat_acad_program_curriculum` (
  `AcaProgramCurriculumID` int(11) NOT NULL,
  `CurriculumID` int(11) DEFAULT NULL,
  `ProgramID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cat_acad_program_curriculum`
--

INSERT INTO `cat_acad_program_curriculum` (`AcaProgramCurriculumID`, `CurriculumID`, `ProgramID`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cat_civil_status`
--

CREATE TABLE `cat_civil_status` (
  `CivilStatusID` int(11) NOT NULL,
  `CivilStatusName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_civil_status`
--

INSERT INTO `cat_civil_status` (`CivilStatusID`, `CivilStatusName`) VALUES
(1, 'SINGLE'),
(2, 'MARRIED'),
(3, 'SEPERATED'),
(4, 'WIDOWED'),
(5, 'DIVORCED');

-- --------------------------------------------------------

--
-- Table structure for table `cat_department`
--

CREATE TABLE `cat_department` (
  `DepartmentID` int(11) NOT NULL,
  `DepartmentAcronym` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DepartmentName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AcademicDept` int(11) DEFAULT NULL,
  `ActiveStatus` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cat_department`
--

INSERT INTO `cat_department` (`DepartmentID`, `DepartmentAcronym`, `DepartmentName`, `AcademicDept`, `ActiveStatus`) VALUES
(1, 'COE', 'COLLEGE OF EDUCATION', 1, 1),
(2, 'CLAS', 'COLLEGE OF LIBERAL ARTS AND SCIENCES', 1, 1),
(3, 'CBAA', 'COLLEGE OF BUSINESS ADMINISTRATION AND ACCOUNTANCY', 1, 1),
(4, 'CEIT', 'COLLEGE OF ENGINEERING AND INFORMATION TECHNOLOGY', 1, 0),
(5, 'HRD', 'HUMAN RESOURCE DEVELOPMENT', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cat_educational_level`
--

CREATE TABLE `cat_educational_level` (
  `EducLevelID` int(11) NOT NULL,
  `EducationalName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DefaultPeriodID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cat_educational_level`
--

INSERT INTO `cat_educational_level` (`EducLevelID`, `EducationalName`, `DefaultPeriodID`) VALUES
(1, 'KINDER', 10000),
(2, 'ELEMENTARY', 20000),
(3, 'JUNIOR HIGH', 30000),
(4, 'SENIOR HIGH', 40000),
(5, 'COLLEGE', 50000),
(6, 'MASTERAL', 60000),
(7, 'DOCTORAL', 70000),
(8, 'REVIEW', 80000);

-- --------------------------------------------------------

--
-- Table structure for table `cat_family_relation`
--

CREATE TABLE `cat_family_relation` (
  `FamilyRelationID` int(11) NOT NULL,
  `Relation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ActiveStatus` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cat_family_relation`
--

INSERT INTO `cat_family_relation` (`FamilyRelationID`, `Relation`, `Gender`, `ActiveStatus`) VALUES
(1, 'GRAND FATHER', 'MALE', 1),
(2, 'GRAND MOTHER', 'FEMALE', 1),
(3, 'FATHER', 'MALE', 1),
(4, 'MOTHER', 'FEMALE', 1),
(5, 'BROTHER', 'MALE', 1),
(6, 'SISTER', 'FEMALE', 1),
(7, 'UNCLE', 'MALE', 1),
(8, 'AUNTIE', 'FEMALE', 1),
(9, 'COUSIN', '', 1),
(10, 'NEPHEW', 'MALE', 1),
(11, 'NIECE', 'FEMALE', 1),
(12, 'HUSBAND', 'MALE', 1),
(13, 'WIFE', 'FEMALE', 1),
(14, 'GRAND FATHER-IN-LAW', 'MALE', 1),
(15, 'GRAND MOTHER-IN-LAW', 'FEMALE', 1),
(16, 'FATHER-IN-LAW', 'MALE', 1),
(17, 'MOTHER-IN-LAW', 'FEMALE', 1),
(18, 'BROTHER-IN-LAW', 'MALE', 1),
(19, 'SISTER-IN-LAW', 'FEMALE', 1),
(20, 'FIANCEE', '', 1),
(21, 'FRIEND', '', 1),
(22, 'GUARDIAN', '', 1),
(23, 'CHILD 1', '', 1),
(24, 'CHILD 2', '', 1),
(25, 'CHILD 3', '', 1),
(26, 'CHILD 4', '', 1),
(27, 'CHILD 5', '', 1),
(30, 'CHILD 6', '', 1),
(31, 'CHILD 7', '', 1),
(28, 'CHILD 8', '', 1),
(29, 'CHILD 9', '', 1),
(32, 'CHILD 10', '', 1),
(33, 'CHILD 11', '', 1),
(34, 'CHILD 12', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cat_room`
--

CREATE TABLE `cat_room` (
  `RoomID` int(11) NOT NULL,
  `RoomName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Building` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Capacity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AirCondition` int(11) DEFAULT NULL,
  `ActiveStatus` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cat_room`
--

INSERT INTO `cat_room` (`RoomID`, `RoomName`, `Building`, `Capacity`, `AirCondition`, `ActiveStatus`) VALUES
(1, 'RM001', 'MAC LAB', '40', 1, 1),
(2, 'RM002', 'COMP LAB', '40', 1, 1),
(3, 'RM003', 'SAMP LAB', '40', 1, 0),
(4, 'RM004', 'TEST LAB', '40', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cat_schedule`
--

CREATE TABLE `cat_schedule` (
  `ScheduleID` int(11) NOT NULL,
  `SubjectID` int(11) DEFAULT NULL,
  `RoomID` int(11) DEFAULT NULL,
  `Days` varchar(255) DEFAULT NULL,
  `StartTime` datetime DEFAULT NULL,
  `EndTIme` datetime DEFAULT NULL,
  `ReserveSlot` int(11) DEFAULT NULL,
  `MaxSlot` int(11) DEFAULT NULL,
  `ScheduleStatusID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cat_schedule_status`
--

CREATE TABLE `cat_schedule_status` (
  `ScheduleStatusID` int(11) NOT NULL,
  `StatusName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_schedule_status`
--

INSERT INTO `cat_schedule_status` (`ScheduleStatusID`, `StatusName`) VALUES
(0, 'CLOSED'),
(1, 'OPEN'),
(3, 'ENCODED'),
(4, 'DISSOLVED');

-- --------------------------------------------------------

--
-- Table structure for table `cat_schedule_student`
--

CREATE TABLE `cat_schedule_student` (
  `Student_ScheduleID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cat_school_year`
--

CREATE TABLE `cat_school_year` (
  `SchoolYearID` int(11) NOT NULL,
  `SchoolYearName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PeriodID` int(11) DEFAULT NULL,
  `PeriodName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EducLevelID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cat_school_year`
--

INSERT INTO `cat_school_year` (`SchoolYearID`, `SchoolYearName`, `PeriodID`, `PeriodName`, `EducLevelID`) VALUES
(1, '1990-1991', 199051, '1st Semester', 5),
(2, '1990-1991', 199052, '2nd Semester', 4),
(3, '1990-1991', 199053, 'Summer', 5),
(4, '1991-1992', 199151, '1st Semester', 5),
(5, '1991-1992', 199152, '2nd Semester', 5),
(6, '1991-1992', 199153, 'Summer', 5),
(7, '1992-1993', 199251, '1st Semester', 5),
(8, '1992-1993', 199252, '2nd Semester', 5),
(9, '1992-1993', 199253, 'Summer', 5),
(10, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cat_section`
--

CREATE TABLE `cat_section` (
  `SectionID` int(11) NOT NULL,
  `SectionName` varchar(255) DEFAULT NULL,
  `CurriculumID` int(11) DEFAULT NULL,
  `PeriodID` int(11) DEFAULT NULL,
  `GradeYear` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_section`
--

INSERT INTO `cat_section` (`SectionID`, `SectionName`, `CurriculumID`, `PeriodID`, `GradeYear`) VALUES
(1, 'IT222', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cat_subject`
--

CREATE TABLE `cat_subject` (
  `SubjectID` int(11) NOT NULL,
  `SubjectCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SubjectName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ActiveStatus` int(11) DEFAULT NULL,
  `Unit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EducLevelID` int(11) DEFAULT NULL,
  `Component_SubjectID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cat_subject`
--

INSERT INTO `cat_subject` (`SubjectID`, `SubjectCode`, `SubjectName`, `ActiveStatus`, `Unit`, `EducLevelID`, `Component_SubjectID`) VALUES
(1, 'IT001', 'System and Design', 1, '3', 5, 0),
(2, 'ENG001', 'ENGLISH', 1, '3', 1, 0),
(3, 'MATH001', 'MATH', 1, '0', 1, 4),
(4, 'EM004', 'TEST LAB', 0, '1.5', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cat_subject_prerequisite`
--

CREATE TABLE `cat_subject_prerequisite` (
  `SubjectPreReqID` int(11) NOT NULL,
  `SubjectID` int(11) DEFAULT NULL,
  `PreReqSubjectID` int(11) DEFAULT NULL,
  `CurriculumID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmployeeID` int(11) NOT NULL,
  `EmployeeNo` int(11) DEFAULT NULL,
  `EmployeeTypeID` int(11) DEFAULT NULL,
  `DepartmentID` int(11) DEFAULT NULL,
  `PositionName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FirstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MiddleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ActiveStatus` int(11) DEFAULT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ProvCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TownCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ZipCode` int(20) DEFAULT NULL,
  `TelephoneNo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ContactNo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CompanyEmailAddress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PersonalEmailAddress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FacebookEmailAddress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BirthDate` date DEFAULT NULL,
  `BirthPlace` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CivilStatus` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Religion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nationality` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BloodType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Height` int(11) DEFAULT NULL,
  `Weight` int(11) DEFAULT NULL,
  `Crn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Tin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sss` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Philhealth` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Pagibig` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateHiredProvisionary` date DEFAULT NULL,
  `DateHiredRegular` date DEFAULT NULL,
  `DateResignedSeperated` date DEFAULT NULL,
  `DateRetirement` date DEFAULT NULL,
  `DateCreated` timestamp NULL DEFAULT NULL,
  `DateModified` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeID`, `EmployeeNo`, `EmployeeTypeID`, `DepartmentID`, `PositionName`, `LastName`, `FirstName`, `MiddleName`, `ActiveStatus`, `Address`, `ProvCode`, `TownCode`, `ZipCode`, `TelephoneNo`, `ContactNo`, `CompanyEmailAddress`, `PersonalEmailAddress`, `FacebookEmailAddress`, `BirthDate`, `BirthPlace`, `CivilStatus`, `Gender`, `Religion`, `Nationality`, `BloodType`, `Height`, `Weight`, `Crn`, `Tin`, `Sss`, `Philhealth`, `Pagibig`, `DateHiredProvisionary`, `DateHiredRegular`, `DateResignedSeperated`, `DateRetirement`, `DateCreated`, `DateModified`) VALUES
(18, 100018, 0, 0, '0', 'QUIAPO', 'RUTH', 'RANARIO', 1, '2111 F. REYES ST. CORNER QUIRINO MALATE', 'METRO MANILA', 'MANILA', 0, '(02) 450-14', '09223302310', 'ruth.quiapo@veritas.com.ph', 'ruth.quiapo@yahoo.com', NULL, '1978-11-06', 'MANDAUE CITY', 'MARRIED', 'FEMALE', 'ROMAN CATHOLIC', 'FILIPINO', 'O', 156, 60, NULL, '212-803-673    ', '06-1643275-8', '190000394504  ', '104000975019   ', '2008-04-28', NULL, '0000-00-00', NULL, '2015-12-31 16:00:00', '2019-03-24 08:55:10'),
(22, 100029, 0, 0, '0', 'PEREZ', 'HON UNIKE', 'GADDI', 1, '1156 JULIO NAKPIL MALATE', 'METRO MANILA', 'MANILA', 0, '', '09354157903', 'honunike.perez@veritas.com.ph', '', NULL, '1992-07-02', 'HAGONOY BULACAN', 'SINGLE', 'FEMALE', 'ROMAN CATHOLIC', 'FILIPINO', 'B+', 152, 46, NULL, '311-100-043', '34-3137564-4', '02-051030136-7', '1211-0251-8543', '2014-01-03', NULL, '0000-00-00', NULL, '2015-12-31 16:00:00', '2019-03-24 08:55:14'),
(23, 100023, 0, 0, '0', 'PEREZ', 'AILEEN MAE', 'LAPADA', 1, '1706-A ANTIPOLO STREET SANTA CRUZ MANILA', 'METRO MANILA', 'MANILA', 0, '493291', '09174214502', 'ailene.perez@veritas.com.ph', 'drezz_16@yahoo.com', NULL, '1986-05-16', 'MANILA', 'MARRIED', 'FEMALE', 'ROMAN CATHOLIC', 'JAPANESE', 'A-', 120, 40, NULL, '262-826-183', '34-0555466-6', '02-050466491-1', '1040-0101-6972', '2008-06-20', NULL, '0000-00-00', NULL, '2015-12-31 16:00:00', '2019-03-24 08:55:12'),
(30, 100030, 1, 3, '0', 'MANGUNE', 'MARK ALVIN', 'MACATANTAN', 1, '1273 MATAAS NA LUPA PACO MANILA', 'METRO MANILA', 'CITY OF MANILA', 10071, '4844590', '09256100908', 'markalvin.mangune@veritas.com.ph', '', NULL, '1989-06-17', 'QUEZON CITY', 'Married', 'Male', 'ROMAN CATHOLIC', '', '', 162, 58, NULL, '411-043-071', '34-2496661-7', '0202-5448-8314', '1211-0255-3925', '2011-07-01', '0000-00-00', '0000-00-00', '0000-00-00', '2015-12-31 16:00:00', '2019-03-24 09:12:47'),
(37, 100037, 1, 2, '0', 'LANUZA', 'MARY JANE', 'LUSANTA', 1, 'LOT 1 BLOCK 50, STARKVILLE SUBD, CARSADANG BAGO 2 IMUS CAVITE', '41', '017', 0, '09269691943', '09071415818', 'maryjane.lusanta@veritas.com.ph', 'maryjane_lusanta@yahoo.com', NULL, '1991-03-30', 'TANAY RIZAL', 'MARRIED', 'FEMALE', 'CHRISTIAN', 'FILIPINO', 'B-', 4, 46, NULL, '451-520-978', '34-1576866-2', '0202-6217-1397', '1211-2017-4209', '2014-04-01', NULL, '0000-00-00', NULL, '2015-12-31 16:00:00', '2019-03-24 09:12:38'),
(104, 100063, 1, 1, '0', 'ABUEVA', 'ANTHONY VINCENT', 'GOMEZ', 1, '#37 BLDG 2 BBHP ZAMORA ST., PANDACAN MANILA', '00', '001', 1011, '5620619', '09162874617', 'anthony.abueva@veritas.com.ph', 'anthonyvincentabueva@gmail.com', 'toniankz@gmail.com', '1987-08-27', 'MAKATI CITY', 'MARRIED', 'MALE', 'ROMAN CATHOLIC', '', 'B-', 165, 96, '', '297-375-646    ', '34-6303793-4   ', '020268001299  ', '121182425449   ', '2016-09-08', '2017-03-08', '0000-00-00', '0000-00-00', NULL, '2019-03-24 09:12:31');

-- --------------------------------------------------------

--
-- Table structure for table `employee_type`
--

CREATE TABLE `employee_type` (
  `EmployeeTypeID` int(11) NOT NULL,
  `EmployeeType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ActiveStatus` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee_type`
--

INSERT INTO `employee_type` (`EmployeeTypeID`, `EmployeeType`, `ActiveStatus`) VALUES
(1, 'REGULAR', 1),
(2, 'CONTRACTUAL', 1),
(3, 'OJT', 1),
(4, 'OUTSOURCE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `list_announcement`
--

CREATE TABLE `list_announcement` (
  `AnnouncementID` int(11) NOT NULL,
  `Announcement` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `list_announcement`
--

INSERT INTO `list_announcement` (`AnnouncementID`, `Announcement`, `Description`, `Date`) VALUES
(1, 'Security Advisory', 'It is your responsibility to SECURE your account/password to protect other intranet web services. We recommend you to regularly change your PASSWORD and please keep it CONFIDENTIAL, along with your other account data.', NULL),
(2, 'Wearing of Identification Card', 'To ALL EMPLOYEES: As part of our complete uniform and dress code policy, kindly be reminded to wear your ID at all times while inside the school premises.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `list_holiday`
--

CREATE TABLE `list_holiday` (
  `ID` int(11) NOT NULL,
  `Holiday` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `list_holiday`
--

INSERT INTO `list_holiday` (`ID`, `Holiday`, `Description`, `Date`) VALUES
(1, 'NEW YEAR\'S DAY', 'REGULAR HOLIDAY', '2017-01-01'),
(2, 'NEW YEAR\'S DAY OBSERVED', 'REGULAR HOLIDAY', '2017-01-02'),
(3, 'CHINESE NEW YEAR', 'SPECIAL NON-WORKING DAY', '2017-01-28'),
(4, 'EDSA PEOPLE POWER REVOLUTION', 'OBSERVANCE', '2017-02-25'),
(5, 'MAUNDY THURSDAY', 'REGULAR HOLIDAY', '2017-04-13'),
(6, 'GOOD FRIDAY', 'REGULAR HOLIDAY', '2017-04-14'),
(7, 'EASTER SUNDAY', 'OBSERVANCE', '2017-04-16'),
(8, 'ARAW NG KAGITINGAN', 'REGULAR HOLIDAY', '2017-04-09'),
(9, 'LABOR DAY', 'REGULAR HOLIDAY', '2017-05-01'),
(10, 'INDEPENDENCE DAY', 'REGULAR HOLIDAY', '2017-06-12'),
(11, 'NINOY AQUINO DAY', 'SPECIAL NON-WORKING DAY', '2017-08-21'),
(12, 'NATIONAL HEROES DAY', 'REGULAR HOLIDAY', '2017-08-28'),
(13, 'ALL SAINTS DAY', 'SPECIAL NON-WORKING DAY', '2017-11-01'),
(14, 'ALL SOULS DAY', 'OBSERVANCE', '2017-11-02'),
(15, 'BONIFACIO DAY', 'REGULAR HOLIDAY', '2017-11-30'),
(16, 'CHRISTMAS DAY', 'REGULAR HOLIDAY', '2017-12-25'),
(17, 'RIZAL DAY', 'REGULAR HOLIDAY', '2017-12-30'),
(18, 'NEW YEARS EVE', 'SPECIAL NON-WORKING DAY', '2017-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `site_themes`
--

CREATE TABLE `site_themes` (
  `ThemeID` int(11) NOT NULL,
  `ThemeName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Stylesheet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PrimaryFG` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PrimaryBG` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `site_themes`
--

INSERT INTO `site_themes` (`ThemeID`, `ThemeName`, `Description`, `Stylesheet`, `PrimaryFG`, `PrimaryBG`) VALUES
(1, 'BLUE', 'BLUE THEMES', 'site_less_blue.less', '#428bca', '#428bca'),
(2, 'RED', 'RED THEMES', 'site_less_red.less', '#d9534f', '#d9534f'),
(3, 'ORANGE', 'ORANGE THEMES', 'site_less_orange.less', '#f0ad4e', '#f0ad4e'),
(4, 'GREEN', 'GREEN THEMES', 'site_less_green.less', '#5cb85c', '#5cb85c'),
(5, 'LIGHTBLUE', 'LIGHTBLUE THEMES', 'site_less_lightblue.less', '#5bc0de', '#5bc0de'),
(6, 'PINK', 'PINK THEMES', 'site_less_pink.less', '#f26d7e', '#f26d7e'),
(7, 'VIOLET', 'VIOLET THEMES', 'site_less_violet.less', '#643771', '#643771'),
(8, 'MAROON', 'MAROON THEMES', 'site_less_maroon.less', '#9e1847', '#9e1847');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StudentID` int(11) NOT NULL,
  `StudentNo` int(11) DEFAULT NULL,
  `ApplicantNo` int(11) DEFAULT NULL,
  `YearEntryPeriodID` int(11) DEFAULT NULL,
  `LastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FirstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MiddleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ActiveStatus` int(11) DEFAULT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ProvCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TownCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ZipCode` int(20) DEFAULT NULL,
  `TelephoneNo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ContactNo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PersonalEmailAddress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FacebookEmailAddress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BirthDate` date DEFAULT NULL,
  `BirthPlace` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CivilStatus` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Religion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nationality` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BloodType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Height` int(11) DEFAULT NULL,
  `Weight` int(11) DEFAULT NULL,
  `FatherName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FatherContactNo` int(11) DEFAULT NULL,
  `MotherName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MotherContactNo` int(11) DEFAULT NULL,
  `GuardianName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GuardianContactNo.` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateCreated` timestamp NULL DEFAULT NULL,
  `DateModified` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentID`, `StudentNo`, `ApplicantNo`, `YearEntryPeriodID`, `LastName`, `FirstName`, `MiddleName`, `ActiveStatus`, `Address`, `ProvCode`, `TownCode`, `ZipCode`, `TelephoneNo`, `ContactNo`, `PersonalEmailAddress`, `FacebookEmailAddress`, `BirthDate`, `BirthPlace`, `CivilStatus`, `Gender`, `Religion`, `Nationality`, `BloodType`, `Height`, `Weight`, `FatherName`, `FatherContactNo`, `MotherName`, `MotherContactNo`, `GuardianName`, `GuardianContactNo.`, `DateCreated`, `DateModified`) VALUES
(1, 100018, 0, NULL, 'QUIAPO', 'RUTH', 'RANARIO', 0, '2111 F. REYES ST. CORNER QUIRINO MALATE', 'METRO MANILA', 'MANILA', 0, '(02) 450-14', '09223302310', 'ruth.quiapo@yahoo.com', NULL, '1978-11-06', 'MANDAUE CITY', 'MARRIED', 'FEMALE', 'ROMAN CATHOLIC', 'FILIPINO', 'O', 156, 60, NULL, NULL, NULL, NULL, NULL, NULL, '2015-12-31 16:00:00', '2018-12-20 12:18:29'),
(2, 100029, 0, NULL, 'PEREZ', 'HON UNIKE', 'GADDI', 0, '1156 JULIO NAKPIL MALATE', 'METRO MANILA', 'MANILA', 0, '', '09354157903', '', NULL, '1992-07-02', 'HAGONOY BULACAN', 'SINGLE', 'FEMALE', 'ROMAN CATHOLIC', 'FILIPINO', 'B+', 152, 46, NULL, NULL, NULL, NULL, NULL, NULL, '2015-12-31 16:00:00', '2019-03-20 14:04:40'),
(3, 100023, 0, NULL, 'PEREZ', 'AILEEN MAE', 'LAPADA', 0, '1706-A ANTIPOLO STREET SANTA CRUZ MANILA', 'METRO MANILA', 'MANILA', 0, '493291', '09174214502', 'drezz_16@yahoo.com', NULL, '1986-05-16', 'MANILA', 'MARRIED', 'FEMALE', 'ROMAN CATHOLIC', 'JAPANESE', 'A-', 120, 40, NULL, NULL, NULL, NULL, NULL, NULL, '2015-12-31 16:00:00', '2018-12-20 12:19:23'),
(4, 100030, 0, NULL, 'MANGUNE', 'MARK ALVIN', 'MACATANTAN', 0, '1273 MATAAS NA LUPA PACO MANILA', 'METRO MANILA', 'CITY OF MANILA', 10071, '4844590', '09256100908', '', NULL, '1989-06-17', 'QUEZON CITY', 'Married', 'Male', 'ROMAN CATHOLIC', '', '', 162, 58, NULL, NULL, NULL, NULL, NULL, NULL, '2015-12-31 16:00:00', '2018-12-20 12:18:03'),
(5, 100037, 0, NULL, 'LANUZA', 'MARY JANE', 'LUSANTA', 0, 'LOT 1 BLOCK 50, STARKVILLE SUBD, CARSADANG BAGO 2 IMUS CAVITE', '41', '017', 0, '09269691943', '09071415818', 'maryjane_lusanta@yahoo.com', NULL, '1991-03-30', 'TANAY RIZAL', 'MARRIED', 'FEMALE', 'CHRISTIAN', 'FILIPINO', 'B-', 4, 46, NULL, NULL, NULL, NULL, NULL, NULL, '2015-12-31 16:00:00', '2018-12-20 12:17:56'),
(6, 100063, 3, NULL, 'ABUEVA', 'ANTHONY VINCENT', 'GOMEZ', 1, '#37 BLDG 2 BBHP ZAMORA ST., PANDACAN MANILA', '00', '001', 1011, '5620619', '09162874617', 'anthonyvincentabueva@gmail.com', 'toniankz@gmail.com', '1987-08-27', 'MAKATI CITY', 'MARRIED', 'MALE', 'ROMAN CATHOLIC', 'JAPANESE', '', 165, 96, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-25 13:29:25'),
(7, 100064, 0, NULL, 'SA', 'SA', 'SA', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_application`
--

CREATE TABLE `student_application` (
  `ApplicantNo` int(11) NOT NULL,
  `YearGraduate` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FirstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MiddleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ProvCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TownCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ZipCode` int(20) DEFAULT NULL,
  `TelephoneNo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ContactNo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PersonalEmailAddress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FacebookEmailAddress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BirthDate` date DEFAULT NULL,
  `BirthPlace` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CivilStatus` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Religion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nationality` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BloodType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Height` int(11) DEFAULT NULL,
  `Weight` int(11) DEFAULT NULL,
  `FatherName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FatherContactNo` int(11) DEFAULT NULL,
  `MotherName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MotherContactNo` int(11) DEFAULT NULL,
  `GuardianName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GuardianContactNo.` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateCreated` timestamp NULL DEFAULT NULL,
  `DateModified` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_application`
--

INSERT INTO `student_application` (`ApplicantNo`, `YearGraduate`, `LastName`, `FirstName`, `MiddleName`, `Address`, `ProvCode`, `TownCode`, `ZipCode`, `TelephoneNo`, `ContactNo`, `PersonalEmailAddress`, `FacebookEmailAddress`, `BirthDate`, `BirthPlace`, `CivilStatus`, `Gender`, `Religion`, `Nationality`, `BloodType`, `Height`, `Weight`, `FatherName`, `FatherContactNo`, `MotherName`, `MotherContactNo`, `GuardianName`, `GuardianContactNo.`, `DateCreated`, `DateModified`) VALUES
(1, NULL, 'QUIAPO', 'RUTH', 'RANARIO', '2111 F. REYES ST. CORNER QUIRINO MALATE', 'METRO MANILA', 'MANILA', 0, '(02) 450-14', '09223302310', 'ruth.quiapo@yahoo.com', NULL, '1978-11-06', 'MANDAUE CITY', 'MARRIED', 'FEMALE', 'ROMAN CATHOLIC', 'FILIPINO', 'O', 156, 60, NULL, NULL, NULL, NULL, NULL, NULL, '2015-12-31 16:00:00', '2018-12-20 12:18:29'),
(2, NULL, 'PEREZ', 'HON UNIKE', 'GADDI', '1156 JULIO NAKPIL MALATE', 'METRO MANILA', 'MANILA', 0, '', '09354157903', '', NULL, '1992-07-02', 'HAGONOY BULACAN', 'SINGLE', 'FEMALE', 'ROMAN CATHOLIC', 'FILIPINO', 'B+', 152, 46, NULL, NULL, NULL, NULL, NULL, NULL, '2015-12-31 16:00:00', '2019-03-20 14:04:40'),
(3, NULL, 'PEREZ', 'AILEEN MAE', 'LAPADA', '1706-A ANTIPOLO STREET SANTA CRUZ MANILA', 'METRO MANILA', 'MANILA', 0, '493291', '09174214502', 'drezz_16@yahoo.com', NULL, '1986-05-16', 'MANILA', 'MARRIED', 'FEMALE', 'ROMAN CATHOLIC', 'JAPANESE', 'A-', 120, 40, NULL, NULL, NULL, NULL, NULL, NULL, '2015-12-31 16:00:00', '2018-12-20 12:19:23'),
(4, NULL, 'MANGUNE', 'MARK ALVIN', 'MACATANTAN', '1273 MATAAS NA LUPA PACO MANILA', 'METRO MANILA', 'CITY OF MANILA', 10071, '4844590', '09256100908', '', NULL, '1989-06-17', 'QUEZON CITY', 'Married', 'Male', 'ROMAN CATHOLIC', '', '', 162, 58, NULL, NULL, NULL, NULL, NULL, NULL, '2015-12-31 16:00:00', '2018-12-20 12:18:03'),
(5, NULL, 'LANUZA', 'MARY JANE', 'LUSANTA', 'LOT 1 BLOCK 50, STARKVILLE SUBD, CARSADANG BAGO 2 IMUS CAVITE', '41', '017', 0, '09269691943', '09071415818', 'maryjane_lusanta@yahoo.com', NULL, '1991-03-30', 'TANAY RIZAL', 'MARRIED', 'FEMALE', 'CHRISTIAN', 'FILIPINO', 'B-', 4, 46, NULL, NULL, NULL, NULL, NULL, NULL, '2015-12-31 16:00:00', '2018-12-20 12:17:56'),
(6, NULL, 'ABUEVA', 'ANTHONY VINCENT', 'GOMEZ', '#37 BLDG 2 BBHP ZAMORA ST., PANDACAN MANILA', '00', '001', 1011, '5620619', '09162874617', 'anthonyvincentabueva@gmail.com', 'toniankz@gmail.com', '1987-08-27', 'MAKATI CITY', 'MARRIED', 'MALE', 'ROMAN CATHOLIC', 'JAPANESE', '', 165, 96, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-13 13:21:03'),
(7, NULL, 'SA', 'SA', 'SA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_enlisted`
--

CREATE TABLE `student_enlisted` (
  `Student_EnlistedID` int(11) NOT NULL,
  `StudentID` int(11) DEFAULT NULL,
  `PeriodID` int(11) DEFAULT NULL,
  `CurriculumID` int(11) DEFAULT NULL,
  `SectionID_1` int(11) DEFAULT NULL,
  `SectionID_2` int(11) DEFAULT NULL,
  `EnllistmentDate` datetime DEFAULT NULL,
  `EnlistedBy` varchar(255) DEFAULT NULL,
  `AssessmentDate` datetime DEFAULT NULL,
  `AssessedBy` varchar(255) DEFAULT NULL,
  `ValidationDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_grade_college`
--

CREATE TABLE `student_grade_college` (
  `GradeCollegeID` int(11) NOT NULL,
  `StudentID` int(11) DEFAULT NULL,
  `SubjectID` int(11) DEFAULT NULL,
  `Prelim_Grade` varchar(255) DEFAULT NULL,
  `Prelim_EncodedBy` int(11) DEFAULT NULL,
  `Prelim_DateEncoded` datetime DEFAULT NULL,
  `Midterm_Grade` int(11) DEFAULT NULL,
  `Midterm_EncodedBy` int(11) DEFAULT NULL,
  `Midterm_DateEncoded` datetime DEFAULT NULL,
  `Final_Grade` int(11) DEFAULT NULL,
  `Final_EncodedBy` int(11) DEFAULT NULL,
  `Final_DateEncoded` datetime DEFAULT NULL,
  `Remarks` varchar(255) DEFAULT NULL,
  `Prelim_COG_Grade` int(11) DEFAULT NULL,
  `Prelim_COG_EncodedBy` varchar(255) DEFAULT NULL,
  `Prelim_COG_DateEncoded` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `system_logs`
--

CREATE TABLE `system_logs` (
  `ID` int(11) NOT NULL,
  `AccountUsername` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Details` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateLogs` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `system_logs`
--

INSERT INTO `system_logs` (`ID`, `AccountUsername`, `Details`, `DateLogs`) VALUES
(4, 'ADM_0001', NULL, '2017-05-17 02:22:21'),
(3, 'ADM_0001', NULL, '2017-05-17 02:21:28'),
(5, 'ADM_0001', NULL, '2017-05-17 02:22:31'),
(6, 'ADM_0001', NULL, '2017-05-18 01:13:39'),
(7, 'ADM_0001', NULL, '2017-05-17 17:02:31'),
(8, 'ADM_0001', NULL, '2017-05-19 01:23:49'),
(9, 'ADM_0001', NULL, '2017-05-21 17:38:14'),
(10, 'ADM_0001', NULL, '2017-05-23 17:12:43'),
(11, 'ADM_0001', NULL, '2017-05-25 01:45:33'),
(12, 'ADM_0001', NULL, '2017-05-25 03:02:17'),
(13, 'ADM_0001', NULL, '2017-05-24 19:03:31'),
(14, 'ADM_0001', NULL, '2017-05-26 03:11:23'),
(15, 'ADM_0001', NULL, '2017-05-28 17:07:51'),
(16, 'ADM_0001', NULL, '2017-05-28 20:39:17'),
(17, 'ADM_0001', NULL, '2017-07-19 18:50:37'),
(18, 'ADM_0001', NULL, '2017-07-19 19:50:53'),
(19, 'ADM_0001', NULL, '2017-07-19 21:18:39'),
(20, 'ADM_0001', NULL, '2017-07-21 01:16:40'),
(21, 'ACC_0001', NULL, '2017-07-21 03:17:17'),
(22, 'ACC_0001', NULL, '2017-07-20 18:09:40'),
(23, 'ACC_0001', NULL, '2017-07-24 01:20:27'),
(24, 'ACC_0001', NULL, '2017-07-23 20:17:20'),
(25, 'ACC_0001', NULL, '2017-07-23 21:46:55'),
(26, 'ACC_0001', NULL, '2017-07-23 21:47:06'),
(27, 'ACC_0001', NULL, '2017-07-25 01:01:02'),
(28, 'ACC_0001', NULL, '2017-07-25 03:03:59'),
(29, 'ACC_0001', NULL, '2017-07-26 01:26:44'),
(30, 'ACC_0001', NULL, '2017-07-25 18:33:53'),
(31, 'ACC_0001', NULL, '2017-07-27 01:38:50'),
(32, 'ACC_0001', NULL, '2017-07-26 19:54:53'),
(33, 'ACC_0001', NULL, '2017-07-26 19:55:14'),
(34, 'ACC_0002', NULL, '2017-07-26 19:58:15'),
(35, 'ACC_0001', NULL, '2017-07-27 20:45:33'),
(36, 'ACC_0001', NULL, '2017-07-31 17:21:50'),
(37, 'ACC_0001', NULL, '2017-08-01 21:18:09'),
(38, 'ACC_0001', NULL, '2017-08-04 03:30:50'),
(39, 'ACC_0001', NULL, '2017-08-08 01:54:31'),
(40, 'ACC_0001', NULL, '2017-08-09 00:46:38'),
(41, 'ACC_0001', NULL, '2017-08-10 02:35:16'),
(42, 'ACC_0001', NULL, '2017-08-11 01:17:46'),
(43, 'ACC_0001', NULL, '2017-08-14 20:34:49'),
(44, 'ACC_0001', NULL, '2017-08-16 02:16:06'),
(45, 'ACC_0001', NULL, '2017-08-16 02:35:54'),
(46, 'ACC_0001', NULL, '2017-08-17 00:47:47'),
(47, 'ACC_0001', NULL, '2017-08-22 01:17:41'),
(48, 'ACC_0001', NULL, '2017-08-23 01:11:02'),
(49, 'ACC_0001', NULL, '2017-08-22 20:58:28'),
(50, 'ACC_0001', NULL, '2017-08-22 21:00:44'),
(51, 'ACC_0001', NULL, '2017-08-22 21:03:24'),
(52, 'ACC_0001', NULL, '2017-08-22 21:03:45'),
(53, 'ACC_0001', NULL, '2017-08-22 21:37:51'),
(54, 'ACC_0001', NULL, '2017-08-24 01:34:33'),
(55, 'ACC_0001', NULL, '2017-08-23 21:04:38'),
(56, 'ACC_0001', NULL, '2017-08-25 01:26:46'),
(57, 'ACC_0001', NULL, '2017-08-25 01:39:26'),
(58, 'ACC_0001', NULL, '2017-08-25 01:54:46'),
(59, 'ACC_0001', NULL, '2017-08-24 18:34:42'),
(60, 'ACC_0001', NULL, '2017-08-24 19:37:24'),
(61, 'ACC_0001', NULL, '2017-08-24 19:44:59'),
(62, 'ACC_0001', NULL, '2017-08-24 19:47:14'),
(63, 'ACC_0001', NULL, '2017-08-24 20:07:11'),
(64, 'ACC_0001', NULL, '2017-08-24 20:08:30'),
(65, 'ACC_0001', NULL, '2017-08-24 20:10:29'),
(66, 'ACC_0001', NULL, '2017-08-24 20:11:05'),
(67, 'ACC_0001', NULL, '2017-08-24 20:12:48'),
(68, 'ACC_0001', NULL, '2017-08-29 00:51:22'),
(69, 'ACC_0001', NULL, '2017-08-29 02:09:16'),
(70, 'ACC_0001', NULL, '2017-08-28 19:55:58'),
(71, 'ACC_0001', NULL, '2017-08-28 20:26:23'),
(72, 'ACC_0001', NULL, '2017-08-28 20:36:35'),
(73, 'ACC_0001', NULL, '2017-08-28 20:39:14'),
(74, 'ACC_0001', NULL, '2017-08-30 00:43:50'),
(75, 'ACC_0001', NULL, '2017-08-30 00:44:31'),
(76, 'ACC_0001', NULL, '2017-08-30 00:44:44'),
(77, 'ACC_0001', NULL, '2017-08-30 00:48:06'),
(78, 'ACC_0001', NULL, '2017-08-30 01:04:07'),
(79, 'ACC_0001', NULL, '2017-08-29 17:07:03'),
(80, 'ACC_0001', NULL, '2017-08-29 19:53:07'),
(81, 'ACC_0001', NULL, '2017-08-30 17:16:50'),
(82, 'ACC_0001', NULL, '2017-09-04 02:46:22'),
(83, 'ACC_0001', NULL, '2017-09-05 01:04:29'),
(84, 'ACC_0001', NULL, '2017-09-05 01:04:54'),
(85, 'ACC_0001', NULL, '2017-09-06 02:10:36'),
(86, 'ACC_0001', NULL, '2017-09-05 17:33:36'),
(87, 'ACC_0001', NULL, '2017-09-05 20:05:35'),
(88, 'ACC_0001', NULL, '2017-09-07 00:50:13'),
(89, 'ACC_0001', NULL, '2017-09-08 01:30:53'),
(90, 'ACC_0001', NULL, '2017-09-07 17:39:44'),
(91, 'ACC_0001', NULL, '2017-09-09 23:37:10'),
(92, 'ACC_0001', NULL, '2017-09-11 03:53:31'),
(93, 'ACC_0001', NULL, '2017-09-10 20:11:40'),
(94, 'ACC_0001', NULL, '2017-09-10 22:13:53'),
(95, 'ACC_0001', NULL, '2017-09-14 02:13:28'),
(96, 'ACC_0001', NULL, '2017-09-14 04:56:11'),
(97, 'ACC_0001', NULL, '2017-09-15 01:07:11'),
(98, 'ACC_0001', NULL, '2017-09-17 21:02:15'),
(99, 'ACC_0001', NULL, '2017-09-19 01:06:15'),
(100, 'ACC_0001', NULL, '2017-09-18 21:18:46'),
(101, 'ACC_0001', NULL, '2017-09-18 21:26:42'),
(102, 'ACC_0001', NULL, '2017-09-18 21:30:48'),
(103, 'ACC_0001', NULL, '2017-09-18 21:33:41'),
(104, 'ACC_0001', NULL, '2017-09-20 01:01:13'),
(105, 'ACC_0001', NULL, '2017-09-20 03:43:21'),
(106, 'ACC_0001', NULL, '2017-09-20 03:49:54'),
(107, 'ACC_0001', NULL, '2017-09-20 04:59:20'),
(108, 'ACC_0001', NULL, '2017-09-21 01:09:16'),
(109, 'ACC_0001', NULL, '2017-09-20 17:00:12'),
(110, 'ACC_0001', NULL, '2017-09-22 01:30:30'),
(111, 'ACC_0001', NULL, '2017-09-25 00:53:29'),
(112, 'ACC_0001', NULL, '2017-09-26 01:09:01'),
(113, 'ACC_0001', NULL, '2017-09-26 01:18:26'),
(114, 'ACC_0001', NULL, '2017-09-27 01:09:34'),
(115, 'ACC_0001', NULL, '2017-10-02 01:27:43'),
(116, 'ACC_0001', NULL, '2017-10-03 01:29:10'),
(117, 'ACC_0001', NULL, '2017-10-04 01:02:28'),
(118, 'ACC_0001', NULL, '2017-10-05 01:19:57'),
(119, 'ACC_0001', NULL, '2017-10-05 03:42:55'),
(120, 'ACC_0001', NULL, '2017-10-06 00:52:57'),
(121, 'ACC_0001', NULL, '2017-10-05 17:09:46'),
(122, 'ACC_0001', NULL, '2017-10-05 17:34:13'),
(123, 'ACC_0001', NULL, '2017-10-05 20:44:21'),
(124, 'ACC_0001', NULL, '2017-10-09 02:28:52'),
(125, 'ACC_0001', NULL, '2017-10-08 17:25:35'),
(126, 'ACC_0001', NULL, '2017-10-08 17:33:16'),
(127, 'ACC_0001', NULL, '2017-10-10 01:10:05'),
(128, 'ACC_0001', NULL, '2017-10-10 02:58:28'),
(129, 'ACC_0001', NULL, '2017-10-09 21:09:58'),
(130, 'ACC_0001', NULL, '2017-10-11 01:21:13'),
(131, 'ACC_0001', NULL, '2017-10-10 17:48:16'),
(132, 'ACC_0001', NULL, '2017-10-12 01:07:08'),
(133, 'ACC_0001', NULL, '2017-10-12 02:35:07'),
(134, 'ACC_0001', NULL, '2017-10-12 02:35:53'),
(135, 'ACC_0001', NULL, '2017-10-12 03:20:25'),
(136, 'ACC_0001', NULL, '2017-10-11 17:40:28'),
(137, 'ACC_0001', NULL, '2017-10-11 17:49:38'),
(138, 'ACC_0001', NULL, '2017-10-13 01:09:21'),
(139, 'ACC_0001', NULL, '2017-10-16 01:07:35'),
(140, 'ACC_0001', NULL, '2017-10-17 00:57:41'),
(141, 'ACC_0001', NULL, '2017-10-16 17:10:01'),
(142, 'ACC_0002', NULL, '2017-10-16 21:26:10'),
(143, 'ACC_0001', NULL, '2017-10-16 22:05:00'),
(144, 'ACC_0001', NULL, '2017-10-17 20:06:46'),
(145, 'ACC_0001', NULL, '2017-10-18 17:04:41'),
(146, 'ACC_0001', NULL, '2017-10-18 17:29:21'),
(147, 'ACC_0001', NULL, '2017-10-20 01:51:58'),
(148, 'ACC_0001', NULL, '2017-10-24 01:52:11'),
(149, 'ACC_0001', NULL, '2017-10-25 00:54:06'),
(150, 'ACC_0001', NULL, '2017-10-25 01:10:23'),
(151, 'ACC_0001', NULL, '2017-10-25 01:17:10'),
(152, 'ACC_0001', NULL, '2017-10-25 01:19:37'),
(153, 'ACC_0001', NULL, '2017-10-24 23:41:51'),
(154, 'ACC_0001', NULL, '2017-10-25 00:31:41'),
(155, 'ACC_0001', NULL, '2017-10-26 00:54:46'),
(156, 'ACC_0001', NULL, '2017-10-26 01:26:31'),
(157, 'ACC_0001', NULL, '2017-10-26 01:27:01'),
(158, 'ACC_0001', NULL, '2017-10-26 01:56:05'),
(159, 'ACC_0002', NULL, '2017-10-26 02:33:53'),
(160, 'ACC_0041', NULL, '2017-10-26 02:42:13'),
(161, 'ACC_0001', NULL, '2017-10-26 02:59:21'),
(162, 'ACC_0007', NULL, '2017-10-26 03:00:44'),
(163, 'ACC_0007', NULL, '2017-10-26 03:01:03'),
(164, 'ACC_0001', NULL, '2017-10-26 03:53:52'),
(165, 'ACC_0007', NULL, '2017-10-26 03:56:06'),
(166, 'ACC_0001', NULL, '2017-10-26 04:53:18'),
(167, 'ACC_0001', NULL, '2017-10-27 02:11:42'),
(168, 'ACC_0001', NULL, '2017-10-27 03:19:29'),
(169, 'ACC_0001', NULL, '2017-10-26 19:11:48'),
(170, 'ACC_0001', NULL, '2017-10-29 23:44:11'),
(171, 'ACC_0002', NULL, '2017-10-29 21:53:29'),
(172, 'ACC_0002', NULL, '2017-10-29 21:55:24'),
(173, 'ACC_0001', NULL, '2017-10-30 23:59:34'),
(174, 'ACC_0001', NULL, '2017-10-31 01:14:35'),
(175, 'ACC_0001', NULL, '2018-10-23 01:13:59'),
(176, 'ACC_0001', NULL, '2018-10-24 22:49:26'),
(177, 'ACC_0001', NULL, '2018-11-28 01:09:31'),
(178, 'ACC_0001', NULL, '2018-12-04 23:09:55'),
(179, 'ACC_0001', NULL, '2018-12-18 01:29:18'),
(180, 'ACC_0001', NULL, '2019-03-15 19:45:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `account_level`
--
ALTER TABLE `account_level`
  ADD PRIMARY KEY (`AccLevelID`);

--
-- Indexes for table `account_logs`
--
ALTER TABLE `account_logs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `account_themes`
--
ALTER TABLE `account_themes`
  ADD PRIMARY KEY (`ThemeID`) USING BTREE;

--
-- Indexes for table `account_type`
--
ALTER TABLE `account_type`
  ADD PRIMARY KEY (`AccountTypeID`) USING BTREE;

--
-- Indexes for table `account_user`
--
ALTER TABLE `account_user`
  ADD PRIMARY KEY (`AccountUserID`) USING BTREE;

--
-- Indexes for table `cat_acad_curriculum`
--
ALTER TABLE `cat_acad_curriculum`
  ADD PRIMARY KEY (`CurriculumID`) USING BTREE;

--
-- Indexes for table `cat_acad_curriculum_subject`
--
ALTER TABLE `cat_acad_curriculum_subject`
  ADD PRIMARY KEY (`Curriculum_SubjectID`) USING BTREE;

--
-- Indexes for table `cat_acad_program`
--
ALTER TABLE `cat_acad_program`
  ADD PRIMARY KEY (`AcaProgramID`) USING BTREE;

--
-- Indexes for table `cat_acad_program_curriculum`
--
ALTER TABLE `cat_acad_program_curriculum`
  ADD PRIMARY KEY (`AcaProgramCurriculumID`) USING BTREE;

--
-- Indexes for table `cat_civil_status`
--
ALTER TABLE `cat_civil_status`
  ADD PRIMARY KEY (`CivilStatusID`);

--
-- Indexes for table `cat_department`
--
ALTER TABLE `cat_department`
  ADD PRIMARY KEY (`DepartmentID`) USING BTREE;

--
-- Indexes for table `cat_educational_level`
--
ALTER TABLE `cat_educational_level`
  ADD PRIMARY KEY (`EducLevelID`) USING BTREE;

--
-- Indexes for table `cat_family_relation`
--
ALTER TABLE `cat_family_relation`
  ADD PRIMARY KEY (`FamilyRelationID`) USING BTREE;

--
-- Indexes for table `cat_room`
--
ALTER TABLE `cat_room`
  ADD PRIMARY KEY (`RoomID`) USING BTREE;

--
-- Indexes for table `cat_schedule`
--
ALTER TABLE `cat_schedule`
  ADD PRIMARY KEY (`ScheduleID`);

--
-- Indexes for table `cat_schedule_status`
--
ALTER TABLE `cat_schedule_status`
  ADD PRIMARY KEY (`ScheduleStatusID`);

--
-- Indexes for table `cat_schedule_student`
--
ALTER TABLE `cat_schedule_student`
  ADD PRIMARY KEY (`Student_ScheduleID`);

--
-- Indexes for table `cat_school_year`
--
ALTER TABLE `cat_school_year`
  ADD PRIMARY KEY (`SchoolYearID`) USING BTREE;

--
-- Indexes for table `cat_section`
--
ALTER TABLE `cat_section`
  ADD PRIMARY KEY (`SectionID`);

--
-- Indexes for table `cat_subject`
--
ALTER TABLE `cat_subject`
  ADD PRIMARY KEY (`SubjectID`) USING BTREE;

--
-- Indexes for table `cat_subject_prerequisite`
--
ALTER TABLE `cat_subject_prerequisite`
  ADD PRIMARY KEY (`SubjectPreReqID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmployeeID`) USING BTREE;

--
-- Indexes for table `employee_type`
--
ALTER TABLE `employee_type`
  ADD PRIMARY KEY (`EmployeeTypeID`) USING BTREE;

--
-- Indexes for table `list_announcement`
--
ALTER TABLE `list_announcement`
  ADD PRIMARY KEY (`AnnouncementID`) USING BTREE;

--
-- Indexes for table `list_holiday`
--
ALTER TABLE `list_holiday`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `site_themes`
--
ALTER TABLE `site_themes`
  ADD PRIMARY KEY (`ThemeID`) USING BTREE;

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentID`) USING BTREE;

--
-- Indexes for table `student_application`
--
ALTER TABLE `student_application`
  ADD PRIMARY KEY (`ApplicantNo`) USING BTREE;

--
-- Indexes for table `student_enlisted`
--
ALTER TABLE `student_enlisted`
  ADD PRIMARY KEY (`Student_EnlistedID`) USING BTREE;

--
-- Indexes for table `student_grade_college`
--
ALTER TABLE `student_grade_college`
  ADD PRIMARY KEY (`GradeCollegeID`) USING BTREE;

--
-- Indexes for table `system_logs`
--
ALTER TABLE `system_logs`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `account_logs`
--
ALTER TABLE `account_logs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `account_themes`
--
ALTER TABLE `account_themes`
  MODIFY `ThemeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `account_type`
--
ALTER TABLE `account_type`
  MODIFY `AccountTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `account_user`
--
ALTER TABLE `account_user`
  MODIFY `AccountUserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100032;

--
-- AUTO_INCREMENT for table `cat_acad_curriculum`
--
ALTER TABLE `cat_acad_curriculum`
  MODIFY `CurriculumID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cat_acad_curriculum_subject`
--
ALTER TABLE `cat_acad_curriculum_subject`
  MODIFY `Curriculum_SubjectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cat_acad_program`
--
ALTER TABLE `cat_acad_program`
  MODIFY `AcaProgramID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cat_acad_program_curriculum`
--
ALTER TABLE `cat_acad_program_curriculum`
  MODIFY `AcaProgramCurriculumID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cat_civil_status`
--
ALTER TABLE `cat_civil_status`
  MODIFY `CivilStatusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cat_department`
--
ALTER TABLE `cat_department`
  MODIFY `DepartmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `cat_educational_level`
--
ALTER TABLE `cat_educational_level`
  MODIFY `EducLevelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `cat_family_relation`
--
ALTER TABLE `cat_family_relation`
  MODIFY `FamilyRelationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `cat_room`
--
ALTER TABLE `cat_room`
  MODIFY `RoomID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cat_schedule`
--
ALTER TABLE `cat_schedule`
  MODIFY `ScheduleID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cat_school_year`
--
ALTER TABLE `cat_school_year`
  MODIFY `SchoolYearID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `cat_section`
--
ALTER TABLE `cat_section`
  MODIFY `SectionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cat_subject`
--
ALTER TABLE `cat_subject`
  MODIFY `SubjectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmployeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `employee_type`
--
ALTER TABLE `employee_type`
  MODIFY `EmployeeTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100032;

--
-- AUTO_INCREMENT for table `list_announcement`
--
ALTER TABLE `list_announcement`
  MODIFY `AnnouncementID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `list_holiday`
--
ALTER TABLE `list_holiday`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `site_themes`
--
ALTER TABLE `site_themes`
  MODIFY `ThemeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_application`
--
ALTER TABLE `student_application`
  MODIFY `ApplicantNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_grade_college`
--
ALTER TABLE `student_grade_college`
  MODIFY `GradeCollegeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_logs`
--
ALTER TABLE `system_logs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
