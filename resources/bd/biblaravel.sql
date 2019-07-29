-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-07-2019 a las 07:28:54
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblaravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` int(10) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `autor` varchar(150) NOT NULL,
  `genero` varchar(150) NOT NULL,
  `edicion` int(10) NOT NULL,
  `unidades_existentes` int(10) NOT NULL,
  `unidades_disponible` int(11) NOT NULL,
  `resena` varchar(500) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `remember_token` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `titulo`, `autor`, `genero`, `edicion`, `unidades_existentes`, `unidades_disponible`, `resena`, `imagen`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'It', 'Stephen King', 'Terror', 1, 3, 0, 'La historia se desarrolla alternada en dos épocas: el pasado (1957-58) y el presente (1985). Los hechos acontecen en la comunidad de Derry, en el estado de Maine, Estados Unidos. Bajo la ciudad, a un nivel inconsciente para todos los pobladores, habita un monstruo despiadado de apetito insaciable; esta malévola criatura atormenta a la comunidad desde tiempos remotos. El monstruo es un ser ajeno a este mundo, y se manifiesta como sus miedos, por lo cual constituye su alimento (preferiblemente los', 'images/it.jpg', NULL, '2019-07-23 04:53:10', NULL, NULL),
(2, 'La ultima habitacion', 'Carlos Navas', 'Terror', 5, 4, 2, 'Todo edificio guarda secretos. El célebre y enigmático edificio Secret Garden, situado a las afueras de Madrid, no es una excepción. Su fachada de piedra natural y color negro azabache, esconde, tras sus paredes, la versión más siniestra e inquietante de la naturaleza humana', 'images/la-ultima-habitacion.jpg', NULL, '2019-07-23 04:59:28', NULL, NULL),
(3, 'Un misterio en toledo', 'Anne Perry', 'Misterio', 1, 3, 2, 'La apasionante nueva novela de Perry protagonizada por Charlotte y Thomas Pitt nos invita a regresar al Londres victoriano, donde la codicia y la ambición nunca duermen y las pasiones a veces se desbocan', 'images/Un misterio en Toledo.JPG', NULL, '2019-07-23 04:59:28', NULL, NULL),
(4, 'El juego de Ender', 'Orson Scott Card', 'Ciencia ficción', 1, 5, 5, 'El juego de Ender es la novela más conocida de Orson Scott Card. Obtuvo los dos premios más prestigiosos de la ciencia ficción: el premio Nébula a la mejor novela en 1985 y el premio Hugo a la mejor novela en 1986.', '/images/juego-de-ender.jpg', NULL, '2019-07-26 20:41:53', NULL, NULL),
(5, 'Nosotros', 'Yevgueni Zamiatin', 'Ficción distópica', 2, 3, 1, 'Nosotros es una novela distópica rusa escrita por Yevgueni Zamiatin en 1921 ambientada en una sociedad futura donde la vigilancia y represión por parte del Estado es total. No fue publicada en ruso hasta 1988, debido a problemas de censura.?', '/images/nosotros.jpg', NULL, '2019-07-26 20:43:55', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT current_timestamp(),
  `remember_token` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `created_at`, `updated_at`, `deleted_at`, `remember_token`) VALUES
(1, 'Tania Cañizares', '$2y$10$MF/WeFOWwNgQzQfX6cJa5elf0kt8/rpJNQZZ8vib6AH1qV1WMRiTS', 'ctania@unicauca.edu.co', '2019-07-29 03:19:10', '2019-07-29 08:18:00', '2019-07-29 03:18:00', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
