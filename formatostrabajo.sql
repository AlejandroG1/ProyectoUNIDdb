-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 12:36 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formatostrabajo`
--

-- --------------------------------------------------------

--
-- Table structure for table `acceso_usuarios`
--

CREATE TABLE `acceso_usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `tipo_cuenta` int(25) NOT NULL DEFAULT 1,
  `tipo_curriculum` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acceso_usuarios`
--

INSERT INTO `acceso_usuarios` (`id`, `user`, `Password`, `status`, `fecha_registro`, `tipo_cuenta`, `tipo_curriculum`) VALUES
(3, 'admin', '12345', 8, '2021-08-04 21:00:51', 1, 0),
(5, 'adminO', '1234567', 1, '2021-08-05 03:30:00', 1, 0),
(6, 'testregister', '12345', 8, '2021-08-05 15:42:52', 1, 0),
(7, 'userLeng', '12345', 3, '2021-08-05 15:46:46', 1, 0),
(8, 'pas', '123456', 3, '2021-08-05 16:06:36', 1, 0),
(9, 'pasdsda', '12', 2, '2021-08-05 16:07:09', 1, 0),
(11, 'dsadafsad', '121', 2, '2021-08-05 16:15:19', 1, 0),
(12, 'testds', '5252', 2, '2021-08-05 16:21:59', 1, 0),
(18, 'sddfdf', '1234', 2, '2021-08-05 17:37:26', 1, 0),
(19, 'use5453324', '12345', 2, '2021-08-05 17:43:18', 1, 0),
(20, 'web23442', '1234', 2, '2021-08-05 17:46:03', 1, 0),
(32, 'faaaaaa', '12341', 2, '2021-08-05 17:49:00', 1, 0),
(37, 'fdfdsfds', '234', 2, '2021-08-05 17:56:44', 1, 0),
(39, 'ffdfd', '123', 2, '2021-08-05 18:07:45', 1, 0),
(40, 'aaaaaa', '1', 2, '2021-08-05 18:08:31', 1, 0),
(41, 'psa', '1234', 2, '2021-08-05 18:11:00', 1, 0),
(42, 'faq', '123', 2, '2021-08-05 18:26:58', 1, 0),
(44, '1234', '1234', 2, '2021-08-05 18:29:09', 1, 0),
(45, 'asd', 'asd', 2, '2021-08-05 18:32:42', 1, 0),
(46, 'aaaaaaaa', '12345', 2, '2021-08-05 18:34:42', 1, 0),
(47, 'asdf', '1234', 2, '2021-08-05 18:38:40', 1, 0),
(48, 'baaaa', '123', 2, '2021-08-05 18:43:40', 1, 0),
(49, '123456', '123', 2, '2021-08-05 18:44:08', 1, 0),
(50, 'parse', '1234', 2, '2021-08-05 18:47:17', 1, 0),
(52, 'test55', '1234', 2, '2021-08-05 18:54:29', 1, 0),
(53, 'kkkd', '123', 2, '2021-08-05 18:59:56', 1, 0),
(54, 'fffffffffffffff', '1234', 2, '2021-08-05 19:16:31', 1, 0),
(55, 'prues', '123', 2, '2021-08-05 19:19:05', 1, 0),
(56, 'passw', '123', 2, '2021-08-05 19:20:11', 1, 0),
(57, 'testdasdasd', '1234', 2, '2021-08-05 20:05:01', 1, 0),
(58, 'fffadds', 'asd', 2, '2021-08-05 20:10:08', 1, 0),
(59, 'dsfsfdsfsd', '1234', 2, '2021-08-05 20:11:48', 1, 0),
(60, 'dsadsadsadsad', '123', 2, '2021-08-05 20:12:51', 1, 0),
(61, 'ddsad', '123', 2, '2021-08-05 20:14:14', 1, 0),
(62, 'dasdsadsada', '123', 2, '2021-08-05 20:23:38', 1, 0),
(63, 'sdsadas', '123', 2, '2021-08-05 20:24:29', 1, 0),
(64, 'dsadsdasda', '123', 2, '2021-08-05 20:26:53', 1, 0),
(65, 'fsfdsfsdfsd', '123', 2, '2021-08-05 20:28:56', 1, 0),
(66, 'fffffffff', '1234', 2, '2021-08-05 20:35:51', 1, 0),
(67, 'gdfgfg', '123', 2, '2021-08-05 20:53:55', 1, 0),
(68, 'asdaaa', '1234', 2, '2021-08-05 21:01:18', 1, 0),
(69, 'fdsfsdfs', '43', 2, '2021-08-05 21:11:27', 1, 0),
(70, 'dsa', '34', 2, '2021-08-05 21:19:13', 1, 0),
(71, 'test34', '23', 2, '2021-08-05 21:20:27', 1, 0),
(72, 'fa', 'd', 2, '2021-08-05 21:26:15', 1, 0),
(73, 'dsafgg', '12', 2, '2021-08-05 21:55:09', 1, 0),
(74, '23ee', '2', 2, '2021-08-05 21:58:49', 1, 0),
(75, 'S', '2', 2, '2021-08-05 22:00:02', 1, 0),
(76, 'asdd', '23', 2, '2021-08-05 22:01:18', 1, 0),
(77, 'dasdsadas', '23', 2, '2021-08-05 22:07:03', 1, 0),
(78, 'fdwda', '23', 2, '2021-08-05 22:07:49', 1, 0),
(79, 'final', '3', 2, '2021-08-05 22:10:24', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `datos_usuarios`
--

CREATE TABLE `datos_usuarios` (
  `Id` int(1) NOT NULL,
  `usuario_acceso` varchar(30) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `ApellidoP` varchar(40) NOT NULL,
  `ApellidoM` varchar(40) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Telefono` int(12) NOT NULL,
  `Direccion` varchar(120) NOT NULL,
  `AcercaDe` varchar(250) NOT NULL,
  `fecha_nac` date NOT NULL,
  `estatura` float NOT NULL,
  `peso` float NOT NULL,
  `estado_civil` varchar(25) NOT NULL,
  `vive_con` varchar(50) NOT NULL,
  `dependen` varchar(50) NOT NULL,
  `curp` varchar(30) NOT NULL,
  `num_seguro_social` varchar(25) NOT NULL,
  `num_cartilla_mili` varchar(25) NOT NULL,
  `num_pasaporte` varchar(25) NOT NULL,
  `AFORE` varchar(15) NOT NULL,
  `estado_salud` varchar(50) NOT NULL,
  `enfermedades_cronicas` varchar(100) NOT NULL,
  `deportes` varchar(100) NOT NULL,
  `clubs` varchar(100) NOT NULL,
  `pasatiempo` varchar(100) NOT NULL,
  `meta_vida` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `datos_usuarios`
