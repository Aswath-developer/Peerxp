-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 30, 2020 at 06:29 PM
-- Server version: 10.3.24-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aparuni1_Forms`
--

-- --------------------------------------------------------

--
-- Table structure for table `ap_user_master`
--

CREATE TABLE `ap_user_master` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(65) NOT NULL,
  `user_phno` varchar(55) NOT NULL,
  `user_password` varchar(55) NOT NULL,
  `user_status` int(11) NOT NULL,
  `user_visibility` int(11) NOT NULL,
  `user_createdon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ap_user_master`
--

INSERT INTO `ap_user_master` (`user_id`, `user_name`, `user_email`, `user_phno`, `user_password`, `user_status`, `user_visibility`, `user_createdon`) VALUES
(1, 'Peer XP', 'peerxp@gmail.com', '987545455441', '2b2faa614f7d919bf7991faccc23e1e8', 1, 1, '2020-10-30 11:01:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ap_user_master`
--
ALTER TABLE `ap_user_master`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ap_user_master`
--
ALTER TABLE `ap_user_master`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
