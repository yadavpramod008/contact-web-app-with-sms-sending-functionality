-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 16, 2018 at 04:33 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id7151430_kisan`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(100) NOT NULL,
  `fname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mob1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mob2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `msg` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `datee` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `timee` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `fname`, `lname`, `city`, `mob1`, `mob2`, `msg`, `datee`, `timee`) VALUES
(7, 'Tarun', 'Yadav', 'Thane', '9022879660', '7977061638', 'Test message from from greet me for project completion', '2018-09-16', '03:57:01pm'),
(8, 'Pramod', 'Yadav', 'Mumbai', '7977061638', '9022879660', 'Hello pramod', '2018-09-16', '04:00:30pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
