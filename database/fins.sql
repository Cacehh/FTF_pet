CREATE DATABASE  IF NOT EXISTS `fins` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `fins`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: fins
-- ------------------------------------------------------
-- Server version	5.7.14

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `breeder`
--

DROP TABLE IF EXISTS `breeder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `breeder` (
  `breederID` int(11) NOT NULL,
  `breederName` varchar(45) NOT NULL,
  `breederAddress` varchar(45) NOT NULL,
  `contactNumber` int(11) NOT NULL,
  KEY `prodID_idx` (`breederID`),
  CONSTRAINT `proddID` FOREIGN KEY (`breederID`) REFERENCES `product` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `breeder`
--

LOCK TABLES `breeder` WRITE;
/*!40000 ALTER TABLE `breeder` DISABLE KEYS */;
INSERT INTO `breeder` VALUES (1,'Axel Grey','Zambales',1234567890),(2,'Percy Jackson','Baguio',1523478690);
/*!40000 ALTER TABLE `breeder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `customerID` int(11) NOT NULL AUTO_INCREMENT,
  `customerName` varchar(100) NOT NULL,
  `customerAddress` varchar(100) NOT NULL,
  `contactNumber` int(11) NOT NULL,
  PRIMARY KEY (`customerID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'Hugh Jackman','New York City',0),(2,'Magnetto','Sultan Kudarat',0),(3,'Wolverine','Saint Louis University',0);
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order` (
  `orderID` int(11) NOT NULL,
  `orderDate` date NOT NULL,
  `orderQuantity` int(11) NOT NULL,
  KEY `ciiD_idx` (`orderID`),
  CONSTRAINT `ciiD` FOREIGN KEY (`orderID`) REFERENCES `customers` (`customerID`) ON UPDATE CASCADE,
  CONSTRAINT `piid` FOREIGN KEY (`orderID`) REFERENCES `product` (`productID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (1,'2016-12-11',2),(2,'2017-02-05',3);
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordpr`
--

DROP TABLE IF EXISTS `ordpr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ordpr` (
  `prodID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `statusDesc` varchar(45) NOT NULL COMMENT 'status for products (i.e pending, sold out, in stock , quantity)',
  PRIMARY KEY (`prodID`),
  KEY `prodID_idx` (`prodID`,`orderID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordpr`
--

LOCK TABLES `ordpr` WRITE;
/*!40000 ALTER TABLE `ordpr` DISABLE KEYS */;
INSERT INTO `ordpr` VALUES (1,1,'Available'),(2,2,'Pending');
/*!40000 ALTER TABLE `ordpr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `paymentID` int(11) NOT NULL AUTO_INCREMENT,
  `paymentDate` date NOT NULL,
  `paymentTime` varchar(45) NOT NULL,
  `paymentAmount` int(11) NOT NULL,
  `paymentType` varchar(45) NOT NULL,
  KEY `customerID` (`paymentID`,`paymentType`,`paymentAmount`,`paymentTime`,`paymentDate`),
  CONSTRAINT `customerID` FOREIGN KEY (`paymentID`) REFERENCES `customers` (`customerID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
INSERT INTO `payment` VALUES (1,'2017-02-05','2 07',100,'Cash'),(2,'2016-02-09','9 06',5000,'Cash');
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `prodName` varchar(45) NOT NULL,
  `prodAmount` decimal(10,0) NOT NULL,
  `inStock` int(11) NOT NULL,
  `category` varchar(45) NOT NULL,
  `datePurchased` date NOT NULL,
  `breederID` int(11) NOT NULL,
  PRIMARY KEY (`productID`),
  KEY `bID_idx` (`breederID`),
  CONSTRAINT `breeder_ID` FOREIGN KEY (`breederID`) REFERENCES `breeder` (`breederID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'pedigree',100,2,'dog food','2016-12-31',1),(2,'12X12X8',450,1,'aquarium','2017-01-12',2),(3,'meow purr',100,5,'cat food','2017-03-12',1),(4,'birdie',135,4,'bird feeds','2017-04-15',2),(5,'jumpy rabbit',200,3,'rabbit foods','2017-03-17',1);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sales` (
  `salesID` int(11) NOT NULL,
  `salesDate` date DEFAULT NULL,
  `salesQuantity` varchar(45) DEFAULT NULL,
  `receiptNumber` int(11) DEFAULT NULL,
  PRIMARY KEY (`salesID`),
  CONSTRAINT `cID` FOREIGN KEY (`salesID`) REFERENCES `customers` (`customerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pID` FOREIGN KEY (`salesID`) REFERENCES `product` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales`
--

LOCK TABLES `sales` WRITE;
/*!40000 ALTER TABLE `sales` DISABLE KEYS */;
INSERT INTO `sales` VALUES (1,'2017-02-05','2',1),(2,'2016-02-09','3',2);
/*!40000 ALTER TABLE `sales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sprod`
--

DROP TABLE IF EXISTS `sprod`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sprod` (
  `salesID` int(11) NOT NULL,
  `prodID` int(11) NOT NULL,
  `prodName` varchar(45) NOT NULL,
  `prodType` varchar(45) NOT NULL,
  PRIMARY KEY (`salesID`),
  KEY `salesID_idx` (`prodID`),
  CONSTRAINT `prodID` FOREIGN KEY (`salesID`) REFERENCES `product` (`productID`) ON UPDATE CASCADE,
  CONSTRAINT `salesID` FOREIGN KEY (`prodID`) REFERENCES `sales` (`salesID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sprod`
--

LOCK TABLES `sprod` WRITE;
/*!40000 ALTER TABLE `sprod` DISABLE KEYS */;
INSERT INTO `sprod` VALUES (1,1,'Pedigree','Dog Food'),(2,2,'Chain','Dog Accessories');
/*!40000 ALTER TABLE `sprod` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supplier` (
  `supplierID` int(11) NOT NULL,
  `supplierName` varchar(45) NOT NULL,
  `supplierAddress` varchar(45) NOT NULL,
  `contactNumber` int(11) NOT NULL,
  KEY `productID_idx` (`supplierID`),
  CONSTRAINT `productID` FOREIGN KEY (`supplierID`) REFERENCES `product` (`productID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier`
--

LOCK TABLES `supplier` WRITE;
/*!40000 ALTER TABLE `supplier` DISABLE KEYS */;
INSERT INTO `supplier` VALUES (1,'Percy Jackson','Royal Residence',1234567890);
/*!40000 ALTER TABLE `supplier` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-05 20:07:02
