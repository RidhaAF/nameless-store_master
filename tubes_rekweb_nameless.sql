-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 04:52 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_rekweb_nameless`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `price` int(50) NOT NULL,
  `os` varchar(255) NOT NULL,
  `storage` varchar(255) NOT NULL,
  `cpu` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `brand`, `type`, `slug`, `price`, `os`, `storage`, `cpu`, `ram`, `image`) VALUES
(1, 'Apple', 'iPhone 12 Mini', 'iphone-12-mini', 12999000, 'iOS 14', '64GB', 'Apple A14 Bionic', '4GB', 'iphone-12-mini.png'),
(2, 'Samsung', 'Galaxy Z Fold 2', 'galaxy-z-fold-2', 31990000, 'Android 10', '256GB', 'Qualcomm SM8250 Snapdragon 865+', '12GB', 'fold-2.png'),
(3, 'Xiaomi', 'Mi 10T Pro 5G', 'mi-10t-pro', 8499000, 'Android 10', '128GB', 'Qualcomm SM8250 Snapdragon 865', '8GB', 'mi-10t-pro.png'),
(4, 'Apple', 'iPhone 12 Pro', 'iphone-12-pro', 18499000, 'iOS 14', '128GB', 'Apple A14 Bionic', '6GB', 'iphone-12-pro.png'),
(5, 'Oppo', 'Reno5 Pro 5G', 'reno5-pro', 8400000, 'Android 11', '128GB', 'Mediatek MT6889Z Dimensity 1000+', '8GB', 'reno5-pro.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
