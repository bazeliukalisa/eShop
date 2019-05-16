-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 16, 2019 at 12:27 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `Atsiliepimai`
--

CREATE TABLE `Atsiliepimai` (
  `id` int(11) NOT NULL,
  `Vardas` varchar(45) COLLATE utf8_lithuanian_ci NOT NULL,
  `Email` text COLLATE utf8_lithuanian_ci NOT NULL,
  `Telefonas` text COLLATE utf8_lithuanian_ci NOT NULL,
  `Zinute` text COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Prekes`
--

CREATE TABLE `Prekes` (
  `id` int(11) NOT NULL,
  `Kategorija` text COLLATE utf8_lithuanian_ci NOT NULL,
  `Pavadinimas` text COLLATE utf8_lithuanian_ci NOT NULL,
  `Aprasymas` text COLLATE utf8_lithuanian_ci NOT NULL,
  `Kaina` double NOT NULL,
  `MazasPaveikslelis` text COLLATE utf8_lithuanian_ci,
  `DidelisPaveikslelis` text COLLATE utf8_lithuanian_ci,
  `ArUzsakyta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `Prekes`
--

INSERT INTO `Prekes` (`id`, `Kategorija`, `Pavadinimas`, `Aprasymas`, `Kaina`, `MazasPaveikslelis`, `DidelisPaveikslelis`, `ArUzsakyta`) VALUES
(7, 'veido', 'Veido procedūra', 'Agurkų kaukė skaistina veidą ir papildo jį būtinais mineralais. Po procedūros veido oda atrodo atsigavusi ir švytinti.\r\n', 10, '../images/procedure1.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Vartotojai`
--

CREATE TABLE `Vartotojai` (
  `id` int(11) NOT NULL,
  `Vardas` varchar(45) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `Pavarde` varchar(45) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `Email` text CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `Slaptazodis` text CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `PakartotasSlaptazodis` text CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `Lytis` varchar(8) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `GimimoData` date NOT NULL,
  `ArSutinka` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Vartotojai`
--

INSERT INTO `Vartotojai` (`id`, `Vardas`, `Pavarde`, `Email`, `Slaptazodis`, `PakartotasSlaptazodis`, `Lytis`, `GimimoData`, `ArSutinka`) VALUES
(3, 'AlisaBazeliuk', 'Bazeliuk', 'bazeliukalisa@gmail.com', 'ddd', 'ddd', 'option1', '2014-02-12', 0),
(19, 'Alisa', 'Bazeliuk', 'bazeliukalisa@gmail.com', 'aaa', 'aaa', 'Moteris', '2014-02-09', 0),
(21, 'Agata', 'Maciulevic', 'agata@gmail.com', 'kate', 'kate', 'Moteris', '2014-02-09', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Atsiliepimai`
--
ALTER TABLE `Atsiliepimai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Prekes`
--
ALTER TABLE `Prekes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Vartotojai`
--
ALTER TABLE `Vartotojai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Vardas` (`Vardas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Atsiliepimai`
--
ALTER TABLE `Atsiliepimai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Prekes`
--
ALTER TABLE `Prekes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Vartotojai`
--
ALTER TABLE `Vartotojai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
