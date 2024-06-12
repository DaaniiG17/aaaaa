-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-05-2024 a las 08:50:04
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
-- Estructura de tabla para la tabla `barcelona`
--

DROP TABLE IF EXISTS `barcelona`;
CREATE TABLE IF NOT EXISTS `barcelona` (
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
-- Volcado de datos para la tabla `barcelona`
--

INSERT INTO `barcelona` (`id`, `nombre`, `posicion`, `imagen`, `partidosJugados`, `goles`, `asistencias`, `amarillas`, `rojas`, `temporadas`) VALUES
(1, 'Marc-Andre Ter Stegen', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/178/png/144x144/77318.png', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Iñaki Peña', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/178/png/144x144/210341.png', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'João Cancelo', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/178/png/144x144/121145.png', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Alejandro Balde', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/178/png/144x144/493019.png', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Ronald Araujo', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/178/png/144x144/445087.png', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Iñigo Martinez', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/178/png/144x144/135363.png', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Andreas Christensen', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/178/png/144x144/135363.png', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Marcos Alonso', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/178/png/144x144/82263.png', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Sergi Roberto', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/178/png/144x144/86157.png', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Jules Kounde', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/178/png/144x144/220325.png', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Pablo Gavi', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/178/png/144x144/500046.png', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Pedri González', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/178/png/144x144/490541.png', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Fermín López', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/178/png/144x144/551086.png', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Oriol Romeu', 'Mediocentro Defensivo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/178/png/144x144/78056.png', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Frenkie De Jong', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/178/png/144x144/209712.png', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Ilkay Gundogan', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/178/png/144x144/59859.png', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Robert Lewandowski', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/178/png/144x144/56764.png', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Ferran Torres', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/178/png/144x144/224444.png', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Raphinha', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/178/png/144x144/219961.png', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Victor Roque', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/178/png/144x144/554806.png', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Lamine Yamal', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/178/png/144x144/593109.png', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
