-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 03 2018 г., 00:17
-- Версия сервера: 10.1.30-MariaDB
-- Версия PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fitguide`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contact_us`
--

CREATE TABLE `contact_us` (
  `id_comment` int(11) NOT NULL,
  `name_visitor` varchar(15) NOT NULL,
  `email_visitor` varchar(20) NOT NULL,
  `comment_visitor` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contact_us`
--

INSERT INTO `contact_us` (`id_comment`, `name_visitor`, `email_visitor`, `comment_visitor`) VALUES
(1, 'Firstvisitor', 'firstvisitor@test.co', 'This is first message');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id_comment`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
