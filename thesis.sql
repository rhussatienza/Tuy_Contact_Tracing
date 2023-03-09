-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2022 at 12:04 PM
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
  `a_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_brgy`
--

INSERT INTO `tbl_brgy` (`acle`, `bayudbod`, `bolboc`, `dalima`, `dao`, `guinhawa`, `lumbangan`, `luntal`, `magahis`, `malibu`, `mataywanac`, `palincaro`, `luna`, `burgos`, `rizal`, `rillo`, `putol`, `sabang`, `sanjose`, `talon`, `toong`, `tuyon`, `a_date`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_people`
--

CREATE TABLE `tbl_people` (
  `no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `time` varchar(10) NOT NULL,
  `a_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_people`
--

INSERT INTO `tbl_people` (`no`, `name`, `address`, `contact`, `time`, `a_date`) VALUES
(1, 'Neil Alfred Salazar', 'Acle', '133', '18:06', '2022-03-01'),
(2, 'Kharl Rhussel Atienza', 'Acle', '1233', '18:06', '2022-03-01'),
(3, 'Ernes Salazar', 'Mataywanac', '123333', '18:07', '2022-03-01');

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
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
