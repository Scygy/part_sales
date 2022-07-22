-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2022 at 10:30 AM
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
-- Stand-in structure for view `print_packing`
-- (See below for the actual view)
--
CREATE TABLE `print_packing` (
`id` int(20)
,`pallet` varchar(50)
,`parts_name` varchar(50)
,`description` varchar(20)
,`qty` varchar(10)
,`po_num` varchar(30)
,`qty_per_box` int(11)
,`shipping_mode` varchar(5)
,`no_of_boxes` varchar(50)
,`net` varchar(11)
,`box_weight` varchar(11)
,`gross` varchar(11)
,`measurement` varchar(50)
,`Status` varchar(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `print_packing_attachement`
-- (See below for the actual view)
--
CREATE TABLE `print_packing_attachement` (
`total_box` double
,`quantity` double
,`total_net` double
,`box_weights` double
,`gross` double
,`total_gross` double
,`total_measurement` double
);

-- --------------------------------------------------------

--
-- Table structure for table `pss_accounts`
--

CREATE TABLE `pss_accounts` (
  `id` int(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pss_accounts`
--

INSERT INTO `pss_accounts` (`id`, `full_name`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `pss_deleted_stocks`
--

CREATE TABLE `pss_deleted_stocks` (
  `id` int(20) NOT NULL,
  `parts_code` varchar(20) DEFAULT NULL,
  `parts_name` varchar(20) DEFAULT NULL,
  `supplier_code` varchar(20) DEFAULT NULL,
  `qty_per_box` varchar(20) DEFAULT NULL,
  `description` varchar(20) DEFAULT NULL,
  `net` varchar(20) DEFAULT NULL,
  `box_weight` varchar(20) DEFAULT NULL,
  `gross` varchar(20) DEFAULT NULL,
  `remaining_stck` varchar(20) DEFAULT NULL,
  `unit` varchar(20) DEFAULT NULL,
  `customer_unit_price` varchar(20) DEFAULT NULL,
  `total_amount` varchar(20) DEFAULT NULL,
  `date_registered` varchar(20) DEFAULT NULL,
  `date_updated` varchar(20) DEFAULT NULL,
  `customer_code` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pss_deleted_stocks`
--

INSERT INTO `pss_deleted_stocks` (`id`, `parts_code`, `parts_name`, `supplier_code`, `qty_per_box`, `description`, `net`, `box_weight`, `gross`, `remaining_stck`, `unit`, `customer_unit_price`, `total_amount`, `date_registered`, `date_updated`, `customer_code`) VALUES
(1, '0053A', 'COH-BB2230', 'BIG PH', '70', 'Protector', '0.023857143', '0.007142857', '0.031', '80', 'pcs', NULL, NULL, '2022-07-19', '2022-07-19', 'FAS'),
(2, '0053A', 'COH-BB2230', 'BIG PH', '70', 'Protector', '0.023857143', '0.007142857', '0.031', '80', 'pcs', NULL, NULL, '2022-07-19', '2022-07-19', 'FAPV'),
(3, '0053A', 'COH-BB2230', 'BIG PH', '70', 'Protector', '0.023857143', '0.007142857', '0.031', '80', 'pcs', NULL, NULL, '2022-07-19', '2022-07-19', 'FAVV');

-- --------------------------------------------------------

--
-- Table structure for table `pss_packinglist`
--

CREATE TABLE `pss_packinglist` (
  `id` int(20) NOT NULL,
  `po_num` varchar(20) NOT NULL,
  `parts_name` varchar(50) NOT NULL,
  `description` varchar(20) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `pallet` varchar(50) NOT NULL,
  `no_of_boxes` varchar(50) NOT NULL DEFAULT '0',
  `measurement` varchar(50) NOT NULL DEFAULT '1.21',
  `Status` varchar(10) NOT NULL DEFAULT 'Pending',
  `date_created` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pss_packinglist`
--

INSERT INTO `pss_packinglist` (`id`, `po_num`, `parts_name`, `description`, `qty`, `pallet`, `no_of_boxes`, `measurement`, `Status`, `date_created`) VALUES
(1, 'P22-013-FALP', 'COH-BB2230', 'Protector', '', '', '788', '1.21', 'Pending', NULL),
(2, 'P22-013-FALP', 'COH-B2250', '', '', '', '0', '1.21', 'Pending', NULL),
(3, 'P22-013-FALP', 'COH-BB2230', 'Protector', '', '', '0', '1.21', 'Pending', NULL),
(5, 'P22-013-FALP', 'COH-B2250', '', '', '', '0', '1.21', 'Pending', NULL),
(6, 'P22-013-FALP', 'COH-BB2230', 'Protector', '', '', '0', '1.21', 'Pending', NULL),
(8, 'P22-013-FALP', 'COH-B2250', '', '', '', '0', '1.21', 'Pending', NULL),
(9, 'P22-013-FALP', 'COH-BB2230', 'Protector', '', '', '0', '1.21', 'Pending', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pss_packing_history`
--

CREATE TABLE `pss_packing_history` (
  `id` int(20) NOT NULL,
  `pallet` varchar(50) DEFAULT NULL,
  `parts_name` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `qty` varchar(50) DEFAULT NULL,
  `po_num` varchar(50) DEFAULT NULL,
  `qty_per_box` varchar(50) DEFAULT NULL,
  `shipping_mode` varchar(50) DEFAULT NULL,
  `no_of_boxes` varchar(50) DEFAULT NULL,
  `net` varchar(50) DEFAULT NULL,
  `box_weight` varchar(50) DEFAULT NULL,
  `gross` varchar(50) DEFAULT NULL,
  `Status` varchar(20) NOT NULL,
  `measurement` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pss_po_details`
--

CREATE TABLE `pss_po_details` (
  `id` int(11) NOT NULL,
  `po_num` varchar(30) DEFAULT NULL,
  `parts_code` varchar(7) DEFAULT NULL,
  `parts_name` varchar(20) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `supplier_code` varchar(50) DEFAULT NULL,
  `customer_code` varchar(7) NOT NULL,
  `quantity` varchar(10) DEFAULT NULL,
  `shipping_mode` varchar(5) NOT NULL,
  `date_created` varchar(20) NOT NULL,
  `neopos_no` varchar(10) NOT NULL,
  `Status` varchar(30) NOT NULL DEFAULT 'Open'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pss_po_details`
--

INSERT INTO `pss_po_details` (`id`, `po_num`, `parts_code`, `parts_name`, `description`, `supplier_code`, `customer_code`, `quantity`, `shipping_mode`, `date_created`, `neopos_no`, `Status`) VALUES
(4, 'P22-013-FALP', '0053A', 'COH-BB2230', 'Protector', 'BIG PH', 'FAS', '2660', 'AIR', '2022-07-22', '200221', 'Closed for Invoicing'),
(5, 'P22-013-FALP', '0053C', 'COH-B2250', 'Protector', 'BIG PH', 'FAS', '1800', 'AIR', '2022-07-22', '200222', 'Closed for Invoicing');

-- --------------------------------------------------------

--
-- Table structure for table `pss_set_invoice`
--

CREATE TABLE `pss_set_invoice` (
  `id` int(50) NOT NULL,
  `invoice_count` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pss_set_invoice`
--

INSERT INTO `pss_set_invoice` (`id`, `invoice_count`) VALUES
(1, '00000');

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
-- Dumping data for table `pss_stocks`
--

INSERT INTO `pss_stocks` (`id`, `parts_code`, `parts_name`, `supplier_code`, `description`, `qty_per_box`, `net`, `box_weight`, `gross`, `remaining_stck`, `unit`, `customer_unit_price`, `total_amount`, `date_registered`, `date_updated`, `customer_code`) VALUES
(7, '0053A', 'COH-BB2230', 'BIG PH', 'Protector', 70, '0.023857143', '0.007142857', '0.031', '2340', 'pcs', '0.31', NULL, '2022-07-19', '2022-07-22', 'FAS'),
(8, '0053A', 'COH-BB2230', 'BIG PH', 'Protector', 70, '0.023857143', '0.007142857', '0.031', '2340', 'pcs', NULL, NULL, '2022-07-19', '2022-07-22', 'FAPV'),
(9, '0053A', 'COH-BB2230', 'BIG PH', 'Protector', 70, '0.023857143', '0.007142857', '0.031', '2340', 'pcs', NULL, NULL, '2022-07-19', '2022-07-22', 'FAVV');

-- --------------------------------------------------------

--
-- Structure for view `print_packing`
--
DROP TABLE IF EXISTS `print_packing`;

CREATE ALGORITHM=UNDEFINED DEFINER=`josh`@`localhost` SQL SECURITY DEFINER VIEW `print_packing`  AS SELECT `pss_packinglist`.`id` AS `id`, `pss_packinglist`.`pallet` AS `pallet`, `pss_packinglist`.`parts_name` AS `parts_name`, `pss_packinglist`.`description` AS `description`, `pss_packinglist`.`qty` AS `qty`, `pss_po_details`.`po_num` AS `po_num`, `pss_stocks`.`qty_per_box` AS `qty_per_box`, `pss_po_details`.`shipping_mode` AS `shipping_mode`, `pss_packinglist`.`no_of_boxes` AS `no_of_boxes`, `pss_stocks`.`net` AS `net`, `pss_stocks`.`box_weight` AS `box_weight`, `pss_stocks`.`gross` AS `gross`, `pss_packinglist`.`measurement` AS `measurement`, `pss_packinglist`.`Status` AS `Status` FROM ((`pss_packinglist` left join `pss_po_details` on(`pss_po_details`.`parts_name` = `pss_packinglist`.`parts_name`)) left join `pss_stocks` on(`pss_stocks`.`parts_name` = `pss_packinglist`.`parts_name`)) WHERE `pss_po_details`.`Status` = 'Transact' GROUP BY `pss_po_details`.`parts_name` ;

-- --------------------------------------------------------

--
-- Structure for view `print_packing_attachement`
--
DROP TABLE IF EXISTS `print_packing_attachement`;

CREATE ALGORITHM=UNDEFINED DEFINER=`josh`@`localhost` SQL SECURITY DEFINER VIEW `print_packing_attachement`  AS SELECT sum(`print_packing`.`no_of_boxes`) AS `total_box`, sum(`print_packing`.`qty_per_box` * `print_packing`.`no_of_boxes`) AS `quantity`, sum(`print_packing`.`qty_per_box` * `print_packing`.`no_of_boxes` * `print_packing`.`net`) AS `total_net`, sum(`print_packing`.`qty_per_box` * `print_packing`.`no_of_boxes` * `print_packing`.`box_weight`) AS `box_weights`, `print_packing`.`net`+ `print_packing`.`box_weight` AS `gross`, sum((`print_packing`.`net` + `print_packing`.`box_weight`) * (`print_packing`.`qty_per_box` * `print_packing`.`no_of_boxes`)) AS `total_gross`, sum(1.1 * 1.13 * `print_packing`.`measurement`) AS `total_measurement` FROM `print_packing` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pss_accounts`
--
ALTER TABLE `pss_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pss_deleted_stocks`
--
ALTER TABLE `pss_deleted_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pss_packinglist`
--
ALTER TABLE `pss_packinglist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pss_packing_history`
--
ALTER TABLE `pss_packing_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pss_po_details`
--
ALTER TABLE `pss_po_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pss_set_invoice`
--
ALTER TABLE `pss_set_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pss_stocks`
--
ALTER TABLE `pss_stocks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pss_accounts`
--
ALTER TABLE `pss_accounts`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pss_deleted_stocks`
--
ALTER TABLE `pss_deleted_stocks`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pss_packinglist`
--
ALTER TABLE `pss_packinglist`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pss_packing_history`
--
ALTER TABLE `pss_packing_history`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pss_po_details`
--
ALTER TABLE `pss_po_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pss_set_invoice`
--
ALTER TABLE `pss_set_invoice`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pss_stocks`
--
ALTER TABLE `pss_stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
