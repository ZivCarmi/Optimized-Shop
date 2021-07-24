-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2020 at 08:29 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `optimized`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `ctitle` varchar(255) NOT NULL,
  `carticle` longtext NOT NULL,
  `curl` varchar(255) NOT NULL,
  `cimage` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `ctitle`, `carticle`, `curl`, `cimage`, `updated_at`, `created_at`) VALUES
(1, 'Keyboards', 'Keyboards, Mechanical Keyboards and Gaming Keyboards', 'keyboards', 'keyboard_categories.jpg', '2019-12-30 11:34:10', '2019-11-30 00:00:00'),
(2, 'Headsets', 'Quality Headsets, Apple Airpods, Sport Earbuds and Gaming Headsets', 'headsets', 'headset_categories.jpg', '2019-12-30 11:47:22', '2019-11-30 00:00:00'),
(3, 'Mouses', 'Wireless Mouses, Apple Mouses and Gaming Mouses', 'mouses', 'mouse_categories.jpg', '2019-12-30 11:53:34', '2019-11-30 00:00:00'),
(17, 'iPhones', '<p>iPhones By Apple</p>', 'iphones', '30.12.2019.11.32.19-Apple_iPhone_categories.jpg', '2019-12-30 11:32:19', '2019-12-30 11:32:19'),
(18, 'Laptops', '<p><span style=\"color: rgb(112, 112, 112); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 11.2px; text-align: center; text-transform: uppercase;\">THE MOST STRONGEST Laptops IN THE MARKET!</span><br></p>', 'laptops', '30.12.2019.13.18.06-laptop_categories.jpg', '2019-12-30 13:18:07', '2019-12-30 11:33:10'),
(21, 'Default', '<p>Default Description</p>', 'default', '30.12.2019.13.27.04-no-image-default.png', '2019-12-30 13:27:04', '2019-12-30 13:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `ctitle` varchar(255) NOT NULL,
  `article` longtext NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `menu_id`, `ctitle`, `article`, `updated_at`, `created_at`) VALUES
