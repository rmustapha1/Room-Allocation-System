-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 08:46 AM
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
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `Application_id` int(100) NOT NULL,
  `Student_id` varchar(255) NOT NULL,
  `Hostel_id` int(10) NOT NULL,
  `Application_status` tinyint(1) DEFAULT NULL,
  `Room_No` decimal(10,1) DEFAULT NULL,
  `Message` varchar(255) DEFAULT NULL,
  `Mob_no` varchar(255) NOT NULL,
  `Room_Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`Application_id`, `Student_id`, `Hostel_id`, `Application_status`, `Room_No`, `Message`, `Mob_no`, `Room_Type`) VALUES
(1, '11111', 1, 0, '2.0', '', '0207728823', '4 in 1 Male'),
(2, '08181032', 1, 0, '2.1', '', '0207728823', '4 in 1 Male'),
(3, '22222', 1, 0, '1.0', '', '0207728823', '6 in 1 Male');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `Guest_id` int(100) NOT NULL,
  `Guest_name` varchar(255) NOT NULL,
  `Mob_no` varchar(25) NOT NULL,
  `Day` date NOT NULL,
  `Time_in` time NOT NULL,
  `Time_out` time NOT NULL,
  `Student_id` varchar(255) NOT NULL,
  `Hostel_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `Hostel_id` int(10) NOT NULL,
  `Hostel_name` varchar(255) NOT NULL,
  `current_no_of_rooms` varchar(255) DEFAULT NULL,
  `No_of_rooms` varchar(255) DEFAULT NULL,
  `No_of_students` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`Hostel_id`, `Hostel_name`, `current_no_of_rooms`, `No_of_rooms`, `No_of_students`) VALUES
(1, 'Gbewaa Hall', NULL, '400', NULL),
(2, 'Nkrumah Hall', NULL, '400', NULL),
(3, 'Pagnaa Hall', NULL, '400', NULL),
(4, 'Gbadamoshie Hall', NULL, '400', NULL);

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
  `Hostel_id` int(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Isadmin` tinyint(1) DEFAULT 0,
  `Pwd` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_manager`
--

INSERT INTO `hostel_manager` (`Hostel_man_id`, `Username`, `Fname`, `Lname`, `Mob_no`, `Hostel_id`, `Email`, `Isadmin`, `Pwd`) VALUES
(1, 'admin', 'Mustapha', 'Rafick', '0207728823', 1, 'mustapharafick3@gmail.com', 1, '$2y$10$WIOMIhhBAU2jWHLaK.fl3eb6tL9a5T.0PyjKaZn5E35Y61Fo/jZu.'),
(7, 'rafick51', 'Rafick', 'Mustapha', '0207728823', 1, 'mustapharafick3@gmail.com', 0, '$2y$10$hgYICa2oK1nWjezXlnofU.iGYIhp9uvbLa2mkYm1HHIft5tafAgQ2'),
(8, 'moabdul49', 'Abdul', 'Mohib', '0207728823', 3, 'abdulmohib45@gmail.com', 0, '$2y$10$JV/ALCgxPesI/cl6Kqc9kOXxgiXh0DMBpIE/t.491serZsrONikdG');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(10) NOT NULL,
  `sender_id` varchar(255) DEFAULT NULL,
  `receiver_id` varchar(255) DEFAULT NULL,
  `hostel_id` int(10) DEFAULT NULL,
  `subject_h` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `msg_date` varchar(255) DEFAULT NULL,
  `msg_time` varchar(255) DEFAULT NULL,
  `Seen` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `sender_id`, `receiver_id`, `hostel_id`, `subject_h`, `message`, `msg_date`, `msg_time`, `Seen`) VALUES
