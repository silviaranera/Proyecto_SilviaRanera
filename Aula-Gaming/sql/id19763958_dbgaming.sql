-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 05-12-2022 a las 11:10:00
-- Versión del servidor: 10.5.16-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id19763958_dbgaming`
--
CREATE DATABASE IF NOT EXISTS `id19763958_dbgaming` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id19763958_dbgaming`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contraseña` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tiporesponsable` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`email`, `contraseña`, `tiporesponsable`) VALUES
('administrador@gaming.com', 'profesor', 'P'),
('responsable@gaming.com', 'responsable', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contraseña` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `dni` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `turno` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`email`, `contraseña`, `dni`, `telefono`, `nombre`, `apellido`, `turno`) VALUES
('ainhoa@gmail.com', '123456', '12345698S', '666-666-666', 'Ainhoa', 'Martin', 'T'),
('alumno@gmail.com', '123', '12345678A', '666-666-666', 'Prueba', 'Prueba', 'M'),
('arebolleda@educa.madrid.org', '12345678', '1111111A', '1111111', 'Alfonso', 'Rebolleda', 'M'),
('pepetome@gmail.com', '123Pepe', '12345678', '123-212-456', 'pepe', 'tome', 'M'),
('pgr795@gmail.com', '123', '50234828e', '630227490 ', 'Pablo', 'Garcia Rodriguez', 'M'),
('raneras@gmail.com', 'silviaranera', '12345678A', '987654321', 'Silvia', 'Ranera', 'M'),
('ranerasil@gmail.com', 'ranerasilvia', '50228184W', '666666666', 'Silvia', 'Ranera', 'T'),
('ranerasilvia@gmail.com', '1234', '43255687T', '651-802-457', 'pepe', 'pepe', 'M');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competicion`
--

CREATE TABLE `competicion` (
  `id_competicion` int(10) NOT NULL,
  `idjuego` smallint(6) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `puntos` int(11) DEFAULT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `competicion`
--

INSERT INTO `competicion` (`id_competicion`, `idjuego`, `email`, `puntos`, `fecha`) VALUES
(1, 1, 'raneras@gmail.com', 350, '2022-11-02 17:33:19'),
(2, 1, 'arebolleda@educa.madrid.org', 600, '2022-11-17 00:00:00'),
(3, 4, 'raneras@gmail.com', 300, '2022-11-22 00:00:00'),
(4, 1, 'alumno@gmail.com', 600, '2022-11-15 00:00:00'),
(5, 4, 'raneras@gmail.com', 300, '2022-08-10 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego`
--

CREATE TABLE `juego` (
  `id_juego` smallint(6) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `disponibilidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `juego`
--

INSERT INTO `juego` (`id_juego`, `nombre`, `descripcion`, `disponibilidad`) VALUES
(1, 'Pac-Man', 'CLASICO. El juego consiste en conducir a Pac-Man, una bola amarilla que abre y cierra la boca, por un laberinto. Suma puntos cuando come aquello que encuentra a su paso, bolitas y diferentes frutas, pero debe esquivar a cuatro fantasmas.', 1),
(2, 'Worms', 'Género de estrategia militar por turnos. Se enfrentan DOS o MÁS JUGADORES que controlan uno o varios personajes durante cierto tiempo, con el objetivo de eliminar los personajes de los adversarios. ¿Estas preparado?', 1),
(3, 'Prueba', 'prueba', 1),
(4, 'pruebaDos', 'Prueba dos', 1),
(5, 'MaPL', 'juego inventado', 1),
(6, 'Tetrix', 'El objetivo es hacer caer piezas e ir rellenando huecos para conseguir hacer líneas. Una vez creadas, desaparecen, y nos interesa hacerlo de cuatro en cuatro en vez de una en una por los puntos.', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenador`
--

CREATE TABLE `ordenador` (
  `num_puesto` smallint(6) NOT NULL,
  `disponibilidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ordenador`
--

INSERT INTO `ordenador` (`num_puesto`, `disponibilidad`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 0),
(8, 0),
(9, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int(11) NOT NULL,
  `numpuesto` smallint(6) NOT NULL,
  `idjuego` smallint(6) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_reserva` date NOT NULL,
  `turno` enum('M','T') COLLATE utf8_unicode_ci DEFAULT NULL,
  `esAdministrador` tinyint(1) DEFAULT NULL,
  `reservaActiva` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id_reserva`, `numpuesto`, `idjuego`, `email`, `fecha_reserva`, `turno`, `esAdministrador`, `reservaActiva`) VALUES
(1, 1, 6, 'raneras@gmail.com', '2022-11-29', 'M', 1, 1),
(48, 1, 6, 'ainhoa@gmail.com', '2022-12-01', 'T', 1, 1),
(49, 1, 6, 'raneras@gmail.com', '2022-11-30', 'M', 1, 1),
(50, 1, 6, 'raneras@gmail.com', '2022-12-02', 'M', 1, 1),
(51, 1, 6, 'pgr795@gmail.com', '2022-12-06', 'M', 1, 1),
(52, 1, 6, 'arebolleda@educa.madrid.org', '2022-12-01', 'M', 1, 1),
(53, 2, 6, 'ranerasil@gmail.com', '2022-12-01', 'T', 0, 1),
(54, 2, 6, 'ranerasilvia@gmail.com', '2022-12-01', 'M', 0, 1),
(55, 1, 6, 'pepetome@gmail.com', '2022-12-01', 'M', 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `competicion`
--
ALTER TABLE `competicion`
  ADD PRIMARY KEY (`id_competicion`) USING BTREE,
  ADD KEY `id_juego` (`idjuego`),
  ADD KEY `email` (`email`);

--
-- Indices de la tabla `juego`
--
ALTER TABLE `juego`
  ADD PRIMARY KEY (`id_juego`);

--
-- Indices de la tabla `ordenador`
--
ALTER TABLE `ordenador`
  ADD PRIMARY KEY (`num_puesto`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `email` (`email`),
  ADD KEY `num_puesto` (`numpuesto`),
  ADD KEY `id_juego` (`idjuego`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `competicion`
--
ALTER TABLE `competicion`
  MODIFY `idjuego` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ordenador`
--
ALTER TABLE `ordenador`
  MODIFY `num_puesto` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `competicion`
--
ALTER TABLE `competicion`
  ADD CONSTRAINT `competicion_ibfk_1` FOREIGN KEY (`idjuego`) REFERENCES `juego` (`id_juego`),
  ADD CONSTRAINT `competicion_ibfk_2` FOREIGN KEY (`email`) REFERENCES `alumno` (`email`);

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`email`) REFERENCES `alumno` (`email`),
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`idjuego`) REFERENCES `juego` (`id_juego`),
  ADD CONSTRAINT `reserva_ibfk_3` FOREIGN KEY (`numpuesto`) REFERENCES `ordenador` (`num_puesto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
