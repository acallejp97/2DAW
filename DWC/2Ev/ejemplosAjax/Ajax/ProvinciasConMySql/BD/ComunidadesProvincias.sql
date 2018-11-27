
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-11-2016 a las 12:48:17
-- Versión del servidor: 10.0.20-MariaDB
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u745845519_ajax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidades`
--

CREATE TABLE IF NOT EXISTS `comunidades` (
  `id_com` int(11) NOT NULL AUTO_INCREMENT,
  `nom_com` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_com`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `comunidades`
--

INSERT INTO `comunidades` (`id_com`, `nom_com`) VALUES
(1, 'Euskadi'),
(2, 'Galicia'),
(3, 'Catalunya'),
(4, 'Andalucia'),
(5, 'Castilla Leon'),
(6, 'Castilla La MAncha');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE IF NOT EXISTS `provincias` (
  `id_prov` int(11) NOT NULL AUTO_INCREMENT,
  `id_com` int(11) NOT NULL,
  `nom_prov` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_prov`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id_prov`, `id_com`, `nom_prov`) VALUES
(1, 1, 'Bizkaia'),
(2, 1, 'Gipuzkoa'),
(3, 1, 'Araba'),
(4, 2, 'A Coruña'),
(5, 2, 'Lugo'),
(6, 2, 'Ourense'),
(7, 2, 'Pontevdra'),
(8, 3, 'Barcelona'),
(9, 3, 'Tarragona'),
(10, 3, 'Lleida'),
(11, 3, 'Girona'),
(12, 4, 'Almeria'),
(13, 4, 'Cadiz'),
(14, 4, 'Cordoba'),
(15, 4, 'Granada'),
(16, 4, 'Huelva'),
(17, 4, 'Jaen'),
(18, 4, 'Malaga'),
(19, 4, 'Sevilla');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
