-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2014 at 11:30 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bunchup`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `pin` int(11) NOT NULL,
  `db_name` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `phone` int(20) NOT NULL,
  `birth_year` year(4) NOT NULL,
  `birth_month` int(2) NOT NULL,
  `birth_day` int(2) NOT NULL,
  `join_year` year(4) NOT NULL,
  `join_month` int(2) NOT NULL,
  `join_date` int(2) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `country` varchar(355) NOT NULL,
  `question` varchar(30) NOT NULL,
  `answer` varchar(20) NOT NULL,
  `home_town` varchar(355) NOT NULL,
  `birth_town` varchar(355) NOT NULL,
  `school_name` varchar(355) NOT NULL,
  `collage_name` varchar(355) NOT NULL,
  `search_url` varchar(30) NOT NULL,
  `Profile_picture` text NOT NULL,
  `online` varchar(3) NOT NULL,
  `show_dob` int(1) NOT NULL,
  `user_show_country` int(1) NOT NULL,
  `show_home` int(1) NOT NULL,
  `show_birth` int(1) NOT NULL,
  `show_school` int(1) NOT NULL,
  `show_nick_name` int(1) NOT NULL,
  `show_about` int(1) NOT NULL,
  `show_work` int(1) NOT NULL,
  `show_collage` int(1) NOT NULL,
  `show_relation` int(1) NOT NULL,
  `show_hobby` int(1) NOT NULL,
  `show_sports` int(1) NOT NULL,
  `show_book` int(1) NOT NULL,
  `show_ideal` int(1) NOT NULL,
  `share_general_information_with` varchar(50) NOT NULL,
  `share_advance_information_with` varchar(50) NOT NULL,
  `nick_name` varchar(50) NOT NULL,
  `about` text NOT NULL,
  `work` varchar(50) NOT NULL,
  `relationship_with` varchar(50) NOT NULL,
  `hobby` varchar(50) NOT NULL,
  `sports` varchar(50) NOT NULL,
  `book` varchar(50) NOT NULL,
  `ideal` varchar(50) NOT NULL,
  `allow_friend_request` int(1) NOT NULL,
  `allow_follow_request` int(1) NOT NULL,
  `allow_question` int(1) NOT NULL,
  `allow_r_f_q_to` varchar(20) NOT NULL,
  PRIMARY KEY (`user_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=91 ;

--
-- Dumping data for table `users`
--


--
-- Table structure for table `users_display`
--

CREATE TABLE IF NOT EXISTS `users_display` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(50) NOT NULL,
  `bg_color` varchar(100) NOT NULL,
  `bg_img` text NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users_display`
--



-- --------------------------------------------------------

--
-- Table structure for table `visiter_of_each_day`
--

CREATE TABLE IF NOT EXISTS `visiter_of_each_day` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `visiting_date` date NOT NULL,
  `visiting_time` time NOT NULL,
  `visiter_country` varchar(355) NOT NULL,
  `visiter_static_ip` varchar(30) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=129 ;

--
-- Dumping data for table `visiter_of_each_day`
--



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
