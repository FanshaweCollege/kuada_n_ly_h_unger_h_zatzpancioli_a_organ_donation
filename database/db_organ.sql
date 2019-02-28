-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 20, 2019 at 03:22 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_organ`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_story`
--

DROP TABLE IF EXISTS `tbl_story`;
CREATE TABLE IF NOT EXISTS `tbl_story` (
  `story_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `story_name` varchar(75) NOT NULL,
  `story_email` varchar(75) NOT NULL,
  `story_subject` text NOT NULL,
  PRIMARY KEY (`story_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_story`
--

INSERT INTO `tbl_story` (`story_id`, `story_name`, `story_email`, `story_subject`) VALUES
(1, 'Anna Carolina Zatz Pancioli', 'annapancioli@gmail.com', 'aaaaa'),
(2, 'Nathalia', 'nathalia@gmail.com', 'aaaaaa'),
(3, 'Ju', 'ju@gmail.com', 'ju'),
(4, 'liam', 'liam@liam.com', 'liam'),
(5, 'Kathy', 'kathy@gmail.com', 'story'),
(6, 'Joe', 'joe@gmail.com', 'joe'),
(7, 'john', 'john@gmail.com', 'john'),
(8, 'beth', 'beth@gmail.com', 'beth story');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(75) NOT NULL,
  `user_name` varchar(75) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_email` varchar(75) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_attempts` varchar(50) NOT NULL,
  `user_ip` varchar(75) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_attempts`, `user_ip`) VALUES
(1, '', 'admin', '123', '', '2019-02-20 00:49:59', '0', '::1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
