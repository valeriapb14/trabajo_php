-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2023 a las 19:51:20
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`ID`, `Nombre`, `Descripcion`) VALUES
(1, 'Ventas', 'Departamento de ventas'),
(2, 'Marketing', 'Departamento de marketing'),
(3, 'Recursos Humanos', 'Departamento de recursos humanos'),
(4, 'Finanzas', 'Departamento de finanzas'),
(5, 'Producción', 'Departamento de producción'),
(6, 'Logística', 'Departamento de logística'),
(7, 'Tecnología', 'Departamento de tecnología'),
(8, 'Servicio al Cliente', 'Departamento de servicio al cliente'),
(9, 'jin', 'uur'),
(10, 'Finan<asd', 'Se venden'),
(11, 'Finan<asd', 'Se venden');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `ID` int(11) NOT NULL,
  `NombreEmp` varchar(255) DEFAULT NULL,
  `Apellido` varchar(255) DEFAULT NULL,
  `DepartamentoID` int(11) DEFAULT NULL,
  `FechaContratacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`ID`, `NombreEmp`, `Apellido`, `DepartamentoID`, `FechaContratacion`) VALUES
(1, 'John', 'osorio', 1, '2022-01-15'),
(2, 'Jane', 'Smith', 2, '2021-06-10'),
(3, 'Michael', 'Johnson', 3, '2022-03-02'),
(4, 'Emily', 'Williams', 1, '2021-09-20'),
(5, 'David', 'Brown', 4, '2022-05-01'),
(6, 'Sarah', 'Davis', 2, '2021-02-18'),
(7, 'Christopher', 'Miller', 5, '2022-07-08'),
(8, 'Olivia', 'Wilson', 3, '2021-12-05'),
(9, 'Daniel', 'Taylor', 6, '2022-04-16'),
(10, 'Sophia', 'Anderson', 4, '2021-08-12'),
(11, 'Matthew', 'Thomas', 7, '2022-02-25'),
(12, 'Ava', 'Martinez', 5, '2021-10-30'),
(13, 'James', 'Hernandez', 8, '2022-06-22'),
(14, 'Isabella', 'Garcia', 6, '2021-11-17'),
(15, 'Benjamin', 'Lopez', 7, '2022-09-05'),
(19, 'Claudia', 'colco', 1, '2023-06-16'),
(20, 'Solso', 'Cardenas', 2, '2023-06-21'),
(21, 'Sofia', 'Bedoya', 3, '2023-06-16'),
(23, 'Chechito', 'Colso', 7, '2023-06-06'),
(24, 'Soff', 'Liu', 4, '2023-06-10'),
(25, 'i', 'o', 5, '2023-06-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `Usuario` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`ID`, `Usuario`, `Password`) VALUES
(1, 'valeria123@gmail.com', 'vale123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salarios`
--

CREATE TABLE `salarios` (
  `ID` int(11) NOT NULL,
  `EmpleadoID` int(11) DEFAULT NULL,
  `Salario` decimal(10,2) DEFAULT NULL,
  `FechaInicio` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `salarios`
--

INSERT INTO `salarios` (`ID`, `EmpleadoID`, `Salario`, `FechaInicio`) VALUES
(1, 1, 3500.00, '2022-01-01'),
(2, 2, 4000.00, '2021-06-01'),
(3, 3, 3200.00, '2022-03-01'),
(4, 4, 3800.00, '2021-09-01'),
(5, 5, 5000.00, '2022-05-01'),
(6, 6, 3800.00, '2021-02-01'),
(7, 7, 4500.00, '2022-07-01'),
(8, 8, 3200.00, '2021-12-01'),
(9, 9, 4000.00, '2022-04-01'),
(10, 10, 3500.00, '2021-08-01'),
(11, 11, 4800.00, '2022-02-01'),
(12, 12, 3600.00, '2021-10-01'),
(13, 13, 4200.00, '2022-06-01'),
(14, 14, 3800.00, '2021-11-01'),
(15, 15, 4200.00, '2022-09-01'),
(16, 12, 1000.00, '0000-00-00'),
(17, 10, 2000.00, '0000-00-00'),
(18, 1, 3000.00, '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `DepartamentoID` (`DepartamentoID`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `salarios`
--
ALTER TABLE `salarios`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `EmpleadoID` (`EmpleadoID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `salarios`
--
ALTER TABLE `salarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`DepartamentoID`) REFERENCES `departamentos` (`ID`);

--
-- Filtros para la tabla `salarios`
--
ALTER TABLE `salarios`
  ADD CONSTRAINT `salarios_ibfk_1` FOREIGN KEY (`EmpleadoID`) REFERENCES `empleados` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
