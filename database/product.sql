-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2017 at 09:08 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ftnf`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ProdID` varchar(5) NOT NULL,
  `ProdName` varchar(30) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Quantity` int(255) NOT NULL,
  `Amount` decimal(10,0) NOT NULL,
  `Timestamp` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProdID`, `ProdName`, `Category`, `Quantity`, `Amount`, `Timestamp`) VALUES
('00001', 'Product 1', 'Product', 100, '51', '2017-02-04 06:13:28'),
('00002', 'Pet 1', 'Pet', 19, '981', '2017-02-04 06:13:28'),
('00003', 'Product 2', 'Product', 50, '27', '2017-02-04 06:14:44'),
('00004', 'Product 3', 'Product', 150, '70', '2017-02-04 06:14:44'),
('00002', 'Pet 2', 'Pet', 91, '990', '2017-02-04 06:15:57'),
('00003', 'Pet 3', 'Pet', 570, '550', '2017-02-04 06:15:57'),
('00004', 'Product 4', 'Product', 50, '730', '2017-02-04 06:17:54'),
('00005', 'Product 5', 'Product', 30, '181', '2017-02-04 06:17:54'),
('00009', 'Sample', 'Product', 60, '100', '2017-02-04 07:30:27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
