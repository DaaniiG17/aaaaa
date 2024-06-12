-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-05-2024 a las 08:49:48
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
-- Estructura de tabla para la tabla `athleticclub`
--

DROP TABLE IF EXISTS `athleticclub`;
CREATE TABLE IF NOT EXISTS `athleticclub` (
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
-- Volcado de datos para la tabla `athleticclub`
--

INSERT INTO `athleticclub` (`id`, `nombre`, `posicion`, `imagen`, `partidosJugados`, `goles`, `asistencias`, `amarillas`, `rojas`, `temporadas`) VALUES
(1, 'Unai Simón', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/174/png/144x144/212769.png', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Julen Agirrezalaba', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/174/png/144x144/470508.png', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Dani Vivian', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/174/png/144x144/437554.png', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Aitor Paredes', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/174/png/144x144/440593.png', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Yeray Álvarez', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/174/png/144x144/197319.png', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Iñigo Lekue', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/174/png/144x144/197314.png', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Yuri Berchiche', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/174/png/144x144/42670.png', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Oscar De Marcos', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/174/png/144x144/59062.png', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Imanol Garcia', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/174/png/144x144/470511.png', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Beñat Prados', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/174/png/144x144/470506.png', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Mikel Vesga', 'Mediocentro ofensivo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/174/png/144x144/197326.png', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Oihan Sancet', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/174/png/144x144/439772.png', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Iñigo Ruíz', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/174/png/144x144/96736.png', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Raúl García', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/174/png/144x144/18498.png', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Unai Gómez', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/174/png/144x144/619506.png', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Alex Berenguer', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/174/png/144x144/195385.png', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Iñaki Williams', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/174/png/144x144/197334.png', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Iker Muniain', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/174/png/144x144/76012.png', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Nico Williams', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/174/png/144x144/523654.png', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Gorka Guruzeta', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/174/png/144x144/220182.png', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Asier Villalibre', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/174/png/144x144/212770.png', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Malcum Adu', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/174/png/144x144/589574.png', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
