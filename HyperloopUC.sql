-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 18, 2017 at 05:15 AM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `hyperloopUC`
--

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
  PRIMARY KEY (`mediaId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`mediaId`, `publisherName`, `publishingDate`, `title`, `logoLink`, `webLink`, `showFlag`) VALUES
(1, 'Anuj', '2016-11-30', 'Anuj Shah', 'anuj', 'anuj', 'true'),
(2, 'Time', '2016-02-04', 'See the Futuristic Pods That Could Change How We Travel', 'assets/images/Press_page/time.png', 'http://time.com/4207248/hyperloop-pod-design-competition/', 'true'),
(3, 'Test', '2015-12-31', 'This is test post', 'https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwjPg63Q45jSAhVMSiYKHSDGB_gQjRwIBw&url=http%3A%2F%2Ftime.com%2F&psig=AFQjCNFks1LBugIaMUn6Gl1zMfo0WlKeeA&ust=1487477496486151', 'http://time.com/4207248/hyperloop-pod-design-competition/', 'true');
