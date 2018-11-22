-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-11-2018 a las 17:28:30
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `G1Blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `texto` varchar(3000) COLLATE utf8_spanish_ci NOT NULL,
  `id_autor` int(11) NOT NULL,
  `valoracion` int(11) DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL,
  `publicado` tinyint(1) NOT NULL,
  `titulo` varchar(75) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `fecha`, `texto`, `id_autor`, `valoracion`, `categoria`, `publicado`, `titulo`) VALUES
(1, '0000-00-00', 'Hola que tal yo soy tu lobo', 1, 4, 1, 3, 'Los Bagaudas'),
(10, '0000-00-00', 'Hola que tal yo soy tu lobo', 1, 4, 1, 3, 'Los Bagaudas'),
(11, '0000-00-00', 'Hola que tal yo soy tu lobo', 1, 4, 1, 3, 'Los Bagaudas'),
(12, '0000-00-00', 'Hola que tal yo soy tu lobo', 1, 4, 1, 3, 'Los Bagaudas'),
(15, '0000-00-00', 'Sorgina pirulina', 2, 2, 3, 1, 'Los Bagaudas'),
(16, '2018-11-12', 'Sorgina pirulina', 2, 2, 3, 1, 'Los Bagaudas'),
(17, '2018-12-01', 'Hola aaaaa', 2, 17, 2, 0, 'Los Bagaudas'),
(18, '2018-12-01', 'Hola aaaaa', 2, 17, 2, 0, 'Los Bagaudas'),
(19, '2018-12-01', 'Hola aaaaa', 2, 17, 2, 0, 'Los Bagaudas'),
(20, '2018-12-01', 'Hola aaaaa', 2, 17, 2, 0, 'Los Bagaudas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Aereo'),
(2, 'Terrestre'),
(3, 'Maritimo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `comentario` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` date NOT NULL,
  `id_articulos` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentario`, `fecha`, `id_articulos`, `id_usuario`) VALUES
(1, 'Esta bien 1', '2018-10-01', 1, 1),
(4, 'Esta bien 1', '2018-10-01', 10, 1),
(5, 'Esta bien 2', '2018-10-02', 10, 1),
(6, 'Esta bien 3', '2018-10-03', 10, 1),
(7, 'Esta bien 4', '2018-10-04', 10, 1),
(8, 'Esta bien 5', '2018-10-05', 10, 1),
(9, 'Esta bien 6', '2018-10-06', 10, 1),
(10, 'Esta bien 7', '2018-10-07', 10, 1),
(11, 'Esta bien 8', '2018-10-08', 10, 1),
(12, 'Esta bien 9', '2018-10-09', 10, 1),
(13, 'Esta bien 10', '2018-10-10', 10, 1),
(14, 'Esta bien 11', '2018-10-11', 10, 1),
(15, 'Esta bien 12', '2018-10-12', 10, 1),
(16, 'Esta bien 13', '2018-10-13', 10, 1),
(17, 'Esta bien 14', '2018-10-14', 10, 1),
(18, 'Esta bien 15', '2018-10-15', 10, 1),
(19, 'Esta bien 16', '2018-10-16', 10, 1),
(20, 'Esta bien 17', '2018-10-17', 10, 1),
(21, 'Esta bien 18', '2018-10-18', 10, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `permisos` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `password`, `email`, `permisos`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 1),
(2, 'Victor', 'es el mejor', 'beorn57@yahoo.es', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_autor` (`id_autor`),
  ADD KEY `categoria` (`categoria`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comentario_articulo` (`id_articulos`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `usuario_autor` FOREIGN KEY (`id_autor`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentario_articulo` FOREIGN KEY (`id_articulos`) REFERENCES `articulos` (`id`),
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
