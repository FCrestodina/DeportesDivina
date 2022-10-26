-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2022 a las 00:33:45
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
  `FechaReposicion` date DEFAULT NULL,
  `TelefonoProveedor` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `CostoCompra` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id`, `Deporte`, `Nombre`, `Marca`, `Color`, `Talle`, `Stock`, `Precio`, `Proveedor`, `MailProveedor`, `FechaReposicion`, `TelefonoProveedor`, `CostoCompra`) VALUES
(1, '[DeportePrueba]', '[NombrePrueba]', '[MarcaPrueba]', '[ColorPrueba]', '[TallePrueba]', 0, 0, '[Proveedor]', '[MailProveedor@gmail.com]', '0000-00-00', '[+541164578484]', '[255]'),
(2, 'DeportePrueba2', 'NombrePrueba2', 'MarcaPrueba2', 'ColorPrueba2', 'TallePrueba2', 102, 220, 'Proveedor2', 'MailProveedor2@gmail.com', '0000-00-00', '+541164578411', '2255');

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
(4, 'Invitado', '$2y$10$0PHBIPgRGnhxQNzDPUUD0euvTpFvEYM1RCRETg.BC4r/ZU4Jo3fPW', 'usuarioinvitado@yopmail.com', 0, 'UsuarioInvitado'),
(5, 'gabriela', '$2y$10$7IYcriuWK0k/99n3nV0eHuCunDaY5kjgnpViAzPqKnK7NVy1nIzZe', 'gaby@yopmail.com', 0, 'gaby');

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
