-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-05-2024 a las 08:50:34
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
-- Estructura de tabla para la tabla `girona`
--

DROP TABLE IF EXISTS `girona`;
CREATE TABLE IF NOT EXISTS `girona` (
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
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `girona`
--

INSERT INTO `girona` (`id`, `nombre`, `posicion`, `imagen`, `partidosJugados`, `goles`, `asistencias`, `amarillas`, `rojas`, `temporadas`) VALUES
(1, 'Paulo Gazzaniga', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/2893/png/144x144/102884.png', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Juan Carlos Martin', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/2893/png/144x144/88279.png', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Miguel Gutiérrez', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/2893/png/144x144/248498.png', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Arnau Martínez', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/2893/png/144x144/517333.png', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'David López', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/2893/png/144x144/11129.png', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Valery Fernández', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/2893/png/144x144/469274.png', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Juan pedro Ramírez', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/2893/png/144x144/63119.png', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Daley Blind', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/2893/png/144x144/58877.png', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Yan Couto', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/2893/png/144x144/468236.png', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Aleix García', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/2893/png/144x144/178871.png', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Pablo Torre', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/2893/png/144x144/522627.png', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Toni Villa', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/2893/png/144x144/242290.png', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Yangel Herrera', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/2893/png/144x144/226541.png', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'John Solís', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/2893/png/144x144/533515.png', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Iván Martín', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/2893/png/144x144/224467.png', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Cristhian Stuani', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/2893/png/144x144/49464.png', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Viktor Tsygankov', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/2893/png/144x144/194282.png', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Artem Dobryk', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/2893/png/144x144/213294.png', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Savio Moreira de Oliveira', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/2893/png/144x144/510281.png', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
