-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2016 a las 21:30:00
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tectarea`
--
CREATE DATABASE IF NOT EXISTS `tectarea` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tectarea`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antiguedad`
--

CREATE TABLE `antiguedad` (
  `id_antiguedad` int(11) NOT NULL,
  `rango_antiguedad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `antiguedad`
--

INSERT INTO `antiguedad` (`id_antiguedad`, `rango_antiguedad`) VALUES
(1, '30-35'),
(2, '36-40'),
(3, '41-50'),
(4, '51-75'),
(5, '76-100'),
(6, 'Mas de 100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificados_experiencia`
--

CREATE TABLE `certificados_experiencia` (
  `id_certificado_experiencia` int(11) NOT NULL,
  `certificado` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_tecnico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `certificados_experiencia`
--

INSERT INTO `certificados_experiencia` (`id_certificado_experiencia`, `certificado`, `nombre`, `fecha_creacion`, `id_tecnico`) VALUES
(1, 'http://localhost/proyecto-tectarea/uploads/certificados/1/bn3.jpg', 'bn3.jpg', '2016-03-07 17:10:19', 1),
(2, 'http://localhost/proyecto-tectarea/uploads/certificados/1/bn2.jpg', 'bn2.jpg', '2016-03-07 17:12:23', 1),
(12, 'http://localhost/proyecto-tectarea/uploads/certificados/1/bn1.jpg', 'bn1.jpg', '2016-03-07 18:42:15', 1),
(13, '', 'bn2.jpg', '2016-03-07 19:09:44', 0),
(14, 'http://localhost/proyecto-tectarea/uploads/certificados/1/twitterwidget1.zip', 'twitterwidget1.zip', '2016-03-07 19:46:14', 1),
(15, 'http://localhost/proyecto-tectarea/uploads/certificados/1/twitterwidget3.zip', 'twitterwidget3.zip', '2016-03-07 19:49:21', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidad_autonoma`
--

CREATE TABLE `comunidad_autonoma` (
  `id_comunidad_autonoma` int(11) NOT NULL,
  `nombre_comunidad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comunidad_autonoma`
--

INSERT INTO `comunidad_autonoma` (`id_comunidad_autonoma`, `nombre_comunidad`) VALUES
(1, 'Venezuela');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condicion_visado`
--

CREATE TABLE `condicion_visado` (
  `id_visado` int(11) NOT NULL,
  `condicion` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `condicion_visado`
--

INSERT INTO `condicion_visado` (`id_visado`, `condicion`) VALUES
(1, 'Si'),
(2, 'No');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dia`
--

CREATE TABLE `dia` (
  `id_dia` int(11) NOT NULL,
  `dia` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dia`
--

INSERT INTO `dia` (`id_dia`, `dia`) VALUES
(1, 'Lunes'),
(2, 'Martes'),
(3, 'Miercoles'),
(4, 'Jueves'),
(5, 'Viernes'),
(6, 'Sabado'),
(7, 'Domingo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disponibilidad`
--

CREATE TABLE `disponibilidad` (
  `id_disponibilidad` int(11) NOT NULL,
  `id_turno` int(11) NOT NULL,
  `id_tecnico` int(11) NOT NULL,
  `disponibilidad` int(11) NOT NULL,
  `linea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `disponibilidad`
--

INSERT INTO `disponibilidad` (`id_disponibilidad`, `id_turno`, `id_tecnico`, `disponibilidad`, `linea`) VALUES
(77, 1, 1, 1, 1),
(78, 1, 1, 2, 2),
(79, 1, 1, 3, 3),
(80, 1, 1, 4, 4),
(81, 1, 1, 5, 5),
(82, 1, 1, 6, 6),
(83, 1, 1, 7, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE `estatus` (
  `id_estatus` int(11) NOT NULL,
  `nombre_estatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estatus`
--

INSERT INTO `estatus` (`id_estatus`, `nombre_estatus`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_pago`
--

CREATE TABLE `forma_pago` (
  `id_forma_pago` int(11) NOT NULL,
  `nombre_forma_pago` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `forma_pago`
--

INSERT INTO `forma_pago` (`id_forma_pago`, `nombre_forma_pago`) VALUES
(1, 'Pago en efectivo el día de la visita'),
(2, 'Pago por transferencia a la entrega de la documentación'),
(3, 'Pago fraccionado en dos veces. Por adelantado y a la entrega de la documentación.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(11) NOT NULL,
  `id_tecnico` int(11) NOT NULL,
  `id_tipo_imagen` int(11) NOT NULL,
  `nombre_imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `id_tecnico`, `id_tipo_imagen`, `nombre_imagen`) VALUES
(16, 1, 2, 'http://localhost/proyecto-tectarea/uploads/titulacion/doc.pdf'),
(20, 1, 1, 'http://localhost/proyecto-tectarea/uploads/fotos_perfil/bing-128.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numero_telefonico`
--

CREATE TABLE `numero_telefonico` (
  `id_numero_telefonico` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `numero_telefonico` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `numero_telefonico`
--

INSERT INTO `numero_telefonico` (`id_numero_telefonico`, `id_persona`, `numero_telefonico`) VALUES
(1, 1, '041234567893');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operacion`
--

CREATE TABLE `operacion` (
  `id_operacion` int(11) NOT NULL,
  `nombre_operacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `operacion`
--

INSERT INTO `operacion` (`id_operacion`, `nombre_operacion`) VALUES
(1, 'inicio-index'),
(2, 'inicio-cuenta'),
(3, 'inicio-negocio'),
(4, 'inicio-areaTecnico'),
(5, 'inicio-solicitud'),
(6, 'inicio-tecnico'),
(7, 'negocio-activarServicio'),
(8, 'negocio-disponibilidad'),
(9, 'inicio-servicio'),
(10, 'inicio-ubicacion'),
(11, 'inicio-experiencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombre`, `apellido`, `correo`) VALUES
(1, 'Johana', 'Rivas', 'johanarivas57@gmail.com'),
(2, 'Prueba', 'Técnico', 'pruebatecnico@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE `plan` (
  `id_plan` int(11) NOT NULL,
  `nombre_plan` varchar(100) NOT NULL,
  `creditos_plan` decimal(12,2) NOT NULL,
  `costo_plan` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `plan`
--

INSERT INTO `plan` (`id_plan`, `nombre_plan`, `creditos_plan`, `costo_plan`) VALUES
(1, 'Gratuito', '15.00', '0.00'),
(2, 'Premium', '200.00', '9.90'),
(3, 'Selection', '500.00', '19.90');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poblacion`
--

CREATE TABLE `poblacion` (
  `id_poblacion` int(11) NOT NULL,
  `id_provincia` int(11) NOT NULL,
  `nombre_zona` varchar(100) NOT NULL,
  `tasa_administrativa` decimal(12,2) NOT NULL,
  `creditos` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `poblacion`
--

INSERT INTO `poblacion` (`id_poblacion`, `id_provincia`, `nombre_zona`, `tasa_administrativa`, `creditos`) VALUES
(1, 1, 'Barcelona', '12.00', '100.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `id_provincia` int(11) NOT NULL,
  `id_comunidad_autonoma` int(11) NOT NULL,
  `nombre_provincia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`id_provincia`, `id_comunidad_autonoma`, `nombre_provincia`) VALUES
(1, 1, 'Anzoategui');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre_rol`) VALUES
(1, 'administrador'),
(2, 'tecnico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_operacion`
--

CREATE TABLE `rol_operacion` (
  `id_rol_operacion` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_operacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol_operacion`
--

INSERT INTO `rol_operacion` (`id_rol_operacion`, `id_rol`, `id_operacion`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id_servicio` int(11) NOT NULL,
  `nombre_servicio` varchar(100) NOT NULL,
  `descripcion_servicio` varchar(100) NOT NULL,
  `visado` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id_servicio`, `nombre_servicio`, `descripcion_servicio`, `visado`) VALUES
(1, 'Certificados energéticos', '', '0.00'),
(2, 'Inspección técnica de edificios', '', '0.00'),
(3, 'Informe de evaluación de edificios', '', '0.00'),
(4, 'Licencias de actividad', '', '0.00'),
(5, 'Declaración responsable', '', '0.00'),
(6, 'Cedula de habitabilidad', '', '0.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_forma_pago`
--

CREATE TABLE `servicio_forma_pago` (
  `id_servicio_forma_pago` int(11) NOT NULL,
  `id_servicio_tecnico` int(11) NOT NULL,
  `id_forma_pago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio_forma_pago`
--

INSERT INTO `servicio_forma_pago` (`id_servicio_forma_pago`, `id_servicio_tecnico`, `id_forma_pago`) VALUES
(3, 2, 1),
(4, 3, 1),
(5, 4, 3),
(6, 5, 3),
(8, 10, 1),
(9, 10, 2),
(10, 11, 3),
(11, 14, 3),
(12, 15, 3),
(13, 16, 3),
(14, 17, 3),
(15, 18, 3),
(16, 19, 3),
(17, 20, 3),
(18, 24, 3),
(19, 25, 1),
(20, 26, 3),
(21, 29, 1),
(22, 29, 2),
(23, 30, 1),
(24, 30, 2),
(27, 32, 3),
(28, 33, 2),
(29, 33, 3),
(30, 34, 3),
(31, 35, 3),
(45, 31, 1),
(46, 31, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_tecnico`
--

CREATE TABLE `servicio_tecnico` (
  `id_servicio_tecnico` int(11) NOT NULL,
  `id_tecnico` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `descripcion_servicio` varchar(255) NOT NULL,
  `id_estatus` int(11) NOT NULL,
  `visado` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicio_tecnico`
--

INSERT INTO `servicio_tecnico` (`id_servicio_tecnico`, `id_tecnico`, `id_servicio`, `descripcion_servicio`, `id_estatus`, `visado`) VALUES
(1, 1, 0, '', 1, 0),
(31, 1, 1, 'Prueba 2', 2, 24),
(32, 1, 1, '', 1, 29);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `superficie`
--

CREATE TABLE `superficie` (
  `id_superficie` int(11) NOT NULL,
  `rango` varchar(100) NOT NULL,
  `unidad` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `superficie`
--

INSERT INTO `superficie` (`id_superficie`, `rango`, `unidad`) VALUES
(1, 'Menos de 50', 'm2'),
(2, '51-80', 'm2'),
(3, '81-120', 'm2'),
(4, '121-180', 'm2'),
(5, '181-350', 'm2'),
(6, '351-500', 'm2'),
(7, '501-1000', 'm2'),
(8, 'Más de 1000', 'm2'),
(9, 'Menos de 5', ''),
(10, '5-10', ''),
(11, '11-30', ''),
(12, '31-60', ''),
(13, '61-120', ''),
(14, '121-180', ''),
(15, '181-250', ''),
(16, 'Mas de 250', ''),
(100, 'Menos de 175', 'm2'),
(101, '176-350', 'm2'),
(102, '351-500', 'm2'),
(103, '501-700', 'm2'),
(104, '701-1000', 'm2'),
(105, '1001-1350', 'm2'),
(106, '1351-1700', 'm2'),
(107, '1701-2000', 'm2'),
(108, '2001-2500', 'm2'),
(109, '2501-3000', 'm2'),
(110, '3001-3500', 'm2'),
(111, '3501-4000', 'm2'),
(112, '4001-4500', 'm2'),
(113, '4501-5000', 'm2'),
(114, '5001-5500', 'm2'),
(115, '5501-6000', 'm2'),
(116, '6001-6500', 'm2'),
(117, '6501-7000', 'm2'),
(118, '7001-7500', 'm2'),
(119, '7501-8000', 'm2'),
(120, '8001-9000', 'm2'),
(121, '9001-9500', 'm2'),
(122, '9501-10000', 'm2'),
(123, '10001-12500', 'm2'),
(124, 'Más de 12500', 'm2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `superficie_antiguedad`
--

CREATE TABLE `superficie_antiguedad` (
  `id_superficie_antiguedad` int(11) NOT NULL,
  `id_superficie` int(11) NOT NULL,
  `id_antiguedad` int(11) NOT NULL,
  `id_servicio_tecnico` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `superficie_antiguedad`
--

INSERT INTO `superficie_antiguedad` (`id_superficie_antiguedad`, `id_superficie`, `id_antiguedad`, `id_servicio_tecnico`, `precio`) VALUES
(1, 100, 1, 7, '85.00'),
(2, 100, 2, 7, '89.25'),
(3, 100, 3, 7, '93.50'),
(4, 100, 4, 7, '97.75'),
(5, 100, 5, 7, '106.25'),
(6, 100, 6, 7, '119.00'),
(7, 101, 1, 7, '90.00'),
(8, 101, 2, 7, '94.50'),
(9, 101, 3, 7, '99.00'),
(10, 101, 4, 7, '103.50'),
(11, 101, 5, 7, '112.50'),
(12, 101, 6, 7, '126.00'),
(13, 102, 1, 7, '100.00'),
(14, 102, 2, 7, '105.00'),
(15, 102, 3, 7, '110.00'),
(16, 102, 4, 7, '115.00'),
(17, 102, 5, 7, '125.00'),
(18, 102, 6, 7, '140.00'),
(19, 103, 1, 7, '115.00'),
(20, 103, 2, 7, '120.75'),
(21, 103, 3, 7, '126.50'),
(22, 103, 4, 7, '132.25'),
(23, 103, 5, 7, '143.75'),
(24, 103, 6, 7, '161.00'),
(25, 104, 1, 7, '130.00'),
(26, 104, 2, 7, '136.50'),
(27, 104, 3, 7, '143.00'),
(28, 104, 4, 7, '149.50'),
(29, 104, 5, 7, '162.50'),
(30, 104, 6, 7, '182.00'),
(31, 105, 1, 7, '145.00'),
(32, 105, 2, 7, '152.25'),
(33, 105, 3, 7, '159.50'),
(34, 105, 4, 7, '166.75'),
(35, 105, 5, 7, '181.25'),
(36, 105, 6, 7, '203.00'),
(37, 106, 1, 7, '165.00'),
(38, 106, 2, 7, '173.25'),
(39, 106, 3, 7, '181.50'),
(40, 106, 4, 7, '189.75'),
(41, 106, 5, 7, '206.25'),
(42, 106, 6, 7, '231.00'),
(43, 107, 1, 7, '185.00'),
(44, 107, 2, 7, '194.25'),
(45, 107, 3, 7, '203.50'),
(46, 107, 4, 7, '212.75'),
(47, 107, 5, 7, '231.25'),
(48, 107, 6, 7, '259.00'),
(49, 108, 1, 7, '200.00'),
(50, 108, 2, 7, '210.00'),
(51, 108, 3, 7, '220.00'),
(52, 108, 4, 7, '230.00'),
(53, 108, 5, 7, '250.00'),
(54, 108, 6, 7, '280.00'),
(55, 109, 1, 7, '225.00'),
(56, 109, 2, 7, '236.25'),
(57, 109, 3, 7, '247.50'),
(58, 109, 4, 7, '258.75'),
(59, 109, 5, 7, '281.25'),
(60, 109, 6, 7, '315.00'),
(61, 110, 1, 7, '240.00'),
(62, 110, 2, 7, '252.00'),
(63, 110, 3, 7, '264.00'),
(64, 110, 4, 7, '276.00'),
(65, 110, 5, 7, '300.00'),
(66, 110, 6, 7, '336.00'),
(67, 111, 1, 7, '255.00'),
(68, 111, 2, 7, '267.75'),
(69, 111, 3, 7, '280.50'),
(70, 111, 4, 7, '293.25'),
(71, 111, 5, 7, '318.75'),
(72, 111, 6, 7, '357.00'),
(73, 112, 1, 7, '285.00'),
(74, 112, 2, 7, '299.25'),
(75, 112, 3, 7, '313.50'),
(76, 112, 4, 7, '327.75'),
(77, 112, 5, 7, '356.25'),
(78, 112, 6, 7, '399.00'),
(79, 113, 1, 7, '300.00'),
(80, 113, 2, 7, '315.00'),
(81, 113, 3, 7, '330.00'),
(82, 113, 4, 7, '345.00'),
(83, 113, 5, 7, '375.00'),
(84, 113, 6, 7, '420.00'),
(85, 114, 1, 7, '320.00'),
(86, 114, 2, 7, '336.00'),
(87, 114, 3, 7, '352.00'),
(88, 114, 4, 7, '368.00'),
(89, 114, 5, 7, '400.00'),
(90, 114, 6, 7, '448.00'),
(91, 115, 1, 7, '335.00'),
(92, 115, 2, 7, '351.75'),
(93, 115, 3, 7, '368.50'),
(94, 115, 4, 7, '385.25'),
(95, 115, 5, 7, '418.75'),
(96, 115, 6, 7, '469.00'),
(97, 116, 1, 7, '365.00'),
(98, 116, 2, 7, '383.25'),
(99, 116, 3, 7, '401.50'),
(100, 116, 4, 7, '419.75'),
(101, 116, 5, 7, '456.25'),
(102, 116, 6, 7, '511.00'),
(103, 117, 1, 7, '380.00'),
(104, 117, 2, 7, '399.00'),
(105, 117, 3, 7, '418.00'),
(106, 117, 4, 7, '437.00'),
(107, 117, 5, 7, '475.00'),
(108, 117, 6, 7, '532.00'),
(109, 118, 1, 7, '395.00'),
(110, 118, 2, 7, '414.75'),
(111, 118, 3, 7, '434.50'),
(112, 118, 4, 7, '454.25'),
(113, 118, 5, 7, '493.75'),
(114, 118, 6, 7, '553.00'),
(115, 119, 1, 7, '410.00'),
(116, 119, 2, 7, '430.50'),
(117, 119, 3, 7, '451.00'),
(118, 119, 4, 7, '471.50'),
(119, 119, 5, 7, '512.50'),
(120, 119, 6, 7, '574.00'),
(121, 120, 1, 7, '445.00'),
(122, 120, 2, 7, '467.25'),
(123, 120, 3, 7, '489.50'),
(124, 120, 4, 7, '511.75'),
(125, 120, 5, 7, '556.25'),
(126, 120, 6, 7, '623.00'),
(127, 121, 1, 7, '460.00'),
(128, 121, 2, 7, '483.00'),
(129, 121, 3, 7, '506.00'),
(130, 121, 4, 7, '529.00'),
(131, 121, 5, 7, '575.00'),
(132, 121, 6, 7, '644.00'),
(133, 122, 1, 7, '490.00'),
(134, 122, 2, 7, '514.50'),
(135, 122, 3, 7, '539.00'),
(136, 122, 4, 7, '563.50'),
(137, 122, 5, 7, '612.50'),
(138, 122, 6, 7, '686.00'),
(139, 123, 1, 7, '550.00'),
(140, 123, 2, 7, '577.50'),
(141, 123, 3, 7, '605.00'),
(142, 123, 4, 7, '632.50'),
(143, 123, 5, 7, '687.50'),
(144, 123, 6, 7, '770.00'),
(145, 124, 1, 7, '0.00'),
(146, 124, 2, 7, '0.00'),
(147, 124, 3, 7, '0.00'),
(148, 124, 4, 7, '0.00'),
(149, 124, 5, 7, '0.00'),
(150, 124, 6, 7, '0.00'),
(151, 100, 1, 8, '255.00'),
(152, 100, 2, 8, '267.75'),
(153, 100, 3, 8, '280.50'),
(154, 100, 4, 8, '293.25'),
(155, 100, 5, 8, '318.75'),
(156, 100, 6, 8, '357.00'),
(157, 101, 1, 8, '270.00'),
(158, 101, 2, 8, '283.50'),
(159, 101, 3, 8, '297.00'),
(160, 101, 4, 8, '310.50'),
(161, 101, 5, 8, '337.50'),
(162, 101, 6, 8, '378.00'),
(163, 102, 1, 8, '300.00'),
(164, 102, 2, 8, '315.00'),
(165, 102, 3, 8, '330.00'),
(166, 102, 4, 8, '345.00'),
(167, 102, 5, 8, '375.00'),
(168, 102, 6, 8, '420.00'),
(169, 103, 1, 8, '345.00'),
(170, 103, 2, 8, '362.25'),
(171, 103, 3, 8, '379.50'),
(172, 103, 4, 8, '396.75'),
(173, 103, 5, 8, '431.25'),
(174, 103, 6, 8, '483.00'),
(175, 104, 1, 8, '390.00'),
(176, 104, 2, 8, '409.50'),
(177, 104, 3, 8, '429.00'),
(178, 104, 4, 8, '448.50'),
(179, 104, 5, 8, '487.50'),
(180, 104, 6, 8, '546.00'),
(181, 105, 1, 8, '435.00'),
(182, 105, 2, 8, '456.75'),
(183, 105, 3, 8, '478.50'),
(184, 105, 4, 8, '500.25'),
(185, 105, 5, 8, '543.75'),
(186, 105, 6, 8, '609.00'),
(187, 106, 1, 8, '495.00'),
(188, 106, 2, 8, '519.75'),
(189, 106, 3, 8, '544.50'),
(190, 106, 4, 8, '569.25'),
(191, 106, 5, 8, '618.75'),
(192, 106, 6, 8, '693.00'),
(193, 107, 1, 8, '555.00'),
(194, 107, 2, 8, '582.75'),
(195, 107, 3, 8, '610.50'),
(196, 107, 4, 8, '638.25'),
(197, 107, 5, 8, '693.75'),
(198, 107, 6, 8, '777.00'),
(199, 108, 1, 8, '600.00'),
(200, 108, 2, 8, '630.00'),
(201, 108, 3, 8, '660.00'),
(202, 108, 4, 8, '690.00'),
(203, 108, 5, 8, '750.00'),
(204, 108, 6, 8, '840.00'),
(205, 109, 1, 8, '675.00'),
(206, 109, 2, 8, '708.75'),
(207, 109, 3, 8, '742.50'),
(208, 109, 4, 8, '776.25'),
(209, 109, 5, 8, '843.75'),
(210, 109, 6, 8, '945.00'),
(211, 110, 1, 8, '720.00'),
(212, 110, 2, 8, '756.00'),
(213, 110, 3, 8, '792.00'),
(214, 110, 4, 8, '828.00'),
(215, 110, 5, 8, '900.00'),
(216, 110, 6, 8, '1008.00'),
(217, 111, 1, 8, '765.00'),
(218, 111, 2, 8, '803.25'),
(219, 111, 3, 8, '841.50'),
(220, 111, 4, 8, '879.75'),
(221, 111, 5, 8, '956.25'),
(222, 111, 6, 8, '1071.00'),
(223, 112, 1, 8, '855.00'),
(224, 112, 2, 8, '897.75'),
(225, 112, 3, 8, '940.50'),
(226, 112, 4, 8, '983.25'),
(227, 112, 5, 8, '1068.75'),
(228, 112, 6, 8, '1197.00'),
(229, 113, 1, 8, '900.00'),
(230, 113, 2, 8, '945.00'),
(231, 113, 3, 8, '990.00'),
(232, 113, 4, 8, '1035.00'),
(233, 113, 5, 8, '1125.00'),
(234, 113, 6, 8, '1260.00'),
(235, 114, 1, 8, '960.00'),
(236, 114, 2, 8, '1008.00'),
(237, 114, 3, 8, '1056.00'),
(238, 114, 4, 8, '1104.00'),
(239, 114, 5, 8, '1200.00'),
(240, 114, 6, 8, '1344.00'),
(241, 115, 1, 8, '1005.00'),
(242, 115, 2, 8, '1055.25'),
(243, 115, 3, 8, '1105.50'),
(244, 115, 4, 8, '1155.75'),
(245, 115, 5, 8, '1256.25'),
(246, 115, 6, 8, '1407.00'),
(247, 116, 1, 8, '1095.00'),
(248, 116, 2, 8, '1149.75'),
(249, 116, 3, 8, '1204.50'),
(250, 116, 4, 8, '1259.25'),
(251, 116, 5, 8, '1368.75'),
(252, 116, 6, 8, '1533.00'),
(253, 117, 1, 8, '1140.00'),
(254, 117, 2, 8, '1197.00'),
(255, 117, 3, 8, '1254.00'),
(256, 117, 4, 8, '1311.00'),
(257, 117, 5, 8, '1425.00'),
(258, 117, 6, 8, '1596.00'),
(259, 118, 1, 8, '1185.00'),
(260, 118, 2, 8, '1244.25'),
(261, 118, 3, 8, '1303.50'),
(262, 118, 4, 8, '1362.75'),
(263, 118, 5, 8, '1481.25'),
(264, 118, 6, 8, '1659.00'),
(265, 119, 1, 8, '1230.00'),
(266, 119, 2, 8, '1291.50'),
(267, 119, 3, 8, '1353.00'),
(268, 119, 4, 8, '1414.50'),
(269, 119, 5, 8, '1537.50'),
(270, 119, 6, 8, '1722.00'),
(271, 120, 1, 8, '1335.00'),
(272, 120, 2, 8, '1401.75'),
(273, 120, 3, 8, '1468.50'),
(274, 120, 4, 8, '1535.25'),
(275, 120, 5, 8, '1668.75'),
(276, 120, 6, 8, '1869.00'),
(277, 121, 1, 8, '1380.00'),
(278, 121, 2, 8, '1449.00'),
(279, 121, 3, 8, '1518.00'),
(280, 121, 4, 8, '1587.00'),
(281, 121, 5, 8, '1725.00'),
(282, 121, 6, 8, '1932.00'),
(283, 122, 1, 8, '1470.00'),
(284, 122, 2, 8, '1543.50'),
(285, 122, 3, 8, '1617.00'),
(286, 122, 4, 8, '1690.50'),
(287, 122, 5, 8, '1837.50'),
(288, 122, 6, 8, '2058.00'),
(289, 123, 1, 8, '1560.00'),
(290, 123, 2, 8, '1638.00'),
(291, 123, 3, 8, '1716.00'),
(292, 123, 4, 8, '1794.00'),
(293, 123, 5, 8, '1950.00'),
(294, 123, 6, 8, '2184.00'),
(295, 124, 1, 8, '0.00'),
(296, 124, 2, 8, '0.00'),
(297, 124, 3, 8, '0.00'),
(298, 124, 4, 8, '0.00'),
(299, 124, 5, 8, '0.00'),
(300, 124, 6, 8, '0.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnico`
--

CREATE TABLE `tecnico` (
  `id_tecnico` int(11) NOT NULL,
  `id_titulo` int(11) NOT NULL,
  `id_plan` int(11) NOT NULL,
  `id_poblacion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `biografia` varchar(100) NOT NULL,
  `web` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tecnico`
--

INSERT INTO `tecnico` (`id_tecnico`, `id_titulo`, `id_plan`, `id_poblacion`, `id_usuario`, `biografia`, `web`) VALUES
(1, 6, 1, 1, 2, 'https://tectarea.es', 'https://tectarea.es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnico_red_social`
--

CREATE TABLE `tecnico_red_social` (
  `id_red_social` int(11) NOT NULL,
  `id_tecnico` int(11) NOT NULL,
  `red_social` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tecnico_red_social`
--

INSERT INTO `tecnico_red_social` (`id_red_social`, `id_tecnico`, `red_social`) VALUES
(2, 1, 'Facebook'),
(3, 1, 'Twitter'),
(4, 1, 'Linkedin'),
(5, 1, 'Facebook'),
(6, 1, 'Twitter'),
(7, 1, 'Linkedin'),
(8, 1, 'Facebook'),
(9, 1, 'Twitter'),
(10, 1, 'Linkedin'),
(11, 1, 'Facebook'),
(12, 1, 'Twitter'),
(13, 1, 'Linkedin'),
(14, 1, 'Facebook'),
(15, 1, 'Twitter'),
(16, 1, 'Linkedin'),
(17, 1, 'Facebook'),
(18, 1, 'Twitter'),
(19, 1, 'Linkedin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipologia`
--

CREATE TABLE `tipologia` (
  `id_tipologia` int(11) NOT NULL,
  `tipo_tipologia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipologia`
--

INSERT INTO `tipologia` (`id_tipologia`, `tipo_tipologia`) VALUES
(1, 'Piso'),
(2, 'Unifamiliar'),
(3, 'Local/Oficina'),
(4, 'Edificio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipologia_superficie`
--

CREATE TABLE `tipologia_superficie` (
  `id_tipologia_superficie` int(11) NOT NULL,
  `id_tipologia` int(11) NOT NULL,
  `id_superficie` int(11) NOT NULL,
  `id_servicio_tecnico` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipologia_superficie`
--

INSERT INTO `tipologia_superficie` (`id_tipologia_superficie`, `id_tipologia`, `id_superficie`, `id_servicio_tecnico`, `precio`) VALUES
(1, 1, 1, 0, '65.00'),
(2, 1, 2, 0, '69.00'),
(3, 1, 3, 0, '79.00'),
(4, 1, 4, 0, '89.00'),
(5, 1, 5, 0, '129.00'),
(6, 1, 6, 0, '159.00'),
(7, 1, 7, 0, '229.00'),
(9, 2, 1, 0, '69.00'),
(10, 2, 2, 0, '79.00'),
(11, 2, 3, 0, '99.00'),
(12, 2, 4, 0, '109.00'),
(13, 2, 5, 0, '139.00'),
(14, 2, 6, 0, '189.00'),
(15, 2, 7, 0, '269.00'),
(16, 3, 1, 0, '79.00'),
(17, 3, 3, 0, '89.00'),
(18, 3, 3, 0, '109.00'),
(19, 3, 4, 0, '139.00'),
(20, 3, 5, 0, '179.00'),
(21, 3, 6, 0, '239.00'),
(22, 3, 7, 0, '299.00'),
(23, 4, 9, 0, '199.00'),
(24, 4, 10, 0, '299.00'),
(25, 4, 11, 0, '549.00'),
(26, 4, 12, 0, '799.00'),
(27, 4, 13, 0, '990.00'),
(28, 4, 14, 0, '1490.00'),
(29, 4, 15, 0, '1990.00'),
(30, 1, 1, 29, '65.00'),
(31, 1, 2, 29, '69.00'),
(32, 1, 3, 29, '79.00'),
(33, 1, 4, 29, '89.00'),
(34, 1, 5, 29, '129.00'),
(35, 1, 6, 29, '159.00'),
(36, 1, 7, 29, '229.00'),
(37, 2, 1, 29, '69.00'),
(38, 2, 2, 29, '79.00'),
(39, 2, 3, 29, '99.00'),
(40, 2, 4, 29, '109.00'),
(41, 2, 5, 29, '139.00'),
(42, 2, 6, 29, '189.00'),
(43, 2, 7, 29, '269.00'),
(44, 3, 1, 29, '79.00'),
(45, 3, 2, 29, '89.00'),
(46, 3, 3, 29, '109.00'),
(47, 3, 4, 29, '139.00'),
(48, 3, 5, 29, '179.00'),
(49, 3, 6, 29, '239.00'),
(50, 3, 7, 29, '299.00'),
(51, 4, 9, 29, '199.00'),
(52, 4, 10, 29, '299.00'),
(53, 4, 11, 29, '549.00'),
(54, 4, 12, 29, '799.00'),
(55, 4, 13, 29, '990.00'),
(56, 4, 14, 29, '1490.00'),
(57, 4, 15, 29, '1990.00'),
(58, 1, 1, 30, '65.00'),
(59, 1, 2, 30, '69.00'),
(60, 1, 3, 30, '79.00'),
(61, 1, 4, 30, '89.00'),
(62, 1, 5, 30, '129.00'),
(63, 1, 6, 30, '159.00'),
(64, 1, 7, 30, '229.00'),
(65, 2, 1, 30, '69.00'),
(66, 2, 2, 30, '79.00'),
(67, 2, 3, 30, '99.00'),
(68, 2, 4, 30, '109.00'),
(69, 2, 5, 30, '139.00'),
(70, 2, 6, 30, '189.00'),
(71, 2, 7, 30, '269.00'),
(72, 3, 1, 30, '79.00'),
(73, 3, 2, 30, '89.00'),
(74, 3, 3, 30, '109.00'),
(75, 3, 4, 30, '139.00'),
(76, 3, 5, 30, '179.00'),
(77, 3, 6, 30, '239.00'),
(78, 3, 7, 30, '299.00'),
(79, 4, 9, 30, '199.00'),
(80, 4, 10, 30, '299.00'),
(81, 4, 11, 30, '549.00'),
(82, 4, 12, 30, '799.00'),
(83, 4, 13, 30, '990.00'),
(84, 4, 14, 30, '1490.00'),
(85, 4, 15, 30, '1990.00'),
(86, 1, 1, 31, '300.00'),
(87, 1, 2, 31, '69.00'),
(88, 1, 3, 31, '79.00'),
(89, 1, 4, 31, '89.00'),
(90, 1, 5, 31, '129.00'),
(91, 1, 6, 31, '159.00'),
(92, 1, 7, 31, '229.00'),
(93, 2, 1, 31, '69.00'),
(94, 2, 2, 31, '79.00'),
(95, 2, 3, 31, '99.00'),
(96, 2, 4, 31, '109.00'),
(97, 2, 5, 31, '139.00'),
(98, 2, 6, 31, '189.00'),
(99, 2, 7, 31, '269.00'),
(100, 3, 1, 31, '79.00'),
(101, 3, 2, 31, '89.00'),
(102, 3, 3, 31, '109.00'),
(103, 3, 4, 31, '139.00'),
(104, 3, 5, 31, '179.00'),
(105, 3, 6, 31, '239.00'),
(106, 3, 7, 31, '299.00'),
(107, 4, 9, 31, '199.00'),
(108, 4, 10, 31, '299.00'),
(109, 4, 11, 31, '549.00'),
(110, 4, 12, 31, '799.00'),
(111, 4, 13, 31, '990.00'),
(112, 4, 14, 31, '1490.00'),
(113, 4, 15, 31, '1900.00'),
(114, 1, 1, 32, '70.00'),
(115, 1, 2, 32, '74.00'),
(116, 1, 3, 32, '84.00'),
(117, 1, 4, 32, '94.00'),
(118, 1, 5, 32, '134.00'),
(119, 1, 6, 32, '164.00'),
(120, 1, 7, 32, '234.00'),
(121, 2, 1, 32, '74.00'),
(122, 2, 2, 32, '84.00'),
(123, 2, 3, 32, '104.00'),
(124, 2, 4, 32, '114.00'),
(125, 2, 5, 32, '144.00'),
(126, 2, 6, 32, '194.00'),
(127, 2, 7, 32, '274.00'),
(128, 1, 1, 35, '65.00'),
(129, 1, 2, 35, '69.00'),
(130, 1, 3, 35, '79.00'),
(131, 1, 4, 35, '89.00'),
(132, 1, 5, 35, '129.00'),
(133, 1, 6, 35, '159.00'),
(134, 1, 7, 35, '229.00'),
(135, 2, 1, 35, '69.00'),
(136, 2, 2, 35, '79.00'),
(137, 2, 3, 35, '99.00'),
(138, 2, 4, 35, '109.00'),
(139, 2, 5, 35, '139.00'),
(140, 2, 6, 35, '189.00'),
(141, 2, 7, 35, '269.00'),
(142, 1, 1, 32, '65.00'),
(143, 1, 2, 32, '69.00'),
(144, 1, 3, 32, '79.00'),
(145, 1, 4, 32, '89.00'),
(146, 1, 5, 32, '129.00'),
(147, 1, 6, 32, '159.00'),
(148, 1, 7, 32, '229.00'),
(149, 2, 1, 32, '69.00'),
(150, 2, 2, 32, '79.00'),
(151, 2, 3, 32, '99.00'),
(152, 2, 4, 32, '109.00'),
(153, 2, 5, 32, '139.00'),
(154, 2, 6, 32, '189.00'),
(155, 2, 7, 32, '269.00'),
(156, 3, 1, 32, '79.00'),
(157, 3, 2, 32, '89.00'),
(158, 3, 3, 32, '109.00'),
(159, 3, 4, 32, '139.00'),
(160, 3, 5, 32, '179.00'),
(161, 3, 6, 32, '239.00'),
(162, 3, 7, 32, '299.00'),
(163, 4, 9, 32, '199.00'),
(164, 4, 10, 32, '299.00'),
(165, 4, 11, 32, '549.00'),
(166, 4, 12, 32, '799.00'),
(167, 4, 13, 32, '990.00'),
(168, 4, 14, 32, '1490.00'),
(169, 4, 15, 32, '1990.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_imagen`
--

CREATE TABLE `tipo_imagen` (
  `id_tipo_imagen` int(11) NOT NULL,
  `tipo_imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_imagen`
--

INSERT INTO `tipo_imagen` (`id_tipo_imagen`, `tipo_imagen`) VALUES
(1, 'foto perfil'),
(2, 'titulo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulo`
--

CREATE TABLE `titulo` (
  `id_titulo` int(11) NOT NULL,
  `nombre_titulo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `titulo`
--

INSERT INTO `titulo` (`id_titulo`, `nombre_titulo`) VALUES
(5, 'Arquitecto'),
(6, 'Ing. Civil'),
(7, 'Ing. de Sistemas'),
(8, 'Ing. en Computación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `id_turno` int(11) NOT NULL,
  `turno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`id_turno`, `turno`) VALUES
(1, 'Mañana'),
(2, 'Al Mediodia'),
(3, 'Tarde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `fecha_creacion_usuario` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `id_persona`, `id_rol`, `usuario`, `clave`, `fecha_creacion_usuario`) VALUES
(2, 1, 1, 'johanarivas_57@gmail.com', 'e47a8de5cc5c46e20e091ecee9ed412cb2ab79e0', '2016-01-21 11:42:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visado_servicio`
--

CREATE TABLE `visado_servicio` (
  `id_visado_servicio` int(11) NOT NULL,
  `monto` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `visado_servicio`
--

INSERT INTO `visado_servicio` (`id_visado_servicio`, `monto`) VALUES
(2, '2.00'),
(3, '5.00'),
(4, '0.00'),
(5, '0.00'),
(6, '10.00'),
(7, '10.00'),
(8, '10.00'),
(9, '10.00'),
(10, '10.00'),
(11, '10.00'),
(12, '15.00'),
(13, '10.00'),
(14, '0.00'),
(15, '0.00'),
(16, '15.00'),
(17, '0.00'),
(18, '0.00'),
(19, '0.00'),
(20, '0.00'),
(21, '0.00'),
(22, '0.00'),
(23, '0.00'),
(24, '0.00'),
(25, '5.00'),
(26, '0.00'),
(27, '0.00'),
(28, '0.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visado_tecnico`
--

CREATE TABLE `visado_tecnico` (
  `id_visado_tecnico` int(11) NOT NULL,
  `id_condicion_visado` int(11) NOT NULL,
  `monto` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `visado_tecnico`
--

INSERT INTO `visado_tecnico` (`id_visado_tecnico`, `id_condicion_visado`, `monto`) VALUES
(1, 2, '1.00'),
(2, 1, '2.00'),
(3, 1, '3.00'),
(4, 1, '4.00'),
(5, 1, '5.00'),
(6, 1, '6.00'),
(7, 1, '7.00'),
(8, 1, '8.00'),
(9, 1, '9.00'),
(10, 1, '10.00'),
(11, 1, '11.00'),
(12, 1, '12.00'),
(13, 1, '13.00'),
(14, 1, '14.00'),
(15, 1, '15.00'),
(16, 1, '16.00'),
(17, 1, '17.00'),
(18, 1, '18.00'),
(19, 1, '19.00'),
(20, 1, '20.00'),
(21, 1, '21.00'),
(22, 2, '22.00'),
(23, 2, '23.00'),
(24, 2, '0.00'),
(25, 1, '25.00'),
(26, 1, '26.00'),
(27, 1, '27.00'),
(28, 1, '28.00'),
(29, 2, '0.00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `antiguedad`
--
ALTER TABLE `antiguedad`
  ADD PRIMARY KEY (`id_antiguedad`);

--
-- Indices de la tabla `certificados_experiencia`
--
ALTER TABLE `certificados_experiencia`
  ADD PRIMARY KEY (`id_certificado_experiencia`),
  ADD UNIQUE KEY `certificado` (`certificado`);

--
-- Indices de la tabla `comunidad_autonoma`
--
ALTER TABLE `comunidad_autonoma`
  ADD PRIMARY KEY (`id_comunidad_autonoma`);

--
-- Indices de la tabla `condicion_visado`
--
ALTER TABLE `condicion_visado`
  ADD PRIMARY KEY (`id_visado`);

--
-- Indices de la tabla `dia`
--
ALTER TABLE `dia`
  ADD PRIMARY KEY (`id_dia`);

--
-- Indices de la tabla `disponibilidad`
--
ALTER TABLE `disponibilidad`
  ADD PRIMARY KEY (`id_disponibilidad`);

--
-- Indices de la tabla `estatus`
--
ALTER TABLE `estatus`
  ADD PRIMARY KEY (`id_estatus`);

--
-- Indices de la tabla `forma_pago`
--
ALTER TABLE `forma_pago`
  ADD PRIMARY KEY (`id_forma_pago`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `numero_telefonico`
--
ALTER TABLE `numero_telefonico`
  ADD PRIMARY KEY (`id_numero_telefonico`),
  ADD KEY `persona_telefono_idx` (`id_persona`);

--
-- Indices de la tabla `operacion`
--
ALTER TABLE `operacion`
  ADD PRIMARY KEY (`id_operacion`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id_plan`);

--
-- Indices de la tabla `poblacion`
--
ALTER TABLE `poblacion`
  ADD PRIMARY KEY (`id_poblacion`),
  ADD KEY `provincia_poblacion_idx` (`id_provincia`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`id_provincia`),
  ADD KEY `comunidad_provincia_idx` (`id_comunidad_autonoma`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `rol_operacion`
--
ALTER TABLE `rol_operacion`
  ADD PRIMARY KEY (`id_rol_operacion`),
  ADD KEY `id_rol_idx` (`id_rol`),
  ADD KEY `id_operacion_idx` (`id_operacion`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `servicio_forma_pago`
--
ALTER TABLE `servicio_forma_pago`
  ADD PRIMARY KEY (`id_servicio_forma_pago`);

--
-- Indices de la tabla `servicio_tecnico`
--
ALTER TABLE `servicio_tecnico`
  ADD PRIMARY KEY (`id_servicio_tecnico`);

--
-- Indices de la tabla `superficie`
--
ALTER TABLE `superficie`
  ADD PRIMARY KEY (`id_superficie`);

--
-- Indices de la tabla `superficie_antiguedad`
--
ALTER TABLE `superficie_antiguedad`
  ADD PRIMARY KEY (`id_superficie_antiguedad`);

--
-- Indices de la tabla `tecnico`
--
ALTER TABLE `tecnico`
  ADD PRIMARY KEY (`id_tecnico`),
  ADD KEY `titulo_tecnico_idx` (`id_titulo`),
  ADD KEY `plan_tecnico_idx` (`id_plan`),
  ADD KEY `poblacion_tecnico_idx` (`id_poblacion`),
  ADD KEY `usuario_tecnico_idx` (`id_usuario`);

--
-- Indices de la tabla `tecnico_red_social`
--
ALTER TABLE `tecnico_red_social`
  ADD PRIMARY KEY (`id_red_social`);

--
-- Indices de la tabla `tipologia`
--
ALTER TABLE `tipologia`
  ADD PRIMARY KEY (`id_tipologia`);

--
-- Indices de la tabla `tipologia_superficie`
--
ALTER TABLE `tipologia_superficie`
  ADD PRIMARY KEY (`id_tipologia_superficie`);

--
-- Indices de la tabla `tipo_imagen`
--
ALTER TABLE `tipo_imagen`
  ADD PRIMARY KEY (`id_tipo_imagen`);

--
-- Indices de la tabla `titulo`
--
ALTER TABLE `titulo`
  ADD PRIMARY KEY (`id_titulo`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`id_turno`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `persona_usuario_idx` (`id_persona`),
  ADD KEY `usuario_rol_idx` (`id_rol`);

--
-- Indices de la tabla `visado_servicio`
--
ALTER TABLE `visado_servicio`
  ADD PRIMARY KEY (`id_visado_servicio`);

--
-- Indices de la tabla `visado_tecnico`
--
ALTER TABLE `visado_tecnico`
  ADD PRIMARY KEY (`id_visado_tecnico`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `antiguedad`
--
ALTER TABLE `antiguedad`
  MODIFY `id_antiguedad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `certificados_experiencia`
--
ALTER TABLE `certificados_experiencia`
  MODIFY `id_certificado_experiencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `comunidad_autonoma`
--
ALTER TABLE `comunidad_autonoma`
  MODIFY `id_comunidad_autonoma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `condicion_visado`
--
ALTER TABLE `condicion_visado`
  MODIFY `id_visado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `dia`
--
ALTER TABLE `dia`
  MODIFY `id_dia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `disponibilidad`
--
ALTER TABLE `disponibilidad`
  MODIFY `id_disponibilidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT de la tabla `estatus`
--
ALTER TABLE `estatus`
  MODIFY `id_estatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `forma_pago`
--
ALTER TABLE `forma_pago`
  MODIFY `id_forma_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `numero_telefonico`
--
ALTER TABLE `numero_telefonico`
  MODIFY `id_numero_telefonico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `operacion`
--
ALTER TABLE `operacion`
  MODIFY `id_operacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `plan`
--
ALTER TABLE `plan`
  MODIFY `id_plan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `poblacion`
--
ALTER TABLE `poblacion`
  MODIFY `id_poblacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id_provincia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `rol_operacion`
--
ALTER TABLE `rol_operacion`
  MODIFY `id_rol_operacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `servicio_forma_pago`
--
ALTER TABLE `servicio_forma_pago`
  MODIFY `id_servicio_forma_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT de la tabla `servicio_tecnico`
--
ALTER TABLE `servicio_tecnico`
  MODIFY `id_servicio_tecnico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `superficie`
--
ALTER TABLE `superficie`
  MODIFY `id_superficie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT de la tabla `superficie_antiguedad`
--
ALTER TABLE `superficie_antiguedad`
  MODIFY `id_superficie_antiguedad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;
--
-- AUTO_INCREMENT de la tabla `tecnico`
--
ALTER TABLE `tecnico`
  MODIFY `id_tecnico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tecnico_red_social`
--
ALTER TABLE `tecnico_red_social`
  MODIFY `id_red_social` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `tipologia`
--
ALTER TABLE `tipologia`
  MODIFY `id_tipologia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipologia_superficie`
--
ALTER TABLE `tipologia_superficie`
  MODIFY `id_tipologia_superficie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;
--
-- AUTO_INCREMENT de la tabla `tipo_imagen`
--
ALTER TABLE `tipo_imagen`
  MODIFY `id_tipo_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `titulo`
--
ALTER TABLE `titulo`
  MODIFY `id_titulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `id_turno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `visado_servicio`
--
ALTER TABLE `visado_servicio`
  MODIFY `id_visado_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `visado_tecnico`
--
ALTER TABLE `visado_tecnico`
  MODIFY `id_visado_tecnico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `numero_telefonico`
--
ALTER TABLE `numero_telefonico`
  ADD CONSTRAINT `persona_telefono` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `poblacion`
--
ALTER TABLE `poblacion`
  ADD CONSTRAINT `provincia_poblacion` FOREIGN KEY (`id_provincia`) REFERENCES `provincia` (`id_provincia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD CONSTRAINT `comunidad_provincia` FOREIGN KEY (`id_comunidad_autonoma`) REFERENCES `comunidad_autonoma` (`id_comunidad_autonoma`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `rol_operacion`
--
ALTER TABLE `rol_operacion`
  ADD CONSTRAINT `id_operacion` FOREIGN KEY (`id_operacion`) REFERENCES `operacion` (`id_operacion`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `id_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `tecnico`
--
ALTER TABLE `tecnico`
  ADD CONSTRAINT `plan_tecnico` FOREIGN KEY (`id_plan`) REFERENCES `plan` (`id_plan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `poblacion_tecnico` FOREIGN KEY (`id_poblacion`) REFERENCES `poblacion` (`id_poblacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `titulo_tecnico` FOREIGN KEY (`id_titulo`) REFERENCES `titulo` (`id_titulo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_tecnico` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `persona_usuario` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
