-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2021 at 03:27 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lyla_beauty`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(100) NOT NULL,
  `booking_status` varchar(100) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `professional_session_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `booking_status`, `patient_id`, `professional_session_id`) VALUES
(99, 'canceled', 5, 1),
(100, 'Canceled', 5, 2),
(101, 'Canceled', 5, 4),
(102, 'Canceled', 5, 4),
(103, 'Canceled', 5, 9),
(104, 'Canceled', 5, 4),
(105, 'Canceled', 5, 4),
(106, 'Canceled', 5, 4),
(107, 'Canceled', 5, 4),
(108, 'Canceled', 5, 4),
(109, 'Canceled', 5, 4),
(110, 'Booked', 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `patient_table`
--

CREATE TABLE `patient_table` (
  `patient_id` int(11) NOT NULL,
  `patient_email_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `patient_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `patient_first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `patient_last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `patient_phone_no` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patient_table`
--

INSERT INTO `patient_table` (`patient_id`, `patient_email_address`, `patient_password`, `patient_first_name`, `patient_last_name`, `patient_phone_no`) VALUES
(3, 'luiza@gmail.com', 'password', 'Luiza', 'Costa', '878908790'),
(4, 'anneparker@gmail.com', 'password', 'Anne', 'Parker', '890989789'),
(5, 'evelynsba@gmail.com', 'password', 'Evelyn', 'Alves', '873094759'),
(6, 'evelynsba@hotmail.com', 'password', 'Roseli', 'barbosa', '0833553341'),
(7, 'roseli@gmail.com', 'passowrd', 'Roseli', 'barbosa', '0833553341'),
(8, 'lyla@gmail.com', 'password', 'Evelyn ', 'Alves', '083');

-- --------------------------------------------------------

--
-- Table structure for table `professionals_sessions`
--

CREATE TABLE `professionals_sessions` (
  `professional_session_id` int(11) NOT NULL,
  `professional_id` int(11) NOT NULL,
  `session_date` date NOT NULL,
  `status` varchar(1) NOT NULL,
  `session_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professionals_sessions`
--

INSERT INTO `professionals_sessions` (`professional_session_id`, `professional_id`, `session_date`, `status`, `session_time`) VALUES
(1, 1, '2021-08-16', '1', '09:00:00'),
(2, 1, '2021-08-16', '0', '10:00:00'),
(3, 1, '2021-08-16', '0', '11:00:00'),
(4, 2, '2021-08-17', '0', '09:00:00'),
(5, 2, '2021-08-17', '1', '10:00:00'),
(6, 2, '2021-08-17', '0', '11:00:00'),
(7, 3, '2021-08-18', '0', '09:00:00'),
(8, 4, '2021-08-18', '0', '09:00:00'),
(9, 3, '2021-08-18', '0', '10:00:00'),
(10, 3, '2021-08-19', '0', '11:00:00'),
(11, 4, '2021-08-19', '0', '10:00:00'),
(12, 4, '2021-08-19', '0', '11:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `professional_table`
--

CREATE TABLE `professional_table` (
  `professional_id` int(11) NOT NULL,
  `professional_email_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `professional_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `professional_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `professional_phone_no` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `professional_expert_in` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `professional_status` enum('Active','Inactive') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `professional_table`
--

INSERT INTO `professional_table` (`professional_id`, `professional_email_address`, `professional_password`, `professional_name`, `professional_phone_no`, `professional_expert_in`, `professional_status`) VALUES
(1, 'peternelson@gmail.com', 'password', 'Peter Nelson', '83567098', 'massage', 'Active'),
(2, 'lizymurphyy@gmail.com', 'password', ' Lizy Murphy', '83567098', 'skin', 'Active'),
(3, 'leandroparker@gmail.com', 'password', 'Leandro Parker', '87906578', 'lips', 'Active'),
(4, 'joelmaphil@gmail.com', 'password', ' Joelma Phil', '85236985', 'eyebrown', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `patient_table`
--
ALTER TABLE `patient_table`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `professionals_sessions`
--
ALTER TABLE `professionals_sessions`
  ADD PRIMARY KEY (`professional_session_id`);

--
-- Indexes for table `professional_table`
--
ALTER TABLE `professional_table`
  ADD PRIMARY KEY (`professional_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `patient_table`
--
ALTER TABLE `patient_table`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `professionals_sessions`
--
ALTER TABLE `professionals_sessions`
  MODIFY `professional_session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `professional_table`
--
ALTER TABLE `professional_table`
  MODIFY `professional_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
