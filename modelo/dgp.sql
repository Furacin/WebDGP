-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2015 a las 16:23:20
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dgp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alojamientos`
--

CREATE TABLE IF NOT EXISTS `alojamientos` (
  `CIF` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `oferta` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alojamientos`
--

INSERT INTO `alojamientos` (`CIF`, `nombre`, `ciudad`, `direccion`, `descripcion`, `oferta`) VALUES
('111111111', 'Hotelaso', 'JaÃ©n', 'Calle', 'Calesdfsfdsa', 20),
('158', 'AC ', 'Granada', 'Calle Mendez Nuñez', 'Un hotel mu guapo.', 0),
('222222222', 'sdd', 'asd', 'asd', 'asd', 10),
('333333333', 'sd', 'asffas', 'fsfsa', 'dfdsf', 30),
('B1858768', 'Hotel Porcel', 'Granada', 'Paseo de la Sabika nº 40', 'Muy buenas condiciones. Juanpi es el mejor.', 0),
('B65819427', 'Hotel aasd', 'Granada', 'Calle París num. 120.', 'Un hotel nuevo de lujo.', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disponibilidad`
--

CREATE TABLE IF NOT EXISTS `disponibilidad` (
  `id_disponibilidad` int(5) NOT NULL,
  `alojamiento` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE IF NOT EXISTS `reservas` (
`id_reserva` int(6) NOT NULL,
  `informacion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `num_personas` int(2) NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `alojamiento_reserva` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `id_disponibilidad` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Usuario` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Contrasenia` varchar(50) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Fecha_Nacimiento` date DEFAULT NULL,
  `Direccion` varchar(150) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Usuario`, `Contrasenia`, `Nombre`, `Apellidos`, `Fecha_Nacimiento`, `Direccion`, `Telefono`, `email`, `Tipo`) VALUES
('', '', '', '', '1990-02-28', '', 0, '', ''),
('asd', 'ad', 'asd', 'asd', NULL, 'asd', 0, 'ad@hotmail.es', 'basico'),
('hola', 'asd', 'Juan Pablo ', 'Porcel Porcel', '1990-02-28', 'ads', 0, 'asd@hotmail.es', 'representante'),
('holaaa', 'asd', 'asd', 'sd', '1990-02-28', 'fd', 53424, 'asd@hotmail.es', 'basico'),
('piti', 'asd', 'Pablo', 'asd', '1990-02-28', 'asd', 678908, 'asd@hotmail.es', 'basico'),
('Usuario', '12345', 'Juanma', 'Gomez', '1990-02-28', 'Arq', 987654321, 'asdasd@asdasd.com', 'Administrador'),
('Usuario12', 'asd', 'Javier', 'asd', '1990-02-28', 'asd', 6666, 'asd@hotmail.es', 'basico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoraciones`
--

CREATE TABLE IF NOT EXISTS `valoraciones` (
`id` int(6) NOT NULL,
  `voto` int(2) NOT NULL,
  `comentario` varchar(600) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `alojamiento_valoracion` varchar(9) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alojamientos`
--
ALTER TABLE `alojamientos`
 ADD PRIMARY KEY (`CIF`);

--
-- Indices de la tabla `disponibilidad`
--
ALTER TABLE `disponibilidad`
 ADD PRIMARY KEY (`id_disponibilidad`), ADD UNIQUE KEY `id_disponibilidad` (`id_disponibilidad`), ADD UNIQUE KEY `alojamiento` (`alojamiento`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
 ADD PRIMARY KEY (`id_reserva`), ADD UNIQUE KEY `usuario` (`usuario`), ADD UNIQUE KEY `alojamiento_reserva` (`alojamiento_reserva`), ADD UNIQUE KEY `id_disponibilidad` (`id_disponibilidad`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`Usuario`);

--
-- Indices de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `usuario` (`usuario`), ADD UNIQUE KEY `alojamiento` (`alojamiento_valoracion`), ADD KEY `alojamiento_2` (`alojamiento_valoracion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
MODIFY `id_reserva` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `disponibilidad`
--
ALTER TABLE `disponibilidad`
ADD CONSTRAINT `disponibilidad_ibfk_1` FOREIGN KEY (`alojamiento`) REFERENCES `alojamientos` (`CIF`);

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`Usuario`),
ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`alojamiento_reserva`) REFERENCES `disponibilidad` (`alojamiento`),
ADD CONSTRAINT `reservas_ibfk_3` FOREIGN KEY (`id_disponibilidad`) REFERENCES `disponibilidad` (`id_disponibilidad`);

--
-- Filtros para la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
ADD CONSTRAINT `valoraciones_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`Usuario`),
ADD CONSTRAINT `valoraciones_ibfk_2` FOREIGN KEY (`alojamiento_valoracion`) REFERENCES `alojamientos` (`CIF`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
