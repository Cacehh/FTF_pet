-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2017 at 02:05 AM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `FirstName` varchar(40) DEFAULT NULL,
  `LastName` varchar(40) DEFAULT NULL,
  `username` varchar(40) NOT NULL,
  `user_email` varchar(40) DEFAULT NULL,
  `user_password` varchar(40) NOT NULL,
  `acct_type` int(10) NOT NULL DEFAULT '0' COMMENT '0B,1IM,2POS,3SA'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FirstName`, `LastName`, `username`, `user_email`, `user_password`, `acct_type`) VALUES
(40, NULL, NULL, 'user3', NULL, '92877af70a45fd6a2ed7fe81e1236b78', 3),
(41, NULL, NULL, 'user0', NULL, '3d517fe6ebab7b8cfcf98db6259c8a59', 0),
(39, NULL, NULL, 'user2', NULL, '7e58d63b60197ceb55a1c487989a3720', 2),
(38, NULL, NULL, 'user1', NULL, '24c9e15e52afc47c225b757e7bee1f9d', 1),
(99, 'Super', 'Admin', 'sa', 'sa@gmail.com', 'c12e01f2a13ff5587e1e9e4aedb8242d', 3),
(51, 'Inventory', 'Admin', 'ia', 'ia@gmail.com', 'b40788f566d1124a95169068077031a9', 2),
(1, 'POS', 'Admin', 'pa', 'pa@gmail.com', 'e529a9cea4a728eb9c5828b13b22844c', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
