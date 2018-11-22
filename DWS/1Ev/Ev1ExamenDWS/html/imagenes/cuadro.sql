-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-05-2015 a las 18:06:47
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `galeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuadro`
--

CREATE TABLE IF NOT EXISTS `cuadro` (
  `codcuadro` int(11) NOT NULL AUTO_INCREMENT,
  `nombrecuadro` varchar(25) NOT NULL,
  `nombreautor` varchar(25) NOT NULL,
  `fotocuadro` varchar(20) NOT NULL,
  PRIMARY KEY (`codcuadro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `cuadro`
--

INSERT INTO `cuadro` (`codcuadro`, `nombrecuadro`, `nombreautor`, `fotocuadro`) VALUES
(1, 'cuadro1', 'nombre cuadro1', 'cuadro1.jpg'),
(2, 'cuadro2', 'nombre cuadro2', 'cuadro2.jpg'),
(3, 'cuadro3', 'nombre cuadro3', 'cuadro3.jpg'),
(4, 'cuadro4', 'Nombre cuadro4', 'cuadro4.jpg'),
(5, 'cuadro5', 'nombre cuadro5', 'cuadro5.jpg'),
(6, 'cuadro6', 'nombre cuadro6', 'cuadro6.jpg'),
(8, 'La joven de la perla', 'Johannes Vermeer', 'perla.jpg'),
(9, 'La siesta', 'Vincent van Gogh', 'la siesta.jpg'),
(10, 'Autorretrato', 'Vincent van Gogh', 'autorretrato.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
