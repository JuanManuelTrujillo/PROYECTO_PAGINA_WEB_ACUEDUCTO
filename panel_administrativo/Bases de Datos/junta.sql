-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2023 a las 22:45:03
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
-- Base de datos: `u684809565_acueducto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `junta`
--

CREATE TABLE `junta` (
  `imagen_ID` int NOT NULL,
  `imagen_Marca` varchar(200) CHARACTER SET ucs2 COLLATE ucs2_general_ci NOT NULL,
  `imagen_Tipo` varchar(200) NOT NULL,
  `imagen_Img` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COMMENT='Tabla de Imagenes';

--
-- Volcado de datos para la tabla `junta`
--

INSERT INTO `junta` (`imagen_ID`, `imagen_Marca`, `imagen_Tipo`, `imagen_Img`) VALUES
(34, 'savid', 'administrador', '16653.jpg'),
(35, 'savid', 'administrador', '167700.jpg'),
(29, 'cristian ', 'administrador', '341144.jpg'),
(36, 'savid', 'administrador', '143994.jpg'),
(37, 'savid', 'administrador', '590804.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `junta`
--
ALTER TABLE `junta`
  ADD PRIMARY KEY (`imagen_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `junta`
--
ALTER TABLE `junta`
  MODIFY `imagen_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
