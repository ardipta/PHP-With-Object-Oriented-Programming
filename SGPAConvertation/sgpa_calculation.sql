-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2019 at 03:42 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgpa_calculation`
--

-- --------------------------------------------------------

--
-- Table structure for table `sgpa`
--

CREATE TABLE `sgpa` (
  `id` int(11) NOT NULL,
  `Course_Title` varchar(255) NOT NULL,
  `Course_Code` varchar(255) NOT NULL,
  `Course_Credit` int(11) NOT NULL,
  `GPA` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sgpa`
--

INSERT INTO `sgpa` (`id`, `Course_Title`, `Course_Code`, `Course_Credit`, `GPA`) VALUES
(1, 'Desktop & Web Programming', 'SWE333', 4, '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sgpa`
--
ALTER TABLE `sgpa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sgpa`
--
ALTER TABLE `sgpa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
