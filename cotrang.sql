-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: database
-- Thời gian đã tạo: Th12 26, 2022 lúc 07:46 AM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 8.0.19

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
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` int NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `content` longtext,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `title`, `location`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Menu Footer', '2', NULL, '2022-11-17 09:11:05', '2022-11-17 09:11:05'),
(2, 'Menu Header', '1', '[[{\"id\":\"18\"},{\"id\":\"19\"},{\"id\":\"20\"},{\"id\":\"21\"},{\"id\":\"22\"},{\"id\":\"23\"},{\"id\":\"24\",\"children\":[[{\"id\":\"25\",\"children\":[[{\"id\":\"26\"}]]}]]}]]', '2022-11-17 09:38:16', '2022-11-17 10:04:15'),
(3, 'Menu CMS', '0', NULL, '2022-11-17 09:11:05', '2022-11-17 09:11:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_item`
--

CREATE TABLE `menu_item` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `target` varchar(255) DEFAULT NULL,
  `menu_id` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `menu_item`
--

INSERT INTO `menu_item` (`id`, `title`, `name`, `slug`, `type`, `target`, `menu_id`, `category_id`, `created_at`, `updated_at`) VALUES
(18, 'Trang chủ', NULL, 'trang-chu', 'category', NULL, 6, 1, '2022-11-17 09:38:20', '2022-11-17 09:38:20'),
(19, 'Giới thiệu', NULL, 'gioi-thieu', 'category', NULL, 6, 2, '2022-11-17 09:38:20', '2022-11-17 09:38:20'),
(20, 'Công bố thông tin', NULL, 'cong-bo-thong-tin', 'category', NULL, 6, 3, '2022-11-17 09:38:20', '2022-11-17 09:38:20'),
(21, 'Sản phẩm dịch vụ', NULL, 'san-pham', 'category', NULL, 6, 4, '2022-11-17 09:38:20', '2022-11-17 09:38:20'),
(22, 'Người AVG', NULL, 'nguoi-avg', 'category', NULL, 6, 5, '2022-11-17 09:38:21', '2022-11-17 09:38:21'),
(23, 'Tin tức', NULL, 'tin-tuc', 'category', NULL, 6, 6, '2022-11-17 09:38:21', '2022-11-17 09:38:21'),
(24, 'Liên hệ', NULL, 'thong-tin-lien-he', 'category', NULL, 6, 7, '2022-11-17 09:38:21', '2022-11-17 09:38:21'),
(25, 'Liên hệ nè', NULL, 'thong-tin-lien-he', 'category', NULL, 6, 8, '2022-11-17 09:38:21', '2022-11-17 09:38:21'),
(26, 'test', NULL, 'https://cms.nethubtv.vn.dev/app/movies', 'custom', NULL, 6, NULL, '2022-11-17 09:38:28', '2022-11-17 09:38:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `module_id` bigint UNSIGNED NOT NULL,
  `method` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `module_id`, `method`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(198, 5, 'index', 'index', 'app.audit.index', '2022-05-15 20:13:52', '2022-05-15 20:13:52'),
(199, 5, 'show', 'show', 'app.audit.show', '2022-05-15 20:13:52', '2022-05-15 20:13:52'),
(200, 6, 'callAction', 'callAction', 'app.backend.callaction', '2022-05-15 20:13:52', '2022-05-15 20:13:52'),
(201, 119, 'index', 'index', 'app.category.index', '2022-05-15 20:13:52', '2022-05-15 20:13:52'),
(202, 119, 'create', 'create', 'app.category.create', '2022-05-15 20:13:53', '2022-05-15 20:13:53'),
(203, 119, 'store', 'store', 'app.category.store', '2022-05-15 20:13:53', '2022-05-15 20:13:53'),
(204, 119, 'show', 'show', 'app.category.show', '2022-05-15 20:13:53', '2022-05-15 20:13:53'),
(205, 119, 'edit', 'edit', 'app.category.edit', '2022-05-15 20:13:53', '2022-05-15 20:13:53'),
(206, 119, 'update', 'update', 'app.category.update', '2022-05-15 20:13:53', '2022-05-15 20:13:53'),
(207, 119, 'destroy', 'destroy', 'app.category.destroy', '2022-05-15 20:13:53', '2022-05-15 20:13:53'),
(208, 12, 'index', 'index', 'app.dashboard.index', '2022-05-15 20:13:53', '2022-05-15 20:13:53'),
(209, 108, 'index', 'index', 'app.deletecache.index', '2022-05-15 20:13:53', '2022-05-15 20:13:53'),
(212, 120, 'index', 'index', 'app.homeslider.index', '2022-05-15 20:13:53', '2022-05-15 20:13:53'),
(213, 120, 'create', 'create', 'app.homeslider.create', '2022-05-15 20:13:53', '2022-05-15 20:13:53'),
(214, 120, 'store', 'store', 'app.homeslider.store', '2022-05-15 20:13:53', '2022-05-15 20:13:53'),
(215, 120, 'show', 'show', 'app.homeslider.show', '2022-05-15 20:13:54', '2022-05-15 20:13:54'),
(216, 120, 'edit', 'edit', 'app.homeslider.edit', '2022-05-15 20:13:54', '2022-05-15 20:13:54'),
(217, 120, 'update', 'update', 'app.homeslider.update', '2022-05-15 20:13:54', '2022-05-15 20:13:54'),
(218, 120, 'destroy', 'destroy', 'app.homeslider.destroy', '2022-05-15 20:13:54', '2022-05-15 20:13:54'),
(219, 19, 'index', 'index', 'app.menubuilder.index', '2022-05-15 20:13:54', '2022-05-15 20:13:54'),
(220, 19, 'itemCreate', 'itemCreate', 'app.menubuilder.itemcreate', '2022-05-15 20:13:54', '2022-05-15 20:13:54'),
(221, 19, 'itemStore', 'itemStore', 'app.menubuilder.itemstore', '2022-05-15 20:13:54', '2022-05-15 20:13:54'),
(222, 19, 'itemEdit', 'itemEdit', 'app.menubuilder.itemedit', '2022-05-15 20:13:54', '2022-05-15 20:13:54'),
(223, 19, 'itemUpdate', 'itemUpdate', 'app.menubuilder.itemupdate', '2022-05-15 20:13:54', '2022-05-15 20:13:54'),
(224, 19, 'itemDestroy', 'itemDestroy', 'app.menubuilder.itemdestroy', '2022-05-15 20:13:54', '2022-05-15 20:13:54'),
(225, 20, 'index', 'index', 'app.menu.index', '2022-05-15 20:13:54', '2022-05-15 20:13:54'),
(226, 20, 'create', 'create', 'app.menu.create', '2022-05-15 20:13:54', '2022-05-15 20:13:54'),
(227, 20, 'store', 'store', 'app.menu.store', '2022-05-15 20:13:54', '2022-05-15 20:13:54'),
(228, 20, 'edit', 'edit', 'app.menu.edit', '2022-05-15 20:13:55', '2022-05-15 20:13:55'),
(229, 20, 'update', 'update', 'app.menu.update', '2022-05-15 20:13:55', '2022-05-15 20:13:55'),
(230, 20, 'destroy', 'destroy', 'app.menu.destroy', '2022-05-15 20:13:55', '2022-05-15 20:13:55'),
(231, 20, 'orderItem', 'orderItem', 'app.menu.orderitem', '2022-05-15 20:13:55', '2022-05-15 20:13:55'),
(232, 22, 'index', 'index', 'app.module.index', '2022-05-15 20:13:55', '2022-05-15 20:13:55'),
(233, 22, 'store', 'store', 'app.module.store', '2022-05-15 20:13:55', '2022-05-15 20:13:55'),
(234, 22, 'show', 'show', 'app.module.show', '2022-05-15 20:13:55', '2022-05-15 20:13:55'),
(235, 22, 'edit', 'edit', 'app.module.edit', '2022-05-15 20:13:55', '2022-05-15 20:13:55'),
(236, 22, 'update', 'update', 'app.module.update', '2022-05-15 20:13:55', '2022-05-15 20:13:55'),
(237, 22, 'syncModule', 'syncModule', 'app.module.syncmodule', '2022-05-15 20:13:55', '2022-05-15 20:13:55'),
(238, 121, 'index', 'index', 'app.movie.index', '2022-05-15 20:13:55', '2022-05-15 20:13:55'),
(239, 121, 'create', 'create', 'app.movie.create', '2022-05-15 20:13:55', '2022-05-15 20:13:55'),
(240, 121, 'store', 'store', 'app.movie.store', '2022-05-15 20:13:56', '2022-05-15 20:13:56'),
(241, 121, 'edit', 'edit', 'app.movie.edit', '2022-05-15 20:13:56', '2022-05-15 20:13:56'),
(242, 121, 'update', 'update', 'app.movie.update', '2022-05-15 20:13:56', '2022-05-15 20:13:56'),
(243, 121, 'destroy', 'destroy', 'app.movie.destroy', '2022-05-15 20:13:56', '2022-05-15 20:13:56'),
(244, 122, 'index', 'index', 'app.news.index', '2022-05-15 20:13:56', '2022-05-15 20:13:56'),
(245, 122, 'create', 'create', 'app.news.create', '2022-05-15 20:13:56', '2022-05-15 20:13:56'),
(246, 122, 'store', 'store', 'app.news.store', '2022-05-15 20:13:56', '2022-05-15 20:13:56'),
(247, 122, 'show', 'show', 'app.news.show', '2022-05-15 20:13:56', '2022-05-15 20:13:56'),
(248, 122, 'edit', 'edit', 'app.news.edit', '2022-05-15 20:13:56', '2022-05-15 20:13:56'),
(249, 122, 'update', 'update', 'app.news.update', '2022-05-15 20:13:56', '2022-05-15 20:13:56'),
(250, 122, 'destroy', 'destroy', 'app.news.destroy', '2022-05-15 20:13:56', '2022-05-15 20:13:56'),
(251, 28, 'index', 'index', 'app.profile.index', '2022-05-15 20:13:56', '2022-05-15 20:13:56'),
(252, 28, 'update', 'update', 'app.profile.update', '2022-05-15 20:13:56', '2022-05-15 20:13:56'),
(253, 28, 'changePassword', 'changePassword', 'app.profile.changepassword', '2022-05-15 20:13:57', '2022-05-15 20:13:57'),
(254, 28, 'updatePassword', 'updatePassword', 'app.profile.updatepassword', '2022-05-15 20:13:57', '2022-05-15 20:13:57'),
(255, 29, 'index', 'index', 'app.role.index', '2022-05-15 20:13:57', '2022-05-15 20:13:57'),
(256, 29, 'create', 'create', 'app.role.create', '2022-05-15 20:13:57', '2022-05-15 20:13:57'),
(257, 29, 'store', 'store', 'app.role.store', '2022-05-15 20:13:57', '2022-05-15 20:13:57'),
(258, 29, 'show', 'show', 'app.role.show', '2022-05-15 20:13:57', '2022-05-15 20:13:57'),
(259, 29, 'edit', 'edit', 'app.role.edit', '2022-05-15 20:13:57', '2022-05-15 20:13:57'),
(260, 29, 'update', 'update', 'app.role.update', '2022-05-15 20:13:57', '2022-05-15 20:13:57'),
(261, 29, 'destroy', 'destroy', 'app.role.destroy', '2022-05-15 20:13:57', '2022-05-15 20:13:57'),
(262, 31, 'index', 'index', 'app.setting.index', '2022-05-15 20:13:57', '2022-05-15 20:13:57'),
(263, 31, 'update', 'update', 'app.setting.update', '2022-05-15 20:13:57', '2022-05-15 20:13:57'),
(264, 31, 'appearance', 'appearance', 'app.setting.appearance', '2022-05-15 20:13:57', '2022-05-15 20:13:57'),
(265, 31, 'updateAppearance', 'updateAppearance', 'app.setting.updateappearance', '2022-05-15 20:13:57', '2022-05-15 20:13:57'),
(266, 31, 'mail', 'mail', 'app.setting.mail', '2022-05-15 20:13:58', '2022-05-15 20:13:58'),
(267, 31, 'updateMailSettings', 'updateMailSettings', 'app.setting.updatemailsettings', '2022-05-15 20:13:58', '2022-05-15 20:13:58'),
(268, 31, 'socialite', 'socialite', 'app.setting.socialite', '2022-05-15 20:13:58', '2022-05-15 20:13:58'),
(269, 31, 'updateSocialiteSettings', 'updateSocialiteSettings', 'app.setting.updatesocialitesettings', '2022-05-15 20:13:58', '2022-05-15 20:13:58'),
(270, 123, 'index', 'index', 'app.tag.index', '2022-05-15 20:13:58', '2022-05-15 20:13:58'),
(271, 123, 'create', 'create', 'app.tag.create', '2022-05-15 20:13:58', '2022-05-15 20:13:58'),
(272, 123, 'store', 'store', 'app.tag.store', '2022-05-15 20:13:58', '2022-05-15 20:13:58'),
(273, 123, 'show', 'show', 'app.tag.show', '2022-05-15 20:13:58', '2022-05-15 20:13:58'),
(274, 123, 'edit', 'edit', 'app.tag.edit', '2022-05-15 20:13:58', '2022-05-15 20:13:58'),
(275, 123, 'update', 'update', 'app.tag.update', '2022-05-15 20:13:58', '2022-05-15 20:13:58'),
(276, 123, 'destroy', 'destroy', 'app.tag.destroy', '2022-05-15 20:13:58', '2022-05-15 20:13:58'),
(277, 33, 'index', 'index', 'app.user.index', '2022-05-15 20:13:58', '2022-05-15 20:13:58'),
(278, 33, 'create', 'create', 'app.user.create', '2022-05-15 20:13:59', '2022-05-15 20:13:59'),
(279, 33, 'store', 'store', 'app.user.store', '2022-05-15 20:13:59', '2022-05-15 20:13:59'),
(280, 33, 'show', 'show', 'app.user.show', '2022-05-15 20:13:59', '2022-05-15 20:13:59'),
(281, 33, 'edit', 'edit', 'app.user.edit', '2022-05-15 20:13:59', '2022-05-15 20:13:59'),
(282, 33, 'update', 'update', 'app.user.update', '2022-05-15 20:13:59', '2022-05-15 20:13:59'),
(283, 33, 'destroy', 'destroy', 'app.user.destroy', '2022-05-15 20:13:59', '2022-05-15 20:13:59'),
(284, 33, 'changePassword', 'changePassword', 'app.user.changepassword', '2022-05-15 20:13:59', '2022-05-15 20:13:59'),
(285, 33, 'updatePassword', 'updatePassword', 'app.user.updatepassword', '2022-05-15 20:13:59', '2022-05-15 20:13:59'),
(286, 33, 'logError', 'logError', 'app.user.logerror', '2022-05-15 20:13:59', '2022-05-15 20:13:59'),
(292, 113, 'logError', 'logError', 'app.usermanual.logerror', '2022-05-15 20:14:00', '2022-05-15 20:14:00'),
(293, 171, 'index', 'index', 'app.image.index', '2022-05-16 19:20:45', '2022-05-16 19:20:45'),
(294, 171, 'create', 'create', 'app.image.create', '2022-05-16 19:20:45', '2022-05-16 19:20:45'),
(295, 171, 'store', 'store', 'app.image.store', '2022-05-16 19:20:45', '2022-05-16 19:20:45'),
(296, 171, 'show', 'show', 'app.image.show', '2022-05-16 19:20:45', '2022-05-16 19:20:45'),
(297, 171, 'edit', 'edit', 'app.image.edit', '2022-05-16 19:20:45', '2022-05-16 19:20:45'),
(298, 171, 'update', 'update', 'app.image.update', '2022-05-16 19:20:45', '2022-05-16 19:20:45'),
(299, 171, 'destroy', 'destroy', 'app.image.destroy', '2022-05-16 19:20:46', '2022-05-16 19:20:46'),
(300, 34, 'index', 'index', 'app.managefirstunit.index', '2022-06-07 10:14:08', '2022-06-07 10:14:08'),
(301, 34, 'create', 'create', 'app.managefirstunit.create', '2022-06-07 10:14:08', '2022-06-07 10:14:08'),
(302, 34, 'show', 'show', 'app.managefirstunit.show', '2022-06-07 10:14:08', '2022-06-07 10:14:08'),
(303, 34, 'store', 'store', 'app.managefirstunit.store', '2022-06-07 10:14:08', '2022-06-07 10:14:08'),
(304, 34, 'edit', 'edit', 'app.managefirstunit.edit', '2022-06-07 10:14:08', '2022-06-07 10:14:08'),
(305, 34, 'update', 'update', 'app.managefirstunit.update', '2022-06-07 10:14:08', '2022-06-07 10:14:08'),
(306, 34, 'destroy', 'destroy', 'app.managefirstunit.destroy', '2022-06-07 10:14:08', '2022-06-07 10:14:08'),
(307, 35, 'index', 'index', 'app.managesecondunit.index', '2022-06-07 10:14:08', '2022-06-07 10:14:08'),
(308, 35, 'create', 'create', 'app.managesecondunit.create', '2022-06-07 10:14:09', '2022-06-07 10:14:09'),
(309, 35, 'store', 'store', 'app.managesecondunit.store', '2022-06-07 10:14:09', '2022-06-07 10:14:09'),
(310, 35, 'edit', 'edit', 'app.managesecondunit.edit', '2022-06-07 10:14:09', '2022-06-07 10:14:09'),
(311, 35, 'update', 'update', 'app.managesecondunit.update', '2022-06-07 10:14:09', '2022-06-07 10:14:09'),
(312, 35, 'destroy', 'destroy', 'app.managesecondunit.destroy', '2022-06-07 10:14:09', '2022-06-07 10:14:09'),
(313, 36, 'index', 'index', 'app.procedure.index', '2022-06-07 10:14:09', '2022-06-07 10:14:09'),
(314, 36, 'create', 'create', 'app.procedure.create', '2022-06-07 10:14:09', '2022-06-07 10:14:09'),
(315, 36, 'store', 'store', 'app.procedure.store', '2022-06-07 10:14:09', '2022-06-07 10:14:09'),
(316, 36, 'show', 'show', 'app.procedure.show', '2022-06-07 10:14:09', '2022-06-07 10:14:09'),
(317, 36, 'edit', 'edit', 'app.procedure.edit', '2022-06-07 10:14:10', '2022-06-07 10:14:10'),
(318, 36, 'update', 'update', 'app.procedure.update', '2022-06-07 10:14:10', '2022-06-07 10:14:10'),
(319, 36, 'destroy', 'destroy', 'app.procedure.destroy', '2022-06-07 10:14:10', '2022-06-07 10:14:10'),
(320, 37, 'index', 'index', 'app.ricklv1.index', '2022-06-07 10:14:10', '2022-06-07 10:14:10'),
(321, 37, 'create', 'create', 'app.ricklv1.create', '2022-06-07 10:14:10', '2022-06-07 10:14:10'),
(322, 37, 'store', 'store', 'app.ricklv1.store', '2022-06-07 10:14:10', '2022-06-07 10:14:10'),
(323, 37, 'show', 'show', 'app.ricklv1.show', '2022-06-07 10:14:10', '2022-06-07 10:14:10'),
(324, 37, 'edit', 'edit', 'app.ricklv1.edit', '2022-06-07 10:14:10', '2022-06-07 10:14:10'),
(325, 37, 'update', 'update', 'app.ricklv1.update', '2022-06-07 10:14:10', '2022-06-07 10:14:10'),
(326, 37, 'destroy', 'destroy', 'app.ricklv1.destroy', '2022-06-07 10:14:10', '2022-06-07 10:14:10'),
(327, 37, 'logError', 'logError', 'app.ricklv1.logerror', '2022-06-07 10:14:10', '2022-06-07 10:14:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint UNSIGNED NOT NULL,
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(427, 28, 4, NULL, NULL),
(559, 28, 3, NULL, NULL),
(811, 30, 4, NULL, NULL),
(812, 31, 4, NULL, NULL),
(814, 35, 4, NULL, NULL),
(815, 36, 4, NULL, NULL),
(816, 140, 4, NULL, NULL),
(819, 143, 4, NULL, NULL),
(866, 30, 3, NULL, NULL),
(867, 31, 3, NULL, NULL),
(868, 35, 3, NULL, NULL),
(869, 36, 3, NULL, NULL),
(870, 140, 3, NULL, NULL),
(873, 143, 3, NULL, NULL),
(1094, 16, 3, NULL, NULL),
(1095, 19, 3, NULL, NULL),
(1096, 23, 3, NULL, NULL),
(1097, 25, 3, NULL, NULL),
(1098, 29, 3, NULL, NULL),
(1099, 32, 3, NULL, NULL),
(1100, 48, 3, NULL, NULL),
(1101, 50, 3, NULL, NULL),
(1102, 55, 3, NULL, NULL),
(1103, 57, 3, NULL, NULL),
(1104, 63, 3, NULL, NULL),
(1105, 67, 3, NULL, NULL),
(1106, 70, 3, NULL, NULL),
(1107, 76, 3, NULL, NULL),
(1108, 79, 3, NULL, NULL),
(1109, 87, 3, NULL, NULL),
(1110, 90, 3, NULL, NULL),
(1111, 102, 3, NULL, NULL),
(1112, 104, 3, NULL, NULL),
(1113, 109, 3, NULL, NULL),
(1114, 112, 3, NULL, NULL),
(1115, 124, 3, NULL, NULL),
(1116, 127, 3, NULL, NULL),
(1140, 16, 4, NULL, NULL),
(1141, 19, 4, NULL, NULL),
(1142, 23, 4, NULL, NULL),
(1143, 25, 4, NULL, NULL),
(1144, 29, 4, NULL, NULL),
(1145, 32, 4, NULL, NULL),
(1146, 48, 4, NULL, NULL),
(1147, 50, 4, NULL, NULL),
(1148, 55, 4, NULL, NULL),
(1149, 57, 4, NULL, NULL),
(1150, 63, 4, NULL, NULL),
(1151, 67, 4, NULL, NULL),
(1152, 70, 4, NULL, NULL),
(1153, 76, 4, NULL, NULL),
(1154, 79, 4, NULL, NULL),
(1155, 87, 4, NULL, NULL),
(1156, 90, 4, NULL, NULL),
(1157, 102, 4, NULL, NULL),
(1158, 104, 4, NULL, NULL),
(1159, 109, 4, NULL, NULL),
(1160, 112, 4, NULL, NULL),
(1161, 124, 4, NULL, NULL),
(1162, 127, 4, NULL, NULL),
(1237, 198, 5, NULL, NULL),
(1238, 199, 5, NULL, NULL),
(1239, 200, 5, NULL, NULL),
(1240, 208, 5, NULL, NULL),
(1241, 219, 5, NULL, NULL),
(1242, 220, 5, NULL, NULL),
(1243, 221, 5, NULL, NULL),
(1244, 222, 5, NULL, NULL),
(1245, 223, 5, NULL, NULL),
(1246, 224, 5, NULL, NULL),
(1247, 225, 5, NULL, NULL),
(1248, 227, 5, NULL, NULL),
(1249, 229, 5, NULL, NULL),
(1250, 230, 5, NULL, NULL),
(1251, 231, 5, NULL, NULL),
(1252, 232, 5, NULL, NULL),
(1253, 233, 5, NULL, NULL),
(1254, 234, 5, NULL, NULL),
(1255, 236, 5, NULL, NULL),
(1256, 237, 5, NULL, NULL),
(1257, 251, 5, NULL, NULL),
(1258, 252, 5, NULL, NULL),
(1259, 253, 5, NULL, NULL),
(1260, 254, 5, NULL, NULL),
(1261, 255, 5, NULL, NULL),
(1262, 257, 5, NULL, NULL),
(1263, 258, 5, NULL, NULL),
(1264, 260, 5, NULL, NULL),
(1265, 261, 5, NULL, NULL),
(1266, 262, 5, NULL, NULL),
(1267, 263, 5, NULL, NULL),
(1268, 264, 5, NULL, NULL),
(1269, 265, 5, NULL, NULL),
(1270, 266, 5, NULL, NULL),
(1271, 267, 5, NULL, NULL),
(1272, 268, 5, NULL, NULL),
(1273, 269, 5, NULL, NULL),
(1274, 277, 5, NULL, NULL),
(1275, 279, 5, NULL, NULL),
(1276, 280, 5, NULL, NULL),
(1277, 282, 5, NULL, NULL),
(1278, 283, 5, NULL, NULL),
(1279, 284, 5, NULL, NULL),
(1280, 285, 5, NULL, NULL),
(1281, 286, 5, NULL, NULL),
(1294, 209, 5, NULL, NULL),
(1295, 210, 5, NULL, NULL),
(1296, 211, 5, NULL, NULL),
(1303, 201, 5, NULL, NULL),
(1304, 203, 5, NULL, NULL),
(1305, 204, 5, NULL, NULL),
(1306, 206, 5, NULL, NULL),
(1307, 207, 5, NULL, NULL),
(1313, 238, 5, NULL, NULL),
(1314, 240, 5, NULL, NULL),
(1315, 242, 5, NULL, NULL),
(1316, 243, 5, NULL, NULL),
(1317, 244, 5, NULL, NULL),
(1318, 246, 5, NULL, NULL),
(1319, 247, 5, NULL, NULL),
(1320, 249, 5, NULL, NULL),
(1321, 250, 5, NULL, NULL),
(1322, 270, 5, NULL, NULL),
(1323, 272, 5, NULL, NULL),
(1324, 273, 5, NULL, NULL),
(1325, 275, 5, NULL, NULL),
(1326, 276, 5, NULL, NULL),
(1329, 260, 5, NULL, NULL),
(1330, 198, 1, NULL, NULL),
(1331, 199, 1, NULL, NULL),
(1332, 200, 1, NULL, NULL),
(1333, 208, 1, NULL, NULL),
(1334, 219, 1, NULL, NULL),
(1335, 220, 1, NULL, NULL),
(1336, 221, 1, NULL, NULL),
(1337, 222, 1, NULL, NULL),
(1338, 223, 1, NULL, NULL),
(1339, 224, 1, NULL, NULL),
(1340, 225, 1, NULL, NULL),
(1341, 227, 1, NULL, NULL),
(1342, 229, 1, NULL, NULL),
(1343, 230, 1, NULL, NULL),
(1344, 231, 1, NULL, NULL),
(1345, 232, 1, NULL, NULL),
(1346, 233, 1, NULL, NULL),
(1347, 234, 1, NULL, NULL),
(1348, 236, 1, NULL, NULL),
(1349, 237, 1, NULL, NULL),
(1350, 251, 1, NULL, NULL),
(1351, 252, 1, NULL, NULL),
(1352, 253, 1, NULL, NULL),
(1353, 254, 1, NULL, NULL),
(1354, 255, 1, NULL, NULL),
(1355, 257, 1, NULL, NULL),
(1356, 258, 1, NULL, NULL),
(1357, 260, 1, NULL, NULL),
(1358, 261, 1, NULL, NULL),
(1359, 262, 1, NULL, NULL),
(1360, 263, 1, NULL, NULL),
(1361, 264, 1, NULL, NULL),
(1362, 265, 1, NULL, NULL),
(1363, 266, 1, NULL, NULL),
(1364, 267, 1, NULL, NULL),
(1365, 268, 1, NULL, NULL),
(1366, 269, 1, NULL, NULL),
(1367, 277, 1, NULL, NULL),
(1368, 279, 1, NULL, NULL),
(1369, 280, 1, NULL, NULL),
(1370, 282, 1, NULL, NULL),
(1371, 283, 1, NULL, NULL),
(1372, 284, 1, NULL, NULL),
(1373, 285, 1, NULL, NULL),
(1374, 286, 1, NULL, NULL),
(1471, 293, 5, NULL, NULL),
(1472, 295, 5, NULL, NULL),
(1473, 296, 5, NULL, NULL),
(1474, 298, 5, NULL, NULL),
(1475, 299, 5, NULL, NULL),
(1519, 300, 5, NULL, NULL),
(1520, 301, 5, NULL, NULL),
(1521, 302, 5, NULL, NULL),
(1522, 303, 5, NULL, NULL),
(1523, 304, 5, NULL, NULL),
(1524, 305, 5, NULL, NULL),
(1525, 306, 5, NULL, NULL),
(1526, 307, 5, NULL, NULL),
(1527, 308, 5, NULL, NULL),
(1528, 309, 5, NULL, NULL),
(1529, 310, 5, NULL, NULL),
(1530, 311, 5, NULL, NULL),
(1531, 312, 5, NULL, NULL),
(1532, 313, 5, NULL, NULL),
(1533, 314, 5, NULL, NULL),
(1534, 315, 5, NULL, NULL),
(1535, 316, 5, NULL, NULL),
(1536, 317, 5, NULL, NULL),
(1537, 318, 5, NULL, NULL),
(1538, 319, 5, NULL, NULL),
(1539, 320, 5, NULL, NULL),
(1540, 321, 5, NULL, NULL),
(1601, 202, 5, NULL, NULL),
(1602, 205, 5, NULL, NULL),
(1603, 213, 5, NULL, NULL),
(1604, 216, 5, NULL, NULL),
(1605, 226, 5, NULL, NULL),
(1606, 228, 5, NULL, NULL),
(1607, 235, 5, NULL, NULL),
(1608, 239, 5, NULL, NULL),
(1609, 241, 5, NULL, NULL),
(1610, 245, 5, NULL, NULL),
(1611, 248, 5, NULL, NULL),
(1612, 256, 5, NULL, NULL),
(1613, 259, 5, NULL, NULL),
(1614, 271, 5, NULL, NULL),
(1615, 274, 5, NULL, NULL),
(1616, 278, 5, NULL, NULL),
(1617, 281, 5, NULL, NULL),
(1618, 294, 5, NULL, NULL),
(1619, 297, 5, NULL, NULL),
(1620, 198, 0, NULL, NULL),
(1621, 199, 0, NULL, NULL),
(1622, 202, 1, NULL, NULL),
(1623, 205, 1, NULL, NULL),
(1624, 213, 1, NULL, NULL),
(1625, 216, 1, NULL, NULL),
(1626, 226, 1, NULL, NULL),
(1627, 228, 1, NULL, NULL),
(1628, 235, 1, NULL, NULL),
(1629, 239, 1, NULL, NULL),
(1630, 241, 1, NULL, NULL),
(1631, 245, 1, NULL, NULL),
(1632, 248, 1, NULL, NULL),
(1633, 256, 1, NULL, NULL),
(1634, 259, 1, NULL, NULL),
(1635, 271, 1, NULL, NULL),
(1636, 274, 1, NULL, NULL),
(1637, 278, 1, NULL, NULL),
(1638, 281, 1, NULL, NULL),
(1639, 294, 1, NULL, NULL),
(1640, 297, 1, NULL, NULL),
(1641, 198, 7, NULL, NULL),
(1642, 199, 7, NULL, NULL),
(1643, 198, 8, NULL, NULL),
(1644, 199, 8, NULL, NULL),
(1645, 198, 9, NULL, NULL),
(1646, 199, 9, NULL, NULL),
(1647, 198, 10, NULL, NULL),
(1648, 199, 10, NULL, NULL),
(1649, 200, 10, NULL, NULL),
(1650, 208, 10, NULL, NULL),
(1651, 219, 10, NULL, NULL),
(1652, 220, 10, NULL, NULL),
(1653, 221, 10, NULL, NULL),
(1654, 222, 10, NULL, NULL),
(1655, 223, 10, NULL, NULL),
(1656, 224, 10, NULL, NULL),
(1657, 225, 10, NULL, NULL),
(1658, 227, 10, NULL, NULL),
(1659, 229, 10, NULL, NULL),
(1660, 230, 10, NULL, NULL),
(1661, 231, 10, NULL, NULL),
(1662, 232, 10, NULL, NULL),
(1663, 233, 10, NULL, NULL),
(1664, 234, 10, NULL, NULL),
(1665, 236, 10, NULL, NULL),
(1666, 237, 10, NULL, NULL),
(1667, 251, 10, NULL, NULL),
(1668, 252, 10, NULL, NULL),
(1669, 253, 10, NULL, NULL),
(1670, 254, 10, NULL, NULL),
(1671, 255, 10, NULL, NULL),
(1672, 257, 10, NULL, NULL),
(1673, 258, 10, NULL, NULL),
(1674, 260, 10, NULL, NULL),
(1675, 261, 10, NULL, NULL),
(1676, 262, 10, NULL, NULL),
(1677, 263, 10, NULL, NULL),
(1678, 264, 10, NULL, NULL),
(1679, 265, 10, NULL, NULL),
(1680, 266, 10, NULL, NULL),
(1681, 267, 10, NULL, NULL),
(1682, 268, 10, NULL, NULL),
(1683, 269, 10, NULL, NULL),
(1684, 277, 10, NULL, NULL),
(1685, 279, 10, NULL, NULL),
(1686, 280, 10, NULL, NULL),
(1687, 282, 10, NULL, NULL),
(1688, 283, 10, NULL, NULL),
(1689, 284, 10, NULL, NULL),
(1690, 285, 10, NULL, NULL),
(1691, 286, 10, NULL, NULL),
(1692, 202, 10, NULL, NULL),
(1693, 205, 10, NULL, NULL),
(1694, 213, 10, NULL, NULL),
(1695, 216, 10, NULL, NULL),
(1696, 226, 10, NULL, NULL),
(1697, 228, 10, NULL, NULL),
(1698, 235, 10, NULL, NULL),
(1699, 239, 10, NULL, NULL),
(1700, 241, 10, NULL, NULL),
(1701, 245, 10, NULL, NULL),
(1702, 248, 10, NULL, NULL),
(1703, 256, 10, NULL, NULL),
(1704, 259, 10, NULL, NULL),
(1705, 271, 10, NULL, NULL),
(1706, 274, 10, NULL, NULL),
(1707, 278, 10, NULL, NULL),
(1708, 281, 10, NULL, NULL),
(1709, 294, 10, NULL, NULL),
(1710, 297, 10, NULL, NULL),
(1711, 198, 11, NULL, NULL),
(1712, 199, 11, NULL, NULL),
(1713, 200, 11, NULL, NULL),
(1714, 208, 11, NULL, NULL),
(1715, 219, 11, NULL, NULL),
(1716, 220, 11, NULL, NULL),
(1717, 221, 11, NULL, NULL),
(1718, 222, 11, NULL, NULL),
(1719, 223, 11, NULL, NULL),
(1720, 224, 11, NULL, NULL),
(1721, 225, 11, NULL, NULL),
(1722, 227, 11, NULL, NULL),
(1723, 229, 11, NULL, NULL),
(1724, 230, 11, NULL, NULL),
(1725, 231, 11, NULL, NULL),
(1726, 232, 11, NULL, NULL),
(1727, 233, 11, NULL, NULL),
(1728, 234, 11, NULL, NULL),
(1729, 236, 11, NULL, NULL),
(1730, 237, 11, NULL, NULL),
(1731, 251, 11, NULL, NULL),
(1732, 252, 11, NULL, NULL),
(1733, 253, 11, NULL, NULL),
(1734, 254, 11, NULL, NULL),
(1735, 255, 11, NULL, NULL),
(1736, 257, 11, NULL, NULL),
(1737, 258, 11, NULL, NULL),
(1738, 260, 11, NULL, NULL),
(1739, 261, 11, NULL, NULL),
(1740, 262, 11, NULL, NULL),
(1741, 263, 11, NULL, NULL),
(1742, 264, 11, NULL, NULL),
(1743, 265, 11, NULL, NULL),
(1744, 266, 11, NULL, NULL),
(1745, 267, 11, NULL, NULL),
(1746, 268, 11, NULL, NULL),
(1747, 269, 11, NULL, NULL),
(1748, 277, 11, NULL, NULL),
(1749, 279, 11, NULL, NULL),
(1750, 280, 11, NULL, NULL),
(1751, 282, 11, NULL, NULL),
(1752, 283, 11, NULL, NULL),
(1753, 284, 11, NULL, NULL),
(1754, 285, 11, NULL, NULL),
(1755, 286, 11, NULL, NULL),
(1756, 198, 12, NULL, NULL),
(1757, 199, 12, NULL, NULL),
(1758, 251, 2, NULL, NULL),
(1759, 252, 2, NULL, NULL),
(1760, 253, 2, NULL, NULL),
(1761, 254, 2, NULL, NULL),
(1762, 202, 2, NULL, NULL),
(1763, 205, 2, NULL, NULL),
(1764, 213, 2, NULL, NULL),
(1765, 216, 2, NULL, NULL),
(1766, 226, 2, NULL, NULL),
(1767, 228, 2, NULL, NULL),
(1768, 235, 2, NULL, NULL),
(1769, 239, 2, NULL, NULL),
(1770, 241, 2, NULL, NULL),
(1771, 245, 2, NULL, NULL),
(1772, 248, 2, NULL, NULL),
(1773, 256, 2, NULL, NULL),
(1774, 259, 2, NULL, NULL),
(1775, 271, 2, NULL, NULL),
(1776, 274, 2, NULL, NULL),
(1777, 278, 2, NULL, NULL),
(1778, 281, 2, NULL, NULL),
(1779, 294, 2, NULL, NULL),
(1780, 297, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deletable` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `type`, `deletable`, `created_at`, `updated_at`) VALUES
(1, 'Manager', 'manager', NULL, 'Manager', 0, NULL, NULL),
(2, 'Leader', 'leader', NULL, 'Leader', 0, '2020-11-26 07:05:01', '2022-04-06 20:56:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
(4, 'site_logo', '/images/logo-mini.svg', '2020-11-26 07:05:00', '2020-11-26 07:05:00'),
(5, 'site_favicon', '/images/logo-mini.svg', '2020-11-26 07:05:00', '2020-11-26 07:05:00'),
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
  `id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change_password` tinyint(1) DEFAULT '0',
  `last_login_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `role_id`, `username`, `name`, `avatar`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `change_password`, `last_login_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'tamnt', 'Nguyễn Thị Tâm', NULL, 'thientamyp@gmail.com', NULL, '$2y$10$H2PD0vnE8ZLWIQnE7PPL8uTr4PX5p7X6N8EILScBmGRp.ewJFOdDu', 1, 'fxoDMTfakv5uppvZKQFL5BlxjHwb1HXuCsUKL0ifV7xXHH8jxPim4YxIEAls', 0, NULL, NULL, NULL),
(2, NULL, 'admin', NULL, NULL, NULL, NULL, '$2y$10$RybW9KmSgzwohqXILOWh2ujxwum03iZEq2gJ4OPEdcOWz1iKevRoq', 0, 'f9xOjV3HA4hB7m0PBSFmSdxbE4RgAI4muF43mJAIGHV5SsnpDsC6JUb4eT3V', 0, NULL, '2022-06-09 20:08:00', '2022-06-09 20:08:00'),
(3, NULL, 'admin', NULL, NULL, NULL, NULL, '$2y$10$RybW9KmSgzwohqXILOWh2ujxwum03iZEq2gJ4OPEdcOWz1iKevRoq', 0, NULL, 0, NULL, '2022-06-09 20:20:19', '2022-06-09 20:20:19');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`) USING BTREE;

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
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `menu_item`
--
ALTER TABLE `menu_item`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=328;

--
-- AUTO_INCREMENT cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1781;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
