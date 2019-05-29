
-- Base de datos: `parcial`
--
CREATE DATABASE IF NOT EXISTS `parcial` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `parcial`;

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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfil_pedagogico`
--
ALTER TABLE `perfil_pedagogico`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfil_pedagogico`
--
ALTER TABLE `perfil_pedagogico`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
