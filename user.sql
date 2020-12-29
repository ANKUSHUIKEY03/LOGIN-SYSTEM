-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 10:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `f1`
--

CREATE TABLE `f1` (
  `id` int(11) NOT NULL,
  `firstname` varchar(11) NOT NULL,
  `lastname` varchar(11) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f1`
--

INSERT INTO `f1` (`id`, `firstname`, `lastname`, `email`) VALUES
(4, '', '', ''),
(5, '', '', ''),
(6, '', '', ''),
(7, '', '', ''),
(8, '', '', ''),
(9, '', '', ''),
(10, '', '', ''),
(11, '', '', ''),
(12, '', '', ''),
(13, '', '', ''),
(14, '', '', ''),
(15, '', '', ''),
(16, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ff`
--

CREATE TABLE `ff` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ff`
--

INSERT INTO `ff` (`id`, `firstname`, `lastname`, `email`) VALUES
(1, 'a', 'b', '123'),
(2, 'Peter', 'Parker', 'peterparker@mail.com'),
(3, 'Peter', 'Parker', 'peterparker@mail.com'),
(4, '', '', ''),
(5, '', '', ''),
(6, '', '', ''),
(7, '', '', ''),
(8, '', '', ''),
(9, '', '', ''),
(10, 'Peter', 'Parker', 'peterparker@mail.com'),
(11, '', '', ''),
(12, '', '', ''),
(13, '', '', ''),
(14, '', '', ''),
(15, '1', '2', '3'),
(16, '', '', ''),
(17, '', '', ''),
(18, '', '', ''),
(19, '', '', ''),
(20, '', '', ''),
(21, '', '', ''),
(22, '', '', ''),
(23, '', '', ''),
(24, '', '', ''),
(25, '', '', ''),
(26, '', '', ''),
(27, '', '', ''),
(28, '', '', ''),
(29, '', '', ''),
(30, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `otp_expiry`
--

CREATE TABLE `otp_expiry` (
  `id` int(11) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `is_expired` int(11) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `email`) VALUES
(1, 'ankushuikey1323@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'ankush', '$2y$10$wCpWmYbIG.Farb2ePK77xuDCwvCM//UuefRQV0SkGyX59dZ1q/q7C', '2020-04-10 17:43:28'),
(2, 'A1', '$2y$10$hRBlfKenPJJG/miOAp0qB.DCmK6ce/TLyWdEuTTccEzNhFpTr3JbK', '2020-04-10 17:47:54'),
(3, 'a', '$2y$10$reRMntLIJ6mKt8O/6ChwYO.zp0NY/e6UcRkKliKHLMYQtul/UzVB6', '2020-04-10 17:54:43'),
(4, 'ee', '$2y$10$el0MIcleQlARWBADGBcUA.MF6rZmyENK1u1AIgEJkiB9omD.SoGwO', '2020-04-10 17:57:34'),
(5, 'a2', '$2y$10$q5DK5czsJplyX2.I8CHkhOWH/XRMiZ6uD.LGIbH2EPCHyWfU6YxhS', '2020-04-10 18:03:23'),
(6, '1', '$2y$10$y6rM14gVcZgoSw1pi5Q6u.h5DuardBq3XnrkHJZv9V2ly9XRkkuei', '2020-04-11 02:31:16'),
(7, 'aaa', '$2y$10$APohJhz3V2GU0ZjBFipclODXWV.AY11JheYfB9KnILUozeioHFm.y', '2020-04-12 00:37:30'),
(8, '147', '$2y$10$nPAlggU0/1.wbgBnJuewxO/0Ht4ptxfhChT5jCRz0zlEmQBmb9W1S', '2020-04-18 16:56:19'),
(9, 'test', '$2y$10$waqtSuxNSsQib4pemGFUEOEnMmPTUFHXorEA/hQsQ9Q0xxb7w.DRK', '2020-04-18 17:02:00'),
(10, 'zzz', '$2y$10$dd8DP51RJ0895vDAdJ.aKu66JfoYzmRlKXJLs0dyV2ya8a6u1yDFG', '2020-04-18 17:02:29'),
(11, 'vvv', '$2y$10$J4/3fe1.xBHqve/F6q8iR.fTafFw3ywkTHzIJaDx1RvIdQ/nqKMqe', '2020-04-18 17:03:56'),
(12, 'B', '$2y$10$UEvmSR4CIdRtWoF7Y0/yOeUpRbkt6B4Jue3eMwWBgilv/e79XQDr6', '2020-04-21 14:02:42'),
(13, 'MM', '$2y$10$abvOe5O4siBAcpjovTEBqu8p6c2Q.X8uwLVNVzwNHe1ycSwZ.VP9K', '2020-04-21 14:04:05'),
(14, 'mmm', '$2y$10$/UKPlKQbon37zc/qAHMaq.93sn7H0ZSHso/lRsMCnRky4NnWG0Yai', '2020-04-21 14:06:18'),
(15, ',,,', '$2y$10$sonBQbyAxQLy/vuuIAT0xe9cFOxh6NygS8vebeVLHcupqIYiNcsYG', '2020-04-21 14:08:01'),
(16, 'ppp', '$2y$10$VjJkzLuk3bFudbuhMe/uVu0Uz6FrdRg0LD7OU3GRSTw30X94O8Sv.', '2020-04-21 14:09:34'),
(17, 'hh', '$2y$10$3Z1d6rZaus4yZUhQECmvUut.5FxGSip30nyKT0Gyuo1BF34IRTVVG', '2020-05-14 14:46:04'),
(18, 'ank', '$2y$10$c9FxPw6Yhn/7WKqNg7TF.ON6AcjAhnVTFKOpCvJLzwusBv85pXkjO', '2020-05-31 01:31:07'),
(19, 'ANKUSH UIKEY', '$2y$10$NtOjz.ELZ3GV5a0IdAn1q.xNzz8KEwp33DLz5wMp.asYkjGI0DKCW', '2020-05-31 01:41:11'),
(20, 'CHIKU', '$2y$10$2ofW0EjVRTIsgk/O3jZgu.JoYlFNw8JYnO4DP9tD3CbJN19FcOPSu', '2020-06-19 16:23:14'),
(21, 'm', '$2y$10$KKbl1Kcov5VzpbNDv0G43OuTsbQcLmJyNX65rJ5sHQXixG7D0D4Fe', '2020-08-10 14:24:28'),
(22, 's', '$2y$10$9LSIa6g.7lbPvLZ/iV.MxeS5NkzoYo3axmKPFX24keMO1RtBdAOQu', '2020-09-24 20:02:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `f1`
--
ALTER TABLE `f1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`id`);

--
-- Indexes for table `ff`
--
ALTER TABLE `ff`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `ff` ADD FULLTEXT KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `f1`
--
ALTER TABLE `f1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ff`
--
ALTER TABLE `ff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
