-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2015 a las 14:36:16
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `dgp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Usuario` varchar(30) NOT NULL,
  `Contrasenia` varchar(50) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Direccion` varchar(150) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Usuario`, `Contrasenia`, `Nombre`, `Apellidos`, `Direccion`, `Telefono`, `email`, `Tipo`) VALUES
('aasdasdasd', 'asd', 'Pepe', 'asdasdasd', 'asdasdasd', 958, 'asdasd', 'Usuario'),
('Abel', '123456', 'Juanma', 'Gomez', 'arq', 968, 'sparta.1.4.0@gmail.com', 'Usuario'),
('Abel1', 'asda', 'Juanma', 'Gomez', 'Arq', 642, 'sparta.1.4.0@gmail.com', 'Usuario'),
('asdasd', 'asd', 'Pablo', 'ASD', 'asda', 123123123, 'sparta.1.4.0@gmail.com', 'Usuario'),
('asdasdasd', 'asd', 'Pablo', 'ASD', 'asda', 123123123, 'sparta.1.4.0@gmail.com', 'Usuario'),
('asdasdasdasd', 'asdf', 'adsada', 'ASDasd', 'asdasd', 123123, 'asdasd', 'Usuario'),
('asdasdasdasdasd', 'asdasdasdasd', 'asdasdasd', 'asdasdas', 'asdasdas', 0, 'asdasd', 'Usuario'),
('asdasdasdasdasdasd', '123', 'Pablo', 'asdasd', 'asdasd', 123123, 'asdasd@asdasd.com', 'Usuario'),
('Usuario', '12345', 'Juanma', 'Gomez', 'Arq', 987654321, 'asdasd@asdasd.com', 'Administrador'),
('Usuario2', '123456', 'Usuario', 'User', 'Arq', 958, 'spa', 'Usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`Usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
