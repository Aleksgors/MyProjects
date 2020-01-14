-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 13 2020 г., 21:51
-- Версия сервера: 10.4.8-MariaDB
-- Версия PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `efftechlibrary`
--

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`authorId`, `authorName`) VALUES
(1, 'Циклин'),
(2, 'Инкрементин'),
(3, 'Объектин'),
(4, 'Горшков'),
(5, 'Ульянов'),
(6, 'Агапов'),
(7, 'Антипин'),
(8, 'Строгин');

--
-- Дамп данных таблицы `authorships`
--

INSERT INTO `authorships` (`athorshipId`, `authorId`, `bookId`) VALUES
(1, 4, 1),
(2, 1, 8),
(3, 3, 3),
(4, 5, 3),
(5, 8, 3),
(6, 5, 4),
(7, 7, 6),
(8, 1, 15),
(9, 2, 7),
(10, 8, 9),
(11, 6, 13),
(12, 1, 4),
(13, 1, 2),
(14, 1, 5),
(15, 1, 10),
(16, 1, 11),
(17, 1, 12),
(18, 1, 14),
(19, 2, 8);

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`bookId`, `bookName`) VALUES
(1, 'Как я стал стажером'),
(2, 'Время-деньги?'),
(3, 'Тысяча и одна ночь PHP'),
(4, 'Свет в конце туррели'),
(5, 'Раз на раз'),
(6, 'Где мои семнадцать лет'),
(7, 'Реакт для чайников, Аякс для души'),
(8, 'Война или мир'),
(9, 'Как я язык укрощал'),
(10, 'Как назвать книгу'),
(11, 'Фантазия и ее границы'),
(12, 'Нет худа без добра'),
(13, 'Всё о вдохновении'),
(14, 'Читай или умри'),
(15, 'Как найти чувство юмора');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
