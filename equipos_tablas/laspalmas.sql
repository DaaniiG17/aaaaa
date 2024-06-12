-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-05-2024 a las 08:50:48
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
-- Estructura de tabla para la tabla `laspalmas`
--

DROP TABLE IF EXISTS `laspalmas`;
CREATE TABLE IF NOT EXISTS `laspalmas` (
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
-- Volcado de datos para la tabla `laspalmas`
--

INSERT INTO `laspalmas` (`id`, `nombre`, `posicion`, `imagen`, `partidosJugados`, `goles`, `asistencias`, `amarillas`, `rojas`, `temporadas`) VALUES
(1, 'Aarón Escandell', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/407/png/144x144/176278.png', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Álvaro Vallés', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/407/png/144x144/472194.png', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Marvin Park', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/407/png/144x144/466072.png', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Sergi Cardona', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/407/png/144x144/484693.png', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Álex Suárez', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/407/png/144x144/487703.png', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Eric Curbelo', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/407/png/144x144/220371.png', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Álvaro Lemos', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/407/png/144x144/213469.png', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Mika Mármol', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/407/png/144x144/465677.png', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Daley Sinkgraven', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/407/png/144x144/167432.png', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Saúl Coco', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/407/png/144x144/451565.png', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Julián Araujo', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/407/png/144x144/436893.png', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Javi Muñoz', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/407/png/144x144/198221.png', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Alberto Moleiro', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/407/png/144x144/513956.png', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Benito Ramírez', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/407/png/144x144/246124.png', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Enzo Loiodice', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/407/png/144x144/449718.png', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Kirian Rodríguez', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/407/png/144x144/484753.png', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Omenuke Mfulu', 'Mediocentro Defensivo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/407/png/144x144/183778.png', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Pejiño Gonzalez', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/407/png/144x144/444952.png', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Cristian Herrera', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/407/png/144x144/165907.png', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Sandro Ramírez', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/407/png/144x144/108438.png', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Munir El Haddadi', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/407/png/144x144/170864.png', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Marc Cardona', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/407/png/144x144/244363.png', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
