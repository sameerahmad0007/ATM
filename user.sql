-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2024 at 06:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atm`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pan` varchar(50) NOT NULL,
  `user_contact` bigint(10) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `user_atm` int(4) NOT NULL,
  `user_pin` int(4) NOT NULL,
  `user_status` int(4) NOT NULL,
  `user_amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_pan`, `user_contact`, `user_address`, `user_atm`, `user_pin`, `user_status`, `user_amount`) VALUES
(2, 'sameer', 'sameer@gmail.com', 'SAM70371A', 7037171555, 'jaspur', 123456, 1010, 1, 10000),
(3, 'rida', 'rida@gmail.com', 'RI1234DA', 9648238423, 'dehradun', 123456, 123456, 0, 20000),
(4, 'Sameer Ali', 'sameerali@gmail.com', 'SA1234AM', 9876543210, 'dehradun', 234567, 1234, 0, 15000),
(5, 'abhay', 'abhay@gmail.com', 'ABH126AY', 9087654321, 'dehradun', 345678, 1212, 0, 40000),
(7, 'Ayan', 'ayan@gmail.com', 'AYA0987N', 9875465256, 'dehradun', 987654, 1234, 0, 40000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`,`user_pan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
