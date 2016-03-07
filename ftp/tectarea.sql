-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2016 a las 21:17:10
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
(14, 1, 1, 'http://localhost/proyecto-tectarea/uploads/fotos_perfil/chaqueta3.jpg'),
(15, 1, 1, 'http://localhost/proyecto-tectarea/uploads/fotos_perfil/comisiones.jpg'),
(16, 1, 2, 'http://localhost/proyecto-tectarea/uploads/titulacion/Doc4.pdf');

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
(1, 1, '04123456789');

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
(6, 'inicio-tecnico');

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
(6, 1, 6);

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
(5, 'Declaración responsable', '', '0.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_tecnico`
--

CREATE TABLE `servicio_tecnico` (
  `id_servicio_tecnico` int(11) NOT NULL,
  `id_tecnico` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `id_estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicio_tecnico`
--

INSERT INTO `servicio_tecnico` (`id_servicio_tecnico`, `id_tecnico`, `id_servicio`, `id_estatus`) VALUES
(1, 1, 1, 1);

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
(16, 'Mas de 250', '');

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
(4, 1, 'Linkedin');

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
(2, 'unifamiliar'),
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
(29, 4, 15, 0, '1990.00');

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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comunidad_autonoma`
--
ALTER TABLE `comunidad_autonoma`
  ADD PRIMARY KEY (`id_comunidad_autonoma`);

--
-- Indices de la tabla `estatus`
--
ALTER TABLE `estatus`
  ADD PRIMARY KEY (`id_estatus`);

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
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `persona_usuario_idx` (`id_persona`),
  ADD KEY `usuario_rol_idx` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comunidad_autonoma`
--
ALTER TABLE `comunidad_autonoma`
  MODIFY `id_comunidad_autonoma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `estatus`
--
ALTER TABLE `estatus`
  MODIFY `id_estatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
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
  MODIFY `id_operacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
  MODIFY `id_rol_operacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `servicio_tecnico`
--
ALTER TABLE `servicio_tecnico`
  MODIFY `id_servicio_tecnico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `superficie`
--
ALTER TABLE `superficie`
  MODIFY `id_superficie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `tecnico`
--
ALTER TABLE `tecnico`
  MODIFY `id_tecnico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tecnico_red_social`
--
ALTER TABLE `tecnico_red_social`
  MODIFY `id_red_social` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipologia`
--
ALTER TABLE `tipologia`
  MODIFY `id_tipologia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tipologia_superficie`
--
ALTER TABLE `tipologia_superficie`
  MODIFY `id_tipologia_superficie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
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
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
