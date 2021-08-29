-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 29, 2021 at 11:18 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bigecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` text COLLATE utf8mb4_unicode_ci,
  `address2` text COLLATE utf8mb4_unicode_ci,
  `country_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `country_id`, `city_id`, `name`, `address1`, `address2`, `country_name`, `city_name`, `zip_code`, `phone`, `mobile`, `comment`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 1, 'mr. user', 'bosurhat, companigonj, noakhali, bangladesh', NULL, 'bangladesh', 'dhaka', '85412', '985632', '+880 198125632', 'good user', '1', 'active', 1, '2021-07-01 17:20:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `billing_addresses`
--

CREATE TABLE `billing_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_address` text COLLATE utf8mb4_unicode_ci,
  `zip_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billing_addresses`
--

INSERT INTO `billing_addresses` (`id`, `user_id`, `invoice_id`, `company_name`, `street_address`, `zip_code`, `city`, `country`, `comment`, `phone`, `phone2`, `email`, `creator`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, 'we', 'sssssssssssss', '1111111111', '11111111111111111', NULL, NULL, '1111111', NULL, 'superadmin@gmail.com', NULL, 1, '2021-08-22 14:36:52', '2021-08-22 14:36:52');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'oppo', '1', '1560d35bae736e5', 1, '2021-06-23 10:05:02', '2021-06-23 10:05:02'),
(2, 'Plus point', '1', '2560d35bb58a944', 1, '2021-06-23 10:05:09', '2021-06-23 10:05:09'),
(3, 'Easy', '1', '3560d35bbc00235', 1, '2021-06-23 10:05:15', '2021-06-23 10:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, NULL, '2021-07-03 20:58:55', '2021-07-03 20:58:55'),
(2, '20', '2021-07-03 21:11:24', '2021-07-03 21:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `parent_id` int(11) DEFAULT NULL,
  `template_layout_file` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_product_sort` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `search_keywords` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `url`, `description`, `parent_id`, `template_layout_file`, `sort_order`, `default_product_sort`, `category_image`, `page_title`, `meta_keywords`, `meta_description`, `search_keywords`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'man', '/man', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 0, 'default', '0', '5', 'uploads/category_image/Ks7cgcw4i2MeR7ygbETpp4rTzB7angx7Lb6nxAGf.png', 'man\'s fashion', 'man, shirt, t-shirt', 'man, shirt, t-shirt', 'man, shirt, t-shirt', '1', '14711man', 1, '2021-06-14 16:16:56', '2021-06-15 09:25:47'),
(2, 't-shirt', '/t-shirt', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 1, 'default', '0', '5', 'uploads/category_image/dqPQosA3AHli8wMHUFYjAff5rzdrM3WISYOjikcK.png', 'man\'s fashion', 'man, shirt, t-shirt', 'man, shirt, t-shirt', 'man, shirt, t-shirt', '1', '28461t-shirt', 1, '2021-06-14 16:18:16', '2021-06-15 09:03:43'),
(3, 'jeans pant', '/jeans-pant', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 1, 'default', '0', '5', 'uploads/category_image/uXKgzVO3aaML2DB7Dd2wc16FCHRtG9qiPjxsrVai.png', 'man\'s fashion', 'man, shirt, t-shirt', 'man, shirt, t-shirt', 'man, shirt, t-shirt', '1', '36448jeans-pant', 1, '2021-06-14 16:18:41', '2021-06-15 09:23:31'),
(4, 'Panjabi', '/Panjabi', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 1, 'default', '0', '5', 'uploads/category_image/4ymZ7Ukx02XT4OpTjNhstkh4snf9xa1eMgNloYZL.png', 'man\'s fashion', 'man, shirt, t-shirt', 'man, shirt, t-shirt', 'man, shirt, t-shirt', '1', '47713panjabi', 1, '2021-06-14 16:18:52', '2021-06-14 16:18:52'),
(5, 'Shoe', '/Shoe', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 1, 'default', '0', '5', 'uploads/category_image/g51kYV4FggArHSrRaXgHVT2nJfKPEqe2t0ZfEwTP.png', 'man\'s fashion', 'man, shirt, t-shirt', 'man, shirt, t-shirt', 'man, shirt, t-shirt', '1', '55257shoe', 1, '2021-06-14 16:19:02', '2021-06-14 16:19:02'),
(6, 'Watch', '/Watch', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 1, 'default', '0', '5', 'uploads/category_image/eqnFlI4szOrJp3GLOgCmaeyVUtfcN1y6yosAO7uh.png', 'man\'s fashion', 'man, shirt, t-shirt', 'man, shirt, t-shirt', 'man, shirt, t-shirt', '1', '64615watch', 1, '2021-06-14 16:19:17', '2021-06-14 16:19:17'),
(7, 'Pollo', '/Pollo', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 2, 'default', '0', '5', 'uploads/category_image/9YBKL2jmNqOCndEIzJDmtDNt2pypkm62c8ixIeaz.png', 'man\'s fashion', 'man, shirt, t-shirt', 'man, shirt, t-shirt', 'man, shirt, t-shirt', '1', '71256pollo', 1, '2021-06-14 16:19:56', '2021-06-15 08:24:17'),
(8, 'Red bull', '/Red-bull', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 7, 'default', '0', '5', 'uploads/category_image/lw7U92w9Ez7AI5PX6IRgLybSLavvfiZIZONe9L9y.png', 'man\'s fashion', 'man, shirt, t-shirt', 'man, shirt, t-shirt', 'man, shirt, t-shirt', '1', '84632red-bull', 1, '2021-06-14 16:20:15', '2021-06-15 08:52:33'),
(9, 'Easy', '/Easy', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 2, 'default', '0', '5', 'uploads/category_image/iDfgAXkCCM1Kc86VLhZzzLfvz41tW6BX4LLB6rpA.png', 'man\'s fashion', 'man, shirt, t-shirt', 'man, shirt, t-shirt', 'man, shirt, t-shirt', '1', '97259easy', 1, '2021-06-14 16:20:27', '2021-06-15 08:42:08'),
(10, 'Strees', '/Strees', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 3, 'default', '0', '5', 'uploads/category_image/Ubekd1tJhybs48C6c2QyHHPkN8LBaZzojIQB38sP.png', 'man\'s fashion', 'man, shirt, t-shirt', 'man, shirt, t-shirt', 'man, shirt, t-shirt', '1', '101428strees', 1, '2021-06-14 16:20:58', '2021-06-14 16:20:58'),
(11, 'Gavatin', '/Gavatin', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 3, 'default', '0', '5', 'uploads/category_image/nxz787jUOrBL73uRbT8cOFnmh7L1qcIDQkNrEsPu.png', 'man\'s fashion', 'man, shirt, t-shirt', 'man, shirt, t-shirt', 'man, shirt, t-shirt', '1', '118128gavatin', 1, '2021-06-14 16:21:08', '2021-06-14 16:21:09'),
(12, 'Short', '/Short', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 3, 'default', '0', '5', 'uploads/category_image/DA0206ccEzNUcFdSBno4w1sMBZ3vSd1LWB953OdX.png', 'man\'s fashion', 'man, shirt, t-shirt', 'man, shirt, t-shirt', 'man, shirt, t-shirt', '1', '128946short', 1, '2021-06-14 16:21:33', '2021-06-14 16:21:33'),
(13, 'three quater', '/three-quater', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 3, 'default', '0', '5', 'uploads/category_image/tU6zBSxju0JXZQe2YARnCxYviu8tj1eC3xLsSfhD.png', 'man\'s fashion', 'man, shirt, t-shirt', 'man, shirt, t-shirt', 'man, shirt, t-shirt', '1', '136883three-quater', 1, '2021-06-14 16:21:49', '2021-06-15 09:25:51'),
(14, 'yellow edited', '/yellow-edited', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 4, 'default', '0', '5', 'uploads/category_image/McZrAzXwnQy9KSJLGJdSVSHFOW2GAPBEJf9RH9Em.png', 'man\'s fashion', 'man, shirt, t-shirt', 'man, shirt, t-shirt', 'man, shirt, t-shirt', '1', '144544yellow', 1, '2021-06-14 16:22:17', '2021-06-15 12:09:01'),
(15, 'Sherwani', '/Sherwani', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 4, 'default', '0', '5', 'uploads/category_image/T13Lqceitjm25ljg5fhyFWem8SDkk8bmrDV7Eett.png', 'man\'s fashion', 'man, shirt, t-shirt', 'man, shirt, t-shirt', 'man, shirt, t-shirt', '1', '152963sherwani', 1, '2021-06-14 16:22:26', '2021-06-14 16:22:26'),
(16, 'Kabli', '/Kabli', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 4, 'default', '0', '5', 'uploads/category_image/3Ve0taFen07lb2tbLwSMYs6bHDO2EEX24OQBQ8cc.png', 'man\'s fashion', 'man, shirt, t-shirt', 'man, shirt, t-shirt', 'man, shirt, t-shirt', '1', '165681kabli', 1, '2021-06-14 16:22:37', '2021-06-14 16:22:37'),
(17, 'Step color', '/Step-color', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 9, 'default', '0', '5', 'uploads/category_image/FcD9uXgwngh9UbOWRkixw4e1aXo5sKpuoX8MxgAV.png', 'man\'s fashion', 'man, shirt, t-shirt', 'man, shirt, t-shirt', 'man, shirt, t-shirt', '1', '171148step-color', 1, '2021-06-14 16:23:48', '2021-06-15 08:42:10'),
(18, 'Full Hand', '/Full-Hand', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 7, 'default', '0', '5', 'uploads/category_image/de5bO0sMfc2eb6sSw8JT9VGEbm5pscxctMLBT4nW.png', 'man\'s fashion', 'man, shirt, t-shirt', 'man, shirt, t-shirt', 'man, shirt, t-shirt', '1', '187850full-hand', 1, '2021-06-14 16:24:00', '2021-06-15 08:52:44'),
(19, 'half hand', '/half-hand', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 7, 'default', '0', '5', 'uploads/category_image/V46xTVKHkGNCy6ynLb9U4lppitDESZRrGFnTUiwq.png', 'man\'s fashion', 'man, shirt, t-shirt', 'man, shirt, t-shirt', 'man, shirt, t-shirt', '1', '194293half-hand', 1, '2021-06-14 16:24:14', '2021-06-15 08:24:13'),
(20, 'band colour', '/band-colour', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 9, 'default', '0', '5', 'uploads/category_image/jTY1vNmINyo2G53GLHO47AjnlNXRGg5UoX8TLj6F.png', 'man\'s fashion', 'man, shirt, t-shirt', 'man, shirt, t-shirt', 'man, shirt, t-shirt', '1', '201127band-colour', 1, '2021-06-14 16:24:30', '2021-06-15 07:52:42'),
(21, 'women', '/women', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 0, 'default', '1', '5', 'uploads/category_image/ibjeId7FTCflUEXTTNz6lvhOUY62hiur2fZiy11q.png', 'women collection', 'women, sarii, three peice, legenga', 'women, sarii, three peice, legenga', 'women, sarii, three peice, legenga', '1', '214913women', 1, '2021-06-14 17:34:04', '2021-06-15 08:46:13'),
(22, 'saari', '/saari', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 21, 'default', '1', '5', 'uploads/category_image/0cM23BRTKAHPwMjUwAxVt7V0y3TJsz5F7zIboAqj.png', 'women sarii', 'women sarii', 'women sarii', 'women sarii', '1', '221512saari', 1, '2021-06-14 17:40:56', '2021-06-14 17:40:56'),
(23, 'three peice', '/three-peice', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 21, 'default', '1', '5', 'uploads/category_image/ncyLcrEFJP4s0yIlMzR0ceoRzZJf2dtejzdXRtMA.png', 'women sarii', 'women sarii', 'women sarii', 'women sarii', '1', '235586three-peice', 1, '2021-06-14 17:41:19', '2021-06-14 17:41:19'),
(24, 'one peice', '/one-peice', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 21, 'default', '1', '5', 'uploads/category_image/8Qfd02BwCX0sUpdZJM2P93tcntiLGUT6onfMncHY.png', 'women sarii', 'women sarii', 'women sarii', 'women sarii', '1', '243247one-peice', 1, '2021-06-14 17:41:37', '2021-06-15 08:46:15'),
(25, 'jewellery', '/jewellery', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 21, 'default', '1', '5', 'uploads/category_image/nrmo4k9qczQ3L4W9i1av6E0Xx0rWzf0GdCwpEmM1.png', 'women sarii', 'women sarii', 'women sarii', 'women sarii', '1', '253821jewellery', 1, '2021-06-14 17:41:52', '2021-06-14 17:41:52'),
(26, 'bag', '/bag', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 21, 'default', '1', '5', 'uploads/category_image/cAgd3Jkjyk3z8vMfGZpHgfE249dhT1aJnbhBrSns.png', 'women sarii', 'women sarii', 'women sarii', 'women sarii', '1', '265365bag', 1, '2021-06-14 17:42:00', '2021-06-14 17:42:00'),
(27, 'electorinics', '/electorinics', '\r\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n\r\n            ', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'electorinics', 1, '2021-06-15 04:49:11', '2021-06-15 08:08:09'),
(28, 'Kitchen', '/kitchen', '\r\n\r\n\r\n            ', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Kitchen', 1, '2021-06-15 04:51:34', '2021-06-15 04:51:34'),
(29, 'Education & Office Supplies', '/education-office-supplies', '\r\n\r\n\r\n            ', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Education & Office Supplies', 1, '2021-06-15 05:51:09', '2021-06-15 08:35:28'),
(30, 'shefat', '/shefat', 'Stationery Sticker', 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'shefat', 1, '2021-06-15 05:55:33', '2021-06-15 05:55:33'),
(31, 'Writing & Correction Supplies', '/writing-correction-supplies', '\r\n\r\n\r\n            ', 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Writing & Correction Supplies', 1, '2021-06-15 05:56:41', '2021-06-15 05:56:41'),
(32, 'Tapes, Adhesives & Fasteners', '/tapes-adhesives-fasteners', '\r\n            adsfads asdf', 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'tapes-adhesives-fasteners', 1, '2021-06-15 05:58:14', '2021-06-15 08:51:25'),
(33, 'Labels, Indexes & Stamps', '/labels-indexes-stamps', '\r\n            You are running Vue in development mode.\r\n            Make sure to turn on production mode when deploying for production.', 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Labels, Indexes & Stamps', 1, '2021-06-15 06:09:23', '2021-06-15 06:09:23'),
(34, 'Office Binding Supplies', '/office-binding-supplies', '\r\n            Office Binding Supplies\r\n\r\n            ', 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'office-binding-supplies', 1, '2021-06-15 06:10:11', '2021-06-15 06:16:07');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `altitude` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `zip_code`, `country`, `city`, `latitude`, `longitude`, `altitude`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'dhaka', '1204', NULL, NULL, NULL, NULL, NULL, '1', 'active', 1, '2021-07-01 17:20:45', NULL),
(2, 'bosurhat', '1408', NULL, NULL, NULL, NULL, NULL, '1', 'active', 1, '2021-07-01 17:20:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `color_product`
--

CREATE TABLE `color_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` text COLLATE utf8mb4_unicode_ci,
  `address2` text COLLATE utf8mb4_unicode_ci,
  `country_id` int(11) DEFAULT NULL,
  `tin` int(11) DEFAULT NULL,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `name`, `address1`, `address2`, `country_id`, `tin`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'user', 'bosurhat, companigonj, noakhali, bangladesh', NULL, 1, 85412, '1', 'active', 1, '2021-07-01 17:20:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dial_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_symbol` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `lat`, `lng`, `code`, `dial_code`, `currency`, `currency_name`, `currency_symbol`, `currency_code`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'bangladesh', '23.685', '90.3563', '+880', NULL, 'tk', NULL, NULL, NULL, '1', 'active', 1, '2021-07-01 17:20:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `country_names`
--

CREATE TABLE `country_names` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iso` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nicename` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iso3` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numcode` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonecode` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country_names`
--

INSERT INTO `country_names` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`, `created_at`, `updated_at`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', '4', '93', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', '8', '355', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', '12', '213', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', '16', '1684', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', '20', '376', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', '24', '244', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', '660', '1264', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, '0', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', '28', '1268', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', '32', '54', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', '51', '374', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', '533', '297', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', '36', '61', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', '40', '43', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', '31', '994', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', '44', '1242', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', '48', '973', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', '50', '880', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', '52', '1246', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', '112', '375', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', '56', '32', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', '84', '501', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', '204', '229', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', '60', '1441', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', '64', '975', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', '68', '591', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', '70', '387', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', '72', '267', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, '0', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', '76', '55', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, '246', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', '96', '673', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', '100', '359', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', '854', '226', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', '108', '257', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', '116', '855', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', '120', '237', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(38, 'CA', 'CANADA', 'Canada', 'CAN', '124', '1', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', '132', '238', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', '136', '1345', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', '140', '236', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(42, 'TD', 'CHAD', 'Chad', 'TCD', '148', '235', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(43, 'CL', 'CHILE', 'Chile', 'CHL', '152', '56', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(44, 'CN', 'CHINA', 'China', 'CHN', '156', '86', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, '61', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, '672', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', '170', '57', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', '174', '269', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(49, 'CG', 'CONGO', 'Congo', 'COG', '178', '242', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', '180', '242', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', '184', '682', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', '188', '506', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(53, 'CI', 'COTE D', 'IVOIRE', 'Cote D', 'Ivoire', 'CIV', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', '191', '385', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', '192', '53', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', '196', '357', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', '203', '420', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', '208', '45', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', '262', '253', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', '212', '1767', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', '214', '1809', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', '218', '593', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', '818', '20', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', '222', '503', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', '226', '240', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', '232', '291', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', '233', '372', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', '231', '251', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', '238', '500', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', '234', '298', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', '242', '679', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', '246', '358', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(73, 'FR', 'FRANCE', 'France', 'FRA', '250', '33', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', '254', '594', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', '258', '689', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, '0', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(77, 'GA', 'GABON', 'Gabon', 'GAB', '266', '241', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', '270', '220', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', '268', '995', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', '276', '49', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', '288', '233', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', '292', '350', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(83, 'GR', 'GREECE', 'Greece', 'GRC', '300', '30', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', '304', '299', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', '308', '1473', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', '312', '590', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(87, 'GU', 'GUAM', 'Guam', 'GUM', '316', '1671', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', '320', '502', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', '324', '224', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', '624', '245', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', '328', '592', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', '332', '509', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, '0', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', '336', '39', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', '340', '504', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', '344', '852', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', '348', '36', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', '352', '354', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(99, 'IN', 'INDIA', 'India', 'IND', '356', '91', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', '360', '62', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', '364', '98', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', '368', '964', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', '372', '353', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', '376', '972', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(105, 'IT', 'ITALY', 'Italy', 'ITA', '380', '39', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', '388', '1876', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', '392', '81', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', '400', '962', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', '398', '7', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', '404', '254', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', '296', '686', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE', 'S REPUBLIC OF', 'Korea, Democratic People', 's Republic of', 'PRK', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', '410', '82', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', '414', '965', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', '417', '996', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(116, 'LA', 'LAO PEOPLE', 'S DEMOCRATIC REPUBLIC', 'Lao People', 's Democratic Republic', 'LAO', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', '428', '371', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', '422', '961', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', '426', '266', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', '430', '231', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', '434', '218', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', '438', '423', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', '440', '370', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', '442', '352', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(125, 'MO', 'MACAO', 'Macao', 'MAC', '446', '853', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', '807', '389', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', '450', '261', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', '454', '265', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', '458', '60', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', '462', '960', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(131, 'ML', 'MALI', 'Mali', 'MLI', '466', '223', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(132, 'MT', 'MALTA', 'Malta', 'MLT', '470', '356', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', '584', '692', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', '474', '596', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', '478', '222', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', '480', '230', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, '269', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', '484', '52', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', '583', '691', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', '498', '373', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', '492', '377', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', '496', '976', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', '500', '1664', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', '504', '212', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', '508', '258', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', '104', '95', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', '516', '264', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', '520', '674', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', '524', '977', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', '528', '31', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', '530', '599', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', '540', '687', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', '554', '64', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', '558', '505', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(155, 'NE', 'NIGER', 'Niger', 'NER', '562', '227', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', '566', '234', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(157, 'NU', 'NIUE', 'Niue', 'NIU', '570', '683', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', '574', '672', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', '580', '1670', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', '578', '47', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(161, 'OM', 'OMAN', 'Oman', 'OMN', '512', '968', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', '586', '92', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(163, 'PW', 'PALAU', 'Palau', 'PLW', '585', '680', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, '970', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', '591', '507', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', '598', '675', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', '600', '595', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(168, 'PE', 'PERU', 'Peru', 'PER', '604', '51', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', '608', '63', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', '612', '0', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(171, 'PL', 'POLAND', 'Poland', 'POL', '616', '48', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', '620', '351', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', '630', '1787', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', '634', '974', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(175, 'RE', 'REUNION', 'Reunion', 'REU', '638', '262', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', '642', '40', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', '643', '70', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', '646', '250', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', '654', '290', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', '659', '1869', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', '662', '1758', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', '666', '508', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', '670', '1784', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', '882', '684', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', '674', '378', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', '678', '239', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', '682', '966', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', '686', '221', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, '381', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', '690', '248', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', '694', '232', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', '702', '65', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', '703', '421', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', '705', '386', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', '90', '677', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', '706', '252', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', '710', '27', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, '0', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', '724', '34', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', '144', '94', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', '736', '249', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', '740', '597', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', '744', '47', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', '748', '268', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', '752', '46', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', '756', '41', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', '760', '963', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', '158', '886', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', '762', '992', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', '834', '255', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', '764', '66', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, '670', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(213, 'TG', 'TOGO', 'Togo', 'TGO', '768', '228', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', '772', '690', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(215, 'TO', 'TONGA', 'Tonga', 'TON', '776', '676', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', '780', '1868', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', '788', '216', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', '792', '90', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', '795', '7370', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', '796', '1649', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', '798', '688', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', '800', '256', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', '804', '380', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', '784', '971', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', '826', '44', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(226, 'US', 'UNITED STATES', 'United States', 'USA', '840', '1', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, '1', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', '858', '598', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', '860', '998', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', '548', '678', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', '862', '58', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', '704', '84', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', '92', '1284', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', '850', '1340', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', '876', '681', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', '732', '212', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', '887', '967', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', '894', '260', '2021-07-01 17:20:49', '2021-07-01 17:20:49'),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', '716', '263', '2021-07-01 17:20:49', '2021-07-01 17:20:49');

-- --------------------------------------------------------

--
-- Table structure for table `factoring_dimensions`
--

CREATE TABLE `factoring_dimensions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `factoring_dimension_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'dummy_products/1.jpg', '1', NULL, 1, '2021-07-01 17:20:45', NULL),
(2, 'dummy_products/2.jpg', '1', NULL, 1, '2021-07-01 17:20:45', NULL),
(3, 'dummy_products/3.jpg', '1', NULL, 1, '2021-07-01 17:20:45', NULL),
(4, 'dummy_products/4.jpg', '1', NULL, 1, '2021-07-01 17:20:45', NULL),
(5, 'dummy_products/5.jpg', '1', NULL, 1, '2021-07-01 17:20:45', NULL),
(6, 'dummy_products/6.jpg', '1', NULL, 1, '2021-07-01 17:20:45', NULL),
(7, 'dummy_products/7.jpg', '1', NULL, 1, '2021-07-01 17:20:45', NULL),
(8, 'dummy_products/8.jpg', '1', NULL, 1, '2021-07-01 17:20:45', NULL),
(9, 'dummy_products/9.jpg', '1', NULL, 1, '2021-07-01 17:20:45', NULL),
(10, 'dummy_products/10.jpg', '1', NULL, 1, '2021-07-01 17:20:45', NULL),
(11, 'dummy_products/11.jpg', '1', NULL, 1, '2021-07-01 17:20:45', NULL),
(12, 'dummy_products/12.jpg', '1', NULL, 1, '2021-07-01 17:20:45', NULL),
(13, 'dummy_products/13.jpg', '1', NULL, 1, '2021-07-01 17:20:45', NULL),
(14, 'dummy_products/14.jpg', '1', NULL, 1, '2021-07-01 17:20:45', NULL),
(15, 'dummy_products/15.jpg', '1', NULL, 1, '2021-07-01 17:20:45', NULL),
(16, 'dummy_products/16.jpg', '1', NULL, 1, '2021-07-01 17:20:45', NULL),
(17, 'dummy_products/17.jpg', '1', NULL, 1, '2021-07-01 17:20:45', NULL),
(18, 'dummy_products/18.jpg', '1', NULL, 1, '2021-07-01 17:20:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `length_measurements`
--

CREATE TABLE `length_measurements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `length_measurement_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `length_measurements`
--

INSERT INTO `length_measurements` (`id`, `length_measurement_name`, `created_at`, `updated_at`) VALUES
(1, 'Inches', '2021-07-01 17:20:52', '2021-07-01 17:20:52'),
(2, 'Centimeters', '2021-07-01 17:20:52', '2021-07-01 17:20:52'),
(3, 'Meters', '2021-07-01 17:20:52', '2021-07-01 17:20:52');

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
(75, '2014_10_12_000000_create_users_table', 1),
(76, '2014_10_12_100000_create_password_resets_table', 1),
(77, '2019_08_19_000000_create_failed_jobs_table', 1),
(78, '2021_03_04_082108_create_user_roles_table', 1),
(79, '2021_03_10_064759_create_countries_table', 1),
(80, '2021_03_10_064949_create_companies_table', 1),
(81, '2021_03_10_065150_create_cities_table', 1),
(82, '2021_03_10_065241_create_addresses_table', 1),
(83, '2021_03_10_071228_create_images_table', 1),
(84, '2021_03_10_071531_create_statuses_table', 1),
(85, '2021_03_10_072835_create_notifications_table', 1),
(86, '2021_03_10_072953_create_settings_table', 1),
(87, '2021_06_15_010521_create_categories_table', 1),
(88, '2021_06_15_034347_create_store_setting_websites_table', 1),
(89, '2021_06_15_034804_create_store_setting_displays_table', 1),
(90, '2021_06_15_213021_create_store_setting_dates_table', 1),
(91, '2021_06_15_214159_create_store_setting_urls_table', 1),
(92, '2021_06_15_214753_create_store_setting_searches_table', 1),
(93, '2021_06_15_230854_create_store_setting_securities_table', 1),
(94, '2021_06_16_152522_create_store_setting_miscellaneouses_table', 1),
(95, '2021_06_19_021320_create_weight_measurements_table', 1),
(96, '2021_06_19_022922_create_length_measurements_table', 1),
(97, '2021_06_19_023858_create_factoring_dimensions_table', 1),
(98, '2021_06_19_024637_create_www_redirects_table', 1),
(99, '2021_06_19_033757_create_store_product_breadcrumbs_table', 1),
(100, '2021_06_19_221905_create_store_default_product_sorts_table', 1),
(101, '2021_06_20_021707_create_store_your_timezones_table', 1),
(102, '2021_06_20_024033_create_product_options_table', 1),
(103, '2021_06_20_193003_create_brands_table', 1),
(104, '2021_06_23_021715_create_store_setting_shares_table', 1),
(105, '2021_06_24_012718_create_products_table', 1),
(106, '2021_06_24_034100_create_product_tax_classes_table', 1),
(107, '2021_06_24_034309_create_product_discount_types_table', 1),
(108, '2021_06_24_034540_create_product_conditions_table', 1),
(109, '2021_06_24_034710_create_product_object_types_table', 1),
(110, '2021_06_27_014542_create_product_images_table', 1),
(111, '2021_06_27_034429_create_country_names_table', 1),
(112, '2021_07_04_025014_create_carts_table', 2),
(113, '2021_07_12_185524_create_checkouts_table', 3),
(124, '2021_07_13_040942_create_billing_addresses_table', 4),
(125, '2021_07_13_041557_create_order_information_table', 5),
(126, '2021_07_13_041606_create_orders_table', 5),
(127, '2021_07_13_204907_create_shipping_addresses_table', 5),
(128, '2021_07_13_205218_create_order_addresses_table', 5),
(129, '2021_08_27_104124_create_wishlists_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_man_id` int(200) DEFAULT NULL,
  `order_status` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `total_price` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_total` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `delivery_man_id`, `order_status`, `total_price`, `sub_total`, `invoice_id`, `invoice_date`, `delivery_date`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 6, 'process', '1907', '1907', '10001', '2021-08-17 12:21:59', NULL, 1, '2021-08-17 06:21:59', '2021-08-17 06:21:59'),
(2, '1', NULL, 'process', '633', '633', '10002', '2021-08-17 12:59:02', NULL, 1, '2021-08-17 06:59:02', '2021-08-17 06:59:02'),
(3, '1', NULL, 'pending', '390', '390', '10003', '2021-08-22 20:36:52', NULL, 1, '2021-08-22 14:36:52', '2021-08-22 14:36:52');

-- --------------------------------------------------------

--
-- Table structure for table `order_addresses`
--

CREATE TABLE `order_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_address` text COLLATE utf8mb4_unicode_ci,
  `zip_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_addresses`
--

INSERT INTO `order_addresses` (`id`, `user_id`, `invoice_id`, `first_name`, `last_name`, `company_name`, `street_address`, `zip_code`, `city`, `country`, `comment`, `phone`, `phone2`, `email`, `creator`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, 'nipass', 'nipa', 'we', 'sssssssssssss', '1111111111', '11111111111111111', NULL, NULL, '1111111', NULL, 'superadmin@gmail.com', NULL, 1, '2021-08-22 14:36:52', '2021-08-22 14:36:52');

-- --------------------------------------------------------

--
-- Table structure for table `order_information`
--

CREATE TABLE `order_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_information`
--

INSERT INTO `order_information` (`id`, `customer_id`, `order_id`, `invoice_id`, `product_id`, `product_code`, `product_name`, `qty`, `color`, `size`, `price`, `creator`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '2', '10002', '20', NULL, 'Ruchi Mixed Fruit Jam', '1', NULL, NULL, '243', '1', 1, '2021-08-17 06:59:02', '2021-08-17 06:59:02'),
(2, '1', '2', '10002', '15', NULL, 'Pran Tomato Ketchup', '1', NULL, NULL, '390', '1', 1, '2021-08-17 06:59:02', '2021-08-17 06:59:02'),
(3, '1', '3', '10003', '15', NULL, 'Pran Tomato Ketchup', '1', NULL, NULL, '390', '1', 1, '2021-08-22 14:36:52', '2021-08-22 14:36:52');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_price` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selected_categories` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_identifier_sku` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manufacture_part_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_upc` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `global_trade_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bin_picking_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pricing_default_price` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_class` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_provider_tax_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msrp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sales_price` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bulk_pricing_discount_options` text COLLATE utf8mb4_unicode_ci,
  `bulk_pricing_discount_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `track_inventory` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `on_the_product_level` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `track_inventory_on_the_variant_level_stock` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `track_inventory_on_the_variant_level_low_stock` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selected_variant_options` text COLLATE utf8mb4_unicode_ci,
  `modifier_options` text COLLATE utf8mb4_unicode_ci,
  `set_as_store_front` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `search_keywords` text COLLATE utf8mb4_unicode_ci,
  `sort_order` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_layout_file` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waranty_information` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `availability_text` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_condition` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_condition_on_storefront` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_fields` text COLLATE utf8mb4_unicode_ci,
  `automatically_show_related_prodauct_on_my_store_front` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depth` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fixed_shipping_price` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free_shipping` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchasability` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preorder_message` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release_date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remove_pre_order_status_on_this_date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_call_for_pricing` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `call_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum_purchase_quantity` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maximum_purchase_quantity` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wrapping` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_information` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_of_origin` text COLLATE utf8mb4_unicode_ci,
  `comodity_description` text COLLATE utf8mb4_unicode_ci,
  `hs_codes` text COLLATE utf8mb4_unicode_ci,
  `page_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_url` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_sharing_object_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_use_product_description` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_use_product_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_use_thumbnail_image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `variant_values` longtext COLLATE utf8mb4_unicode_ci,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `sku`, `product_type`, `default_price`, `brand_id`, `weight`, `selected_categories`, `description`, `image`, `product_identifier_sku`, `manufacture_part_number`, `product_upc`, `global_trade_number`, `bin_picking_number`, `pricing_default_price`, `tax_class`, `tax_provider_tax_code`, `cost`, `msrp`, `sales_price`, `bulk_pricing_discount_options`, `bulk_pricing_discount_type`, `track_inventory`, `on_the_product_level`, `track_inventory_on_the_variant_level_stock`, `track_inventory_on_the_variant_level_low_stock`, `selected_variant_options`, `modifier_options`, `set_as_store_front`, `search_keywords`, `sort_order`, `template_layout_file`, `waranty_information`, `availability_text`, `product_condition`, `show_condition_on_storefront`, `custom_fields`, `automatically_show_related_prodauct_on_my_store_front`, `width`, `height`, `depth`, `fixed_shipping_price`, `free_shipping`, `purchasability`, `preorder_message`, `release_date`, `remove_pre_order_status_on_this_date`, `show_call_for_pricing`, `call_number`, `minimum_purchase_quantity`, `maximum_purchase_quantity`, `wrapping`, `custom_information`, `country_of_origin`, `comodity_description`, `hs_codes`, `page_title`, `product_url`, `meta_description`, `open_graph_sharing_object_type`, `open_graph_use_product_description`, `open_graph_use_product_name`, `open_graph_use_thumbnail_image`, `variant_values`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Men\'s Wash Denim Pant - Ad003 - 7arnf', 'thx-2915', 'physical', '543', 'Easy', '300', '[2,18,30]', '\r\n                    Anarkali Salwar suit is a form of women\'s dress originating from the Indian subcontinent. The Anarkali suit is made up of a long, frock-style top and features a slim fitted bottom. ... The word Anarkali literally means the \'delicate bud of the pomegranate flower/ tree\'.\r\n\r\n\r\n                    The authentic supplier and manufacturer of Daraz, offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform all over Bangladesh and serves to the greater extent for achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty.\r\n\r\n                ', NULL, 'thx-3969', 'mpn-3917', 'ean-1484', 'gtn-4663', 'bpn-2734', '225', 'shipping', 'luxary-tax-655', '180', '5', '454', '[{\"min_quantity\":2,\"discount\":\"6\",\"unit_price\":\"550\"},{\"min_quantity\":4,\"discount\":\"7\",\"unit_price\":\"550\"}]', 'discount', 'on', 'on', '816', '13', '[{\"id\":1,\"display_name\":\"color\",\"unique_name\":\"color\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"red\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"blue\\\",\\\"default\\\":true,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"yellow\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"greeen\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"1560ced04a0c321\",\"status\":1,\"created_at\":\"2021-06-19T23:21:13.000000Z\",\"updated_at\":\"2021-06-20T01:26:01.000000Z\",\"option_values_json\":[{\"name\":\"red\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"blue\",\"default\":true,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]},{\"id\":2,\"display_name\":\"Size\",\"unique_name\":\"Size\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"xs\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"sm\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"md\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"lg\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xxl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"3560cf024031dbb\",\"status\":1,\"created_at\":\"2021-06-20T02:54:24.000000Z\",\"updated_at\":\"2021-06-20T02:54:24.000000Z\",\"option_values_json\":[{\"name\":\"xs\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"sm\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]}]', '[{\"name\":\"user_email\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"},{\"name\":\"user_address\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"}]', 'on', 'product, shirt, sari, silk, cotton', 'asc', 'none', 'no waranty', 'always available', 'new', 'on', '[{\"name\":\"created\",\"value\":\"2020\"},{\"name\":\"expired\",\"value\":\"2021\"},{\"name\":\"return\",\"value\":\"no\"}]', 'on', '300', '300', '250', '400', 'on', 'on', NULL, NULL, NULL, 'on', '+880145236', '1', '150', 'USE ALL VISIBLE GIFT WRAPPING OPTIONS I\'VE CREATED', 'on', NULL, 'commdity description', '[{\"country\":\"bangladesh\",\"code\":\"hs-952\"},{\"country\":\"canada\",\"code\":\"hs-987\"},{\"country\":\"afganistan\",\"code\":\"hs-256\"}]', 'polo t-shirt', '/Men\'s-Wash-Denim-Pant---Ad003---7arnf/product-2717', 'meta description', 'Product', 'on', 'on', 'on', '{\"red,_xs\":{\"purchasable\":[\"variant_red,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"520\"],\"stock\":[\"25\"]},\"red,_sm\":{\"purchasable\":[\"variant_red,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"510\"],\"stock\":[\"45\"]},\"blue,_xs\":{\"purchasable\":[\"variant_blue,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"530\"],\"stock\":[\"50\"]},\"blue,_sm\":{\"purchasable\":[\"variant_blue,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"540\"],\"stock\":[\"65\"]}}', '1', '1060ddf96cef03b', 1, '2021-07-01 17:20:44', '2021-07-01 17:20:44'),
(2, 'CUSTOM MADE FASHION SNEAKERS', 'thx-2267', 'physical', '378', 'Easy', '300', '[5,14,21]', '\r\n                    Anarkali Salwar suit is a form of women\'s dress originating from the Indian subcontinent. The Anarkali suit is made up of a long, frock-style top and features a slim fitted bottom. ... The word Anarkali literally means the \'delicate bud of the pomegranate flower/ tree\'.\r\n\r\n\r\n                    The authentic supplier and manufacturer of Daraz, offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform all over Bangladesh and serves to the greater extent for achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty.\r\n\r\n                ', NULL, 'thx-9610', 'mpn-7547', 'ean-1405', 'gtn-9997', 'bpn-9138', '233', 'shipping', 'luxary-tax-655', '180', '5', '528', '[{\"min_quantity\":2,\"discount\":\"6\",\"unit_price\":\"550\"},{\"min_quantity\":4,\"discount\":\"7\",\"unit_price\":\"550\"}]', 'discount', 'on', 'on', '654', '20', '[{\"id\":1,\"display_name\":\"color\",\"unique_name\":\"color\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"red\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"blue\\\",\\\"default\\\":true,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"yellow\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"greeen\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"1560ced04a0c321\",\"status\":1,\"created_at\":\"2021-06-19T23:21:13.000000Z\",\"updated_at\":\"2021-06-20T01:26:01.000000Z\",\"option_values_json\":[{\"name\":\"red\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"blue\",\"default\":true,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]},{\"id\":2,\"display_name\":\"Size\",\"unique_name\":\"Size\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"xs\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"sm\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"md\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"lg\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xxl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"3560cf024031dbb\",\"status\":1,\"created_at\":\"2021-06-20T02:54:24.000000Z\",\"updated_at\":\"2021-06-20T02:54:24.000000Z\",\"option_values_json\":[{\"name\":\"xs\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"sm\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]}]', '[{\"name\":\"user_email\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"},{\"name\":\"user_address\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"}]', 'on', 'product, shirt, sari, silk, cotton', 'asc', 'none', 'no waranty', 'always available', 'new', 'on', '[{\"name\":\"created\",\"value\":\"2020\"},{\"name\":\"expired\",\"value\":\"2021\"},{\"name\":\"return\",\"value\":\"no\"}]', 'on', '300', '300', '250', '400', 'on', 'on', NULL, NULL, NULL, 'on', '+880145236', '1', '150', 'USE ALL VISIBLE GIFT WRAPPING OPTIONS I\'VE CREATED', 'on', NULL, 'commdity description', '[{\"country\":\"bangladesh\",\"code\":\"hs-952\"},{\"country\":\"canada\",\"code\":\"hs-987\"},{\"country\":\"afganistan\",\"code\":\"hs-256\"}]', 'polo t-shirt', '/CUSTOM-MADE-FASHION-SNEAKERS/product-1807', 'meta description', 'Product', 'on', 'on', 'on', '{\"red,_xs\":{\"purchasable\":[\"variant_red,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"520\"],\"stock\":[\"25\"]},\"red,_sm\":{\"purchasable\":[\"variant_red,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"510\"],\"stock\":[\"45\"]},\"blue,_xs\":{\"purchasable\":[\"variant_blue,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"530\"],\"stock\":[\"50\"]},\"blue,_sm\":{\"purchasable\":[\"variant_blue,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"540\"],\"stock\":[\"65\"]}}', '1', '1060ddf96cefee7', 1, '2021-07-01 17:20:44', '2021-07-01 17:20:44'),
(3, 'Cotton Panjabi (Yellow)', 'thx-7166', 'physical', '454', 'Easy', '300', '[2,19,30]', '\r\n                    Anarkali Salwar suit is a form of women\'s dress originating from the Indian subcontinent. The Anarkali suit is made up of a long, frock-style top and features a slim fitted bottom. ... The word Anarkali literally means the \'delicate bud of the pomegranate flower/ tree\'.\r\n\r\n\r\n                    The authentic supplier and manufacturer of Daraz, offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform all over Bangladesh and serves to the greater extent for achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty.\r\n\r\n                ', NULL, 'thx-6989', 'mpn-9137', 'ean-1287', 'gtn-9725', 'bpn-3768', '224', 'shipping', 'luxary-tax-655', '180', '5', '276', '[{\"min_quantity\":2,\"discount\":\"6\",\"unit_price\":\"550\"},{\"min_quantity\":4,\"discount\":\"7\",\"unit_price\":\"550\"}]', 'discount', 'on', 'on', '857', '23', '[{\"id\":1,\"display_name\":\"color\",\"unique_name\":\"color\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"red\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"blue\\\",\\\"default\\\":true,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"yellow\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"greeen\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"1560ced04a0c321\",\"status\":1,\"created_at\":\"2021-06-19T23:21:13.000000Z\",\"updated_at\":\"2021-06-20T01:26:01.000000Z\",\"option_values_json\":[{\"name\":\"red\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"blue\",\"default\":true,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]},{\"id\":2,\"display_name\":\"Size\",\"unique_name\":\"Size\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"xs\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"sm\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"md\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"lg\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xxl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"3560cf024031dbb\",\"status\":1,\"created_at\":\"2021-06-20T02:54:24.000000Z\",\"updated_at\":\"2021-06-20T02:54:24.000000Z\",\"option_values_json\":[{\"name\":\"xs\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"sm\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]}]', '[{\"name\":\"user_email\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"},{\"name\":\"user_address\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"}]', 'on', 'product, shirt, sari, silk, cotton', 'asc', 'none', 'no waranty', 'always available', 'new', 'on', '[{\"name\":\"created\",\"value\":\"2020\"},{\"name\":\"expired\",\"value\":\"2021\"},{\"name\":\"return\",\"value\":\"no\"}]', 'on', '300', '300', '250', '400', 'on', 'on', NULL, NULL, NULL, 'on', '+880145236', '1', '150', 'USE ALL VISIBLE GIFT WRAPPING OPTIONS I\'VE CREATED', 'on', NULL, 'commdity description', '[{\"country\":\"bangladesh\",\"code\":\"hs-952\"},{\"country\":\"canada\",\"code\":\"hs-987\"},{\"country\":\"afganistan\",\"code\":\"hs-256\"}]', 'polo t-shirt', '/Cotton-Panjabi-(Yellow)/product-2337', 'meta description', 'Product', 'on', 'on', 'on', '{\"red,_xs\":{\"purchasable\":[\"variant_red,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"520\"],\"stock\":[\"25\"]},\"red,_sm\":{\"purchasable\":[\"variant_red,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"510\"],\"stock\":[\"45\"]},\"blue,_xs\":{\"purchasable\":[\"variant_blue,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"530\"],\"stock\":[\"50\"]},\"blue,_sm\":{\"purchasable\":[\"variant_blue,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"540\"],\"stock\":[\"65\"]}}', '1', '1060ddf96cf0869', 1, '2021-07-01 17:20:44', '2021-07-01 17:20:44'),
(4, 'China Cotton Fabric Formal Shirt', 'thx-7613', 'physical', '215', 'Plus point', '300', '[4,11,21]', '\r\n                    Anarkali Salwar suit is a form of women\'s dress originating from the Indian subcontinent. The Anarkali suit is made up of a long, frock-style top and features a slim fitted bottom. ... The word Anarkali literally means the \'delicate bud of the pomegranate flower/ tree\'.\r\n\r\n\r\n                    The authentic supplier and manufacturer of Daraz, offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform all over Bangladesh and serves to the greater extent for achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty.\r\n\r\n                ', NULL, 'thx-4892', 'mpn-7646', 'ean-1142', 'gtn-5209', 'bpn-6592', '529', 'shipping', 'luxary-tax-655', '180', '5', '249', '[{\"min_quantity\":2,\"discount\":\"6\",\"unit_price\":\"550\"},{\"min_quantity\":4,\"discount\":\"7\",\"unit_price\":\"550\"}]', 'discount', 'on', 'on', '527', '50', '[{\"id\":1,\"display_name\":\"color\",\"unique_name\":\"color\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"red\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"blue\\\",\\\"default\\\":true,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"yellow\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"greeen\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"1560ced04a0c321\",\"status\":1,\"created_at\":\"2021-06-19T23:21:13.000000Z\",\"updated_at\":\"2021-06-20T01:26:01.000000Z\",\"option_values_json\":[{\"name\":\"red\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"blue\",\"default\":true,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]},{\"id\":2,\"display_name\":\"Size\",\"unique_name\":\"Size\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"xs\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"sm\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"md\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"lg\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xxl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"3560cf024031dbb\",\"status\":1,\"created_at\":\"2021-06-20T02:54:24.000000Z\",\"updated_at\":\"2021-06-20T02:54:24.000000Z\",\"option_values_json\":[{\"name\":\"xs\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"sm\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]}]', '[{\"name\":\"user_email\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"},{\"name\":\"user_address\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"}]', 'on', 'product, shirt, sari, silk, cotton', 'asc', 'none', 'no waranty', 'always available', 'new', 'on', '[{\"name\":\"created\",\"value\":\"2020\"},{\"name\":\"expired\",\"value\":\"2021\"},{\"name\":\"return\",\"value\":\"no\"}]', 'on', '300', '300', '250', '400', 'on', 'on', NULL, NULL, NULL, 'on', '+880145236', '1', '150', 'USE ALL VISIBLE GIFT WRAPPING OPTIONS I\'VE CREATED', 'on', NULL, 'commdity description', '[{\"country\":\"bangladesh\",\"code\":\"hs-952\"},{\"country\":\"canada\",\"code\":\"hs-987\"},{\"country\":\"afganistan\",\"code\":\"hs-256\"}]', 'polo t-shirt', '/China-Cotton-Fabric-Formal-Shirt/product-1536', 'meta description', 'Product', 'on', 'on', 'on', '{\"red,_xs\":{\"purchasable\":[\"variant_red,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"520\"],\"stock\":[\"25\"]},\"red,_sm\":{\"purchasable\":[\"variant_red,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"510\"],\"stock\":[\"45\"]},\"blue,_xs\":{\"purchasable\":[\"variant_blue,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"530\"],\"stock\":[\"50\"]},\"blue,_sm\":{\"purchasable\":[\"variant_blue,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"540\"],\"stock\":[\"65\"]}}', '1', '1060ddf96cf17c7', 1, '2021-07-01 17:20:44', '2021-07-01 17:20:44'),
(5, 'Karchupi One Piece', 'thx-8354', 'physical', '594', 'oppo', '300', '[2,13,25]', '\r\n                    Anarkali Salwar suit is a form of women\'s dress originating from the Indian subcontinent. The Anarkali suit is made up of a long, frock-style top and features a slim fitted bottom. ... The word Anarkali literally means the \'delicate bud of the pomegranate flower/ tree\'.\r\n\r\n\r\n                    The authentic supplier and manufacturer of Daraz, offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform all over Bangladesh and serves to the greater extent for achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty.\r\n\r\n                ', NULL, 'thx-2209', 'mpn-5633', 'ean-3223', 'gtn-5280', 'bpn-1972', '464', 'shipping', 'luxary-tax-655', '180', '5', '222', '[{\"min_quantity\":2,\"discount\":\"6\",\"unit_price\":\"550\"},{\"min_quantity\":4,\"discount\":\"7\",\"unit_price\":\"550\"}]', 'discount', 'on', 'on', '979', '46', '[{\"id\":1,\"display_name\":\"color\",\"unique_name\":\"color\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"red\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"blue\\\",\\\"default\\\":true,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"yellow\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"greeen\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"1560ced04a0c321\",\"status\":1,\"created_at\":\"2021-06-19T23:21:13.000000Z\",\"updated_at\":\"2021-06-20T01:26:01.000000Z\",\"option_values_json\":[{\"name\":\"red\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"blue\",\"default\":true,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]},{\"id\":2,\"display_name\":\"Size\",\"unique_name\":\"Size\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"xs\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"sm\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"md\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"lg\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xxl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"3560cf024031dbb\",\"status\":1,\"created_at\":\"2021-06-20T02:54:24.000000Z\",\"updated_at\":\"2021-06-20T02:54:24.000000Z\",\"option_values_json\":[{\"name\":\"xs\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"sm\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]}]', '[{\"name\":\"user_email\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"},{\"name\":\"user_address\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"}]', 'on', 'product, shirt, sari, silk, cotton', 'asc', 'none', 'no waranty', 'always available', 'new', 'on', '[{\"name\":\"created\",\"value\":\"2020\"},{\"name\":\"expired\",\"value\":\"2021\"},{\"name\":\"return\",\"value\":\"no\"}]', 'on', '300', '300', '250', '400', 'on', 'on', NULL, NULL, NULL, 'on', '+880145236', '1', '150', 'USE ALL VISIBLE GIFT WRAPPING OPTIONS I\'VE CREATED', 'on', NULL, 'commdity description', '[{\"country\":\"bangladesh\",\"code\":\"hs-952\"},{\"country\":\"canada\",\"code\":\"hs-987\"},{\"country\":\"afganistan\",\"code\":\"hs-256\"}]', 'polo t-shirt', '/Karchupi-One-Piece/product-1520', 'meta description', 'Product', 'on', 'on', 'on', '{\"red,_xs\":{\"purchasable\":[\"variant_red,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"520\"],\"stock\":[\"25\"]},\"red,_sm\":{\"purchasable\":[\"variant_red,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"510\"],\"stock\":[\"45\"]},\"blue,_xs\":{\"purchasable\":[\"variant_blue,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"530\"],\"stock\":[\"50\"]},\"blue,_sm\":{\"purchasable\":[\"variant_blue,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"540\"],\"stock\":[\"65\"]}}', '1', '1060ddf96cf25fa', 1, '2021-07-01 17:20:44', '2021-07-01 17:20:44'),
(6, 'Gold Plated Color Beats Locket Pendant', 'thx-6501', 'physical', '320', 'Easy', '300', '[2,16,23]', '\r\n                    Anarkali Salwar suit is a form of women\'s dress originating from the Indian subcontinent. The Anarkali suit is made up of a long, frock-style top and features a slim fitted bottom. ... The word Anarkali literally means the \'delicate bud of the pomegranate flower/ tree\'.\r\n\r\n\r\n                    The authentic supplier and manufacturer of Daraz, offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform all over Bangladesh and serves to the greater extent for achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty.\r\n\r\n                ', NULL, 'thx-9043', 'mpn-8304', 'ean-3200', 'gtn-8818', 'bpn-4734', '219', 'shipping', 'luxary-tax-655', '180', '5', '353', '[{\"min_quantity\":2,\"discount\":\"6\",\"unit_price\":\"550\"},{\"min_quantity\":4,\"discount\":\"7\",\"unit_price\":\"550\"}]', 'discount', 'on', 'on', '884', '27', '[{\"id\":1,\"display_name\":\"color\",\"unique_name\":\"color\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"red\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"blue\\\",\\\"default\\\":true,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"yellow\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"greeen\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"1560ced04a0c321\",\"status\":1,\"created_at\":\"2021-06-19T23:21:13.000000Z\",\"updated_at\":\"2021-06-20T01:26:01.000000Z\",\"option_values_json\":[{\"name\":\"red\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"blue\",\"default\":true,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]},{\"id\":2,\"display_name\":\"Size\",\"unique_name\":\"Size\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"xs\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"sm\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"md\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"lg\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xxl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"3560cf024031dbb\",\"status\":1,\"created_at\":\"2021-06-20T02:54:24.000000Z\",\"updated_at\":\"2021-06-20T02:54:24.000000Z\",\"option_values_json\":[{\"name\":\"xs\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"sm\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]}]', '[{\"name\":\"user_email\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"},{\"name\":\"user_address\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"}]', 'on', 'product, shirt, sari, silk, cotton', 'asc', 'none', 'no waranty', 'always available', 'new', 'on', '[{\"name\":\"created\",\"value\":\"2020\"},{\"name\":\"expired\",\"value\":\"2021\"},{\"name\":\"return\",\"value\":\"no\"}]', 'on', '300', '300', '250', '400', 'on', 'on', NULL, NULL, NULL, 'on', '+880145236', '1', '150', 'USE ALL VISIBLE GIFT WRAPPING OPTIONS I\'VE CREATED', 'on', NULL, 'commdity description', '[{\"country\":\"bangladesh\",\"code\":\"hs-952\"},{\"country\":\"canada\",\"code\":\"hs-987\"},{\"country\":\"afganistan\",\"code\":\"hs-256\"}]', 'polo t-shirt', '/Gold-Plated-Color-Beats-Locket-Pendant/product-2450', 'meta description', 'Product', 'on', 'on', 'on', '{\"red,_xs\":{\"purchasable\":[\"variant_red,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"520\"],\"stock\":[\"25\"]},\"red,_sm\":{\"purchasable\":[\"variant_red,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"510\"],\"stock\":[\"45\"]},\"blue,_xs\":{\"purchasable\":[\"variant_blue,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"530\"],\"stock\":[\"50\"]},\"blue,_sm\":{\"purchasable\":[\"variant_blue,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"540\"],\"stock\":[\"65\"]}}', '1', '1060ddf96cf30ca', 1, '2021-07-01 17:20:44', '2021-07-01 17:20:44'),
(7, 'Women\'s Fashionable Shirt', 'thx-3783', 'physical', '355', 'Plus point', '300', '[8,12,26]', '\r\n                    Anarkali Salwar suit is a form of women\'s dress originating from the Indian subcontinent. The Anarkali suit is made up of a long, frock-style top and features a slim fitted bottom. ... The word Anarkali literally means the \'delicate bud of the pomegranate flower/ tree\'.\r\n\r\n\r\n                    The authentic supplier and manufacturer of Daraz, offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform all over Bangladesh and serves to the greater extent for achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty.\r\n\r\n                ', NULL, 'thx-9583', 'mpn-8104', 'ean-7003', 'gtn-9261', 'bpn-2446', '556', 'shipping', 'luxary-tax-655', '180', '5', '589', '[{\"min_quantity\":2,\"discount\":\"6\",\"unit_price\":\"550\"},{\"min_quantity\":4,\"discount\":\"7\",\"unit_price\":\"550\"}]', 'discount', 'on', 'on', '544', '26', '[{\"id\":1,\"display_name\":\"color\",\"unique_name\":\"color\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"red\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"blue\\\",\\\"default\\\":true,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"yellow\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"greeen\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"1560ced04a0c321\",\"status\":1,\"created_at\":\"2021-06-19T23:21:13.000000Z\",\"updated_at\":\"2021-06-20T01:26:01.000000Z\",\"option_values_json\":[{\"name\":\"red\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"blue\",\"default\":true,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]},{\"id\":2,\"display_name\":\"Size\",\"unique_name\":\"Size\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"xs\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"sm\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"md\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"lg\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xxl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"3560cf024031dbb\",\"status\":1,\"created_at\":\"2021-06-20T02:54:24.000000Z\",\"updated_at\":\"2021-06-20T02:54:24.000000Z\",\"option_values_json\":[{\"name\":\"xs\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"sm\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]}]', '[{\"name\":\"user_email\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"},{\"name\":\"user_address\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"}]', 'on', 'product, shirt, sari, silk, cotton', 'asc', 'none', 'no waranty', 'always available', 'new', 'on', '[{\"name\":\"created\",\"value\":\"2020\"},{\"name\":\"expired\",\"value\":\"2021\"},{\"name\":\"return\",\"value\":\"no\"}]', 'on', '300', '300', '250', '400', 'on', 'on', NULL, NULL, NULL, 'on', '+880145236', '1', '150', 'USE ALL VISIBLE GIFT WRAPPING OPTIONS I\'VE CREATED', 'on', NULL, 'commdity description', '[{\"country\":\"bangladesh\",\"code\":\"hs-952\"},{\"country\":\"canada\",\"code\":\"hs-987\"},{\"country\":\"afganistan\",\"code\":\"hs-256\"}]', 'polo t-shirt', '/Women\'s-Fashionable-Shirt/product-1498', 'meta description', 'Product', 'on', 'on', 'on', '{\"red,_xs\":{\"purchasable\":[\"variant_red,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"520\"],\"stock\":[\"25\"]},\"red,_sm\":{\"purchasable\":[\"variant_red,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"510\"],\"stock\":[\"45\"]},\"blue,_xs\":{\"purchasable\":[\"variant_blue,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"530\"],\"stock\":[\"50\"]},\"blue,_sm\":{\"purchasable\":[\"variant_blue,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"540\"],\"stock\":[\"65\"]}}', '1', '1060ddf96cf391c', 1, '2021-07-01 17:20:44', '2021-07-01 17:20:44'),
(8, 'Kids toys collection1', 'thx-1418', 'physical', '348', 'oppo', '300', '[1,19,29]', '\r\n                    Anarkali Salwar suit is a form of women\'s dress originating from the Indian subcontinent. The Anarkali suit is made up of a long, frock-style top and features a slim fitted bottom. ... The word Anarkali literally means the \'delicate bud of the pomegranate flower/ tree\'.\r\n\r\n\r\n                    The authentic supplier and manufacturer of Daraz, offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform all over Bangladesh and serves to the greater extent for achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty.\r\n\r\n                ', NULL, 'thx-7504', 'mpn-7798', 'ean-7797', 'gtn-8646', 'bpn-6744', '410', 'shipping', 'luxary-tax-655', '180', '5', '488', '[{\"min_quantity\":2,\"discount\":\"6\",\"unit_price\":\"550\"},{\"min_quantity\":4,\"discount\":\"7\",\"unit_price\":\"550\"}]', 'discount', 'on', 'on', '927', '39', '[{\"id\":1,\"display_name\":\"color\",\"unique_name\":\"color\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"red\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"blue\\\",\\\"default\\\":true,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"yellow\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"greeen\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"1560ced04a0c321\",\"status\":1,\"created_at\":\"2021-06-19T23:21:13.000000Z\",\"updated_at\":\"2021-06-20T01:26:01.000000Z\",\"option_values_json\":[{\"name\":\"red\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"blue\",\"default\":true,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]},{\"id\":2,\"display_name\":\"Size\",\"unique_name\":\"Size\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"xs\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"sm\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"md\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"lg\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xxl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"3560cf024031dbb\",\"status\":1,\"created_at\":\"2021-06-20T02:54:24.000000Z\",\"updated_at\":\"2021-06-20T02:54:24.000000Z\",\"option_values_json\":[{\"name\":\"xs\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"sm\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]}]', '[{\"name\":\"user_email\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"},{\"name\":\"user_address\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"}]', 'on', 'product, shirt, sari, silk, cotton', 'asc', 'none', 'no waranty', 'always available', 'new', 'on', '[{\"name\":\"created\",\"value\":\"2020\"},{\"name\":\"expired\",\"value\":\"2021\"},{\"name\":\"return\",\"value\":\"no\"}]', 'on', '300', '300', '250', '400', 'on', 'on', NULL, NULL, NULL, 'on', '+880145236', '1', '150', 'USE ALL VISIBLE GIFT WRAPPING OPTIONS I\'VE CREATED', 'on', NULL, 'commdity description', '[{\"country\":\"bangladesh\",\"code\":\"hs-952\"},{\"country\":\"canada\",\"code\":\"hs-987\"},{\"country\":\"afganistan\",\"code\":\"hs-256\"}]', 'polo t-shirt', '/Kids-toys-collection1/product-1947', 'meta description', 'Product', 'on', 'on', 'on', '{\"red,_xs\":{\"purchasable\":[\"variant_red,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"520\"],\"stock\":[\"25\"]},\"red,_sm\":{\"purchasable\":[\"variant_red,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"510\"],\"stock\":[\"45\"]},\"blue,_xs\":{\"purchasable\":[\"variant_blue,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"530\"],\"stock\":[\"50\"]},\"blue,_sm\":{\"purchasable\":[\"variant_blue,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"540\"],\"stock\":[\"65\"]}}', '1', '1060ddf96cf40f6', 1, '2021-07-01 17:20:44', '2021-07-01 17:20:44');
INSERT INTO `products` (`id`, `product_name`, `sku`, `product_type`, `default_price`, `brand_id`, `weight`, `selected_categories`, `description`, `image`, `product_identifier_sku`, `manufacture_part_number`, `product_upc`, `global_trade_number`, `bin_picking_number`, `pricing_default_price`, `tax_class`, `tax_provider_tax_code`, `cost`, `msrp`, `sales_price`, `bulk_pricing_discount_options`, `bulk_pricing_discount_type`, `track_inventory`, `on_the_product_level`, `track_inventory_on_the_variant_level_stock`, `track_inventory_on_the_variant_level_low_stock`, `selected_variant_options`, `modifier_options`, `set_as_store_front`, `search_keywords`, `sort_order`, `template_layout_file`, `waranty_information`, `availability_text`, `product_condition`, `show_condition_on_storefront`, `custom_fields`, `automatically_show_related_prodauct_on_my_store_front`, `width`, `height`, `depth`, `fixed_shipping_price`, `free_shipping`, `purchasability`, `preorder_message`, `release_date`, `remove_pre_order_status_on_this_date`, `show_call_for_pricing`, `call_number`, `minimum_purchase_quantity`, `maximum_purchase_quantity`, `wrapping`, `custom_information`, `country_of_origin`, `comodity_description`, `hs_codes`, `page_title`, `product_url`, `meta_description`, `open_graph_sharing_object_type`, `open_graph_use_product_description`, `open_graph_use_product_name`, `open_graph_use_thumbnail_image`, `variant_values`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(9, 'Plastic Remote Control World Racing', 'thx-8801', 'physical', '529', 'Plus point', '300', '[1,12,28]', '\r\n                    Anarkali Salwar suit is a form of women\'s dress originating from the Indian subcontinent. The Anarkali suit is made up of a long, frock-style top and features a slim fitted bottom. ... The word Anarkali literally means the \'delicate bud of the pomegranate flower/ tree\'.\r\n\r\n\r\n                    The authentic supplier and manufacturer of Daraz, offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform all over Bangladesh and serves to the greater extent for achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty.\r\n\r\n                ', NULL, 'thx-8966', 'mpn-2159', 'ean-4872', 'gtn-5980', 'bpn-3034', '309', 'shipping', 'luxary-tax-655', '180', '5', '233', '[{\"min_quantity\":2,\"discount\":\"6\",\"unit_price\":\"550\"},{\"min_quantity\":4,\"discount\":\"7\",\"unit_price\":\"550\"}]', 'discount', 'on', 'on', '602', '32', '[{\"id\":1,\"display_name\":\"color\",\"unique_name\":\"color\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"red\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"blue\\\",\\\"default\\\":true,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"yellow\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"greeen\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"1560ced04a0c321\",\"status\":1,\"created_at\":\"2021-06-19T23:21:13.000000Z\",\"updated_at\":\"2021-06-20T01:26:01.000000Z\",\"option_values_json\":[{\"name\":\"red\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"blue\",\"default\":true,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]},{\"id\":2,\"display_name\":\"Size\",\"unique_name\":\"Size\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"xs\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"sm\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"md\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"lg\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xxl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"3560cf024031dbb\",\"status\":1,\"created_at\":\"2021-06-20T02:54:24.000000Z\",\"updated_at\":\"2021-06-20T02:54:24.000000Z\",\"option_values_json\":[{\"name\":\"xs\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"sm\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]}]', '[{\"name\":\"user_email\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"},{\"name\":\"user_address\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"}]', 'on', 'product, shirt, sari, silk, cotton', 'asc', 'none', 'no waranty', 'always available', 'new', 'on', '[{\"name\":\"created\",\"value\":\"2020\"},{\"name\":\"expired\",\"value\":\"2021\"},{\"name\":\"return\",\"value\":\"no\"}]', 'on', '300', '300', '250', '400', 'on', 'on', NULL, NULL, NULL, 'on', '+880145236', '1', '150', 'USE ALL VISIBLE GIFT WRAPPING OPTIONS I\'VE CREATED', 'on', NULL, 'commdity description', '[{\"country\":\"bangladesh\",\"code\":\"hs-952\"},{\"country\":\"canada\",\"code\":\"hs-987\"},{\"country\":\"afganistan\",\"code\":\"hs-256\"}]', 'polo t-shirt', '/Plastic-Remote-Control-World-Racing/product-2712', 'meta description', 'Product', 'on', 'on', 'on', '{\"red,_xs\":{\"purchasable\":[\"variant_red,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"520\"],\"stock\":[\"25\"]},\"red,_sm\":{\"purchasable\":[\"variant_red,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"510\"],\"stock\":[\"45\"]},\"blue,_xs\":{\"purchasable\":[\"variant_blue,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"530\"],\"stock\":[\"50\"]},\"blue,_sm\":{\"purchasable\":[\"variant_blue,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"540\"],\"stock\":[\"65\"]}}', '1', '1060ddf96d0183d', 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(10, 'kodomo bath (gentle soft)', 'thx-1759', 'physical', '256', 'oppo', '300', '[4,13,27]', '\r\n                    Anarkali Salwar suit is a form of women\'s dress originating from the Indian subcontinent. The Anarkali suit is made up of a long, frock-style top and features a slim fitted bottom. ... The word Anarkali literally means the \'delicate bud of the pomegranate flower/ tree\'.\r\n\r\n\r\n                    The authentic supplier and manufacturer of Daraz, offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform all over Bangladesh and serves to the greater extent for achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty.\r\n\r\n                ', NULL, 'thx-8034', 'mpn-6926', 'ean-6497', 'gtn-7319', 'bpn-4159', '403', 'shipping', 'luxary-tax-655', '180', '5', '547', '[{\"min_quantity\":2,\"discount\":\"6\",\"unit_price\":\"550\"},{\"min_quantity\":4,\"discount\":\"7\",\"unit_price\":\"550\"}]', 'discount', 'on', 'on', '818', '24', '[{\"id\":1,\"display_name\":\"color\",\"unique_name\":\"color\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"red\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"blue\\\",\\\"default\\\":true,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"yellow\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"greeen\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"1560ced04a0c321\",\"status\":1,\"created_at\":\"2021-06-19T23:21:13.000000Z\",\"updated_at\":\"2021-06-20T01:26:01.000000Z\",\"option_values_json\":[{\"name\":\"red\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"blue\",\"default\":true,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]},{\"id\":2,\"display_name\":\"Size\",\"unique_name\":\"Size\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"xs\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"sm\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"md\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"lg\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xxl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"3560cf024031dbb\",\"status\":1,\"created_at\":\"2021-06-20T02:54:24.000000Z\",\"updated_at\":\"2021-06-20T02:54:24.000000Z\",\"option_values_json\":[{\"name\":\"xs\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"sm\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]}]', '[{\"name\":\"user_email\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"},{\"name\":\"user_address\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"}]', 'on', 'product, shirt, sari, silk, cotton', 'asc', 'none', 'no waranty', 'always available', 'new', 'on', '[{\"name\":\"created\",\"value\":\"2020\"},{\"name\":\"expired\",\"value\":\"2021\"},{\"name\":\"return\",\"value\":\"no\"}]', 'on', '300', '300', '250', '400', 'on', 'on', NULL, NULL, NULL, 'on', '+880145236', '1', '150', 'USE ALL VISIBLE GIFT WRAPPING OPTIONS I\'VE CREATED', 'on', NULL, 'commdity description', '[{\"country\":\"bangladesh\",\"code\":\"hs-952\"},{\"country\":\"canada\",\"code\":\"hs-987\"},{\"country\":\"afganistan\",\"code\":\"hs-256\"}]', 'polo t-shirt', '/kodomo-bath-(gentle-soft)/product-2023', 'meta description', 'Product', 'on', 'on', 'on', '{\"red,_xs\":{\"purchasable\":[\"variant_red,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"520\"],\"stock\":[\"25\"]},\"red,_sm\":{\"purchasable\":[\"variant_red,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"510\"],\"stock\":[\"45\"]},\"blue,_xs\":{\"purchasable\":[\"variant_blue,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"530\"],\"stock\":[\"50\"]},\"blue,_sm\":{\"purchasable\":[\"variant_blue,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"540\"],\"stock\":[\"65\"]}}', '1', '1060ddf96d02939', 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(11, 'Nokshipitha', 'thx-6567', 'physical', '481', 'Easy', '300', '[5,16,25]', '\r\n                    Anarkali Salwar suit is a form of women\'s dress originating from the Indian subcontinent. The Anarkali suit is made up of a long, frock-style top and features a slim fitted bottom. ... The word Anarkali literally means the \'delicate bud of the pomegranate flower/ tree\'.\r\n\r\n\r\n                    The authentic supplier and manufacturer of Daraz, offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform all over Bangladesh and serves to the greater extent for achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty.\r\n\r\n                ', NULL, 'thx-2566', 'mpn-2655', 'ean-8497', 'gtn-2347', 'bpn-7671', '562', 'shipping', 'luxary-tax-655', '180', '5', '580', '[{\"min_quantity\":2,\"discount\":\"6\",\"unit_price\":\"550\"},{\"min_quantity\":4,\"discount\":\"7\",\"unit_price\":\"550\"}]', 'discount', 'on', 'on', '967', '37', '[{\"id\":1,\"display_name\":\"color\",\"unique_name\":\"color\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"red\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"blue\\\",\\\"default\\\":true,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"yellow\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"greeen\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"1560ced04a0c321\",\"status\":1,\"created_at\":\"2021-06-19T23:21:13.000000Z\",\"updated_at\":\"2021-06-20T01:26:01.000000Z\",\"option_values_json\":[{\"name\":\"red\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"blue\",\"default\":true,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]},{\"id\":2,\"display_name\":\"Size\",\"unique_name\":\"Size\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"xs\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"sm\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"md\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"lg\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xxl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"3560cf024031dbb\",\"status\":1,\"created_at\":\"2021-06-20T02:54:24.000000Z\",\"updated_at\":\"2021-06-20T02:54:24.000000Z\",\"option_values_json\":[{\"name\":\"xs\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"sm\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]}]', '[{\"name\":\"user_email\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"},{\"name\":\"user_address\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"}]', 'on', 'product, shirt, sari, silk, cotton', 'asc', 'none', 'no waranty', 'always available', 'new', 'on', '[{\"name\":\"created\",\"value\":\"2020\"},{\"name\":\"expired\",\"value\":\"2021\"},{\"name\":\"return\",\"value\":\"no\"}]', 'on', '300', '300', '250', '400', 'on', 'on', NULL, NULL, NULL, 'on', '+880145236', '1', '150', 'USE ALL VISIBLE GIFT WRAPPING OPTIONS I\'VE CREATED', 'on', NULL, 'commdity description', '[{\"country\":\"bangladesh\",\"code\":\"hs-952\"},{\"country\":\"canada\",\"code\":\"hs-987\"},{\"country\":\"afganistan\",\"code\":\"hs-256\"}]', 'polo t-shirt', '/Nokshipitha/product-1841', 'meta description', 'Product', 'on', 'on', 'on', '{\"red,_xs\":{\"purchasable\":[\"variant_red,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"520\"],\"stock\":[\"25\"]},\"red,_sm\":{\"purchasable\":[\"variant_red,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"510\"],\"stock\":[\"45\"]},\"blue,_xs\":{\"purchasable\":[\"variant_blue,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"530\"],\"stock\":[\"50\"]},\"blue,_sm\":{\"purchasable\":[\"variant_blue,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"540\"],\"stock\":[\"65\"]}}', '1', '1060ddf96d0329d', 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(12, 'Teer sugar', 'thx-2165', 'physical', '461', 'Plus point', '300', '[6,19,25]', '\r\n                    Anarkali Salwar suit is a form of women\'s dress originating from the Indian subcontinent. The Anarkali suit is made up of a long, frock-style top and features a slim fitted bottom. ... The word Anarkali literally means the \'delicate bud of the pomegranate flower/ tree\'.\r\n\r\n\r\n                    The authentic supplier and manufacturer of Daraz, offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform all over Bangladesh and serves to the greater extent for achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty.\r\n\r\n                ', NULL, 'thx-7166', 'mpn-7548', 'ean-4504', 'gtn-8628', 'bpn-8982', '216', 'shipping', 'luxary-tax-655', '180', '5', '396', '[{\"min_quantity\":2,\"discount\":\"6\",\"unit_price\":\"550\"},{\"min_quantity\":4,\"discount\":\"7\",\"unit_price\":\"550\"}]', 'discount', 'on', 'on', '694', '45', '[{\"id\":1,\"display_name\":\"color\",\"unique_name\":\"color\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"red\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"blue\\\",\\\"default\\\":true,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"yellow\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"greeen\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"1560ced04a0c321\",\"status\":1,\"created_at\":\"2021-06-19T23:21:13.000000Z\",\"updated_at\":\"2021-06-20T01:26:01.000000Z\",\"option_values_json\":[{\"name\":\"red\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"blue\",\"default\":true,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]},{\"id\":2,\"display_name\":\"Size\",\"unique_name\":\"Size\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"xs\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"sm\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"md\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"lg\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xxl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"3560cf024031dbb\",\"status\":1,\"created_at\":\"2021-06-20T02:54:24.000000Z\",\"updated_at\":\"2021-06-20T02:54:24.000000Z\",\"option_values_json\":[{\"name\":\"xs\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"sm\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]}]', '[{\"name\":\"user_email\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"},{\"name\":\"user_address\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"}]', 'on', 'product, shirt, sari, silk, cotton', 'asc', 'none', 'no waranty', 'always available', 'new', 'on', '[{\"name\":\"created\",\"value\":\"2020\"},{\"name\":\"expired\",\"value\":\"2021\"},{\"name\":\"return\",\"value\":\"no\"}]', 'on', '300', '300', '250', '400', 'on', 'on', NULL, NULL, NULL, 'on', '+880145236', '1', '150', 'USE ALL VISIBLE GIFT WRAPPING OPTIONS I\'VE CREATED', 'on', NULL, 'commdity description', '[{\"country\":\"bangladesh\",\"code\":\"hs-952\"},{\"country\":\"canada\",\"code\":\"hs-987\"},{\"country\":\"afganistan\",\"code\":\"hs-256\"}]', 'polo t-shirt', '/Teer-sugar/product-1686', 'meta description', 'Product', 'on', 'on', 'on', '{\"red,_xs\":{\"purchasable\":[\"variant_red,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"520\"],\"stock\":[\"25\"]},\"red,_sm\":{\"purchasable\":[\"variant_red,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"510\"],\"stock\":[\"45\"]},\"blue,_xs\":{\"purchasable\":[\"variant_blue,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"530\"],\"stock\":[\"50\"]},\"blue,_sm\":{\"purchasable\":[\"variant_blue,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"540\"],\"stock\":[\"65\"]}}', '1', '1060ddf96d0409b', 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(13, 'Radhuni biryani masala', 'thx-8701', 'physical', '550', 'oppo', '300', '[7,12,21]', '\r\n                    Anarkali Salwar suit is a form of women\'s dress originating from the Indian subcontinent. The Anarkali suit is made up of a long, frock-style top and features a slim fitted bottom. ... The word Anarkali literally means the \'delicate bud of the pomegranate flower/ tree\'.\r\n\r\n\r\n                    The authentic supplier and manufacturer of Daraz, offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform all over Bangladesh and serves to the greater extent for achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty.\r\n\r\n                ', NULL, 'thx-8349', 'mpn-1462', 'ean-5786', 'gtn-5777', 'bpn-7415', '401', 'shipping', 'luxary-tax-655', '180', '5', '374', '[{\"min_quantity\":2,\"discount\":\"6\",\"unit_price\":\"550\"},{\"min_quantity\":4,\"discount\":\"7\",\"unit_price\":\"550\"}]', 'discount', 'on', 'on', '927', '16', '[{\"id\":1,\"display_name\":\"color\",\"unique_name\":\"color\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"red\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"blue\\\",\\\"default\\\":true,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"yellow\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"greeen\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"1560ced04a0c321\",\"status\":1,\"created_at\":\"2021-06-19T23:21:13.000000Z\",\"updated_at\":\"2021-06-20T01:26:01.000000Z\",\"option_values_json\":[{\"name\":\"red\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"blue\",\"default\":true,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]},{\"id\":2,\"display_name\":\"Size\",\"unique_name\":\"Size\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"xs\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"sm\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"md\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"lg\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xxl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"3560cf024031dbb\",\"status\":1,\"created_at\":\"2021-06-20T02:54:24.000000Z\",\"updated_at\":\"2021-06-20T02:54:24.000000Z\",\"option_values_json\":[{\"name\":\"xs\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"sm\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]}]', '[{\"name\":\"user_email\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"},{\"name\":\"user_address\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"}]', 'on', 'product, shirt, sari, silk, cotton', 'asc', 'none', 'no waranty', 'always available', 'new', 'on', '[{\"name\":\"created\",\"value\":\"2020\"},{\"name\":\"expired\",\"value\":\"2021\"},{\"name\":\"return\",\"value\":\"no\"}]', 'on', '300', '300', '250', '400', 'on', 'on', NULL, NULL, NULL, 'on', '+880145236', '1', '150', 'USE ALL VISIBLE GIFT WRAPPING OPTIONS I\'VE CREATED', 'on', NULL, 'commdity description', '[{\"country\":\"bangladesh\",\"code\":\"hs-952\"},{\"country\":\"canada\",\"code\":\"hs-987\"},{\"country\":\"afganistan\",\"code\":\"hs-256\"}]', 'polo t-shirt', '/Radhuni-biryani-masala/product-2020', 'meta description', 'Product', 'on', 'on', 'on', '{\"red,_xs\":{\"purchasable\":[\"variant_red,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"520\"],\"stock\":[\"25\"]},\"red,_sm\":{\"purchasable\":[\"variant_red,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"510\"],\"stock\":[\"45\"]},\"blue,_xs\":{\"purchasable\":[\"variant_blue,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"530\"],\"stock\":[\"50\"]},\"blue,_sm\":{\"purchasable\":[\"variant_blue,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"540\"],\"stock\":[\"65\"]}}', '1', '1060ddf96d04c62', 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(14, 'Shrimp shutki', 'thx-4015', 'physical', '524', 'oppo', '300', '[2,19,30]', '\r\n                    Anarkali Salwar suit is a form of women\'s dress originating from the Indian subcontinent. The Anarkali suit is made up of a long, frock-style top and features a slim fitted bottom. ... The word Anarkali literally means the \'delicate bud of the pomegranate flower/ tree\'.\r\n\r\n\r\n                    The authentic supplier and manufacturer of Daraz, offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform all over Bangladesh and serves to the greater extent for achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty.\r\n\r\n                ', NULL, 'thx-4466', 'mpn-5483', 'ean-8989', 'gtn-1216', 'bpn-4586', '545', 'shipping', 'luxary-tax-655', '180', '5', '527', '[{\"min_quantity\":2,\"discount\":\"6\",\"unit_price\":\"550\"},{\"min_quantity\":4,\"discount\":\"7\",\"unit_price\":\"550\"}]', 'discount', 'on', 'on', '735', '19', '[{\"id\":1,\"display_name\":\"color\",\"unique_name\":\"color\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"red\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"blue\\\",\\\"default\\\":true,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"yellow\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"greeen\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"1560ced04a0c321\",\"status\":1,\"created_at\":\"2021-06-19T23:21:13.000000Z\",\"updated_at\":\"2021-06-20T01:26:01.000000Z\",\"option_values_json\":[{\"name\":\"red\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"blue\",\"default\":true,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]},{\"id\":2,\"display_name\":\"Size\",\"unique_name\":\"Size\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"xs\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"sm\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"md\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"lg\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xxl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"3560cf024031dbb\",\"status\":1,\"created_at\":\"2021-06-20T02:54:24.000000Z\",\"updated_at\":\"2021-06-20T02:54:24.000000Z\",\"option_values_json\":[{\"name\":\"xs\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"sm\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]}]', '[{\"name\":\"user_email\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"},{\"name\":\"user_address\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"}]', 'on', 'product, shirt, sari, silk, cotton', 'asc', 'none', 'no waranty', 'always available', 'new', 'on', '[{\"name\":\"created\",\"value\":\"2020\"},{\"name\":\"expired\",\"value\":\"2021\"},{\"name\":\"return\",\"value\":\"no\"}]', 'on', '300', '300', '250', '400', 'on', 'on', NULL, NULL, NULL, 'on', '+880145236', '1', '150', 'USE ALL VISIBLE GIFT WRAPPING OPTIONS I\'VE CREATED', 'on', NULL, 'commdity description', '[{\"country\":\"bangladesh\",\"code\":\"hs-952\"},{\"country\":\"canada\",\"code\":\"hs-987\"},{\"country\":\"afganistan\",\"code\":\"hs-256\"}]', 'polo t-shirt', '/Shrimp-shutki/product-1471', 'meta description', 'Product', 'on', 'on', 'on', '{\"red,_xs\":{\"purchasable\":[\"variant_red,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"520\"],\"stock\":[\"25\"]},\"red,_sm\":{\"purchasable\":[\"variant_red,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"510\"],\"stock\":[\"45\"]},\"blue,_xs\":{\"purchasable\":[\"variant_blue,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"530\"],\"stock\":[\"50\"]},\"blue,_sm\":{\"purchasable\":[\"variant_blue,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"540\"],\"stock\":[\"65\"]}}', '1', '1060ddf96d060ca', 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(15, 'Pran Tomato Ketchup', 'thx-9591', 'physical', '390', 'oppo', '300', '[6,18,25]', '\r\n                    Anarkali Salwar suit is a form of women\'s dress originating from the Indian subcontinent. The Anarkali suit is made up of a long, frock-style top and features a slim fitted bottom. ... The word Anarkali literally means the \'delicate bud of the pomegranate flower/ tree\'.\r\n\r\n\r\n                    The authentic supplier and manufacturer of Daraz, offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform all over Bangladesh and serves to the greater extent for achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty.\r\n\r\n                ', NULL, 'thx-1570', 'mpn-4109', 'ean-6819', 'gtn-7830', 'bpn-3513', '519', 'shipping', 'luxary-tax-655', '180', '5', '250', '[{\"min_quantity\":2,\"discount\":\"6\",\"unit_price\":\"550\"},{\"min_quantity\":4,\"discount\":\"7\",\"unit_price\":\"550\"}]', 'discount', 'on', 'on', '654', '29', '[{\"id\":1,\"display_name\":\"color\",\"unique_name\":\"color\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"red\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"blue\\\",\\\"default\\\":true,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"yellow\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"greeen\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"1560ced04a0c321\",\"status\":1,\"created_at\":\"2021-06-19T23:21:13.000000Z\",\"updated_at\":\"2021-06-20T01:26:01.000000Z\",\"option_values_json\":[{\"name\":\"red\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"blue\",\"default\":true,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]},{\"id\":2,\"display_name\":\"Size\",\"unique_name\":\"Size\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"xs\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"sm\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"md\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"lg\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xxl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"3560cf024031dbb\",\"status\":1,\"created_at\":\"2021-06-20T02:54:24.000000Z\",\"updated_at\":\"2021-06-20T02:54:24.000000Z\",\"option_values_json\":[{\"name\":\"xs\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"sm\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]}]', '[{\"name\":\"user_email\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"},{\"name\":\"user_address\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"}]', 'on', 'product, shirt, sari, silk, cotton', 'asc', 'none', 'no waranty', 'always available', 'new', 'on', '[{\"name\":\"created\",\"value\":\"2020\"},{\"name\":\"expired\",\"value\":\"2021\"},{\"name\":\"return\",\"value\":\"no\"}]', 'on', '300', '300', '250', '400', 'on', 'on', NULL, NULL, NULL, 'on', '+880145236', '1', '150', 'USE ALL VISIBLE GIFT WRAPPING OPTIONS I\'VE CREATED', 'on', NULL, 'commdity description', '[{\"country\":\"bangladesh\",\"code\":\"hs-952\"},{\"country\":\"canada\",\"code\":\"hs-987\"},{\"country\":\"afganistan\",\"code\":\"hs-256\"}]', 'polo t-shirt', '/Pran-Tomato-Ketchup/product-1702', 'meta description', 'Product', 'on', 'on', 'on', '{\"red,_xs\":{\"purchasable\":[\"variant_red,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"520\"],\"stock\":[\"25\"]},\"red,_sm\":{\"purchasable\":[\"variant_red,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"510\"],\"stock\":[\"45\"]},\"blue,_xs\":{\"purchasable\":[\"variant_blue,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"530\"],\"stock\":[\"50\"]},\"blue,_sm\":{\"purchasable\":[\"variant_blue,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"540\"],\"stock\":[\"65\"]}}', '1', '1060ddf96d07127', 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(16, 'Black Seed', 'thx-3855', 'physical', '560', 'Easy', '300', '[2,15,24]', '\r\n                    Anarkali Salwar suit is a form of women\'s dress originating from the Indian subcontinent. The Anarkali suit is made up of a long, frock-style top and features a slim fitted bottom. ... The word Anarkali literally means the \'delicate bud of the pomegranate flower/ tree\'.\r\n\r\n\r\n                    The authentic supplier and manufacturer of Daraz, offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform all over Bangladesh and serves to the greater extent for achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty.\r\n\r\n                ', NULL, 'thx-3796', 'mpn-1849', 'ean-2224', 'gtn-7377', 'bpn-9955', '318', 'shipping', 'luxary-tax-655', '180', '5', '517', '[{\"min_quantity\":2,\"discount\":\"6\",\"unit_price\":\"550\"},{\"min_quantity\":4,\"discount\":\"7\",\"unit_price\":\"550\"}]', 'discount', 'on', 'on', '691', '39', '[{\"id\":1,\"display_name\":\"color\",\"unique_name\":\"color\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"red\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"blue\\\",\\\"default\\\":true,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"yellow\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"greeen\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"1560ced04a0c321\",\"status\":1,\"created_at\":\"2021-06-19T23:21:13.000000Z\",\"updated_at\":\"2021-06-20T01:26:01.000000Z\",\"option_values_json\":[{\"name\":\"red\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"blue\",\"default\":true,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]},{\"id\":2,\"display_name\":\"Size\",\"unique_name\":\"Size\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"xs\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"sm\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"md\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"lg\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xxl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"3560cf024031dbb\",\"status\":1,\"created_at\":\"2021-06-20T02:54:24.000000Z\",\"updated_at\":\"2021-06-20T02:54:24.000000Z\",\"option_values_json\":[{\"name\":\"xs\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"sm\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]}]', '[{\"name\":\"user_email\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"},{\"name\":\"user_address\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"}]', 'on', 'product, shirt, sari, silk, cotton', 'asc', 'none', 'no waranty', 'always available', 'new', 'on', '[{\"name\":\"created\",\"value\":\"2020\"},{\"name\":\"expired\",\"value\":\"2021\"},{\"name\":\"return\",\"value\":\"no\"}]', 'on', '300', '300', '250', '400', 'on', 'on', NULL, NULL, NULL, 'on', '+880145236', '1', '150', 'USE ALL VISIBLE GIFT WRAPPING OPTIONS I\'VE CREATED', 'on', NULL, 'commdity description', '[{\"country\":\"bangladesh\",\"code\":\"hs-952\"},{\"country\":\"canada\",\"code\":\"hs-987\"},{\"country\":\"afganistan\",\"code\":\"hs-256\"}]', 'polo t-shirt', '/Black-Seed/product-2963', 'meta description', 'Product', 'on', 'on', 'on', '{\"red,_xs\":{\"purchasable\":[\"variant_red,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"520\"],\"stock\":[\"25\"]},\"red,_sm\":{\"purchasable\":[\"variant_red,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"510\"],\"stock\":[\"45\"]},\"blue,_xs\":{\"purchasable\":[\"variant_blue,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"530\"],\"stock\":[\"50\"]},\"blue,_sm\":{\"purchasable\":[\"variant_blue,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"540\"],\"stock\":[\"65\"]}}', '1', '1060ddf96d07874', 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45');
INSERT INTO `products` (`id`, `product_name`, `sku`, `product_type`, `default_price`, `brand_id`, `weight`, `selected_categories`, `description`, `image`, `product_identifier_sku`, `manufacture_part_number`, `product_upc`, `global_trade_number`, `bin_picking_number`, `pricing_default_price`, `tax_class`, `tax_provider_tax_code`, `cost`, `msrp`, `sales_price`, `bulk_pricing_discount_options`, `bulk_pricing_discount_type`, `track_inventory`, `on_the_product_level`, `track_inventory_on_the_variant_level_stock`, `track_inventory_on_the_variant_level_low_stock`, `selected_variant_options`, `modifier_options`, `set_as_store_front`, `search_keywords`, `sort_order`, `template_layout_file`, `waranty_information`, `availability_text`, `product_condition`, `show_condition_on_storefront`, `custom_fields`, `automatically_show_related_prodauct_on_my_store_front`, `width`, `height`, `depth`, `fixed_shipping_price`, `free_shipping`, `purchasability`, `preorder_message`, `release_date`, `remove_pre_order_status_on_this_date`, `show_call_for_pricing`, `call_number`, `minimum_purchase_quantity`, `maximum_purchase_quantity`, `wrapping`, `custom_information`, `country_of_origin`, `comodity_description`, `hs_codes`, `page_title`, `product_url`, `meta_description`, `open_graph_sharing_object_type`, `open_graph_use_product_description`, `open_graph_use_product_name`, `open_graph_use_thumbnail_image`, `variant_values`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(17, 'Kheshari Dal', 'thx-2265', 'physical', '426', 'Easy', '300', '[8,12,22]', '\r\n                    Anarkali Salwar suit is a form of women\'s dress originating from the Indian subcontinent. The Anarkali suit is made up of a long, frock-style top and features a slim fitted bottom. ... The word Anarkali literally means the \'delicate bud of the pomegranate flower/ tree\'.\r\n\r\n\r\n                    The authentic supplier and manufacturer of Daraz, offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform all over Bangladesh and serves to the greater extent for achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty.\r\n\r\n                ', NULL, 'thx-4106', 'mpn-5138', 'ean-9980', 'gtn-2102', 'bpn-5183', '206', 'shipping', 'luxary-tax-655', '180', '5', '562', '[{\"min_quantity\":2,\"discount\":\"6\",\"unit_price\":\"550\"},{\"min_quantity\":4,\"discount\":\"7\",\"unit_price\":\"550\"}]', 'discount', 'on', 'on', '754', '18', '[{\"id\":1,\"display_name\":\"color\",\"unique_name\":\"color\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"red\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"blue\\\",\\\"default\\\":true,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"yellow\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"greeen\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"1560ced04a0c321\",\"status\":1,\"created_at\":\"2021-06-19T23:21:13.000000Z\",\"updated_at\":\"2021-06-20T01:26:01.000000Z\",\"option_values_json\":[{\"name\":\"red\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"blue\",\"default\":true,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]},{\"id\":2,\"display_name\":\"Size\",\"unique_name\":\"Size\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"xs\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"sm\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"md\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"lg\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xxl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"3560cf024031dbb\",\"status\":1,\"created_at\":\"2021-06-20T02:54:24.000000Z\",\"updated_at\":\"2021-06-20T02:54:24.000000Z\",\"option_values_json\":[{\"name\":\"xs\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"sm\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]}]', '[{\"name\":\"user_email\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"},{\"name\":\"user_address\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"}]', 'on', 'product, shirt, sari, silk, cotton', 'asc', 'none', 'no waranty', 'always available', 'new', 'on', '[{\"name\":\"created\",\"value\":\"2020\"},{\"name\":\"expired\",\"value\":\"2021\"},{\"name\":\"return\",\"value\":\"no\"}]', 'on', '300', '300', '250', '400', 'on', 'on', NULL, NULL, NULL, 'on', '+880145236', '1', '150', 'USE ALL VISIBLE GIFT WRAPPING OPTIONS I\'VE CREATED', 'on', NULL, 'commdity description', '[{\"country\":\"bangladesh\",\"code\":\"hs-952\"},{\"country\":\"canada\",\"code\":\"hs-987\"},{\"country\":\"afganistan\",\"code\":\"hs-256\"}]', 'polo t-shirt', '/Kheshari-Dal/product-2402', 'meta description', 'Product', 'on', 'on', 'on', '{\"red,_xs\":{\"purchasable\":[\"variant_red,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"520\"],\"stock\":[\"25\"]},\"red,_sm\":{\"purchasable\":[\"variant_red,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"510\"],\"stock\":[\"45\"]},\"blue,_xs\":{\"purchasable\":[\"variant_blue,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"530\"],\"stock\":[\"50\"]},\"blue,_sm\":{\"purchasable\":[\"variant_blue,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"540\"],\"stock\":[\"65\"]}}', '1', '1060ddf96d07f5f', 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(18, 'Pran Mustard Oil', 'thx-5775', 'physical', '506', 'Plus point', '300', '[9,15,21]', '\r\n                    Anarkali Salwar suit is a form of women\'s dress originating from the Indian subcontinent. The Anarkali suit is made up of a long, frock-style top and features a slim fitted bottom. ... The word Anarkali literally means the \'delicate bud of the pomegranate flower/ tree\'.\r\n\r\n\r\n                    The authentic supplier and manufacturer of Daraz, offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform all over Bangladesh and serves to the greater extent for achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty.\r\n\r\n                ', NULL, 'thx-3833', 'mpn-6672', 'ean-1231', 'gtn-4805', 'bpn-8681', '416', 'shipping', 'luxary-tax-655', '180', '5', '321', '[{\"min_quantity\":2,\"discount\":\"6\",\"unit_price\":\"550\"},{\"min_quantity\":4,\"discount\":\"7\",\"unit_price\":\"550\"}]', 'discount', 'on', 'on', '677', '48', '[{\"id\":1,\"display_name\":\"color\",\"unique_name\":\"color\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"red\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"blue\\\",\\\"default\\\":true,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"yellow\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"greeen\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"1560ced04a0c321\",\"status\":1,\"created_at\":\"2021-06-19T23:21:13.000000Z\",\"updated_at\":\"2021-06-20T01:26:01.000000Z\",\"option_values_json\":[{\"name\":\"red\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"blue\",\"default\":true,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]},{\"id\":2,\"display_name\":\"Size\",\"unique_name\":\"Size\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"xs\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"sm\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"md\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"lg\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xxl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"3560cf024031dbb\",\"status\":1,\"created_at\":\"2021-06-20T02:54:24.000000Z\",\"updated_at\":\"2021-06-20T02:54:24.000000Z\",\"option_values_json\":[{\"name\":\"xs\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"sm\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]}]', '[{\"name\":\"user_email\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"},{\"name\":\"user_address\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"}]', 'on', 'product, shirt, sari, silk, cotton', 'asc', 'none', 'no waranty', 'always available', 'new', 'on', '[{\"name\":\"created\",\"value\":\"2020\"},{\"name\":\"expired\",\"value\":\"2021\"},{\"name\":\"return\",\"value\":\"no\"}]', 'on', '300', '300', '250', '400', 'on', 'on', NULL, NULL, NULL, 'on', '+880145236', '1', '150', 'USE ALL VISIBLE GIFT WRAPPING OPTIONS I\'VE CREATED', 'on', NULL, 'commdity description', '[{\"country\":\"bangladesh\",\"code\":\"hs-952\"},{\"country\":\"canada\",\"code\":\"hs-987\"},{\"country\":\"afganistan\",\"code\":\"hs-256\"}]', 'polo t-shirt', '/Pran-Mustard-Oil/product-1136', 'meta description', 'Product', 'on', 'on', 'on', '{\"red,_xs\":{\"purchasable\":[\"variant_red,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"520\"],\"stock\":[\"25\"]},\"red,_sm\":{\"purchasable\":[\"variant_red,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"510\"],\"stock\":[\"45\"]},\"blue,_xs\":{\"purchasable\":[\"variant_blue,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"530\"],\"stock\":[\"50\"]},\"blue,_sm\":{\"purchasable\":[\"variant_blue,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"540\"],\"stock\":[\"65\"]}}', '1', '1060ddf96d08ac0', 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(19, 'Maggi Coconut Milk Powder', 'thx-1676', 'physical', '407', 'Plus point', '300', '[8,14,27]', '\r\n                    Anarkali Salwar suit is a form of women\'s dress originating from the Indian subcontinent. The Anarkali suit is made up of a long, frock-style top and features a slim fitted bottom. ... The word Anarkali literally means the \'delicate bud of the pomegranate flower/ tree\'.\r\n\r\n\r\n                    The authentic supplier and manufacturer of Daraz, offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform all over Bangladesh and serves to the greater extent for achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty.\r\n\r\n                ', NULL, 'thx-6810', 'mpn-7568', 'ean-1480', 'gtn-3060', 'bpn-7478', '547', 'shipping', 'luxary-tax-655', '180', '5', '465', '[{\"min_quantity\":2,\"discount\":\"6\",\"unit_price\":\"550\"},{\"min_quantity\":4,\"discount\":\"7\",\"unit_price\":\"550\"}]', 'discount', 'on', 'on', '946', '11', '[{\"id\":1,\"display_name\":\"color\",\"unique_name\":\"color\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"red\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"blue\\\",\\\"default\\\":true,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"yellow\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"greeen\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"1560ced04a0c321\",\"status\":1,\"created_at\":\"2021-06-19T23:21:13.000000Z\",\"updated_at\":\"2021-06-20T01:26:01.000000Z\",\"option_values_json\":[{\"name\":\"red\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"blue\",\"default\":true,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]},{\"id\":2,\"display_name\":\"Size\",\"unique_name\":\"Size\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"xs\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"sm\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"md\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"lg\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xxl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"3560cf024031dbb\",\"status\":1,\"created_at\":\"2021-06-20T02:54:24.000000Z\",\"updated_at\":\"2021-06-20T02:54:24.000000Z\",\"option_values_json\":[{\"name\":\"xs\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"sm\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]}]', '[{\"name\":\"user_email\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"},{\"name\":\"user_address\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"}]', 'on', 'product, shirt, sari, silk, cotton', 'asc', 'none', 'no waranty', 'always available', 'new', 'on', '[{\"name\":\"created\",\"value\":\"2020\"},{\"name\":\"expired\",\"value\":\"2021\"},{\"name\":\"return\",\"value\":\"no\"}]', 'on', '300', '300', '250', '400', 'on', 'on', NULL, NULL, NULL, 'on', '+880145236', '1', '150', 'USE ALL VISIBLE GIFT WRAPPING OPTIONS I\'VE CREATED', 'on', NULL, 'commdity description', '[{\"country\":\"bangladesh\",\"code\":\"hs-952\"},{\"country\":\"canada\",\"code\":\"hs-987\"},{\"country\":\"afganistan\",\"code\":\"hs-256\"}]', 'polo t-shirt', '/Maggi-Coconut-Milk-Powder/product-1287', 'meta description', 'Product', 'on', 'on', 'on', '{\"red,_xs\":{\"purchasable\":[\"variant_red,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"520\"],\"stock\":[\"25\"]},\"red,_sm\":{\"purchasable\":[\"variant_red,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"510\"],\"stock\":[\"45\"]},\"blue,_xs\":{\"purchasable\":[\"variant_blue,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"530\"],\"stock\":[\"50\"]},\"blue,_sm\":{\"purchasable\":[\"variant_blue,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"540\"],\"stock\":[\"65\"]}}', '1', '1060ddf96d09ced', 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(20, 'Ruchi Mixed Fruit Jam', 'thx-9880', 'physical', '243', 'oppo', '300', '[2,12,28]', '\r\n                    Anarkali Salwar suit is a form of women\'s dress originating from the Indian subcontinent. The Anarkali suit is made up of a long, frock-style top and features a slim fitted bottom. ... The word Anarkali literally means the \'delicate bud of the pomegranate flower/ tree\'.\r\n\r\n\r\n                    The authentic supplier and manufacturer of Daraz, offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform all over Bangladesh and serves to the greater extent for achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty.\r\n\r\n                ', NULL, 'thx-7615', 'mpn-3044', 'ean-9866', 'gtn-2170', 'bpn-3112', '478', 'shipping', 'luxary-tax-655', '180', '5', '596', '[{\"min_quantity\":2,\"discount\":\"6\",\"unit_price\":\"550\"},{\"min_quantity\":4,\"discount\":\"7\",\"unit_price\":\"550\"}]', 'discount', 'on', 'on', '986', '23', '[{\"id\":1,\"display_name\":\"color\",\"unique_name\":\"color\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"red\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"blue\\\",\\\"default\\\":true,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"yellow\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"greeen\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"1560ced04a0c321\",\"status\":1,\"created_at\":\"2021-06-19T23:21:13.000000Z\",\"updated_at\":\"2021-06-20T01:26:01.000000Z\",\"option_values_json\":[{\"name\":\"red\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"blue\",\"default\":true,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]},{\"id\":2,\"display_name\":\"Size\",\"unique_name\":\"Size\",\"type\":\"dropdown\",\"option_values\":\"[{\\\"name\\\":\\\"xs\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"sm\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"md\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"lg\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}},{\\\"name\\\":\\\"xxl\\\",\\\"default\\\":false,\\\"color_limit\\\":3,\\\"colors\\\":{\\\"one_color\\\":\\\"#000000\\\",\\\"two_color\\\":\\\"#000000\\\",\\\"three_color\\\":\\\"#000000\\\"}}]\",\"creator\":\"1\",\"slug\":\"3560cf024031dbb\",\"status\":1,\"created_at\":\"2021-06-20T02:54:24.000000Z\",\"updated_at\":\"2021-06-20T02:54:24.000000Z\",\"option_values_json\":[{\"name\":\"xs\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"sm\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]}]', '[{\"name\":\"user_email\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"},{\"name\":\"user_address\",\"required\":false,\"type\":\"text-field\",\"default_value\":\"\"}]', 'on', 'product, shirt, sari, silk, cotton', 'asc', 'none', 'no waranty', 'always available', 'new', 'on', '[{\"name\":\"created\",\"value\":\"2020\"},{\"name\":\"expired\",\"value\":\"2021\"},{\"name\":\"return\",\"value\":\"no\"}]', 'on', '300', '300', '250', '400', 'on', 'on', NULL, NULL, NULL, 'on', '+880145236', '1', '150', 'USE ALL VISIBLE GIFT WRAPPING OPTIONS I\'VE CREATED', 'on', NULL, 'commdity description', '[{\"country\":\"bangladesh\",\"code\":\"hs-952\"},{\"country\":\"canada\",\"code\":\"hs-987\"},{\"country\":\"afganistan\",\"code\":\"hs-256\"}]', 'polo t-shirt', '/Ruchi-Mixed-Fruit-Jam/product-2495', 'meta description', 'Product', 'on', 'on', 'on', '{\"red,_xs\":{\"purchasable\":[\"variant_red,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"520\"],\"stock\":[\"25\"]},\"red,_sm\":{\"purchasable\":[\"variant_red,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"510\"],\"stock\":[\"45\"]},\"blue,_xs\":{\"purchasable\":[\"variant_blue,_xs\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"530\"],\"stock\":[\"50\"]},\"blue,_sm\":{\"purchasable\":[\"variant_blue,_sm\"],\"sku\":[null],\"default_price\":[\"550\"],\"sale_price\":[\"540\"],\"stock\":[\"65\"]}}', '1', '1060ddf96d0a93c', 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `product_conditions`
--

CREATE TABLE `product_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_condition_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_discount_types`
--

CREATE TABLE `product_discount_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `discount_type_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'uploads/product/7.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(2, 1, 'uploads/product/12.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(3, 1, 'uploads/product/8.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(4, 1, 'uploads/product/17.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(5, 2, 'uploads/product/16.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(6, 2, 'uploads/product/2.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(7, 2, 'uploads/product/5.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(8, 2, 'uploads/product/3.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(9, 3, 'uploads/product/4.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(10, 3, 'uploads/product/10.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(11, 3, 'uploads/product/2.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(12, 3, 'uploads/product/14.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(13, 4, 'uploads/product/17.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(14, 4, 'uploads/product/9.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(15, 4, 'uploads/product/10.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(16, 4, 'uploads/product/13.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(17, 5, 'uploads/product/11.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(18, 5, 'uploads/product/15.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(19, 5, 'uploads/product/15.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(20, 5, 'uploads/product/18.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(21, 6, 'uploads/product/9.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(22, 6, 'uploads/product/2.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(23, 6, 'uploads/product/10.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(24, 6, 'uploads/product/7.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(25, 7, 'uploads/product/6.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(26, 7, 'uploads/product/12.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(27, 7, 'uploads/product/7.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(28, 7, 'uploads/product/1.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(29, 8, 'uploads/product/11.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(30, 8, 'uploads/product/12.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(31, 8, 'uploads/product/8.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(32, 8, 'uploads/product/16.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(33, 9, 'uploads/product/2.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(34, 9, 'uploads/product/3.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(35, 9, 'uploads/product/16.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(36, 9, 'uploads/product/17.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(37, 10, 'uploads/product/7.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(38, 10, 'uploads/product/6.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(39, 10, 'uploads/product/1.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(40, 10, 'uploads/product/12.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(41, 11, 'uploads/product/12.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(42, 11, 'uploads/product/8.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(43, 11, 'uploads/product/6.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(44, 11, 'uploads/product/10.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(45, 12, 'uploads/product/4.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(46, 12, 'uploads/product/12.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(47, 12, 'uploads/product/7.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(48, 12, 'uploads/product/11.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(49, 13, 'uploads/product/10.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(50, 13, 'uploads/product/1.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(51, 13, 'uploads/product/10.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(52, 13, 'uploads/product/7.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(53, 14, 'uploads/product/4.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(54, 14, 'uploads/product/2.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(55, 14, 'uploads/product/5.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(56, 14, 'uploads/product/8.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(57, 15, 'uploads/product/5.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(58, 15, 'uploads/product/16.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(59, 15, 'uploads/product/4.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(60, 15, 'uploads/product/12.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(61, 16, 'uploads/product/8.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(62, 16, 'uploads/product/13.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(63, 16, 'uploads/product/16.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(64, 16, 'uploads/product/5.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(65, 17, 'uploads/product/18.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(66, 17, 'uploads/product/9.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(67, 17, 'uploads/product/18.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(68, 17, 'uploads/product/18.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(69, 18, 'uploads/product/2.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(70, 18, 'uploads/product/13.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(71, 18, 'uploads/product/3.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(72, 18, 'uploads/product/10.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(73, 19, 'uploads/product/14.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(74, 19, 'uploads/product/12.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(75, 19, 'uploads/product/17.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(76, 19, 'uploads/product/5.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(77, 20, 'uploads/product/11.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(78, 20, 'uploads/product/17.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(79, 20, 'uploads/product/5.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45'),
(80, 20, 'uploads/product/15.jpg', NULL, NULL, 1, '2021-07-01 17:20:45', '2021-07-01 17:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `product_object_types`
--

CREATE TABLE `product_object_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `object_type_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_options`
--

CREATE TABLE `product_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `display_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unique_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option_values` text COLLATE utf8mb4_unicode_ci,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_options`
--

INSERT INTO `product_options` (`id`, `display_name`, `unique_name`, `type`, `option_values`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'color', 'color', 'dropdown', '[{\"name\":\"red\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"blue\",\"default\":true,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"yellow\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"greeen\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]', '1', '1560ced04a0c321', 1, '2021-06-19 23:21:13', '2021-06-20 01:26:01'),
(2, 'Size', 'Size', 'dropdown', '[{\"name\":\"xs\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"sm\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"md\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"lg\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"xl\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"xxl\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]', '1', '3560cf024031dbb', 1, '2021-06-20 02:54:24', '2021-06-20 02:54:24');

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `size_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_tax_classes`
--

CREATE TABLE `product_tax_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tax_class_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `watermark_logo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `city` text COLLATE utf8mb4_unicode_ci,
  `zip_code` text COLLATE utf8mb4_unicode_ci,
  `map` text COLLATE utf8mb4_unicode_ci,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo1`, `logo2`, `logo3`, `watermark_logo`, `address`, `city`, `zip_code`, `map`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'logo1.png', 'logo1.png', 'logo1.png', 'logo1.png', 'sonirakhra, jatrabari, dhaka-1204, bangladesh', 'dhaka', '1204', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.066058198636!2d90.4320398653886!3d23.709334946259837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9a7bb6d225b%3A0xa34a29dda3223421!2sPacific%20Diagnostic%20Center%20%26Consultation%20Center%2037%20%2CSohid%20Faruq%20Road%2CJatrabari%2CDhaka-1204!5e0!3m2!1sen!2sbd!4v1618053406462!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '1', 'active', 1, '2021-07-01 17:20:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_addresses`
--

CREATE TABLE `shipping_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_address` text COLLATE utf8mb4_unicode_ci,
  `zip_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_addresses`
--

INSERT INTO `shipping_addresses` (`id`, `user_id`, `invoice_id`, `company_name`, `street_address`, `zip_code`, `city`, `country`, `phone`, `phone2`, `email`, `creator`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, NULL, 'sssssssssssss', NULL, '11111111111111111', NULL, '1111111', NULL, 'superadmin@gmail.com', NULL, 1, '2021-08-22 14:36:52', '2021-08-22 14:36:52');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `serial`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'active', 1, '1', 'active', 1, '2021-07-01 17:20:45', NULL),
(2, 'pending', 2, '1', 'pending', 1, '2021-07-01 17:20:45', NULL),
(3, 'processing', 3, '1', 'processing', 1, '2021-07-01 17:20:45', NULL),
(4, 'shipping', 4, '1', 'shipping', 1, '2021-07-01 17:20:45', NULL),
(5, 'delivered', 5, '1', 'delivered', 1, '2021-07-01 17:20:45', NULL),
(6, 'canceled', 6, '1', 'canceled', 1, '2021-07-01 17:20:45', NULL),
(7, 'draft', 7, '1', 'draft', 1, '2021-07-01 17:20:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `store_default_product_sorts`
--

CREATE TABLE `store_default_product_sorts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `default_product_sort_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `store_product_breadcrumbs`
--

CREATE TABLE `store_product_breadcrumbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_breadcrumb_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `store_setting_dates`
--

CREATE TABLE `store_setting_dates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `timezone` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_dst_correction` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_date_format` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extended_display_date_format` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `store_setting_dates`
--

INSERT INTO `store_setting_dates` (`id`, `creator`, `slug`, `status`, `timezone`, `enable_dst_correction`, `display_date_format`, `extended_display_date_format`, `created_at`, `updated_at`) VALUES
(1, '2', 'super_admin', 1, '1', '1', 'jS M Y', 'jS M Y @ g:i A', '2021-07-01 17:20:44', '2021-07-01 17:20:44'),
(2, '1', 'super_admin', 1, '2', '1', 'jS M Y', 'jS M Y @ g:i A', '2021-07-01 17:20:44', '2021-07-01 17:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `store_setting_displays`
--

CREATE TABLE `store_setting_displays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `product_breadcrumbs` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_quantity_box` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_search_suggest` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auto_approve_reviews` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_wishlist` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_product_comparisons` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_account_creation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_thumbnails` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_product_list` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_product_sort` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_display_depth` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_product_price` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_product_sku` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_product_weight` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_product_brand` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_product_shipping_cost` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_product_rating` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_add_to_cart_link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_pre_order_message` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `store_setting_displays`
--

INSERT INTO `store_setting_displays` (`id`, `creator`, `slug`, `status`, `product_breadcrumbs`, `show_quantity_box`, `enable_search_suggest`, `auto_approve_reviews`, `enable_wishlist`, `enable_product_comparisons`, `enable_account_creation`, `editor`, `product_thumbnails`, `category_product_list`, `default_product_sort`, `menu_display_depth`, `show_product_price`, `show_product_sku`, `show_product_weight`, `show_product_brand`, `show_product_shipping_cost`, `show_product_rating`, `show_add_to_cart_link`, `default_pre_order_message`, `created_at`, `updated_at`) VALUES
(1, '2', 'super_admin', 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '3', '1', '1', '1', '1', '0', '1', '1', 'Expected release date is %%DATE%%', '2021-07-01 17:20:44', '2021-07-01 17:20:44'),
(2, '1', 'super_admin', 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '3', '1', '1', '1', '1', '0', '1', '1', 'Expected release date is %%DATE%%', '2021-07-01 17:20:44', '2021-07-01 17:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `store_setting_miscellaneouses`
--

CREATE TABLE `store_setting_miscellaneouses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `product_review_emails` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forward_order_invoices` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `use_smtp_server` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `administrator_email` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `abandoned_cart_notifications` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `require_consent` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `abandoned_cart_emails` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `send_emails_to` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allow_purchasing` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `starting_order_number` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_throttler` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `store_setting_miscellaneouses`
--

INSERT INTO `store_setting_miscellaneouses` (`id`, `creator`, `slug`, `status`, `product_review_emails`, `forward_order_invoices`, `use_smtp_server`, `administrator_email`, `abandoned_cart_notifications`, `require_consent`, `abandoned_cart_emails`, `send_emails_to`, `allow_purchasing`, `starting_order_number`, `enable_throttler`, `created_at`, `updated_at`) VALUES
(1, '1', 'super_admin', 1, '1', '2', '1', 'demo@gmail.com', '1', '0', '1', 'demo@gmail.com', '1', '100', '1', '2021-07-01 17:20:44', '2021-07-01 17:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `store_setting_searches`
--

CREATE TABLE `store_setting_searches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `default_product_sort` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_content_sort` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `store_setting_searches`
--

INSERT INTO `store_setting_searches` (`id`, `creator`, `slug`, `status`, `default_product_sort`, `default_content_sort`, `created_at`, `updated_at`) VALUES
(1, '1', 'super_admin', 1, 'Bestselling', 'Alphabetical: A to Z', '2021-07-01 17:20:44', '2021-07-01 17:20:44'),
(2, '1', 'super_admin', 1, 'Newest Items', 'Alphabetical: Z to A', '2021-07-01 17:20:44', '2021-07-01 17:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `store_setting_securities`
--

CREATE TABLE `store_setting_securities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `configure_complexity` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inactive_shopper_logout` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopper_activity` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `control_panel_inactivity` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_recaptcha_on_storefront` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recaptcha_site_key` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recaptcha_secret_key` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `failed_login_lockout` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cookie_consent_tracking` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacy_policy_url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analytics_for_my_business` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsts_settings` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_security_policy` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `x_frame_options_header` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `store_setting_securities`
--

INSERT INTO `store_setting_securities` (`id`, `creator`, `slug`, `status`, `configure_complexity`, `inactive_shopper_logout`, `shopper_activity`, `control_panel_inactivity`, `enable_recaptcha_on_storefront`, `recaptcha_site_key`, `recaptcha_secret_key`, `failed_login_lockout`, `cookie_consent_tracking`, `privacy_policy_url`, `analytics_for_my_business`, `hsts_settings`, `content_security_policy`, `x_frame_options_header`, `created_at`, `updated_at`) VALUES
(1, '1', 'super_admin', 1, '1', '2', '1', '1', '1', 'abcd', 'abcd', '10', '1', 'https://example.com/privacy-policy', '1', '2', '1', '1', '2021-07-01 17:20:44', '2021-07-01 17:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `store_setting_shares`
--

CREATE TABLE `store_setting_shares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `facebook` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `like` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `store_setting_shares`
--

INSERT INTO `store_setting_shares` (`id`, `creator`, `slug`, `status`, `facebook`, `twitter`, `instagram`, `linkedin`, `pinterest`, `like`, `email`, `created_at`, `updated_at`) VALUES
(1, '1', 'Mr.Super', 1, '0', '0', '0', '0', '0', '0', '1', '2021-07-03 18:26:50', '2021-07-03 18:26:50');

-- --------------------------------------------------------

--
-- Table structure for table `store_setting_urls`
--

CREATE TABLE `store_setting_urls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `product_url_settings` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_url_custom_settings` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_url_format` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web_page_url_format` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `store_setting_urls`
--

INSERT INTO `store_setting_urls` (`id`, `creator`, `slug`, `status`, `product_url_settings`, `product_url_custom_settings`, `category_url_format`, `web_page_url_format`, `created_at`, `updated_at`) VALUES
(1, '2', 'super_admin', 1, '1', '', '2', '3', '2021-07-01 17:20:44', '2021-07-01 17:20:44'),
(2, '1', 'super_admin', 1, '3', '', '1', '2', '2021-07-01 17:20:44', '2021-07-01 17:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `store_setting_websites`
--

CREATE TABLE `store_setting_websites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `weight_measurement` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length_measurement` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `decimal_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thousands_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `decimal_places` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factoring_dimension` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `store_setting_websites`
--

INSERT INTO `store_setting_websites` (`id`, `creator`, `slug`, `status`, `weight_measurement`, `length_measurement`, `decimal_token`, `thousands_token`, `decimal_places`, `factoring_dimension`, `home_page_title`, `meta_keywords`, `meta_description`, `redirect`, `created_at`, `updated_at`) VALUES
(1, '2', 'super_admin', 1, '1', '2', '.', ',', '2', '1', 'bigecom', 'Meta Keywords', 'Meta Description', '1', '2021-07-01 17:20:44', '2021-07-01 17:20:44'),
(2, '1', 'super_admin', 1, '2', '1', '.', ',', '2', '2', 'bigecom2', 'Meta Keywords2', 'Meta Description2', '2', '2021-07-01 17:20:44', '2021-07-01 17:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `store_your_timezones`
--

CREATE TABLE `store_your_timezones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `timezone_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '4',
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `admin_theme` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_theme` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `first_name`, `last_name`, `username`, `photo`, `phone`, `email`, `address`, `admin_theme`, `website_theme`, `email_verified_at`, `password`, `creator`, `slug`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mr.Super', 'Admin', 'super_admin', 'avatar.png', '+880 123654789', 'superadmin@gmail.com', NULL, 'theme9', 'light', NULL, '$2y$10$o.29FmyDFrGKijYHPxf4DuBEJJ57Unf/G9/TziSCA98hb7SxnYteC', NULL, 'super_admin', 1, NULL, '2021-07-01 17:20:44', '2021-08-27 02:13:50'),
(2, 2, 'Mr. test', 'Admin', 'admin', 'avatar.png', '+880 123654789', 'admin@gmail.com', NULL, 'theme9', 'light', NULL, '$2y$10$CnXQarKhCZOQWvyS3MtlfuvTUkf6yv/MPQ47Uc50YyjkMKnmiz5WK', NULL, 'admin', 1, NULL, '2021-07-01 17:20:44', '2021-07-01 17:20:44'),
(3, 3, 'Mr. test', 'modarator', 'modarator', 'avatar.png', '+880 123654789', 'modarator@gmail.com', NULL, 'theme8', 'light', NULL, '$2y$10$NQPHO/6b/.wOCtLgT6RzseJ.Do9tHMMYhRMPlYznQ5NhgmEpCCcFi', NULL, 'modarator', 1, NULL, '2021-07-01 17:20:44', '2021-07-01 17:20:44'),
(4, 4, 'Mr. test', 'user', 'user', 'avatar.png', '+880 123654789', 'user@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$pf.fFNoQW7qGobyOjSo.FOb7ZTJ14RFlSN.LzRJCf.SR5rJhhQJpK', NULL, 'user', 1, NULL, '2021-07-01 17:20:44', '2021-07-01 17:20:44'),
(5, 5, 'Mr. test', 'subscriber', 'subscriber', 'avatar.png', '+880 123654789', 'subscriber@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$MyBACFFvnS3jOF4INfehrOTPX/3W4425TMgQS/u.yfIwZhk4QTLIC', NULL, 'subscriber', 1, NULL, '2021-07-01 17:20:44', '2021-07-01 17:20:44'),
(6, 6, 'delivery1', 'delivery1', 'delivery1', NULL, '12345678', 'delivery1@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$o.29FmyDFrGKijYHPxf4DuBEJJ57Unf/G9/TziSCA98hb7SxnYteC', NULL, NULL, 1, NULL, '2021-08-17 08:38:26', '2021-08-17 08:38:29');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `name`, `serial`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', 1, NULL, 'super_admin', 1, '2021-07-01 17:20:44', '2021-07-01 17:20:44'),
(2, 'admin', 2, NULL, 'admin', 1, '2021-07-01 17:20:44', '2021-07-01 17:20:44'),
(3, 'modarator', 3, NULL, 'modarator', 1, '2021-07-01 17:20:44', '2021-07-01 17:20:44'),
(4, 'user', 4, NULL, 'user', 1, '2021-07-01 17:20:44', '2021-07-01 17:20:44'),
(5, 'subscriber', 5, NULL, 'subscriber', 1, '2021-07-01 17:20:44', '2021-07-01 17:20:44'),
(6, 'delivery', 6, '', 'delivery', 1, '2021-08-17 08:37:40', '2021-08-17 08:37:46');

-- --------------------------------------------------------

--
-- Table structure for table `weight_measurements`
--

CREATE TABLE `weight_measurements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `weight_measurement_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `www_redirects`
--

CREATE TABLE `www_redirects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `www_redirect_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing_addresses`
--
ALTER TABLE `billing_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_product`
--
ALTER TABLE `color_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_names`
--
ALTER TABLE `country_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factoring_dimensions`
--
ALTER TABLE `factoring_dimensions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `length_measurements`
--
ALTER TABLE `length_measurements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_addresses`
--
ALTER TABLE `order_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_information`
--
ALTER TABLE `order_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_conditions`
--
ALTER TABLE `product_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_discount_types`
--
ALTER TABLE `product_discount_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_object_types`
--
ALTER TABLE `product_object_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_options`
--
ALTER TABLE `product_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tax_classes`
--
ALTER TABLE `product_tax_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_default_product_sorts`
--
ALTER TABLE `store_default_product_sorts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_product_breadcrumbs`
--
ALTER TABLE `store_product_breadcrumbs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_setting_dates`
--
ALTER TABLE `store_setting_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_setting_displays`
--
ALTER TABLE `store_setting_displays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_setting_miscellaneouses`
--
ALTER TABLE `store_setting_miscellaneouses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_setting_searches`
--
ALTER TABLE `store_setting_searches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_setting_securities`
--
ALTER TABLE `store_setting_securities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_setting_shares`
--
ALTER TABLE `store_setting_shares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_setting_urls`
--
ALTER TABLE `store_setting_urls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_setting_websites`
--
ALTER TABLE `store_setting_websites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_your_timezones`
--
ALTER TABLE `store_your_timezones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weight_measurements`
--
ALTER TABLE `weight_measurements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `www_redirects`
--
ALTER TABLE `www_redirects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `billing_addresses`
--
ALTER TABLE `billing_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `color_product`
--
ALTER TABLE `color_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `country_names`
--
ALTER TABLE `country_names`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `factoring_dimensions`
--
ALTER TABLE `factoring_dimensions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `length_measurements`
--
ALTER TABLE `length_measurements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_addresses`
--
ALTER TABLE `order_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_information`
--
ALTER TABLE `order_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_conditions`
--
ALTER TABLE `product_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_discount_types`
--
ALTER TABLE `product_discount_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `product_object_types`
--
ALTER TABLE `product_object_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_options`
--
ALTER TABLE `product_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_tax_classes`
--
ALTER TABLE `product_tax_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `store_default_product_sorts`
--
ALTER TABLE `store_default_product_sorts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store_product_breadcrumbs`
--
ALTER TABLE `store_product_breadcrumbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store_setting_dates`
--
ALTER TABLE `store_setting_dates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `store_setting_displays`
--
ALTER TABLE `store_setting_displays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `store_setting_miscellaneouses`
--
ALTER TABLE `store_setting_miscellaneouses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `store_setting_searches`
--
ALTER TABLE `store_setting_searches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `store_setting_securities`
--
ALTER TABLE `store_setting_securities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `store_setting_shares`
--
ALTER TABLE `store_setting_shares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `store_setting_urls`
--
ALTER TABLE `store_setting_urls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `store_setting_websites`
--
ALTER TABLE `store_setting_websites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `store_your_timezones`
--
ALTER TABLE `store_your_timezones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `weight_measurements`
--
ALTER TABLE `weight_measurements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `www_redirects`
--
ALTER TABLE `www_redirects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
