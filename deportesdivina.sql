-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2022 a las 15:54:46
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
(2, 'DeportePrueba2', 'NombrePrueba2', 'MarcaPrueba2', 'ColorPrueba2', 'TallePrueba2', 2, 220, 'Proveedor2', 'MailProveedor2@gmail.com', '+541164578411', 0, 1),
(5, '[furbvo]', '[ad]', '[aduidas]', '[verd]', '[xd]', 22, 12, '[mama]', '[fafas@hola.com]', NULL, 1, 0),
(6, 'b', 'b', 'b', 'b', 'b', 2, 3, 'b', 'b@gmail.com', '22', 1, 1),
(7, 't', 't', 't', 't', 't', 4, 6, 'a', '', '11524321', 0, 0),
(8, 'y', 'y', 'y', 'y', 'y', 9, 9, 'y', 'hola@yahoo.com', '', 0, 0),
(9, 'a', 'a', 'a', 'aa', 'a', 20, 4, 'a', 'hola@yahoo.com', '', 1, 8),
(10, 'dsf', 'dfsd', 'fds', 'fdsfsdf', 'sdfds', 34, 234, 'afasf', 'gasgasagas@hotmail.com', '325522', 0, 0);

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
(5, 'gabriela', '$2y$10$7IYcriuWK0k/99n3nV0eHuCunDaY5kjgnpViAzPqKnK7NVy1nIzZe', 'gaby@yopmail.com', 0, 'gaby'),
(6, 'a', '$2y$10$CdrflGxUmeyiQuvszLqh8ul5wYLIJsSqw.x6aRGSgPlKEICBTFGk6', 'a@yopmail.com', 0, 'a'),
(7, 'b', '$2y$10$.YxXFmZMaLp29roVe4HwFuzhoC/Xe3ZHUsKaRmYFXBbhJ0reiqpMe', 'b@yopmail.com', 0, 'b'),
(8, 'c', '$2y$10$v2zOZjF..dY1cmXFkgGAT.Cj4DFXw3VWsdObgbJLgodSmZk1BMHZS', 'c@hotmail.com', 0, 'c'),
(9, 'd', '$2y$10$I9tG7Hhny6pu3GcKORJZseHLTBDwjv4aLWp/i9Q.vRsmWAtOXGRmO', 'd@gmial.com', 0, 'd'),
(10, 'g', '$2y$10$yFlf.0NujOKnyXbVwH5Muuj/VUxYCRVMzD8xU79RTQPZBwAAT3hzi', 'gaby@yopmail.com', 1, 'g');

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
