-- --------------------------------------------------------
-- Host:                         148.251.75.181
-- Server version:               5.5.64-MariaDB - MariaDB Server
-- Server OS:                    Linux
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for covid
CREATE DATABASE IF NOT EXISTS `covid` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `covid`;

-- Dumping structure for table covid.ip_block
CREATE TABLE IF NOT EXISTS `ip_block` (
  `ip` varchar(50) DEFAULT NULL,
  `blocked` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table covid.logs
CREATE TABLE IF NOT EXISTS `logs` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(50) NOT NULL DEFAULT '0',
  `info` varchar(50) NOT NULL DEFAULT '0',
  `useragent` varchar(50) NOT NULL DEFAULT '0',
  `date` date DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_log`),
  KEY `id_log` (`id_log`)
) ENGINE=InnoDB AUTO_INCREMENT=3141 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table covid.persoane
CREATE TABLE IF NOT EXISTS `persoane` (
  `id_persoana` int(11) NOT NULL AUTO_INCREMENT,
  `numar_infectie` int(11) DEFAULT '0',
  `judet` varchar(50) DEFAULT '0',
  `varsta` int(11) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `was_izolare` varchar(50) DEFAULT 'Nu',
  `was_carantina` varchar(50) DEFAULT 'Nu',
  `from_country` varchar(50) DEFAULT 'Nu',
  `asimptomatic` varchar(50) DEFAULT NULL,
  `virus_from_persoana` int(11) DEFAULT NULL,
  `grav` int(11) NOT NULL DEFAULT '0',
  `decedat` int(11) NOT NULL DEFAULT '0',
  `vindecat` int(11) NOT NULL DEFAULT '0',
  `alta_boala` varchar(50) DEFAULT NULL,
  `data_infectiei` date DEFAULT NULL,
  PRIMARY KEY (`id_persoana`),
  KEY `id_persoana` (`id_persoana`)
) ENGINE=InnoDB AUTO_INCREMENT=577 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
