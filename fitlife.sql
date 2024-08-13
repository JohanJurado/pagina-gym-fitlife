-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2023 a las 20:09:30
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
-- Base de datos: `gym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro`
--

CREATE TABLE `foro` (
  `id_foro` int(10) NOT NULL,
  `pregunta_usuario` varchar(150) NOT NULL,
  `respuesta_admin2` varchar(150) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `foro`
--

INSERT INTO `foro` (`id_foro`, `pregunta_usuario`, `respuesta_admin2`, `estado`) VALUES
(1, '¿Cuanto vale el plan TITAN?', 'El plan tiene un costo de $150.000 pesos', 'respondido'),
(3, 'En que horarios esta disponible el ingreso', '', 'sin responder'),
(4, 'Como puedo crear una cuenta', '', 'sin responder'),
(5, 'Como puedo iniciar sesion despues de crear una cuenta', '', 'sin responder');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE `planes` (
  `id_plan` int(10) NOT NULL,
  `nombre_plan` varchar(50) NOT NULL,
  `precio_plan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `planes`
--

INSERT INTO `planes` (`id_plan`, `nombre_plan`, `precio_plan`) VALUES
(1, 'VENCEDOR', 71000),
(2, 'TITAN', 150000),
(3, 'MONSTER', 200000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `contrasenia_usuario` varchar(50) NOT NULL,
  `estado` varchar(12) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `telefono_usuario` varchar(15) NOT NULL,
  `correo_usuario` varchar(50) NOT NULL,
  `fecha_plan_usuario` datetime NOT NULL,
  `cant_dias_plan` int(40) NOT NULL,
  `dias_faltantes_plan` int(40) NOT NULL,
  `id_plan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `contrasenia_usuario`, `estado`, `foto`, `telefono_usuario`, `correo_usuario`, `fecha_plan_usuario`, `cant_dias_plan`, `dias_faltantes_plan`, `id_plan`) VALUES
(1, 'Luis234', '123456', 'activo', '', '3126748267', 'luis00j@gmail.com', '2023-09-05 00:00:00', 0, 0, 0),
(16, 'Usuario2', '12345', 'TITAN', 'ALBERTO.jpg', '3126782345', 'johanusuario@gmail.com', '0000-00-00 00:00:00', 27, 0, 0),
(17, 'Usuario3', '12345', 'INACTIVO', 'HOMVREZ.jpg', '3267534567', 'correo@gmail.com', '0000-00-00 00:00:00', 1, 0, 0),
(18, 'UsuarioPrueba', '12345', 'TITAN', 'ALBERTO.jpg', '3245634567', 'correo@gmail.com', '2023-10-17 00:00:00', 29, 23, 0),
(20, 'admin', 'adminfitlife', 'admin', '', '3172634578', 'adminfitlife@gmail.com', '2023-09-20 15:01:58', 1, 0, 0),
(21, 'tomas', '1234', 'INACTIVO', 'Captura de pantalla 2023-06-16 090942.png', '3188675434', 'tqperez@corsaje.edu.co', '0000-00-00 00:00:00', 1, 0, 0),
(22, 'admin2', 'admin2fitlife', 'admin', '', '3162787635', 'admin2@gmail.com', '2023-09-27 13:11:10', 1, 1, 1),
(23, 'Johan Andres', '12345', 'INACTIVO', 'ALBERTO.jpg', '3167287456', 'correo@gmail.com', '0000-00-00 00:00:00', 1, 0, 0),
(24, 'Edison Jaimes', '12345', 'INACTIVO', 'ALBERTO.jpg', '3178234789', 'correo2@gmail.com', '0000-00-00 00:00:00', 1, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `foro`
--
ALTER TABLE `foro`
  ADD PRIMARY KEY (`id_foro`);

--
-- Indices de la tabla `planes`
--
ALTER TABLE `planes`
  ADD PRIMARY KEY (`id_plan`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_plan` (`id_plan`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `foro`
--
ALTER TABLE `foro`
  MODIFY `id_foro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `planes`
--
ALTER TABLE `planes`
  MODIFY `id_plan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
