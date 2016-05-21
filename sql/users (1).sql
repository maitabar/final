-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Фев 26 2014 г., 15:39
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `inform_project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(6, '123', '202cb962ac59075b964b07152d234b70'),
(7, 'Asset', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'test@mail.ru', '202cb962ac59075b964b07152d234b70'),
(8, 'niyazbichert', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'e.nagmetulla@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'tima', '11111'),
(11, 'errt', '68053af2923e00204c3ca7c6a3150cf7'),
(12, 'ert', '68053af2923e00204c3ca7c6a3150cf7'),
(13, 'ertty', '68053af2923e00204c3ca7c6a3150cf7'),
(14, 'errrrt', '250cf8b51c773f3f8dc8b4be867a9a02'),
(15, 'akalek', 'f2b7b33159e04b095c45f3378ffe2ec1'),
(16, 'ыузясчльж', '827ccb0eea8a706c4c34a16891f84e7b'),
(17, 'ter', '322650e1328739dbca646008305dd95e'),
(18, 'teen', '3ecffdcbbb3dcefa527942795f05e885'),
(19, 'auruka', 'a31fad77123744158af5f33f5bf3b201');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
