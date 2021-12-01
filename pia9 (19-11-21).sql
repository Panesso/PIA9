-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2021 a las 21:50:08
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pia9`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegios`
--

CREATE TABLE `colegios` (
  `id_colegio` int(11) NOT NULL,
  `Colegio` varchar(50) NOT NULL,
  `Ciudad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colegios`
--

INSERT INTO `colegios` (`id_colegio`, `Colegio`, `Ciudad`) VALUES
(1, 'I.E. FEDERICO OZANAM', 'Medellin'),
(2, 'I.E. Sol de Oriente', 'Medellin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id_docente` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `documento_identidad` int(20) NOT NULL,
  `materia` varchar(11) NOT NULL,
  `institucion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id_docente`, `nombre`, `documento_identidad`, `materia`, `institucion`) VALUES
(1, 'Pedro Jimenez', 1000451, 'Matematicas', 'I.E. FEDERICO OZANAM'),
(3, 'Ana Gaviria', 29549312, 'Lenguaje', 'I.E. FEDERICO OZANAM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados`
--

CREATE TABLE `grados` (
  `id_grado` int(11) NOT NULL,
  `Grado` varchar(15) NOT NULL,
  `MediaTec` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grados`
--

INSERT INTO `grados` (`id_grado`, `Grado`, `MediaTec`) VALUES
(4, 'CUARTO', ''),
(12, 'DECIMO', 'DibujoArq'),
(11, 'DECIMO', 'MuestrasQuim'),
(13, 'DECIMO', 'Multimedia'),
(10, 'DECIMO', 'Programacion'),
(9, 'NOVENO', ''),
(8, 'OCTAVO', ''),
(1, 'PRIMERO', ''),
(5, 'QUINTO', ''),
(2, 'SEGUNDO', ''),
(7, 'SEPTIMO', ''),
(6, 'SEXTO', ''),
(3, 'TERCERO', ''),
(16, 'UNDECIMO', 'DibujoArq'),
(15, 'UNDECIMO', 'MuestrasQuim'),
(17, 'UNDECIMO', 'Multimedia'),
(14, 'UNDECIMO', 'Programacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logros`
--

CREATE TABLE `logros` (
  `id_logros` int(11) NOT NULL,
  `Logros` varchar(50) NOT NULL,
  `Nivel` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `logros`
--

INSERT INTO `logros` (`id_logros`, `Logros`, `Nivel`) VALUES
(1, 'Matematicas', 1),
(2, 'Matematicas', 2),
(3, 'Matematicas', 3),
(4, 'Lenguas', 1),
(5, 'Lenguas', 2),
(6, 'Lenguas', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_materias` int(11) NOT NULL,
  `materias` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materias`, `materias`) VALUES
(1, 'Artes'),
(4, 'Ciencias'),
(2, 'Idiomas'),
(3, 'Matemáticas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rangos`
--

CREATE TABLE `rangos` (
  `id_rango` int(11) NOT NULL,
  `Rango` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rangos`
--

INSERT INTO `rangos` (`id_rango`, `Rango`) VALUES
(3, 'ADMIN'),
(1, 'DOCENTE'),
(2, 'ESTUDIANTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `grado` varchar(20) NOT NULL,
  `institucion` varchar(50) NOT NULL,
  `logros` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `nickname`, `password`, `correo_electronico`, `grado`, `institucion`, `logros`) VALUES
(1, 'David', 'Panesso', 'davidp', 'david123', 'david@gmail.com', 'Decimo', '', ''),
(3, 'Andres', 'Mejia', 'andresm', '12345', 'andres.mejia@pascualbravo.edu.co', 'Once', '', ''),
(4, 'Juan', 'Perez', 'Juan Perez', 'juan123', 'juanito@gmail.com', 'Segundo', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `colegios`
--
ALTER TABLE `colegios`
  ADD PRIMARY KEY (`id_colegio`),
  ADD KEY `Colegio` (`Colegio`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id_docente`),
  ADD KEY `institucion` (`institucion`) USING BTREE;

--
-- Indices de la tabla `grados`
--
ALTER TABLE `grados`
  ADD PRIMARY KEY (`id_grado`),
  ADD KEY `Grado` (`Grado`,`MediaTec`);

--
-- Indices de la tabla `logros`
--
ALTER TABLE `logros`
  ADD PRIMARY KEY (`id_logros`),
  ADD KEY `Logros` (`Logros`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materias`),
  ADD KEY `materias` (`materias`);

--
-- Indices de la tabla `rangos`
--
ALTER TABLE `rangos`
  ADD PRIMARY KEY (`id_rango`),
  ADD KEY `Rango` (`Rango`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `logros` (`logros`),
  ADD KEY `grado` (`grado`,`institucion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `colegios`
--
ALTER TABLE `colegios`
  MODIFY `id_colegio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id_docente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `grados`
--
ALTER TABLE `grados`
  MODIFY `id_grado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `logros`
--
ALTER TABLE `logros`
  MODIFY `id_logros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rangos`
--
ALTER TABLE `rangos`
  MODIFY `id_rango` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD CONSTRAINT `docentes_ibfk_1` FOREIGN KEY (`institucion`) REFERENCES `colegios` (`Colegio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
