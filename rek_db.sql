-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Lut 2022, 22:22
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `rek_db`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `article`
--

INSERT INTO `article` (`id`, `category_id`, `title`, `description`, `status`) VALUES
(1, 0, 'title 1e', 'description 2e', 1),
(3, 0, 'test 5', 'desc 7', 1),
(4, 0, 'nowy tytuł', 'nowy tytuł', 1),
(5, 0, 'nowy tytuł', 'nowy tytuł', 1),
(6, 0, '1111111111', '22222222222', 1),
(7, 0, '1111111111', '22222222222', 1),
(8, 0, '777777777', '7777777777777', 1),
(9, 0, '77777777712', '777777777777712', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hashPassword` varchar(255) NOT NULL,
  `hashLogged` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `login`, `email`, `hashPassword`, `hashLogged`) VALUES
(1, 'test', 'test@wp.pl', '$2y$10$QtXEaRDf2QCvdn1DudeaneGd1ha3xGKWjKi5KdZWx4BDUSVqqR8E.', ''),
(2, 'test', 'test@wp.pl', '$2y$10$xIovMQoN/f0zD9jq.Qif.OxlY6ddELorbe7RYkC.oWtW/w./WNy32', ''),
(3, 'test2', 'test2@wp.pl', '$2y$10$WJRrHVoeg188/6SDOpMsxepnWKoTdVNqB.EYo71mlrJ/SaWx38dvS', '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
