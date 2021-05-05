-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 22-04-2021 a las 12:42:03
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nHistorial`
--

CREATE TABLE `Historial` (
  `id` bigint(20) NOT NULL,
  `fecha` text COLLATE utf8_unicode_ci NOT NULL,
  `sorteo` text COLLATE utf8_unicode_ci NOT NULL,
  `loto` text COLLATE utf8_unicode_ci NOT NULL,
  `lotoMas` text COLLATE utf8_unicode_ci NOT NULL,
  `superMas` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `nHistorial`
--

INSERT INTO `Historial` (`id`, `fecha`, `sorteo`, `loto`, `lotoMas`, `superMas`) VALUES
(1, '2020-06-06', '1063', '03 13 23 34 35 38', '08', '04'),
(2, '2020-06-10', '1064', '02 07 12 28 34 36', '06', '02'),
(3, '2020-06-13', '1065', '03 07 09 15 22 30', '05', '03'),
(4, '2020-06-17', '1066', '01 11 14 16 24 37', '03', '05'),
(5, '2020-06-20', '1067', '06 08 13 18 31 37', '02', '13'),
(6, '2020-06-24', '1068', '11 22 24 28 33 34', '05', '07'),
(7, '2020-06-27', '1069', '04 15 16 19 20 26', '06', '05'),
(8, '2020-07-01', '1070', '04 08 14 20 23 28', '03', '13'),
(9, '2020-07-04', '1071', '06 23 26 31 32 35', '05', '13'),
(10, '2020-07-08', '1072', '03 04 07 08 23 37', '07', '07'),
(11, '2020-07-11', '1073', '07 09 19 22 31 37', '02', '12'),
(12, '2020-07-15', '1074', '18 20 22 25 32 38', '05', '04'),
(13, '2020-07-18', '1075', '04 15 22 26 31 33', '07', '12'),
(14, '2020-07-22', '1076', '07 14 29 33 36 38', '04', '08'),
(15, '2020-07-25', '1077', '02 15 17 20 25 27', '05', '15'),
(16, '2020-07-29', '1078', '15 23 26 30 33 36', '09', '05'),
(17, '2020-08-01', '1079', '03 05 10 12 17 30', '07', '01'),
(18, '1997-12-13', '', '03 08 24 27 29 37', '', ''),
(19, '1998-01-10', '', '21 22 24 33 35 36', '', ''),
(20, '1998-03-07', '', '13 14 15 16 21 27', '', ''),
(21, '1998-03-21', '', '12 14 15 17 20 22', '', ''),
(22, '1998-05-02', '', '03 06 13 17 29 33', '', ''),
(23, '1998-05-16', '', '08 10 14 31 33 38', '', ''),
(24, '1998-06-06', '', '07 13 15 22 23 29', '', ''),
(25, '1998-07-25', '', '02 12 25 29 30 34', '', ''),
(26, '1998-08-22', '', '13 17 21 25 35 38', '', ''),
(27, '1998-10-17', '', '09 17 23 25 31 38', '', ''),
(28, '1999-02-06', '', '03 12 15 16 27 30', '', ''),
(29, '1999-05-15', '', '06 13 14 17 36 38', '', ''),
(30, '1999-09-04', '', '07 22 27 31 37 38', '', ''),
(31, '1999-10-02', '', '01 03 08 23 28 29', '', ''),
(32, '2000-03-11', '', '09 19 25 30 32 38', '', ''),
(33, '2000-05-05', '', '03 08 14 18 23 30', '', ''),
(34, '2000-06-03', '', '08 15 17 23 27 30', '', ''),
(35, '2000-10-07', '', '10 15 19 23 30 38', '', ''),
(36, '2000-11-11', '', '02 11 13 28 31 38', '', ''),
(37, '2001-03-24', '', '05 14 17 22 24 31', '', ''),
(38, '2001-04-21', '', '12 15 21 26 34 38', '', ''),
(39, '2001-09-29', '', '05 08 11 14 17 25', '', ''),
(40, '2002-01-23', '', '07 09 14 18 19 27', '', ''),
(41, '2002-07-03', '', '13 15 24 26 32 38', '', ''),
(42, '2002-11-06', '', '03 08 17 20 29 38', '', ''),
(43, '2003-01-25', '', '01 02 07 12 15 17', '', ''),
(44, '2003-07-23', '', '03 14 21 26 31 35', '', ''),
(45, '2003-09-20', '', '01 14 18 20 22 36', '', ''),
(46, '2003-10-25', '', '02 06 16 20 28 36', '', ''),
(47, '2003-11-01', '', '02 09 20 29 33 35', '', ''),
(48, '2004-04-07', '', '03 05 09 30 33 36', '', ''),
(49, '2004-05-01', '', '06 08 11 13 16 31', '', ''),
(50, '2004-06-06', '', '03 04 15 22 23 38', '', ''),
(51, '2004-07-01', '', '13 18 29 31 32 38', '', ''),
(52, '2004-09-11', '', '04 06 18 21 25 33', '', ''),
(53, '2004-09-16', '', '05 10 15 16 28 30', '', ''),
(54, '2004-11-10', '', '03 05 19 22 32 36', '', ''),
(55, '2004-11-27', '', '08 09 10 12 16 21', '', ''),
(56, '2005-02-23', '', '02 03 06 18 22 27', '', ''),
(57, '2005-03-12', '', '11 16 17 18 24 31', '', ''),
(58, '2005-04-23', '', '01 18 24 28 29 34', '', ''),
(59, '2005-07-02', '', '09 15 21 24 30 31', '', ''),
(60, '2005-09-03', '', '05 09 11 31 34 38', '', ''),
(61, '2005-09-17', '', '02 07 10 22 25 27', '', ''),
(62, '2005-12-21', '', '12 14 26 28 30 32', '', ''),
(63, '2006-02-08', '', '08 11 17 19 25 33', '', ''),
(64, '2006-02-22', '', '04 08 11 14 19 25', '', ''),
(65, '2006-03-08', '', '03 13 26 35 36 38', '', ''),
(66, '2006-04-15', '', '01 06 08 09 11 21', '', ''),
(67, '2006-04-29', '', '01 07 16 21 26 36', '', ''),
(68, '2006-05-10', '', '08 10 17 30 36 37', '', ''),
(69, '2006-07-12', '', '06 08 15 17 22 24', '', ''),
(70, '2006-09-09', '', '05 06 09 10 11 12', '', ''),
(71, '2006-09-13', '', '01 09 11 13 16 19', '', ''),
(72, '2006-11-25', '', '05 07 08 13 14 27', '', ''),
(73, '2007-01-27', '', '01 05 06 09 18 20', '', ''),
(74, '2007-03-14', '', '03 15 20 22 25 35', '', ''),
(75, '2007-03-31', '', '02 05 17 23 27 30', '', ''),
(76, '2007-04-18', '', '10 11 17 30 34 38', '', ''),
(77, '2007-05-16', '', '03 08 13 14 15 26', '', ''),
(78, '2007-06-13', '', '17 22 25 26 33 35', '', ''),
(79, '2007-08-18', '', '09 15 16 21 23 24', '', ''),
(80, '2007-10-17', '', '02 13 20 26 36 38', '', ''),
(81, '2007-11-14', '', '04 13 17 20 27 34', '', ''),
(82, '2007-11-28', '', '03 05 09 20 27 38', '', ''),
(83, '2007-12-29', '', '04 10 11 18 24 27', '', ''),
(84, '2008-01-19', '', '02 08 25 29 33 37', '', ''),
(85, '2008-02-06', '', '04 07 14 19 28 33', '', ''),
(86, '2008-03-01', '', '01 04 08 20 22 35', '', ''),
(87, '2008-03-08', '', '03 11 14 19 20 36', '', ''),
(88, '2008-03-29', '', '07 09 11 12 24 32', '', ''),
(89, '2008-04-26', '', '02 08 09 23 27 35', '', ''),
(90, '2008-05-24', '', '04 08 14 15 27 30', '', ''),
(91, '2008-05-28', '', '02 05 17 18 23 25', '', ''),
(92, '2008-07-16', '', '01 04 15 21 23 25', '', ''),
(93, '2008-07-26', '', '09 14 16 19 25 33', '', ''),
(94, '2008-08-13', '', '14 16 20 25 28 29', '', ''),
(95, '2008-08-27', '', '05 09 20 24 27 33', '', ''),
(96, '2008-09-06', '', '03 05 10 11 14 15', '', ''),
(97, '2008-09-13', '', '03 12 15 25 28 30', '', ''),
(98, '2008-09-17', '', '09 18 22 24 31 35', '', ''),
(99, '2008-11-19', '', '10 11 24 25 34 38', '', ''),
(100, '2008-12-27', '', '06 07 09 21 24 29', '', ''),
(101, '2009-01-10', '', '10 12 16 22 28 36', '', ''),
(102, '2009-01-24', '', '02 22 27 32 35 37', '', ''),
(103, '2009-02-14', '', '03 16 20 28 31 35', '', ''),
(104, '2009-03-11', '', '02 04 09 11 15 25', '', ''),
(105, '2009-04-04', '', '03 04 09 22 29 34', '', ''),
(106, '2009-04-15', '', '03 12 14 16 27 32', '', ''),
(107, '2009-04-22', '', '01 02 05 14 24 30', '', ''),
(108, '2009-04-29', '', '04 08 16 21 28 31', '', ''),
(109, '2009-05-20', '', '03 04 13 14 34 35', '', ''),
(110, '2009-05-23', '', '03 08 17 24 29 33', '', ''),
(111, '2009-06-24', '', '03 13 14 17 22 31', '', ''),
(112, '2009-07-18', '', '06 12 13 24 28 33', '', ''),
(113, '2009-07-25', '', '03 06 09 11 32 33', '', ''),
(114, '2009-08-08', '', '10 13 23 26 30 36', '', ''),
(115, '2009-09-12', '', '19 23 24 25 26 28', '', ''),
(116, '2009-09-19', '', '06 13 17 23 25 36', '', ''),
(117, '2009-10-17', '', '01 02 06 12 17 18', '', ''),
(118, '2009-10-21', '', '11 15 18 21 27 33', '', ''),
(119, '2009-11-07', '', '04 06 14 18 22 36', '', ''),
(120, '2009-12-09', '', '03 07 08 28 33 38', '', ''),
(121, '2009-12-16', '', '01 12 16 17 28 34', '', ''),
(122, '2009-12-23', '', '15 18 19 22 27 28', '', ''),
(123, '2010-01-06', '', '02 05 16 23 24 34', '', ''),
(124, '2010-01-20', '', '02 09 12 24 33 38', '', ''),
(125, '2010-03-31', '', '02 04 10 20 21 30', '', ''),
(126, '2010-04-10', '', '06 09 10 20 21 22', '', ''),
(127, '2010-04-17', '', '04 05 09 13 14 31', '', ''),
(128, '2010-05-25', '', '01 04 07 16 27 37', '', ''),
(129, '2010-06-02', '', '03 10 14 19 20 22', '', ''),
(130, '2010-08-18', '', '03 04 09 13 33 34', '', ''),
(131, '2010-08-25', '', '12 14 16 19 24 29', '', ''),
(132, '2010-09-15', '', '08 09 13 23 28 33', '', ''),
(133, '2010-11-10', '', '02 05 23 27 28 38', '', ''),
(134, '2010-10-02', '', '07 10 18 22 28 38', '', ''),
(135, '2011-01-19', '', '06 14 21 22 29 37', '', ''),
(136, '2011-02-12', '', '07 09 17 22 28 37', '', ''),
(137, '2011-02-16', '', '02 09 16 27 31 38', '', ''),
(138, '2011-02-23', '', '11 12 16 21 26 28', '', ''),
(139, '2011-04-06', '', '02 11 12 20 26 27', '', ''),
(140, '2011-04-09', '', '11 12 14 15 31 33', '', ''),
(141, '2011-04-23', '', '03 16 19 28 29 33', '', ''),
(142, '2011-04-27', '', '02 03 04 16 27 38', '', ''),
(143, '2011-04-30', '', '04 06 10 15 19 36', '', ''),
(144, '2011-05-04', '', '04 10 21 24 25 30', '', ''),
(145, '2011-06-01', '', '09 12 14 21 27 32', '', ''),
(146, '2011-06-29', '', '09 10 19 22 29 38', '', ''),
(147, '2011-09-21', '', '01 02 04 08 15 22', '', ''),
(148, '2011-10-01', '', '03 06 17 19 25 28', '', ''),
(149, '2011-10-15', '', '04 05 08 13 23 38', '', ''),
(150, '2011-10-26', '', '06 09 10 15 23 24', '', ''),
(151, '2011-11-19', '', '06 10 12 15 20 30', '', ''),
(152, '2011-12-14', '', '11 13 17 22 24 30', '', ''),
(153, '2011-12-28', '', '08 09 12 19 32 35', '', ''),
(154, '2011-12-31', '', '11 13 20 25 27 30', '', ''),
(155, '2012-01-28', '', '05 06 08 09 24 27', '', ''),
(156, '2012-02-04', '', '05 11 15 18 35 37', '', ''),
(157, '2012-02-15', '', '09 14 17 18 25 27', '', ''),
(158, '2012-02-22', '', '08 09 12 18 22 32', '', ''),
(159, '2012-03-17', '', '02 04 05 21 30 37', '', ''),
(160, '2012-05-19', '', '14 19 21 27 30 36', '', ''),
(161, '2012-06-02', '', '18 26 27 31 34 36', '', ''),
(162, '2012-06-20', '', '03 07 12 22 30 37', '', ''),
(163, '2012-08-04', '', '01 08 21 22 23 32', '', ''),
(164, '2012-08-15', '', '06 12 21 25 29 30', '', ''),
(165, '2012-08-18', '', '03 07 10 16 23 29', '', ''),
(166, '2012-09-15', '', '03 05 07 15 30 36', '', ''),
(167, '2012-09-19', '', '01 06 08 12 19 06', '', ''),
(168, '2012-11-21', '', '07 11 13 20 21 38', '', ''),
(169, '2013-01-05', '', '05 06 24 31 34 35', '', ''),
(170, '2013-01-19', '', '06 07 08 19 30 37', '', ''),
(171, '2013-02-20', '', '14 17 18 19 31 33', '', ''),
(172, '2013-04-10', '', '07 10 11 17 26 28', '', ''),
(173, '2013-04-27', '', '02 08 12 16 25 26', '', ''),
(174, '2013-05-18', '', '16 17 23 25 33 38', '', ''),
(175, '2013-05-25', '', '02 04 06 10 32 37', '', ''),
(176, '2013-06-22', '', '02 03 08 15 18 26', '', ''),
(177, '2013-07-13', '', '01 19 23 26 28 37', '', ''),
(178, '2013-07-17', '', '06 13 16 23 25 37', '', ''),
(179, '2013-07-20', '', '03 16 19 27 29 31', '', ''),
(180, '2013-07-24', '', '12 13 17 22 25 28', '', ''),
(181, '2013-08-21', '', '05 09 15 17 21 34', '', ''),
(182, '2013-09-21', '', '04 08 12 17 23 26', '', ''),
(183, '2013-10-30', '', '06 13 20 27 30 31', '', ''),
(184, '2013-11-09', '', '04 09 15 23 37 38', '', ''),
(185, '2013-11-13', '', '01 04 08 09 12 28', '', ''),
(186, '2013-11-27', '', '01 04 06 08 09 17', '', ''),
(187, '2013-12-07', '', '04 06 12 13 15 21', '', ''),
(188, '2014-01-08', '', '07 11 14 21 22 24', '', ''),
(189, '2014-01-15', '', '06 13 19 24 31 33', '', ''),
(190, '2014-01-22', '', '07 14 17 25 33 37', '', ''),
(191, '2014-03-01', '', '13 14 25 30 31 32', '', ''),
(192, '2014-03-08', '', '04 06 15 18 20 28', '', ''),
(193, '2014-03-22', '', '06 09 10 20 21 27', '', ''),
(194, '2014-04-02', '', '04 07 20 25 32 38', '', ''),
(195, '2014-05-31', '', '01 07 18 20 21 23', '', ''),
(196, '2014-06-04', '', '10 12 24 27 28 34', '', ''),
(197, '2014-06-07', '', '07 08 12 13 16 26', '', ''),
(198, '2014-08-13', '', '05 08 10 20 21 27', '', ''),
(199, '2014-08-20', '', '05 13 16 28 34 36', '', ''),
(200, '2014-09-20', '', '07 12 14 22 25 30', '', ''),
(201, '2014-10-04', '', '07 10 17 18 27 29', '', ''),
(202, '2014-10-15', '', '01 04 17 18 33 38', '', ''),
(203, '2014-10-29', '', '02 04 12 21 23 26', '', ''),
(204, '2014-11-15', '', '01 13 17 23 26 33', '', ''),
(205, '2015-01-28', '', '02 05 16 20 23 26', '', ''),
(206, '2015-02-11', '', '02 05 09 18 24 38', '', ''),
(207, '2015-02-14', '', '04 05 22 29 32 35', '', ''),
(208, '2015-03-04', '', '07 10 15 19 23 26', '', ''),
(209, '2015-03-14', '', '05 06 09 24 32 37', '', ''),
(210, '2015-03-18', '', '03 09 27 29 31 35', '', ''),
(211, '2015-04-04', '', '03 07 13 19 25 27', '', ''),
(212, '2015-04-18', '', '05 07 08 11 17 28', '', ''),
(213, '2015-04-25', '', '01 02 03 04 06 30', '', ''),
(214, '2015-05-09', '', '04 10 23 25 29 34', '', ''),
(215, '2015-05-20', '', '02 10 20 29 35 36', '', ''),
(216, '2015-06-10', '', '03 16 19 20 32 36', '', ''),
(217, '2015-06-27', '', '01 11 15 20 21 30', '', ''),
(218, '2015-07-15', '', '12 17 20 25 26 33', '', ''),
(219, '2015-07-18', '', '02 05 22 28 30 31', '', ''),
(220, '2015-07-29', '', '21 26 27 28 30 36', '', ''),
(221, '2015-09-23', '', '04 08 14 25 27 29', '', ''),
(222, '2015-11-04', '', '01 04 11 28 29 36', '', ''),
(223, '2015-11-11', '', '13 17 18 30 32 33', '', ''),
(224, '2015-12-28', '', '02 04 07 12 20 29', '', ''),
(225, '2015-12-05', '', '02 10 13 18 25 27', '', ''),
(226, '2015-12-09', '', '14 15 16 20 29 31', '', ''),
(227, '2016-01-20', '', '13 19 24 29 31 38', '', ''),
(228, '2016-02-20', '', '05 16 17 22 24 28', '', ''),
(229, '2016-03-02', '', '01 03 06 09 10 16', '', ''),
(230, '2016-03-05', '', '08 11 19 25 32 34', '', ''),
(231, '2016-05-07', '', '09 17 18 25 33 37', '', ''),
(232, '2016-05-18', '', '01 02 08 09 21 27', '', ''),
(233, '2016-07-02', '', '18 25 26 34 36 38', '', ''),
(234, '2016-07-06', '', '03 08 13 14 16 23', '', ''),
(235, '2016-07-09', '', '08 12 18 22 27 33', '', ''),
(236, '2016-08-03', '', '17 20 21 22 23 24', '', ''),
(237, '2016-08-06', '', '10 17 19 28 32 36', '', ''),
(238, '2016-08-17', '', '10 17 19 28 32 36', '', ''),
(239, '2016-08-31', '', '01 02 07 19 21 28', '', ''),
(240, '2016-09-07', '', '04 06 09 14 18 26', '', ''),
(241, '2016-10-05', '', '05 08 11 16 20 30', '', ''),
(242, '2016-10-19', '', '10 13 18 24 25 30', '', ''),
(243, '2016-10-29', '', '13 19 21 22 26 37', '', ''),
(244, '2016-12-21', '', '10 11 21 23 25 32', '', ''),
(245, '2017-02-11', '', '02 03 05 06 10 16', '', ''),
(246, '2017-02-15', '', '05 08 11 17 36 38', '', ''),
(247, '2017-03-04', '', '03 29 30 31 36 38', '', ''),
(248, '2017-03-08', '', '03 06 09 21 32 37', '', ''),
(249, '2017-03-15', '', '09 11 13 15 34 36', '', ''),
(250, '2017-03-18', '', '08 18 21 29 33 35', '', ''),
(251, '2017-03-22', '', '02 16 27 29 33 36', '', ''),
(252, '2017-04-01', '', '14 19 22 28 31 33', '', ''),
(253, '2017-04-26', '', '02 13 14 19 20 26', '', ''),
(254, '2017-05-06', '', '04 15 24 26 32 36', '', ''),
(255, '2017-05-10', '', '06 15 16 24 26 35', '', ''),
(256, '2017-05-17', '', '01 06 09 27 36 38', '', ''),
(257, '2017-05-31', '', '02 05 08 22 26 34', '', ''),
(258, '2017-06-10', '', '06 15 16 25 30 36', '', ''),
(259, '2017-07-16', '', '04 12 15 21 23 34', '', ''),
(260, '2017-07-22', '', '01 13 15 16 20 30', '', ''),
(261, '2017-08-05', '', '02 05 11 19 24 35', '', ''),
(262, '2017-08-19', '', '02 10 25 29 31 32', '', ''),
(263, '2017-08-26', '', '05 12 13 27 32 36', '', ''),
(264, '2017-09-09', '', '01 06 11 18 30 38', '', ''),
(265, '2017-09-13', '', '07 09 16 21 29 31', '', ''),
(266, '2017-09-23', '', '03 13 19 24 28 30', '', ''),
(267, '2017-10-11', '', '01 02 07 12 22 34', '', ''),
(268, '2017-10-25', '', '07 09 11 29 37 38', '', ''),
(269, '2017-11-08', '', '04 13 15 25 29 35', '', ''),
(270, '2017-11-11', '', '01 04 07 13 27 28', '', ''),
(271, '2017-11-15', '', '02 08 10 11 16 17', '', ''),
(272, '2017-11-18', '', '12 14 16 19 26 27', '', ''),
(273, '2017-12-09', '', '16 22 24 26 29 37', '', ''),
(274, '2017-12-20', '', '01 05 13 15 26 32', '', ''),
(275, '2017-12-23', '', '09 15 21 24 26 31', '', ''),
(276, '2017-12-27', '', '04 10 16 25 29 31', '', ''),
(277, '2017-12-30', '', '01 06 14 16 20 23', '', ''),
(278, '2018-02-03', '', '03 10 20 24 30 37', '', ''),
(279, '2018-02-17', '', '05 11 18 20 25 27', '', ''),
(280, '2018-02-24', '', '03 07 11 21 27 32', '', ''),
(281, '2018-04-28', '', '05 10 13 18 24 30', '', ''),
(282, '2018-04-21', '', '04 15 16 19 28 30', '', ''),
(283, '2018-05-16', '', '03 13 21 30 34 37', '', ''),
(284, '2018-06-16', '', '01 07 12 15 25 35', '', ''),
(285, '2018-06-30', '', '02 07 18 26 30 33', '', ''),
(286, '2018-08-04', '', '01 12 15 18 25 37', '', ''),
(287, '2018-08-11', '', '01 02 06 08 15 19', '', ''),
(288, '2018-10-20', '', '07 18 24 25 26 35', '', ''),
(289, '2018-11-28', '', '12 18 19 20 23 28', '', ''),
(290, '2018-12-15', '', '12 14 32 34 36 37', '', ''),
(291, '2018-12-19', '', '01 05 07 13 26 36', '', ''),
(292, '2018-12-26', '', '03 05 14 21 23 30', '', ''),
(293, '2019-01-23', '', '15 19 26 32 33 36', '', ''),
(294, '2019-02-20', '', '06 08 10 11 18 31', '', ''),
(295, '2019-03-20', '', '01 03 04 09 11 18', '', ''),
(296, '2019-03-23', '', '07 11 29 31 34 37', '', ''),
(297, '2019-03-27', '', '05 17 21 31 34 36', '', ''),
(298, '2019-04-10', '', '12 15 18 23 25 31', '', ''),
(299, '2019-04-13', '', '07 09 10 21 27 28', '', ''),
(300, '2019-05-22', '', '03 09 13 23 28 30', '', ''),
(301, '2019-06-05', '', '18 22 23 28 29 38', '', ''),
(302, '2019-07-06', '', '01 19 21 24 27 38', '', ''),
(303, '2019-07-17', '', '07 12 15 18 25 36', '', ''),
(304, '2019-07-20', '', '01 04 13 16 20 22', '', ''),
(305, '2019-07-24', '', '01 03 04 10 13 28', '', ''),
(306, '2019-07-27', '', '10 11 12 28 30 37', '', ''),
(307, '2019-08-07', '', '01 08 10 22 26 37', '', ''),
(308, '2019-10-05', '', '02 08 09 11 18 28', '', ''),
(309, '2019-10-09', '', '15 16 18 22 23 30', '', ''),
(310, '2019-10-30', '', '09 14 22 25 30 38', '', ''),
(311, '2019-11-06', '', '05 11 19 22 23 26', '', ''),
(312, '2019-11-13', '', '06 08 10 12 13 20', '', ''),
(313, '2019-12-11', '', '05 12 14 24 33 35', '', ''),
(314, '2019-12-07', '', '01 04 18 24 30 36', '', ''),
(315, '2019-12-21', '', '05 12 15 24 32 37', '', ''),
(316, '2020-01-04', '', '05 08 15 18 25 30', '', ''),
(317, '2020-01-08', '', '13 14 26 27 29 30', '', ''),
(318, '2020-01-18', '', '02 03 05 10 14 20', '', ''),
(319, '2020-02-22', '', '12 14 20 25 27 37', '', ''),
(320, '2020-02-26', '', '04 06 08 11 13 38', '', ''),
(321, '2020-02-29', '', '06 13 14 24 25 29', '', ''),
(322, '2020-03-07', '', '07 09 15 20 26 27', '', ''),
(323, '2020-03-18', '', '10 12 16 19 21 24', '', ''),
(324, '2020-08-05', '1080', '02 03 13 27 36 37', '04', '13'),
(325, '2020-08-08', '1081', '01 07 10 13 32 36', '09', '13'),
(326, '2020-08-12', '1082', '03 06 14 21 25 35', '04', '01'),
(327, '2020-08-15', '1083', '02 06 08 11 27 35', '05', '12'),
(328, '2020-08-19', '1084', '01 09 11 12 17 34', '10', '07'),
(329, '2020-08-22', '1085', '04 06 07 10 16 20', '07', '09'),
(330, '2020-08-26', '1086', '01 04 08 16 19 28', '06', '05'),
(331, '2020-08-29', '1087', '01 19 21 28 35 36', '04', '01'),
(332, '2020-09-02', '1088', '01 05 18 21 28 36', '07', '11'),
(333, '2020-09-05', '1089', '01 10 16 28 34 35', '02', '14'),
(334, '2020-09-09', '1090', '02 07 08 10 27 30', '05', '14'),
(335, '2020-09-12', '1091', '05 06 09 11 19 37', '08', '06'),
(336, '2020-09-16', '1092', '03 23 27 28 31 33', '05', '02'),
(337, '2020-09-19', '1093', '05 07 10 12 28 35', '06', '02'),
(338, '2020-09-23', '1094', '02 19 26 28 30 32', '01', '06'),
(339, '2020-09-26', '1095', '04 05 11 21 31 34', '06', '02'),
(340, '2020-09-30', '1096', '11 15 16 20 29 31', '04', '04'),
(341, '2020-10-03', '1097', '17 18 26 27 34 36', '06', '14'),
(342, '2020-10-07', '1098', '03 05 10 26 28 29', '07', '11'),
(343, '2020-10-10', '1099', '07 12 15 17 18 31', '09', '07'),
(344, '2020-10-14', '1100', '02 07 16 26 28 34', '01', '03'),
(345, '2020-10-17', '1101', '02 05 11 12 31 34', '07', '04'),
(346, '2020-10-21', '1102', '15 20 23 28 30 34', '09', '08'),
(347, '2020-10-24', '1103', '04 08 21 26 28 30', '10', '12'),
(348, '2020-10-28', '1104', '03 09 10 25 28 33', '10', '14'),
(349, '2020-10-31', '1105', '16 26 27 28 37 38', '01', '05'),
(350, '2020-11-04', '1106', '09 12 24 28 36 37', '05', '02'),
(351, '2020-11-07', '1107', '03 05 11 24 31 33', '04', '07'),
(352, '2020-11-11', '1108', '02 08 12 23 31 37', '05', '15'),
(353, '2020-11-14', '1109', '05 13 14 17 25 35', '05', '13'),
(354, '2020-11-18', '1110', '05 07 18 24 26 37', '05', '06'),
(355, '2020-11-21', '1111', '02 11 15 16 27 38', '04', '05'),
(356, '2020-11-25', '1112', '01 10 18 25 33 36', '05', '02'),
(357, '2020-11-28', '1113', '04 05 11 15 33 34', '05', '01'),
(358, '2020-12-02', '1114', '05 06 07 11 22 25', '01', '08'),
(359, '2020-12-05', '1115', '01 08 09 10 24 28', '07', '15'),
(360, '2020-12-09', '1116', '13 14 17 21 29 32', '05', '13'),
(361, '2020-12-12', '1117', '02 10 11 22 26 29', '05', '12'),
(362, '2020-12-16', '1118', '04 18 25 26 32 35', '06', '13'),
(363, '2020-12-19', '1119', '15 18 19 24 25 27', '02', '05'),
(364, '2020-12-23', '1120', '08 11 20 28 34 37', '05', '12'),
(365, '2020-12-26', '1121', '17 18 25 29 36 37', '09', '11'),
(366, '2020-12-30', '1122', '02 06 12 19 22 25', '09', '05'),
(367, '2021-01-02', '1123', '01 03 06 22 24 30', '03', '07'),
(368, '2021-01-06', '1124', '02 04 22 25 26 36', '10', '13'),
(369, '2021-01-09', '1125', '06 07 09 14 26 31', '06', '08'),
(370, '2021-01-13', '1126', '03 06 15 20 21 25', '09', '03'),
(371, '2021-01-16', '1127', '07 13 14 16 28 30', '04', '07'),
(372, '2021-01-20', '1128', '01 04 09 14 15 27', '02', '01'),
(373, '2021-01-23', '1129', '14 15 20 25 35 38', '03', '10'),
(374, '2021-01-27', '1130', '07 22 30 31 33 38', '09', '06'),
(375, '2021-01-30', '1131', '01 27 31 33 36 37', '10', '04'),
(376, '2021-02-03', '1132', '01 11 14 21 29 32', '05', '10'),
(377, '2021-02-06', '1133', '03 06 07 12 30 34', '04', '05'),
(378, '2021-02-10', '1134', '04 05 24 31 32 36', '10', '04'),
(379, '2021-02-13', '1135', '16 19 20 24 26 28', '03', '07'),
(380, '2021-02-17', '1136', '01 06 13 17 18 25', '01', '15'),
(381, '2021-02-20', '1137', '01 03 06 12 13 15', '09', '03'),
(382, '2021-02-24', '1138', '06 19 24 30 31 33', '03', '03'),
(383, '2021-02-27', '1139', '05 06 10 33 35 36', '05', '08'),
(384, '2021-03-03', '1140', '01 06 09 18 33 34', '10', '06'),
(385, '2021-03-06', '1141', '08 17 32 33 35 37', '06', '08'),
(386, '2021-03-10', '1142', '02 05 10 13 22 24', '09', '10'),
(387, '2021-03-13', '1143', '04 09 11 27 29 31', '01', '06'),
(388, '2021-03-17', '1144', '13 15 25 26 35 36', '10', '05'),
(389, '2021-03-20', '1145', '03 05 06 07 17 22', '07', '13'),
(390, '2021-03-24', '1146', '05 17 22 28 29 34', '10', '01'),
(391, '2021-03-27', '1147', '15 21 22 30 37 38', '05', '02'),
(392, '2021-03-31', '1148', '07 08 21 27 29 32', '04', '06'),
(393, '2021-04-03', '1149', '02 13 19 22 25 31', '05', '13'),
(394, '2021-04-07', '1150', '05 11 18 24 26 36', '09', '11'),
(395, '2021-04-10', '1151', '09 10 11 15 24 35', '02', '03'),
(396, '2021-04-14', '1152', '03 05 07 14 36 37', '02', '11'),
(397, '2021-04-17', '1153', '07 11 27 32 37 38', '06', '14'),
(398, '2021-04-21', '1154', '01 07 08 10 14 16', '07', '06');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `HistorialCoincidente`
--
ALTER TABLE `HistorialCoincidente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nHistorial`
--
ALTER TABLE `Historial`
  ADD PRIMARY KEY (`nID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `HistorialCoincidente`
--
ALTER TABLE `HistorialCoincidente`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nHistorial`
--
ALTER TABLE `Historial`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=399;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
