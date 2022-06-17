-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 11:03 PM
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
-- Database: `pay-tracker-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `conducted_lessons`
--

CREATE TABLE `conducted_lessons` (
  `lessonID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `lessonName` text NOT NULL,
  `moduleNum` int(11) NOT NULL,
  `lessonNum` int(11) NOT NULL,
  `groupName` text NOT NULL,
  `lessonDate` date NOT NULL,
  `lessonTime` time NOT NULL,
  `duration` time NOT NULL,
  `type` text NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conducted_lessons`
--

INSERT INTO `conducted_lessons` (`lessonID`, `userID`, `lessonName`, `moduleNum`, `lessonNum`, `groupName`, `lessonDate`, `lessonTime`, `duration`, `type`, `price`) VALUES
(690, 1, 'Digital Creativity', 1, 3, 'empty', '2022-02-18', '18:00:00', '01:00:00', 'Group', '18'),
(691, 1, 'Digital Creativity', 6, 2, 'empty', '2022-02-20', '18:00:00', '01:30:00', 'Group', '27'),
(692, 1, '3D Modelling', 1, 1, 'empty', '2022-02-23', '18:00:00', '01:30:00', 'Group', '27'),
(693, 1, 'Digital Creativity', 1, 3, 'empty', '2022-02-24', '18:00:00', '01:00:00', 'Group', '18'),
(694, 1, '3D Modelling', 1, 1, 'empty', '2022-02-25', '18:00:00', '01:30:00', 'Group', '27'),
(695, 1, 'Digital Creativity', 6, 3, 'empty', '2022-02-27', '18:00:00', '01:30:00', 'Group', '27'),
(696, 1, '3D Modelling', 1, 2, 'Online656_WED-6', '2022-03-02', '18:00:00', '01:30:00', 'Group', '27'),
(697, 1, '3D Modelling', 1, 2, 'Online679_FRI-6', '2022-03-04', '18:00:00', '01:30:00', 'Group', '27'),
(698, 1, 'Digital Creativity', 6, 4, 'Online171_SUN-6', '2022-03-06', '18:00:00', '01:30:00', 'Group', '27'),
(699, 1, '3D Modelling', 1, 3, 'Online656_WED-6', '2022-03-09', '18:00:00', '01:30:00', 'Group', '27'),
(700, 1, '3D Modelling', 1, 3, 'Online679_FRI-6', '2022-03-11', '18:00:00', '01:30:00', 'Group', '27'),
(701, 1, 'Digital Creativity', 1, 1, 'Online773_SUN-4', '2022-03-13', '18:00:00', '01:30:00', 'Group', '18'),
(702, 1, 'Digital Creativity', 7, 1, 'Online171_SUN-6', '2022-03-13', '18:00:00', '01:30:00', 'Group', '27'),
(703, 1, '3D Modelling', 1, 4, 'Online656_WED-6', '2022-03-16', '18:00:00', '01:30:00', 'Group', '27'),
(704, 1, '3D Modelling', 1, 4, 'Online679_FRI-6', '2022-03-18', '18:00:00', '01:30:00', 'Group', '27'),
(705, 1, 'Digital Creativity', 1, 2, 'Online773_SUN-4', '2022-03-20', '16:00:00', '01:00:00', 'Group', '18'),
(706, 1, 'Digital Creativity', 7, 2, 'Online171_SUN-6', '2022-03-20', '18:00:00', '01:30:00', 'Group', '27'),
(707, 1, '3D Modelling', 2, 1, 'Online656_WED-6', '2022-03-23', '18:00:00', '01:30:00', 'Group', '27'),
(708, 1, '3D Modelling', 1, 1, 'ENGind-74_THU-7', '2022-03-24', '19:00:00', '01:00:00', 'Individual', '16'),
(709, 1, '3D Modelling', 2, 1, 'Online679_FRI-6', '2022-03-25', '18:00:00', '01:30:00', 'Group', '27'),
(710, 1, 'Digital Creativity', 1, 3, 'Online773_SUN-4', '2022-03-27', '16:00:00', '01:00:00', 'Group', '18'),
(711, 1, 'Digital Creativity', 7, 3, 'Online171_SUN-6', '2022-03-27', '18:00:00', '01:30:00', 'Group', '27'),
(712, 1, '3D Modelling', 2, 2, 'Online656_WED-6', '2022-03-30', '18:00:00', '01:30:00', 'Group', '27'),
(713, 1, '3D Modelling', 1, 2, 'ENGind-74_THU-7', '2022-03-31', '19:00:00', '01:00:00', 'Individual', '16'),
(714, 1, '3D Modelling', 2, 2, 'Online679_FRI-6', '2022-04-01', '18:00:00', '01:30:00', 'Group', '27'),
(715, 1, 'Digital Creativity', 1, 4, 'Online773_SUN-4', '2022-04-03', '16:00:00', '01:00:00', 'Group', '18'),
(716, 1, 'Digital Creativity', 7, 4, 'Online171_SUN-6', '2022-04-03', '18:00:00', '01:30:00', 'Group', '27'),
(717, 1, '3D Modelling', 2, 3, 'Online656_WED-6', '2022-04-06', '18:00:00', '01:30:00', 'Group', '27'),
(718, 1, '3D Modelling', 1, 3, 'ENGind-74_THU-7', '2022-04-07', '19:00:00', '01:00:00', 'Individual', '16'),
(719, 1, '3D Modelling', 2, 3, 'Online679_FRI-6', '2022-04-08', '18:00:00', '01:30:00', 'Group', '27'),
(720, 1, '3D Modelling', 4, 3, 'Online469_SAT-4', '2022-04-09', '16:00:00', '01:30:00', 'Group', '27'),
(721, 1, 'Digital Creativity', 2, 1, 'Online773_SUN-4', '2022-04-10', '16:00:00', '01:00:00', 'Group', '18'),
(722, 1, 'Digital Creativity', 8, 1, 'Online171_SUN-6', '2022-04-10', '18:00:00', '01:30:00', 'Group', '27'),
(723, 1, '3D Modelling', 2, 4, 'Online656_WED-6', '2022-04-13', '18:00:00', '01:30:00', 'Group', '27'),
(724, 1, '3D Modelling', 1, 4, 'ENGind-74_THU-7', '2022-04-14', '19:00:00', '01:00:00', 'Individual', '16'),
(725, 1, '3D Modelling', 2, 4, 'Online679_FRI-6', '2022-04-15', '18:00:00', '01:30:00', 'Group', '27'),
(726, 1, '3D Modelling', 4, 4, 'Online469_SAT-4', '2022-04-16', '16:00:00', '01:30:00', 'Group', '27'),
(727, 1, '3D Modelling', 3, 1, 'Online656_WED-6', '2022-04-20', '18:00:00', '01:30:00', 'Group', '27'),
(728, 1, '3D Modelling', 2, 1, 'ENGind-74_THU-7', '2022-04-21', '19:00:00', '01:00:00', 'Individual', '16'),
(729, 1, '3D Modelling', 3, 1, 'Online679_FRI-6', '2022-04-22', '18:00:00', '01:30:00', 'Group', '27'),
(730, 1, 'Digital Creativity', 8, 2, 'Online171_SUN-6', '2022-04-24', '18:00:00', '01:30:00', 'Group', '27'),
(731, 1, '3D Modelling', 3, 2, 'Online656_WED-6', '2022-04-27', '18:00:00', '01:30:00', 'Group', '27'),
(732, 1, '3D Modelling', 2, 2, 'ENGind-74_THU-7', '2022-04-28', '19:00:00', '01:00:00', 'Individual', '16'),
(733, 1, '3D Modelling', 3, 2, 'Online679_FRI-6', '2022-04-29', '18:00:00', '01:30:00', 'Group', '27'),
(734, 1, 'Digital Creativity', 8, 3, 'Online171_SUN-6', '2022-05-01', '18:00:00', '01:30:00', 'Group', '27'),
(735, 1, '3D Modelling', 3, 3, 'Online656_WED-6', '2022-05-04', '18:00:00', '01:30:00', 'Group', '27'),
(736, 1, '3D Modelling', 2, 3, 'ENGind-74_THU-7', '2022-05-05', '19:00:00', '01:00:00', 'Individual', '16'),
(737, 1, '3D Modelling', 3, 3, 'Online679_FRI-6', '2022-05-06', '18:00:00', '01:30:00', 'Group', '27'),
(738, 1, 'Digital Creativity', 8, 4, 'Online171_SUN-6', '2022-05-08', '18:00:00', '01:30:00', 'Group', '27'),
(739, 1, '3D Modelling', 3, 4, 'Online656_WED-6', '2022-05-11', '18:00:00', '01:30:00', 'Group', '27'),
(740, 1, '3D Modelling', 2, 4, 'ENGind-74_THU-7', '2022-05-12', '19:00:00', '01:00:00', 'Individual', '16'),
(741, 1, '3D Modelling', 3, 4, 'Online679_FRI-6', '2022-05-13', '18:00:00', '01:30:00', 'Group', '27'),
(742, 1, '3D Modelling', 4, 1, 'Online656_WED-6', '2022-05-18', '18:00:00', '01:30:00', 'Group', '27'),
(743, 1, '3D Modelling', 3, 1, 'ENGind-74_THU-7', '2022-05-19', '19:00:00', '01:00:00', 'Individual', '16'),
(744, 1, '3D Modelling', 4, 1, 'Online679_FRI-6', '2022-05-20', '18:00:00', '01:30:00', 'Group', '27'),
(745, 1, '3D Modelling', 4, 2, 'Online656_WED-6', '2022-05-25', '18:00:00', '01:30:00', 'Group', '27'),
(746, 1, '3D Modelling', 3, 2, 'ENGind-74_THU-7', '2022-05-26', '19:00:00', '01:00:00', 'Individual', '16'),
(747, 1, '3D Modelling', 4, 2, 'Online679_FRI-6', '2022-05-27', '18:00:00', '01:30:00', 'Group', '27');

-- --------------------------------------------------------

--
-- Table structure for table `grouptbl`
--

CREATE TABLE `grouptbl` (
  `groupID` int(11) NOT NULL,
  `groupName` text NOT NULL,
  `groupDuration` time NOT NULL,
  `lessonDay` text NOT NULL,
  `lessonTime` time NOT NULL,
  `startDate` date NOT NULL,
  `groupType` text NOT NULL,
  `numOfModules` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grouptbl`
