-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 07:52 PM
-- Server version: 5.6.48-log
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bestnew`
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
  `regis_no` int(11) NOT NULL,
  `com_id` varchar(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `cheque_no` varchar(25) DEFAULT NULL,
  `mobile_no` bigint(12) DEFAULT NULL,
  `designation` varchar(30) DEFAULT NULL,
  `department` varchar(30) DEFAULT NULL,
  `depot` varchar(100) DEFAULT NULL,
  `addictions` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `comorbidity` varchar(100) DEFAULT NULL,
  `last_working` varchar(20) DEFAULT NULL,
  `travel_history` varchar(50) DEFAULT NULL,
  `exposure` varchar(100) DEFAULT NULL,
  `symptoms` varchar(100) DEFAULT NULL,
  `testing_date` varchar(20) DEFAULT NULL,
  `hospital` varchar(50) DEFAULT NULL,
  `admission_date` varchar(20) DEFAULT NULL,
  `oxygen` varchar(10) DEFAULT NULL,
  `discharge` varchar(10) DEFAULT NULL,
  `dis_date` varchar(10) DEFAULT NULL,
  `dis_no` varchar(20) DEFAULT NULL,
  `family` varchar(100) DEFAULT NULL,
  `followup` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`regis_no`, `com_id`, `name`, `age`, `sex`, `cheque_no`, `mobile_no`, `designation`, `department`, `depot`, `addictions`, `address`, `comorbidity`, `last_working`, `travel_history`, `exposure`, `symptoms`, `testing_date`, `hospital`, `admission_date`, `oxygen`, `discharge`, `dis_date`, `dis_no`, `family`, `followup`) VALUES
(1, '', 'sakshi', 22, 'Female', '1234567890', 9800987890, 'gfjhv', 'hvjh', 'hvjb', 'jhgihlskd ;dmsm ', 'vcgjdgwekjn jbciukwh.,ksfj', 'fdgteyeh', '2020-1-1', 'djbcmnd nm', 'uihiudbck ,cmnckuwhicwlekn', 'jhwiudhvkendve,m e,nk', '2020-1-1', 'Choose...', '2002-3-1', 'No', 'Discharge', '2020-4-1', 'hb543154', 'jkdklscnsdmn kjheiu', 'udkjdn ,ms');

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
  ADD PRIMARY KEY (`regis_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff_details`
--
ALTER TABLE `staff_details`
  MODIFY `regis_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
