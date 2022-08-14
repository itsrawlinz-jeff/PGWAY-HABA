-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 14, 2022 at 08:23 AM
-- Server version: 10.5.16-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `habadati_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '0000000');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `county` varchar(255) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matchrequests`
--

CREATE TABLE `matchrequests` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `pgender` varchar(255) NOT NULL,
  `rstatus` varchar(255) NOT NULL,
  `smoke` varchar(255) NOT NULL,
  `drink` varchar(255) NOT NULL,
  `income` varchar(255) NOT NULL,
  `partnerminage` int(255) NOT NULL,
  `partnermaxage` int(255) NOT NULL,
  `chronic` varchar(255) NOT NULL,
  `pdrink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matchrequests`
--

INSERT INTO `matchrequests` (`id`, `fullname`, `email`, `contact`, `dob`, `gender`, `pgender`, `rstatus`, `smoke`, `drink`, `income`, `partnerminage`, `partnermaxage`, `chronic`, `pdrink`) VALUES
(0, 'Anonymous', 'rawlinzjeff264@gmail.com', 2147483647, '2022-06-04', 'Male', 'Female', 'Single', 'No', 'Never', '$10001 to $20000', 20, 25, 'No', 'Never');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `contactno`, `posting_date`) VALUES
(13, 'JEFFREY', 'ROWLINGS', 'rawlinzjeff264@gmail.com', 'H@rd2Cr@k!.', '0790064458', '2022-05-20 11:11:33'),
(14, 'JEFFREY', 'ROWLINGS', 'rawlinzjeff@gmail.com', '12345678', '0790064458', '2022-05-21 05:05:47'),
(15, 'JEFFREY', 'ROWLINGS', 'rawlinzj@gmail.com', '00000000', '0790064458', '2022-05-21 05:08:28'),
(16, 'errick', 'ROWLINGS', 'JEFF@GMAIL.COM', 'JEFF@GMAIL.COM', '0790064458', '2022-05-23 11:13:05'),
(17, 'WINROSE', 'WERU', 'weruwinrose@gmail.com', 'weruwinrose@gmail.com', '0711345987', '2022-06-09 12:35:13'),
(18, 'Margaret', 'Njeri ', 'mbuguamargaret411 ', 'maggzN', '+2547114781', '2022-07-05 08:19:37'),
(19, 'Chrispine', 'Angala', 'chrispinodhis@gmail.com', '30077268', '0748276333', '2022-07-13 07:18:10'),
(20, 'Sue', 'Enn', 'neshy97@yahoo.com@yahoo.com', 'dateme2022', '+750718418', '2022-07-21 08:55:19'),
(21, 'Sue', 'Enn', 'neshy97@yahoo.com', 'dateme2022', '+750718418', '2022-07-21 08:57:37'),
(22, 'Pro', 'Din', 'dinpro@gmail.com ', '909090', '+', '2022-08-13 09:39:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
