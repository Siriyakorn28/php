-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2020 at 04:14 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `depositNumber` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dateIn` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `deprice` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`depositNumber`, `province`, `brand`, `dateIn`, `deprice`) VALUES
('ฉฉ 664', 'กรุงเทพฯ', 'Toyota', '22/03/2563', '400');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `positionId` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `building` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `floor` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `positionA` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `positionB` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`positionId`, `building`, `floor`, `positionA`, `positionB`) VALUES
('P001', 'ตึก A', 'P1', '01', ''),
('P002', 'ตึก B', 'P1', '', '01');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `rateId` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `choose` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `rate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`rateId`, `choose`, `rate`, `amount`, `price`) VALUES
('R001', 'รายวัน', '20', '4', '80'),
('R002', 'รายวัน', '200', '2', '400'),
('R003', 'รายชั่วโมง', '20', '2', '40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`depositNumber`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`positionId`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`rateId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
