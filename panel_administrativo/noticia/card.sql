-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2023 a las 18:31:40
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
-- Base de datos: `card`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_imagenes`
--

CREATE TABLE `tbl_imagenes` (
  `imagen_ID` int NOT NULL,
  `imagen_Marca` varchar(9000) CHARACTER SET ucs2 COLLATE ucs2_general_ci NOT NULL,
  `imagen_Tipo` varchar(9000) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `imagen_Img` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COMMENT='Tabla de Imagenes';

--
-- Volcado de datos para la tabla `tbl_imagenes`
--

INSERT INTO `tbl_imagenes` (`imagen_ID`, `imagen_Marca`, `imagen_Tipo`, `imagen_Img`) VALUES
(8, 'foto', ' Regresó la zorra y más le dolió el no poder vengarse, que saber de la muerte de sus   pequeños; ¿Cómo podría ella, siendo un animal terrestre, sin poder volar, perseguir    a uno que vuela ? Tuvo que conformarse con el usual consuelo de los débiles e    impotentes: maldecir desde lejos a su enemigo', '939250.jpg'),
(9, 'GATO', ' Regresó la zorra y más le dolió el no poder vengarse, que saber de la muerte de sus   pequeños; ¿Cómo podría ella, siendo un animal terrestre, sin poder volar, perseguir    a uno que vuela ? Tuvo que conformarse con el usual consuelo de los débiles e    impotentes: maldecir desde lejos a su enemigo', '667370.jpg'),
(12, 'Juan Manuel Trujillo', ' Regresó la zorra y más le dolió el no poder vengarse, que saber de la muerte de sus   pequeños; ¿Cómo podría ella, siendo un animal terrestre, sin poder volar, perseguir    a uno que vuela ? Tuvo que conformarse con el usual consuelo de los débiles e    impotentes: maldecir desde lejos a su enemigo', '720826.jpg'),
(7, 'foto', ' Regresó la zorra y más le dolió el no poder vengarse, que saber de la muerte de sus   pequeños; ¿Cómo podría ella, siendo un animal terrestre, sin poder volar, perseguir    a uno que vuela ? Tuvo que conformarse con el usual consuelo de los débiles e    impotentes: maldecir desde lejos a su enemigo', '945636.jpg');

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
  MODIFY `imagen_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