--

INSERT INTO `datos_usuarios` (`Id`, `usuario_acceso`, `Nombres`, `ApellidoP`, `ApellidoM`, `Correo`, `Telefono`, `Direccion`, `AcercaDe`, `fecha_nac`, `estatura`, `peso`, `estado_civil`, `vive_con`, `dependen`, `curp`, `num_seguro_social`, `num_cartilla_mili`, `num_pasaporte`, `AFORE`, `estado_salud`, `enfermedades_cronicas`, `deportes`, `clubs`, `pasatiempo`, `meta_vida`) VALUES
(6, 'admin', 'Alejandro', 'Galarza', 'Tah', 'example@example.com', 2147483647, '79a 77510', 'dsadsadsa', '2001-06-24', 0, 0, 'QuintanaRoo', 'Mis padres', 'Nadie', '00000', '00000', '00000', '0000', '00000', 'Bueno', 'Ninguna', 'ninguno', 'ninguno', 'ninguno', 'ninguna'),
(7, 'admin', 'Alejandro', 'Galarza', 'Tah', 'example@example.com', 2147483647, '79a 77510', 'dsadsadsa', '2001-06-24', 0, 0, 'QuintanaRoo', 'Mis padres', 'Nadie', '00000', '00000', '00000', '0000', '00000', 'Bueno', 'Ninguna', 'ninguno', 'ninguno', 'ninguno', 'ninguna'),
(8, 'admin', 'Alejandro', 'Galarza', 'Tah', 'example@example.com', 2147483647, '79a 77510', 'dsadsadsa', '2001-06-24', 0, 0, 'QuintanaRoo', 'Mis padres', 'Nadie', '00000', '00000', '00000', '0000', '00000', 'Bueno', 'Ninguna', 'ninguno', 'ninguno', 'ninguno', 'ninguna'),
(9, 'admin', 'Alejandro', 'Galarza', 'Tah', 'example@example.com', 2147483647, '79a 77510', 'dsadsadsa', '2001-06-24', 0, 0, 'QuintanaRoo', 'Mis padres', 'Nadie', '00000', '00000', '00000', '0000', '00000', 'Bueno', 'Ninguna', 'ninguno', 'ninguno', 'ninguno', 'ninguna'),
(10, 'admin', 'Alejandro', 'Galarza', 'Tah', 'example@example.com', 2147483647, '79a 77510', 'dsadsadsa', '2001-06-24', 0, 0, 'QuintanaRoo', 'Mis padres', 'Nadie', '00000', '00000', '00000', '0000', '00000', 'Bueno', 'Ninguna', 'ninguno', 'ninguno', 'ninguno', 'ninguna'),
(11, 'admin', 'Alejandro', 'Galarza', 'Tah', 'example@example.com', 2147483647, '79a 77510', 'dsadsadsa', '2001-06-24', 0, 0, 'QuintanaRoo', 'Mis padres', 'Nadie', '00000', '00000', '00000', '0000', '00000', 'Bueno', 'Ninguna', 'ninguno', 'ninguno', 'ninguno', 'ninguna'),
(12, 'userLeng', 'dwdad', 'dwda', 'dadawdwa', 'dwdwa', 0, 'dawdwadwad', 'wadwadwad', '2021-08-05', 232, 21321300, 'dasdsd', '323232', '231232', 'fdsfd', '31233423432', '32423432', '3243243', 'dfdsf23312432', '432432', '4343243', '243243243432', '4324324', '324324', '32423'),
(13, 'pas', 'Alejandro', 'dsdfsdf', 'Galarza', 'dsfdsfsd', 0, '79a 77510', 'dfdsfdsf', '2021-08-06', 232, 2323, 'QuintanaRoo', 'fdsfsdf', 'sdfdsfs', '342343', '4343242', '343242', '34234', '324234234', '234234', 'dfffs', 'sdfdsfd', 'dsfdsfds', 'fsdfdsf', 'dfdsfds');

