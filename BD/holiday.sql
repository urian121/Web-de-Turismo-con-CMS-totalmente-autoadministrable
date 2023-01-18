-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2021 a las 01:51:20
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `holiday`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `id` int(10) NOT NULL,
  `bannerOne` varchar(100) DEFAULT NULL,
  `bannerTwo` varchar(100) DEFAULT NULL,
  `bannerThree` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `bannerOne`, `bannerTwo`, `bannerThree`) VALUES
(1, 'bannerWeb/11_11_09_am.jpeg', 'bannerWeb/01_15_45_pm.jpg', 'bannerWeb/01_15_24_pm.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinos`
--

CREATE TABLE `destinos` (
  `id` int(10) NOT NULL,
  `tipo_destino` varchar(50) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `precio` varchar(50) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `destinos`
--

INSERT INTO `destinos` (`id`, `tipo_destino`, `pais`, `city`, `precio`, `foto`) VALUES
(14, 'Nacional', 'Colombia', 'Cartagena', '1.200.000', 'FotosDestinos/Nacionales/06_14_47_pm.jpg'),
(15, 'Nacional', 'Colombia', 'San Andrés', '1.200.000', 'FotosDestinos/Nacionales/06_15_23_pm.jpg'),
(16, 'Nacional', 'Colombia', 'Santa Marta', '1´050.000', 'FotosDestinos/Nacionales/06_15_58_pm.jpg'),
(17, 'Nacional', 'Colombia', 'Eje Cafetero', '900.000', 'FotosDestinos/Nacionales/06_16_39_pm.jpg'),
(18, 'Nacional', 'Colombia', 'Desierto de la Tatacoa', '289.000', 'FotosDestinos/Nacionales/06_18_41_pm.jpg'),
(19, 'Nacional', 'Colombia', 'Kuala Melgar', '150.000', 'FotosDestinos/Nacionales/06_20_00_pm.jpg'),
(20, 'Nacional', 'Colombia', 'Medellín', '1.200.000', 'FotosDestinos/Nacionales/06_22_24_pm.jpg'),
(21, 'Internacional', '', 'Noche de muertos México ', '3.300.000', 'FotosDestinos/Internacionales/06_28_28_pm.jpg'),
(22, 'Internacional', '', 'Paris', '3.300.000', 'FotosDestinos/Internacionales/06_31_42_pm.jpg'),
(23, 'Internacional', '', 'Turquía', '3.300.000', 'FotosDestinos/Internacionales/06_32_34_pm.jpg'),
(24, 'Internacional', '', 'Cancún', '3.300.000', 'FotosDestinos/Internacionales/06_32_56_pm.jpg'),
(25, 'Internacional', '', 'Perú', '3.300.000', 'FotosDestinos/Internacionales/06_33_17_pm.jpg'),
(26, 'Internacional', '', 'Orlando', '3.300.000', 'FotosDestinos/Internacionales/06_33_35_pm.jpg'),
(27, 'Internacional', '', 'New York', '3.300.000', 'FotosDestinos/Internacionales/06_33_58_pm.jpg'),
(28, 'Internacional', 'Panamá ', 'Playa Cuidad', '2.600.000', 'FotosDestinos/Internacionales/06_36_38_pm.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiencias`
--

CREATE TABLE `experiencias` (
  `id` int(10) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `fotoCliente` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `experiencias`
--

INSERT INTO `experiencias` (`id`, `nombre`, `fotoCliente`) VALUES
(1, NULL, 'fotos_experiencias/1.jpg'),
(2, NULL, 'fotos_experiencias/2.jpg'),
(3, NULL, 'fotos_experiencias/3.jpg'),
(4, NULL, 'fotos_experiencias/4.jpg'),
(5, NULL, 'fotos_experiencias/5.jpg'),
(6, NULL, 'fotos_experiencias/6.jpg'),
(7, NULL, 'fotos_experiencias/7.jpg'),
(8, NULL, 'fotos_experiencias/8.jpg'),
(9, NULL, 'fotos_experiencias/9.jpg'),
(10, NULL, 'fotos_experiencias/10.jpg'),
(11, NULL, 'fotos_experiencias/12.jpg'),
(12, NULL, 'fotos_experiencias/13.jpg'),
(13, NULL, 'fotos_experiencias/14.jpg'),
(14, NULL, 'fotos_experiencias/15.jpg'),
(15, NULL, 'fotos_experiencias/16.jpg'),
(17, NULL, 'fotos_experiencias/11.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logo`
--

CREATE TABLE `logo` (
  `id` int(10) NOT NULL,
  `logo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `logo`
--

INSERT INTO `logo` (`id`, `logo`) VALUES
(1, 'logoWeb/11_10_18_am.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pdfs`
--

CREATE TABLE `pdfs` (
  `id` int(10) NOT NULL,
  `url_pdf` text DEFAULT NULL,
  `namePDF` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pdfs`
--

INSERT INTO `pdfs` (`id`, `url_pdf`, `namePDF`) VALUES
(1, 'ServiciosPdf/07_36_35_pm.pdf', 'Servicios'),
(2, 'ServiciosPdf/2.pdf', 'Precios de los Destinos'),
(3, 'ServiciosPdf/07_39_50_pm.pdf', 'Precios para Asociados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fullName` varchar(250) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `fechaRegistro` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `fullName`, `email`, `password`, `fechaRegistro`) VALUES
(12, 'Urian Viera', 'urian@gmail.com', '123', '11-05-2021');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(10) NOT NULL,
  `urlVideo` text DEFAULT NULL,
  `seccion` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `urlVideo`, `seccion`) VALUES
(11, 'https://www.youtube.com/embed/wSyWwokJ2pM', 'Experiencias'),
(12, 'https://www.youtube.com/embed/QiP69kOKpMw', 'Pagina Principal'),
(13, 'https://www.youtube.com/embed/o6kd6-jEGE8', 'Pagina Principal'),
(14, 'https://www.youtube.com/embed/CFPLIaMpGrY', 'Experiencias'),
(15, 'https://www.youtube.com/embed/QiP69kOKpMw', 'Experiencias');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `destinos`
--
ALTER TABLE `destinos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `experiencias`
--
ALTER TABLE `experiencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pdfs`
--
ALTER TABLE `pdfs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `destinos`
--
ALTER TABLE `destinos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `experiencias`
--
ALTER TABLE `experiencias`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pdfs`
--
ALTER TABLE `pdfs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
