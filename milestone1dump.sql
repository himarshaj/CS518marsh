-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 08, 2019 at 12:37 AM
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
(1, 'Himarsha Jayanetti', 'hjaya002@odu.edu', 7578220108, 'mayababs', '$2y$10$ViQK87d5oHic0ufc0.4cOee6VFaplf.Eu6HQjsik43MlUJBu8Lewq', '5ca70f27340ba18aa2abbf978ec5da92'),
(2, 'Sarah', 'sarah@test.com', 1234567890, 'mayababs', 'sarah@123', ''),
(3, 'Wimarsha', 'wimarsha@test.com', 2343563423, 'mayababs', 'wimarsha@123', ''),
(4, 'Peter', 'peter@test.com', 2892493614, 'mayababs', 'peter@123', ''),
(5, 'Skanda', 'skanda@usf.com', 3741283472, 'mayababs', 'skanda@123', ''),
(6, 'Kritika', 'kritika@odu.edu', 5182755678, 'mayababs', 'kritika@123', ''),
(7, 'Himarsha Jayanetti', 'hjaya12@odu.edu', 8635419726, 'mayababs', '$2y$10$AxXYCY7QR1e14cJPVzH2Ce9yXHLjOYcXpl.PjOETBYKVQNBW8bptW', ''),
(8, 'Maya', 'jayanetti.hr@gmail.com', 1235678123, 'mayababs', '$2y$10$sgvfs6n9fp7.vRH3x83Lc.FR984YP04aw57bjY8o2rV8nq0vS3M8q', 'jayanetti.hr@gmail.com'),
(9, 'Himarsha Jayanetti', 'hjasd02@odu.edu', 7578220102, 'mayababs', '$2y$10$kjfB9rR0JA5igeDlHPxDteeqsQ8MmhfgRzlwMKwh3ndn9ybLDGHSC', 'hjasd02@odu.edu'),
(10, 'afDFsabafb', 'hj002@odu.edu', 7238220108, 'qwerty', '$2y$10$m6y17BYuaT6KAXoZGLeZyOPYqRaj3In9uKSWCN4BD/8MP02v/HrBa', 'hj002@odu.edu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
