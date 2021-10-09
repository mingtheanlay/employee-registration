-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 09, 2021 at 09:35 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `title`, `work_department`, `gender`, `date_of_birth`, `salary`, `telephone`, `email`, `created_at`, `updated_at`) VALUES
(2, 'Mingthean', 'Lay', 'Developer', 'IT', 'male', '1999-02-26', '450', '0964361840', 'mingthean.lay@gmail.com', '2021-10-09 01:50:42', '2021-10-09 01:50:42'),
(3, 'Mingthean', 'Lay', 'Developer', 'IT', 'male', '1999-02-26', '450', '0964361840', 'mingthean.lay@gmail.com1', '2021-10-09 01:50:42', '2021-10-09 01:50:42'),
(4, 'Mingthean', 'Lay', 'Developer', 'IT', 'male', '1999-02-26', '450', '0964361840', 'mingthean.lay@gmail.com3', '2021-10-09 01:50:42', '2021-10-09 01:50:42'),
(5, 'Mingthean', 'Lay', 'Developer', 'IT', 'male', '1999-02-26', '450', '0964361840', 'mingthean.lay@gmail.com14', '2021-10-09 01:50:42', '2021-10-09 01:50:42'),
(6, 'Mingthean', 'Lay', 'Developer', 'IT', 'male', '1999-02-26', '450', '0964361840', 'mingthean.lay@gmail.com123', '2021-10-09 01:50:42', '2021-10-09 01:50:42'),
(7, 'Mingthean', 'Lay', 'Developer', 'IT', 'male', '1999-02-26', '450', '0964361840', 'mingthean.lay@gmail.com1123', '2021-10-09 01:50:42', '2021-10-09 01:50:42'),
(8, 'Mingthean', 'Lay', 'Developer', 'IT', 'male', '1999-02-26', '450', '0964361840', 'mingthean.lay@gmail.com3123', '2021-10-09 01:50:42', '2021-10-09 01:50:42'),
(9, 'Mingthean', 'Lay', 'Developer', 'IT', 'male', '1999-02-26', '450', '0964361840', 'mingthean.lay@gmail.com14132', '2021-10-09 01:50:42', '2021-10-09 01:50:42'),
(10, 'Sok', 'San', 'Accountant', 'Accountant', 'female', '2021-09-27', '500', '0964361840', 'som@sok.com', '2021-10-09 02:33:03', '2021-10-09 02:33:03'),
(11, 'Mingthean', 'Lay', 'Developer', 'IT', 'male', '1999-02-26', '450', '0964361840', 'mingthean.lay@gmail.com312312', '2021-10-09 01:50:42', '2021-10-09 01:50:42'),
(22, 'Mingthean', 'Lay', 'Developer', 'IT', 'male', '1999-02-26', '450', '0964361840', 'mingthean.lay@gmail.com7', '2021-10-09 01:50:42', '2021-10-09 01:50:42'),
(23, 'Mingthean', 'Lay', 'Developer', 'IT', 'male', '1999-02-26', '450', '0964361840', 'mingthean.lay@gmail.com19', '2021-10-09 01:50:42', '2021-10-09 01:50:42'),
(24, 'Mingthean', 'Lay', 'Developer', 'IT', 'male', '1999-02-26', '450', '0964361840', 'mingthean.lay@gmail.com34', '2021-10-09 01:50:42', '2021-10-09 01:50:42'),
(25, 'Mingthean', 'Lay', 'Developer', 'IT', 'male', '1999-02-26', '450', '0964361840', 'mingthean.lay@gmail.com145', '2021-10-09 01:50:42', '2021-10-09 01:50:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2021_10_04_085552_create_employees_table', 1),
(11, '2021_10_08_100939_create_employees_table', 2),
(18, '2014_10_12_000000_create_users_table', 3),
(19, '2014_10_12_100000_create_password_resets_table', 3),
(20, '2019_08_19_000000_create_failed_jobs_table', 3),
(21, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(22, '2021_10_08_105023_create_employees_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `telephone`, `email`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mingthean', 'Lay', 'thean', '$2y$10$vs0OnUj/LcIS/nNFA42sd.XDPbTNyOuXgex75JpKAIDn9UzQGtLfu', '0964361840', 'mingthean.lay@gmail.com', NULL, 'jDqY7qRkglvOGf9TROBZGCvm0E4U6UqnI6yasiIHrSy0nWxLGIdYouVO9xZB', '2021-10-08 06:07:16', '2021-10-08 06:07:16'),
(2, 'Som', 'San', 'som', '$2y$10$UHLjx.uwswUv33sGqBcCe.q2z8UmQf.PXfcBHQopl/3L94GOISYqq', '0964361840', 'som@sok.com', NULL, NULL, '2021-10-09 02:31:11', '2021-10-09 02:31:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_id_unique` (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_id_unique` (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
