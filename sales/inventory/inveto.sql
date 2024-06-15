-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2021 at 06:17 PM
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
-- Database: `inveto`
--

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
(1, 'Categorie4', 'jumala', 'fhgfdhsk jd dj  kdk k dklc kk;;;skd;cskcsocpo'),
(2, 'Categorie4', 'wis', ' pinnn amle nuba enna'),
(3, 'categorie2', 'bimm', 'waranma  thukkal \r\n'),
(4, 'categorie3', 'rex', 'vitona amyenla saad kjv kkd'),
(5, 'Categorie4', 'solo', 'solo is one of    category in tool'),
(6, 'Categorie4', 'solo', 'solo is one of    category in tool');

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
(1, '32', 'dewdw', 'scategorie2', 'asss', 2122122, 'dcascsc@sd');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pro_id` varchar(50) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `buy_price` int(18) NOT NULL,
  `sell_price` int(18) NOT NULL,
  `quantity` int(18) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pro_id`, `pro_name`, `category`, `brand`, `buy_price`, `sell_price`, `quantity`, `description`) VALUES
(3, '', '', 'Categorie  4', 'paro', 45, 0, 323, 'sdbd dgdg sd fgsdfg dfddfdf gddf '),
(6, '', 'vbnm,', 'jumala', 'paro', 33, 333, 2, 'asfas'),
(7, '20', 'fsa', 'bimm', 'john', 44, 444, 5, 'fdfgdf'),
(8, '21', 'ffef', 'wis', 'tom', 56, 444, 33, '3mnbsdik;vajbskvsd'),
(16, '22', 'ss', 'jumala', 'dewdw', 0, 0, 0, ''),
(17, '23', '', '', '', 0, 0, 0, ''),
(18, '24', '', 'jumala', 'dewdw', 0, 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `distributor`
--
ALTER TABLE `distributor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
