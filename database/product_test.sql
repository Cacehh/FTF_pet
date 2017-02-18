-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2017 at 03:39 AM
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
-- Table structure for table `product_test`
--

CREATE TABLE `product_test` (
  `prod_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `price` decimal(10,0) NOT NULL DEFAULT '0',
  `description` tinytext,
  `picture_name` varchar(45) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_test`
--

INSERT INTO `product_test` (`prod_id`, `name`, `price`, `description`, `picture_name`) VALUES
(1, 'dogfood1', '5', 'This dog food 1 is best for puppies aged 1 to 4 months old and is also applicable for dogs with allergies of any kind.', '1'),
(2, 'dogfood2', '5', 'This dog food 2 is best for puppies aged 1 to 4 months old and is also applicable for dogs with allergies of any kind.', '2'),
(3, 'dogfood3', '6', 'This dog food 3 is best for puppies aged 1 to 4 months old and is also applicable for dogs with allergies of any kind.', '3'),
(10, 'dogfood4', '4', 'This dog food 4 is best for puppies aged 1 to 4 months old and is also applicable for dogs with allergies of any kind.', '4'),
(11, 'catfood1', '4', 'This cat food 1 is best for kittens aged 1 to 4 months old and is also applicable for cats with allergies of any kind.', '5'),
(12, 'catfood2', '4', 'This cat food 2 is best for puppies aged 1 to 4 months old and is also applicable for cats with allergies of any kind.', '6'),
(13, 'catfood3', '5', 'This cat food 3 is best for puppies aged 1 to 4 months old and is also applicable for cats with allergies of any kind.', '7'),
(14, 'catfood4', '5', 'This cat food 4 is best for puppies aged 1 to 4 months old and is also applicable for cats with allergies of any kind.', '8'),
(16, 'catfood5', '7', NULL, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_test`
--
ALTER TABLE `product_test`
  ADD PRIMARY KEY (`prod_id`),
  ADD UNIQUE KEY `idproduct_test_UNIQUE` (`prod_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
