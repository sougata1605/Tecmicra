-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2025 at 11:32 AM
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
-- Database: `tecmicra`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'chatterjee2014@gmail.com', '$2y$10$wYiqlENH0GeIf3B.EJrjYeYAC/XIlkkwwtYHjPyiybQzrcQdUF7b6');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `mobile`, `message`, `image`, `created_at`) VALUES
(1, 'suman bera', 'Souman.bera@intglobal.com', '9062983118', 'Souman.bera@intglobal.com', '694b8b79c69fa.jpg', '2025-12-24 06:43:05'),
(2, 'suman bera', 'sougatacode@gmail.com', '9062983118', 'Smriti Gautam', '694b9224bbe14.jpg', '2025-12-24 07:11:32'),
(3, 'suman bera', 'sougatacode@gmail.com', '9062983118', 'Smriti Gautam', '694b922773b26.jpg', '2025-12-24 07:11:35'),
(4, 'Afrin Sumona', 'contact.afrinsumona@gmail.com', '9062983118', ' contact.afrinsumona@gmail.com', '694b9cb9a2d9b.jpg', '2025-12-24 07:56:41'),
(5, 'Afrin Sumona', 'contact.afrinsumona@gmail.com', '9062983118', ' contact.afrinsumona@gmail.com', '694b9cbdcb1c3.jpg', '2025-12-24 07:56:45'),
(6, 'pronobendu', 'sougatacode@gmail.com', '9062983118', 'test', '694e2adc49818.jpg', '2025-12-26 06:27:40'),
(7, 'pronobendu', 'sougatacode@gmail.com', '7899999788', '', '694e2b674d0a8.jpg', '2025-12-26 06:29:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
