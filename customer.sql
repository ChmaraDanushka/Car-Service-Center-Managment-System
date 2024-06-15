-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2022 at 10:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

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
-- Table structure for table `addnewservice`
--

CREATE TABLE `addnewservice` (
  `id` int(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `categories` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL,
  `newtotal` double NOT NULL,
  `paidtotal` double NOT NULL,
  `paymentmethod` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `totaldiscount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `stime` varchar(100) NOT NULL,
  `location` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addservice`
--

INSERT INTO `addservice` (`id`, `customerid`, `jobnumber`, `cusname`, `cuscontact`, `datee`, `stime`, `location`) VALUES
(1, 1, 5, 'jjjjjjjjjjjjjjjjj', 1111111111, '2/5/21', '5.00pm', ''),
(416, 2, 0, 'flora', 12, '2021-09-13', '12:32:14pm', ''),
(419, 3, 0, 'duck', 100, '2021-09-13', '06:06:29pm', ''),
(420, 4, 0, 'mr. owl', 12, '2021-09-13', '07:14:51pm', ''),
(421, 5, 0, 'apple', 100, '2021-09-13', '07:21:54pm', ''),
(422, 6, 0, 'mango', 100, '2021-09-13', '07:56:39pm', ''),
(423, 7, 0, 'mr. pen', 50, '2021-09-13', '08:45:46pm', ''),
(424, 8, 0, 'mr. pen', 50, '2021-09-22', '02:35:01am', ''),
(425, 9, 0, 'mr. pen', 50, '2021-09-22', '02:35:27am', ''),
(426, 10, 0, 'dsfsd', 1234, '2021-10-13', '02:17:24pm', ''),
(427, 11, 0, 'dsfsd', 1234, '2021-10-13', '02:17:59pm', ''),
(428, 12, 0, 'dsfsd', 1234, '2021-10-13', '02:19:22pm', ''),
(429, 13, 0, 'dsfsd', 1234, '2021-10-13', '02:21:02pm', ''),
(430, 14, 0, 'sdad', 0, '2021-10-30', '07:29:45pm', ''),
(431, 15, 0, 'sdfs', 0, '2021-10-31', '12:08:14pm', 'audi'),
(432, 16, 0, 'sad', 1234, '2021-10-31', '06:31:42pm', 'Galle'),
(433, 17, 0, 'sdf', 0, '2021-11-01', '10:38:46am', 'Gampaha'),
(434, 18, 0, 'sdfs', 0, '2021-11-01', '10:39:52am', 'Galle'),
(435, 19, 0, 'sdfsd', 0, '2021-11-01', '10:41:51am', 'Gampola'),
(436, 20, 0, 'asdas', 0, '2021-11-01', '10:43:57am', 'Galle'),
(437, 21, 0, 'asdas', 0, '2021-11-01', '10:44:30am', 'Beruwala'),
(438, 22, 0, 'sdfsdf', 0, '2021-11-01', '10:45:17am', 'Dehiwala-M'),
(439, 23, 0, 'dfgdf', 0, '2021-11-01', '10:46:09am', 'Eravur'),
(440, 24, 0, 'dfsf', 0, '2021-11-01', '10:48:40am', 'Eravur'),
(441, 25, 0, 'asdas', 0, '2021-11-02', '01:48:27pm', 'Galle'),
(442, 26, 0, 'sdfsdfsdfsdf', 0, '2021-11-02', '01:53:40pm', 'Gampaha'),
(443, 27, 0, 'fdgdfg', 0, '2021-11-02', '02:05:26pm', 'Dehiwala-M'),
(444, 28, 0, 'Chamara Danushka', 0, '2021-11-07', '04:28:05pm', 'Galle'),
(445, 29, 0, 'kamal', 756429231, '2022-02-15', '01:34:33pm', 'Ambalangod'),
(446, 30, 0, 'VENTURES C&amp;S', 0, '2022-02-15', '03:26:02pm', ''),
(447, 31, 0, 'VENTURES ///--**&amp;&amp;C&amp;S', 0, '2022-02-15', '03:26:29pm', ''),
(448, 32, 0, 'Chamara Danushka', 0, '2022-02-15', '03:37:40pm', ''),
(449, 33, 0, 'Chamara Danushka', 756429231, '2022-02-15', '03:38:03pm', ''),
(450, 34, 0, '**&sdfsf', 756429231, '2022-02-15', '03:48:42pm', ''),
(451, 35, 0, 'Chama^^&%67', 756429231, '2022-02-15', '03:49:03pm', ''),
(452, 36, 0, 'Chamara Danushka', 756429231, '2022-02-15', '04:22:09pm', ''),
(453, 37, 0, 'Chamara Danushka', 756429231, '2022-02-15', '04:23:32pm', ''),
(454, 38, 0, 'Chamara Danushka', 756429231, '2022-02-15', '04:24:29pm', ''),
(455, 39, 0, 'Chamara Danushka', 756429231, '2022-02-15', '04:25:28pm', ''),
(456, 40, 0, 'Chamara Danushka', 756429231, '2022-02-15', '04:25:55pm', ''),
(457, 41, 0, 'Chamara Danushka', 756429231, '2022-02-15', '04:26:00pm', ''),
(458, 42, 0, 'Chamara Danushka', 75642, '2022-02-15', '04:26:06pm', ''),
(459, 43, 0, 'Chamara Danushka', 2147483647, '2022-02-15', '04:26:36pm', ''),
(460, 44, 0, 'Chamara Danushka', 2147483647, '2022-02-15', '04:26:47pm', ''),
(461, 45, 0, 'Chamara Danushka', 756429231, '2022-02-15', '04:27:00pm', ''),
(462, 46, 0, 'Chamara Danushka', 756429231, '2022-02-15', '04:32:01pm', ''),
(463, 47, 0, 'Chamara Danushka', 0, '2022-02-15', '04:32:07pm', ''),
(464, 48, 0, 'Chamara Danushka', 0, '2022-02-15', '04:32:23pm', ''),
(465, 49, 0, 'Chamara Danushka', 756429231, '2022-02-15', '04:44:30pm', ''),
(466, 50, 0, 'Chamara Danushka', 756, '2022-02-15', '04:44:37pm', ''),
(467, 51, 0, 'Chamara Danushka', 756, '2022-02-15', '04:50:00pm', ''),
(468, 52, 0, 'VENTURES C&S', 756429231, '2022-02-15', '05:05:27pm', 'Ambalangod'),
(469, 53, 0, 'VENTURES C&S', 756429231, '2022-02-15', '05:10:22pm', ''),
(470, 54, 0, 'VENTURES C&S', 756429231, '2022-02-15', '07:37:19pm', ''),
(471, 55, 0, 'VENTURES C&S', 756429231, '2022-02-15', '07:38:10pm', ''),
(472, 0, 0, 'VENTURES C&S', 756429231, '2022-02-15', '07:44:52pm', ''),
(473, 0, 0, 'VENTURES C&S', 756429231, '2022-02-15', '07:47:24pm', ''),
(474, 52, 0, 'VENTURES C&S', 756429231, '2022-02-15', '07:51:48pm', ''),
(475, 52, 0, 'VENTURES C&S', 756429231, '2022-02-15', '07:57:22pm', ''),
(476, 53, 0, 'Kalhara Nishshanka', 7565823, '2022-02-16', '09:27:51pm', 'Ampara'),
(477, 53, 0, 'Kalhara Nishshanka', 7565823, '2022-02-16', '09:51:07pm', '');

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
  `model` varchar(100) NOT NULL,
  `bodytype` varchar(100) NOT NULL,
  `milage` int(100) NOT NULL,
  `year` int(100) NOT NULL,
  `serviceid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bill_prices`
--

CREATE TABLE `bill_prices` (
  `id_no` int(100) NOT NULL,
  `bill_code` varchar(50) NOT NULL,
  `customerid` varchar(50) NOT NULL,
  `pay_method` varchar(50) NOT NULL,
  `service_charge` double NOT NULL,
  `total_discount` double NOT NULL,
  `sub_total` double NOT NULL,
  `paid_total` double NOT NULL,
  `change_price` double NOT NULL,
  `bill_time` varchar(10) NOT NULL,
  `bill_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_prices`
--

INSERT INTO `bill_prices` (`id_no`, `bill_code`, `customerid`, `pay_method`, `service_charge`, `total_discount`, `sub_total`, `paid_total`, `change_price`, `bill_time`, `bill_date`) VALUES
(2, 'CSBC20220', '8', 'cash', 78, 0, 1113, 0, -1113, '03:18:40 p', '2022-02-08'),
(3, 'CSBC20220', '8', 'cash', 78, 0, 1113, 0, -1113, '03:18:40 p', '2022-02-08'),
(5, 'CSBC20220', '8', 'cash', 78, 56, 712, 1000, 288, '11:09:10 a', '2022-02-16'),
(6, 'CSBC20220', '52', 'cash', 78, 56, 712, 1000, 288, '11:39:09 a', '2022-02-16'),
(7, 'CSBC20226', '53', 'cash', 456, 56, 5640, 10000, 4360, '01:58:16 a', '2022-02-17'),
(8, 'CSBC20227', '53', 'cash', 456, 56, 5640, 10000, 4360, '01:58:16 a', '2022-02-17'),
(9, 'CSBC20228', '53', 'cash', 456, 56, 5640, 10000, 4360, '01:58:16 a', '2022-02-17'),
(10, 'CSBC20229', '53', 'cash', 456, 56, 5640, 10000, 4360, '01:58:16 a', '2022-02-17'),
(11, 'CSBC202210', '53', 'cash', 456, 56, 5640, 10000, 4360, '01:58:16 a', '2022-02-17'),
(12, 'CSBC202211', '53', 'cash', 456, 56, 5640, 10000, 4360, '01:58:16 a', '2022-02-17'),
(13, 'CSBC202212', '53', 'cash', 456, 56, 5640, 10000, 4360, '01:58:16 a', '2022-02-17'),
(14, 'CSBC202213', '53', 'cash', 456, 56, 5640, 10000, 4360, '01:58:16 a', '2022-02-17'),
(15, 'CSBC202214', '53', 'cash', 456, 56, 5640, 10000, 4360, '01:58:16 a', '2022-02-17'),
(16, 'CSBC202215', '53', 'cash', 456, 56, 5640, 10000, 4360, '01:58:16 a', '2022-02-17'),
(17, 'CSBC202216', '53', 'cash', 456, 56, 5640, 10000, 4360, '01:58:16 a', '2022-02-17'),
(18, 'CSBC202217', '53', 'cash', 456, 56, 5640, 10000, 4360, '01:58:16 a', '2022-02-17'),
(19, 'CSBC202218', '53', 'cash', 456, 56, 5640, 10000, 4360, '01:58:16 a', '2022-02-17'),
(20, 'CSBC202219', '53', 'cash', 456, 56, 5640, 10000, 4360, '01:58:16 a', '2022-02-17'),
(21, 'CSBC202220', '53', 'cash', 456, 56, 5640, 10000, 4360, '01:58:16 a', '2022-02-17'),
(22, 'CSBC202221', '53', 'cash', 456, 56, 5640, 10000, 4360, '01:58:16 a', '2022-02-17'),
(23, 'CSBC202222', '53', 'cash', 456, 56, 5640, 10000, 4360, '01:58:16 a', '2022-02-17'),
(24, 'CSBC202223', '53', 'debit', 0, 0, 0, 0, 0, '02:19:18 a', '2022-02-17'),
(25, 'CSBC202224', '53', 'debit', 0, 0, 0, 0, 0, '02:21:11 a', '2022-02-17'),
(26, 'CSBC202225', '53', 'debit', 0, 0, 0, 0, 0, '02:22:01 a', '2022-02-17');

-- --------------------------------------------------------

--
-- Table structure for table `bill_table`
--

CREATE TABLE `bill_table` (
  `p_no` int(50) NOT NULL,
  `pro_code` varchar(50) NOT NULL,
  `pro_cat` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(50) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `b_data`
--

CREATE TABLE `b_data` (
  `b_id` int(10) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `b_ceo` varchar(50) NOT NULL,
  `b_tp` varchar(50) NOT NULL,
  `b_address` varchar(50) NOT NULL,
  `b_email` varchar(50) NOT NULL,
  `b_logo` varchar(50) NOT NULL,
  `b_website` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `b_data`
--

INSERT INTO `b_data` (`b_id`, `b_name`, `b_ceo`, `b_tp`, `b_address`, `b_email`, `b_logo`, `b_website`) VALUES
(1, 'C&S Venturs', 'Harsha  ', '+94753452313', '2000, Kandy,Peradeniya', 'csventurs@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `parent_categorie` varchar(50) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_categorie`, `cat_name`, `description`) VALUES
(1, '', '', ''),
(2, 'Categorie4', 'wis', ' pinnn amle nuba enna'),
(3, 'categorie2', 'bimm', 'waranma  thukkal \r\n'),
(4, 'categorie3', 'rex', 'vitona amyenla saad kjv kkd'),
(5, 'Categorie4', 'solo', 'solo is one of    category in tool'),
(6, 'Categorie4', 'solo', 'solo is one of    category in tool');

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
  `member` varchar(10) NOT NULL,
  `join_date` date NOT NULL,
  `join_time` varchar(6) NOT NULL,
  `location` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_list`
--

INSERT INTO `customer_list` (`cid`, `jobnumber`, `customerid`, `cusname`, `cuscontact`, `member`, `join_date`, `join_time`, `location`) VALUES
(4444613, 0, 52, 'Chamara Danushka', 702334627, 'normal', '2022-02-15', '05:05:', 'Kandy'),
(4444617, 0, 53, 'Kalhara Nishshanka', 7565823, 'vip', '2022-02-16', '09:27:', 'Ampara');

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
  `id` int(11) NOT NULL,
  `dis_id` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `contact_no` int(13) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `distributor`
--

INSERT INTO `distributor` (`id`, `dis_id`, `brand`, `category`, `company`, `contact_no`, `email`) VALUES
(18, '1', 'ghghfxghfxghfgh', 'rex', 'cxvxcvxc', 0, 'xcvxc'),
(19, '2', 'ghghfxghfxghfgh', 'rex', 'cxvxcvxc', 0, 'xcvxc'),
(20, '3', 'ghghfxghfxghfgh', 'rex', 'cxvxcvxc', 0, 'xcvxc'),
(21, '4', 'ghghfxghfxghfgh', 'rex', 'cxvxcvxc', 0, 'xcvxc'),
(22, '5', 'ghghfxghfxghfgh', 'rex', 'cxvxcvxc', 0, 'xcvxc');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `customerid` int(10) NOT NULL,
  `service_charge` double NOT NULL,
  `categoreis` varchar(150) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `price` double NOT NULL,
  `p_discount` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_discount` double NOT NULL,
  `total` double NOT NULL,
  `paid` double NOT NULL,
  `new_total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `customerid`, `service_charge`, `categoreis`, `product_name`, `price`, `p_discount`, `quantity`, `total_discount`, `total`, `paid`, `new_total`) VALUES
(13, 0, 10, 'wis', '11', 32, 10, 2, 0, 0, 0, 0),
(14, 0, 100, 'solo', '21', 444, 5, 10, 0, 0, 0, 0),
(15, 0, 100, 'solo', '21', 444, 5, 10, 50, 4390, 0, 0),
(16, 0, 10, 'bimm', '78', 345, 10, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `py_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `payment_m` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`py_id`, `payment_id`, `payment_m`) VALUES
(1, 0, ''),
(2, 2, 'cash'),
(3, 56, 'debit'),
(4, 0, 'Credit'),
(5, 0, 'Other');

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
  `model` varchar(100) NOT NULL,
  `bodytype` varchar(100) NOT NULL,
  `milage` varchar(100) NOT NULL,
  `year` int(100) NOT NULL,
  `serviceid` int(100) NOT NULL,
  `p_datee` varchar(100) NOT NULL,
  `p_stime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendingservice`
--

INSERT INTO `pendingservice` (`pid`, `jobnumber`, `customerid`, `cusname`, `cuscontact`, `vehiclenumber`, `vehicletype`, `model`, `bodytype`, `milage`, `year`, `serviceid`, `p_datee`, `p_stime`) VALUES
(492, 0, 52, 'Chamara Danushka', 702334627, '456', '', 'saab', '', '32', 2022, 0, '2022-02-15', '05:05:');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pro_id` varchar(50) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `buy_price` int(18) NOT NULL,
  `sell_price` int(18) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pro_id`, `pro_name`, `cat_name`, `brand`, `buy_price`, `sell_price`, `description`) VALUES
(23, '13', 'Havoline® Energy[SAE Grade: 5W-30]- 4L', '', '', 1200, 1450, ''),
(24, '14', 'Havoline® Energy[SAE Grade: 5W-30]-1l', '', '', 1200, 1450, ''),
(25, '15', 'Havoline®[SAE Grade: 5W-30] Ultra V- 1l', '', '', 1200, 1400, ''),
(26, '16', 'Havoline®[SAE Grade: 5W-30] Ultra R- 5l', '', '', 4300, 0, ''),
(27, '17', 'Havoline® [SAE Grade: 5W-40]ProDS Fully Synthetic ', '', '', 1800, 2340, ''),
(28, '18', 'Havoline® Formula[SAE Grade : 10W-30]-4l', '', '', 4600, 5300, ''),
(29, '19', 'Two Stroke Lawnmower Oil[SAE Grade: 20 (Pre-dilute', '', '', 1360, 1660, '[SAE Grade: 20 (Pre-diluted).]\r\n'),
(30, '20', ' Delo 400 LE', '', '', 1300, 1490, '[SAE grade 15W-40]'),
(31, '21', ' Delo 400 MGX- 5l', '', '', 3900, 4800, '[SAE grade 15W-40]'),
(32, '22', 'Delo 400 MGX-1l', '', '', 560, 790, '[SAE grade 15W-40]');

-- --------------------------------------------------------

--
-- Table structure for table `pro_bill`
--

CREATE TABLE `pro_bill` (
  `bill_id` int(11) NOT NULL,
  `pro_cat` varchar(12) NOT NULL,
  `pro_name` varchar(11) NOT NULL,
  `customerid` int(100) NOT NULL,
  `price` double NOT NULL,
  `quntity` int(100) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pro_bill`
--

INSERT INTO `pro_bill` (`bill_id`, `pro_cat`, `pro_name`, `customerid`, `price`, `quntity`, `total`) VALUES
(152, 'wis', 'www', 0, 0, 0, 0),
(160, 'wis', 'ffef', 0, 0, 0, 0),
(161, 'wis', 'ffef', 8, 0, 0, 0),
(162, 'wis', 'ffef', 8, 0, 0, 0),
(163, 'wis', 'ffef', 8, 0, 0, 0),
(164, 'wis', 'ffef', 52, 0, 0, 0),
(165, 'wis', 'ffef', 52, 0, 0, 0),
(166, 'wis', 'ffef', 52, 0, 0, 0),
(167, 'wis', 'ffef', 0, 444, 0, 0),
(168, 'wis', 'ffef', 0, 444, 0, 0),
(169, 'wis', 'ffef', 0, 444, 0, 0),
(170, '', 'Havoline® E', 0, 1450, 0, 0),
(171, '', 'Havoline® E', 0, 1450, 0, 0),
(172, '', 'Havoline® E', 0, 1450, 0, 0),
(173, '', 'Havoline® [', 0, 2340, 0, 0);

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
(99, '7', 0, 'mr. pen', 50, '2021-09-13', '08:45:', 0, 'volvo', 'volvo', 'volvo', '500km', 2025, 3, 'volvo', 'volvo', '258', 'ven'),
(100, '7', 0, 'mr. pen', 50, '2021-09-13', '08:45:', 0, 'volvo', 'volvo', 'volvo', '500km', 2025, 3, 'volvo', 'volvo', '258', 'ven'),
(101, '7', 0, 'mr. pen', 50, '2021-09-13', '08:45:', 0, 'volvo', 'volvo', 'volvo', '500km', 2025, 3, 'volvo', 'volvo', '258', 'ven'),
(102, '', 0, '', 0, '', '', 0, '', '', '', '', 0, 0, '', '', '', ''),
(103, '7', 0, 'mr. pen', 50, '2021-09-13', '08:45:', 0, 'volvo', 'volvo', 'volvo', '500km', 2025, 3, 'volvo', 'volvo', '258', 'ven'),
(104, '15', 0, 'rtgdfg', 0, '2021-10-30', '07:31:13pm', 0, 'volvo', 'volvo', 'volvo', '', 0, 13, 'volvo', 'volvo', '', ''),
(105, '18', 0, 'sdfs', 0, '2021-11-01', '10:39:52am', 0, 'saab', 'volvo', 'mercedes', 'sdf', 0, 17, 'saab', 'volvo', 'dsf', 'sdf'),
(106, '21', 0, 'asdas', 0, '2021-11-01', '10:44:30am', 0, 'volvo', 'volvo', 'volvo', 'asdas', 0, 20, 'volvo', 'volvo', 'asdas', 'asdas'),
(107, '23', 0, 'dfgdf', 0, '2021-11-01', '10:46:09am', 0, 'volvo', 'volvo', 'volvo', 'dfgd', 0, 22, 'volvo', 'volvo', 'dgdfg', 'dfg'),
(108, '', 0, '', 0, '', '', 0, '', '', '', '', 0, 0, '', '', '', ''),
(109, '25', 0, 'asdas', 0, '2021-11-02', '01:48:27pm', 0, 'volvo', 'volvo', 'volvo', '', 0, 24, 'volvo', 'volvo', '', ''),
(110, '31', 0, 'VENTURES ///--**&amp;&amp;C&amp;S', 0, '2022-02-15', '03:26:29pm', 0, '', '', '', '', 0, 30, '', '', '', ''),
(111, '34', 0, '**&sdfsf', 756429231, '2022-02-15', '03:48:42pm', 0, '', '', '', '', 0, 33, '', '', '', ''),
(112, '35', 0, 'Chama^^&%67', 756429231, '2022-02-15', '03:49:03pm', 0, '', '', '', '', 0, 34, '', '', '', ''),
(113, '30', 0, 'VENTURES C&amp;S', 0, '2022-02-15', '03:26:02pm', 0, '', '', '', '', 0, 29, '', '', '', ''),
(114, '32', 0, 'Chamara Danushka', 0, '2022-02-15', '03:37:40pm', 0, '', '', '', '', 0, 31, '', '', '', ''),
(115, '33', 0, 'Chamara Danushka', 756429231, '2022-02-15', '03:38:03pm', 0, '', '', '', '', 0, 32, '', '', '', ''),
(116, '', 0, '', 0, '', '', 0, '', '', '', '', 0, 0, '', '', '', ''),
(117, '36', 0, 'Chamara Danushka', 756429231, '2022-02-15', '04:22:09pm', 0, '', '', '', '', 0, 35, '', '', '', ''),
(118, '37', 0, 'Chamara Danushka', 756429231, '2022-02-15', '04:23:32pm', 0, '', '', '', '', 0, 36, '', '', '', ''),
(119, '38', 0, 'Chamara Danushka', 756429231, '2022-02-15', '04:24:29pm', 0, '', '', '', '', 0, 37, '', '', '', ''),
(120, '39', 0, 'Chamara Danushka', 756429231, '2022-02-15', '04:25:28pm', 0, '', '', '', '', 0, 38, '', '', '', ''),
(121, '40', 0, 'Chamara Danushka', 756429231, '2022-02-15', '04:25:55pm', 0, '', '', '', '', 0, 39, '', '', '', ''),
(122, '41', 0, 'Chamara Danushka', 756429231, '2022-02-15', '04:26:00pm', 0, '', '', '', '', 0, 40, '', '', '', ''),
(123, '42', 0, 'Chamara Danushka', 75642, '2022-02-15', '04:26:06pm', 0, '', '', '', '', 0, 41, '', '', '', ''),
(124, '43', 0, 'Chamara Danushka', 2147483647, '2022-02-15', '04:26:36pm', 0, '', '', '', '', 0, 42, '', '', '', ''),
(125, '44', 0, 'Chamara Danushka', 2147483647, '2022-02-15', '04:26:47pm', 0, '', '', '', '', 0, 43, '', '', '', ''),
(126, '45', 0, 'Chamara Danushka', 756429231, '2022-02-15', '04:27:00pm', 0, '', '', '', '', 0, 44, '', '', '', ''),
(127, '46', 0, 'Chamara Danushka', 756429231, '2022-02-15', '04:32:01pm', 0, '', '', '', '', 0, 45, '', '', '', ''),
(128, '47', 0, 'Chamara Danushka', 0, '2022-02-15', '04:32:07pm', 0, '', '', '', '', 0, 46, '', '', '', ''),
(129, '48', 0, 'Chamara Danushka', 0, '2022-02-15', '04:32:23pm', 0, '', '', '', '', 0, 47, '', '', '', ''),
(130, '49', 0, 'Chamara Danushka', 756429231, '2022-02-15', '04:44:30pm', 0, '', '', '', '', 0, 48, '', '', '', ''),
(131, '52', 0, 'VENTURES C&S', 756429231, '2022-02-15', '05:05:27pm', 0, '', 'saab', '', '32', 2022, 51, '', '', '456', ''),
(132, '51', 0, 'Chamara Danushka', 756, '2022-02-15', '04:50:00pm', 0, '', '', '', '', 0, 50, '', '', '', ''),
(133, '50', 0, 'Chamara Danushka', 756, '2022-02-15', '04:44:37pm', 0, '', '', '', '', 0, 49, '', '', '', ''),
(134, '55', 0, 'VENTURES C&S', 756429231, '2022-02-15', '07:38:10pm', 0, '', 'saab', '', '32', 2022, 54, '', '', '456', ''),
(135, '7', 0, 'mr. pen', 50, '2021-09-13', '08:45:', 0, '', 'volvo', 'volvo', '500km', 2025, 3, '', '', '258', 'ven');

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
  `service_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicedetails`
--

INSERT INTO `servicedetails` (`serv_id`, `customerid`, `service_id`) VALUES
(338, 2, 1),
(344, 6, 2),
(345, 7, 3),
(346, 8, 4),
(347, 9, 5),
(348, 10, 6),
(349, 11, 7),
(350, 12, 8),
(351, 13, 9),
(352, 1, 10),
(353, 14, 11),
(354, 15, 12),
(355, 15, 13),
(356, 15, 14),
(357, 16, 15),
(358, 17, 16),
(359, 18, 17),
(360, 19, 18),
(361, 20, 19),
(362, 21, 20),
(363, 22, 21),
(364, 23, 22),
(365, 24, 23),
(366, 25, 24),
(367, 26, 25),
(368, 27, 26),
(369, 28, 27),
(370, 29, 28),
(371, 30, 29),
(372, 31, 30),
(373, 32, 31),
(374, 33, 32),
(375, 34, 33),
(376, 35, 34),
(377, 36, 35),
(378, 37, 36),
(379, 38, 37),
(380, 39, 38),
(381, 40, 39),
(382, 41, 40),
(383, 42, 41),
(384, 43, 42),
(385, 44, 43),
(386, 45, 44),
(387, 46, 45),
(388, 47, 46),
(389, 48, 47),
(390, 49, 48),
(391, 50, 49),
(392, 51, 50),
(393, 52, 51),
(394, 53, 52),
(395, 54, 53),
(396, 55, 54),
(397, 0, 0),
(398, 0, 0),
(399, 52, 0),
(400, 52, 0),
(401, 53, 1),
(402, 53, 0);

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
-- Table structure for table `today_added`
--

CREATE TABLE `today_added` (
  `add_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `cus_contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `today_added`
--

INSERT INTO `today_added` (`add_id`, `customer_id`, `cus_contact`) VALUES
(17, 27, 'fdgdf'),
(18, 28, 'dfgdfg'),
(19, 29, '0756429231'),
(20, 30, ''),
(21, 31, ''),
(22, 32, ''),
(23, 33, '0756429231'),
(24, 34, '0756429231'),
(25, 35, '0756429231'),
(26, 36, '0756429231'),
(27, 37, '0756429231'),
(28, 38, '0756429231'),
(29, 39, '0756429231'),
(30, 40, '0756429231'),
(31, 41, '0756429231'),
(32, 42, '075642///'),
(33, 43, '+947564292'),
(34, 44, '+947564292'),
(35, 45, '756429231'),
(36, 46, '0756429231'),
(37, 47, 'sdfsdfsdf'),
(38, 48, 'fsdfsdfsdf'),
(39, 49, '0756429231'),
(40, 50, '0756sadasd'),
(41, 51, '0756sadasd'),
(42, 52, '0756429231'),
(43, 53, '756429231'),
(44, 54, '756429231'),
(45, 55, '756429231'),
(46, 0, '756429231'),
(47, 52, '756429231'),
(48, 52, '756429231'),
(49, 52, '756429231'),
(50, 53, '07565823'),
(51, 53, '7565823');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(150) NOT NULL,
  `name` text NOT NULL,
  `userrole` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `userrole`, `email`, `mobile`, `password`) VALUES
(91, 'admin', 'Chamara Danushka', 'admin', 'sewwandadanushka@gmail.com', '+94702', '123');

-- --------------------------------------------------------

--
-- Table structure for table `vehicledetails`
--

CREATE TABLE `vehicledetails` (
  `ver_id` int(11) NOT NULL,
  `vehicleid` int(50) NOT NULL,
  `customerid` int(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `bodytype` varchar(50) NOT NULL,
  `milage` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `vehiclenumber` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicledetails`
--

INSERT INTO `vehicledetails` (`ver_id`, `vehicleid`, `customerid`, `model`, `bodytype`, `milage`, `year`, `vehiclenumber`, `time`, `date`) VALUES
(400, 1, 2, 'volvo', 'volvo', '500km', 2015, '258', '', ''),
(455, 25, 52, 'saab', '', '32', 2022, '456', '', ''),
(456, 26, 53, 'saab', '', '32', 2022, '456', '', ''),
(457, 27, 54, 'saab', '', '32', 2022, '456', '', ''),
(458, 28, 55, 'saab', '', '32', 2022, '456', '', ''),
(459, 0, 0, 'saab', '', '32', 2022, '456', '', ''),
(460, 0, 0, 'saab', '', '32', 2022, '456', '', ''),
(461, 0, 52, 'saab', '', '32', 2022, '456', '', ''),
(462, 0, 52, 'saab', '', '32', 2022, '456', '2022-02-15', '07:57:22pm'),
(463, 1, 53, 'Toyota', '', '500', 2022, '456', '', ''),
(464, 0, 53, 'Toyota', '', '500', 2022, '456', '2022-02-16', '09:51:07pm');

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

--
-- Dumping data for table `vip_customer`
--

INSERT INTO `vip_customer` (`id`, `customerid`, `discription`, `jobnumber`, `cusname`, `cuscontact`, `datee`, `stime`) VALUES
(320, 1, '', 0, '', 0, '2021-10-29', '04:51:30pm');

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
-- Dumping data for table `vip_list`
--

INSERT INTO `vip_list` (`vid`, `jobnumber`, `customerid`, `cusname`, `cuscontact`, `discription`, `vehiclenumber`, `vehicletype`, `brand`, `model`, `bodytype`, `milage`, `year`, `serviceid`, `service_type`, `sectionalhead`, `employer`, `join_date`, `join_time`) VALUES
(4444448, 0, 1, '', 0, '', '', '', '', '', '', '', 0, 0, '', '', '', '2021-10-29', '04:51:');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addnewservice`
--
ALTER TABLE `addnewservice`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `bill_prices`
--
ALTER TABLE `bill_prices`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `bill_table`
--
ALTER TABLE `bill_table`
  ADD PRIMARY KEY (`p_no`);

--
-- Indexes for table `b_data`
--
ALTER TABLE `b_data`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`py_id`);

--
-- Indexes for table `pendingservice`
--
ALTER TABLE `pendingservice`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_bill`
--
ALTER TABLE `pro_bill`
  ADD PRIMARY KEY (`bill_id`);

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
-- Indexes for table `today_added`
--
ALTER TABLE `today_added`
  ADD PRIMARY KEY (`add_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
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
-- AUTO_INCREMENT for table `addnewservice`
--
ALTER TABLE `addnewservice`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `addservice`
--
ALTER TABLE `addservice`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=478;

--
-- AUTO_INCREMENT for table `approved`
--
ALTER TABLE `approved`
  MODIFY `oid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=809;

--
-- AUTO_INCREMENT for table `bill_prices`
--
ALTER TABLE `bill_prices`
  MODIFY `id_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `bill_table`
--
ALTER TABLE `bill_table`
  MODIFY `p_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `b_data`
--
ALTER TABLE `b_data`
  MODIFY `b_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_list`
--
ALTER TABLE `customer_list`
  MODIFY `cid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4444618;

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
-- AUTO_INCREMENT for table `distributor`
--
ALTER TABLE `distributor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `py_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pendingservice`
--
ALTER TABLE `pendingservice`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=493;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pro_bill`
--
ALTER TABLE `pro_bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT for table `rejectedservices`
--
ALTER TABLE `rejectedservices`
  MODIFY `rid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `servicedetails`
--
ALTER TABLE `servicedetails`
  MODIFY `serv_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=403;

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
-- AUTO_INCREMENT for table `today_added`
--
ALTER TABLE `today_added`
  MODIFY `add_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `vehicledetails`
--
ALTER TABLE `vehicledetails`
  MODIFY `ver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=465;

--
-- AUTO_INCREMENT for table `view_customer`
--
ALTER TABLE `view_customer`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vip_customer`
--
ALTER TABLE `vip_customer`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=321;

--
-- AUTO_INCREMENT for table `vip_list`
--
ALTER TABLE `vip_list`
  MODIFY `vid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4444449;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
