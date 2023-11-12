-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
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


-- Listage de la structure de la base pour gofast
CREATE DATABASE IF NOT EXISTS `gofast` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `gofast`;

-- Listage de la structure de table gofast. url
CREATE TABLE IF NOT EXISTS `url` (
  `id` int NOT NULL AUTO_INCREMENT,
  `link` varchar(255) NOT NULL,
  `link_rewrite` varchar(255) NOT NULL,
  `click` int DEFAULT NULL,
  `utilisateur_id` int DEFAULT NULL,
  `etat` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `utilisateur_id` (`utilisateur_id`),
  CONSTRAINT `url_ibfk_1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table gofast.url : ~19 rows (environ)
DELETE FROM `url`;
INSERT INTO `url` (`id`, `link`, `link_rewrite`, `click`, `utilisateur_id`, `etat`) VALUES
	(22, 'https://meet.google.com/heh-uepe-xtt?pli=1&authuser=1', 'e3c030ebd8b8ab', 2, 1, 0),
	(27, 'https://github.com/maelbadet/goFast', 'a4bebf6faf639a', 1, 1, 1),
	(33, 'https://github.com', '9c3d157ae10bbb', 1, 3, 0),
	(34, 'https://github.com/maelbadet/goFast/tree/main/back/crud', '2c84d1c737a400', 2, 3, 0),
	(36, 'https://www.youtube.com/watch?v=pyH46f6tG2E', 'e98c8e7c451923', NULL, 1, 0),
	(38, 'https://www.youtube.com/watch?v=pyH46f6tG2E', 'ed5cf0675cc66b', NULL, 1, 1),
	(39, 'https://www.youtube.com/watch?v=pyH46f6tG2E', 'e8c2e36b4c1fe3', NULL, 1, 0),
	(40, 'https://www.youtube.com/watch?v=pyH46f6tG2E', '1f40fc468cc6d5', NULL, 1, 0),
	(41, 'https://www.youtube.com/watch?v=pyH46f6tG2E', 'f1b87a9497fd09', NULL, 1, 0),
	(42, 'https://www.youtube.com/watch?v=pyH46f6tG2E', '6507dc424911ca', NULL, 1, 0),
	(43, 'https://www.youtube.com/watch?v=pyH46f6tG2E', '1c440023fbd602', NULL, 1, 1),
	(44, 'https://www.youtube.com/watch?v=pyH46f6tG2E', '09d38223abd316', NULL, 1, 0),

-- Listage de la structure de table gofast. utilisateur
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table gofast.utilisateur : ~3 rows (environ)
DELETE FROM `utilisateur`;
INSERT INTO `utilisateur` (`id`, `email`, `mot_de_passe`) VALUES
	(1, 'test@test.fr', '$2y$10$qIs6Vap.a3ktsSHRCojA3.mixkmvAMVQT0DedZVFoctw5cPo1hHgW'),
	(2, 'mael@mael.fr', 'pashasherencore'),
	(3, 'mail@mail.fr', '$2y$10$6dSRvuM9CxG6tDYSwTKYMu1hJNLGKPtpHgCqW3FkZqLxBMqHcV7.W');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
