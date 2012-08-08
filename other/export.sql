-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 08, 2012 at 11:59 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yrsolympics2_phpfogapp_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE IF NOT EXISTS `cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_code` varchar(255) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `medals_gold` varchar(255) NOT NULL,
  `medals_silver` varchar(255) NOT NULL,
  `medals_bronze` varchar(255) NOT NULL,
  `endangered_species` varchar(255) DEFAULT NULL,
  `military_personnel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=124 ;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `country_code`, `country_name`, `medals_gold`, `medals_silver`, `medals_bronze`, `endangered_species`, `military_personnel`) VALUES
(64, 'cn', 'People''s Republic of China', '31', '17', '14', '841', '218500'),
(65, 'us', 'United States of America', '28', '14', '18', '1203', '153958'),
(66, 'gb', 'Great Britain', '16', '11', '10', '72', '160280'),
(67, 'kr', 'Republic of Korea', '10', '4', '6', '60', '687000'),
(68, 'fr', 'France', '8', '8', '9', '126', '352771'),
(69, 'it', 'Italy', '6', '5', '3', '147', '292983'),
(70, 'kz', 'Kazakhstan', '6', '0', '0', '72', '49000'),
(71, 'de', 'Germany', '5', '10', '7', '75', '244324'),
(72, 'ru', 'Russian Federation', '4', '16', '15', '116', '102700'),
(73, 'hu', 'Hungary', '4', '1', '3', '48', '25207'),
(74, 'kp', 'Democratic People''s Republic of Korea', '4', '0', '1', '48', '110600'),
(75, 'nl', 'Netherlands', '3', '2', '4', '24', '40537'),
(76, 'za', 'South Africa', '3', '1', '0', '407', '62082'),
(77, 'nz', 'New Zealand', '3', '0', '4', '150', '9278'),
(78, 'jp', 'Japan', '2', '12', '13', '324', '230300'),
(79, 'dk', 'Denmark', '2', '4', '2', '32', '30'),
(80, 'ro', 'Romania', '2', '4', '2', '62', '73200'),
(81, 'by', 'Belarus', '2', '2', '3', '17', '72940'),
(82, 'cu', 'Cuba', '2', '2', '1', '297', '49000'),
(83, 'jm', 'Jamaica', '2', '1', '1', '282', '2830'),
(84, 'pl', 'Poland', '2', '1', '1', '38', '121808'),
(85, 'ua', 'Ukraine', '2', '0', '5', '60', '129925'),
(86, 'et', 'Ethiopia', '2', '0', '1', '101', '138000'),
(87, 'au', 'Australia', '1', '12', '7', '804', '54747'),
(88, 'ca', 'Canada', '1', '3', '6', '77', '64371'),
(89, 'cz', 'Czech Republic', '1', '3', '1', '35', '24083'),
(90, 'se', 'Sweden', '1', '3', '0', '32', '16900'),
(91, 'ke', 'Kenya', '1', '2', '2', '290', '24120'),
(92, 'br', 'Brazil', '1', '1', '5', '769', '326435'),
(93, 'si', 'Slovenia', '1', '1', '2', '79', '7200'),
(94, 'hr', 'Croatia', '1', '1', '0', '91', '18600'),
(95, 'ch', 'Switzerland', '1', '1', '0', '48', '22823'),
(96, 'ir', 'Islamic Republic of Iran', '1', '0', '1', '86', '523000'),
(97, 'lt', 'Lithuania', '1', '0', '1', '20', '8850'),
(98, 'gs', 'Georgia', '1', '0', '0', '10', '21150'),
(99, 've', 'Venezuela', '1', '0', '0', '267', '115000'),
(100, 'mx', 'Mexico', '0', '3', '2', '900', '225506'),
(101, 'co', 'Colombia', '0', '3', '1', '658', '267231'),
(102, 'es', 'Spain', '0', '2', '1', '227', '221750'),
(103, 'sk', 'Slovakia', '0', '1', '3', '34', '17445'),
(104, 'az', 'Azerbaijan', '0', '1', '2', '44', '66940'),
(105, 'be', 'Belgium', '0', '1', '2', '28', '38844'),
(106, 'in', 'India', '0', '1', '2', '76', '1281200'),
(107, 'am', 'Armenia', '0', '1', '1', '37', '42080'),
(108, 'id', 'Indonesia', '0', '1', '1', '1126', '302000'),
(109, 'mn', 'Mongolia', '0', '1', '1', '35', '10000'),
(110, 'no', 'Norway', '0', '1', '1', '38', '19100'),
(111, 'cs', 'Serbia', '0', '1', '1', '43', '24257'),
(112, 'eg', 'Egypt', '0', '1', '0', '120', '468500'),
(113, 'gt', 'Guatemala', '0', '1', '0', '233', '15500'),
(114, 'my', 'Malaysia', '0', '1', '0', '1166', '109000'),
(115, 'th', 'Thailand', '0', '1', '0', '467', '306600'),
(116, 'tw', 'Taipei (Chinese Taipei)', '0', '1', '0', '302', '290000'),
(117, 'gr', 'Greece', '0', '0', '2', '131', '156600'),
(118, 'mc', 'Republic of Moldova', '0', '0', '2', '27', '6000'),
(119, 'ar', 'Argentina', '0', '0', '1', '212', '76000'),
(120, 'qa', 'Qatar', '0', '0', '1', '18', '11800'),
(121, 'sg', 'Singapore', '0', '0', '1', '271', '72500'),
(122, 'tn', 'Tunisia', '0', '0', '1', '63', '35800'),
(123, 'uz', 'Uzbekistan', '0', '0', '1', '51', '67000');

-- --------------------------------------------------------

--
-- Table structure for table `gameplay`
--

CREATE TABLE IF NOT EXISTS `gameplay` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `start_time` date NOT NULL,
  `points` int(225) NOT NULL,
  `names` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `gameplay`
--

INSERT INTO `gameplay` (`id`, `start_time`, `points`, `names`) VALUES
(4, '0000-00-00', 0, ''),
(5, '0000-00-00', 0, ''),
(6, '0000-00-00', 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
