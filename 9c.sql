-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2024 at 09:53 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `9c`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `catName` varchar(20) NOT NULL,
  `catImage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `catName`, `catImage`) VALUES
(1, 'dresses', '61017102_aun02.jpeg'),
(2, 'mobile', 'subhome.jpg'),
(3, 'fashion', 'annie-spratt-LGhYJSLtDpM-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `marksheet`
--

CREATE TABLE `marksheet` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `maths` int(11) NOT NULL,
  `physics` int(11) NOT NULL,
  `chemistry` int(11) NOT NULL,
  `urdu` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `total` int(11) NOT NULL DEFAULT 500,
  `obtained` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `remarks` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marksheet`
--

INSERT INTO `marksheet` (`id`, `name`, `maths`, `physics`, `chemistry`, `urdu`, `english`, `total`, `obtained`, `percentage`, `grade`, `remarks`) VALUES
(2, 'asad', 78, 98, 89, 68, 85, 500, 418, 84, 'A1', 'Excellent'),
(6, 'yasir khan', 58, 98, 88, 98, 98, 500, 440, 88, 'A1', 'Excellent'),
(7, 'zahid', 52, 65, 65, 65, 65, 500, 312, 62, 'B', 'Good'),
(8, 'yasir', 85, 89, 98, 98, 98, 500, 468, 94, 'A1', 'Excellent'),
(9, 'ali', 58, 68, 95, 65, 35, 500, 321, 64, 'B', 'Good'),
(10, 'ali', 58, 68, 95, 65, 35, 500, 321, 64, 'B', 'Good'),
(11, 'saba', 89, 65, 65, 65, 65, 500, 349, 70, 'B', 'Good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marksheet`
--
ALTER TABLE `marksheet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `marksheet`
--
ALTER TABLE `marksheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
