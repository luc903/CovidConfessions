-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.13 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             10.3.0.5771
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table covidconfessions.confessions: ~0 rows (approximately)
/*!40000 ALTER TABLE `confessions` DISABLE KEYS */;
INSERT INTO `confessions` (`id`, `text`) VALUES
	(1, 'Hello'),
	(2, 'yo'),
	(3, 'yo'),
	(4, 'yo'),
	(5, 'yo'),
	(6, 'yo'),
	(7, 'dominoes'),
	(8, 'ghj');
/*!40000 ALTER TABLE `confessions` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
