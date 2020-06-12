-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2019 at 06:40 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photographyDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderTB`
--

CREATE TABLE `orderTB` (
  `orderid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `orderdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderTB`
--

INSERT INTO `orderTB` (`orderid`, `fname`, `lname`, `oname`, `category`, `state`, `city`, `area`, `email`, `pincode`, `orderdate`) VALUES
(1, 'sanket', 'vanani', '7bit', 'wedding', 'gujarat', 'surat', 'varachha', 'sanketvanani6492@gmail.com', 395001, '2019-04-25'),
(2, 'anand', 'yadav', '7bit infoTech', 'wedding', 'gujarat', 'vadodara', 'sfd', 'anand@gmail.com', 395006, '2019-04-14'),
(3, 'annd', 'vfsg', 'dfbfdb', 'product', 'rajasthan', 'fds', 'gfsgfd', 'sdsgfdsg@bdsb.com', 395003, '2019-05-15'),
(4, 'annd', 'ksbasjdh', '7bit infoTech', 'birthday', 'gujarat', 'surat', 'varachha', 'sauradsbgdsgh@gmail.com', 397492, '2018-05-20'),
(5, 'a', 'a', 'a', 'wedding', 'gujarat', 'a', 'a', 'and@gmail.com', 9, '2018-05-20'),
(6, 'a', 'a', 'a', 'wedding', 'gujarat', 's', 'a', 'and@gmail.com', 1, '2018-05-20'),
(7, 'q', 'a', 'a', 'wedding', 'gujarat', 'a', 'a', 'anand@gmail.com', 2, '2018-05-20'),
(8, 'annf', 'yadav', 'and', 'festival', 'maharashtra', 'surat', 'mota', 'and@gmail.com', 395006, '2018-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `registerTB`
--

CREATE TABLE `registerTB` (
  `userid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `mno` bigint(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerTB`
--

INSERT INTO `registerTB` (`userid`, `fname`, `lname`, `uname`, `gender`, `mno`, `email`, `pass`) VALUES
(1, 'sanket', 'vanani', 'sanket8509', 'Male', 8347583112, 'sanketvanani6492@gmail.com', 'Asha@12h60'),
(2, 'anand', 'yadav', 'anand@123', 'Male', 9893894983, 'anand@gmail.com', 'anand@123'),
(3, 'yatinj', 'sutariya', 'yatinj@123', 'Male', 8780015120, 'yatinj123@gmail.com', 'yatinj@123'),
(4, 'and', 'yad', 'and123', 'Male', 1, '', ''),
(5, 'annd', 's', 's', 'Male', 1231231234, 'an@gmail.com', 'and');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderTB`
--
ALTER TABLE `orderTB`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `registerTB`
--
ALTER TABLE `registerTB`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderTB`
--
ALTER TABLE `orderTB`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `registerTB`
--
ALTER TABLE `registerTB`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
