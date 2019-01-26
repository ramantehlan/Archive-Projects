-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2011 at 06:47 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `buds`
--
CREATE DATABASE `buds` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `buds`;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `friend_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `group_id` int(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `friends_with` int(11) NOT NULL,
  PRIMARY KEY (`friend_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`friend_id`, `member_id`, `datetime`, `group_id`, `status`, `friends_with`) VALUES
(2, 1, '0000-00-00 00:00:00', 1, 'c', 9),
(3, 1, '0000-00-00 00:00:00', 0, 'c', 10),
(4, 1, '0000-00-00 00:00:00', 0, 'c', 11),
(8, 12, '0000-00-00 00:00:00', 0, 'c', 9);

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group` int(11) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `group`
--


-- --------------------------------------------------------

--
-- Table structure for table `invite_status`
--

CREATE TABLE IF NOT EXISTS `invite_status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `invite_status`
--


-- --------------------------------------------------------

--
-- Table structure for table `member_status`
--

CREATE TABLE IF NOT EXISTS `member_status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `member_status`
--


-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(16) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact_no` int(14) NOT NULL,
  `url` varchar(100) NOT NULL,
  `status_id` int(11) NOT NULL,
  `birthdate` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `date_added` datetime NOT NULL,
  `relationship_id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `username`, `password`, `firstname`, `lastname`, `address`, `contact_no`, `url`, `status_id`, `birthdate`, `gender`, `date_added`, `relationship_id`, `photo`) VALUES
(1, 'r', 'r', 'Rose Ann', 'Arroyo', 'Talisay', 2147483647, 'roseann_419@yahoo.com', 1, 'april 19, 1991', 'female', '0000-00-00 00:00:00', 1, 'images/1300664604.jpg'),
(4, 'o', 'o', 'Olive Joy', 'Tonacao', 'Talisay City', 2147483647, 'olive@yahoo.com', 1, 'September-10-1994', 'male', '0000-00-00 00:00:00', 0, 'images/profile.gif'),
(6, 'a', 'a', 'Roston', 'Arroyo', 'Talisay City', 2147483647, 'roston@yahoo.com', 1, 'February-16-1994', 'female', '0000-00-00 00:00:00', 0, 'images/1300554630.jpg'),
(7, 'c', 'c', 'Charity Mae', 'Repique', 'Himamaylan', 123456978, 'chacha@yahoo.com', 1, 'February-14-1998', 'male', '0000-00-00 00:00:00', 0, 'images/1300554630.jpg'),
(8, 'n', 'n', 'Nikki', 'Monsale', 'Hinigaran', 24645949, 'nik@yahoo.com', 1, 'November-18-1997', 'male', '0000-00-00 00:00:00', 0, 'images/1300554630.jpg'),
(9, 'k', 'k', 'Kathleen', 'Francisco', 'Bacolod', 98567457, 'ffff@yahoo.com', 2, 'March-10-1992', 'femALE', '0000-00-00 00:00:00', 0, 'images/1300554630.jpg'),
(11, 'Q', 'Q', 'Rose May', 'Dela Cruz', 'FDSG', 0, 'Q@YAHOO.COM', 1, 'February-16-1995', 'male', '0000-00-00 00:00:00', 0, 'images/1300554630.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `reciever_id` int(11) NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `content` varchar(100) NOT NULL,
  `status` varchar(5) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `reciever_id`, `recipient_id`, `datetime`, `content`, `status`) VALUES
(7, 12, 1, '2011-03-21 04:29:19', 'Law-ai sa mu', 'r'),
(6, 1, 12, '2011-03-21 04:19:48', 'test message', 'r'),
(5, 10, 11, '2011-03-20 09:04:55', 'adsf', 'r'),
(8, 1, 9, '2011-03-21 05:39:13', 'sadf', 'r'),
(9, 9, 1, '2011-03-21 05:40:56', 'safdaf', 'r');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(50) NOT NULL,
  `posts` text NOT NULL,
  `date` datetime NOT NULL,
  `post_to` int(11) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=112 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `member_id`, `posts`, `date`, `post_to`) VALUES
(104, '12', 'test', '2011-03-20 03:59:49', 12),
(100, '12', 's', '2011-03-20 03:43:40', 11),
(99, '12', 'tes', '2011-03-20 03:43:03', 11),
(98, '12', 'tes', '2011-03-20 03:40:40', 11),
(105, '12', 'test', '2011-03-20 04:00:20', 12),
(106, '12', 'test', '2011-03-20 04:01:16', 12);

-- --------------------------------------------------------

--
-- Table structure for table `relationship`
--

CREATE TABLE IF NOT EXISTS `relationship` (
  `relationship_id` int(11) NOT NULL AUTO_INCREMENT,
  `relationship` varchar(50) NOT NULL,
  PRIMARY KEY (`relationship_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `relationship`
--

INSERT INTO `relationship` (`relationship_id`, `relationship`) VALUES
(1, 'Single'),
(2, 'In Relationship'),
(3, 'Complicated'),
(4, 'Married'),
(5, 'Widowed');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `upload_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL,
  UNIQUE KEY `upload_id` (`upload_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`upload_id`, `member_id`, `file_name`, `caption`, `datetime`) VALUES
(1, 9, 'images/upload/1300688162.jpg', 'images/upload/1300688162.jpg', '2011-03-21 06:16:02'),
(2, 9, 'images/upload/1300688229.jpg', 'images/upload/1300688229.jpg', '2011-03-21 06:17:09'),
(3, 9, 'images/upload/1300688242.jpg', 'images/upload/1300688242.jpg', '2011-03-21 06:17:22'),
(4, 9, 'images/upload/1300688386.jpg', 'images/upload/1300688386.jpg', '2011-03-21 06:19:46'),
(5, 9, 'images/upload/1300688401.jpg', 'images/upload/1300688401.jpg', '2011-03-21 06:20:01'),
(6, 9, 'images/upload/1300688543.jpg', 'images/upload/1300688543.jpg', '2011-03-21 06:22:23'),
(7, 9, 'images/upload/1300688559.jpg', 'images/upload/1300688559.jpg', '2011-03-21 06:22:39'),
(8, 9, 'images/upload/1300688571.jpg', 'images/upload/1300688571.jpg', '2011-03-21 06:22:51'),
(9, 9, 'images/upload/1300688585.jpg', 'images/upload/1300688585.jpg', '2011-03-21 06:23:05'),
(10, 9, 'images/upload/1300688595.jpg', 'images/upload/1300688595.jpg', '2011-03-21 06:23:15'),
(11, 9, 'images/upload/1300688600.jpg', 'images/upload/1300688600.jpg', '2011-03-21 06:23:20'),
(12, 9, 'images/upload/1300688605.jpg', 'images/upload/1300688605.jpg', '2011-03-21 06:23:25'),
(13, 9, 'images/upload/1300688609.jpg', 'images/upload/1300688609.jpg', '2011-03-21 06:23:29');
