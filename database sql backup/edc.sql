-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2017 at 08:21 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `edc`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `COMPANY_ID` int(11) NOT NULL DEFAULT '0',
  `COMPANY_NAME` varchar(20) NOT NULL,
  PRIMARY KEY (`COMPANY_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`COMPANY_ID`, `COMPANY_NAME`) VALUES
(1, 'Theme Park'),
(2, 'Water Park'),
(3, 'Snow Park'),
(4, 'Hotel'),
(5, 'Back Office'),
(6, 'Head Office');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `DEPARTMENT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DEPARTMENT_NAME` varchar(100) NOT NULL,
  PRIMARY KEY (`DEPARTMENT_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DEPARTMENT_ID`, `DEPARTMENT_NAME`) VALUES
(1, 'Ticketing'),
(2, 'FnB'),
(3, 'Retail'),
(4, 'IT'),
(5, 'Accounts'),
(6, 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `edc_detail`
--

CREATE TABLE IF NOT EXISTS `edc_detail` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TID_NO` varchar(50) DEFAULT NULL,
  `HDFC_TID_NO` varchar(50) DEFAULT NULL,
  `MID_NO` varchar(50) DEFAULT NULL,
  `SERIAL_NO` varchar(50) NOT NULL,
  `LOCATION` varchar(100) NOT NULL,
  `DEPARTMENT` varchar(100) NOT NULL,
  `ISAMEX` varchar(10) NOT NULL,
  `AMEX_NO` varchar(50) DEFAULT NULL,
  `SIM_CARD` varchar(20) DEFAULT NULL,
  `TERMINAL_TYPE` varchar(20) NOT NULL,
  `VENDOR` varchar(50) NOT NULL,
  `COMPANY` varchar(20) NOT NULL,
  `STATUS` varchar(50) NOT NULL,
  `REMARKS` varchar(200) DEFAULT NULL,
  `DATE_CREATED` datetime NOT NULL,
  `DATE_MODIFIED` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=107 ;

--
-- Dumping data for table `edc_detail`
--

INSERT INTO `edc_detail` (`ID`, `TID_NO`, `HDFC_TID_NO`, `MID_NO`, `SERIAL_NO`, `LOCATION`, `DEPARTMENT`, `ISAMEX`, `AMEX_NO`, `SIM_CARD`, `TERMINAL_TYPE`, `VENDOR`, `COMPANY`, `STATUS`, `REMARKS`, `DATE_CREATED`, `DATE_MODIFIED`) VALUES
(1, '', '40940255', '470000074052200', '13274CT20951286', 'ROBERTO''S counter', 'FnB', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '', '40936158', '', '13165CT20476765', 'ROBERTO''S counter', 'FnB', '1', '1773423', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '', '40936182', '470000074052200', '13274CT20954711', 'ROBERTO''S counter', 'FnB', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '62564114', NULL, '470000074052200', '13255CT20861114', 'Arrmada Restaurent', 'FnB', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '62564119', NULL, '470000074052200', '13164CT20467955', 'ZeZe Restaurent', 'FnB', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '', '40936164', '470000074052200', '15165CT23824416', 'ZeZe Restaurent', 'FnB', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '', '40936170', '470000074052200', '13164CT20467760', 'ZeZe Restaurent (BAR)', 'FnB', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '', '40936165', '470000074052200', '13125CT20730624', 'Imagica capital', 'FnB', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '', '40940264', '470000074052200', '14325CT22948282', 'Imagica capital', 'FnB', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '', '40936194', '470000074052200', '13166CT20478347', 'Red Bonnet', 'FnB', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '62564143', NULL, '470000074052200', '14298CT22812989', 'Red Bonnet', 'FnB', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '', '40940270', '470000074052200', '14336CT23021618', 'Red Bonnet', 'FnB', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '62564114', NULL, '470000074052200', '13255CT20861114', 'Arrmada Restaurent', 'FnB', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '', '40936168', '470000074052200', '14162CT22065180', 'Arrival plaza (Food kiosk)', 'FnB', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '62564124', NULL, '470000074052200', '13274CT20954242', 'CIRCUS (Retail kiosk1)', 'Retail', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '', '40940261', '470000074052200', '13165CT20475956', 'KIOSK2 (KidsZone)', 'Retail', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, '', '40940260', '470000074052200', '13165CT20475643', 'KIOSK3 (Red Bonnet)', 'Retail', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, '', '40940262', '470000074052200', '13165CT20475917', 'KIOSK4 (Rajasaurus)', 'Retail', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, '62564144', NULL, '470000074052200', '15165CT23824242', 'Main Retail Store', 'Retail', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, '72056681', NULL, NULL, '14292CT22769480', 'Main Retail Store', 'Retail', '1', '1773428', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '', '40940254', '', '14305CT22852518', 'CANDY (SUGARBUZZ)', 'Retail', '1', '1773436', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '62564115', NULL, '470000074052200', '14298CT22813470', 'CANDY (DIGI-photo)', 'Retail', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, '', '40936163', '', '12230CT71710497', 'WOG Retail Store', 'Retail', '1', '1773429', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '', '40936192', '', '13152CT20407107', 'I FOR INDIA Retail Store', 'Retail', '1', '1773434', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, '62564146', NULL, '470000074052200', '14298CT22812809', 'Exit Nitro Store', 'Retail', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, '', '40936160', '', '13201CT20640275', 'GOLD RUSH (Digi-photo)', 'Retail', '1', '1773417', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, '', '40936175', '470000074052200', '13167CT20486358', 'Ticketing counter', 'Ticketing', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, '', '40936176', '470000074052200', '13164CT20467951', 'Ticketing counter', 'Ticketing', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, '', '40936174', '470000074052200', '13165CT20475626', 'Ticketing counter', 'Ticketing', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, '', '40936201', '', '13151CT20402602', 'Ticketing counter', 'Ticketing', '1', '1773430', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, '62564131', NULL, '470000074052200', '13274CT20954100', 'Ticketing counter', 'Ticketing', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, '62564109', NULL, '470000074052200', '13274CT20954065', 'Ticketing counter', 'Ticketing', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, '62564110', NULL, '470000074052200', '13274CT20950026', 'Ticketing counter', 'Ticketing', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, '', '40936195', '', '13165CT20476051', 'Ticketing counter', 'Ticketing', '1', '1773416', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, '', '40936179', '470000074052200', '13164CT20468045', 'Ticketing counter (upgrade)', 'Ticketing', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, '', '40936198', '470000074052200', '13110CT20222699', 'Ticketing counter (upgrade)', 'Ticketing', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, '62564116', NULL, '470000074052200', '13269CT20928196', 'Return Ticketing counter ', 'Ticketing', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, '', '40936172', '470000074052200', '1315CT20402539', 'Return Ticketing counter', 'Ticketing', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, '', '40936193', '470000074052200', '13165CT20476220', 'Retail store (Novotel)', 'Retail', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, '62564127', NULL, '470000074052200', '1436CT23180327', 'KIOSK5 (Salimgarh)', 'Retail', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, '', '40936184', '470000074052200', '14007WL21307927', 'Ticketing counter', 'Ticketing', '0', '', 'Airtel', 'GPRS Terminal', 'Pine Labs', 'Theme Park', 'Working', 'Charging port is faulty. Call logged at Plutus Support\r\nmachine replaced now its working fine.\r\n\r\nold serial no :12086WL60495608', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, '', '40936187', '470000074052200', '13335WL21158292', 'Ticketing counter', 'Ticketing', '0', '', 'Airtel', 'GPRS Terminal', 'Pine Labs', 'Theme Park', 'Not Working', 'charging port issue not able to charge the gprs machine.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, '', '40936190', '470000074052200', '12090WL60505725', 'ReturnTicketing counter', 'Ticketing', '0', '', 'Vodafone', 'GPRS Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, '', '40936189', '470000074052200', '12090WL60505996', 'Red Bonnet', 'FnB', '0', '', 'Vodafone', 'GPRS Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, '', '40936196', '', '12086WL60495017', 'Dattaprasad (MARKETING)', 'Marketing', '1', '1773426', 'NA', 'GPRS Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, '88005989', NULL, '470000074052200', '12086WL60495928', 'Retail web online', 'Retail', '0', '', 'Vodafone', 'GPRS Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, '', '40936186', '470000074052200', '12090WL60505798', 'Return Ticketing counter  (Rajasaurus)', 'Ticketing', '0', '', 'Vodafone', 'GPRS Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, '62500706', NULL, '470000074052200', '15085WL81110771', 'Ticketing counter', 'Ticketing', '0', '', 'Vodafone', 'GPRS Terminal', 'ICICI', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, '62500707', NULL, '470000074052200', '14020WL21357443', 'ZeZe Restaurent', 'FnB', '0', '', 'Vodafone', 'GPRS Terminal', 'ICICI', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, '62500701', NULL, '470000074052200', '13337WL21168387', 'Main Retail Store', 'Retail', '0', '', 'Vodafone', 'GPRS Terminal', 'ICICI', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, '62500708', NULL, '470000074052200', '14012WL21326277', 'Deep space DIGI-photo', 'Retail', '0', '', 'Vodafone', 'GPRS Terminal', 'ICICI', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, '62500705', NULL, '470000074052200', '13337WL21168170', 'ROBERTO''S Jain counter', 'FnB', '0', '', 'Vodafone', 'GPRS Terminal', 'ICICI', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, '62500699', NULL, '470000074052200', '13337WL21169193', 'ROBERTO''S counter', 'FnB', '0', '', 'Vodafone', 'GPRS Terminal', 'ICICI', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'E6140001', '', '470000074052200', '13274CT20954502', 'admin', 'IT', '0', '', 'Vodafone', 'GPRS Terminal', 'INNOVITI', 'Theme Park', 'Not Working', 'machine is damage by F&B.not working machine.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'E6140002', NULL, '470000074052200', '13288CT21017906', 'Alibaba', 'Retail', '0', '', 'Vodafone', 'GPRS Terminal', 'INNOVITI', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'E6140003', NULL, '470000074052200', '13287CT21012672', 'Finance cashier', 'Accounts', '0', '', 'Vodafone', 'GPRS Terminal', 'INNOVITI', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'E6140004', NULL, '470000074052200', '13233CT20775818', 'SNOW PARK (F&B)', 'FnB', '0', '', 'Vodafone', 'GPRS Terminal', 'INNOVITI', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'E6140005', '', '470000074052200', '12251CT71756859', 'admin', 'IT', '0', '', 'Vodafone', 'GPRS Terminal', 'INNOVITI', 'Theme Park', 'Not Working', 'network issue not getting network to machine.Fauly machine', '2016-10-17 19:08:33', '2016-10-17 19:08:33'),
(59, '62564134', NULL, '470000074052200', '14362CT23182695', 'Locker Counter POS1', 'Ticketing', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, '62564111', NULL, '470000074052200', '13274CT20953535', 'Locker Counter POS2', 'Ticketing', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, '62564116', NULL, '470000074052200', '13269CT20928196', 'Locker Counter POS3', 'Ticketing', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, '62564118', NULL, '470000074052200', '13288CT21016479', 'Locker Counter POS4', 'Ticketing', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, '62564123', NULL, '470000074052200', '13287CT21013565', 'Locker Counter POS5', 'Ticketing', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, '62564117', NULL, '470000074052200', '13255CT20861104', 'Locker Counter POS6', 'Ticketing', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, '62564133', NULL, '470000074052200', '13274CT20954216', 'Locker Counter POS7', 'Ticketing', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, '62564136', NULL, '470000074052200', '13274CT20954066', 'Locker Counter POS8', 'Ticketing', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, '62564120', NULL, '470000074052200', '13274CT20954365', 'Counter POS9 (MRS)', 'Retail', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, '62564142', NULL, '470000074052200', '14298CT22812690', 'D-Block Retail', 'Retail', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, '62564126', NULL, '470000074052200', '13274CT20955171', 'Cones', 'FnB', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, '62564135', NULL, '470000074052200', '13274CT20954312', 'Ammos POS1', 'FnB', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, '62564137', NULL, '470000074052200', '13274CT20954565', 'Ammos POS2', 'FnB', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, '62564119', NULL, '470000074052200', '14008CT21397433', 'Ammos POS3', 'FnB', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, '', '40936156', '', '13166CT20479047', 'Ammos POS4', 'FnB', '1', '1773431', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, '62564132', NULL, '470000074052200', '13274CT20954297', 'Ammos POS5', 'FnB', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, '62564125', NULL, '470000074052200', '13274CT20954372', 'Salty', 'FnB', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, '62564083', NULL, '470000074052200', '13274CT20955017', 'Sunbeatz POS1', 'FnB', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, '62564125', NULL, '470000074052200', '14007CT21396217', 'SunBeatz bar1', 'FnB', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, '62564129', NULL, '470000074052200', '13274CT20954237', 'Redbonnet POS1', 'FnB', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, '62564128', NULL, '470000074052200', '13269CT20928237', 'Redbonnet POS2', 'FnB', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, '62564127', NULL, '470000074052200', '14362CT23180327', 'Ammos bar 2', 'FnB', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, '', '40940270', '470000074052200', '13166CT20478960', 'DIGIphoto (MRS)', 'Retail', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, '62564121', NULL, '470000074052200', '13287CT21014254', 'WAVE POOL', 'Retail', '0', '', 'Airtel', 'EDC Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, '62564140', NULL, '470000074052200', '14064WL21484714', 'SunBeatz bar2', 'FnB', '0', '', 'NA', 'GPRS Terminal', 'Pine Labs', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, '62564139', '', '470000074052200', '13316WL2108015', 'SunBeatz bar3-Ammos', 'FnB', '0', '', 'Vodafone', 'GPRS Terminal', 'Pine Labs', 'Water Park', 'Working', 'GPRS machine faulty showing alert interruption. need to replace the machine.machine is replaced now its working fine.old serial no:14042WL21400669', '2016-10-17 19:10:29', '2016-10-17 19:10:29'),
(85, '40943990', NULL, NULL, '13270WL20924912', 'Back Office', 'IT', '0', '', 'NA', 'GPRS Terminal', 'Pine Labs', 'Back Office', 'Working', '', '2016-09-14 17:44:17', '2016-09-14 17:44:17'),
(86, '62500707', NULL, '470000074052200', '140220WL21372117', 'MAIN RETAIL STORE', 'Retail', '0', '', 'NA', 'GPRS Terminal', 'ICICI', 'Water Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, '', '40940256', '470000074052200', '13164CT20468467', 'SNOW RETAIL  (Master)', 'Retail', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Snow Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, '', '40940257', '470000074052200', '13002CT2042506', 'SNOW RETAIL  (Counter)', 'Retail', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Snow Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, '', '40936202', '470000074052200', '13165CT20475576', 'DIGIPHOTO SNOW', 'IT', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Snow Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, '40940256', NULL, NULL, '13164CT20468467', 'BACKOFFICE', 'IT', '0', '', 'NA', 'EDC Terminal', 'Pine Labs', 'Back Office', 'Working', '', '2016-09-14 17:41:31', '2016-09-14 17:41:31'),
(91, '', '40936162', '', '14292CT22769480', 'BACKOFFICE', 'IT', '1', '1773428', 'NA', 'EDC Terminal', 'Pine Labs', 'Back Office', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, '', '40936192', '470000074052200', '13152CT20407107', 'BACKOFFICE', 'IT', '0', '', 'NA', 'EDC Terminal', 'Pine Labs', 'Back Office', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, '', '40940257', '470000074052200', '13164CT20467858', 'BACKOFFICE', 'IT', '0', '', 'NA', 'EDC Terminal', 'Pine Labs', 'Back Office', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, '', '40936166', '470000074052200', '13199CT20630609', 'BACKOFFICE', 'IT', '0', '', 'NA', 'EDC Terminal', 'Pine Labs', 'Back Office', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, '62564145', NULL, '470000074052200', '14298CT22812945', 'BACKOFFICE', 'IT', '0', '', 'NA', 'EDC Terminal', 'Pine Labs', 'Back Office', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, '62564127', NULL, '470000074052200', '14362CT23180327', 'SPARE IN Waterpark', 'IT', '0', '', 'NA', 'EDC Terminal', 'Pine Labs', 'Back Office', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, '', '40943990', '470000074052200', '13270WL20924912', 'Ticketing counter', 'Ticketing', '0', '', 'Airtel', 'GPRS Terminal', 'Pine Labs', 'Theme Park', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, '88006009', NULL, '470000074052200', '12084WL60492402', 'BACKOFFICE', 'IT', '0', '', 'NA', 'GPRS Terminal', 'Pine Labs', 'Back Office', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, '72056681', NULL, NULL, '14080WL21543556', 'BACKOFFICE', 'IT', '1', '', 'NA', 'GPRS Terminal', 'Pine Labs', 'Back Office', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, '72060466', NULL, NULL, '15077WL81100284', 'BACKOFFICE', 'IT', '1', '', 'NA', 'GPRS Terminal', 'Pine Labs', 'Back Office', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, '62500700', NULL, '470000074052200', '15276WL23584222', 'BACKOFFICE ', 'IT', '0', '', 'Vodafone', 'GPRS Terminal', 'ICICI', 'Back Office', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, '62500703', '', '470000074052200', '13337WL21168464', 'BACKOFFICE ', 'IT', '0', '', 'Vodafone', 'GPRS Terminal', 'ICICI', 'Back Office', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, '62500704', '', '470000074052200', '13337WL21167870', 'BACKOFFICE', 'IT', '0', '', 'Vodafone', 'GPRS Terminal', 'ICICI', 'Back Office', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, '', '40936169', '470000074052200', '15270CT24282480', 'BACKOFFICE', 'IT', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Back Office', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, '40936177', '88005983', '470000074052200', '13165CT20475366', 'BACKOFFICE', 'IT', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Back Office', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, '62564141', '', '470000074052200', '14353CT23113348', 'BACKOFFICE', 'IT', '0', '', 'Vodafone', 'EDC Terminal', 'Pine Labs', 'Back Office', 'Working', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `edc_issue`
--

CREATE TABLE IF NOT EXISTS `edc_issue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `issue_qty` int(11) NOT NULL,
  `issue_date` date NOT NULL,
  `af1` varchar(50) DEFAULT NULL,
  `af2` varchar(50) DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `edc_issue`
--

INSERT INTO `edc_issue` (`id`, `department`, `location`, `issue_qty`, `issue_date`, `af1`, `af2`, `date_created`, `date_modified`) VALUES
(1, 'FnB', 'testq', 50, '2017-03-06', NULL, NULL, '2017-03-17 00:10:26', '2017-03-17 00:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `edc_stock`
--

CREATE TABLE IF NOT EXISTS `edc_stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier` varchar(50) NOT NULL,
  `stock_qty` int(11) NOT NULL,
  `entry_date` date NOT NULL,
  `bal_qty` int(11) NOT NULL,
  `af1` varchar(50) DEFAULT NULL,
  `af2` varchar(50) DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `edc_stock`
--

INSERT INTO `edc_stock` (`id`, `supplier`, `stock_qty`, `entry_date`, `bal_qty`, `af1`, `af2`, `date_created`, `date_modified`) VALUES
(1, 'Pine Labs', 100, '2017-03-29', 0, NULL, NULL, '2017-03-17 00:08:16', '2017-03-17 00:08:16');

-- --------------------------------------------------------

--
-- Table structure for table `sim`
--

CREATE TABLE IF NOT EXISTS `sim` (
  `SIM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SIM_NAME` varchar(20) NOT NULL,
  PRIMARY KEY (`SIM_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sim`
--

INSERT INTO `sim` (`SIM_ID`, `SIM_NAME`) VALUES
(1, 'Vodafone'),
(2, 'Airtel'),
(3, 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `terminal`
--

CREATE TABLE IF NOT EXISTS `terminal` (
  `TERMINAL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TERMINAL_NAME` varchar(50) NOT NULL,
  PRIMARY KEY (`TERMINAL_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `terminal`
--

INSERT INTO `terminal` (`TERMINAL_ID`, `TERMINAL_NAME`) VALUES
(1, 'EDC Terminal'),
(2, 'GPRS Terminal');

-- --------------------------------------------------------

--
-- Table structure for table `terminal_status`
--

CREATE TABLE IF NOT EXISTS `terminal_status` (
  `STATUS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `STATUS_NAME` varchar(50) NOT NULL,
  PRIMARY KEY (`STATUS_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `terminal_status`
--

INSERT INTO `terminal_status` (`STATUS_ID`, `STATUS_NAME`) VALUES
(1, 'Working'),
(2, 'Not Working'),
(3, 'Physical Damage'),
(4, 'Missing');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `type` varchar(10) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `createtime` datetime NOT NULL,
  `lastvisit` datetime NOT NULL,
  `superuser` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL COMMENT 'A=>Active, I=>Inactive',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `password`, `email`, `type`, `activkey`, `createtime`, `lastvisit`, `superuser`, `status`) VALUES
(1, 'admin', 'admin', '0192023a7bbd73250516f069df18b500', 'webmaster@example.com', 'admin', '9a24eff8c15a6a141ece27eb6947da0f', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', '1'),
(2, 'lavket', 'Lavket', '8ff3b951bccef194dbe741066d037c98', 'demo@example.com', 'normal', '099f825543f7850cc038b90aaff39fac', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '1'),
(3, 'rahul', 'Rahul', 'ceb835540ca5fa767cd0dc169ae2108e', 'mail@mail.com', 'normal', 'e886a53a0687ee2a3155772cdefeac29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', '1'),
(4, 'sisir', 'Sisir', 'e3698b56fe52566c00fc75ea6b9d1d3e', 'account@example.com', 'normal', '1', '2011-09-24 10:46:23', '2011-09-24 10:46:26', '1', '1'),
(5, 'abhisek', 'Abhisek', '4faac31a71576f400f0f2d97a0dfb05e', 'abhisek.prasad@adlabsentertainment.com', 'normal', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(8, 'satya', 'Satyavan', '1cbff3d2bdcc7486cc38d9edd9c024df', 'satya@mail.com', 'normal', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', '1'),
(9, 'sarfaraz', 'Sarfaraz', '36349308725ac54fa3254c49d31cc8a5', 'adlabs@mail.com', 'normal', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(11, 'lakshmana', 'Lakshmana', '3c87401c124b75820e38058e0f9054a0', 'lakshmana@mail.com', 'normal', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE IF NOT EXISTS `user_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `rand` varchar(50) NOT NULL,
  `email` varchar(256) NOT NULL,
  `department_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `username`, `password`, `rand`, `email`, `department_id`, `date_added`, `date_modified`) VALUES
(1, 'superaccounts', '19826203b3dccc2ff0465cfd17526e0ecedabc7fec7b78f0f3853e79ce7e6530', '18117', 'superaccounts@mail.com', 3, '2013-09-18 11:07:43', '2013-09-24 07:48:43'),
(2, 'marketing', 'e2a530e251d3675034d23f5c5f87f54ec3182a088ba7d13350824794f8e6b76e', '18206', 'marketing@mail.com', 2, '2013-09-18 11:07:43', '2013-09-24 07:49:15'),
(3, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '4125', 'admin@mail.com', 1, '2013-09-18 11:07:43', '2015-03-02 23:17:21'),
(11, 'adlabs', '8821ae8310e6f5184c8ed60dcf5ed9dab424c9bd3f963a8ed17f9171e69cd4dc', '26940', 'adlabs@mail.com', 1, '2013-09-21 17:30:13', '2013-09-24 07:48:01'),
(12, 'accounts', 'bc62a3c14fec277e3dc6b504bf7c6348c2e421f8acc42032deddb0a96070f078', '1720338822', 'accounts@mail.com', 3, '2013-09-22 00:45:46', '2013-09-22 00:45:46'),
(13, 'lavket', '9f3193a154f59f4b0a6032a3bd53cedb75b5cf3e2c5ea7c1c4f0fefab817be1c', '4643', 'lavket@gmail.com', 1, '2015-03-02 04:15:10', '2016-09-20 22:03:32');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `VENDOR_ID` int(11) NOT NULL AUTO_INCREMENT,
  `VENDOR_NAME` varchar(50) NOT NULL,
  PRIMARY KEY (`VENDOR_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`VENDOR_ID`, `VENDOR_NAME`) VALUES
(1, 'Pine Labs'),
(2, 'ICICI'),
(3, 'INNOVITI');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
