-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3307
-- Generation Time: 18. Mar, 2015 10:59 
-- Server-versjon: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `group`
--

CREATE TABLE IF NOT EXISTS `group` (
`groupID` int(11) NOT NULL,
  `groupName` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `group`
--

INSERT INTO `group` (`groupID`, `groupName`) VALUES
(1, 'PJ2100 Eksamen'),
(2, 'PG2100 Prosjekt');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `group_room`
--

CREATE TABLE IF NOT EXISTS `group_room` (
  `groupID` int(11) NOT NULL,
  `roomNumber` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `group_room`
--

INSERT INTO `group_room` (`groupID`, `roomNumber`, `date`, `time`) VALUES
(1, 42, '2015-03-19', '10:15:00'),
(2, 85, '2015-03-19', '10:15:00'),
(1, 27, '2015-03-17', '10:15'),
(1, 27, '2015-03-18', '08:15 - 10:15'),
(1, 27, '2015-03-18', '08:15 - 10:15'),
(1, 27, '2015-03-18', '12:15 - 14:15'),
(1, 27, '2015-03-18', '12:15 - 14:15'),
(1, 27, '2015-03-18', '12:15 - 14:15'),
(1, 27, '2015-03-18', '12:15 - 14:15'),
(1, 27, '2015-03-18', '08:15 - 10:15'),
(1, 27, '2015-03-18', '12:15 - 14:15'),
(1, 27, '2015-03-18', '10:15 - 12:15'),
(1, 27, '2015-03-17', '14:15 - 16:15'),
(1, 27, '2015-03-18', '14:15 - 16:15'),
(1, 27, '2015-03-17', '10:15 - 12:15'),
(1, 27, '2015-03-17', '12:15 - 14:15'),
(1, 27, '2015-03-17', '08:15 - 10:15'),
(1, 36, '2015-03-17', '08:15 - 10:15'),
(1, 36, '2015-03-17', '12:15 - 14:15'),
(1, 36, '2015-03-17', '10:15 - 12:15'),
(1, 36, '2015-03-17', '14:15 - 16:15'),
(1, 38, '2015-03-17', '08:15 - 10:15'),
(1, 36, '2015-03-18', '08:15 - 10:15'),
(1, 36, '2015-03-18', '12:15 - 14:15'),
(1, 36, '2015-03-18', '10:15 - 12:15'),
(1, 36, '2015-03-18', '14:15 - 16:15'),
(1, 27, '2015-03-19', '08:15 - 10:15'),
(1, 27, '2015-03-19', '12:15 - 14:15');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `group_students`
--

CREATE TABLE IF NOT EXISTS `group_students` (
  `groupID` int(11) NOT NULL,
  `studentUser` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `group_students`
--

INSERT INTO `group_students` (`groupID`, `studentUser`) VALUES
(1, 'larale14'),
(1, 'tjoson14'),
(2, 'habada14'),
(2, 'kulchr14');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `roomNumber` int(2) NOT NULL,
  `size` tinyint(1) NOT NULL DEFAULT '2',
  `hasProjector` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `room`
--

INSERT INTO `room` (`roomNumber`, `size`, `hasProjector`) VALUES
(27, 3, 1),
(36, 2, 0),
(38, 3, 1),
(40, 4, 1),
(42, 4, 1),
(50, 4, 0),
(85, 3, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `studentUser` varchar(8) NOT NULL,
  `studentName` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `student`
--

INSERT INTO `student` (`studentUser`, `studentName`) VALUES
('habada14', 'Adam Habes'),
('iliani14', 'Anita Illeva'),
('kulchr14', 'Christian Kulmus'),
('larale14', 'Alexander Larsen'),
('tjoson14', 'Sondre Tjosheim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `group`
--
ALTER TABLE `group`
 ADD UNIQUE KEY `groupID` (`groupID`);

--
-- Indexes for table `group_students`
--
ALTER TABLE `group_students`
 ADD PRIMARY KEY (`groupID`,`studentUser`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
 ADD PRIMARY KEY (`roomNumber`), ADD UNIQUE KEY `roomNumber` (`roomNumber`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD UNIQUE KEY `studentID` (`studentUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
MODIFY `groupID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
