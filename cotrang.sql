-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th6 09, 2022 lúc 10:57 AM
-- Phiên bản máy phục vụ: 5.7.33
-- Phiên bản PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cotrang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_title', 'Cổ Trang', '2020-11-26 07:05:00', '2021-02-03 19:09:41'),
(2, 'site_description', 'Hệ thống CMS', '2020-11-26 07:05:00', '2020-11-26 07:05:00'),
(3, 'site_address', 'http://crm.nethubtv.vn/', '2020-11-26 07:05:00', '2021-02-02 00:18:37'),
(4, 'site_logo', '/admin/assets/images/logo.png', '2020-11-26 07:05:00', '2020-11-26 07:05:00'),
(5, 'site_favicon', '/admin/assets/images/logo.png', '2020-11-26 07:05:00', '2020-11-26 07:05:00'),
(6, 'mail_mailer', 'smtp', '2020-11-26 07:05:00', '2020-11-26 07:05:00'),
(7, 'mail_host', 'smtp.mailtrap.io', '2020-11-26 07:05:00', '2020-11-26 07:05:00'),
(8, 'mail_port', '2525', '2020-11-26 07:05:00', '2020-11-26 07:05:00'),
(9, 'mail_username', '', '2020-11-26 07:05:01', '2020-11-26 07:05:01'),
(10, 'mail_password', '', '2020-11-26 07:05:01', '2020-11-26 07:05:01'),
(11, 'mail_encryption', 'TLS', '2020-11-26 07:05:01', '2020-11-26 07:05:01'),
(12, 'mail_from_address', '', '2020-11-26 07:05:01', '2020-11-26 07:05:01'),
(13, 'mail_from_name', 'CMS', '2020-11-26 07:05:01', '2020-11-26 07:05:01'),
(14, 'facebook_client_id', NULL, '2020-11-26 07:05:01', '2020-11-26 07:05:01'),
(15, 'facebook_client_secret', NULL, '2020-11-26 07:05:01', '2020-11-26 07:05:01'),
(16, 'google_client_id', NULL, '2020-11-26 07:05:01', '2020-11-26 07:05:01'),
(17, 'google_client_secret', NULL, '2020-11-26 07:05:01', '2020-11-26 07:05:01'),
(18, 'github_client_id', NULL, '2020-11-26 07:05:01', '2020-11-26 07:05:01'),
(19, 'github_client_secret', NULL, '2020-11-26 07:05:01', '2020-11-26 07:05:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change_password` tinyint(1) DEFAULT '0',
  `last_login_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `role_id`, `username`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `change_password`, `last_login_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'tamnt', 'Nguyễn Thị Tâm', 'thientamyp@gmail.com', NULL, '$2y$10$H2PD0vnE8ZLWIQnE7PPL8uTr4PX5p7X6N8EILScBmGRp.ewJFOdDu', 1, NULL, 0, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
