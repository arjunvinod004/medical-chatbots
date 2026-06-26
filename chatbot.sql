-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2026 at 07:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(191) NOT NULL,
  `owner` varchar(191) NOT NULL,
  `expiration` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` varchar(100) NOT NULL,
  `queue` varchar(100) NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` smallint(5) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medical_conditions`
--

CREATE TABLE `medical_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `symptoms` varchar(255) NOT NULL,
  `possible_conditions` text NOT NULL,
  `severity_assessment` text NOT NULL,
  `emergency_warning_signs` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `duration_days` int(11) DEFAULT NULL,
  `min_days` int(11) DEFAULT NULL,
  `max_days` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_conditions`
--

INSERT INTO `medical_conditions` (`id`, `symptoms`, `possible_conditions`, `severity_assessment`, `emergency_warning_signs`, `created_at`, `updated_at`, `duration_days`, `min_days`, `max_days`) VALUES
(1, 'fever', 'Common Cold,Influenza,COVID-19', 'Mild to Moderate', 'Difficulty breathing,Chest pain,Severe dehydration', '2026-06-26 14:12:41', '2026-06-26 14:12:41', 3, 2, 5),
(2, 'cough', 'Common Cold,Acute Bronchitis,Asthma,GERD,Pneumonia', 'Occasional cough, no interference with daily activities, no fever, able to sleep well.', 'Difficulty breathing or severe shortness of breath,Chest pain that is severe or stabbing,Confusion, lethargy, or loss of consciousness', '2026-06-26 14:12:41', '2026-06-26 14:12:41', 3, 2, 5),
(3, 'Headache', 'Tension Headache,Migraine,Sinus Headache', 'Occasional or infrequent dull ache, easily managed with over-the-counter pain relief and rest, does not interfere with daily activities,Persistent pain that noticeably affects concentration and daily tasks, may cause mild nausea or sensitivity to light, b', 'Numbness, weakness, paralysis on one side of your face or body,Sudden changes in vision, double vision, or loss of balance,Seizures or loss of consciousness', '2026-06-26 14:12:41', '2026-06-26 14:12:41', 3, 2, 5),
(4, 'Chest Pain', 'Musculoskeletal Pain,GERD/Acid Reflux,Costochondritis,Panic Attack,Stomach acid flowing back into the esophagus, causing a burning sensation behind the breastbone.,Inflammation of the cartilage that connects a rib to the breastbone.', 'Brief, localized soreness or burning sensation that does not change with exertion and resolves quickly, Persistent discomfort or aching that causes anxiety or mild limitation in activity; may be related to posture or digestion.,Crushing pressure, intense ', 'Sudden, severe pressure, squeezing, or crushing pain in the center of the chest, paralysis on one side of your face or body,Pain radiating to the jaw, neck, back, or one/both arms,Profuse cold sweats', '2026-06-26 14:12:41', '2026-06-26 14:12:41', 3, 2, 5),
(5, 'Stomach Pain', 'Indigestion (Dyspepsia),Gas and Bloating,Gastritis', 'Discomfort or burning in the upper abdomen, often related to eating too quickly or consuming certain foods, Accumulation of gas in the digestive tract,Inflammation, irritation, or erosion of the stomach lining. ', 'Sudden, severe, or ripping abdominal pain, paralysis on one side of your face or body,Pain localized to the lower right side (possible appendicitis), Abdomen that is rigid, hard, or tender to the touch', '2026-06-26 14:12:41', '2026-06-26 14:12:41', 3, 2, 5),
(6, 'Fatigue', 'Sleep Deprivation,Anemia,Hypothyroidism,Chronic Fatigue Syndrome (CFS/ME),Diabetes', 'Feeling tired after long days or intense activity; energy typically improves with rest, better sleep, or minor lifestyle adjustments,Debilitating exhaustion that makes it difficult to get out of bed or perform basic daily functions; persists regardless of sleep or rest', 'Fatigue accompanied by chest pain or shortness of breath,Thoughts of self-harm or severe hopelessness', '2026-06-26 14:12:41', '2026-06-26 14:12:41', 3, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_06_24_134935_create_medical_conditions_table', 2),
(5, '2026_06_26_050725_alter_medical_conditions_table', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  ADD KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_conditions`
--
ALTER TABLE `medical_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_conditions`
--
ALTER TABLE `medical_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
