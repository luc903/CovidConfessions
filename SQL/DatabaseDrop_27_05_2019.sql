-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.13 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for covidconfessions
CREATE DATABASE IF NOT EXISTS `covidconfessions` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `covidconfessions`;

-- Dumping structure for table covidconfessions.confessions
CREATE TABLE IF NOT EXISTS `confessions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(1000) DEFAULT NULL,
  `isSafe` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table covidconfessions.confessions: ~10 rows (approximately)
/*!40000 ALTER TABLE `confessions` DISABLE KEYS */;
INSERT INTO `confessions` (`id`, `text`, `isSafe`) VALUES
	(1, 'Hello', b'1'),
	(2, 'yo', b'1'),
	(3, 'yo', b'1'),
	(4, 'yo', b'1'),
	(5, 'yo', b'1'),
	(6, 'yo', b'1'),
	(7, 'dominoes', b'1'),
	(8, 'ghj', b'1'),
	(9, 'Luke', b'1'),
	(10, 'xoyo', b'1'),
	(11, 'testing', b'1'),
	(12, 'asd', b'1'),
	(13, 'asdasd', b'1'),
	(14, 'cunt', b'0'),
	(15, 'shit', b'0'),
	(16, 'agen', b'1'),
	(17, 'qwe', b'1'),
	(18, 'qwe cunt', b'0'),
	(19, 'poi', b'1'),
	(20, 'vfg', b'1'),
	(21, 'vfg fuck', b'0'),
	(22, 'Hello World', b'1'),
	(23, 'test', b'1');
/*!40000 ALTER TABLE `confessions` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
