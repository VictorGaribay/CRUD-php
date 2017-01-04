-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-01-2017 a las 14:27:33
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `brevetes`
--
CREATE DATABASE IF NOT EXISTS `brevetes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `brevetes`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(10) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`) VALUES
(1, 'AI'),
(2, 'AII'),
(3, 'AIII');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `user`, `password`) VALUES
(1, 'amaria', 'amaria123'),
(2, 'victor', 'victor123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usarios` int(11) NOT NULL AUTO_INCREMENT,
  `dni` char(8) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `fecha_tramite` date DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL,
  `estado` varchar(19) DEFAULT NULL,
  PRIMARY KEY (`id_usarios`),
  KEY `categoria` (`categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usarios`, `dni`, `nombres`, `apellidos`, `fecha_tramite`, `categoria`, `estado`) VALUES
(18, '28343456', 'Victor', 'Garibay Cadenas', '2016-12-14', 3, 'Pendiente'),
(20, '70412451', 'victor', 'garibay', '2016-12-23', 1, 'Pendiente'),
(21, '14522', 'rfr', 'asdasd', '2016-12-23', 2, 'Entregado'),
(22, '70270440', 'Jerson', 'hh', '2016-12-23', 1, 'Pendiente'),
(23, '123', 'asda', '', '2016-12-28', 1, 'Pendiente'),
(24, '1123', 'asd', 'asd', '2016-12-29', 2, 'Entregado'),
(25, '123123', 'asda', 'adad', '2016-12-29', 1, 'Entregado'),
(27, '123', 'asdasd', 'asdasd', '2016-11-15', 2, 'Pendiente'),
(28, '123', 'aaaa', 'aaa', '2016-11-17', 1, 'Entregado'),
(29, '32423542', 'fff', 'fff', '2016-10-11', 1, 'Pendiente'),
(30, '454', 'dsf', 'sfsd', '2016-10-11', 2, 'Pendiente'),
(31, '70424514', 'Victor', 'Garibay Cadenas', '2017-01-03', 2, 'Pendiente');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id_categoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
