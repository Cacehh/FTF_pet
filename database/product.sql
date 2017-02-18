-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2017 at 08:09 AM
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
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ProdName` varchar(30) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Quantity` int(255) NOT NULL,
  `SupplyPrice` decimal(5,2) NOT NULL,
  `MUPrice` decimal(5,2) NOT NULL,
  `Amount` decimal(5,2) NOT NULL,
  `Description` tinytext,
  `Image` varchar(30) DEFAULT 'default',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID_UNIQUE` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10051 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `ProdName`, `Category`, `Type`, `Quantity`, `SupplyPrice`, `MUPrice`, `Amount`, `Description`, `Image`) VALUES
(10001, 'Affenpinscher', 'Pet', 'Dog', 10, '0.00', '0.00', '999.99', NULL, 'default'),
(10002, 'Afghan Hound', 'Pet', 'Dog', 10, '0.00', '0.00', '999.99', NULL, 'default'),
(10003, 'Affenpinscher', 'Pet', 'Dog', 10, '0.00', '0.00', '999.99', NULL, 'default'),
(10004, 'Afghan Hound', 'Pet', 'Dog', 10, '0.00', '0.00', '999.99', NULL, 'default'),
(10005, 'Akita', 'Pet', 'Dog', 12, '0.00', '0.00', '999.99', NULL, 'default'),
(10006, 'America Foxhound', 'Pet', 'Dog', 8, '0.00', '0.00', '999.99', NULL, 'default'),
(10007, 'Beagle', 'Pet', 'Dog', 30, '0.00', '0.00', '999.99', NULL, 'default'),
(10008, 'Catahoula Leopard Dog', 'Pet', 'Dog', 4, '0.00', '0.00', '999.99', NULL, 'default'),
(10009, 'Bengal Cat', 'Pet', 'Cat', 28, '0.00', '0.00', '999.99', NULL, 'default'),
(10010, 'Akita', 'Pet', 'Dog', 12, '0.00', '0.00', '999.99', NULL, 'default'),
(10011, 'America Foxhound', 'Pet', 'Dog', 8, '0.00', '0.00', '999.99', NULL, 'default'),
(10012, 'Beagle', 'Pet', 'Dog', 30, '0.00', '0.00', '999.99', NULL, 'default'),
(10013, 'Catahoula Leopard Dog', 'Pet', 'Dog', 4, '0.00', '0.00', '999.99', NULL, 'default'),
(10014, 'Bengal Cat', 'Pet', 'Cat', 28, '0.00', '0.00', '999.99', NULL, 'default'),
(10015, 'American Curl', 'Pet', 'Cat', 18, '0.00', '0.00', '999.99', NULL, 'default'),
(10016, 'British Short Hair', 'Pet', 'Cat', 22, '0.00', '0.00', '999.99', NULL, 'default'),
(10017, 'American Curl', 'Pet', 'Cat', 15, '0.00', '0.00', '999.99', NULL, 'default'),
(10018, 'Burmese', 'Pet', 'Cat', 27, '0.00', '0.00', '999.99', NULL, 'default'),
(10019, 'Cymric', 'Pet', 'Cat', 10, '0.00', '0.00', '999.99', NULL, 'default'),
(10020, 'Persian ', 'Pet', 'Cat', 44, '0.00', '0.00', '999.99', NULL, 'default'),
(10021, 'Siamese Cat', 'Pet', 'Cat', 16, '0.00', '0.00', '999.99', NULL, 'default'),
(10022, 'American Curl', 'Pet', 'Cat', 15, '0.00', '0.00', '999.99', NULL, 'default'),
(10023, 'Burmese', 'Pet', 'Cat', 27, '0.00', '0.00', '999.99', NULL, 'default'),
(10024, 'Cymric', 'Pet', 'Cat', 10, '0.00', '0.00', '999.99', NULL, 'default'),
(10025, 'Persian ', 'Pet', 'Cat', 44, '0.00', '0.00', '999.99', NULL, 'default'),
(10026, 'Siamese Cat', 'Pet', 'Cat', 16, '0.00', '0.00', '999.99', NULL, 'default'),
(10027, 'Whiskas Cat Food', 'Product', 'Cat Food', 100, '0.00', '0.00', '150.00', NULL, '1'),
(10028, 'Blackwood Chicken Meal and Fie', 'Product', 'Cat Food', 200, '0.00', '0.00', '280.00', NULL, '2'),
(10029, 'Lotus Just Juicy Pork Stew Gra', 'Product', 'Dog Food', 200, '0.00', '0.00', '250.00', NULL, '3'),
(10030, 'Wysong Optimal Vitality Dry Ca', 'Product', 'Dog Food', 280, '0.00', '0.00', '300.00', NULL, '4'),
(10031, 'Big Bite Bunch of Treats, Beef', 'Product', 'Dog Food', 382, '0.00', '0.00', '260.00', NULL, '1'),
(10032, 'Red Cap Oranda Goldfish', 'Pet', 'Fish', 110, '0.00', '0.00', '25.00', NULL, 'default'),
(10033, 'Blue Paradise', 'Pet', 'Fish', 130, '0.00', '0.00', '28.00', NULL, 'default'),
(10034, 'Syrian Hamster', 'Pet', 'Fish', 30, '0.00', '0.00', '100.00', NULL, 'default'),
(10035, 'Dwarf Cambells Russian Hamster', 'Pet', 'Hamster', 27, '0.00', '0.00', '150.00', NULL, 'default'),
(10036, 'Roborovski Hamster', 'Pet', 'Hamster', 27, '0.00', '0.00', '200.00', NULL, 'default'),
(10037, 'Red Cap Oranda Goldfish', 'Pet', 'Fish', 110, '0.00', '0.00', '25.00', NULL, 'default'),
(10038, 'Blue Paradise', 'Pet', 'Fish', 130, '0.00', '0.00', '28.00', NULL, 'default'),
(10039, 'Syrian Hamster', 'Pet', 'Hamster', 30, '0.00', '0.00', '100.00', NULL, 'default'),
(10040, 'Dwarf Cambells Russian Hamster', 'Pet', 'Hamster', 27, '0.00', '0.00', '150.00', NULL, 'default'),
(10041, 'Roborovski Hamster', 'Pet', 'Hamster', 27, '0.00', '0.00', '200.00', NULL, 'default'),
(10042, 'Dog Food 1', 'Product', 'Dog Food', 30, '0.00', '0.00', '100.00', NULL, '2'),
(10043, 'Dog food 2', 'Product', 'Dog Food', 30, '0.00', '0.00', '200.00', NULL, '3'),
(10044, 'Cat Food 1', 'Product', 'Cat Food', 30, '0.00', '0.00', '200.00', NULL, '4'),
(10046, 'kaka', '', 'Food', 100, '99.99', '100.00', '200.00', 'akka', 'default'),
(10047, 'haha', 'Product', 'Cages', 100, '99.99', '100.00', '200.00', 'ahha', 'default'),
(10048, 'samplPet', 'Pet', 'Birds', 100, '99.99', '100.00', '200.00', 'samplePet', 'default'),
(10049, 'kawkawaawawawhaha', 'Pet', 'Fish', 100, '99.99', '100.00', '200.00', 'kawakakahahah', 'default'),
(10050, 'Rolf Cayce Pano Dy', 'Pet', 'Dog', 100, '100.60', '100.50', '201.10', 'wahahahah pogi daw', 'default');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
