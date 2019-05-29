-- Base de datos: `parcial`
--
CREATE DATABASE IF NOT EXISTS `parcial` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `parcial`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_socioemocional`
--

CREATE TABLE `historial_socioemocional` (
  `ID` int(5) NOT NULL,
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
  `USUARIO_ID` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historial_socioemocional`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion_caso`
--

CREATE TABLE `notificacion_caso` (
  `NR` int(11) NOT NULL,
  `FECHA` varchar(100) DEFAULT NULL,
  `GRADO` int(5) DEFAULT NULL,
  `EDAD` int(5) DEFAULT NULL,
  `ESTUDIANTE` varchar(255) DEFAULT NULL,
  `ASISTENCIA` varchar(255) DEFAULT NULL,
  `MOTIVO` varchar(255) DEFAULT NULL,
  `DESCRIPCION` varchar(255) DEFAULT NULL,
  `COMENTARIOG` varchar(255) DEFAULT NULL,
  `COMPROMISODOC` varchar(255) DEFAULT NULL,
  `COMPROMISOPAD` varchar(255) DEFAULT NULL,
  `CONCLUSIONES` varchar(255) DEFAULT NULL
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
-- Estructura de tabla para la tabla `seguimiento`
--

CREATE TABLE `seguimiento` (
  `ID` int(11) NOT NULL,
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
  `ocupacionP` varchar(100) DEFAULT NULL,
  `telefonoP` varchar(20) DEFAULT NULL,
  `nombreM` varchar(100) DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `historial_socioemocional`
--
ALTER TABLE `historial_socioemocional`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historial_socioemocional`
--
ALTER TABLE `historial_socioemocional`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--