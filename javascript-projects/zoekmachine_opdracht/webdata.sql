-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2015 at 11:24 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `webdata`
--

CREATE TABLE IF NOT EXISTS `webdata` (
  `webid` int(4) NOT NULL AUTO_INCREMENT,
  `webName` varchar(40) NOT NULL,
  `ftpAdres` varchar(40) NOT NULL,
  `ftpUsername` varchar(40) NOT NULL,
  `ftpPass` varchar(40) NOT NULL,
  `dbName` varchar(40) NOT NULL,
  `dbUsername` varchar(40) NOT NULL,
  `dbPass` varchar(40) NOT NULL,
  PRIMARY KEY (`webid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `webdata`
--

INSERT INTO `webdata` (`webid`, `webName`, `ftpAdres`, `ftpUsername`, `ftpPass`, `dbName`, `dbUsername`, `dbPass`) VALUES
(14, 'www.google.nl', 'dasdas', 'dasda', 'dasd', 'dasda', 'dasdad', 'dasdasda'),
(15, 'www.petjeaf.nl', 'hoi@test.nl', 'petjeaf123', 'hallo1234', 'petjeaf', 'sdasdasd', 'adsjaksdads'),
(17, 'www.ad.nl', 'ad@ftp.nl', 'test', 'test', 'test', 'test', 'test'),
(18, 'www.rhythmvideo.com', 'rhythmvideo@ftp.nl', 'rhythmvideo', 'rhythmvideo.com', 'rhythmvideo.com', 'rhythmvideo.com', 'rhythmvideo.com'),
(20, 'www.lacmusicvideo.com', 'lacmusicvideo@ftp.com', 'lacmusicvideo', 'lacmusicvideo.com', 'lacmusicvideo.com', 'lacmusicvideo.com', 'lacmusicvideo.com'),
(21, 'www.blabla.nl', 'bla@ftp.nl', 'test', 'test', 'test', 'test', 'test'),
(22, 'www.aapje.nl', 'aaaa@ftp.nl', 'test', 'test', 'test', 'test', 'test');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
