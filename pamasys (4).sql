-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 03:28 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

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
-- Table structure for table `diagnosis`
--

CREATE TABLE `diagnosis` (
  `diagnosisID` int(50) NOT NULL,
  `patientID` int(50) NOT NULL,
  `staffID` int(50) NOT NULL,
  `content` text NOT NULL,
  `medication` text NOT NULL,
  `checkin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `statusID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`diagnosisID`, `patientID`, `staffID`, `content`, `medication`, `checkin`, `statusID`) VALUES
(15, 26, 1, '<p>this is new</p>\r\n', '<p>ubat batuk seems relevant</p>\r\n', '2017-05-02 01:37:05', 3),
(16, 27, 4, '', '', '2017-05-02 01:37:25', 1);

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
(26, 'Muhammad Azfar bin roslan', '94110202022', '31, jalan astaka 5/11 , 46000 Parit Raja', '0122332222'),
(27, 'Fatin Syarifah binti Kamal', '940552002221', '32, jalan markona 42/20 , 300499 Petaling Jaya , S', '01299922992');

-- --------------------------------------------------------

--
-- Table structure for table `staffdetail`
--

CREATE TABLE `staffdetail` (
  `staffid` int(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `notel` varchar(14) NOT NULL,
  `title` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `staffdetail`
--

INSERT INTO `staffdetail` (`staffid`, `name`, `address`, `notel`, `title`, `username`, `password`, `level`) VALUES
(1, 'admin', 'sadas', 'dasdadad', 'Mr.', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(4, 'muhammad adib bin ahmad roslan', '31, jalan kemboja 2 , seksyen BB4, Bukit Beruntung', '0176213816', 'Mr.', 'staff', 'b5b73fae0d87d8b4e2573105f8fbe7bc', 2);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `statusID` int(11) NOT NULL,
  `statusName` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`statusID`, `statusName`) VALUES
(1, 'Waiting Diagnosis'),
(2, 'Collect Medication'),
(3, 'Complete'),
(4, 'Cancel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`diagnosisID`),
  ADD KEY `status` (`statusID`),
  ADD KEY `patientID` (`patientID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientID`);

--
-- Indexes for table `staffdetail`
--
ALTER TABLE `staffdetail`
  ADD PRIMARY KEY (`staffid`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`statusID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `diagnosisID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patientID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `staffdetail`
--
ALTER TABLE `staffdetail`
  MODIFY `staffid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `statusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD CONSTRAINT `diagnosis_ibfk_1` FOREIGN KEY (`statusID`) REFERENCES `status` (`statusID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `diagnosis_ibfk_2` FOREIGN KEY (`patientID`) REFERENCES `patient` (`patientID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
