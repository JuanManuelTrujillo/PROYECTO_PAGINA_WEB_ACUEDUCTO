-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2023 a las 23:34:09
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
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `imagen_ID` int NOT NULL,
  `imagen_Marca` varchar(9000) CHARACTER SET ucs2 COLLATE ucs2_general_ci NOT NULL,
  `imagen_Tipo` varchar(9000) NOT NULL,
  `imagen_Img` varchar(200) NOT NULL,
  `fecha_modificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COMMENT='Tabla de Imagenes';

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`imagen_ID`, `imagen_Marca`, `imagen_Tipo`, `imagen_Img`, `fecha_modificacion`) VALUES
(44, 'Cerramiento en Malla Eslabonada PTAP', 'Desde hace más de 18 años trabajamos para ofrecer productos y servicios de excelencia y calidad, somos fabricantes y comercializadores de Alambres para diferentes sectores a nivel nacional, como el agrícola, ganadero, industrial y residencial. A nivel regional somos la empresa número 1 en la fabricación y distribución de productos para cerramientos perimetrales, lo cual sumado a nuestro maduro sistema de gestión de calidad, con el que contamos hace más de 10 años y nos permite ser la mejor opción para nuestros clientes.  Uno de nuestros productos estrella es la Malla Eslabonada o Malla Ciclón, ya que este es un cerramiento que se integra a la perfección en todos los entornos. El cerramiento en malla eslabonada cuenta con un sistema de enrejado muy fácil de instalar y seguro, requiere de un mantenimiento muy simple, siendo un producto resistente a los factores medio ambientales a los que se expone.  Esta malla es ideal para cerramientos industriales y urbanos, entre los cuales podemos destacar; cierre de carreteras, delimitación de espacios en terrenos agrícola y ganadero, es usada como protección del hogar y su diseño permite que su instalación no afecte el medio ambiente.  Un aprendizaje constante nos permite ser mejores cada día en cuanto a la innovación de nuestros equipos y máquinas, implementamos nuevas tecnologías que nos ayuden a tener una producción ágil, procesos automatizados y entregas oportunas en las diferentes ciudades del país. La inversión permanente en nuestras materias primas nos da una ventaja en el mercado con respecto a precios más económicos y contar con un inventario permanente. Contar con un equipo humano comprometido nos permite hacer envíos en el menor tiempo posible a toda Colombia.', '617366.jpg', '2023-12-05 22:27:56'),
(42, 'Se realiza tratamiento a lagunas de oxidación', 'Ha esta hora se realizan trabajos de remocion de arena para restablecer el servicio de agua', '732729.jpg', '2023-12-05 22:29:53'),
(43, 'Protocolos para asegurar continuidad de agua potable', 'La Empresa Ibaguereña de Acueducto y Alcantarillado informa que a pesar de la temporada de lluvias, se ha logrado mantener el sistema hidráulico en la ciudad con la captación y tratamiento del río Combeima y la quebrada Cay, los cuales se encuentran trabajando de manera normal.  Mientras tanto, la bocatoma Chembe mantiene suspendida su captación y tratamiento. Hoy sólo se logró la captación durante cuatro horas.  \"A pesar de las afectaciones de las precipitaciones sobre nuestras fuentes, hemos logrado mantener al 96% de nuestros usuarios el vital líquido y para ofrecer continuidad a los 6.655 usuarios, de la comuna Siete y parte de la 9, que corresponde al 4% que se han visto afectados por la suspensión de la quebrada Chembe; hemos instalado el Comité de Emergencias y Contingencias en el Ibal”, explicó la Gerente general del Ibal, Erika Palma.  Durante reunión del comité, además del abastecimiento a través de tres carrotanques se plantearon diferentes opciones como la  aplicación de coagulantes en la planta Chembe que permitan el tratamiento con turbiedades superiores a las actuales tratada; también generar alternativas en líneas directas de nuestro sistema de acueducto que dependan de la planta La Pola, y la rehabilitación de una línea de cuatro pulgadas para ofrecerle mayor agua al distrito 7 directamente.   \"En la bocatoma Chembe, a pesar de todos los esfuerzos de nuestro personal operativo, no logramos captar sino por unas horas su caudal, pero a la hora se encuentra suspendida\" explicó la directiva.   Las precipitaciones continuarán y el control a sus afectaciones es imposible de predecir, completó la ingeniera Palma, quien con su equipo técnico y operativo se tomarán acciones que permitan evitar el desabastecimiento, teniendo en cuenta que han sido pocas suspensiones en las bocatomas de Combeima y Cay.  La Gerente finalizó enfatizando que \"el compromiso de sus funcionarios seguirá las 24 horas y que espera la comprensión, así como el ahorro y uso eficiente del agua por parte de los usuarios', '210572.jpg', '2023-12-05 22:27:04');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`imagen_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `imagen_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
