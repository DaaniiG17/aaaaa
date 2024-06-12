-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-05-2024 a las 08:50:17
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
-- Estructura de tabla para la tabla `celtadevigo`
--

DROP TABLE IF EXISTS `celtadevigo`;
CREATE TABLE IF NOT EXISTS `celtadevigo` (
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
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `celtadevigo`
--

INSERT INTO `celtadevigo` (`id`, `nombre`, `posicion`, `imagen`, `partidosJugados`, `goles`, `asistencias`, `amarillas`, `rojas`, `temporadas`) VALUES
(1, 'Vicente Guaita', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/176/png/144x144/40836.png', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Iván Villar', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/176/png/144x144/234580.png', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Carl Starfelt', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/176/png/144x144/174249.png', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Óscar Mingueza', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/176/png/144x144/242313.png', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Unai Núñez', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/176/png/144x144/242830.png', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Joseph Aidoo', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/176/png/144x144/210171.png', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Kevin Vázquez', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/176/png/144x144/107807.png', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Mihailo Ristic', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/176/png/144x144/206340.png', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Manu Sanchez', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/176/png/144x144/465494.png', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Carlos Domínguez', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/176/png/144x144/523846.png', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Renato Tapia', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/176/png/144x144/166162.png', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Carlos Dotor', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/176/png/144x144/448178.png', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Fran Beltran', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/176/png/144x144/234511.png', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Franco Cervi', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/176/png/144x144/184028.png', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Luca de la Torre', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/176/png/144x144/176414.png', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Jaílson Marques', 'Mediocentro Defensivo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/176/png/144x144/209373.png', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Williot Swedberg', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/176/png/144x144/543932.png', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Hugo Sotelo', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/176/png/144x144/538283.png', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Hugo Álvarez', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/176/png/144x144/550566.png', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Carles Pérez', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/176/png/144x144/179369.png', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Iago Aspas', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/176/png/144x144/40270.png', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Tasos Douvikas', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/176/png/144x144/433634.png', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'Jonathan Bamba', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/176/png/144x144/195883.png', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Jørgen Strand Larsen', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/176/png/144x144/247412.png', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
