-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-05-2024 a las 08:50:29
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
-- Estructura de tabla para la tabla `getafe`
--

DROP TABLE IF EXISTS `getafe`;
CREATE TABLE IF NOT EXISTS `getafe` (
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
-- Volcado de datos para la tabla `getafe`
--

INSERT INTO `getafe` (`id`, `nombre`, `posicion`, `imagen`, `partidosJugados`, `goles`, `asistencias`, `amarillas`, `rojas`, `temporadas`) VALUES
(1, 'David Soria', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1450/png/144x144/175204.png', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Daniel Furato', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1450/png/144x144/607789.png', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Djené Dakonam', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1450/png/144x144/149838.png', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Fabrizio Angileri', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1450/png/144x144/153656.png', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Gaston Álvarez', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1450/png/144x144/501039.png', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Domingos Duarte', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1450/png/144x144/200599.png', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Omar Alderete', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1450/png/144x144/201895.png', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'José Ángel Carmona', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1450/png/144x144/545998.png', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Juan Iglesias', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1450/png/144x144/464283.png', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Gorka Rivera', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1450/png/144x144/589587.png', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Luis Milla', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1450/png/144x144/167742.png', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Mauro Arambarri', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1450/png/144x144/171222.png', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Óscar Rodríguez', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1450/png/144x144/223757.png', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Carles Aleña', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1450/png/144x144/179271.png', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Nemanja Maksimovic', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1450/png/144x144/198499.png', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Jorge Martín', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1450/png/144x144/448181.png', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Jaime Mata', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1450/png/144x144/109270.png', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Mason Greenwood', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1450/png/144x144/220688.png', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Juanmi Latasa', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1450/png/144x144/448179.png', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Borja Mayoral', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1450/png/144x144/199248.png', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
