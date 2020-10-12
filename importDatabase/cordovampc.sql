-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2020 at 03:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cordovampc`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(31) NOT NULL,
  `news_short_description` text NOT NULL,
  `news_full_content` text NOT NULL,
  `news_author` varchar(120) NOT NULL,
  `news_published_on` datetime NOT NULL,
  `news_image` varchar(100) NOT NULL,
  `p_type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`news_id`, `news_title`, `news_short_description`, `news_full_content`, `news_author`, `news_published_on`, `news_image`, `p_type`) VALUES
(5, 'this is another update', 'a little update', 'fucking update', 'Rcartilla', '2020-10-12 21:17:11', '813355.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `career_id` int(11) NOT NULL,
  `career_title` varchar(31) NOT NULL,
  `career_description` longtext NOT NULL,
  `career_qualification` longtext NOT NULL,
  `career_date` datetime NOT NULL,
  `stats` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`career_id`, `career_title`, `career_description`, `career_qualification`, `career_date`, `stats`) VALUES
(4, 'sample', 'sample', '>sample\r\n>sample', '2020-09-23 10:29:45', 1),
(5, 'This is sample 2', 'this is sample 2', '>sdfasdfasdf\r\n>dsfasdfasdf\r\n>sdfasdfa\r\n>dsfadf\r\n>sdfasdfa\r\n>dsafds\r\n>', '2020-09-23 12:58:08', 0),
(6, 'Mason', 'Mason lng', '>mason ra gd', '2020-09-23 14:55:01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cmc_admin`
--

CREATE TABLE `cmc_admin` (
  `cmc_id` int(11) NOT NULL,
  `cmc_username` varchar(30) NOT NULL,
  `cmc_password` text NOT NULL,
  `admin_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cmc_admin`
--

INSERT INTO `cmc_admin` (`cmc_id`, `cmc_username`, `cmc_password`, `admin_type`) VALUES
(5, 'Jbaguio', '$2y$04$pSkdyPS4LQHhDkzv7gQPYen3IxocZxQq96Tw.X9WFGrTB8hzNxpDK', 'Hr'),
(6, 'Rcartilla', '$2y$04$vuS7A4cM0LWBOztqA5qL8ur81zI08RFL/Gzc74H1ZLG6murOAoZVS', 'Mrdo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `cmc_admin`
--
ALTER TABLE `cmc_admin`
  ADD PRIMARY KEY (`cmc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cmc_admin`
--
ALTER TABLE `cmc_admin`
  MODIFY `cmc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
