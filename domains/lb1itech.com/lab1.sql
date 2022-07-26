-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 06 2022 г., 20:09
-- Версия сервера: 10.4.21-MariaDB
-- Версия PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lab1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `game`
--

CREATE TABLE `game` (
  `ID_GAME` int(10) NOT NULL,
  `date` date NOT NULL,
  `place` text NOT NULL,
  `score` text NOT NULL,
  `FID_TEAM1` int(10) NOT NULL,
  `FID_TEAM2` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `game`
--

INSERT INTO `game` (`ID_GAME`, `date`, `place`, `score`, `FID_TEAM1`, `FID_TEAM2`) VALUES
(1, '1999-10-19', 'Kharkiv', '2-0', 1, 2),
(2, '1999-10-30', 'Kyiv', '2-0', 3, 6),
(3, '1999-10-20', 'Lviv', '0-0', 5, 2),
(4, '1999-10-21', 'Odessa', '2-2', 7, 8),
(5, '1999-10-23', 'Don', '1-1', 1, 4),
(6, '1999-10-24', 'Kharkiv', '1-1', 2, 3),
(7, '1999-10-25', 'Kyiv', '0-1', 5, 3),
(8, '1999-10-26', 'Chernigov', '4-1', 6, 8),
(9, '1999-10-28', 'Kruvui-Rig', '3-3', 5, 7),
(10, '1999-10-29', 'Hgutomir', '4-1', 1, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `player`
--

CREATE TABLE `player` (
  `ID_PLAYER` int(10) NOT NULL,
  `name` text NOT NULL,
  `FID_TEAM` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `player`
--

INSERT INTO `player` (`ID_PLAYER`, `name`, `FID_TEAM`) VALUES
(1, 'Pinkie Pie', 1),
(2, 'Fluttershy', 1),
(3, 'Twilight Sparkle', 1),
(4, 'Rarity', 1),
(5, 'Applejack', 1),
(6, 'Princess Celestia', 1),
(7, 'Rainbow Dash', 1),
(8, 'Patrick Star', 2),
(9, 'Sponge Bob', 2),
(10, 'Squidward', 2),
(11, 'Mr. Crabs', 2),
(12, 'Sandy Cheeks', 2),
(13, 'Plankton', 2),
(14, 'Naruto Uzumaki', 3),
(15, 'Sasuke Uchiha', 3),
(16, 'Madara Uchiha', 3),
(17, 'Kakashi Hatake', 3),
(18, 'Sakura Haruno', 3),
(19, 'Nagato', 3),
(20, 'Shi TT', 4),
(21, 'Aaaaaa Kkkkk', 4),
(22, 'Llllll Llllll', 4),
(23, 'Jhon jjjjj', 4),
(24, 'Ööööö ööööö', 4),
(25, 'Name Nameson', 5),
(26, 'Roberto Baker', 5),
(27, 'Jack Perez', 5),
(28, 'Isaak Moore', 5),
(29, 'Braden Edwards', 5),
(30, 'Zeke Ross', 5),
(31, 'Warren Morris', 6),
(32, 'Yehuda Green', 6),
(33, 'Patton Evans', 6),
(34, 'Malik Rodriguez', 6),
(35, 'Westley Ward', 6),
(36, 'Immanuel Young', 6),
(37, 'Zain White', 7),
(38, 'Ryland Simmons', 7),
(39, 'Wyatt Bennett', 7),
(40, 'Jesus Carter', 7),
(41, 'Shepherd Johnson', 7),
(42, 'Iver Martinez', 7),
(43, 'Jose Lee', 8),
(44, 'Patricio Foster', 8),
(45, 'Floyd Brown', 8),
(46, 'Ace Cox', 8),
(47, 'Kian Clark', 8),
(48, 'Gunnar Bailey', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `team`
--

CREATE TABLE `team` (
  `ID_TEAM` int(10) NOT NULL,
  `name` text NOT NULL,
  `LEAGUE` text NOT NULL,
  `coach` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `team`
--

INSERT INTO `team` (`ID_TEAM`, `name`, `LEAGUE`, `coach`) VALUES
(1, 'Real Madrid', 'La Liga', 'Name Nameson'),
(2, 'FC Barcelona', 'Premier League', 'John Johnson'),
(3, 'Manchester United', 'Bundesliga', 'Peter Parker'),
(4, 'Bayern Munich', 'Bundesliga', 'Karl Karslon'),
(5, 'Liverpool', 'La Liga', 'Christopher Pol'),
(6, 'Chelsea', 'Premier League', 'Zain Zainson'),
(7, 'Juventus', 'Seria A', 'Todrick Hall'),
(8, 'Paris Saint', 'Seria A', 'Goton Gotomson');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`ID_GAME`);

--
-- Индексы таблицы `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`ID_PLAYER`);

--
-- Индексы таблицы `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`ID_TEAM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
