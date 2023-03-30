-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 30, 2023 at 04:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental_agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `agency_car_data`
--

CREATE TABLE `agency_car_data` (
  `vehicalid` int(11) NOT NULL,
  `vehical_model` varchar(50) NOT NULL,
  `vehical_number` varchar(50) NOT NULL,
  `setting_capacity` int(10) NOT NULL,
  `rent_per_day` int(100) NOT NULL,
  `Booking_status` int(1) NOT NULL,
  `agencyid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agency_car_data`
--

INSERT INTO `agency_car_data` (`vehicalid`, `vehical_model`, `vehical_number`, `setting_capacity`, `rent_per_day`, `Booking_status`, `agencyid`) VALUES
(1, 'Tata Nexon', 'wb-25256', 6, 5000, 2, 1),
(4, '', '', 0, 0, 2, 0),
(5, 'Mercedes', 'wb-586958', 4, 50000, 1, 3),
(6, 'Bmw', 'wb-586958589', 4, 100000, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `agency_data`
--

CREATE TABLE `agency_data` (
  `agencyid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agency_data`
--

INSERT INTO `agency_data` (`agencyid`, `username`, `name`, `phone`, `password`) VALUES
(1, 'subha41', 'Subha Ghanta', '9775967332', 'Subha@123'),
(2, 'Raktim41', 'Raktim Patra', '9064156136', 'Raktim@123'),
(3, 'Animesh41', 'Animesh Patra', '9759201456', 'Subha@123');

-- --------------------------------------------------------

--
-- Table structure for table `available_car`
--

CREATE TABLE `available_car` (
  `carid` int(11) NOT NULL,
  `vehical_model` varchar(50) NOT NULL,
  `vehical_number` varchar(50) NOT NULL,
  `seating_capacity` int(10) NOT NULL,
  `rent_per_day` int(100) NOT NULL,
  `agencyid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `bookingid` int(11) NOT NULL,
  `agencyid` int(50) NOT NULL,
  `vehical_model` varchar(50) NOT NULL,
  `booking_date` date NOT NULL,
  `day` int(50) NOT NULL,
  `vehical_number` varchar(120) NOT NULL,
  `customerid` int(11) NOT NULL,
  `vehicalid` int(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`bookingid`, `agencyid`, `vehical_model`, `booking_date`, `day`, `vehical_number`, `customerid`, `vehicalid`) VALUES
(2, 1, 'Tata Nexon', '2023-03-31', 10, 'wb-25256', 3, 0),
(3, 3, 'Bmw', '2023-03-31', 10, 'wb-586958589', 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `customer_data`
--

CREATE TABLE `customer_data` (
  `customerid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_data`
--

INSERT INTO `customer_data` (`customerid`, `username`, `name`, `phone`, `password`) VALUES
(1, 'Arnab41', 'Arnab Rana', '8167859070', 'Arnab@123'),
(2, 'Raktim41', 'Raktim Patra', '9064156136', 'Raktim@123'),
(3, 'subha41', 'Subha Ghanta', '9775967332', 'Subha@123'),
(4, 'sourav41', 'Sourav Ghorai', '6852147896', 'Sourav@123'),
(5, 'Animesh41', 'Animesh Patra', '8972104568', 'Subha123'),
(6, 'Suman1', 'Suman Samanta', '8972104568', 'Subha@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency_car_data`
--
ALTER TABLE `agency_car_data`
  ADD PRIMARY KEY (`vehicalid`);

--
-- Indexes for table `agency_data`
--
ALTER TABLE `agency_data`
  ADD PRIMARY KEY (`agencyid`);

--
-- Indexes for table `available_car`
--
ALTER TABLE `available_car`
  ADD PRIMARY KEY (`carid`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `customer_data`
--
ALTER TABLE `customer_data`
  ADD PRIMARY KEY (`customerid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agency_car_data`
--
ALTER TABLE `agency_car_data`
  MODIFY `vehicalid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `agency_data`
--
ALTER TABLE `agency_data`
  MODIFY `agencyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `available_car`
--
ALTER TABLE `available_car`
  MODIFY `carid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_data`
--
ALTER TABLE `customer_data`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
