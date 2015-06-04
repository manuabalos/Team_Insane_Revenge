-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-02-2014 a las 12:05:27
-- Versión del servidor: 5.6.11
-- Versión de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tminsanerevenge`
--
CREATE DATABASE IF NOT EXISTS `a1538638_tmir` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `a1538638_tmir`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logros`
--

CREATE TABLE IF NOT EXISTS `logros` (
  `LogroID` int(11) NOT NULL,
  `LogroNombreTorneo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `LogroNombreGanador` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `LogroPosicion` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `LogroFecha` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `LogroEnlace` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`LogroID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembros`
--

CREATE TABLE IF NOT EXISTS `miembros` (
  `MiembrosID` int(11) NOT NULL,
  `MiembrosNick` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `MiembrosCodigo` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `MiembrosRaza` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `MiembrosLiga` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `MiembrosTwitchTV` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `MiembrosTwitter` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`MiembrosID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `miembros`
--

INSERT INTO `miembros` (`MiembrosID`, `MiembrosNick`, `MiembrosCodigo`, `MiembrosRaza`, `MiembrosLiga`, `MiembrosTwitchTV`, `MiembrosTwitter`) VALUES
(1, 'Silent', '729', '4 Random', '4 Platino', 'ProGamerSilent', 'ProGamerSilent'),
(2, 'TheGame', '851', '2 Protoss', '5 Oro', 'danithegame', 'TmiR_Thegame'),
(4, 'Lunah', '281', '1 Terran', '5 Oro', 'lunahdawn', 'TmIR_Lunah'),
(7, 'Petusa', '', '4 Random', '5 Oro', '', ''),
(8, 'Malakaraconk', '206', '1 Terran', '5 Oro', '', ''),
(9, 'Losi', '330', '4 Random', '7 Bronce', '', ''),
(10, 'Incre', '391', '3 Zerg', '5 Oro', '', ''),
(11, 'Gustavo', '', '2 Protoss', '4 Platino', '', ''),
(12, 'Citry', '', '1 Terran', '5 Oro', 'citry', 'citry'),
(13, 'YoyoJr', '', '3 Zerg', '5 Oro', '', ''),
(14, 'Webon', '818', '1 Terran', '5 Oro', '', ''),
(15, 'Tuff', '', '2 Protoss', '6 Plata', '', ''),
(16, 'Supersonic', '', '2 Protoss', '3 Diamante', '', ''),
(17, 'Shousano', '', '3 Zerg', '3 Diamante', '', ''),
(18, 'Shinjiro', '', '2 Protoss', '6 Plata', '', ''),
(19, 'Rammsfield', '720', '3 Zerg', '5 Oro', 'isioling', 'isioling'),
(20, 'Papercut', '', '3 Zerg', '5 Oro', '', ''),
(21, 'Pablo', '', '1 Terran', '6 Plata', '', ''),
(22, 'Ozbrock', '', '3 Zerg', '7 Bronce', '', ''),
(23, 'NorthernHawk', '281', '2 Protoss', '5 Oro', '', ''),
(24, 'Neme', '375', '1 Terran', '4 Platino', '', ''),
(25, 'McJaitorOC', '222', '3 Zerg', '3 Diamante', '', ''),
(26, 'Magaki', '', '3 Zerg', '6 Plata', '', ''),
(27, 'Magnum', '288', '2 Protoss', '7 Bronce', '', ''),
(28, 'Loopez', '786', '2 Protoss', '6 Plata', '', ''),
(29, 'Liken', '592', '2 Protoss', '5 Oro', '', ''),
(30, 'Kuroudo', '', '1 Terran', '8 Sin clasificar', '', ''),
(31, 'KillemAll', '678', '3 Zerg', '3 Diamante', 'therealkillemall', 'pabloscf'),
(32, 'Jandro', '950', '1 Terran', '5 Oro', '', ''),
(33, 'Hollow', '', '2 Protoss', '6 Plata', '', ''),
(34, 'Gabba', '403', '3 Zerg', '4 Platino', '', ''),
(35, 'Flemillas', '106', '2 Protoss', '5 Oro', '', ''),
(36, 'Favio', '942', '1 Terran', '4 Platino', '', ''),
(37, 'Excen', '691', '3 Zerg', '5 Oro', '', ''),
(38, 'Drizzt', '172', '2 Protoss', '8 Sin clasificar', '', ''),
(39, 'Destruktor', '', '3 Zerg', '4 Platino', '', ''),
(40, 'Dav', '544', '2 Protoss', '5 Oro', 'dpezo', 'davinson_pezo'),
(41, 'Chori', '310', '3 Zerg', '6 Plata', 'Chorisc2', 'TmIR_ChoriSC2'),
(42, 'Carnage', '946', '3 Zerg', '6 Plata', '', ''),
(43, 'BlueKiwi', '852', '2 Protoss', '3 Diamante', '', ''),
(44, 'BlackBass', '', '1 Terran', '6 Plata', '', ''),
(45, 'Binks', '366', '2 Protoss', '4 Platino', '', ''),
(46, 'Beirao', '148', '2 Protoss', '5 Oro', '', ''),
(47, 'Atrevate', '702', '2 Protoss', '5 Oro', '', ''),
(48, 'XxMrNicoxX', '313', '3 Zerg', '7 Bronce', '', 'XxMrNicoxX');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `NoticiaID` int(11) NOT NULL,
  `NoticiaTitulo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `NoticiaTexto` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `NoticiaImagen` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `NoticiaFecha` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`NoticiaID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`NoticiaID`, `NoticiaTitulo`, `NoticiaTexto`, `NoticiaImagen`, `NoticiaFecha`) VALUES
(1, 'Bienvenidos a la web de Team Insane Revenge', 'Os presentamos la web del equipo ''Team Insane Revenge''. Bienvenidos a esta comunidad, y esperamos que disfruteis de vuestra estancia junto al resto de los miembros y organizadores del clan.', 'Noticia1.jpg', '12/02/2014'),
(2, '1&ordm; Edici&oacute;n del torneo ''Revenge Tournament''', 'Toda informaci&oacute;n respecto al torneo y su funcionamiento, inscripci&oacute;n, reglas, etc. lo pod&eacute;is encontrar en el secci&oacute;n ''Torneos'' de la web.<br>\r\n\r\n<b><u>Plazo m&aacute;ximo de inscripci&oacute;n</u></b>: 2 de Marzo del 2014. (inclusive)<br>\r\n<b><u>Fecha de inicio del torneo</u></b>: 3 de Marzo del 2014.', 'Noticia2.jpg', '16/02/2014');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `StaffID` int(11) NOT NULL,
  `StaffNick` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `StaffCodigo` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `StaffRango` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`StaffID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `staff`
--

INSERT INTO `staff` (`StaffID`, `StaffNick`, `StaffCodigo`, `StaffRango`) VALUES
(1, 'Silent', '729', 'Lider del clan y Dise&ntilde;ador web'),
(2, 'Lunah', '281', 'Oficial del clan en Starcraft II'),
(3, 'TheGame', '851', 'Oficial del clan en Starcraft II');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
