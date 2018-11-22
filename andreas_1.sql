-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 28 2017 г., 06:35
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `andreas`
--

-- --------------------------------------------------------

--
-- Структура таблицы `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(32) CHARACTER SET cp1251 COLLATE cp1251_bin NOT NULL,
  `Password` varchar(32) CHARACTER SET cp1251 COLLATE cp1251_bin NOT NULL,
  `Level` int(11) NOT NULL,
  `Exp` int(11) NOT NULL,
  `Cash` int(11) NOT NULL,
  `Warn` int(11) NOT NULL,
  `Bank` int(11) NOT NULL,
  `Online` int(11) NOT NULL,
  `Ban` int(11) NOT NULL,
  `LastDate` varchar(32) NOT NULL,
  `skill1` int(11) NOT NULL,
  `skill2` int(11) NOT NULL,
  `skill3` int(11) NOT NULL,
  `skill4` int(11) NOT NULL,
  `skill5` int(11) NOT NULL,
  `skill6` int(11) NOT NULL,
  `Leader` int(11) NOT NULL,
  `Member` int(11) NOT NULL,
  `Rang` int(11) NOT NULL,
  `Donate` int(11) NOT NULL,
  `Skin` int(11) NOT NULL,
  `Car` int(11) NOT NULL,
  `House` int(11) NOT NULL,
  `Biz` int(11) NOT NULL,
  `Number` int(11) NOT NULL,
  `Pcash` int(11) NOT NULL,
  `Job` int(11) NOT NULL,
  `Sex` int(11) NOT NULL DEFAULT '1',
  `mail` varchar(64) NOT NULL,
  `Admin` int(11) NOT NULL,
  `Drugs` int(11) NOT NULL,
  `lic1` int(11) NOT NULL,
  `lic2` int(11) NOT NULL,
  `lic3` int(11) NOT NULL,
  `lic4` int(11) NOT NULL,
  `lic5` int(11) NOT NULL,
  `wanted` int(11) NOT NULL,
  `getadmin` varchar(32) NOT NULL,
  `dataadmin` varchar(64) NOT NULL,
  `subnetreg` varchar(8) NOT NULL,
  `ipvhod` varchar(16) NOT NULL,
  `datareg` varchar(64) NOT NULL,
  `ipreg` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23534 ;

--
-- Дамп данных таблицы `account`
--

INSERT INTO `account` (`id`, `Name`, `Password`, `Level`, `Exp`, `Cash`, `Warn`, `Bank`, `Online`, `Ban`, `LastDate`, `skill1`, `skill2`, `skill3`, `skill4`, `skill5`, `skill6`, `Leader`, `Member`, `Rang`, `Donate`, `Skin`, `Car`, `House`, `Biz`, `Number`, `Pcash`, `Job`, `Sex`, `mail`, `Admin`, `Drugs`, `lic1`, `lic2`, `lic3`, `lic4`, `lic5`, `wanted`, `getadmin`, `dataadmin`, `subnetreg`, `ipvhod`, `datareg`, `ipreg`) VALUES
(23213, 'Andreas_Moore', '123qwe', 3, 9, 3077804, 2, 890032, 0, 332, '18/04/2017', 100, 89, 50, 0, 10, 1, 1, 1, 2, 9023, 299, 462, 1234, 32, 99949, 1000, 1, 0, 'mailkr4@gmail.com', 3, 100, 1, 0, 1, 0, 0, 4, 'System', '24.04.2017', '13.902', '13.902.31.31', '23.04.2017', '8.3.2.13.3'),
(23533, 'Alex_Cassio', '123123', 32, 321, 0, 0, 0, 0, 0, '18/04/2017', 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, '', 0, 0, 0, 0, 0, 0, 0, 0, 'Andreas_Moore', '24.04.2017', '98.312', '98.312.2.134', '23.04.2017', '32.31.23.12');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Text` varchar(2000) NOT NULL,
  `Date` varchar(40) NOT NULL,
  `title` varchar(120) NOT NULL,
  `Dev` varchar(32) NOT NULL,
  `img` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `Text`, `Date`, `title`, `Dev`, `img`) VALUES
(6, 'Описание новости', '27.04.2017 / 16:20', 'Тестовое название', 'Andreas_Moore', '/classes/img/news/news1.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
