-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 03:47 PM
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
-- Database: `hw06`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseId` varchar(4) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รูปแบบ C001',
  `courseName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(20) NOT NULL,
  `startDate` date NOT NULL COMMENT 'เก็บเป็นวันไทย 25/01/2562',
  `stopDate` date NOT NULL COMMENT 'เก็บเป็นวันไทย 25/01/2562',
  `teacherId` varchar(4) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Table teacher'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseId`, `courseName`, `price`, `startDate`, `stopDate`, `teacherId`) VALUES
('C001', 'ว่ายน้ำ', 2300, '2020-02-10', '2020-02-20', 'T002'),
('C002', 'เทนนิส', 3000, '2020-01-25', '2020-10-25', 'T001'),
('C003', 'มวยไทย', 4200, '2019-03-15', '2019-05-30', 'T002'),
('C004', 'ยูโด', 3200, '2019-03-01', '2019-06-01', 'T003');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `memId` varchar(4) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รูปแบบ M001',
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memId`, `name`, `email`, `tel`, `address`, `username`, `password`) VALUES
('M001', 'บ้าน', 'gingging286@hotmail.com', '0852655750', 'ราชบุรี', 'RR', '10170'),
('M002', 'โป่ง', 'pong@gmail.com', '0890447901', 'กรุงเทพมหานคร', 'PP', '1234'),
('M003', 'บ้านนากาแฟ', 'kanya@hotmail.com', '0879456461', 'ราชบุรี', 'M003', 'sommai1803'),
('M004', 'คนสวย', 'konsuaymak@hotmail.com', '0123456789', 'บ้านโป่ง', 'M004', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `revId` varchar(4) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รูปแบบ R001',
  `memId` varchar(4) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Table member',
  `revDate` date NOT NULL,
  `courseId` varchar(4) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Table coures',
  `tel` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`revId`, `memId`, `revDate`, `courseId`, `tel`) VALUES
('1122', 'M001', '2020-02-10', 'C001', '0852655750'),
('1133', 'M002', '2020-02-11', 'C004', '0890447901'),
('1144', 'M003', '2020-02-13', 'C003', '0819393181'),
('1155', 'M004', '2020-02-14', 'C002', '0845460492');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacherId` varchar(4) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รูปแบบ T001',
  `teacherName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `teacherSurname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacherId`, `teacherName`, `teacherSurname`, `image`) VALUES
('T001', 'มานะ', 'เก่งเหลือเกิน', 'กิ่ง.jpg'),
('T002', 'ชูใจ', 'ยอดนักสู้', 'นันทพร.jpg'),
('T003', 'มาลี', 'แสนว่องไว', 'สุรเดช.jpg'),
('T005', 'ปิติ', 'จอมพลัง', 'ยอดฝัน.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseId`),
  ADD KEY `teacherId` (`teacherId`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memId`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`revId`),
  ADD KEY `courseId` (`courseId`),
  ADD KEY `memId` (`memId`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacherId`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`teacherId`) REFERENCES `teacher` (`teacherId`);

--
-- Constraints for table `reserve`
--
ALTER TABLE `reserve`
  ADD CONSTRAINT `reserve_ibfk_1` FOREIGN KEY (`courseId`) REFERENCES `course` (`courseId`),
  ADD CONSTRAINT `reserve_ibfk_2` FOREIGN KEY (`memId`) REFERENCES `member` (`memId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
