-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 05:40 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account_information_officer`
--

CREATE TABLE `tbl_account_information_officer` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_account_information_officer`
--

INSERT INTO `tbl_account_information_officer` (`username`, `password`) VALUES
('Officer1', 'officer1'),
('Officer2', 'officer2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account_it_head`
--

CREATE TABLE `tbl_account_it_head` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_account_it_head`
--

INSERT INTO `tbl_account_it_head` (`username`, `password`) VALUES
('ITHEAD', 'ithead');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brgy`
--

CREATE TABLE `tbl_brgy` (
  `acle` int(6) NOT NULL,
  `bayudbod` int(6) NOT NULL,
  `bolboc` int(6) NOT NULL,
  `dalima` int(6) NOT NULL,
  `dao` int(6) NOT NULL,
  `guinhawa` int(6) NOT NULL,
  `lumbangan` int(6) NOT NULL,
  `luntal` int(6) NOT NULL,
  `magahis` int(6) NOT NULL,
  `malibu` int(6) NOT NULL,
  `mataywanac` int(6) NOT NULL,
  `palincaro` int(6) NOT NULL,
  `luna` int(6) NOT NULL,
  `burgos` int(6) NOT NULL,
  `rizal` int(6) NOT NULL,
  `rillo` int(6) NOT NULL,
  `putol` int(6) NOT NULL,
  `sabang` int(6) NOT NULL,
  `sanjose` int(6) NOT NULL,
  `talon` int(6) NOT NULL,
  `toong` int(6) NOT NULL,
  `tuyon` int(6) NOT NULL,
  `people` int(6) NOT NULL,
  `a_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_people`
--

CREATE TABLE `tbl_people` (
  `no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `time` time(6) NOT NULL,
  `a_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_people`
--
ALTER TABLE `tbl_people`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_people`
--
ALTER TABLE `tbl_people`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
