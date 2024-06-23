-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2024 at 05:39 PM
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
(7, 'Prof. Dr. dr. Yoga Yuniadi, Sp.JP(K)', 'Member', 'Member of Scientific', NULL, 5, '2024-06-19 09:02:24', '2024-06-21 08:41:10'),
(8, 'dr. Sony Hilal Wicaksono, Sp.JP(K)', 'Chairman', 'Chairman', NULL, 2, '2024-06-20 08:52:48', '2024-06-20 09:16:42'),
(9, 'dr. Damba Dwisepto Aulia Sakti, Sp.JP', 'Secretary', 'Secretary', NULL, 3, '2024-06-20 08:53:40', '2024-06-20 09:24:19'),
(10, 'dr. Elen, Sp.JP(K)', 'Treasurer', 'Treasurer', NULL, 4, '2024-06-20 08:56:40', '2024-06-20 09:25:37'),
(11, 'dr. Vienna Rossimarina, Sp.JP(K)', 'Treasurer', 'Treasurer', NULL, 4, '2024-06-20 08:57:42', '2024-06-20 09:26:08'),
(12, 'dr. Amir Aziz Alkatiri, Sp.JP(K)', 'Member', 'Member of Scientific', NULL, 5, '2024-06-20 09:51:13', '2024-06-21 08:42:01'),
(13, 'dr. BRM. Ario Soeryo Kuncoro, Sp.JP(K)', 'Member', 'Member of Scientific', NULL, 5, '2024-06-20 09:52:47', '2024-06-21 08:42:17'),
(14, 'dr. Celly Anantaria A, Sp.JP(K), M.Pend.Ked.', 'Member', 'Member of Scientific', NULL, 6, '2024-06-20 09:53:57', '2024-06-21 08:42:34'),
(15, 'dr. Daniel PL. Tobing, Sp.JP(K)', 'Member', 'Member of Scientific', NULL, 6, '2024-06-21 07:59:04', '2024-06-21 08:42:57'),
(16, 'Dr. dr. Basuni Radi, Sp.JP(K)', 'Member', 'Member of Scientific', NULL, 6, '2024-06-21 08:00:15', '2024-06-21 08:43:25'),
(17, 'Dr. dr. Dicky Armein Hanafy, Sp.JP(K)', 'Member', 'Member of Scientific', NULL, 6, '2024-06-21 08:02:40', '2024-06-21 08:44:06'),
(18, 'Dr. dr. Doni Firman, Sp.JP(K)', 'Member', 'Member of Scientific', NULL, 6, '2024-06-21 08:08:03', '2024-06-21 08:45:18'),
(19, 'Dr. dr. Rita Zahara, Sp.JP(K)', 'Member', 'Member of Scientific', NULL, 7, '2024-06-21 08:09:48', '2024-06-21 08:50:22'),
(20, 'dr. Taofan, Sp.JP(K) ', 'Member', 'Member of Scientific', NULL, 7, '2024-06-21 08:11:15', '2024-06-21 08:46:13'),
(21, 'dr. Oktavia Lilyasari, M.Kes, Sp.JP(K)', 'Member', 'Member of Scientific', NULL, 7, '2024-06-21 08:12:55', '2024-06-21 08:47:31'),
(22, 'dr. Radityo Prakoso, Sp.JP(K)', 'Member', 'Member of Scientific', NULL, 7, '2024-06-21 08:13:35', '2024-06-21 08:47:51'),
(23, 'Dr. dr. Dafsah Arifa Juzar, Sp.JP(K)', 'Member', 'Member of Scientific', NULL, 7, '2024-06-21 08:15:01', '2024-06-21 08:49:37'),
(24, 'dr. Rina Ariani, Sp.JP(K)', 'Member', 'Member of Scientific', NULL, 8, '2024-06-21 08:17:35', '2024-06-21 08:49:42'),
(25, 'dr. Sisca Natalia Siagian, Sp.JP(K)', 'Member', 'Member of Scientific', NULL, 8, '2024-06-21 08:18:08', '2024-06-21 08:49:47'),
(26, 'dr. Siska Suridanda Danny, Sp.JP(K)', 'Member', 'Member of Scientific', NULL, 8, '2024-06-21 08:19:53', '2024-06-21 08:51:16'),
(27, 'dr. Suko Adiarto, Ph.D, Sp.JP(K)', 'Member', 'Member of Scientific', NULL, 8, '2024-06-21 08:20:24', '2024-06-21 08:51:25'),
(28, 'dr. Sunu Budhi Raharjo, Ph.D, Sp.JP(K)', 'Member', 'Member of Scientific', NULL, 8, '2024-06-21 08:22:10', '2024-06-21 08:51:31'),
(29, 'Prof. Dr. dr. Amiliana M. Soesanto, Sp.JP(K)', 'Member', 'Member of Scientific', NULL, 9, '2024-06-21 08:23:08', '2024-06-21 20:05:44'),
(30, 'Rarsari Soearso, MD ', 'Member', 'Member of Scientific', NULL, 9, '2024-06-21 08:26:43', '2024-06-21 20:06:02'),
(31, 'dr. Estu Rudiktyo, Sp.JP(K)', 'PIC', 'Workshop', NULL, 10, '2024-06-21 08:30:20', '2024-06-21 20:06:46'),
(32, 'dr. Bambang Widyantoro, Ph.D, Sp.JP(K)', 'PIC', 'Free Paper and Poster Presentation', NULL, 10, '2024-06-21 08:32:05', '2024-06-21 20:08:54'),
(33, 'dr. Hary Sakti Muliawan, PhD, Sp.JP', 'PIC', 'Free Paper and Poster Presentation', NULL, 10, '2024-06-21 08:33:59', '2024-06-21 20:08:43'),
(34, 'dr. Dian Zamroni, Sp.JP(K)', 'PIC', 'Cardiology on Jeopardy', NULL, 10, '2024-06-21 08:35:19', '2024-06-21 20:09:08'),
(35, 'dr. Dony Yugo Hermanto, Sp.JP(K)', 'Member', 'Opening Ceremony, Department Anniversay, Homecoming Day / Alumni Gathering Day', NULL, 11, '2024-06-21 08:38:21', '2024-06-21 20:09:32'),
(36, 'dr. Dwita Rian Desandri, Sp.JP(K)', 'Member', 'Opening Ceremony, Department Anniversay, Homecoming Day / Alumni Gathering Day', NULL, 11, '2024-06-21 20:10:42', '2024-06-21 20:18:54'),
(37, 'dr. Ruth Grace Aurora, Sp.JP', 'Member', 'Opening Ceremony, Department Anniversay, Homecoming Day / Alumni Gathering Day', NULL, 11, '2024-06-21 20:11:15', '2024-06-21 20:19:12'),
(38, 'dr. Adelin Dhivi Kemalasari, Sp.JP', 'Member', 'Promotion, Publication, Registration', NULL, 12, '2024-06-21 20:25:30', '2024-06-21 20:25:30'),
(39, 'dr. Olfi Lelya, Sp.JP(K)', 'Member', 'Promotion, Publication, Registration', NULL, 12, '2024-06-21 20:26:04', '2024-06-21 20:26:04'),
(40, 'dr. Suci Indriani, Sp.JP(K)', 'Member', 'Promotion, Publication, Registration', NULL, 12, '2024-06-21 20:26:42', '2024-06-21 20:26:42'),
(41, 'dr. Aditya Agita Sembiring, Sp.JP(K)', 'Member', 'Website, Registration, Audiovisual, Documentation', NULL, 13, '2024-06-21 20:30:42', '2024-06-21 20:32:22'),
(42, 'dr. Bhayu Hanggadhi Nugroho, Sp.JP', 'Member', 'Website, Registration, Audiovisual, Documentation', NULL, 13, '2024-06-21 20:31:31', '2024-06-21 20:31:31'),
(43, 'dr. Prima Almazini, Sp.JP', 'Member', 'Website, Registration, Audiovisual, Documentation', NULL, 13, '2024-06-21 20:31:58', '2024-06-21 20:31:58'),
(44, 'dr. Arwin Saleh Mangkuanom, Sp.JP(K)', 'Member', 'Accommodation', NULL, 14, '2024-06-21 20:33:01', '2024-06-21 20:33:01'),
(45, 'dr. Nanda Iryuza, Sp.JP', 'Member', 'Accommodation', NULL, 14, '2024-06-21 20:33:24', '2024-06-21 20:33:24');

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
(14, 'faculty 1', 'Indonesia', NULL, NULL, NULL, NULL, NULL, 1, '2024-06-18 02:10:12', '2024-06-21 23:20:18'),
(15, 'Speaker 2', 'Indonesia', NULL, NULL, NULL, NULL, NULL, 1, '2024-06-21 23:08:34', '2024-06-21 23:08:34'),
(16, 'faculty 2', 'United Arab Emirates', NULL, NULL, NULL, NULL, NULL, 1, '2024-06-21 23:08:50', '2024-06-21 23:08:50');

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
(4, 14, 6),
(5, 15, 6),
(6, 15, 5),
(7, 16, 5);

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
(20, 'App\\Models\\Committee', 14, '983b1a92-6205-4e26-8afc-225b0de2d626', 'committee', 'Scientific dr. Celly Anantaria A, Sp.JP(K), M.Pend.Ked', 'CywAlQTLQaHS1ht1j3uoAk7reFAMUF-metaU2NpZW50aWZpYyBkci4gQ2VsbHkgQW5hbnRhcmlhIEEsIFNwLkpQKEspLCBNLlBlbmQuS2VkLmpwZWc=-.jpg', 'image/jpeg', 'public', 'public', 34159, '[]', '[]', '[]', '[]', 1, '2024-06-20 09:54:38', '2024-06-20 09:54:38'),
(21, 'App\\Models\\Committee', 15, 'f031c2b9-b2e8-4e81-afa9-52e163416c30', 'committee', 'Scientific dr. Daniel PL. Tobing, Sp.JP(K)', '31PNyLfUr5kN85lqNQ6ieN9wfFsL9P-metaU2NpZW50aWZpYyBkci4gRGFuaWVsIFBMLiBUb2JpbmcsIFNwLkpQKEspLmpwZWc=-.jpg', 'image/jpeg', 'public', 'public', 16663, '[]', '[]', '[]', '[]', 1, '2024-06-21 07:59:05', '2024-06-21 07:59:05'),
(22, 'App\\Models\\Committee', 16, '863fa810-999a-4728-8fbb-787a10472b0c', 'committee', 'Scientific Dr. dr. Basuni Radi, Sp.JP(K)', 'T1yaW0ds1gOAGPx4GX4WBpysZUwoLA-metaU2NpZW50aWZpYyBEci4gZHIuIEJhc3VuaSBSYWRpLCBTcC5KUChLKS5qcGVn-.jpg', 'image/jpeg', 'public', 'public', 15790, '[]', '[]', '[]', '[]', 1, '2024-06-21 08:00:15', '2024-06-21 08:00:15'),
(23, 'App\\Models\\Committee', 17, '87951bd9-d93e-4518-a9f3-81f168957e94', 'committee', 'Scientific Dr. dr. Dicky  Armein Hanafy, Sp.JP(K)', 'zuCIEmba0VtxvJQrkMGhxFKLbDe21o-metaU2NpZW50aWZpYyBEci4gZHIuIERpY2t5ICBBcm1laW4gSGFuYWZ5LCBTcC5KUChLKS5qcGVn-.jpg', 'image/jpeg', 'public', 'public', 20584, '[]', '[]', '[]', '[]', 1, '2024-06-21 08:02:40', '2024-06-21 08:02:40'),
(24, 'App\\Models\\Committee', 18, '75d93b32-6192-4b7c-9a51-f22ed112389f', 'committee', 'Scientific Dr. dr. Doni Firman, Sp.JP(K)', 'pHLQ0wA9IPehLEq9FqLKFcTEwhelgY-metaU2NpZW50aWZpYyBEci4gZHIuIERvbmkgRmlybWFuLCBTcC5KUChLKS5qcGVn-.jpg', 'image/jpeg', 'public', 'public', 15492, '[]', '[]', '[]', '[]', 1, '2024-06-21 08:08:03', '2024-06-21 08:08:03'),
(25, 'App\\Models\\Committee', 19, 'a8de399b-40b0-44df-ad08-0e62459ff89b', 'committee', 'Scientific Dr. dr. Rita Zahara, Sp.JP(K)', '62URpEr9pSbOMBm8yxARbdFRnG7QY6-metaU2NpZW50aWZpYyBEci4gZHIuIFJpdGEgWmFoYXJhLCBTcC5KUChLKS5qcGVn-.jpg', 'image/jpeg', 'public', 'public', 17450, '[]', '[]', '[]', '[]', 1, '2024-06-21 08:09:49', '2024-06-21 08:09:49'),
(26, 'App\\Models\\Committee', 20, '251a49b4-d45f-4813-ac0c-8289deb8f93b', 'committee', 'Advisor dan Scientific dr. Taofan,  Sp.JP(K)', 'Y22gedsOMSwD5CQEwNqp7g8Nmbp02N-metaQWR2aXNvciBkYW4gU2NpZW50aWZpYyBkci4gVGFvZmFuLCAgU3AuSlAoSykuanBlZw==-.jpg', 'image/jpeg', 'public', 'public', 26308, '[]', '[]', '[]', '[]', 1, '2024-06-21 08:11:15', '2024-06-21 08:11:15'),
(27, 'App\\Models\\Committee', 21, 'd6148e8d-cbc6-4000-97f1-5a84646a67c1', 'committee', 'Scientific dr. Oktavia Lilyasari, M.Kes, Sp.JP(K)', '5cGMtp9GKEQb5M0Vl69FoXb2YK3Yel-metaU2NpZW50aWZpYyBkci4gT2t0YXZpYSBMaWx5YXNhcmksIE0uS2VzLCBTcC5KUChLKS5qcGVn-.jpg', 'image/jpeg', 'public', 'public', 18632, '[]', '[]', '[]', '[]', 1, '2024-06-21 08:12:55', '2024-06-21 08:12:55'),
(28, 'App\\Models\\Committee', 22, 'aa4d0fab-277f-4e0e-8c50-030c0c302d82', 'committee', 'Scientific dr. Radityo Prakoso, Sp.JP(K)', 'sZAM3NsK9RVpYLmwgS2ho4cBvTj3RF-metaU2NpZW50aWZpYyBkci4gUmFkaXR5byBQcmFrb3NvLCBTcC5KUChLKS5qcGVn-.jpg', 'image/jpeg', 'public', 'public', 14545, '[]', '[]', '[]', '[]', 1, '2024-06-21 08:13:35', '2024-06-21 08:13:35'),
(29, 'App\\Models\\Committee', 23, '57ded157-2cf3-454b-af2d-30c921b9375e', 'committee', 'Advisor dan Scientific Dr. dr. Dafsah Arifa Juzar, Sp.JP(K)', 'EfQFFAskpntkddEfw5sIFvLLt8RtfI-metaQWR2aXNvciBkYW4gU2NpZW50aWZpYyBEci4gZHIuIERhZnNhaCBBcmlmYSBKdXphciwgU3AuSlAoSykuanBlZw==-.jpg', 'image/jpeg', 'public', 'public', 18621, '[]', '[]', '[]', '[]', 1, '2024-06-21 08:15:01', '2024-06-21 08:15:01'),
(30, 'App\\Models\\Committee', 24, '7da3f428-8634-40c5-b864-003aaeb1ba34', 'committee', 'Scientific dr. Rina Ariani, Sp.JP(K)', '3Vj29LGZLOWPkqlr6e8xHdNAssR1Tz-metaU2NpZW50aWZpYyBkci4gUmluYSBBcmlhbmksIFNwLkpQKEspLmpwZWc=-.jpg', 'image/jpeg', 'public', 'public', 27748, '[]', '[]', '[]', '[]', 1, '2024-06-21 08:17:35', '2024-06-21 08:17:35'),
(31, 'App\\Models\\Committee', 25, 'f5d7348f-f55a-492a-ad90-fd5be84f9fc8', 'committee', 'Scientific dr. Sisca Natalia Siagian, Sp.JP(K)', 'Qv6trXlFuL4T5wa9lDCSffiSBpf73U-metaU2NpZW50aWZpYyBkci4gU2lzY2EgTmF0YWxpYSBTaWFnaWFuLCBTcC5KUChLKS5qcGVn-.jpg', 'image/jpeg', 'public', 'public', 31059, '[]', '[]', '[]', '[]', 1, '2024-06-21 08:18:08', '2024-06-21 08:18:08'),
(32, 'App\\Models\\Committee', 26, 'ac86821f-46f6-498c-87ea-3c58e6f7a422', 'committee', 'Scientific dr. Siska Suridanda Danny, Sp.JP(K)', '0gagP4U0KiamDHtedSNkU5MpU0DJR3-metaU2NpZW50aWZpYyBkci4gU2lza2EgU3VyaWRhbmRhIERhbm55LCBTcC5KUChLKS5qcGVn-.jpg', 'image/jpeg', 'public', 'public', 27495, '[]', '[]', '[]', '[]', 1, '2024-06-21 08:19:53', '2024-06-21 08:19:53'),
(33, 'App\\Models\\Committee', 27, 'fb66d1dd-3738-4dc5-99d4-50601c3c0487', 'committee', 'Scientific dr. Suko Adiarto, Ph.D, Sp.JP(K)', 'ygLr2lHWu7WRBTPaIpx3sks7RcUGgQ-metaU2NpZW50aWZpYyBkci4gU3VrbyBBZGlhcnRvLCBQaC5ELCBTcC5KUChLKS5qcGVn-.jpg', 'image/jpeg', 'public', 'public', 19649, '[]', '[]', '[]', '[]', 1, '2024-06-21 08:20:25', '2024-06-21 08:20:25'),
(34, 'App\\Models\\Committee', 28, 'e74023e4-b3ea-4d8c-8a24-43fb4d1982e4', 'committee', 'Scientific dr. Sunu Budhi Raharjo, Ph.D, Sp.JP(K)', 'AgKg8sGDWPAkytvqbXvOBzuaITNi6s-metaU2NpZW50aWZpYyBkci4gU3VudSBCdWRoaSBSYWhhcmpvLCBQaC5ELCBTcC5KUChLKS5qcGVn-.jpg', 'image/jpeg', 'public', 'public', 27478, '[]', '[]', '[]', '[]', 1, '2024-06-21 08:22:10', '2024-06-21 08:22:10'),
(35, 'App\\Models\\Committee', 29, 'df703a02-4507-471b-9291-d8758c87b252', 'committee', 'Scientific Prof. Dr. dr. Amiliana M. Soesanto, Sp.JP(K)', '9fgCo1OcRFJDmoCI9DEEX0xZeF3Q1Q-metaU2NpZW50aWZpYyBQcm9mLiBEci4gZHIuIEFtaWxpYW5hIE0uIFNvZXNhbnRvLCBTcC5KUChLKS5qcGVn-.jpg', 'image/jpeg', 'public', 'public', 26658, '[]', '[]', '[]', '[]', 1, '2024-06-21 08:23:08', '2024-06-21 08:23:08'),
(37, 'App\\Models\\Committee', 32, '72ecdfe6-6957-41b3-b48a-2f82e5b0d394', 'committee', 'Advisor _ Scientific _ Free Paper and Poster Presentation dr. Bambang Widyantoro, Ph.D, Sp.JP(K)', 'qPWj5N7FLbEtPfK2ATuYJMtJuQEqPS-metaQWR2aXNvciBfIFNjaWVudGlmaWMgXyBGcmVlIFBhcGVyIGFuZCBQb3N0ZXIgUHJlc2VudGF0aW9uIGRyLiBCYW1iYW5nIFdpZHlhbnRvcm8sIFBoLkQsIFNwLkpQKEspLmpwZWc=-.jpg', 'image/jpeg', 'public', 'public', 25959, '[]', '[]', '[]', '[]', 1, '2024-06-21 08:32:05', '2024-06-21 08:32:05'),
(38, 'App\\Models\\Committee', 33, 'ec2190a4-4cf1-458e-8a3f-ad6eca5781dc', 'committee', 'Free Paper and Poster Presentation dr. Hary Sakti Muliawan, PhD, Sp.JP', 'q7AeAu8A6tSprrbWPmJsGJ6qmoIRa1-metaRnJlZSBQYXBlciBhbmQgUG9zdGVyIFByZXNlbnRhdGlvbiBkci4gSGFyeSBTYWt0aSBNdWxpYXdhbiwgUGhELCBTcC5KUC5wbmc=-.png', 'image/png', 'public', 'public', 1064080, '[]', '[]', '[]', '[]', 1, '2024-06-21 08:33:59', '2024-06-21 08:33:59'),
(39, 'App\\Models\\Committee', 34, '4c3ba206-d985-41c6-beac-f30025ebd723', 'committee', 'Cardiology in Jeopardy dr. Dian Zamroni, Sp.JP(K)', 'UMwPSBtKPEuR6W2pTysIEJaEaOwQfj-metaQ2FyZGlvbG9neSBpbiBKZW9wYXJkeSBkci4gRGlhbiBaYW1yb25pLCBTcC5KUChLKS5qcGVn-.jpg', 'image/jpeg', 'public', 'public', 381841, '[]', '[]', '[]', '[]', 1, '2024-06-21 08:35:19', '2024-06-21 08:35:19'),
(40, 'App\\Models\\Committee', 35, '20bc5bde-bc19-43b4-8a1d-9d70a846d877', 'committee', 'Opening Ceremony, Department Anniversary, Homecoming, Alumni Gathering Day dr. Dony Yugo Hermanto, Sp.JP(K)', 'htzXzNuCIW7XrAmZj4UD1ACOVpSp16-metaT3BlbmluZyBDZXJlbW9ueSwgRGVwYXJ0bWVudCBBbm5pdmVyc2FyeSwgSG9tZWNvbWluZywgQWx1bW5pIEdhdGhlcmluZyBEYXkgZHIuIERvbnkgWXVnbyBIZXJtYW50bywgU3AuSlAoSykuanBlZw==-.jpg', 'image/jpeg', 'public', 'public', 800406, '[]', '[]', '[]', '[]', 1, '2024-06-21 08:38:21', '2024-06-21 08:38:21'),
(41, 'App\\Models\\Committee', 36, '60bf8abf-6203-484e-919a-41b3b1c55375', 'committee', 'Opening Ceremony, Department Anniversary, Homecoming, Alumni Gathering Day dr. Dwita Rian Desandri, Sp.JP(K)', 'bP43YHl6NaPSiyfGk6pwnin26H3KQ8-metaT3BlbmluZyBDZXJlbW9ueSwgRGVwYXJ0bWVudCBBbm5pdmVyc2FyeSwgSG9tZWNvbWluZywgQWx1bW5pIEdhdGhlcmluZyBEYXkgZHIuIER3aXRhIFJpYW4gRGVzYW5kcmksIFNwLkpQKEspLmpwZWc=-.jpg', 'image/jpeg', 'public', 'public', 295379, '[]', '[]', '[]', '[]', 1, '2024-06-21 20:10:43', '2024-06-21 20:10:43'),
(43, 'App\\Models\\Committee', 38, '418ed7fe-d14c-4414-b948-9ee22862a812', 'committee', 'Promotion Publication Registration dr. Adelin Dhivi Kemalasari, Sp.JP    ', 'Hf6f3TswtOBFK9tKXwyoP6CohDLIwL-metaUHJvbW90aW9uIFB1YmxpY2F0aW9uIFJlZ2lzdHJhdGlvbiBkci4gQWRlbGluIERoaXZpIEtlbWFsYXNhcmksIFNwLkpQICAgIC5wbmc=-.png', 'image/png', 'public', 'public', 466945, '[]', '[]', '[]', '[]', 1, '2024-06-21 20:25:30', '2024-06-21 20:25:30'),
(44, 'App\\Models\\Committee', 39, '87a8904b-1ea5-452d-883f-9289276724bb', 'committee', 'Promotion Publication Registration dr. Olfi Lelya, Sp.JP(K)', 'eh6xuBgTb8z1CupS35UXwER5IEVcUb-metaUHJvbW90aW9uIFB1YmxpY2F0aW9uIFJlZ2lzdHJhdGlvbiBkci4gT2xmaSBMZWx5YSwgU3AuSlAoSykucG5n-.png', 'image/png', 'public', 'public', 485507, '[]', '[]', '[]', '[]', 1, '2024-06-21 20:26:04', '2024-06-21 20:26:04'),
(46, 'App\\Models\\Committee', 41, '94501e85-da40-4d48-bd4e-705031b9b69d', 'committee', 'Website Registration AV Documentation dr. Aditya Agita Sembiring, Sp.JP(K)', 'cG6ODs6M2gbhRILwNhXRmeGEG9Ih9T-metaV2Vic2l0ZSBSZWdpc3RyYXRpb24gQVYgRG9jdW1lbnRhdGlvbiBkci4gQWRpdHlhIEFnaXRhIFNlbWJpcmluZywgU3AuSlAoSykuanBlZw==-.jpg', 'image/jpeg', 'public', 'public', 95333, '[]', '[]', '[]', '[]', 1, '2024-06-21 20:30:43', '2024-06-21 20:30:43'),
(47, 'App\\Models\\Committee', 42, 'a329103e-851f-4e0e-b16f-c639b97d1542', 'committee', 'Website Registration AV Documentation dr. Bhayu Hanggadhi Nugroho, Sp.JP    ', 'eeljPVfGSGbJ6i1wFwFwLM7nAoYT4O-metaV2Vic2l0ZSBSZWdpc3RyYXRpb24gQVYgRG9jdW1lbnRhdGlvbiBkci4gQmhheXUgSGFuZ2dhZGhpIE51Z3JvaG8sIFNwLkpQICAgIC5qcGVn-.jpg', 'image/jpeg', 'public', 'public', 120722, '[]', '[]', '[]', '[]', 1, '2024-06-21 20:31:31', '2024-06-21 20:31:31'),
(48, 'App\\Models\\Committee', 43, '8336e270-a985-459c-ae40-a0504243ca94', 'committee', 'Website Registration AV Documentation dr. Prima Almazini, Sp.JP', 'JtZMpjO8YgK27jf9QAhymJo2g6RlVY-metaV2Vic2l0ZSBSZWdpc3RyYXRpb24gQVYgRG9jdW1lbnRhdGlvbiBkci4gUHJpbWEgQWxtYXppbmksIFNwLkpQLnBuZw==-.png', 'image/png', 'public', 'public', 1012304, '[]', '[]', '[]', '[]', 1, '2024-06-21 20:31:58', '2024-06-21 20:31:58'),
(49, 'App\\Models\\Committee', 44, 'd30fa059-371a-4975-8cd1-544405b273d0', 'committee', 'Accommodation dr. Arwin Saleh Mangkuanom, Sp.JP(K)', '4omWDKZdP98kC0qG5iwqsfc9aeLT1K-metaQWNjb21tb2RhdGlvbiBkci4gQXJ3aW4gU2FsZWggTWFuZ2t1YW5vbSwgU3AuSlAoSykuanBlZw==-.jpg', 'image/jpeg', 'public', 'public', 518896, '[]', '[]', '[]', '[]', 1, '2024-06-21 20:33:01', '2024-06-21 20:33:01'),
(51, 'App\\Models\\Committee', 45, 'f1abbd5f-0b41-4285-81fd-3e1b17748dc8', 'committee', '-Accomodation-dr.-Nanda-Iryuza,-Sp.JP', 'qWfu2UpcIxWaCfqQwZWZXe82Y4ecBA-metaLUFjY29tb2RhdGlvbi1kci4tTmFuZGEtSXJ5dXphLC1TcC5KUC5qcGc=-.jpg', 'image/jpeg', 'public', 'public', 61204, '[]', '[]', '[]', '[]', 1, '2024-06-21 20:35:38', '2024-06-21 20:35:38'),
(52, 'App\\Models\\Committee', 40, 'ebbe56e5-d412-4823-b297-971b114c541d', 'committee', 'Promotion-Publication-Registration-dr.-Suci-Indriani,-Sp.JP(K)', 'w3lItEjNOcmdw1lJ9XruArY0Q9wZ5T-metaUHJvbW90aW9uLVB1YmxpY2F0aW9uLVJlZ2lzdHJhdGlvbi1kci4tU3VjaS1JbmRyaWFuaSwtU3AuSlAoSykuanBn-.jpg', 'image/jpeg', 'public', 'public', 82357, '[]', '[]', '[]', '[]', 1, '2024-06-21 20:37:42', '2024-06-21 20:37:42'),
(53, 'App\\Models\\Committee', 37, 'cd1272b3-2f9f-490e-a80b-8011a31a4a2b', 'committee', 'Opening-Ceremony,-Department-Anniversary,-Homecoming,-Alumni-Gathering-Day-dr.-Ruth-Grace-Aurora,-Sp.JP', '9LTg0BVueULm1CcYggmuIQE8GwYo9f-metaT3BlbmluZy1DZXJlbW9ueSwtRGVwYXJ0bWVudC1Bbm5pdmVyc2FyeSwtSG9tZWNvbWluZywtQWx1bW5pLUdhdGhlcmluZy1EYXktZHIuLVJ1dGgtR3JhY2UtQXVyb3JhLC1TcC5KUC5qcGc=-.jpg', 'image/jpeg', 'public', 'public', 78326, '[]', '[]', '[]', '[]', 1, '2024-06-21 20:38:50', '2024-06-21 20:38:50'),
(54, 'App\\Models\\Committee', 31, '3061cfdc-9e69-459c-98ff-31175a5fb5ff', 'committee', 'Workshop-dr.-Estu-Rudiktyo,-Sp.JP(K)', 'LShh1i6bpHCXACB6qvjPibZgtY3o0G-metaV29ya3Nob3AtZHIuLUVzdHUtUnVkaWt0eW8sLVNwLkpQKEspLmpwZw==-.jpg', 'image/jpeg', 'public', 'public', 70815, '[]', '[]', '[]', '[]', 1, '2024-06-21 20:39:49', '2024-06-21 20:39:49');

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
(49, '2024_06_20_154209_add_no_urut_column_to_committees', 11),
(51, '2024_06_22_065916_create_schedule_sessions_table', 12),
(52, '2024_06_22_072452_add_moderator_id_column_to_schedule_sessions', 13),
(53, '2024_06_22_080552_create_scientific_schedules_table', 14);

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
-- Table structure for table `schedule_sessions`
--

