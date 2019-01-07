-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2019 a las 06:08:53
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `muni`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text,
  `color_fondo` varchar(50) DEFAULT NULL,
  `color_text` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `color_fondo`, `color_text`) VALUES
(1, 'Residuos SÃ³lidos', NULL, '#3e2723', NULL),
(2, 'Areas verdes', NULL, '#388e3c', NULL),
(3, 'Limpieza', NULL, '#bf360c', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(11) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `apellidos` varchar(200) DEFAULT NULL,
  `cargo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `nombres`, `apellidos`, `cargo`) VALUES
(1, 'YESSENIA ', 'HUAMAN ATENCIO', 'GERENTE'),
(2, 'KEVIN', 'AMAYA SOLIS', 'ASISTENTE'),
(3, 'WALDIR', 'SANTACRUZ QUITO', NULL),
(4, 'WILHEM', 'JANAMPA CASTRO', 'SUPERVISOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date_at` varchar(50) NOT NULL,
  `time_at` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `cx` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cy` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `event`
--

INSERT INTO `event` (`id`, `title`, `description`, `date_at`, `time_at`, `created_at`, `category_id`, `user_id`, `project_id`, `estado`, `cx`, `cy`) VALUES
(1, 'REUNION PROYECCION SOCIAL MUNICIPALIDAD PROVINCIAL', 'LO QUE SEA', '2018-05-18', '20:30', '2018-05-23 18:47:10', 1, 1, 1, NULL, '', ''),
(2, 'CLASE DE WORD', 'DBSVJBKXJVB SKLNX SDKL', '2018-05-19', '23:00', '2018-05-23 18:51:38', 2, 2, 1, NULL, '', ''),
(3, 'REUNION MULTISECTORIAL', 'EN EL GOBIERNO REGIONAL', '2018-05-28', '09:00', '2018-05-25 00:44:47', 1, 1, 1, NULL, '', ''),
(4, 'RECOLECCION RESIDUOS', 'AV CIRCUNVALACION ARENALES', '2018-05-28', '08:00', '2018-07-25 17:07:36', 2, 1, 1, NULL, '', ''),
(7, 'REUNION MULTISECTORIAL', 'En el Gobierno Regional', '2018-09-28', '05:30', '2018-09-28 17:48:30', 1, 2, 2, NULL, '', ''),
(8, 'INSPECCIÃ“N VEHICULAR', 'ALGO ', '2018-09-28', '11:20', '2018-09-28 17:54:26', 2, 2, 3, NULL, '', ''),
(9, 'OPERATIVO', 'NO SE', '2018-09-28', '06:10', '2018-09-28 17:55:32', 3, 2, 1, NULL, '', ''),
(10, 'REUNION MULTISECTORIAL', 'Plan de Residuos SÃ³lidos', '2018-11-07', '04:00', '2018-11-08 14:20:55', 1, 1, 4, NULL, '', ''),
(11, 'SUPERVISIÃ“N DE LIMPIEZA ÃREAS VERDES', 'En el cercado de Chaupimarca', '2018-11-05', '09:00', '2018-11-08 14:22:54', 2, 1, 1, NULL, '', ''),
(12, 'INSPECCIÃ“N', 'Calles', '2018-11-02', '04:00', '2018-11-08 14:24:40', 3, 1, 2, NULL, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evidencias`
--

CREATE TABLE `evidencias` (
  `img_id` int(11) NOT NULL,
  `ev_id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `ev_img` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evidencias`
--

INSERT INTO `evidencias` (`img_id`, `ev_id`, `descripcion`, `estado`, `ev_img`) VALUES
(45, 1, 'No tiene equipos de trabajo', 'Pendiente', '200881.png'),
(46, 1, 'bjknj', 'actual', '828384.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `lastname`, `email`, `password`, `is_active`, `is_admin`, `created_at`) VALUES
(1, 'admin', '', '', '', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 1, 1, '2018-05-23 18:43:24'),
(2, 'yess', 'YESSENIA', 'HUAMAN', 'yess@gmail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 1, 0, '2018-05-23 18:48:20'),
(3, 'JESUCONDOR', 'JESUS', 'CONDOR', '', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 1, 0, '2018-05-23 18:56:45'),
(4, 'wjanampa', 'Wilhem', 'JANAMPA CASTRO', 'wjancas@hotmail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 1, 0, '2018-09-26 17:40:00'),
(5, 'kamaya', 'Kevin', 'Amaya', 'kamayas@gmail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 1, 0, '2018-10-11 10:37:23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indices de la tabla `evidencias`
--
ALTER TABLE `evidencias`
  ADD PRIMARY KEY (`img_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `evidencias`
--
ALTER TABLE `evidencias`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `event_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `event_ibfk_3` FOREIGN KEY (`project_id`) REFERENCES `empleado` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
