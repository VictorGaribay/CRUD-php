-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-12-2016 a las 16:00:14
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usarios`, `dni`, `nombres`, `apellidos`, `fecha_tramite`, `categoria`, `estado`) VALUES
(16, '12', 'as', 'as', '2016-12-15', 2, 'Pendiente'),
(17, '55555', 'vvvv', 'vvvvv', '2016-12-15', 1, 'Pendiente'),
(18, '28343456', 'Victor', 'Garibay Cadenas', '2016-12-14', 3, 'Pendiente');

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
