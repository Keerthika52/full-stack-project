-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2024 at 06:15 PM
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
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `software_engineering` char(50) NOT NULL,
  `cloud_computing` char(50) NOT NULL,
  `artificial_intelligence` char(50) NOT NULL,
  `web_technology` char(50) NOT NULL,
  `data_science` char(50) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `student_name`, `college`, `class`, `department`, `address`, `software_engineering`, `cloud_computing`, `artificial_intelligence`, `web_technology`, `data_science`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'KEERTHIKA', 'VIVEKANANDHA COLLEGE OF ENGINEERING FOR WOMEN', 'IV-A', 'CSE', '49,SANKARI,SALEM', 'A', 'A', 'A', 'A', 'A', 1, '2024-06-17 16:07:16', NULL, NULL),
(2, 'MALINI', 'VIVEKANANDHA COLLEGE OF ENGINEERING FOR WOMEN', 'IV-A', 'CSE', '49,SANKARI,SALEM', 'A', 'A', 'B', 'A', 'A', 1, '2024-06-17 16:08:56', NULL, NULL),
(3, 'DHIVYA', 'VIVEKANANDHA COLLEGE OF ENGINEERING FOR WOMEN', 'IV-A', 'CSE', '34,RASIPURAM,NAMAKKAL', 'A', 'B', 'A', 'A', 'B', 1, '2024-06-17 16:08:56', NULL, NULL),
(4, 'INDHUMATHI', 'VIVEKANANDHA COLLEGE OF ENGINEERING FOR WOMEN', 'IV-A', 'CSE', '49,ERODE', 'A', 'B', 'B', 'A', 'A', 0, '2024-06-17 16:14:50', 1, '2024-06-17 16:12:15'),
(5, 'RESHMA', 'VIVEKANANDHA COLLEGE OF ENGINEERING FOR WOMEN', 'IV-B', 'CSE', '87,CHENNAI', 'A', 'B', 'A', 'B', 'A', 0, '2024-06-17 16:14:50', 1, '2024-06-17 16:12:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
