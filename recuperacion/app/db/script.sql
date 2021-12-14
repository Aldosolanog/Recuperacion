CREATE DATABASE IF NOT EXISTS `bdusuarios`;

CREATE TABLE IF NOT EXISTS `antecedentes` (
  `ID` int(11) NOT NULL,
  `neo` varchar(5) DEFAULT NULL,
  `neoplacias` varchar(30) DEFAULT NULL,
  `hmneo` varchar(5) DEFAULT NULL,
  `tub` varchar(5) DEFAULT NULL,
  `tuberculosis` varchar(30) DEFAULT NULL,
  `hmtub` varchar(5) DEFAULT NULL,
  `dia` varchar(5) DEFAULT NULL,
  `diabetes` varchar(30) DEFAULT NULL,
  `hmdia` varchar(5) DEFAULT NULL,
  `art` varchar(5) DEFAULT NULL,
  `artritis` varchar(30) DEFAULT NULL,
  `hmart` varchar(5) DEFAULT NULL,
  `car` varchar(5) DEFAULT NULL,
  `cardiopatias` varchar(30) DEFAULT NULL,
  `hmcar` varchar(5) DEFAULT NULL,
  `neu` varchar(5) DEFAULT NULL,
  `Neurobiologicas` varchar(30) DEFAULT NULL,
  `hmneu` varchar(5) DEFAULT NULL,
  `tra` varchar(5) DEFAULT NULL,
  `trastornos` varchar(30) DEFAULT NULL,
  `hmtra` varchar(5) DEFAULT NULL,
  `res` varchar(5) DEFAULT NULL,
  `respiratorias` varchar(30) DEFAULT NULL,
  `hmres` varchar(5) DEFAULT NULL,
  `hep` varchar(5) DEFAULT NULL,
  `hepatopatias` varchar(30) DEFAULT NULL,
  `hmhep` varchar(5) DEFAULT NULL,
  `ale` varchar(5) DEFAULT NULL,
  `alergias` varchar(30) DEFAULT NULL,
  `hmale` varchar(5) DEFAULT NULL,
  `hip` varchar(5) DEFAULT NULL,
  `hipertension` varchar(30) DEFAULT NULL,
  `hmhip` varchar(5) DEFAULT NULL,
  `hem` varchar(5) DEFAULT NULL,
  `hematologicas` varchar(30) DEFAULT NULL,
  `hmhem` varchar(5) DEFAULT NULL,
  `hen` varchar(5) DEFAULT NULL,
  `hendocrinologicas` varchar(30) DEFAULT NULL,
  `hmhen` varchar(5) DEFAULT NULL,
  `gen` varchar(5) DEFAULT NULL,
  `geneticas` varchar(30) DEFAULT NULL,
  `hmgen` varchar(5) DEFAULT NULL,
  `otr` varchar(5) DEFAULT NULL,
  `otros` varchar(30) DEFAULT NULL,
  `hmotr` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `antecedentes`
--
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_usuarios`
--

CREATE TABLE IF NOT EXISTS `info_usuarios` (
  `ID` int(11) NOT NULL,
  `fecha_elab` date DEFAULT NULL,
  `nombre` varchar(100) NOT NULL,
  `genero` varchar(10) DEFAULT NULL,
  `edad` int(3) DEFAULT NULL,
  `fecha_de_nacimiento` date DEFAULT NULL,
  `ocupacion` varchar(50) DEFAULT NULL,
  `lateralidad` varchar(8) DEFAULT NULL,
  `nacionalidad` varchar(30) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `telefono` bigint(10) DEFAULT NULL,
  `domicilio` varchar(100) DEFAULT NULL,
  `telefono_sos` bigint(10) DEFAULT NULL,
  `contacto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `info_usuarios`
--

--------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_log`
--

CREATE TABLE IF NOT EXISTS `roles_log` (
  `ID` int(11) NOT NULL,
  `rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles_log`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_log`
--

CREATE TABLE IF NOT EXISTS `usuarios_log` (
  `ID` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `ID_roles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `antecedentes`
--
ALTER TABLE `antecedentes`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `info_usuarios`
--
ALTER TABLE `info_usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `roles_log`
--
ALTER TABLE `roles_log`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios_log`
--
ALTER TABLE `usuarios_log`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_roles` (`ID_roles`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `antecedentes`
--
ALTER TABLE `antecedentes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `info_usuarios`
--
ALTER TABLE `info_usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios_log`
--
ALTER TABLE `usuarios_log`
  ADD CONSTRAINT `fk_roles` FOREIGN KEY (`ID_roles`) REFERENCES `roles_log` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
