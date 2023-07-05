-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 01:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `gear`
--

CREATE TABLE `gear` (
  `serialnumber` varchar(30) NOT NULL,
  `vendor` varchar(20) NOT NULL,
  `year` year(4) NOT NULL,
  `model` varchar(50) NOT NULL,
  `image` varchar(30) NOT NULL,
  `price` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gear`
--

INSERT INTO `gear` (`serialnumber`, `vendor`, `year`, `model`, `image`, `price`) VALUES
('1313514', 'Fender', 2023, 'Paranormal Rascal Bass', 'gear3.jpg', '599'),
('1400234', 'Fender', 2023, 'American Precision Bass', 'gear6.jpg', '499'),
('1745552', 'Fender', 2023, 'Player Plus Precision Bass', 'gear1jpg.jpg', '1299'),
('1776696', 'Fender', 2023, 'Player Plus Stratocaster', 'gear4.jpg', '1399'),
('1863635', 'Fender', 2023, 'Squier Sonic Bronco Bass', 'gear2.jpg', '2299'),
('1980875', 'Fender', 2023, 'Mononeon Jazz Bass', 'gear5.jpg', '899');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `isAdmin`) VALUES
('admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gear`
--
ALTER TABLE `gear`
  ADD PRIMARY KEY (`serialnumber`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
