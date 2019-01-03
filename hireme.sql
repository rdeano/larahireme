-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 04, 2019 at 12:24 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hireme`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'Programmer'),
(2, 'Designers'),
(3, 'Plumbers'),
(4, 'Mechanics'),
(5, 'Electrician'),
(6, 'Computer Technician'),
(7, 'Driver');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `services` text COLLATE utf8mb4_unicode_ci,
  `contactnumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'upload/default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `category_id`, `name`, `email`, `username`, `password`, `remember_token`, `created_at`, `updated_at`, `address`, `services`, `contactnumber`, `profile_picture`) VALUES
(1, 1, 'Robert Pantino', 'robert@robert.com', 'robert', '$2y$10$uK8xhiE.ezzU/Y/M0chz4.cb8L9YpD/sHHIknR6NlEHube6QB4mEK', 'sgPwjeXix1IwSlLVHDhmErpyssKXYFrPHdHRbFKMecxKzXQhOBVnbNi1XDWJ', '2018-12-24 23:04:48', '2018-12-24 23:04:48', 'Km.13 Catalunan Pequeno Davao City', 'html,css,javascript,php,', '09297263406', 'upload/MP0E0MyYiwdU4PjCZ1Fw89daQVEea9xn0nrQxiWv.jpeg'),
(2, NULL, 'mark', 'mark@mark.com', 'mark', '$2y$10$gyn5bMs.UXgEiV9Nu8FuZeqkDwKuAEmW.M24Dw65ImM1eK.GAjWMa', 'TWfKgS4kKuwglxsUoiRWt34q67hDsumN4YjXOV6bpnRfZff9Nx6jweQTnQCA', '2019-01-03 05:54:09', '2019-01-03 05:54:09', NULL, NULL, NULL, 'upload/default.png'),
(3, 1, 'michael', 'michael@michael.com', 'michael', '$2y$10$/xLw0LIVn1Atf2mQUbkfcO95GQVH2lwrecZw0hnh.LmR9BoH1215u', NULL, '2019-01-03 05:58:09', '2019-01-03 05:58:09', NULL, NULL, NULL, 'upload/default.png'),
(4, 4, 'mariamaria', 'maria@maria.com', 'maria123', '$2y$10$0Vgv9EfpM76X9JhXME2P9uaTaaSkUuCNFylbpz0Tu.cpSlz6Ai/CW', '4gP4p60Pzut0LV11q79pi0u4sy3SPSVKSjj48q6qI9WwLw9dQeSdv56lDL2W', '2019-01-03 14:55:38', '2019-01-03 14:55:38', NULL, NULL, NULL, 'upload/default.png'),
(5, 2, 'james', 'james@james.com', 'james123', '$2y$10$50Q.4Ya5vsVjgBI2wXMG9uLumbOn1Ea6bgbi/9.d5Juh.5DsrBRzq', 'itkWts48Rs8mKuWZwNERLknNmbd2KmjlN9q68vNUBnSD1ofRkVpwgpsh2ksq', '2019-01-03 15:02:44', '2019-01-03 15:02:44', NULL, NULL, NULL, 'upload/default.png');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `photo` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `user_id`, `photo`) VALUES
(17, 1, 'upload/8d5de9dbb214ae58ac1d64fbd6eb1cc0.png'),
(18, 1, 'upload/1a7c14e27809854af4c1bc971f9fc529.png'),
(19, 1, 'upload/dc482f535e85229e918bd8250b93e306.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
