-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-05-2024 a las 08:51:23
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
-- Estructura de tabla para la tabla `villareal`
--

DROP TABLE IF EXISTS `villareal`;
CREATE TABLE IF NOT EXISTS `villareal` (
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
-- Volcado de datos para la tabla `villareal`
--

INSERT INTO `villareal` (`id`, `nombre`, `posicion`, `imagen`, `partidosJugados`, `goles`, `asistencias`, `amarillas`, `rojas`, `temporadas`) VALUES
(1, 'Pepe Reina', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/449/png/144x144/8432.png', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Filip Jørgensen', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/449/png/144x144/508479.png', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Raúl Albiol', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/449/png/144x144/18003.png', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Jorge Cuenca', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/449/png/144x144/246301.png', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Juan Foyth', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/449/png/144x144/234908.png', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Kiko Femenía', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/449/png/144x144/54484.png', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Alberto Moreno', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/449/png/144x144/100059.png', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Aïssa Mandi', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/449/png/144x144/86813.png', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Adrià Alti', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/449/png/144x144/465599.png', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Santi Comesaña', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/449/png/144x144/230071.png', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Étienne Capoue', 'Mediocentro Defensivo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/449/png/144x144/38439.png', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Manu Trigueros', 'Madiapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/449/png/144x144/98961.png', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Álex Baena', 'Madiapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/449/png/144x144/248501.png', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Francis Coquelin', 'Mediocentro Defensivo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/449/png/144x144/56864.png', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Ramon Terrats', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/449/png/144x144/519373.png', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Yeremy Pino', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/449/png/144x144/488024.png', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Denis Suárez', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/449/png/144x144/89572.png', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Alfonso Pedraza', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/449/png/144x144/208380.png', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Gerard Moreno', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/449/png/144x144/93721.png', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Alexander Sørloth', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/449/png/144x144/143877.png', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'José Luís Morales', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/449/png/144x144/165375.png', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Ilias Akhomach', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/449/png/144x144/500043.png', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
