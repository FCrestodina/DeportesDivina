-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2022 a las 23:07:32
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `deportesdivina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id` int(11) NOT NULL,
  `Deporte` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `Nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Marca` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Color` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `Talle` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `Stock` int(11) NOT NULL,
  `Precio` float NOT NULL,
  `Proveedor` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `MailProveedor` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `TelefonoProveedor` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `Eliminado` tinyint(1) DEFAULT NULL,
  `CantidadVendida` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id`, `Deporte`, `Nombre`, `Marca`, `Color`, `Talle`, `Stock`, `Precio`, `Proveedor`, `MailProveedor`, `TelefonoProveedor`, `Eliminado`, `CantidadVendida`) VALUES
(11, 'Futbol', 'Chomba de arbitro', 'Adidas', 'Negra', 'XL', 3, 9700, 'Adidas San Justo', 'adidas@gmail.com', NULL, 0, 7),
(12, 'Futbol', 'Chomba de arbitro', 'Adidas', 'Negra', 'M', 4, 9700, 'Adidas San Justo', 'adidas@gmail.com', NULL, 0, 4),
(13, 'Patín', 'Malla de competencia', 'Sports', 'Blanca', 'S', 3, 2700, 'Sporty', '', '1164576457', 0, 2),
(14, 'Futbol', 'Botines', 'Nike', 'Azul', '43', 1, 34550, 'Nike ARG', 'nike@gmail.com.ar', NULL, 0, 1),
(15, 'Boxeo', 'Bolsa de boxeo', 'Puño', 'Rojo', '1.2m', 2, 75000, 'Boxing', 'boxeocosas@gmail.com', '', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id` int(8) NOT NULL,
  `Nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL,
  `Usuario` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id`, `Nombre`, `Password`, `Email`, `IsAdmin`, `Usuario`) VALUES
(1, 'Franco Crestodina', '$2y$10$7LdCnjnGkhIeuSZmO9XjlOhzFs5rNMgNlOILg7DLNjh29OheWkEHa', 'francresto00@gmail.com', 1, 'FranCresto'),
(11, 'Usuario de Administración', '$2y$10$lrQEzeE3Irh4Anyc1Xi91Ob.D8UpUxMWwwM5eCdvyYuT5gNOXzYY2', 'usuarioadmin@gmail.com', 1, 'UsuarioAdmin'),
(12, 'Usuario de Empleado', '$2y$10$vgHd5p4q7gBeQr/EFB3GDOhYLGPaHE6XgOchh8IRB4ODznA6u8o8a', 'usuarioinvitado@yopmail.com', 0, 'UsuarioInvitado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
