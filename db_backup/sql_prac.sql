-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2022 at 05:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql_prac`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cid` int(11) NOT NULL,
  `cus_name` varchar(255) NOT NULL,
  `contactname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postalcode` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cid`, `cus_name`, `contactname`, `address`, `city`, `postalcode`, `country`) VALUES
(1, 'Alfreds Futterkiste', 'Maria Andres', 'Obere Str. 57', 'Berlin', '12209', 'Germany'),
(2, 'Ana Turjillo Emparedados', 'Ana Turjillo', 'Mataderos 2312', 'Merida', '05021', 'Mexico'),
(3, 'Antonio Moreno Taqueria', 'Antonio Moreno', 'Avda. de la Constitucion 2222', 'Mexico D.F.', '05023', 'Mexico'),
(4, 'Around the Horn', 'Thomas Hardy', '120 Hanover sq.', 'London', 'WA1 1DP', 'UK'),
(6, 'Blauer See', 'Hanna Moos', 'Forsterstr. 57', 'Mannheim', '68306', 'Germany'),
(7, 'Blondel pere etfils', 'Frederique Citeaux', '24, place Kleber', 'Starsbourg', '67000', 'France'),
(8, 'Bon app\'', 'Laurence Lebihans', '12, rue des Bouchers', 'Marseille', '13008', 'France'),
(9, 'Chop-suey Chinese', 'Yang Wang', 'Hauptstr. 29', 'Bern', '3012', 'Switzerland'),
(10, 'Du monde entier', 'Janine Labrune', '67, rue des Cinquante Otages', 'Nantes', '44000', 'France'),
(12, 'Grandma Kelly\'s Homestead', '', '', 'Ann Arbor', '', 'USA'),
(14, 'Cardinal', 'Shahid', '', 'Stavanger', '56734', 'Norway');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `odid` int(11) NOT NULL,
  `orderid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`odid`, `orderid`, `pid`, `quantity`) VALUES
(1, 10248, 3, 12),
(2, 10248, 2, 15),
(3, 10248, 3, 7),
(4, 10249, 4, 23),
(5, 10249, 5, 5),
(6, 10250, 2, 17),
(7, 10252, 6, 20),
(8, 10254, 2, 10),
(9, 10251, 6, 4),
(10, 10253, 5, 25);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `empid` int(11) NOT NULL,
  `orderdate` date NOT NULL,
  `shipperid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `cid`, `empid`, `orderdate`, `shipperid`) VALUES
(10248, 3, 1, '1996-07-04', 3),
(10249, 5, 2, '1996-07-05', 2),
(10250, 7, 3, '1996-07-06', 1),
(10251, 2, 4, '1996-07-07', 3),
(10252, 1, 5, '1996-07-08', 1),
(10253, 4, 6, '1996-07-08', 2),
(10254, 6, 7, '1996-07-09', 4);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `sid`, `cid`, `unit`, `price`) VALUES
(1, 'Chais', 1, 1, '10 boxes x 20 bags', '18'),
(2, 'Chang', 1, 2, '24 - 12 oz bottles', '19'),
(3, 'Ansii Syrup', 2, 3, '12 - 550 ml bottles', '22'),
(4, 'Umer Seasoning', 4, 5, '12 - 8 oz jars', '97'),
(5, 'Dried Pears', 4, 6, '18 - 1 lb pkgs', '31'),
(6, 'Jam Spread', 1, 1, '12 - 8 oz jars', '45');

-- --------------------------------------------------------

--
-- Table structure for table `shippers`
--

CREATE TABLE `shippers` (
  `shipperid` int(11) NOT NULL,
  `shipper_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shippers`
--

INSERT INTO `shippers` (`shipperid`, `shipper_name`, `phone`) VALUES
(1, 'Speedy Express', '(503) 555-9831'),
(2, 'United Package', '(503) 555-3199'),
(3, 'Federal Shipping', '(503) 555-9931');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `sid` int(11) NOT NULL,
  `sname` varchar(255) DEFAULT NULL,
  `contactname` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postalcode` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`sid`, `sname`, `contactname`, `address`, `city`, `postalcode`, `country`, `phone`) VALUES
(1, 'Exotic Liquid', 'Charlotte Cooper', '49 Gilbert St.', 'Londona', 'EC1 4SD', 'UK', '(171) 555-2222'),
(2, 'New Orleans Cajun', 'Shelley Burke', 'P.O. Box 78934', 'New Orleans', '70117', 'USA', '(100) 555-4822'),
(3, 'Grandma Kelly\'s Homestead', 'Regina Murphy', '707 Oxford Rd.', 'Ann Arbor', '48104', 'USA', '33007'),
(4, 'Mayumi\'s', 'Mayumi Ohno', '92 Setsuko Chuo-ku', 'Osaka', '545', 'Japan', '(06) 431-7877'),
(5, 'Heli Subwaren GmbH & Co. KG', 'Petra Winkler', 'TiergartenstraBe 5', 'Berlin', '10785', 'Germany', '(010) 9984510'),
(6, 'Aux joyeux ecclésiastiques', 'Guylène Nodier', '203, Rue des Francs-Bourgeois', 'Paris', '75004', 'France', '(1) 03.83.00.68'),
(7, 'Svensk Sjöföda AB', 'Michael Björn', 'Brovallavägen 231', 'Stockholm', 'S-123 45', 'Sweden', '08-123 45 67'),
(8, 'Leka Trading', 'Chandra Leka', '471 Serangoon Loop, Suite #402', 'Singapore', '0512', 'Singapore', '555-8787'),
(9, 'Lyngbysild', 'Niels Petersen', 'Lyngbysild Fiskebakken 10', 'Lyngby', '2800', 'Denmark', '43844108'),
(10, 'Alfreds Futterkiste', '', NULL, 'Berlin', '12209', 'Germany', NULL),
(11, 'Ana Turjillo Emparedados', '', NULL, 'Merida', '05021', 'Mexico', NULL),
(12, 'Antonio Moreno Taqueria', '', NULL, 'Mexico D.F.', '05023', 'Mexico', NULL),
(13, 'Around the Horn', '', NULL, 'London', 'WA1 1DP', 'UK', NULL),
(14, 'Blauer See', '', NULL, 'Mannheim', '68306', 'Germany', NULL),
(15, 'Blondel pere etfils', '', NULL, 'Starsbourg', '67000', 'France', NULL),
(16, 'Bon app\'', '', NULL, 'Marseille', '13008', 'France', NULL),
(17, 'Chop-suey Chinese', '', NULL, 'Bern', '3012', 'Switzerland', NULL),
(18, 'Du monde entier', '', NULL, 'Nantes', '44000', 'France', NULL),
(19, 'Grandma Kelly\'s Homestead', '', NULL, 'Ann Arbor', '', 'USA', NULL),
(20, 'Cardinal', '', NULL, 'Stavanger', '56734', 'Norway', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`odid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD UNIQUE KEY `orderid` (`orderid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `shippers`
--
ALTER TABLE `shippers`
  ADD PRIMARY KEY (`shipperid`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `odid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `shippers`
--
ALTER TABLE `shippers`
  MODIFY `shipperid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