(1, 3, 'Services we Provide!', 'This is Services Page!', '2019-12-23 11:16:01', '2019-12-21 00:00:00'),
(4, 14, 'NEW TESTTTTT', '<p><span style=\"font-weight: bold; text-decoration-line: underline;\">HELLO </span>AND <span style=\"color: rgb(107, 165, 74);\">WELCOME </span>TO NEW <span style=\"background-color: rgb(255, 255, 0);\">TESTTTT</span></p>', '2019-12-23 11:18:12', '2019-12-21 15:04:47');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `link`, `url`, `title`, `updated_at`, `created_at`) VALUES
(3, 'Services', 'services', 'Our Services', '2019-12-21 13:36:12', '2019-12-16 00:00:00'),
(5, 'Page 404', 'page-404', 'Page 404', '2019-12-16 00:00:00', '2019-12-16 00:00:00'),
(14, 'New Test', 'new-test', 'new test', '2019-12-21 15:01:23', '2019-12-21 15:01:23');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `updated_at`, `created_at`) VALUES
(1, 'Moshe', 'moshe@gmail.com', 'Test for message', 'something something something...?', '2020-01-06 14:45:29', '2020-01-06 14:45:29'),
(2, 'nisayon', 'nisayon@gmail.com', 'nisayon', 'asdnjasndjknaskjdasd', '2020-01-08 18:07:17', '2020-01-08 18:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` text NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `data`, `total`, `updated_at`, `created_at`) VALUES
(1, 6, 'a:2:{i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:29:\"ANOTHER M555B Bluetooth Mouse\";s:5:\"price\";i:75;s:8:\"quantity\";i:5;s:10:\"attributes\";a:1:{s:5:\"image\";s:18:\"logitech-mouse.png\";}s:10:\"conditions\";a:0:{}}i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:30:\"Logitech M555B Bluetooth Mouse\";s:5:\"price\";i:75;s:8:\"quantity\";i:3;s:10:\"attributes\";a:1:{s:5:\"image\";s:18:\"logitech-mouse.png\";}s:10:\"conditions\";a:0:{}}}', '600.00', '2019-12-14 11:33:58', '2019-12-14 11:33:58'),
(2, 6, 'a:2:{i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:29:\"ANOTHER M555B Bluetooth Mouse\";s:5:\"price\";i:75;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:18:\"logitech-mouse.png\";}s:10:\"conditions\";a:0:{}}i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:30:\"Logitech M555B Bluetooth Mouse\";s:5:\"price\";i:75;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:18:\"logitech-mouse.png\";}s:10:\"conditions\";a:0:{}}}', '150.00', '2019-12-14 11:35:26', '2019-12-14 11:35:26'),
(3, 6, 'a:1:{i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:29:\"ANOTHER M555B Bluetooth Mouse\";s:5:\"price\";i:75;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:18:\"logitech-mouse.png\";}s:10:\"conditions\";a:0:{}}}', '75.00', '2019-12-21 14:13:47', '2019-12-21 14:13:47'),
(4, 6, 'a:1:{i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:29:\"ANOTHER M555B Bluetooth Mouse\";s:5:\"price\";i:75;s:8:\"quantity\";i:6;s:10:\"attributes\";a:1:{s:5:\"image\";s:18:\"logitech-mouse.png\";}s:10:\"conditions\";a:0:{}}}', '450.00', '2019-12-23 13:13:00', '2019-12-23 13:13:00'),
(5, 6, 'a:1:{i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:29:\"ANOTHER M555B Bluetooth Mouse\";s:5:\"price\";i:85;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:18:\"logitech-mouse.png\";}s:10:\"conditions\";a:0:{}}}', '85.00', '2019-12-28 13:03:19', '2019-12-28 13:03:19'),
(6, 6, 'a:2:{i:12;a:6:{s:2:\"id\";s:2:\"12\";s:4:\"name\";s:28:\"Astrum KL610 Gaming Keyboard\";s:5:\"price\";i:95;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:46:\"30.12.2019.12.06.29-astrum_gaming-keyboard.jpg\";s:4:\"purl\";s:28:\"astrum-kl610-gaming-keyboard\";}s:10:\"conditions\";a:0:{}}i:19;a:6:{s:2:\"id\";s:2:\"19\";s:4:\"name\";s:38:\"CM Storm Inferno Wireless Gaming Mouse\";s:5:\"price\";i:99;s:8:\"quantity\";i:1;s:10:\"attributes\";a:3:{s:5:\"image\";s:45:\"30.12.2019.12.23.21-cm_storm_gaming-mouse.jpg\";s:4:\"purl\";s:38:\"cm-storm-inferno-wireless-gaming-mouse\";s:4:\"curl\";N;}s:10:\"conditions\";a:0:{}}}', '194.00', '2019-12-30 15:51:49', '2019-12-30 15:51:49'),
(7, 8, 'a:1:{i:27;a:6:{s:2:\"id\";s:2:\"27\";s:4:\"name\";s:19:\"Lenovo G500s Laptop\";s:5:\"price\";i:900;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:48:\"30.12.2019.13.21.42-Lenovo_G500s_laptop-2905.jpg\";s:4:\"purl\";s:19:\"lenovo-g500s-laptop\";}s:10:\"conditions\";a:0:{}}}', '900.00', '2020-01-03 13:05:55', '2020-01-03 13:05:55'),
(8, 8, 'a:2:{i:11;a:6:{s:2:\"id\";s:2:\"11\";s:4:\"name\";s:28:\"Delux Classic Wired Keyboard\";s:5:\"price\";i:25;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:38:\"30.12.2019.12.02.01-delux_keyboard.png\";s:4:\"purl\";s:28:\"delux-classic-wired-keyboard\";}s:10:\"conditions\";a:0:{}}i:29;a:6:{s:2:\"id\";s:2:\"29\";s:4:\"name\";s:17:\"Apple MacBook Air\";s:5:\"price\";i:1200;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:41:\"30.12.2019.13.23.59-MacBook_Air_black.jpg\";s:4:\"purl\";s:17:\"apple-macbook-air\";}s:10:\"conditions\";a:0:{}}}', '1225.00', '2020-01-03 13:06:11', '2020-01-03 13:06:11'),
(9, 6, 'a:1:{i:18;a:6:{s:2:\"id\";s:2:\"18\";s:4:\"name\";s:30:\"Sennheiser Wireless Headphones\";s:5:\"price\";i:145;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:54:\"30.12.2019.12.20.42-sennheiser-wireless-headphones.jpg\";s:4:\"purl\";s:30:\"sennheiser-wireless-headphones\";}s:10:\"conditions\";a:0:{}}}', '145.00', '2020-01-14 17:44:42', '2020-01-14 17:44:42');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `kind` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `kind`, `updated_at`, `created_at`) VALUES
(1, 'Admin', '2019-12-09 00:00:00', '2019-12-09 00:00:00'),
(2, 'Authenticated user', '2019-12-09 00:00:00', '2019-12-09 00:00:00'),
(3, 'Content editor', '2019-12-09 00:00:00', '2019-12-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `ptitle` varchar(255) NOT NULL,
  `particle` longtext NOT NULL,
  `purl` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categorie_id`, `ptitle`, `particle`, `purl`, `pimage`, `price`, `updated_at`, `created_at`) VALUES
(1, 3, 'Logitech M555B Bluetooth Mouse', 'Logitech M555B Bluetooth Mouse - Casual and trustable mouse!', 'logitech-mouse', 'logitech-mouse.png', '75.00', '2019-12-30 12:29:12', '2019-11-30 00:00:00'),
(11, 1, 'Delux Classic Wired Keyboard', '<p>An Original Classic Wired Keyboard by Delux</p>', 'delux-classic-wired-keyboard', '30.12.2019.12.02.01-delux_keyboard.png', '25.00', '2019-12-30 12:02:02', '2019-12-30 12:02:02'),
(12, 1, 'Astrum KL610 Gaming Keyboard', '<p>Mechanical Keyboard by Astrum - KL610, Great for Gaming Expirience</p>', 'astrum-kl610-gaming-keyboard', '30.12.2019.12.06.29-astrum_gaming-keyboard.jpg', '95.00', '2019-12-30 12:06:30', '2019-12-30 12:06:30'),
(13, 1, 'Razer BlackWidow Mechanical Gaming Keyboard', '<p>Strongest&nbsp;<span style=\"font-size: 0.875rem;\">Mechanical</span><span style=\"font-size: 0.875rem;\">&nbsp;Keyboard for Gaming by Razer - BlackWidow Ultimate</span></p>', 'razer-blackwidow-mechanical-gaming-keyboard', '30.12.2019.12.09.27-razer_keyboard.jpg', '125.00', '2019-12-30 12:09:27', '2019-12-30 12:09:27'),
(14, 1, 'Apple Magic Keyboard', '<p>The best keyboard for compatibility with Apple Devices</p>', 'apple-magic-keyboard', '30.12.2019.12.11.19-apple_keyboard.jpg', '200.00', '2019-12-30 12:11:19', '2019-12-30 12:11:19'),
(15, 2, 'HolyHigh Wireless Bluetooth Earbuds', '<p>HolyHigh Bluetooth Earbuds, the best for sporting and exercising&nbsp;</p>', 'holyhigh-wireless-bluetooth-earbuds', '30.12.2019.12.13.41-holyhigh_bluetooth_earbuds.jpg', '175.00', '2019-12-30 12:13:41', '2019-12-30 12:13:41'),
(16, 2, 'JBL AKG Wireless Headphones', '<p>JBL - AKG Wireless headphones, get the most out of your music in your ears!</p>', 'jbl-akg-wireless-headphones', '30.12.2019.12.16.06-jbl_akg_headphones.jpg', '120.00', '2019-12-30 12:16:06', '2019-12-30 12:16:06'),
(17, 2, 'Razer Wired Gaming Headsets', '<p>Razer Wired Headsets, best for your gaming experience!&nbsp;&nbsp;</p>', 'razer-wired-gaming-headsets', '30.12.2019.12.17.54-razer_gaming_headset.jpg', '90.00', '2019-12-30 12:17:54', '2019-12-30 12:17:54'),
(18, 2, 'Sennheiser Wireless Headphones', '<p>Senneiser Wireless Headphones, comes with a Bass Monitor.</p><p>Recommended for gaming and a casual music</p>', 'sennheiser-wireless-headphones', '30.12.2019.12.20.42-sennheiser-wireless-headphones.jpg', '145.00', '2019-12-30 12:20:42', '2019-12-30 12:20:42'),
(19, 3, 'CM Storm Inferno Wireless Gaming Mouse', '<p>CM - Storm Inferno - A Wireless Gaming Mouse</p>', 'cm-storm-inferno-wireless-gaming-mouse', '30.12.2019.12.23.21-cm_storm_gaming-mouse.jpg', '99.00', '2019-12-30 12:23:21', '2019-12-30 12:23:21'),
(20, 3, 'Razer Naga Wired Mouse', '<p>Razer Naga Wired Mouse, Very good for Gaming</p>', 'razer-naga-wired-mouse', '30.12.2019.12.24.52-razer_naga_mouse.jpg', '110.00', '2019-12-30 12:24:52', '2019-12-30 12:24:52'),
(21, 3, 'High-Tech Wireless Mouse', 'High Tech Wireless Mouse - Gives you the most comfortable for work!', 'high-tech-wireless-mouse', '30.12.2019.12.28.00-wireless_mouse.jpg', '250.00', '2019-12-30 12:28:00', '2019-12-30 12:28:00'),
(22, 17, 'Apple iPhone X', '<p>The Newest iPhone by Apple - iPhone X</p>', 'apple-iphone-x', '30.12.2019.12.31.13-iphone_x2.jpg', '850.00', '2019-12-30 12:31:13', '2019-12-30 12:30:59'),
(23, 17, 'Apple iPhone 8 Plus', '<p>Apple iPhone 8 Plus&nbsp;</p>', 'apple-iphone-8-plus', '30.12.2019.12.48.07-iphone_8-plus.jpg', '950.00', '2019-12-30 12:48:07', '2019-12-30 12:32:22'),
(24, 17, 'Apple iPhone 7', '<p>iPhone 7 by Apple</p>', 'apple-iphone-7', '30.12.2019.12.41.37-iphone-7.jpg', '600.00', '2019-12-30 12:41:37', '2019-12-30 12:40:42'),
(25, 2, 'Apple Airpods Pro', '<p>Newest Apple Airpods Pro, best compatible with every apple device!</p>', 'apple-airpods-pro', '30.12.2019.12.59.01-AirPods_Pro_1.jpg', '350.00', '2019-12-30 12:59:37', '2019-12-30 12:49:59'),
(26, 3, 'Apple Magic Mouse', '<p>Apple Magic Mouse for any kind of Apple Device</p>', 'apple-magic-mouse', '30.12.2019.13.01.30-apple_mouse.jpg', '350.00', '2019-12-30 13:01:30', '2019-12-30 13:01:30'),
(27, 18, 'Lenovo G500s Laptop', '<p>Lenovo G500s Laptop&nbsp;</p>', 'lenovo-g500s-laptop', '30.12.2019.13.21.42-Lenovo_G500s_laptop-2905.jpg', '900.00', '2019-12-30 13:21:43', '2019-12-30 13:21:43'),
(28, 18, 'lenovo Notebook Laptop', '<p>Lenovo Notebook Laptop</p>', 'lenovo-notebook-laptop', '30.12.2019.13.22.45-lenovo_notbook_laptop.png', '1000.00', '2019-12-30 13:22:46', '2019-12-30 13:22:46'),
(29, 18, 'Apple MacBook Air', '<p>MacBook Air by Apple&nbsp;</p>', 'apple-macbook-air', '30.12.2019.13.23.59-MacBook_Air_black.jpg', '1200.00', '2019-12-30 13:23:59', '2019-12-30 13:23:59'),
(31, 21, 'Default Product', '<p>Default Product Description<br></p>', 'default-product', '30.12.2019.13.29.11-no-image-default.png', '1000.00', '2019-12-30 13:29:12', '2019-12-30 13:29:12'),
(32, 21, 'Another Default Product', '<p>Just to see the default</p>', 'another-default-product', '30.12.2019.13.29.48-no-image-default.png', '1500.00', '2019-12-30 13:29:48', '2019-12-30 13:29:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `country`, `updated_at`, `created_at`) VALUES
(3, '-', '-', '-', '-', '2019-12-09 00:00:00', '2019-12-09 00:00:00'),
(4, '--', '--', '--', '--', '2019-12-09 00:00:00', '2019-12-09 00:00:00'),
(5, '---', '---', '---', '---', '2019-12-09 00:00:00', '2019-12-09 00:00:00'),
(6, 'Ziv Carmi', 'ziv@gmail.com', '$2y$10$BE6P6.IOXANMyy/.tddoKuAbyjhd6XQ4NIA0oQ2haiaZzgvjniceS', 'Israel', '2019-12-09 00:00:00', '2019-12-09 00:00:00'),
(7, 'chicho hershkovitz', 'chicho@gmail.com', '$2y$10$BE6P6.IOXANMyy/.tddoKuAbyjhd6XQ4NIA0oQ2haiaZzgvjniceS', 'Germany', '2019-12-09 00:00:00', '2019-12-09 00:00:00'),
(8, 'dor levy', 'dor@gmail.com', '$2y$10$BE6P6.IOXANMyy/.tddoKuAbyjhd6XQ4NIA0oQ2haiaZzgvjniceS', 'Morocco', '2019-12-09 00:00:00', '2019-12-09 00:00:00'),
(9, 'test one', 'test@gmail.com', '$2y$10$b47wKoKZTzFz09LJJwH4TuAgm6N7nHLuu5leoX3/Pj2pAujqG53um', 'American Samoa', '2019-12-13 17:15:02', '2019-12-13 17:15:02'),
(10, 'test one', 'test1@gmail.com', '$2y$10$h0PXmQh/AuQDFs65jaXF0.rDnnFQIio.fQeqvhKfaR1kmW.cHpT0S', 'Azerbaijan', '2019-12-13 17:15:41', '2019-12-13 17:15:41'),
(11, '123', '123@gmail.com', '$2y$10$IPQPhtsuaMnCme8fYb1egeRzgWA17LnTImW9NCyfZ1XspzGuV2d2y', 'Antarctica', '2019-12-13 17:16:47', '2019-12-13 17:16:47'),
(12, 'popeye', 'popeye@gmail.com', '$2y$10$fHazWDQaVLjr3NruVCd/2OkOcamv4Cdve.h22PE28y0r.WXE3znCK', 'Armenia', '2019-12-14 10:30:01', '2019-12-14 10:30:01'),
(13, 'foo', 'foo@gmail.com', '$2y$10$cVxnmLsVdqPOPDwzt9Try.80REqqnUdUT.5S5ENmD3y1n5SfA65fG', 'Azerbaijan', '2019-12-14 11:03:36', '2019-12-14 11:03:36'),
(14, 'baz', 'baz@gmail.com', '$2y$10$AS.vxQ/694YLo5dSsMtxDuA4CHTC.l4mYmfyeyxnv1vJ1MIMWoFJO', 'Azerbaijan', '2019-12-14 11:05:31', '2019-12-14 11:05:31');

-- --------------------------------------------------------

--
-- Table structure for table `user_permissions`
--

CREATE TABLE `user_permissions` (
  `user_id` int(11) NOT NULL,
  `kind_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_permissions`
--

INSERT INTO `user_permissions` (`user_id`, `kind_id`) VALUES
(6, 1),
(7, 2),
(8, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `curl` (`curl`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `purl` (`purl`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
