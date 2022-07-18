-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 10:41 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pss_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `pss_stocks`
--

CREATE TABLE `pss_stocks` (
  `id` int(11) NOT NULL,
  `parts_code` varchar(50) DEFAULT NULL,
  `parts_name` varchar(20) DEFAULT NULL,
  `supplier_code` varchar(20) DEFAULT NULL,
  `description` varchar(12) NOT NULL,
  `qty_per_box` int(11) NOT NULL,
  `net` varchar(11) NOT NULL,
  `box_weight` varchar(11) NOT NULL,
  `gross` varchar(11) NOT NULL,
  `remaining_stck` varchar(20) DEFAULT NULL,
  `unit` varchar(5) DEFAULT NULL,
  `customer_unit_price` varchar(11) DEFAULT NULL,
  `total_amount` int(11) DEFAULT NULL,
  `date_registered` varchar(50) DEFAULT NULL,
  `date_updated` varchar(50) DEFAULT NULL,
  `customer_code` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pss_stocks`
--
ALTER TABLE `pss_stocks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pss_stocks`
--
ALTER TABLE `pss_stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
