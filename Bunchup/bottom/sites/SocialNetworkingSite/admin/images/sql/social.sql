-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 22, 2011 at 04:54 AM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `password`, `firstname`, `lastname`, `address`, `contact_no`, `url`, `status_id`, `birthdate`, `student_id`, `gender`, `date_added`, `relationship_id`, `photo`, `interest`, `Education`, `course`) VALUES
(29, 'demm', 'Fritz Foulke', 'Segotier', '', 0, 'naruto16_fanatic@yahoo.com', 0, '', 29000354, 'I am', '0000-00-00 00:00:00', 0, 'default.jpg', '', '', ''),
(30, 'zianrapo04', 'Krisalie Loise', 'Po', '', 0, 'kobinz_07@yahoo.com', 0, '', 29000411, 'Girl', '0000-00-00 00:00:00', 0, 'default.jpg', '', '', ''),
(31, 'malyn', 'Malyn', 'Morados', 'Talisay City', 495, 'malyn@yahoo.com', 0, 'April-30-1993', 29000287, 'Girl', '0000-00-00 00:00:00', 0, 'default.jpg', 'lagaw2', '3rd yr college at CHMSC', 'Bachelor of Science in Information System'),
(32, 'malyn', 'Mhaleen', 'Morados', '', 0, 'malyn@yahoo.com', 0, '', 1111, 'Girl', '0000-00-00 00:00:00', 0, 'default.jpg', '', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `postcomments`
--

INSERT INTO `postcomments` (`postcommentid`, `postid`, `memberid`, `date`, `comment`) VALUES
(24, 230, 29, '0000-00-00', 'gwapo si lim'),
(25, 230, 29, '2011-09-22', 'ererererererere'),
(26, 230, 29, '2011-09-22', 'ererererererere'),
(27, 230, 29, '2011-09-22', 'ererererererere'),
(28, 230, 29, '2011-09-22', 'ererererererere'),
(29, 230, 29, '2011-09-22', 'ererererererere');

-- --------------------------------------------------------

--
-- Table structure for table `postlike`
--

CREATE TABLE IF NOT EXISTS `postlike` (
  `postlikeid` int(11) NOT NULL AUTO_INCREMENT,
  `postid` int(11) NOT NULL,
  `memberid` int(11) NOT NULL,
  PRIMARY KEY (`postlikeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `postlike`
--

INSERT INTO `postlike` (`postlikeid`, `postid`, `memberid`) VALUES
(1, 200, 0),
(6, 200, 29),
(7, 199, 29),
(8, 205, 31),
(9, 204, 31),
(10, 223, 29);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=231 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `member_id`, `actualpost`, `date`, `post_to`) VALUES
(206, '29', 'maru kay malyn', '2011-09-21 00:19:23', 29),
(204, '29', 'erer', '2011-09-21 00:17:10', 29),
(201, '29', '', '2011-09-20 23:53:47', 29),
(200, '29', 'hghgjfhjh', '2011-09-20 19:56:45', 29),
(199, '29', 'puray,puray,puary', '2011-09-20 19:56:29', 29),
(198, '29', 'puray,puray,puary', '2011-09-20 19:55:20', 29),
(219, '', 'mkalagot mani uie.. hahai... bango.a naku uie..\r\n\r\nby: malyn', '2011-09-21 13:26:57', 0),
(220, '32', 'katulogon naku!!', '2011-09-21 20:07:15', 32),
(221, '32', '', '2011-09-21 20:28:37', 32),
(222, '32', '', '2011-09-21 20:29:27', 32),
(223, '32', '', '2011-09-21 20:29:51', 32),
(224, '32', '', '2011-09-21 20:31:44', 32),
(225, '32', 'fffgvjgvb', '2011-09-21 23:55:57', 32),
(226, '32', 'ely', '2011-09-21 23:56:03', 32),
(196, '29', 'Bidding system nman ah. .para goods. .hahahha. .aga na mo. .hahahaha', '2011-09-20 03:23:02', 29),
(195, '29', 'time check. .', '2011-09-20 03:18:50', 29),
(194, '29', 'time check. .', '2011-09-20 03:18:16', 29),
(193, '29', 'time check. .', '2011-09-20 03:15:42', 29),
(205, '29', 'maru kay malyn', '2011-09-21 00:18:22', 29),
(218, '32', 'mkalagot mani uie.. hahai... bango.a naku uie..\r\n\r\nby: malyn', '2011-09-21 13:24:29', 32),
(217, '', 'dot........', '2011-09-21 10:31:37', 0),
(191, '29', 'ay ambot, ,ngaa nga ang java di ko ma kwa. .du ka bwisit!!!', '2011-09-20 02:24:50', 29),
(192, '29', 'ay ambot, ,ngaa nga ang java di ko ma kwa. .du ka bwisit!!!', '2011-09-20 02:57:53', 29),
(212, '29', 'maru ky fritx gling kwan..', '2011-09-21 00:33:29', 29),
(215, '29', 'c almel', '2011-09-21 00:38:03', 29),
(216, '31', 'hahai.. 2u', '2011-09-21 09:11:43', 31),
(227, '29', 'wewew', '2011-09-22 12:09:50', 29),
(228, '29', 'weweweerer', '2011-09-22 12:19:58', 29),
(229, '29', 'weweweerer', '2011-09-22 12:21:05', 29),
(230, '29', 'weweweerer', '2011-09-22 12:22:34', 29);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

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
(13, 9, 'images/upload/1300688609.jpg', 'images/upload/1300688609.jpg', '2011-03-21 06:23:29'),
(14, 1, 'images/upload/1315117735.jpg', 'images/upload/1315117735.jpg', '2011-09-04 06:28:55'),
(15, 1, 'images/upload/1315877285.jpg', 'images/upload/1315877285.jpg', '2011-09-13 01:28:05'),
(16, 1, 'images/upload/1315877368.jpg', 'images/upload/1315877368.jpg', '2011-09-13 01:29:28'),
(17, 1, 'images/upload/1315877370.jpg', 'images/upload/1315877370.jpg', '2011-09-13 01:29:30'),
(18, 1, 'images/upload/1315877385.jpg', 'images/upload/1315877385.jpg', '2011-09-13 01:29:45'),
(19, 1, 'images/upload/1315877919.jpg', 'images/upload/1315877919.jpg', '2011-09-13 01:38:39'),
(20, 1, '', '', '2011-09-13 01:52:51'),
(21, 1, 'images/upload/1315878778.jpg', 'images/upload/1315878778.jpg', '2011-09-13 01:52:58'),
(22, 1, 'images/upload/1315878912.jpg', 'images/upload/1315878912.jpg', '2011-09-13 01:55:12'),
(23, 1, 'images/upload/1315980385.jpg', 'images/upload/1315980385.jpg', '2011-09-14 06:06:25'),
(24, 23, 'images/upload/1315980741.jpg', 'images/upload/1315980741.jpg', '2011-09-14 06:12:21'),
(25, 26, '', '', '2011-09-14 02:58:22'),
(26, 26, 'images/upload/1316012315.jpg', 'images/upload/1316012315.jpg', '2011-09-14 02:58:35'),
(27, 1, 'images/upload/1316097773.png', 'images/upload/1316097773.png', '2011-09-15 02:42:53');
