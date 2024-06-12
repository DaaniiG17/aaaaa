-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-05-2024 a las 08:49:59
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
-- Estructura de tabla para la tabla `atleticodemadrid`
--

DROP TABLE IF EXISTS `atleticodemadrid`;
CREATE TABLE IF NOT EXISTS `atleticodemadrid` (
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
-- Volcado de datos para la tabla `atleticodemadrid`
--

INSERT INTO `atleticodemadrid` (`id`, `nombre`, `posicion`, `imagen`, `partidosJugados`, `goles`, `asistencias`, `amarillas`, `rojas`, `temporadas`) VALUES
(1, 'Jan Oblak', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/175/png/144x144/81352.png', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Antonio Gomis', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/175/png/144x144/493104.png', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Jose Giménez', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/175/png/144x144/151883.png', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Cesar Azpilicueta', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/175/png/144x144/41328.png', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Stefan Savic', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/175/png/144x144/65807.png', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Nahuel Molina', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/175/png/144x144/221586.png', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Mario Hermoso', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/175/png/144x144/213431.png', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Reinildo Mandava', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/175/png/144x144/434399.png', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Rodrigo De Paul', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/175/png/144x144/119141.png', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Koke Resurrección', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/175/png/144x144/77390.png', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Saúl Ñíguez', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/175/png/144x144/89335.png', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Thomas Lemar', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/175/png/144x144/167449.png', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Marcos Llorente', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/175/png/144x144/192364.png', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Rodrigo Riquelme', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/175/png/144x144/437834.png', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Axel Witsel', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/175/png/144x144/41189.png', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Pablo Barrios', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/175/png/144x144/503523.png', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Antoine Griezman', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/175/png/144x144/76650.png', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Memphis Depay', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/175/png/144x144/106824.png', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Angel Correa', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/175/png/144x144/156223.png', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Samuel Lino', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/175/png/144x144/249823.png', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Álvaro Morata', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/175/png/144x144/88482.png', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
