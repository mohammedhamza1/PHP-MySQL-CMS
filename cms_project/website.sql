-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2017 at 05:28 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `item_name_id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `rank` int(11) NOT NULL,
  `visible` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `item_name_id`, `page_name`, `content`, `rank`, `visible`, `status`, `date`) VALUES
(1, 3, 'Java', 'java page', 1, 1, 1, '2017-07-04 12:34:11'),
(2, 3, 'PHP', 'php page', 2, 1, 1, '2017-07-04 12:34:52'),
(3, 3, 'Python', 'python page', 3, 1, 1, '2017-07-04 12:35:20'),
(4, 3, 'C', 'c page', 4, 1, 1, '2017-07-04 12:36:11'),
(5, 3, 'C++', 'c++ page', 5, 1, 1, '2017-07-04 12:36:30'),
(6, 4, 'Websites', 'websites page', 1, 1, 1, '2017-07-04 12:37:14'),
(7, 4, 'Mobile app', 'mobile page', 2, 1, 1, '2017-07-04 12:37:59'),
(8, 4, 'pc app', 'pc app page', 3, 1, 1, '2017-07-04 12:39:19'),
(9, 4, 'network', 'network page', 4, 1, 1, '2017-07-04 12:39:43'),
(10, 5, 'first news', 'first news page', 1, 1, 1, '2017-07-04 12:40:39'),
(11, 5, 'second news', 'second news page', 2, 1, 1, '2017-07-04 12:41:02');

-- --------------------------------------------------------

--
-- Table structure for table `website_navbar`
--

CREATE TABLE `website_navbar` (
  `id` int(10) NOT NULL,
  `item_name` varchar(40) NOT NULL,
  `rank` int(10) NOT NULL,
  `visible` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website_navbar`
--

INSERT INTO `website_navbar` (`id`, `item_name`, `rank`, `visible`, `date`) VALUES
(1, 'Home', 1, 1, '2017-07-04 12:14:41'),
(2, 'About', 2, 1, '2017-07-04 12:15:05'),
(3, 'Tutorials', 3, 1, '2017-07-04 12:15:29'),
(4, 'Our Work', 4, 1, '2017-07-04 12:15:49'),
(5, 'News', 5, 0, '2017-07-04 12:16:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_name_id` (`item_name_id`);

--
-- Indexes for table `website_navbar`
--
ALTER TABLE `website_navbar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `website_navbar`
--
ALTER TABLE `website_navbar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
