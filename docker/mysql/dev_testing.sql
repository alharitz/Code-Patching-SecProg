-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Oct 17, 2024 at 02:40 AM
-- Server version: 8.0.33
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `insecured_users`
--

CREATE TABLE `insecured_users` (
  `id` int NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `insecured_users`
--

INSERT INTO `insecured_users` (`id`, `name`, `email`, `password`) VALUES
(1, 'User 1', 'user1@climawan.com', 'user1'),
(2, 'User 2', 'user2@climawan.com', 'user2');

-- --------------------------------------------------------

--
-- Table structure for table `secured_users`
--

CREATE TABLE `secured_users` (
  `id` int NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `secured_users`
--

INSERT INTO `secured_users` (`id`, `name`, `email`, `password`) VALUES
(1, 'User 1', 'user1@example.com', '$2y$10$xmIsqXOHij5CQipSqjvHmO3UHar5iha1OlMVe8ANVrNBDl03BczWy'),
(2, 'User 2', 'user2@example.com', '$2y$10$jwv/1xq2yd3btvk0YkSC1.abvPbUF6DTTMw8Rs4F7rT25/sk69GZG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insecured_users`
--
ALTER TABLE `insecured_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secured_users`
--
ALTER TABLE `secured_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insecured_users`
--
ALTER TABLE `insecured_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `secured_users`
--
ALTER TABLE `secured_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
