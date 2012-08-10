-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 09, 2012 at 03:19 PM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `trump`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_code` varchar(255) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `medals_gold` varchar(255) NOT NULL,
  `medals_silver` varchar(255) NOT NULL,
  `medals_bronze` varchar(255) NOT NULL,
  `endangered_species` varchar(255) DEFAULT NULL,
  `military_personnel` varchar(255) DEFAULT NULL,
  `carbon_rank` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=124 ;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `country_code`, `country_name`, `medals_gold`, `medals_silver`, `medals_bronze`, `endangered_species`, `military_personnel`, `carbon_rank`) VALUES
(64, 'cn', 'People''s Republic of China', '31', '17', '14', '841', '218500', '1'),
(65, 'us', 'United States of America', '28', '14', '18', '1203', '153958', '2'),
(66, 'gb', 'Great Britain', '16', '11', '10', '72', '160280', '10'),
(67, 'kr', 'Republic of Korea', '10', '4', '6', '60', '687000', '7'),
(68, 'fr', 'France', '8', '8', '9', '126', '352771', '17'),
(69, 'it', 'Italy', '6', '5', '3', '147', '292983', '15'),
(70, 'kz', 'Kazakhstan', '6', '0', '0', '72', '49000', '28'),
(71, 'de', 'Germany', '5', '10', '7', '75', '244324', '6'),
(72, 'ru', 'Russian Federation', '4', '16', '15', '116', '102700', '4'),
(73, 'hu', 'Hungary', '4', '1', '3', '48', '25207', '61'),
(74, 'kp', 'Democratic People''s Republic of Korea', '4', '0', '1', '48', '110600', '52'),
(75, 'nl', 'Netherlands', '3', '2', '4', '24', '40537', '25'),
(76, 'za', 'South Africa', '3', '1', '0', '407', '62082', '12'),
(77, 'nz', 'New Zealand', '3', '0', '4', '150', '9278', '70'),
(78, 'jp', 'Japan', '2', '12', '13', '324', '230300', '5'),
(79, 'dk', 'Denmark', '2', '4', '2', '32', '30', '64'),
(80, 'ro', 'Romania', '2', '4', '2', '62', '73200', '45'),
(81, 'by', 'Belarus', '2', '2', '3', '17', '72940', '50'),
(82, 'cu', 'Cuba', '2', '2', '1', '297', '49000', '74'),
(83, 'jm', 'Jamaica', '2', '1', '1', '282', '2830', '102'),
(84, 'pl', 'Poland', '2', '1', '1', '38', '121808', '21'),
(85, 'ua', 'Ukraine', '2', '0', '5', '60', '129925', '23'),
(86, 'et', 'Ethiopia', '2', '0', '1', '101', '138000', '113'),
(87, 'au', 'Australia', '1', '12', '7', '804', '54747', '16'),
(88, 'ca', 'Canada', '1', '3', '6', '77', '64371', '9'),
(89, 'cz', 'Czech Republic', '1', '3', '1', '35', '24083', '40'),
(90, 'se', 'Sweden', '1', '3', '0', '32', '16900', '54'),
(91, 'ke', 'Kenya', '1', '2', '2', '290', '24120', '95'),
(92, 'br', 'Brazil', '1', '1', '5', '769', '326435', '13'),
(93, 'si', 'Slovenia', '1', '1', '2', '79', '7200', '86'),
(94, 'hr', 'Croatia', '1', '1', '0', '91', '18600', '80'),
(95, 'ch', 'Switzerland', '1', '1', '0', '48', '22823', '65'),
(96, 'ir', 'Islamic Republic of Iran', '1', '0', '1', '86', '523000', '8'),
(97, 'lt', 'Lithuania', '1', '0', '1', '20', '8850', '87'),
(98, 'gs', 'Georgia', '1', '0', '0', '10', '21150', '122'),
(99, 've', 'Venezuela', '1', '0', '0', '267', '115000', '32'),
(100, 'mx', 'Mexico', '0', '3', '2', '900', '225506', '14'),
(101, 'co', 'Colombia', '0', '3', '1', '658', '267231', '46'),
(102, 'es', 'Spain', '0', '2', '1', '227', '221750', '19'),
(103, 'sk', 'Slovakia', '0', '1', '3', '34', '17445', '73'),
(104, 'az', 'Azerbaijan', '0', '1', '2', '44', '66940', '72'),
(105, 'be', 'Belgium', '0', '1', '2', '28', '38844', '34'),
(106, 'in', 'India', '0', '1', '2', '76', '1281200', '3'),
(107, 'am', 'Armenia', '0', '1', '1', '37', '42080', '97'),
(108, 'id', 'Indonesia', '0', '1', '1', '1126', '302000', '18'),
(109, 'mn', 'Mongolia', '0', '1', '1', '35', '10000', '100'),
(110, 'no', 'Norway', '0', '1', '1', '38', '19100', '68'),
(111, 'cs', 'Serbia', '0', '1', '1', '43', '24257', '63'),
(112, 'eg', 'Egypt', '0', '1', '0', '120', '468500', '27'),
(113, 'gt', 'Guatemala', '0', '1', '0', '233', '15500', '93'),
(114, 'my', 'Malaysia', '0', '1', '0', '1166', '109000', '29'),
(115, 'th', 'Thailand', '0', '1', '0', '467', '306600', '22'),
(116, 'tw', 'Taipei (Chinese Taipei)', '0', '1', '0', '302', '290000', '20'),
(117, 'gr', 'Greece', '0', '0', '2', '131', '156600', '39'),
(118, 'mc', 'Republic of Moldova', '0', '0', '2', '27', '6000', '110'),
(119, 'ar', 'Argentina', '0', '0', '1', '212', '76000', '31'),
(120, 'qa', 'Qatar', '0', '0', '1', '18', '11800', '51'),
(121, 'sg', 'Singapore', '0', '0', '1', '271', '72500', '30'),
(122, 'tn', 'Tunisia', '0', '0', '1', '63', '35800', '85'),
(123, 'uz', 'Uzbekistan', '0', '0', '1', '51', '67000', '36');