-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 14, 2016 at 01:48 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yamakoko`
--
CREATE DATABASE `yamakoko` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `yamakoko`;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `comments` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `comments`) VALUES
(1, 'yuta', 'yuta@gmail.com', 'hello'),
(2, 'kaisato', 'kai@gmail.com', 'i am 21 years old'),
(3, '', '', ''),
(4, 'sakabe', 'sakabe@gmail', 'hello'),
(5, 'yumi', 'yumi@gmail.com', 'hello world'),
(6, '', '', ''),
(7, 'yuta', 'yuta@gmail.com', 'hello '),
(8, 'yuta', 'yuta@gmail.com', 'hello raj'),
(9, 'yuta', 'yuta@gmail.com', 'hello world'),
(10, 'rina', 'rina@gmail.com', 'hi welcome back'),
(11, 'katsuya', 'katsuya@gmail.com', 'jisan'),
(12, 'shin ', 'shin@gmail.com', 'hello'),
(13, 'test', 'test', 'test'),
(14, 'yumi', 'yumi@gmail.com', 'alpinee');

-- --------------------------------------------------------

--
-- Table structure for table `p_sale`
--

CREATE TABLE IF NOT EXISTS `p_sale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(50) DEFAULT NULL,
  `p_price` varchar(20) DEFAULT NULL,
  `p_rate` varchar(20) DEFAULT NULL,
  `p_discription` varchar(300) DEFAULT NULL,
  `p_url` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `p_sale`
--

INSERT INTO `p_sale` (`id`, `p_name`, `p_price`, `p_rate`, `p_discription`, `p_url`) VALUES
(1, 'zac', '15000', '4', 'zac for sale', 'pic/yamakoko_zac.jpg'),
(2, 'shoes', '12000', '4', 'shoes for sale', 'pic/yamakoko_shoes.jpg'),
(3, 'tent', '25000', '3', 'tent for sale', 'pic/yamakoko_tent.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `usertype` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(1, 'yuta', 'yuta@gmail.com', '', 'cus'),
(2, 'kaii', 'kai@gmail.com ', '112233', 'cus'),
(3, 'abhi', 'abhi@gmail.com', '112233', 'cus'),
(4, '', '', '', 'cus'),
(5, '', '', '', 'cus'),
(6, 'yuta', 'yuta@gmail.com', '112233', 'cus'),
(7, 'abhi', 'abhi@gmail.com', '112233', 'cus'),
(8, 'jjjj', 'jjjj', 'jjjj', 'cus'),
(9, '', '', '', 'cus'),
(10, 'iiii', 'iiii', 'iiii', 'cus'),
(11, 'oooo', 'oooo', 'oooo', 'cus'),
(12, 'ioio', 'ioio', 'ioio', 'cus'),
(13, 'jjjj', 'jjjj', 'jjjj', 'cus'),
(14, 'oooo', 'oooo', 'oooo', 'cus'),
(15, 'okok', 'okok', 'okok', 'cus'),
(16, 'iiii', 'iiii', 'iiii', 'cus'),
(17, 'kakuichi', 'kakuichi@gmail.com', '112233', 'cus'),
(18, 'abhi', 'abhi@gmail.com', '112233', 'cus'),
(19, 'midori', 'midori@gmail.com', '112233', 'cus'),
(20, 'rina', 'rina@gmail.com', '112233', 'cus'),
(21, 'katsuya', 'katsuya@gmail.com', '112233', 'cus'),
(22, 'check', 'check', '112233', 'cus'),
(23, 'yumi', 'yumi@gmail.com', '112233', 'cus');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
