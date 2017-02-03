-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2017 at 12:35 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fins`
--
DROP DATABASE `fins`;
CREATE DATABASE IF NOT EXISTS `fins` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fins`;

-- --------------------------------------------------------

--
-- Table structure for table `breeder`
--

DROP TABLE IF EXISTS `breeder`;
CREATE TABLE IF NOT EXISTS `breeder` (
  `breederID` int(11) NOT NULL,
  `breederName` varchar(45) NOT NULL,
  `breederAddress` varchar(45) NOT NULL,
  `contactNumber` int(11) NOT NULL,
  KEY `breederID` (`breederID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customerID` int(11) NOT NULL AUTO_INCREMENT,
  `customerName` varchar(100) NOT NULL,
  `customerAddress` varchar(100) NOT NULL,
  PRIMARY KEY (`customerID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `customerName`, `customerAddress`) VALUES
(1, 'Hugh Jackman', 'New York City'),
(2, 'Magnetto', 'Sultan Kudarat'),
(3, 'Wolverine', 'Saint Louis University');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `orderID` int(11) NOT NULL,
  `orderDate` date NOT NULL,
  `orderQuantity` int(11) NOT NULL,
  PRIMARY KEY (`orderID`),
  KEY `customerID` (`orderID`),
  KEY `productID` (`orderID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderID`, `orderDate`, `orderQuantity`) VALUES
(1, '2016-12-11', 2);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `paymentID` int(11) NOT NULL AUTO_INCREMENT,
  `paymentDate` date NOT NULL,
  `paymentTime` varchar(45) NOT NULL,
  `paymentAmount` int(11) NOT NULL,
  `paymentType` varchar(45) NOT NULL,
  PRIMARY KEY (`paymentID`,`paymentType`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `productID` int(11) NOT NULL,
  `productAmount` int(11) NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `category` varchar(45) NOT NULL,
  `datePurchased` date NOT NULL,
  PRIMARY KEY (`productID`,`datePurchased`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `supplierID` int(11) NOT NULL,
  `supplierName` varchar(45) NOT NULL,
  `supplierAddress` varchar(45) NOT NULL,
  `contactNumber` int(11) NOT NULL,
  PRIMARY KEY (`supplierID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
