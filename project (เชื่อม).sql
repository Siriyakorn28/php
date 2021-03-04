-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2020 at 02:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brandId` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `brandCar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gen` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brandId`, `province`, `brandCar`, `gen`) VALUES
('จก 4113', 'ราชบุรี', 'Toyota', 'วีโก้'),
('ฉฉ 664', 'กรุงเทพ', 'Toyota', 'โดเรม่อน');

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `depositId` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `brandId` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `park` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dateIn` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dateOut` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`depositId`, `brandId`, `park`, `dateIn`, `dateOut`, `price`) VALUES
('D002', 'ฉฉ 664', '20', '2020-03-02', '2020-03-03', '500');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `park` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `floor` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`park`, `floor`) VALUES
('12', 'D'),
('20', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `invoice` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `brandId` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dateIn` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dateOut` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `day` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`invoice`, `brandId`, `dateIn`, `dateOut`, `day`, `price`) VALUES
('001', 'จก 4113', '2020-03-02', '2020-03-03', '1', '300');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`depositId`),
  ADD UNIQUE KEY `brandId` (`brandId`),
  ADD UNIQUE KEY `park` (`park`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`park`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`invoice`),
  ADD UNIQUE KEY `brandId` (`brandId`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `deposit`
--
ALTER TABLE `deposit`
  ADD CONSTRAINT `deposit_ibfk_1` FOREIGN KEY (`brandId`) REFERENCES `brand` (`brandId`),
  ADD CONSTRAINT `deposit_ibfk_2` FOREIGN KEY (`park`) REFERENCES `position` (`park`);

--
-- Constraints for table `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`brandId`) REFERENCES `brand` (`brandId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
