-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3310
-- Generation Time: Feb 08, 2022 at 07:49 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_reservation_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_20_052843_create_permission_tables', 1),
(5, '2022_02_06_153837_create_reservations_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 2),
(3, 'App\\User', 3),
(3, 'App\\User', 7),
(3, 'App\\User', 8),
(3, 'App\\User', 9);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `check_in_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check_out_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_adult` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_children` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_room` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_type_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_type_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `first_name`, `last_name`, `address`, `zip_code`, `city`, `state`, `email`, `phone`, `check_in_date`, `check_out_date`, `check_in_time`, `check_out_time`, `no_of_adult`, `no_of_children`, `no_of_room`, `room_type_1`, `room_type_2`, `instruction`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Sean', 'Xiao', 'Yangon', '95', 'Hlaing', 'Yangon', 'seanxiao@gmail.com', '09406405232', '2022-02-09', '2022-02-12', 'Morning', 'Afternoon', '1', '1', '2', 'Deluxe', 'Standard', NULL, 3, NULL, '2022-02-07 06:30:39', '2022-02-07 10:03:44'),
(2, 'Eve', 'Nebulas', 'Magway', '063', 'Salin', 'Magway', 'nebula@gmail.com', '09876543211', '2022-02-10', '2022-02-15', 'Afternoon', 'Evening', '1', '0', '1', 'Suite', NULL, NULL, 3, NULL, '2022-02-07 06:37:00', '2022-02-07 06:37:00'),
(3, 'Paing', 'Paing', 'Yangon', '01', 'Hlaing', 'Yangon', 'paingpaing@gmail.com', '09406405232', '2022-02-11', '2022-02-12', 'Morning', 'Afternoon', '2', '0', '2', 'Suite', 'Standard', NULL, 9, NULL, '2022-02-07 06:44:06', '2022-02-07 06:44:06'),
(4, 'Phyu', 'Phyu', 'Magway', '063', 'Salin', 'Magway', 'phyuphyu@gmai.com', '09406405232', '2022-02-10', '2022-02-11', 'Afternoon', 'Morning', '3', '0', '2', 'Deluxe', 'Standard', NULL, 9, NULL, '2022-02-07 07:14:29', '2022-02-07 07:14:29'),
(6, 'Phyu', 'Phyu', 'Magway', '063', 'Salin', 'Magway', 'phyuphyu@gmai.com', '09406405232', '2022-02-10', '2022-02-11', 'Afternoon', 'Morning', '3', '0', '2', 'Deluxe', 'Standard', NULL, 9, NULL, '2022-02-07 07:15:48', '2022-02-07 07:15:48'),
(7, 'Paing', 'Paing', 'Yangon', '01', 'Hlaing', 'Yangon', 'hnin@gmail.com', '09406405232', '2022-02-10', '2022-02-10', 'Morning', 'Evening', '1', '0', '1', 'Suite', NULL, NULL, 9, NULL, '2022-02-07 07:23:35', '2022-02-07 07:23:35'),
(8, 'Paing', 'Paing', 'Yangon', '01', 'Hlaing', 'Yangon', 'hnin@gmail.com', '09406405232', '2022-02-10', '2022-02-10', 'Morning', 'Evening', '1', '0', '1', 'Suite', NULL, NULL, 9, NULL, '2022-02-07 07:26:46', '2022-02-07 07:26:46'),
(9, 'Paing', 'Paing', 'Yangon', '01', 'Hlaing', 'Yangon', 'hnin@gmail.com', '09406405232', '2022-02-10', '2022-02-10', 'Morning', 'Evening', '1', '0', '1', 'Suite', NULL, NULL, 9, NULL, '2022-02-07 07:27:05', '2022-02-07 07:27:05'),
(10, 'Eve', 'Nebulas', 'Magway', '063', 'Salin', 'Magway', 'nebula@gmail.com', '09406405232', '2022-02-09', '2022-02-12', 'Morning', 'Afternoon', '2', '0', '2', 'Standard', 'Standard', NULL, 9, NULL, '2022-02-07 07:30:32', '2022-02-07 07:30:32'),
(11, 'Eve', 'Nebulas', 'Magway', '063', 'Salin', 'Magway', 'nebula@gmail.com', '09406405232', '2022-02-09', '2022-02-12', 'Morning', 'Afternoon', '2', '0', '2', 'Standard', 'Standard', NULL, 9, NULL, '2022-02-07 07:31:28', '2022-02-07 07:31:28'),
(12, 'Eve', 'Nebulas', 'Magway', '063', 'Salin', 'Magway', 'nebula@gmail.com', '09406405232', '2022-02-09', '2022-02-12', 'Morning', 'Afternoon', '2', '0', '2', 'Standard', 'Standard', NULL, 9, NULL, '2022-02-07 07:32:09', '2022-02-07 07:32:09'),
(13, 'Eve', 'Nebulas', 'Magway', '063', 'Salin', 'Magway', 'nebula@gmail.com', '09406405232', '2022-02-09', '2022-02-12', 'Morning', 'Afternoon', '2', '0', '2', 'Standard', 'Standard', NULL, 9, NULL, '2022-02-07 07:32:46', '2022-02-07 07:32:46'),
(14, 'Aung', 'Nebulas', 'Yangon', '063', 'Hlaing', 'Yangon', 'hnin@gmail.com', '09406405232', '2022-02-17', '2022-02-25', 'Morning', 'Afternoon', '3', '1', '2', 'Deluxe', 'Standard', 'Thank you so much', 2, NULL, '2022-02-07 08:14:55', '2022-02-07 08:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', 'web', '2022-02-06 08:58:05', '2022-02-06 08:58:05'),
(2, 'manager', 'web', '2022-02-06 08:58:05', '2022-02-06 08:58:05'),
(3, 'reservation', 'web', '2022-02-06 08:58:05', '2022-02-06 08:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@gmail.com', NULL, '$2y$10$Wi1F9lxiAx6EIqigXu96.OLGQEuWw/C0L5ZCCqjYl.ehIH3fkAmlm', '0', NULL, NULL, '2022-02-06 08:58:06', '2022-02-06 08:58:06'),
(2, 'Manager', 'manager@gmail.com', NULL, '$2y$10$UTk2cVCzcAyV5I9Nz16.MePYhU/NtKixQvRuZItl8AL6doFYLJjvO', '0', NULL, NULL, '2022-02-06 08:58:07', '2022-02-06 08:58:07'),
(3, 'HninEi', 'hninei@gmail.com', NULL, '$2y$10$/4271swEX.Y3nu.Moq8R..mFCUAt.mJAkjRXaUgfX7AeXmxWU8L6e', '0', NULL, NULL, '2022-02-06 08:58:07', '2022-02-06 08:58:07'),
(7, 'Sean', 'sean@gmail.com', NULL, '$2y$10$/4271swEX.Y3nu.Moq8R..mFCUAt.mJAkjRXaUgfX7AeXmxWU8L6e', '0', NULL, NULL, '2022-02-06 10:48:54', '2022-02-06 10:48:54'),
(8, 'Chim', 'chim@gmail.com', NULL, '$2y$10$.O0UmD9H24IJFV7ic23Fuu32QOmSUlQqmlpeDiEgCjjkw8AGcBCAW', '0', NULL, NULL, '2022-02-06 10:51:51', '2022-02-06 10:51:51'),
(9, 'Paing Paing', 'paingpaing@gmail.com', NULL, '$2y$10$WWclSxOm5/e5qbH13YXsnerlbPcYFWkWexJmDnZdxLQs543sCdzzm', '0', NULL, NULL, '2022-02-07 06:41:44', '2022-02-07 06:41:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
