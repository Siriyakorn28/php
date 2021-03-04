-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2020 at 02:08 PM
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
-- Database: `hw08`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `animalID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `animalName` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `sex` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `customerID` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`animalID`, `animalName`, `sex`, `image`, `customerID`) VALUES
('A001', 'แนนนี่', 'เมีย', 'IS_เป็ด.jpg', 'c001'),
('A002', 'จัมโบ้', 'ผู้', 'IS_แมว.png', 'c002'),
('A003', 'สำลี', 'เมีย', 'IS_หมา.jpg', 'c003');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `customerName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `customerName`, `tel`, `province`) VALUES
('c001', 'ดวงใจ ลาไปเรียน', '81233445', 'ราชบุรี'),
('c002', 'ลลนา หนองทราย', '123456789', 'เชียงใหม่'),
('c003', 'สมชาย แสนดี', '890447901', 'ชัยภูมิ');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicineID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `medicineName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `medicinetype` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `unit` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicineID`, `medicineName`, `medicinetype`, `unit`) VALUES
('M001', 'ยาทาแผล', 'ยาใช้ภายนอก', 'หลอด'),
('M002', 'ยาแก้อักเสบ', 'ยากิน', 'เม็ด'),
('M003', 'ยาหยอดตา', 'ยาใช้ภายนอก', 'ขวด');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `treatmentID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `customerID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `animalName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `symptom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `medicineID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`animalID`),
  ADD UNIQUE KEY `customerID` (`customerID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicineID`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`treatmentID`),
  ADD UNIQUE KEY `customerID` (`customerID`),
  ADD UNIQUE KEY `medicineID` (`medicineID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
