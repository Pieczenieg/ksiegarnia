-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Paź 2016, 15:48
-- Wersja serwera: 10.1.13-MariaDB
-- Wersja PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `bookstore`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `adres`
--

CREATE TABLE `adres` (
  `adres_id` int(11) NOT NULL,
  `miasto` text COLLATE utf8_polish_ci NOT NULL,
  `kod` text COLLATE utf8_polish_ci NOT NULL,
  `ulica` text COLLATE utf8_polish_ci NOT NULL,
  `budynek` text COLLATE utf8_polish_ci NOT NULL,
  `lokal` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `adres`
--

INSERT INTO `adres` (`adres_id`, `miasto`, `kod`, `ulica`, `budynek`, `lokal`) VALUES
(1, 'Puławy', '24-100', 'Sienkiewicza', '16', '27'),
(2, 'Lublin', '20-003', 'ul. Przechodnia', '17', '15'),
(8, 'Wrocław', '01-100', 'Piaskowa', '16', '73'),
(9, 'Świdnik', '33-666', 'Pośmiertna', '33', '66'),
(14, 'Puławy', '24-100', 'Sienkiewicza', '15', '61'),
(15, 'hdf', 'hgd', 'dfhg', 'hgfd', 'dhg'),
(16, 'hwdp', '1312', 'pdw', 'jwp', '1312');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `audiobooks`
--

CREATE TABLE `audiobooks` (
  `audiobook_id` int(11) NOT NULL,
  `title` text COLLATE utf8_polish_ci NOT NULL,
  `autor` text COLLATE utf8_polish_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `price` float NOT NULL,
  `reader` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `audiobooks`
--

INSERT INTO `audiobooks` (`audiobook_id`, `title`, `autor`, `stock`, `price`, `reader`) VALUES
(1, 'Shantaram', 'Gregory David Roberts', 50, 29.99, 'Filip Kosior'),
(2, 'Czerwony kapitan', 'Dominik Dan', 44, 31.55, 'Maciej Stuhr'),
(3, 'Zapach perfum', 'Cristina Caboni', 31, 45.49, 'Magdalena Smalara'),
(4, 'Numer telefonu', 'Anna Kucharska', 17, 51.99, 'Joanna Domańska'),
(5, 'Stan zagrożenia', 'Steve Berry', 22, 25.99, 'Roch Siemianowski'),
(6, 'Notoryczna panna młoda', 'Jolana Król', 54, 24.95, 'Joanna Gajór'),
(7, 'Groby niewinnych', 'Peter Robinson', 27, 34.99, 'Wojciech Żołądkowicz'),
(8, 'Katar', 'Stanisław Lem', 34, 35.99, 'Krzysztof Gosztyła'),
(9, 'Gambit', 'Michał Cholewa', 33, 27.49, 'Maciej Więckowski'),
(10, 'Oni', 'Olga Haber', 13, 27.95, 'Joanna Domańska');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `title` text COLLATE utf8_polish_ci NOT NULL,
  `autor` text COLLATE utf8_polish_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `books`
--

INSERT INTO `books` (`book_id`, `title`, `autor`, `stock`, `price`) VALUES
(1, 'Igrając z ogniem', 'Gerritsen Tess', 55, 44.99),
(2, 'Immunitet', 'Mróz Remigiusz', 47, 35.51),
(3, 'Dziewczyna z pociągu', 'Hawkins Paula', 63, 25.99),
(4, 'Mock', 'Krajewski Marek', 23, 23.99),
(5, 'Skoruń', 'Maciej Płaza', 33, 33.44),
(6, 'Konan Destylator', 'Andrzej Pilipiuk', 67, 31.49),
(7, 'Siła niższa', 'Kisiel Marta', 43, 31.99),
(8, 'Bajki robotów', 'Stanisław Lem', 21, 23.49),
(9, 'Anioł do wynajęcia', 'Kordel Magdalena', 25, 27.49),
(10, 'Inferno', 'Dan Brown', 26, 32.49);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ebooks`
--

CREATE TABLE `ebooks` (
  `ebook_id` int(11) NOT NULL,
  `title` text COLLATE utf8_polish_ci NOT NULL,
  `autor` text COLLATE utf8_polish_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `ebooks`
--

INSERT INTO `ebooks` (`ebook_id`, `title`, `autor`, `stock`, `price`) VALUES
(1, 'Pokolenie Ikea', 'Piotr C', 33, 23.99),
(2, 'Kukła', 'Hayder Mo', 12, 31.49),
(3, 'Niebo to miejsce na ziemi', 'Edwardson Ake', 21, 19.99),
(4, 'Skazanie', 'Chase Emma', 45, 23.91),
(5, 'Ta chwila', 'Musso Guilaume', 32, 23.92),
(6, 'Gen Atlantydzki', 'Riddle A.G.', 23, 33.29),
(7, 'Dziewczyna z Dzielnicy Cudów', 'Jadowska Aneta', 16, 28.34),
(8, 'Topielica', 'Grzegorzewska Gaja', 44, 25.19),
(9, 'Trzeci biegun', 'Kamiński Marek', 27, 26.99),
(10, 'Pobór', 'Kloos Marco', 34, 31.94);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkt`
--

CREATE TABLE `produkt` (
  `id` int(11) NOT NULL,
  `audiobook_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `ebook_id` int(11) DEFAULT NULL,
  `zamowienie_id` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `produkt`
--

INSERT INTO `produkt` (`id`, `audiobook_id`, `book_id`, `ebook_id`, `zamowienie_id`, `ilosc`) VALUES
(11, NULL, 1, NULL, 19, 7),
(12, NULL, NULL, 2, 19, 5),
(13, 5, NULL, NULL, 19, 10),
(14, NULL, 2, NULL, 20, 1),
(15, 3, NULL, NULL, 20, 1),
(16, NULL, 10, NULL, 21, 11),
(17, NULL, NULL, 2, 21, 12),
(18, 6, NULL, NULL, 21, 13),
(19, NULL, 7, NULL, 22, 3),
(20, NULL, NULL, 3, 22, 2),
(21, 10, NULL, NULL, 22, 1),
(22, 9, NULL, NULL, 22, 1),
(31, 1, NULL, NULL, 27, 1),
(32, 3, NULL, NULL, 27, 1),
(33, 3, NULL, NULL, 28, 2),
(34, 2, NULL, NULL, 28, 1),
(35, 3, NULL, NULL, 32, 1),
(36, 3, NULL, NULL, 33, 1),
(37, 2, NULL, NULL, 34, 2),
(38, NULL, 3, NULL, 35, 1),
(39, NULL, NULL, 2, 35, 1),
(40, 2, NULL, NULL, 35, 1),
(41, 4, NULL, NULL, 36, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` text COLLATE utf8_polish_ci NOT NULL,
  `user_surname` text COLLATE utf8_polish_ci NOT NULL,
  `user_adres` text COLLATE utf8_polish_ci NOT NULL,
  `user_login` text COLLATE utf8_polish_ci NOT NULL,
  `user_pswd` text COLLATE utf8_polish_ci NOT NULL,
  `postal_code` text COLLATE utf8_polish_ci NOT NULL,
  `miasto` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_surname`, `user_adres`, `user_login`, `user_pswd`, `postal_code`, `miasto`) VALUES
(1, 'Adam', 'Adamski', 'Ochocza 10/15', 'Adamson', 'Adamek', '24-100', 'Puławy'),
(2, 'Janek', 'Jankowski', 'Sienkiewicza 19/43', 'Janoo', 'Jano123', '24-100', 'Puławy'),
(3, 'admin', 'admin', 'admin', 'admin', 'admin', '', 'admin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `zamowienie_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `data` date NOT NULL,
  `platnosc` text COLLATE utf8_polish_ci NOT NULL,
  `adres_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `zamowienia`
--

INSERT INTO `zamowienia` (`zamowienie_id`, `user_id`, `data`, `platnosc`, `adres_id`) VALUES
(19, 2, '2016-10-14', '', NULL),
(20, 2, '2016-10-14', '', NULL),
(21, NULL, '2016-10-14', '', 8),
(22, NULL, '2016-10-14', '', 9),
(27, 2, '2016-10-15', 'Przelew', NULL),
(28, NULL, '2016-10-15', 'Pobranie', 14),
(31, 2, '2016-10-15', 'Przelew', NULL),
(32, NULL, '2016-10-15', 'Pobranie', 15),
(33, 2, '2016-10-15', 'Przelew', NULL),
(34, NULL, '2016-10-16', 'Pobranie', 16),
(35, 3, '2016-10-16', 'Przelew', NULL),
(36, 3, '2016-10-16', 'Pobranie', NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `adres`
--
ALTER TABLE `adres`
  ADD PRIMARY KEY (`adres_id`);

--
-- Indexes for table `audiobooks`
--
ALTER TABLE `audiobooks`
  ADD PRIMARY KEY (`audiobook_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `ebooks`
--
ALTER TABLE `ebooks`
  ADD PRIMARY KEY (`ebook_id`);

--
-- Indexes for table `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produkt_id` (`audiobook_id`),
  ADD KEY `zamowienie_id` (`zamowienie_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `ebook_id` (`ebook_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`zamowienie_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `adres_id` (`adres_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `adres`
--
ALTER TABLE `adres`
  MODIFY `adres_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT dla tabeli `audiobooks`
--
ALTER TABLE `audiobooks`
  MODIFY `audiobook_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT dla tabeli `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT dla tabeli `ebooks`
--
ALTER TABLE `ebooks`
  MODIFY `ebook_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT dla tabeli `produkt`
--
ALTER TABLE `produkt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `zamowienie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `produkt`
--
ALTER TABLE `produkt`
  ADD CONSTRAINT `produkt_ibfk_1` FOREIGN KEY (`ebook_id`) REFERENCES `ebooks` (`ebook_id`),
  ADD CONSTRAINT `produkt_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`),
  ADD CONSTRAINT `produkt_ibfk_3` FOREIGN KEY (`audiobook_id`) REFERENCES `audiobooks` (`audiobook_id`),
  ADD CONSTRAINT `produkt_ibfk_4` FOREIGN KEY (`zamowienie_id`) REFERENCES `zamowienia` (`zamowienie_id`);

--
-- Ograniczenia dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD CONSTRAINT `zamowienia_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `zamowienia_ibfk_2` FOREIGN KEY (`adres_id`) REFERENCES `adres` (`adres_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
