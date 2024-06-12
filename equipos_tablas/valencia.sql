-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-05-2024 a las 08:51:19
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
-- Estructura de tabla para la tabla `valencia`
--

DROP TABLE IF EXISTS `valencia`;
CREATE TABLE IF NOT EXISTS `valencia` (
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
-- Volcado de datos para la tabla `valencia`
--

INSERT INTO `valencia` (`id`, `nombre`, `posicion`, `imagen`, `partidosJugados`, `goles`, `asistencias`, `amarillas`, `rojas`, `temporadas`) VALUES
(1, 'Jaume Domènech', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/191/png/144x144/116732.png', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Giorgi Mamardashvili', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/191/png/144x144/449027.png', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Cristhian Mosquera', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/191/png/144x144/500040.png', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Mouctar Diakhaby', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/191/png/144x144/208135.png', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Hugo Guillamón', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/191/png/144x144/437460.png', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Thierry Correia', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/191/png/144x144/222629.png', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'José Gayà', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/191/png/144x144/132105.png', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Cenk Özkacar', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/191/png/144x144/490239.png', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Dimitri Foulquier', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/191/png/144x144/96767.png', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Jesús Vázquez', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/191/png/144x144/466044.png', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Yarek Gasiorowski', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/191/png/144x144/554683.png', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Sergi Canós', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/191/png/144x144/174932.png', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Javi Guerra', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/191/png/144x144/546540.png', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'André Almeida', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/191/png/144x144/247636.png', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Pepelu García', 'Mediocentro Defensivo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/191/png/144x144/220191.png', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Selim Amallah', 'Madiapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/191/png/144x144/213669.png', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Fran Pérez', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/191/png/144x144/466057.png', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Hugo Duro', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/191/png/144x144/439716.png', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Diego López', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/191/png/144x144/493072.png', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Roman Yaremchuk', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/191/png/144x144/184855.png', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Alberto Marí', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/191/png/144x144/488591.png', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
