-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 05:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cname` varchar(20) NOT NULL,
  `clastname` varchar(20) NOT NULL,
  `cemail` varchar(50) NOT NULL,
  `cpass` varchar(50) NOT NULL,
  `cgender` varchar(10) NOT NULL,
  `favfoodchk` varchar(50) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cname`, `clastname`, `cemail`, `cpass`, `cgender`, `favfoodchk`, `cid`) VALUES
('Pushpendra123', 'singh123', 'pushpendrsdffajaat2001@gmail.com', '123', 'Male', 'Burger,Noo', 4),
('Pushpendranew', 'nwq', 'hiwiral486@sunetoa.com', '231456', 'Male', 'Pizza,Burger,', 5),
('deepak', 'singh', 'depak@gmail.com', '123456', 'Male', 'Pizza,Burger,Noodles,', 6),
('Pushpendra04', 'Jaat04', 'pushpendffadsrajaat2001@gmail.com', 'sadffssaf', 'Male', 'Pizza,Burger,', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


