-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 06:17 PM
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
-- Database: `bus booking system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL,
  `Fname` varchar(200) NOT NULL,
  `Lname` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `Fname`, `Lname`, `Email`, `Username`, `Password`) VALUES
(1, 'admin', 'last', 'admin@gmail.com', 'admin', 'admin123'),(2, 'ankit', 'mahato', 'ankit@gmail.com', 'ankit', 'ankit123'),
(3, 'sanchit', 'mishra', 'sanchit@gmail.com', 'sanchit', 'sanchit123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Booking_id` int(11) NOT NULL,
  `user` varchar(200) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Bus_id` int(11) NOT NULL,
  `Seats_no` int(11) NOT NULL,
  `Total_fare` double NOT NULL,
  `Bank` varchar(200) NOT NULL,
  `Payment_method` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Booking_id`, `user`, `Date`, `Bus_id`, `Seats_no`, `Total_fare`, `Bank`, `Payment_method`) VALUES
(3, 'king', '2022-05-04 07:34:38', 15, 2, 2200, 'SBI', 'Net Banking'),
(4, 'boss', '2022-05-11 00:03:02', 18, 1, 350, 'BOI', 'Net Banking'),
(5, 'kings', '2022-05-13 02:52:06', 18, 1, 350, 'BOB', 'Net Banking'),
(6, 'aim', '2022-05-22 02:37:32', 10, 2, 2000, 'PNB', 'Debit card'),
(7, 'ankit', '2022-05-26 10:52:29', 1, 4, 3200, 'PNB', 'Net Banking');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `Id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Origin` varchar(200) NOT NULL,
  `Destination` varchar(200) NOT NULL,
  `Seats` int(11) NOT NULL,
  `Arrival_time` time NOT NULL,
  `Departure_time` time NOT NULL,
  `Date` date NOT NULL,
  `Fare` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`Id`, `Name`, `Origin`, `Destination`, `Seats`, `Arrival_time`, `Departure_time`, `Date`, `Fare`) VALUES
(1, '2017-9-10 travels', 'TATA', 'Ranchi', 4, '10:00:00', '16:00:00', '0000-00-00', 800),
(2, 'ABC travels', 'TATA', 'Ranchi', 18, '10:00:00', '16:00:00', '2015-10-17', 800),
(3, 'ABC travels', 'TATA', 'Ranchi', 22, '10:00:00', '16:00:00', '2015-10-18', 800),
(4, 'Sr travels', 'TATA', 'Ranchi', 11, '12:00:00', '19:00:00', '0000-00-00', 850),
(5, 'Sr travels', 'TATA', 'Ranchi', 12, '12:00:00', '19:00:00', '2015-10-17', 850),
(6, 'Sr travels', 'TATA', 'Ranchi', 20, '12:00:00', '19:00:00', '2015-10-18', 850),
(7, 'Rocky travels', 'TATA', 'Ranchi', 12, '14:00:00', '21:00:00', '2015-10-17', 900),
(8, 'Rocky travels', 'TATA', 'Ranchi', 16, '14:00:00', '21:00:00', '2015-10-18', 900),
(9, 'lolly travels', 'TATA', 'Bhagalpur', 10, '09:00:00', '18:00:00', '2017-09-10', 1000),
(10, 'lolly travels', 'TATA', 'Bhagalpur', 12, '09:00:00', '18:00:00', '2015-10-17', 1000),
(11, 'lolly travels', 'TATA', 'Bhagalpur', 23, '09:00:00', '18:00:00', '2015-10-18', 1000),
(12, 'Patel travels', 'TATA', 'Bhagalpur', 8, '07:00:00', '16:00:00', '2017-09-10', 1200),
(13, 'Patel travels', 'TATA', 'Bhagalpur', 11, '07:00:00', '16:00:00', '2015-10-18', 1200),
(14, 'Sbt travels', 'TATA', 'Bhagalpur', 7, '14:00:00', '23:00:00', '2017-09-10', 1100),
(15, 'Sbt travels', 'TATA', 'Bhagalpur', 14, '14:00:00', '23:00:00', '2015-10-17', 1100),
(16, 'Sbt travels', 'TATA', 'Bhagalpur', 25, '14:00:00', '23:00:00', '2015-10-18', 1100),
(18, 'Vijaya travels', 'TATA', 'Dhanbad', 8, '09:00:00', '04:00:00', '2017-09-10', 350),
(19, 'ABC travels', 'Ranchi', 'TATA', 10, '04:00:00', '10:00:00', '2017-09-10', 800),
(20, 'ABC travels', 'Ranchi', 'TATA', 11, '04:00:00', '10:00:00', '2015-10-17', 800),
(21, 'ABC travels', 'Ranchi', 'TATA', 12, '04:00:00', '10:00:00', '2015-10-18', 800),
(22, 'Sr travels', 'Ranchi', 'TATA', 9, '03:00:00', '09:00:00', '2017-09-10', 850),
(23, 'Sr travels', 'Ranchi', 'TATA', 10, '03:00:00', '09:00:00', '2015-10-17', 850),
(24, 'Sr travels', 'Ranchi', 'TATA', 12, '03:00:00', '09:00:00', '2015-10-18', 850),
(25, 'lolly travels', 'Bhagalpur', 'TATA', 5, '01:00:00', '08:00:00', '2017-09-10', 1000),
(26, 'lolly travels', 'Bhagalpur', 'TATA', 11, '01:00:00', '08:00:00', '2015-10-17', 1000),
(27, 'lolly travels', 'Bhagalpur', 'TATA', 20, '01:00:00', '08:00:00', '2015-10-18', 1000),
(28, 'lolly travels', 'Dhanbad', 'TATA', 10, '02:00:00', '07:00:00', '2017-09-10', 350),
(29, 'lolly travels', 'Dhanbad', 'TATA', 20, '02:00:00', '07:00:00', '2015-10-17', 350),
(30, 'lolly travels', 'Dhanbad', 'TATA', 24, '02:00:00', '07:00:00', '2015-10-18', 350);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Fname` varchar(200) DEFAULT NULL,
  `Lname` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `Security` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Fname`, `Lname`, `Email`, `Username`, `Password`, `Timestamp`, `Security`) VALUES
(14, 'ankit', 'mahato', 'ankit@gmail.com', 'ankit', '12345', '2022-05-26 10:50:38', 'mehs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Booking_id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
