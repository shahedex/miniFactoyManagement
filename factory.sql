-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 22, 2017 at 08:20 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `factory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PASSWORD` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `NAME`, `PASSWORD`) VALUES
(1, 'admin', 'adminpass'),
(2, 'admin2', 'adminpass2'),
(3, 'admin3', 'adminpass3');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PHONE` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ADDRESS` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `NAME`, `PHONE`, `ADDRESS`) VALUES
(1, 'Xokina Begum', '016969696969', 'Vuter goli, Golachipa'),
(2, 'Princess Zorina', '018989898989', 'Chipa goli, Golachipa'),
(5, 'Chokina Begum', '01912341232', 'Sufia Kamal Hall, CUET'),
(6, 'Osthiir Kolimuddin', '0191919191919', 'Jhakanaka goli, Uradhura Residential Area'),
(7, 'Jhakanaka Jolil', '012123456789', 'Jolils Den, Jolilpara, Dhaka'),
(8, 'Kopa Samsu', '016969696969', 'Kopakupi goli, Kopa area');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `DATE` date DEFAULT NULL,
  `INCOME` decimal(18,2) DEFAULT NULL,
  `EXPENSE` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`DATE`, `INCOME`, `EXPENSE`) VALUES
('2017-10-20', '500000.00', '140000.00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `CHARGE` decimal(18,2) DEFAULT NULL,
  `NAME` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DATE` date DEFAULT NULL,
  `ORDERBY` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PHONE` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ADDRESS` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numord` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `CHARGE`, `NAME`, `DATE`, `ORDERBY`, `PHONE`, `ADDRESS`, `numord`) VALUES
(3, '20000.00', 'Table', '2017-10-20', 'Xorina Khatun', '01901901912', 'Basher Kella, Bashbariya', NULL),
(4, NULL, 'Plastic Chair', NULL, 'Shahed Mehbub', '01678901234', 'vuter goli, haumaukhau road', 20),
(5, NULL, 'Regular Rack', '2017-10-22', 'Fuulbabu Partho', '018989898989', 'North-207, CUET', 40);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PRICE` decimal(18,2) DEFAULT NULL,
  `DETAILS` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `NAME`, `PRICE`, `DETAILS`, `quantity`) VALUES
(1, 'Chair', '101.00', 'Bengal plastic chair. Very strong and durable', 101),
(2, 'Table', '1010.00', 'Bengal plastic table. durable', 10100);

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SALARY` decimal(18,2) DEFAULT NULL,
  `BONUS` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`ID`, `NAME`, `SALARY`, `BONUS`) VALUES
(1, 'Asif Sabir', '45000.00', '4500.00'),
(2, 'Partha Mitra', '110000.00', '10000.00'),
(3, 'Sabbir Hossain', '150000.00', '20000.00'),
(4, 'Minhajul Islam ', '300000.00', '40000.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
