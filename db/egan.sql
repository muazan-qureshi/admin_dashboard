-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2021 at 05:01 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `photo`) VALUES
(1, 'Muazan Qureshi', 'muazan@yahoo.com', '78', 'IMG_20210206_174703.jpg'),
(2, 'Steve Rolands', 'steve@yahoo.com', '45', 'irene-strong-v2aKnjMbP_k-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `createdate`, `status`) VALUES
(1, 'Mobiles', '2021-02-16 14:54:55', 1),
(2, 'Watches', '2021-02-16 14:55:11', 1),
(3, 'Shoes', '2021-02-16 15:10:05', 1),
(4, 'Vehicles', '2021-02-16 15:22:20', 1),
(5, 'Laptops', '2021-02-16 17:18:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `buyprice` int(11) DEFAULT NULL,
  `saleprice` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `catalog` int(11) DEFAULT NULL,
  `photos` varchar(1000) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `buyprice`, `saleprice`, `stock`, `catalog`, `photos`, `status`, `datetime`, `userid`) VALUES
(1, 'Huawei Mate 30Pro', 'Huawei Mobile', 42000, 45000, 20, 1, '[\"HuaweiP30Pro_main-1024x768.jpg\",\"ImgW.jfif\",\"p30-pro-price.jpg\"]', 1, '2021-02-16 17:28:09', 1),
(2, 'Huawei Mate 30Pro', 'Huawei Mobile', 42000, 45000, 20, 1, '[\"HuaweiP30Pro_main-1024x768.jpg\",\"ImgW.jfif\",\"p30-pro-price.jpg\"]', 1, '2021-02-16 17:29:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `roletype` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `roletype`, `status`) VALUES
(1, 'Administrator', 1),
(2, 'Manager', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `address` varchar(500) NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `phone`, `password`, `dob`, `gender`, `photo`, `address`, `role`, `status`, `createdate`) VALUES
(1, 'Muazan Qureshi', 'muazan', 'muazanqureshi3@gmail.com', '0301-0301642', '11', '2001-05-07', 'Male', 'IMG_20210206_174703.jpg', 'House N0 740 street no 9 azam basti karachi', 1, 1, '2021-02-16 17:46:43'),
(2, 'Micheal Dam', 'micheal', 'michealddam@yahoo.com', '0312-0210482', '12', '1996-02-05', 'Female', 'michael-dam-mEZ3PoFGs_k-unsplash.jpg', 'Lahore', 2, 1, '2021-02-16 17:51:54'),
(3, 'Steve Dawson', 'steve', 'steve@yahoo.com', '0300-2369854', '78', '2001-05-07', 'Male', 'nate-J5U-22o1ubw-unsplash.jpg', 'Amesterdam', 2, 1, '2021-02-17 02:03:22'),
(4, 'Shahzaib Khan Afridi', 'shaxi66221', 'shaxi66221@gmail.com', '0312-2075700', '33', '1995-05-06', 'Male', 'IMG_20201210_170522_1.jpg', 'Nazimabad, Karachi', 2, 1, '2021-02-17 03:07:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