CREATE TABLE `schedule_sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `timeStart` time DEFAULT NULL,
  `timeEnd` time DEFAULT NULL,
  `room` varchar(255) NOT NULL,
  `moderator_id` bigint(20) UNSIGNED NOT NULL,
  `is_published` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedule_sessions`
--

INSERT INTO `schedule_sessions` (`id`, `session`, `date`, `timeStart`, `timeEnd`, `room`, `moderator_id`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Plenary Lecture 1', '2024-10-26', '08:00:00', '09:00:00', 'Pecatu Hall 1', 14, 1, '2024-06-22 00:48:21', '2024-06-22 00:48:21'),
(2, 'Plenary Lecuture 2', '2024-10-27', '08:00:00', '09:00:00', 'Pecatu Hall 1', 13, 1, '2024-06-22 00:49:14', '2024-06-22 07:13:48'),
(3, 'Symposium 1', '2024-10-26', '10:00:00', '11:00:00', 'Pecatu Hall 1', 16, 1, '2024-06-23 06:29:55', '2024-06-23 06:29:55');

-- --------------------------------------------------------

--
-- Table structure for table `scientific_schedules`
--

CREATE TABLE `scientific_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_id` bigint(20) UNSIGNED NOT NULL,
  `timeStart` time DEFAULT NULL,
  `timeEnd` time DEFAULT NULL,
  `topic` varchar(255) NOT NULL,
  `faculty_id` bigint(20) UNSIGNED NOT NULL,
  `is_published` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scientific_schedules`
--

INSERT INTO `scientific_schedules` (`id`, `session_id`, `timeStart`, `timeEnd`, `topic`, `faculty_id`, `is_published`, `created_at`, `updated_at`) VALUES
(5, 1, '09:20:00', '09:40:00', 'Lecture 1', 15, 1, '2024-06-22 07:16:20', '2024-06-22 07:16:20'),
(6, 1, '09:00:00', '09:20:00', 'Cervical Corpectomy Reconstructions', 13, 1, '2024-06-22 07:19:32', '2024-06-22 07:19:32'),
(7, 2, '09:00:00', '09:20:00', 'Endoscopy', 16, 1, '2024-06-22 07:20:55', '2024-06-22 07:20:55'),
(8, 3, '10:00:00', '10:20:00', 'lorem ipsum color', 13, 1, '2024-06-23 06:30:48', '2024-06-23 06:30:48'),
(9, 3, '10:20:00', '10:40:00', 'percobaan lagi', 15, 1, '2024-06-23 07:07:43', '2024-06-23 07:08:24');

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
-- Indexes for table `schedule_sessions`
--
ALTER TABLE `schedule_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedule_sessions_moderator_id_foreign` (`moderator_id`);

--
-- Indexes for table `scientific_schedules`
--
ALTER TABLE `scientific_schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scientific_schedules_session_id_foreign` (`session_id`),
  ADD KEY `scientific_schedules_faculty_id_foreign` (`faculty_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `faculty_type_participant`
--
ALTER TABLE `faculty_type_participant`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

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
-- AUTO_INCREMENT for table `schedule_sessions`
--
ALTER TABLE `schedule_sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `scientific_schedules`
--
ALTER TABLE `scientific_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
-- Constraints for table `schedule_sessions`
--
ALTER TABLE `schedule_sessions`
  ADD CONSTRAINT `schedule_sessions_moderator_id_foreign` FOREIGN KEY (`moderator_id`) REFERENCES `faculties` (`id`);

--
-- Constraints for table `scientific_schedules`
--
ALTER TABLE `scientific_schedules`
  ADD CONSTRAINT `scientific_schedules_faculty_id_foreign` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`),
  ADD CONSTRAINT `scientific_schedules_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `schedule_sessions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
