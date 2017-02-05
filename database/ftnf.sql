-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2017 at 03:10 PM
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
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
('00001', 'Product 1', 'Product', 100, '51', '2017-02-04 06:13:28'),
('00002', 'Pet 1', 'Pet', 19, '981', '2017-02-04 06:13:28'),
('00003', 'Product 2', 'Product', 50, '27', '2017-02-04 06:14:44'),
('00004', 'Product 3', 'Product', 150, '70', '2017-02-04 06:14:44'),
('00002', 'Pet 2', 'Pet', 91, '990', '2017-02-04 06:15:57'),
('00003', 'Pet 3', 'Pet', 570, '550', '2017-02-04 06:15:57'),
('00004', 'Product 4', 'Product', 50, '730', '2017-02-04 06:17:54'),
('00005', 'Product 5', 'Product', 30, '181', '2017-02-04 06:17:54'),
('00009', 'Sample', 'Product', 60, '100', '2017-02-04 07:30:27');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `Admin` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`Admin`) VALUES
('POS'),
('POS');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(6, 'Imron', '5f4dcc3b5aa765d61d8327deb882cf99'),
(7, 'user', 'ee11cbb19052e40b07aac0ca060c23ee');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(150) NOT NULL,
  `FirstName` varchar(40) DEFAULT NULL,
  `LastName` varchar(40) DEFAULT NULL,
  `username` varchar(40) NOT NULL,
  `user_email` varchar(40) DEFAULT NULL,
  `user_password` varchar(40) NOT NULL,
  `acct_type` varchar(10) NOT NULL DEFAULT 'basic' COMMENT '0B,1IM,2POS,3SA'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FirstName`, `LastName`, `username`, `user_email`, `user_password`, `acct_type`) VALUES
(40, NULL, NULL, 'user3', NULL, '92877af70a45fd6a2ed7fe81e1236b78', 'SA'),
(41, NULL, NULL, 'user0', NULL, '3d517fe6ebab7b8cfcf98db6259c8a59', 'Basic'),
(39, NULL, NULL, 'user2', NULL, '7e58d63b60197ceb55a1c487989a3720', 'Inventory'),
(38, NULL, NULL, 'user1', NULL, '24c9e15e52afc47c225b757e7bee1f9d', 'POS'),
(101, 'Super', 'Admin', 'sa', 'sa@gmail.com', 'c12e01f2a13ff5587e1e9e4aedb8242d', 'SA'),
(51, 'Inventory', 'Admin', 'ia', 'ia@gmail.com', 'b40788f566d1124a95169068077031a9', 'IA'),
(1, 'POS', 'Admin', 'pa', 'pa@gmail.com', 'e529a9cea4a728eb9c5828b13b22844c', 'PA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