-- --------------------------------------------------------

--
-- Table structure for table `educacion_usuarios`
--

CREATE TABLE `educacion_usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `nombre_institucion` varchar(25) NOT NULL,
  `descripcion_estudio` varchar(100) NOT NULL,
  `tiempo_cursado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `educacion_usuarios`
--

INSERT INTO `educacion_usuarios` (`id`, `usuario`, `nombre_institucion`, `descripcion_estudio`, `tiempo_cursado`) VALUES
(5, 'admin', 'Colegio de pruebas', 'EDUCACION PRIMARIA ', '6 años'),
(6, 'admin', 'Colegio de pruebas avanza', 'EDUCACION Secundaria', '3 años'),
(7, 'admin', 'Colegio de preparatoria', 'EDUCACION media superior', '3 años'),
(8, 'admin', 'Universidad de Cancun', 'EDUCACION superior', '4 años'),
(9, 'testregister', 'Universidad de Cancun', 'EDUCACION superior', '4 años');

-- --------------------------------------------------------

--
-- Table structure for table `experiencia_usuarios`
--

CREATE TABLE `experiencia_usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `empresa_experiencia` varchar(25) NOT NULL,
  `puesto_trabajo` varchar(25) NOT NULL,
  `descripcion_experiencia` varchar(150) NOT NULL,
  `Tiempo_dedicado` varchar(25) NOT NULL,
  `Contacto_empresa` varchar(50) NOT NULL,
  `motivo_separacion` varchar(50) NOT NULL,
  `nombre_jefe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `experiencia_usuarios`
