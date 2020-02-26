-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 15, 2020 at 07:01 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esports`
--

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

DROP TABLE IF EXISTS `code`;
CREATE TABLE IF NOT EXISTS `code` (
  `code` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `Game_name` varchar(40) NOT NULL,
  `game_info` varchar(250) NOT NULL,
  `developer` varchar(40) NOT NULL,
  `publisher` varchar(40) NOT NULL,
  PRIMARY KEY (`Game_name`),
  UNIQUE KEY `Game_name` (`Game_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`Game_name`, `game_info`, `developer`, `publisher`) VALUES
('Overwatch', 'Players are assigned into two teams of six. Players work together to complete objectives across the map in a limited amount of time.', 'Blizzard Entertainment', 'Blizzard Entertainment'),
('Smash', 'Two, four, six or eight players battle using a large roster of characters', 'Nintendo', 'Nintendo'),
('CSGO', 'Two teams fight to protect or assault an objective', 'Valve Hidden Path Entertainment', 'Valve'),
('Rocket League', 'Two teams select vehicles to play an ultimate game of soccer', 'Psyonix', 'Psyonix');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
CREATE TABLE IF NOT EXISTS `players` (
  `user_id` varchar(16) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `game_name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `fav_game` varchar(100) NOT NULL,
  `bio` varchar(250) NOT NULL,
  `leader` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`user_id`, `name`, `password`, `game_name`, `email`, `fav_game`, `bio`, `leader`) VALUES
('JackKing123', 'Jack Mcconol', 'Halo', 'smash', 'JackKing123@hotmail.com', 'Halo, Paladins, Overwatch', 'This is a test, this is only a test', 'no'),
('JamesJacobs', 'James Jacobs', 'Halo', 'smash', 'JackKing123@hotmail.com', 'Halo, Paladins, Overwatch', 'This is a test, this is only a test', 'yes'),
('JackKing12345', 'Jack Mcconol', 'Halo', 'smash', 'JackKing123@hotmail.com', 'Halo, Paladins, Overwatch', 'This is a test, this is only a test', 'no'),
('JackKing987', 'Jack Mcconol', 'Halo', 'Overwatch', 'JackKing123@hotmail.com', 'Halo, Paladins, Overwatch', 'This is a test, this is only a test', 'no'),
('Jake12', 'Jake Mcconol', 'Halo', 'Overwatch', 'JackKing123@hotmail.com', 'Halo, Paladins, Overwatch', 'This is a test, this is only a test', 'yes'),
('Furgison', 'Furgison', 'GMod132', 'CSGO', 'Furgison2233@stu.indianhills.edu', 'GMod', 'Im a pro Prop Hunts Gamer', 'yes'),
('Jimmy32', 'Jimmy', '3276yuDe22@re', 'Rocket League', 'JimmyNeutron@Gmail.com', 'Halo', 'Im a kid dude', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `Leader` varchar(11) NOT NULL,
  `Game_name` varchar(11) NOT NULL,
  `Player_Count` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