(1, '2', '08181032', 1, 'Thanks', 'Thanks', '2021-04-23', '06:54 AM', 1),
(2, '2', '08181032', 1, 'Thanks', 'Thanks', '2021-04-23', '07:00 AM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Room_id` int(10) NOT NULL,
  `Hostel_id` int(10) NOT NULL,
  `Room_No` decimal(10,1) NOT NULL,
  `Allocated` tinyint(1) DEFAULT 0,
  `Room_type` varchar(255) NOT NULL,
  `Floor` varchar(250) NOT NULL,
  `Price` varchar(250) NOT NULL,
  `Reserve` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Room_id`, `Hostel_id`, `Room_No`, `Allocated`, `Room_type`, `Floor`, `Price`, `Reserve`) VALUES
(1, 1, '1.0', 1, '6 in 1 Male', 'Ground Floor', '450', 0),
(2, 1, '1.1', 0, '6 in 1 Male', 'Ground Floor', '450', 0),
(3, 1, '1.2', 0, '6 in 1 Male', 'Ground Floor', '450', 0),
(4, 1, '1.3', 0, '6 in 1 Male', 'Ground Floor', '450', 0),
(5, 1, '1.4', 0, '6 in 1 Male', 'Ground Floor', '450', 0),
(6, 1, '1.5', 0, '6 in 1 Male', 'Ground Floor', '450', 0),
(7, 1, '2.0', 1, '4 in 1 Male', 'Second Floor', '550', 0),
(8, 1, '2.1', 1, '4 in 1 Male', ' SecondFloor', '550', 0),
(9, 1, '2.2', 0, '4 in 1 Male', 'Second Floor', '550', 1),
(10, 1, '2.3', 0, '4 in 1 Male', 'Second Floor', '550', 0),
(11, 1, '3.0', 0, '4 in 1 Female', 'Third Floor', '550', 0),
(12, 1, '3.1', 0, '4 in 1 Female', 'Third Floor', '550', 1),
(13, 1, '3.2', 0, '4 in 1 Female', 'Third Floor', '550', 1),
(14, 1, '3.3', 0, '4 in 1 Female', 'Third Floor', '550', 1),
(16, 1, '4.0', 0, '4 in 1 Male', 'Ground Floor', '450', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_id` varchar(255) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `DoB` varchar(255) NOT NULL,
  `Sex` varchar(255) NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `H_town` varchar(255) NOT NULL,
  `H_address` varchar(255) NOT NULL,
  `Mob_no` varchar(255) NOT NULL,
  `Dept` varchar(255) NOT NULL,
  `Year_of_study` varchar(255) NOT NULL,
  `Emeg_name` varchar(255) NOT NULL,
  `Emeg_relationship` varchar(255) NOT NULL,
  `Emeg_contact` varchar(255) NOT NULL,
  `Pwd` longtext NOT NULL,
  `Hostel_id` int(10) DEFAULT NULL,
  `Room_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_id`, `Fname`, `Lname`, `DoB`, `Sex`, `Nationality`, `H_town`, `H_address`, `Mob_no`, `Dept`, `Year_of_study`, `Emeg_name`, `Emeg_relationship`, `Emeg_contact`, `Pwd`, `Hostel_id`, `Room_id`) VALUES
('08181032', 'Rafick', 'Mustapha', '2021-04-07', 'Male', 'Ghanaian', 'Tamale', 'NL-12 , Dakpema Road', '0207728823', 'ICT', '100', 'Rafick Mustapha', 'Father', '0207728823', '$2y$10$pQ8uDaNjlL6VLLOBq27RlON2qSh4V/hCbq/5b3CdYqDtHAwVeG7fa', 1, 8),
('11111', 'Abdul Mohib', 'Abdul Rahman ', '2021-03-28', 'Male', 'Ghanaian', 'Tamale', 'NL-12 , Dakpema Road', '0207728823', 'ICT', '100', 'Rafick Mustapha', 'Father', '+233207728823', '$2y$10$mtnJZlIfSSsMUAkgsm9o6uFJ0N8dBhRmb4dL939ZkXHGl4rR8.ctq', 1, 7),
('22222', 'Hafiz', 'Ibrahim', '2021-04-25', 'Male', 'Fulani', 'Tamale', 'NL-12 , Dakpema Road', '0207728823', 'ICT', '-Year Of Study-', 'Rafick Mustapha', 'Brother', '+233207728823', '$2y$10$svbx4gkTkleSIkDi0wKlU.Kjr0uB6DG1r7aw1R3EythELA.JXkNm.', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`Application_id`),
  ADD KEY `Student_id` (`Student_id`),
  ADD KEY `Hostel_id` (`Hostel_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`Guest_id`),
  ADD KEY `Student_id` (`Student_id`),
  ADD KEY `Hostel_id` (`Hostel_id`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`Hostel_id`),
  ADD UNIQUE KEY `Hostel_name` (`Hostel_name`);

--
-- Indexes for table `hostel_manager`
--
ALTER TABLE `hostel_manager`
  ADD PRIMARY KEY (`Hostel_man_id`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD KEY `Hostel_id` (`Hostel_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `hostel_id` (`hostel_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Room_id`),
  ADD KEY `Hostel_id` (`Hostel_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
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
  MODIFY `Application_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `Guest_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `Hostel_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hostel_manager`
--
ALTER TABLE `hostel_manager`
  MODIFY `Hostel_man_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `Room_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `Application_ibfk_1` FOREIGN KEY (`Student_id`) REFERENCES `student` (`Student_id`),
  ADD CONSTRAINT `Application_ibfk_2` FOREIGN KEY (`Hostel_id`) REFERENCES `hostel` (`Hostel_id`);

--
-- Constraints for table `guest`
--
ALTER TABLE `guest`
  ADD CONSTRAINT `Guest_ibfk_1` FOREIGN KEY (`Student_id`) REFERENCES `student` (`Student_id`),
  ADD CONSTRAINT `Guest_ibfk_2` FOREIGN KEY (`Hostel_id`) REFERENCES `hostel` (`Hostel_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
