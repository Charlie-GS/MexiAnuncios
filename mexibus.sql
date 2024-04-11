-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-04-2024 a las 09:37:24
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
-- Base de datos: `mexibus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_razon` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `telefono` int(11) NOT NULL,
  `linea` varchar(10) NOT NULL,
  `estacion` varchar(20) NOT NULL,
  `num_espacio` varchar(10) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre_razon`, `apellidos`, `correo`, `telefono`, `linea`, `estacion`, `num_espacio`, `fecha_inicio`, `fecha_fin`) VALUES
(25, 'Carlos', 'Garcia', 'carlos@gmail.com', 2147483647, '1', 'Cuauhtemoc Norte', '16', '2024-01-07', '2024-02-13'),
(26, 'Ismael', 'Barrios', 'isma@gmail.com', 2147483647, '2', 'ISSEMYM\r\n', '132', '2024-01-05', '2024-02-21'),
(27, 'Miram', 'Montes', 'miri@gmail.com', 2147483647, '3', 'Embarcadero\r\n', '300', '2024-01-16', '2024-04-09'),
(28, 'Arturo', 'Godinez', 'aturo@gmail.com', 2147483647, '4', 'Bosques', '396', '2024-02-06', '2024-04-15'),
(29, 'CINEGOLD', 'NA', 'cine12@gmail.com', 2147483647, '2', 'Las Americas\r\n', '100', '2024-02-21', '2024-04-17'),
(30, 'Osvaldo', 'Sarmiento', 'osvaldo@gmail.com', 2147483647, '1', 'Cuauhtemoc Norte', '15', '2024-02-12', '2024-04-15'),
(31, 'Ana', 'Jonhson', 'ana@gmail.com', 2147483647, '1', 'Hidalgo', '21', '2024-03-05', '2024-04-25'),
(32, 'Ismael', 'Morals', 'ismael@gmail.com', 2147483647, '1', 'Hidalgo', '24', '2024-04-01', '2024-05-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `espacio_public`
--

CREATE TABLE `espacio_public` (
  `id_espacio` int(11) NOT NULL,
  `dimensiones` varchar(20) DEFAULT NULL,
  `disponibilidad` varchar(20) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `estacionn_mexi` int(11) DEFAULT NULL,
  `ubicacion` varchar(20) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `espacio_public`
--

INSERT INTO `espacio_public` (`id_espacio`, `dimensiones`, `disponibilidad`, `precio`, `estacionn_mexi`, `ubicacion`, `imagen`) VALUES
(3, '3x3', 'Disponible', 10, 1, 'Exterior', '\"C:\\xampp\\Xampp\\htdocs\\Nova\\Nova\\assets\\img\\estacion-ojo-agua.jpg\"'),
(4, '3x3', 'Ocupado', 9000, 1, 'Exterior', NULL),
(7, '3x3', 'Ocupado', 6000, 1, 'Interior', NULL),
(8, '4x4', 'Disponible', 8000, 1, 'Pasillo', NULL),
(9, '2x2', 'Disponible', 3000, 2, 'Interior', NULL),
(10, '3x3', 'Ocupado', 5000, 2, 'Interior', NULL),
(11, '2x2', 'Disponible', 3000, 2, 'Exterior', NULL),
(12, '4x4', 'Disponible', 7000, 2, 'Exterior', NULL),
(13, '2x2', 'Ocupado', 3000, 4, 'Interior', NULL),
(14, '3x3', 'Ocupado', 5000, 4, 'Pasillo', NULL),
(15, '4x4', 'Disponible', 7000, 4, 'Exterior', NULL),
(16, '3x3', 'Disponible', 6000, 4, 'Exterior', NULL),
(17, '3x3', 'Disponible', 6000, 9, 'Interior', NULL),
(18, '2x2', 'Ocupado', 3000, 9, 'Pasillo', NULL),
(19, '3x3', 'Ocupado', 4000, 9, 'Exterior', NULL),
(20, '3x3', 'Disponible', 6000, 9, 'Exterior', NULL),
(21, '3x3', 'Disponible', 6000, 10, 'Interior', NULL),
(22, '2x2', 'Ocupado', 3000, 10, 'Pasillo', NULL),
(23, '3x3', 'Ocupado', 4000, 10, 'Exterior', NULL),
(24, '3x3', 'Disponible', 6000, 10, 'Exterior', NULL),
(25, '4x4', 'Disponible', 9000, 11, 'Interior', NULL),
(26, '2x2', 'Ocupado', 4000, 11, 'Pasillo', NULL),
(27, '3x3', 'Ocupado', 7000, 11, 'Exterior', NULL),
(28, '3x3', 'Disponible', 6000, 11, 'Exterior', NULL),
(29, '3x3', 'Disponible', 6000, 12, 'Interior', NULL),
(30, '2x2', 'Ocupado', 3000, 12, 'Pasillo', NULL),
(31, '3x3', 'Ocupado', 4000, 12, 'Exterior', NULL),
(32, '3x3', 'Disponible', 6000, 12, 'Exterior', NULL),
(33, '3x3', 'Disponible', 6000, 13, 'Interior', NULL),
(34, '2x2', 'Ocupado', 3000, 13, 'Pasillo', NULL),
(35, '3x3', 'Ocupado', 4000, 13, 'Exterior', NULL),
(36, '3x3', 'Disponible', 6000, 13, 'Exterior', NULL),
(37, '3x3', 'Disponible', 6000, 14, 'Interior', NULL),
(38, '2x2', 'Ocupado', 3000, 14, 'Pasillo', NULL),
(39, '3x3', 'Ocupado', 4000, 14, 'Exterior', NULL),
(40, '3x3', 'Disponible', 6000, 14, 'Exterior', NULL),
(41, '3x3', 'Disponible', 6000, 15, 'Interior', NULL),
(42, '2x2', 'Ocupado', 3000, 15, 'Pasillo', NULL),
(43, '3x3', 'Ocupado', 4000, 15, 'Exterior', NULL),
(44, '3x3', 'Disponible', 6000, 15, 'Exterior', NULL),
(45, '4x4', 'Disponible', 9000, 16, 'Interior', NULL),
(46, '2x2', 'Ocupado', 4000, 16, 'Pasillo', NULL),
(47, '4x4', 'Ocupado', 8000, 16, 'Exterior', NULL),
(48, '3x3', 'Disponible', 6000, 16, 'Exterior', NULL),
(49, '4x4', 'Disponible', 9000, 17, 'Interior', NULL),
(50, '2x2', 'Ocupado', 4000, 17, 'Pasillo', NULL),
(51, '4x4', 'Ocupado', 8000, 17, 'Exterior', NULL),
(52, '3x3', 'Disponible', 6000, 17, 'Exterior', NULL),
(53, '4x4', 'Disponible', 9000, 18, 'Interior', NULL),
(54, '2x2', 'Ocupado', 4000, 18, 'Pasillo', NULL),
(55, '4x4', 'Ocupado', 8000, 18, 'Exterior', NULL),
(56, '3x3', 'Disponible', 6000, 18, 'Exterior', NULL),
(57, '4x4', 'Disponible', 9000, 19, 'Interior', NULL),
(58, '2x2', 'Ocupado', 4000, 19, 'Pasillo', NULL),
(59, '4x4', 'Ocupado', 8000, 19, 'Exterior', NULL),
(60, '3x3', 'Disponible', 6000, 19, 'Exterior', NULL),
(61, '4x4', 'Disponible', 9000, 20, 'Interior', NULL),
(62, '2x2', 'Ocupado', 4000, 20, 'Pasillo', NULL),
(63, '4x4', 'Ocupado', 8000, 20, 'Exterior', NULL),
(64, '3x3', 'Disponible', 6000, 20, 'Exterior', NULL),
(65, '4x4', 'Disponible', 9000, 21, 'Interior', NULL),
(66, '2x2', 'Ocupado', 4000, 21, 'Pasillo', NULL),
(67, '4x4', 'Ocupado', 8000, 21, 'Exterior', NULL),
(68, '3x3', 'Disponible', 6000, 21, 'Exterior', NULL),
(69, '4x4', 'Disponible', 9000, 22, 'Interior', NULL),
(70, '2x2', 'Ocupado', 4000, 22, 'Pasillo', NULL),
(71, '4x4', 'Ocupado', 8000, 22, 'Exterior', NULL),
(72, '3x3', 'Disponible', 6000, 22, 'Exterior', NULL),
(73, '4x4', 'Disponible', 9000, 23, 'Interior', NULL),
(74, '2x2', 'Ocupado', 4000, 23, 'Pasillo', NULL),
(75, '4x4', 'Ocupado', 8000, 23, 'Exterior', NULL),
(76, '3x3', 'Disponible', 6000, 23, 'Exterior', NULL),
(77, '4x4', 'Disponible', 9000, 24, 'Interior', NULL),
(78, '2x2', 'Ocupado', 4000, 24, 'Pasillo', NULL),
(79, '4x4', 'Ocupado', 8000, 24, 'Exterior', NULL),
(80, '3x3', 'Disponible', 6000, 24, 'Exterior', NULL),
(81, '4x4', 'Disponible', 9000, 25, 'Interior', NULL),
(82, '2x2', 'Ocupado', 4000, 25, 'Pasillo', NULL),
(83, '4x4', 'Ocupado', 8000, 25, 'Exterior', NULL),
(84, '3x3', 'Disponible', 6000, 25, 'Exterior', NULL),
(85, '4x4', 'Disponible', 9000, 26, 'Interior', NULL),
(86, '2x2', 'Ocupado', 4000, 26, 'Pasillo', NULL),
(87, '4x4', 'Ocupado', 8000, 26, 'Exterior', NULL),
(88, '3x3', 'Disponible', 6000, 26, 'Exterior', NULL),
(89, '4x4', 'Disponible', 9000, 27, 'Interior', NULL),
(90, '2x2', 'Ocupado', 4000, 27, 'Pasillo', NULL),
(91, '4x4', 'Ocupado', 8000, 27, 'Exterior', NULL),
(92, '3x3', 'Disponible', 6000, 27, 'Exterior', NULL),
(93, '4x4', 'Disponible', 9000, 28, 'Interior', NULL),
(94, '2x2', 'Ocupado', 4000, 28, 'Pasillo', NULL),
(95, '4x4', 'Ocupado', 8000, 28, 'Exterior', NULL),
(96, '3x3', 'Disponible', 6000, 28, 'Exterior', NULL),
(97, '4x4', 'Disponible', 9000, 60, 'Pasillo', NULL),
(98, '2x2', 'Ocupado', 4000, 60, 'Pasillo', NULL),
(99, '4x4', 'Ocupado', 9000, 60, 'Exterior', NULL),
(100, '3x3', 'Disponible', 7000, 60, 'Exterior', NULL),
(101, '4x4', 'Disponible', 9000, 61, 'Interior', NULL),
(102, '2x2', 'Ocupado', 4000, 61, 'Pasillo', NULL),
(103, '4x4', 'Ocupado', 9000, 61, 'Exterior', NULL),
(104, '3x3', 'Disponible', 7000, 61, 'Exterior', NULL),
(105, '4x4', 'Disponible', 9000, 62, 'Interior', NULL),
(106, '2x2', 'Ocupado', 4000, 62, 'Pasillo', NULL),
(107, '4x4', 'Ocupado', 9000, 62, 'Exterior', NULL),
(108, '3x3', 'Disponible', 7000, 62, 'Exterior', NULL),
(109, '4x4', 'Disponible', 9000, 63, 'Interior', NULL),
(110, '2x2', 'Ocupado', 4000, 63, 'Pasillo', NULL),
(111, '4x4', 'Ocupado', 9000, 63, 'Exterior', NULL),
(112, '3x3', 'Disponible', 7000, 63, 'Exterior', NULL),
(113, '4x4', 'Disponible', 9000, 64, 'Interior', NULL),
(114, '2x2', 'Ocupado', 4000, 64, 'Pasillo', NULL),
(115, '4x4', 'Ocupado', 9000, 64, 'Exterior', NULL),
(116, '3x3', 'Disponible', 7000, 64, 'Exterior', NULL),
(117, '4x4', 'Disponible', 9000, 65, 'Interior', NULL),
(118, '2x2', 'Ocupado', 4000, 65, 'Pasillo', NULL),
(119, '4x4', 'Ocupado', 9000, 65, 'Exterior', NULL),
(120, '3x3', 'Disponible', 7000, 65, 'Exterior', NULL),
(121, '4x4', 'Disponible', 9000, 66, 'Interior', NULL),
(122, '2x2', 'Ocupado', 4000, 66, 'Pasillo', NULL),
(123, '4x4', 'Ocupado', 9000, 66, 'Exterior', NULL),
(124, '3x3', 'Disponible', 7000, 66, 'Exterior', NULL),
(125, '4x4', 'Disponible', 9000, 67, 'Interior', NULL),
(126, '2x2', 'Ocupado', 4000, 67, 'Pasillo', NULL),
(127, '4x4', 'Ocupado', 9000, 67, 'Exterior', NULL),
(128, '3x3', 'Disponible', 7000, 67, 'Exterior', NULL),
(129, '4x4', 'Disponible', 9000, 68, 'Interior', NULL),
(130, '2x2', 'Ocupado', 4000, 68, 'Pasillo', NULL),
(131, '4x4', 'Ocupado', 9000, 68, 'Exterior', NULL),
(132, '3x3', 'Disponible', 7000, 68, 'Exterior', NULL),
(133, '4x4', 'Disponible', 9000, 69, 'Interior', NULL),
(134, '2x2', 'Ocupado', 4000, 69, 'Pasillo', NULL),
(135, '4x4', 'Ocupado', 9000, 69, 'Exterior', NULL),
(136, '3x3', 'Disponible', 7000, 69, 'Exterior', NULL),
(137, '4x4', 'Disponible', 9000, 70, 'Interior', NULL),
(138, '2x2', 'Ocupado', 4000, 70, 'Pasillo', NULL),
(139, '4x4', 'Ocupado', 9000, 70, 'Exterior', NULL),
(140, '3x3', 'Disponible', 7000, 70, 'Exterior', NULL),
(141, '4x4', 'Disponible', 9000, 71, 'Interior', NULL),
(142, '2x2', 'Ocupado', 4000, 71, 'Pasillo', NULL),
(143, '4x4', 'Ocupado', 9000, 71, 'Exterior', NULL),
(144, '3x3', 'Disponible', 7000, 71, 'Exterior', NULL),
(145, '4x4', 'Disponible', 9000, 72, 'Interior', NULL),
(146, '2x2', 'Ocupado', 4000, 72, 'Pasillo', NULL),
(147, '4x4', 'Ocupado', 9000, 72, 'Exterior', NULL),
(148, '3x3', 'Disponible', 7000, 72, 'Exterior', NULL),
(149, '4x4', 'Disponible', 9000, 73, 'Interior', NULL),
(150, '2x2', 'Ocupado', 4000, 73, 'Pasillo', NULL),
(151, '4x4', 'Ocupado', 9000, 73, 'Exterior', NULL),
(152, '3x3', 'Disponible', 7000, 73, 'Exterior', NULL),
(153, '4x4', 'Disponible', 9000, 74, 'Interior', NULL),
(154, '2x2', 'Ocupado', 4000, 74, 'Pasillo', NULL),
(155, '4x4', 'Ocupado', 9000, 74, 'Exterior', NULL),
(156, '3x3', 'Disponible', 7000, 74, 'Exterior', NULL),
(157, '4x4', 'Disponible', 9000, 75, 'Interior', NULL),
(158, '2x2', 'Ocupado', 4000, 75, 'Pasillo', NULL),
(159, '4x4', 'Ocupado', 9000, 75, 'Exterior', NULL),
(160, '3x3', 'Disponible', 7000, 75, 'Exterior', NULL),
(161, '4x4', 'Disponible', 9000, 76, 'Interior', NULL),
(162, '2x2', 'Ocupado', 4000, 76, 'Pasillo', NULL),
(163, '4x4', 'Ocupado', 9000, 76, 'Exterior', NULL),
(164, '3x3', 'Disponible', 7000, 76, 'Exterior', NULL),
(165, '4x4', 'Disponible', 9000, 77, 'Interior', NULL),
(166, '2x2', 'Ocupado', 4000, 77, 'Pasillo', NULL),
(167, '4x4', 'Ocupado', 9000, 77, 'Exterior', NULL),
(168, '3x3', 'Disponible', 7000, 77, 'Exterior', NULL),
(169, '4x4', 'Disponible', 9000, 78, 'Interior', NULL),
(170, '2x2', 'Ocupado', 4000, 78, 'Pasillo', NULL),
(171, '4x4', 'Ocupado', 9000, 78, 'Exterior', NULL),
(172, '3x3', 'Disponible', 7000, 78, 'Exterior', NULL),
(173, '4x4', 'Disponible', 9000, 79, 'Interior', NULL),
(174, '2x2', 'Ocupado', 4000, 79, 'Pasillo', NULL),
(175, '4x4', 'Ocupado', 9000, 79, 'Exterior', NULL),
(176, '3x3', 'Disponible', 7000, 79, 'Exterior', NULL),
(177, '4x4', 'Disponible', 9000, 80, 'Interior', NULL),
(178, '2x2', 'Ocupado', 4000, 80, 'Pasillo', NULL),
(179, '4x4', 'Ocupado', 9000, 80, 'Exterior', NULL),
(180, '3x3', 'Disponible', 7000, 80, 'Exterior', NULL),
(181, '4x4', 'Disponible', 9000, 81, 'Interior', NULL),
(182, '2x2', 'Ocupado', 4000, 81, 'Pasillo', NULL),
(183, '4x4', 'Ocupado', 9000, 81, 'Exterior', NULL),
(184, '3x3', 'Disponible', 7000, 81, 'Exterior', NULL),
(185, '4x4', 'Disponible', 9000, 82, 'Interior', NULL),
(186, '2x2', 'Ocupado', 4000, 82, 'Pasillo', NULL),
(187, '4x4', 'Ocupado', 9000, 82, 'Exterior', NULL),
(188, '3x3', 'Disponible', 7000, 82, 'Exterior', NULL),
(189, '4x4', 'Disponible', 9000, 83, 'Interior', NULL),
(190, '2x2', 'Ocupado', 4000, 83, 'Pasillo', NULL),
(191, '4x4', 'Ocupado', 9000, 83, 'Exterior', NULL),
(192, '3x3', 'Disponible', 7000, 83, 'Exterior', NULL),
(193, '4x4', 'Disponible', 9000, 84, 'Interior', NULL),
(194, '2x2', 'Ocupado', 4000, 84, 'Pasillo', NULL),
(195, '4x4', 'Ocupado', 9000, 84, 'Exterior', NULL),
(196, '3x3', 'Disponible', 7000, 84, 'Exterior', NULL),
(197, '4x4', 'Disponible', 9000, 85, 'Interior', NULL),
(198, '2x2', 'Ocupado', 4000, 85, 'Pasillo', NULL),
(199, '4x4', 'Ocupado', 9000, 85, 'Exterior', NULL),
(200, '3x3', 'Disponible', 7000, 85, 'Exterior', NULL),
(201, '4x4', 'Disponible', 9000, 86, 'Interior', NULL),
(202, '2x2', 'Ocupado', 4000, 86, 'Pasillo', NULL),
(203, '4x4', 'Ocupado', 9000, 86, 'Exterior', NULL),
(204, '3x3', 'Disponible', 7000, 86, 'Exterior', NULL),
(205, '4x4', 'Disponible', 9000, 87, 'Interior', NULL),
(206, '2x2', 'Ocupado', 4000, 87, 'Pasillo', NULL),
(207, '4x4', 'Ocupado', 9000, 87, 'Exterior', NULL),
(208, '3x3', 'Disponible', 7000, 87, 'Exterior', NULL),
(209, '4x4', 'Disponible', 9000, 88, 'Interior', NULL),
(210, '2x2', 'Ocupado', 4000, 88, 'Pasillo', NULL),
(211, '4x4', 'Ocupado', 9000, 88, 'Exterior', NULL),
(212, '3x3', 'Disponible', 7000, 88, 'Exterior', NULL),
(213, '4x4', 'Disponible', 9000, 89, 'Interior', NULL),
(214, '2x2', 'Ocupado', 4000, 89, 'Pasillo', NULL),
(215, '4x4', 'Ocupado', 9000, 89, 'Exterior', NULL),
(216, '3x3', 'Disponible', 7000, 89, 'Exterior', NULL),
(217, '4x4', 'Disponible', 9000, 90, 'Interior', NULL),
(218, '2x2', 'Ocupado', 4000, 90, 'Pasillo', NULL),
(219, '4x4', 'Ocupado', 9000, 90, 'Exterior', NULL),
(220, '3x3', 'Disponible', 7000, 90, 'Exterior', NULL),
(221, '4x4', 'Disponible', 9000, 91, 'Interior', NULL),
(222, '2x2', 'Ocupado', 4000, 91, 'Pasillo', NULL),
(223, '4x4', 'Ocupado', 9000, 91, 'Exterior', NULL),
(224, '3x3', 'Disponible', 7000, 91, 'Exterior', NULL),
(225, '4x4', 'Disponible', 9000, 92, 'Interior', NULL),
(226, '2x2', 'Ocupado', 4000, 92, 'Pasillo', NULL),
(227, '4x4', 'Ocupado', 9000, 92, 'Exterior', NULL),
(228, '3x3', 'Disponible', 7000, 92, 'Exterior', NULL),
(229, '4x4', 'Disponible', 9000, 93, 'Interior', NULL),
(230, '2x2', 'Ocupado', 4000, 93, 'Pasillo', NULL),
(231, '4x4', 'Ocupado', 9000, 93, 'Exterior', NULL),
(232, '3x3', 'Disponible', 7000, 93, 'Exterior', NULL),
(233, '4x4', 'Disponible', 9000, 94, 'Interior', NULL),
(234, '2x2', 'Ocupado', 4000, 94, 'Pasillo', NULL),
(235, '4x4', 'Ocupado', 9000, 94, 'Exterior', NULL),
(236, '3x3', 'Disponible', 7000, 94, 'Exterior', NULL),
(237, '4x4', 'Disponible', 9000, 95, 'Interior', NULL),
(238, '2x2', 'Ocupado', 4000, 95, 'Pasillo', NULL),
(239, '4x4', 'Ocupado', 9000, 95, 'Exterior', NULL),
(240, '3x3', 'Disponible', 7000, 95, 'Exterior', NULL),
(241, '4x4', 'Disponible', 9000, 96, 'Interior', NULL),
(242, '2x2', 'Ocupado', 4000, 96, 'Pasillo', NULL),
(243, '4x4', 'Ocupado', 9000, 96, 'Exterior', NULL),
(244, '3x3', 'Disponible', 7000, 96, 'Exterior', NULL),
(245, '4x4', 'Disponible', 9000, 97, 'Interior', NULL),
(246, '2x2', 'Ocupado', 4000, 97, 'Pasillo', NULL),
(247, '4x4', 'Ocupado', 9000, 97, 'Exterior', NULL),
(248, '3x3', 'Disponible', 7000, 97, 'Exterior', NULL),
(249, '4x4', 'Disponible', 9000, 98, 'Interior', NULL),
(250, '2x2', 'Ocupado', 4000, 98, 'Pasillo', NULL),
(251, '4x4', 'Ocupado', 9000, 98, 'Exterior', NULL),
(252, '3x3', 'Disponible', 7000, 98, 'Exterior', NULL),
(253, '4x4', 'Disponible', 9000, 99, 'Interior', NULL),
(254, '2x2', 'Ocupado', 4000, 99, 'Pasillo', NULL),
(255, '4x4', 'Ocupado', 9000, 99, 'Exterior', NULL),
(256, '3x3', 'Disponible', 7000, 99, 'Exterior', NULL),
(257, '4x4', 'Disponible', 9000, 100, 'Interior', NULL),
(258, '2x2', 'Ocupado', 4000, 100, 'Pasillo', NULL),
(259, '4x4', 'Ocupado', 9000, 100, 'Exterior', NULL),
(260, '3x3', 'Disponible', 7000, 100, 'Exterior', NULL),
(261, '4x4', 'Disponible', 9000, 101, 'Interior', NULL),
(262, '2x2', 'Ocupado', 4000, 101, 'Pasillo', NULL),
(263, '4x4', 'Ocupado', 9000, 101, 'Exterior', NULL),
(264, '3x3', 'Disponible', 7000, 101, 'Exterior', NULL),
(265, '4x4', 'Disponible', 9000, 102, 'Interior', NULL),
(266, '2x2', 'Ocupado', 4000, 102, 'Pasillo', NULL),
(267, '4x4', 'Ocupado', 9000, 102, 'Exterior', NULL),
(268, '3x3', 'Disponible', 7000, 102, 'Exterior', NULL),
(269, '4x4', 'Disponible', 9000, 103, 'Interior', NULL),
(270, '2x2', 'Ocupado', 4000, 103, 'Pasillo', NULL),
(271, '4x4', 'Ocupado', 9000, 103, 'Exterior', NULL),
(272, '3x3', 'Disponible', 7000, 103, 'Exterior', NULL),
(273, '4x4', 'Disponible', 9000, 104, 'Interior', NULL),
(274, '2x2', 'Ocupado', 4000, 104, 'Pasillo', NULL),
(275, '4x4', 'Ocupado', 9000, 104, 'Exterior', NULL),
(276, '3x3', 'Disponible', 7000, 104, 'Exterior', NULL),
(277, '4x4', 'Disponible', 9000, 105, 'Interior', NULL),
(278, '2x2', 'Ocupado', 4000, 105, 'Pasillo', NULL),
(279, '4x4', 'Ocupado', 9000, 105, 'Exterior', NULL),
(280, '3x3', 'Disponible', 7000, 105, 'Exterior', NULL),
(281, '4x4', 'Disponible', 9000, 106, 'Interior', NULL),
(282, '2x2', 'Ocupado', 4000, 106, 'Pasillo', NULL),
(283, '4x4', 'Ocupado', 9000, 106, 'Exterior', NULL),
(284, '3x3', 'Disponible', 7000, 106, 'Exterior', NULL),
(285, '4x4', 'Disponible', 9000, 107, 'Interior', NULL),
(286, '2x2', 'Ocupado', 4000, 107, 'Pasillo', NULL),
(287, '4x4', 'Ocupado', 9000, 107, 'Exterior', NULL),
(288, '3x3', 'Disponible', 7000, 107, 'Exterior', NULL),
(289, '4x4', 'Disponible', 9000, 108, 'Interior', NULL),
(290, '2x2', 'Ocupado', 4000, 108, 'Pasillo', NULL),
(291, '4x4', 'Ocupado', 9000, 108, 'Exterior', NULL),
(292, '3x3', 'Disponible', 7000, 108, 'Exterior', NULL),
(293, '4x4', 'Disponible', 9000, 109, 'Interior', NULL),
(294, '2x2', 'Ocupado', 4000, 109, 'Pasillo', NULL),
(295, '4x4', 'Ocupado', 9000, 109, 'Exterior', NULL),
(296, '3x3', 'Disponible', 7000, 109, 'Exterior', NULL),
(297, '4x4', 'Disponible', 9000, 110, 'Interior', NULL),
(298, '2x2', 'Ocupado', 4000, 110, 'Pasillo', NULL),
(299, '4x4', 'Ocupado', 9000, 110, 'Exterior', NULL),
(300, '3x3', 'Disponible', 7000, 110, 'Exterior', NULL),
(301, '4x4', 'Disponible', 9000, 111, 'Interior', NULL),
(302, '2x2', 'Ocupado', 4000, 111, 'Pasillo', NULL),
(303, '4x4', 'Ocupado', 9000, 111, 'Exterior', NULL),
(304, '3x3', 'Disponible', 7000, 111, 'Exterior', NULL),
(305, '4x4', 'Disponible', 9000, 112, 'Interior', NULL),
(306, '2x2', 'Ocupado', 4000, 112, 'Pasillo', NULL),
(307, '4x4', 'Ocupado', 9000, 112, 'Exterior', NULL),
(308, '3x3', 'Disponible', 7000, 112, 'Exterior', NULL),
(309, '4x4', 'Disponible', 9000, 113, 'Interior', NULL),
(310, '2x2', 'Ocupado', 4000, 113, 'Pasillo', NULL),
(311, '4x4', 'Ocupado', 9000, 113, 'Exterior', NULL),
(312, '3x3', 'Disponible', 7000, 113, 'Exterior', NULL),
(313, '4x4', 'Disponible', 9000, 114, 'Interior', NULL),
(314, '2x2', 'Ocupado', 4000, 114, 'Pasillo', NULL),
(315, '4x4', 'Ocupado', 9000, 114, 'Exterior', NULL),
(316, '3x3', 'Disponible', 7000, 114, 'Exterior', NULL),
(317, '4x4', 'Disponible', 9000, 115, 'Interior', NULL),
(318, '2x2', 'Ocupado', 4000, 115, 'Pasillo', NULL),
(319, '4x4', 'Ocupado', 9000, 115, 'Exterior', NULL),
(320, '3x3', 'Disponible', 7000, 115, 'Exterior', NULL),
(321, '4x4', 'Disponible', 9000, 116, 'Interior', NULL),
(322, '2x2', 'Ocupado', 4000, 116, 'Pasillo', NULL),
(323, '4x4', 'Ocupado', 9000, 116, 'Exterior', NULL),
(324, '3x3', 'Disponible', 7000, 116, 'Exterior', NULL),
(325, '4x4', 'Disponible', 9000, 117, 'Interior', NULL),
(326, '2x2', 'Ocupado', 4000, 117, 'Pasillo', NULL),
(327, '4x4', 'Ocupado', 9000, 117, 'Exterior', NULL),
(328, '3x3', 'Disponible', 7000, 117, 'Exterior', NULL),
(329, '4x4', 'Disponible', 9000, 118, 'Interior', NULL),
(330, '2x2', 'Ocupado', 4000, 118, 'Pasillo', NULL),
(331, '4x4', 'Ocupado', 9000, 118, 'Exterior', NULL),
(332, '3x3', 'Disponible', 7000, 118, 'Exterior', NULL),
(333, '4x4', 'Disponible', 9000, 119, 'Interior', NULL),
(334, '2x2', 'Ocupado', 4000, 119, 'Pasillo', NULL),
(335, '4x4', 'Ocupado', 9000, 119, 'Exterior', NULL),
(336, '3x3', 'Disponible', 7000, 119, 'Exterior', NULL),
(337, '4x4', 'Disponible', 9000, 120, 'Interior', NULL),
(338, '2x2', 'Ocupado', 4000, 120, 'Pasillo', NULL),
(339, '4x4', 'Ocupado', 9000, 120, 'Exterior', NULL),
(340, '3x3', 'Disponible', 7000, 120, 'Exterior', NULL),
(341, '4x4', 'Disponible', 9000, 121, 'Interior', NULL),
(342, '2x2', 'Ocupado', 4000, 121, 'Pasillo', NULL),
(343, '4x4', 'Ocupado', 9000, 121, 'Exterior', NULL),
(344, '3x3', 'Disponible', 7000, 121, 'Exterior', NULL),
(345, '4x4', 'Disponible', 9000, 122, 'Interior', NULL),
(346, '2x2', 'Ocupado', 4000, 122, 'Pasillo', NULL),
(347, '4x4', 'Ocupado', 9000, 122, 'Exterior', NULL),
(348, '3x3', 'Disponible', 7000, 122, 'Exterior', NULL),
(349, '4x4', 'Disponible', 9000, 123, 'Interior', NULL),
(350, '2x2', 'Ocupado', 4000, 123, 'Pasillo', NULL),
(351, '4x4', 'Ocupado', 9000, 123, 'Exterior', NULL),
(352, '3x3', 'Disponible', 7000, 123, 'Exterior', NULL),
(353, '4x4', 'Disponible', 9000, 124, 'Interior', NULL),
(354, '2x2', 'Ocupado', 4000, 124, 'Pasillo', NULL),
(355, '4x4', 'Ocupado', 9000, 124, 'Exterior', NULL),
(356, '3x3', 'Disponible', 7000, 124, 'Exterior', NULL),
(357, '4x4', 'Disponible', 9000, 125, 'Interior', NULL),
(358, '2x2', 'Ocupado', 4000, 125, 'Pasillo', NULL),
(359, '4x4', 'Ocupado', 9000, 125, 'Exterior', NULL),
(360, '3x3', 'Disponible', 7000, 125, 'Exterior', NULL),
(361, '4x4', 'Disponible', 9000, 126, 'Interior', NULL),
(362, '2x2', 'Ocupado', 4000, 126, 'Exterior', NULL),
(363, '4x4', 'Ocupado', 9000, 126, 'Exterior', NULL),
(364, '3x3', 'Disponible', 7000, 126, 'Interior', NULL),
(365, '4x4', 'Disponible', 9000, 127, 'Pasillo', NULL),
(366, '2x2', 'Ocupado', 4000, 127, 'Exterior', NULL),
(367, '4x4', 'Ocupado', 9000, 127, 'Exterior', NULL),
(368, '3x3', 'Disponible', 7000, 127, 'Interior', NULL),
(369, '4x4', 'Disponible', 9000, 128, 'Pasillo', NULL),
(370, '2x2', 'Ocupado', 4000, 128, 'Exterior', NULL),
(371, '4x4', 'Ocupado', 9000, 128, 'Exterior', NULL),
(372, '3x3', 'Disponible', 7000, 128, 'Interior', NULL),
(373, '4x4', 'Disponible', 9000, 129, 'Pasillo', NULL),
(374, '2x2', 'Ocupado', 4000, 129, 'Exterior', NULL),
(375, '4x4', 'Ocupado', 9000, 129, 'Exterior', NULL),
(376, '3x3', 'Disponible', 7000, 129, 'Interior', NULL),
(377, '4x4', 'Disponible', 9000, 130, 'Pasillo', NULL),
(378, '2x2', 'Ocupado', 4000, 130, 'Exterior', NULL),
(379, '4x4', 'Ocupado', 9000, 130, 'Exterior', NULL),
(380, '3x3', 'Disponible', 7000, 130, 'Interior', NULL),
(381, '4x4', 'Disponible', 9000, 131, 'Pasillo', NULL),
(382, '2x2', 'Ocupado', 4000, 131, 'Exterior', NULL),
(383, '4x4', 'Ocupado', 9000, 131, 'Exterior', NULL),
(384, '3x3', 'Disponible', 7000, 131, 'Interior', NULL),
(385, '4x4', 'Disponible', 9000, 132, 'Pasillo', NULL),
(386, '2x2', 'Ocupado', 4000, 132, 'Exterior', NULL),
(387, '4x4', 'Ocupado', 9000, 132, 'Exterior', NULL),
(388, '3x3', 'Disponible', 7000, 132, 'Interior', NULL),
(389, '4x4', 'Disponible', 9000, 133, 'Pasillo', NULL),
(390, '2x2', 'Ocupado', 4000, 133, 'Exterior', NULL),
(391, '4x4', 'Ocupado', 9000, 133, 'Exterior', NULL),
(392, '3x3', 'Disponible', 7000, 133, 'Interior', NULL),
(393, '4x4', 'Disponible', 9000, 134, 'Pasillo', NULL),
(394, '2x2', 'Ocupado', 4000, 134, 'Exterior', NULL),
(395, '4x4', 'Ocupado', 9000, 134, 'Exterior', NULL),
(396, '3x3', 'Disponible', 7000, 134, 'Interior', NULL),
(397, '4x4', 'Disponible', 9000, 135, 'Pasillo', NULL),
(398, '2x2', 'Ocupado', 4000, 135, 'Exterior', NULL),
(399, '4x4', 'Ocupado', 9000, 135, 'Exterior', NULL),
(400, '3x3', 'Disponible', 7000, 135, 'Interior', NULL),
(401, '4x4', 'Disponible', 9000, 136, 'Exterior', NULL),
(402, '2x2', 'Ocupado', 4000, 136, 'Exterior', NULL),
(403, '4x4', 'Ocupado', 9000, 136, 'Interior', NULL),
(404, '3x3', 'Disponible', 7000, 136, 'Pasillo', NULL),
(405, '4x4', 'Disponible', 9000, 137, 'Exterior', NULL),
(406, '2x2', 'Ocupado', 4000, 137, 'Exterior', NULL),
(407, '4x4', 'Ocupado', 9000, 137, 'Interior', NULL),
(408, '3x3', 'Disponible', 7000, 137, 'Pasillo', NULL),
(409, '4x4', 'Disponible', 9000, 138, 'Exterior', NULL),
(410, '2x2', 'Ocupado', 4000, 138, 'Exterior', NULL),
(411, '4x4', 'Ocupado', 9000, 138, 'Interior', NULL),
(412, '3x3', 'Disponible', 7000, 138, 'Pasillo', NULL),
(413, '4x4', 'Disponible', 9000, 139, 'Exterior', NULL),
(414, '2x2', 'Ocupado', 4000, 139, 'Exterior', NULL),
(415, '4x4', 'Ocupado', 9000, 139, 'Interior', NULL),
(416, '3x3', 'Disponible', 7000, 139, 'Pasillo', NULL),
(417, '4x4', 'Disponible', 9000, 140, 'Exterior', NULL),
(418, '2x2', 'Ocupado', 4000, 140, 'Exterior', NULL),
(419, '4x4', 'Ocupado', 9000, 140, 'Interior', NULL),
(420, '3x3', 'Disponible', 7000, 140, 'Pasillo', NULL),
(421, '4x4', 'Disponible', 9000, 141, 'Exterior', NULL),
(422, '2x2', 'Ocupado', 4000, 141, 'Exterior', NULL),
(423, '4x4', 'Ocupado', 9000, 141, 'Interior', NULL),
(424, '3x3', 'Disponible', 7000, 141, 'Pasillo', NULL),
(425, '4x4', 'Disponible', 9000, 142, 'Exterior', NULL),
(426, '2x2', 'Ocupado', 4000, 142, 'Exterior', NULL),
(427, '4x4', 'Ocupado', 9000, 142, 'Interior', NULL),
(428, '3x3', 'Disponible', 7000, 142, 'Pasillo', NULL),
(429, '4x4', 'Disponible', 9000, 143, 'Exterior', NULL),
(430, '2x2', 'Ocupado', 4000, 143, 'Exterior', NULL),
(431, '4x4', 'Ocupado', 9000, 143, 'Interior', NULL),
(432, '3x3', 'Disponible', 7000, 143, 'Pasillo', NULL),
(433, '4x4', 'Disponible', 9000, 144, 'Exterior', NULL),
(434, '2x2', 'Ocupado', 4000, 144, 'Exterior', NULL),
(435, '4x4', 'Ocupado', 9000, 144, 'Interior', NULL),
(436, '3x3', 'Disponible', 7000, 144, 'Pasillo', NULL),
(437, '4x4', 'Disponible', 9000, 145, 'Exterior', NULL),
(438, '2x2', 'Ocupado', 4000, 145, 'Exterior', NULL),
(439, '4x4', 'Ocupado', 9000, 145, 'Interior', NULL),
(440, '3x3', 'Disponible', 7000, 145, 'Exterior', NULL),
(441, '4x4', 'Disponible', 9000, 146, 'Exterior', NULL),
(442, '2x2', 'Ocupado', 4000, 146, 'Interior', NULL),
(443, '4x4', 'Ocupado', 9000, 146, 'Pasillo', NULL),
(444, '3x3', 'Disponible', 7000, 146, 'Exterior', NULL),
(445, '4x4', 'Disponible', 9000, 147, 'Exterior', NULL),
(446, '2x2', 'Ocupado', 4000, 147, 'Interior', NULL),
(447, '4x4', 'Ocupado', 9000, 147, 'Pasillo', NULL),
(448, '3x3', 'Disponible', 7000, 147, 'Exterior', NULL),
(449, '4x4', 'Disponible', 9000, 148, 'Exterior', NULL),
(450, '2x2', 'Ocupado', 4000, 148, 'Interior', NULL),
(451, '4x4', 'Ocupado', 9000, 148, 'Exterior', NULL),
(452, '3x3', 'Disponible', 7000, 148, 'Exterior', NULL),
(453, '4x4', 'Disponible', 9000, 149, 'Interior', NULL),
(454, '2x2', 'Ocupado', 4000, 149, 'Pasillo', NULL),
(455, '4x4', 'Ocupado', 9000, 149, 'Exterior', NULL),
(456, '3x3', 'Disponible', 7000, 149, 'Exterior', NULL),
(457, '4x4', 'Disponible', 9000, 150, 'Interior', NULL),
(458, '2x2', 'Ocupado', 4000, 150, 'Pasillo', NULL),
(459, '4x4', 'Ocupado', 9000, 150, 'Exterior', NULL),
(460, '3x3', 'Disponible', 7000, 150, 'Exterior', NULL),
(461, '4x4', 'Disponible', 9000, 151, 'Interior', NULL),
(462, '2x2', 'Ocupado', 4000, 151, 'Pasillo', NULL),
(463, '4x4', 'Ocupado', 9000, 151, 'Exterior', NULL),
(464, '3x3', 'Disponible', 7000, 151, 'Exterior', NULL),
(465, '4x4', 'Disponible', 9000, 152, 'Interior', NULL),
(466, '2x2', 'Ocupado', 4000, 152, 'Pasillo', NULL),
(467, '4x4', 'Ocupado', 9000, 152, 'Exterior', NULL),
(468, '3x3', 'Disponible', 7000, 152, 'Exterior', NULL),
(469, '4x4', 'Disponible', 9000, 153, 'Interior', NULL),
(470, '2x2', 'Ocupado', 4000, 153, 'Pasillo', NULL),
(471, '4x4', 'Ocupado', 9000, 153, 'Exterior', NULL),
(472, '3x3', 'Disponible', 7000, 153, 'Exterior', NULL),
(473, '4x4', 'Disponible', 9000, 154, 'Interior', NULL),
(474, '2x2', 'Ocupado', 4000, 154, 'Pasillo', NULL),
(475, '4x4', 'Ocupado', 9000, 154, 'Exterior', NULL),
(476, '3x3', 'Disponible', 7000, 154, 'Exterior', NULL),
(477, '4x4', 'Disponible', 9000, 155, 'Interior', NULL),
(478, '2x2', 'Ocupado', 4000, 155, 'Pasillo', NULL),
(479, '4x4', 'Ocupado', 9000, 155, 'Exterior', NULL),
(480, '3x3', 'Disponible', 7000, 155, 'Exterior', NULL),
(481, '4x4', 'Disponible', 9000, 156, 'Interior', NULL),
(482, '2x2', 'Ocupado', 4000, 156, 'Pasillo', NULL),
(483, '4x4', 'Ocupado', 9000, 156, 'Exterior', NULL),
(484, '3x3', 'Disponible', 7000, 156, 'Exterior', NULL),
(485, '4x4', 'Disponible', 9000, 157, 'Interior', NULL),
(486, '2x2', 'Ocupado', 4000, 157, 'Pasillo', NULL),
(487, '4x4', 'Ocupado', 9000, 157, 'Exterior', NULL),
(488, '3x3', 'Disponible', 7000, 157, 'Exterior', NULL),
(489, '4x4', 'Disponible', 9000, 158, 'Interior', NULL),
(490, '2x2', 'Ocupado', 4000, 158, 'Exterior', NULL),
(491, '4x4', 'Ocupado', 9000, 158, 'Exterior', NULL),
(492, '3x3', 'Disponible', 7000, 158, 'Interior', NULL),
(493, '4x4', 'Disponible', 9000, 159, 'Pasillo', NULL),
(494, '2x2', 'Ocupado', 4000, 159, 'Exterior', NULL),
(495, '4x4', 'Ocupado', 9000, 159, 'Exterior', NULL),
(496, '3x3', 'Disponible', 7000, 159, 'Interior', NULL),
(497, '4x4', 'Disponible', 9000, 160, 'Pasillo', NULL),
(498, '2x2', 'Ocupado', 4000, 160, 'Exterior', NULL),
(499, '4x4', 'Ocupado', 9000, 160, 'Exterior', NULL),
(500, '3x3', 'Disponible', 7000, 160, 'Interior', NULL),
(501, '4x4', 'Disponible', 9000, 161, 'Exterior', NULL),
(502, '2x2', 'Ocupado', 4000, 161, 'Exterior', NULL),
(503, '4x4', 'Ocupado', 9000, 161, 'Interior', NULL),
(504, '3x3', 'Disponible', 7000, 161, 'Pasillo', NULL),
(540, '3x3', 'Disponible', 3000, 136, 'Exterior', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estacion_mexi`
--

