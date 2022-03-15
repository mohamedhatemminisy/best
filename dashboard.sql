-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 03:07 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `logo`, `main_image`, `certificate`, `time`, `created_at`, `updated_at`) VALUES
(4, 'storage/logo632-1637063118.png', 'storage/main_image341-1637063118.png', '[\"storage\\/certificate389-1637063118.png\"]', '1972-02-25T16:35', '2021-11-16 09:45:18', '2021-11-16 09:45:18'),
(5, 'storage/logo58-1637063152.png', 'storage/main_image344-1637063152.png', '[\"storage\\/certificate796-1637063152.png\"]', '1972-02-25T16:35', '2021-11-16 09:45:52', '2021-11-16 09:45:52'),
(6, 'storage/logo762-1637063170.png', 'storage/main_image353-1637063170.png', '[\"storage\\/certificate626-1637063170.png\"]', '1972-02-25T16:35', '2021-11-16 09:46:10', '2021-11-16 09:46:10'),
(7, 'storage/logo90-1637063196.png', 'storage/main_image705-1637063196.png', '[\"storage\\/certificate183-1637063196.png\"]', '1972-02-25T16:35', '2021-11-16 09:46:36', '2021-11-16 09:46:36'),
(8, 'storage/logo176-1637493979.png', 'storage/main_image987-1637493979.png', '[\"storage\\/certificate734-1637493979.png\"]', '2021-11-04T13:26', '2021-11-21 09:26:19', '2021-11-21 09:26:19');

-- --------------------------------------------------------

--
-- Table structure for table `company_translations`
--

CREATE TABLE `company_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_translations`
--

