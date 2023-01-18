-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 05-09-2021 a las 08:12:39
-- Versión del servidor: 10.3.31-MariaDB-cll-lve
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sgbcolom_holiday`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociados`
--

CREATE TABLE `asociados` (
  `id` int(10) NOT NULL,
  `name_apellido` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `msj` text DEFAULT NULL,
  `fechaRegister` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asociados`
--

INSERT INTO `asociados` (`id`, `name_apellido`, `phone`, `email`, `msj`, `fechaRegister`) VALUES
(13, 'Urian Viera', '1234567', 'urian@gmail.com', 'Estoy probando el formulario de registro para Asociado. ', ' 16-06-2021 12:20 PM'),
(25, 'Urian Viera', '9999999', 'demo@gmail.com', 'hola estoy probando. ', ' 24-06-2021 04:06 PM'),
(26, 'd', '43', 'u@gmail.com', 'h ', ' 25-06-2021 04:24 PM'),
(27, 'urian viera', '3424234', 'hola@gmail.com', ' hola es una prueba.', ' 25-06-2021 04:34 PM'),
(28, 'DonaldHat', '83377815528', 'no-replyendundebounk@gmail.com', 'Good day!  holidaytys.co \r\n \r\nDid you know that it is possible to send business proposal perfectly legal? \r\nWe put a new legal method of sending appeal through feedback forms. Such forms are located on many sites. \r\nWhen such commercial offers are sent, no personal data is used, and messages are sent to forms specifically designed to receive messages and appeals. \r\nalso, messages sent through contact Forms do not get into spam because such messages are considered important. \r\nWe offer you to test our service for free. We will send up to 50,000 messages for you. \r\nThe cost of sending one million messages is 49 USD. \r\n \r\nThis offer is created automatically. Please use the contact details below to contact us. \r\n \r\nContact us. \r\nTelegram - @FeedbackMessages \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693', ' 01-08-2021 12:40 PM');

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
(1, 'bannerWeb/11_11_09_am.jpeg', 'bannerWeb/10_19_37_am.jpg', 'bannerWeb/09_50_24_pm.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(10) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `imgCurso` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `title`, `description`, `imgCurso`) VALUES
(1, 'Ingles', 'Los mejores profesores y academia, para que puedas aprender en el menor tiempo.', 'FotosCursos/08_21_47_pm.jpg'),
(2, 'Frances', 'Contamos con profesores del idioma nativo.', 'FotosCursos/08_22_17_pm.jpg'),
(3, 'Japones', 'Contamos con profesores del idioma nativo.', 'FotosCursos/studyJapones.jpg'),
(5, 'PortuguÃ©s', '                                  Contamos con profesores del idioma nativo.                                ', 'FotosCursos/08_23_23_pm.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinos`
--

CREATE TABLE `destinos` (
  `id` int(10) NOT NULL,
  `tipo_destino` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `pais` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `city` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `precio` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `foto` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `destinos`
--

INSERT INTO `destinos` (`id`, `tipo_destino`, `pais`, `city`, `precio`, `foto`) VALUES
(14, 'Nacional', 'Colombia', 'Cartagena', 'Desde $850.000', 'FotosDestinos/Nacionales/06_14_47_pm.jpg'),
(15, 'Nacional', 'Colombia', 'San AndrÃ©s', 'Desde $990.000', 'FotosDestinos/Nacionales/06_15_23_pm.jpg'),
(16, 'Nacional', 'Colombia', 'Santa Marta', 'Desde $700.000', 'FotosDestinos/Nacionales/10_40_34_am.jpg'),
(17, 'Nacional', 'Colombia', 'Eje Cafetero', 'Desde $ 689.000', 'FotosDestinos/Nacionales/10_43_38_am.jpg'),
(18, 'Nacional', 'Colombia', 'Desierto de la Tatacoa', '199.800', 'FotosDestinos/Nacionales/10_44_43_am.png'),
(19, 'Nacional', 'Colombia', 'Kuala Melgar', 'Desde $150.000', 'FotosDestinos/Nacionales/06_20_00_pm.jpg'),
(20, 'Nacional', 'Colombia', 'MedellÃ­n', 'Desde $90.000', 'FotosDestinos/Nacionales/10_49_15_am.jpg'),
(21, 'Internacional', '', 'Noche de muertos- MÃ©xico ', 'Desde $2.800.000', 'FotosDestinos/Internacionales/11_57_01_am.jpg'),
(22, 'Internacional', '', 'Paris', 'Desde $6.000.000', 'FotosDestinos/Internacionales/06_31_42_pm.jpg'),
(23, 'Internacional', '', 'TurquÃ­a', 'Desde $4.800.000', 'FotosDestinos/Internacionales/06_32_34_pm.jpg'),
(24, 'Internacional', '', 'CancÃºn', 'Desde $1.999.000', 'FotosDestinos/Internacionales/06_32_56_pm.jpg'),
(25, 'Internacional', '', 'PerÃº', 'Desde $3.200.000', 'FotosDestinos/Internacionales/06_33_17_pm.jpg'),
(26, 'Internacional', '', 'Orlando', 'Desde $1.500.000', 'FotosDestinos/Internacionales/06_33_35_pm.jpg'),
(27, 'Internacional', '', 'New York', 'Desde $800.000', 'FotosDestinos/Internacionales/06_33_58_pm.jpg'),
(28, 'Internacional', '', 'PanamÃ¡-Playa Cuidad', 'Desde $1.900.000', 'FotosDestinos/Internacionales/06_36_38_pm.jpg'),
(31, 'Nacional', 'Colombia', 'Villeta', '140.000 Por pareja ', 'FotosDestinos/Nacionales/05_34_34_pm.jpg'),
(32, 'Internacional', '', 'Punta Cana', 'Desde $2.950.000', 'FotosDestinos/Internacionales/05_48_37_pm.jpg');

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
(1, 'logoWeb/12_17_39_pm.jpg');

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
(1, 'ServiciosPdf/01_01_46_pm.pdf', 'Servicios'),
(2, 'ServiciosPdf/01_09_32_pm.pdf', 'Precios de los Destinos'),
(3, 'ServiciosPdf/12_14_30_pm.pdf', 'Precios para Asociados');

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
(12, 'Urian Viera', 'aiamdeveloper86@gmail.com', '123', '11-05-2021'),
(15, 'HoliDay', 'holiday@gmail.com', '2021', NULL);

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
(13, 'https://www.youtube.com/embed/o6kd6-jEGE8', 'Pagina Principal'),
(15, 'https://www.youtube.com/embed/QiP69kOKpMw', 'Experiencias'),
(18, 'https://www.youtube.com/embed/22TVKzuE7lI', 'Pagina Principal');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asociados`
--
ALTER TABLE `asociados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
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
-- AUTO_INCREMENT de la tabla `asociados`
--
ALTER TABLE `asociados`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `destinos`
--
ALTER TABLE `destinos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
