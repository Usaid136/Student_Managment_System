-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2025 at 09:42 AM
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
-- Database: `student_db`
--
CREATE DATABASE IF NOT EXISTS `student_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `student_db`;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `registration_date` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `course`, `registration_date`) VALUES
(1, 'Alice Johnson', 'alice@example.com', 'Physics', '2025-05-12'),
(2, 'Bob', 'bob@example.com', 'Computer Science', '2025-05-12'),
(3, 'Clara Smith', 'clara@example.com', 'Art', '2025-05-12'),
(4, 'David', 'david@example.com', 'Mechanical Engineering', '2025-05-12'),
(6, 'Frank Haris', 'frank@example.com', 'Biology', '2025-05-12'),
(7, 'Grace Lee', 'grace.lee@example.com', 'Chemistry', '2025-05-12'),
(8, 'Henry Walker', 'henry.walker@example.com', 'History', '2025-05-12'),
(9, 'Isla Young', 'isla.young@example.com', 'Philosophy', '2025-05-12'),
(10, 'Jack King', 'jack.king@example.com', 'Business Administration', '2025-05-12'),
(11, 'Kara Scott', 'kara.scott@example.com', 'Information Technology', '2025-05-12'),
(12, 'Liam Turner', 'liam.turner@example.com', 'Political Science', '2025-05-12'),
(13, 'Mia Hill', 'mia.hill@example.com', 'Psychology', '2025-05-12'),
(14, 'Noah Adams', 'noah.adams@example.com', 'Fine Arts', '2025-05-12'),
(15, 'Olivia Nelson', 'olivia.nelson@example.com', 'Civil Engineering', '2025-05-12'),
(16, 'Paul Baker', 'paul.baker@example.com', 'Mathematics', '2025-05-12'),
(17, 'Quinn Carter', 'quinn.carter@example.com', 'Environmental Science', '2025-05-12'),
(18, 'Ruby Mitchell', 'ruby.mitchell@example.com', 'Sociology', '2025-05-12'),
(19, 'Samuel Perez', 'samuel.perez@example.com', 'Law', '2025-05-12'),
(20, 'Tina Ross', 'tina.ross@example.com', 'Architecture', '2025-05-12'),
(21, 'Umar Ali', 'umar.ali@example.com', 'Geology', '2025-05-12'),
(22, 'Victoria James', 'victoria.james@example.com', 'Computer Science', '2025-05-12'),
(23, 'William Green', 'william.green@example.com', 'Engineering', '2025-05-12'),
(24, 'Xander Brooks', 'xander.brooks@example.com', 'Economics', '2025-05-12'),
(25, 'Yara Diaz', 'yara.diaz@example.com', 'Statistics', '2025-05-12'),
(26, 'Zachary Reed', 'zachary.reed@example.com', 'Physics', '2025-05-12'),
(27, 'Amelia Watson', 'amelia.watson@example.com', 'Nursing', '2025-05-12'),
(28, 'Benjamin Cooper', 'benjamin.cooper@example.com', 'Education', '2025-05-12'),
(29, 'Chloe Ward', 'chloe.ward@example.com', 'English Literature', '2025-05-12'),
(30, 'Dylan Murphy', 'dylan.murphy@example.com', 'Media Studies', '2025-05-12'),
(31, 'Ella Bryant', 'ella.bryant@example.com', 'Anthropology', '2025-05-12'),
(32, 'Finn Ellis', 'finn.ellis@example.com', 'Astronomy', '2025-05-12'),
(33, 'Giselle Morgan', 'giselle.morgan@example.com', 'Theatre Arts', '2025-05-12'),
(34, 'Usaid', 'usaid@gmail.com', 'Law', '2025-05-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
