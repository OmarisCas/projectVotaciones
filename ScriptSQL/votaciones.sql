-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2020 a las 19:53:47
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `votaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidato`
--

CREATE TABLE `candidato` (
  `id_candidato` int(12) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `id_organo` int(2) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `candidato`
--

INSERT INTO `candidato` (`id_candidato`, `numero`, `id_organo`, `foto`) VALUES
(2003122122, '101', 1, '2003122122.jpg'),
(2010020220, '301', 3, '2010020220.jpg'),
(2010122111, '201', 2, '2010122111.jpg'),
(2010123112, '102', 1, '2010123112.jpg'),
(2012111229, '202', 2, '2012111229.jpg'),
(2014123222, '401', 4, '2014123222.jpg'),
(2014222111, '302', 3, '2014222111.jpg'),
(2016000120, '402', 4, '2016000120.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_usuario`
--

CREATE TABLE `estado_usuario` (
  `id_estado_usuario` int(1) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado_usuario`
--

INSERT INTO `estado_usuario` (`id_estado_usuario`, `nombre`, `descripcion`) VALUES
(1, 'No voto', 'El usuario no ha votado'),
(2, 'autorizado', 'autorizado por jurado'),
(3, 'votando', 'usuario votando'),
(4, 'voto', 'finalizo el proceso votacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `id_facultad` int(2) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `facultad`
--

INSERT INTO `facultad` (`id_facultad`, `nombre`) VALUES
(1, 'Ciencias Básicas'),
(2, 'Ciencias de la Educación'),
(3, 'Ciencias de la Salud'),
(4, 'Ciencias Empresariales y Económicas'),
(5, 'Humanidades'),
(6, 'Ingeniería');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

CREATE TABLE `lugar` (
  `id_lugar` int(2) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lugar`
--

INSERT INTO `lugar` (`id_lugar`, `nombre`) VALUES
(1, 'Hemiciclo - Helado de Leche'),
(2, 'Bloque Norte  - Piso 1'),
(3, 'Bloque Norte - Piso 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

CREATE TABLE `mesa` (
  `id_mesa` int(3) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `id_lugar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mesa`
--

INSERT INTO `mesa` (`id_mesa`, `nombre`, `id_lugar`) VALUES
(1, '1', 2),
(2, '2', 1),
(3, '3', 3),
(4, '4', 1),
(5, '5', 3),
(6, '6', 1),
(7, '7', 2),
(8, '8', 1),
(9, '9', 2),
(10, '10', 1),
(11, '11', 1),
(12, '12', 2),
(13, '13', 1),
(14, '14', 1),
(15, '15', 2),
(100, '100', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organo`
--

CREATE TABLE `organo` (
  `id_organo` int(2) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `organo`
--

INSERT INTO `organo` (`id_organo`, `nombre`, `descripcion`) VALUES
(1, 'Consejo Superior', NULL),
(2, 'Consejo Académico', NULL),
(3, 'Consejo de Facultad', NULL),
(4, 'Consejo de Programa', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `id_programa` int(2) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `id_facultad` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`id_programa`, `nombre`, `id_facultad`) VALUES
(14, 'Ingeniería de Sistemas', 6),
(15, 'Ingeniería Pesquera', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` varchar(1) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre`, `descripcion`) VALUES
('A', 'ADMINISTRADOR', 'Es el super usuario....'),
('D', 'DELEGADO', NULL),
('J', 'JURADO', 'Es el JURADO de votacion'),
('V', 'VOTANTE', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` varchar(3) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo_usuario`, `nombre`, `descripcion`) VALUES
('DOC', 'DOCENTE', NULL),
('EGR', 'EGRESADO', NULL),
('EST', 'ESTUDIANTE', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `codigo` int(12) NOT NULL,
  `nombre1` varchar(30) NOT NULL,
  `nombre2` varchar(30) NOT NULL,
  `apellido1` varchar(30) NOT NULL,
  `apellido2` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `id_tipo_usuario` varchar(3) NOT NULL,
  `id_rol` varchar(1) NOT NULL,
  `id_programa` int(2) NOT NULL,
  `id_mesa` int(3) DEFAULT NULL,
  `id_estado_usuario` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codigo`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `password`, `id_tipo_usuario`, `id_rol`, `id_programa`, `id_mesa`, `id_estado_usuario`) VALUES
(2003122122, 'Pedro', 'Luis', 'Gutierrez', 'Gamarra', 'pedro', 'DOC', 'J', 15, 11, 2),
(2010020220, 'Federico', 'Fernando', 'Jurado', 'Preciado', 'federico', 'EGR', 'V', 14, 10, 4),
(2010122111, 'Darwin', 'Enrique', 'Fernandez', 'Gil', 'darwin', 'DOC', 'A', 14, 9, 1),
(2010123112, 'Gabriel', 'Jesús', 'Quintero', 'Fula', 'gabriel', 'DOC', 'V', 14, 8, 2),
(2010123123, 'Hillary', 'Sofia', 'Barreto', 'Castaneda', 'hillary', 'EST', 'A', 14, 7, 1),
(2012111229, 'Carlos', 'Enrique', 'Castro', 'Fula', 'carlos', 'EST', 'J', 14, 6, 1),
(2012898782, 'Gustavo', 'Adolfo', 'Hernandez', 'Mendoza', 'gustavo', 'DOC', 'A', 14, 5, 1),
(2012999123, 'Kelvin', 'Jose', 'Ramos', 'Ballestas', 'kelvin', 'EGR', 'A', 15, 4, 1),
(2014123222, 'Hernan', 'Javier', 'Castillo', 'Pineda', 'hernan', 'EGR', 'A', 15, 3, 1),
(2014222111, 'Ellery', 'Jose', 'Chacuto', 'Florez', 'ellery', 'EST', 'V', 15, 2, 4),
(2016000120, 'Sandra', 'Mirleidis', 'Calvo', 'Calvo', 'sandra', 'EGR', 'J', 14, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voto`
--

CREATE TABLE `voto` (
  `id_mesa` int(2) NOT NULL,
  `id_candidato` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `voto`
--

INSERT INTO `voto` (`id_mesa`, `id_candidato`) VALUES
(10, 2003122122),
(10, 2010123112),
(10, 2012111229),
(10, 2014222111),
(10, 2014123222),
(10, 2003122122),
(10, 2010123112),
(10, 2012111229),
(10, 2014222111),
(10, 2014123222),
(2, 2003122122),
(2, 2012111229),
(2, 2010020220),
(2, 2016000120),
(10, 2010123112),
(10, 2012111229),
(10, 2010020220),
(10, 2016000120);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`id_candidato`),
  ADD KEY `id_organo` (`id_organo`),
  ADD KEY `id_candidato` (`id_candidato`);

--
-- Indices de la tabla `estado_usuario`
--
ALTER TABLE `estado_usuario`
  ADD PRIMARY KEY (`id_estado_usuario`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`id_facultad`);

--
-- Indices de la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`id_lugar`);

--
-- Indices de la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`id_mesa`),
  ADD KEY `id_lugar` (`id_lugar`);

--
-- Indices de la tabla `organo`
--
ALTER TABLE `organo`
  ADD PRIMARY KEY (`id_organo`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`id_programa`),
  ADD KEY `id_facultad` (`id_facultad`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `idRol` (`id_rol`),
  ADD KEY `id_programa` (`id_programa`),
  ADD KEY `id_mesa` (`id_mesa`),
  ADD KEY `id_estado_usuario` (`id_estado_usuario`),
  ADD KEY `id_tipo_usuario` (`id_tipo_usuario`) USING BTREE;

--
-- Indices de la tabla `voto`
--
ALTER TABLE `voto`
  ADD KEY `id_mesa` (`id_mesa`),
  ADD KEY `id_candidato` (`id_candidato`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estado_usuario`
--
ALTER TABLE `estado_usuario`
  MODIFY `id_estado_usuario` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `facultad`
--
ALTER TABLE `facultad`
  MODIFY `id_facultad` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `mesa`
--
ALTER TABLE `mesa`
  MODIFY `id_mesa` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `candidato`
--
ALTER TABLE `candidato`
  ADD CONSTRAINT `candidato_ibfk_1` FOREIGN KEY (`id_organo`) REFERENCES `organo` (`id_organo`),
  ADD CONSTRAINT `candidato_ibfk_2` FOREIGN KEY (`id_candidato`) REFERENCES `usuario` (`codigo`);

--
-- Filtros para la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD CONSTRAINT `mesa_ibfk_1` FOREIGN KEY (`id_lugar`) REFERENCES `lugar` (`id_lugar`);

--
-- Filtros para la tabla `programa`
--
ALTER TABLE `programa`
  ADD CONSTRAINT `programa_ibfk_1` FOREIGN KEY (`id_facultad`) REFERENCES `facultad` (`id_facultad`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`id_programa`) REFERENCES `programa` (`id_programa`),
  ADD CONSTRAINT `usuario_ibfk_4` FOREIGN KEY (`id_mesa`) REFERENCES `mesa` (`id_mesa`),
  ADD CONSTRAINT `usuario_ibfk_5` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`),
  ADD CONSTRAINT `usuario_ibfk_6` FOREIGN KEY (`id_estado_usuario`) REFERENCES `estado_usuario` (`id_estado_usuario`);

--
-- Filtros para la tabla `voto`
--
ALTER TABLE `voto`
  ADD CONSTRAINT `voto_ibfk_1` FOREIGN KEY (`id_mesa`) REFERENCES `mesa` (`id_mesa`),
  ADD CONSTRAINT `voto_ibfk_2` FOREIGN KEY (`id_candidato`) REFERENCES `candidato` (`id_candidato`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
