  -- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2019 a las 04:02:34
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parcial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_socioemocional`
--

CREATE TABLE `historial_socioemocional` (
  `id` int(5) NOT NULL,
  `TIEMPO_LIBRE` varchar(255) DEFAULT NULL,
  `R_INTERPERSONALE` varchar(255) DEFAULT NULL,
  `COM_EST_ANIMO` varchar(255) DEFAULT NULL,
  `EVENTOS_TRAU` varchar(255) DEFAULT NULL,
  `PROY_VIDA` varchar(255) DEFAULT NULL,
  `ANTECEDENTE_SALUD` int(255) DEFAULT NULL,
  `ANTECEDENTE_AP` int(255) DEFAULT NULL,
  `USUARIO_ID` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion_caso`
--

CREATE TABLE `notificacion_caso` (
  `NR` int(11) NOT NULL,
  `FECHA` varchar(100) DEFAULT NULL,
  `EDAD` int(5) DEFAULT NULL,
  `GRADO` int(5) DEFAULT NULL,
  `ASISTENCIA` varchar(255) DEFAULT NULL,
  `MOTIVO` varchar(255) DEFAULT NULL,
  `DESCRIPCION` varchar(255) DEFAULT NULL,
  `COMENTARIOG` varchar(255) DEFAULT NULL,
  `COMPROMISODOC` varchar(255) DEFAULT NULL,
  `COMPROMISOPAD` varchar(255) DEFAULT NULL,
  `CONCLUSIONES` varchar(255) DEFAULT NULL,
  `ESTUDIANTE` varchar(255) DEFAULT NULL,
  `USUARIO_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_pedagogico`
--

CREATE TABLE `perfil_pedagogico` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(100) DEFAULT NULL,
  `EDAD` int(5) DEFAULT NULL,
  `FECHA` varchar(100) DEFAULT NULL,
  `SOCIOAFECTIVA` varchar(255) DEFAULT NULL,
  `COGNITIVA` varchar(255) DEFAULT NULL,
  `COMUNICACION` varchar(255) DEFAULT NULL,
  `MORAL` varchar(255) DEFAULT NULL,
  `FORTALEZAS` varchar(255) DEFAULT NULL,
  `DEBILIDADES` varchar(255) DEFAULT NULL,
  `BARRERAS` varchar(255) DEFAULT NULL,
  `ESTRATEGIAS` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relaciones_familiares`
--

CREATE TABLE `relaciones_familiares` (
  `vr_ep` varchar(255) DEFAULT NULL,
  `vr_em` varchar(255) DEFAULT NULL,
  `vr_eh` varchar(255) DEFAULT NULL,
  `vr_ea` varchar(255) DEFAULT NULL,
  `vr_eo` varchar(255) DEFAULT NULL,
  `OBSERVACIONES` varchar(255) DEFAULT NULL,
  `HISTORIA_ESCOL` varchar(255) DEFAULT NULL,
  `HABITOS_ESTU` varchar(255) DEFAULT NULL,
  `NR` int(5) NOT NULL,
  `USUARIO_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `historial_socioemocional`
--
ALTER TABLE `historial_socioemocional`
  ADD PRIMARY KEY (`NH`),
  ADD KEY `usuario_id2` (`USUARIO_ID`);

--
-- Indices de la tabla `notificacion_caso`
--
ALTER TABLE `notificacion_caso`
  ADD PRIMARY KEY (`NR`),
  ADD KEY `usuario_id` (`USUARIO_ID`);

--
-- Indices de la tabla `perfil_pedagogico`
--
ALTER TABLE `perfil_pedagogico`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `relaciones_familiares`
--
ALTER TABLE `relaciones_familiares`
  ADD PRIMARY KEY (`NR`),
  ADD KEY `usu_id` (`USUARIO_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historial_socioemocional`
--
ALTER TABLE `historial_socioemocional`
  MODIFY `NH` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notificacion_caso`
--
ALTER TABLE `notificacion_caso`
  MODIFY `NR` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perfil_pedagogico`
--
ALTER TABLE `perfil_pedagogico`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `relaciones_familiares`
--
ALTER TABLE `relaciones_familiares`
  MODIFY `NR` int(5) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historial_socioemocional`
--
ALTER TABLE `historial_socioemocional`
  ADD CONSTRAINT `usuario_id2` FOREIGN KEY (`USUARIO_ID`) REFERENCES `perfil_pedagogico` (`ID`);

--
-- Filtros para la tabla `notificacion_caso`
--
ALTER TABLE `notificacion_caso`
  ADD CONSTRAINT `usuario_id` FOREIGN KEY (`USUARIO_ID`) REFERENCES `perfil_pedagogico` (`ID`);

--
-- Filtros para la tabla `relaciones_familiares`
--
ALTER TABLE `relaciones_familiares`
  ADD CONSTRAINT `usu_id` FOREIGN KEY (`USUARIO_ID`) REFERENCES `perfil_pedagogico` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE `SEGUIMIENTO` (
`ID` int(11) NOT NULL AUTO_INCREMENT,
`fecha` varchar(100) DEFAULT NULL,
`nombreEstudiate` varchar(100) DEFAULT NULL,
`identificacion` varchar(20) DEFAULT NULL,
`fechaNacimiento` varchar(100) DEFAULT NULL,
`ciUdadOrigen` varchar(100) DEFAULT NULL,
`edadactual` int(5) DEFAULT NULL,
`cursoActual` int(5) DEFAULT NULL,
`Repitenciacurso` varchar(100) DEFAULT NULL,
`viveEstudiante` varchar(100) DEFAULT NULL,
`nombreV` varchar(100) DEFAULT NULL,
`edadV` varchar(100) DEFAULT NULL,
`direccioV` varchar(100) DEFAULT NULL,
`telefonoV` varchar(20) DEFAULT NULL,
`profesionV` varchar(100) DEFAULT NULL,
`nombreP` varchar(100) DEFAULT NULL,
`escolarizacionP` varchar(20) DEFAULT NULL,
`direccionP` varchar(100) DEFAULT NULL,
`edadP` int(5) DEFAULT NULL,
`ocupacionP`varchar(100) DEFAULT NULL,
`telefonoP`varchar(20) DEFAULT NULL,
`nombreM`varchar(100) DEFAULT NULL,
`escolarizacionM` varchar(20) DEFAULT NULL,
`direccionM` varchar(100) DEFAULT NULL,
`edadM` int(5) DEFAULT NULL,
`ocupacionM` varchar(100) DEFAULT NULL,
`telefonoM` varchar(20) DEFAULT NULL,
`nombreO` varchar(100) DEFAULT NULL,
`escolarizacionO` varchar(20) DEFAULT NULL,
`direccionO` varchar(100) DEFAULT NULL,
`edadO` int(5) DEFAULT NULL,
`ocupacionO` varchar(100) DEFAULT NULL,
`telefonoO` varchar(20) DEFAULT NULL
 PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE `historial_socioemocional` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `NUMEROID` varchar(100) DEFAULT NULL,
  `NOMBRES` varchar(100) DEFAULT NULL,
  `APELLIDOS` varchar(100) DEFAULT NULL,
  `TIEMPO_LIBRE` varchar(255) DEFAULT NULL,
  `R_INTERPERSONALE` varchar(255) DEFAULT NULL,
  `COM_EST_ANIMO` varchar(255) DEFAULT NULL,
  `EVENTOS_TRAU` varchar(255) DEFAULT NULL,
  `PROY_VIDA` varchar(255) DEFAULT NULL,
  `ANTECEDENTE_SALUD` varchar(255) DEFAULT NULL,
  `ANTECEDENTE_AP` varchar(255) DEFAULT NULL,
  `USUARIO_ID` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;


CREATE TABLE `relaciones_familiares` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `NUMEROID` varchar(100) DEFAULT NULL,
  `NOMBRES` varchar(100) DEFAULT NULL,
  `APELLIDOS` varchar(100) DEFAULT NULL,
  `vr_ep` varchar(255) DEFAULT NULL,
  `vr_em` varchar(255) DEFAULT NULL,
  `vr_eh` varchar(255) DEFAULT NULL,
  `vr_ea` varchar(255) DEFAULT NULL,
  `vr_eo` varchar(255) DEFAULT NULL,
  `OBSERVACIONES` varchar(255) DEFAULT NULL,
  `HISTORIA_ESCOL` varchar(255) DEFAULT NULL,
  `HABITOS_ESTU` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;


 ID	NUMEROID	NOMBRES	APELLIDOS	vr_ep	vr_em	vr_eh	vr_ea	vr_eo	OBSERVACIONES	HISTORIA_ESCOL	HABITOS_ESTU


CREATE TABLE `login_` (
  `ID` int(20) NOT NULL ,
  `NOMBRES` varchar(100) DEFAULT NULL,
  `APELLIDOS` varchar(100) DEFAULT NULL,
  `password_` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
