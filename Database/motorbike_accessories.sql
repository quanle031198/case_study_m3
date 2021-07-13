-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th7 13, 2021 lúc 03:32 PM
-- Phiên bản máy phục vụ: 10.3.29-MariaDB-0ubuntu0.20.04.1
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `motorbike_accessories`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `city`, `province`, `created_at`, `updated_at`) VALUES
(1, 'Le Van A', 'levanA@gmail.com', '0333785555', '34 - hoang trong', 'bien hoa', 'dong nai', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `album_name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_b` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_d` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`id`, `album_name`, `image_a`, `image_b`, `image_c`, `image_d`, `created_at`, `updated_at`) VALUES
(1, 'Bọc phủ xe Vespa', 'images/MiniODO2dj1iqKUfnf870E18k9zRm3VFHPTmvAeo.jpg', 'images/MiniODO2dj1iqKUfnf870E18k9zRm3VFHPTmvAeo.jpg', 'images/nCsKi9j6xjDwcvSdqFK0uP5QkxkJIhjJisfQYe5R.jpg', 'images/VlBNhpZGbmvpDwAqVZ2zecmlriV7Qyhuijf42uFx.jpg', NULL, '2021-06-09 00:04:05'),
(2, 'Bô Malossi', 'images/Xoup8vodCnhlBw5WI0gXOuXpk9VNjDwJMjUWXfG1.jpg', 'images/Xoup8vodCnhlBw5WI0gXOuXpk9VNjDwJMjUWXfG1.jpg', 'images/zjDICUdVuqkQAwx9Yh9QoHNn7HqIKIk6Kd42Vd6r.jpg', 'images/c3DfapyeaHvuapxjxFKmWcsJjguGNW8Ua1XORoci.jpg', NULL, '2021-06-08 23:59:14'),
(6, 'Baga trước + sau hàng Thái', 'images/QMkWDgzEdftvI467F1fMQOMrLHtQij4UMwtewwyM.jpg', 'images/7oh2IJHmmGogtEbHsnMTvFUIP5pVXfA1NMYXe5E8.jpg', 'images/YXVQXA3GbU8i18FJBDlBn1LlbhGSkOzADnNXDGpw.jpg', 'images/aw8ZZ7hT3LE7c1Q2ESVtaBXvZyIjIC6PQ0LQjj2p.jpg', '2021-06-07 01:25:14', '2021-06-09 00:05:29'),
(7, 'Chụp pha Sport', 'images/RshqKH78ofc8wqqJewTEuztIfgttLLdlXDl1SG2T.jpg', 'images/cs9eu5L6S1Fan940VEks5HvwYd0HFMQoJPFewlqr.jpg', 'images/PDs4wsBLbOOG8h7EzBXNXyqRmGOoEdjz6MtrJ4tD.jpg', 'images/P3VxoBwiJXZjOmlCHgTSikgbcrKL5fGKzh8CTHA7.jpg', '2021-06-09 00:08:03', '2021-06-09 00:08:03'),
(8, 'Đèn hậu led Level 10', 'images/0xep8UFzeeFnFRchnCMhmCdzIvmQAdndJuMzWvKa.jpg', 'images/U7WSmwQI4QJQdoKU0uKTzERUHDz4EURpUwjignqV.jpg', 'images/CXEBXEoQ6foArOJC1rbJCAr3b54xEL5XftGZn5hG.jpg', 'images/KTigIG4M6SWt3lG9Di51Q1TfY7LSJi419pWPreLl.jpg', '2021-06-09 00:17:56', '2021-06-09 00:19:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_05_024525_create_products_table', 1),
(5, '2021_06_05_095301_create_productlines_table', 1),
(6, '2021_06_05_132008_create_images_table', 1),
(7, '2021_06_05_132108_create_orderdetails_table', 1),
(8, '2021_06_05_132120_create_orders_table', 1),
(9, '2021_06_05_132146_create_customers_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_date` date NOT NULL,
  `status` smallint(6) NOT NULL,
  `quantity_ordered` int(10) NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `order_date`, `status`, `quantity_ordered`, `customer_id`, `created_at`, `updated_at`) VALUES
