-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-05-2024 a las 08:51:08
-- Versión del servidor: 8.2.0
-- Versión de PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `realsociedad`
--

DROP TABLE IF EXISTS `realsociedad`;
CREATE TABLE IF NOT EXISTS `realsociedad` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `posicion` varchar(200) DEFAULT NULL,
  `imagen` varchar(1000) DEFAULT NULL,
  `partidosJugados` int DEFAULT NULL,
  `goles` int DEFAULT NULL,
  `asistencias` int DEFAULT NULL,
  `amarillas` int DEFAULT NULL,
  `rojas` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `realsociedad`
--

INSERT INTO `realsociedad` (`id`, `nombre`, `posicion`, `imagen`, `partidosJugados`, `goles`, `asistencias`, `amarillas`, `rojas`) VALUES
(1, 'Álex Remiro', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/188/png/144x144/197316.png', NULL, NULL, NULL, NULL, NULL),
(2, 'Unai Marrero', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/188/png/144x144/523062.png', NULL, NULL, NULL, NULL, NULL),
(3, 'Aihen Muñoz', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/188/png/144x144/472145.png', NULL, NULL, NULL, NULL, NULL),
(4, 'Aritz Elustondo', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/188/png/144x144/200957.png', NULL, NULL, NULL, NULL, NULL),
(5, 'Kieran Tierney', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/188/png/144x144/192895.png', NULL, NULL, NULL, NULL, NULL),
(6, 'Hamari Traoré', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/188/png/144x144/174528.png', NULL, NULL, NULL, NULL, NULL),
(7, 'Jon Pacheco', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/188/png/144x144/449931.png', NULL, NULL, NULL, NULL, NULL),
(8, 'Robin Le Normand', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/188/png/144x144/224919.png', NULL, NULL, NULL, NULL, NULL),
(9, 'Martín Zubimendi', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/188/png/144x144/481655.png', NULL, NULL, NULL, NULL, NULL),
(10, 'Igor Zubeldia', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/188/png/144x144/216475.png', NULL, NULL, NULL, NULL, NULL),
(11, 'Mikel Merino', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/188/png/144x144/195384.png', NULL, NULL, NULL, NULL, NULL),
(12, 'Arsen Zakharyan', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/188/png/144x144/475612.png', NULL, NULL, NULL, NULL, NULL),
(13, 'Takefusa Kubo', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/188/png/144x144/219271.png', NULL, NULL, NULL, NULL, NULL),
(14, 'Jon Olasagasti', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/188/png/144x144/513945.png', NULL, NULL, NULL, NULL, NULL),
(15, 'Beñat Turrientes', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/188/png/144x144/488026.png', NULL, NULL, NULL, NULL, NULL),
(16, 'Brais Méndez', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/188/png/144x144/178880.png', NULL, NULL, NULL, NULL, NULL),
(17, 'Ander Barrenetxea', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/188/png/144x144/471138.png', NULL, NULL, NULL, NULL, NULL),
(18, 'Carlos Fernández', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/188/png/144x144/176189.png', NULL, NULL, NULL, NULL, NULL),
(19, 'Mikel Oyarzabal', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/188/png/144x144/219000.png', NULL, NULL, NULL, NULL, NULL),
(20, 'Umar Sadiq', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/188/png/144x144/196878.png', NULL, NULL, NULL, NULL, NULL),
(21, 'Andre Silva', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/188/png/144x144/165811.png', NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
