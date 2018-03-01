-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 01, 2018 at 12:35 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--
CREATE DATABASE IF NOT EXISTS `webshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `webshop`;

-- --------------------------------------------------------

--
-- Table structure for table `bestallning`
--

CREATE TABLE `bestallning` (
  `ordernr` int(5) NOT NULL,
  `produkt` int(5) NOT NULL,
  `fornamn` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `efternamn` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `epost` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `adress` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `postnr` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `stad` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `orderdatum` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produkt`
--

CREATE TABLE `produkt` (
  `artikelnr` int(5) NOT NULL,
  `namn` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pris` int(5) NOT NULL,
  `beskrivning` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bild` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bestallning`
--
ALTER TABLE `bestallning`
  ADD PRIMARY KEY (`ordernr`);

--
-- Indexes for table `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`artikelnr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bestallning`
--
ALTER TABLE `bestallning`
  MODIFY `ordernr` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produkt`
--
ALTER TABLE `produkt`
  MODIFY `artikelnr` int(5) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
