-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2017 at 04:03 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `homemanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminId` varchar(50) NOT NULL,
  `adminPosition` text NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phoneNumber` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nationalId` int(50) NOT NULL,
  `securityQuestion` varchar(50) NOT NULL,
  `securityAnswer` varchar(50) NOT NULL,
  `bikashNumber` int(50) NOT NULL,
  `adminSince` date NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE IF NOT EXISTS `building` (
  `buildingId` varchar(50) NOT NULL,
  `buildingName` varchar(50) NOT NULL,
  `buildingOwnerId` varchar(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `totalFlats` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`buildingId`, `buildingName`, `buildingOwnerId`, `address`, `totalFlats`) VALUES
('419HO-Evan-01-Golden', 'Golden', '19HO-Evan-01', 'Mohakhali,Dhaka', 4),
('419HO-Evan-01-GoldNew', 'GoldNew', '19HO-Evan-01', 'Mohakhali,Dhaka', 4),
('419HO-Evan-01-Platinum', 'Platinum', '19HO-Evan-01', 'Gulshan 2,Dhaka', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ftatinformation`
--

CREATE TABLE IF NOT EXISTS `ftatinformation` (
  `uniqueFlat` varchar(200) NOT NULL,
  `flatId` varchar(100) NOT NULL,
  `buildingId` varchar(100) NOT NULL,
  `buildingName` varchar(50) NOT NULL,
  `tenantId` varchar(50) NOT NULL,
  `rentCost` int(100) NOT NULL,
  `otherInfo` varchar(200) NOT NULL,
  `buildingOwnerId` varchar(100) NOT NULL,
  `leaveDate` date NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ftatinformation`
--

INSERT INTO `ftatinformation` (`uniqueFlat`, `flatId`, `buildingId`, `buildingName`, `tenantId`, `rentCost`, `otherInfo`, `buildingOwnerId`, `leaveDate`, `address`) VALUES
('1A419HO-Evan-01-Golden', '1A', '419HO-Evan-01-Golden', 'Golden', '', 30000, '1250 sq-ft', '19HO-Evan-01', '0000-00-00', 'Mohakhali,Dhaka'),
('1A419HO-Evan-01-GoldNew', '1A', '419HO-Evan-01-GoldNew', 'GoldNew', '', 10000, '2500s', '19HO-Evan-01', '0000-00-00', 'Mohakhali,Dhaka'),
('1A419HO-Evan-01-Platinum', '1A', '419HO-Evan-01-Platinum', 'Platinum', '', 10000, '800sqft', '19HO-Evan-01', '0000-00-00', 'Gulshan 2,Dhaka'),
('2A419HO-Evan-01-Golden', '2A', '419HO-Evan-01-Golden', 'Golden', '', 28000, '1200 sq-ft', '19HO-Evan-01', '0000-00-00', 'Mohakhali,Dhaka'),
('2B419HO-Evan-01-Golden', '2B', '419HO-Evan-01-Golden', 'Golden', '', 25000, '1350 sq-ft', '19HO-Evan-01', '0000-00-00', 'Mohakhali,Dhaka'),
('2B419HO-Evan-01-Platinum', '2B', '419HO-Evan-01-Platinum', 'Platinum', '', 20000, '1200sqft', '19HO-Evan-01', '0000-00-00', 'Gulshan 2,Dhaka'),
('2D419HO-Evan-01-GoldNew', '2D', '419HO-Evan-01-GoldNew', 'GoldNew', '', 40000, '1000', '19HO-Evan-01', '0000-00-00', 'Mohakhali,Dhaka'),
('3A419HO-Evan-01-Platinum', '3A', '419HO-Evan-01-Platinum', 'Platinum', '', 30000, '1800sqft', '19HO-Evan-01', '0000-00-00', 'Gulshan 2,Dhaka'),
('3C419HO-Evan-01-Golden', '3C', '419HO-Evan-01-Golden', 'Golden', '', 20000, '1150 sq-ft', '19HO-Evan-01', '0000-00-00', 'Mohakhali,Dhaka'),
('3D419HO-Evan-01-GoldNew', '3D', '419HO-Evan-01-GoldNew', 'GoldNew', '', 20000, '20000', '19HO-Evan-01', '0000-00-00', 'Mohakhali,Dhaka'),
('4D419HO-Evan-01-GoldNew', '4D', '419HO-Evan-01-GoldNew', 'GoldNew', '', 30000, '1000', '19HO-Evan-01', '0000-00-00', 'Mohakhali,Dhaka'),
('4D419HO-Evan-01-Platinum', '4D', '419HO-Evan-01-Platinum', 'Platinum', '', 50000, '2600sqft', '19HO-Evan-01', '0000-00-00', 'Gulshan 2,Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE IF NOT EXISTS `owner` (
  `buildingOwnerId` varchar(15) NOT NULL,
  `firstName` varchar(10) NOT NULL,
  `lastName` varchar(10) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `userPhotoAddress` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phoneNo` int(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nationalId` int(255) NOT NULL,
  `registrationDate` date NOT NULL,
  `leaveDate` date DEFAULT NULL,
  `securityQuestion` varchar(50) NOT NULL,
  `securityAnswer` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `bikashNo` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`buildingOwnerId`, `firstName`, `lastName`, `dateOfBirth`, `gender`, `userPhotoAddress`, `address`, `phoneNo`, `email`, `nationalId`, `registrationDate`, `leaveDate`, `securityQuestion`, `securityAnswer`, `password`, `bikashNo`) VALUES
('19HO-Evan-01', 'Evan', 'Sihabs', '1995-01-19', 'male', 'uploadedPhotos/20170323_084713.jpg', 'banani', 111, 'evansihab@yahoo.com', 111, '2017-04-18', '0000-00-00', 'What is your favorite game ?', 'football', '12345', 111),
('30HO-azgar-03', 'azgar', 'shuvo', '1996-03-30', 'male', 'uploadedPhotos/20170323_084535.jpg', 'banani,road2', 11, 'azgar@gmail.com', 1233, '2017-04-18', '0000-00-00', 'What is your favorite food ?', 'none', '111', 111);

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE IF NOT EXISTS `tenant` (
  `tenantId` varchar(50) NOT NULL,
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `tenantPhoto` varchar(100) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` int(14) NOT NULL,
  `nationalId` int(50) NOT NULL,
  `paymentStatus` varchar(20) DEFAULT NULL,
  `houseRent` int(20) DEFAULT NULL,
  `advancePayment` int(100) DEFAULT NULL,
  `gasBill` int(20) DEFAULT NULL,
  `waterBill` int(20) DEFAULT NULL,
  `electricityBill` int(20) DEFAULT NULL,
  `otherBill` int(20) DEFAULT NULL,
  `totalPayment` int(20) DEFAULT NULL,
  `utilitiesDate` date DEFAULT NULL,
  `rentDate` date NOT NULL,
  `leaveDate` date DEFAULT NULL,
  `securityQuestion` varchar(50) DEFAULT NULL,
  `securityAnswer` varchar(50) DEFAULT NULL,
  `password` int(20) NOT NULL,
  `buildingNo` varchar(20) NOT NULL,
  `flatNo` varchar(20) NOT NULL,
  `otherNo` varchar(200) DEFAULT NULL,
  `buildingOwnerId` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`tenantId`, `firstName`, `lastName`, `dateOfBirth`, `gender`, `tenantPhoto`, `address`, `email`, `phone`, `nationalId`, `paymentStatus`, `houseRent`, `advancePayment`, `gasBill`, `waterBill`, `electricityBill`, `otherBill`, `totalPayment`, `utilitiesDate`, `rentDate`, `leaveDate`, `securityQuestion`, `securityAnswer`, `password`, `buildingNo`, `flatNo`, `otherNo`, `buildingOwnerId`) VALUES
('28T-Shuvo-03', 'Azgar', 'Hossain', '1995-03-30', 'male', 'uploadedPhotos/20170323_084535.jpg', 'Mohakhali', 'shuvo@ygmail.com', 11111, 21314444, 'none', 15000, 50000, 1000, 500, 1000, 100, 17600, '2017-05-01', '2017-04-01', '2017-07-19', '', '', 1234, 'Golden', '5D', 'none', '19HO-Evan-01'),
('sadasdas1111', 'tonmoy', 'tanvir', '1994-03-28', 'male', NULL, 'jatrabari', 't@yahoo.com', 444, 11111111, '0', 10000, NULL, 10, 10, 10, 10, 10000, NULL, '2016-12-05', '0000-00-00', 'none', 'none', 123, 'Silver', '1B', NULL, '19HO-Evan-01');

-- --------------------------------------------------------

--
-- Table structure for table `tenantmonthlypayment`
--

CREATE TABLE IF NOT EXISTS `tenantmonthlypayment` (
  `paymentDate` date NOT NULL,
  `tenantId` varchar(100) DEFAULT NULL,
  `buildingName` varchar(100) DEFAULT NULL,
  `flatNo` varchar(100) DEFAULT NULL,
  `gasBill` int(11) DEFAULT NULL,
  `waterBill` int(11) DEFAULT NULL,
  `electricityBill` int(11) DEFAULT NULL,
  `otherBill` int(11) DEFAULT NULL,
  `houseRent` int(11) DEFAULT NULL,
  `totalPayment` int(11) DEFAULT NULL,
  `buildingOwnerId` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenantmonthlypayment`
--

INSERT INTO `tenantmonthlypayment` (`paymentDate`, `tenantId`, `buildingName`, `flatNo`, `gasBill`, `waterBill`, `electricityBill`, `otherBill`, `houseRent`, `totalPayment`, `buildingOwnerId`) VALUES
('2017-05-01', '28T-Shuvo-03', 'Golden', '5D', 1000, 500, 1000, 100, 15000, 17600, '19HO-Evan-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`buildingId`), ADD KEY `buildingOwnerId` (`buildingOwnerId`);

--
-- Indexes for table `ftatinformation`
--
ALTER TABLE `ftatinformation`
  ADD PRIMARY KEY (`uniqueFlat`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`buildingOwnerId`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`tenantId`), ADD KEY `buildingOwnerId` (`buildingOwnerId`), ADD KEY `buildingOwnerId_2` (`buildingOwnerId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
