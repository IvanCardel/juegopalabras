-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-10-2020 a las 05:02:56
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `juego`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `letra` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `nombre`, `letra`) VALUES
(1, 'arbol', 'a'),
(2, 'burro', 'b'),
(3, 'casa', 'c'),
(4, 'chile', 'ch'),
(5, 'dado', 'd'),
(6, 'elefante', 'e'),
(7, 'foca', 'f'),
(8, 'gato', 'g'),
(9, 'helado', 'h'),
(10, 'iglesia', 'i'),
(11, 'jirafa', 'j'),
(12, 'koala', 'k'),
(13, 'lupa', 'l'),
(14, 'llave', 'll'),
(15, 'manzana', 'm'),
(16, 'niño', 'ñ'),
(17, 'oso', 'o'),
(18, 'pelota', 'p'),
(19, 'queso', 'q'),
(20, 'rana', 'r'),
(21, 'serpiente', 's'),
(22, 'toro', 't'),
(23, 'uva', 'u'),
(24, 'vaca', 'v'),
(25, 'waterpolo', 'w'),
(26, 'xilofono', 'x'),
(27, 'yoyo', 'y'),
(28, 'zorro', 'z'),
(29, 'ñandu', 'ñ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
