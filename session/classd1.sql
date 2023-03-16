-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2018 at 02:38 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classd1`
--
CREATE DATABASE IF NOT EXISTS `classd1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `classd1`;

-- --------------------------------------------------------

--
-- Table structure for table `6d1`
--

CREATE TABLE IF NOT EXISTS `6d1` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `6d1`
--

INSERT INTO `6d1` (`id`, `username`, `password`, `firstname`, `lastname`, `email`) VALUES
(10, 'tejas', '$2y$10$8I0dMe/dDgdYd4786QoWueFiPGrXgIth15A0Jbk9KHyHBJ3EL.50m', 'tejas', 'chauhan ', 'tejtej8606@gmail.com'),
(9, 'ashish', '$2y$10$skJ00DYhgITEpAZ4wt8yiuiWwCfddepXdP5QX/wsXRNewQv6ztU8S', 'ashish', 'chauhan', 'ashish@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
