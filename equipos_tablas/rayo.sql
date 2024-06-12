-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-05-2024 a las 08:50:59
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
-- Estructura de tabla para la tabla `rayo`
--

DROP TABLE IF EXISTS `rayo`;
CREATE TABLE IF NOT EXISTS `rayo` (
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
-- Volcado de datos para la tabla `rayo`
--

INSERT INTO `rayo` (`id`, `nombre`, `posicion`, `imagen`, `partidosJugados`, `goles`, `asistencias`, `amarillas`, `rojas`, `temporadas`) VALUES
(1, 'Stole Dimitrievski', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/184/png/144x144/94878.png', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Dani Cárdenas', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/184/png/144x144/491436.png', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Pep Chavarría', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/184/png/144x144/498444.png', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Aridane Hernández', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/184/png/144x144/89399.png', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Alfonso Espino', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/184/png/144x144/178424.png', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Abdul Mumin', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/184/png/144x144/232016.png', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Iván Balliu', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/184/png/144x144/97624.png', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Florian Lejeune', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/184/png/144x144/77359.png', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Isi Palazón', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/184/png/144x144/434078.png', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Óscar Trejo', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/184/png/144x144/40721.png', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Randy Nteka', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/184/png/144x144/449300.png', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Kike Pérez', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/184/png/144x144/241865.png', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Unai López', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/184/png/144x144/183462.png', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Álvaro García', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/184/png/144x144/165682.png', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Pathé Ciss', 'Mediocentro Defensivo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/184/png/144x144/441175.png', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Óscar Valentín', 'Mediocentro Defensivo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/184/png/144x144/433161.png', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Radamel Falcao', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/184/png/144x144/48847.png', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Bebé Correia', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/184/png/144x144/84374.png', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Jorge De Frutos', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/184/png/144x144/241153.png', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Raúl De Tomás', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/184/png/144x144/119403.png', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Sergio Camello', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/184/png/144x144/248507.png', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
