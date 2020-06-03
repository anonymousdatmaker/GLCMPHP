-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.31-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for glcm_master
CREATE DATABASE IF NOT EXISTS `glcm_master` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `glcm_master`;

-- Dumping structure for table glcm_master.role
CREATE TABLE IF NOT EXISTS `role` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL DEFAULT '0',
  `CreatedAt` datetime NOT NULL,
  `CreatedBy` varchar(255) NOT NULL DEFAULT '0',
  `UpdateAt` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT '0',
  `IsActive` bit(1) NOT NULL DEFAULT b'0',
  `IsDeleted` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table glcm_master.role: ~0 rows (approximately)
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` (`Id`, `Name`, `CreatedAt`, `CreatedBy`, `UpdateAt`, `UpdateBy`, `IsActive`, `IsDeleted`) VALUES
	(1, 'admin', '2020-06-03 18:43:40', 'System', NULL, '0', b'1', b'0');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;

-- Dumping structure for table glcm_master.user
CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `IdRole` int(11) NOT NULL DEFAULT '0',
  `CreatedAt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `CreatedBy` varchar(50) NOT NULL DEFAULT '0',
  `UpdateAt` varchar(50) DEFAULT '0',
  `UpdateBy` varchar(50) DEFAULT '0',
  `IsActive` bit(1) NOT NULL,
  `IsDeleted` bit(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table glcm_master.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`Id`, `Name`, `Email`, `Username`, `Password`, `IdRole`, `CreatedAt`, `CreatedBy`, `UpdateAt`, `UpdateBy`, `IsActive`, `IsDeleted`) VALUES
	(1, 'Admin', 'admin@admin.com', 'admin', 'admin', 1, '2020-06-03 18:43:00', 'system', '0', '0', b'1', b'0');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
