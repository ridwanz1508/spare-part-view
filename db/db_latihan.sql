-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_latihan
DROP DATABASE IF EXISTS `db_latihan`;
CREATE DATABASE IF NOT EXISTS `db_latihan` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `db_latihan`;

-- Dumping structure for table db_latihan.tb_comp_vision
DROP TABLE IF EXISTS `tb_comp_vision`;
CREATE TABLE IF NOT EXISTS `tb_comp_vision` (
  `code_pattern` varchar(50) DEFAULT NULL,
  `qrcode` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_latihan.tb_comp_vision: ~29 rows (approximately)
DELETE FROM `tb_comp_vision`;
INSERT INTO `tb_comp_vision` (`code_pattern`, `qrcode`) VALUES
	('dyayaweearrestsqReeSBSSESapCBMPEmgCBOSCaap', NULL),
	('apa7rirgwo7me', NULL),
	('eKeomeSprbalCatienantbee1915REDMaSSee1201Hon309C80', NULL),
	('eeniessSprandSosoeacdWokLaiBeodosqrewisREDDwetcaas', NULL),
	('AiseeeSprbolCommentHbiHO1t00Ci08REDLAMPHOTNLOT06RE', NULL),
	('MrSerteSeeeeaSSu5GeaceruncomPereTsRMenyeSYRearSwea', NULL),
	('sSa77', NULL),
	('ne', NULL),
	('5g', NULL),
	('eonJSSrya', NULL),
	('iSsA', NULL),
	('e1jwl', NULL),
	('a', NULL),
	('iaSet', NULL),
	('PreS', NULL),
	('3Sap2ee77eeAaaaeeFySHEjca', NULL),
	('ayEesodartoe7j', NULL),
	('cotee', NULL),
	('5maoeeSbesuetWaBesiae', NULL),
	('ZaLaoo', NULL),
	('Pl', NULL),
	('fiueyoybaTrLnEn', NULL),
	('7ws', NULL),
	('2Legxtera', NULL),
	('5aEs', NULL),
	('GS', NULL),
	('ed7oepeSaeatlfeeSAeabeemilesa4aSotaeckotSiryieeepr', NULL),
	('2iCageeaeeat7weweeaPeeaoetaa5aginDaeaSeebtbeoad', NULL),
	('d', NULL),
	('Frjwprvayy', NULL);

-- Dumping structure for table db_latihan.tb_d_plant
DROP TABLE IF EXISTS `tb_d_plant`;
CREATE TABLE IF NOT EXISTS `tb_d_plant` (
  `id` int(11) NOT NULL,
  `product` varchar(50) DEFAULT NULL,
  `status_line` int(11) DEFAULT NULL,
  `status_pull` int(11) DEFAULT NULL,
  `status_delv` int(11) DEFAULT NULL,
  `information` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_latihan.tb_d_plant: ~3 rows (approximately)
DELETE FROM `tb_d_plant`;
INSERT INTO `tb_d_plant` (`id`, `product`, `status_line`, `status_pull`, `status_delv`, `information`) VALUES
	(0, 'SPARK PLUG', 41, 41, 1, 'Running'),
	(1, 'PLUG', 1, 1, 1, 'EXPENSIVE'),
	(2, 'CONVEYER', 1, 0, 0, 'GOOD'),
	(3, 'NAIL', 0, 1, 1, 'NOT BAD');

-- Dumping structure for table db_latihan.tb_login
DROP TABLE IF EXISTS `tb_login`;
CREATE TABLE IF NOT EXISTS `tb_login` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `num_role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table db_latihan.tb_login: ~3 rows (approximately)
DELETE FROM `tb_login`;
INSERT INTO `tb_login` (`username`, `password`, `num_role`) VALUES
	('admin', 'admin', 1),
	('leader', 'leader', 1),
	('operator', 'operator', 2);

-- Dumping structure for table db_latihan.t_users_code
DROP TABLE IF EXISTS `t_users_code`;
CREATE TABLE IF NOT EXISTS `t_users_code` (
  `fid` int(5) NOT NULL AUTO_INCREMENT,
  `fusername` varchar(30) NOT NULL,
  `fisadmin` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `username` (`fusername`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_latihan.t_users_code: 29 rows
DELETE FROM `t_users_code`;
/*!40000 ALTER TABLE `t_users_code` DISABLE KEYS */;
INSERT INTO `t_users_code` (`fid`, `fusername`, `fisadmin`) VALUES
	(1, 'admin', 1),
	(2, 'inspektor1', 3),
	(3, 'line6', 2),
	(4, 'unlot', 4),
	(9, 'line1', 2),
	(10, 'line2', 2),
	(11, 'line3', 2),
	(12, 'line4', 2),
	(14, 'line5', 2),
	(15, 'line7', 2),
	(16, 'line8', 2),
	(17, 'line9', 2),
	(18, 'line10', 2),
	(19, 'line11', 2),
	(20, 'line12', 2),
	(21, 'inspektor2', 3),
	(22, 'inspektor3', 3),
	(23, 'inspektor4', 3),
	(24, 'inspektor5', 3),
	(25, 'inspektor6', 3),
	(26, 'inspektor7', 3),
	(27, 'inspektor8', 3),
	(28, 'inspektor9', 3),
	(29, 'inspektor10', 3),
	(30, 'inspektor11', 3),
	(31, 'inspektor12', 3),
	(32, 'inspektor_stagging', 3),
	(33, 'line_stagging', 2),
	(34, 'line_trial', 0);
/*!40000 ALTER TABLE `t_users_code` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
