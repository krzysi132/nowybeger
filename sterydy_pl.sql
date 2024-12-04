-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2024 at 10:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sterydy.pl`
--

-- --------------------------------------------------------

--
-- Table structure for table `maks`
--

CREATE TABLE `maks` (
  `id` int(11) NOT NULL,
  `ciezar` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nazwisko` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='maks i dane';

-- --------------------------------------------------------

--
-- Table structure for table `records`
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
-- Table structure for table `tematy`
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

-- --------------------------------------------------------

--
-- Table structure for table `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `haslo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `email`, `haslo`, `created_at`) VALUES
(2, 'krzys.rosicki33@gmail.com', '$2y$10$iP7lBDjuCIiIVL.m7rQche7VTVrfayZaj8dmh0.UdSS1ozE6GhwV.', '2024-12-04 21:50:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maks`
--
ALTER TABLE `maks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tematy`
--
ALTER TABLE `tematy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

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

--
-- AUTO_INCREMENT for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
