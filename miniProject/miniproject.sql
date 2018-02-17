-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2018 at 01:16 PM
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
-- Database: `miniproject`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_post` (IN `id` INT, IN `pt` VARCHAR(50), IN `pd` VARCHAR(50), IN `pi` VARCHAR(50))  NO SQL
insert into userpost(id,postTitle,postDescription,postImage)
VALUES(id,pt,pd,pi)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_userInfo` (IN `ufirstName` VARCHAR(30), IN `ulastName` VARCHAR(30), IN `umobile_email` VARCHAR(30), IN `upassword` VARCHAR(30), IN `ubirthday` VARCHAR(30), IN `ugender` VARCHAR(30))  NO SQL
INSERT INTO userinfo(firstName,lastName,mobile_email,password,birthday,gender) VALUES(ufirstName,ulastName,umobile_email,upassword,ubirthday,ugender)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `friendlist`
--

CREATE TABLE `friendlist` (
  `fid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friendlist`
--

INSERT INTO `friendlist` (`fid`, `id`, `image`, `firstName`, `lastName`) VALUES
(1, 3, 'img6.png', 'ishwar', 'patil'),
(4, 3, 'images.jpg', 'raj', 'patil'),
(5, 5, 'img2.png', 'sagar', 'patel');

-- --------------------------------------------------------

--
-- Table structure for table `friendrequest`
--

CREATE TABLE `friendrequest` (
  `rid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friendrequest`
--

INSERT INTO `friendrequest` (`rid`, `id`, `image`, `firstName`, `lastName`) VALUES
(5, 1, 'img2.png', 'sagar', 'patel'),
(6, 1, 'img3.jpg', 'rakesh', 'patil'),
(7, 2, 'img3.jpg', 'rakesh', 'patil'),
(8, 3, 'img3.jpg', 'rakesh', 'patil'),
(9, 4, 'img3.jpg', 'rakesh', 'patil'),
(10, 5, 'img3.jpg', 'rakesh', 'patil');

-- --------------------------------------------------------

--
-- Table structure for table `profilephoto`
--

CREATE TABLE `profilephoto` (
  `pid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profilephoto`
--

INSERT INTO `profilephoto` (`pid`, `id`, `image`) VALUES
(7, 2, 'images (4).jpg'),
(8, 2, 'images (4).jpg'),
(9, 2, 'images (4).jpg'),
(10, 2, 'images (5).jpg'),
(11, 2, 'img2.png'),
(12, 3, 'img1.jpg'),
(13, 3, 'img7.png'),
(17, 4, 'img523.jpg'),
(18, 5, 'img155.jpg'),
(19, 5, 'images.jpg'),
(20, 1, 'img6.png'),
(21, 6, 'img3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `mobile_email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `birthday` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `firstName`, `lastName`, `mobile_email`, `password`, `birthday`, `gender`) VALUES
(1, 'ishwar', 'patil', 'ishwar951@gmail.com', '8140589783', '27-09-1993', 'Male'),
(2, 'sagar', 'patel', 'lanetteam.herry@gmail.com', '123', '4-4-1953', 'Male'),
(3, 'mukesh', 'patil', '8140256987', '523', '5-4-1956', 'Male'),
(4, 'manij', 'jariwala', '9898670325', '888', '4-7-1955', 'Male'),
(5, 'raj', 'patil', 'rajpatil951@gmail.com', '111', '4-7-1957', 'Male'),
(6, 'rakesh', 'patil', '8140589783', '123', '13-4-1964', 'Male'),
(7, 'kajal', 'patil', '9898670325', '153', '5-6-1958', ''),
(8, 'mohni', 'patel', 'mohini@gmail.com', 'mohini', '4-3-1996', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `userpost`
--

CREATE TABLE `userpost` (
  `postId` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `postTitle` varchar(30) NOT NULL,
  `postDescription` varchar(10000) NOT NULL,
  `postImage` varchar(50) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userpost`
--

INSERT INTO `userpost` (`postId`, `id`, `postTitle`, `postDescription`, `postImage`, `likes`) VALUES
(16, 2, 'wiki', 'Reg Pollard (20 January 1903 â€“ 9 March 1978) was', 'img11.jpg', 6),
(17, 2, 'college', 'laja', 'img12.jpg', 2),
(18, 2, 'adsldsak', 'ajsljalsjdlj csald', 'img7.png', 0),
(19, 2, 's ', 'djl ', 'images.jpg', 0),
(20, 2, 'sdsa', 'aslkds', 'images (8).jpg', 0),
(24, 3, 'ishwar', 'pala vbn', 'img8.jpg', 1),
(25, 2, 'aka', 'a;a;a', 'img3.jpg', 3),
(26, 3, 'kaka', 'laslal', 'img9.png', 1),
(27, 4, 'kala', 'laa', 'img5.jpg', 1),
(28, 5, 'feature', 'watching...', 'images.jpg', 1),
(29, 6, 'isjwar', 'laa', 'img4.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friendlist`
--
ALTER TABLE `friendlist`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `userinfo` (`id`);

--
-- Indexes for table `friendrequest`
--
ALTER TABLE `friendrequest`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `userinfo` (`id`);

--
-- Indexes for table `profilephoto`
--
ALTER TABLE `profilephoto`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `userinfo` (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userpost`
--
ALTER TABLE `userpost`
  ADD PRIMARY KEY (`postId`),
  ADD KEY `forign` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friendlist`
--
ALTER TABLE `friendlist`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `friendrequest`
--
ALTER TABLE `friendrequest`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `profilephoto`
--
ALTER TABLE `profilephoto`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userpost`
--
ALTER TABLE `userpost`
  MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `friendlist`
--
ALTER TABLE `friendlist`
  ADD CONSTRAINT `friendlist_ibfk_1` FOREIGN KEY (`id`) REFERENCES `userinfo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `friendrequest`
--
ALTER TABLE `friendrequest`
  ADD CONSTRAINT `friendrequest_ibfk_1` FOREIGN KEY (`id`) REFERENCES `userinfo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profilephoto`
--
ALTER TABLE `profilephoto`
  ADD CONSTRAINT `profilephoto_ibfk_1` FOREIGN KEY (`id`) REFERENCES `userinfo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userpost`
--
ALTER TABLE `userpost`
  ADD CONSTRAINT `userpost_ibfk_1` FOREIGN KEY (`id`) REFERENCES `userinfo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
