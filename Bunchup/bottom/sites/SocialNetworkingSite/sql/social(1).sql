-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 26, 2011 at 08:59 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  PRIMARY KEY (`admin_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_ID`, `username`, `password`) VALUES
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `commentlike`
--

CREATE TABLE IF NOT EXISTS `commentlike` (
  `commentlikeid` int(11) NOT NULL AUTO_INCREMENT,
  `commentid` int(11) NOT NULL,
  `memberid` int(11) NOT NULL,
  PRIMARY KEY (`commentlikeid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `commentlike`
--


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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`friend_id`, `member_id`, `datetime`, `group_id`, `status`, `friends_with`) VALUES
(2, 1, '0000-00-00 00:00:00', 1, 'c', 9),
(3, 1, '0000-00-00 00:00:00', 0, 'c', 10),
(4, 1, '0000-00-00 00:00:00', 0, 'c', 11),
(8, 12, '0000-00-00 00:00:00', 0, 'c', 9),
(9, 1, '0000-00-00 00:00:00', 0, 'u', 9);

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
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(16) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact_no` int(14) NOT NULL,
  `url` varchar(100) NOT NULL,
  `status_id` int(11) NOT NULL,
  `birthdate` varchar(20) NOT NULL,
  `student_id` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `date_added` datetime NOT NULL,
  `relationship_id` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `interest` varchar(300) NOT NULL,
  `Education` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `password`, `firstname`, `lastname`, `address`, `contact_no`, `url`, `status_id`, `birthdate`, `student_id`, `gender`, `date_added`, `relationship_id`, `photo`, `interest`, `Education`, `course`) VALUES
(29, 'demm', 'Fritz Foulke', 'Segotier', '', 0, 'naruto16_fanatic@yahoo.com', 0, '', 29000354, 'I am', '0000-00-00 00:00:00', 0, 'default.jpg', '', '', ''),
(30, 'zianrapo04', 'Krisalie Loise', 'Po', '', 0, 'kobinz_07@yahoo.com', 0, '', 29000411, 'Girl', '0000-00-00 00:00:00', 0, 'default.jpg', '', '', ''),
(31, 'malyn', 'Malyn', 'Morados', 'Talisay City', 495, 'malyn@yahoo.com', 0, 'April-30-1993', 29000287, 'Girl', '0000-00-00 00:00:00', 0, 'default.jpg', 'lagaw2', '3rd yr college at CHMSC', 'Bachelor of Science in Information System'),
(32, 'malyn', 'Mhaleen', 'Morados', '', 0, 'malyn@yahoo.com', 0, '', 1111, 'Girl', '0000-00-00 00:00:00', 0, 'default.jpg', '', '', ''),
(33, 'malyn', 'Malyn', 'Morados', '', 0, 'malynmorados@yahoo.com', 0, '', 12345, 'Female', '0000-00-00 00:00:00', 0, 'default.jpg', '', '', ''),
(34, 'malyn', 'MalynM', 'Morados', '', 0, 'malynmorados@yahoo.com', 0, '', 12341, 'Female', '0000-00-00 00:00:00', 0, 'default.jpg', '', '', ''),
(35, 'dddd', 'Fretz', 'Segotier', '', 0, 'ndsfjsfg@yahoo.com', 0, '', 3000, 'Male', '0000-00-00 00:00:00', 0, 'default.jpg', '', '', '');

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
-- Table structure for table `postcomments`
--

CREATE TABLE IF NOT EXISTS `postcomments` (
  `postcommentid` int(11) NOT NULL AUTO_INCREMENT,
  `postid` int(11) NOT NULL,
  `memberid` int(11) NOT NULL,
  `date` date NOT NULL,
  `comment` varchar(300) NOT NULL,
  PRIMARY KEY (`postcommentid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `postcomments`
--

INSERT INTO `postcomments` (`postcommentid`, `postid`, `memberid`, `date`, `comment`) VALUES
(24, 230, 29, '0000-00-00', 'gwapo si lim'),
(25, 230, 29, '2011-09-22', 'ererererererere'),
(26, 230, 29, '2011-09-22', 'ererererererere'),
(27, 230, 29, '2011-09-22', 'ererererererere'),
(28, 230, 29, '2011-09-22', 'ererererererere'),
(29, 230, 29, '2011-09-22', 'ererererererere'),
(30, 226, 32, '0000-00-00', 'haist'),
(31, 230, 32, '0000-00-00', ''),
(32, 229, 32, '0000-00-00', ''),
(33, 229, 32, '0000-00-00', 'hehe.. wwwwwwwwwwwwwwwwwwwww\n'),
(34, 228, 32, '2011-09-22', 'booag'),
(35, 191, 32, '0000-00-00', 'ererererererer'),
(36, 191, 32, '0000-00-00', 'si malyn bakud'),
(37, 229, 32, '0000-00-00', ''),
(38, 229, 32, '0000-00-00', ''),
(39, 229, 32, '0000-00-00', ''),
(40, 228, 32, '0000-00-00', ''),
(41, 228, 32, '0000-00-00', ''),
(42, 228, 32, '0000-00-00', ''),
(43, 228, 32, '0000-00-00', ''),
(44, 228, 32, '0000-00-00', ''),
(45, 228, 32, '0000-00-00', ''),
(46, 195, 32, '0000-00-00', 'sdfsdf'),
(47, 198, 32, '0000-00-00', 'asdf'),
(48, 199, 32, '0000-00-00', 'wewww'),
(49, 230, 32, '0000-00-00', 'asdf'),
(50, 230, 32, '0000-00-00', ''),
(51, 230, 32, '0000-00-00', 'asdf'),
(52, 191, 32, '0000-00-00', 'sdfsdfsdfsd'),
(53, 226, 29, '2011-09-23', 'wewew'),
(54, 230, 29, '2011-09-23', 'werwerewr'),
(55, 230, 29, '2011-09-23', 'werwerewr'),
(56, 230, 29, '2011-09-23', 'werwerewr'),
(57, 230, 29, '2011-09-23', 'werwerewr'),
(58, 230, 29, '2011-09-23', 'werwerewr'),
(59, 230, 29, '2011-09-23', 'werwerewr'),
(60, 228, 32, '2011-09-23', 'hai'),
(61, 232, 32, '2011-09-23', 'kaya ni'),
(62, 224, 32, '2011-09-23', 'hahaha...'),
(63, 220, 32, '2011-09-23', '2log ahHh..'),
(64, 220, 0, '2011-09-23', '2log ahHh..'),
(65, 224, 32, '2011-09-23', 'boang na.. haha.. .. haist.. la na n chanza..'),
(66, 220, 33, '2011-09-24', ''),
(67, 241, 32, '2011-09-25', 'wala guro?. .hahaha'),
(68, 245, 32, '2011-09-25', 'asdfasdfasdf'),
(69, 240, 32, '2011-09-25', ''),
(70, 240, 32, '2011-09-25', 'wewewewrwerewr'),
(71, 220, 32, '2011-09-25', 'wreassadfasdfasfd'),
(72, 240, 32, '2011-09-25', 'wewerdf saahhfgsaf'),
(73, 249, 32, '2011-09-25', 'eeeeeeeeeeee'),
(74, 249, 32, '2011-09-25', 'bbbbbbbbbbbbbbbb'),
(75, 249, 32, '2011-09-25', 'zzzzzzzzzzzzzzzzzzzzzz'),
(76, 249, 32, '2011-09-25', 'ddddddddddddddddddddd'),
(77, 249, 32, '2011-09-25', 'wwwwwwwwwwwwwwww'),
(78, 249, 32, '2011-09-26', 'ewrqwerew'),
(79, 247, 32, '0000-00-00', 'werwe'),
(80, 249, 29, '2011-09-26', 'tinarso'),
(81, 241, 29, '2011-09-26', 'tiarso');

-- --------------------------------------------------------

--
-- Table structure for table `postlike`
--

CREATE TABLE IF NOT EXISTS `postlike` (
  `postlikeid` int(11) NOT NULL AUTO_INCREMENT,
  `postid` int(11) NOT NULL,
  `memberid` int(11) NOT NULL,
  PRIMARY KEY (`postlikeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `postlike`
--

INSERT INTO `postlike` (`postlikeid`, `postid`, `memberid`) VALUES
(1, 200, 0),
(6, 200, 29),
(7, 199, 29),
(8, 205, 31),
(9, 204, 31),
(10, 223, 29),
(11, 230, 32),
(12, 227, 32),
(13, 230, 29),
(14, 0, 29),
(15, 231, 29),
(16, 229, 29),
(17, 228, 29),
(18, 232, 32),
(19, 220, 32),
(20, 245, 32),
(21, 218, 32),
(22, 249, 32),
(23, 249, 29);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(50) NOT NULL,
  `actualpost` varchar(300) NOT NULL,
  `date` datetime NOT NULL,
  `post_to` int(11) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=252 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `member_id`, `actualpost`, `date`, `post_to`) VALUES
(238, '32', 'dapat matapos na ni kay para goods na, .bwahahahaha\r\nenter\r\nenter\r\n1px\r\nlorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor ', '2011-09-25 12:18:05', 32),
(235, '33', '', '2011-09-25 00:05:47', 33),
(239, '32', 'dapat matapos na ni kay para goods na, .bwahahahaha enter enter 1px lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor dapa', '2011-09-25 12:18:46', 32),
(240, '32', 'dapat matapos na ni kay para goods na, .bwahahahaha enter enter 1px lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor dapa', '2011-09-25 12:20:56', 32),
(218, '32', 'mkalagot mani uie.. hahai... bango.a naku uie..\r\n\r\nby: malyn', '2011-09-21 13:24:29', 32),
(247, '32', 'nami gale ubrahan sa terrace noh?. .hahaha', '2011-09-25 13:16:57', 32),
(248, '32', 'makaon na kami. .', '2011-09-25 13:23:10', 32),
(249, '32', 'tapus na kaon, .balik nman ta ah', '2011-09-25 13:50:39', 32),
(246, '32', 'wahaha. .guba tani ba. .hahaha', '2011-09-25 13:09:43', 32),
(245, '32', 'wahahahha', '2011-09-25 12:44:11', 32),
(243, '32', 'kung indi imu post indi mo ma delete. .', '2011-09-25 12:36:07', 32),
(241, '32', 'wew. .naga inprove mn?. .', '2011-09-25 12:23:38', 32),
(242, '32', 'wew', '2011-09-25 12:33:56', 32);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`upload_id`, `member_id`, `file_name`, `caption`, `datetime`) VALUES
(57, 32, '1316005513.jpg', '', '2011-09-26 00:17:52'),
(56, 32, '1315920880.jpg', '', '2011-09-25 20:59:13'),
(55, 32, 'people-icon.png', '', '2011-09-25 20:58:44'),
(54, 32, 'people-icon.png', '', '2011-09-25 20:57:37'),
(53, 32, 'people-icon.png', '', '2011-09-25 20:55:32'),
(52, 32, 'images/upload/', 'images/upload/', '2011-09-25 12:07:12'),
(51, 32, '', '', '2011-09-25 12:05:49'),
(50, 32, '', '', '2011-09-25 11:13:52');
