-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-05-2024 a las 08:50:56
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
-- Estructura de tabla para la tabla `osasuna`
--

DROP TABLE IF EXISTS `osasuna`;
CREATE TABLE IF NOT EXISTS `osasuna` (
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
-- Volcado de datos para la tabla `osasuna`
--

INSERT INTO `osasuna` (`id`, `nombre`, `posicion`, `imagen`, `partidosJugados`, `goles`, `asistencias`, `amarillas`, `rojas`, `temporadas`) VALUES
(1, 'Sergio Herrera', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/450/png/144x144/138039.png', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Aitor Fernández', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/450/png/144x144/80993.png', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Juan Cruz', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/450/png/144x144/93203.png', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Unai García', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/450/png/144x144/163711.png', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'David García', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/450/png/144x144/98851.png', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Jesús Areso', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/450/png/144x144/437549.png', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Rubén Peña', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/450/png/144x144/126290.png', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Johan Mojica', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/450/png/144x144/152723.png', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Alejandro Catena', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/450/png/144x144/244273.png', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Jorge Herrando', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/450/png/144x144/463784.png', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Lucas Torró', 'Mediocentro Defensivo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/450/png/144x144/111232.png', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Jon Moncayola', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/450/png/144x144/477463.png', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Aimar Oroz', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/450/png/144x144/484702.png', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Rubén García', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/450/png/144x144/130026.png', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Moi Gómez', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/450/png/144x144/109243.png', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Pablo Ibáñez', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/450/png/144x144/522856.png', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Iker Muñoz', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/450/png/144x144/589577.png', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Kike Barja', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/450/png/144x144/178870.png', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Ante Budimir', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/450/png/144x144/94273.png', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Raúl García', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/450/png/144x144/490859.png', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
