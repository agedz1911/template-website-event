-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2024 at 02:54 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_event_wecoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `at_glances`
--

CREATE TABLE `at_glances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_at_glances` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `committees`
--

CREATE TABLE `committees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `no_urut` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `committees`
--

INSERT INTO `committees` (`id`, `name`, `title`, `category`, `image`, `no_urut`, `created_at`, `updated_at`) VALUES
(1, 'dr. Taofan,  Sp.JP(K)', 'Advisor', 'Advisor', NULL, 1, '2024-06-19 08:58:01', '2024-06-20 09:14:56'),
(2, 'dr. Bambang Widyantoro, Ph.D, Sp.JP(K)', 'Advisor', 'Advisor', NULL, 1, '2024-06-19 08:58:43', '2024-06-20 09:40:32'),
(3, 'dr. Ade Meidian Ambari, PhD, Sp.JP(K)', 'Advisor', 'Advisor', NULL, 1, '2024-06-19 09:00:21', '2024-06-20 09:13:45'),
(4, 'Dr. dr. Dafsah Arifa Juzar, Sp.JP(K)', 'Advisor', 'Advisor', NULL, 1, '2024-06-19 09:00:40', '2024-06-20 09:13:24'),
(5, 'dr. Yovi Kurniawati, Sp.JP(K)', 'Coordinator', 'Scientific Committee', NULL, 5, '2024-06-19 09:01:24', '2024-06-20 09:35:25'),
(6, 'dr. Mira Fauziah, Sp.JP', 'Secretary', 'Scientific Committee', NULL, 5, '2024-06-19 09:01:50', '2024-06-20 09:36:03'),
(7, 'Prof. Dr. dr. Yoga Yuniadi, Sp.JP(K)', 'Member', 'Scientific Committee', NULL, 5, '2024-06-19 09:02:24', '2024-06-20 09:49:08'),
(8, 'dr. Sony Hilal Wicaksono, Sp.JP(K)', 'Chairman', 'Chairman', NULL, 2, '2024-06-20 08:52:48', '2024-06-20 09:16:42'),
(9, 'dr. Damba Dwisepto Aulia Sakti, Sp.JP', 'Secretary', 'Secretary', NULL, 3, '2024-06-20 08:53:40', '2024-06-20 09:24:19'),
(10, 'dr. Elen, Sp.JP(K)', 'Treasurer', 'Treasurer', NULL, 4, '2024-06-20 08:56:40', '2024-06-20 09:25:37'),
(11, 'dr. Vienna Rossimarina, Sp.JP(K)', 'Treasurer', 'Treasurer', NULL, 4, '2024-06-20 08:57:42', '2024-06-20 09:26:08'),
(12, 'dr. Amir Aziz Alkatiri, Sp.JP(K)', 'Member', 'Scientific Committee', NULL, 5, '2024-06-20 09:51:13', '2024-06-20 09:51:45'),
(13, 'dr. BRM. Ario Soeryo Kuncoro, Sp.JP(K)', 'Member', 'Scientific Committee', NULL, 5, '2024-06-20 09:52:47', '2024-06-20 09:52:47'),
(14, 'dr. Celly Anantaria A, Sp.JP(K), M.Pend.Ked.', 'Member', 'Scientific Committee', NULL, 6, '2024-06-20 09:53:57', '2024-06-20 09:54:53');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `name`, `country`, `image`, `email`, `instagram`, `linkedin`, `twitter`, `is_active`, `created_at`, `updated_at`) VALUES
(13, 'Speaker 1', 'Australia', NULL, NULL, NULL, NULL, NULL, 1, '2024-06-18 02:05:32', '2024-06-18 02:05:32'),
(14, 'Speaker 2', 'Indonesia', NULL, NULL, NULL, NULL, NULL, 1, '2024-06-18 02:10:12', '2024-06-18 02:16:22');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_type_participant`
--

CREATE TABLE `faculty_type_participant` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faculty_id` bigint(20) UNSIGNED NOT NULL,
  `type_participant_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculty_type_participant`
--

INSERT INTO `faculty_type_participant` (`id`, `faculty_id`, `type_participant_id`) VALUES
(1, 13, 5),
(2, 13, 6),
(3, 14, 5),
(4, 14, 6);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) DEFAULT NULL,
  `collection_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `mime_type` varchar(255) DEFAULT NULL,
  `disk` varchar(255) NOT NULL,
  `conversions_disk` varchar(255) DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(5, 'App\\Models\\faculty', 13, '9c8359df-e845-4350-8aba-10acf6051f50', 'images', 'avatar', 'Ftso2d72a3oedIfKhNAVhCggvIBGM8-metaYXZhdGFyLmpwZw==-.jpg', 'image/jpeg', 'public', 'public', 16299, '[]', '[]', '[]', '[]', 1, '2024-06-18 02:05:32', '2024-06-18 02:05:32'),
