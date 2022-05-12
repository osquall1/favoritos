-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2022 a las 16:31:37
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `internet_favoritos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) NOT NULL,
  `name` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `type` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `name`, `type`) VALUES
(1, 'Humoristico', 'Funny'),
(2, 'Infantiles', 'Todos'),
(3, 'Juegos', 'Entretenimiento'),
(4, 'videos', 'Entretenimiento'),
(13, 'Musica', 'Arte'),
(14, 'Documental', 'Ciencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favorite`
--

CREATE TABLE `favorite` (
  `id` int(11) NOT NULL COMMENT 'Clave primaria',
  `title` varchar(50) NOT NULL COMMENT 'titulo',
  `url` varchar(100) NOT NULL COMMENT 'url o pagina',
  `description` varchar(200) NOT NULL COMMENT 'descripcion del favorito',
  `categoryAsoc` int(10) DEFAULT NULL,
  `visible` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabla de favoritos';

--
-- Volcado de datos para la tabla `favorite`
--

INSERT INTO `favorite` (`id`, `title`, `url`, `description`, `categoryAsoc`, `visible`) VALUES
(1, 'netflix', 'https://www.netflix.com/co/', 'pagina de peliculas y series', 4, 'si'),
(2, 'Youtube', 'www.youtube.com', 'pagina dedicada a la trasmision de videos ', 4, 'si'),
(3, 'juegos', 'www.games.com', 'pagina de juegos', 3, 'si'),
(4, 'Chistes', 'www.chistes.com', 'paginas de memes y humor', 1, 'si'),
(5, 'Vallenatos', 'www.vallenatos.com', 'portal musica de vallenatos', 13, 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'Clave primaria',
  `name` varchar(50) NOT NULL COMMENT 'nombre cliente',
  `lastName` varchar(100) NOT NULL COMMENT 'Apellidos cliente',
  `documentNumber` int(20) NOT NULL COMMENT 'N#documento',
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabla de usuarios';

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastName`, `documentNumber`, `email`, `password`) VALUES
(1, 'Jhoan', 'Acosta', 1030403285, 'Jacosta@gvmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(2, 'Tatiana', 'Varon', 5247892, 'tatisv@gvmail.com', '293abc6d30983785dd7bde98a2e2f3be6fae0b1e25aa235bb6211ca6e5c0d7ee'),
(3, 'Pepito', 'Perez', 2478952, 'pepito@gmail.com', '9d9f208ba5431a508a64302d98247680f8b33e93fc8c8c4e38834d1a5b361065'),
(4, 'Jorge', 'Carmago', 32557892, 'jorgecam@gmail.com', '15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryAsoc` (`categoryAsoc`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `documentNumber` (`documentNumber`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria', AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria', AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_ibfk_1` FOREIGN KEY (`categoryAsoc`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
