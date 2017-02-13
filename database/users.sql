-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2017 at 02:44 PM
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
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(40) DEFAULT NULL,
  `LastName` varchar(40) DEFAULT NULL,
  `MiddleInitial` varchar(255) NOT NULL,
  `username` varchar(40) NOT NULL,
  `user_email` varchar(40) DEFAULT NULL,
  `user_mobile` varchar(255) NOT NULL,
  `user_password` varchar(40) NOT NULL,
  `acct_type` int(10) NOT NULL DEFAULT '0' COMMENT '0B,1IM,2POS,3SA',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=242 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FirstName`, `LastName`, `MiddleInitial`, `username`, `user_email`, `user_mobile`, `user_password`, `acct_type`) VALUES
(40, NULL, NULL, '', 'user3', NULL, '', '92877af70a45fd6a2ed7fe81e1236b78', 3),
(41, NULL, NULL, '', 'user0', NULL, '', '3d517fe6ebab7b8cfcf98db6259c8a59', 0),
(39, NULL, NULL, '', 'user2', NULL, '', '7e58d63b60197ceb55a1c487989a3720', 2),
(38, NULL, NULL, '', 'user1', NULL, '', '24c9e15e52afc47c225b757e7bee1f9d', 1),
(99, 'Super', 'Admin', '', 'sa', 'sa@gmail.com', '', 'c12e01f2a13ff5587e1e9e4aedb8242d', 3),
(51, 'Inventory', 'Admin', '', 'ia', 'ia@gmail.com', '', 'b40788f566d1124a95169068077031a9', 2),
(1, 'POS', 'Admin', '', 'pa', 'pa@gmail.com', '', 'e529a9cea4a728eb9c5828b13b22844c', 1),
(201, 'Rolf Cayce', 'Dy', 'P', 'Caycehh', 'caycedy@gmail.com', '09175591783', 'e807f1fcf82d132f9bb018ca6738a19f', 3),
(202, 'Rolf Cayce', 'Dy', 'P', 'Caycehh', 'caycedy@gmail.com', '09175591783', '1234567890', 0),
(203, 'Rolf Cayce', 'Dy', 'P', 'Caycehh', 'caycedy@gmail.com', '09175591783', '1234567890', 0),
(204, 'John', 'Meyer', 'N', 'John Meyer', 'john@yahoo.com', '11111111111', '12345', 2),
(205, 'Moe', 'Adams', 'P', 'Moe Adams', 'moe_adams@gmail.com', '09158944561', '1234567890', 3),
(206, 'Moe', 'Adams', 'P', 'Moe Adams', 'moe_adams@gmail.com', '09158944561', '1234567890', 3),
(207, 'Moe', 'Adams', 'P', 'Moe Adams', 'moe_adams@gmail.com', '09158944561', '1234567890', 3),
(208, 'Moe', 'Adams', 'P', 'Moe Adams', 'moe_adams@gmail.com', '09158944561', '1234567890', 3),
(209, 'Moe', 'Adams', 'P', 'Moe Adams', 'moe_adams@gmail.com', '09158944561', '1234567890', 3),
(210, 'Moe', 'Adams', 'P', 'Moe Adams', 'moe_adams@gmail.com', '09158944561', '1234567890', 3),
(211, 'Moe', 'Adams', 'P', 'Moe Adams', 'moe_adams@gmail.com', '09158944561', '1234567890', 3),
(212, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(213, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(214, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(215, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(216, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(217, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(218, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(219, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(220, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(221, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(222, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(223, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(224, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(225, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(226, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(227, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(228, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(229, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(230, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(231, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(232, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(233, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(234, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(235, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(236, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(237, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(238, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(239, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(240, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2),
(241, 'Sample', 'Sample', 'M', 'Sample', 'sample@yahoo.com', '09123456789', '1234567890', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
