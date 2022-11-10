-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 08:39 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advance_kasit_f_2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `ID` int(20) NOT NULL,
  `Name` varchar(250) COLLATE utf8_bin NOT NULL,
  `Department_Name` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`ID`, `Name`, `Department_Name`) VALUES
(1, 'Class 1', 'CIS');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `ID` int(20) NOT NULL,
  `Course_Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Department_Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `I_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`ID`, `Course_Name`, `Department_Name`, `I_ID`) VALUES
(11, 'software', 'CIS', 3),
(13, 'Mulimedia', 'CIS', 4),
(14, 'Adv-Database', 'CIS', 3);

-- --------------------------------------------------------

--
-- Table structure for table `courses_files`
--

CREATE TABLE `courses_files` (
  `ID` int(20) NOT NULL,
  `P_ID` int(20) NOT NULL,
  `Title` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `File_Path` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Total_Rate` int(20) NOT NULL,
  `Status` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses_files`
--

INSERT INTO `courses_files` (`ID`, `P_ID`, `Title`, `File_Path`, `Total_Rate`, `Status`, `Add_Date_Time`) VALUES
(2, 10, 'Book', 'Files/Software Engineering (9th Edition).pdf', 0, 'Pending', '2022-01-06 17:38:52'),
(3, 13, 'slides ', 'Files/mid material.pdf', 0, 'Pending', '2022-01-06 18:03:31');

-- --------------------------------------------------------

--
-- Table structure for table `courses_packages`
--

CREATE TABLE `courses_packages` (
  `ID` int(20) NOT NULL,
  `S_ID` int(20) NOT NULL,
  `C_ID` int(20) NOT NULL,
  `Department_Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Package_Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses_packages`
--

INSERT INTO `courses_packages` (`ID`, `S_ID`, `C_ID`, `Department_Name`, `Package_Name`, `Add_Date_Time`) VALUES
(10, 181212, 11, 'CIS', 'Software engineering ', '2022-01-06 17:37:08'),
(13, 181212, 14, 'CIS', 'matreial ', '2022-01-06 18:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `courses_schedules`
--

CREATE TABLE `courses_schedules` (
  `ID` int(20) NOT NULL,
  `Course_ID` int(20) NOT NULL,
  `Class_ID` int(20) NOT NULL,
  `I_ID` int(20) NOT NULL,
  `Days` varchar(250) COLLATE utf8_bin NOT NULL,
  `Time` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `files_rates`
--

CREATE TABLE `files_rates` (
  `ID` int(20) NOT NULL,
  `S_ID` int(20) NOT NULL,
  `F_ID` int(20) NOT NULL,
  `Rate` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `ID` int(20) NOT NULL,
  `Full_Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Department_Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Office_Hours` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Username` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Password` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`ID`, `Full_Name`, `Department_Name`, `Office_Hours`, `Username`, `Password`) VALUES
(3, 'shahad', 'CIS', '10-11', 'shahad', '123456'),
(4, 'Ammar', 'CIS', '12:30 - 1:30', 'admin1', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `libraries`
--

CREATE TABLE `libraries` (
  `ID` int(20) NOT NULL,
  `Name` varchar(250) COLLATE utf8_bin NOT NULL,
  `Phone_Number` varchar(250) COLLATE utf8_bin NOT NULL,
  `Email_Address` varchar(250) COLLATE utf8_bin NOT NULL,
  `Address` varchar(250) COLLATE utf8_bin NOT NULL,
  `Longitude` varchar(250) COLLATE utf8_bin NOT NULL,
  `Latitude` varchar(250) COLLATE utf8_bin NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `libraries`
--

INSERT INTO `libraries` (`ID`, `Name`, `Phone_Number`, `Email_Address`, `Address`, `Longitude`, `Latitude`, `Add_Date_Time`) VALUES
(3, 'JU', '0780000000', 'ju@ju.com', 'Amman', '35.86997913641156', '32.015453507985754', '2022-01-04 18:56:44');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Uni_Number` int(7) NOT NULL,
  `Full_Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Department_Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Email_Address` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Phone_Number` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Password` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Volunteer_Status` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Total_Rates` int(20) NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Uni_Number`, `Full_Name`, `Department_Name`, `Email_Address`, `Phone_Number`, `Password`, `Volunteer_Status`, `Total_Rates`, `Add_Date_Time`) VALUES
(21599, 'Lujun', 'CS', 'luj021599@ju.edu.jo', '0780000000', '123456', 'Accept', 5, '2022-01-06 18:40:11'),
(178071, 'Ammar Arab', 'CIS', 'ama0178071@ju.edu.jo', '0780000000', '123456789', 'Accept', 0, '2022-01-06 18:07:39'),
(181212, 'shahad', 'CIS', 'shd0181212@ju.edu.jo', '079856585', '123456', 'Accept', 5, '2022-01-06 18:40:14');

-- --------------------------------------------------------

--
-- Table structure for table `students_ratings`
--

CREATE TABLE `students_ratings` (
  `ID` int(20) NOT NULL,
  `S_ID` int(20) NOT NULL,
  `V_ID` int(20) NOT NULL,
  `Rate` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_ratings`
--

INSERT INTO `students_ratings` (`ID`, `S_ID`, `V_ID`, `Rate`) VALUES
(9, 178071, 21599, 5),
(10, 178071, 181212, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `shahad` varchar(15) NOT NULL,
  `Ammar` varchar(15) NOT NULL,
  `Malak` varchar(15) NOT NULL,
  `Huda` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `volunteers_courses`
--

CREATE TABLE `volunteers_courses` (
  `ID` int(20) NOT NULL,
  `S_ID` int(20) NOT NULL,
  `C_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `I_ID` (`I_ID`);

--
-- Indexes for table `courses_files`
--
ALTER TABLE `courses_files`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `P_ID` (`P_ID`);

--
-- Indexes for table `courses_packages`
--
ALTER TABLE `courses_packages`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `S_ID` (`S_ID`,`C_ID`),
  ADD KEY `C_ID` (`C_ID`);

--
-- Indexes for table `courses_schedules`
--
ALTER TABLE `courses_schedules`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Class_ID` (`Class_ID`),
  ADD KEY `Course_ID` (`Course_ID`),
  ADD KEY `I_ID` (`I_ID`);

--
-- Indexes for table `files_rates`
--
ALTER TABLE `files_rates`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `S_ID_2` (`S_ID`),
  ADD KEY `F_ID` (`F_ID`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `libraries`
--
ALTER TABLE `libraries`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Uni_Number`);

--
-- Indexes for table `students_ratings`
--
ALTER TABLE `students_ratings`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `S_ID` (`S_ID`),
  ADD KEY `V_ID` (`V_ID`) USING BTREE;

--
-- Indexes for table `volunteers_courses`
--
ALTER TABLE `volunteers_courses`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `S_ID` (`S_ID`,`C_ID`),
  ADD KEY `C_ID` (`C_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `courses_files`
--
ALTER TABLE `courses_files`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses_packages`
--
ALTER TABLE `courses_packages`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `courses_schedules`
--
ALTER TABLE `courses_schedules`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files_rates`
--
ALTER TABLE `files_rates`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `libraries`
--
ALTER TABLE `libraries`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `Uni_Number` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9876544;

--
-- AUTO_INCREMENT for table `students_ratings`
--
ALTER TABLE `students_ratings`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `volunteers_courses`
--
ALTER TABLE `volunteers_courses`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`I_ID`) REFERENCES `instructors` (`ID`);

--
-- Constraints for table `courses_files`
--
ALTER TABLE `courses_files`
  ADD CONSTRAINT `courses_files_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `courses_packages` (`ID`);

--
-- Constraints for table `courses_packages`
--
ALTER TABLE `courses_packages`
  ADD CONSTRAINT `courses_packages_ibfk_1` FOREIGN KEY (`S_ID`) REFERENCES `students` (`Uni_Number`),
  ADD CONSTRAINT `courses_packages_ibfk_2` FOREIGN KEY (`C_ID`) REFERENCES `courses` (`ID`);

--
-- Constraints for table `courses_schedules`
--
ALTER TABLE `courses_schedules`
  ADD CONSTRAINT `courses_schedules_ibfk_1` FOREIGN KEY (`Class_ID`) REFERENCES `classes` (`ID`),
  ADD CONSTRAINT `courses_schedules_ibfk_2` FOREIGN KEY (`Course_ID`) REFERENCES `courses` (`ID`),
  ADD CONSTRAINT `courses_schedules_ibfk_3` FOREIGN KEY (`I_ID`) REFERENCES `instructors` (`ID`);

--
-- Constraints for table `files_rates`
--
ALTER TABLE `files_rates`
  ADD CONSTRAINT `F_ID` FOREIGN KEY (`F_ID`) REFERENCES `courses_files` (`ID`),
  ADD CONSTRAINT `S_ID_2` FOREIGN KEY (`S_ID`) REFERENCES `students` (`Uni_Number`);

--
-- Constraints for table `students_ratings`
--
ALTER TABLE `students_ratings`
  ADD CONSTRAINT `students_ratings_ibfk_1` FOREIGN KEY (`S_ID`) REFERENCES `students` (`Uni_Number`),
  ADD CONSTRAINT `students_ratings_ibfk_2` FOREIGN KEY (`V_ID`) REFERENCES `students` (`Uni_Number`);

--
-- Constraints for table `volunteers_courses`
--
ALTER TABLE `volunteers_courses`
  ADD CONSTRAINT `volunteers_courses_ibfk_1` FOREIGN KEY (`S_ID`) REFERENCES `students` (`Uni_Number`),
  ADD CONSTRAINT `volunteers_courses_ibfk_2` FOREIGN KEY (`C_ID`) REFERENCES `courses` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
