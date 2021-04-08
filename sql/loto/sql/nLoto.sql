-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 03-07-2020 a las 19:13:36
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
-- Estructura de tabla para la tabla `nHistorial`
--

CREATE TABLE `nHistorial` (
  `nID` bigint(20) NOT NULL,
  `nFecha` text COLLATE utf8_unicode_ci NOT NULL,
  `nSorteo` text COLLATE utf8_unicode_ci NOT NULL,
  `nLoto` text COLLATE utf8_unicode_ci NOT NULL,
  `nLotoMas` text COLLATE utf8_unicode_ci NOT NULL,
  `nSuperMas` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `nHistorial`
--
ALTER TABLE `nHistorial`
  ADD PRIMARY KEY (`nID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `nHistorial`
--
ALTER TABLE `nHistorial`
  MODIFY `nID` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
