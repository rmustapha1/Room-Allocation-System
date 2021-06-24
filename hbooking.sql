-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 11:52 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `Application_id` int(100) NOT NULL,
  `Ref_no` bigint(40) NOT NULL,
  `Student_id` varchar(255) NOT NULL,
  `Hostel_id` int(10) NOT NULL,
  `Application_status` tinyint(1) DEFAULT NULL,
  `Day` datetime NOT NULL,
  `Mob_no` varchar(255) NOT NULL,
  `Room_type` varchar(255) NOT NULL,
  `Room_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `Hostel_id` int(10) NOT NULL,
  `Hostel_loc` varchar(255) NOT NULL,
  `Hostel_name` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `No_of_rooms` varchar(255) DEFAULT NULL,
  `Location` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`Hostel_id`, `Hostel_loc`, `Hostel_name`, `Price`, `No_of_rooms`, `Location`, `Image`) VALUES
(1, 'uds', 'Gbewaa Hall', '500-2,000', '20', '                        Behind Block A                    \r\n                                        ', '4.jpg'),
(2, 'uds', 'Gbganzaba Hall', '500-2,000', '20', '                        Behind Block A                   \r\n                                        ', '4.jpg'),
(3, 'ug', 'Pagnaa Hall', '1,000-3,500', '20', 'Behind Block A                    \r\n                                        ', '12.jpg'),
(4, 'ug', 'Dakpema Hall', '1,000-3,500', '20', 'Behind Block B                  \r\n                                        ', '12.jpg'),
(5, 'knust', 'Konti Hall', '900-2,500', '20', 'Behind Block A                    \r\n                                        ', '22.jpg'),
(6, 'knust', 'Gbadamoshie Hall', '900-2,500', '20', 'Behind Block B                    \r\n                                        ', '22.jpg'),
(7, 'uds', 'Nkrumah Hall', '500-2,000', '20', 'Behind Block C', '4.jpg'),
(8, 'ug', 'Vandals Hall', '1,000-3,500', '20', ' Behind Block C                     \r\n                    ', '12.jpg'),
(9, 'knust', 'Gulkpegu Hall', '900-2,500', '20', ' Behind Block C                     \r\n                                        \r\n                    ', '22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_manager`
--

