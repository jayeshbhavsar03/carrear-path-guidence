-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 04:32 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qpg`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `que_paper`
--

CREATE TABLE `que_paper` (
  `id` int(11) NOT NULL,
  `sub` varchar(1000) NOT NULL,
  `que_one_a` varchar(1000) NOT NULL,
  `que_one_b` varchar(1000) NOT NULL,
  `que_one_or` varchar(1000) NOT NULL,
  `que_two_a` varchar(1000) NOT NULL,
  `que_two_b` varchar(1000) NOT NULL,
  `que_two_or` varchar(1000) NOT NULL,
  `que_three_a` varchar(1000) NOT NULL,
  `que_three_b` varchar(1000) NOT NULL,
  `que_three_or` varchar(1000) NOT NULL,
  `que_four_a` varchar(1000) NOT NULL,
  `que_four_b` varchar(1000) NOT NULL,
  `que_four_or` varchar(1000) NOT NULL,
  `que_five_a` varchar(1000) NOT NULL,
  `que_five_b` varchar(1000) NOT NULL,
  `que_five_or` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `que_paper`
--

INSERT INTO `que_paper` (`id`, `sub`, `que_one_a`, `que_one_b`, `que_one_or`, `que_two_a`, `que_two_b`, `que_two_or`, `que_three_a`, `que_three_b`, `que_three_or`, `que_four_a`, `que_four_b`, `que_four_or`, `que_five_a`, `que_five_b`, `que_five_or`) VALUES
(1, '1', 'xyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxy', 'xyxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyz', 'xyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxy', 'xyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyz', 'xyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxy', 'xyz', 'xyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxy', 'xyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxy', 'xyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxy', 'xyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxyzxy', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz'),
(3, '2', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `number`, `address`, `gender`, `password`, `user_type`) VALUES
(1, 'user', 'teacher@gmail.com', '', '', '', '202cb962ac59075b964b07152d234b70', 'user'),
(2, 'admin', 'admin@gmail.com', '', '', '', '202cb962ac59075b964b07152d234b70', 'admin'),
(3, 'jayesh bhavsar', 'bhavsarjayesh9370@gmail.com', '9370821861', 'xyz', 'male', '202cb962ac59075b964b07152d234b70', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `que_paper`
--
ALTER TABLE `que_paper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `que_paper`
--
ALTER TABLE `que_paper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
