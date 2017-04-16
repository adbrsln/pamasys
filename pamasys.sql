-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2016 at 04:34 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

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
(2, 1, 'Arman Vatula', 'Dr.', '46, Jalan Faguli , 4852223, Rawang', '01239499274'),
(3, 2, 'Joseph Vlad', 'Mr.', '31/22 jalan parit karjo', '0178273344');

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
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`diagid`, `pid`, `sid`, `content`, `med`, `checkin`, `status`) VALUES
(1, 1, 2, 'As stated patient got a flue and cough', 'Benezol Popane 500 ML', '2016-11-24 06:26:27', ''),
(2, 2, 1, 'Cough and Severely wounded', 'Panadol 3 tablets', '2016-11-24 06:27:14', ''),
(3, 3, 1, 'Cough and Broken legs', 'aminole 30 ML', '2016-11-24 06:27:39', ''),
(4, 2, 1, 'Pain in cheek', 'painkiller 4 tablets', '2016-11-24 06:28:01', '');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `num` int(50) NOT NULL,
  `itemName` varchar(150) NOT NULL,
  `itemPrice` int(51) NOT NULL,
  `itemDesc` text NOT NULL,
  `imglink` varchar(100) NOT NULL,
  `categ` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`num`, `itemName`, `itemPrice`, `itemDesc`, `imglink`, `categ`) VALUES
(44, 'WF001', 100, 'Black and yellow', '1.jpg', 'Wall Fan'),
(33, 'WF002', 59, 'WHITE/BLACK', '2.png', 'Wall Fan'),
(34, 'WF003', 92, 'SILVER/BROWN/BLACK', '3.png', 'Wall Fan'),
(35, 'WF004', 66, 'BLACK/BLUE/YELLOW', '4.jpg', 'Wall Fan'),
(36, 'WF005', 45, 'RED/YELLOW/GREEN', '5.png', 'Wall Fan'),
(37, 'WF006', 150, 'BROWN/SILVER', '6.png', 'Wall Fan'),
(38, 'WF007', 45, 'BLUE/WHITE/RED', '7.png', 'Wall Fan'),
(39, 'WF008', 200, 'BROWN/BLACK', '8.jpg', 'Wall Fan'),
(40, 'WF009', 76, 'BLACK/BROWN', '9.jpg', 'Wall Fan'),
(41, 'WF010', 98, 'WHITE', '10.png', 'Wall Fan'),
(42, 'WF011', 77, 'WHITE', '11.png', 'Wall Fan'),
(43, 'WF012', 160, 'BROWN/BLACK', '12.png', 'Wall Fan'),
(46, 'TF001', 60, 'APPLE/PEAR/PINEAPPLE/ORANGE/WATERMELON', 'TF001.jpg', 'Table Fan'),
(47, 'TF002', 45, 'BLACK/WHITE/BLUE', 'TF002.jpg', 'Table Fan'),
(48, 'TF003', 40, 'RED/BLUE/GREEN (BLADE ONLY)', 'TF003.jpg', 'Table Fan'),
(49, 'TF004', 30, 'BLACK/BLUE/GREEN/PINK/YELLOW', 'TF004.jpg', 'Table Fan'),
(50, 'TF005', 73, 'BLACK/WHITE/RED', 'TF005.jpg', 'Table Fan'),
(51, 'TF006', 57, 'MINION/SPONGEBOB/MONSTER INC./MICKEY MOUSE', 'TF006.jpg', 'Table Fan'),
(52, 'TF007', 350, 'BRONZE/GOLD/SILVER/BRUSHED ALUMINIUM', 'TF007.jpg', 'Table Fan'),
(53, 'TF008', 120, 'BLUE/RED/GREEN/YELLOW/TURQOISE/MAGENTA/CYAN', 'TF008.jpg', 'Table Fan'),
(54, 'TF009', 63, 'BLACK/WHITE/RED/YELLOW/PURPLE/GREEN', 'TF009.jpg', 'Table Fan'),
(55, 'TF010', 43, 'PINK/GREEN/YELLOW/TURQOISE', 'TF010.jpg', 'Table Fan'),
(56, 'CF001', 150, 'BLACK/BROWN', 'CF001.jpg', 'Ceiling Fan'),
(57, 'CF002', 130, 'WHITE GOLD/ROSE GOLD/BLACK GOLD', 'CF002.jpg', 'Ceiling Fan'),
(58, 'CF003', 230, 'OAK/MAPLE', 'CF003.jpg', 'Ceiling Fan'),
(59, 'CF004', 260, '5 BLADE/4 BLADE', 'CF004.jpg', 'Ceiling Fan'),
(60, 'CF005', 130, 'BLACK/DARK BROWN', 'CF005.jpg', 'Ceiling Fan'),
(61, 'CF006', 100, 'WHITE/BLACK/RED', 'CF006.jpg', 'Ceiling Fan'),
(62, 'CF007', 270, 'BROWN GOLD/BLACK WHITE/RED GOLD/BLACK GOLD', 'CF007.jpg', 'Ceiling Fan'),
(63, 'CF008', 310, 'MAPLE WOOD', 'CF008.jpg', 'Ceiling Fan'),
(64, 'CF009', 270, 'BAMBOO/OAK/MAPLE', 'CF009.jpg', 'Ceiling Fan'),
(65, 'CF010', 670, 'BAMBOO/OAK/MAPLE', 'CF010.jpg', 'Ceiling Fan'),
(66, 'SF01', 67, 'BROWN/BLACK', 'SF01.jpg', 'Stand Fan'),
(67, 'SF02', 89, 'BLACK/SILVER', 'SF02.jpg', 'Stand Fan'),
(68, 'SF03', 67, 'BLACK', 'SF03.jpg', 'Stand Fan'),
(77, 'SF04', 129, 'BROWN/BLACK/SILVER', 'SF00.jpg', 'Stand Fan'),
(70, 'SF05', 90, 'BLUE/WHITE', 'SF05.jpg', 'Stand Fan'),
(71, 'SF06', 99, 'WHITE/BLUE', 'SF06.jpg', 'Stand Fan'),
(72, 'SF08', 99, 'WHITE/RED', 'SF08.jpg', 'Stand Fan'),
(73, 'SF07', 120, 'BLACK', 'SF07.jpg', 'Stand Fan'),
(75, 'SF09', 116, 'RED', 'SF09.jpg', 'Stand Fan'),
(83, 'SF12', 120, 'RED/WHITE', '8.jpg', 'Stand Fan'),
(81, 'SF10', 100, 'WHITE/PINK', '6.jpg', 'Stand Fan'),
(82, 'SF11', 111, 'BLACK', '7.jpg', 'Stand Fan'),
(84, 'SF13', 50, 'PURPLE', '2.jpg', 'Stand Fan'),
(85, 'SF14', 60, 'WHITE', '5.jpg', 'Stand Fan'),
(86, 'SF15', 123, 'BLACK', '9.jpg', 'Stand Fan'),
(87, 'SF16', 160, 'GOLDEN WOOD', '4.jpg', 'Stand Fan'),
(88, 'SF17', 66, 'PURPLE', '1.jpg', 'Stand Fan'),
(89, 'SF18', 74, 'RED', '3.jpg', 'Stand Fan');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `num` int(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(150) NOT NULL,
  `level` int(1) NOT NULL,
  `staffid` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`num`, `username`, `password`, `level`, `staffid`) VALUES
