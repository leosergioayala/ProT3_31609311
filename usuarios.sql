-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2025 a las 02:01:20
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sergio_ayala`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `inputName` varchar(50) NOT NULL,
  `inputSurname` varchar(50) NOT NULL,
  `inputUser` varchar(20) NOT NULL,
  `inputEmail` varchar(100) NOT NULL,
  `inputPassword` varchar(100) NOT NULL,
  `inputCity` varchar(100) NOT NULL,
  `inputZip` int(4) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `Baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `inputName`, `inputSurname`, `inputUser`, `inputEmail`, `inputPassword`, `inputCity`, `inputZip`, `perfil_id`, `Baja`) VALUES
(6, 'Marcelo', 'Vallejos', 'marcelito', 'marcelito@gmail.com', '$2y$10$/AV9EzoxPyf0D.94aGGpz.EKrtApl07/LeGr2SJV1EwU0CKuCdRhe', '', 0, 1, 'NO'),
(7, 'Jesica', 'Morales', 'jesicax', 'jesica@gmail.com', '$2y$10$xzNzGDt8tIaMQvzNC9vLFeiWlS.nst1czpdSKEQOGANB/YlGyTMHW', '', 0, 2, 'NO'),
(8, 'Gonzalo', 'Aquino', 'Gonzalux', 'gonzalox@gmail.com', '$2y$10$ZYzj7uGLO9n5siN8zL0pQe4q97qcDLVJlbTyGdIc8z2VDJoCYLqES', '', 0, 2, 'NO'),
(10, 'Mariana', 'Benitez', 'Marianaben', 'marianaben@gmail.com', '$2y$10$O8BrXnn9jN8r1Sc24kgGI.QWDHrUSTR6a5r8vMmig7J.dkAzEwlIS', '', 0, 2, 'NO'),
(11, 'rocio', 'Bravo', 'rociomaricel', 'rocio@gmail.com', '$2y$10$qb0lQ6A/.tIOp07PI5JNiuQMFB12GgsQ8ura7fcc8EB2aNkU6fu2e', '', 0, 2, 'NO'),
(13, 'josefina', 'Taborda', 'joseTaborda', 'alexandra@gmail.com', '$2y$10$P4N723H7TnpemZ2LVq1stOAgIta57UZeZxKuMKpnGp8T5jMM.f3H6', '', 0, 2, 'NO'),
(15, 'Andrea ', 'Escobar', 'andrea', 'andrea@gmail.com', '$2y$10$cHTBJncWbohI9kSXJNQ85.8E0pbPXJeppd7zkhCh9lQCbCHKB8owe', '', 0, 2, 'NO'),
(16, 'debora', 'avalos', 'debora', 'debora@gmail.com', '$2y$10$bcC0iiyoIaVeM1MVXTUpOux.OS.RvEln3mR/46mTy5HY.D0y7UnTC', '', 0, 2, 'NO'),
(17, 'soledad', 'pastorutti', 'soledadfolk', 'soledadfolk@gmail.com', '$2y$10$goxxaCPOQE13m4RFVTq5EOU5F451ZfobnsgTDf2/vH61xifb/aFW.', '', 0, 2, 'NO'),
(18, 'Milagros', 'Iturriaga', 'milimili', 'milagros@gmail.com', '$2y$10$4WEDs24ggBHnjA8ziguuQeFWrt4pbqgaaVqIFiUpARXF9w2dzfZQu', '', 0, 2, 'NO'),
(19, 'andrea', 'Lapalma', 'andrealapalma', 'lapalma@gmail.com', '$2y$10$5h03A6W//gPLH6zWPVLp6.bpsxRbwJjnoqaXSEbq/0MwlDEv8Skhe', '', 0, 2, 'NO'),
(20, 'Camilo', 'Fernandez', 'camilo22', 'camilo22@gmail.com', '$2y$10$yOmiynB2U8S4lVgctfmnt.8nV9ULvE9SuzNwsxTCQGZM8XHZGvb8m', '', 0, 2, 'NO'),
(21, 'cristina', 'Fernandez', 'cristina', 'cristina@gmail.com', '$2y$10$i3ZKAiMx1rft5VCD105bLOCAX3a78yT5VwCzEE5oUnkNPPjuWrUpK', '', 0, 2, 'NO'),
(22, 'alberto', 'Fernandez', 'alberto', 'alberto@gmail.com', '$2y$10$4BuFDWgdtJupk4VcarIFNOBMWP1sepggfM4HiBPINlHfy23Gxmc/a', '', 0, 2, 'NO'),
(23, 'juan', 'perez', 'juanperez', 'juanperez@gmail.com', '$2y$10$LBV0cdUmb6b9rIamx3nmiOKVmPi1ecVzRDQ/FwmrNQvaFJtnRTxwu', '', 0, 2, 'NO'),
(24, 'patricio', 'zamudio', 'patricio', 'patricio@gmail.com', '$2y$10$AYCZLAfcmOG/PKcDH0/KAezjxcls0RjQ0roKB6yORQ7HiIo2PyO6u', '', 0, 2, 'NO'),
(26, 'sergio', 'Ayala', 'sergioaya', 'sergioleoayala@gmail.com', '$2y$10$iNcyWgkiDZgNA7.MI6dg1u3Z6jFwRZHhLEzt7.OM9Y.ZZQHEzoV6i', '', 0, 1, 'NO'),
(27, 'maricel', 'gutierrez', 'maricel', 'maricel@gmail.com', '$2y$10$NwbxX3mhxF0V8fwRE49xz.p/OhEXk4E2vf8J0nfoUD4D8wNdFZinW', '', 0, 2, 'NO'),
(29, 'Paulino', 'Ayala', 'Paulino', 'paulino@gmail.com', '$2y$10$xq77aWD0U/QUA2d63OGJZ.W5/3MwSut2dKF5xU5wPnUfmhJ43hjHi', '', 0, 2, 'NO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
