-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2023 a las 23:05:00
-- Versión del servidor: 8.0.33
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cargar-imagen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_imagenes`
--

CREATE TABLE `tbl_imagenes` (
  `imagen_ID` int NOT NULL,
  `imagen_Marca` varchar(200) CHARACTER SET ucs2 COLLATE ucs2_general_ci NOT NULL,
  `imagen_Tipo` varchar(200) NOT NULL,
  `imagen_Img` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COMMENT='Tabla de Imagenes';

--
-- Volcado de datos para la tabla `tbl_imagenes`
--

INSERT INTO `tbl_imagenes` (`imagen_ID`, `imagen_Marca`, `imagen_Tipo`, `imagen_Img`) VALUES
(21, 'savid', 'administrador', '448155.jpg'),
(18, 'yuliet', 'administrador', '827088.jpg'),
(19, 'savid', 'administrador', '933526.jpg'),
(20, 'savid', 'administrador', '323908.jpg'),
(15, 'yuliet', 'administrador', '604431.jpg'),
(22, 'savid', 'administrador', '140243.jpg'),
(16, 'ca', 'administrador', '874153.jpg'),
(17, 'ca', 'administrador', '630461.jpg'),
(23, 'savid', 'administrador', '424840.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_imagenes`
--
ALTER TABLE `tbl_imagenes`
  ADD PRIMARY KEY (`imagen_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_imagenes`
--
ALTER TABLE `tbl_imagenes`
  MODIFY `imagen_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
