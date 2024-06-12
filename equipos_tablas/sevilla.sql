-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-05-2024 a las 08:51:12
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
-- Estructura de tabla para la tabla `sevilla`
--

DROP TABLE IF EXISTS `sevilla`;
CREATE TABLE IF NOT EXISTS `sevilla` (
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
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `sevilla`
--

INSERT INTO `sevilla` (`id`, `nombre`, `posicion`, `imagen`, `partidosJugados`, `goles`, `asistencias`, `amarillas`, `rojas`, `temporadas`) VALUES
(1, 'Marko Dimitrovic', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/94618.png', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Orjan Nyland', 'Portero', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/98770.png', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Kike Salas', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/550816.png', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Adriá Pedrosa', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/446990.png', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Sergio Ramos', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/17861.png', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Tanguy Nianzou', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/465691.png', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Jesús Navas', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/17740.png', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Marcos Acuña', 'Lateral', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/169813.png', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Loïc Badé', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/500267.png', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Marcao Teixeira', 'Defensa Central', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/182816.png', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Lucas Ocampos', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/121117.png', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Nemanja Gudelj', 'Mediocentro Defensivo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/72154.png', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Suso Fernández', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/103953.png', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Joan Jordán', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/195364.png', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Érik Lamela', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/62974.png', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Djibril Sow', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/185524.png', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Óliver Torres', 'Mediapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/115860.png', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Boubakary Soumaré', 'Mediocentro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/225902.png', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Adnan Januzaj', 'Madiapunta', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/154976.png', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Juanlu Sánchez', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/494928.png', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Lucien Agoumé', 'Mediocentro Defensivo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/468426.png', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Rafa Mir', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/219929.png', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'Dodi Lukebakio', 'Extremo', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/219002.png', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Youssef En-Nesyri', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/234991.png', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Isaac Romero', 'Delantero Centro', 'https://e00-marca.uecdn.es/assets/sports/headshots/football/179/png/144x144/610206.png', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
