-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2017 at 07:11 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `filesharing`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
`id` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `orgID` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `userName`, `password`, `orgID`, `role`) VALUES
(2, 'sysadmin', 'a8f5f167f44f4964e6c998dee827110c', 0, 'systemadmin'),
(3, 'asdasd', 'a8f5f167f44f4964e6c998dee827110c', 2, 'admin'),
(4, 'admin1', 'a8f5f167f44f4964e6c998dee827110c', 1, 'admin'),
(5, 'admin2', 'a8f5f167f44f4964e6c998dee827110c', 2, 'admin'),
(6, 'admin1', 'a8f5f167f44f4964e6c998dee827110c', 1, 'admin'),
(7, 'staff', 'a8f5f167f44f4964e6c998dee827110c', 1, 'admin'),
(8, 'staffs', 'a8f5f167f44f4964e6c998dee827110c', 0, 'admin'),
(9, 'myadmin', 'a8f5f167f44f4964e6c998dee827110c', 2, 'admin'),
(10, 'mystaff', 'a8f5f167f44f4964e6c998dee827110c', 1, 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `homecontent`
--

CREATE TABLE IF NOT EXISTS `homecontent` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `homecontent`
--

INSERT INTO `homecontent` (`id`, `title`, `content`, `type`) VALUES
(1, 'asda', 'asdasd', 'about'),
(2, 'asdadas', 'asdasdasd\r\n', 'caption');

-- --------------------------------------------------------

--
-- Table structure for table `homeimage`
--

CREATE TABLE IF NOT EXISTS `homeimage` (
`id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `homeimage`
--

INSERT INTO `homeimage` (`id`, `type`, `file`) VALUES
(1, 'logo', '3f46b5be7766c36622dca265ef1d1818.jpg'),
(2, 'banner', 'f2574114d4328036de73607c2948dc89.png');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE IF NOT EXISTS `organization` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`id`, `name`, `slug`) VALUES
(1, 'org1', 'org1'),
(2, 'org2', 'org2'),
(3, 'org4', 'org4');

-- --------------------------------------------------------

--
-- Table structure for table `org_about`
--

CREATE TABLE IF NOT EXISTS `org_about` (
`id` int(11) NOT NULL,
  `about` varchar(255) NOT NULL,
  `org_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `org_about`
--

INSERT INTO `org_about` (`id`, `about`, `org_id`) VALUES
(1, 'about us', 1);

-- --------------------------------------------------------

--
-- Table structure for table `org_banner`
--

CREATE TABLE IF NOT EXISTS `org_banner` (
`id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `org_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `org_banner`
--

INSERT INTO `org_banner` (`id`, `file`, `org_id`) VALUES
(1, '218d9d78a7b2704cd633d39c41bbecf2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
`id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `mi` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contactNumber` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `userID`, `email`, `lastName`, `firstName`, `mi`, `address`, `contactNumber`) VALUES
(1, 2, 'sdasd', 'asda', 'asd', 'a', 'sd', 'asd'),
(2, 3, 'asd@mail.com', 'asda', 'asd', 'as', 'asd', '23123'),
(3, 4, 'asd@mai.com', 'asd', 'asd', 'as', 'asdasd', '32345345'),
(4, 5, 'admin2@mail.com', 'asdasd', 'asdasd', 'a', 'asdasd', '234'),
(5, 6, 'asd2@mail.cl', 'asd', 'asd', 'as', 'a', '1213'),
(6, 7, 'asdsda@asd.s', 'asd', 'asdasd', 'a', 'asda', '13123132'),
(7, 8, 'asdasda@asda.sda', 'asdasd', 'asdasd', 'as', 'asdasd', '131231231'),
(8, 9, 'asdasdasdsa@asda.s', 'asdasd', 'asd', 'as', 'asdasd', '11231'),
(9, 10, 'staff2@maill.com', 'asdasd', 'asdasd', 'a', 'asdasd', '242342342');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homecontent`
--
ALTER TABLE `homecontent`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeimage`
--
ALTER TABLE `homeimage`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `org_about`
--
ALTER TABLE `org_about`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `org_banner`
--
ALTER TABLE `org_banner`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `homecontent`
--
ALTER TABLE `homecontent`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `homeimage`
--
ALTER TABLE `homeimage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `org_about`
--
ALTER TABLE `org_about`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `org_banner`
--
ALTER TABLE `org_banner`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
