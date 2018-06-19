-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2018 at 06:00 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g_maps`
--

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `disease` varchar(50) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `disease`, `lat`, `lng`, `type`) VALUES
(1, 'shane', 'Arunodaya Mawatha, Sri Jayawardenepura Kotte', 'coma', 6.903757, 79.927078, 'critical'),
(2, 'shane', 'Sudu Nelum Pura Apartment, Vijaya Rd, Sri Jayawardanapura kotte', 'arthritis', 6.893244, 79.898415, 'normal'),
(3, 'Gunther', 'Liberty Plaza, 36 Blue St, North Sydney NSW', 'asthma', 6.881039, 79.876442, 'normal'),
(4, 'Ross', '7A, 2 Vishaka Road, Colombo', 'austism', 6.889464, 79.858734, 'normal'),
(5, 'Nomad', '16 Foster Street, Colombo', 'alopecia', 6.927079, 79.861244, 'normal'),
(6, 'Joey', '43 Macpherson Street, Welikada west', 'paralysis', 6.915618, 79.893959, 'critical'),
(7, 'Phoebe', '60-64 Reservoir Street,Nawala West', 'dismemberment', 6.894986, 6.894986, 'critical'),
(8, 'GreenLantern', '60 Riley Street, havelock Town', 'bursitis', 6.887790, 79.868187, 'normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
