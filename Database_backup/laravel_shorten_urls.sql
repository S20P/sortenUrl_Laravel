-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 20, 2018 at 11:47 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_shorten_urls`
--

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

DROP TABLE IF EXISTS `links`;
CREATE TABLE IF NOT EXISTS `links` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `url` text NOT NULL,
  `short_url` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `url`, `short_url`) VALUES
(1, 'http://localhost:8000/urlshort', ''),
(2, 'http://localhost:8000/urlshort', ''),
(3, 'https://stackoverflow.com/questions/31696679/laravel-5-class-input-not-found', ''),
(4, 'https://medium.com/@adelekandavid2013/laravel-restful-api-development-a-step-by-step-approach-part-1-fdf9341662e6', ''),
(5, 'https://medium.com/@adelekandavid2013/laravel-restful-api-development-a-step-by-step-approach-part-1-fdf9341662e6', '7936fa21'),
(6, 'https://medium.com/@adelekandavid2013/laravel-restful-api-development-a-step-by-step-approach-part-1-fdf9341662e6', 'b21af873'),
(7, 'https://www.phpgang.com/building-a-url-shortener-website-using-laravel-4-part-1_875.html', '857b170d'),
(8, 'https://www.phpgang.com/building-a-url-shortener-website-using-laravel-4-part-1_875.html', '61a9530e'),
(9, 'https://www.phpgang.com/building-a-url-shortener-website-using-laravel-4-part-1_875.html', 'b407cf6c'),
(10, 'https://www.phpgang.com/building-a-url-shortener-website-using-laravel-4-part-1_875.html', 'd7418b14'),
(11, 'https://www.phpgang.com/building-a-url-shortener-website-using-laravel-4-part-1_875.html', 'dccd915f'),
(12, 'https://www.phpgang.com/building-a-url-shortener-website-using-laravel-4-part-1_875.html', 'f2a195eb'),
(13, 'https://www.phpgang.com/building-a-url-shortener-website-using-laravel-4-part-1_875.html', '8ec4d79e'),
(14, 'http://example.com/', 'e7aa699b');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
