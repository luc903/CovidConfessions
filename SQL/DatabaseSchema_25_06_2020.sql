-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.20 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table covidconfessions.confessions
CREATE TABLE IF NOT EXISTS `confessions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `text` varchar(1000) DEFAULT NULL,
  `isSafe` bit(1) DEFAULT NULL,
  `isApproved` bit(1) NOT NULL DEFAULT b'0',
  `dateAdded` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table covidconfessions.confessions: ~55 rows (approximately)
/*!40000 ALTER TABLE `confessions` DISABLE KEYS */;
INSERT INTO `confessions` (`id`, `text`, `isSafe`, `isApproved`, `dateAdded`) VALUES
	(1, 'Hello', b'1', b'1', 'June 2020'),
	(2, 'yo', b'1', b'1', 'June 2020'),
	(3, 'yo', b'1', b'1', 'June 2020'),
	(4, 'yo', b'1', b'1', 'June 2020'),
	(5, 'yo', b'1', b'1', 'June 2020'),
	(6, 'yo', b'1', b'1', 'June 2020'),
	(7, 'dominoes', b'1', b'1', 'June 2020'),
	(8, 'ghj', b'1', b'1', 'June 2020'),
	(9, 'Luke', b'1', b'1', 'June 2020'),
	(10, 'xoyo', b'1', b'1', 'June 2020'),
	(11, 'testing', b'1', b'1', 'June 2020'),
	(12, 'asd', b'1', b'1', 'June 2020'),
	(13, 'asdasd', b'1', b'1', 'June 2020'),
	(14, 'cunt', b'0', b'1', 'June 2020'),
	(15, 'shit', b'0', b'1', 'June 2020'),
	(16, 'agen', b'1', b'1', 'June 2020'),
	(17, 'qwe', b'1', b'1', 'June 2020'),
	(18, 'qwe cunt', b'0', b'1', 'June 2020'),
	(19, 'poi', b'1', b'1', 'June 2020'),
	(20, 'vfg', b'1', b'1', 'June 2020'),
	(21, 'vfg fuck', b'0', b'1', 'June 2020'),
	(22, 'Hello World', b'1', b'1', 'June 2020'),
	(23, 'test', b'1', b'1', 'June 2020'),
	(24, 'Another test', b'1', b'1', 'June 2020'),
	(25, 'asdasdasd', b'1', b'1', 'June 2020'),
	(26, 'testing', b'1', b'1', 'June 2020'),
	(27, 'test2', b'1', b'1', 'June 2020'),
	(28, 'asdasd', b'1', b'1', 'June 2020'),
	(29, 'asd', b'1', b'1', 'June 2020'),
	(30, '', b'1', b'1', 'June 2020'),
	(31, 'testing', b'1', b'1', 'June 2020'),
	(32, 'test', b'1', b'1', 'June 2020'),
	(33, 'hey', b'1', b'1', 'June 2020'),
	(34, '', b'1', b'1', 'June 2020'),
	(35, 'testing', b'1', b'1', 'June 2020'),
	(36, 'test', b'1', b'1', 'June 2020'),
	(37, 'test', b'1', b'1', 'June 2020'),
	(38, 'testing', b'1', b'1', 'June 2020'),
	(39, 'test', b'1', b'1', 'June 2020'),
	(40, 'asd', b'1', b'1', 'June 2020'),
	(41, 'asd', b'1', b'1', 'June 2020'),
	(42, 'test', b'1', b'1', 'June 2020'),
	(43, 'testing 12', b'1', b'1', 'June 2020'),
	(44, 'testing 13', b'1', b'1', 'June 2020'),
	(45, 'asd', b'1', b'1', 'June 2020'),
	(46, 'testing 200', b'1', b'1', 'June 2020'),
	(47, 'sdf', b'1', b'1', 'June 2020'),
	(48, 'nope', b'1', b'1', 'June 2020'),
	(49, 'asd', b'1', b'1', 'June 2020'),
	(50, 'another test', b'1', b'1', 'June 2020'),
	(51, 'testing', b'1', b'1', 'June 2020'),
	(52, 'another test', b'1', b'1', 'June 2020'),
	(53, 'katie is a fish', b'1', b'1', 'June 2020'),
	(54, 'asd', b'1', b'1', 'June 2020'),
	(55, 'asd', b'1', b'1', 'June 2020'),
	(57, 'hey dude', b'1', b'1', 'June 2020'),
	(59, 'another', b'1', b'1', 'June 2020'),
	(61, 'date test', b'1', b'1', 'June 2020');
/*!40000 ALTER TABLE `confessions` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
