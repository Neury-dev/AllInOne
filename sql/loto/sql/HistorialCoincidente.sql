-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 02-09-2020 a las 08:02:56
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nLoto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `HistorialCoincidente`
--

CREATE TABLE `HistorialCoincidente` (
  `id` bigint(20) NOT NULL,
  `idHistorial` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` text COLLATE utf8_unicode_ci NOT NULL,
  `sorteo` text COLLATE utf8_unicode_ci NOT NULL,
  `loto` text COLLATE utf8_unicode_ci NOT NULL,
  `lotoMas` text COLLATE utf8_unicode_ci NOT NULL,
  `superMas` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `HistorialCoincidente`
--

INSERT INTO `HistorialCoincidente` (`id`, `idHistorial`, `fecha`, `sorteo`, `loto`, `lotoMas`, `superMas`) VALUES
(1, '238', '2016-08-17', '', '10 17 19 28 32 36', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `HistorialCoincidente`
--
ALTER TABLE `HistorialCoincidente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `HistorialCoincidente`
--
ALTER TABLE `HistorialCoincidente`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
