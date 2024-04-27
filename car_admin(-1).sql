-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 12:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$UIOKi11YLsmBCHtdIAYN5.pTwkj6tv1xYZ4fAfZ4Fgb1EZwdoSgIO', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_id` varchar(255) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(11) NOT NULL,
  `pickup` varchar(255) NOT NULL,
  `drop` varchar(255) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `ptime` varchar(255) NOT NULL,
  `dtime` varchar(255) NOT NULL,
  `adult` varchar(255) NOT NULL,
  `child` varchar(255) NOT NULL,
  `request` varchar(300) NOT NULL,
  `payment_type` varchar(120) DEFAULT NULL,
  `razorpay_id` varchar(150) DEFAULT NULL,
  `payment_id` varchar(20) DEFAULT NULL,
  `order_id` text DEFAULT NULL,
  `payment_status` tinyint(120) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `car_id`, `user_id`, `firstname`, `lname`, `email`, `number`, `pickup`, `drop`, `amount`, `ptime`, `dtime`, `adult`, `child`, `request`, `payment_type`, `razorpay_id`, `payment_id`, `order_id`, `payment_status`, `created_at`, `updated_at`) VALUES
(56, '16', '2', 'pari', 'patel', 'pari@gmail.com', '7896541230', 'Tivim Railway Station,403 502,Tivim', 'Anand Yoga Village Ourem,Palolum,403 702,Canacona', '19200', '2023-03-28T18:15', '2023-03-29T18:16', '1', '2', 'i want.....', 'cash', NULL, NULL, 'order_LWx2XPQMHA8gPQ', 0, NULL, NULL),
(58, '5', '13', 'user', 'patel', 'user12@gmail.com', '1234567890', 'Anand Yoga Village Ourem,Palolum,403 702,Canacona', 'Anand Yoga Village Ourem,Palolum,403 702,Canacona', '100800', '2023-04-03T17:26', '2023-04-06T17:26', 'Select Adult', 'Select Child', 'www', NULL, NULL, NULL, NULL, 0, NULL, NULL),
(62, '16', '13', 'drashti', 'patel', 'drashti@gmail.com', '7896541230', 'ground floor,patel,300123,kamrej', 'nana varacha ,,395005,surat', '19200', '2023-04-07T13:25', '2023-04-08T13:25', '1', '1', 'what is cash?', 'cash', NULL, NULL, 'order_LaphDxpOTjgW9T', 1, NULL, NULL),
(65, '2', '13', 'rajvi', 'patel', 'rajvi@gmail.com', '07896541230', 'Tivim Railway Station,403 502,Tivim', 'kamrej road,395006,surat', '22800', '2023-04-08T13:59', '2023-04-09T13:59', 'Select Adult', 'Select Child', 'online payment?', 'online', NULL, 'pay_Laq3GPK2l5IkuA', 'order_Laq1GDFih7vspn', 2, NULL, NULL),
(66, '5', '3', 'seta', 'patel', 'seta@gmail.com', '7896541230', 'nana varacha ,,395005,surat', 'ground floor,patel,300123,kamrej', '100800', '2023-04-07T16:37', '2023-04-10T16:37', '2', '2', 'qqddeexx', 'cash', NULL, NULL, NULL, 1, NULL, NULL),
(67, '1', '4', 'shriza', 'desai', 'shriza12@gmail.com', '7896541452', 'Mandai Lake Road,382460,surat', 'Anand Yoga Village Ourem,Palolum,403 702,Canacona', '21600', '2023-04-07T16:42', '2023-04-08T16:42', '2', '1', 'ERT', 'online', NULL, 'pay_LashCeRRneoCYc', 'order_Lash4fvAhfknIt', 1, NULL, NULL),
(68, '3', '7', 'vani', 'patel', 'vani12@gmail.com', '3216547890', 'nana varacha ,,395005,surat', 'Anand Yoga Village Ourem,Palolum,403 702,Canacona', '72000', '2023-04-07T16:57', '2023-04-10T16:57', 'Select Adult', 'Select Child', 'swerrf', 'cash', NULL, NULL, NULL, 2, NULL, NULL),
(69, '17', '3', 'seta', 'luthra', 'seta@gmail.com', '1234567890', 'nana varacha ,,395005,surat', 'Mandai Lake Road,382460,surat', '72000', '2023-04-08T13:54', '2023-04-10T13:54', '1', '2', 'wwq...', 'cash', NULL, NULL, NULL, 0, NULL, NULL),
(70, '16', '12', 'bhavesh', 'bhimani', 'bhimanibhavu@gmail.com', '09998855118', 'ground floor,patel,300123,kamrej', 'kamrej road,395006,surat', '19200', '2023-04-13T17:12', '2023-04-14T17:12', '1', '2', 'wqq', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(72, '3', '15', 'deep', 'patel', 'drashtiv2392002@gmail.com', '7970712345', 'nana varacha ,,395005,surat', 'kamrej road,395006,surat', '24000', '2023-04-14T18:13', '2023-04-15T18:13', '1', 'Select Child', 'wqqqqq', 'cash', NULL, NULL, NULL, 1, NULL, NULL),
(73, '1', '15', 'drashti', 'patel', 'drashtiv2392002@gmail.com', '1234567890', 'Anand Yoga Village Ourem,Palolum,403 702,Canacona', 'Anand Yoga Village Ourem,Palolum,403 702,Canacona', '43200', '2023-08-08T10:40', '2023-08-10T10:40', '1', 'Select Child', 'dfsdfvdfvd', NULL, NULL, NULL, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'BMW', '1679733408.png', '2023-03-10 03:17:20', '2023-03-25 03:06:48'),
(2, 'NISSAN', '1679733423.png', '2023-02-23 04:47:51', '2023-03-25 03:07:03'),
(3, 'Volkwagen', '1679733477.png', '2023-02-23 04:48:25', '2023-03-25 03:07:57'),
(4, 'Mercedes', '1679733514.png', '2023-02-23 04:48:52', '2023-03-25 03:08:34'),
(5, 'SAAB', '1679733526.png', '2023-02-23 04:49:28', '2023-03-25 03:08:46'),
(6, 'ponatic', '1681811987.png', '2023-02-23 04:50:17', '2023-04-18 04:29:47'),
(7, 'Jaguar', '1679733553.png', '2023-02-23 04:51:15', '2023-03-25 03:09:13'),
(13, 'Maruti', '1679733571.jfif', '2023-03-22 04:35:56', '2023-03-25 03:09:31'),
(15, 'Hyundai', '1681811574.jfif', '2023-03-22 07:40:28', '2023-04-18 04:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `average` varchar(255) NOT NULL,
  `amount` varchar(120) NOT NULL,
  `gps` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `brand_id`, `model`, `type`, `average`, `amount`, `gps`, `description`, `created_at`, `updated_at`) VALUES
(1, 'BMW-X6', 1, '2008', 'Automatic', '16KM/Liter', '900', 'GPS Navigation/Yes', 'The 2008 BMW X6 was based on the BMW X5 platform but had a modified all-wheel-drive system and that transformed it into a faster SUV on the corners. The BMW actually referred to the vehicle as a SAC – Sport Activity Coupe. The X6 had an aggressive look and the descending roofline amplified the sporty look. For some people, it was hard to understand that X6 handling was actually in the performance-car..', NULL, NULL),
(2, 'BMW-X4', 1, '2008', 'Manual', '14KM/Liter', '950', 'GPS Navigation/No', 'The BMW X4 is a compact luxury crossover SUV manufactured by BMW since 2014. It is marketed as a sports activity coupé (SAC), the second model from BMW marketed as such after the X6, and features styling elements and the roofline of a traditional two-door coupé. The X4 is widely considered as a \"coupé\" version of the X3, trading its practicality with a sloping rear roof which offers a sportier styling.', NULL, NULL),
(3, 'Jguar-I-Pace', 7, '2018', 'Automatic', '63KM/Liter', '1000', 'GPS Navigation/Yes', 'Jaguar I-PACE features a bold front grille shield and a sculpted bonnet scoop for an aerodynamic appearance. The muscular haunches create a powerful stance. Jaguar I-PACE’s fully-electric architecture allows us to combine luxury craftsmanship, with a generous 656 litres✦ of loadspace within the car’s interior.', NULL, '2023-04-17 06:28:45'),
(5, 'Jguar-XF', 7, '2015', 'Automatic', '66KM/Liter', '1400', 'GPS Navigation/Yes', 'Our luxury cars are available anytime, anyplace, and for each event that requires you to push your boundaries. Never settle for a standard while you can enjoy a luxury trip down to your destination. Complete Online Booking and enjoy the luxury ride of Jaguar XF any Time and any location. You can believe us because we take full responsibility for delivering Luxury cars on time and up to your expectations, all the time.', NULL, NULL),
(16, 'Hyundai Verna', 15, '2022', 'Automatic', '50KM/Liter', '800', 'GPS Navigation/Yes', 'Hyundai Verna, a sporty sedan with AVN, Airbag & powerful engine. Check out price, specification, new feature.', '2023-03-24 05:37:05', '2023-03-25 03:29:40'),
(17, 'Hyundai Aura', 15, '2020', 'Automatic', '10KM/Liter', '1500', 'GPS Nevigation/Yes', 'Hyundai Aura is a 5 seater Compact Sedan available in a price range of ₹ 6.32 - 8.90 Lakh. It is available in 7 variants, 1197 cc engine option and 2 transmission options : Manual and Automatic (AMT). Other key specifications of the Aura include a Bootspace of 402 litres. The Aura is available in 6 colours.', '2023-04-08 02:50:02', '2023-08-07 23:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `car_images`
--

CREATE TABLE `car_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `car_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_images`
--

INSERT INTO `car_images` (`id`, `img_path`, `car_id`, `created_at`, `updated_at`) VALUES
(1, 'bmw-x6.jpg', '1', '2023-02-23 05:15:53', '2023-02-23 05:15:53'),
(2, 'bmw-x6-1.jpg', '1', '2023-02-23 05:15:53', '2023-02-23 05:15:53'),
(3, 'BMW-X6-2.jpg', '1', '2023-02-23 05:15:53', '2023-02-23 05:15:53'),
(4, 'BMW-Z4.jpg', '2', '2023-02-23 05:42:39', '2023-02-23 05:42:39'),
(5, 'BMW-Z41.jfif', '2', '2023-02-23 05:42:39', '2023-02-23 05:42:39'),
(6, 'jaguar i.jfif', '3', '2023-02-23 05:52:30', '2023-02-23 05:52:30'),
(7, 'jaguar_i-pace_032.jpg', '3', '2023-02-23 05:52:30', '2023-02-23 05:52:30'),
(8, 'jguar XF.jfif', '3', '2023-02-23 05:52:30', '2023-02-23 05:52:30'),
(9, 'jguar.jfif', '3', '2023-02-23 05:52:30', '2023-02-23 05:52:30'),
(10, 'jguar-i-pace.jfif', '3', '2023-02-23 05:52:30', '2023-02-23 05:52:30'),
(11, 'jguar XF.jfif', '5', '2023-02-23 06:07:57', '2023-02-23 06:07:57'),
(12, 'swift-.jpg', '6', '2023-02-23 06:14:15', '2023-02-23 06:14:15'),
(13, 'swift-1.jfif', '6', '2023-02-23 06:14:15', '2023-02-23 06:14:15'),
(14, 'swift-2.jfif', '6', '2023-02-23 06:14:15', '2023-02-23 06:14:15'),
(15, 'breza.jpg', '7', '2023-02-23 12:17:51', '2023-02-23 12:17:51'),
(16, 'brezza.jpg', '7', '2023-02-23 12:17:52', '2023-02-23 12:17:52'),
(17, 'brezza-1.jfif', '7', '2023-02-23 12:17:52', '2023-02-23 12:17:52'),
(18, 'brezza-2.jfif', '7', '2023-02-23 12:17:52', '2023-02-23 12:17:52'),
(25, 'audi.jfif', '10', '2023-03-10 03:26:31', '2023-03-10 03:26:31'),
(26, 'banner-left.png', '10', '2023-03-10 03:26:31', '2023-03-10 03:26:31'),
(31, 'Hyundai Aura.jfif', '15', '2023-03-22 07:41:37', '2023-03-22 07:41:37'),
(32, 'Hyundai Verna.jpeg', '15', '2023-03-23 03:13:27', '2023-03-23 03:13:27'),
(33, 'Hyundai Verna.jpeg', '16', '2023-03-24 05:37:05', '2023-03-24 05:37:05'),
(34, 'Hyundai Aura.jfif', '17', '2023-04-08 02:50:02', '2023-04-08 02:50:02'),
(35, 'Hyundai Aura.jfif', '18', '2023-04-08 02:50:02', '2023-04-08 02:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `check`
--

CREATE TABLE `check` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_id` int(11) NOT NULL,
  `user_id` varchar(120) NOT NULL,
  `pickup` varchar(255) NOT NULL,
  `drop` varchar(255) NOT NULL,
  `ptime` varchar(255) NOT NULL,
  `dtime` varchar(255) NOT NULL,
  `hour` varchar(120) NOT NULL,
  `person` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `check`
--

INSERT INTO `check` (`id`, `car_id`, `user_id`, `pickup`, `drop`, `ptime`, `dtime`, `hour`, `person`, `created_at`, `updated_at`) VALUES
(1, 7, '1', 'kamrej road,395006,surat,Gujarat,India', 'kamrej road,395006,surat,Gujarat,India', '2023-03-01T19:28', '24', '2023-02-28T19:28', '1', '2023-02-27 09:18:42', '2023-02-27 09:18:42'),
(2, 3, '1', 'kamrej road,395006,surat,Gujarat,India', 'kamrej road,395006,surat,Gujarat,India', '2023-03-08T20:21', '24', '2023-03-07T20:21', '2', '2023-02-27 09:43:23', '2023-02-27 09:43:23'),
(3, 3, '1', 'kamrej road,395006,surat,Gujarat,India', 'kamrej road,395006,surat,Gujarat,India', '2023-03-08T20:21', '24', '2023-03-07T20:21', '1', '2023-02-27 09:44:00', '2023-02-27 09:44:00'),
(4, 3, '1', 'kamrej road,395006,surat,Gujarat,India', 'kamrej road,395006,surat,Gujarat,India', '2023-03-08T20:21', '24', '2023-03-07T20:21', '3', '2023-02-27 09:49:11', '2023-02-27 09:49:11'),
(5, 3, '1', 'kamrej road,395006,surat,Gujarat,India', 'kamrej road,395006,surat,Gujarat,India', '2023-03-08T20:21', '24', '2023-03-07T20:21', '2', '2023-02-27 09:49:46', '2023-02-27 09:49:46'),
(6, 3, '1', 'kamrej road,395006,surat,Gujarat,India', 'kamrej road,395006,surat,Gujarat,India', '2023-03-08T20:21', '24', '2023-03-07T20:21', '2', '2023-02-27 09:50:17', '2023-02-27 09:50:17'),
(7, 3, '1', 'kamrej road,395006,surat,Gujarat,India', 'kamrej road,395006,surat,Gujarat,India', '2023-03-08T20:21', '24', '2023-03-07T20:21', '2', '2023-02-27 09:50:57', '2023-02-27 09:50:57'),
(8, 3, '1', 'kamrej road,395006,surat,Gujarat,India', 'kamrej road,395006,surat,Gujarat,India', '2023-03-08T20:21', '24', '2023-03-07T20:21', '1', '2023-02-27 09:51:27', '2023-02-27 09:51:27'),
(9, 3, '1', 'kamrej road,395006,surat,Gujarat,India', 'kamrej road,395006,surat,Gujarat,India', '2023-03-08T20:21', '24', '2023-03-07T20:21', '2', '2023-02-27 09:51:50', '2023-02-27 09:51:50'),
(10, 3, '1', 'kamrej road,395006,surat,Gujarat,India', 'kamrej road,395006,surat,Gujarat,India', '2023-03-08T20:21', '24', '2023-03-07T20:21', '2', '2023-02-27 09:58:14', '2023-02-27 09:58:14'),
(11, 2, '1', 'kamrej road,395006,surat,Gujarat,India', 'kamrej road,395006,surat,Gujarat,India', '2023-03-08T20:58', '24', '2023-03-07T20:58', '1', '2023-02-27 09:58:57', '2023-02-27 09:58:57'),
(12, 2, '1', 'kamrej road,395006,surat,Gujarat,India', 'kamrej road,395006,surat,Gujarat,India', '2023-03-08T20:58', '24', '2023-03-07T20:58', 'Select Person', '2023-02-27 10:15:55', '2023-02-27 10:15:55'),
(13, 5, '1', 'kamrej road,395006,surat,Gujarat,India', 'kamrej road,395006,surat,Gujarat,India', '2023-02-28T03:34', '6', '2023-02-28T09:34', '2', '2023-02-27 22:35:16', '2023-02-27 22:35:16'),
(14, 5, '1', 'kamrej road,395006,surat,Gujarat,India', 'kamrej road,395006,surat,Gujarat,India', '2023-02-28T02:36', '7', '2023-02-28T09:36', 'Select Person', '2023-02-27 22:38:44', '2023-02-27 22:38:44'),
(15, 5, '1', 'kamrej road,395006,surat,Gujarat,India', 'kamrej road,395006,surat,Gujarat,India', '2023-02-28T02:36', '7', '2023-02-28T09:36', '1', '2023-02-27 22:39:48', '2023-02-27 22:39:48'),
(16, 5, '1', 'kamrej road,395006,surat,Gujarat,India', 'kamrej road,395006,surat,Gujarat,India', '2023-02-28T02:36', '7', '2023-02-28T09:36', '1', '2023-02-27 22:40:55', '2023-02-27 22:40:55'),
(17, 3, '2', 'kamrej road,395006,surat,Gujarat,India', 'kamrej road,395006,surat,Gujarat,India', '2023-02-28T01:52', '8', '2023-02-28T09:52', '2', '2023-02-27 22:52:51', '2023-02-27 22:52:51'),
(18, 1, '2', 'kamrej road,395006,surat,Gujarat,India', 'kamrej road,395006,surat,Gujarat,India', '2023-02-28T09:58', '24', '2023-02-27T09:58', '1', '2023-02-27 22:58:53', '2023-02-27 22:58:53'),
(19, 1, '2', 'kamrej road,395006,surat,Gujarat,India', 'kamrej road,395006,surat,Gujarat,India', '2023-02-28T09:58', '24', '2023-02-27T09:58', '1', '2023-02-27 22:59:15', '2023-02-27 22:59:15'),
(20, 1, '2', 'kamrej road,395006,surat,Gujarat,India', 'kamrej road,395006,surat,Gujarat,India', '2023-02-28T09:58', '24', '2023-02-27T09:58', '1', '2023-02-27 23:33:05', '2023-02-27 23:33:05');

-- --------------------------------------------------------

--
-- Table structure for table `citys`
--

CREATE TABLE `citys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `countries_id` varchar(255) NOT NULL,
  `states_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `citys`
--

INSERT INTO `citys` (`id`, `name`, `countries_id`, `states_id`, `created_at`, `updated_at`) VALUES
(1, 'surat', '1', '1', '2023-02-23 06:15:41', '2023-02-23 06:15:41'),
(2, 'Canacona', '1', '2', '2023-03-03 01:02:47', '2023-03-03 01:02:47'),
(3, 'Tivim', '1', '2', '2023-03-03 01:07:12', '2023-03-03 01:07:12'),
(4, 'Vapi', '1', '1', '2023-03-08 13:38:49', '2023-03-08 13:38:49'),
(5, 'kamrej', '1', '1', '2023-03-24 05:31:32', '2023-03-24 05:31:32'),
(6, 'Colombo', '1', '5', '2023-04-03 07:30:13', '2023-04-03 07:30:13');

-- --------------------------------------------------------

--
-- Table structure for table `contactusinfos`
--

CREATE TABLE `contactusinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `headoffice` varchar(191) NOT NULL,
  `branchoffice` varchar(191) NOT NULL,
  `emailId` varchar(191) NOT NULL,
  `contactno` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactusinfos`
--

INSERT INTO `contactusinfos` (`id`, `headoffice`, `branchoffice`, `emailId`, `contactno`, `created_at`, `updated_at`) VALUES
(5, '63, Shivdhara Complex, Nana-varacha, Surat', '54, Shivay Complex, Kamrej Road, Surat', 'royalcar@gmail.com', '9586249246', '2023-04-17 03:11:16', '2023-04-17 03:11:16');

-- --------------------------------------------------------

--
-- Table structure for table `contactusqueries`
--

CREATE TABLE `contactusqueries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `emailId` varchar(191) NOT NULL,
  `contactnumber` varchar(191) NOT NULL,
  `message` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactusqueries`
--

INSERT INTO `contactusqueries` (`id`, `name`, `emailId`, `contactnumber`, `message`, `created_at`, `updated_at`) VALUES
(2, 'krupa', 'krupa@gmail.com', '7896512345', 'now is booking', '2023-03-06 08:17:16', '2023-03-06 08:17:16'),
(3, 'rajvi', 'rajvi@gmail.com', '1234569870', 'nk,hildy9lejdmwe', '2023-03-06 08:18:52', '2023-03-06 08:18:52'),
(4, 'deep', 'deep@gmail.com', '9898891563', 'ucudhincksjdio', '2023-03-06 08:19:51', '2023-03-06 08:19:51'),
(11, 'vivek', 'vivek@gmail.com', '1234567890', '.ndshisyidnkj', '2023-03-06 08:40:20', '2023-03-06 08:40:20'),
(12, 'binu', 'binu@gmail.com', '1234569870', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2023-03-06 23:25:43', '2023-03-06 23:25:43'),
(14, 'nensi', 'nensi@gmail.com', '1234569872', 'I want to know you brach in Chandigarh?', '2023-03-24 06:08:33', '2023-03-24 06:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'India', '2023-02-23 06:15:16', '2023-02-23 06:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `disc` varchar(255) NOT NULL,
  `limit` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id`, `code`, `discount`, `disc`, `limit`, `created_at`, `updated_at`) VALUES
(3, 'WELCOME20', '20', 'SPECIAL OFFER FIRST 10 MEMBERS', 'Only for Sunday from 18-03-2023', '2023-03-13 01:34:51', '2023-03-13 01:34:51');

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
-- Table structure for table `labels`
--

CREATE TABLE `labels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `label1` varchar(255) NOT NULL,
  `label2` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labels`
--

INSERT INTO `labels` (`id`, `label1`, `label2`, `image`, `created_at`, `updated_at`) VALUES
(1, 'RENT A CAR', 'Best Rental Cars In India', '168181069656.jpg', '2023-04-18 03:39:40', '2023-04-18 04:09:47'),
(2, 'RENT A CAR', 'Quality Cars With Unlimited kilometers', '16818091664.jpg', '2023-04-18 03:42:46', '2023-04-18 03:42:46'),
(3, 'RENT A CAR', 'Best Service and Self Drive', '168180972530.jpg', '2023-04-18 03:52:05', '2023-04-18 04:42:32');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pickup` varchar(255) NOT NULL,
  `drop` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `car` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_17_095115_create_admins_table', 1),
(6, '2022_12_29_113130_create_countries_table', 1),
(7, '2022_12_29_171635_create_states_table', 1),
(8, '2022_12_30_073917_create_citys_table', 1),
(9, '2022_12_30_085749_create_pincodes_table', 1),
(10, '2022_12_30_114613_create_brands_table', 1),
(11, '2023_01_03_103032_create_cars_table', 1),
(12, '2023_01_04_092635_create_car_images_table', 1),
(13, '2023_01_16_111759_create_location_table', 1),
(14, '2023_01_20_084108_create_booking_table', 1),
(15, '2023_01_20_091626_create_booking_table', 2),
(16, '2023_01_20_092627_create_check_table', 2),
(17, '2023_03_12_125000_create_password_reset_table', 3),
(18, '2023_03_12_185620_create_label_table', 4),
(19, '2023_03_13_062237_create_discount_table', 5),
(20, '2023_03_30_093307_create_subscribers_table', 6),
(21, '2023_04_18_085822_create_labels_table', 7),
(22, '2023_04_28_104537_add_google_id_in_user_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('user@gmail.com', '30uJAZjSmAzolfhYHc7BDnpZysFjifuwrpIrYQnOw39OK5bEnhfQxe71E7fArdZc', '2023-03-27 02:24:14'),
('user@gmail.com', 'sQklCEwPABTC9jrc5VzTvGPva6ZhJPM2qQu8PxLyIuuw1HEq2qzFhaYZwXrtYZqY', '2023-03-27 02:24:50'),
('user@gmail.com', '2n0xPPgZf4rjqqBRNJJmziXXf1wjF7IxDUow42pbS1PJ3msPGSeJ5eRV97oy7GAV', '2023-03-27 02:26:03'),
('user@gmail.com', 'zjjLrsJBNeBslmxzziiLbSpGUjOX2pXapdB2HvEFeNShfv1SIP8JXouMtPbHTzjx', '2023-03-27 02:29:57'),
('user@gmail.com', 'n73IFElAIKmcgCU2H3lygX3ILgz2mbVhEhqg3ZyNbBWW53QTBj3SEKcPEdfXIygX', '2023-03-27 02:56:40'),
('user@gmail.com', 'aMFVOjedCSMANlAjc9fdYsDfeCURVmstmtsufFYj0UV8MoaJcY3UiJJLbcw1YBON', '2023-03-27 02:57:08'),
('user@gmail.com', 'NxdGldOS72PDAGArFpaNZEem6pTN9gn0ELThNHR7gufQFPEXksKzfaipjXEUE1Ge', '2023-03-27 03:01:07'),
('user@gmail.com', 'PWkRfdrGTDBXQODVIByfYeC85pcwQp9utyr6W2ogsP7YzgcMGig7GDsbQYUFmjD8', '2023-03-27 03:05:14'),
('user@gmail.com', 'kvoUKUwlLB1bwjl43gQ1aHdiCitstSiInlmrYeXvbG8fkXLI17EqtgOHcI1VIiYF', '2023-03-27 03:12:55'),
('user@gmail.com', 'pVBXfb2TMwjKp7Ul9HEJSEPYMEKxinx4Nrz8RKrxBk227mr4FAbyNUoI3mq08BmX', '2023-03-27 03:12:57'),
('user@gmail.com', 'yp8Sb3XQJPyd2fy0QEejgG7UfhkFtbYBLUoOjRRnHiSGEOoXGx6Bx8oXikOdpdeC', '2023-03-27 03:13:42'),
('drashtiv2392002@gmail.com', 'ixjBZNsUcGBZ8ETZ60s9XF7wVAtU2KbFsnAw8dcOP1gpYlP1ytnMZiWLojO7c1Z4', '2023-12-09 03:05:14'),
('drashtiv2392002@gmail.com', 'OK6Q1mjXP0Yp3JRZYz5Aytd7Gdt7rql7jntFpJaqE56H5sr6LMhs5vgpp60WO4eJ', '2023-12-09 03:07:24'),
('drashtiv2392002@gmail.com', 'r2CXiYCpqRUPMk5HnuEttjLQUWebu2Tb4SKSLCo10PBKLDiKtExFZDwszCYu2o4i', '2023-12-09 03:34:57'),
('drashtiv2392002@gmail.com', 'w5F4kgAr68jV1QW7CImNpxXwAsJ5FUJXaKh0xFkWB4bmOblrAnGxiOrHTx8m7Oiz', '2023-12-09 03:43:06'),
('drashtiv2392002@gmail.com', 'PgiOp8OLbrdXbZ4ffr6G2ZSICMj7i2FdBtejcDYM6T1OsJnT6EK4CB9JWZWYDTgf', '2023-12-09 03:55:26'),
('drashtiv2392002@gmail.com', 'XTOYv1xT6ciHyA2iCyFzsUedgK5ADM3PnvjIgJjO7HdhctbTDCaW6Um8P60jFoQk', '2023-12-09 04:15:11'),
('drashtiv2392002@gmail.com', 'ylNm6GrkWzcPOJXQ2jnywD5eIsKZ16Gf5lbPar6F69b4DPgE2EkcNsjCu9OPqWnx', '2023-12-09 04:15:23'),
('drashtiv2392002@gmail.com', 'xuW0FpdKXP4zPbubF9lGcr8hTKrZBF0UMOZFyGOlLLJnAV5Q73abgJ1Eu28SJ6lE', '2023-12-09 04:15:41'),
('drashtiv2392002@gmail.com', 'leEX90MZAXPLI8uzYW72SDpgwa5syYQvWVe6uimct336WyBSnrIWwn3eGgaB57PY', '2023-12-09 04:39:26'),
('drashtiv2392002@gmail.com', '3M9MGoHgmkscHGAW8bLdHXdu818kU5l1omktJ23T7sUWWt6Enralk6eaRlUHrRVl', '2023-12-09 04:45:59'),
('shriza@gmail.com', 'myM2SYPzaF9KhXVhS1aqMCw4weqUdxoNPiLfv43LhqHovnune0JKNguWbdGm0bIO', '2023-12-09 04:51:26'),
('shriza@gmail.com', 'vdpjr7wSaO6MXeDsbhSBkLh0Mi3ijEStTtkeeaOYXM8PYIoLCX7SeRYG3WLMRy2I', '2023-12-09 04:52:19');

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
-- Table structure for table `pincodes`
--

CREATE TABLE `pincodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `countries_id` varchar(255) NOT NULL,
  `states_id` varchar(255) NOT NULL,
  `citys_id` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `area` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pincodes`
--

INSERT INTO `pincodes` (`id`, `countries_id`, `states_id`, `citys_id`, `pincode`, `area`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', '395006', 'kamrej road', '2023-02-23 06:16:08', '2023-02-23 06:16:08'),
(2, '1', '2', '2', '403 702', 'Anand Yoga Village Ourem,Palolum', '2023-03-03 01:06:38', '2023-03-03 01:06:38'),
(3, '1', '2', '3', '403 502', 'Tivim Railway Station', '2023-03-03 01:08:40', '2023-03-03 01:08:40'),
(4, '1', '1', '1', '395005', 'nana varacha ,', '2023-03-08 13:49:48', '2023-03-08 13:49:48'),
(5, '1', '1', '5', '300123', 'ground floor,patel', '2023-03-24 05:33:45', '2023-03-24 05:33:45'),
(6, '1', '1', '1', '382460', 'Mandai Lake Road', '2023-04-03 07:33:17', '2023-04-03 07:33:17');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `countries_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `countries_id`, `created_at`, `updated_at`) VALUES
(1, 'Gujarat', '1', '2023-02-23 06:15:32', '2023-02-23 06:15:32'),
(2, 'Goa', '1', '2023-03-03 01:02:27', '2023-03-03 01:02:27'),
(3, 'Tamilnadu', '1', '2023-03-08 08:26:43', '2023-03-08 08:26:43'),
(5, 'gujarat', '1', '2023-04-03 07:21:40', '2023-04-03 07:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `SubscriberEmail` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `images` varchar(350) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `number`, `password`, `images`, `remember_token`, `created_at`, `updated_at`, `google_id`) VALUES
(2, 'pari', 'pari@gmail.com', '9727843672', '$2y$10$diWGRjouiNo/4Ggeb9tav.w2RZIv./UlkZC/iiiYCAMjbKfKtBQde', '1677558137.jpg', NULL, '2023-02-27 22:52:17', '2023-03-28 06:10:46', NULL),
(3, 'seta virani', 'seta@gmail.com', '1234567890', '$2y$10$xqtNdBWjQVMesq/ZdUUaGuyp7dO5P61Yiv9xqpKmmOA6k9q876s4.', '1680942520.jpg', NULL, '2023-03-02 00:35:12', '2023-04-24 07:19:13', NULL),
(4, 'shriza', 'shriza@gmail.com', '9987612345', '$2y$10$fDT6vowV8Fpmu3Dg/0JEeu1LhFOHIvwgKAKwWDek/cwdCas67UJGm', '1679392567.jpg', NULL, '2023-03-21 04:26:07', '2023-04-04 07:12:24', NULL),
(12, 'bhimanibhavu', 'bhimanibhavu@gmail.com', '9998855118', '$2y$10$NWQsOujVXmtGG026gKpnwePX3PbGqhwTGw3TVQKoDisaz.zCNGePe', '1681299625.jpg', NULL, '2023-03-25 08:26:59', '2023-04-12 06:10:25', NULL),
(13, 'users12', 'user12@gmail.com', '1234567890', '$2y$10$ZYdQnhF0wDvDZdVhxVLoouog1Z9/C40wLSfdmhoA.QmgwyvcbUGdu', '1702122037.jpg', NULL, '2023-03-27 03:40:34', '2023-12-09 06:10:37', NULL),
(15, 'drashti patel', 'drashtiv2392002@gmail.com', '7970712345', '$2y$10$cz5JR6oAl2Nwqddjq/dw8ek7sEYR.Yj0tzgIAK.o4BO/DXXRROCV2', '1681374595.jpg', NULL, '2023-04-13 02:59:55', '2023-12-09 02:33:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userservices`
--

CREATE TABLE `userservices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userservices`
--

INSERT INTO `userservices` (`id`, `type`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Car Financing', '1679075144.png', 'A Vehicle Loan is a loan that allows you to purchase two and four wheelers for personal use.', '2023-03-17 12:15:44', '2023-04-18 04:39:58'),
(2, 'car cleaning', '1681812521.png', 'Car detailers work for car washes, auto shops, and dealerships, among other types of companies.', '2023-03-17 12:17:28', '2023-04-18 04:38:41'),
(3, '24-7 customer support', '1679484670.png', 'Our 24×7 prompt customer support service is very helpful for customers for any enquiry, booking of confirmations.', '2023-03-22 06:01:10', '2023-03-22 06:01:10'),
(4, 'car painting service', '1681731449.png', 'Vehicle painters prepare surfaces of vehicles, match and mix colours and apply paint to create a professional finish. They may paint new or damaged cars or apply designs or signs.', '2023-03-29 04:04:53', '2023-04-18 04:41:43');

-- --------------------------------------------------------

--
-- Table structure for table `userteams`
--

CREATE TABLE `userteams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `designation` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userteams`
--

INSERT INTO `userteams` (`id`, `name`, `designation`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Somya mehta', 'Service Manager', '1679075531.jpg', '2023-03-17 12:22:11', '2023-03-17 12:22:11'),
(2, 'Sanny patel', 'Costumer Service', '1679075569.jpg', '2023-03-17 12:22:49', '2023-03-17 12:22:49'),
(3, 'nita parmar', 'Tech-Support', '1679075608.jpg', '2023-03-17 12:23:28', '2023-03-17 12:23:28'),
(6, 'jashmin patel', 'Car Manager', '1681813569.jpg', '2023-04-17 03:20:38', '2023-04-18 04:56:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_images`
--
ALTER TABLE `car_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `check`
--
ALTER TABLE `check`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `citys`
--
ALTER TABLE `citys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactusinfos`
--
ALTER TABLE `contactusinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactusqueries`
--
ALTER TABLE `contactusqueries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `labels`
--
ALTER TABLE `labels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_reset_email_index` (`email`);

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
-- Indexes for table `pincodes`
--
ALTER TABLE `pincodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_subscriberemail_unique` (`SubscriberEmail`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `userservices`
--
ALTER TABLE `userservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userteams`
--
ALTER TABLE `userteams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `car_images`
--
ALTER TABLE `car_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `check`
--
ALTER TABLE `check`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `citys`
--
ALTER TABLE `citys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contactusinfos`
--
ALTER TABLE `contactusinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactusqueries`
--
ALTER TABLE `contactusqueries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `labels`
--
ALTER TABLE `labels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pincodes`
--
ALTER TABLE `pincodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `userservices`
--
ALTER TABLE `userservices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userteams`
--
ALTER TABLE `userteams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
