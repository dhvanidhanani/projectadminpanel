-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2024 at 02:03 PM
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
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(11) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `fees` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `name`, `email`, `contact`, `gender`, `image`, `course`, `time`, `fees`, `date`, `status`) VALUES
(1, 'abc', 'abc@gmail.com', 1234567890, 'Female', '1.webp', 'Development Course', '6pm-8pm', 78000, '2024-07-30', 0),
(2, 'xyz1', 'xyz1@gmail.com', 1234567890, 'Male', '6.jpg', 'Design Course', '2pm-4pm', 50000, '2024-08-01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `link` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `image`, `link`, `title`, `status`) VALUES
(1, 'Development Course', 'book1.jpg', 'https://www.cdmi.in/courses/mu', 'Development Course in surat', 0),
(2, 'Design Course', 'book2.png', 'https://www.cdmi.in/courses/mu', 'Design Course in surat', 0),
(13, 'Programming it Course ', 'book3.png', 'https://www.cdmi.in/courses/mu', 'Programming it Course in surat', 0);

-- --------------------------------------------------------

--
-- Table structure for table `followup`
--

CREATE TABLE `followup` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` int(20) NOT NULL,
  `course` varchar(30) NOT NULL,
  `inquiry` varchar(30) NOT NULL,
  `reson` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `followupby` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `followup`
--

INSERT INTO `followup` (`id`, `name`, `contact`, `course`, `inquiry`, `reson`, `date`, `followupby`, `status`) VALUES
(1, 'cdmi2', 1234567890, 'Master In 2D/3D Animation', 'Anil Sir', 'Function.....', '2024-07-26', 'Anil Sir', 0);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `referencename` varchar(30) NOT NULL,
  `add` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `contact` int(11) NOT NULL,
  `content` varchar(30) NOT NULL,
  `reference` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `followup` varchar(30) NOT NULL,
  `parent` int(11) NOT NULL,
  `fees` int(11) NOT NULL,
  `enquiry` varchar(30) NOT NULL,
  `betchtime` varchar(30) NOT NULL,
  `inquirydetails` varchar(30) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `name`, `course`, `referencename`, `add`, `status`, `contact`, `content`, `reference`, `date`, `followup`, `parent`, `fees`, `enquiry`, `betchtime`, `inquirydetails`, `status_id`) VALUES
(1, 'cdmi', 'Master In Flutter Development', 'Facalty', '', 'Demo', 123456789, '', 'Khushi Mem', '2024-08-01', '', 0, 0, 'Vishal Sir', '', 'fgrhjk', 0),
(2, 'cdmi1', 'Java Programming', 'Student', 'Krinal Mem', 'Pending', 123456789, 'Android', 'Shrushti', '2024-07-25', 'Nice...', 123456789, 70000, 'Krinal Mem', '2pm-4pm', 'Nice...', 0),
(3, 'cdmi2', 'Master In 2D/3D Animation', '<br />\r\n<b>Warning</b>:  Undef', '<br />\r\n<b>Warning</b>:  Undef', '<br />\r\n<b>Warning</b>:  Undef', 123456789, 'Android', 'Khushi Mem', '2024-08-03', 'Nice...', 123456789, 70000, '<br />\r\n<b>Warning</b>:  Undef', '0000-00-00', 'Nice...', 0),
(4, 'cdmi3', 'Master In Flutter Development', '<br />\r\n<b>Warning</b>:  Undef', '<br />\r\n<b>Warning</b>:  Undef', '<br />\r\n<b>Warning</b>:  Undef', 1234567890, 'Android', 'Khushi Mem', '2024-08-08', 'Nice...', 1234567890, 70000, '<br />\r\n<b>Warning</b>:  Undef', '0000-00-00', 'Nice...', 0),
(5, 'cdmi4', 'Master In Flutter Development', '<br />\r\n<b>Warning</b>:  Undef', '<br />\r\n<b>Warning</b>:  Undef', '<br />\r\n<b>Warning</b>:  Undef', 1234567890, 'Android', 'Khushi Mem', '2024-08-08', 'Nice...', 1234567890, 70000, '<br />\r\n<b>Warning</b>:  Undef', '0000-00-00', 'Nice...', 0),
(6, 'cdmi5', 'Master In 2D/3D Animation', '<br />\r\n<b>Warning</b>:  Undef', '<br />\r\n<b>Warning</b>:  Undef', '<br />\r\n<b>Warning</b>:  Undef', 1234567890, 'Android', 'Khushi Mem', '2024-08-01', 'Nice...', 1234567890, 70000, '<br />\r\n<b>Warning</b>:  Undef', '<br />\r\n<b>Warning</b>:  Undef', 'Nice..', 0),
(7, 'cdmi6', 'Master In Flutter Development', '<br />\r\n<b>Warning</b>:  Undef', '<br />\r\n<b>Warning</b>:  Undef', '<br />\r\n<b>Warning</b>:  Undef', 1234567890, 'Android', 'Khushi Mem', '2024-08-10', 'Nice...', 1234567890, 70000, '<br />\r\n<b>Warning</b>:  Undef', '<br />\r\n<b>Warning</b>:  Undef', 'Nice..', 0),
(8, 'cdmi7', 'Master In 2D/3D Animation', 'Facalty', 'Shruti Mem', 'Demo', 1234567890, 'Android', 'dfghjk', '2024-07-24', 'ghjhkk', 1234567890, 70000, 'Shruti Mem', '12pm-2pm', 'fghjk', 0),
(9, 'cdmi', 'Master In Flutter Development', '<br />\r\n<b>Warning</b>:  Undef', '<br />\r\n<b>Warning</b>:  Undef', '<br />\r\n<b>Warning</b>:  Undef', 1234567890, 'Android', 'Khushi Mem', '2024-07-27', 'dfghjkl', 1234567890, 70000, '<br />\r\n<b>Warning</b>:  Undef', '<br />\r\n<b>Warning</b>:  Undef', 'asdfghjk', 0),
(10, 'cdmi', 'Master In Flutter Development', '<br />\r\n<b>Warning</b>:  Undef', '<br />\r\n<b>Warning</b>:  Undef', '<br />\r\n<b>Warning</b>:  Undef', 1234567890, 'Android', 'Khushi Mem', '2024-08-01', 'ASFDG', 1234567890, 70000, '<br />\r\n<b>Warning</b>:  Undef', '<br />\r\n<b>Warning</b>:  Undef', 'ASDFGHJ', 0),
(11, 'cdmi2', 'Master In 2D/3D Animation', '<br />\r\n<b>Warning</b>:  Undef', '<br />\r\n<b>Warning</b>:  Undef', '<br />\r\n<b>Warning</b>:  Undef', 1234567890, 'Android', 'Khushi Mem', '2024-07-27', 'aszdfgh', 1234567890, 70000, '<br />\r\n<b>Warning</b>:  Undef', '<br />\r\n<b>Warning</b>:  Undef', 'asdfgh', 0),
(12, 'cdmi2', 'Master In 2D/3D Animation', 'Facalty', 'Anil Sir', 'Pending', 1234567890, 'Android', 'Facalty', '2024-07-26', 'nice ...', 1234567890, 70000, 'Gautam Sir', '4pm-6pm', 'nice...', 0),
(13, 'cdmi', 'Master In 2D/3D Animation', 'Student', 'Prince Sir', 'Demo', 1234567890, 'sfdghjk', 'Shrushti', '2024-07-30', 'Nice....', 1234567890, 78000, 'Shailesh Sir', '6pm-8pm', 'nice....', 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `profile` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `profile`, `status`) VALUES
(10, 'cdmi', 'cdmi@gmail.com', '123', '3.jpg', 0),
(11, 'cdmi1', 'cdmi1@gmail.com', '456', '1.webp', 0),
(12, 'cdmi2', 'cdmi2@gmail.com', '789', '2.webp', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reson`
--

CREATE TABLE `reson` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` int(11) NOT NULL,
  `course` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `followupby` varchar(30) NOT NULL,
  `reson` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reson`
--

INSERT INTO `reson` (`id`, `name`, `contact`, `course`, `date`, `followupby`, `reson`, `status`) VALUES
(1, 'cdmi2', 1234567890, 'Master In 2D/3D Animation', '2024-07-25', 'Anil Sir', 'Function....', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_course`
--

CREATE TABLE `sub_course` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `link` varchar(30) NOT NULL,
  `sub_title` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_course`
--

INSERT INTO `sub_course` (`id`, `name`, `title`, `image`, `link`, `sub_title`, `status`) VALUES
(1, 'Master In Full Stack Developme', 'Development Course', 'book2.png', 'https://www.cdmi.in/courses/mu', 'Data Science', 0),
(2, 'Master in UI/UX Design', 'Design Course', 'book7.jpg', 'https://www.cdmi.in/courses/mu', 'Canava', 0),
(3, 'Advance PHP', 'Programming it Course ', 'book4.jpg', 'https://www.cdmi.in/courses/mu', 'PHP', 0),
(4, 'C Programming', 'Programming it Course ', 'reading.jpg', 'https://www.cdmi.in/courses/mu', 'C', 0),
(5, 'Master In Flutter Development', 'Development Course', 'book5.jfif', 'https://www.cdmi.in/courses/mu', 'Android', 0),
(6, 'Master In Web Development', 'Development Course', '6.jpg', 'https://www.cdmi.in/courses/mu', 'Canava', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followup`
--
ALTER TABLE `followup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reson`
--
ALTER TABLE `reson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_course`
--
ALTER TABLE `sub_course`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `followup`
--
ALTER TABLE `followup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reson`
--
ALTER TABLE `reson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_course`
--
ALTER TABLE `sub_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
