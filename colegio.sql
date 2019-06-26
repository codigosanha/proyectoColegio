-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2019 a las 06:12:27
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colegio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `Id_Carrera` int(11) NOT NULL,
  `Carrera` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`Id_Carrera`, `Carrera`) VALUES
(1, 'Bachillerato en Ciencias y Letras '),
(2, 'Bachiller en Computacion '),
(3, 'Maestro de Educacion Primaria'),
(4, 'Maestra de Educacion Primaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosgraduado`
--

CREATE TABLE `datosgraduado` (
  `Id_Graduado` int(11) NOT NULL,
  `Num_Carnet` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NombreCompleto` varchar(350) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `datosgraduado`
--

INSERT INTO `datosgraduado` (`Id_Graduado`, `Num_Carnet`, `NombreCompleto`) VALUES
(1, 'C3245', 'Mario Arturo Galicia Ramirez'),
(2, 'A234B', 'Maria Gonzalez Chacon'),
(3, 'BN56789', 'Jorge Daniel Marroquin ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio`
--

CREATE TABLE `inicio` (
  `Id_Login` int(11) NOT NULL,
  `Usuario` varchar(120) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Password` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NombreUsuario` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `inicio`
--

INSERT INTO `inicio` (`Id_Login`, `Usuario`, `Password`, `NombreUsuario`) VALUES
(1, 'admin', 'admin123', 'Administrador Sistema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulos`
--

CREATE TABLE `titulos` (
  `Id_Titulo` int(11) NOT NULL,
  `Id_Graduado` int(11) NOT NULL,
  `Num_Acta` int(11) NOT NULL,
  `Anio` year(4) DEFAULT NULL,
  `NumeroFolio` int(11) DEFAULT NULL,
  `LibroActaGrad` int(11) DEFAULT NULL,
  `FechaGraduacion` date NOT NULL,
  `Id_Carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `titulos`
--

INSERT INTO `titulos` (`Id_Titulo`, `Id_Graduado`, `Num_Acta`, `Anio`, `NumeroFolio`, `LibroActaGrad`, `FechaGraduacion`, `Id_Carrera`) VALUES
(1, 1, 2, 2018, 3, 12, '2019-06-11', 1),
(2, 2, 3, 2019, 5, 22, '2019-06-14', 4),
(3, 3, 5, 2019, 7, 25, '2019-06-24', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`Id_Carrera`);

--
-- Indices de la tabla `datosgraduado`
--
ALTER TABLE `datosgraduado`
  ADD PRIMARY KEY (`Id_Graduado`);

--
-- Indices de la tabla `inicio`
--
ALTER TABLE `inicio`
  ADD PRIMARY KEY (`Id_Login`);

--
-- Indices de la tabla `titulos`
--
ALTER TABLE `titulos`
  ADD PRIMARY KEY (`Id_Titulo`,`Id_Carrera`,`Id_Graduado`),
  ADD KEY `Relationship2` (`Id_Carrera`),
  ADD KEY `Relationship3` (`Id_Graduado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `Id_Carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `datosgraduado`
--
ALTER TABLE `datosgraduado`
  MODIFY `Id_Graduado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `inicio`
--
ALTER TABLE `inicio`
  MODIFY `Id_Login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `titulos`
--
ALTER TABLE `titulos`
  MODIFY `Id_Titulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `titulos`
--
ALTER TABLE `titulos`
  ADD CONSTRAINT `Relationship2` FOREIGN KEY (`Id_Carrera`) REFERENCES `carreras` (`Id_Carrera`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Relationship3` FOREIGN KEY (`Id_Graduado`) REFERENCES `datosgraduado` (`Id_Graduado`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
