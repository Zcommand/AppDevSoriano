-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 27, 2026 at 07:13 AM
-- Server version: 8.0.44
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dog_information`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbldogs`
--

CREATE TABLE `tbldogs` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `breed` varchar(100) NOT NULL,
  `age` int NOT NULL,
  `address` varchar(255) NOT NULL,
  `color` varchar(50) NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbldogs`
--

INSERT INTO `tbldogs` (`id`, `name`, `breed`, `age`, `address`, `color`, `height`, `weight`, `date_created`) VALUES
(1, 'Candy', 'Tsi Shu', 3, 'Bulacan', 'Black', '25 ft', '6.2 kg', '2026-06-27 06:42:59'),
(2, 'Scarlet', 'Tsi Shu', 2, 'Bulacan', 'Brown', '25 ft', '5.2 kg', '2026-06-27 06:50:32'),
(3, 'Buddy', 'Golden Retriever', 4, 'Quezon City', 'Golden', '2.10 ft', '30.50 kg', '2026-06-27 07:03:53'),
(4, 'Max', 'Labrador Retriever', 5, 'Makati', 'Black', '2.20 ft', '34.80 kg', '2026-06-27 07:03:53'),
(5, 'Bella', 'Beagle', 2, 'Pasig', 'Brown & White', '1.40 ft', '11.20 kg', '2026-06-27 07:03:53'),
(6, 'Rocky', 'German Shepherd', 6, 'Taguig', 'Black & Tan', '2.40 ft', '36.50 kg', '2026-06-27 07:03:53'),
(7, 'Luna', 'Siberian Husky', 3, 'Manila', 'Gray & White', '2.00 ft', '23.40 kg', '2026-06-27 07:03:53'),
(8, 'Charlie', 'Pomeranian', 2, 'Caloocan', 'Cream', '0.90 ft', '3.50 kg', '2026-06-27 07:03:53'),
(9, 'Milo', 'Aspin', 4, 'Bulacan', 'Brown', '1.80 ft', '17.60 kg', '2026-06-27 07:03:53'),
(10, 'Coco', 'Shih Tzu', 1, 'Valenzuela', 'White', '1.00 ft', '6.20 kg', '2026-06-27 07:03:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbldogs`
--
ALTER TABLE `tbldogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbldogs`
--
ALTER TABLE `tbldogs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
