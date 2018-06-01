-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 10:36 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urc_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `urc_018system3_animals`
--

CREATE TABLE `urc_018system3_animals` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `type_animal` varchar(255) DEFAULT NULL,
  `big_nimal` int(11) DEFAULT NULL,
  `small_animal` int(11) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `urc_018system3_assets_electronic`
--

CREATE TABLE `urc_018system3_assets_electronic` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `type_matereil` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT 'ទ្រព្យ​សម្បត្តិសំភារៈប្រើប្រាស់អេឡិចត្រូនិច​របស់​គ្រួសារ'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `urc_018system3_assets_electronic`
--

INSERT INTO `urc_018system3_assets_electronic` (`id`, `patient_id`, `type_matereil`, `qty`, `price`, `total`, `created_at`, `updated_at`, `status`) VALUES
(1, 33, 23, 231, 2222, 33333, NULL, NULL, 1),
(2, 34, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(3, 35, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, 36, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, 37, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(6, 38, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(7, 39, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(8, 40, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(9, 41, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(10, 44, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(11, 45, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `urc_018system3_debt`
--

CREATE TABLE `urc_018system3_debt` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `debt_status` int(11) DEFAULT NULL COMMENT '0=មិនមាន​បំណុលទេ​ ,1=មានបំណុល',
  `debt_not_return` float DEFAULT NULL,
  `borrow_status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `urc_018system3_earning_in`
--

CREATE TABLE `urc_018system3_earning_in` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `earner_name` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `job` varchar(50) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `qty_unit_per_month` int(11) DEFAULT NULL,
  `avg_money_per_unit` float NOT NULL,
  `earning_avg_monthly` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT 'ចំណូល ផ្សេងពី សកម្មភាពកសិកម្ម ផ្ទាល់ខ្លួន​ (បញ្ជាក់ការងារកម្មករផ្នែកកសិកម្មត្រូវបញ្ចូលក្នុងតារាងនេះ) បញ្ជាក់ ៖ ចុះ​តែ​សមាជិក​គ្រួសារ​ដែល​រក​ប្រាក់​ចំណូល​បាន។ ចំពោះសមាជិកដែលមានប្រភពចំណូលលើសពីមួយ សូមសរសេរ​នៅក្នុងជួរដោយឡែកពីគ្នា។'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `urc_018system3_electronic`
--

CREATE TABLE `urc_018system3_electronic` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `connect_status` int(11) DEFAULT NULL,
  `price_in_kwh` float DEFAULT NULL,
  `kwh_per_month` float DEFAULT NULL,
  `avg_pay_per_month` float DEFAULT NULL,
  `machine` int(11) DEFAULT NULL,
  `battery` int(11) DEFAULT NULL,
  `sola_energy` int(11) DEFAULT NULL,
  `lamp` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `urc_018system3_electronic`
--

INSERT INTO `urc_018system3_electronic` (`id`, `patient_id`, `connect_status`, `price_in_kwh`, `kwh_per_month`, `avg_pay_per_month`, `machine`, `battery`, `sola_energy`, `lamp`, `created_at`, `updated_at`, `status`) VALUES
(1, 38, 1, NULL, 2323.33, 23.55, NULL, 1, 1, 1, NULL, NULL, 1),
(2, 39, 1, 23, 34, 23, NULL, 1, 1, 1, NULL, NULL, 1),
(3, 40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, 41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, 44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(6, 45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `urc_018system3_family_house`
--

CREATE TABLE `urc_018system3_family_house` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `total_member` int(11) DEFAULT NULL,
  `owner_house` tinyint(255) DEFAULT NULL,
  `rent_house` tinyint(4) DEFAULT NULL,
  `no_house` tinyint(4) DEFAULT NULL,
  `stay_with_other` tinyint(4) DEFAULT NULL,
  `name_institution` varchar(255) DEFAULT NULL,
  `phone_institution` varchar(255) DEFAULT NULL,
  `monthly_rent_house` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT 'ផ្ទះសម្បែងរបស់ក្រុមគ្រួសារ'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `urc_018system3_family_house`
--

INSERT INTO `urc_018system3_family_house` (`id`, `patient_id`, `total_member`, `owner_house`, `rent_house`, `no_house`, `stay_with_other`, `name_institution`, `phone_institution`, `monthly_rent_house`, `created_at`, `updated_at`, `status`) VALUES
(1, 19, 56, 1, 1, 1, 1, 'tt', 'tt', NULL, NULL, NULL, 1),
(2, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(3, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, 23, 12, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(6, 24, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(7, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(8, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(9, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(10, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(11, 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(12, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(13, 31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(14, 32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(15, 33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(16, 34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(17, 35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(18, 36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(19, 37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(20, 38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(21, 39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(22, 40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(23, 41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(24, 44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(25, 45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `urc_018system3_farming`
--

CREATE TABLE `urc_018system3_farming` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `land_status` int(11) DEFAULT NULL COMMENT '0=គ្មាន,1=មាន,2= ដីផ្ទាល់ខ្លួន',
  `land_qty` int(11) DEFAULT NULL,
  `total_size_land` int(11) DEFAULT NULL,
  `farm_qty` int(11) DEFAULT NULL,
  `total_farm_size` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `urc_018system3_general_info`
--

CREATE TABLE `urc_018system3_general_info` (
  `id` int(11) NOT NULL,
  `interview_code` varchar(255) DEFAULT NULL,
  `pro_code` int(11) DEFAULT NULL,
  `dcode` int(11) DEFAULT NULL,
  `ccode` int(11) DEFAULT NULL,
  `vcode` int(11) DEFAULT NULL,
  `patient_name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `village_area` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `urc_018system3_general_info`
--

INSERT INTO `urc_018system3_general_info` (`id`, `interview_code`, `pro_code`, `dcode`, `ccode`, `vcode`, `patient_name`, `gender`, `age`, `phone`, `village_area`, `created_at`, `updated_at`, `status`) VALUES
(45, 'BTB18022301', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-30 21:50:57', '2018-06-01 03:01:43', 0),
(44, 'BTB18022301', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-30 21:43:50', '2018-06-01 03:01:35', 0),
(43, 'BTB18022301', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-30 21:41:53', '2018-06-01 03:01:23', 0),
(42, 'BTB18022301', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-30 21:25:42', '2018-06-01 03:01:15', 0),
(17, 'BTB18022301', 13, 111, 1018, 8851, 'Hean Thien', 'Male', 23, '0109988282', 1, '2018-05-29 10:35:28', '2018-05-29 10:35:28', 1),
(40, 'BTB18022301', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-30 18:24:58', '2018-05-30 18:25:50', 0),
(41, 'BTB18022301', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-30 18:36:16', '2018-05-30 18:37:23', 0),
(16, 'BTB18022301', 18, 159, 1387, 11918, 'Hean Thien', 'Male', 34, '0109988282', 1, '2018-05-29 10:30:00', '2018-05-29 10:30:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `urc_018system3_general_k2`
--

CREATE TABLE `urc_018system3_general_k2` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `k2_name` varchar(255) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `relation` varchar(255) DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT 'ព័ត៌មានអំពីអ្នកដែលផ្តល់ចំលើយ(អ្នកដែលបានសំភាសន៏)'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `urc_018system3_general_k2`
--

INSERT INTO `urc_018system3_general_k2` (`id`, `patient_id`, `k2_name`, `gender`, `age`, `phone`, `relation`, `update_at`, `updated_at`, `status`) VALUES
(10, 19, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(9, 18, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(8, 17, 'Mr.A', 'Male', 24, '0987654333', '2', NULL, NULL, 1),
(7, 16, 'Mr.A', 'Male', 34, '0987654333', '1', NULL, NULL, 1),
(11, 20, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(12, 21, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(13, 22, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(14, 23, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(15, 24, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(16, 25, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(17, 26, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(18, 27, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(19, 28, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(20, 29, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(21, 30, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(22, 31, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(23, 32, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(24, 33, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(25, 34, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(26, 35, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(27, 36, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(28, 37, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(29, 38, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(30, 39, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(31, 40, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(32, 41, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(33, 42, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(34, 43, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(35, 44, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(36, 45, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `urc_018system3_general_k3`
--

CREATE TABLE `urc_018system3_general_k3` (
  `id` int(11) NOT NULL COMMENT ' ព័ត៌មានអំពី​ អ្នកដែលអាចបញ្ជាក់ពីស្ថានភាពគ្រួសារ ',
  `patient_id` int(11) NOT NULL DEFAULT '0',
  `k3_name` varchar(255) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `relation` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `urc_018system3_general_k3`
--

INSERT INTO `urc_018system3_general_k3` (`id`, `patient_id`, `k3_name`, `gender`, `age`, `phone`, `relation`, `created_at`, `updated_at`, `status`) VALUES
(5, 17, 'Boy', 'Male', 34, '0998876555', '5', NULL, NULL, 1),
(4, 16, 'Boy', NULL, 23, '0998876555', '1', NULL, NULL, 1),
(6, 18, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(7, 19, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(8, 20, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(9, 21, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(10, 22, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(11, 23, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(12, 24, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(13, 25, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(14, 26, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(15, 27, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(16, 28, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(17, 29, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(18, 30, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(19, 31, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(20, 32, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(21, 33, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(22, 34, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(23, 35, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(24, 36, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(25, 37, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(26, 38, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(27, 39, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(28, 40, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(29, 41, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(30, 42, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(31, 43, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(32, 44, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1),
(33, 45, NULL, NULL, NULL, NULL, '1', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `urc_018system3_house_downinfo`
--

CREATE TABLE `urc_018system3_house_downinfo` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `width` int(11) DEFAULT NULL,
  `lenght` int(11) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT 'ផ្ទះជាន់ក្រោម'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `urc_018system3_house_downinfo`
--

INSERT INTO `urc_018system3_house_downinfo` (`id`, `patient_id`, `width`, `lenght`, `area`, `created_at`, `update_at`, `status`) VALUES
(1, 24, 1, 2, 4, NULL, NULL, 1),
(2, 25, NULL, NULL, NULL, NULL, NULL, 1),
(3, 26, NULL, NULL, NULL, NULL, NULL, 1),
(4, 27, NULL, NULL, NULL, NULL, NULL, 1),
(5, 28, NULL, NULL, NULL, NULL, NULL, 1),
(6, 29, NULL, NULL, NULL, NULL, NULL, 1),
(7, 30, NULL, NULL, NULL, NULL, NULL, 1),
(8, 31, NULL, NULL, NULL, NULL, NULL, 1),
(9, 32, NULL, NULL, NULL, NULL, NULL, 1),
(10, 33, NULL, NULL, NULL, NULL, NULL, 1),
(11, 34, NULL, NULL, NULL, NULL, NULL, 1),
(12, 35, NULL, NULL, NULL, NULL, NULL, 1),
(13, 36, NULL, NULL, NULL, NULL, NULL, 1),
(14, 37, NULL, NULL, NULL, NULL, NULL, 1),
(15, 38, NULL, NULL, NULL, NULL, NULL, 1),
(16, 39, NULL, NULL, NULL, NULL, NULL, 1),
(17, 40, NULL, NULL, NULL, NULL, NULL, 1),
(18, 41, NULL, NULL, NULL, NULL, NULL, 1),
(19, 44, NULL, NULL, NULL, NULL, NULL, 1),
(20, 45, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `urc_018system3_house_materiel`
--

CREATE TABLE `urc_018system3_house_materiel` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `about_roof` varchar(11) DEFAULT NULL,
  `roof_status` varchar(255) DEFAULT NULL,
  `about_wall` varchar(255) DEFAULT NULL,
  `wall_status` varchar(255) DEFAULT NULL,
  `home_status` varchar(255) DEFAULT NULL COMMENT '3:ទ្រុឌទ្រោម,2: មធ្យម ,1:ល្អ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT 'ស្ថានភាពទូទៅផ្ទះសម្បែង'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `urc_018system3_house_materiel`
--

INSERT INTO `urc_018system3_house_materiel` (`id`, `patient_id`, `about_roof`, `roof_status`, `about_wall`, `wall_status`, `home_status`, `created_at`, `updated_at`, `status`) VALUES
(1, 32, 'd', 's', 'dw', 'sw', '3', NULL, NULL, 1),
(2, 33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(3, 34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, 35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, 36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(6, 37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(7, 38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(8, 39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(9, 40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(10, 41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(11, 44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(12, 45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `urc_018system3_house_moreinfo`
--

CREATE TABLE `urc_018system3_house_moreinfo` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `width` int(11) DEFAULT NULL,
  `lenght` int(11) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `area_total` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `urc_018system3_house_moreinfo`
--

INSERT INTO `urc_018system3_house_moreinfo` (`id`, `patient_id`, `width`, `lenght`, `area`, `area_total`, `created_at`, `updated_at`, `status`) VALUES
(1, 23, 34, 53, 6, 8, NULL, NULL, 1),
(2, 23, 23, 23, 4, NULL, NULL, NULL, 1),
(3, 24, 1, 2, 2, 9, NULL, NULL, 1),
(4, 25, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, 26, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(6, 27, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(7, 28, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(8, 29, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(9, 30, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(10, 31, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(11, 32, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(12, 33, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(13, 34, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(14, 35, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(15, 36, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(16, 37, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(17, 38, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(18, 39, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(19, 40, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(20, 41, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(21, 44, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(22, 45, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `urc_018system3_house_upinfo`
--

CREATE TABLE `urc_018system3_house_upinfo` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `width` int(11) DEFAULT NULL,
  `lenght` int(11) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT 'ផ្ទះជាន់លើ'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `urc_018system3_house_upinfo`
--

INSERT INTO `urc_018system3_house_upinfo` (`id`, `patient_id`, `width`, `lenght`, `area`, `created_at`, `update_at`, `status`) VALUES
(1, 20, NULL, NULL, NULL, NULL, NULL, 1),
(2, 21, NULL, NULL, NULL, NULL, NULL, 1),
(3, 22, NULL, NULL, NULL, NULL, NULL, 1),
(4, 23, 34, 34, 5, NULL, NULL, 1),
(5, 24, 1, 2, 3, NULL, NULL, 1),
(6, 25, NULL, NULL, NULL, NULL, NULL, 1),
(7, 26, NULL, NULL, NULL, NULL, NULL, 1),
(8, 27, NULL, NULL, NULL, NULL, NULL, 1),
(9, 28, NULL, NULL, NULL, NULL, NULL, 1),
(10, 29, NULL, NULL, NULL, NULL, NULL, 1),
(11, 30, NULL, NULL, NULL, NULL, NULL, 1),
(12, 31, NULL, NULL, NULL, NULL, NULL, 1),
(13, 32, NULL, NULL, NULL, NULL, NULL, 1),
(14, 33, NULL, NULL, NULL, NULL, NULL, 1),
(15, 34, NULL, NULL, NULL, NULL, NULL, 1),
(16, 35, NULL, NULL, NULL, NULL, NULL, 1),
(17, 36, NULL, NULL, NULL, NULL, NULL, 1),
(18, 37, NULL, NULL, NULL, NULL, NULL, 1),
(19, 38, NULL, NULL, NULL, NULL, NULL, 1),
(20, 39, NULL, NULL, NULL, NULL, NULL, 1),
(21, 40, NULL, NULL, NULL, NULL, NULL, 1),
(22, 41, NULL, NULL, NULL, NULL, NULL, 1),
(23, 44, NULL, NULL, NULL, NULL, NULL, 1),
(24, 45, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `urc_018system3_member_info`
--

CREATE TABLE `urc_018system3_member_info` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL DEFAULT '0',
  `mem_name` varchar(255) DEFAULT NULL,
  `dob` year(4) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `relation` varchar(255) DEFAULT NULL COMMENT '	ទំនាក់ទំនង​ជាមួយ​មេ​គ្រួសារ (1)',
  `job` varchar(255) DEFAULT NULL,
  `edu` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT 'ព័ត៌មានសំខាន់ៗអំពីសមាជិក​គ្រួសារ​ទាំងអស់'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `urc_018system3_member_info`
--

INSERT INTO `urc_018system3_member_info` (`id`, `patient_id`, `mem_name`, `dob`, `age`, `relation`, `job`, `edu`, `created_at`, `updated_at`, `status`) VALUES
(1, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(3, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(6, 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(7, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(8, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(9, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(10, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(11, 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(12, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(13, 31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(14, 32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(15, 33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(16, 34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(17, 35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(18, 36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(19, 37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(20, 38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(21, 39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(22, 40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(23, 41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(24, 44, '1', 2017, 4, '5', '7', '8', NULL, NULL, 1),
(25, 45, NULL, 2016, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `urc_018system3_single_field`
--

CREATE TABLE `urc_018system3_single_field` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `total_price_electronic` float DEFAULT NULL,
  `score_4_assets` float DEFAULT NULL,
  `score_5_electronic` float DEFAULT NULL,
  `how_to_hospital` varchar(255) DEFAULT NULL,
  `total_price_travel` float DEFAULT NULL,
  `score_6_how_travel` float DEFAULT NULL,
  `score_7a_animal` float DEFAULT NULL,
  `score_7a_farm` int(11) DEFAULT NULL,
  `monthly_family_earning` float DEFAULT NULL COMMENT 'សរុបចំណូល ប្រចាំខែ សម្រាប់គ្រួសារទាំងមូល (គិតជារៀល)',
  `monthly_out_earning` float DEFAULT NULL COMMENT 'ចំណូលក្រៅពីកសិកម្មជាមធ្យមប្រចាំខែសម្រាប់មនុស្សម្នាក់​​ (១)',
  `score_7b_earning_other` float DEFAULT NULL,
  `score_7c_child_earning` float DEFAULT NULL,
  `total_score_come_in` float DEFAULT NULL,
  `qty_lost100_smallest_65` int(11) DEFAULT NULL,
  `qty_lost50_smallest_65` int(11) DEFAULT NULL,
  `qty_lost100_equal_bigest_65` int(11) DEFAULT NULL,
  `qty_lost50_equal_bigest_65` int(11) DEFAULT NULL,
  `score_9_debt` float DEFAULT NULL,
  `info_or_idea_interviewer` int(11) DEFAULT NULL,
  `score_10_edu` float DEFAULT NULL,
  `score_11_doing` float DEFAULT NULL,
  `total_score` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `urc_018system3_toilet`
--

CREATE TABLE `urc_018system3_toilet` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `toilet` int(11) DEFAULT NULL COMMENT 'បង្គន់ : តើគ្រួសាររបស់អ្នកមានបង្គន់ប្រើដែរឬទេ?',
  `water_toilet` int(11) DEFAULT NULL,
  `dry_toilet` int(11) DEFAULT NULL,
  `owner_toilet` int(11) DEFAULT NULL,
  `public_toilet` int(11) DEFAULT NULL,
  `build_in` year(4) DEFAULT NULL,
  `prepare_status` tinyint(4) DEFAULT NULL COMMENT 'ធ្លាប់ជួសជុលឬទេ?1:yes,2:no',
  `prepare_in` year(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `urc_018system3_toilet`
--

INSERT INTO `urc_018system3_toilet` (`id`, `patient_id`, `toilet`, `water_toilet`, `dry_toilet`, `owner_toilet`, `public_toilet`, `build_in`, `prepare_status`, `prepare_in`, `created_at`, `updated_at`, `status`) VALUES
(10, 34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(9, 33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(8, 32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(7, 31, 1, 1, NULL, 1, NULL, 2017, 0, 2000, NULL, NULL, 1),
(12, 36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(11, 35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(13, 37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(14, 38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(15, 39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(16, 40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(17, 41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(18, 44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(19, 45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `urc_018system3_vehicle_assets`
--

CREATE TABLE `urc_018system3_vehicle_assets` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `type_vehicle` varchar(255) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT 'យានជំនិះជាទ្រព្យសម្បត្តិផ្ទាល់របស់​គ្រួសារ'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `urc_018system3_vehicle_assets`
--

INSERT INTO `urc_018system3_vehicle_assets` (`id`, `patient_id`, `type_vehicle`, `qty`, `price`, `total`, `created_at`, `updated_at`, `status`) VALUES
(1, 40, 'a', 12, 12, 12, NULL, NULL, 1),
(2, 40, 'a', 12, 12, 12, NULL, NULL, 1),
(3, 41, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, 41, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, 44, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(6, 44, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(7, 45, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(8, 45, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hean Thien', 'thiencambodia168@gmail.com', '$2y$10$MLG2eclUMP3jSkTqVRP2beLf2P4JqHG02aEGSJfbc.vYiiqygkV92', 'KnWPvqrNGz4JLmp8vxCspmmVrHG4tYRJu1qwdQpy5GP0HP6UXB1EknIqhwI9', '2018-05-09 02:37:05', '2018-05-09 02:37:05'),
(2, 'cheata', 'cheata@cheata.com', '$2y$10$jakzgtqv7cdc4C63SpCIKeuxmR8MohuL4GR4CTC2ztU97xE5t5rxi', 'lUTo7InAv1ugKMMJLKBOqOYGxpNGYR5tsXwSXM7Pd3S5csvTqi0OICb30AzD', '2018-05-30 02:38:55', '2018-05-30 02:38:55'),
(3, 'admin', 'admin@admin.com', '$2y$10$9b/0J70CqD8ofPQiK8N4P.ffc47TcydxLuSio3TcmNL.wwVUrdtS.', 'oX48HKFWgaeAhDdDhWaTOX3F0jBlewZMpJhvJxbH1N3XeL1wvs1TxlLyKHpm', '2018-05-30 02:39:45', '2018-05-30 02:39:45');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `urc_018system3_animals`
--
ALTER TABLE `urc_018system3_animals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urc_018system3_assets_electronic`
--
ALTER TABLE `urc_018system3_assets_electronic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urc_018system3_debt`
--
ALTER TABLE `urc_018system3_debt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urc_018system3_earning_in`
--
ALTER TABLE `urc_018system3_earning_in`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urc_018system3_electronic`
--
ALTER TABLE `urc_018system3_electronic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urc_018system3_family_house`
--
ALTER TABLE `urc_018system3_family_house`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urc_018system3_farming`
--
ALTER TABLE `urc_018system3_farming`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urc_018system3_general_info`
--
ALTER TABLE `urc_018system3_general_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urc_018system3_general_k2`
--
ALTER TABLE `urc_018system3_general_k2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `urc_018system3_general_k3`
--
ALTER TABLE `urc_018system3_general_k3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `urc_018system3_house_downinfo`
--
ALTER TABLE `urc_018system3_house_downinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `urc_018system3_house_materiel`
--
ALTER TABLE `urc_018system3_house_materiel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `urc_018system3_house_moreinfo`
--
ALTER TABLE `urc_018system3_house_moreinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urc_018system3_house_upinfo`
--
ALTER TABLE `urc_018system3_house_upinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `urc_018system3_member_info`
--
ALTER TABLE `urc_018system3_member_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `urc_018system3_single_field`
--
ALTER TABLE `urc_018system3_single_field`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urc_018system3_toilet`
--
ALTER TABLE `urc_018system3_toilet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `urc_018system3_vehicle_assets`
--
ALTER TABLE `urc_018system3_vehicle_assets`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `urc_018system3_animals`
--
ALTER TABLE `urc_018system3_animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `urc_018system3_assets_electronic`
--
ALTER TABLE `urc_018system3_assets_electronic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `urc_018system3_debt`
--
ALTER TABLE `urc_018system3_debt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `urc_018system3_earning_in`
--
ALTER TABLE `urc_018system3_earning_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `urc_018system3_electronic`
--
ALTER TABLE `urc_018system3_electronic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `urc_018system3_family_house`
--
ALTER TABLE `urc_018system3_family_house`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `urc_018system3_farming`
--
ALTER TABLE `urc_018system3_farming`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `urc_018system3_general_info`
--
ALTER TABLE `urc_018system3_general_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `urc_018system3_general_k2`
--
ALTER TABLE `urc_018system3_general_k2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `urc_018system3_general_k3`
--
ALTER TABLE `urc_018system3_general_k3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT ' ព័ត៌មានអំពី​ អ្នកដែលអាចបញ្ជាក់ពីស្ថានភាពគ្រួសារ ', AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `urc_018system3_house_downinfo`
--
ALTER TABLE `urc_018system3_house_downinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `urc_018system3_house_materiel`
--
ALTER TABLE `urc_018system3_house_materiel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `urc_018system3_house_moreinfo`
--
ALTER TABLE `urc_018system3_house_moreinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `urc_018system3_house_upinfo`
--
ALTER TABLE `urc_018system3_house_upinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `urc_018system3_member_info`
--
ALTER TABLE `urc_018system3_member_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `urc_018system3_single_field`
--
ALTER TABLE `urc_018system3_single_field`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `urc_018system3_toilet`
--
ALTER TABLE `urc_018system3_toilet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `urc_018system3_vehicle_assets`
--
ALTER TABLE `urc_018system3_vehicle_assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
