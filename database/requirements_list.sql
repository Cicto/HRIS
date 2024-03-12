-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2024 at 04:16 AM
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
-- Database: `baliwagc_hris_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `requirements_list`
--

CREATE TABLE `requirements_list` (
  `id` int(11) NOT NULL,
  `document_type` varchar(255) NOT NULL,
  `employee_type` tinyint(1) NOT NULL COMMENT '0 = JO / COS\r\n1 = With Plantilla',
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requirements_list`
--

INSERT INTO `requirements_list` (`id`, `document_type`, `employee_type`, `created_at`, `deleted_at`) VALUES
(1, 'PDS', 1, '2024-03-05 09:16:39', NULL),
(2, 'COS Form 33-A', 1, '2024-03-05 00:00:00', NULL),
(3, 'Description Form', 1, '2024-03-05 00:00:00', NULL),
(4, 'Notice of Assumption', 1, '2024-03-05 00:00:00', NULL),
(5, 'Oath of Office Position', 1, '2024-03-05 00:00:00', NULL),
(6, 'Diploma', 1, '2024-03-05 00:00:00', NULL),
(7, 'TOR', 1, '2024-03-05 00:00:00', NULL),
(8, 'Awards', 1, '2024-03-05 00:00:00', NULL),
(9, 'Medical Certificate', 1, '2024-03-05 00:00:00', NULL),
(10, 'NBI / Baranggay Clearance', 1, '2024-03-05 00:00:00', NULL),
(11, 'PDS Resume', 0, '2024-03-05 00:00:00', NULL),
(12, 'COE', 0, '2024-03-05 00:00:00', NULL),
(13, 'Seminars', 0, '2024-03-05 00:00:00', NULL),
(14, 'Awards', 0, '2024-03-05 00:00:00', NULL),
(15, 'Contract', 0, '2024-03-05 00:00:00', NULL),
(16, 'Sworn Statement', 0, '2024-03-05 00:00:00', NULL),
(17, 'BIR', 0, '2024-03-05 00:00:00', NULL),
(18, 'a', 1, NULL, '2024-03-05 14:24:36'),
(19, 'BIR', 0, NULL, '2024-03-05 16:11:24'),
(20, 'aqq', 1, NULL, '2024-03-05 13:25:43'),
(21, 'a1', 0, NULL, '2024-03-05 13:25:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `requirements_list`
--
ALTER TABLE `requirements_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requirements_list`
--
ALTER TABLE `requirements_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
