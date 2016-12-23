-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2016 at 08:57 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pamasys`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `num` int(50) NOT NULL,
  `staffid` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `notel` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`num`, `staffid`, `name`, `Title`, `address`, `notel`) VALUES
(2, 4, 'Arman Vatulax', 'Mr.', '46, Jalan Faguli , 4852223, Rawang', '01239499274'),
(3, 5, 'Joseph Vlad', 'Mr.', '31/22 jalan parit karjo', '0178273344'),
(14, 61, 'admin2', 'Dr.', 'admin', '123124');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE `diagnosis` (
  `diagid` int(50) NOT NULL,
  `pid` int(50) NOT NULL,
  `sid` int(50) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `med` varchar(3000) NOT NULL,
  `checkin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`diagid`, `pid`, `sid`, `content`, `med`, `checkin`, `status`) VALUES
(1, 13, 5, 'Masalah Sakit Mata', 'Ubat Mata', '2016-12-13 07:45:52', 'Complete'),
(2, 13, 4, '', '', '2016-12-13 07:53:31', 'Waiting Diagnosis'),
(3, 12, 4, '', '', '2016-12-13 07:53:36', 'Waiting Diagnosis');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `num` int(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(150) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`num`, `username`, `password`, `level`) VALUES
(4, 'user', '6ad14ba9986e3615423dfca256d04e3f', 2),
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(61, 'admin2', '098f6bcd4621d373cade4e832627b4f6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patientID` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ic` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phonenumber` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patientID`, `name`, `ic`, `address`, `phonenumber`) VALUES
(12, 'Adib roslan', '93041202331', 'No 31, Parit Jelutong, Bukit Katil , Melaka', '0172631232'),
(13, 'Fatin ', '93001234111', 'No. 40/14 Parit Haji rais , Batu Pahat , Johor', '0196866672');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`diagid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `num` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `diagid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `num` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patientID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
