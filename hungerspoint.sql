-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 03:26 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hungerspoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `dishesh`
--

CREATE TABLE `dishesh` (
  `dis_id` int(11) NOT NULL,
  `res_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `usersname` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `usersname`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`) VALUES
(1, 'azizmh', 'aziz', 'hossain', 'azizmh5272@gmail.com', '01734705100', '$2y$10$psy/39TnOUBoAdyXojgH2OG.2ghuqexTw4GbE4G0UdmMgcSXoupeK', 'Sylhet'),
(2, 'admin', 'aziz', 'hossain', 'nfgf@gmail.com', '26594982191', '$2y$10$PAG/4ZfeA5/rirXDFsyM9OOty5ZxNZz.mN6yf/RlA8GEmvr/Buodm', 'Baluchar'),
(3, 'admin', 'aziz', 'hossain', 'mhossainaziz100@gmail.com', '01752535929', '$2y$10$hEFmYeTRf9RD5z3dsgUqouELqHTavlMC9B4Wyr9xY.i4yQCBaieSO', 'Sylhet, Bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dishesh`
--
ALTER TABLE `dishesh`
  ADD PRIMARY KEY (`dis_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dishesh`
--
ALTER TABLE `dishesh`
  MODIFY `dis_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
