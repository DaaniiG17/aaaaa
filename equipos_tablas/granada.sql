-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-05-2024 a las 08:50:41
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
-- Estructura de tabla para la tabla `granada`
--

DROP TABLE IF EXISTS `granada`;
CREATE TABLE IF NOT EXISTS `granada` (
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
-- Volcado de datos para la tabla `granada`
--

INSERT INTO `granada` (`id`, `nombre`, `posicion`, `imagen`, `partidosJugados`, `goles`, `asistencias`, `amarillas`, `rojas`, `temporadas`) VALUES
(1, 'Raúl Fernández', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/5683/png/144x144/49214.png', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Augusto Batalla', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/5683/png/144x144/173209.png', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Miguel Rubio', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/5683/png/144x144/450429.png', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Jesús Vallejo', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/5683/png/144x144/178876.png', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Ricard Sánchez', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/5683/png/144x144/465495.png', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Ignasi Miquel', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/5683/png/144x144/90801.png', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Carlos Neva', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/5683/png/144x144/472148.png', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Victor Díaz', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/5683/png/144x144/55315.png', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Kamil Piatkowski', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/5683/png/144x144/487557.png', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Raúl Torrente', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/5683/png/144x144/519534.png', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Miki Bosch', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/5683/png/144x144/492907.png', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Antonio Puertas', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/5683/png/144x144/156301.png', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Sergio Ruiz', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/5683/png/144x144/244243.png', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Gerard Gumbau', 'Mediocentro Defensivo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/5683/png/144x144/161030.png', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Óscar Melendo', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/5683/png/144x144/243718.png', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Gonzalo Villar', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/5683/png/144x144/450782.png', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Lucas Boyé', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/5683/png/144x144/193774.png', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'José Callejón', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/5683/png/144x144/51732.png', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Myrto Uzuni', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/5683/png/144x144/174816.png', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