--

INSERT INTO `experiencia_usuarios` (`id`, `usuario`, `empresa_experiencia`, `puesto_trabajo`, `descripcion_experiencia`, `Tiempo_dedicado`, `Contacto_empresa`, `motivo_separacion`, `nombre_jefe`) VALUES
(2, 'admin', '', '', '', '', '', '', ''),
(3, 'admin', 'TELMEX', 'TECNICO', 'REALIZABA SERVICIO AL CLIENTE', '5 AÑOS', '88884838', 'Buscar mejores oportunidades', 'JEFE'),
(4, 'testregister', 'sfsdfds', 'fds', 'fdsfds', 'fsdfdsfds', 'dsfdsf', 'fdsfdsf', 'dfsd');

-- --------------------------------------------------------

--
-- Table structure for table `habilidades_usuarios`
--

CREATE TABLE `habilidades_usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `nombre_habilidad` varchar(35) NOT NULL,
  `descripcion_habilidad` varchar(250) NOT NULL,
  `nivel_dominio` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `habilidades_usuarios`
--

INSERT INTO `habilidades_usuarios` (`id`, `usuario`, `nombre_habilidad`, `descripcion_habilidad`, `nivel_dominio`) VALUES
(1, 'admin', 'test', 'hab', 'med'),
(2, 'testregister', 'S', 'S', 'S'),
(3, 'testregister', 'S', 'S', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `idiomas_usuarios`
--

CREATE TABLE `idiomas_usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) CHARACTER SET utf8 NOT NULL,
  `idioma` varchar(50) NOT NULL,
  `nivel` varchar(50) NOT NULL,
  `certificado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `idiomas_usuarios`
--

INSERT INTO `idiomas_usuarios` (`id`, `usuario`, `idioma`, `nivel`, `certificado`) VALUES
(2, 'test34', 'asd', '23', '1'),
(3, 'test34', 'frances', '43', '1'),
(4, 'fa', 'ingles', 'basico', 'ninguno'),
(5, 'dsafgg', 'test', '2', '3'),
(6, 'dsafgg', 'teste', '2', '3'),
(7, '23ee', 'test3', '23', 'ds'),
(8, '23ee', 'test3', '23', 'ds'),
(9, 'S', '34', 'fdfdsf', '23213'),
(10, 'asdd', 'fdf', 'fds', 'dfs'),
(11, 'asdd', 'fdf', 'fds', 'dfs'),
(12, 'asdd', 'fdf', 'fds', 'dfs'),
(13, 'asdd', 'fdf', 'fds', 'dfs'),
(14, 'asdd', 'ffffefe', 'fds', 'dfs'),
(15, 'asdd', 'eefdfsd', 'fds', 'dfs'),
(16, 'asdd', 'eefdfsd', 'fds', 'dfs'),
(17, 'asdd', 'eefdfsdsadad', 'fds', 'dfs'),
(18, 'dasdsadas', 'fff', 'ww', 'ww'),
(19, 'fdwda', 'test', '2', '323'),
(20, 'fdwda', 'teste', '2', '323'),
(21, 'fdwda', 'teste', '2', '323'),
(22, 'fdwda', 'testesad', '2', '323'),
(23, 'fdwda', 'testesad', '2', '323'),
(24, 'final', 'test', '34', '32324'),
(25, 'final', 'testfd', '34', '32324'),
(26, 'final', 'ingles', 'intermedio', 'ninguno'),
(27, 'testregister', 'ASD', '123', 'TEST'),
(28, 'testregister', 'ASD', '123', 'TEST');

-- --------------------------------------------------------

--
-- Table structure for table `parentescos_usuario`
--

CREATE TABLE `parentescos_usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) CHARACTER SET utf8 NOT NULL,
  `nombres` varchar(44) NOT NULL,
  `apellido_m` varchar(44) NOT NULL,
  `apellido_p` varchar(44) NOT NULL,
  `direccion` varchar(55) NOT NULL,
  `telefono` int(12) NOT NULL,
  `tipo_parentesco` varchar(14) NOT NULL,
  `referencia` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parentescos_usuario`
--

INSERT INTO `parentescos_usuario` (`id`, `usuario`, `nombres`, `apellido_m`, `apellido_p`, `direccion`, `telefono`, `tipo_parentesco`, `referencia`) VALUES
(1, 'admin', '', '', '', '', 0, '', 0),
(2, 'admin', 'parentesco', 'parentesco1', 'parentesco2', '79a 77510', 2147483647, 'Padre', 0),
(3, 'testregister', 'Alejandro', 'Galarza', 'parentesco2', '79a 77510', 2147483647, 'Padre', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rangos`
--

