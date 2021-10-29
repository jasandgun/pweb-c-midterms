-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 29, 2021 at 01:02 PM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17851914_stayunderflow`
--
CREATE DATABASE IF NOT EXISTS `id17851914_stayunderflow` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id17851914_stayunderflow`;

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `answer_id` bigint(20) UNSIGNED NOT NULL,
  `answer_user_id` bigint(20) UNSIGNED NOT NULL,
  `answer_discuss_id` bigint(20) UNSIGNED NOT NULL,
  `answer_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answer_id`, `answer_user_id`, `answer_discuss_id`, `answer_content`, `answer_status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Masih bisa dipakai untuk pembelajaran pemula, akan tetapi jika mulai kompleks sebaiknya beganti ke bahasa pemrograman yang lebih mendukung', '1', '2021-10-29 19:52:52', '2021-10-29 20:00:30'),
(2, 1, 1, 'Jawaban yang bagus', '0', '2021-10-29 20:00:38', '2021-10-29 20:00:38'),
(3, 1, 2, 'Menggunakan hosting services seperti Heroku, atau 000webhost :)', '0', '2021-10-29 20:01:25', '2021-10-29 20:01:25');

-- --------------------------------------------------------

--
-- Table structure for table `discuss`
--

CREATE TABLE `discuss` (
  `discuss_id` bigint(20) UNSIGNED NOT NULL,
  `discuss_user_id` bigint(20) UNSIGNED NOT NULL,
  `discuss_topic_id` bigint(20) UNSIGNED NOT NULL,
  `discuss_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discuss_status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `discuss_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discuss`
--

INSERT INTO `discuss` (`discuss_id`, `discuss_user_id`, `discuss_topic_id`, `discuss_title`, `discuss_status`, `discuss_content`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Relevansi C', '1', 'Apakah C masih relevan?', '2021-10-29 04:26:05', '2021-10-29 20:01:39'),
(2, 2, 7, 'Hosting laravel', '0', 'Bagaimana cara hosting laravel yang baik dan benar?', '2021-10-29 19:51:47', '2021-10-29 19:51:47');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2020_07_19_114701_create_users', 1),
(3, '2020_07_19_115216_create_topics', 1),
(4, '2020_07_19_124620_create_discuss', 1),
(5, '2020_07_19_125226_create_answers', 1);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topic_id` bigint(20) UNSIGNED NOT NULL,
  `topic_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_name`, `topic_description`, `topic_slug`) VALUES
(1, 'C', 'Membahas C', 'C'),
(2, 'C++', 'Membahas C++', 'C++'),
(3, 'Python', 'Membahas Python', 'Python'),
(4, 'HTML', 'Membahas HTML', 'HTML'),
(5, 'Pemrograman PHP', 'Membahas PHP', 'Pemrograman-PHP'),
(6, 'Pemrograman Javascript', 'Membahas Javascript', 'Pemrograman-Javascript'),
(7, 'Pemrograman Laravel', 'Membahas Laravel', 'Pemrograman-Laravel'),
(8, 'Pemrograman Codeigniter', 'Membahas Codeigniter', 'Pemrograman-Codeigniter'),
(9, 'Pemrograman AJAX', 'Membahas AJAX', 'Pemrograman-AJAX');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_description`, `user_image`, `created_at`, `updated_at`) VALUES
(1, 'jason', 'mail@mail.com', '$2y$10$7h03gXytXPeMsFFNb4VNIOuNNCFcThKIJvd6VSdCuje3ngKUHKwUi', 'Give some description', 'data_users/user_logo/7905d373cfab2e0fda04b9e7acc8c879.png', '2021-10-29 04:18:56', '2021-10-29 04:18:56'),
(2, 'aldo', 'aldo@aldo.com', '$2y$10$D7O7mYaGBgfqBoBOSdUPEed0PAS2DrNO1f7.IeG3jADGE1hDvV/fW', 'Give some description', 'data_users/user_logo/cb235e0276811ecd82995c90a436be39.jpg', '2021-10-29 15:39:42', '2021-10-29 15:39:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `answers_answer_user_id_foreign` (`answer_user_id`),
  ADD KEY `answers_answer_discuss_id_foreign` (`answer_discuss_id`);

--
-- Indexes for table `discuss`
--
ALTER TABLE `discuss`
  ADD PRIMARY KEY (`discuss_id`),
  ADD KEY `discuss_discuss_user_id_foreign` (`discuss_user_id`),
  ADD KEY `discuss_discuss_topic_id_foreign` (`discuss_topic_id`);

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
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`),
  ADD UNIQUE KEY `topics_topic_name_unique` (`topic_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `answer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `discuss`
--
ALTER TABLE `discuss`
  MODIFY `discuss_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_answer_discuss_id_foreign` FOREIGN KEY (`answer_discuss_id`) REFERENCES `discuss` (`discuss_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answers_answer_user_id_foreign` FOREIGN KEY (`answer_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `discuss`
--
ALTER TABLE `discuss`
  ADD CONSTRAINT `discuss_discuss_topic_id_foreign` FOREIGN KEY (`discuss_topic_id`) REFERENCES `topics` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `discuss_discuss_user_id_foreign` FOREIGN KEY (`discuss_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
