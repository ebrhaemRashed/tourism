-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 04:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b2c`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `subject_type` varchar(255) DEFAULT NULL,
  `event` varchar(255) DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
  `batch_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` enum('Active','Not Active') NOT NULL DEFAULT 'Active',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `slug`, `email`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Admin\"}', 'admin', 'admin@gmail.com', 'Active', NULL, '$2y$10$MM4opiNWfpBvnUSxarrzfemrMUPBYT4RYekToeEJd0zzjAxe27J8W', NULL, '2023-05-23 06:56:41', '2023-05-23 06:56:41'),
(2, '{\"en\":\"Jonas Wuckert III\"}', 'jonas-wuckert-iii', 'magali.anderson@example.org', 'Active', '2023-05-23 06:56:41', '$2y$10$2KVfihbLxBubGrZLU5Fd/uHKGxUV8M5VELKp3kmuX9zjXjz46njuy', 'DWZ28olEVP', '2023-05-23 06:56:41', '2023-05-23 06:56:41'),
(3, '{\"en\":\"Camille Hilpert\"}', 'camille-hilpert', 'virgie27@example.org', 'Active', '2023-05-23 06:56:41', '$2y$10$2KVfihbLxBubGrZLU5Fd/uHKGxUV8M5VELKp3kmuX9zjXjz46njuy', '1bxlrFZwPP', '2023-05-23 06:56:41', '2023-05-23 06:56:41'),
(4, '{\"en\":\"Kyla Mohr II\"}', 'kyla-mohr-ii', 'esperanza.mcclure@example.org', 'Active', '2023-05-23 06:56:41', '$2y$10$2KVfihbLxBubGrZLU5Fd/uHKGxUV8M5VELKp3kmuX9zjXjz46njuy', 'Xtxlpgsm9L', '2023-05-23 06:56:41', '2023-05-23 06:56:41'),
(5, '{\"en\":\"Alexane Volkman\"}', 'alexane-volkman', 'farrell.kyra@example.org', 'Active', '2023-05-23 06:56:41', '$2y$10$2KVfihbLxBubGrZLU5Fd/uHKGxUV8M5VELKp3kmuX9zjXjz46njuy', '4PW7V6J58d', '2023-05-23 06:56:41', '2023-05-23 06:56:41'),
(6, '{\"en\":\"Miss Vita Kuhlman\"}', 'miss-vita-kuhlman', 'amelia.corkery@example.com', 'Active', '2023-05-23 06:56:41', '$2y$10$2KVfihbLxBubGrZLU5Fd/uHKGxUV8M5VELKp3kmuX9zjXjz46njuy', 'H7uA5AMoj0', '2023-05-23 06:56:41', '2023-05-23 06:56:41'),
(7, '{\"en\":\"Kasandra Macejkovic\"}', 'kasandra-macejkovic', 'rice.jake@example.org', 'Active', '2023-05-23 06:56:41', '$2y$10$2KVfihbLxBubGrZLU5Fd/uHKGxUV8M5VELKp3kmuX9zjXjz46njuy', 'q0pRqDjWTq', '2023-05-23 06:56:41', '2023-05-23 06:56:41'),
(8, '{\"en\":\"Jodie Mayer\"}', 'jodie-mayer', 'annamae45@example.com', 'Active', '2023-05-23 06:56:41', '$2y$10$2KVfihbLxBubGrZLU5Fd/uHKGxUV8M5VELKp3kmuX9zjXjz46njuy', 'Ki7CWq8Sy7', '2023-05-23 06:56:41', '2023-05-23 06:56:41'),
(9, '{\"en\":\"Hosea Kulas\"}', 'hosea-kulas', 'eda95@example.com', 'Active', '2023-05-23 06:56:41', '$2y$10$2KVfihbLxBubGrZLU5Fd/uHKGxUV8M5VELKp3kmuX9zjXjz46njuy', 'dAR2KKgbKc', '2023-05-23 06:56:41', '2023-05-23 06:56:41'),
(10, '{\"en\":\"Edmund Nikolaus DDS\"}', 'edmund-nikolaus-dds', 'koss.shaina@example.org', 'Active', '2023-05-23 06:56:41', '$2y$10$2KVfihbLxBubGrZLU5Fd/uHKGxUV8M5VELKp3kmuX9zjXjz46njuy', 'pbI5N6l43y', '2023-05-23 06:56:41', '2023-05-23 06:56:41'),
(11, '{\"en\":\"Hazel Casper MD\"}', 'hazel-casper-md', 'lilla.feil@example.net', 'Active', '2023-05-23 06:56:41', '$2y$10$2KVfihbLxBubGrZLU5Fd/uHKGxUV8M5VELKp3kmuX9zjXjz46njuy', 'mMjAvHv3Wn', '2023-05-23 06:56:41', '2023-05-23 06:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer`, `created_at`, `updated_at`, `image`) VALUES
(2, 2, 'شقق و أكواخ', NULL, NULL, 'storage/answers/q1_survey_apartment.jpg'),
(3, 2, 'فنادق', NULL, NULL, 'storage/answers/q1_survey_hotel.jpg'),
(4, 1, 'سائق مع سيارة', NULL, NULL, 'storage/answers/q1_survey_limousine.jpg'),
(5, 1, 'تأجير سيارة', NULL, NULL, 'storage/answers/q1_survey_rentacar-1.jpg'),
(6, 1, 'جولة سياحية', NULL, NULL, 'storage/answers/q1_survey_tour_new.jpg'),
(7, 1, 'تنقلات', NULL, NULL, 'storage/answers/q1_survey_transfer.jpg'),
(8, 3, 'سويسرا', NULL, NULL, 'storage/answers/q2_survey_switzerland.jpg'),
(9, 3, 'النمسا', NULL, NULL, 'storage/answers/q2_survey_austria.jpg'),
(10, 3, 'البوسنة', NULL, NULL, 'storage/answers/q2_survey_Bosnia.jpg'),
(11, 3, 'فرنسا', NULL, NULL, 'storage/answers/q2_survey_france.jpg'),
(12, 3, 'ألمانيا', NULL, NULL, 'storage/answers/q2_survey_germany.jpg'),
(13, 3, 'ايطاليا', NULL, NULL, 'storage/answers/q2_survey_italy.jpg'),
(14, 3, 'إسبانيا', NULL, NULL, 'storage/answers/q2_survey_spain.jpg'),
(15, 3, 'ليس مما سبق', NULL, NULL, 'storage/answers/q2_dislike.jpg'),
(17, 4, 'مدن وعواصم', NULL, NULL, 'storage/answers/q3_survey_capital.jpg'),
(18, 4, 'قرى و أرياف', NULL, NULL, 'storage/answers/q3_survey_village.jpg'),
(19, 4, 'كلاهما', NULL, NULL, 'storage/answers/q3_survey_both.jpg'),
(20, 6, 'التمتع مع أقل تكلفة', NULL, NULL, 'storage/answers/q4_survey_3stars.jpg'),
(21, 6, 'التمتع مع أنسب الخدمات', NULL, NULL, 'storage/answers/q4_survey_4stars.jpg'),
(22, 6, 'التمتع مع أفضل المميزات', NULL, NULL, 'storage/answers/q4_survey_5stars.jpg'),
(23, 5, 'أنشطة أسرية', NULL, NULL, 'storage/answers/q4_survey_family.jpg'),
(24, 5, 'متاحف و آثار', NULL, NULL, 'storage/answers/q4_survey_mat7af.jpg'),
(25, 5, 'الراحة و الإسترخاء', NULL, NULL, 'storage/answers/q4_survey_relaxation.jpg'),
(26, 5, 'أنشطة رومانسية', NULL, NULL, 'storage/answers/q4_survey_romantic1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `answer_user`
--

CREATE TABLE `answer_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `answer_id` bigint(20) DEFAULT NULL,
  `value_of_answer` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `question_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answer_user`
--

INSERT INTO `answer_user` (`id`, `user_id`, `answer_id`, `value_of_answer`, `created_at`, `updated_at`, `question_id`) VALUES
(1, 2, 5, NULL, NULL, NULL, '1'),
(2, 2, 3, NULL, NULL, NULL, '2'),
(3, 2, 13, NULL, NULL, NULL, '3'),
(4, 2, 18, NULL, NULL, NULL, '4'),
(5, 2, 24, NULL, NULL, NULL, '5'),
(6, 2, 21, NULL, NULL, NULL, '6'),
(7, 3, 4, NULL, NULL, NULL, '1'),
(8, 3, 5, NULL, NULL, NULL, '1'),
(9, 3, 6, NULL, NULL, NULL, '1'),
(10, 3, 7, NULL, NULL, NULL, '1'),
(11, 3, 2, NULL, NULL, NULL, '2'),
(12, 3, 3, NULL, NULL, NULL, '2'),
(13, 3, 8, NULL, NULL, NULL, '3'),
(14, 3, 9, NULL, NULL, NULL, '3'),
(15, 3, 10, NULL, NULL, NULL, '3'),
(16, 3, 12, NULL, NULL, NULL, '3'),
(17, 3, 13, NULL, NULL, NULL, '3'),
(18, 3, 18, NULL, NULL, NULL, '4'),
(19, 3, 19, NULL, NULL, NULL, '4'),
(20, 3, 24, NULL, NULL, NULL, '5'),
(21, 3, 25, NULL, NULL, NULL, '5'),
(22, 3, 26, NULL, NULL, NULL, '5'),
(23, 3, 21, NULL, NULL, NULL, '6'),
(24, 3, 22, NULL, NULL, NULL, '6'),
(25, 4, 5, NULL, NULL, NULL, '1'),
(26, 4, 2, NULL, NULL, NULL, '2'),
(27, 4, 13, NULL, NULL, NULL, '3'),
(28, 4, 14, NULL, NULL, NULL, '3'),
(29, 4, 18, NULL, NULL, NULL, '4'),
(30, 4, 24, NULL, NULL, NULL, '5'),
(31, 4, 25, NULL, NULL, NULL, '5'),
(32, 4, 21, NULL, NULL, NULL, '6'),
(33, 4, 22, NULL, NULL, NULL, '6'),
(34, 5, 2, NULL, NULL, NULL, '1'),
(35, 5, 13, NULL, NULL, NULL, '2'),
(36, 5, 19, NULL, NULL, NULL, '3'),
(37, 5, 24, NULL, NULL, NULL, '4'),
(38, 5, 25, NULL, NULL, NULL, '4'),
(39, 5, 21, NULL, NULL, NULL, '5'),
(40, 10, 2, NULL, NULL, NULL, '1'),
(41, 10, 8, NULL, NULL, NULL, '2'),
(42, 10, 9, NULL, NULL, NULL, '2'),
(43, 10, 10, NULL, NULL, NULL, '2'),
(44, 10, 11, NULL, NULL, NULL, '2'),
(45, 10, 12, NULL, NULL, NULL, '2'),
(46, 10, 13, NULL, NULL, NULL, '2'),
(47, 10, 14, NULL, NULL, NULL, '2'),
(48, 10, 18, NULL, NULL, NULL, '3'),
(49, 10, 24, NULL, NULL, NULL, '4'),
(50, 10, 25, NULL, NULL, NULL, '4'),
(51, 10, 26, NULL, NULL, NULL, '4'),
(52, 10, 21, NULL, NULL, NULL, '5'),
(53, 15, 4, NULL, NULL, NULL, '1'),
(54, 15, 6, NULL, NULL, NULL, '2'),
(55, 15, 2, NULL, NULL, NULL, '3'),
(56, 15, 8, NULL, NULL, NULL, '4'),
(57, 15, 9, NULL, NULL, NULL, '4'),
(58, 15, 10, NULL, NULL, NULL, '4'),
(59, 15, 12, NULL, NULL, NULL, '4'),
(60, 15, 13, NULL, NULL, NULL, '4'),
(61, 15, 17, NULL, NULL, NULL, '5'),
(62, 15, 24, NULL, NULL, NULL, '6'),
(63, 15, 25, NULL, NULL, NULL, '6'),
(64, 16, 4, NULL, NULL, NULL, '1'),
(65, 16, 6, NULL, NULL, NULL, '2'),
(66, 16, 2, NULL, NULL, NULL, '3'),
(67, 16, 8, NULL, NULL, NULL, '4'),
(68, 16, 9, NULL, NULL, NULL, '4'),
(69, 16, 10, NULL, NULL, NULL, '4'),
(70, 16, 12, NULL, NULL, NULL, '4'),
(71, 16, 13, NULL, NULL, NULL, '4'),
(72, 16, 17, NULL, NULL, NULL, '5'),
(73, 16, 24, NULL, NULL, NULL, '6'),
(74, 16, 25, NULL, NULL, NULL, '6'),
(75, 23, 4, NULL, NULL, NULL, '1'),
(76, 23, 6, NULL, NULL, NULL, '2'),
(77, 23, 2, NULL, NULL, NULL, '3'),
(78, 23, 8, NULL, NULL, NULL, '4'),
(79, 23, 9, NULL, NULL, NULL, '4'),
(80, 23, 10, NULL, NULL, NULL, '4'),
(81, 23, 12, NULL, NULL, NULL, '4'),
(82, 23, 13, NULL, NULL, NULL, '4'),
(83, 23, 17, NULL, NULL, NULL, '5'),
(84, 23, 24, NULL, NULL, NULL, '6'),
(85, 23, 25, NULL, NULL, NULL, '6'),
(86, 24, 4, NULL, NULL, NULL, '1'),
(87, 24, 4, NULL, NULL, NULL, '2'),
(88, 24, 2, NULL, NULL, NULL, '3'),
(89, 24, 9, NULL, NULL, NULL, '4'),
(90, 24, 10, NULL, NULL, NULL, '4'),
(91, 24, 11, NULL, NULL, NULL, '4'),
(92, 24, 13, NULL, NULL, NULL, '4'),
(93, 24, 18, NULL, NULL, NULL, '5'),
(94, 24, 24, NULL, NULL, NULL, '6'),
(95, 24, 25, NULL, NULL, NULL, '6'),
(96, 25, 4, NULL, NULL, NULL, '1'),
(97, 25, 4, NULL, NULL, NULL, '2'),
(98, 25, 2, NULL, NULL, NULL, '3'),
(99, 25, 9, NULL, NULL, NULL, '4'),
(100, 25, 10, NULL, NULL, NULL, '4'),
(101, 25, 11, NULL, NULL, NULL, '4'),
(102, 25, 13, NULL, NULL, NULL, '4'),
(103, 25, 18, NULL, NULL, NULL, '5'),
(104, 25, 24, NULL, NULL, NULL, '6'),
(105, 25, 25, NULL, NULL, NULL, '6'),
(106, 29, 4, NULL, NULL, NULL, '1'),
(107, 29, 4, NULL, NULL, NULL, '2'),
(108, 29, 2, NULL, NULL, NULL, '3'),
(109, 29, 9, NULL, NULL, NULL, '4'),
(110, 29, 10, NULL, NULL, NULL, '4'),
(111, 29, 11, NULL, NULL, NULL, '4'),
(112, 29, 13, NULL, NULL, NULL, '4'),
(113, 29, 18, NULL, NULL, NULL, '5'),
(114, 29, 24, NULL, NULL, NULL, '6'),
(115, 29, 25, NULL, NULL, NULL, '6'),
(116, 40, 4, NULL, NULL, NULL, '1'),
(117, 40, 4, NULL, NULL, NULL, '2'),
(118, 40, 2, NULL, NULL, NULL, '3'),
(119, 40, 9, NULL, NULL, NULL, '4'),
(120, 40, 10, NULL, NULL, NULL, '4'),
(121, 40, 11, NULL, NULL, NULL, '4'),
(122, 40, 13, NULL, NULL, NULL, '4'),
(123, 40, 18, NULL, NULL, NULL, '5'),
(124, 40, 24, NULL, NULL, NULL, '6'),
(125, 40, 25, NULL, NULL, NULL, '6'),
(126, 45, 4, NULL, NULL, NULL, '1'),
(127, 45, 2, NULL, NULL, NULL, '2'),
(128, 45, 9, NULL, NULL, NULL, '3'),
(129, 45, 10, NULL, NULL, NULL, '3'),
(130, 45, 11, NULL, NULL, NULL, '3'),
(131, 45, 13, NULL, NULL, NULL, '3'),
(132, 45, 18, NULL, NULL, NULL, '4'),
(133, 45, 24, NULL, NULL, NULL, '5'),
(134, 45, 25, NULL, NULL, NULL, '5'),
(135, 45, 21, NULL, NULL, NULL, '6'),
(136, 46, 2, NULL, NULL, NULL, '1'),
(137, 46, 8, NULL, NULL, NULL, '2'),
(138, 46, 9, NULL, NULL, NULL, '2'),
(139, 46, 10, NULL, NULL, NULL, '2'),
(140, 46, 11, NULL, NULL, NULL, '2'),
(141, 46, 18, NULL, NULL, NULL, '3'),
(142, 46, 24, NULL, NULL, NULL, '4'),
(143, 46, 25, NULL, NULL, NULL, '4'),
(144, 46, 21, NULL, NULL, NULL, '5'),
(145, 47, 5, NULL, NULL, NULL, '1'),
(146, 47, 2, NULL, NULL, NULL, '2'),
(147, 47, 9, NULL, NULL, NULL, '3'),
(148, 47, 10, NULL, NULL, NULL, '3'),
(149, 47, 19, NULL, NULL, NULL, '4'),
(150, 47, 24, NULL, NULL, NULL, '5'),
(151, 47, 25, NULL, NULL, NULL, '5'),
(152, 47, 26, NULL, NULL, NULL, '5'),
(153, 47, 21, NULL, NULL, NULL, '6'),
(154, 49, 6, NULL, NULL, NULL, '1'),
(155, 49, 2, NULL, NULL, NULL, '2'),
(156, 49, 8, NULL, NULL, NULL, '3'),
(157, 49, 9, NULL, NULL, NULL, '3'),
(158, 49, 10, NULL, NULL, NULL, '3'),
(159, 49, 18, NULL, NULL, NULL, '4'),
(160, 49, 24, NULL, NULL, NULL, '5'),
(161, 49, 21, NULL, NULL, NULL, '6'),
(162, 50, 5, NULL, NULL, NULL, '1'),
(163, 50, 2, NULL, NULL, NULL, '2'),
(164, 50, 9, NULL, NULL, NULL, '3'),
(165, 50, 10, NULL, NULL, NULL, '3'),
(166, 50, 18, NULL, NULL, NULL, '4'),
(167, 50, 23, NULL, NULL, NULL, '5'),
(168, 50, 24, NULL, NULL, NULL, '5'),
(169, 50, 25, NULL, NULL, NULL, '5'),
(170, 50, 26, NULL, NULL, NULL, '5'),
(171, 50, 20, NULL, NULL, NULL, '6'),
(172, 51, 3, NULL, NULL, NULL, '1'),
(173, 51, 8, NULL, NULL, NULL, '2'),
(174, 51, 9, NULL, NULL, NULL, '2'),
(175, 51, 10, NULL, NULL, NULL, '2'),
(176, 51, 11, NULL, NULL, NULL, '2'),
(177, 51, 18, NULL, NULL, NULL, '3'),
(178, 51, 24, NULL, NULL, NULL, '4'),
(179, 51, 21, NULL, NULL, NULL, '5'),
(180, 52, 2, NULL, NULL, NULL, '1'),
(181, 52, 9, NULL, NULL, NULL, '2'),
(182, 52, 10, NULL, NULL, NULL, '2'),
(183, 52, 11, NULL, NULL, NULL, '2'),
(184, 52, 18, NULL, NULL, NULL, '3'),
(185, 52, 24, NULL, NULL, NULL, '4'),
(186, 52, 21, NULL, NULL, NULL, '5'),
(187, 60, 5, NULL, NULL, NULL, '1'),
(188, 60, 3, NULL, NULL, NULL, '2'),
(189, 60, 9, NULL, NULL, NULL, '3'),
(190, 60, 10, NULL, NULL, NULL, '3'),
(191, 60, 11, NULL, NULL, NULL, '3'),
(192, 60, 18, NULL, NULL, NULL, '4'),
(193, 60, 24, NULL, NULL, NULL, '5'),
(194, 60, 25, NULL, NULL, NULL, '5'),
(195, 60, 26, NULL, NULL, NULL, '5'),
(196, 60, 21, NULL, NULL, NULL, '6'),
(197, 61, 5, NULL, NULL, NULL, '1'),
(198, 61, 3, NULL, NULL, NULL, '2'),
(199, 61, 9, NULL, NULL, NULL, '3'),
(200, 61, 10, NULL, NULL, NULL, '3'),
(201, 61, 11, NULL, NULL, NULL, '3'),
(202, 61, 18, NULL, NULL, NULL, '4'),
(203, 61, 24, NULL, NULL, NULL, '5'),
(204, 61, 25, NULL, NULL, NULL, '5'),
(205, 61, 26, NULL, NULL, NULL, '5'),
(206, 61, 21, NULL, NULL, NULL, '6'),
(207, 62, 5, NULL, NULL, NULL, '1'),
(208, 62, 3, NULL, NULL, NULL, '2'),
(209, 62, 8, NULL, NULL, NULL, '3'),
(210, 62, 10, NULL, NULL, NULL, '3'),
(211, 62, 11, NULL, NULL, NULL, '3'),
(212, 62, 12, NULL, NULL, NULL, '3'),
(213, 62, 13, NULL, NULL, NULL, '3'),
(214, 62, 14, NULL, NULL, NULL, '3'),
(215, 62, 18, NULL, NULL, NULL, '4'),
(216, 62, 24, NULL, NULL, NULL, '5'),
(217, 62, 25, NULL, NULL, NULL, '5'),
(218, 62, 26, NULL, NULL, NULL, '5'),
(219, 62, 21, NULL, NULL, NULL, '6');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` enum('Active','Not Active') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(2, '{\"en\":\"one\",\"ar\":\"\\u0627\\u0648\\u0644\"}', 'one', 'Not Active', '2023-05-29 12:43:57', '2023-05-29 12:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type` enum('rent','buy') DEFAULT NULL,
  `stars` int(11) DEFAULT NULL,
  `seats` int(11) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `status` enum('Active','Not Active') NOT NULL DEFAULT 'Active',
  `sort` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` enum('Active','Not Active') NOT NULL DEFAULT 'Active',
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` enum('Active','Not Active') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Egypt\",\"ar\":\"\\u0645\\u0635\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0640\\u0631\"}', 'egypt', 'Active', '2023-05-28 06:55:12', '2023-05-28 06:55:12');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` enum('Active','Not Active') NOT NULL DEFAULT 'Active',
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `must_seen` enum('seen','Not Seen') NOT NULL DEFAULT 'seen',
  `status` enum('Active','Not Active') NOT NULL DEFAULT 'Active',
  `sort` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group_location`
--

CREATE TABLE `group_location` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `group_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_apartments`
--

CREATE TABLE `hotel_apartments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `stars` int(11) DEFAULT NULL,
  `rooms` varchar(255) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `typing_live` enum('city','village') DEFAULT NULL,
  `type` enum('Hotel','Apartment') DEFAULT NULL,
  `status` enum('Active','Not Active') NOT NULL DEFAULT 'Active',
  `sort` int(11) DEFAULT NULL,
  `location` point DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type` enum('Attractions','Restaurants') DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` enum('Active','Not Active') NOT NULL DEFAULT 'Active',
  `location` point DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ltm_translations`
--

CREATE TABLE `ltm_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `locale` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `key` text NOT NULL,
  `value` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `ltm_translations`
--

INSERT INTO `ltm_translations` (`id`, `status`, `locale`, `group`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'auth', 'failed', 'بيانات الاعتماد هذه غير متطابقة مع البيانات المسجلة لدينا.', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(2, 1, 'ar', 'auth', 'password', 'كلمة المرور المستخدمة غير صحيحة.', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(3, 1, 'ar', 'auth', 'throttle', 'عدد كبير جدا من محاولات الدخول. يرجى المحاولة مرة أخرى بعد :seconds ثانية.', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(4, 1, 'ar', 'dashboard', 'Be Careful', 'Be Careful', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(5, 1, 'ar', 'dashboard', 'Delete', 'Delete', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(6, 1, 'ar', 'dashboard', 'Close', 'Close', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(7, 1, 'ar', 'dashboard', 'Search for...', 'Search for...', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(8, 1, 'ar', 'dashboard', 'This Section Contains Sensitive Data ..', 'This Section Contains Sensitive Data ..', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(9, 1, 'ar', 'dashboard', 'Basic', 'Basic', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(10, 1, 'ar', 'dashboard', 'Admins', 'Admins', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(11, 1, 'ar', 'dashboard', 'Status', 'Status', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(12, 1, 'ar', 'dashboard', 'Role', 'Role', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(13, 1, 'ar', 'dashboard', 'Start date', 'Start date', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(14, 1, 'ar', 'dashboard', 'email', 'Email', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(15, 1, 'ar', 'dashboard', 'Name', 'Name', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(16, 1, 'ar', 'dashboard', 'Create', 'Create', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(17, 1, 'ar', 'dashboard', 'asddsasda', 'Asddsasda', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(18, 1, 'ar', 'dashboard', 'Choose...', 'Choose...', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(19, 1, 'ar', 'dashboard', 'Elyssa Smitham Sr.', 'Elyssa Smitham Sr.', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(20, 1, 'ar', 'dashboard', 'Karelle Schiller', 'Karelle Schiller', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(21, 1, 'ar', 'dashboard', 'Providenci Kuhn', 'Providenci Kuhn', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(22, 1, 'ar', 'dashboard', 'Miss Alfreda Barton PhD', 'Miss Alfreda Barton PhD', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(23, 1, 'ar', 'dashboard', 'hatem', 'Hatem', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(24, 1, 'ar', 'dashboard', 'Admin', 'Admin', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(25, 1, 'ar', 'dashboard', 'Create Admins', 'Create Admins', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(26, 1, 'ar', 'dashboard', 'dsads', 'Dsads', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(27, 1, 'ar', 'dashboard', 'Actions', 'Actions', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(28, 1, 'ar', 'dashboard', 'Role Name', 'Role Name', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(29, 1, 'ar', 'dashboard', 'Show', 'Show', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(30, 1, 'ar', 'dashboard', 'Roles', 'Roles', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(31, 1, 'ar', 'dashboard', 'Create Roles', 'Create Roles', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(32, 1, 'ar', 'dashboard', 'New\n                                Roles', 'New\n                                Roles', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(33, 1, 'ar', 'dashboard', 'Submit', 'Submit', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(34, 1, 'ar', 'dashboard', 'name Roles', 'Name Roles', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(35, 1, 'ar', 'dashboard', 'back', 'Back', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(36, 1, 'ar', 'dashboard', 'Permissions', 'Permissions', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(37, 1, 'ar', 'dashboard', 'Index Roles', 'Index Roles', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(38, 1, 'ar', 'dashboard', 'Back', 'Back', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(39, 1, 'ar', 'dashboard', 'Show Roles', 'Show Roles', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(40, 1, 'ar', 'dashboard', 'Role Name :', 'Role Name :', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(41, 1, 'ar', 'dashboard', 'Cancel', 'Cancel', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(42, 1, 'ar', 'dashboard', 'Error 404', 'Error 404', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(43, 1, 'ar', 'dashboard', 'Chelsey Schaefer', 'Chelsey Schaefer', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(44, 1, 'ar', 'dashboard', 'Please Choose Role', 'Please Choose Role', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(45, 1, 'ar', 'dashboard', 'Jairo Carter DDS', 'Jairo Carter DDS', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(46, 1, 'ar', 'dashboard', 'Elena Kunze', 'Elena Kunze', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(47, 1, 'ar', 'dashboard', 'Stephanie Gorczany', 'Stephanie Gorczany', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(48, 1, 'ar', 'dashboard', 'Select roles', 'Select roles', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(49, 1, 'ar', 'dashboard', 'Jerald Emmerich', 'Jerald Emmerich', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(50, 1, 'ar', 'dashboard', 'Please Upload file Image', 'Please Upload file Image', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(51, 1, 'ar', 'dashboard', 'Default file input Image', 'Default file input Image', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(52, 1, 'ar', 'dashboard', 'Dr. Sabryna Gorczany', 'Dr. Sabryna Gorczany', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(53, 1, 'ar', 'dashboard', 'Audra Treutel', 'Audra Treutel', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(54, 1, 'ar', 'dashboard', 'Jennings Bernhard', 'Jennings Bernhard', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(55, 1, 'ar', 'dashboard', 'Lorena Crooks', 'Lorena Crooks', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(56, 1, 'ar', 'dashboard', 'Please Choose State', 'Please Choose State', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(57, 1, 'ar', 'dashboard', 'Gust Parker', 'Gust Parker', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(58, 1, 'ar', 'dashboard', 'Magali Hauck', 'Magali Hauck', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(59, 1, 'ar', 'dashboard', 'Shemar Padberg', 'Shemar Padberg', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(60, 1, 'ar', 'dashboard', 'processes', 'Processes', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(61, 1, 'ar', 'dashboard', 'english', 'English', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(62, 1, 'ar', 'dashboard', 'Form Country', 'Form Country', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(63, 1, 'ar', 'dashboard', 'State', 'State', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(64, 1, 'ar', 'dashboard', 'arabic', 'Arabic', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(65, 1, 'ar', 'dashboard', 'Index Country', 'Index Country', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(66, 1, 'ar', 'dashboard', 'Long', 'Long', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(67, 1, 'ar', 'dashboard', 'Lat', 'Lat', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(68, 1, 'ar', 'dashboard', 'Slug', 'Slug', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(69, 1, 'ar', 'dashboard', 'Country', 'Country', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(70, 1, 'ar', 'dashboard', 'Create Country', 'Create Country', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(71, 1, 'ar', 'dashboard', 'Vance Schulist MD', 'Vance Schulist MD', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(72, 1, 'ar', 'dashboard', 'Created at', 'Created at', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(73, 1, 'ar', 'dashboard', 'Noemi Stehr', 'Noemi Stehr', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(74, 1, 'ar', 'dashboard', 'Nyasia Lueilwitz MD', 'Nyasia Lueilwitz MD', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(75, 1, 'ar', 'dashboard', 'Josefina Mills V', 'Josefina Mills V', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(76, 1, 'ar', 'dashboard', 'Form Admin', 'Form Admin', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(77, 1, 'ar', 'dashboard', 'Index Admin', 'Index Admin', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(78, 1, 'ar', 'dashboard', '', '', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(79, 1, 'ar', 'dashboard', 'Please Enter Admin Confirm Password', 'Please Enter Admin Confirm Password', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(80, 1, 'ar', 'dashboard', 'confirm Password', 'Confirm Password', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(81, 1, 'ar', 'dashboard', 'City', 'City', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(82, 1, 'ar', 'dashboard', 'Create City', 'Create City', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(83, 1, 'ar', 'dashboard', 'Form City', 'Form City', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(84, 1, 'ar', 'dashboard', 'Index City', 'Index City', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(85, 1, 'ar', 'dashboard', 'Please Choose Country', 'Please Choose Country', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(86, 1, 'ar', 'dashboard', 'District', 'District', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(87, 1, 'ar', 'dashboard', 'Create District', 'Create District', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(88, 1, 'ar', 'dashboard', 'Form District', 'Form District', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(89, 1, 'ar', 'dashboard', 'Please Choose City', 'Please Choose City', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(90, 1, 'ar', 'dashboard', 'Index District', 'Index District', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(91, 1, 'ar', 'dashboard', 'Please Enter Admin Password', 'Please Enter Admin Password', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(92, 1, 'ar', 'dashboard', 'Password', 'Password', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(93, 1, 'ar', 'dashboard', 'Public Transportation', 'Public Transportation', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(94, 1, 'ar', 'dashboard', 'Sort', 'Sort', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(95, 1, 'ar', 'dashboard', 'Form Public Transportation', 'Form Public Transportation', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(96, 1, 'ar', 'dashboard', 'Index Public Transportation', 'Index Public Transportation', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(97, 1, 'ar', 'dashboard', 'Price', 'Price', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(98, 1, 'ar', 'dashboard', 'Please Choose District', 'Please Choose District', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(99, 1, 'ar', 'dashboard', 'Days', 'Days', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(100, 1, 'ar', 'dashboard', 'Create Public Transportation', 'Create Public Transportation', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(101, 1, 'ar', 'dashboard', 'Type', 'Type', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(102, 1, 'ar', 'dashboard', 'Form Public Transportation City', 'Form Public Transportation City', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(103, 1, 'ar', 'dashboard', 'Please Choose Type', 'Please Choose Type', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(104, 1, 'ar', 'dashboard', 'Index Public Transportation City', 'Index Public Transportation City', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(105, 1, 'ar', 'dashboard', 'City To', 'City To', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(106, 1, 'ar', 'dashboard', 'City From', 'City From', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(107, 1, 'ar', 'dashboard', 'Public Transportation City', 'Public Transportation City', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(108, 1, 'ar', 'dashboard', 'Create Public Transportation City', 'Create Public Transportation City', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(109, 1, 'ar', 'dashboard', 'Error 403', 'Error 403', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(110, 1, 'ar', 'dashboard', 'Seats', 'Seats', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(111, 1, 'ar', 'dashboard', 'Stars', 'Stars', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(112, 1, 'ar', 'dashboard', 'Cars', 'Cars', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(113, 1, 'ar', 'dashboard', 'Form Cars', 'Form Cars', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(114, 1, 'ar', 'dashboard', 'Index Cars', 'Index Cars', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(115, 1, 'ar', 'dashboard', 'Create Cars', 'Create Cars', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(116, 1, 'ar', 'dashboard', 'type', 'Type', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(117, 1, 'ar', 'dashboard', 'typing_live', 'Typing live', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(118, 1, 'ar', 'dashboard', 'rooms', 'Rooms', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(119, 1, 'ar', 'dashboard', 'Hotel', 'Hotel', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(120, 1, 'ar', 'dashboard', 'Create Hotel', 'Create Hotel', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(121, 1, 'ar', 'dashboard', 'Please Choose Typing Live', 'Please Choose Typing Live', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(122, 1, 'ar', 'dashboard', 'Typing Live', 'Typing Live', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(123, 1, 'ar', 'dashboard', 'Form Hotel', 'Form Hotel', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(124, 1, 'ar', 'dashboard', 'Index Hotel', 'Index Hotel', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(125, 1, 'ar', 'dashboard', 'Apartment', 'Apartment', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(126, 1, 'ar', 'dashboard', 'Form Apartment', 'Form Apartment', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(127, 1, 'ar', 'dashboard', 'Create Apartment', 'Create Apartment', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(128, 1, 'ar', 'dashboard', 'Index Apartment', 'Index Apartment', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(129, 1, 'ar', 'dashboard', 'Location', 'Location', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(130, 1, 'ar', 'dashboard', 'Form Location', 'Form Location', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(131, 1, 'ar', 'dashboard', 'Create Location', 'Create Location', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(132, 1, 'ar', 'dashboard', 'Index Location', 'Index Location', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(133, 1, 'ar', 'dashboard', 'Must Seen', 'Must Seen', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(134, 1, 'ar', 'dashboard', 'Group', 'Group', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(135, 1, 'ar', 'dashboard', 'Form Group', 'Form Group', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(136, 1, 'ar', 'dashboard', 'Index Group', 'Index Group', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(137, 1, 'ar', 'dashboard', 'Please Choose Must Seen', 'Please Choose Must Seen', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(138, 1, 'ar', 'dashboard', 'Create Group', 'Create Group', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(139, 1, 'ar', 'dashboard', 'Tag', 'Tag', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(140, 1, 'ar', 'dashboard', 'Create Tag', 'Create Tag', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(141, 1, 'ar', 'dashboard', 'Form Tag', 'Form Tag', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(142, 1, 'ar', 'dashboard', 'Index Tag', 'Index Tag', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(143, 1, 'ar', 'dashboard', 'group_id', 'Group id', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(144, 1, 'ar', 'dashboard', 'location_id', 'Location id', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(145, 1, 'ar', 'dashboard', 'Group Location', 'Group Location', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(146, 1, 'ar', 'dashboard', 'Create Group Location', 'Create Group Location', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(147, 1, 'ar', 'dashboard', 'Form Group Location', 'Form Group Location', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(148, 1, 'ar', 'dashboard', 'Index Group Location', 'Index Group Location', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(149, 1, 'ar', 'dashboard', 'Please Choose group_id', 'Please Choose group id', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(150, 1, 'ar', 'dashboard', 'Please Choose location_id', 'Please Choose location id', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(151, 1, 'ar', 'dashboard', 'Please Choose Group', 'Please Choose Group', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(152, 1, 'ar', 'dashboard', 'Please Choose Location', 'Please Choose Location', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(153, 1, 'ar', 'dashboard', 'Tag Group', 'Tag Group', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(154, 1, 'ar', 'dashboard', 'Please Choose Tag', 'Please Choose Tag', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(155, 1, 'ar', 'dashboard', 'Create Tag Group', 'Create Tag Group', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(156, 1, 'ar', 'dashboard', 'Form Tag Group', 'Form Tag Group', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(157, 1, 'ar', 'dashboard', 'Index Tag Group', 'Index Tag Group', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(158, 1, 'ar', 'dashboard', 'Email', 'Email', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(159, 1, 'ar', 'dashboard', 'Gender', 'Gender', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(160, 1, 'ar', 'dashboard', 'Mobile', 'Mobile', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(161, 1, 'ar', 'dashboard', 'Address', 'Address', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(162, 1, 'ar', 'dashboard', 'Users', 'Users', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(163, 1, 'ar', 'dashboard', 'Create Users', 'Create Users', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(164, 1, 'ar', 'dashboard', 'Form Users', 'Form Users', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(165, 1, 'ar', 'dashboard', 'Index Users', 'Index Users', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(166, 1, 'ar', 'dashboard', 'Please Choose Gender', 'Please Choose Gender', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(167, 1, 'ar', 'dashboard', 'Coralie Ruecker', 'Coralie Ruecker', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(168, 1, 'ar', 'dashboard', 'Hatem', 'Hatem', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(169, 1, 'ar', 'dashboard', 'ayman', 'Ayman', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(170, 1, 'ar', 'dashboard', 'Form setting', 'Form setting', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(171, 1, 'ar', 'dashboard', 'Index setting', 'Index setting', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(172, 1, 'ar', 'dashboard', 'Data', 'Data', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(173, 1, 'ar', 'dashboard', 'Social Media', 'Social Media', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(174, 1, 'ar', 'dashboard', 'Rosie Fay', 'Rosie Fay', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(175, 1, 'ar', 'dashboard', 'Ruby Windler', 'Ruby Windler', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(176, 1, 'ar', 'dashboard', 'Create Social Media', 'Create Social Media', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(177, 1, 'ar', 'dashboard', 'Form Social Media', 'Form Social Media', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(178, 1, 'ar', 'dashboard', 'Index Social Media', 'Index Social Media', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(179, 1, 'ar', 'dashboard', 'Edit', 'Edit', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(180, 1, 'ar', 'dashboard', 'admin.socialMedia.edit', 'Admin.socialMedia.edit', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(181, 1, 'ar', 'dashboard', 'Edit Social Media', 'Edit Social Media', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(182, 1, 'ar', 'dashboard', 'Miss Eleanore O\'Connell', 'Miss Eleanore O Connell', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(183, 1, 'ar', 'dashboard', 'Image', 'Image', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(184, 1, 'ar', 'dashboard', 'Banner', 'Banner', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(185, 1, 'ar', 'dashboard', 'Form Banner', 'Form Banner', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(186, 1, 'ar', 'dashboard', 'Index Banner', 'Index Banner', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(187, 1, 'ar', 'dashboard', 'Create Banner', 'Create Banner', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(188, 1, 'ar', 'dashboard', 'Eusebio Herzog', 'Eusebio Herzog', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(189, 1, 'ar', 'dashboard', 'Miss Estella Wisoky', 'Miss Estella Wisoky', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(190, 1, 'ar', 'dashboard', 'Gordon Ferry DDS', 'Gordon Ferry DDS', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(191, 1, 'ar', 'dashboard', 'Dr. Obie Harber II', 'Dr. Obie Harber II', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(192, 1, 'ar', 'dashboard', 'Felipa Connelly I', 'Felipa Connelly I', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(193, 1, 'ar', 'dashboard', 'frontend', 'Frontend', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(194, 1, 'ar', 'dashboard', 'Jonas Wuckert III', 'Jonas Wuckert III', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(195, 1, 'ar', 'dashboard', 'Camille Hilpert', 'Camille Hilpert', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(196, 1, 'ar', 'dashboard', 'Kyla Mohr II', 'Kyla Mohr II', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(197, 1, 'ar', 'dashboard', 'Alexane Volkman', 'Alexane Volkman', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(198, 1, 'ar', 'dashboard', 'Miss Vita Kuhlman', 'Miss Vita Kuhlman', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(199, 1, 'ar', 'dashboard', 'Kasandra Macejkovic', 'Kasandra Macejkovic', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(200, 1, 'ar', 'dashboard', 'Jodie Mayer', 'Jodie Mayer', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(201, 1, 'ar', 'dashboard', 'Hosea Kulas', 'Hosea Kulas', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(202, 1, 'ar', 'dashboard', 'Edmund Nikolaus DDS', 'Edmund Nikolaus DDS', '2023-05-31 09:37:00', '2023-05-31 09:37:00'),
(203, 1, 'ar', 'dashboard', 'Question', 'Question', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(204, 1, 'ar', 'dashboard', 'Create Question', 'Create Question', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(205, 1, 'ar', 'pagination', 'next', 'التالي &raquo;', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(206, 1, 'ar', 'pagination', 'previous', '&laquo; السابق', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(207, 1, 'ar', 'passwords', 'reset', 'تمت إعادة تعيين كلمة المرور!', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(208, 1, 'ar', 'passwords', 'sent', 'تم إرسال تفاصيل استعادة كلمة المرور الخاصة بك إلى بريدك الإلكتروني!', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(209, 1, 'ar', 'passwords', 'throttled', 'الرجاء الانتظار قبل إعادة المحاولة.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(210, 1, 'ar', 'passwords', 'token', 'رمز استعادة كلمة المرور الذي أدخلته غير صحيح.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(211, 1, 'ar', 'passwords', 'user', 'لم يتم العثور على أيّ حسابٍ بهذا العنوان الإلكتروني.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(212, 1, 'ar', 'validation', 'accepted', 'يجب قبول :attribute.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(213, 1, 'ar', 'validation', 'accepted_if', 'يجب قبول :attribute في حالة :other يساوي :value.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(214, 1, 'ar', 'validation', 'active_url', 'حقل :attribute لا يُمثّل رابطًا صحيحًا.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(215, 1, 'ar', 'validation', 'after', 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(216, 1, 'ar', 'validation', 'after_or_equal', 'حقل :attribute يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(217, 1, 'ar', 'validation', 'alpha', 'يجب أن لا يحتوي حقل :attribute سوى على حروف.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(218, 1, 'ar', 'validation', 'alpha_dash', 'يجب أن لا يحتوي حقل :attribute سوى على حروف، أرقام ومطّات.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(219, 1, 'ar', 'validation', 'alpha_num', 'يجب أن يحتوي حقل :attribute على حروفٍ وأرقامٍ فقط.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(220, 1, 'ar', 'validation', 'array', 'يجب أن يكون حقل :attribute ًمصفوفة.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(221, 1, 'ar', 'validation', 'attached', 'حقل :attribute تم إرفاقه بالفعل.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(222, 1, 'ar', 'validation', 'before', 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(223, 1, 'ar', 'validation', 'before_or_equal', 'حقل :attribute يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(224, 1, 'ar', 'validation', 'between.array', 'يجب أن يحتوي حقل :attribute على عدد من العناصر بين :min و :max.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(225, 1, 'ar', 'validation', 'between.file', 'يجب أن يكون حجم ملف حقل :attribute بين :min و :max كيلوبايت.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(226, 1, 'ar', 'validation', 'between.numeric', 'يجب أن تكون قيمة حقل :attribute بين :min و :max.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(227, 1, 'ar', 'validation', 'between.string', 'يجب أن يكون عدد حروف نّص حقل :attribute بين :min و :max.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(228, 1, 'ar', 'validation', 'boolean', 'يجب أن تكون قيمة حقل :attribute إما true أو false .', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(229, 1, 'ar', 'validation', 'confirmed', 'حقل التأكيد غير مُطابق للحقل :attribute.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(230, 1, 'ar', 'validation', 'current_password', 'كلمة المرور غير صحيحة.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(231, 1, 'ar', 'validation', 'date', 'حقل :attribute ليس تاريخًا صحيحًا.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(232, 1, 'ar', 'validation', 'date_equals', 'يجب أن يكون حقل :attribute مطابقاً للتاريخ :date.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(233, 1, 'ar', 'validation', 'date_format', 'لا يتوافق حقل :attribute مع الشكل :format.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(234, 1, 'ar', 'validation', 'different', 'يجب أن يكون الحقلان :attribute و :other مُختلفين.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(235, 1, 'ar', 'validation', 'digits', 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(236, 1, 'ar', 'validation', 'digits_between', 'يجب أن يحتوي حقل :attribute بين :min و :max رقمًا/أرقام .', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(237, 1, 'ar', 'validation', 'dimensions', 'الحقل:attribute يحتوي على أبعاد صورة غير صالحة.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(238, 1, 'ar', 'validation', 'distinct', 'للحقل :attribute قيمة مُكرّرة.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(239, 1, 'ar', 'validation', 'email', 'يجب أن يكون حقل :attribute عنوان بريد إلكتروني صحيح البُنية.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(240, 1, 'ar', 'validation', 'ends_with', 'يجب أن ينتهي حقل :attribute بأحد القيم التالية: :values', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(241, 1, 'ar', 'validation', 'exists', 'القيمة المحددة :attribute غير موجودة.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(242, 1, 'ar', 'validation', 'file', 'الحقل :attribute يجب أن يكون ملفا.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(243, 1, 'ar', 'validation', 'filled', 'حقل :attribute إجباري.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(244, 1, 'ar', 'validation', 'gt.array', 'يجب أن يحتوي حقل :attribute على أكثر من :value عناصر/عنصر.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(245, 1, 'ar', 'validation', 'gt.file', 'يجب أن يكون حجم ملف حقل :attribute أكبر من :value كيلوبايت.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(246, 1, 'ar', 'validation', 'gt.numeric', 'يجب أن تكون قيمة حقل :attribute أكبر من :value.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(247, 1, 'ar', 'validation', 'gt.string', 'يجب أن يكون طول نّص حقل :attribute أكثر من :value حروفٍ/حرفًا.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(248, 1, 'ar', 'validation', 'gte.array', 'يجب أن يحتوي حقل :attribute على الأقل على :value عُنصرًا/عناصر.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(249, 1, 'ar', 'validation', 'gte.file', 'يجب أن يكون حجم ملف حقل :attribute على الأقل :value كيلوبايت.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(250, 1, 'ar', 'validation', 'gte.numeric', 'يجب أن تكون قيمة حقل :attribute مساوية أو أكبر من :value.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(251, 1, 'ar', 'validation', 'gte.string', 'يجب أن يكون طول نص حقل :attribute على الأقل :value حروفٍ/حرفًا.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(252, 1, 'ar', 'validation', 'image', 'يجب أن يكون حقل :attribute صورةً.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(253, 1, 'ar', 'validation', 'in', 'حقل :attribute غير موجود.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(254, 1, 'ar', 'validation', 'in_array', 'حقل :attribute غير موجود في :other.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(255, 1, 'ar', 'validation', 'integer', 'يجب أن يكون حقل :attribute عددًا صحيحًا.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(256, 1, 'ar', 'validation', 'ip', 'يجب أن يكون حقل :attribute عنوان IP صحيحًا.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(257, 1, 'ar', 'validation', 'ipv4', 'يجب أن يكون حقل :attribute عنوان IPv4 صحيحًا.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(258, 1, 'ar', 'validation', 'ipv6', 'يجب أن يكون حقل :attribute عنوان IPv6 صحيحًا.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(259, 1, 'ar', 'validation', 'json', 'يجب أن يكون حقل :attribute نصًا من نوع JSON.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(260, 1, 'ar', 'validation', 'lt.array', 'يجب أن يحتوي حقل :attribute على أقل من :value عناصر/عنصر.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(261, 1, 'ar', 'validation', 'lt.file', 'يجب أن يكون حجم ملف حقل :attribute أصغر من :value كيلوبايت.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(262, 1, 'ar', 'validation', 'lt.numeric', 'يجب أن تكون قيمة حقل :attribute أصغر من :value.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(263, 1, 'ar', 'validation', 'lt.string', 'يجب أن يكون طول نّص حقل :attribute أقل من :value حروفٍ/حرفًا.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(264, 1, 'ar', 'validation', 'lte.array', 'يجب أن لا يحتوي حقل :attribute على أكثر من :value عناصر/عنصر.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(265, 1, 'ar', 'validation', 'lte.file', 'يجب أن لا يتجاوز حجم ملف حقل :attribute :value كيلوبايت.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(266, 1, 'ar', 'validation', 'lte.numeric', 'يجب أن تكون قيمة حقل :attribute مساوية أو أصغر من :value.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(267, 1, 'ar', 'validation', 'lte.string', 'يجب أن لا يتجاوز طول نّص حقل :attribute :value حروفٍ/حرفًا.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(268, 1, 'ar', 'validation', 'max.array', 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(269, 1, 'ar', 'validation', 'max.file', 'يجب أن لا يتجاوز حجم ملف حقل :attribute :max كيلوبايت.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(270, 1, 'ar', 'validation', 'max.numeric', 'يجب أن تكون قيمة حقل :attribute مساوية أو أصغر من :max.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(271, 1, 'ar', 'validation', 'max.string', 'يجب أن لا يتجاوز طول نّص حقل :attribute :max حروفٍ/حرفًا.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(272, 1, 'ar', 'validation', 'mimes', 'يجب أن يكون ملفًا من نوع : :values.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(273, 1, 'ar', 'validation', 'mimetypes', 'يجب أن يكون ملفًا من نوع : :values.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(274, 1, 'ar', 'validation', 'min.array', 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(275, 1, 'ar', 'validation', 'min.file', 'يجب أن يكون حجم ملف حقل :attribute على الأقل :min كيلوبايت.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(276, 1, 'ar', 'validation', 'min.numeric', 'يجب أن تكون قيمة حقل :attribute مساوية أو أكبر من :min.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(277, 1, 'ar', 'validation', 'min.string', 'يجب أن يكون طول نص حقل :attribute على الأقل :min حروفٍ/حرفًا.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(278, 1, 'ar', 'validation', 'multiple_of', 'حقل :attribute يجب أن يكون من مضاعفات :value', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(279, 1, 'ar', 'validation', 'not_in', 'عنصر الحقل :attribute غير صحيح.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(280, 1, 'ar', 'validation', 'not_regex', 'صيغة حقل :attribute غير صحيحة.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(281, 1, 'ar', 'validation', 'numeric', 'يجب على حقل :attribute أن يكون رقمًا.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(282, 1, 'ar', 'validation', 'password', 'كلمة المرور غير صحيحة.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(283, 1, 'ar', 'validation', 'present', 'يجب تقديم حقل :attribute.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(284, 1, 'ar', 'validation', 'prohibited', 'حقل :attribute محظور.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(285, 1, 'ar', 'validation', 'prohibited_if', 'حقل :attribute محظور إذا كان :other هو :value.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(286, 1, 'ar', 'validation', 'prohibited_unless', 'حقل :attribute محظور ما لم يكن :other ضمن :values.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(287, 1, 'ar', 'validation', 'prohibits', 'The :attribute field prohibits :other from being present.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(288, 1, 'ar', 'validation', 'regex', 'صيغة حقل :attribute .غير صحيحة.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(289, 1, 'ar', 'validation', 'relatable', 'حقل :attribute قد لا يكون مرتبطا بالمصدر المحدد.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(290, 1, 'ar', 'validation', 'required', 'حقل :attribute مطلوب.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(291, 1, 'ar', 'validation', 'required_if', 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(292, 1, 'ar', 'validation', 'required_unless', 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(293, 1, 'ar', 'validation', 'required_with', 'حقل :attribute مطلوب إذا توفّر :values.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(294, 1, 'ar', 'validation', 'required_with_all', 'حقل :attribute مطلوب إذا توفّر :values.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(295, 1, 'ar', 'validation', 'required_without', 'حقل :attribute مطلوب إذا لم يتوفّر :values.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(296, 1, 'ar', 'validation', 'required_without_all', 'حقل :attribute مطلوب إذا لم يتوفّر :values.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(297, 1, 'ar', 'validation', 'same', 'يجب أن يتطابق حقل :attribute مع :other.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(298, 1, 'ar', 'validation', 'size.array', 'يجب أن يحتوي حقل :attribute على :size عنصرٍ/عناصر بالضبط.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(299, 1, 'ar', 'validation', 'size.file', 'يجب أن يكون حجم ملف حقل :attribute :size كيلوبايت.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(300, 1, 'ar', 'validation', 'size.numeric', 'يجب أن تكون قيمة حقل :attribute مساوية لـ :size.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(301, 1, 'ar', 'validation', 'size.string', 'يجب أن يحتوي نص حقل :attribute على :size حروفٍ/حرفًا بالضبط.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(302, 1, 'ar', 'validation', 'starts_with', 'يجب أن يبدأ حقل :attribute بأحد القيم التالية: :values', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(303, 1, 'ar', 'validation', 'string', 'يجب أن يكون حقل :attribute نصًا.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(304, 1, 'ar', 'validation', 'timezone', 'يجب أن يكون حقل :attribute نطاقًا زمنيًا صحيحًا.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(305, 1, 'ar', 'validation', 'unique', 'قيمة حقل :attribute مُستخدمة من قبل.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(306, 1, 'ar', 'validation', 'uploaded', 'فشل في تحميل الـ :attribute.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(307, 1, 'ar', 'validation', 'url', 'صيغة رابط حقل :attribute غير صحيحة.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(308, 1, 'ar', 'validation', 'uuid', 'حقل :attribute يجب أن يكون بصيغة UUID سليمة.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(309, 1, 'ar', 'validation', 'custom.attribute-name.rule-name', 'custom-message', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(310, 1, 'ar', 'validation', 'attributes.address', 'العنوان', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(311, 1, 'ar', 'validation', 'attributes.age', 'العمر', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(312, 1, 'ar', 'validation', 'attributes.available', 'مُتاح', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(313, 1, 'ar', 'validation', 'attributes.city', 'المدينة', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(314, 1, 'ar', 'validation', 'attributes.content', 'المُحتوى', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(315, 1, 'ar', 'validation', 'attributes.country', 'الدولة', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(316, 1, 'ar', 'validation', 'attributes.date', 'التاريخ', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(317, 1, 'ar', 'validation', 'attributes.day', 'اليوم', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(318, 1, 'ar', 'validation', 'attributes.description', 'الوصف', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(319, 1, 'ar', 'validation', 'attributes.email', 'البريد الالكتروني', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(320, 1, 'ar', 'validation', 'attributes.excerpt', 'المُلخص', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(321, 1, 'ar', 'validation', 'attributes.first_name', 'الاسم الأول', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(322, 1, 'ar', 'validation', 'attributes.gender', 'النوع', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(323, 1, 'ar', 'validation', 'attributes.hour', 'ساعة', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(324, 1, 'ar', 'validation', 'attributes.last_name', 'اسم العائلة', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(325, 1, 'ar', 'validation', 'attributes.minute', 'دقيقة', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(326, 1, 'ar', 'validation', 'attributes.mobile', 'الجوال', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(327, 1, 'ar', 'validation', 'attributes.month', 'الشهر', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(328, 1, 'ar', 'validation', 'attributes.name', 'الاسم', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(329, 1, 'ar', 'validation', 'attributes.password', 'كلمة المرور', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(330, 1, 'ar', 'validation', 'attributes.password_confirmation', 'تأكيد كلمة المرور', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(331, 1, 'ar', 'validation', 'attributes.phone', 'الهاتف', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(332, 1, 'ar', 'validation', 'attributes.second', 'ثانية', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(333, 1, 'ar', 'validation', 'attributes.sex', 'الجنس', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(334, 1, 'ar', 'validation', 'attributes.size', 'الحجم', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(335, 1, 'ar', 'validation', 'attributes.time', 'الوقت', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(336, 1, 'ar', 'validation', 'attributes.title', 'العنوان', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(337, 1, 'ar', 'validation', 'attributes.username', 'اسم المُستخدم', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(338, 1, 'ar', 'validation', 'attributes.year', 'السنة', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(339, 1, 'en', 'auth', 'failed', 'These credentials do not match our records.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(340, 1, 'en', 'auth', 'password', 'The provided password is incorrect.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(341, 1, 'en', 'auth', 'throttle', 'Too many login attempts. Please try again in :seconds seconds.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(342, 1, 'en', 'dashboard', 'Be Careful', 'Be Careful', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(343, 1, 'en', 'dashboard', 'Delete', 'Delete', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(344, 1, 'en', 'dashboard', 'Close', 'Close', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(345, 1, 'en', 'dashboard', 'Search for...', 'Search for...', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(346, 1, 'en', 'dashboard', 'This Section Contains Sensitive Data ..', 'This Section Contains Sensitive Data ..', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(347, 1, 'en', 'dashboard', 'Basic', 'Basic', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(348, 1, 'en', 'dashboard', 'Admins', 'Admins', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(349, 1, 'en', 'dashboard', 'Status', 'Status', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(350, 1, 'en', 'dashboard', 'Role', 'Role', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(351, 1, 'en', 'dashboard', 'Start date', 'Start date', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(352, 1, 'en', 'dashboard', 'email', 'Email', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(353, 1, 'en', 'dashboard', 'Name', 'Name', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(354, 1, 'en', 'dashboard', 'Create', 'Create', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(355, 1, 'en', 'dashboard', 'asddsasda', 'Asddsasda', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(356, 1, 'en', 'dashboard', 'Choose...', 'Choose...', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(357, 1, 'en', 'dashboard', 'Elyssa Smitham Sr.', 'Elyssa Smitham Sr.', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(358, 1, 'en', 'dashboard', 'Karelle Schiller', 'Karelle Schiller', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(359, 1, 'en', 'dashboard', 'Providenci Kuhn', 'Providenci Kuhn', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(360, 1, 'en', 'dashboard', 'Miss Alfreda Barton PhD', 'Miss Alfreda Barton PhD', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(361, 1, 'en', 'dashboard', 'hatem', 'Hatem', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(362, 1, 'en', 'dashboard', 'Admin', 'Admin', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(363, 1, 'en', 'dashboard', 'Create Admins', 'Create Admins', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(364, 1, 'en', 'dashboard', 'dsads', 'Dsads', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(365, 1, 'en', 'dashboard', 'Actions', 'Actions', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(366, 1, 'en', 'dashboard', 'Role Name', 'Role Name', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(367, 1, 'en', 'dashboard', 'Show', 'Show', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(368, 1, 'en', 'dashboard', 'Roles', 'Roles', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(369, 1, 'en', 'dashboard', 'Create Roles', 'Create Roles', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(370, 1, 'en', 'dashboard', 'New\n                                Roles', 'New\n                                Roles', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(371, 1, 'en', 'dashboard', 'Submit', 'Submit', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(372, 1, 'en', 'dashboard', 'name Roles', 'Name Roles', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(373, 1, 'en', 'dashboard', 'back', 'Back', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(374, 1, 'en', 'dashboard', 'Permissions', 'Permissions', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(375, 1, 'en', 'dashboard', 'Index Roles', 'Index Roles', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(376, 1, 'en', 'dashboard', 'Back', 'Back', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(377, 1, 'en', 'dashboard', 'Show Roles', 'Show Roles', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(378, 1, 'en', 'dashboard', 'Role Name :', 'Role Name :', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(379, 1, 'en', 'dashboard', 'Cancel', 'Cancel', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(380, 1, 'en', 'dashboard', 'Error 404', 'Error 404', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(381, 1, 'en', 'dashboard', 'Chelsey Schaefer', 'Chelsey Schaefer', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(382, 1, 'en', 'dashboard', 'Please Choose Role', 'Please Choose Role', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(383, 1, 'en', 'dashboard', 'Jairo Carter DDS', 'Jairo Carter DDS', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(384, 1, 'en', 'dashboard', 'Elena Kunze', 'Elena Kunze', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(385, 1, 'en', 'dashboard', 'Stephanie Gorczany', 'Stephanie Gorczany', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(386, 1, 'en', 'dashboard', 'Select roles', 'Select roles', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(387, 1, 'en', 'dashboard', 'Jerald Emmerich', 'Jerald Emmerich', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(388, 1, 'en', 'dashboard', 'Please Upload file Image', 'Please Upload file Image', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(389, 1, 'en', 'dashboard', 'Default file input Image', 'Default file input Image', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(390, 1, 'en', 'dashboard', 'Dr. Sabryna Gorczany', 'Dr. Sabryna Gorczany', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(391, 1, 'en', 'dashboard', 'Audra Treutel', 'Audra Treutel', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(392, 1, 'en', 'dashboard', 'Jennings Bernhard', 'Jennings Bernhard', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(393, 1, 'en', 'dashboard', 'Lorena Crooks', 'Lorena Crooks', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(394, 1, 'en', 'dashboard', 'Please Choose State', 'Please Choose State', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(395, 1, 'en', 'dashboard', 'Gust Parker', 'Gust Parker', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(396, 1, 'en', 'dashboard', 'Magali Hauck', 'Magali Hauck', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(397, 1, 'en', 'dashboard', 'Shemar Padberg', 'Shemar Padberg', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(398, 1, 'en', 'dashboard', 'processes', 'Processes', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(399, 1, 'en', 'dashboard', 'english', 'English', '2023-05-31 09:37:01', '2023-05-31 09:37:01'),
(400, 1, 'en', 'dashboard', 'Form Country', 'Form Country', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(401, 1, 'en', 'dashboard', 'State', 'State', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(402, 1, 'en', 'dashboard', 'arabic', 'Arabic', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(403, 1, 'en', 'dashboard', 'Index Country', 'Index Country', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(404, 1, 'en', 'dashboard', 'Long', 'Long', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(405, 1, 'en', 'dashboard', 'Lat', 'Lat', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(406, 1, 'en', 'dashboard', 'Slug', 'Slug', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(407, 1, 'en', 'dashboard', 'Country', 'Country', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(408, 1, 'en', 'dashboard', 'Create Country', 'Create Country', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(409, 1, 'en', 'dashboard', 'Vance Schulist MD', 'Vance Schulist MD', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(410, 1, 'en', 'dashboard', 'Created at', 'Created at', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(411, 1, 'en', 'dashboard', 'Noemi Stehr', 'Noemi Stehr', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(412, 1, 'en', 'dashboard', 'Nyasia Lueilwitz MD', 'Nyasia Lueilwitz MD', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(413, 1, 'en', 'dashboard', 'Josefina Mills V', 'Josefina Mills V', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(414, 1, 'en', 'dashboard', 'Form Admin', 'Form Admin', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(415, 1, 'en', 'dashboard', 'Index Admin', 'Index Admin', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(416, 1, 'en', 'dashboard', '', '', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(417, 1, 'en', 'dashboard', 'Please Enter Admin Confirm Password', 'Please Enter Admin Confirm Password', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(418, 1, 'en', 'dashboard', 'confirm Password', 'Confirm Password', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(419, 1, 'en', 'dashboard', 'City', 'City', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(420, 1, 'en', 'dashboard', 'Create City', 'Create City', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(421, 1, 'en', 'dashboard', 'Form City', 'Form City', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(422, 1, 'en', 'dashboard', 'Index City', 'Index City', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(423, 1, 'en', 'dashboard', 'Please Choose Country', 'Please Choose Country', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(424, 1, 'en', 'dashboard', 'District', 'District', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(425, 1, 'en', 'dashboard', 'Create District', 'Create District', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(426, 1, 'en', 'dashboard', 'Form District', 'Form District', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(427, 1, 'en', 'dashboard', 'Please Choose City', 'Please Choose City', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(428, 1, 'en', 'dashboard', 'Index District', 'Index District', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(429, 1, 'en', 'dashboard', 'Please Enter Admin Password', 'Please Enter Admin Password', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(430, 1, 'en', 'dashboard', 'Password', 'Password', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(431, 1, 'en', 'dashboard', 'Public Transportation', 'Public Transportation', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(432, 1, 'en', 'dashboard', 'Sort', 'Sort', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(433, 1, 'en', 'dashboard', 'Form Public Transportation', 'Form Public Transportation', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(434, 1, 'en', 'dashboard', 'Index Public Transportation', 'Index Public Transportation', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(435, 1, 'en', 'dashboard', 'Price', 'Price', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(436, 1, 'en', 'dashboard', 'Please Choose District', 'Please Choose District', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(437, 1, 'en', 'dashboard', 'Days', 'Days', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(438, 1, 'en', 'dashboard', 'Create Public Transportation', 'Create Public Transportation', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(439, 1, 'en', 'dashboard', 'Type', 'Type', '2023-05-31 09:37:02', '2023-05-31 09:37:02');
INSERT INTO `ltm_translations` (`id`, `status`, `locale`, `group`, `key`, `value`, `created_at`, `updated_at`) VALUES
(440, 1, 'en', 'dashboard', 'Form Public Transportation City', 'Form Public Transportation City', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(441, 1, 'en', 'dashboard', 'Please Choose Type', 'Please Choose Type', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(442, 1, 'en', 'dashboard', 'Index Public Transportation City', 'Index Public Transportation City', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(443, 1, 'en', 'dashboard', 'City To', 'City To', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(444, 1, 'en', 'dashboard', 'City From', 'City From', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(445, 1, 'en', 'dashboard', 'Public Transportation City', 'Public Transportation City', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(446, 1, 'en', 'dashboard', 'Create Public Transportation City', 'Create Public Transportation City', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(447, 1, 'en', 'dashboard', 'Error 403', 'Error 403', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(448, 1, 'en', 'dashboard', 'Seats', 'Seats', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(449, 1, 'en', 'dashboard', 'Stars', 'Stars', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(450, 1, 'en', 'dashboard', 'Cars', 'Cars', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(451, 1, 'en', 'dashboard', 'Form Cars', 'Form Cars', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(452, 1, 'en', 'dashboard', 'Index Cars', 'Index Cars', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(453, 1, 'en', 'dashboard', 'Create Cars', 'Create Cars', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(454, 1, 'en', 'dashboard', 'type', 'Type', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(455, 1, 'en', 'dashboard', 'typing_live', 'Typing live', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(456, 1, 'en', 'dashboard', 'rooms', 'Rooms', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(457, 1, 'en', 'dashboard', 'Hotel', 'Hotel', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(458, 1, 'en', 'dashboard', 'Create Hotel', 'Create Hotel', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(459, 1, 'en', 'dashboard', 'Please Choose Typing Live', 'Please Choose Typing Live', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(460, 1, 'en', 'dashboard', 'Typing Live', 'Typing Live', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(461, 1, 'en', 'dashboard', 'Form Hotel', 'Form Hotel', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(462, 1, 'en', 'dashboard', 'Index Hotel', 'Index Hotel', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(463, 1, 'en', 'dashboard', 'Apartment', 'Apartment', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(464, 1, 'en', 'dashboard', 'Form Apartment', 'Form Apartment', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(465, 1, 'en', 'dashboard', 'Create Apartment', 'Create Apartment', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(466, 1, 'en', 'dashboard', 'Index Apartment', 'Index Apartment', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(467, 1, 'en', 'dashboard', 'Location', 'Location', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(468, 1, 'en', 'dashboard', 'Form Location', 'Form Location', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(469, 1, 'en', 'dashboard', 'Create Location', 'Create Location', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(470, 1, 'en', 'dashboard', 'Index Location', 'Index Location', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(471, 1, 'en', 'dashboard', 'Must Seen', 'Must Seen', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(472, 1, 'en', 'dashboard', 'Group', 'Group', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(473, 1, 'en', 'dashboard', 'Form Group', 'Form Group', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(474, 1, 'en', 'dashboard', 'Index Group', 'Index Group', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(475, 1, 'en', 'dashboard', 'Please Choose Must Seen', 'Please Choose Must Seen', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(476, 1, 'en', 'dashboard', 'Create Group', 'Create Group', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(477, 1, 'en', 'dashboard', 'Tag', 'Tag', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(478, 1, 'en', 'dashboard', 'Create Tag', 'Create Tag', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(479, 1, 'en', 'dashboard', 'Form Tag', 'Form Tag', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(480, 1, 'en', 'dashboard', 'Index Tag', 'Index Tag', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(481, 1, 'en', 'dashboard', 'group_id', 'Group id', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(482, 1, 'en', 'dashboard', 'location_id', 'Location id', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(483, 1, 'en', 'dashboard', 'Group Location', 'Group Location', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(484, 1, 'en', 'dashboard', 'Create Group Location', 'Create Group Location', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(485, 1, 'en', 'dashboard', 'Form Group Location', 'Form Group Location', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(486, 1, 'en', 'dashboard', 'Index Group Location', 'Index Group Location', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(487, 1, 'en', 'dashboard', 'Please Choose group_id', 'Please Choose group id', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(488, 1, 'en', 'dashboard', 'Please Choose location_id', 'Please Choose location id', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(489, 1, 'en', 'dashboard', 'Please Choose Group', 'Please Choose Group', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(490, 1, 'en', 'dashboard', 'Please Choose Location', 'Please Choose Location', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(491, 1, 'en', 'dashboard', 'Tag Group', 'Tag Group', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(492, 1, 'en', 'dashboard', 'Please Choose Tag', 'Please Choose Tag', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(493, 1, 'en', 'dashboard', 'Create Tag Group', 'Create Tag Group', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(494, 1, 'en', 'dashboard', 'Form Tag Group', 'Form Tag Group', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(495, 1, 'en', 'dashboard', 'Index Tag Group', 'Index Tag Group', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(496, 1, 'en', 'dashboard', 'Email', 'Email', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(497, 1, 'en', 'dashboard', 'Gender', 'Gender', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(498, 1, 'en', 'dashboard', 'Mobile', 'Mobile', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(499, 1, 'en', 'dashboard', 'Address', 'Address', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(500, 1, 'en', 'dashboard', 'Users', 'Users', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(501, 1, 'en', 'dashboard', 'Create Users', 'Create Users', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(502, 1, 'en', 'dashboard', 'Form Users', 'Form Users', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(503, 1, 'en', 'dashboard', 'Index Users', 'Index Users', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(504, 1, 'en', 'dashboard', 'Please Choose Gender', 'Please Choose Gender', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(505, 1, 'en', 'dashboard', 'Coralie Ruecker', 'Coralie Ruecker', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(506, 1, 'en', 'dashboard', 'Hatem', 'Hatem', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(507, 1, 'en', 'dashboard', 'ayman', 'Ayman', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(508, 1, 'en', 'dashboard', 'Form setting', 'Form setting', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(509, 1, 'en', 'dashboard', 'Index setting', 'Index setting', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(510, 1, 'en', 'dashboard', 'Data', 'Data', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(511, 1, 'en', 'dashboard', 'Social Media', 'Social Media', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(512, 1, 'en', 'dashboard', 'Rosie Fay', 'Rosie Fay', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(513, 1, 'en', 'dashboard', 'Ruby Windler', 'Ruby Windler', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(514, 1, 'en', 'dashboard', 'Create Social Media', 'Create Social Media', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(515, 1, 'en', 'dashboard', 'Form Social Media', 'Form Social Media', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(516, 1, 'en', 'dashboard', 'Index Social Media', 'Index Social Media', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(517, 1, 'en', 'dashboard', 'Edit', 'Edit', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(518, 1, 'en', 'dashboard', 'admin.socialMedia.edit', 'Admin.socialMedia.edit', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(519, 1, 'en', 'dashboard', 'Edit Social Media', 'Edit Social Media', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(520, 1, 'en', 'dashboard', 'Miss Eleanore O\'Connell', 'Miss Eleanore O Connell', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(521, 1, 'en', 'dashboard', 'Image', 'Image', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(522, 1, 'en', 'dashboard', 'Banner', 'Banner', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(523, 1, 'en', 'dashboard', 'Form Banner', 'Form Banner', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(524, 1, 'en', 'dashboard', 'Index Banner', 'Index Banner', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(525, 1, 'en', 'dashboard', 'Create Banner', 'Create Banner', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(526, 1, 'en', 'dashboard', 'Eusebio Herzog', 'Eusebio Herzog', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(527, 1, 'en', 'dashboard', 'Miss Estella Wisoky', 'Miss Estella Wisoky', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(528, 1, 'en', 'dashboard', 'Gordon Ferry DDS', 'Gordon Ferry DDS', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(529, 1, 'en', 'dashboard', 'Dr. Obie Harber II', 'Dr. Obie Harber II', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(530, 1, 'en', 'dashboard', 'Felipa Connelly I', 'Felipa Connelly I', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(531, 1, 'en', 'dashboard', 'frontend', 'Frontend', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(532, 1, 'en', 'dashboard', 'Jonas Wuckert III', 'Jonas Wuckert III', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(533, 1, 'en', 'dashboard', 'Camille Hilpert', 'Camille Hilpert', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(534, 1, 'en', 'dashboard', 'Kyla Mohr II', 'Kyla Mohr II', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(535, 1, 'en', 'dashboard', 'Alexane Volkman', 'Alexane Volkman', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(536, 1, 'en', 'dashboard', 'Miss Vita Kuhlman', 'Miss Vita Kuhlman', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(537, 1, 'en', 'dashboard', 'Kasandra Macejkovic', 'Kasandra Macejkovic', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(538, 1, 'en', 'dashboard', 'Jodie Mayer', 'Jodie Mayer', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(539, 1, 'en', 'dashboard', 'Hosea Kulas', 'Hosea Kulas', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(540, 1, 'en', 'dashboard', 'Edmund Nikolaus DDS', 'Edmund Nikolaus DDS', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(541, 1, 'en', 'dashboard', 'Question', 'Question', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(542, 1, 'en', 'dashboard', 'Create Question', 'Create Question', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(543, 1, 'en', 'pagination', 'previous', '&laquo; Previous', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(544, 1, 'en', 'pagination', 'next', 'Next &raquo;', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(545, 1, 'en', 'passwords', 'reset', 'Your password has been reset!', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(546, 1, 'en', 'passwords', 'sent', 'We have emailed your password reset link!', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(547, 1, 'en', 'passwords', 'throttled', 'Please wait before retrying.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(548, 1, 'en', 'passwords', 'token', 'This password reset token is invalid.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(549, 1, 'en', 'passwords', 'user', 'We can\'t find a user with that email address.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(550, 1, 'en', 'validation', 'accepted', 'The :attribute must be accepted.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(551, 1, 'en', 'validation', 'accepted_if', 'The :attribute must be accepted when :other is :value.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(552, 1, 'en', 'validation', 'active_url', 'The :attribute is not a valid URL.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(553, 1, 'en', 'validation', 'after', 'The :attribute must be a date after :date.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(554, 1, 'en', 'validation', 'after_or_equal', 'The :attribute must be a date after or equal to :date.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(555, 1, 'en', 'validation', 'alpha', 'The :attribute must only contain letters.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(556, 1, 'en', 'validation', 'alpha_dash', 'The :attribute must only contain letters, numbers, dashes and underscores.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(557, 1, 'en', 'validation', 'alpha_num', 'The :attribute must only contain letters and numbers.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(558, 1, 'en', 'validation', 'array', 'The :attribute must be an array.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(559, 1, 'en', 'validation', 'ascii', 'The :attribute must only contain single-byte alphanumeric characters and symbols.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(560, 1, 'en', 'validation', 'before', 'The :attribute must be a date before :date.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(561, 1, 'en', 'validation', 'before_or_equal', 'The :attribute must be a date before or equal to :date.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(562, 1, 'en', 'validation', 'between.array', 'The :attribute must have between :min and :max items.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(563, 1, 'en', 'validation', 'between.file', 'The :attribute must be between :min and :max kilobytes.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(564, 1, 'en', 'validation', 'between.numeric', 'The :attribute must be between :min and :max.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(565, 1, 'en', 'validation', 'between.string', 'The :attribute must be between :min and :max characters.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(566, 1, 'en', 'validation', 'boolean', 'The :attribute field must be true or false.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(567, 1, 'en', 'validation', 'confirmed', 'The :attribute confirmation does not match.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(568, 1, 'en', 'validation', 'current_password', 'The password is incorrect.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(569, 1, 'en', 'validation', 'date', 'The :attribute is not a valid date.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(570, 1, 'en', 'validation', 'date_equals', 'The :attribute must be a date equal to :date.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(571, 1, 'en', 'validation', 'date_format', 'The :attribute does not match the format :format.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(572, 1, 'en', 'validation', 'decimal', 'The :attribute must have :decimal decimal places.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(573, 1, 'en', 'validation', 'declined', 'The :attribute must be declined.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(574, 1, 'en', 'validation', 'declined_if', 'The :attribute must be declined when :other is :value.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(575, 1, 'en', 'validation', 'different', 'The :attribute and :other must be different.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(576, 1, 'en', 'validation', 'digits', 'The :attribute must be :digits digits.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(577, 1, 'en', 'validation', 'digits_between', 'The :attribute must be between :min and :max digits.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(578, 1, 'en', 'validation', 'dimensions', 'The :attribute has invalid image dimensions.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(579, 1, 'en', 'validation', 'distinct', 'The :attribute field has a duplicate value.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(580, 1, 'en', 'validation', 'doesnt_end_with', 'The :attribute may not end with one of the following: :values.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(581, 1, 'en', 'validation', 'doesnt_start_with', 'The :attribute may not start with one of the following: :values.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(582, 1, 'en', 'validation', 'email', 'The :attribute must be a valid email address.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(583, 1, 'en', 'validation', 'ends_with', 'The :attribute must end with one of the following: :values.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(584, 1, 'en', 'validation', 'enum', 'The selected :attribute is invalid.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(585, 1, 'en', 'validation', 'exists', 'The selected :attribute is invalid.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(586, 1, 'en', 'validation', 'file', 'The :attribute must be a file.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(587, 1, 'en', 'validation', 'filled', 'The :attribute field must have a value.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(588, 1, 'en', 'validation', 'gt.array', 'The :attribute must have more than :value items.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(589, 1, 'en', 'validation', 'gt.file', 'The :attribute must be greater than :value kilobytes.', '2023-05-31 09:37:02', '2023-05-31 09:37:02'),
(590, 1, 'en', 'validation', 'gt.numeric', 'The :attribute must be greater than :value.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(591, 1, 'en', 'validation', 'gt.string', 'The :attribute must be greater than :value characters.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(592, 1, 'en', 'validation', 'gte.array', 'The :attribute must have :value items or more.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(593, 1, 'en', 'validation', 'gte.file', 'The :attribute must be greater than or equal to :value kilobytes.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(594, 1, 'en', 'validation', 'gte.numeric', 'The :attribute must be greater than or equal to :value.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(595, 1, 'en', 'validation', 'gte.string', 'The :attribute must be greater than or equal to :value characters.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(596, 1, 'en', 'validation', 'image', 'The :attribute must be an image.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(597, 1, 'en', 'validation', 'in', 'The selected :attribute is invalid.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(598, 1, 'en', 'validation', 'in_array', 'The :attribute field does not exist in :other.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(599, 1, 'en', 'validation', 'integer', 'The :attribute must be an integer.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(600, 1, 'en', 'validation', 'ip', 'The :attribute must be a valid IP address.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(601, 1, 'en', 'validation', 'ipv4', 'The :attribute must be a valid IPv4 address.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(602, 1, 'en', 'validation', 'ipv6', 'The :attribute must be a valid IPv6 address.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(603, 1, 'en', 'validation', 'json', 'The :attribute must be a valid JSON string.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(604, 1, 'en', 'validation', 'lowercase', 'The :attribute must be lowercase.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(605, 1, 'en', 'validation', 'lt.array', 'The :attribute must have less than :value items.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(606, 1, 'en', 'validation', 'lt.file', 'The :attribute must be less than :value kilobytes.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(607, 1, 'en', 'validation', 'lt.numeric', 'The :attribute must be less than :value.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(608, 1, 'en', 'validation', 'lt.string', 'The :attribute must be less than :value characters.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(609, 1, 'en', 'validation', 'lte.array', 'The :attribute must not have more than :value items.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(610, 1, 'en', 'validation', 'lte.file', 'The :attribute must be less than or equal to :value kilobytes.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(611, 1, 'en', 'validation', 'lte.numeric', 'The :attribute must be less than or equal to :value.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(612, 1, 'en', 'validation', 'lte.string', 'The :attribute must be less than or equal to :value characters.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(613, 1, 'en', 'validation', 'mac_address', 'The :attribute must be a valid MAC address.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(614, 1, 'en', 'validation', 'max.array', 'The :attribute must not have more than :max items.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(615, 1, 'en', 'validation', 'max.file', 'The :attribute must not be greater than :max kilobytes.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(616, 1, 'en', 'validation', 'max.numeric', 'The :attribute must not be greater than :max.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(617, 1, 'en', 'validation', 'max.string', 'The :attribute must not be greater than :max characters.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(618, 1, 'en', 'validation', 'max_digits', 'The :attribute must not have more than :max digits.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(619, 1, 'en', 'validation', 'mimes', 'The :attribute must be a file of type: :values.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(620, 1, 'en', 'validation', 'mimetypes', 'The :attribute must be a file of type: :values.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(621, 1, 'en', 'validation', 'min.array', 'The :attribute must have at least :min items.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(622, 1, 'en', 'validation', 'min.file', 'The :attribute must be at least :min kilobytes.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(623, 1, 'en', 'validation', 'min.numeric', 'The :attribute must be at least :min.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(624, 1, 'en', 'validation', 'min.string', 'The :attribute must be at least :min characters.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(625, 1, 'en', 'validation', 'min_digits', 'The :attribute must have at least :min digits.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(626, 1, 'en', 'validation', 'missing', 'The :attribute field must be missing.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(627, 1, 'en', 'validation', 'missing_if', 'The :attribute field must be missing when :other is :value.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(628, 1, 'en', 'validation', 'missing_unless', 'The :attribute field must be missing unless :other is :value.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(629, 1, 'en', 'validation', 'missing_with', 'The :attribute field must be missing when :values is present.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(630, 1, 'en', 'validation', 'missing_with_all', 'The :attribute field must be missing when :values are present.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(631, 1, 'en', 'validation', 'multiple_of', 'The :attribute must be a multiple of :value.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(632, 1, 'en', 'validation', 'not_in', 'The selected :attribute is invalid.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(633, 1, 'en', 'validation', 'not_regex', 'The :attribute format is invalid.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(634, 1, 'en', 'validation', 'numeric', 'The :attribute must be a number.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(635, 1, 'en', 'validation', 'password.letters', 'The :attribute must contain at least one letter.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(636, 1, 'en', 'validation', 'password.mixed', 'The :attribute must contain at least one uppercase and one lowercase letter.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(637, 1, 'en', 'validation', 'password.numbers', 'The :attribute must contain at least one number.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(638, 1, 'en', 'validation', 'password.symbols', 'The :attribute must contain at least one symbol.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(639, 1, 'en', 'validation', 'password.uncompromised', 'The given :attribute has appeared in a data leak. Please choose a different :attribute.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(640, 1, 'en', 'validation', 'present', 'The :attribute field must be present.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(641, 1, 'en', 'validation', 'prohibited', 'The :attribute field is prohibited.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(642, 1, 'en', 'validation', 'prohibited_if', 'The :attribute field is prohibited when :other is :value.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(643, 1, 'en', 'validation', 'prohibited_unless', 'The :attribute field is prohibited unless :other is in :values.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(644, 1, 'en', 'validation', 'prohibits', 'The :attribute field prohibits :other from being present.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(645, 1, 'en', 'validation', 'regex', 'The :attribute format is invalid.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(646, 1, 'en', 'validation', 'required', 'The :attribute field is required.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(647, 1, 'en', 'validation', 'required_array_keys', 'The :attribute field must contain entries for: :values.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(648, 1, 'en', 'validation', 'required_if', 'The :attribute field is required when :other is :value.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(649, 1, 'en', 'validation', 'required_if_accepted', 'The :attribute field is required when :other is accepted.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(650, 1, 'en', 'validation', 'required_unless', 'The :attribute field is required unless :other is in :values.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(651, 1, 'en', 'validation', 'required_with', 'The :attribute field is required when :values is present.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(652, 1, 'en', 'validation', 'required_with_all', 'The :attribute field is required when :values are present.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(653, 1, 'en', 'validation', 'required_without', 'The :attribute field is required when :values is not present.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(654, 1, 'en', 'validation', 'required_without_all', 'The :attribute field is required when none of :values are present.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(655, 1, 'en', 'validation', 'same', 'The :attribute and :other must match.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(656, 1, 'en', 'validation', 'size.array', 'The :attribute must contain :size items.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(657, 1, 'en', 'validation', 'size.file', 'The :attribute must be :size kilobytes.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(658, 1, 'en', 'validation', 'size.numeric', 'The :attribute must be :size.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(659, 1, 'en', 'validation', 'size.string', 'The :attribute must be :size characters.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(660, 1, 'en', 'validation', 'starts_with', 'The :attribute must start with one of the following: :values.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(661, 1, 'en', 'validation', 'string', 'The :attribute must be a string.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(662, 1, 'en', 'validation', 'timezone', 'The :attribute must be a valid timezone.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(663, 1, 'en', 'validation', 'unique', 'The :attribute has already been taken.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(664, 1, 'en', 'validation', 'uploaded', 'The :attribute failed to upload.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(665, 1, 'en', 'validation', 'uppercase', 'The :attribute must be uppercase.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(666, 1, 'en', 'validation', 'url', 'The :attribute must be a valid URL.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(667, 1, 'en', 'validation', 'ulid', 'The :attribute must be a valid ULID.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(668, 1, 'en', 'validation', 'uuid', 'The :attribute must be a valid UUID.', '2023-05-31 09:37:03', '2023-05-31 09:37:03'),
(669, 1, 'en', 'validation', 'custom.attribute-name.rule-name', 'custom-message', '2023-05-31 09:37:03', '2023-05-31 09:37:03');

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
(1, 'App\\Models\\Banner', 3, '370a4110-406b-48d1-9c43-dbf6a65ca51d', 'banner', 'CaptureWhiteColor', 'CaptureWhiteColor.PNG', 'image/png', 'media', 'media', 25441, '[]', '[]', '[]', '[]', 1, '2023-05-29 10:57:14', '2023-05-29 10:57:14'),
(2, 'App\\Models\\Banner', 4, 'b6b50b21-758d-48b6-908e-e711e3bcd1c3', 'banner', 'last_edi', 'last_edi.png', 'image/png', 'media', 'media', 21610, '[]', '[]', '[]', '[]', 1, '2023-05-29 11:21:24', '2023-05-29 11:21:24'),
(6, 'App\\Models\\Banner', 2, 'bd479029-8f9e-4b47-be2b-a33a5978268e', 'banner', 'last_edi', 'last_edi.png', 'image/png', 'media', 'media', 21610, '[]', '[]', '[]', '[]', 1, '2023-05-29 12:47:13', '2023-05-29 12:47:13');

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
(1, '2014_03_20_145801_create_countries_table', 1),
(2, '2014_03_20_145812_create_cities_table', 1),
(3, '2014_03_20_145900_create_districts_table', 1),
(4, '2014_04_02_193005_create_translations_table', 1),
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_03_05_101905_create_permission_tables', 1),
(10, '2023_03_05_102027_create_admins_table', 1),
(11, '2023_03_05_103146_create_media_table', 1),
(12, '2023_03_05_104359_create_settings_table', 1),
(13, '2023_03_08_113944_create_translation_keys_table', 1),
(14, '2023_03_08_132955_create_new_permission_table', 1),
(15, '2023_03_09_160105_create_images_table', 1),
(16, '2023_03_20_144704_create_places_table', 1),
(17, '2023_03_20_151800_create_activity_log_table', 1),
(18, '2023_03_20_151801_add_event_column_to_activity_log_table', 1),
(19, '2023_03_20_151802_add_batch_uuid_column_to_activity_log_table', 1),
(20, '2023_03_20_170138_create_cars_table', 1),
(21, '2023_03_20_172903_create_public_transportations_table', 1),
(22, '2023_03_21_080141_create_public_transportation_cities_table', 1),
(23, '2023_03_21_081314_create_hotel_apartments_table', 1),
(24, '2023_03_21_082839_create_locations_table', 1),
(25, '2023_03_21_084253_create_groups_table', 1),
(26, '2023_03_21_085047_create_tags_table', 1),
(27, '2023_03_21_085732_create_tag_group_table', 1),
(28, '2023_03_21_090608_create_group_location_table', 1),
(29, '2023_03_23_130154_create_banners_table', 1),
(33, '2023_05_24_084824_create_questions_table', 2),
(35, '2023_05_24_085038_create_answer_user_table', 3),
(36, '2023_05_24_085003_create_answers_table', 4),
(43, '2023_05_24_123734_add_col_type_to_questions_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'good', 'admin', '2023-05-23 06:56:20', '2023-05-23 06:56:20'),
(2, 'bad', 'admin', '2023-05-23 06:56:20', '2023-05-23 06:56:20');

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
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` point DEFAULT NULL,
  `area` polygon DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `public_transportations`
--

CREATE TABLE `public_transportations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `days` int(11) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `status` enum('Active','Not Active') NOT NULL DEFAULT 'Active',
  `sort` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `public_transportation_cities`
--

CREATE TABLE `public_transportation_cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `type` enum('Train','Plan','Bus','Transfer') DEFAULT NULL,
  `city_from` date DEFAULT NULL,
  `city_to` date DEFAULT NULL,
  `status` enum('Active','Not Active') NOT NULL DEFAULT 'Active',
  `sort` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `max` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `created_at`, `updated_at`, `type`, `max`) VALUES
(1, 'أهلًا بك على ترافونيير\r\nبعد أن تشاركنا رغباتك لرحلتك القادمة سيقوم مستشارك السياحي الخاص بالتواصل معك\r\nأنا أبحث عن:', NULL, NULL, 'radio', NULL),
(2, 'أود أن أسكن في ...', NULL, NULL, 'radio', NULL),
(3, 'أريد زيارة ...', NULL, NULL, 'checkbox', 4),
(4, 'أثناء رحلتي أفضل زيارة ...', NULL, NULL, 'radio', NULL),
(5, 'أثناء رحلتي أحرص على .. (٣ إختيارات)', NULL, '2023-05-31 09:53:25', 'checkbox', 3),
(6, 'نوع الخدمة التي ارغب بها ', NULL, NULL, 'radio', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '2023-05-23 06:56:41', '2023-05-23 06:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` enum('Active','Not Active') NOT NULL DEFAULT 'Active',
  `sort` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tag_group`
--

CREATE TABLE `tag_group` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `group_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translation_keys`
--

CREATE TABLE `translation_keys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translation_keys`
--

INSERT INTO `translation_keys` (`id`, `key`, `name`, `created_at`, `updated_at`) VALUES
(1, 'en', 'english', '2023-05-23 06:56:41', NULL),
(2, 'ar', 'arabic', '2023-05-23 06:56:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `status` enum('Active','Not Active') DEFAULT 'Active',
  `location` point DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `communicate_way` varchar(50) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `about_yourself` varchar(200) DEFAULT NULL,
  `adults_number` int(11) NOT NULL,
  `children_number` int(11) NOT NULL,
  `travel_date` varchar(50) NOT NULL,
  `date_from` date DEFAULT NULL,
  `date_to` date DEFAULT NULL,
  `days_count` int(11) DEFAULT NULL,
  `month` varchar(50) DEFAULT NULL,
  `session_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `slug`, `address`, `mobile`, `gender`, `status`, `location`, `country_id`, `city_id`, `district_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `communicate_way`, `payment_method`, `about_yourself`, `adults_number`, `children_number`, `travel_date`, `date_from`, `date_to`, `days_count`, `month`, `session_key`) VALUES
(1, 'vha]', NULL, NULL, 'ihihihsdih', NULL, 'Active', NULL, NULL, NULL, NULL, 'usu@uasgu.com', NULL, NULL, NULL, NULL, NULL, 'سكايب', 'تحويل بنكي فرع امريكا', 'iidhihi', 9, 99, 'موعد محدد للسفر', '2023-05-27', '2023-05-19', NULL, NULL, '1685363204'),
(2, 'vha]', NULL, NULL, 'ihihihsdih', NULL, 'Active', NULL, NULL, NULL, NULL, 'usu@uasgu.com', NULL, NULL, NULL, NULL, NULL, 'سكايب', 'تحويل بنكي فرع امريكا', 'iidhihi', 9, 99, 'موعد محدد للسفر', '2023-05-27', '2023-05-19', NULL, NULL, '1685363226'),
(3, 'راشد الدرة', NULL, NULL, '011482277\\7\\7\\', NULL, 'Active', NULL, NULL, NULL, NULL, 'rashed@gmail.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'ملهاش حل', 0, 8, 'موعد تقريبي للسفر', NULL, NULL, 9, 'يوليو', '1685363314'),
(4, 'test', NULL, NULL, '02222', NULL, 'Active', NULL, NULL, NULL, NULL, 'test@gmail.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'jagvsdu', 0, 9, 'موعد تقريبي للسفر', NULL, NULL, 6, 'أغسطس', '1685364536'),
(5, 'راشد', NULL, NULL, '01148134995', NULL, 'Active', NULL, NULL, NULL, NULL, 'dorra@gmail.com', NULL, NULL, NULL, NULL, NULL, 'سكايب', 'خدمة PayPal لبطاقة الائتمان', 'جميلة اوي', 6, 8, 'موعد تقريبي للسفر', NULL, NULL, 5, 'أكتوبر', '1685442176'),
(6, 'gugu', NULL, NULL, 'ohhoih', NULL, 'Active', NULL, NULL, NULL, NULL, 'ggug@yahpp.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع امريكا', 'oojoj', 6, 9, 'موعد تقريبي للسفر', NULL, NULL, 5, 'سبتمبر', '1685458499'),
(7, 'ihhi', NULL, NULL, 'uggug', NULL, 'Active', NULL, NULL, NULL, NULL, 'iogo@ugug.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع امريكا', 'joojh', 2, 6, 'موعد تقريبي للسفر', NULL, NULL, 5, 'أكتوبر', '1685458604'),
(8, 'ugug', NULL, NULL, '=ggug', NULL, 'Active', NULL, NULL, NULL, NULL, 'guugug@usfg.cin', NULL, NULL, NULL, NULL, NULL, 'سكايب', 'تحويل بنكي فرع امريكا', 'hhih', 5, 9, 'موعد تقريبي للسفر', NULL, NULL, 5, 'يوليو', '1685458754'),
(9, 'هيما', NULL, NULL, '222222', NULL, 'Active', NULL, NULL, NULL, NULL, 'hema@gmail.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'rashed', 4, 6, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685459079'),
(10, 'الله واحد', NULL, NULL, '222', NULL, 'Active', NULL, NULL, NULL, NULL, 'gomera@gmail.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع امريكا', 'iahviiah', 5, 6, 'موعد تقريبي للسفر', NULL, NULL, 7, 'أغسطس', '1685459264'),
(11, 'huh', NULL, NULL, 'hih', NULL, 'Active', NULL, NULL, NULL, NULL, 'uh2ih@ihaih.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع امريكا', 'ojoj', 5, 3, 'موعد تقريبي للسفر', NULL, NULL, 5, 'أكتوبر', '1685459613'),
(12, 'huh', NULL, NULL, 'hih', NULL, 'Active', NULL, NULL, NULL, NULL, 'uh2ih@ihaih.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع امريكا', 'ojoj', 5, 3, 'موعد تقريبي للسفر', NULL, NULL, 5, 'أكتوبر', '1685459671'),
(13, '8y8', NULL, NULL, 'h8h8h', NULL, 'Active', NULL, NULL, NULL, NULL, 'hasuh@hav.com', NULL, NULL, NULL, NULL, NULL, 'سكايب', 'تحويل بنكي فرع امريكا', 'ihihih', 5, 1, 'موعد تقريبي للسفر', NULL, NULL, 5, 'سبتمبر', '1685459729'),
(14, '8y8', NULL, NULL, 'h8h8h', NULL, 'Active', NULL, NULL, NULL, NULL, 'hasuh@hav.com', NULL, NULL, NULL, NULL, NULL, 'سكايب', 'تحويل بنكي فرع امريكا', 'ihihih', 5, 1, 'موعد تقريبي للسفر', NULL, NULL, 5, 'سبتمبر', '1685459743'),
(15, 'ihih', NULL, NULL, 'iihifhi', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihhi@vah.com', NULL, NULL, NULL, NULL, NULL, 'سكايب', 'خدمة PayPal لبطاقة الائتمان', 'favhiaf', 5, 5, 'موعد محدد للسفر', '2023-06-02', '2023-05-04', NULL, NULL, '1685459876'),
(16, 'ihih', NULL, NULL, 'iihifhi', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihhi@vah.com', NULL, NULL, NULL, NULL, NULL, 'سكايب', 'خدمة PayPal لبطاقة الائتمان', 'favhiaf', 5, 5, 'موعد محدد للسفر', '2023-06-02', '2023-05-04', NULL, NULL, '1685459962'),
(17, 'ihih', NULL, NULL, 'iihifhi', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihhi@vah.com', NULL, NULL, NULL, NULL, NULL, 'سكايب', 'خدمة PayPal لبطاقة الائتمان', 'favhiaf', 5, 5, 'موعد محدد للسفر', '2023-06-02', '2023-05-04', NULL, NULL, '1685459999'),
(18, 'ihih', NULL, NULL, 'iihifhi', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihhi@vah.com', NULL, NULL, NULL, NULL, NULL, 'سكايب', 'خدمة PayPal لبطاقة الائتمان', 'favhiaf', 5, 5, 'موعد محدد للسفر', '2023-06-02', '2023-05-04', NULL, NULL, '1685460019'),
(19, 'ihih', NULL, NULL, 'iihifhi', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihhi@vah.com', NULL, NULL, NULL, NULL, NULL, 'سكايب', 'خدمة PayPal لبطاقة الائتمان', 'favhiaf', 5, 5, 'موعد محدد للسفر', '2023-06-02', '2023-05-04', NULL, NULL, '1685460026'),
(20, 'ihih', NULL, NULL, 'iihifhi', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihhi@vah.com', NULL, NULL, NULL, NULL, NULL, 'سكايب', 'خدمة PayPal لبطاقة الائتمان', 'favhiaf', 5, 5, 'موعد محدد للسفر', '2023-06-02', '2023-05-04', NULL, NULL, '1685460033'),
(21, 'ihih', NULL, NULL, 'iihifhi', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihhi@vah.com', NULL, NULL, NULL, NULL, NULL, 'سكايب', 'خدمة PayPal لبطاقة الائتمان', 'favhiaf', 5, 5, 'موعد محدد للسفر', '2023-06-02', '2023-05-04', NULL, NULL, '1685460044'),
(22, 'ihih', NULL, NULL, 'iihifhi', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihhi@vah.com', NULL, NULL, NULL, NULL, NULL, 'سكايب', 'خدمة PayPal لبطاقة الائتمان', 'favhiaf', 5, 5, 'موعد محدد للسفر', '2023-06-02', '2023-05-04', NULL, NULL, '1685460057'),
(23, 'ihih', NULL, NULL, 'iihifhi', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihhi@vah.com', NULL, NULL, NULL, NULL, NULL, 'سكايب', 'خدمة PayPal لبطاقة الائتمان', 'favhiaf', 5, 5, 'موعد محدد للسفر', '2023-06-02', '2023-05-04', NULL, NULL, '1685460077'),
(24, 'iafih', NULL, NULL, 'ihih', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@hiashfi.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iohi', 0, 0, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685460154'),
(25, 'iafih', NULL, NULL, 'ihih', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@hiashfi.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iohi', 0, 0, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685460155'),
(26, 'iafih', NULL, NULL, 'ihih', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@hiashfi.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iohi', 0, 0, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685460259'),
(27, 'iafih', NULL, NULL, 'ihih', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@hiashfi.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iohi', 0, 0, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685460288'),
(28, 'iafih', NULL, NULL, 'ihih', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@hiashfi.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iohi', 0, 0, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685460341'),
(29, 'iafih', NULL, NULL, 'ihih', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@hiashfi.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iohi', 0, 0, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685460398'),
(30, 'iafih', NULL, NULL, 'ihih', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@hiashfi.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iohi', 0, 0, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685460438'),
(31, 'iafih', NULL, NULL, 'ihih', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@hiashfi.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iohi', 0, 0, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685460457'),
(32, 'iafih', NULL, NULL, 'ihih', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@hiashfi.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iohi', 0, 0, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685460467'),
(33, 'iafih', NULL, NULL, 'ihih', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@hiashfi.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iohi', 0, 0, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685460547'),
(34, 'iafih', NULL, NULL, 'ihih', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@hiashfi.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iohi', 0, 0, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685460576'),
(35, 'iafih', NULL, NULL, 'ihih', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@hiashfi.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iohi', 0, 0, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685460608'),
(36, 'iafih', NULL, NULL, 'ihih', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@hiashfi.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iohi', 0, 0, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685460626'),
(37, 'iafih', NULL, NULL, 'ihih', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@hiashfi.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iohi', 0, 0, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685460648'),
(38, 'iafih', NULL, NULL, 'ihih', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@hiashfi.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iohi', 0, 0, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685460683'),
(39, 'iafih', NULL, NULL, 'ihih', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@hiashfi.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iohi', 0, 0, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685460731'),
(40, 'iafih', NULL, NULL, 'ihih', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@hiashfi.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iohi', 0, 0, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685460749'),
(41, 'iafih', NULL, NULL, 'ihih', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@hiashfi.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iohi', 0, 0, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685460822'),
(42, 'iafih', NULL, NULL, 'ihih', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@hiashfi.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iohi', 0, 0, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685460856'),
(43, 'iafih', NULL, NULL, 'ihih', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@hiashfi.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iohi', 0, 0, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685460858'),
(44, 'iafih', NULL, NULL, 'ihih', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@hiashfi.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iohi', 0, 0, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685460924'),
(45, 'iafih', NULL, NULL, 'ihih', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@hiashfi.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iohi', 0, 0, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685460945'),
(46, 'ihihHIIH', NULL, NULL, 'ihihhi', NULL, 'Active', NULL, NULL, NULL, NULL, 'IHIH@IHI', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع امريكا', 'IHIVAFHI', 6, 66, 'موعد تقريبي للسفر', NULL, NULL, 4, 'أغسطس', '1685461085'),
(47, 'afihih', NULL, NULL, 'ohihohohoh', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihihohioh@iafhi.cm', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع امريكا', 'ihiohihiohio', 0, 9, 'موعد تقريبي للسفر', NULL, NULL, 5, 'أكتوبر', '1685461357'),
(48, 'ihh', NULL, NULL, 'ihii', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@hiashfi.com', NULL, NULL, NULL, NULL, NULL, 'اتصال هاتفي', 'تحويل بنكي فرع قطر', 'ihihi', 0, 9, 'موعد تقريبي للسفر', NULL, NULL, 5, 'سبتمبر', '1685461621'),
(49, 'ihh', NULL, NULL, 'ihii', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@hiashfi.com', NULL, NULL, NULL, NULL, NULL, 'اتصال هاتفي', 'تحويل بنكي فرع قطر', 'ihihi', 0, 9, 'موعد تقريبي للسفر', NULL, NULL, 5, 'سبتمبر', '1685461743'),
(50, 'guug', NULL, NULL, 'hoohio', NULL, 'Active', NULL, NULL, NULL, NULL, 'uugugguu@ufguga.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'ihafihfa', 6, 8, 'موعد محدد للسفر', '2023-05-27', '2023-05-11', NULL, NULL, '1685461925'),
(51, 'rashed', NULL, NULL, '01148134994', NULL, 'Active', NULL, NULL, NULL, NULL, 'rashed@gmail.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع امريكا', 'nice trip', 5, 6, 'موعد تقريبي للسفر', NULL, NULL, 5, 'أغسطس', '1685518332'),
(52, 'gug', NULL, NULL, 'ihih', NULL, 'Active', NULL, NULL, NULL, NULL, 'uigui@yahoo.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع امريكا', 'iihih', 5, 6, 'موعد محدد للسفر', '2023-05-25', '2023-05-13', NULL, NULL, '1685518417'),
(53, 'giug', NULL, NULL, 'guigiuguig', NULL, 'Active', NULL, NULL, NULL, NULL, 'igiugui@gmail.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع امريكا', 'uguguu', 5, 6, 'موعد تقريبي للسفر', NULL, NULL, 5, 'يوليو', '1685518517'),
(54, 'uiguig', NULL, NULL, 'iguuiguig', NULL, 'Active', NULL, NULL, NULL, NULL, 'iugiuguig@yad.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'ihih', -1, 9, 'موعد محدد للسفر', '2023-05-18', '2023-05-15', NULL, NULL, '1685518699'),
(55, 'ebrahem', NULL, NULL, '222', NULL, 'Active', NULL, NULL, NULL, NULL, 'rashed@gmail.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iasihd', 5, 6, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685519549'),
(56, 'ebrahem', NULL, NULL, '222', NULL, 'Active', NULL, NULL, NULL, NULL, 'rashed@gmail.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iasihd', 5, 6, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685519594'),
(57, 'ebrahem', NULL, NULL, '222', NULL, 'Active', NULL, NULL, NULL, NULL, 'rashed@gmail.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iasihd', 5, 6, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685519701'),
(58, 'ebrahem', NULL, NULL, '222', NULL, 'Active', NULL, NULL, NULL, NULL, 'rashed@gmail.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iasihd', 5, 6, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685519816'),
(59, 'ebrahem', NULL, NULL, '222', NULL, 'Active', NULL, NULL, NULL, NULL, 'rashed@gmail.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'iasihd', 5, 6, 'موعد تقريبي للسفر', NULL, NULL, 5, 'مارس', '1685519989'),
(60, 'ihhih', NULL, NULL, 'ih999', NULL, 'Active', NULL, NULL, NULL, NULL, 'hiihihih@ihih.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'liih', 9, 9, 'موعد تقريبي للسفر', NULL, NULL, 6, 'أغسطس', '1685520421'),
(61, 'ihhih', NULL, NULL, 'ih999', NULL, 'Active', NULL, NULL, NULL, NULL, 'hiihihih@ihih.com', NULL, NULL, NULL, NULL, NULL, 'واتس اب', 'تحويل بنكي فرع قطر', 'liih', 9, 9, 'موعد تقريبي للسفر', NULL, NULL, 6, 'أغسطس', '1685520463'),
(62, 'ihh', NULL, NULL, 'ihihih', NULL, 'Active', NULL, NULL, NULL, NULL, 'ihih@ihaih.com', NULL, NULL, NULL, NULL, NULL, 'سكايب', 'تحويل بنكي فرع امريكا', 'ojojjj', 3, 3, 'موعد تقريبي للسفر', NULL, NULL, 5, 'أغسطس', '1685539855');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer_user`
--
ALTER TABLE `answer_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_country_id_foreign` (`country_id`),
  ADD KEY `cars_city_id_foreign` (`city_id`),
  ADD KEY `cars_district_id_foreign` (`district_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_country_id_foreign` (`country_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_city_id_foreign` (`city_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_location`
--
ALTER TABLE `group_location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_location_location_id_foreign` (`location_id`),
  ADD KEY `group_location_group_id_foreign` (`group_id`);

--
-- Indexes for table `hotel_apartments`
--
ALTER TABLE `hotel_apartments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_apartments_country_id_foreign` (`country_id`),
  ADD KEY `hotel_apartments_city_id_foreign` (`city_id`),
  ADD KEY `hotel_apartments_district_id_foreign` (`district_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locations_country_id_foreign` (`country_id`),
  ADD KEY `locations_city_id_foreign` (`city_id`),
  ADD KEY `locations_district_id_foreign` (`district_id`);

--
-- Indexes for table `ltm_translations`
--
ALTER TABLE `ltm_translations`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `places_name_unique` (`name`);

--
-- Indexes for table `public_transportations`
--
ALTER TABLE `public_transportations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `public_transportations_country_id_foreign` (`country_id`),
  ADD KEY `public_transportations_city_id_foreign` (`city_id`),
  ADD KEY `public_transportations_district_id_foreign` (`district_id`);

--
-- Indexes for table `public_transportation_cities`
--
ALTER TABLE `public_transportation_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag_group`
--
ALTER TABLE `tag_group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tag_group_tag_id_foreign` (`tag_id`),
  ADD KEY `tag_group_group_id_foreign` (`group_id`);

--
-- Indexes for table `translation_keys`
--
ALTER TABLE `translation_keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_country_id_foreign` (`country_id`),
  ADD KEY `users_city_id_foreign` (`city_id`),
  ADD KEY `users_district_id_foreign` (`district_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `answer_user`
--
ALTER TABLE `answer_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_location`
--
ALTER TABLE `group_location`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel_apartments`
--
ALTER TABLE `hotel_apartments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ltm_translations`
--
ALTER TABLE `ltm_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=670;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `public_transportations`
--
ALTER TABLE `public_transportations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `public_transportation_cities`
--
ALTER TABLE `public_transportation_cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tag_group`
--
ALTER TABLE `tag_group`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `translation_keys`
--
ALTER TABLE `translation_keys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cars_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cars_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `group_location`
--
ALTER TABLE `group_location`
  ADD CONSTRAINT `group_location_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `group_location_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hotel_apartments`
--
ALTER TABLE `hotel_apartments`
  ADD CONSTRAINT `hotel_apartments_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hotel_apartments_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hotel_apartments_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `locations_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `locations_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `locations_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `public_transportations`
--
ALTER TABLE `public_transportations`
  ADD CONSTRAINT `public_transportations_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `public_transportations_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `public_transportations_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tag_group`
--
ALTER TABLE `tag_group`
  ADD CONSTRAINT `tag_group_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tag_group_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