CREATE TABLE `rangos` (
  `id` int(11) NOT NULL,
  `rango` varchar(25) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rangos`
--

INSERT INTO `rangos` (`id`, `rango`, `status`, `fecha`) VALUES
(1, 'usuario', 1, '2021-08-03 23:22:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acceso_usuarios`
--
ALTER TABLE `acceso_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_repetidos` (`user`),
  ADD KEY `tipo_cuenta` (`tipo_cuenta`);

--
-- Indexes for table `datos_usuarios`
--
ALTER TABLE `datos_usuarios`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `usuario_acceso` (`usuario_acceso`);

--
-- Indexes for table `educacion_usuarios`
--
ALTER TABLE `educacion_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`);

--
-- Indexes for table `experiencia_usuarios`
--
ALTER TABLE `experiencia_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`);

--
-- Indexes for table `habilidades_usuarios`
--
ALTER TABLE `habilidades_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`);

--
-- Indexes for table `idiomas_usuarios`
--
ALTER TABLE `idiomas_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`);

--
-- Indexes for table `parentescos_usuario`
--
ALTER TABLE `parentescos_usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parentescos_usuario_ibfk_1` (`usuario`);

--
-- Indexes for table `rangos`
--
ALTER TABLE `rangos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acceso_usuarios`
--
ALTER TABLE `acceso_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `datos_usuarios`
--
ALTER TABLE `datos_usuarios`
  MODIFY `Id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `educacion_usuarios`
--
ALTER TABLE `educacion_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `experiencia_usuarios`
--
ALTER TABLE `experiencia_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `habilidades_usuarios`
--
ALTER TABLE `habilidades_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `idiomas_usuarios`
--
ALTER TABLE `idiomas_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `parentescos_usuario`
--
ALTER TABLE `parentescos_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rangos`
--
ALTER TABLE `rangos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acceso_usuarios`
--
ALTER TABLE `acceso_usuarios`
  ADD CONSTRAINT `acceso_usuarios_ibfk_1` FOREIGN KEY (`tipo_cuenta`) REFERENCES `rangos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `datos_usuarios`
--
ALTER TABLE `datos_usuarios`
  ADD CONSTRAINT `datos_usuarios_ibfk_1` FOREIGN KEY (`usuario_acceso`) REFERENCES `acceso_usuarios` (`user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `educacion_usuarios`
--
ALTER TABLE `educacion_usuarios`
  ADD CONSTRAINT `educacion_usuarios_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `acceso_usuarios` (`user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `experiencia_usuarios`
--
ALTER TABLE `experiencia_usuarios`
  ADD CONSTRAINT `experiencia_usuarios_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `acceso_usuarios` (`user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `habilidades_usuarios`
--
ALTER TABLE `habilidades_usuarios`
  ADD CONSTRAINT `habilidades_usuarios_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `acceso_usuarios` (`user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `idiomas_usuarios`
--
ALTER TABLE `idiomas_usuarios`
  ADD CONSTRAINT `idiomas_usuarios_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `acceso_usuarios` (`user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parentescos_usuario`
--
ALTER TABLE `parentescos_usuario`
  ADD CONSTRAINT `parentescos_usuario_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `acceso_usuarios` (`user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
