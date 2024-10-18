-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2024 at 07:54 AM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `catName`, `catImage`) VALUES
(2, 'mobile', 'subhome.jpg'),
(3, 'fashion', 'annie-spratt-LGhYJSLtDpM-unsplash.jpg'),
(4, 'bus', 'free-nature-images.jpg'),
(5, 'womon', 'silhouette-of-a-guy-with-a-cap-at-red-sky-sunset-f');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `productName` varchar(20) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `productCatId` int(11) NOT NULL,
  `productImage` varchar(50) NOT NULL,
  `productDescription` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `productName`, `productPrice`, `productQuantity`, `productCatId`, `productImage`, `productDescription`) VALUES
(2, 'car', 566, 85, 3, '360_F_304794459_bbikesRuawv1xGs3XXPj8JLVVNuBxm9O.j', ''),
(3, 'karwan', 777777, 1, 4, 'Changan_Karvaan_.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userPassword` varchar(100) NOT NULL,
  `userNumber` varchar(13) NOT NULL,
  `userRole` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPassword`, `userNumber`, `userRole`) VALUES
(1, 'kinza', 'k@gmail.com', '40bd001563085fc35165', '014564654', 'user'),
(2, 'fariha', 'f@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '234564', 'user'),
(3, 'Admin', 'admin@gmail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', '021545564', 'admin'),
(4, 'sufyan', 'sufyan@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '123', 'user'),
(5, 'sufi', 'sufi@gmail.com', '51eac6b471a284d3341d8c0c63d0f1a286262a18', '03128169165', 'user');

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `products_ibfk_1` (`productCatId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `marksheet`
--
ALTER TABLE `marksheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`productCatId`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