CREATE TABLE `estacion_mexi` (
  `id_estacion` int(11) NOT NULL,
  `nume_linea` int(11) DEFAULT NULL,
  `nom_estacion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estacion_mexi`
--

INSERT INTO `estacion_mexi` (`id_estacion`, `nume_linea`, `nom_estacion`) VALUES
(1, 1, 'Ojo de agua'),
(2, 1, 'Esmeralda'),
(4, 1, 'Cuauhtemoc Norte'),
(9, 1, 'Cuauhtemoc Sur\r\n'),
(10, 1, 'Hidalgo'),
(11, 1, 'Insurgentes'),
(12, 1, 'Central de abastos\r\n'),
(13, 1, '19 de septiembre\r\n'),
(14, 1, 'Palomas\r\n'),
(15, 1, 'Jardines de Morelos\r'),
(16, 1, 'Hospital'),
(17, 1, '1ro. de Mayo\r\n'),
(18, 1, 'Las Americas\r\n'),
(19, 1, 'Valle Ecatepec\r\n'),
(20, 1, 'Vocacional 3\r\n'),
(21, 1, 'Adolfo Lopez Mateos\r'),
(22, 1, 'Zodiaco'),
(23, 1, 'A. Torres\r\n'),
(24, 1, 'UNITEC\r\n'),
(25, 1, 'Industrial'),
(26, 1, 'Josefa Ortiz\r\n'),
(27, 1, 'Quinto Sol\r\n'),
(28, 1, 'Ciudad Azteca\r\n'),
(60, 2, 'Las Americas\r\n'),
(61, 2, '1ro. de Mayo\r\n'),
(62, 2, 'San Martin\r\n'),
(63, 2, 'Puente Fierro\r\n'),
(64, 2, 'Casa de Morelos\r\n'),
(65, 2, 'UPE\r\n'),
(66, 2, 'San Cristobal\r\n'),
(67, 2, 'Agricultura\r\n'),
(68, 2, 'ISSEMYM\r\n'),
(69, 2, 'El Carmen\r\n'),
(70, 2, 'Ecatepec\r\n'),
(71, 2, 'DIF\r\n'),
(72, 2, 'Guadalupe Victoria\r\n'),
(73, 2, 'Venustiano Carranza\r'),
(74, 2, 'FOVISSSTE\r\n'),
(75, 2, 'San Carlos\r\n'),
(76, 2, 'La Laguna\r\n'),
(77, 2, 'Parque Residencial\r\n'),
(78, 2, 'Eje 8\r\n'),
(79, 2, '1ra. de Villa\r\n'),
(80, 2, 'Las Flores\r\n'),
(81, 2, 'San Francisco\r\n'),
(82, 2, 'Heroes Canosas\r\n'),
(83, 2, 'Coacalco Tultepec\r\n'),
(84, 2, 'Exhacienda\r\n'),
(85, 2, 'Bosques del Valle\r\n'),
(86, 2, 'Coacalco Berriozábal'),
(87, 2, 'Santa Maria\r\n'),
(88, 2, 'Villas de San Jose\r\n'),
(89, 2, 'Mariscala Real del B'),
(90, 2, 'Fuentes del Valle\r\n'),
(91, 2, 'De la Cruz San Mateo'),
(92, 2, 'Cartagena\r\n'),
(93, 2, 'Bello Horizonte\r\n'),
(94, 2, 'Bandera Tultitlán\r\n'),
(95, 2, 'Buenavista'),
(96, 2, 'COCEM'),
(97, 2, 'Recursos Hidráulicos'),
(98, 2, 'Chilpan'),
(99, 2, 'Ciudad Labor\r\n'),
(100, 2, 'Vidriería\r\n'),
(101, 2, 'Lechería'),
(102, 2, 'La Quebrada\r\n'),
(103, 3, 'Chimalhuacan'),
(104, 3, 'Acuitlapilco'),
(105, 3, 'Refugio'),
(106, 3, 'Los Patos\r\n'),
(107, 3, 'San Pablo\r\n'),
(108, 3, 'Ignacio Manuel Altam'),
(109, 3, 'Santa Elena\r\n'),
(110, 3, 'Embarcadero\r\n'),
(111, 3, 'La Presa\r\n'),
(112, 3, 'Canteros'),
(113, 3, 'Las Flores\r\n'),
(114, 3, 'Guerrero Chimalli\r\n'),
(115, 3, 'Las Torres\r\n'),
(116, 3, 'Bordo de Xochiaca\r\n'),
(117, 3, 'Rancho Grande\r\n'),
(118, 3, 'Las Mañanitas\r\n'),
(119, 3, 'Las Mañanitas\r\n'),
(120, 3, 'General Vicente Vill'),
(121, 3, 'El Castillito\r\n'),
(122, 3, 'Sor Juana Inés de la'),
(123, 3, 'Palacio Municipal\r\n'),
(124, 3, 'Adolfo López Mateos\r'),
(125, 3, 'Lago de Chapala\r\n'),
(126, 3, 'Nezahualcóyotl\r\n'),
(127, 3, 'Virgencitas\r\n'),
(128, 3, 'Vicente Riva Palacio'),
(129, 3, 'Maravillas\r\n'),
(130, 3, 'El Barquito\r\n'),
(131, 3, 'Calle 6\r\n'),
(132, 3, 'Pantitlán\r\n'),
(133, 4, 'Terminal UMB'),
(134, 4, 'Bosques'),
(135, 4, 'Las Flores\r\n'),
(136, 4, 'Margarito F. Ayala\r\n'),
(137, 4, 'Revolución\r\n'),
(138, 4, 'Ejido Santo Tomás\r\n'),
(139, 4, 'Santo Tomas Chiconau'),
(140, 4, 'Central de Abastos\r\n'),
(141, 4, 'Izcalli Palomas\r\n'),
(142, 4, 'Puente de Fierro\r\n'),
(143, 4, 'San Cristóbal\r\n'),
(144, 4, 'La Viga\r\n'),
(145, 4, 'Laureles\r\n'),
(146, 4, 'Nuevo Laredo\r\n'),
(147, 4, 'Siervo de la Nación\r'),
(148, 4, 'Tulpetlac\r\n'),
(149, 4, 'La 5ª Aparición\r\n'),
(150, 4, 'Industrial'),
(151, 4, 'Clínica 93\r\n'),
(152, 4, 'Servicios Administra'),
(153, 4, 'Cerro Gordo\r\n'),
(154, 4, 'Santa Clara\r\n'),
(155, 4, '5 de Febrero\r\n'),
(156, 4, 'Monumento a Morelos\r'),
(157, 4, 'Vía Morelos\r\n'),
(158, 4, 'Clínica 76\r\n'),
(159, 4, 'Martin Carrera\r\n'),
(160, 4, 'Periférico\r\n'),
(161, 4, 'Indios Verdes\r\n'),
(162, 1, 'Loma Bonita'),
(163, 1, 'Ozumbilla'),
(164, 1, 'San Francisco'),
(165, 1, 'Tecamac'),
(166, 1, 'Glorieta Militar'),
(167, 1, 'Combustibles'),
(168, 1, 'Hacienda'),
(169, 1, 'Terminal pasajeros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_mexi`
--

CREATE TABLE `linea_mexi` (
  `num_linea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `linea_mexi`
--

INSERT INTO `linea_mexi` (`num_linea`) VALUES
(1),
(2),
(3),
(4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nom_rol` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nom_rol`) VALUES
(1, 'Admin'),
(2, 'Vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `contrasena` varchar(20) DEFAULT NULL,
  `tipo_rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `correo`, `contrasena`, `tipo_rol`) VALUES
(1, 'encargado@gmail.com', 'encargado1', 1),
(2, 'vendedor@gmail.com', 'vendedor1', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `id_vendedor` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `ubicacion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`id_vendedor`, `nombre`, `apellido`, `correo`, `telefono`, `ubicacion`) VALUES
(1, 'Juan', 'Vazquez', 'vendedor@gmail.com', '5513680053', 'Manzana 032,55076 Ecatepec de Morelos,México\r\n\r\n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `espacio_public`
--
ALTER TABLE `espacio_public`
  ADD PRIMARY KEY (`id_espacio`),
  ADD KEY `estacionn_mexi` (`estacionn_mexi`);

--
-- Indices de la tabla `estacion_mexi`
--
ALTER TABLE `estacion_mexi`
  ADD PRIMARY KEY (`id_estacion`),
  ADD KEY `nume_linea` (`nume_linea`);

--
-- Indices de la tabla `linea_mexi`
--
ALTER TABLE `linea_mexi`
  ADD PRIMARY KEY (`num_linea`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `tipo_rol` (`tipo_rol`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`id_vendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `espacio_public`
--
ALTER TABLE `espacio_public`
  MODIFY `id_espacio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=542;

--
-- AUTO_INCREMENT de la tabla `estacion_mexi`
--
ALTER TABLE `estacion_mexi`
  MODIFY `id_estacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `id_vendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `espacio_public`
--
ALTER TABLE `espacio_public`
  ADD CONSTRAINT `espacio_public_ibfk_1` FOREIGN KEY (`estacionn_mexi`) REFERENCES `estacion_mexi` (`id_estacion`);

--
-- Filtros para la tabla `estacion_mexi`
--
ALTER TABLE `estacion_mexi`
  ADD CONSTRAINT `estacion_mexi_ibfk_1` FOREIGN KEY (`nume_linea`) REFERENCES `linea_mexi` (`num_linea`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`tipo_rol`) REFERENCES `roles` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
