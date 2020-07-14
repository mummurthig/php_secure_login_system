-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2020 at 10:24 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neet_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `usertype` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(4, 'test', 'test@gmail.com', '8a9663ed9b81e5f3295ac6392f3f3cc630d5fc79', 'admin'),
(8, 'viki', 'viki@gmail.com', 'dcc2cc6663933d4a23a089105380b23cc6eaf2c7', 'executive_admin'),
(9, 'Oii', 'oii@gmail.com', '8a9663ed9b81e5f3295ac6392f3f3cc630d5fc79', 'admin'),
(12, 'ss', 'ss@gmail.com', '8a9663ed9b81e5f3295ac6392f3f3cc630d5fc79', 'admin'),
(13, 'aa', 'aa@gmail.com', '8a9663ed9b81e5f3295ac6392f3f3cc630d5fc79', 'executive'),
(14, 'aass', 'aa@gmail.com', '96c20a57781c7e30da9a6f614e64b02360b61ffc', 'executive'),
(15, 'ddd', 'dd@gmail.com', '8a9663ed9b81e5f3295ac6392f3f3cc630d5fc79', 'executive_admin'),
(16, 'test', 'test@gmail.com', '8a9663ed9b81e5f3295ac6392f3f3cc630d5fc79', 'executive_admin'),
(17, 'as', 'as@gmail.com', '8a9663ed9b81e5f3295ac6392f3f3cc630d5fc79', 'executive_admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `super_admin`
--
ALTER TABLE `super_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
