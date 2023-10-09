-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Gegenereerd op: 25 sep 2023 om 12:19
-- Serverversie: 8.1.0
-- PHP-versie: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Demaasvalei`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `testcollom`
--

CREATE TABLE `testcollom` (
  `id` int NOT NULL,
  `title` text NOT NULL,
  `blog` text NOT NULL,
  `jemoeder` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `testcollom`
--

INSERT INTO `testcollom` (`id`, `title`, `blog`, `jemoeder`) VALUES
(1, 'test', 'testing this option', 'THICK');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `testcollom`
--
ALTER TABLE `testcollom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `testcollom`
--
ALTER TABLE `testcollom`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
