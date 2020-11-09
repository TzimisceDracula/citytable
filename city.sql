-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Ноя 02 2020 г., 12:52
-- Версия сервера: 10.3.18-MariaDB
-- Версия PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `id15278119_cities`
--

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `preview` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`id`, `name`, `photo`, `preview`) VALUES
(1, 'Иркутск', 'img/gallery-img-01.jpg', 'img/gallery-img-01-tn.jpg'),
(2, 'Ангарск', 'img/gallery-img-02.jpg', 'img/gallery-img-02-tn.jpg'),
(3, 'Новосибирск', '/img/gallery/gallery-img-05.jpg', '/img/gallery/gallery-img-05-tn.jpg'),
(4, 'Шелехов', '/img/gallery/gallery-img-03.jpg', '/img/gallery/gallery-img-03-tn.jpg'),
(5, 'Братск', '/img/gallery/gallery-img-04.jpg', '/img/gallery/gallery-img-04-tn.jpg'),
(6, 'Санкт-Петербург', '/img/gallery/gallery-img-06.jpg', '/img/gallery/gallery-img-06-tn.jpg'),
(13, 'Новосибирск', '/img/gallery/gallery-img-05.jpg', '/img/gallery/gallery-img-05-tn.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
