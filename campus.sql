-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2015 at 01:04 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `campus`
--

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE IF NOT EXISTS `Student` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `inside` varchar(30) NOT NULL DEFAULT 'Null'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`id`, `name`, `inside`) VALUES
(130532, 'Nisham', 'Null'),
(130533, 'Joseph', '1425902482');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
