-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2019 at 06:28 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendence`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `std_id` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `name`, `std_id`, `date`, `is_deleted`) VALUES
(1, 'kalana', '789', '2019-02-07', 1),
(2, 'kalana', '4884945', '2019-02-07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `complane`
--

CREATE TABLE `complane` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `complane` varchar(10000) NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complane`
--

INSERT INTO `complane` (`id`, `name`, `date`, `complane`, `is_deleted`) VALUES
(1, 'kalana', '2019-02-07 00:00:00', 'cgvhbjnmjnkkmkmk', 0),
(2, 'sunil', '2019-02-07 00:00:00', 'nkml,l,l,l,l', 0);

-- --------------------------------------------------------

--
-- Table structure for table `leav`
--

CREATE TABLE `leav` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `std_id` varchar(100) NOT NULL,
  `to` varchar(100) NOT NULL,
  `ttt` date NOT NULL,
  `from` varchar(100) NOT NULL,
  `fff` date NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leav`
--

INSERT INTO `leav` (`id`, `name`, `std_id`, `to`, `ttt`, `from`, `fff`, `is_deleted`) VALUES
(1, 'admin', '', '', '0000-00-00', '', '0000-00-00', 0),
(2, 'admin', '456', '', '0000-00-00', '', '0000-00-00', 0),
(3, 'admin', '456', '', '2019-02-20', '', '0000-00-00', 0),
(4, 'admin', '456', '', '2019-02-20', '', '0000-00-00', 0),
(5, 'sandalanka', '789', '', '2019-02-20', '', '2019-02-20', 0),
(6, 'mk', '789', '', '2019-02-21', '', '2019-02-26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE `leave` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `std_id` varchar(100) NOT NULL,
  `from` date NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `idcard` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `contact` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `idcard`, `address`, `email`, `contact`, `password`, `is_deleted`) VALUES
(1, 'sandalanka', 2147483647, 'Colombo to London', '1415sandalanka@gmail.com', 714220524, 'password', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `id_num` int(11) NOT NULL,
  `std_id` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `department` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `id_num`, `std_id`, `address`, `email`, `contact`, `department`, `password`, `is_deleted`) VALUES
(1, 'sandalanka', 2147483647, '456', 'asdfgh', '1415sandalanka@gmail.com', 714220524, 'pst', 'password', 0),
(2, 'ggv', 2147483647, '45', 'rty', 'saman@gmail.com', 4565789, 'pst', '1234', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complane`
--
ALTER TABLE `complane`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leav`
--
ALTER TABLE `leav`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave`
--
ALTER TABLE `leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complane`
--
ALTER TABLE `complane`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leav`
--
ALTER TABLE `leav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `leave`
--
ALTER TABLE `leave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
