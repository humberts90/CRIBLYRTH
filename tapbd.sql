-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2014 a las 05:08:28
-- Versión del servidor: 5.5.36
-- Versión de PHP: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tapbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activerecordlog`
--

CREATE TABLE IF NOT EXISTS `activerecordlog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  `action` varchar(20) DEFAULT NULL,
  `model` varchar(45) DEFAULT NULL,
  `idModel` int(10) unsigned DEFAULT NULL,
  `field` varchar(45) DEFAULT NULL,
  `creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userid` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `activerecordlog`
--

INSERT INTO `activerecordlog` (`id`, `description`, `action`, `model`, `idModel`, `field`, `creationdate`, `userid`) VALUES
(1, 'User admin created M05Usuario[30].', 'CREATE', 'M05Usuario', 30, '', '2014-07-09 18:21:07', 'admin'),
(2, 'User admin created T08UsuarioHasRol[46].', 'CREATE', 'T08UsuarioHasRol', 46, '', '2014-07-09 18:21:07', 'admin'),
(3, 'User admin created M05Usuario[31].', 'CREATE', 'M05Usuario', 31, '', '2014-07-09 18:25:00', 'admin'),
(4, 'User admin created T08UsuarioHasRol[47].', 'CREATE', 'T08UsuarioHasRol', 47, '', '2014-07-09 18:25:00', 'admin'),
(5, 'User admin deleted T08Usuario_has_rol[2].', 'DELETE', 'T08Usuario_has_rol', 2, '', '2014-07-14 17:17:18', 'admin'),
(6, 'User admin changed Clave for M05Usuario[2].', 'CHANGE', 'M05Usuario', 2, 'Clave', '2014-07-14 17:17:18', 'admin'),
(7, 'User admin changed session for M05Usuario[2].', 'CHANGE', 'M05Usuario', 2, 'session', '2014-07-14 17:17:18', 'admin'),
(8, 'User admin created T08UsuarioHasRol[48].', 'CREATE', 'T08UsuarioHasRol', 48, '', '2014-07-14 17:17:18', 'admin'),
(9, 'User admin deleted T08UsuarioHasRol[15].', 'DELETE', 'T08UsuarioHasRol', 15, '', '2014-07-17 14:28:51', 'admin'),
(10, 'User admin deleted M05Usuario[15].', 'DELETE', 'M05Usuario', 15, '', '2014-07-17 14:28:51', 'admin'),
(11, 'User admin created M05Usuario[32].', 'CREATE', 'M05Usuario', 32, '', '2014-07-17 14:29:59', 'admin'),
(12, 'User admin created T08UsuarioHasRol[49].', 'CREATE', 'T08UsuarioHasRol', 49, '', '2014-07-17 14:29:59', 'admin'),
(13, 'User dahyana.nimo created T01TesisHasUsuario[4].', 'CREATE', 'T01TesisHasUsuario', 4, '', '2014-07-19 19:50:08', 'dahyana.nimo'),
(14, 'User admin created T02PasantiaHasUsuario[5].', 'CREATE', 'T02PasantiaHasUsuario', 5, '', '2014-07-19 21:26:37', 'admin'),
(15, 'User admin created T02PasantiaHasUsuario[6].', 'CREATE', 'T02PasantiaHasUsuario', 6, '', '2014-07-19 21:29:09', 'admin'),
(16, 'User admin created T02PasantiaHasUsuario[7].', 'CREATE', 'T02PasantiaHasUsuario', 7, '', '2014-07-19 21:30:32', 'admin'),
(17, 'User admin created T02PasantiaHasUsuario[8].', 'CREATE', 'T02PasantiaHasUsuario', 8, '', '2014-07-19 21:33:44', 'admin'),
(18, 'User admin created T02PasantiaHasUsuario[9].', 'CREATE', 'T02PasantiaHasUsuario', 9, '', '2014-07-19 21:47:08', 'admin'),
(19, 'User admin created T02PasantiaHasUsuario[10].', 'CREATE', 'T02PasantiaHasUsuario', 10, '', '2014-07-19 21:48:38', 'admin'),
(20, 'User admin created P01Rol[7].', 'CREATE', 'P01Rol', 7, '', '2014-07-19 22:48:36', 'admin'),
(21, 'User admin created M05Usuario[33].', 'CREATE', 'M05Usuario', 33, '', '2014-07-19 22:51:18', 'admin'),
(22, 'User admin created T08UsuarioHasRol[50].', 'CREATE', 'T08UsuarioHasRol', 50, '', '2014-07-19 22:51:18', 'admin'),
(23, 'User pedro.perez created T02PasantiaHasUsuario[11].', 'CREATE', 'T02PasantiaHasUsuario', 11, '', '2014-07-19 23:13:12', 'pedro.perez'),
(24, 'User pedro.perez created T02PasantiaHasUsuario[12].', 'CREATE', 'T02PasantiaHasUsuario', 12, '', '2014-07-19 23:14:26', 'pedro.perez'),
(25, 'Usuariopedro.perez Creado T02PasantiaHasUsuario[13].', 'CREADO', 'T02PasantiaHasUsuario', 13, '', '2014-07-19 23:54:22', 'pedro.perez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_asignacion`
--

CREATE TABLE IF NOT EXISTS `auth_asignacion` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auth_asignacion`
--

INSERT INTO `auth_asignacion` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('Administrador', 'admin', NULL, 'N;'),
('Administrador', 'samuel.useche', NULL, 'N;'),
('Alumno ', 'CR7', NULL, 'N;'),
('Alumno', 'ericka.donoso', NULL, 'N;'),
('Alumno', 'erickad', NULL, 'N;'),
('Alumno', 'estudiante', NULL, 'N;'),
('Alumno', 'humberts90', NULL, 'N;'),
('Alumno', 'nuevo', NULL, 'N;'),
('Alumno', 'paco.paquirri', NULL, 'N;'),
('Comisión del Tap', 'armando.carrero', NULL, 'N;'),
('Empresa', 'pedro.perez', NULL, 'N;'),
('Jefe del Departamento', 'froilan.guerrero', NULL, 'N;'),
('Profesor', 'dahyana.nimo', NULL, 'N;'),
('Secretaria', 'dahyana.nimo', NULL, 'N;'),
('Secretaria', 'lissett.carrero', NULL, 'N;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_items`
--

CREATE TABLE IF NOT EXISTS `auth_items` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auth_items`
--

INSERT INTO `auth_items` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('...', 0, '...Esta operacion para personas deSecretaria', NULL, 'N;'),
('...5', 1, '... Secretaria', NULL, 'N;'),
('acceso al sistema por parte de las empresas', 0, 'acceso al sistema por parte de las empresasEsta operacion para personas deEmpresa', NULL, 'N;'),
('acceso al sistema por parte de las empresas7', 1, 'acceso al sistema por parte de las empresas Empresa', NULL, 'N;'),
('Administrador', 2, 'Todo Poderoso Administrador', NULL, 'N;'),
('Alumno ', 2, 'Alumno normal de la carrera Alumno ', NULL, 'N;'),
('Alumno normal de la carrera', 0, 'Alumno normal de la carreraEsta operacion para personas deAlumno ', NULL, 'N;'),
('Alumno normal de la carrera9', 1, 'Alumno normal de la carrera Alumno ', NULL, 'N;'),
('Comisión del Tap', 2, 'comision... Comisión del Tap', NULL, 'N;'),
('comision...', 0, 'comision...Esta operacion para personas deComisión del Tap', NULL, 'N;'),
('comision...6', 1, 'comision... Comisión del Tap', NULL, 'N;'),
('Empresa', 2, 'acceso al sistema por parte de las empresas Empresa', NULL, 'N;'),
('Jefe', 0, 'JefeEsta operacion para personas deJefe del Departamento', NULL, 'N;'),
('Jefe del Departamento', 2, 'Jefe Jefe del Departamento', NULL, 'N;'),
('Jefe11', 1, 'Jefe Jefe del Departamento', NULL, 'N;'),
('Profesor', 2, 'Profesor... Profesor', NULL, 'N;'),
('Profesor...', 0, 'Profesor...Esta operacion para personas deProfesor', NULL, 'N;'),
('Profesor...12', 1, 'Profesor... Profesor', NULL, 'N;'),
('Secretaria', 2, '... Secretaria', NULL, 'N;'),
('Todo Poderoso', 0, 'Todo PoderosoEsta operacion para personas deAdministrador', NULL, 'N;'),
('Todo Poderoso10', 1, 'Todo Poderoso Administrador', NULL, 'N;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_relacion`
--

CREATE TABLE IF NOT EXISTS `auth_relacion` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auth_relacion`
--

INSERT INTO `auth_relacion` (`parent`, `child`) VALUES
('...5', '...'),
('Secretaria', '...5'),
('acceso al sistema por parte de las empresas7', 'acceso al sistema por parte de las empresas'),
('Empresa', 'acceso al sistema por parte de las empresas7'),
('Alumno normal de la carrera9', 'Alumno normal de la carrera'),
('Alumno ', 'Alumno normal de la carrera9'),
('comision...6', 'comision...'),
('Comisión del Tap', 'comision...6'),
('Jefe11', 'Jefe'),
('Jefe del Departamento', 'Jefe11'),
('Profesor...12', 'Profesor...'),
('Profesor', 'Profesor...12'),
('Todo Poderoso10', 'Todo Poderoso'),
('Administrador', 'Todo Poderoso10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m01_profesor`
--

CREATE TABLE IF NOT EXISTS `m01_profesor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Cedula` varchar(12) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Correo_UNET` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Cedula_UNIQUE` (`Cedula`),
  UNIQUE KEY `Correo_UNET_UNIQUE` (`Correo_UNET`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `m01_profesor`
--

INSERT INTO `m01_profesor` (`id`, `Cedula`, `Apellido`, `Nombre`, `Correo_UNET`) VALUES
(2, '0000', 'Ochoa', 'Luis ', 'dieduk89'),
(3, '00025', 'Nimo', 'Dahyana ', '----'),
(4, '000144', 'Gil', 'Angel ', '---');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m02_cronograma`
--

CREATE TABLE IF NOT EXISTS `m02_cronograma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `m04_pasantia_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_m02_cronograma_m04_pasantia1_idx` (`m04_pasantia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `m02_cronograma`
--

INSERT INTO `m02_cronograma` (`id`, `nombre`, `descripcion`, `m04_pasantia_id`) VALUES
(1, 'Prueba 1', 'Primer cronograma', 1),
(2, 'Prueba 2', 'Segundo Cronograma', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m03_tesis`
--

CREATE TABLE IF NOT EXISTS `m03_tesis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(45) DEFAULT NULL,
  `Carta_Tutor` varchar(255) DEFAULT NULL,
  `Introduccion` longtext,
  `Planteamiento_Problema` text,
  `Objetivo_General` text,
  `Objetivo_especifico` text,
  `Justificacion_Importancia` text,
  `Alcance_Delimitaciones` text,
  `Antecedentes` text,
  `Bases_Teoricas` text,
  `Bases_Legales` text,
  `Definicion_Terminos` text,
  `Enfoque_Investigacion` text,
  `Tipo_Nivel_Invesstigacion` text,
  `Diseno_Investigacion` text,
  `Poblacion_Muestra` text,
  `Tecnicas_Recoleccion_Datos` text,
  `Metodologias` text,
  `Referencias` text,
  `Fecha_Inscripcion` date DEFAULT NULL,
  `Fecha_Aprobación` date DEFAULT NULL,
  `Fecha_Defensa` date DEFAULT NULL,
  `P03_id` int(11) NOT NULL,
  `M06_id` int(11) DEFAULT NULL,
  `Lapso_Academico_defensa` varchar(6) NOT NULL,
  `fecha_val` date DEFAULT NULL,
  `vacantes` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_m03_tesis_p03_status1_idx` (`P03_id`),
  KEY `fk_m03_tesis_m06_empresa1_idx` (`M06_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `m03_tesis`
--

INSERT INTO `m03_tesis` (`id`, `Titulo`, `Carta_Tutor`, `Introduccion`, `Planteamiento_Problema`, `Objetivo_General`, `Objetivo_especifico`, `Justificacion_Importancia`, `Alcance_Delimitaciones`, `Antecedentes`, `Bases_Teoricas`, `Bases_Legales`, `Definicion_Terminos`, `Enfoque_Investigacion`, `Tipo_Nivel_Invesstigacion`, `Diseno_Investigacion`, `Poblacion_Muestra`, `Tecnicas_Recoleccion_Datos`, `Metodologias`, `Referencias`, `Fecha_Inscripcion`, `Fecha_Aprobación`, `Fecha_Defensa`, `P03_id`, `M06_id`, `Lapso_Academico_defensa`, `fecha_val`, `vacantes`) VALUES
(4, 'Aplicacion de una tesis de prueba para el sis', NULL, ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum blandit diam vitae ipsum bibendum volutpat. Sed blandit rhoncus arcu, at lobortis orci imperdiet at. Vestibulum eu neque hendrerit magna euismod suscipit. Fusce placerat fringilla felis, ac ultrices dui vehicula ut. Suspendisse potenti. Nulla vitae ante vitae nisl pharetra dignissim. Aliquam posuere dapibus blandit.', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum blandit diam vitae ipsum bibendum volutpat. Sed blandit rhoncus arcu, at lobortis orci imperdiet at. Vestibulum eu neque hendrerit magna euismod suscipit. Fusce placerat fringilla felis, ac ultrices dui vehicula ut. Suspendisse potenti. Nulla vitae ante vitae nisl pharetra dignissim. Aliquam posuere dapibus blandit.', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum blandit diam vitae ipsum bibendum volutpat. Sed blandit rhoncus arcu, at lobortis orci imperdiet at. Vestibulum eu neque hendrerit magna euismod suscipit. Fusce placerat fringilla felis, ac ultrices dui vehicula ut. Suspendisse potenti. Nulla vitae ante vitae nisl pharetra dignissim. Aliquam posuere dapibus blandit.', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum blandit diam vitae ipsum bibendum volutpat. Sed blandit rhoncus arcu, at lobortis orci imperdiet at. Vestibulum eu neque hendrerit magna euismod suscipit. Fusce placerat fringilla felis, ac ultrices dui vehicula ut. Suspendisse potenti. Nulla vitae ante vitae nisl pharetra dignissim. Aliquam posuere dapibus blandit.', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum blandit diam vitae ipsum bibendum volutpat. Sed blandit rhoncus arcu, at lobortis orci imperdiet at. Vestibulum eu neque hendrerit magna euismod suscipit. Fusce placerat fringilla felis, ac ultrices dui vehicula ut. Suspendisse potenti. Nulla vitae ante vitae nisl pharetra dignissim. Aliquam posuere dapibus blandit.', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum blandit diam vitae ipsum bibendum volutpat. Sed blandit rhoncus arcu, at lobortis orci imperdiet at. Vestibulum eu neque hendrerit magna euismod suscipit. Fusce placerat fringilla felis, ac ultrices dui vehicula ut. Suspendisse potenti. Nulla vitae ante vitae nisl pharetra dignissim. Aliquam posuere dapibus blandit.', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum blandit diam vitae ipsum bibendum volutpat. Sed blandit rhoncus arcu, at lobortis orci imperdiet at. Vestibulum eu neque hendrerit magna euismod suscipit. Fusce placerat fringilla felis, ac ultrices dui vehicula ut. Suspendisse potenti. Nulla vitae ante vitae nisl pharetra dignissim. Aliquam posuere dapibus blandit.', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum blandit diam vitae ipsum bibendum volutpat. Sed blandit rhoncus arcu, at lobortis orci imperdiet at. Vestibulum eu neque hendrerit magna euismod suscipit. Fusce placerat fringilla felis, ac ultrices dui vehicula ut. Suspendisse potenti. Nulla vitae ante vitae nisl pharetra dignissim. Aliquam posuere dapibus blandit.', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum blandit diam vitae ipsum bibendum volutpat. Sed blandit rhoncus arcu, at lobortis orci imperdiet at. Vestibulum eu neque hendrerit magna euismod suscipit. Fusce placerat fringilla felis, ac ultrices dui vehicula ut. Suspendisse potenti. Nulla vitae ante vitae nisl pharetra dignissim. Aliquam posuere dapibus blandit.', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum blandit diam vitae ipsum bibendum volutpat. Sed blandit rhoncus arcu, at lobortis orci imperdiet at. Vestibulum eu neque hendrerit magna euismod suscipit. Fusce placerat fringilla felis, ac ultrices dui vehicula ut. Suspendisse potenti. Nulla vitae ante vitae nisl pharetra dignissim. Aliquam posuere dapibus blandit.', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum blandit diam vitae ipsum bibendum volutpat. Sed blandit rhoncus arcu, at lobortis orci imperdiet at. Vestibulum eu neque hendrerit magna euismod suscipit. Fusce placerat fringilla felis, ac ultrices dui vehicula ut. Suspendisse potenti. Nulla vitae ante vitae nisl pharetra dignissim. Aliquam posuere dapibus blandit.', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum blandit diam vitae ipsum bibendum volutpat. Sed blandit rhoncus arcu, at lobortis orci imperdiet at. Vestibulum eu neque hendrerit magna euismod suscipit. Fusce placerat fringilla felis, ac ultrices dui vehicula ut. Suspendisse potenti. Nulla vitae ante vitae nisl pharetra dignissim. Aliquam posuere dapibus blandit.', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum blandit diam vitae ipsum bibendum volutpat. Sed blandit rhoncus arcu, at lobortis orci imperdiet at. Vestibulum eu neque hendrerit magna euismod suscipit. Fusce placerat fringilla felis, ac ultrices dui vehicula ut. Suspendisse potenti. Nulla vitae ante vitae nisl pharetra dignissim. Aliquam posuere dapibus blandit.', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum blandit diam vitae ipsum bibendum volutpat. Sed blandit rhoncus arcu, at lobortis orci imperdiet at. Vestibulum eu neque hendrerit magna euismod suscipit. Fusce placerat fringilla felis, ac ultrices dui vehicula ut. Suspendisse potenti. Nulla vitae ante vitae nisl pharetra dignissim. Aliquam posuere dapibus blandit.', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum blandit diam vitae ipsum bibendum volutpat. Sed blandit rhoncus arcu, at lobortis orci imperdiet at. Vestibulum eu neque hendrerit magna euismod suscipit. Fusce placerat fringilla felis, ac ultrices dui vehicula ut. Suspendisse potenti. Nulla vitae ante vitae nisl pharetra dignissim. Aliquam posuere dapibus blandit.', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent ', NULL, '2014-02-17', '2014-02-18', '2014-09-25', 2, 1, '2013-1', NULL, NULL),
(5, 'ejemplo', NULL, '<p>xxx</p>', '<p>yyy</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>zzz</p>', NULL, NULL, NULL, 5, NULL, '2013-1', '2014-07-31', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m04_pasantia`
--

CREATE TABLE IF NOT EXISTS `m04_pasantia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(255) DEFAULT NULL,
  `Planteamiento_Problema` longtext,
  `Descripcion_Trabajo` longtext,
  `Objetivo_General` longtext,
  `Objetivo_Especifico` longtext,
  `Antecedentes` longtext,
  `Metodologia` longtext,
  `Productos_Desarrollo` longtext,
  `Fecha_Inscripcion` date DEFAULT NULL,
  `Fecha_Defensa` date DEFAULT NULL,
  `Fecha_Aprobacion` date DEFAULT NULL,
  `M06_id` int(11) DEFAULT NULL,
  `P03_id` int(11) NOT NULL,
  `Lapso_Academico_defensa` varchar(6) DEFAULT NULL,
  `fecha_val` date DEFAULT NULL,
  `vacantes` int(11) DEFAULT NULL,
  `pago` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Pasantia_empresa1_idx` (`M06_id`),
  KEY `fk_m04_pasantia_p03_status1_idx` (`P03_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `m04_pasantia`
--

INSERT INTO `m04_pasantia` (`id`, `Titulo`, `Planteamiento_Problema`, `Descripcion_Trabajo`, `Objetivo_General`, `Objetivo_Especifico`, `Antecedentes`, `Metodologia`, `Productos_Desarrollo`, `Fecha_Inscripcion`, `Fecha_Defensa`, `Fecha_Aprobacion`, `M06_id`, `P03_id`, `Lapso_Academico_defensa`, `fecha_val`, `vacantes`, `pago`) VALUES
(1, 'Aplicacion de una pasantias de prueba para el sistema del TAP', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum blandit diam vitae ipsum bibendum volutpat. Sed blandit rhoncus arcu, at lobortis orci imperdiet at. Vestibulum eu neque hendrerit magna euismod suscipit. Fusce placerat fringilla felis, ac ultrices dui vehicula ut. Suspendisse potenti. Nulla vitae ante vitae nisl pharetra dignissim. Aliquam posuere dapibus blandit. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum blandit diam vitae ipsum bibendum volutpat. Sed blandit rhoncus arcu, at lobortis orci imperdiet at. Vestibulum eu neque hendrerit magna euismod suscipit. Fusce placerat fringilla felis, ac ultrices dui vehicula ut. Suspendisse potenti. Nulla vitae ante vitae nisl pharetra dignissim. Aliquam posuere dapibus blandit. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum blandit diam vitae ipsum bibendum volutpat. Sed blandit rhoncus arcu, at lobortis orci imperdiet at. Vestibulum eu neque hendrerit magna euismod suscipit. Fusce placerat fringilla felis, ac ultrices dui vehicula ut. Suspendisse potenti. Nulla vitae ante vitae nisl pharetra dignissim. Aliquam posuere dapibus blandit. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum blandit diam vitae ipsum bibendum volutpat. Sed blandit rhoncus arcu, at lobortis orci imperdiet at. Vestibulum eu neque hendrerit magna euismod suscipit. Fusce placerat fringilla felis, ac ultrices dui vehicula ut. Suspendisse potenti. Nulla vitae ante vitae nisl pharetra dignissim. Aliquam posuere dapibus blandit. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum blandit diam vitae ipsum bibendum volutpat. Sed blandit rhoncus arcu, at lobortis orci imperdiet at. Vestibulum eu neque hendrerit magna euismod suscipit. Fusce placerat fringilla felis, ac ultrices dui vehicula ut. Suspendisse potenti. Nulla vitae ante vitae nisl pharetra dignissim. Aliquam posuere dapibus blandit. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum blandit diam vitae ipsum bibendum volutpat. Sed blandit rhoncus arcu, at lobortis orci imperdiet at. Vestibulum eu neque hendrerit magna euismod suscipit. Fusce placerat fringilla felis, ac ultrices dui vehicula ut. Suspendisse potenti. Nulla vitae ante vitae nisl pharetra dignissim. Aliquam posuere dapibus blandit. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum blandit diam vitae ipsum bibendum volutpat. Sed blandit rhoncus arcu, at lobortis orci imperdiet at. Vestibulum eu neque hendrerit magna euismod suscipit. Fusce placerat fringilla felis, ac ultrices dui vehicula ut. Suspendisse potenti. Nulla vitae ante vitae nisl pharetra dignissim. Aliquam posuere dapibus blandit. ', '2014-02-17', '2014-11-20', '2014-02-22', 1, 3, '2013-1', NULL, NULL, NULL),
(2, 'prueba', NULL, '<p>xx</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 5, NULL, '2014-07-30', 3, 2550),
(3, 'prueba', NULL, '<p>xx</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 5, NULL, '2014-07-30', 3, 2550),
(4, 'probando 123', NULL, '<p>xxx</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 5, NULL, '2014-07-31', 2, 2500),
(5, 'probando 123', NULL, '<p>xxx</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 5, NULL, '2014-07-31', 2, 2500),
(6, 'xsss', NULL, '<p>as</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 5, NULL, '2014-07-30', 8, 4000),
(7, 'reo', NULL, '<p>x</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 5, NULL, '2014-07-29', 8, 4000),
(8, 'una', NULL, '<p>x</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 5, NULL, '2014-07-22', 8, NULL),
(9, 'dos', NULL, '<p>x</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 5, NULL, '2014-07-25', 4, 9500),
(10, 'Carpintero espacial', NULL, '<p>jksdfhskjfhdkjshkjhkjhkj</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 5, NULL, '2014-11-21', 10, 1500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m05_usuario`
--

CREATE TABLE IF NOT EXISTS `m05_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Cedula` varchar(12) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Usuario` varchar(45) DEFAULT NULL,
  `Clave` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Correo_Electronico` varchar(255) NOT NULL,
  `Direccion` text,
  `Unidades_Credito_Aprobadas` int(11) DEFAULT NULL,
  `Servicio_Comunitario` tinyint(1) DEFAULT NULL,
  `Ultimo_Lapso_Academico` varchar(6) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Correo_Electronico` (`Correo_Electronico`),
  UNIQUE KEY `Correo_Electronico_2` (`Correo_Electronico`),
  UNIQUE KEY `Correo_Electronico_3` (`Correo_Electronico`),
  UNIQUE KEY `Usuario_UNIQUE` (`Usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `m05_usuario`
--

INSERT INTO `m05_usuario` (`id`, `Cedula`, `Apellido`, `Nombre`, `Usuario`, `Clave`, `Telefono`, `Correo_Electronico`, `Direccion`, `Unidades_Credito_Aprobadas`, `Servicio_Comunitario`, `Ultimo_Lapso_Academico`, `foto`, `session`) VALUES
(2, '82294818', 'Soler', 'Humberto', 'humberts90', 'b78232c01cd305078212569b21b1c51f95211f86', '02763430816', 'humberts90', 'calle xxx', NULL, NULL, '', '', '53c4109e95c7e3.28712567'),
(5, '17677687', 'useche', 'Samuel', 'samuel.useche', '9330f907bab4c871a96fc7b75e2f7925a28f31d0', '041622', 'maverick71036@gmail.com', 'S/c', NULL, NULL, '', '', '52de7b6ef35db1.57725116'),
(11, '666', 'Admin', 'Admin', 'admin', 'ef372c7247ddffff2f572b2375e434136f139234', '666', 'Admin@admin.com', 'sc', NULL, NULL, '', '', '52d5bd4de12f50.09275149'),
(13, '00025', 'Nimo', 'Dahyana', 'dahyana.nimo', 'cafc50bc3c245b9e0fb0d9d831d13dcfe63abf5d', '5555', '----', 'S/C', NULL, NULL, '', '', '539f5d4f40dd94.64704868'),
(16, '125', 'Ronaldo', 'Cristiano', 'CR7', '4b396f56ae7d80fb96aef4e671b6763289dac7a3', '55fd', 'dfd', 'dff', NULL, NULL, '', '', '537d02556433d9.68445810'),
(17, '112523', 'Carrero', 'Lissett', 'lissett.carrero', '96474d76dd3475285d58b6592f45005b9ee42a17', '5555', 'fdsafsdf', '5455', NULL, NULL, '', '', '53838ccfe37b24.70798135'),
(18, '123456', 'Paco', 'Paquirri', 'paco.paquirri', '5539703c55028aefba17c1c285290279fdd0627d', '12345', 'samuel.useche@unet.edu.ve', 'jrfghjnf', NULL, NULL, '', '', '538f6474a200e5.15184278'),
(22, '233232', 'carrero', 'armando', 'armando.carrero', '521ef1a214e52517db993dcf7558c89cf22cb57c', '23232', 'sadsdsd|@ewe', 'xxcxcx', NULL, NULL, '', '', '53b1630a619980.59791306'),
(29, '11456698', 'llki', 'kkkjnn', 'nuevo', 'bb2e1134fbf6b022e0cfb523654552a93e1c9c79', '8378378', 'kcknck@jdjjd', 'ojdsjfoj', NULL, NULL, '', '', '53b70c5cb316d3.26030422'),
(30, '18564806', 'donoso', 'ericka', 'erickad', '047a46574e56ddf6117e985f4b9d1953d9f7a8bf', '02765111234', 'donosoericka2010@gmail.com', 'cordero', 124, 1, '', '', '53bd88128cf201.03174978'),
(31, '18564806992', 'donoso', 'ericka', 'ericka.donoso', '65db7cae6d670d990b5f9ce352971a72b3fb093e', '02765111234', 'correoskjjssj2@ijdji', 'iojeij', NULL, NULL, '', '', '53bd88fc282978.48759926'),
(32, '7556698', 'Guerrero', 'Froilan', 'froilan.guerrero', 'dd242b278859ffd6fbda86c58823e3ff09888884', '23232', 'dasijdlij@podkokfpo', 'dsfsf', NULL, NULL, '', '', '53c7dde7302c25.11133022'),
(33, '00001111', 'Perez', 'Pedro', 'pedro.perez', 'f1cf91a1db43153d69f2d1a1c8a70e46ad6182c8', '04147179768', 'correo@dominio.com', 'caracas', NULL, NULL, '', '', '53caf6668ae195.64343191');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m06_empresa`
--

CREATE TABLE IF NOT EXISTS `m06_empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `RIF` varchar(25) NOT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `Razon_Social` varchar(255) NOT NULL,
  `Direccion` text NOT NULL,
  `Telefono_1` varchar(25) NOT NULL,
  `Telefono_2` varchar(25) DEFAULT NULL,
  `Fax` varchar(25) DEFAULT NULL,
  `Correo` varchar(255) NOT NULL,
  `Descripcion` text NOT NULL,
  `Sitio_Web` varchar(255) DEFAULT NULL,
  `P04_id` int(11) DEFAULT NULL,
  `P08_id` int(11) DEFAULT NULL,
  `P05_id` int(11) DEFAULT NULL,
  `P06_id` int(11) NOT NULL,
  `P07_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_M06_Empresa_P04_Parroquia1_idx` (`P04_id`),
  KEY `fk_M06_Empresa_P07_Categoria1_idx` (`P08_id`),
  KEY `fk_m06_empresa_p05_municipio1_idx` (`P05_id`),
  KEY `fk_m06_empresa_p06_estado1_idx` (`P06_id`),
  KEY `fk_m06_empresa_p07_pais1_idx` (`P07_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `m06_empresa`
--

INSERT INTO `m06_empresa` (`id`, `RIF`, `Status`, `Razon_Social`, `Direccion`, `Telefono_1`, `Telefono_2`, `Fax`, `Correo`, `Descripcion`, `Sitio_Web`, `P04_id`, `P08_id`, `P05_id`, `P06_id`, `P07_id`) VALUES
(1, '5555', 1, 'empresa x', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per ', '555', '555', '555', 'Correo@gmail.com', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet venenatis nunc eget viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum blandit diam vitae ipsum bibendum volutpat. Sed blandit rhoncus arcu, at lobortis orci imperdiet at. Vestibulum eu neque hendrerit magna euismod suscipit. Fusce placerat fringilla felis, ac ultrices ', 'web', NULL, 1, NULL, 18, 1),
(2, '515', NULL, 'lsadksad', 'gng', '6757', '232', '232', '43543', '45345', 'gfdgf', NULL, NULL, NULL, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m07_tutor_externo`
--

CREATE TABLE IF NOT EXISTS `m07_tutor_externo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Cedula` varchar(12) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Telefono` varchar(25) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `Cargo_Empresa` varchar(255) NOT NULL,
  `Curriculum` varchar(255) DEFAULT NULL,
  `Enlace` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `m07_tutor_externo`
--

INSERT INTO `m07_tutor_externo` (`id`, `Cedula`, `Apellido`, `Nombre`, `Telefono`, `Correo`, `Cargo_Empresa`, `Curriculum`, `Enlace`) VALUES
(1, '5555', 'Kempes', 'Mario', '6555', '@ksdhlklf', 'Presidente', 'ldsjd', 'jfdsjfpdjfp.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p01_rol`
--

CREATE TABLE IF NOT EXISTS `p01_rol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `p01_rol`
--

INSERT INTO `p01_rol` (`id`, `nombre`, `Descripcion`) VALUES
(1, 'Administrador', 'Todo Poderoso'),
(2, 'Jefe del Departamento', 'Jefe'),
(3, 'Profesor', 'Profesor...'),
(4, 'Alumno', 'alumno'),
(5, 'Secretaria', '...'),
(6, 'Comisión del Tap', 'comision...'),
(7, 'Empresa', 'acceso al sistema por parte de las empresas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p02_tipo_relacion`
--

CREATE TABLE IF NOT EXISTS `p02_tipo_relacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `p02_tipo_relacion`
--

INSERT INTO `p02_tipo_relacion` (`id`, `Descripcion`) VALUES
(1, 'Tesista'),
(2, 'Tutor'),
(3, 'Tutor Academico'),
(4, 'Jurado 1'),
(5, 'Jurado 2'),
(6, 'Jurado Suplente'),
(7, 'Pasante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p03_status`
--

CREATE TABLE IF NOT EXISTS `p03_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `p03_status`
--

INSERT INTO `p03_status` (`id`, `Descripcion`) VALUES
(1, 'Subiendo'),
(2, 'Sin revisar'),
(3, 'Aprobada'),
(4, 'Diferido'),
(5, 'Oferta'),
(6, 'Rechazada'),
(7, 'Culminada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p04_parroquia`
--

CREATE TABLE IF NOT EXISTS `p04_parroquia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `P05_id` int(11) NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_P04_Parroquia_P05_Municipio1_idx` (`P05_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1135 ;

--
-- Volcado de datos para la tabla `p04_parroquia`
--

INSERT INTO `p04_parroquia` (`id`, `P05_id`, `Descripcion`) VALUES
(1, 1, 'ALTAGRACIA'),
(2, 1, 'CANDELARIA'),
(3, 1, 'CATEDRAL'),
(4, 1, 'LA PASTORA'),
(5, 1, 'SAN AGUSTIN'),
(6, 1, 'SAN JOSE'),
(7, 1, 'SAN JUAN'),
(8, 1, 'SANTA ROSALIA'),
(9, 1, 'SANTA TERESA'),
(10, 1, 'SUCRE'),
(11, 1, '23 DE ENERO'),
(12, 1, 'ANTIMANO'),
(13, 1, 'EL RECREO'),
(14, 1, 'EL VALLE'),
(15, 1, 'LA VEGA'),
(16, 1, 'MACARAO'),
(17, 1, 'CARICUAO'),
(18, 1, 'EL JUNQUITO'),
(19, 1, 'COCHE'),
(20, 1, 'SAN PEDRO'),
(21, 1, 'SAN BERNARDINO'),
(22, 1, 'EL PARAISO'),
(23, 2, 'ANACO'),
(24, 2, 'SAN JOAQUIN'),
(25, 3, 'CM. ARAGUA DE BARCELONA'),
(26, 3, 'CACHIPO'),
(27, 4, 'EL CARMEN'),
(28, 4, 'SAN CRISTOBAL'),
(29, 4, 'BERGANTIN'),
(30, 4, 'CAIGUA'),
(31, 4, 'EL PILAR'),
(32, 4, 'NARICUAL'),
(33, 5, 'CM. CLARINES'),
(34, 5, 'GUANAPE'),
(35, 5, 'SABANA DE UCHIRE'),
(36, 6, 'CM. ONOTO'),
(37, 6, 'SAN PABLO'),
(38, 7, 'CM. CANTAURA'),
(39, 7, 'LIBERTADOR'),
(40, 7, 'SANTA ROSA'),
(41, 7, 'URICA'),
(42, 8, 'CM. SOLEDAD'),
(43, 8, 'MAMO'),
(44, 9, 'CM. SAN MATEO'),
(45, 9, 'EL CARITO'),
(46, 9, 'SANTA INES'),
(47, 10, 'CM. PARIAGUAN'),
(48, 10, 'ATAPIRIRE'),
(49, 10, 'BOCA DEL PAO'),
(50, 10, 'EL PAO'),
(51, 11, 'CM. MAPIRE'),
(52, 11, 'PIAR'),
(53, 11, 'SN DIEGO DE CABRUTICA'),
(54, 11, 'SANTA CLARA'),
(55, 11, 'UVERITO'),
(56, 11, 'ZUATA'),
(57, 12, 'CM. PUERTO PIRITU'),
(58, 12, 'SAN MIGUEL'),
(59, 12, 'SUCRE'),
(60, 13, 'CM. EL TIGRE'),
(61, 14, 'POZUELOS'),
(62, 14, 'CM PTO. LA CRUZ'),
(63, 15, 'CM. SAN JOSE DE GUANIPA'),
(64, 16, 'GUANTA'),
(65, 16, 'CHORRERON'),
(66, 17, 'PIRITU'),
(67, 17, 'SAN FRANCISCO'),
(68, 18, 'LECHERIAS'),
(69, 18, 'EL MORRO'),
(70, 19, 'VALLE GUANAPE'),
(71, 19, 'SANTA BARBARA'),
(72, 20, 'SANTA ANA'),
(73, 20, 'PUEBLO NUEVO'),
(74, 21, 'EL CHAPARRO'),
(75, 21, 'TOMAS ALFARO CALATRAVA'),
(76, 22, 'BOCA UCHIRE'),
(77, 22, 'BOCA DE CHAVEZ'),
(78, 23, 'ACHAGUAS'),
(79, 23, 'APURITO'),
(80, 23, 'EL YAGUAL'),
(81, 23, 'GUACHARA'),
(82, 23, 'MUCURITAS'),
(83, 23, 'QUESERAS DEL MEDIO'),
(84, 24, 'BRUZUAL'),
(85, 24, 'MANTECAL'),
(86, 24, 'QUINTERO'),
(87, 24, 'SAN VICENTE'),
(88, 24, 'RINCON HONDO'),
(89, 25, 'GUASDUALITO'),
(90, 25, 'ARAMENDI'),
(91, 25, 'EL AMPARO'),
(92, 25, 'SAN CAMILO'),
(93, 25, 'URDANETA'),
(94, 26, 'SAN JUAN DE PAYARA'),
(95, 26, 'CODAZZI'),
(96, 26, 'CUNAVICHE'),
(97, 27, 'ELORZA'),
(98, 27, 'LA TRINIDAD'),
(99, 28, 'SAN FERNANDO'),
(100, 28, 'PEÑALVER'),
(101, 28, 'EL RECREO'),
(102, 28, 'SN RAFAEL DE ATAMAICA'),
(103, 29, 'BIRUACA'),
(104, 30, 'CM. LAS DELICIAS'),
(105, 30, 'CHORONI'),
(106, 30, 'MADRE MA DE SAN JOSE'),
(107, 30, 'JOAQUIN CRESPO'),
(108, 30, 'PEDRO JOSE OVALLES'),
(109, 30, 'JOSE CASANOVA GODOY'),
(110, 30, 'ANDRES ELOY BLANCO'),
(111, 30, 'LOS TACARIGUAS'),
(112, 31, 'CM. TURMERO'),
(113, 31, 'SAMAN DE GUERE'),
(114, 31, 'ALFREDO PACHECO M'),
(115, 31, 'CHUAO'),
(116, 31, 'AREVALO APONTE'),
(117, 32, 'CM. LA VICTORIA'),
(118, 32, 'ZUATA'),
(119, 32, 'PAO DE ZARATE'),
(120, 32, 'CASTOR NIEVES RIOS'),
(121, 32, 'LAS GUACAMAYAS'),
(122, 33, 'CM. SAN CASIMIRO'),
(123, 33, 'VALLE MORIN'),
(124, 33, 'GUIRIPA'),
(125, 33, 'OLLAS DE CARAMACATE'),
(126, 34, 'CM. SAN SEBASTIAN'),
(127, 35, 'CM. CAGUA'),
(128, 35, 'BELLA VISTA'),
(129, 36, 'CM. BARBACOAS'),
(130, 36, 'SAN FRANCISCO DE CARA'),
(131, 36, 'TAGUAY'),
(132, 36, 'LAS PEÑITAS'),
(133, 37, 'CM. VILLA DE CURA'),
(134, 37, 'MAGDALENO'),
(135, 37, 'SAN FRANCISCO DE ASIS'),
(136, 37, 'VALLES DE TUCUTUNEMO'),
(137, 37, 'PQ AUGUSTO MIJARES'),
(138, 38, 'CM. PALO NEGRO'),
(139, 38, 'SAN MARTIN DE PORRES'),
(140, 39, 'CM. SANTA CRUZ'),
(141, 40, 'CM. SAN MATEO'),
(142, 41, 'CM. LAS TEJERIAS'),
(143, 41, 'TIARA'),
(144, 42, 'CM. EL LIMON'),
(145, 42, 'CA A DE AZUCAR'),
(146, 43, 'CM. COLONIA TOVAR'),
(147, 44, 'CM. CAMATAGUA'),
(148, 44, 'CARMEN DE CURA'),
(149, 45, 'CM. EL CONSEJO'),
(150, 46, 'CM. SANTA RITA'),
(151, 46, 'FRANCISCO DE MIRANDA'),
(152, 46, 'MONS FELICIANO G'),
(153, 47, 'OCUMARE DE LA COSTA'),
(154, 48, 'ARISMENDI'),
(155, 48, 'GUADARRAMA'),
(156, 48, 'LA UNION'),
(157, 48, 'SAN ANTONIO'),
(158, 49, 'ALFREDO A LARRIVA'),
(159, 49, 'BARINAS'),
(160, 49, 'SAN SILVESTRE'),
(161, 49, 'SANTA INES'),
(162, 49, 'SANTA LUCIA'),
(163, 49, 'TORUNOS'),
(164, 49, 'EL CARMEN'),
(165, 49, 'ROMULO BETANCOURT'),
(166, 49, 'CORAZON DE JESUS'),
(167, 49, 'RAMON I MENDEZ'),
(168, 49, 'ALTO BARINAS'),
(169, 49, 'MANUEL P FAJARDO'),
(170, 49, 'JUAN A RODRIGUEZ D'),
(171, 49, 'DOMINGA ORTIZ P'),
(172, 50, 'ALTAMIRA'),
(173, 50, 'BARINITAS'),
(174, 50, 'CALDERAS'),
(175, 51, 'SANTA BARBARA'),
(176, 51, 'JOSE IGNACIO DEL PUMAR'),
(177, 51, 'RAMON IGNACIO MENDEZ'),
(178, 51, 'PEDRO BRICEÑO MENDEZ'),
(179, 52, 'EL REAL'),
(180, 52, 'LA LUZ'),
(181, 52, 'OBISPOS'),
(182, 52, 'LOS GUASIMITOS'),
(183, 53, 'CIUDAD BOLIVIA'),
(184, 53, 'IGNACIO BRICEÑO'),
(185, 53, 'PAEZ'),
(186, 53, 'JOSE FELIX RIBAS'),
(187, 54, 'DOLORES'),
(188, 54, 'LIBERTAD'),
(189, 54, 'PALACIO FAJARDO'),
(190, 54, 'SANTA ROSA'),
(191, 55, 'CIUDAD DE NUTRIAS'),
(192, 55, 'EL REGALO'),
(193, 55, 'PUERTO DE NUTRIAS'),
(194, 55, 'SANTA CATALINA'),
(195, 56, 'RODRIGUEZ DOMINGUEZ'),
(196, 56, 'SABANETA'),
(197, 57, 'TICOPORO'),
(198, 57, 'NICOLAS PULIDO'),
(199, 57, 'ANDRES BELLO'),
(200, 58, 'BARRANCAS'),
(201, 58, 'EL SOCORRO'),
(202, 58, 'MASPARRITO'),
(203, 59, 'EL CANTON'),
(204, 59, 'SANTA CRUZ DE GUACAS'),
(205, 59, 'PUERTO VIVAS'),
(206, 60, 'SIMON BOLIVAR'),
(207, 60, 'ONCE DE ABRIL'),
(208, 60, 'VISTA AL SOL'),
(209, 60, 'CHIRICA'),
(210, 60, 'DALLA COSTA'),
(211, 60, 'CACHAMAY'),
(212, 60, 'UNIVERSIDAD'),
(213, 60, 'UNARE'),
(214, 60, 'YOCOIMA'),
(215, 60, 'POZO VERDE'),
(216, 61, 'CM. CAICARA DEL ORINOCO'),
(217, 61, 'ASCENSION FARRERAS'),
(218, 61, 'ALTAGRACIA'),
(219, 61, 'LA URBANA'),
(220, 61, 'GUANIAMO'),
(221, 61, 'PIJIGUAOS'),
(222, 62, 'CATEDRAL'),
(223, 62, 'AGUA SALADA'),
(224, 62, 'LA SABANITA'),
(225, 62, 'VISTA HERMOSA'),
(226, 62, 'MARHUANTA'),
(227, 62, 'JOSE ANTONIO PAEZ'),
(228, 62, 'ORINOCO'),
(229, 62, 'PANAPANA'),
(230, 62, 'ZEA'),
(231, 63, 'CM. UPATA'),
(232, 63, 'ANDRES ELOY BLANCO'),
(233, 63, 'PEDRO COVA'),
(234, 64, 'CM. GUASIPATI'),
(235, 64, 'SALOM'),
(236, 65, 'CM. MARIPA'),
(237, 65, 'ARIPAO'),
(238, 65, 'LAS MAJADAS'),
(239, 65, 'MOITACO'),
(240, 65, 'GUARATARO'),
(241, 66, 'CM. TUMEREMO'),
(242, 66, 'DALLA COSTA'),
(243, 66, 'SAN ISIDRO'),
(244, 67, 'CM. CIUDAD PIAR'),
(245, 67, 'SAN FRANCISCO'),
(246, 67, 'BARCELONETA'),
(247, 67, 'SANTA BARBARA'),
(248, 68, 'CM. SANTA ELENA DE UAIREN'),
(249, 68, 'IKABARU'),
(250, 69, 'CM. EL CALLAO'),
(251, 70, 'CM. EL PALMAR'),
(252, 71, 'BEJUMA'),
(253, 71, 'CANOABO'),
(254, 71, 'SIMON BOLIVAR'),
(255, 72, 'GUIGUE'),
(256, 72, 'BELEN'),
(257, 72, 'TACARIGUA'),
(258, 73, 'MARIARA'),
(259, 73, 'AGUAS CALIENTES'),
(260, 74, 'GUACARA'),
(261, 74, 'CIUDAD ALIANZA'),
(262, 74, 'YAGUA'),
(263, 75, 'MONTALBAN'),
(264, 76, 'MORON'),
(265, 76, 'URAMA'),
(266, 77, 'DEMOCRACIA'),
(267, 77, 'FRATERNIDAD'),
(268, 77, 'GOAIGOAZA'),
(269, 77, 'JUAN JOSE FLORES'),
(270, 77, 'BARTOLOME SALOM'),
(271, 77, 'UNION'),
(272, 77, 'BORBURATA'),
(273, 77, 'PATANEMO'),
(274, 78, 'SAN JOAQUIN'),
(275, 79, 'CANDELARIA'),
(276, 79, 'CATEDRAL'),
(277, 79, 'EL SOCORRO'),
(278, 79, 'MIGUEL PEÑA'),
(279, 79, 'SAN BLAS'),
(280, 79, 'SAN JOSE'),
(281, 79, 'SANTA ROSA'),
(282, 79, 'RAFAEL URDANETA'),
(283, 79, 'NEGRO PRIMERO'),
(284, 80, 'MIRANDA'),
(285, 81, 'U LOS GUAYOS'),
(286, 82, 'NAGUANAGUA'),
(287, 83, 'URB SAN DIEGO'),
(288, 84, 'U TOCUYITO'),
(289, 84, 'U INDEPENDENCIA'),
(290, 85, 'COJEDES'),
(291, 85, 'JUAN DE MATA SUAREZ'),
(292, 86, 'TINAQUILLO'),
(293, 87, 'EL BAUL'),
(294, 87, 'SUCRE'),
(295, 88, 'EL PAO'),
(296, 89, 'LIBERTAD DE COJEDES'),
(297, 89, 'EL AMPARO'),
(298, 90, 'SAN CARLOS DE AUSTRIA'),
(299, 90, 'JUAN ANGEL BRAVO'),
(300, 90, 'MANUEL MANRIQUE'),
(301, 91, 'GRL/JEFE JOSE L SILVA'),
(302, 92, 'MACAPO'),
(303, 92, 'LA AGUADITA'),
(304, 93, 'ROMULO GALLEGOS'),
(305, 94, 'SAN JUAN DE LOS CAYOS'),
(306, 94, 'CAPADARE'),
(307, 94, 'LA PASTORA'),
(308, 94, 'LIBERTADOR'),
(309, 95, 'SAN LUIS'),
(310, 95, 'ARACUA'),
(311, 95, 'LA PEÑA'),
(312, 96, 'CAPATARIDA'),
(313, 96, 'BOROJO'),
(314, 96, 'SEQUE'),
(315, 96, 'ZAZARIDA'),
(316, 96, 'BARIRO'),
(317, 96, 'GUAJIRO'),
(318, 97, 'NORTE'),
(319, 97, 'CARIRUBANA'),
(320, 97, 'PUNTA CARDON'),
(321, 97, 'SANTA ANA'),
(322, 98, 'LA VELA DE CORO'),
(323, 98, 'ACURIGUA'),
(324, 98, 'GUAIBACOA'),
(325, 98, 'MACORUCA'),
(326, 98, 'LAS CALDERAS'),
(327, 99, 'PEDREGAL'),
(328, 99, 'AGUA CLARA'),
(329, 99, 'AVARIA'),
(330, 99, 'PIEDRA GRANDE'),
(331, 99, 'PURURECHE'),
(332, 100, 'PUEBLO NUEVO'),
(333, 100, 'ADICORA'),
(334, 100, 'BARAIVED'),
(335, 100, 'BUENA VISTA'),
(336, 100, 'JADACAQUIVA'),
(337, 100, 'MORUY'),
(338, 100, 'EL VINCULO'),
(339, 100, 'EL HATO'),
(340, 100, 'ADAURE'),
(341, 101, 'CHURUGUARA'),
(342, 101, 'AGUA LARGA'),
(343, 101, 'INDEPENDENCIA'),
(344, 101, 'MAPARARI'),
(345, 101, 'EL PAUJI'),
(346, 102, 'MENE DE MAUROA'),
(347, 102, 'CASIGUA'),
(348, 102, 'SAN FELIX'),
(349, 103, 'SAN ANTONIO'),
(350, 103, 'SAN GABRIEL'),
(351, 103, 'SANTA ANA'),
(352, 103, 'GUZMAN GUILLERMO'),
(353, 103, 'MITARE'),
(354, 103, 'SABANETA'),
(355, 103, 'RIO SECO'),
(356, 104, 'CABURE'),
(357, 104, 'CURIMAGUA'),
(358, 104, 'COLINA'),
(359, 105, 'TUCACAS'),
(360, 105, 'BOCA DE AROA'),
(361, 106, 'PUERTO CUMAREBO'),
(362, 106, 'LA CIENAGA'),
(363, 106, 'LA SOLEDAD'),
(364, 106, 'PUEBLO CUMAREBO'),
(365, 106, 'ZAZARIDA'),
(366, 107, 'CM. DABAJURO'),
(367, 108, 'CHICHIRIVICHE'),
(368, 108, 'BOCA DE TOCUYO'),
(369, 108, 'TOCUYO DE LA COSTA'),
(370, 109, 'LOS TAQUES'),
(371, 109, 'JUDIBANA'),
(372, 110, 'PIRITU'),
(373, 110, 'SAN JOSE DE LA COSTA'),
(374, 111, 'STA.CRUZ DE BUCARAL'),
(375, 111, 'EL CHARAL'),
(376, 111, 'LAS VEGAS DEL TUY'),
(377, 112, 'CM. MIRIMIRE'),
(378, 113, 'JACURA'),
(379, 113, 'AGUA LINDA'),
(380, 113, 'ARAURIMA'),
(381, 114, 'CM. YARACAL'),
(382, 115, 'CM. PALMA SOLA'),
(383, 116, 'SUCRE'),
(384, 116, 'PECAYA'),
(385, 117, 'URUMACO'),
(386, 117, 'BRUZUAL'),
(387, 118, 'CM. TOCOPERO'),
(388, 119, 'VALLE DE LA PASCUA'),
(389, 119, 'ESPINO'),
(390, 120, 'EL SOMBRERO'),
(391, 120, 'SOSA'),
(392, 121, 'CALABOZO'),
(393, 121, 'EL CALVARIO'),
(394, 121, 'EL RASTRO'),
(395, 121, 'GUARDATINAJAS'),
(396, 122, 'ALTAGRACIA DE ORITUCO'),
(397, 122, 'LEZAMA'),
(398, 122, 'LIBERTAD DE ORITUCO'),
(399, 122, 'SAN FCO DE MACAIRA'),
(400, 122, 'SAN RAFAEL DE ORITUCO'),
(401, 122, 'SOUBLETTE'),
(402, 122, 'PASO REAL DE MACAIRA'),
(403, 123, 'TUCUPIDO'),
(404, 123, 'SAN RAFAEL DE LAYA'),
(405, 124, 'SAN JUAN DE LOS MORROS'),
(406, 124, 'PARAPARA'),
(407, 124, 'CANTAGALLO'),
(408, 125, 'ZARAZA'),
(409, 125, 'SAN JOSE DE UNARE'),
(410, 126, 'CAMAGUAN'),
(411, 126, 'PUERTO MIRANDA'),
(412, 126, 'UVERITO'),
(413, 127, 'SAN JOSE DE GUARIBE'),
(414, 128, 'LAS MERCEDES'),
(415, 128, 'STA RITA DE MANAPIRE'),
(416, 128, 'CABRUTA'),
(417, 129, 'EL SOCORRO'),
(418, 130, 'ORTIZ'),
(419, 130, 'SAN FCO. DE TIZNADOS'),
(420, 130, 'SAN JOSE DE TIZNADOS'),
(421, 130, 'S LORENZO DE TIZNADOS'),
(422, 131, 'SANTA MARIA DE IPIRE'),
(423, 131, 'ALTAMIRA'),
(424, 132, 'CHAGUARAMAS'),
(425, 133, 'GUAYABAL'),
(426, 133, 'CAZORLA'),
(427, 134, 'FREITEZ'),
(428, 134, 'JOSE MARIA BLANCO'),
(429, 135, 'CATEDRAL'),
(430, 135, 'LA CONCEPCION'),
(431, 135, 'SANTA ROSA'),
(432, 135, 'UNION'),
(433, 135, 'EL CUJI'),
(434, 135, 'TAMACA'),
(435, 135, 'JUAN DE VILLEGAS'),
(436, 135, 'AGUEDO F. ALVARADO'),
(437, 135, 'BUENA VISTA'),
(438, 135, 'JUAREZ'),
(439, 136, 'JUAN B RODRIGUEZ'),
(440, 136, 'DIEGO DE LOZADA'),
(441, 136, 'SAN MIGUEL'),
(442, 136, 'CUARA'),
(443, 136, 'PARAISO DE SAN JOSE'),
(444, 136, 'TINTORERO'),
(445, 136, 'JOSE BERNARDO DORANTE'),
(446, 136, 'CRNEL. MARIANO PERAZA'),
(447, 137, 'BOLIVAR'),
(448, 137, 'ANZOATEGUI'),
(449, 137, 'GUARICO'),
(450, 137, 'HUMOCARO ALTO'),
(451, 137, 'HUMOCARO BAJO'),
(452, 137, 'MORAN'),
(453, 137, 'HILARIO LUNA Y LUNA'),
(454, 137, 'LA CANDELARIA'),
(455, 138, 'CABUDARE'),
(456, 138, 'JOSE G. BASTIDAS'),
(457, 138, 'AGUA VIVA'),
(458, 139, 'TRINIDAD SAMUEL'),
(459, 139, 'ANTONIO DIAZ'),
(460, 139, 'CAMACARO'),
(461, 139, 'CASTAÑEDA'),
(462, 139, 'CHIQUINQUIRA'),
(463, 139, 'ESPINOZA LOS MONTEROS'),
(464, 139, 'LARA'),
(465, 139, 'MANUEL MORILLO'),
(466, 139, 'MONTES DE OCA'),
(467, 139, 'TORRES'),
(468, 139, 'EL BLANCO'),
(469, 139, 'MONTA A VERDE'),
(470, 139, 'HERIBERTO ARROYO'),
(471, 139, 'LAS MERCEDES'),
(472, 139, 'CECILIO ZUBILLAGA'),
(473, 139, 'REYES VARGAS'),
(474, 139, 'ALTAGRACIA'),
(475, 140, 'SIQUISIQUE'),
(476, 140, 'SAN MIGUEL'),
(477, 140, 'XAGUAS'),
(478, 140, 'MOROTURO'),
(479, 141, 'PIO TAMAYO'),
(480, 141, 'YACAMBU'),
(481, 141, 'QBDA. HONDA DE GUACHE'),
(482, 142, 'SARARE'),
(483, 142, 'GUSTAVO VEGAS LEON'),
(484, 142, 'BURIA'),
(485, 143, 'GABRIEL PICON G.'),
(486, 143, 'HECTOR AMABLE MORA'),
(487, 143, 'JOSE NUCETE SARDI'),
(488, 143, 'PULIDO MENDEZ'),
(489, 143, 'PTE. ROMULO GALLEGOS'),
(490, 143, 'PRESIDENTE BETANCOURT'),
(491, 143, 'PRESIDENTE PAEZ'),
(492, 144, 'CM. LA AZULITA'),
(493, 145, 'CM. CANAGUA'),
(494, 145, 'CAPURI'),
(495, 145, 'CHACANTA'),
(496, 145, 'EL MOLINO'),
(497, 145, 'GUAIMARAL'),
(498, 145, 'MUCUTUY'),
(499, 145, 'MUCUCHACHI'),
(500, 146, 'ACEQUIAS'),
(501, 146, 'JAJI'),
(502, 146, 'LA MESA'),
(503, 146, 'SAN JOSE'),
(504, 146, 'MONTALBAN'),
(505, 146, 'MATRIZ'),
(506, 146, 'FERNANDEZ PEÑA'),
(507, 147, 'CM. GUARAQUE'),
(508, 147, 'MESA DE QUINTERO'),
(509, 147, 'RIO NEGRO'),
(510, 148, 'CM. ARAPUEY'),
(511, 148, 'PALMIRA'),
(512, 149, 'CM. TORONDOY'),
(513, 149, 'SAN CRISTOBAL DE T'),
(514, 150, 'ARIAS'),
(515, 150, 'SAGRARIO'),
(516, 150, 'MILLA'),
(517, 150, 'EL LLANO'),
(518, 150, 'JUAN RODRIGUEZ SUAREZ'),
(519, 150, 'JACINTO PLAZA'),
(520, 150, 'DOMINGO PEÑA'),
(521, 150, 'GONZALO PICON FEBRES'),
(522, 150, 'OSUNA RODRIGUEZ'),
(523, 150, 'LASSO DE LA VEGA'),
(524, 150, 'CARACCIOLO PARRA P'),
(525, 150, 'MARIANO PICON SALAS'),
(526, 150, 'ANTONIO SPINETTI DINI'),
(527, 150, 'EL MORRO'),
(528, 150, 'LOS NEVADOS'),
(529, 151, 'CM. TABAY'),
(530, 152, 'CM. TIMOTES'),
(531, 152, 'ANDRES ELOY BLANCO'),
(532, 152, 'PIÑANGO'),
(533, 152, 'LA VENTA'),
(534, 153, 'CM. STA CRUZ DE MORA'),
(535, 153, 'MESA BOLIVAR'),
(536, 153, 'MESA DE LAS PALMAS'),
(537, 154, 'CM. STA ELENA DE ARENALES'),
(538, 154, 'ELOY PAREDES'),
(539, 154, 'PQ R DE ALCAZAR'),
(540, 155, 'CM. TUCANI'),
(541, 155, 'FLORENCIO RAMIREZ'),
(542, 156, 'CM. SANTO DOMINGO'),
(543, 156, 'LAS PIEDRAS'),
(544, 157, 'CM. PUEBLO LLANO'),
(545, 158, 'CM. MUCUCHIES'),
(546, 158, 'MUCURUBA'),
(547, 158, 'SAN RAFAEL'),
(548, 158, 'CACUTE'),
(549, 158, 'LA TOMA'),
(550, 159, 'CM. BAILADORES'),
(551, 159, 'GERONIMO MALDONADO'),
(552, 160, 'CM. LAGUNILLAS'),
(553, 160, 'CHIGUARA'),
(554, 160, 'ESTANQUES'),
(555, 160, 'SAN JUAN'),
(556, 160, 'PUEBLO NUEVO DEL SUR'),
(557, 160, 'LA TRAMPA'),
(558, 161, 'EL LLANO'),
(559, 161, 'TOVAR'),
(560, 161, 'EL AMPARO'),
(561, 161, 'SAN FRANCISCO'),
(562, 162, 'CM. NUEVA BOLIVIA'),
(563, 162, 'INDEPENDENCIA'),
(564, 162, 'MARIA C PALACIOS'),
(565, 162, 'SANTA APOLONIA'),
(566, 163, 'CM. STA MARIA DE CAPARO'),
(567, 164, 'CM. ARICAGUA'),
(568, 164, 'SAN ANTONIO'),
(569, 165, 'CM. ZEA'),
(570, 165, 'CAÑO EL TIGRE'),
(571, 166, 'CAUCAGUA'),
(572, 166, 'ARAGUITA'),
(573, 166, 'AREVALO GONZALEZ'),
(574, 166, 'CAPAYA'),
(575, 166, 'PANAQUIRE'),
(576, 166, 'RIBAS'),
(577, 166, 'EL CAFE'),
(578, 166, 'MARIZAPA'),
(579, 167, 'HIGUEROTE'),
(580, 167, 'CURIEPE'),
(581, 167, 'TACARIGUA'),
(582, 168, 'LOS TEQUES'),
(583, 168, 'CECILIO ACOSTA'),
(584, 168, 'PARACOTOS'),
(585, 168, 'SAN PEDRO'),
(586, 168, 'TACATA'),
(587, 168, 'EL JARILLO'),
(588, 168, 'ALTAGRACIA DE LA M'),
(589, 169, 'STA TERESA DEL TUY'),
(590, 169, 'EL CARTANAL'),
(591, 170, 'OCUMARE DEL TUY'),
(592, 170, 'LA DEMOCRACIA'),
(593, 170, 'SANTA BARBARA'),
(594, 171, 'RIO CHICO'),
(595, 171, 'EL GUAPO'),
(596, 171, 'TACARIGUA DE LA LAGUNA'),
(597, 171, 'PAPARO'),
(598, 171, 'SN FERNANDO DEL GUAPO'),
(599, 172, 'SANTA LUCIA'),
(600, 173, 'GUARENAS'),
(601, 174, 'PETARE'),
(602, 174, 'LEONCIO MARTINEZ'),
(603, 174, 'CAUCAGUITA'),
(604, 174, 'FILAS DE MARICHES'),
(605, 174, 'LA DOLORITA'),
(606, 175, 'CUA'),
(607, 175, 'NUEVA CUA'),
(608, 176, 'GUATIRE'),
(609, 176, 'BOLIVAR'),
(610, 177, 'CHARALLAVE'),
(611, 177, 'LAS BRISAS'),
(612, 178, 'SAN ANTONIO LOS ALTOS'),
(613, 179, 'SAN JOSE DE BARLOVENTO'),
(614, 179, 'CUMBO'),
(615, 180, 'SAN FCO DE YARE'),
(616, 180, 'S ANTONIO DE YARE'),
(617, 181, 'BARUTA'),
(618, 181, 'EL CAFETAL'),
(619, 181, 'LAS MINAS DE BARUTA'),
(620, 182, 'CARRIZAL'),
(621, 183, 'CHACAO'),
(622, 184, 'EL HATILLO'),
(623, 185, 'MAMPORAL'),
(624, 186, 'CUPIRA'),
(625, 186, 'MACHURUCUTO'),
(626, 187, 'CM. SAN ANTONIO'),
(627, 187, 'SAN FRANCISCO'),
(628, 188, 'CM. CARIPITO'),
(629, 189, 'CM. CARIPE'),
(630, 189, 'TERESEN'),
(631, 189, 'EL GUACHARO'),
(632, 189, 'SAN AGUSTIN'),
(633, 189, 'LA GUANOTA'),
(634, 189, 'SABANA DE PIEDRA'),
(635, 190, 'CM. CAICARA'),
(636, 190, 'AREO'),
(637, 190, 'SAN FELIX'),
(638, 190, 'VIENTO FRESCO'),
(639, 191, 'CM. PUNTA DE MATA'),
(640, 191, 'EL TEJERO'),
(641, 192, 'CM. TEMBLADOR'),
(642, 192, 'TABASCA'),
(643, 192, 'LAS ALHUACAS'),
(644, 192, 'CHAGUARAMAS'),
(645, 193, 'EL FURRIAL'),
(646, 193, 'JUSEPIN'),
(647, 193, 'EL COROZO'),
(648, 193, 'SAN VICENTE'),
(649, 193, 'LA PICA'),
(650, 193, 'ALTO DE LOS GODOS'),
(651, 193, 'BOQUERON'),
(652, 193, 'LAS COCUIZAS'),
(653, 193, 'SANTA CRUZ'),
(654, 193, 'SAN SIMON'),
(655, 194, 'CM. ARAGUA'),
(656, 194, 'CHAGUARAMAL'),
(657, 194, 'GUANAGUANA'),
(658, 194, 'APARICIO'),
(659, 194, 'TAGUAYA'),
(660, 194, 'EL PINTO'),
(661, 194, 'LA TOSCANA'),
(662, 195, 'CM. QUIRIQUIRE'),
(663, 195, 'CACHIPO'),
(664, 196, 'CM. BARRANCAS'),
(665, 196, 'LOS BARRANCOS DE FAJARDO'),
(666, 197, 'CM. AGUASAY'),
(667, 198, 'CM. SANTA BARBARA'),
(668, 199, 'CM. URACOA'),
(669, 200, 'CM. LA ASUNCION'),
(670, 201, 'CM. SAN JUAN BAUTISTA'),
(671, 201, 'ZABALA'),
(672, 202, 'CM. SANTA ANA'),
(673, 202, 'GUEVARA'),
(674, 202, 'MATASIETE'),
(675, 202, 'BOLIVAR'),
(676, 202, 'SUCRE'),
(677, 203, 'CM. PAMPATAR'),
(678, 203, 'AGUIRRE'),
(679, 204, 'CM. JUAN GRIEGO'),
(680, 204, 'ADRIAN'),
(681, 205, 'CM. PORLAMAR'),
(682, 206, 'CM. BOCA DEL RIO'),
(683, 206, 'SAN FRANCISCO'),
(684, 207, 'CM. SAN PEDRO DE COCHE'),
(685, 207, 'VICENTE FUENTES'),
(686, 208, 'CM. PUNTA DE PIEDRAS'),
(687, 208, 'LOS BARALES'),
(688, 209, 'CM.LA PLAZA DE PARAGUACHI'),
(689, 210, 'CM. VALLE ESP SANTO'),
(690, 210, 'FRANCISCO FAJARDO'),
(691, 211, 'CM. ARAURE'),
(692, 211, 'RIO ACARIGUA'),
(693, 212, 'CM. PIRITU'),
(694, 212, 'UVERAL'),
(695, 213, 'CM. GUANARE'),
(696, 213, 'CORDOBA'),
(697, 213, 'SAN JUAN GUANAGUANARE'),
(698, 213, 'VIRGEN DE LA COROMOTO'),
(699, 213, 'SAN JOSE DE LA MONTAÑA'),
(700, 214, 'CM. GUANARITO'),
(701, 214, 'TRINIDAD DE LA CAPILLA'),
(702, 214, 'DIVINA PASTORA'),
(703, 215, 'CM. OSPINO'),
(704, 215, 'APARICION'),
(705, 215, 'LA ESTACION'),
(706, 216, 'CM. ACARIGUA'),
(707, 216, 'PAYARA'),
(708, 216, 'PIMPINELA'),
(709, 216, 'RAMON PERAZA'),
(710, 217, 'CM. BISCUCUY'),
(711, 217, 'CONCEPCION'),
(712, 217, 'SAN RAFAEL PALO ALZADO'),
(713, 217, 'UVENCIO A VELASQUEZ'),
(714, 217, 'SAN JOSE DE SAGUAZ'),
(715, 217, 'VILLA ROSA'),
(716, 218, 'CM. VILLA BRUZUAL'),
(717, 218, 'CANELONES'),
(718, 218, 'SANTA CRUZ'),
(719, 218, 'SAN ISIDRO LABRADOR'),
(720, 219, 'CM. CHABASQUEN'),
(721, 219, 'PEÑA BLANCA'),
(722, 220, 'CM. AGUA BLANCA'),
(723, 221, 'CM. PAPELON'),
(724, 221, 'CAÑO DELGADITO'),
(725, 222, 'CM. BOCONOITO'),
(726, 222, 'ANTOLIN TOVAR AQUINO'),
(727, 223, 'CM. SAN RAFAEL DE ONOTO'),
(728, 223, 'SANTA FE'),
(729, 223, 'THERMO MORLES'),
(730, 224, 'CM. EL PLAYON'),
(731, 224, 'FLORIDA'),
(732, 225, 'RIO CARIBE'),
(733, 225, 'SAN JUAN GALDONAS'),
(734, 225, 'PUERTO SANTO'),
(735, 225, 'EL MORRO DE PTO SANTO'),
(736, 225, 'ANTONIO JOSE DE SUCRE'),
(737, 226, 'EL PILAR'),
(738, 226, 'EL RINCON'),
(739, 226, 'GUARAUNOS'),
(740, 226, 'TUNAPUICITO'),
(741, 226, 'UNION'),
(742, 226, 'GRAL FCO. A VASQUEZ'),
(743, 227, 'SANTA CATALINA'),
(744, 227, 'SANTA ROSA'),
(745, 227, 'SANTA TERESA'),
(746, 227, 'BOLIVAR'),
(747, 227, 'MACARAPANA'),
(748, 228, 'YAGUARAPARO'),
(749, 228, 'LIBERTAD'),
(750, 228, 'PAUJIL'),
(751, 229, 'IRAPA'),
(752, 229, 'CAMPO CLARO'),
(753, 229, 'SORO'),
(754, 229, 'SAN ANTONIO DE IRAPA'),
(755, 229, 'MARABAL'),
(756, 230, 'CM. SAN ANT DEL GOLFO'),
(757, 231, 'CUMANACOA'),
(758, 231, 'ARENAS'),
(759, 231, 'ARICAGUA'),
(760, 231, 'COCOLLAR'),
(761, 231, 'SAN FERNANDO'),
(762, 231, 'SAN LORENZO'),
(763, 232, 'CARIACO'),
(764, 232, 'CATUARO'),
(765, 232, 'RENDON'),
(766, 232, 'SANTA CRUZ'),
(767, 232, 'SANTA MARIA'),
(768, 233, 'ALTAGRACIA'),
(769, 233, 'AYACUCHO'),
(770, 233, 'SANTA INES'),
(771, 233, 'VALENTIN VALIENTE'),
(772, 233, 'SAN JUAN'),
(773, 233, 'GRAN MARISCAL'),
(774, 233, 'RAUL LEONI'),
(775, 234, 'GUIRIA'),
(776, 234, 'CRISTOBAL COLON'),
(777, 234, 'PUNTA DE PIEDRA'),
(778, 234, 'BIDEAU'),
(779, 235, 'MARIÑO'),
(780, 235, 'ROMULO GALLEGOS'),
(781, 236, 'TUNAPUY'),
(782, 236, 'CAMPO ELIAS'),
(783, 237, 'SAN JOSE DE AREOCUAR'),
(784, 237, 'TAVERA ACOSTA'),
(785, 238, 'CM. MARIGUITAR'),
(786, 239, 'ARAYA'),
(787, 239, 'MANICUARE'),
(788, 239, 'CHACOPATA'),
(789, 240, 'CM. COLON'),
(790, 240, 'RIVAS BERTI'),
(791, 240, 'SAN PEDRO DEL RIO'),
(792, 241, 'CM. SAN ANT DEL TACHIRA'),
(793, 241, 'PALOTAL'),
(794, 241, 'JUAN VICENTE GOMEZ'),
(795, 241, 'ISAIAS MEDINA ANGARIT'),
(796, 242, 'CM. CAPACHO NUEVO'),
(797, 242, 'JUAN GERMAN ROSCIO'),
(798, 242, 'ROMAN CARDENAS'),
(799, 243, 'CM. TARIBA'),
(800, 243, 'LA FLORIDA'),
(801, 243, 'AMENODORO RANGEL LAMU'),
(802, 244, 'CM. LA GRITA'),
(803, 244, 'EMILIO C. GUERRERO'),
(804, 244, 'MONS. MIGUEL A SALAS'),
(805, 245, 'CM. RUBIO'),
(806, 245, 'BRAMON'),
(807, 245, 'LA PETROLEA'),
(808, 245, 'QUINIMARI'),
(809, 246, 'CM. LOBATERA'),
(810, 246, 'CONSTITUCION'),
(811, 247, 'LA CONCORDIA'),
(812, 247, 'PEDRO MARIA MORANTES'),
(813, 247, 'SN JUAN BAUTISTA'),
(814, 247, 'SAN SEBASTIAN'),
(815, 247, 'DR. FCO. ROMERO LOBO'),
(816, 248, 'CM. PREGONERO'),
(817, 248, 'CARDENAS'),
(818, 248, 'POTOSI'),
(819, 248, 'JUAN PABLO PEÑALOZA'),
(820, 249, 'CM. STA. ANA  DEL TACHIRA'),
(821, 250, 'CM. LA FRIA'),
(822, 250, 'BOCA DE GRITA'),
(823, 250, 'JOSE ANTONIO PAEZ'),
(824, 251, 'CM. PALMIRA'),
(825, 252, 'CM. MICHELENA'),
(826, 253, 'CM. ABEJALES'),
(827, 253, 'SAN JOAQUIN DE NAVAY'),
(828, 253, 'DORADAS'),
(829, 253, 'EMETERIO OCHOA'),
(830, 254, 'CM. COLONCITO'),
(831, 254, 'LA PALMITA'),
(832, 255, 'CM. UREÑA'),
(833, 255, 'NUEVA ARCADIA'),
(834, 256, 'CM. QUENIQUEA'),
(835, 256, 'SAN PABLO'),
(836, 256, 'ELEAZAR LOPEZ CONTRERA'),
(837, 257, 'CM. CORDERO'),
(838, 258, 'CM.SAN RAFAEL DEL PINAL'),
(839, 258, 'SANTO DOMINGO'),
(840, 258, 'ALBERTO ADRIANI'),
(841, 259, 'CM. CAPACHO VIEJO'),
(842, 259, 'CIPRIANO CASTRO'),
(843, 259, 'MANUEL FELIPE RUGELES'),
(844, 260, 'CM. LA TENDIDA'),
(845, 260, 'BOCONO'),
(846, 260, 'HERNANDEZ'),
(847, 261, 'CM. SEBORUCO'),
(848, 262, 'CM. LAS MESAS'),
(849, 263, 'CM. SAN JOSE DE BOLIVAR'),
(850, 264, 'CM. EL COBRE'),
(851, 265, 'CM. DELICIAS'),
(852, 266, 'CM. SAN SIMON'),
(853, 267, 'CM. SAN JOSECITO'),
(854, 268, 'CM. UMUQUENA'),
(855, 269, 'BETIJOQUE'),
(856, 269, 'JOSE G HERNANDEZ'),
(857, 269, 'LA PUEBLITA'),
(858, 269, 'EL CEDRO'),
(859, 270, 'BOCONO'),
(860, 270, 'EL CARMEN'),
(861, 270, 'MOSQUEY'),
(862, 270, 'AYACUCHO'),
(863, 270, 'BURBUSAY'),
(864, 270, 'GENERAL RIVAS'),
(865, 270, 'MONSEÑOR JAUREGUI'),
(866, 270, 'RAFAEL RANGEL'),
(867, 270, 'SAN JOSE'),
(868, 270, 'SAN MIGUEL'),
(869, 270, 'GUARAMACAL'),
(870, 270, 'LA VEGA DE GUARAMACAL'),
(871, 271, 'CARACHE'),
(872, 271, 'LA CONCEPCION'),
(873, 271, 'CUICAS'),
(874, 271, 'PANAMERICANA'),
(875, 271, 'SANTA CRUZ'),
(876, 272, 'ESCUQUE'),
(877, 272, 'SABANA LIBRE'),
(878, 272, 'LA UNION'),
(879, 272, 'SANTA RITA'),
(880, 273, 'CRISTOBAL MENDOZA'),
(881, 273, 'CHIQUINQUIRA'),
(882, 273, 'MATRIZ'),
(883, 273, 'MONSEÑOR CARRILLO'),
(884, 273, 'CRUZ CARRILLO'),
(885, 273, 'ANDRES LINARES'),
(886, 273, 'TRES ESQUINAS'),
(887, 274, 'LA QUEBRADA'),
(888, 274, 'JAJO'),
(889, 274, 'LA MESA'),
(890, 274, 'SANTIAGO'),
(891, 274, 'CABIMBU'),
(892, 274, 'TUÑAME'),
(893, 275, 'MERCEDES DIAZ'),
(894, 275, 'JUAN IGNACIO MONTILLA'),
(895, 275, 'LA BEATRIZ'),
(896, 275, 'MENDOZA'),
(897, 275, 'LA PUERTA'),
(898, 275, 'SAN LUIS'),
(899, 276, 'CHEJENDE'),
(900, 276, 'CARRILLO'),
(901, 276, 'CEGARRA'),
(902, 276, 'BOLIVIA'),
(903, 276, 'MANUEL SALVADOR ULLOA'),
(904, 276, 'SAN JOSE'),
(905, 276, 'ARNOLDO GABALDON'),
(906, 277, 'EL DIVIDIVE'),
(907, 277, 'AGUA CALIENTE'),
(908, 277, 'EL CENIZO'),
(909, 277, 'AGUA SANTA'),
(910, 277, 'VALERITA'),
(911, 278, 'MONTE CARMELO'),
(912, 278, 'BUENA VISTA'),
(913, 278, 'STA MARIA DEL HORCON'),
(914, 279, 'MOTATAN'),
(915, 279, 'EL BAÑO'),
(916, 279, 'JALISCO'),
(917, 280, 'PAMPAN'),
(918, 280, 'SANTA ANA'),
(919, 280, 'LA PAZ'),
(920, 280, 'FLOR DE PATRIA'),
(921, 281, 'CARVAJAL'),
(922, 281, 'ANTONIO N BRICEÑO'),
(923, 281, 'CAMPO ALEGRE'),
(924, 281, 'JOSE LEONARDO SUAREZ'),
(925, 282, 'SABANA DE MENDOZA'),
(926, 282, 'JUNIN'),
(927, 282, 'VALMORE RODRIGUEZ'),
(928, 282, 'EL PARAISO'),
(929, 283, 'SANTA ISABEL'),
(930, 283, 'ARAGUANEY'),
(931, 283, 'EL JAGUITO'),
(932, 283, 'LA ESPERANZA'),
(933, 284, 'SABANA GRANDE'),
(934, 284, 'CHEREGUE'),
(935, 284, 'GRANADOS'),
(936, 285, 'EL SOCORRO'),
(937, 285, 'LOS CAPRICHOS'),
(938, 285, 'ANTONIO JOSE DE SUCRE'),
(939, 286, 'CAMPO ELIAS'),
(940, 286, 'ARNOLDO GABALDON'),
(941, 287, 'SANTA APOLONIA'),
(942, 287, 'LA CEIBA'),
(943, 287, 'EL PROGRESO'),
(944, 287, 'TRES DE FEBRERO'),
(945, 288, 'PAMPANITO'),
(946, 288, 'PAMPANITO II'),
(947, 288, 'LA CONCEPCION'),
(948, 289, 'CM. AROA'),
(949, 290, 'CM. CHIVACOA'),
(950, 290, 'CAMPO ELIAS'),
(951, 291, 'CM. NIRGUA'),
(952, 291, 'SALOM'),
(953, 291, 'TEMERLA'),
(954, 292, 'CM. SAN FELIPE'),
(955, 292, 'ALBARICO'),
(956, 292, 'SAN JAVIER'),
(957, 293, 'CM. GUAMA'),
(958, 294, 'CM. URACHICHE'),
(959, 295, 'CM. YARITAGUA'),
(960, 295, 'SAN ANDRES'),
(961, 296, 'CM. SABANA DE PARRA'),
(962, 297, 'CM. BORAURE'),
(963, 298, 'CM. COCOROTE'),
(964, 299, 'CM. INDEPENDENCIA'),
(965, 300, 'CM. SAN PABLO'),
(966, 301, 'CM. YUMARE'),
(967, 302, 'CM. FARRIAR'),
(968, 302, 'EL GUAYABO'),
(969, 303, 'GENERAL URDANETA'),
(970, 303, 'LIBERTADOR'),
(971, 303, 'MANUEL GUANIPA MATOS'),
(972, 303, 'MARCELINO BRICEÑO'),
(973, 303, 'SAN TIMOTEO'),
(974, 303, 'PUEBLO NUEVO'),
(975, 304, 'PEDRO LUCAS URRIBARRI'),
(976, 304, 'SANTA RITA'),
(977, 304, 'JOSE CENOVIO URRIBARR'),
(978, 304, 'EL MENE'),
(979, 305, 'SANTA CRUZ DEL ZULIA'),
(980, 305, 'URRIBARRI'),
(981, 305, 'MORALITO'),
(982, 305, 'SAN CARLOS DEL ZULIA'),
(983, 305, 'SANTA BARBARA'),
(984, 306, 'LUIS DE VICENTE'),
(985, 306, 'RICAURTE'),
(986, 306, 'MONS.MARCOS SERGIO G'),
(987, 306, 'SAN RAFAEL'),
(988, 306, 'LAS PARCELAS'),
(989, 306, 'TAMARE'),
(990, 306, 'LA SIERRITA'),
(991, 307, 'BOLIVAR'),
(992, 307, 'COQUIVACOA'),
(993, 307, 'CRISTO DE ARANZA'),
(994, 307, 'CHIQUINQUIRA'),
(995, 307, 'SANTA LUCIA'),
(996, 307, 'OLEGARIO VILLALOBOS'),
(997, 307, 'JUANA DE AVILA'),
(998, 307, 'CARACCIOLO PARRA PEREZ'),
(999, 307, 'IDELFONZO VASQUEZ'),
(1000, 307, 'CACIQUE MARA'),
(1001, 307, 'CECILIO ACOSTA'),
(1002, 307, 'RAUL LEONI'),
(1003, 307, 'FRANCISCO EUGENIO B'),
(1004, 307, 'MANUEL DAGNINO'),
(1005, 307, 'LUIS HURTADO HIGUERA'),
(1006, 307, 'VENANCIO PULGAR'),
(1007, 307, 'ANTONIO BORJAS ROMERO'),
(1008, 307, 'SAN ISIDRO'),
(1009, 308, 'FARIA'),
(1010, 308, 'SAN ANTONIO'),
(1011, 308, 'ANA MARIA CAMPOS'),
(1012, 308, 'SAN JOSE'),
(1013, 308, 'ALTAGRACIA'),
(1014, 309, 'GOAJIRA'),
(1015, 309, 'ELIAS SANCHEZ RUBIO'),
(1016, 309, 'SINAMAICA'),
(1017, 309, 'ALTA GUAJIRA'),
(1018, 310, 'SAN JOSE DE PERIJA'),
(1019, 310, 'BARTOLOME DE LAS CASAS'),
(1020, 310, 'LIBERTAD'),
(1021, 310, 'RIO NEGRO'),
(1022, 311, 'GIBRALTAR'),
(1023, 311, 'HERAS'),
(1024, 311, 'M.ARTURO CELESTINO A'),
(1025, 311, 'ROMULO GALLEGOS'),
(1026, 311, 'BOBURES'),
(1027, 311, 'EL BATEY'),
(1028, 312, 'ANDRES BELLO (KM 48)'),
(1029, 312, 'POTRERITOS'),
(1030, 312, 'EL CARMELO'),
(1031, 312, 'CHIQUINQUIRA'),
(1032, 312, 'CONCEPCION'),
(1033, 313, 'ELEAZAR LOPEZ C'),
(1034, 313, 'ALONSO DE OJEDA'),
(1035, 313, 'VENEZUELA'),
(1036, 313, 'CAMPO LARA'),
(1037, 313, 'LIBERTAD'),
(1038, 314, 'UDON PEREZ'),
(1039, 314, 'ENCONTRADOS'),
(1040, 315, 'DONALDO GARCIA'),
(1041, 315, 'SIXTO ZAMBRANO'),
(1042, 315, 'EL ROSARIO'),
(1043, 316, 'AMBROSIO'),
(1044, 316, 'GERMAN RIOS LINARES'),
(1045, 316, 'JORGE HERNANDEZ'),
(1046, 316, 'LA ROSA'),
(1047, 316, 'PUNTA GORDA'),
(1048, 316, 'CARMEN HERRERA'),
(1049, 316, 'SAN BENITO'),
(1050, 316, 'ROMULO BETANCOURT'),
(1051, 316, 'ARISTIDES CALVANI'),
(1052, 317, 'RAUL CUENCA'),
(1053, 317, 'LA VICTORIA'),
(1054, 317, 'RAFAEL URDANETA'),
(1055, 318, 'JOSE RAMON YEPEZ'),
(1056, 318, 'LA CONCEPCION'),
(1057, 318, 'SAN JOSE'),
(1058, 318, 'MARIANO PARRA LEON'),
(1059, 319, 'MONAGAS'),
(1060, 319, 'ISLA DE TOAS'),
(1061, 320, 'MARCIAL HERNANDEZ'),
(1062, 320, 'FRANCISCO OCHOA'),
(1063, 320, 'SAN FRANCISCO'),
(1064, 320, 'EL BAJO'),
(1065, 320, 'DOMITILA FLORES'),
(1066, 320, 'LOS CORTIJOS'),
(1067, 321, 'BARI'),
(1068, 321, 'JESUS M SEMPRUN'),
(1069, 322, 'SIMON RODRIGUEZ'),
(1070, 322, 'CARLOS QUEVEDO'),
(1071, 322, 'FRANCISCO J PULGAR'),
(1072, 323, 'RAFAEL MARIA BARALT'),
(1073, 323, 'MANUEL MANRIQUE'),
(1074, 323, 'RAFAEL URDANETA'),
(1075, 324, 'FERNANDO GIRON TOVAR'),
(1076, 324, 'LUIS ALBERTO GOMEZ'),
(1077, 324, 'PARHUEÑA'),
(1078, 324, 'PLATANILLAL'),
(1079, 325, 'CM. SAN FERNANDO DE ATABA'),
(1080, 325, 'UCATA'),
(1081, 325, 'YAPACANA'),
(1082, 325, 'CANAME'),
(1083, 326, 'CM. MAROA'),
(1084, 326, 'VICTORINO'),
(1085, 326, 'COMUNIDAD'),
(1086, 327, 'CM. SAN CARLOS DE RIO NEG'),
(1087, 327, 'SOLANO'),
(1088, 327, 'COCUY'),
(1089, 328, 'CM. ISLA DE RATON'),
(1090, 328, 'SAMARIAPO'),
(1091, 328, 'SIPAPO'),
(1092, 328, 'MUNDUAPO'),
(1093, 328, 'GUAYAPO'),
(1094, 329, 'CM. SAN JUAN DE MANAPIARE'),
(1095, 329, 'ALTO VENTUARI'),
(1096, 329, 'MEDIO VENTUARI'),
(1097, 329, 'BAJO VENTUARI'),
(1098, 330, 'CM. LA ESMERALDA'),
(1099, 330, 'HUACHAMACARE'),
(1100, 330, 'MARAWAKA'),
(1101, 330, 'MAVACA'),
(1102, 330, 'SIERRA PARIMA'),
(1103, 331, 'SAN JOSE'),
(1104, 331, 'VIRGEN DEL VALLE'),
(1105, 331, 'SAN RAFAEL'),
(1106, 331, 'JOSE VIDAL MARCANO'),
(1107, 331, 'LEONARDO RUIZ PINEDA'),
(1108, 331, 'MONS. ARGIMIRO GARCIA'),
(1109, 331, 'MCL.ANTONIO J DE SUCRE'),
(1110, 331, 'JUAN MILLAN'),
(1111, 332, 'PEDERNALES'),
(1112, 332, 'LUIS B PRIETO FIGUERO'),
(1113, 333, 'CURIAPO'),
(1114, 333, 'SANTOS DE ABELGAS'),
(1115, 333, 'MANUEL RENAUD'),
(1116, 333, 'PADRE BARRAL'),
(1117, 333, 'ANICETO LUGO'),
(1118, 333, 'ALMIRANTE LUIS BRION'),
(1119, 334, 'IMATACA'),
(1120, 334, 'ROMULO GALLEGOS'),
(1121, 334, 'JUAN BAUTISTA ARISMEN'),
(1122, 334, 'MANUEL PIAR'),
(1123, 334, '5 DE JULIO'),
(1124, 335, 'CARABALLEDA'),
(1125, 335, 'CARAYACA'),
(1126, 335, 'CARUAO'),
(1127, 335, 'CATIA LA MAR'),
(1128, 335, 'LA GUAIRA'),
(1129, 335, 'MACUTO'),
(1130, 335, 'MAIQUETIA'),
(1131, 335, 'NAIGUATA'),
(1132, 335, 'EL JUNKO'),
(1133, 335, 'PQ RAUL LEONI'),
(1134, 335, 'PQ CARLOS SOUBLETTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p05_municipio`
--

CREATE TABLE IF NOT EXISTS `p05_municipio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `P06_id` int(11) NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_P05_Municipio_P06_Estado1_idx` (`P06_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=336 ;

--
-- Volcado de datos para la tabla `p05_municipio`
--

INSERT INTO `p05_municipio` (`id`, `P06_id`, `Descripcion`) VALUES
(1, 1, 'LIBERTADOR'),
(2, 2, 'ANACO'),
(3, 2, 'ARAGUA'),
(4, 2, 'BOLIVAR'),
(5, 2, 'BRUZUAL'),
(6, 2, 'CAJIGAL'),
(7, 2, 'FREITES'),
(8, 2, 'INDEPENDENCIA'),
(9, 2, 'LIBERTAD'),
(10, 2, 'MIRANDA'),
(11, 2, 'MONAGAS'),
(12, 2, 'PEÑALVER'),
(13, 2, 'SIMON RODRIGUEZ'),
(14, 2, 'SOTILLO'),
(15, 2, 'GUANIPA'),
(16, 2, 'GUANTA'),
(17, 2, 'PIRITU'),
(18, 2, 'M.L/DIEGO BAUTISTA U'),
(19, 2, 'CARVAJAL'),
(20, 2, 'SANTA ANA'),
(21, 2, 'MC GREGOR'),
(22, 2, 'S JUAN CAPISTRANO'),
(23, 3, 'ACHAGUAS'),
(24, 3, 'MUÑOZ'),
(25, 3, 'PAEZ'),
(26, 3, 'PEDRO CAMEJO'),
(27, 3, 'ROMULO GALLEGOS'),
(28, 3, 'SAN FERNANDO'),
(29, 3, 'BIRUACA'),
(30, 4, 'GIRARDOT'),
(31, 4, 'SANTIAGO MARIÑO'),
(32, 4, 'JOSE FELIX RIVAS'),
(33, 4, 'SAN CASIMIRO'),
(34, 4, 'SAN SEBASTIAN'),
(35, 4, 'SUCRE'),
(36, 4, 'URDANETA'),
(37, 4, 'ZAMORA'),
(38, 4, 'LIBERTADOR'),
(39, 4, 'JOSE ANGEL LAMAS'),
(40, 4, 'BOLIVAR'),
(41, 4, 'SANTOS MICHELENA'),
(42, 4, 'MARIO B IRAGORRY'),
(43, 4, 'TOVAR'),
(44, 4, 'CAMATAGUA'),
(45, 4, 'JOSE R REVENGA'),
(46, 4, 'FRANCISCO LINARES A.'),
(47, 4, 'M.OCUMARE D LA COSTA'),
(48, 5, 'ARISMENDI'),
(49, 5, 'BARINAS'),
(50, 5, 'BOLIVAR'),
(51, 5, 'EZEQUIEL ZAMORA'),
(52, 5, 'OBISPOS'),
(53, 5, 'PEDRAZA'),
(54, 5, 'ROJAS'),
(55, 5, 'SOSA'),
(56, 5, 'ALBERTO ARVELO T'),
(57, 5, 'A JOSE DE SUCRE'),
(58, 5, 'CRUZ PAREDES'),
(59, 5, 'ANDRES E. BLANCO'),
(60, 6, 'CARONI'),
(61, 6, 'CEDEÑO'),
(62, 6, 'HERES'),
(63, 6, 'PIAR'),
(64, 6, 'ROSCIO'),
(65, 6, 'SUCRE'),
(66, 6, 'SIFONTES'),
(67, 6, 'RAUL LEONI'),
(68, 6, 'GRAN SABANA'),
(69, 6, 'EL CALLAO'),
(70, 6, 'PADRE PEDRO CHIEN'),
(71, 7, 'BEJUMA'),
(72, 7, 'CARLOS ARVELO'),
(73, 7, 'DIEGO IBARRA'),
(74, 7, 'GUACARA'),
(75, 7, 'MONTALBAN'),
(76, 7, 'JUAN JOSE MORA'),
(77, 7, 'PUERTO CABELLO'),
(78, 7, 'SAN JOAQUIN'),
(79, 7, 'VALENCIA'),
(80, 7, 'MIRANDA'),
(81, 7, 'LOS GUAYOS'),
(82, 7, 'NAGUANAGUA'),
(83, 7, 'SAN DIEGO'),
(84, 7, 'LIBERTADOR'),
(85, 8, 'ANZOATEGUI'),
(86, 8, 'FALCON'),
(87, 8, 'GIRARDOT'),
(88, 8, 'MP PAO SN J BAUTISTA'),
(89, 8, 'RICAURTE'),
(90, 8, 'SAN CARLOS'),
(91, 8, 'TINACO'),
(92, 8, 'LIMA BLANCO'),
(93, 8, 'ROMULO GALLEGOS'),
(94, 9, 'ACOSTA'),
(95, 9, 'BOLIVAR'),
(96, 9, 'BUCHIVACOA'),
(97, 9, 'CARIRUBANA'),
(98, 9, 'COLINA'),
(99, 9, 'DEMOCRACIA'),
(100, 9, 'FALCON'),
(101, 9, 'FEDERACION'),
(102, 9, 'MAUROA'),
(103, 9, 'MIRANDA'),
(104, 9, 'PETIT'),
(105, 9, 'SILVA'),
(106, 9, 'ZAMORA'),
(107, 9, 'DABAJURO'),
(108, 9, 'MONS. ITURRIZA'),
(109, 9, 'LOS TAQUES'),
(110, 9, 'PIRITU'),
(111, 9, 'UNION'),
(112, 9, 'SAN FRANCISCO'),
(113, 9, 'JACURA'),
(114, 9, 'CACIQUE MANAURE'),
(115, 9, 'PALMA SOLA'),
(116, 9, 'SUCRE'),
(117, 9, 'URUMACO'),
(118, 9, 'TOCOPERO'),
(119, 10, 'INFANTE'),
(120, 10, 'MELLADO'),
(121, 10, 'MIRANDA'),
(122, 10, 'MONAGAS'),
(123, 10, 'RIBAS'),
(124, 10, 'ROSCIO'),
(125, 10, 'ZARAZA'),
(126, 10, 'CAMAGUAN'),
(127, 10, 'S JOSE DE GUARIBE'),
(128, 10, 'LAS MERCEDES'),
(129, 10, 'EL SOCORRO'),
(130, 10, 'ORTIZ'),
(131, 10, 'S MARIA DE IPIRE'),
(132, 10, 'CHAGUARAMAS'),
(133, 10, 'SAN GERONIMO DE G'),
(134, 11, 'CRESPO'),
(135, 11, 'IRIBARREN'),
(136, 11, 'JIMENEZ'),
(137, 11, 'MORAN'),
(138, 11, 'PALAVECINO'),
(139, 11, 'TORRES'),
(140, 11, 'URDANETA'),
(141, 11, 'ANDRES E BLANCO'),
(142, 11, 'SIMON PLANAS'),
(143, 12, 'ALBERTO ADRIANI'),
(144, 12, 'ANDRES BELLO'),
(145, 12, 'ARZOBISPO CHACON'),
(146, 12, 'CAMPO ELIAS'),
(147, 12, 'GUARAQUE'),
(148, 12, 'JULIO CESAR SALAS'),
(149, 12, 'JUSTO BRICEÑO'),
(150, 12, 'LIBERTADOR'),
(151, 12, 'SANTOS MARQUINA'),
(152, 12, 'MIRANDA'),
(153, 12, 'ANTONIO PINTO S.'),
(154, 12, 'OB. RAMOS DE LORA'),
(155, 12, 'CARACCIOLO PARRA'),
(156, 12, 'CARDENAL QUINTERO'),
(157, 12, 'PUEBLO LLANO'),
(158, 12, 'RANGEL'),
(159, 12, 'RIVAS DAVILA'),
(160, 12, 'SUCRE'),
(161, 12, 'TOVAR'),
(162, 12, 'TULIO F CORDERO'),
(163, 12, 'PADRE NOGUERA'),
(164, 12, 'ARICAGUA'),
(165, 12, 'ZEA'),
(166, 13, 'ACEVEDO'),
(167, 13, 'BRION'),
(168, 13, 'GUAICAIPURO'),
(169, 13, 'INDEPENDENCIA'),
(170, 13, 'LANDER'),
(171, 13, 'PAEZ'),
(172, 13, 'PAZ CASTILLO'),
(173, 13, 'PLAZA'),
(174, 13, 'SUCRE'),
(175, 13, 'URDANETA'),
(176, 13, 'ZAMORA'),
(177, 13, 'CRISTOBAL ROJAS'),
(178, 13, 'LOS SALIAS'),
(179, 13, 'ANDRES BELLO'),
(180, 13, 'SIMON BOLIVAR'),
(181, 13, 'BARUTA'),
(182, 13, 'CARRIZAL'),
(183, 13, 'CHACAO'),
(184, 13, 'EL HATILLO'),
(185, 13, 'BUROZ'),
(186, 13, 'PEDRO GUAL'),
(187, 14, 'ACOSTA'),
(188, 14, 'BOLIVAR'),
(189, 14, 'CARIPE'),
(190, 14, 'CEDEÑO'),
(191, 14, 'EZEQUIEL ZAMORA'),
(192, 14, 'LIBERTADOR'),
(193, 14, 'MATURIN'),
(194, 14, 'PIAR'),
(195, 14, 'PUNCERES'),
(196, 14, 'SOTILLO'),
(197, 14, 'AGUASAY'),
(198, 14, 'SANTA BARBARA'),
(199, 14, 'URACOA'),
(200, 15, 'ARISMENDI'),
(201, 15, 'DIAZ'),
(202, 15, 'GOMEZ'),
(203, 15, 'MANEIRO'),
(204, 15, 'MARCANO'),
(205, 15, 'MARIÑO'),
(206, 15, 'PENIN. DE MACANAO'),
(207, 15, 'VILLALBA(I.COCHE)'),
(208, 15, 'TUBORES'),
(209, 15, 'ANTOLIN DEL CAMPO'),
(210, 15, 'GARCIA'),
(211, 16, 'ARAURE'),
(212, 16, 'ESTELLER'),
(213, 16, 'GUANARE'),
(214, 16, 'GUANARITO'),
(215, 16, 'OSPINO'),
(216, 16, 'PAEZ'),
(217, 16, 'SUCRE'),
(218, 16, 'TUREN'),
(219, 16, 'M.JOSE V DE UNDA'),
(220, 16, 'AGUA BLANCA'),
(221, 16, 'PAPELON'),
(222, 16, 'GENARO BOCONOITO'),
(223, 16, 'S RAFAEL DE ONOTO'),
(224, 16, 'SANTA ROSALIA'),
(225, 17, 'ARISMENDI'),
(226, 17, 'BENITEZ'),
(227, 17, 'BERMUDEZ'),
(228, 17, 'CAJIGAL'),
(229, 17, 'MARIÑO'),
(230, 17, 'MEJIA'),
(231, 17, 'MONTES'),
(232, 17, 'RIBERO'),
(233, 17, 'SUCRE'),
(234, 17, 'VALDEZ'),
(235, 17, 'ANDRES E BLANCO'),
(236, 17, 'LIBERTADOR'),
(237, 17, 'ANDRES MATA'),
(238, 17, 'BOLIVAR'),
(239, 17, 'CRUZ S ACOSTA'),
(240, 18, 'AYACUCHO'),
(241, 18, 'BOLIVAR'),
(242, 18, 'INDEPENDENCIA'),
(243, 18, 'CARDENAS'),
(244, 18, 'JAUREGUI'),
(245, 18, 'JUNIN'),
(246, 18, 'LOBATERA'),
(247, 18, 'SAN CRISTOBAL'),
(248, 18, 'URIBANTE'),
(249, 18, 'CORDOBA'),
(250, 18, 'GARCIA DE HEVIA'),
(251, 18, 'GUASIMOS'),
(252, 18, 'MICHELENA'),
(253, 18, 'LIBERTADOR'),
(254, 18, 'PANAMERICANO'),
(255, 18, 'PEDRO MARIA UREÑA'),
(256, 18, 'SUCRE'),
(257, 18, 'ANDRES BELLO'),
(258, 18, 'FERNANDEZ FEO'),
(259, 18, 'LIBERTAD'),
(260, 18, 'SAMUEL MALDONADO'),
(261, 18, 'SEBORUCO'),
(262, 18, 'ANTONIO ROMULO C'),
(263, 18, 'FCO DE MIRANDA'),
(264, 18, 'JOSE MARIA VARGA'),
(265, 18, 'RAFAEL URDANETA'),
(266, 18, 'SIMON RODRIGUEZ'),
(267, 18, 'TORBES'),
(268, 18, 'SAN JUDAS TADEO'),
(269, 19, 'RAFAEL RANGEL'),
(270, 19, 'BOCONO'),
(271, 19, 'CARACHE'),
(272, 19, 'ESCUQUE'),
(273, 19, 'TRUJILLO'),
(274, 19, 'URDANETA'),
(275, 19, 'VALERA'),
(276, 19, 'CANDELARIA'),
(277, 19, 'MIRANDA'),
(278, 19, 'MONTE CARMELO'),
(279, 19, 'MOTATAN'),
(280, 19, 'PAMPAN'),
(281, 19, 'S RAFAEL CARVAJAL'),
(282, 19, 'SUCRE'),
(283, 19, 'ANDRES BELLO'),
(284, 19, 'BOLIVAR'),
(285, 19, 'JOSE F M CAÑIZAL'),
(286, 19, 'JUAN V CAMPO ELI'),
(287, 19, 'LA CEIBA'),
(288, 19, 'PAMPANITO'),
(289, 20, 'BOLIVAR'),
(290, 20, 'BRUZUAL'),
(291, 20, 'NIRGUA'),
(292, 20, 'SAN FELIPE'),
(293, 20, 'SUCRE'),
(294, 20, 'URACHICHE'),
(295, 20, 'PEÑA'),
(296, 20, 'JOSE ANTONIO PAEZ'),
(297, 20, 'LA TRINIDAD'),
(298, 20, 'COCOROTE'),
(299, 20, 'INDEPENDENCIA'),
(300, 20, 'ARISTIDES BASTID'),
(301, 20, 'MANUEL MONGE'),
(302, 20, 'VEROES'),
(303, 21, 'BARALT'),
(304, 21, 'SANTA RITA'),
(305, 21, 'COLON'),
(306, 21, 'MARA'),
(307, 21, 'MARACAIBO'),
(308, 21, 'MIRANDA'),
(309, 21, 'PAEZ'),
(310, 21, 'MACHIQUES DE P'),
(311, 21, 'SUCRE'),
(312, 21, 'LA CAÑADA DE U.'),
(313, 21, 'LAGUNILLAS'),
(314, 21, 'CATATUMBO'),
(315, 21, 'M/ROSARIO DE PERIJA'),
(316, 21, 'CABIMAS'),
(317, 21, 'VALMORE RODRIGUEZ'),
(318, 21, 'JESUS E LOSSADA'),
(319, 21, 'ALMIRANTE P'),
(320, 21, 'SAN FRANCISCO'),
(321, 21, 'JESUS M SEMPRUN'),
(322, 21, 'FRANCISCO J PULG'),
(323, 21, 'SIMON BOLIVAR'),
(324, 22, 'ATURES'),
(325, 22, 'ATABAPO'),
(326, 22, 'MAROA'),
(327, 22, 'RIO NEGRO'),
(328, 22, 'AUTANA'),
(329, 22, 'MANAPIARE'),
(330, 22, 'ALTO ORINOCO'),
(331, 23, 'TUCUPITA'),
(332, 23, 'PEDERNALES'),
(333, 23, 'ANTONIO DIAZ'),
(334, 23, 'CASACOIMA'),
(335, 24, 'VARGAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p06_estado`
--

CREATE TABLE IF NOT EXISTS `p06_estado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `P07_id` int(11) NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_P06_Estado_P07_Pais1_idx` (`P07_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `p06_estado`
--

INSERT INTO `p06_estado` (`id`, `P07_id`, `Descripcion`) VALUES
(1, 1, 'DTTO. CAPITAL'),
(2, 1, 'ANZOATEGUI'),
(3, 1, 'APURE'),
(4, 1, 'ARAGUA'),
(5, 1, 'BARINAS'),
(6, 1, 'BOLIVAR'),
(7, 1, 'CARABOBO'),
(8, 1, 'COJEDES'),
(9, 1, 'FALCON'),
(10, 1, 'GUARICO'),
(11, 1, 'LARA'),
(12, 1, 'MERIDA'),
(13, 1, 'MIRANDA'),
(14, 1, 'MONAGAS'),
(15, 1, 'NUEVA ESPARTA'),
(16, 1, 'PORTUGUESA'),
(17, 1, 'SUCRE'),
(18, 1, 'TACHIRA'),
(19, 1, 'TRUJILLO'),
(20, 1, 'YARACUY'),
(21, 1, 'ZULIA'),
(22, 1, 'AMAZONAS'),
(23, 1, 'DELTA AMACURO'),
(24, 1, 'VARGAS'),
(25, 2, 'Huila');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p07_pais`
--

CREATE TABLE IF NOT EXISTS `p07_pais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `p07_pais`
--

INSERT INTO `p07_pais` (`id`, `Descripcion`) VALUES
(1, 'Venezuela'),
(2, 'Colombia'),
(3, 'Ecuador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p08_categoria`
--

CREATE TABLE IF NOT EXISTS `p08_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `p08_categoria`
--

INSERT INTO `p08_categoria` (`id`, `Descripcion`) VALUES
(1, 'Aceptada'),
(2, 'Rechazada'),
(3, 'Nueva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p09_departamento`
--

CREATE TABLE IF NOT EXISTS `p09_departamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `p09_departamento`
--

INSERT INTO `p09_departamento` (`id`, `Nombre`) VALUES
(1, 'Informatica'),
(2, 'Industrial'),
(3, 'Mecanica'),
(4, 'Electronica'),
(5, 'Civil'),
(6, 'Ambiental'),
(7, 'Agronomia'),
(8, 'Produccion Animal'),
(9, 'Arquitectura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p10_eje_curricular`
--

CREATE TABLE IF NOT EXISTS `p10_eje_curricular` (
  `P09_id` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_P10_eje_curricular_p09_departamento_idx` (`P09_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `p10_eje_curricular`
--

INSERT INTO `p10_eje_curricular` (`P09_id`, `id`, `Nombre`) VALUES
(1, 1, 'Sistemas de Informacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p11_conocimientos`
--

CREATE TABLE IF NOT EXISTS `p11_conocimientos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Descripcion` mediumtext,
  `P10_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_p11_conocimientos_P10_eje_curricular1_idx` (`P10_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `p11_conocimientos`
--

INSERT INTO `p11_conocimientos` (`id`, `Nombre`, `Descripcion`, `P10_id`) VALUES
(1, 'Modelado de datos', 'Modelado de datos en diagrama ER', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t01_tesis_has_usuario`
--

CREATE TABLE IF NOT EXISTS `t01_tesis_has_usuario` (
  `M03_id` int(11) NOT NULL,
  `M05_id` int(11) NOT NULL,
  `P02_id` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `fk_Tesis_has_Usuario_Usuario1_idx` (`M05_id`),
  KEY `fk_Tesis_has_Usuario_Tesis1_idx` (`M03_id`),
  KEY `fk_T01_Tesis_has_Usuario_P02_Tipo_Relacion1_idx` (`P02_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `t01_tesis_has_usuario`
--

INSERT INTO `t01_tesis_has_usuario` (`M03_id`, `M05_id`, `P02_id`, `id`) VALUES
(4, 2, 1, 1),
(4, 13, 2, 2),
(4, 13, 4, 3),
(5, 13, 2, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t02_pasantia_has_usuario`
--

CREATE TABLE IF NOT EXISTS `t02_pasantia_has_usuario` (
  `M04_id` int(11) NOT NULL,
  `M05_id` int(11) NOT NULL,
  `M07_id` int(11) NOT NULL,
  `P02_id` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `fk_Pasantia_has_Usuario_Usuario1_idx` (`M05_id`),
  KEY `fk_Pasantia_has_Usuario_Pasantia1_idx` (`M04_id`),
  KEY `fk_Pasantia_has_Usuario_Tutor_externo1_idx` (`M07_id`),
  KEY `fk_Pasantia_has_Usuario_tipo_relacion1_idx` (`P02_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `t02_pasantia_has_usuario`
--

INSERT INTO `t02_pasantia_has_usuario` (`M04_id`, `M05_id`, `M07_id`, `P02_id`, `id`) VALUES
(1, 5, 1, 7, 1),
(1, 13, 1, 2, 2),
(1, 16, 1, 5, 3),
(1, 18, 1, 6, 4),
(2, 11, 1, 2, 5),
(3, 11, 1, 2, 6),
(4, 11, 1, 2, 7),
(5, 11, 1, 2, 8),
(6, 11, 1, 2, 9),
(7, 11, 1, 2, 10),
(8, 33, 1, 2, 11),
(9, 33, 1, 2, 12),
(10, 33, 1, 2, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t03_acta_reunion`
--

CREATE TABLE IF NOT EXISTS `t03_acta_reunion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `M05_id` int(11) NOT NULL,
  `Descripcion` longtext NOT NULL,
  `Fecha` date NOT NULL,
  `Anexo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Bitacora_Usuario1_idx` (`M05_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `t03_acta_reunion`
--

INSERT INTO `t03_acta_reunion` (`id`, `M05_id`, `Descripcion`, `Fecha`, `Anexo`) VALUES
(1, 11, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur iaculis dui tincidunt dictum adipiscing. Integer consequat nulla ac lectus dictum dignissim. Nunc sed lorem lectus. Maecenas tellus mi, faucibus ac laoreet sed, placerat vel lectus. Aliquam felis tellus, commodo vitae congue id, pretium at ipsum. Nulla fringilla vitae dolor ut accumsan. Nullam malesuada, velit eget lacinia interdum, erat turpis congue tortor, vitae hendrerit massa quam at mi. Vivamus porta elit et est malesuada, non varius nisl tincidunt. Vivamus leo mi, scelerisque eget ipsum id, vehicula elementum odio.</p>\r\n<p>Ut non ullamcorper arcu. Suspendisse malesuada, sapien quis fermentum mollis, odio nisi volutpat felis, at faucibus est leo eu mauris. Sed vitae aliquet nisi. Phasellus placerat non felis sit amet elementum. Nulla ut tincidunt lorem. Curabitur gravida orci mauris, vel pharetra ante ultricies eu. Nam quis justo dui. Donec scelerisque eu orci at mollis. Maecenas ligula risus, commodo et sapien semper, hendrerit tincidunt sem. Donec rutrum dapibus sapien, ut dignissim lacus elementum nec. Suspendisse cursus, eros vel venenatis auctor, dui orci lacinia purus, quis malesuada nisi metus at nibh. Suspendisse semper, sem sit amet semper volutpat, quam felis scelerisque quam, eget rutrum augue nisl sit amet dui. Cras ultrices, eros quis scelerisque rhoncus, ipsum tortor imperdiet diam, eu iaculis sem metus a neque. Aliquam varius leo et porta gravida. Cras feugiat, lectus sit amet fringilla ornare, velit mi tempor mi, eget volutpat nibh mi vitae dui.</p>', '2014-02-05', 'introduccionalprocesamientodigitaldeimagenes-090422122720-phpapp02.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t04_conocimiento_tesis`
--

CREATE TABLE IF NOT EXISTS `t04_conocimiento_tesis` (
  `P11_id` int(11) NOT NULL,
  `M03_id` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `fk_t04_conocimiento_tesis_p11_conocimientos1_idx` (`P11_id`),
  KEY `fk_t04_conocimiento_tesis_m03_tesis1_idx` (`M03_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `t04_conocimiento_tesis`
--

INSERT INTO `t04_conocimiento_tesis` (`P11_id`, `M03_id`, `id`) VALUES
(1, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t05_conocimiento_pasantias`
--

CREATE TABLE IF NOT EXISTS `t05_conocimiento_pasantias` (
  `P11_id` int(11) NOT NULL,
  `M04_id` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `fk_t05_conocimiento_pasantias_p11_conocimientos1_idx` (`P11_id`),
  KEY `fk_t05_conocimiento_pasantias_m04_pasantia1_idx` (`M04_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t06_conocimiento_profesor`
--

CREATE TABLE IF NOT EXISTS `t06_conocimiento_profesor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `P11_id` int(11) NOT NULL,
  `M01_d` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_t10_conocimiento_profesor_p11_conocimientos1_idx` (`P11_id`),
  KEY `fk_t10_conocimiento_profesor_m01_profesor1_idx` (`M01_d`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `t06_conocimiento_profesor`
--

INSERT INTO `t06_conocimiento_profesor` (`id`, `P11_id`, `M01_d`) VALUES
(1, 1, 2),
(2, 1, 4),
(3, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t07_observacion_tesis`
--

CREATE TABLE IF NOT EXISTS `t07_observacion_tesis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` text NOT NULL,
  `Fecha` date NOT NULL,
  `M03_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_T06_Observacion_M03_Tesis1_idx` (`M03_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `t07_observacion_tesis`
--

INSERT INTO `t07_observacion_tesis` (`id`, `Descripcion`, `Fecha`, `M03_id`) VALUES
(1, 'Donec nec volutpat tellus. Nulla erat eros, mollis non consequat ac, volutpat vel arcu. Nam fermentum, est ut cursus vestibulum, massa tellus porta turpis, quis congue metus ipsum non massa. Sed urna justo, pharetra sed consequat ut, venenatis nec erat. Aenean lacinia lacus turpis, quis malesuada sapien dapibus sit amet. Duis mauris ante, porta non ligula at, rutrum iaculis orci. Duis tincidunt, massa vitae aliquet molestie, erat sapien pulvinar velit, a laoreet lectus orci eget lorem. Morbi metus est, adipiscing tincidunt turpis quis, gravida rutrum ipsum. Maecenas in tincidunt diam, ac imperdiet justo. Morbi lacinia nisi sapien, pulvinar lobortis purus commodo ut. In non nibh laoreet, ullamcorper orci quis, fringilla nulla. Suspendisse odio dolor, malesuada nec augue eget, condimentum euismod massa. Suspendisse luctus lorem eget elit vestibulum, vel sollicitudin ante tincidunt. ', '2014-06-19', 4),
(2, '<p>bmmhj</p>', '2014-06-30', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t08_usuario_has_rol`
--

CREATE TABLE IF NOT EXISTS `t08_usuario_has_rol` (
  `M05_id` int(11) NOT NULL,
  `P01_id` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `fk_M05_Usuario_has_P01_Rol_P01_Rol1_idx` (`P01_id`),
  KEY `fk_M05_Usuario_has_P01_Rol_M05_Usuario1_idx` (`M05_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `t08_usuario_has_rol`
--

INSERT INTO `t08_usuario_has_rol` (`M05_id`, `P01_id`, `id`) VALUES
(11, 1, 11),
(16, 4, 19),
(17, 5, 20),
(18, 4, 21),
(13, 3, 39),
(13, 5, 40),
(22, 6, 44),
(29, 4, 45),
(30, 4, 46),
(31, 4, 47),
(2, 4, 48),
(32, 2, 49),
(33, 7, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t09_noticias`
--

CREATE TABLE IF NOT EXISTS `t09_noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` text NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Titulo` varchar(255) NOT NULL,
  `M05_id` int(11) NOT NULL,
  `Imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_t09_noticias_m05_usuario1_idx` (`M05_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `t09_noticias`
--

INSERT INTO `t09_noticias` (`id`, `Descripcion`, `Fecha`, `Titulo`, `M05_id`, `Imagen`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur iaculis dui tincidunt dictum adipiscing. Integer consequat nulla ac lectus dictum dignissim. Nunc sed lorem lectus. Maecenas tellus mi, faucibus ac laoreet sed, placerat vel lectus. Aliquam felis tellus, commodo vitae congue id, pretium at ipsum. Nulla fringilla vitae dolor ut accumsan. Nullam malesuada, velit eget lacinia interdum, erat turpis congue tortor, vitae hendrerit massa quam at mi. Vivamus porta elit et est malesuada, non varius nisl tincidunt. Vivamus leo mi, scelerisque eget ipsum id, vehicula elementum odio.</p>\r\n<p>Ut non ullamcorper arcu. Suspendisse malesuada, sapien quis fermentum mollis, odio nisi volutpat felis, at faucibus est leo eu mauris. Sed vitae aliquet nisi. Phasellus placerat non felis sit amet elementum. Nulla ut tincidunt lorem. Curabitur gravida orci mauris, vel pharetra ante ultricies eu. Nam quis justo dui. Donec scelerisque eu orci at mollis. Maecenas ligula risus, commodo et sapien semper, hendrerit tincidunt sem. Donec rutrum dapibus sapien, ut dignissim lacus elementum nec. Suspendisse cursus, eros vel venenatis auctor, dui orci lacinia purus, quis malesuada nisi metus at nibh. Suspendisse semper, sem sit amet semper volutpat, quam felis scelerisque quam, eget rutrum augue nisl sit amet dui. Cras ultrices, eros quis scelerisque rhoncus, ipsum tortor imperdiet diam, eu iaculis sem metus a neque. Aliquam varius leo et porta gravida. Cras feugiat, lectus sit amet fringilla ornare, velit mi tempor mi, eget volutpat nibh mi vitae dui.</p>', '2014-02-04 04:30:00', 'Noticia de Prueba', 11, 'unet710.jpg'),
(2, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur iaculis dui tincidunt dictum adipiscing. Integer consequat nulla ac lectus dictum dignissim. Nunc sed lorem lectus. Maecenas tellus mi, faucibus ac laoreet sed, placerat vel lectus. Aliquam felis tellus, commodo vitae congue id, pretium at ipsum. Nulla fringilla vitae dolor ut accumsan. Nullam malesuada, velit eget lacinia interdum, erat turpis congue tortor, vitae hendrerit massa quam at mi. Vivamus porta elit et est malesuada, non varius nisl tincidunt. Vivamus leo mi, scelerisque eget ipsum id, vehicula elementum odio.</p>\r\n<p>Ut non ullamcorper arcu. Suspendisse malesuada, sapien quis fermentum mollis, odio nisi volutpat felis, at faucibus est leo eu mauris. Sed vitae aliquet nisi. Phasellus placerat non felis sit amet elementum. Nulla ut tincidunt lorem. Curabitur gravida orci mauris, vel pharetra ante ultricies eu. Nam quis justo dui. Donec scelerisque eu orci at mollis. Maecenas ligula risus, commodo et sapien semper, hendrerit tincidunt sem. Donec rutrum dapibus sapien, ut dignissim lacus elementum nec. Suspendisse cursus, eros vel venenatis auctor, dui orci lacinia purus, quis malesuada nisi metus at nibh. Suspendisse semper, sem sit amet semper volutpat, quam felis scelerisque quam, eget rutrum augue nisl sit amet dui. Cras ultrices, eros quis scelerisque rhoncus, ipsum tortor imperdiet diam, eu iaculis sem metus a neque. Aliquam varius leo et porta gravida. Cras feugiat, lectus sit amet fringilla ornare, velit mi tempor mi, eget volutpat nibh mi vitae dui.</p>', '2014-02-04 04:30:00', 'Noticia de Prueba', 11, NULL),
(3, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur iaculis dui tincidunt dictum adipiscing. Integer consequat nulla ac lectus dictum dignissim. Nunc sed lorem lectus. Maecenas tellus mi, faucibus ac laoreet sed, placerat vel lectus. Aliquam felis tellus, commodo vitae congue id, pretium at ipsum. Nulla fringilla vitae dolor ut accumsan. Nullam malesuada, velit eget lacinia interdum, erat turpis congue tortor, vitae hendrerit massa quam at mi. Vivamus porta elit et est malesuada, non varius nisl tincidunt. Vivamus leo mi, scelerisque eget ipsum id, vehicula elementum odio.</p>', '2014-02-05 04:30:00', 'Nueva reunion', 11, NULL),
(4, '<p>ijiososjdoidjso</p>', '2014-07-09 04:30:00', 'prueba X', 22, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t10_observacion_pasantias`
--

CREATE TABLE IF NOT EXISTS `t10_observacion_pasantias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` text NOT NULL,
  `Fecha` date NOT NULL,
  `M04_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_t10_observacion_pasantias_m04_pasantia1_idx` (`M04_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `t10_observacion_pasantias`
--

INSERT INTO `t10_observacion_pasantias` (`id`, `Descripcion`, `Fecha`, `M04_id`) VALUES
(1, ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor dui at vulputate gravida. Donec id hendrerit felis. In hac habitasse platea dictumst. Donec et urna facilisis, adipiscing velit ac, iaculis sapien. Mauris bibendum at dui in tincidunt. Fusce nec leo at augue condimentum fermentum vel non sapien. Donec tempus ligula ac metus aliquet lobortis.\n\nSed non felis neque. Sed et sapien turpis. Vivamus pretium odio at urna tincidunt, non rhoncus diam bibendum. Duis fringilla magna in leo iaculis sodales. Donec neque tortor, pulvinar quis varius eget, laoreet sit amet turpis. Vestibulum pharetra nisl vitae turpis pharetra condimentum. Ut id facilisis mi. Aliquam vitae commodo tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum elementum tellus arcu, non fringilla augue accumsan ut. Curabitur aliquet ornare tellus, eu accumsan diam bibendum eu.\n\nAliquam semper metus et enim vehicula tempor at fermentum ante. Vivamus a eros est. Quisque sapien nibh, malesuada sed convallis faucibus, tempor ut risus. Cras volutpat sed elit at tincidunt. Proin ultricies scelerisque lacus vel tempor. Donec cursus vel est id ornare. Nunc pretium tempor turpis, adipiscing tristique libero elementum sed. Nunc nibh sem, elementum non enim vel, volutpat fermentum tortor. Suspendisse lacinia mauris libero, nec euismod nibh tempor ut. Integer et placerat odio, non eleifend purus. Proin sodales euismod urna nec vehicula. Duis sagittis erat sed ligula bibendum, id pulvinar ante egestas. ', '2014-06-24', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t11_actividad`
--

CREATE TABLE IF NOT EXISTS `t11_actividad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` text NOT NULL,
  `Fecha_inicio` date NOT NULL,
  `Fecha_Fin` date NOT NULL,
  `M02_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_t11_actividad_m02_cronograma1_idx` (`M02_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `t11_actividad`
--

INSERT INTO `t11_actividad` (`id`, `Descripcion`, `Fecha_inicio`, `Fecha_Fin`, `M02_id`) VALUES
(1, 'primera', '2014-02-17', '2014-02-21', 1),
(2, 'segunda', '2014-02-26', '2014-05-14', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t12_plantillas`
--

CREATE TABLE IF NOT EXISTS `t12_plantillas` (
  `id_plantilla` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(120) NOT NULL,
  `contenido` varchar(500) NOT NULL,
  PRIMARY KEY (`id_plantilla`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `t12_plantillas`
--

INSERT INTO `t12_plantillas` (`id_plantilla`, `nombre`, `descripcion`, `contenido`) VALUES
(1, 'Acta de reunión de la comisión', 'Aspectos resaltantes de los acuerdos y debates', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum,Sed ut perspiciatis unde omnis iste natus error sit vo'),
(2, 'Acta de asignación de tutor', 'asignacion de tutor a un trabajo de grado', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum,Sed ut perspiciatis unde omnis iste natus error sit vo');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auth_asignacion`
--
ALTER TABLE `auth_asignacion`
  ADD CONSTRAINT `auth_asignacion_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `auth_items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_relacion`
--
ALTER TABLE `auth_relacion`
  ADD CONSTRAINT `auth_relacion_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_relacion_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `m02_cronograma`
--
ALTER TABLE `m02_cronograma`
  ADD CONSTRAINT `fk_m02_cronograma_m04_pasantia1` FOREIGN KEY (`m04_pasantia_id`) REFERENCES `m04_pasantia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `m03_tesis`
--
ALTER TABLE `m03_tesis`
  ADD CONSTRAINT `fk_m03_tesis_m06_empresa1` FOREIGN KEY (`M06_id`) REFERENCES `m06_empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_m03_tesis_p03_status1` FOREIGN KEY (`P03_id`) REFERENCES `p03_status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `m04_pasantia`
--
ALTER TABLE `m04_pasantia`
  ADD CONSTRAINT `fk_m04_pasantia_p03_status1` FOREIGN KEY (`P03_id`) REFERENCES `p03_status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pasantia_empresa1` FOREIGN KEY (`M06_id`) REFERENCES `m06_empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `m06_empresa`
--
ALTER TABLE `m06_empresa`
  ADD CONSTRAINT `fk_M06_Empresa_P04_Parroquia1` FOREIGN KEY (`P04_id`) REFERENCES `p04_parroquia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_m06_empresa_p05_municipio1` FOREIGN KEY (`P05_id`) REFERENCES `p05_municipio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_m06_empresa_p06_estado1` FOREIGN KEY (`P06_id`) REFERENCES `p06_estado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_M06_Empresa_P07_Categoria1` FOREIGN KEY (`P08_id`) REFERENCES `p08_categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_m06_empresa_p07_pais1` FOREIGN KEY (`P07_id`) REFERENCES `p07_pais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `p04_parroquia`
--
ALTER TABLE `p04_parroquia`
  ADD CONSTRAINT `fk_P04_Parroquia_P05_Municipio1` FOREIGN KEY (`P05_id`) REFERENCES `p05_municipio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `p05_municipio`
--
ALTER TABLE `p05_municipio`
  ADD CONSTRAINT `fk_P05_Municipio_P06_Estado1` FOREIGN KEY (`P06_id`) REFERENCES `p06_estado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `p06_estado`
--
ALTER TABLE `p06_estado`
  ADD CONSTRAINT `fk_P06_Estado_P07_Pais1` FOREIGN KEY (`P07_id`) REFERENCES `p07_pais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `p10_eje_curricular`
--
ALTER TABLE `p10_eje_curricular`
  ADD CONSTRAINT `fk_P10_eje_curricular_p09_departamento` FOREIGN KEY (`P09_id`) REFERENCES `p09_departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `p11_conocimientos`
--
ALTER TABLE `p11_conocimientos`
  ADD CONSTRAINT `fk_p11_conocimientos_P10_eje_curricular1` FOREIGN KEY (`P10_id`) REFERENCES `p10_eje_curricular` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t01_tesis_has_usuario`
--
ALTER TABLE `t01_tesis_has_usuario`
  ADD CONSTRAINT `fk_T01_Tesis_has_Usuario_P02_Tipo_Relacion1` FOREIGN KEY (`P02_id`) REFERENCES `p02_tipo_relacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Tesis_has_Usuario_Tesis1` FOREIGN KEY (`M03_id`) REFERENCES `m03_tesis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Tesis_has_Usuario_Usuario1` FOREIGN KEY (`M05_id`) REFERENCES `m05_usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t02_pasantia_has_usuario`
--
ALTER TABLE `t02_pasantia_has_usuario`
  ADD CONSTRAINT `fk_Pasantia_has_Usuario_Pasantia1` FOREIGN KEY (`M04_id`) REFERENCES `m04_pasantia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pasantia_has_Usuario_tipo_relacion1` FOREIGN KEY (`P02_id`) REFERENCES `p02_tipo_relacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pasantia_has_Usuario_Tutor_externo1` FOREIGN KEY (`M07_id`) REFERENCES `m07_tutor_externo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pasantia_has_Usuario_Usuario1` FOREIGN KEY (`M05_id`) REFERENCES `m05_usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t03_acta_reunion`
--
ALTER TABLE `t03_acta_reunion`
  ADD CONSTRAINT `fk_Bitacora_Usuario1` FOREIGN KEY (`M05_id`) REFERENCES `m05_usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t04_conocimiento_tesis`
--
ALTER TABLE `t04_conocimiento_tesis`
  ADD CONSTRAINT `fk_t04_conocimiento_tesis_m03_tesis1` FOREIGN KEY (`M03_id`) REFERENCES `m03_tesis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_t04_conocimiento_tesis_p11_conocimientos1` FOREIGN KEY (`P11_id`) REFERENCES `p11_conocimientos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t05_conocimiento_pasantias`
--
ALTER TABLE `t05_conocimiento_pasantias`
  ADD CONSTRAINT `fk_t05_conocimiento_pasantias_m04_pasantia1` FOREIGN KEY (`M04_id`) REFERENCES `m04_pasantia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_t05_conocimiento_pasantias_p11_conocimientos1` FOREIGN KEY (`P11_id`) REFERENCES `p11_conocimientos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t06_conocimiento_profesor`
--
ALTER TABLE `t06_conocimiento_profesor`
  ADD CONSTRAINT `fk_t10_conocimiento_profesor_m01_profesor1` FOREIGN KEY (`M01_d`) REFERENCES `m01_profesor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_t10_conocimiento_profesor_p11_conocimientos1` FOREIGN KEY (`P11_id`) REFERENCES `p11_conocimientos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t07_observacion_tesis`
--
ALTER TABLE `t07_observacion_tesis`
  ADD CONSTRAINT `fk_T06_Observacion_M03_Tesis1` FOREIGN KEY (`M03_id`) REFERENCES `m03_tesis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t08_usuario_has_rol`
--
ALTER TABLE `t08_usuario_has_rol`
  ADD CONSTRAINT `fk_M05_Usuario_has_P01_Rol_M05_Usuario1` FOREIGN KEY (`M05_id`) REFERENCES `m05_usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_M05_Usuario_has_P01_Rol_P01_Rol1` FOREIGN KEY (`P01_id`) REFERENCES `p01_rol` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t09_noticias`
--
ALTER TABLE `t09_noticias`
  ADD CONSTRAINT `fk_t09_noticias_m05_usuario1` FOREIGN KEY (`M05_id`) REFERENCES `m05_usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t10_observacion_pasantias`
--
ALTER TABLE `t10_observacion_pasantias`
  ADD CONSTRAINT `fk_t10_observacion_pasantias_m04_pasantia1` FOREIGN KEY (`M04_id`) REFERENCES `m04_pasantia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t11_actividad`
--
ALTER TABLE `t11_actividad`
  ADD CONSTRAINT `fk_t11_actividad_m02_cronograma1` FOREIGN KEY (`M02_id`) REFERENCES `m02_cronograma` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
