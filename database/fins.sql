-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2017 at 07:38 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fins`
--

-- --------------------------------------------------------

--
-- Table structure for table `breeder`
--

CREATE TABLE `breeder` (
  `breederID` int(11) NOT NULL,
  `breederName` varchar(45) NOT NULL,
  `breederAddress` varchar(45) NOT NULL,
  `contactNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breeder`
--

INSERT INTO `breeder` (`breederID`, `breederName`, `breederAddress`, `contactNumber`) VALUES
(1, 'Axel Grey', 'Zambales', 1234567890),
(2, 'Percy Jackson', 'Baguio', 1523478690);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(11) NOT NULL,
  `customerName` varchar(100) NOT NULL,
  `customerAddress` varchar(100) NOT NULL,
  `contactNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `customerName`, `customerAddress`, `contactNumber`) VALUES
(1, 'Hugh Jackman', 'New York City', 0),
(2, 'Magnetto', 'Sultan Kudarat', 0),
(3, 'Wolverine', 'Saint Louis University', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderID` int(11) NOT NULL,
  `orderDate` date NOT NULL,
  `orderQuantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderID`, `orderDate`, `orderQuantity`) VALUES
(1, '2016-12-11', 2),
(2, '2017-02-05', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ordpr`
--

CREATE TABLE `ordpr` (
  `prodID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `statusDesc` varchar(45) NOT NULL COMMENT 'status for products (i.e pending, sold out, in stock , quantity)'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordpr`
--

INSERT INTO `ordpr` (`prodID`, `orderID`, `statusDesc`) VALUES
(1, 1, 'Available'),
(2, 2, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentID` int(11) NOT NULL,
  `paymentDate` date NOT NULL,
  `paymentTime` varchar(45) NOT NULL,
  `paymentAmount` int(11) NOT NULL,
  `paymentType` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentID`, `paymentDate`, `paymentTime`, `paymentAmount`, `paymentType`) VALUES
(1, '2017-02-05', '2 07', 100, 'Cash'),
(2, '2016-02-09', '9 06', 5000, 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `prodName` varchar(45) NOT NULL,
  `prodAmount` decimal(10,0) NOT NULL,
  `inStock` int(11) NOT NULL,
  `category` varchar(45) NOT NULL,
  `datePurchased` date NOT NULL,
  `breederID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `prodName`, `prodAmount`, `inStock`, `category`, `datePurchased`, `breederID`) VALUES
(1, 'pedigree', '100', 2, 'dog food', '2016-12-31', 1),
(2, '12X12X8', '450', 1, 'aquarium', '2017-01-12', 2),
(3, 'meow purr', '100', 5, 'cat food', '2017-03-12', 1),
(4, 'birdie', '135', 4, 'bird feeds', '2017-04-15', 2),
(5, 'jumpy rabbit', '200', 3, 'rabbit foods', '2017-03-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `salesID` int(11) NOT NULL,
  `salesDate` date DEFAULT NULL,
  `salesQuantity` varchar(45) DEFAULT NULL,
  `receiptNumber` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`salesID`, `salesDate`, `salesQuantity`, `receiptNumber`) VALUES
(1, '2017-02-05', '2', 1),
(2, '2016-02-09', '3', 2),
(3, '2017-02-14', '4', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sprod`
--

CREATE TABLE `sprod` (
  `salesID` int(11) NOT NULL,
  `prodID` int(11) NOT NULL,
  `prodName` varchar(45) NOT NULL,
  `prodType` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sprod`
--

INSERT INTO `sprod` (`salesID`, `prodID`, `prodName`, `prodType`) VALUES
(1, 1, 'Pedigree', 'Dog Food'),
(2, 2, 'Chain', 'Dog Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplierID` int(11) NOT NULL,
  `supplierName` varchar(45) NOT NULL,
  `supplierAddress` varchar(45) NOT NULL,
  `contactNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplierID`, `supplierName`, `supplierAddress`, `contactNumber`) VALUES
(1, 'Percy Jackson', 'Royal Residence', 1234567890);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breeder`
--
ALTER TABLE `breeder`
  ADD KEY `prodID_idx` (`breederID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD KEY `ciiD_idx` (`orderID`);

--
-- Indexes for table `ordpr`
--
ALTER TABLE `ordpr`
  ADD PRIMARY KEY (`prodID`),
  ADD KEY `prodID_idx` (`prodID`,`orderID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD KEY `customerID` (`paymentID`,`paymentType`,`paymentAmount`,`paymentTime`,`paymentDate`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `bID_idx` (`breederID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`salesID`);

--
-- Indexes for table `sprod`
--
ALTER TABLE `sprod`
  ADD PRIMARY KEY (`salesID`),
  ADD KEY `salesID_idx` (`prodID`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD KEY `productID_idx` (`supplierID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `breeder`
--
ALTER TABLE `breeder`
  ADD CONSTRAINT `proddID` FOREIGN KEY (`breederID`) REFERENCES `product` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `ciiD` FOREIGN KEY (`orderID`) REFERENCES `customers` (`customerID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `piid` FOREIGN KEY (`orderID`) REFERENCES `product` (`productID`) ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `customerID` FOREIGN KEY (`paymentID`) REFERENCES `customers` (`customerID`) ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `breeder_ID` FOREIGN KEY (`breederID`) REFERENCES `breeder` (`breederID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `cID` FOREIGN KEY (`salesID`) REFERENCES `customers` (`customerID`),
  ADD CONSTRAINT `pID` FOREIGN KEY (`salesID`) REFERENCES `product` (`productID`);

--
-- Constraints for table `sprod`
--
ALTER TABLE `sprod`
  ADD CONSTRAINT `prodID` FOREIGN KEY (`salesID`) REFERENCES `product` (`productID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `salesID` FOREIGN KEY (`prodID`) REFERENCES `sales` (`salesID`) ON UPDATE CASCADE;

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `productID` FOREIGN KEY (`supplierID`) REFERENCES `product` (`productID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
