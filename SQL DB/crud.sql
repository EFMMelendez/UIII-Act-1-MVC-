-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- CRUD creado por Oscar Amado
-- Contacto: oscarfamado@gmail.com
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-03-2017 a las 17:15:37
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_zapateria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--
CREATE TABLE `producto` (
  `id_producto` int(40) NOT NULL,
  `nombre_producto` varchar(40) NOT NULL,
  `categoria` varchar(40) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `color` varchar(40) NOT NULL,
  `material` varchar(40) NOT NULL,
  `talla` decimal(10,2) NOT NULL,
  `marca` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre_producto`, `categoria`, `precio`, `color`, `material`, `talla`, `marca`) VALUES
(1, 'Product1', 'Category1', 100.00, 'Red', 'Cotton', 10.5, 'Brand1'),
(2, 'Product2', 'Category2', 200.00, 'Blue', 'Polyester', 11.5, 'Brand2'),
(3, 'Product3', 'Category1', 150.00, 'Green', 'Silk', 12.5, 'Brand3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