INSERT INTO `company_translations` (`id`, `company_id`, `name`, `description`, `locale`, `created_at`, `updated_at`) VALUES
(7, 4, 'Kirk Berg', '<blockquote>\r\n<ol>\r\n	<li>asdasdadsdad</li>\r\n</ol>\r\n</blockquote>', 'en', '2021-11-16 09:45:18', '2021-11-22 10:38:12'),
(8, 4, 'خالد الحربى', '<p>asdasdasdasd</p>', 'ar', '2021-11-16 09:45:18', '2021-11-16 09:45:18'),
(9, 5, 'Kirk Berg', '<p>asdasdadsdad</p>', 'en', '2021-11-16 09:45:52', '2021-11-16 09:45:52'),
(10, 5, 'خالد الحربى', '<p>asdasdasdasd</p>', 'ar', '2021-11-16 09:45:52', '2021-11-16 09:45:52'),
(11, 6, 'Kirk Berg', '<p>asdasdadsdad</p>', 'en', '2021-11-16 09:46:10', '2021-11-16 09:46:10'),
(12, 6, 'خالد الحربى', '<p>asdasdasdasd</p>', 'ar', '2021-11-16 09:46:10', '2021-11-16 09:46:10'),
(13, 7, 'Kirk Berg', '<p>asdasdadsdad</p>', 'en', '2021-11-16 09:46:36', '2021-11-16 09:46:36'),
(14, 7, 'خالد الحربى', '<p>asdasdasdasd</p>', 'ar', '2021-11-16 09:46:36', '2021-11-16 09:46:36'),
(15, 8, 'law', '<p>aSDASaDSASSAsDASDA</p>', 'en', '2021-11-21 09:26:19', '2021-11-21 09:26:19'),
(16, 8, 'قواعد', '<p>ASADASDASDASDASD</p>', 'ar', '2021-11-21 09:26:19', '2021-11-21 09:26:19');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(32, '2014_10_12_000000_create_users_table', 1),
(33, '2014_10_12_100000_create_password_resets_table', 1),
(34, '2019_08_19_000000_create_failed_jobs_table', 1),
(35, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(36, '2021_11_14_072535_create_settings_table', 1),
(37, '2021_11_14_072548_create_setting_translations_table', 1),
(38, '2021_11_14_072601_create_services_table', 1),
(39, '2021_11_14_072620_create_service_translations_table', 1),
(40, '2021_11_14_072644_create_partners_table', 1),
(41, '2021_11_14_072655_create_partner_translations_table', 1),
(42, '2021_11_14_072722_create_testimonials_table', 1),
(43, '2021_11_14_072731_create_testimonial_translations_table', 1),
(44, '2021_11_14_072750_create_companies_table', 1),
(45, '2021_11_14_072802_create_company_translations_table', 1),
(46, '2021_11_14_080854_create_sliders_table', 1),
(47, '2021_11_14_080930_create_slider_translations_table', 1),
(48, '2021_11_14_081706_create_teams_table', 1),
(49, '2021_11_14_081733_create_team_translations_table', 1),
(50, '2021_11_15_090010_create_packages_table', 2),
(51, '2021_11_15_090033_create_package_translations_table', 2),
(52, '2021_11_18_120322_create_socails_table', 3),
(53, '2021_11_22_104628_create_pages_table', 4),
(54, '2021_11_22_104640_create_page_translations_table', 4),
(55, '2021_11_22_105504_create_socials_table', 5),
(56, '2021_11_23_072705_create_statistics_table', 6),
(57, '2021_11_23_072727_create_statistic_translations_table', 6),
(58, '2021_11_23_073504_create_contacts_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `image`, `icon`, `duration`, `price`, `created_at`, `updated_at`) VALUES
(3, 'storage/image246-1637072775.jpg', NULL, '1 month', '90', '2021-11-16 12:26:15', '2021-11-16 12:26:15'),
(4, 'storage/image970-1637072818.jpg', NULL, '1 month', '90', '2021-11-16 12:26:58', '2021-11-16 12:26:58'),
(5, 'storage/image248-1637073193.jpg', NULL, '1 month', '500', '2021-11-16 12:33:13', '2021-11-16 12:33:13'),
(6, NULL, 'fas fa-address-book', '1 month', '150', '2021-11-16 12:36:00', '2021-11-16 12:36:00'),
(7, 'storage/image66-1637073429.jpg', NULL, '1 month', '500', '2021-11-16 12:37:09', '2021-11-16 12:37:09'),
(8, 'storage/image471-1637073501.jpg', NULL, NULL, NULL, '2021-11-16 12:38:21', '2021-11-16 12:38:21'),
(10, 'storage/image935-1637131902.jpg', 'fas fa-address-card', '1 month', '90', '2021-11-17 04:51:42', '2021-11-17 04:51:42'),
(11, 'storage/image867-1637494918.png', 'fas fa-bullseye', 'Animi nostrum dolor', '90', '2021-11-21 09:41:58', '2021-11-21 09:41:58'),
(12, 'storage/image89-1637496906.png', 'fas fa-ban', 'Rerum debitis ad qui', '670', '2021-11-21 10:15:06', '2021-11-21 10:15:27');

-- --------------------------------------------------------

--
-- Table structure for table `package_translations`
--

CREATE TABLE `package_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_translations`
--

INSERT INTO `package_translations` (`id`, `package_id`, `name`, `detail`, `description`, `locale`, `created_at`, `updated_at`) VALUES
(3, 3, 'lawsss', '<p>Negotiating and drafting internal and international commercial contracts and reviewing those contracts in accordance with the applicable laws and regulations. &bull; Providing legal advice related to all commercial deals and contracts, whether local or international. We also represent our clients externally and attend meetings related to those businesses. &bull; Resolve disputes of a commercial nature according to reliable professional principles and standards.</p>', 'dsadasdasdas', 'en', '2021-11-16 12:26:15', '2021-11-16 12:26:15'),
(4, 3, 'قواعد', '<p>وهي التي تصدرها الادارة بغرض وضع القانون موضع التنفيذ ، وهي تخضع تماماً للقانون وتقيد به وتتبعه ، فلا تملك ان تعدل فيه او تضف اليه او تعطل تنفيذه. 2- لوائح الضبط : وهي تلك اللوائح التي تصدرها الادارة بقصد المحافظة على النظام العام بعناصره المختلفة، الامن العام ،والصحة العامة والسكنية العامة ،وهي مهمه بالغة الاهمية لتعلقها مباشرة بحياة الافراد وتقيد حرياتهم لانها تتضمن اوامر ونواهي و توقع العقوبات على مخالفيها ،مثل لوائح المرور وحماية الاغذية والمشروبات والمحال العامة .</p>', 'خدمة 1خدمة 1خدمة 1خدمة 1خدمة 1خدمة 1', 'ar', '2021-11-16 12:26:15', '2021-11-16 12:26:15'),
(5, 4, 'lawsss', '<p>Negotiating and drafting internal and international commercial contracts and reviewing those contracts in accordance with the applicable laws and regulations. &bull; Providing legal advice related to all commercial deals and contracts, whether local or international. We also represent our clients externally and attend meetings related to those businesses. &bull; Resolve disputes of a commercial nature according to reliable professional principles and standards.</p>', 'dsadasdasdas', 'en', '2021-11-16 12:26:58', '2021-11-16 12:26:58'),
(6, 4, 'قواعد', '<p>وهي التي تصدرها الادارة بغرض وضع القانون موضع التنفيذ ، وهي تخضع تماماً للقانون وتقيد به وتتبعه ، فلا تملك ان تعدل فيه او تضف اليه او تعطل تنفيذه. 2- لوائح الضبط : وهي تلك اللوائح التي تصدرها الادارة بقصد المحافظة على النظام العام بعناصره المختلفة، الامن العام ،والصحة العامة والسكنية العامة ،وهي مهمه بالغة الاهمية لتعلقها مباشرة بحياة الافراد وتقيد حرياتهم لانها تتضمن اوامر ونواهي و توقع العقوبات على مخالفيها ،مثل لوائح المرور وحماية الاغذية والمشروبات والمحال العامة .</p>', 'خدمة 1خدمة 1خدمة 1خدمة 1خدمة 1خدمة 1', 'ar', '2021-11-16 12:26:58', '2021-11-16 12:26:58'),
(7, 5, 'Kirk Berg', '<p>dasdasdasdasdasdasd</p>', 'Labore culpa volupt', 'en', '2021-11-16 12:33:13', '2021-11-16 12:33:13'),
(8, 5, 'خالد الحربى', '<p>خدمة 1خدمة 1خدمة 1خدمة 1خدمة 1خدمة 1</p>', 'خدمة 1خدمة 1خدمة 1خدمة 1خدمة 1خدمة 1', 'ar', '2021-11-16 12:33:13', '2021-11-16 12:33:13'),
(9, 6, 'client 1222', '<p>Preparing and formulating studies, systems and regulations, and developing legal plans and strategies for the organization&rsquo;s requirements &bull; Laying down the necessary legal foundations for the departments concerned with governance, risk and commitment and setting their own regulations through the experience that we are distinguished by and the success of many public shareholding companies with which we established those departments and committees related to them according to the highest Governance Standards &bull; Study the best international experiences and compare them with the local environment</p>', 'Labore culpa volupt', 'en', '2021-11-16 12:36:00', '2021-11-16 12:36:00'),
(10, 6, 'خالد الحربى', '<p>وهي التي تصدرها الادارة بغرض وضع القانون موضع التنفيذ ، وهي تخضع تماماً للقانون وتقيد به وتتبعه ، فلا تملك ان تعدل فيه او تضف اليه او تعطل تنفيذه. 2- لوائح الضبط : وهي تلك اللوائح التي تصدرها الادارة بقصد المحافظة على النظام العام بعناصره المختلفة، الامن العام ،والصحة العامة والسكنية العامة ،وهي مهمه بالغة الاهمية لتعلقها مباشرة بحياة الافراد وتقيد حرياتهم لانها تتضمن اوامر ونواهي و توقع العقوبات على مخالفيها ،مثل لوائح المرور وحماية الاغذية والمشروبات والمحال العامة .</p>', 'خدمة 1خدمة 1خدمة 1خدمة 1خدمة 1خدمة 1', 'ar', '2021-11-16 12:36:00', '2021-11-16 12:36:00'),
(11, 7, 'rule', '<p>Preparing and formulating studies, systems and regulations, and developing legal plans and strategies for the organization&rsquo;s requirements &bull; Laying down the necessary legal foundations for the departments concerned with governance, risk and commitment and setting their own regulations through the experience that we are distinguished by and the success of many public shareholding companies with which we established those departments and committees related to them according to the highest Governance Standards &bull; Study the best international experiences and compare them with the local environment</p>', 'Labore culpa volupt', 'en', '2021-11-16 12:37:09', '2021-11-16 12:37:09'),
(12, 7, 'عميل 12', '<p>وهي التي تصدرها الادارة بغرض وضع القانون موضع التنفيذ ، وهي تخضع تماماً للقانون وتقيد به وتتبعه ، فلا تملك ان تعدل فيه او تضف اليه او تعطل تنفيذه. 2- لوائح الضبط : وهي تلك اللوائح التي تصدرها الادارة بقصد المحافظة على النظام العام بعناصره المختلفة، الامن العام ،والصحة العامة والسكنية العامة ،وهي مهمه بالغة الاهمية لتعلقها مباشرة بحياة الافراد وتقيد حرياتهم لانها تتضمن اوامر ونواهي و توقع العقوبات على مخالفيها ،مثل لوائح المرور وحماية الاغذية والمشروبات والمحال العامة .</p>', 'خدمة 1خدمة 1خدمة 1خدمة 1خدمة 1خدمة 1', 'ar', '2021-11-16 12:37:09', '2021-11-16 12:37:09'),
(13, 8, 'rule', '<p>Preparing and formulating studies, systems and regulations, and developing legal plans and strategies for the organization&rsquo;s requirements &bull; Laying down the necessary legal foundations for the departments concerned with governance, risk and commitment and setting their own regulations through the experience that we are distinguished by and the success of many public shareholding companies with which we established those departments and committees related to them according to the highest Governance Standards &bull; Study the best international experiences and compare them with the local environment</p>', 'Labore culpa volupt', 'en', '2021-11-16 12:38:21', '2021-11-16 12:38:21'),
(14, 8, 'عميل 12', '<p>وهي التي تصدرها الادارة بغرض وضع القانون موضع التنفيذ ، وهي تخضع تماماً للقانون وتقيد به وتتبعه ، فلا تملك ان تعدل فيه او تضف اليه او تعطل تنفيذه. 2- لوائح الضبط : وهي تلك اللوائح التي تصدرها الادارة بقصد المحافظة على النظام العام بعناصره المختلفة، الامن العام ،والصحة العامة والسكنية العامة ،وهي مهمه بالغة الاهمية لتعلقها مباشرة بحياة الافراد وتقيد حرياتهم لانها تتضمن اوامر ونواهي و توقع العقوبات على مخالفيها ،مثل لوائح المرور وحماية الاغذية والمشروبات والمحال العامة .</p>', 'خدمة 1خدمة 1خدمة 1خدمة 1خدمة 1خدمة 1', 'ar', '2021-11-16 12:38:21', '2021-11-16 12:38:21'),
(17, 10, 'lawsss', '<p>sdadasdasdasd</p>', 'dsadasdasdas', 'en', '2021-11-17 04:51:42', '2021-11-17 04:51:42'),
(18, 10, 'على المحمدى', '<p>خدمة 1خدمة 1خدمة 1خدمة 1خدمة 1خدمة 1</p>', 'خدمة 1خدمة 1خدمة 1خدمة 1خدمة 1خدمة 1', 'ar', '2021-11-17 04:51:42', '2021-11-17 04:51:42'),
(19, 11, 'rule', '<p>WAEEEEEEEEEEEEEEEEEEE</p>', 'dsadasdasdas', 'en', '2021-11-21 09:41:58', '2021-11-21 09:41:58'),
(20, 11, 'قواعد', '<p>وتسمى ايضا اللوائح المستقلة وهي اللوائح التي تتعدى تنفيذ القوانين الى تنظيم بعض الامور التي لم يتطرق اليها القانون فتقترب وظيفتها من التشريع .</p>', 'وتسمى ايضا اللوائح المستقلة وهي اللوائح التي تتعدى تنفيذ القوانين الى تنظيم بعض الامور التي لم يتطرق اليها القانون فتقترب وظيفتها من التشريع .', 'ar', '2021-11-21 09:41:58', '2021-11-21 09:41:58'),
(21, 12, 'Cameron Mcdaniel', '<p>وهي التي تصدرها الادارة بغرض وضع القانون موضع التنفيذ ، وهي تخضع تماماً للقانون وتقيد به وتتبعه ، فلا تملك ان تعدل فيه او تضف اليه او تعطل تنفيذه. 2- لوائح الضبط : وهي تلك اللوائح التي تصدرها الادارة بقصد المحافظة على النظام العام بعناصره المختلفة، الامن العام ،والصحة العامة والسكنية العامة ،وهي مهمه بالغة الاهمية لتعلقها مباشرة بحياة الافراد وتقيد حرياتهم لانها تتضمن اوامر ونواهي و توقع العقوبات على مخالفيها ،مثل لوائح المرور وحماية الاغذية والمشروبات والمحال العامة .</p>', 'Labore nostrum ut qu', 'en', '2021-11-21 10:15:06', '2021-11-21 10:15:06'),
(22, 12, 'Myles Shelton', '<p>وهي التي تصدرها الادارة بغرض وضع القانون موضع التنفيذ ، وهي تخضع تماماً للقانون وتقيد به وتتبعه ، فلا تملك ان تعدل فيه او تضف اليه او تعطل تنفيذه. 2- لوائح الضبط : وهي تلك اللوائح التي تصدرها الادارة بقصد المحافظة على النظام العام بعناصره المختلفة، الامن العام ،والصحة العامة والسكنية العامة ،وهي مهمه بالغة الاهمية لتعلقها مباشرة بحياة الافراد وتقيد حرياتهم لانها تتضمن اوامر ونواهي و توقع العقوبات على مخالفيها ،مثل لوائح المرور وحماية الاغذية والمشروبات والمحال العامة .</p>', 'Itaque aliquid ipsum', 'ar', '2021-11-21 10:15:06', '2021-11-21 10:15:06');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `image`, `file`, `created_at`, `updated_at`) VALUES
(5, 'gfgcgcg', NULL, '2021-11-22 12:12:49', '2021-11-22 12:12:49'),
(6, '[\"storage\\/files\\/image118-1637590776.jpg\",\"storage\\/files\\/image643-1637590776.jpg\"]', NULL, '2021-11-22 12:19:36', '2021-11-22 12:19:36'),
(7, '[\"storage\\/files\\/image131-1637590819.jpg\",\"storage\\/files\\/image14-1637590819.jpg\"]', NULL, '2021-11-22 12:20:19', '2021-11-22 12:20:19'),
(8, '[\"storage\\/files\\/image793-1637591109.jpg\",\"storage\\/files\\/image187-1637591109.jpg\"]', NULL, '2021-11-22 12:25:09', '2021-11-22 12:25:09'),
(9, '[\"storage\\/files\\/image107-1637593161.jpg\",\"storage\\/files\\/image67-1637593750.jpg\",\"storage\\/files\\/image90-1637593750.jpg\"]', NULL, '2021-11-22 12:43:11', '2021-11-22 13:09:10');

-- --------------------------------------------------------

--
-- Table structure for table `page_translations`
--

CREATE TABLE `page_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_translations`
--

INSERT INTO `page_translations` (`id`, `page_id`, `name`, `description`, `locale`, `created_at`, `updated_at`) VALUES
(9, 5, 'lawsss', '<p>Xasdasdasdasd</p>', 'en', '2021-11-22 12:12:49', '2021-11-22 12:12:49'),
(10, 5, 'على المحمدى', '<p>adasdasdasd</p>', 'ar', '2021-11-22 12:12:49', '2021-11-22 12:12:49'),
(11, 6, 'law', '<p>dasdasdas</p>', 'en', '2021-11-22 12:19:36', '2021-11-22 12:19:36'),
(12, 6, 'dasdas', '<p>sdadas</p>', 'ar', '2021-11-22 12:19:36', '2021-11-22 12:19:36'),
(13, 7, 'sdffsd', '<p>sdffsd</p>', 'en', '2021-11-22 12:20:19', '2021-11-22 12:20:19'),
(14, 7, 'dasdas', '<p>dsadas</p>', 'ar', '2021-11-22 12:20:19', '2021-11-22 12:20:19'),
(15, 8, 'law', '<p>werwerwerwer</p>', 'en', '2021-11-22 12:25:09', '2021-11-22 12:25:09'),
(16, 8, 'قواعد', '<p>قواعد</p>', 'ar', '2021-11-22 12:25:09', '2021-11-22 12:25:09'),
(17, 9, 'law', '<p>asasasas</p>', 'en', '2021-11-22 12:43:11', '2021-11-22 12:43:11'),
(18, 9, 'على المحمدى', '<p>على المحمدى</p>', 'ar', '2021-11-22 12:43:11', '2021-11-22 12:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'storage/logo885-1637059998.jpg', '2021-11-16 08:53:18', '2021-11-16 08:53:18'),
(2, 'storage/logo967-1637493765.jpg', '2021-11-21 09:22:45', '2021-11-21 09:22:45'),
(3, 'storage/logo91-1637494492.png', '2021-11-21 09:34:52', '2021-11-21 09:34:52');

-- --------------------------------------------------------

--
-- Table structure for table `partner_translations`
--

CREATE TABLE `partner_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partner_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner_translations`
--

INSERT INTO `partner_translations` (`id`, `partner_id`, `name`, `locale`, `created_at`, `updated_at`) VALUES
(1, 1, 'lawsss', 'en', '2021-11-16 08:53:18', '2021-11-16 08:53:18'),
(2, 1, 'قواعد2', 'ar', '2021-11-16 08:53:18', '2021-11-16 08:53:18'),
(3, 2, 'lawsss', 'en', '2021-11-21 09:22:45', '2021-11-21 09:22:45'),
(4, 2, 'على المحمدى', 'ar', '2021-11-21 09:22:45', '2021-11-21 09:22:45'),
(5, 3, 'law', 'en', '2021-11-21 09:34:52', '2021-11-21 09:34:52'),
(6, 3, 'على المحمدى', 'ar', '2021-11-21 09:34:52', '2021-11-21 09:34:52');

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'storage/image362-1637133758.jpg', 'fas fa-air-freshener', '2021-11-17 05:22:38', '2021-11-17 05:22:38'),
(3, 'storage/image57-1637495019.png', 'fas fa-bullseye', '2021-11-21 09:43:39', '2021-11-21 09:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `service_translations`
--

CREATE TABLE `service_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_translations`
--

INSERT INTO `service_translations` (`id`, `service_id`, `name`, `description`, `locale`, `created_at`, `updated_at`) VALUES
(1, 1, 'law', '<p>dadadasdadasdasd</p>', 'en', '2021-11-17 05:22:38', '2021-11-17 05:22:38'),
(2, 1, 'على المحمدى', '<p>اهلا بكم&nbsp;</p>', 'ar', '2021-11-17 05:22:38', '2021-11-17 05:22:38'),
(5, 3, 'client 1', '<p>SSSSSSSSSSSS</p>', 'en', '2021-11-21 09:43:39', '2021-11-21 09:43:39'),
(6, 3, 'خالد الحربى', '<p>description</p>', 'ar', '2021-11-21 09:43:39', '2021-11-21 09:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_white` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `po_box` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `logo_white`, `phone`, `email`, `facebook`, `twitter`, `linkedin`, `instagram`, `website`, `fax`, `map`, `start`, `client`, `whatsapp`, `po_box`, `created_at`, `updated_at`) VALUES
(1, 'storage/logo280-1637235094.png', 'storage/logo_white404-1637235094.png', 'sadasdasd', 'asdasdasd', 'asdada', 'adasdada', 'adasdasd', 'asdasdas', 'adasdas', 'adasdad', 'asdasdasd', 'asdasdasd', 'asdada', 'asdadasd', 'adadasd', NULL, '2021-11-18 09:31:34');

-- --------------------------------------------------------

--
-- Table structure for table `setting_translations`
--

CREATE TABLE `setting_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `setting_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_times` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyrights` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_translations`
--

INSERT INTO `setting_translations` (`id`, `setting_id`, `name`, `address`, `working_times`, `copyrights`, `description`, `locale`, `created_at`, `updated_at`) VALUES
(4, 1, 'sadasdasdas', 'asdasdasdasdasd', 'asdasdasd', 'adasdasdddddddddddddddddddddddd', '<p>ddddddddddddddddddddddddddddd</p>', 'en', '2021-11-17 08:46:19', '2021-11-18 09:38:02'),
(5, 1, 'لوحة التحكم', 'الرياض : حي الملقا   طريق أنس بن مالك  مبنى ناجز ( للخدمات العدلية )  الدور الثاني', 'من 9 الي 4', 'جيمع الحوقوق محفوظة', '<p>ببسيبسبيبسي</p>', 'ar', '2021-11-17 08:46:19', '2021-11-18 09:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(15, 'storage/image183-1637053978.jpg', '2021-11-16 07:12:58', '2021-11-16 07:12:58'),
(16, 'storage/image354-1637493632.jpg', '2021-11-21 09:20:32', '2021-11-21 09:20:32'),
(17, 'storage/image888-1637494356.jpg', '2021-11-21 09:30:58', '2021-11-21 09:32:36');

-- --------------------------------------------------------

--
-- Table structure for table `slider_translations`
--

CREATE TABLE `slider_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_translations`
--

INSERT INTO `slider_translations` (`id`, `slider_id`, `name`, `description`, `locale`, `created_at`, `updated_at`) VALUES
(25, 15, 'lawsss', '<p>sdasdasda</p>', 'en', '2021-11-16 07:12:58', '2021-11-16 07:12:58'),
(26, 15, 'dasdasd', '<p>asdasdasd</p>', 'ar', '2021-11-16 07:12:58', '2021-11-16 07:12:58'),
(27, 16, 'lawsss', '<p>asdasdcadasdasda</p>', 'en', '2021-11-21 09:20:32', '2021-11-21 09:20:32'),
(28, 16, 'عميل 12', '<p>sadasdasdadasd</p>', 'ar', '2021-11-21 09:20:32', '2021-11-21 09:20:32'),
(29, 17, 'law', '<p>سشبشسيبسشيبشسشسب</p>', 'en', '2021-11-21 09:30:58', '2021-11-21 09:30:58'),
(30, 17, 'ضثقصثفقثص', '<p>فثصقفصثفصثقفصثق</p>', 'ar', '2021-11-21 09:30:58', '2021-11-21 09:30:58');

-- --------------------------------------------------------

--
-- Table structure for table `socails`
--

CREATE TABLE `socails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socails`
--

INSERT INTO `socails` (`id`, `name`, `url`, `icon`, `created_at`, `updated_at`) VALUES
(2, '\"asdsdasd\"', '\"https:\\/\\/alaskarlaw.com\\/service\"', '\"fab fa-blogger-b\"', '2021-11-21 06:05:49', '2021-11-21 06:05:49'),
(3, '\"asdsdasd\"', '\"https:\\/\\/alaskarlaw.com\\/service\"', '\"Facebook\"', '2021-11-21 06:25:28', '2021-11-21 06:25:28'),
(4, '\"Tad Watkins\"', '\"Molestiae non autem\"', '\"\\u0627\\u0646\\u0633\\u062c\\u0631\\u0627\\u0645\"', '2021-11-21 06:35:43', '2021-11-21 06:35:43'),
(5, '\"Elliott Cooke\"', '\"Nemo unde omnis perf\"', '\"\\u062a\\u0648\\u064a\\u062a\\u0631\"', '2021-11-21 06:35:43', '2021-11-21 06:35:43'),
(7, '\"Tad Watkins\"', 'https:\\/\\/alaskarlaw.com\\/service', '\"\\u0644\\u064a\\u0646\\u0643\\u062f\\u0627\\u0646\"', '2021-11-21 06:42:03', '2021-11-21 06:42:03'),
(8, '\"Tad Watkins\"', 'https:\\/\\/alaskarlaw.com\\/service', '\"\\u0644\\u064a\\u0646\\u0643\\u062f\\u0627\\u0646\"', '2021-11-21 06:47:39', '2021-11-21 06:47:39'),
(10, NULL, 'https:\\/\\/www.facebook.com\\/nasryoum\\/', 'fab fa-facebook-f', '2021-11-21 07:16:06', '2021-11-21 07:16:06'),
(11, NULL, 'https:\\/\\/twitter.com', 'fab fa-twitter', '2021-11-21 07:36:07', '2021-11-21 07:36:07'),
(12, NULL, 'https:\\/\\/alaskarlaw.com\\/service', 'fab fa-google-plus', '2021-11-21 10:04:37', '2021-11-21 10:04:37'),
(13, NULL, 'https:\\/\\/alaskarlaw.com\\/service', 'fab fa-facebook-f', '2021-11-21 10:04:57', '2021-11-21 10:08:48'),
(14, NULL, 'https:\\/\\/twitter.com', 'fab fa-instagram', '2021-11-21 10:04:57', '2021-11-21 10:08:55'),
(16, NULL, 'https:\\/\\/duo.google.com\\/', 'fab fa-snapchat', '2021-11-21 10:05:40', '2021-11-21 10:18:24');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `name`, `url`, `icon`, `created_at`, `updated_at`) VALUES
(1, NULL, 'dasdasdasdasdasd', 'fab fa-facebook-f', '2021-11-22 08:58:58', '2021-11-22 09:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `counter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `icon`, `counter`, `created_at`, `updated_at`) VALUES
(6, 'fas fa-adjust', '123', '2021-11-23 06:23:23', '2021-11-23 06:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `statistic_translations`
--

CREATE TABLE `statistic_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `statistic_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statistic_translations`
--

INSERT INTO `statistic_translations` (`id`, `statistic_id`, `name`, `description`, `locale`, `created_at`, `updated_at`) VALUES
(7, 6, 'lawsss', 'Labore culpa volupt', 'en', '2021-11-23 06:23:23', '2021-11-23 06:23:23'),
(8, 6, 'على المحمدى', 'خدمة 1خدمة 1خدمة 1خدمة 1خدمة 1خدمة 1', 'ar', '2021-11-23 06:23:23', '2021-11-23 06:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `image`, `created_at`, `updated_at`) VALUES
(9, 'storage/image376-1637493851.jpg', '2021-11-21 09:24:11', '2021-11-21 09:24:11');

-- --------------------------------------------------------

--
-- Table structure for table `team_translations`
--

CREATE TABLE `team_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_translations`
--

INSERT INTO `team_translations` (`id`, `team_id`, `name`, `title`, `locale`, `created_at`, `updated_at`) VALUES
(17, 9, 'lawsss', 'artical1', 'en', '2021-11-21 09:24:11', '2021-11-21 09:24:11'),
(18, 9, 'على المحمدى', 'فستان 1', 'ar', '2021-11-21 09:24:11', '2021-11-21 09:24:11');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'storage/image777-1637139787.jpg', '2021-11-17 07:03:08', '2021-11-17 07:03:08'),
(3, 'storage/image680-1637139913.jpg', '2021-11-17 07:05:13', '2021-11-17 07:05:13');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_translations`
--

CREATE TABLE `testimonial_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testimonial_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial_translations`
--

INSERT INTO `testimonial_translations` (`id`, `testimonial_id`, `name`, `description`, `locale`, `created_at`, `updated_at`) VALUES
(1, 1, 'Chastity Mcgowan', 'Pariatur Fugiat ve', 'en', '2021-11-17 07:03:08', '2021-11-17 07:03:08'),
(2, 1, 'على المحمدى', 'sdasdasdasd', 'ar', '2021-11-17 07:03:08', '2021-11-17 07:03:08'),
(5, 3, 'Chastity Mcgowan', 'Pariatur Fugiat ve', 'en', '2021-11-17 07:05:13', '2021-11-17 07:05:13'),
(6, 3, 'على المحمدى', 'sdasdasdasd', 'ar', '2021-11-17 07:05:13', '2021-11-17 07:05:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$Ndxluh8ly.1JKV0M4bV8xeFVfpbeP7e8kZuSB1Zl5Da7NbpIg03c6', 'kyiJK5Ut12V1014COoadhAEQHeRkTnn1RInf7VlUYFjbnAzizoL2A3SO1oT6', NULL, NULL),
(2, 'marina essam', 'test@test.com', NULL, '$2y$10$PZ9JI/qvSF/mYg7x02S6HOQ4ODlfAQMDfExlkcGwa.GVrOp2Ddu..', NULL, '2021-11-22 05:59:38', '2021-11-22 05:59:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_translations`
--
ALTER TABLE `company_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `company_translations_company_id_locale_unique` (`company_id`,`locale`),
  ADD KEY `company_translations_locale_index` (`locale`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_translations`
--
ALTER TABLE `package_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `package_translations_package_id_locale_unique` (`package_id`,`locale`),
  ADD KEY `package_translations_locale_index` (`locale`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_translations`
--
ALTER TABLE `page_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_translations_page_id_locale_unique` (`page_id`,`locale`),
  ADD KEY `page_translations_locale_index` (`locale`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_translations`
--
ALTER TABLE `partner_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `partner_translations_partner_id_locale_unique` (`partner_id`,`locale`),
  ADD KEY `partner_translations_locale_index` (`locale`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `service_translations_service_id_locale_unique` (`service_id`,`locale`),
  ADD KEY `service_translations_locale_index` (`locale`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_translations_setting_id_locale_unique` (`setting_id`,`locale`),
  ADD KEY `setting_translations_locale_index` (`locale`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_translations`
--
ALTER TABLE `slider_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slider_translations_slider_id_locale_unique` (`slider_id`,`locale`),
  ADD KEY `slider_translations_locale_index` (`locale`);

--
-- Indexes for table `socails`
--
ALTER TABLE `socails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistic_translations`
--
ALTER TABLE `statistic_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `statistic_translations_statistic_id_locale_unique` (`statistic_id`,`locale`),
  ADD KEY `statistic_translations_locale_index` (`locale`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_translations`
--
ALTER TABLE `team_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_translations_team_id_locale_unique` (`team_id`,`locale`),
  ADD KEY `team_translations_locale_index` (`locale`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial_translations`
--
ALTER TABLE `testimonial_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `testimonial_translations_testimonial_id_locale_unique` (`testimonial_id`,`locale`),
  ADD KEY `testimonial_translations_locale_index` (`locale`);

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
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `company_translations`
--
ALTER TABLE `company_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `package_translations`
--
ALTER TABLE `package_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `page_translations`
--
ALTER TABLE `page_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `partner_translations`
--
ALTER TABLE `partner_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_translations`
--
ALTER TABLE `service_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_translations`
--
ALTER TABLE `setting_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `slider_translations`
--
ALTER TABLE `slider_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `socails`
--
ALTER TABLE `socails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `statistic_translations`
--
ALTER TABLE `statistic_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `team_translations`
--
ALTER TABLE `team_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonial_translations`
--
ALTER TABLE `testimonial_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company_translations`
--
ALTER TABLE `company_translations`
  ADD CONSTRAINT `company_translations_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Constraints for table `package_translations`
--
ALTER TABLE `package_translations`
  ADD CONSTRAINT `package_translations_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`);

--
-- Constraints for table `page_translations`
--
ALTER TABLE `page_translations`
  ADD CONSTRAINT `page_translations_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`);

--
-- Constraints for table `partner_translations`
--
ALTER TABLE `partner_translations`
  ADD CONSTRAINT `partner_translations_partner_id_foreign` FOREIGN KEY (`partner_id`) REFERENCES `partners` (`id`);

--
-- Constraints for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD CONSTRAINT `service_translations_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Constraints for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD CONSTRAINT `setting_translations_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`);

--
-- Constraints for table `slider_translations`
--
ALTER TABLE `slider_translations`
  ADD CONSTRAINT `slider_translations_slider_id_foreign` FOREIGN KEY (`slider_id`) REFERENCES `sliders` (`id`);

--
-- Constraints for table `statistic_translations`
--
ALTER TABLE `statistic_translations`
  ADD CONSTRAINT `statistic_translations_statistic_id_foreign` FOREIGN KEY (`statistic_id`) REFERENCES `pages` (`id`);

--
-- Constraints for table `team_translations`
--
ALTER TABLE `team_translations`
  ADD CONSTRAINT `team_translations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `testimonial_translations`
--
ALTER TABLE `testimonial_translations`
  ADD CONSTRAINT `testimonial_translations_testimonial_id_foreign` FOREIGN KEY (`testimonial_id`) REFERENCES `testimonials` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