(4, 'user', '6ad14ba9986e3615423dfca256d04e3f', 2, 1),
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 0),
(21, 'cust', '3aad3506aa11f05f265ea8304b8152b3', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patientID` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ic` varchar(15) NOT NULL,
  `bcert` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phonenumber` varchar(13) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `race` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patientID`, `name`, `ic`, `bcert`, `address`, `phonenumber`, `gender`, `race`) VALUES
(1, 'Aminah Afara', '942329492234', 'B234512', '31, Jalan Parit Jelutong', '0138827732', 'Men', 'Malay'),
(2, 'Afarahaso', '2992384', 'B35123', '41, jalan amin 34/2 , Batu pahat', '0172652534', 'Men', 'Malay'),
(3, 'Farhan Roslan', '942203221451', 'B2123551', '31, Jalan Megah 241/2', '0127752123', 'C2341245', 'Malay');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `num` int(50) NOT NULL,
  `pid` int(50) NOT NULL,
  `diagID` int(50) NOT NULL,
  `checkin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`num`, `pid`, `diagID`, `checkin`, `status`) VALUES
(1, 2, 2, '2016-11-24 06:28:55', 'Complete'),
(2, 1, 1, '2016-11-24 06:28:51', 'Waiting'),
(3, 2, 4, '2016-11-24 06:29:08', '');

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
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`num`);

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
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `num` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `diagid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `num` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `num` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patientID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `num` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
