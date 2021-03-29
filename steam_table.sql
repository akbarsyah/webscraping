-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 03:07 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webscraping`
--

-- --------------------------------------------------------

--
-- Table structure for table `steam_table`
--

CREATE TABLE `steam_table` (
  `game_name` varchar(31) DEFAULT NULL,
  `diskon` varchar(11) DEFAULT NULL,
  `harga_awal` varchar(10) DEFAULT NULL,
  `harga_diskon` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `steam_table`
--

INSERT INTO `steam_table` (`game_name`, `diskon`, `harga_awal`, `harga_diskon`) VALUES
('game_name', 'game_diskon', 'game_harga', 'game_hargadiskon'),
('Dota 2', '', '', ''),
('HUMANKIND™', '-17%', '$59.99', '$49.79'),
('Cyberpunk 2077', '-20%', '$59.99', '$47.99'),
('Red Dead Redemption 2', '-33%', '$59.99', '$40.19'),
('Dishonored: Complete Collection', '-50%', '$79.99', '$39.99'),
('Half-Life: Alyx', '-40%', '$59.99', '$35.99'),
('Evil Genius 2: World Domination', '-10%', '$39.99', '$35.99'),
('Out of the Park Baseball 22', '-10%', '$39.99', '$35.99'),
('Mortal Kombat 11 Ultimate', '-40%', '$59.99', '$35.99'),
('DRAGON QUEST BUILDERS™ 2', '-40%', '$59.99', '$35.99'),
('Necromunda: Hired Gun', '-15%', '$39.99', '$33.99');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
