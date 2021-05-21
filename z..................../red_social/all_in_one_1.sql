-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-04-2021 a las 00:19:49
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
-- Base de datos: `all_in_one`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Admin`
--

CREATE TABLE `Admin` (
  `id` bigint(20) NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `apellido` text COLLATE utf8_unicode_ci NOT NULL,
  `correo` text COLLATE utf8_unicode_ci NOT NULL,
  `codigo` text COLLATE utf8_unicode_ci NOT NULL,
  `rol` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Admin`
--

INSERT INTO `Admin` (`id`, `nombre`, `apellido`, `correo`, `codigo`, `rol`) VALUES
(1, 'Neury Eleasar', 'Aguasvivas Lorenzo', 'eleasar0991@gmail.com', 'admin', 'Propietario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Amigos`
--

CREATE TABLE `Amigos` (
  `id` int(11) NOT NULL,
  `yo` text COLLATE utf8_unicode_ci NOT NULL,
  `usuario` text COLLATE utf8_unicode_ci NOT NULL,
  `amigos` text COLLATE utf8_unicode_ci NOT NULL,
  `fechaIniciada` datetime NOT NULL,
  `fechaFinalizada` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Amigos`
--

INSERT INTO `Amigos` (`id`, `yo`, `usuario`, `amigos`, `fechaIniciada`, `fechaFinalizada`) VALUES
(14, '4', '5', 'Conocido', '2021-04-10 16:48:45', NULL),
(19, '1', '4', 'Conocido', '2021-04-10 18:21:02', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Articulos`
--

CREATE TABLE `Articulos` (
  `id` bigint(20) NOT NULL,
  `categoria` text COLLATE utf8_unicode_ci NOT NULL,
  `subCategoria` text COLLATE utf8_unicode_ci NOT NULL,
  `marca` text COLLATE utf8_unicode_ci NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `color` text COLLATE utf8_unicode_ci NOT NULL,
  `talla` text COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `costo` decimal(65,2) NOT NULL,
  `cantidad` bigint(20) NOT NULL,
  `precio` decimal(65,2) NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Articulos`
--

INSERT INTO `Articulos` (`id`, `categoria`, `subCategoria`, `marca`, `nombre`, `color`, `talla`, `descripcion`, `costo`, `cantidad`, `precio`, `imagen`) VALUES
(1, 'Femenido', 'Mujer', 'Levi\'s', 'Selección mujer uno', 'Azul', 'Grande', 'Descripción', '1400.00', 23, '1750.00', 'Femenino-mujer-1.jpg'),
(2, 'Femenido', 'Mujer', 'Levi\'s', 'Selección mujer dos', 'Azul', 'Grande', 'Descripción', '1400.00', 20, '1750.00', 'Femenino-mujer-2.jpg'),
(3, 'Masculino', 'Hombre', 'APC', 'Selección hombre uno', 'Azul', 'Grande', 'Descripción', '535.00', 45, '668.75', 'pikwizard-be7daf4888e17830c0106cac62372abd.jpg'),
(13, 'Masculino', 'Hombre', 'Prada', 'Selección hombre uno', 'Negro', 'Mediana', 'Descripción', '535.00', 45, '668.75', 'pikwizard-1cc72f22aa8eae0c4472e4e4cfac406e.jpg'),
(14, 'Masculino', 'Hombre', 'Prada', 'fsfsf', 'Azul', 'Mediana', '', '5345.00', 45, '6681.25', 'pikwizard-8b429d3ef4bcb6b8afba000a259ed318.jpg'),
(15, 'Masculino', 'Hombre', 'APC', 'uykyk', 'Azul', 'Small', 'hfh', '6757.00', 7657, '8446.25', 'pikwizard-0399630b04d44c5c3bc9ebb9e77e1d75.jpg'),
(16, 'Masculino', 'Chico', 'Tom Ford', 'oñ', 'Negro', 'Small', '', '98.00', 98, '122.50', 'pikwizard-d296a762f780cbc86eda704a848f30d3.jpg'),
(17, 'Masculino', 'Hombre', 'APC', 'fsdfs', 'Negro', 'Small', '', '453.00', 543, '566.25', 'pikwizard-97ac533815e69dee15c56b5b3637da03.jpg'),
(18, 'Masculino', 'Hombre', 'APC', 'fsdfs', 'Azul', 'Small', '', '453.00', 543, '566.25', 'pikwizard-97ac533815e69dee15c56b5b3637da03.jpg'),
(19, 'Masculino', 'Hombre', 'APC', 'fsfsf', 'Azul', 'Small', '', '453.00', 543, '566.25', 'pikwizard-ed7126dcb16b79c73a1364ab0590d55e.jpg'),
(20, 'Masculino', 'Hombre', 'APC', 'fsdf', 'Negro', 'Small', '', '54.00', 5, '67.50', 'pikwizard-be7daf4888e17830c0106cac62372abd.jpg'),
(21, 'Masculino', 'Chico', 'Acne Studios', 'kpḱp', 'Negro', 'Mediana', 'ḱlñklñ', '56.00', 2, '70.00', 'Femenino-mujer-2.jpg'),
(22, 'Masculino', 'Hombre', 'AG Jeans', 'zapato seleccion uno', 'Blanco', 'Mediana', 'De lana refinada', '3000.00', 10, '3750.00', 'zapato-1.jpg'),
(23, 'Masculino', 'Hombre', 'APC', 'bvbn', 'Azul', 'Small', 'fd', '524.00', 44, '655.00', 'pikwizard-ff5d4ae632a116619c46e2728dbf9a9a.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Boletines`
--

CREATE TABLE `Boletines` (
  `id` bigint(20) NOT NULL,
  `suscriptor` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Boletines`
--

INSERT INTO `Boletines` (`id`, `suscriptor`) VALUES
(1, 'neury@email.com'),
(2, 'eleasar@email.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Compartidas`
--

CREATE TABLE `Compartidas` (
  `id` bigint(20) NOT NULL,
  `yo` text COLLATE utf8_unicode_ci NOT NULL,
  `usuario` text COLLATE utf8_unicode_ci NOT NULL,
  `publicacion` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Compartidas`
--

INSERT INTO `Compartidas` (`id`, `yo`, `usuario`, `publicacion`, `fecha`) VALUES
(6, '2', '2', '4', '2021-04-13 18:14:41'),
(9, '2', '1', '1', '2021-04-13 18:14:55'),
(11, '2', '5', '7', '2021-04-13 18:16:52'),
(12, '2', '1', '3', '2021-04-13 18:17:11'),
(13, '2', '2', '2', '2021-04-13 18:17:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Gusta`
--

CREATE TABLE `Gusta` (
  `id` bigint(20) NOT NULL,
  `usuarioSi` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `publicacionSi` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `fechaSiIniciada` datetime DEFAULT NULL,
  `fechaSiFinalizada` datetime DEFAULT NULL,
  `usuarioNo` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `publicacionNo` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `fechaNoIniciada` datetime DEFAULT NULL,
  `fechaNoFinalizada` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Gusta`
--

INSERT INTO `Gusta` (`id`, `usuarioSi`, `publicacionSi`, `fechaSiIniciada`, `fechaSiFinalizada`, `usuarioNo`, `publicacionNo`, `fechaNoIniciada`, `fechaNoFinalizada`) VALUES
(205, '2', '7', '2021-04-13 17:54:58', NULL, NULL, NULL, NULL, NULL),
(206, NULL, NULL, NULL, NULL, '2', '6', '2021-04-13 17:55:01', NULL),
(207, '2', '5', '2021-04-13 17:55:05', NULL, '2', '5', '2021-04-13 17:55:06', NULL),
(209, '2', '2', '2021-04-13 18:17:16', NULL, '2', '2', '2021-04-13 18:14:49', NULL),
(210, '2', '1', '2021-04-13 18:17:18', NULL, '2', '1', '2021-04-13 18:14:54', NULL),
(211, NULL, NULL, NULL, NULL, '2', '4', '2021-04-13 18:16:59', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Imagenes`
--

CREATE TABLE `Imagenes` (
  `id` bigint(20) NOT NULL,
  `idUsuario` bigint(20) NOT NULL,
  `idPublicacion` text COLLATE utf8_unicode_ci NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Imagenes`
--

INSERT INTO `Imagenes` (`id`, `idUsuario`, `idPublicacion`, `imagen`, `fecha`) VALUES
(1, 1, '1', 'ID--NAME-CBC434.jpg', '2021-01-02 00:15:00'),
(2, 2, '2', 'ID--NAME-CEBE80.jpg', '2021-01-02 00:15:12'),
(3, 1, '3', 'ID--NAME-DD6F27.jpg', '2021-01-04 14:36:40'),
(4, 2, '4', 'ID--NAME-706B1B.jpg', '2021-01-05 20:06:35'),
(5, 3, '5', 'ID--NAME-5D244D.jpg', '2021-04-10 11:35:45'),
(6, 4, '6', 'ID--NAME-29CFCC.jpg', '2021-04-10 11:43:03'),
(7, 5, '7', 'ID--NAME-248261.jpg', '2021-04-12 10:10:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Publicaciones`
--

CREATE TABLE `Publicaciones` (
  `id` bigint(20) NOT NULL,
  `idUsuario` bigint(20) NOT NULL,
  `publicacion` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `gustaSi` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `gustaNo` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `compartida` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Publicaciones`
--

INSERT INTO `Publicaciones` (`id`, `idUsuario`, `publicacion`, `fecha`, `gustaSi`, `gustaNo`, `compartida`) VALUES
(1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', '2021-01-02 00:15:00', '1', '1', '1'),
(2, 2, '2222222222222222222Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', '2021-01-02 00:15:11', '1', '1', '1'),
(3, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ', '2021-01-04 14:36:40', '0', '0', '1'),
(4, 2, '2222222222222222222Lorem ipsum dolor ', '2021-01-05 20:06:35', '0', '1', '1'),
(5, 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ', '2021-04-10 11:35:45', '1', '1', '0'),
(6, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ', '2021-04-10 11:43:02', '0', '1', '0'),
(7, 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '2021-04-12 10:10:52', '1', '0', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SistemaPHP`
--

CREATE TABLE `SistemaPHP` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `marca` text COLLATE utf8_unicode_ci NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `precio` decimal(65,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `SistemaPHP`
--

INSERT INTO `SistemaPHP` (`id`, `fecha`, `hora`, `marca`, `nombre`, `precio`) VALUES
(32, '0000-00-00', '00:00:00', 'f', 's', '2.00'),
(33, '0000-00-00', '00:00:00', 'sf', 'sfs', '2.00'),
(34, '0000-00-00', '00:00:00', 'Marca 34', 'Nombre 34', '2352345.00'),
(45, '0000-00-00', '00:00:00', 'a', 'u', '75272.00'),
(46, '0000-00-00', '00:00:00', 'e', 'o', '3857.00'),
(47, '0000-00-00', '00:00:00', 'i', 'i', '752727.00'),
(54, '2020-12-03', '22:51:17', 'o', 'e', '34556.00'),
(57, '2020-12-04', '15:33:00', 'u', 'a', '345.00'),
(58, '2020-12-04', '15:35:27', 'A', 'Z', '3454.00'),
(59, '2020-12-04', '15:35:57', 'B', 'Y', '345.00'),
(60, '2020-12-04', '15:37:16', 'C', 'X', '7896789.00'),
(61, '2020-12-04', '15:46:17', 'D', 'W', '4856.00'),
(62, '2020-12-04', '15:49:44', 'E', 'V', '3455.00'),
(63, '2020-12-04', '16:05:19', 'F', 'U', '2455.00'),
(64, '2020-12-04', '19:59:52', 'G', 'T', '3456.00'),
(65, '2020-12-04', '22:18:00', 'H', 'S', '87656.00'),
(66, '2020-12-05', '03:32:01', 'I', 'R', '64564.00'),
(67, '2020-12-05', '03:40:06', 'J', 'Q', '54353.00'),
(68, '2020-12-05', '03:44:15', 'K', 'P', '96796.00'),
(69, '2020-12-05', '03:44:46', 'L', 'O', '5677.00'),
(70, '2020-12-05', '03:46:58', 'Ñ', 'Ñ', '7657.00'),
(71, '2020-12-05', '03:48:38', 'N', 'N', '6544.00'),
(72, '2020-12-05', '03:50:19', 'M', 'M', '5467.00'),
(73, '2020-12-05', '03:54:26', 'O', 'L', '7544.00'),
(74, '2020-12-05', '03:56:40', 'P', 'K', '6234.00'),
(75, '2020-12-05', '03:58:44', 'Q', 'J', '27842.00'),
(76, '2020-12-05', '03:58:44', 'R', 'I', '27842.00'),
(77, '2020-12-05', '04:03:38', 'S', 'H', '8657.00'),
(78, '2020-12-05', '04:04:20', 'T', 'G', '34667.00'),
(79, '2020-12-05', '04:04:37', 'U', 'F', '8785.00'),
(80, '2020-12-05', '06:00:03', 'V', 'E', '873945.00'),
(81, '2020-12-05', '06:04:10', 'W', 'D', '498234.00'),
(82, '2020-12-05', '06:11:09', 'X', 'C', '6363.00'),
(83, '2020-12-05', '06:11:22', 'Y', 'B', '9075.00'),
(84, '2020-12-05', '06:11:34', 'Z', 'A', '9834.00'),
(85, '2020-12-05', '14:22:40', 'aa', 'aa', '90345.00'),
(86, '2020-12-05', '22:36:19', 'bb', 'bb', '4832.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Suscriptores`
--

CREATE TABLE `Suscriptores` (
  `id` bigint(20) NOT NULL,
  `suscriptor` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Suscriptores`
--

INSERT INTO `Suscriptores` (`id`, `suscriptor`) VALUES
(1, 'neury@email.com'),
(2, 'aguasvivas@email.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Transaccion`
--

CREATE TABLE `Transaccion` (
  `id` int(11) NOT NULL,
  `idDeCliente` int(11) NOT NULL,
  `idDeTransaccion` text COLLATE utf8_unicode_ci NOT NULL,
  `idDelPagador` text COLLATE utf8_unicode_ci NOT NULL,
  `nombreCompleto` text COLLATE utf8_unicode_ci NOT NULL,
  `correo` text COLLATE utf8_unicode_ci NOT NULL,
  `celular` text COLLATE utf8_unicode_ci NOT NULL,
  `paymentToken` text COLLATE utf8_unicode_ci NOT NULL,
  `paymentID` text COLLATE utf8_unicode_ci NOT NULL,
  `accessToken` text COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `estadoDeTransaccion` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `subTotal` decimal(65,2) NOT NULL,
  `impuesto` decimal(65,2) NOT NULL,
  `envio` decimal(65,2) NOT NULL,
  `descuento` decimal(65,2) NOT NULL,
  `total` decimal(65,2) NOT NULL,
  `linea` text COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` text COLLATE utf8_unicode_ci NOT NULL,
  `estado` text COLLATE utf8_unicode_ci NOT NULL,
  `codigoPostal` text COLLATE utf8_unicode_ci NOT NULL,
  `codigoDePais` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `id` bigint(20) NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `apellido` text COLLATE utf8_unicode_ci NOT NULL,
  `nacimiento` date NOT NULL,
  `correo` text COLLATE utf8_unicode_ci NOT NULL,
  `codigo` text COLLATE utf8_unicode_ci NOT NULL,
  `numero` text COLLATE utf8_unicode_ci NOT NULL,
  `sexo` text COLLATE utf8_unicode_ci NOT NULL,
  `estado` text COLLATE utf8_unicode_ci NOT NULL,
  `pais` text COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `foto` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`id`, `nombre`, `apellido`, `nacimiento`, `correo`, `codigo`, `numero`, `sexo`, `estado`, `pais`, `ciudad`, `fecha`, `foto`) VALUES
(1, 'Neury', 'Doe', '2020-01-01', 'neury@email.com', 'neury', '809 000 0000', 'Femenina', 'Soltera', 'RD', 'SD', '2021-01-01 16:47:03', 'avatar3.png'),
(2, 'Eleasar', 'Doe', '2020-01-01', 'eleasar@email.com', 'neury', '809 000 0000', 'Femenina', 'Soltera', 'RD', 'SD', '2021-01-04 17:08:53', 'avatar3.png'),
(3, 'Aguasvivas', 'Doe', '2001-01-01', 'aguasvivas@email.com', 'neury', '809 000 0000', 'Femenina', 'Soltera', 'RD', 'SD', '2021-01-05 21:28:10', 'avatar3.png'),
(4, 'Lorenzo', 'Doe', '2001-01-01', 'lorenzo@email.com', 'neury', '809 000 0000', 'Femenina', 'Soltera', 'RD', 'SD', '2021-04-09 17:14:50', 'avatar3.png'),
(5, 'Mujer', 'Doe', '2001-01-01', 'mujer@email.com', 'neury', '809 000 0000', 'Femenina', 'Soltera', 'RD', 'SD', '2021-04-09 17:16:25', 'avatar.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ventas`
--

CREATE TABLE `Ventas` (
  `id` int(11) NOT NULL,
  `idDeCliente` int(11) NOT NULL,
  `idDeTransaccion` text COLLATE utf8_unicode_ci NOT NULL,
  `payPalDatos` text COLLATE utf8_unicode_ci NOT NULL,
  `total` decimal(65,2) NOT NULL,
  `correo` text COLLATE utf8_unicode_ci NOT NULL,
  `estado` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `VentasInformacion`
--

CREATE TABLE `VentasInformacion` (
  `id` int(11) NOT NULL,
  `idVenta` int(11) NOT NULL,
  `idArticulo` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precioUnitario` decimal(65,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Amigos`
--
ALTER TABLE `Amigos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Articulos`
--
ALTER TABLE `Articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Boletines`
--
ALTER TABLE `Boletines`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `suscriptor` (`suscriptor`) USING HASH;

--
-- Indices de la tabla `Compartidas`
--
ALTER TABLE `Compartidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Gusta`
--
ALTER TABLE `Gusta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Imagenes`
--
ALTER TABLE `Imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Publicaciones`
--
ALTER TABLE `Publicaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `SistemaPHP`
--
ALTER TABLE `SistemaPHP`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Suscriptores`
--
ALTER TABLE `Suscriptores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `suscriptor` (`suscriptor`) USING HASH;

--
-- Indices de la tabla `Transaccion`
--
ALTER TABLE `Transaccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Ventas`
--
ALTER TABLE `Ventas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `VentasInformacion`
--
ALTER TABLE `VentasInformacion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Admin`
--
ALTER TABLE `Admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Amigos`
--
ALTER TABLE `Amigos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `Articulos`
--
ALTER TABLE `Articulos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `Boletines`
--
ALTER TABLE `Boletines`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `Compartidas`
--
ALTER TABLE `Compartidas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `Gusta`
--
ALTER TABLE `Gusta`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT de la tabla `Imagenes`
--
ALTER TABLE `Imagenes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `Publicaciones`
--
ALTER TABLE `Publicaciones`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `SistemaPHP`
--
ALTER TABLE `SistemaPHP`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de la tabla `Suscriptores`
--
ALTER TABLE `Suscriptores`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `Transaccion`
--
ALTER TABLE `Transaccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `Ventas`
--
ALTER TABLE `Ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `VentasInformacion`
--
ALTER TABLE `VentasInformacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
