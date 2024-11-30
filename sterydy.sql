-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 30, 2024 at 06:57 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sterydy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `maks`
--

CREATE TABLE `maks` (
  `id` int(11) NOT NULL,
  `ciezar` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nazwisko` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='maks i dane';

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nazwisko` varchar(100) NOT NULL,
  `ciezar` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `name`, `nazwisko`, `ciezar`) VALUES
(1, 'krzysztof', 'Rosicki', 120.00);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tematy`
--

CREATE TABLE `tematy` (
  `id` int(11) NOT NULL,
  `tytul` varchar(255) NOT NULL,
  `tresc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tematy`
--

INSERT INTO `tematy` (`id`, `tytul`, `tresc`) VALUES
(1, 'Czy MK677 dobry na odblok?', 'Dobrą opcja jest dodac MK677/Ibutamporen bardzo dobrze bedzie sie zgrywał z róznymi sarmami na odbloku.\r\n                Na spokojnie można do tego protokołu można dodac hgh ewentualnie jakies igf-2 jak liczymy na wiekszy wyrzut hormonu wzrostu.\r\n                dochodzc do końca tematu mk677 samo w sobie nie bedzie idealnym protokołem ale po dodaniu igf-2 bedzie to idealny na odblokowanie sie po hgh i testosteronie krótkim lub długim'),
(2, 'Makro na towarze', 'Podczas brania sterydów poczatkujący adepci dopingu zastanawiaja się czy powinni zmienic rozkład makroskładników podczas cyklu.Tak naprawde nic się nie zmienia, chociaż trzeba pamietac o zdrowym jedzeniu bez fast foodów i innych takich.'),
(3, 'skótki uboczne testosteronu (Teścia)', 'testosteron:Najpopularnijszy ze steryd.\r\n                Jednym z głównych i najbardziej interesujacych dla facetów skutkiem jest pomiejszenie jąder.\r\n                Co wystepuje rzeczywiscie poniewaz , produkcja testosteronu w jądrach naturalnie jest nie potrzebna.\r\n                Problemy skórne: Testosteron może powodować trądzik, łojotok i nadmierne owłosienie ciała.\r\n\r\n                Retencja płynów: Może prowadzić do zatrzymywania płynów i obrzęków, zwłaszcza w nogach.\r\n\r\n                Zmiany nastroju: Wzrost drażliwości, agresji, lęków i wahań emocjonalnych.\r\n\r\n                Problemy z układem krążenia: Zwiększone ryzyko podwyższonego ciśnienia krwi, zawału serca i udaru mózgu.\r\n\r\n                Problemy z wątrobą: Wysokie dawki mogą powodować uszkodzenia wątroby (zmęczenie, ból brzucha, żółtaczka, ciemny mocz).\r\n\r\n                Zaburzenia snu: Testosteron może prowadzić do bezsenności i bezdechu sennego.');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `maks`
--
ALTER TABLE `maks`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `tematy`
--
ALTER TABLE `tematy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tematy`
--
ALTER TABLE `tematy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
