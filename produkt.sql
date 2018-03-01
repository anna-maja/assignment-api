-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 01, 2018 at 01:30 PM
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
-- Dumping data for table `produkt`
--

INSERT INTO `produkt` (`artikelnr`, `namn`, `pris`, `beskrivning`, `bild`) VALUES
(1, 'Leksaksbil', 400, 'Uppdragbar leksaksbil i plåt', 'Robot.jpg'),
(2, 'Scooter', 350, 'Scooter, Japan 1955 med motorljud, längd 23 cm', 'scooter.jpg'),
(3, 'Kikare', 300, 'Kikare i metall, tillverkad i Tyskland', 'binoculars.JPG'),
(4, 'Motorcykel', 15000, 'BMW , 1967. Fullt fungerande', 'bmw.JPG'),
(5, 'Donkey Kong', 1000, 'Game & Watch - Donkey Kong - Multi screen 1982', 'donkeyKong.jpg'),
(6, 'Symasking', 5000, 'Singer, 1940-tal fungerar!', 'symaskin.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`artikelnr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produkt`
--
ALTER TABLE `produkt`
  MODIFY `artikelnr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
