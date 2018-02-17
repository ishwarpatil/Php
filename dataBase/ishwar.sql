-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2018 at 01:21 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ishwar`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `dept_delete` (IN `did` INT)  NO SQL
DELETE from dept WHERE id=did$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `dept_display` ()  NO SQL
SELECT * FROM dept$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `dept_insert` (IN `dname` VARCHAR(30), IN `dcity` VARCHAR(30))  NO SQL
INSERT INTO dept(name,city) VALUES(dname,dcity)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `dept_update` (IN `did` INT, IN `dname` VARCHAR(30), IN `dcity` VARCHAR(30))  NO SQL
UPDATE dept set name=dname,city=dcity where id=did$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `name`, `city`) VALUES
(5, 'cleark', 'surat'),
(6, 'accounter', 'nashik'),
(7, 'manager', 'pune'),
(11, 'aa', 'kk'),
(12, 'l', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `dum`
--

CREATE TABLE `dum` (
  `id` int(11) NOT NULL,
  `q` varchar(30) NOT NULL,
  `w` varchar(30) NOT NULL,
  `e` varchar(30) NOT NULL,
  `r` varchar(30) NOT NULL,
  `t` varchar(30) NOT NULL,
  `y` varchar(30) NOT NULL,
  `u` varchar(30) NOT NULL,
  `i` varchar(30) NOT NULL,
  `p` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `salary` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `name`, `salary`) VALUES
(15, 'dipesh', '12000'),
(16, 'abhinav', '20000'),
(17, 'nehal', '11000'),
(18, 'manoj', '130000'),
(19, 'prashant', '25000'),
(20, 'mukesh', '50000'),
(21, 'raj', '15000'),
(22, 'abhinav', '60000'),
(23, 'mayur', '18000'),
(26, 'pooja', '15000'),
(27, 'bharti', '90000'),
(28, 'manoj', '14500'),
(29, 'amit', '16000'),
(30, 'rajvi', '11000'),
(31, 'patil', '50000'),
(32, 'patil', '50000'),
(33, 'aaaa', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dum`
--
ALTER TABLE `dum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dum`
--
ALTER TABLE `dum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
