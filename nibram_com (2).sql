-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 03:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nibram.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_user_name` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_user_name`, `password`) VALUES
(1, 'nibram', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `phone_number` int(155) NOT NULL,
  `email_address` varchar(155) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_replied` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `full_name`, `phone_number`, `email_address`, `message`, `status`, `date_added`, `date_replied`) VALUES
(24, 'john mark', 1234, 'name@gmail.com', 'cool', 0, '2021-04-21 18:48:45', 'April 23, 2021 09:53:10'),
(25, 'Abel Mkie', 5555, 'bb@gmail.com', 'very cool', 0, '2021-04-21 18:49:14', 'April 22, 2021 04:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `client_newsletter`
--

CREATE TABLE `client_newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `client_id` int(11) NOT NULL,
  `date_requested` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_newsletter`
--

INSERT INTO `client_newsletter` (`id`, `email`, `client_id`, `date_requested`, `status`) VALUES
(49, 'nmmnbm@gmail.com', 1, NULL, 0),
(50, 'bb@gmail.com', 2, NULL, 0),
(51, 'j@gmail.com', 3, NULL, 0),
(52, 'name@gmail.com', 4, NULL, 0),
(53, 'igieborelvis@gmail.com', 5, NULL, 0),
(54, 'nmmm@gmail.com', 6, NULL, 0),
(55, 'aa@gmail.com', 7, NULL, 0),
(56, 'e@gmail.com', 8, NULL, 0),
(57, 'w@gmail.com', 9, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `client_request`
--

CREATE TABLE `client_request` (
  `request_id` int(11) NOT NULL,
  `serv_id` text NOT NULL,
  `full_name` text NOT NULL,
  `address` varchar(300) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_replied` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_request`
--

INSERT INTO `client_request` (`request_id`, `serv_id`, `full_name`, `address`, `phone_no`, `email_address`, `message`, `date_added`, `date_replied`) VALUES
(13, '1,3,5,6', 'aa@gmail.com', '', 222, 'yy@gmail.com', 'rtttt', '2021-04-19 15:34:26', 'April 23, 2021 12:24:16'),
(14, '2,5', 'aa@gmail.com', '', 666666, 'bb@gmail.com', 'ttttt', '2021-04-19 16:31:40', 'April 23, 2021 12:28:37'),
(16, '1,5,6', 'jogn e', '', 23456, 'e@gmail.com', 'yes', '2021-04-22 13:55:52', '0000-00-00'),
(17, '4', 'ken Ben', '', 987655, 'ken@gmail.com', '', '2021-04-23 10:30:44', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_title`) VALUES
(1, 'janitorial Services'),
(2, 'General Services'),
(3, 'Fumigation Services'),
(4, 'Waste Management'),
(5, 'Relocation Services'),
(6, 'Laundry Services');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `client_newsletter`
--
ALTER TABLE `client_newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_request`
--
ALTER TABLE `client_request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `client_newsletter`
--
ALTER TABLE `client_newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `client_request`
--
ALTER TABLE `client_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
