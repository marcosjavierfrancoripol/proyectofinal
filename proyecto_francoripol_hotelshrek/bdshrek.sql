-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2021 a las 12:09:10
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdshrek`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidop` varchar(100) NOT NULL,
  `apellidom` varchar(100) NOT NULL,
  `edad` int(100) NOT NULL,
  `telefono` int(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellidop`, `apellidom`, `edad`, `telefono`, `email`) VALUES
(0, '', '', '', 0, 0, ''),
(1, 'marcos', 'franco', 'ripol', 17, 2147483647, 'hola@gmail.com'),
(2, 'alberto', 'franco', 'ripolas', 12, 65463456, 'holeww@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `edad` int(100) NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `telefono` int(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `nombre`, `apellidos`, `edad`, `sexo`, `telefono`, `email`) VALUES
(0, '', '', 0, '', 0, ''),
(1, 'alberta', 'rosalia', 1723, 'femenino', 2147483647, 'hola@gmail.com'),
(2, 'marcos', 'franco ripol', 11, 'masculino', 65463456, 'hola@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id` int(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `piso` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fechain` date NOT NULL,
  `fechasal` date NOT NULL,
  `gente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id`, `tipo`, `piso`, `nombre`, `fechain`, `fechasal`, `gente`) VALUES
(1, 'chida', 2, 'marcos', '2021-11-13', '2021-12-04', 'maria'),
(5, 'saas', 2, 'albertus', '2021-12-13', '2021-12-04', 'maria'),
(6, 'deluxe', 4, 'marcos', '2021-12-13', '2021-12-31', 'chucho');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjeta`
--

CREATE TABLE `tarjeta` (
  `titular` varchar(100) NOT NULL,
  `numerodetar` int(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `cvv` int(100) NOT NULL,
  `caducidad` date NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `codigo_postal` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tarjeta`
--

INSERT INTO `tarjeta` (`titular`, `numerodetar`, `marca`, `cvv`, `caducidad`, `direccion`, `codigo_postal`) VALUES
('', 0, '', 0, '0000-00-00', '', 0),
('aa', 12344, 'hola', 123, '2021-12-31', 'calle royale', 1234543),
('francis', 12344, 'hola', 123, '2021-12-15', 'calle chuchos', 1234543),
('marcos', 123434, 'hola', 123, '2021-12-23', 'calle chucho', 12345),
('marcw', 1, 'hola', 123, '2021-12-16', 'calle chucho', 123);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD PRIMARY KEY (`titular`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
