-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 25 2014 г., 13:05
-- Версия сервера: 5.5.37-log
-- Версия PHP: 5.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `crafter`
--

-- --------------------------------------------------------

--
-- Структура таблицы `options`
--

CREATE TABLE IF NOT EXISTS `options` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `options`
--

INSERT INTO `options` (`id`, `title`, `name`, `value`) VALUES
(1, 'course', 'Курс доллара', '10'),
(2, 'email', 'Контактный Email', 'test@mail.com'),
(3, 'pagination', 'Кол-во товаров на страницу', '3'),
(4, 'site_title', 'Название сайта', 'CrafterUkraine: гитары и аксессуары'),
(5, 'pagination_search', 'Кол-во товаров на странице поиска', '4'),
(6, 'pagination_last_news', 'Кол-во последних новостей в новостной ленте', '3'),
(7, 'pagination_news', 'Кол-во новостей на страницу', '3'),
(8, 'pagination_admin', 'Кол-во товаров на страницу в админке', '5'),
(9, 'pagination_admin_news', 'Кол-во новостей на страницу в админке', '3'),
(10, 'pagination_orders', 'Кол-во заказов на страницу', '3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
