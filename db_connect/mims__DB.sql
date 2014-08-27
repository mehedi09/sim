-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2012 at 05:29 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mims_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_info`
--

CREATE TABLE `log_info` (
  `id` int(11) NOT NULL auto_increment,
  `user_name` varchar(120) NOT NULL,
  `pass` varchar(120) NOT NULL,
  `u_type` varchar(120) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `log_info`
--

INSERT INTO `log_info` (`id`, `user_name`, `pass`, `u_type`) VALUES
(1, 'Mehedi Hasan', 'asdf', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(123) NOT NULL,
  `dept` varchar(123) NOT NULL,
  `email` varchar(123) NOT NULL,
  `gender` varchar(123) NOT NULL,
  `cgpa` double NOT NULL,
  `pass` varchar(120) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `dept`, `email`, `gender`, `cgpa`, `pass`) VALUES
(3, 'Mehedi Hasan', 'CSSE', 'mehedi_aiub@hotmail.com', 'Male', 2.1, '912ec803b2ce49e4a541068d495ab570'),
(4, 'Mehedi Hasan', 'CSE', 'mehedi_aiub@hotmail.com', 'Male', 2.1, '30e8f073f388469e0193300623691a36'),
(5, 'Mehedi Hasan', 'CSE', 'mehedi_aiub@hotmail.com', 'Male', 2.1, '30e8f073f388469e0193300623691a36'),
(6, 'Mehedi Hasan', 'CSSE', 'mehedi_aiub@hotmail.com', 'Male', 2.3, '5259ee4a034fdeddd1b65be92debe731'),
(7, 'Mehedi Hasans', 'CSE', 'mehedi_aiub@hotmail.com', 'Male', 2.1, '5259ee4a034fdeddd1b65be92debe731'),
(8, 'Shajib', 'CSE', 'mehedi_aiub@hotmail.com', 'Male', 2.3, '537ce7de34631be4ad1d2ed1825ad3c3');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_info`
--

CREATE TABLE `teacher_info` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(120) NOT NULL,
  `dept` varchar(120) NOT NULL,
  `degree` varchar(120) NOT NULL,
  `gender` varchar(120) NOT NULL,
  `pass` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `teacher_info`
--

INSERT INTO `teacher_info` (`id`, `name`, `dept`, `degree`, `gender`, `pass`, `email`) VALUES
(7, 'Shahin Haque', 'Dept:', 'ssssdd', 'Female', '77a6f2095d735f80548a369276e5ffa6', 'ss@hotmail');
