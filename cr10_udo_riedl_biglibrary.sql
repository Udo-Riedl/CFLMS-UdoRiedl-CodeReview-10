-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 18. Jul 2020 um 15:58
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_udo_riedl_biglibrary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `product` enum('book','dvd','cd') NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `author_regisseur_band` enum('Author','Regisseur','Band') NOT NULL,
  `name_title` varchar(100) NOT NULL,
  `isbn` int(20) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `published` date NOT NULL,
  `publisher_studio_lable` enum('publisher','studio','lable') DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `size` enum('big','medium','independent') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`media_id`, `product`, `title`, `img`, `author_regisseur_band`, `name_title`, `isbn`, `description`, `published`, `publisher_studio_lable`, `name`, `adress`, `size`) VALUES
(12, 'dvd', 'Test', '', 'Regisseur', 'Rob Zombie', 0, 'Ein Test', '2020-07-13', 'studio', 'Test Studio', 'Straße', 'independent'),
(13, 'book', 'A Title', 'keines', 'Author', 'Jessica Fletcher', 21436587, 'a description', '2020-07-17', 'publisher', 'Name', 'A Street, in a City', 'medium'),
(14, 'book', 'B Title', 'keines', 'Author', 'Jessica Fletcher', 43215678, 'a description', '2020-07-16', 'publisher', 'B Publisher', 'A Street, in a City', 'medium'),
(15, 'book', 'C Title', 'keines', 'Author', 'Jessica Fletcher', 43215678, 'a description', '2020-07-16', 'publisher', 'C Publisher', 'A Street, in a City', 'independent'),
(18, 'dvd', 'A Killer', 'keines', 'Regisseur', 'Rob Zombie', 0, 'a description', '2020-07-18', 'studio', 'Z Studios', 'A Street, in a City', 'independent'),
(19, 'dvd', 'B Killer', 'keines', 'Regisseur', 'Rob Zombie', 0, 'a description', '2020-07-16', 'studio', 'Z Studios', 'A Street, in a City', 'big'),
(20, 'cd', 'Rock', 'keines', '', 'Rock Song 1', 0, 'Song text', '2020-07-06', 'lable', 'Rock Lable', 'A Street, in a City', 'big'),
(21, 'cd', 'Rock', 'keines', '', 'Rock Song 2', 0, 'Song text', '2020-07-06', 'lable', 'Rock Lable', 'A Street, in a City', 'medium'),
(22, 'cd', 'Metall', 'keines', '', 'Song 2', 0, 'Song text', '2020-07-06', 'lable', 'Metal Lable', 'A Street, in a City', 'independent'),
(23, 'cd', 'Metaller', 'NO', '', 'Song 5', 0, 'Song text', '2020-07-06', 'lable', 'Metal Lable', 'A Street, in a City', 'independent'),
(24, 'dvd', 'Übung', '', 'Regisseur', 'Rob Zombie', 0, 'John Wick', '0000-00-00', 'studio', 'Name', 'A Street, in a City', 'medium');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
