-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2019 at 08:22 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lcc_media`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `ID` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ID`, `Name`, `Code`) VALUES
(1, 'Admin', '9785c1aaf1fd69fbb2e17bbdf6b0a03d');

-- --------------------------------------------------------

--
-- Table structure for table `featuredevent`
--

CREATE TABLE `featuredevent` (
  `ID` int(10) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Content` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news01`
--

CREATE TABLE `news01` (
  `ID` int(10) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Summary` varchar(100) NOT NULL,
  `Paragraph_1` longtext NOT NULL,
  `Paragraph_2` longtext NOT NULL,
  `Paragraph_3` longtext NOT NULL,
  `Title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news01journalist`
--

CREATE TABLE `news01journalist` (
  `ID` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news01journalist`
--

INSERT INTO `news01journalist` (`ID`, `Name`, `Code`) VALUES
(1, 'journal', '85c9c545b993b5bb0d98f45a1f12206f');

-- --------------------------------------------------------

--
-- Table structure for table `news02`
--

CREATE TABLE `news02` (
  `ID` int(10) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Summary` varchar(100) NOT NULL,
  `Paragraph_1` longtext NOT NULL,
  `Paragraph_2` longtext NOT NULL,
  `Paragraph_3` longtext NOT NULL,
  `Title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news02journalist`
--

CREATE TABLE `news02journalist` (
  `ID` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news02journalist`
--

INSERT INTO `news02journalist` (`ID`, `Name`, `Code`) VALUES
(1, 'journal02', '180202f83ae322d61b7360608a28869c');

-- --------------------------------------------------------

--
-- Table structure for table `news03`
--

CREATE TABLE `news03` (
  `ID` int(10) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Summary` varchar(100) NOT NULL,
  `Paragraph_1` longtext NOT NULL,
  `Paragraph_2` longtext NOT NULL,
  `Paragraph_3` longtext NOT NULL,
  `Title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news03journalist`
--

CREATE TABLE `news03journalist` (
  `ID` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news03journalist`
--

INSERT INTO `news03journalist` (`ID`, `Name`, `Code`) VALUES
(1, 'journal03', 'ce18670f298650b88d24d0e76d04ac44');

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `ID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `Name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `YearSectionORAddress` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MobileNumber` decimal(11,0) NOT NULL,
  `ShirtName` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ShirtType` varchar(100) NOT NULL,
  `ShirtSize` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Quantity` int(10) NOT NULL,
  `OIG` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`ID`, `Name`, `YearSectionORAddress`, `MobileNumber`, `ShirtName`, `ShirtType`, `ShirtSize`, `Quantity`, `OIG`, `Status`) VALUES
(00002, 'Mel Fatima Amaro Fernandez', '1-BSIT', '9056142083', 'TRIBU LCCIAN SINULOG', 'TRSNG', 'L', 6, 'MAZU2362019', 'pending'),
(00003, 'Hunter X Hunter', 'Glad Subdivision Talungon Bais City ', '9261434650', 'HALU', 'HL', 'M', 8, 'MAZU2462019', 'pending'),
(00004, 'John Doe', '12-HUMMS', '9562315312', 'TRIBU LCCIAN SINULOG', 'TRSNG', 'M', 7, 'MAZU2462019', 'ready for pick-up/delivery'),
(00005, 'John Doe', '12-ICT', '954325435', 'TRIBU LCCIAN SINULOG', 'TRSNG', 'L', 7, 'MAZU2462019', 'pending'),
(00007, 'John Doe', '12-ICT', '954325435', 'TRIBU LCCIAN SINULOG', 'TRSNG', 'L', 7, 'MAZU2462019', 'pending'),
(00008, 'John Doe', '12-ICT', '954325435', 'TRIBU LCCIAN SINULOG', 'TRSNG', 'L', 7, 'MAZU2462019', 'pending'),
(00013, 'Romel D. Zerna Jr.', '1-BSIT', '9261434650', 'HALU', 'HL', 'L', 1, 'MAZU2862019', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `featuredevent`
--
ALTER TABLE `featuredevent`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news01`
--
ALTER TABLE `news01`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news01journalist`
--
ALTER TABLE `news01journalist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news02`
--
ALTER TABLE `news02`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news02journalist`
--
ALTER TABLE `news02journalist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news03`
--
ALTER TABLE `news03`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news03journalist`
--
ALTER TABLE `news03journalist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `featuredevent`
--
ALTER TABLE `featuredevent`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news01`
--
ALTER TABLE `news01`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news01journalist`
--
ALTER TABLE `news01journalist`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news02`
--
ALTER TABLE `news02`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news02journalist`
--
ALTER TABLE `news02journalist`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news03`
--
ALTER TABLE `news03`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news03journalist`
--
ALTER TABLE `news03journalist`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `ID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
