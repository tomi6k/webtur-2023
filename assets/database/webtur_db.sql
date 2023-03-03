-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2023 a las 02:42:43
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webtur`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pubs`
--

CREATE TABLE `pubs` (
  `id_pub` int(99) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `opcionales` varchar(255) NOT NULL,
  `precio` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `pubs`
--

INSERT INTO `pubs` (`id_pub`, `titulo`, `descripcion`, `opcionales`, `precio`) VALUES
(1, 'TERMAS DE RIO HONDO - SEMANA SANTA', 'Paquete 3 noches en Hotel Barello (***) 3 estrellas, Pension completa: DESAYUNO, ALMUERZO Y CENA. ', '* tafi del valle * catamarca  *san miguel de tucuman', 45000),
(2, 'MAR DEL PLATA - FEB 26', '7 NOCHES HOTEL FOEVA, A 2 CUADRAS DE LA PLAYA. HOTEL 3 ESTRELLAS CON DESAYUNO, ALMUERZO Y CENA DENTRO DEL HOTEL (PARA NO HACER LARGAS FILAS EN RESTAURANTS).', '* PLAYA MOGOTES* SAN BERNARDO* CAPITAL FEDERAL* OBELISCO', 110000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(99) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `username`, `passw`) VALUES
(1, 'admin', '2204');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pubs`
--
ALTER TABLE `pubs`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pubs`
--
ALTER TABLE `pubs`
  MODIFY `id_pub` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
