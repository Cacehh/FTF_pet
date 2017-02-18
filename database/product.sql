-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2017 at 05:35 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

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
  `ID` int(11) NOT NULL,
  `ProdName` varchar(30) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Quantity` int(255) NOT NULL,
  `Amount` decimal(10,0) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Description` tinytext,
  `Image` varchar(30) DEFAULT 'default'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `ProdName`, `Category`, `Type`, `Quantity`, `Amount`, `Timestamp`, `Description`, `Image`) VALUES
(10001, 'Affenpinscher', 'Pet', 'Dog', 10, '6000', '2017-02-18 03:54:40', NULL, 'default'),
(10002, 'Afghan Hound', 'Pet', 'Dog', 10, '4580', '2017-02-18 03:54:40', NULL, 'default'),
(10003, 'Affenpinscher', 'Pet', 'Dog', 10, '6000', '2017-02-18 03:54:40', NULL, 'default'),
(10004, 'Afghan Hound', 'Pet', 'Dog', 10, '4580', '2017-02-18 03:54:40', NULL, 'default'),
(10005, 'Akita', 'Pet', 'Dog', 12, '9500', '2017-02-18 03:54:40', NULL, 'default'),
(10006, 'America Foxhound', 'Pet', 'Dog', 8, '15000', '2017-02-18 03:54:40', NULL, 'default'),
(10007, 'Beagle', 'Pet', 'Dog', 30, '12500', '2017-02-18 03:54:40', NULL, 'default'),
(10008, 'Catahoula Leopard Dog', 'Pet', 'Dog', 4, '25000', '2017-02-18 03:54:40', NULL, 'default'),
(10009, 'Bengal Cat', 'Pet', 'Cat', 28, '10300', '2017-02-18 03:54:40', NULL, 'default'),
(10010, 'Akita', 'Pet', 'Dog', 12, '9500', '2017-02-18 03:54:40', NULL, 'default'),
(10011, 'America Foxhound', 'Pet', 'Dog', 8, '15000', '2017-02-18 03:54:40', NULL, 'default'),
(10012, 'Beagle', 'Pet', 'Dog', 30, '12500', '2017-02-18 03:54:40', NULL, 'default'),
(10013, 'Catahoula Leopard Dog', 'Pet', 'Dog', 4, '25000', '2017-02-18 03:54:40', NULL, 'default'),
(10014, 'Bengal Cat', 'Pet', 'Cat', 28, '10300', '2017-02-18 03:54:40', NULL, 'default'),
(10015, 'American Curl', 'Pet', 'Cat', 18, '25000', '2017-02-18 03:54:40', NULL, 'default'),
(10016, 'British Short Hair', 'Pet', 'Cat', 22, '35000', '2017-02-18 03:54:40', NULL, 'default'),
(10017, 'American Curl', 'Pet', 'Cat', 15, '19000', '2017-02-18 03:54:40', NULL, 'default'),
(10018, 'Burmese', 'Pet', 'Cat', 27, '29000', '2017-02-18 03:54:40', NULL, 'default'),
(10019, 'Cymric', 'Pet', 'Cat', 10, '38000', '2017-02-18 03:54:40', NULL, 'default'),
(10020, 'Persian ', 'Pet', 'Cat', 44, '50000', '2017-02-18 03:54:40', NULL, 'default'),
(10021, 'Siamese Cat', 'Pet', 'Cat', 16, '27300', '2017-02-18 03:54:40', NULL, 'default'),
(10022, 'American Curl', 'Pet', 'Cat', 15, '19000', '2017-02-18 03:54:40', NULL, 'default'),
(10023, 'Burmese', 'Pet', 'Cat', 27, '29000', '2017-02-18 03:54:40', NULL, 'default'),
(10024, 'Cymric', 'Pet', 'Cat', 10, '38000', '2017-02-18 03:54:40', NULL, 'default'),
(10025, 'Persian ', 'Pet', 'Cat', 44, '50000', '2017-02-18 03:54:40', NULL, 'default'),
(10026, 'Siamese Cat', 'Pet', 'Cat', 16, '27300', '2017-02-18 03:54:40', NULL, 'default'),
(10027, 'Whiskas Cat Food', 'Product', 'Cat Food', 100, '150', '2017-02-18 04:06:58', NULL, '1'),
(10028, 'Blackwood Chicken Meal and Fie', 'Product', 'Cat Food', 200, '280', '2017-02-18 04:06:58', NULL, '2'),
(10029, 'Lotus Just Juicy Pork Stew Gra', 'Product', 'Dog Food', 200, '250', '2017-02-18 04:06:58', NULL, '3'),
(10030, 'Wysong Optimal Vitality Dry Ca', 'Product', 'Dog Food', 280, '300', '2017-02-18 04:06:58', NULL, '4'),
(10031, 'Big Bite Bunch of Treats, Beef', 'Product', 'Dog Food', 382, '260', '2017-02-18 04:06:58', NULL, '1'),
(10032, 'Red Cap Oranda Goldfish', 'Pet', 'Fish', 110, '25', '2017-02-18 03:54:40', NULL, 'default'),
(10033, 'Blue Paradise', 'Pet', 'Fish', 130, '28', '2017-02-18 03:54:40', NULL, 'default'),
(10034, 'Syrian Hamster', 'Pet', 'Fish', 30, '100', '2017-02-18 03:54:40', NULL, 'default'),
(10035, 'Dwarf Cambells Russian Hamster', 'Pet', 'Hamster', 27, '150', '2017-02-18 03:54:40', NULL, 'default'),
(10036, 'Roborovski Hamster', 'Pet', 'Hamster', 27, '200', '2017-02-18 03:54:40', NULL, 'default'),
(10037, 'Red Cap Oranda Goldfish', 'Pet', 'Fish', 110, '25', '2017-02-18 03:54:40', NULL, 'default'),
(10038, 'Blue Paradise', 'Pet', 'Fish', 130, '28', '2017-02-18 03:54:40', NULL, 'default'),
(10039, 'Syrian Hamster', 'Pet', 'Hamster', 30, '100', '2017-02-18 03:54:40', NULL, 'default'),
(10040, 'Dwarf Cambells Russian Hamster', 'Pet', 'Hamster', 27, '150', '2017-02-18 03:54:40', NULL, 'default'),
(10041, 'Roborovski Hamster', 'Pet', 'Hamster', 27, '200', '2017-02-18 03:54:40', NULL, 'default'),
(10042, 'Dog Food 1', 'Product', 'Dog Food', 30, '100', '2017-02-18 04:06:58', NULL, '2'),
(10043, 'Dog food 2', 'Product', 'Dog Food', 30, '200', '2017-02-18 04:06:58', NULL, '3'),
(10044, 'Cat Food 1', 'Product', 'Cat Food', 30, '200', '2017-02-18 04:06:58', NULL, '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_UNIQUE` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10045;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
