-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for covid_declaration
CREATE DATABASE IF NOT EXISTS `covid_declaration` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `covid_declaration`;

-- Dumping structure for table covid_declaration.declarations
CREATE TABLE IF NOT EXISTS `declarations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `age` int NOT NULL DEFAULT '0',
  `mobile_num` int NOT NULL,
  `body_temp` decimal(5,2) NOT NULL,
  `covid_diagnosed` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `covid_encounter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `vaccinated` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nationality` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table covid_declaration.declarations: ~0 rows (approximately)
INSERT INTO `declarations` (`id`, `full_name`, `gender`, `age`, `mobile_num`, `body_temp`, `covid_diagnosed`, `covid_encounter`, `vaccinated`, `nationality`) VALUES
	(1, 'lorenz', 'male', 12, 1231231, 21.00, 'no', 'yes', 'yes', 'filipino'),
	(2, 'lorenz', 'male', 33, 912332935, 44.00, 'yes', 'yes', 'yes', 'filipino'),
	(3, 'lorna', 'female', 18, 335959393, 44.00, 'yes', 'no', 'yes', 'foreigner'),
	(4, 'lorna', 'female', 18, 335959393, 44.00, 'yes', 'no', 'yes', 'foreigner'),
	(5, 'lorna', 'female', 18, 335959139, 12.00, 'yes', 'no', 'yes', 'foreigner'),
	(6, 'lorna', 'other', 44, 12312354, 22.00, 'no', 'no', 'no', 'foreigner'),
	(7, 'lornafgdf', 'other', 44, 12312354, 22.00, 'no', 'no', 'no', 'foreigner'),
	(8, 'agsfgfdg', 'female', 34, 13546345, 22.00, 'yes', 'no', 'yes', 'foreigner'),
	(9, 'agsfgfdg', 'female', 34, 13546345, 22.00, 'yes', 'no', 'yes', 'foreigner'),
	(10, 'fgefgfgj', 'female', 45, 23423442, 44.00, 'yes', 'yes', 'yes', 'filipino'),
	(11, 'asdasdasd', 'female', 23, 1231244, 22.00, 'no', 'yes', 'yes', 'foreigner'),
	(12, 'asdasdasd', 'female', 23, 1231244, 22.00, 'no', 'yes', 'yes', 'foreigner'),
	(13, 'asdasdasd', 'female', 23, 1231244, 22.00, 'no', 'yes', 'yes', 'foreigner'),
	(14, 'asdasdasd', 'female', 23, 1231244, 22.00, 'no', 'yes', 'yes', 'foreigner'),
	(15, 'asdasdasd', 'female', 23, 1231244, 22.00, 'no', 'yes', 'yes', 'foreigner'),
	(16, 'asdasdasd', 'female', 23, 1231244, 22.00, 'no', 'yes', 'yes', 'foreigner'),
	(17, 'asdasdasd', 'female', 23, 1231244, 22.00, 'no', 'yes', 'yes', 'foreigner'),
	(18, 'asdasdasd', 'female', 23, 1231244, 22.00, 'no', 'yes', 'yes', 'foreigner');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
