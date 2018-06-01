-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2018 at 03:16 AM
-- Server version: 5.7.22
-- PHP Version: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jukebox`
--

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `name` varchar(127) DEFAULT NULL,
  `code` varchar(127) DEFAULT NULL,
  `author` varchar(127) DEFAULT NULL,
  `description` text,
  `date` date DEFAULT NULL,
  `url` varchar(127) DEFAULT NULL,
  `html_url` varchar(127) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `name`, `code`, `author`, `description`, `date`, `url`, `html_url`) VALUES
(1, 'One kiss', 'DkeiKbqa02g', 'Calvin Harris, Dua Lipa', 'Calvin Harris & Dua Lipa – One Kiss (Official Video)\r\nListen/download here: http://smarturl.it/One-Kiss\r\n \r\nFollow Calvin Harris Radio (playlist): http://smarturl.it/CalvinHarrisRadio\r\nSubscribe to Calvin\'s channel: http://smarturl.it/CHVevo?IQid=YT', NULL, 'https://www.youtube.com/watch?v=DkeiKbqa02g', ''),
(2, 'No Tears Left To Cry', 'ffxKSjUwKdU', 'Ariana Grande', 'Director - Dave Meyers\r\nProducer - Nathan Scherrer\r\nEditor - Nick Gilberg\r\nDirector of Photography - Scott Cunningham\r\nProduction Designer - Ethan Tobman\r\nVisual Fx - Buf\r\nColourist - Stefan Sonnenfeld\r\nA FREENJOY PRODUCTION\r\n\r\nMusic video by Ariana Grande performing No Tears Left To Cry. © 2018 Republic Records, a Division of UMG Recordings, Inc.', NULL, 'https://www.youtube.com/watch?v=ffxKSjUwKdU', NULL),
(3, 'Meant to Be', 'zDo0H8Fm7d0', 'Bebe Rexha', 'Bebe Rexha - Meant to Be (feat. Florida Georgia Line)\r\n\r\nListen now: https://BebeRexha.lnk.to/MeantToBe\r\nSpotify: https://BebeRexha.lnk.to/MeantToBe/Sp...\r\nApple Music: https://BebeRexha.lnk.to/MeantToBe/Ap...\r\niTunes: https://BebeRexha.lnk.to/MeantToBe/iT...\r\n\r\nDirected by: Sophie Muller', NULL, 'https://www.youtube.com/watch?v=zDo0H8Fm7d0', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
