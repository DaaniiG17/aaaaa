-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-05-2024 a las 08:50:09
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
-- Estructura de tabla para la tabla `betis`
--

DROP TABLE IF EXISTS `betis`;
CREATE TABLE IF NOT EXISTS `betis` (
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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `betis`
--

INSERT INTO `betis` (`id`, `nombre`, `posicion`, `imagen`, `partidosJugados`, `goles`, `asistencias`, `amarillas`, `rojas`, `temporadas`) VALUES
(1, 'Claudio Bravo', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/185/png/144x144/33148.png', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Rui Silva', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/185/png/144x144/124097.png', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Héctor Bellerin', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/185/png/144x144/98745.png', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Juan Miranda', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/185/png/144x144/433530.png', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Germán Pezzella', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/185/png/144x144/121220.png', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Marc Bartra', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/185/png/144x144/81138.png', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Sokratis Papastathopoulos', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/185/png/144x144/39476.png', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Youssouf Sabaly', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/185/png/144x144/164474.png', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Aitor Ruibal', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/185/png/144x144/441303.png', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Chadi Riad', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/185/png/144x144/515621.png', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Johnny Cardoso', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/185/png/144x144/488662.png', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Guido Rodríguez', 'Mediocentro Defensivo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/185/png/144x144/197024.png', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'William Carvalho', 'Mediocentro Defensivo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/185/png/144x144/96122.png', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Rodri Sánchez', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/185/png/144x144/491430.png', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Marc Roca', 'Mediocentro Defensivo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/185/png/144x144/234370.png', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Isco Alarcon', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/185/png/144x144/80209.png', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Nabil Fekir', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/185/png/144x144/166552.png', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Ayoze Pérez', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/185/png/144x144/168580.png', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'William José', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/185/png/144x144/73314.png', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Assane Diao', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/185/png/144x144/624877.png', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
