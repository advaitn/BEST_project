-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 01:48 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `best`
--

-- --------------------------------------------------------

--
-- Table structure for table `committee_members`
--

CREATE TABLE `committee_members` (
  `unique_id` varchar(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `password` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `committee_members`
--

INSERT INTO `committee_members` (`unique_id`, `firstname`, `lastname`, `password`, `email`) VALUES
('BEST_cmo', 'Aishwarya', 'Anand', '10', 'aishwaryaramani.anand@gmail.com'),
('BEST_user1', 'demo', 'user', '1', 'ramaniaayush@gmail.com'),
('BEST_user2', 'sakshi', 'kadam', '1234', 'sakshikadam1520@gmail.com'),
('BEST_user3', 'Omkar', 'kotle', '101', 'omkarkolte78@gmail.com'),
('BEST_user4', 'Sakshi', 'Pingle', '123456', 'sakshipingle603@gmail.com'),
('BEST_user5', 'Darshan', 'T', '1234567', 'darshantaori75@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE `staff_details` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`id`, `first_name`, `last_name`, `password`) VALUES
(1, 'shailey', 'kadam', '8745'),
(2, 'sakshi', 'kadam', '7654'),
(3, 'pk', 'kadam', '879'),
(4, 'sakshi', 'jh&85', 'kjbk67'),
(5, 'sakshi', 'jh&85', 'mv876');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `committee_members`
--
ALTER TABLE `committee_members`
  ADD PRIMARY KEY (`unique_id`);

--
-- Indexes for table `staff_details`
--
ALTER TABLE `staff_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff_details`
--
ALTER TABLE `staff_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
