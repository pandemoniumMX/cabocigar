-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-01-2019 a las 14:45:40
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cabocigar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_compras`
--

DROP TABLE IF EXISTS `tbl_compras`;
CREATE TABLE IF NOT EXISTS `tbl_compras` (
  `ID_COMPRA` int(11) NOT NULL,
  `COM_CANTIDAD` int(11) NOT NULL,
  `COM_CONCEPTO` varchar(100) CHARACTER SET latin1 NOT NULL,
  `COM_PRECIOMX` int(11) NOT NULL,
  `COM_PRECIOUS` int(11) NOT NULL,
  `COM_FECHA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ID_USUARIO` int(11) NOT NULL,
  PRIMARY KEY (`ID_COMPRA`),
  KEY `ID_USUARIO` (`ID_USUARIO`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_horario`
--

DROP TABLE IF EXISTS `tbl_horario`;
CREATE TABLE IF NOT EXISTS `tbl_horario` (
  `ID_HORARIO` int(11) NOT NULL AUTO_INCREMENT,
  `HOR_DIA` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `HOR_HORA` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `HOR_TURNO` varchar(10) CHARACTER SET latin1 NOT NULL,
  `HOR_GOAL` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_HORARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_horario`
--

INSERT INTO `tbl_horario` (`ID_HORARIO`, `HOR_DIA`, `HOR_HORA`, `HOR_TURNO`, `HOR_GOAL`) VALUES
(1, 'MIERCOLES 30', '9:00-17:00', 'AM', 5600),
(2, 'MIERCOLES 30', '17:00-1:00', 'PM', 4400);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_inventario`
--

DROP TABLE IF EXISTS `tbl_inventario`;
CREATE TABLE IF NOT EXISTS `tbl_inventario` (
  `ID_INVENTARIO` int(11) NOT NULL AUTO_INCREMENT,
  `INV_NOMBRE` varchar(30) CHARACTER SET latin1 NOT NULL,
  `INV_SABOR` varchar(30) CHARACTER SET latin1 NOT NULL,
  `INV_TIPO` varchar(30) CHARACTER SET latin1 NOT NULL,
  `INV_PRECIOMX` int(11) DEFAULT NULL,
  `INV_PRECIOUS` double DEFAULT NULL,
  `INV_DESCUENTO` int(11) DEFAULT NULL,
  `INV_ALMACEN` int(11) DEFAULT NULL,
  `INV_EXHIBICION` int(11) DEFAULT NULL,
  `ID_MARCA` int(11) NOT NULL,
  `ID_SUCURSAL` int(11) NOT NULL,
  PRIMARY KEY (`ID_INVENTARIO`),
  KEY `ID_MARCA` (`ID_MARCA`),
  KEY `ID_SUCURSAL` (`ID_SUCURSAL`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_inventario`
--

INSERT INTO `tbl_inventario` (`ID_INVENTARIO`, `INV_NOMBRE`, `INV_SABOR`, `INV_TIPO`, `INV_PRECIOMX`, `INV_PRECIOUS`, `INV_DESCUENTO`, `INV_ALMACEN`, `INV_EXHIBICION`, `ID_MARCA`, `ID_SUCURSAL`) VALUES
(1, 'Belicoso', 'FUERTE', 'PIRAMIDE', 549, 29.68, 20, 0, 9, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_marcas`
--

DROP TABLE IF EXISTS `tbl_marcas`;
CREATE TABLE IF NOT EXISTS `tbl_marcas` (
  `ID_MARCA` int(11) NOT NULL AUTO_INCREMENT,
  `MAR_NOMBRE` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `MAR_ORIGEN` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`ID_MARCA`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_marcas`
--

INSERT INTO `tbl_marcas` (`ID_MARCA`, `MAR_NOMBRE`, `MAR_ORIGEN`) VALUES
(1, 'BOLIVAR', 'CUBA'),
(2, 'COHIBA', 'CUBA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_sucursal`
--

DROP TABLE IF EXISTS `tbl_sucursal`;
CREATE TABLE IF NOT EXISTS `tbl_sucursal` (
  `ID_SUCURSAL` int(11) NOT NULL AUTO_INCREMENT,
  `SUC_NOMBRE` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID_SUCURSAL`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_sucursal`
--

INSERT INTO `tbl_sucursal` (`ID_SUCURSAL`, `SUC_NOMBRE`) VALUES
(1, 'CIGAR CO 1 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_transferencia`
--

DROP TABLE IF EXISTS `tbl_transferencia`;
CREATE TABLE IF NOT EXISTS `tbl_transferencia` (
  `ID_TRANSFERENCIA` int(11) NOT NULL,
  `TRA_CANTIDAD` int(11) DEFAULT NULL,
  `TRA_FECHA` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ID_USU_EMI` int(11) NOT NULL,
  `ID_USU_REC` int(11) NOT NULL,
  `ID_SUC_EMI` int(11) NOT NULL,
  `ID_SUC_REC` int(11) NOT NULL,
  `ID_INVENTARIO` int(11) NOT NULL,
  KEY `ID_TRANSFERENCIA` (`ID_TRANSFERENCIA`),
  KEY `ID_USU_EMI` (`ID_USU_EMI`),
  KEY `ID_USU_REC` (`ID_USU_REC`),
  KEY `ID_SUC_EMI` (`ID_SUC_EMI`),
  KEY `ID_SUC_REC` (`ID_SUC_REC`),
  KEY `ID_INVENTARIO` (`ID_INVENTARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

DROP TABLE IF EXISTS `tbl_usuarios`;
CREATE TABLE IF NOT EXISTS `tbl_usuarios` (
  `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `USU_USUARIO` varchar(30) NOT NULL,
  `USU_CONTRASENA` varchar(80) DEFAULT NULL,
  `USU_NOMBRE` varchar(25) NOT NULL,
  `USU_APELLIDOPAT` varchar(30) NOT NULL,
  `USU_APELLIDOMAT` varchar(30) NOT NULL,
  `USU_CELULAR` varchar(20) NOT NULL,
  `USU_CORREO` varchar(50) NOT NULL,
  `USU_ROLL` varchar(50) DEFAULT NULL,
  `ID_HORARIO` int(11) DEFAULT NULL,
  `ID_SUCURSAL` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_USUARIO`),
  UNIQUE KEY `ID_HORARIO` (`ID_HORARIO`),
  KEY `ID_SUCURSAL` (`ID_SUCURSAL`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`ID_USUARIO`, `USU_USUARIO`, `USU_CONTRASENA`, `USU_NOMBRE`, `USU_APELLIDOPAT`, `USU_APELLIDOMAT`, `USU_CELULAR`, `USU_CORREO`, `USU_ROLL`, `ID_HORARIO`, `ID_SUCURSAL`) VALUES
(1, '1', 'c4ca4238a0b923820dcc509a6f75849b', '1', 'Martinez', 'Ayala', '6241543710', 'promartinez2@gmail.com', '1', 1, 1),
(7, '2', 'c81e728d9d4c2f636f067f89cc14862c', '1', '1', '1', '1', '11', '2', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ventas`
--

DROP TABLE IF EXISTS `tbl_ventas`;
CREATE TABLE IF NOT EXISTS `tbl_ventas` (
  `ID_VENTA` int(11) NOT NULL AUTO_INCREMENT,
  `VEN_CANTIDAD` int(11) DEFAULT NULL,
  `VEN_FECHA` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `VEN_PRECIOMX` int(11) DEFAULT NULL,
  `VEN_PRECIOUS` int(11) DEFAULT NULL,
  `VEN_TIPO` varchar(30) DEFAULT NULL,
  `VEN_TOTAL` double DEFAULT NULL,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_INVENTARIO` int(11) NOT NULL,
  PRIMARY KEY (`ID_VENTA`),
  KEY `ID_USUARIO` (`ID_USUARIO`),
  KEY `ID_INVENTARIO` (`ID_INVENTARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_compras`
--
ALTER TABLE `tbl_compras`
  ADD CONSTRAINT `ID_USUARIO` FOREIGN KEY (`ID_USUARIO`) REFERENCES `tbl_usuarios` (`ID_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_inventario`
--
ALTER TABLE `tbl_inventario`
  ADD CONSTRAINT `tbl_inventario_ibfk_1` FOREIGN KEY (`ID_MARCA`) REFERENCES `tbl_marcas` (`ID_MARCA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_inventario_ibfk_2` FOREIGN KEY (`ID_SUCURSAL`) REFERENCES `tbl_sucursal` (`ID_SUCURSAL`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_transferencia`
--
ALTER TABLE `tbl_transferencia`
  ADD CONSTRAINT `tbl_transferencia_ibfk_1` FOREIGN KEY (`ID_USU_EMI`) REFERENCES `tbl_usuarios` (`ID_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_transferencia_ibfk_2` FOREIGN KEY (`ID_USU_REC`) REFERENCES `tbl_usuarios` (`ID_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_transferencia_ibfk_3` FOREIGN KEY (`ID_SUC_EMI`) REFERENCES `tbl_sucursal` (`ID_SUCURSAL`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_transferencia_ibfk_4` FOREIGN KEY (`ID_SUC_REC`) REFERENCES `tbl_sucursal` (`ID_SUCURSAL`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_transferencia_ibfk_5` FOREIGN KEY (`ID_TRANSFERENCIA`) REFERENCES `tbl_inventario` (`ID_INVENTARIO`) ON DELETE NO ACTION;

--
-- Filtros para la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD CONSTRAINT `tbl_usuarios_ibfk_1` FOREIGN KEY (`ID_HORARIO`) REFERENCES `tbl_horario` (`ID_HORARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_usuarios_ibfk_2` FOREIGN KEY (`ID_SUCURSAL`) REFERENCES `tbl_sucursal` (`ID_SUCURSAL`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_ventas`
--
ALTER TABLE `tbl_ventas`
  ADD CONSTRAINT `tbl_ventas_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `tbl_usuarios` (`ID_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_ventas_ibfk_2` FOREIGN KEY (`ID_INVENTARIO`) REFERENCES `tbl_inventario` (`ID_INVENTARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