(7, 'App\\Models\\Committee', 1, '83d6d3c4-1f51-4bec-b81c-7c6a4fc9f780', 'committee', 'Advisor dan Scientific dr. Taofan, Sp.JP(K)', 'SpAPrzTuweB70c14Kz1UUYqZuMsmxa-metaQWR2aXNvciBkYW4gU2NpZW50aWZpYyBkci4gVGFvZmFuLCBTcC5KUChLKS5qcGVn-.jpg', 'image/jpeg', 'public', 'public', 26308, '[]', '[]', '[]', '[]', 1, '2024-06-19 09:14:48', '2024-06-19 09:14:48'),
(8, 'App\\Models\\Committee', 3, '39299c30-588d-4beb-ac7b-64d77dfaa411', 'committee', 'Advisor dan Scientific dr. Ade Meidian Ambari, PhD, Sp.JP(K)', 'YUqE4wz8YuZVTTuxSh5s1jl2C3Wyo6-metaQWR2aXNvciBkYW4gU2NpZW50aWZpYyBkci4gQWRlIE1laWRpYW4gQW1iYXJpLCBQaEQsIFNwLkpQKEspLmpwZWc=-.jpg', 'image/jpeg', 'public', 'public', 257386, '[]', '[]', '[]', '[]', 1, '2024-06-20 09:10:08', '2024-06-20 09:10:08'),
(9, 'App\\Models\\Committee', 4, '6eab2e12-9f99-498a-ae0d-3efd293b57c3', 'committee', 'Advisor dan Scientific Dr. dr. Dafsah Arifa Juzar, Sp.JP(K)', '8ukcJreRH4CD0lnw3bjxUSGJKTH9xm-metaQWR2aXNvciBkYW4gU2NpZW50aWZpYyBEci4gZHIuIERhZnNhaCBBcmlmYSBKdXphciwgU3AuSlAoSykuanBlZw==-.jpg', 'image/jpeg', 'public', 'public', 18621, '[]', '[]', '[]', '[]', 1, '2024-06-20 09:13:24', '2024-06-20 09:13:24'),
(10, 'App\\Models\\Committee', 8, '2fb185f5-db82-4a61-922b-3a90120ef7e1', 'committee', 'Chairman dr. Sony Hilal Wicaksono, Sp.JP(K)', '1k7yJRWd2d3MeeNC5CxnNyhDJXmalD-metaQ2hhaXJtYW4gZHIuIFNvbnkgSGlsYWwgV2ljYWtzb25vLCBTcC5KUChLKS5wbmc=-.png', 'image/png', 'public', 'public', 972844, '[]', '[]', '[]', '[]', 1, '2024-06-20 09:16:42', '2024-06-20 09:16:42'),
(11, 'App\\Models\\Committee', 9, '4374ef80-7ca9-467f-a23b-010837ed7ee5', 'committee', 'Secretary dr. Damba Dwisepto Aulia Sakti, Sp.JP', 'qr5yqrPCAomq7iYrL0wE6Gm4i4t11o-metaU2VjcmV0YXJ5IGRyLiBEYW1iYSBEd2lzZXB0byBBdWxpYSBTYWt0aSwgU3AuSlAud2VicA==-.webp', 'image/webp', 'public', 'public', 14894, '[]', '[]', '[]', '[]', 1, '2024-06-20 09:24:19', '2024-06-20 09:24:19'),
(12, 'App\\Models\\Committee', 10, 'e545f64d-b4a8-4d34-b8f2-2035cf296d88', 'committee', 'Treasurer dr. Elen, Sp.JP(K)', 'spFYt4Qot1jXmMzoUQ0J40wuVXaPuA-metaVHJlYXN1cmVyIGRyLiBFbGVuLCBTcC5KUChLKS5qcGVn-.jpg', 'image/jpeg', 'public', 'public', 36396, '[]', '[]', '[]', '[]', 1, '2024-06-20 09:25:37', '2024-06-20 09:25:37'),
(13, 'App\\Models\\Committee', 11, '0ea6d08e-9250-49c3-8935-2e2bfd1ed854', 'committee', 'Treasurer dr. Vienna Rossimarina, Sp.JP(K)', 'hIg1MrQmlf0nTeFX4jVFgGDcRINp0J-metaVHJlYXN1cmVyIGRyLiBWaWVubmEgUm9zc2ltYXJpbmEsIFNwLkpQKEspLndlYnA=-.webp', 'image/webp', 'public', 'public', 154918, '[]', '[]', '[]', '[]', 1, '2024-06-20 09:26:08', '2024-06-20 09:26:08'),
(14, 'App\\Models\\Committee', 5, 'af89293e-debe-494c-bc8a-53bc7b46fd1b', 'committee', 'Scientific Committee Coordinator dr. Yovi Kurniawati, Sp.JP(K)', 'uN3Ks0wQIKFRCdFxwPxs2tGdqMuklV-metaU2NpZW50aWZpYyBDb21taXR0ZWUgQ29vcmRpbmF0b3IgZHIuIFlvdmkgS3Vybmlhd2F0aSwgU3AuSlAoSykuanBlZw==-.jpg', 'image/jpeg', 'public', 'public', 29639, '[]', '[]', '[]', '[]', 1, '2024-06-20 09:35:25', '2024-06-20 09:35:25'),
(15, 'App\\Models\\Committee', 6, '5ea6fc2d-4c42-46c8-bf3f-169c1b2ed7f6', 'committee', 'Scientific Secretary dr. Mira Fauziah, Sp.JP', 'TPUmzmlGOXcXVPWVUtaC3ToVOAVWxp-metaU2NpZW50aWZpYyBTZWNyZXRhcnkgZHIuIE1pcmEgRmF1emlhaCwgU3AuSlAuanBlZw==-.jpg', 'image/jpeg', 'public', 'public', 49813, '[]', '[]', '[]', '[]', 1, '2024-06-20 09:36:03', '2024-06-20 09:36:03'),
(16, 'App\\Models\\Committee', 7, 'f0e4f56c-27fe-46e3-8b11-4291c0666774', 'committee', 'Scientific Prof. Dr. dr. Yoga Yuniadi, Sp.JP(K)', '3oLbHlDOJnNKpuFXSOjM8PV5ZKBhsx-metaU2NpZW50aWZpYyBQcm9mLiBEci4gZHIuIFlvZ2EgWXVuaWFkaSwgU3AuSlAoSykuanBlZw==-.jpg', 'image/jpeg', 'public', 'public', 21509, '[]', '[]', '[]', '[]', 1, '2024-06-20 09:37:52', '2024-06-20 09:37:52'),
(17, 'App\\Models\\Committee', 2, '1c835d77-4940-413c-bdb2-2f6de53cd27a', 'committee', 'Advisor _ Scientific _ Free Paper and Poster Presentation dr. Bambang Widyantoro, Ph.D, Sp.JP(K)', 'D6o6sYpgv9DiwLhFPnm6HlcRflyPg5-metaQWR2aXNvciBfIFNjaWVudGlmaWMgXyBGcmVlIFBhcGVyIGFuZCBQb3N0ZXIgUHJlc2VudGF0aW9uIGRyLiBCYW1iYW5nIFdpZHlhbnRvcm8sIFBoLkQsIFNwLkpQKEspLmpwZWc=-.jpg', 'image/jpeg', 'public', 'public', 25959, '[]', '[]', '[]', '[]', 1, '2024-06-20 09:40:32', '2024-06-20 09:40:32'),
(18, 'App\\Models\\Committee', 12, 'a484baf6-2bc8-43ff-aa46-9c1e2a5e0137', 'committee', 'Scientific dr. Amir Aziz Alkatiri, Sp.JP(K)', 'tGPU03e1lXcS1oadDRQt9Po8ai4Vce-metaU2NpZW50aWZpYyBkci4gQW1pciBBeml6IEFsa2F0aXJpLCBTcC5KUChLKS5qcGVn-.jpg', 'image/jpeg', 'public', 'public', 1787621, '[]', '[]', '[]', '[]', 1, '2024-06-20 09:51:13', '2024-06-20 09:51:13'),
(19, 'App\\Models\\Committee', 13, '93fb55c9-9bee-4841-a9b8-fa654982b1b1', 'committee', 'Scientific dr. BRM. Ario Soeryo Kuncoro, Sp.JP(K)', 'WnZmBpcYMQLZg7CXN7nBvlVZCyIRTI-metaU2NpZW50aWZpYyBkci4gQlJNLiBBcmlvIFNvZXJ5byBLdW5jb3JvLCBTcC5KUChLKS5qcGVn-.jpg', 'image/jpeg', 'public', 'public', 19943, '[]', '[]', '[]', '[]', 1, '2024-06-20 09:52:47', '2024-06-20 09:52:47'),
(20, 'App\\Models\\Committee', 14, '983b1a92-6205-4e26-8afc-225b0de2d626', 'committee', 'Scientific dr. Celly Anantaria A, Sp.JP(K), M.Pend.Ked', 'CywAlQTLQaHS1ht1j3uoAk7reFAMUF-metaU2NpZW50aWZpYyBkci4gQ2VsbHkgQW5hbnRhcmlhIEEsIFNwLkpQKEspLCBNLlBlbmQuS2VkLmpwZWc=-.jpg', 'image/jpeg', 'public', 'public', 34159, '[]', '[]', '[]', '[]', 1, '2024-06-20 09:54:38', '2024-06-20 09:54:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(29, '2014_10_12_000000_create_users_table', 1),
(30, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(31, '2019_08_19_000000_create_failed_jobs_table', 1),
(32, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(33, '2024_06_15_035842_create_faculties_table', 1),
(34, '2024_06_15_040312_create_scientific_schedules_table', 1),
(35, '2024_06_15_042453_create_type_participants_table', 1),
(38, '2024_06_15_060249_add_image_column_to_faculties', 3),
(40, '2024_06_15_130332_create_media_table', 5),
(43, '2024_06_15_142314_create_faculty_type_participant_table', 6),
(45, '2024_06_18_131940_create_at_glances_table', 7),
(46, '2024_06_18_142001_create_reg_infos_table', 8),
(47, '2024_06_19_155020_create_committees_table', 9),
(48, '2024_06_19_160933_add_image_column_to_committees', 10),
(49, '2024_06_20_154209_add_no_urut_column_to_committees', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reg_infos`
--

CREATE TABLE `reg_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reg_infos`
--

INSERT INTO `reg_infos` (`id`, `title`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Entitlements', 'entitlements', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis molestias culpa in, recusandae laboriosam neque aliquid libero nesciunt voluptate dicta quo officiis explicabo consequuntur distinctio corporis earum similique!\n\n1. halo aksdasd\n2. sldfsdlfsdf', '2024-06-18 07:40:48', '2024-06-18 07:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `scientific_schedules`
--

CREATE TABLE `scientific_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `facuty_id` bigint(20) UNSIGNED NOT NULL,
  `is_published` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_participants`
--

CREATE TABLE `type_participants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_participants`
--

INSERT INTO `type_participants` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(5, 'Speaker', NULL, '2024-06-15 07:18:50', '2024-06-15 07:18:50'),
(6, 'Moderator', NULL, '2024-06-15 07:24:36', '2024-06-15 07:24:36'),
(7, 'Committee', NULL, '2024-06-15 07:24:47', '2024-06-15 07:24:47'),
(8, 'Participant', NULL, '2024-06-15 07:24:57', '2024-06-15 07:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'a.saepuloh@pharma-pro.com', NULL, '$2y$10$s3LEACCjhMXMGmbz/UrS..4le4wzvU6KD6pPsQzFDpvd4B2wQjm1a', NULL, '2024-06-14 22:23:45', '2024-06-14 22:23:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `at_glances`
--
ALTER TABLE `at_glances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `committees`
--
ALTER TABLE `committees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_type_participant`
--
ALTER TABLE `faculty_type_participant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculty_type_participant_faculty_id_foreign` (`faculty_id`),
  ADD KEY `faculty_type_participant_type_participant_id_foreign` (`type_participant_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reg_infos`
--
ALTER TABLE `reg_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scientific_schedules`
--
ALTER TABLE `scientific_schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scientific_schedules_facuty_id_foreign` (`facuty_id`);

--
-- Indexes for table `type_participants`
--
ALTER TABLE `type_participants`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `at_glances`
--
ALTER TABLE `at_glances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `committees`
--
ALTER TABLE `committees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `faculty_type_participant`
--
ALTER TABLE `faculty_type_participant`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_infos`
--
ALTER TABLE `reg_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `scientific_schedules`
--
ALTER TABLE `scientific_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_participants`
--
ALTER TABLE `type_participants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faculty_type_participant`
--
ALTER TABLE `faculty_type_participant`
  ADD CONSTRAINT `faculty_type_participant_faculty_id_foreign` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `faculty_type_participant_type_participant_id_foreign` FOREIGN KEY (`type_participant_id`) REFERENCES `type_participants` (`id`);

--
-- Constraints for table `scientific_schedules`
--
ALTER TABLE `scientific_schedules`
  ADD CONSTRAINT `scientific_schedules_facuty_id_foreign` FOREIGN KEY (`facuty_id`) REFERENCES `faculties` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
