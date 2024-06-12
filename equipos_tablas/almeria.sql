-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-05-2024 a las 08:49:44
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
-- Estructura de tabla para la tabla `almeria`
--

DROP TABLE IF EXISTS `almeria`;
CREATE TABLE IF NOT EXISTS `almeria` (
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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `almeria`
--

INSERT INTO `almeria` (`id`, `nombre`, `posicion`, `imagen`, `partidosJugados`, `goles`, `asistencias`, `amarillas`, `rojas`, `temporadas`) VALUES
(1, 'Fernando Martínez', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1564/png/144x144/100058.png', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Luís Maximiliano', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1564/png/144x144/222628.png', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Álex Pozo', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1564/png/144x144/234548.png', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Marc Pubil', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1564/png/144x144/562720.png', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Álex Centelles', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1564/png/144x144/454883.png', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Edgar González', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1564/png/144x144/469402.png', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Chumi González', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1564/png/144x144/227162.png', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Iddrisu Baba', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1564/png/144x144/463170.png', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Lucas Robertone', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1564/png/144x144/233681.png', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Dion Lopy', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1564/png/144x144/476412.png', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Gonzalo Melero', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1564/png/144x144/195457.png', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Sergio Arribas', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1564/png/144x144/493344.png', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Largie Ramazani', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1564/png/144x144/433952.png', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Adri Embarba', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1564/png/144x144/132161.png', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Luis Suárez', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1564/png/144x144/432838.png', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Léo Baptistao', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1564/png/144x144/109269.png', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Ibrahima Koné', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/1564/png/144x144/445736.png', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
