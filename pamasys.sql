-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for pamasys
DROP DATABASE IF EXISTS `pamasys`;
CREATE DATABASE IF NOT EXISTS `pamasys` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pamasys`;

-- Dumping structure for table pamasys.diagnosis
DROP TABLE IF EXISTS `diagnosis`;
CREATE TABLE IF NOT EXISTS `diagnosis` (
  `diagnosisID` int(50) NOT NULL AUTO_INCREMENT,
  `patientID` int(50) NOT NULL,
  `staffID` int(50) NOT NULL,
  `content` text,
  `medication` text,
  `checkin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `statusID` int(10) NOT NULL,
  PRIMARY KEY (`diagnosisID`),
  KEY `status` (`statusID`),
  KEY `patientID` (`patientID`),
  CONSTRAINT `diagnosis_ibfk_1` FOREIGN KEY (`statusID`) REFERENCES `status` (`statusID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `diagnosis_ibfk_2` FOREIGN KEY (`patientID`) REFERENCES `patient` (`patientID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

-- Dumping data for table pamasys.diagnosis: ~5 rows (approximately)
DELETE FROM `diagnosis`;
/*!40000 ALTER TABLE `diagnosis` DISABLE KEYS */;
INSERT INTO `diagnosis` (`diagnosisID`, `patientID`, `staffID`, `content`, `medication`, `checkin`, `statusID`) VALUES
	(27, 28, 1, '', '', '2017-05-10 23:16:27', 3),
	(32, 30, 1, '', '', '2017-05-10 21:36:44', 3),
	(34, 28, 1, '<p>Batuk kering</p>\r\n', '<p>-Ubat Batuk</p>\r\n\r\n<p>- ubat panadol</p>\r\n', '2017-05-11 09:49:16', 2),
	(35, 30, 4, NULL, NULL, '2017-11-06 21:11:08', 1),
	(36, 26, 4, NULL, NULL, '2017-11-06 21:11:11', 1),
	(37, 26, 4, NULL, NULL, '2017-11-06 21:11:16', 1);
/*!40000 ALTER TABLE `diagnosis` ENABLE KEYS */;

-- Dumping structure for table pamasys.patient
DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `patientID` int(50) NOT NULL AUTO_INCREMENT,
  `patientName` varchar(50) NOT NULL,
  `patientIc` varchar(15) NOT NULL,
  `patientAddress` varchar(50) NOT NULL,
  `patientPhoneNumber` varchar(13) NOT NULL,
  PRIMARY KEY (`patientID`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- Dumping data for table pamasys.patient: ~3 rows (approximately)
DELETE FROM `patient`;
/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
INSERT INTO `patient` (`patientID`, `patientName`, `patientIc`, `patientAddress`, `patientPhoneNumber`) VALUES
	(26, 'Muhammad Azfar bin roslana', '940908980985', '31, jalan astaka 5/11 , 46000 Parit Raja', '01554545875'),
	(28, 'Muhammad Iskandar Bin jaafar', '941221321245', 'no 41/12 hulu selangor', '01292929292'),
	(30, 'Muhammad Faiq bin Sudin', '980556322364', 'No 11, Jalan Kasawari', '08726325656');
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;

-- Dumping structure for table pamasys.queue
DROP TABLE IF EXISTS `queue`;
CREATE TABLE IF NOT EXISTS `queue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idroom` int(11) DEFAULT NULL,
  `idpatient` int(11) DEFAULT NULL,
  `timecheckin` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pamasys.queue: ~0 rows (approximately)
DELETE FROM `queue`;
/*!40000 ALTER TABLE `queue` DISABLE KEYS */;
/*!40000 ALTER TABLE `queue` ENABLE KEYS */;

-- Dumping structure for table pamasys.room
DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pamasys.room: ~0 rows (approximately)
DELETE FROM `room`;
/*!40000 ALTER TABLE `room` DISABLE KEYS */;
/*!40000 ALTER TABLE `room` ENABLE KEYS */;

-- Dumping structure for table pamasys.staffdetail
DROP TABLE IF EXISTS `staffdetail`;
CREATE TABLE IF NOT EXISTS `staffdetail` (
  `staffid` int(25) NOT NULL AUTO_INCREMENT,
  `staffName` varchar(50) NOT NULL,
  `staffAddress` text NOT NULL,
  `staffNotel` varchar(14) NOT NULL,
  `staffTitle` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL,
  PRIMARY KEY (`staffid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table pamasys.staffdetail: ~3 rows (approximately)
DELETE FROM `staffdetail`;
/*!40000 ALTER TABLE `staffdetail` DISABLE KEYS */;
INSERT INTO `staffdetail` (`staffid`, `staffName`, `staffAddress`, `staffNotel`, `staffTitle`, `username`, `password`, `level`) VALUES
	(1, 'Muhammad Farhan bin Abdullah', '31, jalan kemboja 2 , seksyen BB4, Bukit Beruntung', '0176213816', 'Dr.', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
	(4, 'muhammad adib bin ahmad roslans', '31, jalan kemboja 2 , seksyen BB4, Bukit Beruntung', '0176213816', 'Mr.', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 2),
	(5, 'Muhammad Faizal Bin Abdullah', '31, jalan kemboja 2 , seksyen BB4, Bukit Beruntung', '0176213816', 'Dr.', 'admin', 'b5b73fae0d87d8b4e2573105f8fbe7bc', 1);
/*!40000 ALTER TABLE `staffdetail` ENABLE KEYS */;

-- Dumping structure for table pamasys.status
DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `statusID` int(11) NOT NULL AUTO_INCREMENT,
  `statusName` varchar(25) NOT NULL,
  PRIMARY KEY (`statusID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table pamasys.status: ~4 rows (approximately)
DELETE FROM `status`;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` (`statusID`, `statusName`) VALUES
	(1, 'Waiting Diagnosis'),
	(2, 'Collect Medication'),
	(3, 'Complete'),
	(4, 'Cancel');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
