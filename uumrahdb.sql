-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 02:51 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'rahul', 'rahul');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(50) NOT NULL,
  `rollno` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `english` int(20) NOT NULL,
  `hindi` int(20) NOT NULL,
  `maths` int(20) NOT NULL,
  `chemistry` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `rollno`, `name`, `image`, `english`, `hindi`, `maths`, `chemistry`) VALUES
(1, '1', 'akash', 'attoney.jpeg', 89, 78, 67, 80),
(2, '2', 'aditya', 'Contempt-of-Court.jpg', 80, 92, 88, 79),
(3, '3', 'chaya', '78467146.jpg', 88, 94, 89, 87);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(50) NOT NULL,
  `rollno` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pcont` varchar(20) NOT NULL,
  `standard` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `english` int(20) NOT NULL,
  `hindi` int(20) NOT NULL,
  `maths` int(20) NOT NULL,
  `chemistry` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `rollno`, `name`, `city`, `pcont`, `standard`, `image`, `english`, `hindi`, `maths`, `chemistry`) VALUES
(1, 101, 'Akash', 'Faridabad', '847000101', '10', 'akash.jpg', 89, 59, 50, 70),
(2, 102, 'Aditya', 'Yamunanagar', '998982637', '10', 'aditya.jpg', 76, 90, 78, 67),
(3, 103, 'Chaya', 'Faridabad', '784283900', '10', 'chaya.jpg', 90, 89, 95, 78),
(4, 104, 'Deepak', 'Nehru Place', '8900037840', '10', 'deepak.jpg', 87, 78, 90, 78),
(6, 106, 'Giani', 'Dharamsala', '9876543', '10', 'giani.jpg', 97, 92, 81, 71),
(7, 111, 'Suman', 'Faridabad', '87654334', '11', 'meena.jpg', 82, 85, 80, 78),
(8, 112, 'Meena', 'Aligarh', '975678811', '11', 'mnika.jpg', 67, 89, 98, 67),
(9, 113, 'Lakshman', 'Ladakh', '89534511', '11', 'lakshman.jpg', 91, 87, 67, 77),
(10, 121, 'Hiten', 'Kasol', '97687856', '12', 'hiten.jpg', 66, 78, 89, 90),
(11, 122, 'Jack', 'Palwal', '90776876', '12', 'jack.jpg', 78, 56, 66, 60),
(12, 123, 'Krishan', 'Mathura', '7879734353', '12', 'krishan.jpg', 78, 69, 80, 81),
(13, 124, 'Anjali', 'Aligarh', '875469009', '12', 'anjali.jpg', 10, 10, 10, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
