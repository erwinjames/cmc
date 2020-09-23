-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 09:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `cmc_username` varchar(31) NOT NULL,
  `cmc_password` text NOT NULL,
  `admin_type` varchar(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cmc_admin`
--

INSERT INTO `cmc_admin` (`cmc_id`, `cmc_username`, `cmc_password`, `admin_type`) VALUES
(1, 'erwin', '123456', 'Hr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`career_id`);

--
-- Indexes for table `cmc_admin`
--
ALTER TABLE `cmc_admin`
  ADD PRIMARY KEY (`cmc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `career_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cmc_admin`
--
ALTER TABLE `cmc_admin`
  MODIFY `cmc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
