-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2016 at 08:39 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_employee`
--

CREATE TABLE IF NOT EXISTS `cms_employee` (
  `id` int(120) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `key` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL DEFAULT 'user.png',
  `status` int(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cms_employee`
--

INSERT INTO `cms_employee` (`id`, `fullname`, `email`, `password`, `key`, `image`, `status`) VALUES
(4, 'Josep', 'josep@gmail.com', 'z7ppq8u5dKk=', '3530406', 'banner-f1b035b7146649050910398336.jpg', 1),
(5, 'Andrew', 'andrew@gmail.com', 'q6V6oKvEw5+rqbLhosqqrQ==', '6777677', 'banner-96671501146648715010562563.png', 1),
(6, 'Justin', 'justin@gmail.com', '0M+bq6mc2aarppzpl9yScg==', '3878287', 'banner-2912bbee146649020910175291.png', 1),
(7, 'Litto', 'littochackomp@gmail.com', 's9LBrriJpuGgmovdoNmDrQ==', '433133', 'banner-7c2c48a3146649096410708064.jpg', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
