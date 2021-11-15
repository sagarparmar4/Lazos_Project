-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2017 at 09:16 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lazos`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `msg`, `date`) VALUES
(3, 'sda', 'ad@.com', 4354, 'asda ', '2017-02-11 06:59:52');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(30) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=133 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `code`, `type`, `price`) VALUES
(1, '2835', 'mokhu', 1199),
(2, '2835', 'mokhu', 1199),
(3, '2835', 'mokhu', 1199),
(4, '2861', 'mokhu', 1199),
(5, '2861', 'mokhu', 1199),
(6, '2861', 'mokhu', 1199),
(7, '2861', 'mokhu', 1199),
(8, '2861', 'mokhu', 1199),
(9, '2861', 'mokhu', 1199),
(10, '2862', 'mokhu', 1199),
(11, '2862', 'mokhu', 1199),
(12, '2862', 'mokhu', 1199),
(13, '2862', 'mokhu', 1199),
(14, '2862', 'mokhu', 1199),
(15, '2863', 'mokhu', 1199),
(16, '2863', 'mokhu', 1199),
(17, '2863', 'mokhu', 1199),
(18, '2863', 'mokhu', 1199),
(19, '2863', 'mokhu', 1199),
(20, '2863', 'mokhu', 1199),
(21, '2838', 'jacket', 1599),
(22, '2839', 'jacket', 1599),
(23, '2840', 'jacket', 1599),
(24, '2841', 'jacket', 1599),
(25, '2842', 'jacket', 1599),
(26, '2849', 'jacket', 1599),
(27, '2850', 'jacket', 1599),
(28, '2851', 'jacket', 1599),
(29, '2856', 'jacket', 1599),
(30, '2851', 'jacket', 1599),
(31, '2859', 'jacket', 1599),
(32, '2899', 'kurta ', 1999),
(33, '2894', 'kurta ', 1999),
(34, '2898', 'kurta ', 1999),
(35, '2897', 'kurta ', 1999),
(36, '2896', 'kurta ', 1999),
(37, '2733', 'kurta ', 1999),
(38, '2734', 'kurta ', 1999),
(39, '2735', 'kurta ', 1999),
(40, '2736', 'kurta ', 1999),
(41, '2737', 'kurta ', 1999),
(42, '2738', 'kurta ', 1999),
(43, '2745', 'indo', 3500),
(44, '2752', 'indo', 3500),
(45, '2773', 'indo', 3500),
(46, '2801', 'indo', 3500),
(47, '2816', 'indo', 3500),
(48, '2817', 'indo', 3500),
(49, '2881', 'indo', 3500),
(50, '2950', 'indo', 3500),
(51, '2722', 'jacket_kurta', 2999),
(52, '2725', 'jacket_kurta', 2999),
(53, '2759', 'jacket_kurta', 2999),
(54, '2771', 'jacket_kurta', 2999),
(55, '2775', 'jacket_kurta', 2999),
(56, '2794', 'jacket_kurta', 2999),
(57, '2796', 'jacket_kurta', 2999),
(58, '2714', 'jacket_kurta', 2999),
(59, '2731', 'jacket_kurta', 2999),
(60, '2732', 'jacket_kurta', 2999),
(61, '2755', 'jacket_kurta', 2999),
(62, '2884', 'jacket_kurta', 2999),
(63, '2760', 'jacket_kurta', 2999),
(64, '2770', 'jacket_kurta', 2999),
(65, '2782', 'jacket_kurta', 2999),
(66, '2783', 'jacket_kurta', 2999),
(67, '2789', 'jacket_kurta', 2999),
(68, '2792', 'jacket_kurta', 2999),
(69, '2793', 'jacket_kurta', 2999),
(70, '2791', 'jacket_kurta', 2999),
(71, '2888', 'jacket_kurta', 2999),
(72, '2668', 'jacket_kurta', 2999),
(73, '2669', 'jacket_kurta', 2999),
(74, '2683', 'jacket_kurta', 2999),
(75, '2704', 'jacket_kurta', 2999),
(76, '2706', 'jacket_kurta', 2999),
(77, '2713', 'jacket_kurta', 2999),
(78, '3005', 'jacket_kurta', 2999),
(79, '3007', 'jacket_kurta', 2999),
(80, '3018', 'jacket_kurta', 2999),
(81, '3019', 'jacket_kurta', 2999),
(82, '2580', 'indo', 4999),
(83, '2580', 'indo', 4999),
(84, '2580', 'indo', 4999),
(85, '2580', 'indo', 4999),
(86, '2580', 'indo', 4999),
(87, '2580', 'indo', 4999),
(88, '2580', 'indo', 4999),
(89, '2580', 'indo', 4999),
(90, '2580', 'indo', 4999),
(91, '2580', 'indo', 4999),
(92, '2580', 'indo', 4999),
(93, '2580', 'indo', 4999),
(94, '2580', 'indo', 4999),
(95, '2580', 'indo', 4999),
(96, '2580', 'indo', 4999),
(97, '2580', 'indo', 4999),
(98, '2580', 'indo', 4999),
(99, '2580', 'indo', 4999),
(100, '2580', 'indo', 4999),
(101, '2580', 'indo', 4999),
(102, '2580', 'indo', 4999),
(103, '2580', 'indo', 4999),
(104, '2580', 'indo', 4999),
(105, '2580', 'indo', 4999),
(106, '2580', 'indo', 4999),
(107, '2580', 'indo', 4999),
(108, '2580', 'indo', 4999),
(109, '2580', 'indo', 4999),
(110, '2580', 'indo', 4999),
(111, '2580', 'indo', 4999),
(112, '2580', 'indo', 4999),
(113, '2580', 'indo', 4999),
(114, '2580', 'indo', 4999),
(115, '2580', 'indo', 4999),
(116, '2580', 'indo', 4999),
(117, '2580', 'indo', 4999),
(118, '2580', 'indo', 4999),
(119, '2580', 'indo', 4999),
(120, '2580', 'indo', 4999),
(121, '2580', 'indo', 4999),
(122, '2580', 'indo', 4999),
(123, '2580', 'indo', 4999),
(124, '2580', 'indo', 4999),
(125, '2580', 'indo', 4999),
(126, '2580', 'indo', 4999),
(127, '2580', 'indo', 4999),
(128, '2580', 'indo', 4999),
(129, '2580', 'indo', 4999),
(130, '2580', 'indo', 4999),
(131, '2580', 'indo', 4999),
(132, '2580', 'indo', 4999);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `product` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `name`, `email`, `phone`, `address`, `product`, `date`) VALUES
(1, 'A', 'abc@xyz.com', 2898, 'MNO', '1000', '2017-02-11 07:59:05'),
(2, 'A', 'abc@xyz.com', 2898, 'MNO', '1000', '2017-02-11 08:02:08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
