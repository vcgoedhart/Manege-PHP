-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 04 jun 2019 om 05:10
-- Serverversie: 5.6.37
-- PHP-versie: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manege`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `adres` varchar(50) NOT NULL,
  `postal_code` varchar(7) NOT NULL,
  `town` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `customer`
--

INSERT INTO `customer` (`id`, `name`, `adres`, `postal_code`, `town`, `phone`, `email`) VALUES
(4, 'Vincent Goedhart', 'Klaproosstraat 16', '4411BB', 'Alblasserdam', '647448569', 'vcgoedhart@hotmail.com'),
(5, '452w34214', 'Waalsmondelaan 56', '2951AW', 'Alblasserdam', 'sgfgdhd', 'vcgoedhart@hotmail.com'),
(6, 'Adolf Hitler', 'Berlin 69', '420BL', 'Berliner worst', '69069699', 'Recruit.NSDAP@Berliner.worst');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `horse`
--

CREATE TABLE IF NOT EXISTS `horse` (
  `id` int(11) NOT NULL,
  `race_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `horse`
--

INSERT INTO `horse` (`id`, `race_id`, `name`, `age`) VALUES
(13, 18, 'Belle Delphine', 19),
(15, 21, 'Michael Jackson', 11),
(16, 20, 'WALL-E', 14),
(17, 22, 'Hans Krueller', 39);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `race`
--

CREATE TABLE IF NOT EXISTS `race` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `height` decimal(4,1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `race`
--

INSERT INTO `race` (`id`, `name`, `height`) VALUES
(18, 'Aziatische Gaagie', '152.6'),
(20, 'Groene Huisman', '182.7'),
(21, 'Madronal Shepherd', '5.1'),
(22, 'NSB', '690.0');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `horse_id` int(11) NOT NULL,
  `start_time` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `reservation`
--

INSERT INTO `reservation` (`id`, `customer_id`, `horse_id`, `start_time`) VALUES
(38, 5, 15, '10:01:00'),
(39, 4, 13, '09:20:00'),
(40, 6, 17, '04:20:00'),
(41, 4, 13, '08:09:00');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `horse`
--
ALTER TABLE `horse`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `race`
--
ALTER TABLE `race`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT voor een tabel `horse`
--
ALTER TABLE `horse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT voor een tabel `race`
--
ALTER TABLE `race`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT voor een tabel `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
