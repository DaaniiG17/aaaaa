-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-05-2024 a las 08:50:12
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
-- Estructura de tabla para la tabla `cadiz`
--

DROP TABLE IF EXISTS `cadiz`;
CREATE TABLE IF NOT EXISTS `cadiz` (
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
-- Volcado de datos para la tabla `cadiz`
--

INSERT INTO `cadiz` (`id`, `nombre`, `posicion`, `imagen`, `partidosJugados`, `goles`, `asistencias`, `amarillas`, `rojas`, `temporadas`) VALUES
(1, 'Conan Ledesma', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1737/png/144x144/167210.png', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'David Gil', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1737/png/144x144/173947.png', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Joseba Zaldúa', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1737/png/144x144/98821.png', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Rafael Fali', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1737/png/144x144/213118.png', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Victor Chust', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1737/png/144x144/437463.png', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Javi Hernandez', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1737/png/144x144/463163.png', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Iza Carcelén', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1737/png/144x144/111313.png', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Jorge Meré', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1737/png/144x144/178866.png', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Luis Hernández', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1737/png/144x144/130025.png', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Lucas Pires', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1737/png/144x144/549329.png', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Rubén Alcaraz', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1737/png/144x144/96771.png', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Alex Fernández', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1737/png/144x144/88479.png', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Iván Alejo', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1737/png/144x144/179926.png', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Rominigue Kouamé', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1737/png/144x144/232175.png', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Gonzalo Escalante', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1737/png/144x144/156305.png', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Rubén Sobrino', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1737/png/144x144/112994.png', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Brian Ocampo', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1737/png/144x144/456960.png', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Chris Ramos', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1737/png/144x144/442838.png', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Darwin Machís', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1737/png/144x144/111133.png', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Sergi Guardiola', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1737/png/144x144/89850.png', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Roger Martí', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1737/png/144x144/109702.png', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Maxi Gómez', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1737/png/144x144/215206.png', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
