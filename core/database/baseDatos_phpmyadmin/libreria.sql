-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 02-03-2018 a las 17:42:32
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` int(20) NOT NULL,
  `autor` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `isbn` int(11) NOT NULL COMMENT 'isbn son 13 dígitos',
  `editorial` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `idioma` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `year` date NOT NULL,
  `cubierta` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'tapa dura o blanda',
  `tipo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'libro' COMMENT 'libro, colección, material',
  `paginas` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `unidades` int(20) NOT NULL DEFAULT '0' COMMENT 'stock',
  `disponibilidad` varchar(1) COLLATE utf16_spanish_ci NOT NULL DEFAULT 'S' COMMENT 'S , N'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `autor`, `titulo`, `isbn`, `editorial`, `idioma`, `year`, `cubierta`, `tipo`, `paginas`, `unidades`, `disponibilidad`) VALUES
(1, 'Jose Lopez Quijado', 'Domine JavaScript', 0, 'Ra-Ma', 'Español', '0000-00-00', 'blanda', 'libro', '705', 20, 'S'),
(2, 'Mike Mcgrath', 'HTML5 take control of the', 0, 'In easy steps', 'Inglés', '0000-00-00', 'blanda', 'libro', '240', 10, 'S'),
(3, 'David Sklar and Adam Trac', 'PHP Cookbook', 0, 'O Reilly', 'Inglés', '0000-00-00', 'blanda', 'libro', '793', 15, 'S'),
(4, 'David Flanagan', 'JavaScript (Pocket Reference)', 0, 'O Reilly', 'Inglés', '0000-00-00', 'blanda', 'colección', '265', 10, 'S'),
(5, 'Robert Liguori and Patric', 'Java 7 (Pocket Guide)', 0, 'O Reilly', 'Inglés', '0000-00-00', 'blanda', 'colección', '199', 25, 'S'),
(6, 'Larry Ulman', 'Php for the Web', 0, 'Peachpit Press', 'Inglés', '0000-00-00', 'blanda', 'libro', '459', 20, 'S'),
(7, 'David Flanagan', 'JavaScript the Definitive', 0, 'O Reilly', 'Inglés', '0000-00-00', 'blanda', 'libro', '1078', 25, 'S'),
(8, 'Antonio Vázquez', 'El hombre en su medio', 0, 'Conais Gestion', 'Español', '0000-00-00', 'blanda', 'colección', '83', 100, 'S'),
(9, '\0a\0u\0t\0o\0r\0 \0c\0a\0m\0b\0i\0a\0d\0o', '', 0, '\0E\0d\0i\0t', '\0E\0s\0p\0a\0?\0o\0l', '0000-00-00', '\0b\0l\0a\0n\0d\0a', '\0l\0i\0b\0r\0o', '\07\00\05', 20, 'S'),
(11, '\0a\0u\0t\0o\0r\0 \0d\0e\0 \0p\0r\0u\0e\0b\0a', '\0m\0o\0d\0i\0f\0i\0c\0a\0d\0o\0 \0c\0o\0n\0 \0o\0b\0j\0e\0t\0o\0s', 0, '\0E\0d\0i\0t', '\0E\0s\0p\0a\0?\0o\0l', '0000-00-00', '\0b\0l\0a\0n\0d\0a', '\0l\0i\0b\0r\0o', '\07\00\05', 20, 'S'),
(12, '\0a\0u\0t\0o\0r\0 \0d\0e\0 \0p\0r\0u\0e\0b\0a', '\0t\0i\0t\0u\0l\0o\0 \0d\0e\0 \0p\0r\0u\0e\0b\0a', 0, '\0E\0d\0i\0t', '\0E\0s\0p\0a\0?\0o\0l', '0000-00-00', '\0b\0l\0a\0n\0d\0a', '\0l\0i\0b\0r\0o', '\07\00\05', 20, 'S'),
(13, '\0a\0u\0t\0o\0r\0 \0d\0e\0 \0p\0r\0u\0e\0b\0a', '\0t\0i\0t\0u\0l\0o\0 \0d\0e\0 \0p\0r\0u\0e\0b\0a', 0, '\0E\0d\0i\0t', '\0E\0s\0p\0a\0?\0o\0l', '0000-00-00', '\0b\0l\0a\0n\0d\0a', '\0l\0i\0b\0r\0o', '\07\00\05', 20, 'S'),
(14, '\0a\0u\0t\0o\0r\0 \0c\0a\0m\0b\0i\0a\0d\0o', '\0t\0i\0t\0u\0l\0o\0 \0d\0e\0 \0p\0r\0u\0e\0b\0a', 0, '\0E\0d\0i\0t', '\0E\0s\0p\0a\0?\0o\0l', '0000-00-00', '\0b\0l\0a\0n\0d\0a', '\0l\0i\0b\0r\0o', '\07\00\05', 20, 'S'),
(15, '\0a\0u\0t\0o\0r\0 \0d\0e\0 \0p\0r\0u\0e\0b\0a', '\0t\0i\0t\0u\0l\0o\0 \0d\0e\0 \0p\0r\0u\0e\0b\0a', 0, '\0E\0d\0i\0t', '\0E\0s\0p\0a\0?\0o\0l', '0000-00-00', '\0b\0l\0a\0n\0d\0a', '\0l\0i\0b\0r\0o', '\07\00\05', 20, 'S'),
(16, 'autor de prueba', 'titulo de prueba', 0, '\0E\0d\0i\0t', '\0E\0s\0p\0a\0?\0o\0l', '0000-00-00', '\0b\0l\0a\0n\0d\0a', '\0l\0i\0b\0r\0o', '\07\00\05', 20, 'S'),
(17, '\02\02\02\02', '\0m\0o\0d\0i\0f\0i\0c\0a\0d\0o\0 \0c\0o\0n\0 \0o\0b\0j\0e\0t\0o\0s', 0, '\0E\0d\0i\0t', '\0E\0s\0p\0a\0?\0o\0l', '0000-00-00', '\0b\0l\0a\0n\0d\0a', '\0l\0i\0b\0r\0o', '\07\00\05', 20, 'S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(20) NOT NULL COMMENT 'es id_libro',
  `cantidad` int(10) NOT NULL COMMENT 'cantidad de id_pedido',
  `lote` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'aaaammdd_0001' COMMENT 'fecha_nºlotepedido',
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ape1` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ape2` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `envio` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'N' COMMENT 'No o Sí',
  `calle` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Calle Dr. Fleming, 7',
  `localidad` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Oviedo',
  `codigo_postal` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT '33006',
  `pais` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'España'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(20) NOT NULL,
  `nombre_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ape1` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ape2` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `calle` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `localidad` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `codigo_postal` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `perfil` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `clave`, `nombre`, `ape1`, `ape2`, `email`, `calle`, `localidad`, `codigo_postal`, `pais`, `perfil`) VALUES
(1, 'Pepe', 'pepe', 'Pepe', 'ape1', 'ape2', 'fleming@educastur.org', 'Calle Dr. Fleming, 7', 'Oviedo', '33005', 'España', 'colegio'),
(2, 'Alex', 'alex', 'Alex', 'ape1', 'ape2', 'fleming@educastur.org', 'Calle Dr. Fleming, 7', 'Oviedo', '33005', 'España', 'empleado'),
(3, 'Alicia', 'alicia', 'Alicia', 'ape1', 'ape2', 'fleming@educastur.org', 'Calle Dr. Fleming, 7', 'Oviedo', '33005', 'España', 'empleado'),
(4, 'Daniel', 'daniel', 'Daniel', 'ape1', 'ape2', 'fleming@educastur.org', 'Calle Dr. Fleming, 7', 'Oviedo', '33005', 'España', 'empleado'),
(5, 'David', 'david', 'David', 'ape1', 'ape2', 'fleming@educastur.org', 'Calle Dr. Fleming, 7', 'Oviedo', '33005', 'España', 'empleado'),
(6, 'Diego', 'diego', 'Diego', 'ape1', 'ape2', 'fleming@educastur.org', 'Calle Dr. Fleming, 7', 'Oviedo', '33005', 'España', 'empleado'),
(7, 'Eduardo', 'eduardo', 'Eduardo', 'ape1', 'ape2', 'fleming@educastur.org', 'Calle Dr. Fleming, 7', 'Oviedo', '33005', 'España', 'proveedor'),
(8, 'Guillermo', 'guillermo', 'Guillermo', 'ape1', 'ape2', 'fleming@educastur.org', 'Calle Dr. Fleming, 7', 'Oviedo', '33005', 'España', 'proveedor'),
(9, 'Jaime', 'jaime', 'Jaime', 'ape1', 'ape2', 'fleming@educastur.org', 'Calle Dr. Fleming, 7', 'Oviedo', '33005', 'España', 'cliente'),
(10, 'Joaquin', 'joaquin', 'Joaquin', 'ape1', 'ape2', 'fleming@educastur.org', 'Calle Dr. Fleming, 7', 'Oviedo', '33005', 'España', 'cliente'),
(11, 'Juan', 'juan', 'Juan', 'ape1', 'ape2', 'fleming@educastur.org', 'Calle Dr. Fleming, 7', 'Oviedo', '33005', 'España', 'cliente'),
(12, 'Mario', 'mario', 'Mario', 'ape1', 'ape2', 'fleming@educastur.org', 'Calle Dr. Fleming, 7', 'Oviedo', '33005', 'España', 'suscriptor'),
(13, 'Paula', 'paula', 'Paula', 'ape1', 'ape2', 'fleming@educastur.org', 'Calle Dr. Fleming, 7', 'Oviedo', '33005', 'España', 'suscriptor'),
(14, 'Yolanda', 'yolanda', 'Yolanda', 'ape1', 'ape2', 'fleming@educastur.org', 'Calle Dr. Fleming, 7', 'Oviedo', '33005', 'España', 'suscriptor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
