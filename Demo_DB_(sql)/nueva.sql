-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2016 a las 04:51:14
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nueva`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_ejemplo`
--

CREATE TABLE `categorias_ejemplo` (
  `id_categorias` int(11) NOT NULL,
  `categoria` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias_ejemplo`
--

INSERT INTO `categorias_ejemplo` (`id_categorias`, `categoria`) VALUES
(1, 'perro'),
(2, 'gato'),
(3, 'tiburon');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias_ejemplo`
--
ALTER TABLE `categorias_ejemplo`
  ADD PRIMARY KEY (`id_categorias`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
