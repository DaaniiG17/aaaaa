-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-05-2024 a las 08:49:35
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
-- Estructura de tabla para la tabla `alaves`
--

DROP TABLE IF EXISTS `alaves`;
CREATE TABLE IF NOT EXISTS `alaves` (
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
-- Volcado de datos para la tabla `alaves`
--

INSERT INTO `alaves` (`id`, `nombre`, `posicion`, `imagen`, `partidosJugados`, `goles`, `asistencias`, `amarillas`, `rojas`, `temporadas`) VALUES
(1, 'Antonio Sivera', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/173/png/144x144/176245.png', 80, 0, 0, 4, 0, 3),
(2, 'Jesús Owono', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/173/png/144x144/470312.png', 20, 0, 0, 0, 0, 1),
(3, 'Andoni Gorosabel', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/173/png/144x144/235227.png', 95, 1, 7, 7, 2, 5),
(4, 'Rubén Duarte', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/173/png/144x144/126119.png', 65, 3, 6, 8, 1, 1),
(5, 'Joseda Álvarez', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/173/png/144x144/515901.png', 61, 2, 2, 8, 1, 2),
(6, 'Javi López', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/173/png/144x144/484406.png', 55, 0, 1, 4, 2, 5),
(7, 'Eneko Ortiz', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/173/png/144x144/538021.png', 58, 4, 7, 1, 1, 3),
(8, 'Victor Parada', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/173/png/144x144/485374.png', 87, 3, 3, 8, 3, 5),
(9, 'Aleksandar Sedlar', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/173/png/144x144/215792.png', 80, 5, 6, 6, 1, 1),
(10, 'Abdel Abqar', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/173/png/144x144/463001.png', 94, 2, 4, 4, 4, 4),
(11, 'Rafa Marín', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/173/png/144x144/488040.png', 52, 4, 8, 8, 3, 5),
(12, 'Ander Guevara', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/173/png/144x144/431644.png', 56, 4, 8, 8, 3, 5),
(13, 'Antonio Blanco', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/173/png/144x144/437465.png', 51, 8, 8, 5, 2, 3),
(14, 'Ianis Hagi', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/173/png/144x144/194605.png', 68, 4, 1, 4, 1, 5),
(15, 'Jon Guridi', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/173/png/144x144/201178.png', 88, 7, 2, 8, 1, 1),
(16, 'Carlos Benavídez', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/173/png/144x144/244707.png', 74, 5, 8, 9, 3, 3),
(17, 'Luis Rioja', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/173/png/144x144/434941.png', 53, 3, 7, 9, 1, 6),
(18, 'Xeber Alkain', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/173/png/144x144/504045.png', 71, 19, 6, 1, 3, 2),
(19, 'Abde Rebbach', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/173/png/144x144/586866.png', 64, 18, 6, 2, 1, 3),
(20, 'Kike García', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/173/png/144x144/61597.png', 51, 15, 7, 4, 0, 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
