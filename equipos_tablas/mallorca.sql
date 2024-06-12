-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-05-2024 a las 08:50:52
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
-- Estructura de tabla para la tabla `mallorca`
--

DROP TABLE IF EXISTS `mallorca`;
CREATE TABLE IF NOT EXISTS `mallorca` (
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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `mallorca`
--

INSERT INTO `mallorca` (`id`, `nombre`, `posicion`, `imagen`, `partidosJugados`, `goles`, `asistencias`, `amarillas`, `rojas`, `temporadas`) VALUES
(1, 'Predrag Rajkovic', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/181/png/144x144/104407.png', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Dominik Grief', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/181/png/144x144/212873.png', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Matija Nastasic', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/181/png/144x144/84702.png', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Toni Lato', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/181/png/144x144/221306.png', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Siebe Van der Heyden', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/181/png/144x144/230696.png', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Jose Manuel Copete', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/181/png/144x144/500759.png', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Jaume Costa', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/181/png/144x144/58792.png', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Pablo Maffeo', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/181/png/144x144/170154.png', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Giovanni González', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/181/png/144x144/195923.png', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Antonio Raíllo', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/181/png/144x144/105571.png', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Martin Valjent', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/181/png/144x144/170116.png', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Omar Mascarell', 'Mediocentro Defensivo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/181/png/144x144/107594.png', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Manu Morlanes', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/181/png/144x144/227164.png', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Sergi Darder', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/181/png/144x144/169007.png', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Samu Costa', 'Mediocentro Defensivo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/181/png/144x144/485385.png', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Dani Rodríguez', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/181/png/144x144/80906.png', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Antonio Sánchez', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/181/png/144x144/464284.png', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Vedat Muriqi', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/181/png/144x144/156293.png', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Abdón Prats', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/181/png/144x144/92187.png', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Cyle Larin', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/181/png/144x144/185126.png', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Javi Llabrés', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/181/png/144x144/536561.png', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