--

INSERT INTO `grouptbl` (`groupID`, `groupName`, `groupDuration`, `lessonDay`, `lessonTime`, `startDate`, `groupType`, `numOfModules`) VALUES
(1, 'Online656_WED-6', '01:30:00', 'Wednesday', '18:00:00', '2022-06-06', 'group', 4),
(2, 'Online679_FRI-6', '01:30:00', 'Friday', '18:00:00', '0000-00-00', 'group', 4),
(10, 'ENGind-74_THU-7', '01:00:00', 'Thursday', '19:00:00', '0000-00-00', 'individual', 0);

-- --------------------------------------------------------

--
-- Table structure for table `salarytbl`
--

CREATE TABLE `salarytbl` (
  `salaryID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `groupType` text NOT NULL,
  `duration` time NOT NULL,
  `rate` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salarytbl`
--

INSERT INTO `salarytbl` (`salaryID`, `userID`, `groupType`, `duration`, `rate`) VALUES
(1, 1, 'group', '01:00:00', '18'),
(2, 1, 'group', '01:30:00', '27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `forename` int(11) NOT NULL,
  `surname` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conducted_lessons`
--
ALTER TABLE `conducted_lessons`
  ADD PRIMARY KEY (`lessonID`);

--
-- Indexes for table `grouptbl`
--
ALTER TABLE `grouptbl`
  ADD PRIMARY KEY (`groupID`);

--
-- Indexes for table `salarytbl`
--
ALTER TABLE `salarytbl`
  ADD PRIMARY KEY (`salaryID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conducted_lessons`
--
ALTER TABLE `conducted_lessons`
  MODIFY `lessonID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=749;

--
-- AUTO_INCREMENT for table `grouptbl`
--
ALTER TABLE `grouptbl`
  MODIFY `groupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `salarytbl`
--
ALTER TABLE `salarytbl`
  MODIFY `salaryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
