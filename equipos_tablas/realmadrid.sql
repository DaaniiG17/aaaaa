-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-05-2024 a las 08:51:04
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
-- Estructura de tabla para la tabla `realmadrid`
--

DROP TABLE IF EXISTS `realmadrid`;
CREATE TABLE IF NOT EXISTS `realmadrid` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `posicion` varchar(200) DEFAULT NULL,
  `imagen` varchar(1000) DEFAULT NULL,
  `partidosJugados` int DEFAULT NULL,
  `goles` int DEFAULT NULL,
  `asistencias` int DEFAULT NULL,
  `amarillas` int DEFAULT NULL,
  `rojas` int DEFAULT NULL,
  `temporadas` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `realmadrid`
--

INSERT INTO `realmadrid` (`id`, `nombre`, `posicion`, `imagen`, `partidosJugados`, `goles`, `asistencias`, `amarillas`, `rojas`, `temporadas`) VALUES
(1, 'Thibaut Courtois', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/186/png/144x144/60772.png', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Andreiy Lunin', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/186/png/144x144/224965.png', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Kepa Arrizabalaga', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/186/png/144x144/109745.png', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Dani Carvajal', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/186/png/144x144/88483.png', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Éder Militao', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/186/png/144x144/218449.png', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'David Alaba', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/186/png/144x144/50188.png', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Nacho Fernández', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/186/png/144x144/88477.png', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Fran García', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/186/png/144x144/227166.png', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Antonio Rüdiger', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/186/png/144x144/102380.png', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Ferland Mendy', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/186/png/144x144/206255.png', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Jude Bellingham', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/186/png/144x144/244855.png', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Toni Kroos', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/186/png/144x144/44989.png', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Luka Modric', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/186/png/144x144/37055.png', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Eduardo Camavinga', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/186/png/144x144/475561.png', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Federico Valverde', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/186/png/144x144/223255.png', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Lucas Vázquez', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/186/png/144x144/107593.png', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Aurélien Tchouaméni', 'Mediocentro Defensivo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/186/png/144x144/219292.png', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Daniel Ceballos', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/186/png/144x144/182539.png', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Brahim Díaz', 'Madiapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/186/png/144x144/216183.png', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Vinicius Junior', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/186/png/144x144/246333.png', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Rodrygo Goes', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/186/png/144x144/440077.png', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Joselu Mato', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/186/png/144x144/61316.png', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
