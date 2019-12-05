-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 05, 2019 at 08:27 AM
-- Server version: 8.0.17
-- PHP Version: 7.2.23RC1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userlog`
--

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` int(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `doc_id` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `savetime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`id`, `uname`, `doc_id`, `item`, `savetime`) VALUES
(1, 'a', 'b', '', 'c'),
(2, 'a', 'b', '', 'c'),
(3, 'a', 'b', '', 'c'),
(4, 'marsh', '104', 'German Pinscher', '2019-11-21 13:52:04'),
(6, 'a', 'b', 'b', 'b'),
(11, 'marsh', '6', ' Alaskan Malamute', '2019-11-21 13:53:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `uname` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `reset_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `uname`, `password`, `reset_token`) VALUES
(7, 'Himarsha Jayanetti', 'hjaya12@odu.edu', 8635419726, 'mayababs', '$2y$10$AxXYCY7QR1e14cJPVzH2Ce9yXHLjOYcXpl.PjOETBYKVQNBW8bptW', ''),
(8, 'Maya', 'jayanetti.hr@gmail.com', 1235678123, 'mayababs', '$2y$10$UmTSyPw3PWSzRqpquZS8FeB1TyFPLidP7bgmmgWIwwr4N5ZkoXOUO', '07ec8cec0a67d33a59e0249548a2597e'),
(24, 'Himarsha Jayanetti', 'hjaya002@odu.edu', 7578220108, 'marsh', '$2y$10$RtH/HspN0KY2ZhdT.NVJgOaKsK3jxkdnLAAeN.Sxl/LaHG/bJADCK', 'hjaya002@odu.edu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
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
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
