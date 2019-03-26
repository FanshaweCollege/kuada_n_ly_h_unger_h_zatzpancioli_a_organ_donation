-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2019 at 12:37 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

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
-- Table structure for table `tbl_event`
--

DROP TABLE IF EXISTS `tbl_event`;
CREATE TABLE IF NOT EXISTS `tbl_event` (
  `event_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `event_img` varchar(100) NOT NULL,
  `event_description` varchar(450) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`event_id`, `event_img`, `event_description`) VALUES
(1, 'event_poster.jpg', 'Organ Donation Event | Saturday 25 May 2019 | Victoria Park - London, ON | Registration Truck | Lectures | Live Music | Food Trucks | Graffiti & Street Art Exhibition.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_story`
--

DROP TABLE IF EXISTS `tbl_story`;
CREATE TABLE IF NOT EXISTS `tbl_story` (
  `story_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `story_title` varchar(75) CHARACTER SET utf8 NOT NULL,
  `story_author` varchar(75) CHARACTER SET utf8 NOT NULL,
  `story_img` varchar(75) CHARACTER SET utf8 NOT NULL DEFAULT 'default-story.jpg',
  `story_text` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`story_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_story`
--

INSERT INTO `tbl_story` (`story_id`, `story_title`, `story_author`, `story_img`, `story_text`) VALUES
(1, 'One Story', 'Joey Yo', 'joey.jpg', 'story one blah blah blah'),
(2, 'Story Two', 'Monica', 'monica.jpg', 'story 2 blah blah blah'),
(5, 'tester', 'meeeee', 'pink.jpg', 'this is the story!');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_ip` varchar(50) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_ip`) VALUES
(7, '', '', '', '', '2019-03-25 21:50:28', '::1'),
(8, 'Helen', 'MasterBuilder', '$2y$10$VZRhd/5bSxiFbLkDsbmvt.8jRqtV7pV2Z4mZ0swJnC8BWTMFdy7YS', 'master@builder.ca', '2019-03-25 21:47:23', 'no'),
(9, 'd', 'd', '$2y$10$WYINxuLTCc57hFl6eeXX8e..zawkPztbxihS.qyMWYybMnWbjhGSG', 'dake@dake.ca', '2019-03-25 21:49:34', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

DROP TABLE IF EXISTS `tbl_video`;
CREATE TABLE IF NOT EXISTS `tbl_video` (
  `video_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `video_thumb` varchar(150) NOT NULL,
  `video_path` varchar(150) NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`video_id`, `video_thumb`, `video_path`) VALUES
(1, 'video_thumb.jpg', 'video.mp4'),
(3, 'video_thumb.jpg', 'video.mp4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
