-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2017 at 02:04 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ftnf`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
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
('00001', 'Affenpinscher', 'Pet Dog', 10, '6000', '2017-02-05 07:40:51'),
('00002', 'Afghan Hound', 'Pet Dog', 10, '4580', '2017-02-05 07:40:51'),
('00001', 'Affenpinscher', 'Pet Dog', 10, '6000', '2017-02-05 07:41:02'),
('00002', 'Afghan Hound', 'Pet Dog', 10, '4580', '2017-02-05 07:41:02'),
('00003', 'Akita', 'Pet Dog', 12, '9500', '2017-02-05 07:44:52'),
('00004', 'America Foxhound', 'Pet Dog', 8, '15000', '2017-02-05 07:44:52'),
('00005', 'Beagle', 'Pet Dog', 30, '12500', '2017-02-05 07:44:52'),
('00006', 'Catahoula Leopard Dog', 'Pet Dog', 4, '25000', '2017-02-05 07:44:52'),
('00007', 'Bengal Cat', 'Pet Cat', 28, '10300', '2017-02-05 07:44:52'),
('00003', 'Akita', 'Pet Dog', 12, '9500', '2017-02-05 07:45:40'),
('00004', 'America Foxhound', 'Pet Dog', 8, '15000', '2017-02-05 07:45:40'),
('00005', 'Beagle', 'Pet Dog', 30, '12500', '2017-02-05 07:45:40'),
('00006', 'Catahoula Leopard Dog', 'Pet Dog', 4, '25000', '2017-02-05 07:45:40'),
('00007', 'Bengal Cat', 'Pet Cat', 28, '10300', '2017-02-05 07:45:40'),
('00008', 'American Curl', 'Pet Cat', 18, '25000', '2017-02-05 07:47:03'),
('00009', 'British Short Hair', 'Pet Cat', 22, '35000', '2017-02-05 07:47:03'),
('00007', 'American Curl', 'Pet Cat', 15, '19000', '2017-02-05 07:49:44'),
('00008', 'Burmese', 'Pet Cat', 27, '29000', '2017-02-05 07:49:44'),
('00009', 'Cymric', 'Pet Cat', 10, '38000', '2017-02-05 07:49:44'),
('00010', 'Persian ', 'Pet Cat', 44, '50000', '2017-02-05 07:49:44'),
('00011', 'Siamese Cat', 'Pet Cat', 16, '27300', '2017-02-05 07:49:44'),
('00007', 'American Curl', 'Pet Cat', 15, '19000', '2017-02-05 07:49:46'),
('00008', 'Burmese', 'Pet Cat', 27, '29000', '2017-02-05 07:49:46'),
('00009', 'Cymric', 'Pet Cat', 10, '38000', '2017-02-05 07:49:46'),
('00010', 'Persian ', 'Pet Cat', 44, '50000', '2017-02-05 07:49:46'),
('00011', 'Siamese Cat', 'Pet Cat', 16, '27300', '2017-02-05 07:49:46'),
('00012', 'Whiskas Cat Food', 'Cat Food', 100, '150', '2017-02-05 07:59:55'),
('00013', 'Blackwood Chicken Meal and Fie', 'Cat Food', 200, '280', '2017-02-05 07:59:55'),
('00013', 'Lotus Just Juicy Pork Stew Gra', 'Cat Food', 200, '250', '2017-02-05 07:59:55'),
('00014', 'Wysong Optimal Vitality Dry Ca', 'Cat Food ', 280, '300', '2017-02-05 07:59:55'),
('00015', 'Big Bite Bunch of Treats, Beef', 'Dog Food ', 382, '260', '2017-02-05 07:59:55'),
('00022', 'Red Cap Oranda Goldfish', 'Pet Fish', 110, '25', '2017-02-05 08:03:40'),
('00023', 'Blue Paradise', 'Pet Fish', 130, '28', '2017-02-05 08:03:40'),
('00024', 'Syrian Hamster', 'Pet Hamster', 30, '100', '2017-02-05 08:03:40'),
('00025', 'Dwarf Cambells Russian Hamster', 'Pet Hamster', 27, '150', '2017-02-05 08:03:40'),
('00026', 'Roborovski Hamster', 'Pet Hamster', 27, '200', '2017-02-05 08:03:40'),
('00022', 'Red Cap Oranda Goldfish', 'Pet Fish', 110, '25', '2017-02-05 08:03:46'),
('00023', 'Blue Paradise', 'Pet Fish', 130, '28', '2017-02-05 08:03:46'),
('00024', 'Syrian Hamster', 'Pet Hamster', 30, '100', '2017-02-05 08:03:46'),
('00025', 'Dwarf Cambells Russian Hamster', 'Pet Hamster', 27, '150', '2017-02-05 08:03:46'),
('00026', 'Roborovski Hamster', 'Pet Hamster', 27, '200', '2017-02-05 08:03:46');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
