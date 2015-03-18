-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3307
-- Generation Time: 13. Mar, 2015 13:03 
-- Server-versjon: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `room_booking`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `groupID` int(5) NOT NULL,
  `groupSize` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `group`
--

INSERT INTO `group` (`groupID`, `groupSize`) VALUES
(1, 4),
(4, 3);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `roomNumber` int(10) NOT NULL,
  `hasProjector` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `rooms`
--

INSERT INTO `rooms` (`roomNumber`, `hasProjector`) VALUES
(6, 1),
(12, 1),
(23, 0),
(38, 1),
(41, 1),
(42, 0),
(57, 1),
(69, 0),
(82, 1),
(83, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `room_booked_date`
--

CREATE TABLE IF NOT EXISTS `room_booked_date` (
  `date` date NOT NULL,
  `roomID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `room_booked_date`
--

INSERT INTO `room_booked_date` (`date`, `roomID`) VALUES
('2015-03-13', 6);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `studentID` int(8) NOT NULL,
  `studentName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `students`
--

INSERT INTO `students` (`studentID`, `studentName`) VALUES
(10000001, 'Christian Anker Kulmus'),
(10000002, 'Anita T. Ilieva'),
(10000003, 'Alexander Larsen'),
(10000004, 'Sondre Tjostheim'),
(10000005, 'Adam Habes'),
(10000006, 'Lars Monsen'),
(10000007, 'Ola Nordman'),
(10000008, 'Charlie Chaplin'),
(10000009, 'Jeve Stobs'),
(10000010, 'Gill Bates'),
(10000011, 'Bjorn Olav Listag');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `student_group`
--

CREATE TABLE IF NOT EXISTS `student_group` (
  `studentID` int(11) NOT NULL,
  `groupID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `student_group`
--

INSERT INTO `student_group` (`studentID`, `groupID`) VALUES
(10000002, 4),
(10000005, 4),
(10000006, 4),
(10000001, 1),
(10000010, 1),
(10000007, 1),
(10000008, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `student_group_rooms`
--

CREATE TABLE IF NOT EXISTS `student_group_rooms` (
  `groupID` int(11) NOT NULL,
  `reservationDate` date NOT NULL,
  `roomNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `student_group_rooms`
--

INSERT INTO `student_group_rooms` (`groupID`, `reservationDate`, `roomNumber`) VALUES
(1, '2015-03-18', 57),
(4, '2015-03-17', 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `group`
--
ALTER TABLE `group`
 ADD PRIMARY KEY (`groupID`), ADD UNIQUE KEY `groupID` (`groupID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
 ADD PRIMARY KEY (`roomNumber`), ADD UNIQUE KEY `roomNumber` (`roomNumber`);

--
-- Indexes for table `room_booked_date`
--
ALTER TABLE `room_booked_date`
 ADD UNIQUE KEY `date` (`date`,`roomID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`studentID`), ADD UNIQUE KEY `studentID` (`studentID`);

--
-- Indexes for table `student_group_rooms`
--
ALTER TABLE `student_group_rooms`
 ADD PRIMARY KEY (`groupID`,`reservationDate`,`roomNumber`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