(1, '2021-06-08', 3, 12, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productlines`
--

CREATE TABLE `productlines` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productline_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `productlines`
--

INSERT INTO `productlines` (`id`, `name`, `productline_img`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Motorcycles', NULL, NULL, NULL, NULL),
(5, 'Madaline Lloyd', NULL, '<p>cccccccccccc</p>', '2021-06-06 07:48:21', '2021-06-06 07:48:21'),
(6, 'Phụ kiện Vespa Lx125-LxV-S125', NULL, '<p>cccccccccccc</p>', '2021-06-06 07:53:48', '2021-06-06 07:53:48'),
(7, 'Phụ kiện Vespa Gt125-Gts300', NULL, '<p>ssssssssss</p>', '2021-06-06 07:55:01', '2021-06-06 07:55:01'),
(8, 'Kiara Howe', NULL, '<p>xxxxxxxxxxxxx</p>', '2021-06-06 07:58:19', '2021-06-06 07:58:19'),
(13, 'Phụ kiện Vespa Sprint', NULL, NULL, '2021-06-09 00:00:07', '2021-06-09 00:00:07'),
(14, 'Supar 1998', 'images/HQ9mrxEsnl31LFzbV2fbQaq6S8RByTbH6AtOl7o3.jpg', '<p>aaaaaaaaaaaaaaa</p>', '2021-07-12 19:12:40', '2021-07-12 19:12:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_vendor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity_stock` tinyint(5) NOT NULL,
  `price` double(8,2) NOT NULL,
  `productline_id` int(10) UNSIGNED NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `product_vendor`, `product_description`, `quantity_stock`, `price`, `productline_id`, `image_id`, `created_at`, `updated_at`) VALUES
(1, 'Bọc phủ xe Vespa', 'Thailand', '<p>This replica features working kickstand, front sus...</p>', 123, 48.81, 2, 1, NULL, '2021-06-09 00:04:39'),
(2, 'Bô Malossi', 'Thailand', '<p>Features include: Turnable front wheels; steering ...</p>', 123, 103.42, 13, 2, NULL, '2021-06-09 00:01:24'),
(4, 'Chụp pha Sport', 'Thailand', '<p>fffff</p>', 8, 200000.00, 13, 7, '2021-06-09 00:15:03', '2021-06-09 00:15:03'),
(5, 'Đèn hậu led Level 10', 'Thailand', '<p>hay luon</p>', 10, 200000.00, 13, 8, '2021-06-09 00:18:41', '2021-06-09 00:18:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_order`
--

CREATE TABLE `product_order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_order`
--

INSERT INTO `product_order` (`order_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `phone`, `user_img`, `address`, `city`, `province`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Lê Hoàng Quân', 'blues000@gmail.com', 2, NULL, NULL, NULL, NULL, NULL, '$2y$10$ePGyerGM9mPbdLzdXRuku.6JX7pKnGjOKE8Xfzev1ALiFebGLaDmq', '2021-06-07 00:33:04', '2021-06-07 00:33:04'),
(2, 'admin', 'admin@gmail.com', 1, NULL, NULL, NULL, NULL, NULL, '123456789', NULL, NULL),
(3, 'admin123', 'admin123321@gmail.com', 1, NULL, NULL, NULL, NULL, NULL, '$2y$10$QcVS5RTX9rN574/cMTTqJeBxshgZXhSVbKSp6G2ug2GnaZP5OyMOy', '2021-06-08 02:12:35', '2021-06-08 02:12:35'),
(4, 'Lê Hoàng Quân', 'bluestar000@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$49vTAul8CEAJGEGmLffsTuR8nywMZyrT89cBfKAVKi8WwLc8iq2j.', '2021-06-08 02:24:31', '2021-06-08 02:24:31'),
(5, 'Lê Hoàng Quân', 'ddddd@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$2wBneoVCeewQtsn801s.AeD0z4.YEVbbKm7Ex1gxUi4GN61qe5p52', '2021-07-12 19:02:23', '2021-07-12 19:02:23');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `productlines`
--
ALTER TABLE `productlines`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `productline_id` (`productline_id`),
  ADD KEY `image_id` (`image_id`);

--
-- Chỉ mục cho bảng `product_order`
--
ALTER TABLE `product_order`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `productlines`
--
ALTER TABLE `productlines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`productline_id`) REFERENCES `productlines` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`);

--
-- Các ràng buộc cho bảng `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `product_order_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_order_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
