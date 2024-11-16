-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 16, 2024 at 01:39 AM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u957488481_svPri`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) NOT NULL DEFAULT '',
  `user_pass` varchar(255) NOT NULL DEFAULT '',
  `user_nicename` varchar(50) NOT NULL DEFAULT '',
  `user_email` varchar(100) NOT NULL DEFAULT '',
  `user_url` varchar(100) NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT 0,
  `display_name` varchar(250) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'klutchproducts.com', '$P$B1u.QjXFlx9QHbCatCMUl.5AjwD4Tl.', 'klutchproducts-com', 'fluganflagan123@gmail.com', 'http://klutchproducts.com', '2023-07-24 17:20:23', '', 0, 'klutchproducts.com'),
(2, 'zztest01', '$P$B4rWqpMjdiPQRzIetZtiHvFTpWsomY/', 'zztest01', 'amirjavadi25@gmail.com', '', '2023-10-27 16:06:44', '1698422804:$P$B4KjhhJv1sebzDbVmXq9cni0UyVV5M/', 0, 'zztest01 zztest01'),
(3, 'ajavadi202', '$P$B0j.d0CinQDk4M18KbjaIxiANQRvNu1', 'ajavadi202', 'ashkan.javadi@klutch.media', '', '2023-10-27 16:08:41', '1698422921:$P$BHbtsSYear/850rHje3buMV.SwyCVW1', 0, 'Ashkan Javadi'),
(4, 'stewkan45', '$P$BGiAlIcdxSK9rbc91t8U4GDMS/f6bO/', 'stewkan45', 'stewkan45@yahoo.com', '', '2023-11-26 18:15:10', '1701022510:$P$BegnfX2bJ3Jf4qQGJ4qQyPNh8Z9jct1', 0, 'Stewkan Java'),
(5, 'lavernescamilla', '$P$B6z5XtaD1yh6GX8MupXNdRcgShMdlc1', 'lavernescamilla', 'hz_aquillia_donicus@tb-ndfl1.ru', '', '2023-12-05 08:36:31', '', 0, 'lavernescamilla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
