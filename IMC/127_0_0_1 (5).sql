-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2024 a las 03:57:37
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `imc`
--
CREATE DATABASE IF NOT EXISTS `imc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `imc`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`nombre`, `correo`, `contrasena`, `telefono`) VALUES
('daniel', 'danielvalle096@gmail.com', 'mamerto1887', '7294904466');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `nombre` varchar(50) NOT NULL,
  `AP` varchar(50) NOT NULL,
  `AM` varchar(50) NOT NULL,
  `edad` varchar(50) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `enfermedad` varchar(50) NOT NULL,
  `otra_enfermedad` varchar(50) NOT NULL,
  `objetivo` varchar(50) NOT NULL,
  `otro_objetivo` varchar(50) NOT NULL,
  `altura` varchar(50) NOT NULL,
  `peso` varchar(50) NOT NULL,
  `IMC` varchar(50) NOT NULL,
  `Fecha_De_Visita` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`nombre`, `AP`, `AM`, `edad`, `sexo`, `enfermedad`, `otra_enfermedad`, `objetivo`, `otro_objetivo`, `altura`, `peso`, `IMC`, `Fecha_De_Visita`) VALUES
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:17:17'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:18:17'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:22:04'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:22:09'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:23:44'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:30:40'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:33:43'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:34:10'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:36:12'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:37:31'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:37:56'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:44:23'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:44:58'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:45:08'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:45:21'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:45:44'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:45:52'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:45:59'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:46:12'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:46:20'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:46:41'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:47:00'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:47:14'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:47:23'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:47:47'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:48:02'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:48:40'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:48:55'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:49:46'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:50:09'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:50:41'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:50:55'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:51:10'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-27 06:51:36'),
('ARACELI', 'PENA', 'ORTEGA', '17', 'F', 'Ansiedad y depresion', 'nada', 'Quiero tener hijos', 'nada', '1.5', '55.5', '24.67', '2024-11-28 01:26:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
