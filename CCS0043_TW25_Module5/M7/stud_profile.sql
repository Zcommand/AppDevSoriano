-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2026 at 09:27 AM
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
-- Database: `stud_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `id` int(11) NOT NULL,
  `student_id` varchar(15) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `year_level` tinyint(4) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(255) DEFAULT NULL,
  `is_confirmed` tinyint(4) DEFAULT 0,
  `confirm_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`id`, `student_id`, `first_name`, `last_name`, `email`, `course`, `year_level`, `date_created`, `photo`, `is_confirmed`, `confirm_token`) VALUES
(1, '201802799', 'JOSEPH', 'CALLEJA', 'jqcalleja@feutech.edu.ph', 'BSIT', 2, '2026-06-16 06:53:44', NULL, NULL, NULL),
(2, '202612345', 'TEST', 'TEST', 'test@email.com', 'BSIT', 3, '2026-06-16 07:37:05', NULL, NULL, NULL),
(20, '5667', 'JANE', 'DOE', 'garihop975@homephit.com', 'BSCoE', 2, '2026-07-03 07:17:17', '5667-1783063037.jpg', 1, NULL),
(21, '123456', 'JOHN', 'DOE', 'garihop975@homephit.com', 'BSIT', 4, '2026-07-03 07:22:51', '123456-1783063371.png', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