CREATE TABLE `hostel_manager` (
  `Hostel_man_id` int(10) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Mob_no` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Hostel_id` int(10) NOT NULL,
  `Isadmin` tinyint(1) DEFAULT 0,
  `Pwd` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_manager`
--

INSERT INTO `hostel_manager` (`Hostel_man_id`, `Username`, `Fname`, `Lname`, `Mob_no`, `Email`, `Hostel_id`, `Isadmin`, `Pwd`) VALUES
(1, 'rmustapha', 'Rafick', 'Mustapha', '0207728823', 'mustapharafick3@gmail.com', 0, 1, '1111'),
(3, 'mrafick', 'Mandeya', 'Rafick', '0240245872', 'mandeyarafick7@gmail.com', 1, 0, NULL),
(4, 'hbawah', 'Hafiz', 'Bawah', '0207728823', 'hafeezbawah89@gmail.com', 2, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Room_id` int(10) NOT NULL,
  `Hostel_id` int(10) NOT NULL,
  `Room_no` decimal(10,1) NOT NULL,
  `Allocated` tinyint(1) DEFAULT 0,
  `Room_type` varchar(255) NOT NULL,
  `Price` varchar(250) NOT NULL,
  `Reserve` tinyint(1) DEFAULT 0,
  `Day_reserved` datetime DEFAULT NULL,
  `Renewal` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Room_id`, `Hostel_id`, `Room_no`, `Allocated`, `Room_type`, `Price`, `Reserve`, `Day_reserved`, `Renewal`) VALUES
(1, 1, '1.0', 0, '1 in 1', '2,000', 0, '2021-06-16 09:34:23', 0),
(2, 1, '2.0', 1, '2 in 1', '1,200', 0, '2021-06-16 09:35:13', 0),
(3, 1, '2.1', 0, '2 in 1', '1,000', 0, '0000-00-00 00:00:00', 0),
(4, 1, '3.0', 0, '3 in 1', '957', 0, '2021-06-07 14:49:15', 0),
(5, 1, '4.0', 0, '1 in 1', '2,000', 0, '0000-00-00 00:00:00', 0),
(6, 1, '3.2', 0, '3 in 1', '957', 0, '0000-00-00 00:00:00', 0),
(7, 1, '4.0', 0, '1 in 1', '1,200', 0, '0000-00-00 00:00:00', 0),
(8, 1, '5.0', 0, '1 in 1', '1,200', 0, '0000-00-00 00:00:00', 0),
(9, 2, '1.0', 0, '1 in 1', '3,500', 0, '0000-00-00 00:00:00', 0),
(10, 2, '2.0', 0, '2 in 1', '1,500', 0, '0000-00-00 00:00:00', 0),
(11, 2, '2.1', 0, '2 in 1', '1,500', 0, '0000-00-00 00:00:00', 0),
(12, 3, '1.0', 0, '1 in 1', '1,500', 0, '0000-00-00 00:00:00', 0),
(13, 3, '2.0', 0, '2 in 1', '969', 0, '0000-00-00 00:00:00', 0),
(14, 3, '2.1', 0, '2 in 1', '969', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `School_id` int(100) NOT NULL,
  `Campus` varchar(255) NOT NULL,
  `School_name` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`School_id`, `Campus`, `School_name`, `Image`) VALUES
(1, 'knust', 'Kwame Nkrumah University Of Science & Technology (KNUST)', 'knust.png'),
(2, 'uds', 'University Of Development Studies (UDS)', 'uds.png'),
(3, 'ug', 'University Of Ghana Legon (UG)', 'ug.png'),
(5, 'tatu', 'Tamale Technical University (TaTU)', 'knust.png');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Student_id` varchar(255) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Mob_no` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pwd` longtext NOT NULL,
  `Hostel_id` int(10) DEFAULT NULL,
  `Room_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Student_id`, `Fname`, `Lname`, `Mob_no`, `Email`, `Pwd`, `Hostel_id`, `Room_id`) VALUES
('121212', 'Abdul Hafiz', 'Ibrahim', '0207728823', 'mustapharafick3@gmail.com', '$2y$10$JvnHiz09S2ujeMgfumzE..yl20lnYdZVPkCC2wivI16Gg1gLAfseO', 1, 2),
('12345', 'Rafick', 'Mustapha', '0207728823', 'mustapharafick3@gmail.com', '$2y$10$R3NkrEQ.OxZY4AXKq98DauOo0p6HBtpm0trjlmbW./LeWwkcPBc9u', NULL, NULL),
('131313', 'Abdul Mohib', 'Abdul Rahman', '0207728823', 'mustapharafick3@gmail.com', '$2y$10$FGiVZC2ixU1jZ94UCtMk7uxLUaqg1T.u5QN0jg7Smf6qiAU/mLat2', NULL, NULL),
('141414', 'Mandeya ', 'Abdul Rafick', '0207728823', 'mustapharafick3@gmail.com', '$2y$10$s5gWJL37u4aTvySSe5flzuQhn9BkBTZNr2Kve/eNwLQ02hm7UialK', NULL, NULL),
('151515', 'Djawad', 'Mustapha', '0207728823', 'mustapharafick3@gmail.com', '$2y$10$f2HrN7aXPHOP6BHUbHA5Pu4g58D8kqFKSGKfxr9suo5qopBHwuKIa', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`Application_id`),
  ADD KEY `Student_id` (`Student_id`),
  ADD KEY `Hostel_id` (`Hostel_id`),
  ADD KEY `Room_id` (`Room_id`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`Hostel_id`);

--
-- Indexes for table `hostel_manager`
--
ALTER TABLE `hostel_manager`
  ADD PRIMARY KEY (`Hostel_man_id`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD KEY `Hostel_id` (`Hostel_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Room_id`),
  ADD KEY `Hostel_id` (`Hostel_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`School_id`),
  ADD UNIQUE KEY `Campus` (`Campus`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Student_id`),
  ADD KEY `Hostel_id` (`Hostel_id`),
  ADD KEY `Room_id` (`Room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `Application_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `School_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
