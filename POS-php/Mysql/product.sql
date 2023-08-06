-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2023 at 12:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Name` varchar(30) NOT NULL,
  `Id` int(10) NOT NULL,
  `Types` varchar(15) NOT NULL,
  `Quantity` int(11) NOT NULL DEFAULT 1,
  `Price` double NOT NULL,
  `Views` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Name`, `Id`, `Types`, `Quantity`, `Price`, `Views`) VALUES
('BBQ burger', 1, 'Burger', 1, 200, NULL),
('jami', 3, 'Student', 1, 100000, NULL),
('Hanzala', 4, 'OldFart', 1, 0, NULL),
('Hanzala', 5, 'Gendari', 1, 0, NULL),
('jami', 59693, 'Student', 1, 100000, NULL),
('jami', 76489, 'Student', 1, 100000, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Name` (`Name`),
  ADD KEY `Types` (`Types`),
  ADD KEY `Views` (`Views`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
