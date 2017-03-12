-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 12, 2017 at 09:40 PM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `hyperloopUC`
--
CREATE DATABASE IF NOT EXISTS `hyperloopUC` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hyperloopUC`;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blogId` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `blogDescription` text NOT NULL,
  `mediaLink` varchar(255) DEFAULT NULL,
  `publishedDate` date NOT NULL,
  `showFlag` varchar(6) NOT NULL,
  PRIMARY KEY (`blogId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Truncate table before insert `blog`
--

TRUNCATE TABLE `blog`;
--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blogId`, `title`, `blogDescription`, `mediaLink`, `publishedDate`, `showFlag`) VALUES
(1, 'Test', 'Test Description', '', '2016-11-30', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `mediaId` int(11) NOT NULL AUTO_INCREMENT,
  `publisherName` varchar(255) NOT NULL,
  `publishingDate` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `logoLink` varchar(255) NOT NULL,
  `webLink` varchar(255) NOT NULL,
  `showFlag` varchar(255) NOT NULL DEFAULT 'true',
  `imageType` varchar(10) NOT NULL DEFAULT 'square',
  PRIMARY KEY (`mediaId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Truncate table before insert `media`
--

TRUNCATE TABLE `media`;
--
-- Dumping data for table `media`
--

INSERT INTO `media` (`mediaId`, `publisherName`, `publishingDate`, `title`, `logoLink`, `webLink`, `showFlag`, `imageType`) VALUES
(1, 'Anuj', '2016-11-30', 'Anuj Shah', 'anuj', 'anuj', 'false', 'square'),
(2, 'Time', '2016-02-04', 'See the Futuristic Pods That Could Change How We Travel', 'https://upload.wikimedia.org/wikipedia/en/2/28/Business_Insider_Logo.png', 'http://time.com/4207248/hyperloop-pod-design-competition/', 'true', 'rectangle'),
(3, 'Test', '2015-12-31', 'This is test post', 'https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwjPg63Q45jSAhVMSiYKHSDGB_gQjRwIBw&url=http%3A%2F%2Ftime.com%2F&psig=AFQjCNFks1LBugIaMUn6Gl1zMfo0WlKeeA&ust=1487477496486151', 'http://time.com/4207248/hyperloop-pod-design-competition/', 'true', 'square');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `teamId` int(11) NOT NULL AUTO_INCREMENT,
  `teamName` varchar(255) NOT NULL,
  `showFlag` varchar(6) NOT NULL DEFAULT 'true',
  PRIMARY KEY (`teamId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Truncate table before insert `team`
--

TRUNCATE TABLE `team`;
--
-- Dumping data for table `team`
--

INSERT INTO `team` (`teamId`, `teamName`, `showFlag`) VALUES
(1, 'Aerodynamics', 'true'),
(2, 'Electronics', 'true'),
(3, 'Transponic', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `teamMembers`
--

CREATE TABLE `teamMembers` (
  `memberId` int(11) NOT NULL AUTO_INCREMENT,
  `teamId` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `linkedInLink` varchar(255) NOT NULL,
  `imageLink` varchar(255) NOT NULL,
  `showFlag` varchar(6) NOT NULL DEFAULT 'true',
  PRIMARY KEY (`memberId`),
  KEY `teamId` (`teamId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Truncate table before insert `teamMembers`
--

TRUNCATE TABLE `teamMembers`;
--
-- Dumping data for table `teamMembers`
--

INSERT INTO `teamMembers` (`memberId`, `teamId`, `fullName`, `linkedInLink`, `imageLink`, `showFlag`) VALUES
(1, 3, 'Anuj Shah', 'https://www.linkedin.com/in/anuj-shah-a0834582/', 'https://yt3.ggpht.com/-v0soe-ievYE/AAAAAAAAAAI/AAAAAAAAAAA/OixOH_h84Po/s900-c-k-no-mo-rj-c0xffffff/photo.jpg', 'true');
