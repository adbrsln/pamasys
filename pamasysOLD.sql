-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2017 at 09:20 PM
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
(15, 26, 1, '<p>this is new</p>\r\n', '<p>ubat batuk seems relevant</p>\r\n', '2017-11-02 01:37:05', 3),
(16, 27, 4, '', '', '2017-05-10 14:07:01', 3),
(17, 26, 1, '', '', '2017-05-10 14:07:52', 3),
(18, 27, 1, '', '', '2017-05-10 14:07:08', 3),
(19, 26, 1, '', '', '2017-05-10 14:08:00', 3),
(23, 29, 1, '', '', '2017-05-19 07:48:13', 3),
(24, 27, 1, '', '', '2017-05-10 14:07:15', 3),
(27, 28, 1, '', '', '2017-05-10 15:16:27', 3),
(28, 27, 1, '', '', '2017-05-10 14:28:04', 3),
(31, 29, 1, '', '', '2017-05-10 14:06:53', 3),
(32, 30, 1, '', '', '2017-05-10 13:36:44', 3),
(33, 27, 4, '', '', '2017-05-10 14:22:19', 3),
(34, 28, 1, '<p>Batuk kering</p>\r\n', '<p>-Ubat Batuk</p>\r\n\r\n<p>- ubat panadol</p>\r\n', '2017-05-11 01:49:16', 2),
(35, 27, 4, '', '', '2017-05-10 15:17:10', 3),
(36, 26, 1, '<p>test</p>\r\n', '<p>test</p>\r\n', '2017-05-19 07:47:42', 3),
(37, 27, 1, '<p>demam</p>\r\n', '<p>panadol</p>\r\n', '2017-05-11 01:54:01', 3),
(38, 34, 1, '<p>ss</p>\r\n', '<p>ss</p>\r\n', '2017-05-19 07:59:30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patientID` int(50) NOT NULL,
  `patientName` varchar(50) NOT NULL,
  `patientIc` varchar(15) NOT NULL,
  `patientAddress` varchar(50) NOT NULL,
  `patientPhoneNumber` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patientID`, `patientName`, `patientIc`, `patientAddress`, `patientPhoneNumber`) VALUES
(26, 'Muhammad Azfar bin roslan', '940908980985', '31, jalan astaka 5/11 , 46000 Parit Raja', '01554545875'),
(27, 'Fatin Syarifah binti Kamal', '940552002221', '32, jalan markona 42/20 , 300499 Petaling Jaya , S', '01299922992'),
(28, 'Muhammad Iskandar Bin jaafar', '941221321245', 'no 41/12 hulu selangor', '01292929292'),
(29, 'Muhammad Muinnudin bin Md Radzi', '912399392665', 'No 50l, thailand', '01292923223'),
(30, 'Muhammad Faiq bin Sudin', '980556322364', 'No 11, Jalan Kasawari', '08726325656'),
(34, 'isz', '419494949494', 'uthm', '01461825285');

-- --------------------------------------------------------

--
-- Table structure for table `staffdetail`
--

CREATE TABLE `staffdetail` (
  `staffid` int(25) NOT NULL,
  `staffName` varchar(50) NOT NULL,
  `staffAddress` text NOT NULL,
  `staffNotel` varchar(14) NOT NULL,
  `staffTitle` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `staffdetail`
--

INSERT INTO `staffdetail` (`staffid`, `staffName`, `staffAddress`, `staffNotel`, `staffTitle`, `username`, `password`, `level`) VALUES
(1, 'Muhammad Farhan bin Abdullah', '31, jalan kemboja 2 , seksyen BB4, Bukit Beruntung', '0176213816', 'Dr.', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(4, 'muhammad adib bin ahmad roslans', '31, jalan kemboja 2 , seksyen BB4, Bukit Beruntung', '0176213816', 'Mr.', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 2),
(5, 'Muhammad Faizal Bin Abdullah', '31, jalan kemboja 2 , seksyen BB4, Bukit Beruntung', '0176213816', 'Dr.', 'admin', 'b5b73fae0d87d8b4e2573105f8fbe7bc', 1);

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
  MODIFY `diagnosisID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patientID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `staffdetail`
--
ALTER TABLE `staffdetail`
  MODIFY `staffid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
