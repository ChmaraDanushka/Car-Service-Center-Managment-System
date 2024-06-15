-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2021 at 09:06 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `addservice`
--

CREATE TABLE `addservice` (
  `id` int(50) NOT NULL,
  `customerid` int(11) NOT NULL,
  `jobnumber` int(11) NOT NULL,
  `cusname` varchar(50) NOT NULL,
  `cuscontact` int(15) NOT NULL,
  `datee` varchar(100) NOT NULL,
  `stime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addservice`
--

INSERT INTO `addservice` (`id`, `customerid`, `jobnumber`, `cusname`, `cuscontact`, `datee`, `stime`) VALUES
(1, 1, 5, 'jjjjjjjjjjjjjjjjj', 1111111111, '2/5/21', '5.00pm'),
(416, 2, 0, 'flora', 12, '2021-09-13', '12:32:14pm'),
(419, 3, 0, 'duck', 100, '2021-09-13', '06:06:29pm'),
(420, 4, 0, 'mr. owl', 12, '2021-09-13', '07:14:51pm'),
(421, 5, 0, 'apple', 100, '2021-09-13', '07:21:54pm'),
(422, 6, 0, 'mango', 100, '2021-09-13', '07:56:39pm'),
(423, 7, 0, 'mr. pen', 50, '2021-09-13', '08:45:46pm');

-- --------------------------------------------------------

--
-- Table structure for table `approved`
--

CREATE TABLE `approved` (
  `oid` int(100) NOT NULL,
  `customerid` int(100) NOT NULL,
  `jobnumber` int(100) NOT NULL,
  `cusname` varchar(100) NOT NULL,
  `cuscontact` int(100) NOT NULL,
  `datee` int(100) NOT NULL,
  `stime` int(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `bodytype` varchar(100) NOT NULL,
  `milage` int(100) NOT NULL,
  `year` int(100) NOT NULL,
  `serviceid` int(11) NOT NULL,
  `servicetype` varchar(100) NOT NULL,
  `sectionalhead` varchar(100) NOT NULL,
  `employer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `approved`
--

INSERT INTO `approved` (`oid`, `customerid`, `jobnumber`, `cusname`, `cuscontact`, `datee`, `stime`, `brand`, `model`, `bodytype`, `milage`, `year`, `serviceid`, `servicetype`, `sectionalhead`, `employer`) VALUES
(756, 2, 0, 'flora', 12, 2021, 12, 'volvo', 'volvo', 'volvo', 500, 2015, 1, '', 'volvo', 'volvo'),
(777, 6, 0, 'mango', 100, 2021, 7, 'volvo', 'volvo', 'volvo', 500, 2015, 2, '', 'volvo', 'volvo'),
(778, 6, 0, 'mango', 100, 2021, 7, 'volvo', 'volvo', 'volvo', 500, 2015, 2, '', 'volvo', 'volvo'),
(779, 6, 0, 'mango', 100, 2021, 7, 'volvo', 'volvo', 'volvo', 500, 2015, 2, '', 'volvo', 'volvo'),
(780, 2, 0, 'flora', 12, 2021, 12, 'volvo', 'volvo', 'volvo', 500, 2015, 1, '', 'volvo', 'volvo'),
(781, 2, 0, 'flora', 12, 2021, 12, 'volvo', 'volvo', 'volvo', 500, 2015, 1, '', 'volvo', 'volvo'),
(782, 2, 0, 'flora', 12, 2021, 12, 'volvo', 'volvo', 'volvo', 500, 2015, 1, '', 'volvo', 'volvo'),
(783, 2, 0, 'flora', 12, 2021, 12, 'volvo', 'volvo', 'volvo', 500, 2015, 1, '', 'volvo', 'volvo'),
(784, 2, 0, 'flora', 12, 2021, 12, 'volvo', 'volvo', 'volvo', 500, 2015, 1, '', 'volvo', 'volvo'),
(785, 2, 0, 'flora', 12, 2021, 12, 'volvo', 'volvo', 'volvo', 500, 2015, 1, '', 'volvo', 'volvo'),
(786, 2, 0, 'flora', 12, 2021, 12, 'volvo', 'volvo', 'volvo', 500, 2015, 1, '', 'volvo', 'volvo'),
(787, 2, 0, 'flora', 12, 2021, 12, 'volvo', 'volvo', 'volvo', 500, 2015, 1, '', 'volvo', 'volvo'),
(788, 7, 0, 'mr. pen', 50, 2021, 8, 'volvo', 'volvo', 'volvo', 500, 2025, 3, '', 'volvo', 'volvo'),
(789, 7, 0, 'mr. pen', 50, 2021, 8, 'volvo', 'volvo', 'volvo', 500, 2025, 3, '', 'volvo', 'volvo'),
(790, 7, 0, 'mr. pen', 50, 2021, 8, 'volvo', 'volvo', 'volvo', 500, 2025, 3, '', 'volvo', 'volvo'),
(791, 0, 0, '', 0, 0, 0, '', '', '', 0, 0, 0, '', '', ''),
(792, 7, 0, 'mr. pen', 50, 2021, 8, 'volvo', 'volvo', 'volvo', 500, 2025, 3, '', 'volvo', 'volvo');

-- --------------------------------------------------------

--
-- Table structure for table `customer_list`
--

CREATE TABLE `customer_list` (
  `cid` int(20) NOT NULL,
  `jobnumber` int(11) NOT NULL,
  `customerid` int(100) NOT NULL,
  `cusname` varchar(100) NOT NULL,
  `cuscontact` int(100) NOT NULL,
  `join_date` date NOT NULL,
  `join_time` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_list`
--

INSERT INTO `customer_list` (`cid`, `jobnumber`, `customerid`, `cusname`, `cuscontact`, `join_date`, `join_time`) VALUES
(4444565, 0, 2, 'flora', 12, '2021-09-13', '12:32:'),
(4444571, 0, 6, 'mango', 100, '2021-09-13', '07:56:'),
(4444572, 0, 7, 'mr. pen', 50, '2021-09-13', '08:45:');

-- --------------------------------------------------------

--
-- Table structure for table `customer_promotions`
--

CREATE TABLE `customer_promotions` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `contact_no` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `promotion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_registration`
--

CREATE TABLE `customer_registration` (
  `id` int(50) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `nic_no` varchar(50) NOT NULL,
  `tel_no` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

CREATE TABLE `distributor` (
  `id` int(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `contactno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendingservice`
--

CREATE TABLE `pendingservice` (
  `pid` int(11) NOT NULL,
  `jobnumber` int(11) NOT NULL,
  `customerid` int(100) NOT NULL,
  `cusname` varchar(100) NOT NULL,
  `cuscontact` int(11) NOT NULL,
  `vehiclenumber` varchar(100) NOT NULL,
  `vehicletype` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `bodytype` varchar(100) NOT NULL,
  `milage` varchar(100) NOT NULL,
  `year` int(100) NOT NULL,
  `serviceid` int(100) NOT NULL,
  `sectionalhead` varchar(100) NOT NULL,
  `employer` varchar(100) NOT NULL,
  `p_datee` varchar(100) NOT NULL,
  `p_stime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendingservice`
--

INSERT INTO `pendingservice` (`pid`, `jobnumber`, `customerid`, `cusname`, `cuscontact`, `vehiclenumber`, `vehicletype`, `brand`, `model`, `bodytype`, `milage`, `year`, `serviceid`, `sectionalhead`, `employer`, `p_datee`, `p_stime`) VALUES
(427, 0, 7, 'mr. pen', 50, '258', 'ven', 'volvo', 'volvo', 'volvo', '500km', 2025, 3, 'volvo', 'volvo', '2021-09-13', '08:45:');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `buyingprice` int(100) NOT NULL,
  `sellingprice` int(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rejectedservices`
--

CREATE TABLE `rejectedservices` (
  `rid` int(100) NOT NULL,
  `customerid` varchar(100) NOT NULL,
  `jobnumber` int(100) NOT NULL,
  `cusname` varchar(100) NOT NULL,
  `cuscontact` int(100) NOT NULL,
  `join_date` varchar(100) NOT NULL,
  `join_time` varchar(100) NOT NULL,
  `vehicle_id` int(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `bodytype` varchar(100) NOT NULL,
  `milage` varchar(100) NOT NULL,
  `year` int(100) NOT NULL,
  `serviceid` int(100) NOT NULL,
  `sectionalhead` varchar(100) NOT NULL,
  `employer` varchar(100) NOT NULL,
  `vehicle_number` varchar(100) NOT NULL,
  `vehicle_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rejectedservices`
--

INSERT INTO `rejectedservices` (`rid`, `customerid`, `jobnumber`, `cusname`, `cuscontact`, `join_date`, `join_time`, `vehicle_id`, `brand`, `model`, `bodytype`, `milage`, `year`, `serviceid`, `sectionalhead`, `employer`, `vehicle_number`, `vehicle_type`) VALUES
(98, '', 0, '', 0, '', '', 0, '', '', '', '', 0, 0, '', '', '', ''),
(99, '7', 0, 'mr. pen', 50, '2021-09-13', '08:45:', 0, 'volvo', 'volvo', 'volvo', '500km', 2025, 3, 'volvo', 'volvo', '258', 'ven');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `rid` int(11) NOT NULL,
  `customerid` int(50) NOT NULL,
  `cusname` varchar(100) NOT NULL,
  `cuscontact` varchar(100) NOT NULL,
  `discription` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `servicedetails`
--

CREATE TABLE `servicedetails` (
  `serv_id` int(50) NOT NULL,
  `customerid` int(100) NOT NULL,
  `service_id` int(100) NOT NULL,
  `sectionalhead` varchar(100) NOT NULL,
  `employer` varchar(100) NOT NULL,
  `service_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicedetails`
--

INSERT INTO `servicedetails` (`serv_id`, `customerid`, `service_id`, `sectionalhead`, `employer`, `service_type`) VALUES
(338, 2, 1, 'volvo', 'volvo', ''),
(344, 6, 2, 'volvo', 'volvo', ''),
(345, 7, 3, 'volvo', 'volvo', '');

-- --------------------------------------------------------

--
-- Table structure for table `service_chemicals`
--

CREATE TABLE `service_chemicals` (
  `id` int(11) NOT NULL,
  `code` int(100) NOT NULL,
  `chemicals` varchar(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `reamarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_lubricant_filters`
--

CREATE TABLE `service_lubricant_filters` (
  `id` int(11) NOT NULL,
  `code` int(100) NOT NULL,
  `lubricant & filters` varchar(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `otheritems` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vehicledetails`
--

CREATE TABLE `vehicledetails` (
  `ver_id` int(11) NOT NULL,
  `vehicleid` int(50) NOT NULL,
  `customerid` int(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `bodytype` varchar(50) NOT NULL,
  `milage` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `vehiclenumber` varchar(10) NOT NULL,
  `vehicletype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicledetails`
--

INSERT INTO `vehicledetails` (`ver_id`, `vehicleid`, `customerid`, `brand`, `model`, `bodytype`, `milage`, `year`, `vehiclenumber`, `vehicletype`) VALUES
(400, 1, 2, 'volvo', 'volvo', 'volvo', '500km', 2015, '258', 'car'),
(406, 2, 6, 'volvo', 'volvo', 'volvo', '500km', 2015, '258', 'ven'),
(407, 3, 7, 'volvo', 'volvo', 'volvo', '500km', 2025, '258', 'ven');

-- --------------------------------------------------------

--
-- Table structure for table `view_customer`
--

CREATE TABLE `view_customer` (
  `id` int(50) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `tel_no` int(50) NOT NULL,
  `nic_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `service` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vip_customer`
--

CREATE TABLE `vip_customer` (
  `id` int(50) NOT NULL,
  `customerid` int(11) NOT NULL,
  `discription` text NOT NULL,
  `jobnumber` int(11) NOT NULL,
  `cusname` varchar(50) NOT NULL,
  `cuscontact` int(15) NOT NULL,
  `datee` varchar(100) NOT NULL,
  `stime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vip_list`
--

CREATE TABLE `vip_list` (
  `vid` int(20) NOT NULL,
  `jobnumber` int(11) NOT NULL,
  `customerid` int(100) NOT NULL,
  `cusname` varchar(100) NOT NULL,
  `cuscontact` int(100) NOT NULL,
  `discription` text NOT NULL,
  `vehiclenumber` varchar(100) NOT NULL,
  `vehicletype` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `bodytype` varchar(100) NOT NULL,
  `milage` varchar(100) NOT NULL,
  `year` int(100) NOT NULL,
  `serviceid` int(100) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `sectionalhead` varchar(100) NOT NULL,
  `employer` varchar(100) NOT NULL,
  `join_date` date NOT NULL,
  `join_time` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addservice`
--
ALTER TABLE `addservice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approved`
--
ALTER TABLE `approved`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `customer_list`
--
ALTER TABLE `customer_list`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `customer_promotions`
--
ALTER TABLE `customer_promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_registration`
--
ALTER TABLE `customer_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendingservice`
--
ALTER TABLE `pendingservice`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `rejectedservices`
--
ALTER TABLE `rejectedservices`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `servicedetails`
--
ALTER TABLE `servicedetails`
  ADD PRIMARY KEY (`serv_id`);

--
-- Indexes for table `service_chemicals`
--
ALTER TABLE `service_chemicals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_lubricant_filters`
--
ALTER TABLE `service_lubricant_filters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicledetails`
--
ALTER TABLE `vehicledetails`
  ADD PRIMARY KEY (`ver_id`);

--
-- Indexes for table `view_customer`
--
ALTER TABLE `view_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vip_customer`
--
ALTER TABLE `vip_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vip_list`
--
ALTER TABLE `vip_list`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addservice`
--
ALTER TABLE `addservice`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=424;

--
-- AUTO_INCREMENT for table `approved`
--
ALTER TABLE `approved`
  MODIFY `oid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=793;

--
-- AUTO_INCREMENT for table `customer_list`
--
ALTER TABLE `customer_list`
  MODIFY `cid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4444573;

--
-- AUTO_INCREMENT for table `customer_promotions`
--
ALTER TABLE `customer_promotions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer_registration`
--
ALTER TABLE `customer_registration`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `pendingservice`
--
ALTER TABLE `pendingservice`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=428;

--
-- AUTO_INCREMENT for table `rejectedservices`
--
ALTER TABLE `rejectedservices`
  MODIFY `rid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `servicedetails`
--
ALTER TABLE `servicedetails`
  MODIFY `serv_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=346;

--
-- AUTO_INCREMENT for table `service_chemicals`
--
ALTER TABLE `service_chemicals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service_lubricant_filters`
--
ALTER TABLE `service_lubricant_filters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vehicledetails`
--
ALTER TABLE `vehicledetails`
  MODIFY `ver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=408;

--
-- AUTO_INCREMENT for table `view_customer`
--
ALTER TABLE `view_customer`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vip_customer`
--
ALTER TABLE `vip_customer`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=320;

--
-- AUTO_INCREMENT for table `vip_list`
--
ALTER TABLE `vip_list`
  MODIFY `vid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4444448;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
