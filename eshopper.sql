-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 05:29 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshopper`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id` int(255) NOT NULL,
  `Title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `Title`) VALUES
(2, 'Electronics'),
(3, 'Wares'),
(4, 'FASHION'),
(5, 'Others'),
(6, 'Bags'),
(7, 'foods'),
(8, 'Medications'),
(9, 'sdafsdfsdfs');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `describ` text NOT NULL,
  `price` text NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `describ`, `price`, `images`) VALUES
(12, 'arabictesting', 'dtyutbwebwertre', '40000', '47098301IMG-20210617-WA0022.jpg'),
(13, 'arabictesting', 'dtyutbwebwertre', '40000', '47098301IMG-20210617-WA0022.jpg'),
(14, 'arabictesting', 'dtyutbwebwertre', '40000', '47098301IMG-20210617-WA0022.jpg'),
(15, 'arabictesting', 'dtyutbwebwertre', '40000', '47098301IMG-20210617-WA0022.jpg'),
(16, 'arabictesting', 'dtyutbwebwertre', '40000', '47098301IMG-20210617-WA0022.jpg'),
(17, 'arabictesting', 'dtyutbwebwertre', '40000', '47098301IMG-20210617-WA0022.jpg'),
(18, 'nathan', 'dtyutbwebwertre', '40000', '47098301IMG-20210617-WA0022.jpg'),
(19, 'nathan', 'dtyutbwebwertre', '40000', '47098301IMG-20210617-WA0022.jpg'),
(20, 'nathan', 'dtyutbwebwertre', '40000', 'Array');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'nathan', 'nathani.k4@gmail.com', '2fe04e524ba40505a82e03a2819429cc'),
(2, 'nathan', 'umarbunyaminbun@gmail.com', '2fe04e524ba40505a82e03a2819429cc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
