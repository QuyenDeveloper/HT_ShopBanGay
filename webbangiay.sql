-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2021 lúc 01:28 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbangiay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan_blogs`
--

CREATE TABLE `binhluan_blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idBlog` int(11) NOT NULL,
  `idKH` int(11) NOT NULL,
  `cmt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhgia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan_blogs`
--

INSERT INTO `binhluan_blogs` (`id`, `idBlog`, `idKH`, `cmt`, `danhgia`, `created_at`, `updated_at`) VALUES
(1, 4, 3, 'đẹp', '5.0', '2021-11-25 16:44:05', '2021-11-25 16:44:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan_sanphams`
--

CREATE TABLE `binhluan_sanphams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idSP` int(11) NOT NULL,
  `idKH` int(11) NOT NULL,
  `cmt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhgia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(9999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgian` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `content`, `loai`, `tgian`, `anh1`, `anh2`, `anh3`, `anh4`, `anh5`, `created_at`, `updated_at`) VALUES
(4, 'SẢN PHẨM', 'Pariatur, corrupti, officia, molestias consectetur nesciunt ratione nihil fugiat eveniet nisi quia reiciendis dolor soluta vero autem nemo reprehenderit mollitia deserunt iste quae necessitatibus dolores a atque iure ipsa voluptatum nobis saepe temporibus error corporis minus assumenda nam ullam praesentium harum enim tempora et excepturi.\r\n\r\nQuod soluta corrupti earum officia vel inventore vitae quidem, consequuntur odit impedit, eaque dolorem odio praesentium iusto amet voluptatum distinctio iste dicta maiores doloremque porro. Ipsa doloremque illum animi laborum quo in nemo delectus veritatis, amet numquam doloribus a iure sequi nobis vero facere necessitatibus ipsam\r\n\r\nMinima, earum fuga maiores unde quod quae aspernatur magnam quis adipisci ipsum maxime iusto quidem? Recusandae dolore ipsam eius alias quidem. Dignissimos, recusandae, saepe, omnis, non totam vero unde mollitia natus aliquam magni qui quibusdam incidunt ea nihil error facere ut libero blanditiis accusamus quasi facilis animi repellat consequuntur in sit rerum atque voluptatibus ipsa ullam voluptatum laborum praesentium nesciunt est iusto nulla earum ab tenetur!', 'NIKE', '2021-10-24', '/storage/uploads/2021/10/24/G1.jpg', NULL, NULL, NULL, NULL, '2021-10-24 04:56:36', '2021-10-24 04:56:36'),
(5, 'Giới thiệu', 'Pariatur, corrupti, officia, molestias consectetur nesciunt ratione nihil fugiat eveniet nisi quia reiciendis dolor soluta vero autem nemo reprehenderit mollitia deserunt iste quae necessitatibus dolores a atque iure ipsa voluptatum nobis saepe temporibus error corporis minus assumenda nam ullam praesentium harum enim tempora et excepturi.\r\n\r\nQuod soluta corrupti earum officia vel inventore vitae quidem, consequuntur odit impedit, eaque dolorem odio praesentium iusto amet voluptatum distinctio iste dicta maiores doloremque porro. Ipsa doloremque illum animi laborum quo in nemo delectus veritatis, amet numquam doloribus a iure sequi nobis vero facere necessitatibus ipsam\r\n\r\nPariatur, corrupti, officia, molestias consectetur nesciunt ratione nihil fugiat eveniet nisi quia reiciendis dolor soluta vero autem nemo reprehenderit mollitia deserunt iste quae necessitatibus dolores a atque iure ipsa voluptatum nobis saepe temporibus error corporis minus assumenda nam ullam praesentium harum enim tempora et excepturi.\r\n\r\nQuod soluta corrupti earum officia vel inventore vitae quidem, consequuntur odit impedit, eaque dolorem odio praesentium iusto amet voluptatum distinctio iste dicta maiores doloremque porro. Ipsa doloremque illum animi laborum quo in nemo delectus veritatis, amet numquam doloribus a iure sequi nobis vero facere necessitatibus ipsam', 'ADIDAS', '2021-10-24', '/storage/uploads/2021/10/24/Screenshot 2021-10-01 234500.png', '/storage/uploads/2021/10/24/Screenshot 2021-10-01 234625.png', NULL, NULL, NULL, '2021-10-24 05:47:25', '2021-10-24 05:49:01'),
(6, 'jkfdgh', 'fevsvdsvs fd ge et gree f', 'PUMA', '2021-10-29', '/storage/uploads/2021/10/29/img0.jpg', '/storage/uploads/2021/10/29/img19.jpg', NULL, NULL, NULL, '2021-10-28 20:23:32', '2021-10-28 20:23:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `colors`
--

INSERT INTO `colors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Đỏ', NULL, NULL),
(2, 'Xanh lá', NULL, NULL),
(3, 'Vàng', NULL, NULL),
(4, 'Cam', NULL, NULL),
(5, 'Xanh dương', NULL, NULL),
(6, 'Đen', NULL, NULL),
(7, 'Trắng', NULL, NULL),
(8, 'Nâu', NULL, NULL),
(9, 'Hồng', NULL, NULL),
(10, 'Tím', NULL, NULL),
(11, 'Xám', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `daichi_k_h_s`
--

CREATE TABLE `daichi_k_h_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idKH` int(11) NOT NULL,
  `hoten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daichi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaiDC` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `daichi_k_h_s`
--

INSERT INTO `daichi_k_h_s` (`id`, `idKH`, `hoten`, `sdt`, `daichi`, `loaiDC`, `created_at`, `updated_at`) VALUES
(3, 3, 'Đinh Lâm Nghĩa', '0386992564', 'Bình định', 'Nhà riêng', '2021-11-16 22:57:54', '2021-11-16 22:57:54'),
(8, 2, 'Phạm Quốc quyền', '038*******63', 'Quảng Bình', 'Nhà riêng', '2021-11-16 04:45:30', '2021-11-16 04:45:30'),
(19, 3, 'Đinh Lâm Nghĩa', '0386992564', 'Mai Đăng chơn - Hòa quý - Ngũ Hành Sơn - Đà nẵng', 'Nhà riêng', '2021-11-24 09:05:18', '2021-11-24 09:05:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danggiaos`
--

CREATE TABLE `danggiaos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idKH` int(11) NOT NULL,
  `idDMua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idDchi` int(11) NOT NULL,
  `loinhan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xndanhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danggiaos`
--

INSERT INTO `danggiaos` (`id`, `idKH`, `idDMua`, `idDchi`, `loinhan`, `xndanhan`, `created_at`, `updated_at`) VALUES
(3, 3, 'CMEOFJPRTD', 3, NULL, 'rồi', '2021-11-22 09:32:55', '2021-11-22 09:33:54'),
(6, 2, 'HL0ZCPVEWJ', 8, NULL, 'chưa', '2021-11-23 05:56:04', '2021-11-23 05:56:04'),
(7, 3, 'LECVSEHD48', 3, NULL, 'chưa', '2021-11-23 05:58:36', '2021-11-23 05:58:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhans`
--

CREATE TABLE `danhans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idKH` int(11) NOT NULL,
  `idDMua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idDchi` int(11) NOT NULL,
  `loinhan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhans`
--

INSERT INTO `danhans` (`id`, `idKH`, `idDMua`, `idDchi`, `loinhan`, `created_at`, `updated_at`) VALUES
(1, 3, 'WHEU0U26ZS', 3, 'Kiểm tra trước khi nhận.', '2021-11-22 09:23:54', '2021-11-22 09:23:54'),
(2, 3, 'OVDPDF1PFR', 3, NULL, '2021-11-22 09:24:39', '2021-11-22 09:24:39'),
(3, 3, 'XS1BNFOH2I', 3, NULL, '2021-11-23 04:43:20', '2021-11-23 04:43:20'),
(4, 3, 'XS1BNFOH2I', 3, NULL, '2021-11-23 04:57:57', '2021-11-23 04:57:57'),
(5, 2, 'VDBSTCVAFV', 8, NULL, '2021-11-23 05:56:56', '2021-11-23 05:56:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donmuas`
--

CREATE TABLE `donmuas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idKH` int(11) NOT NULL,
  `idDMua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_SP` int(11) NOT NULL,
  `sizeSP_kh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SLSP_KH` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donmuas`
--

INSERT INTO `donmuas` (`id`, `idKH`, `idDMua`, `ID_SP`, `sizeSP_kh`, `SLSP_KH`, `created_at`, `updated_at`) VALUES
(3, 3, 'WHEU0U26ZS', 53, '40.5', '1', '2021-11-15 06:10:43', '2021-11-15 06:10:43'),
(4, 3, 'WHEU0U26ZS', 55, '0', '2', '2021-11-15 06:10:43', '2021-11-15 06:10:43'),
(5, 2, 'VDG6TWLKJY', 27, '35.5', '5', '2021-11-16 04:45:51', '2021-11-16 04:45:51'),
(6, 2, 'VDG6TWLKJY', 27, '36', '1', '2021-11-16 04:45:51', '2021-11-16 04:45:51'),
(7, 2, 'VDG6TWLKJY', 43, '38', '2', '2021-11-16 04:45:51', '2021-11-16 04:45:51'),
(8, 2, 'F9DYCV33BZ', 27, '40', '1', '2021-11-16 04:48:45', '2021-11-16 04:48:45'),
(9, 2, 'F9DYCV33BZ', 26, '38.5', '1', '2021-11-16 04:48:45', '2021-11-16 04:48:45'),
(12, 3, 'T3303HJFDV', 51, '31', '1', '2021-11-16 08:50:18', '2021-11-16 08:50:18'),
(13, 3, 'AJXK01QJLQ', 53, '40.5', '1', '2021-11-16 09:00:07', '2021-11-16 09:00:07'),
(18, 3, 'DMH49K9Y3F', 55, '0', '1', '2021-11-17 07:40:55', '2021-11-17 07:40:55'),
(19, 3, '5WCYSX3HDJ', 48, '21', '1', '2021-11-17 08:16:20', '2021-11-17 08:16:20'),
(20, 3, 'XICHPK4VFJ', 26, '40', '1', '2021-11-17 08:17:21', '2021-11-17 08:17:21'),
(21, 3, 'XICHPK4VFJ', 25, '46', '1', '2021-11-17 08:17:21', '2021-11-17 08:17:21'),
(22, 3, 'CMEOFJPRTD', 55, '0', '1', '2021-11-19 19:47:40', '2021-11-19 19:47:40'),
(23, 3, 'CMEOFJPRTD', 51, '31', '1', '2021-11-19 19:47:40', '2021-11-19 19:47:40'),
(24, 3, 'CMEOFJPRTD', 38, '29.5', '1', '2021-11-19 19:47:40', '2021-11-19 19:47:40'),
(25, 3, 'XR59BOWGZY', 52, '36', '1', '2021-11-19 20:06:07', '2021-11-19 20:06:07'),
(26, 3, 'AHO4YPDJOY', 55, '0', '1', '2021-11-22 08:13:48', '2021-11-22 08:13:48'),
(27, 3, 'AHO4YPDJOY', 52, '36', '1', '2021-11-22 08:13:48', '2021-11-22 08:13:48'),
(28, 3, 'AHO4YPDJOY', 48, '18', '1', '2021-11-22 08:13:48', '2021-11-22 08:13:48'),
(29, 3, 'AHO4YPDJOY', 47, '17', '1', '2021-11-22 08:13:48', '2021-11-22 08:13:48'),
(30, 3, 'OVDPDF1PFR', 41, '38.5', '4', '2021-11-22 08:21:07', '2021-11-22 08:21:07'),
(31, 3, 'XS1BNFOH2I', 55, '0', '1', '2021-11-22 09:41:09', '2021-11-22 09:41:09'),
(32, 3, 'OVBQLPEYGM', 52, '36', '1', '2021-11-23 05:51:57', '2021-11-23 05:51:57'),
(33, 2, 'VDBSTCVAFV', 49, '25', '1', '2021-11-23 05:53:51', '2021-11-23 05:53:51'),
(34, 2, 'VDBSTCVAFV', 53, '41', '1', '2021-11-23 05:53:51', '2021-11-23 05:53:51'),
(35, 2, 'HL0ZCPVEWJ', 28, '39', '1', '2021-11-23 05:54:11', '2021-11-23 05:54:11'),
(36, 2, 'HAX2RFJTBE', 31, '40', '1', '2021-11-23 05:54:37', '2021-11-23 05:54:37'),
(37, 3, 'LECVSEHD48', 38, '33.5', '1', '2021-11-23 05:58:09', '2021-11-23 05:58:09');

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
-- Cấu trúc bảng cho bảng `gio_hangs`
--

CREATE TABLE `gio_hangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_KH` int(11) NOT NULL,
  `ID_SP` int(11) NOT NULL,
  `sizeSP_kh` double NOT NULL,
  `SLSP_KH` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gio_hangs`
--

INSERT INTO `gio_hangs` (`id`, `ID_KH`, `ID_SP`, `sizeSP_kh`, `SLSP_KH`, `created_at`, `updated_at`) VALUES
(37, 4, 53, 42.5, 3, '2021-11-03 08:48:12', '2021-11-03 09:07:42'),
(38, 4, 52, 32, 2, '2021-11-03 08:49:27', '2021-11-03 08:50:07'),
(39, 4, 52, 33, 1, '2021-11-03 08:49:43', '2021-11-03 08:49:43'),
(40, 4, 53, 44, 1, '2021-11-03 08:51:24', '2021-11-03 08:51:24'),
(41, 4, 25, 41, 1, '2021-11-03 09:08:41', '2021-11-03 09:08:41'),
(42, 4, 53, 41, 1, '2021-11-03 09:18:25', '2021-11-03 09:18:25'),
(85, 3, 31, 36, 2, '2021-11-24 09:27:57', '2021-11-24 09:27:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hdahuys`
--

CREATE TABLE `hdahuys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idKH` int(11) NOT NULL,
  `idDMua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idDchi` int(11) NOT NULL,
  `loinhan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hdahuys`
--

INSERT INTO `hdahuys` (`id`, `idKH`, `idDMua`, `idDchi`, `loinhan`, `created_at`, `updated_at`) VALUES
(1, 3, 'T3303HJFDV', 3, NULL, '2021-11-17 06:59:39', '2021-11-17 06:59:39'),
(2, 3, 'DMH49K9Y3F', 3, NULL, '2021-11-17 07:43:23', '2021-11-17 07:43:23'),
(3, 3, '5WCYSX3HDJ', 3, NULL, '2021-11-17 08:16:24', '2021-11-17 08:16:24'),
(4, 3, 'XICHPK4VFJ', 3, NULL, '2021-11-19 19:54:06', '2021-11-19 19:54:06'),
(5, 3, 'XR59BOWGZY', 3, NULL, '2021-11-22 06:43:11', '2021-11-22 06:43:11'),
(6, 2, 'HAX2RFJTBE', 8, NULL, '2021-11-23 05:55:32', '2021-11-23 05:55:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `layhangs`
--

CREATE TABLE `layhangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idKH` int(11) NOT NULL,
  `idDMua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idDchi` int(11) NOT NULL,
  `loinhan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `layhangs`
--

INSERT INTO `layhangs` (`id`, `idKH`, `idDMua`, `idDchi`, `loinhan`, `created_at`, `updated_at`) VALUES
(3, 2, 'F9DYCV33BZ', 8, NULL, '2021-11-22 08:14:04', '2021-11-22 08:14:04'),
(7, 3, 'AHO4YPDJOY', 3, NULL, '2021-11-23 05:52:24', '2021-11-23 05:52:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mail_t_t_s`
--

CREATE TABLE `mail_t_t_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mail_t_t_s`
--

INSERT INTO `mail_t_t_s` (`id`, `mail`, `created_at`, `updated_at`) VALUES
(37, 'anhhaiti1133557799@gmail.com', '2021-10-05 20:33:38', '2021-10-05 20:33:38'),
(42, 'admin@mail.com', '2021-10-07 05:53:32', '2021-10-07 05:53:32'),
(43, 'ad@mail.com', '2021-10-09 04:50:25', '2021-10-09 04:50:25'),
(45, 'admin123@mail.com', '2021-11-03 08:54:12', '2021-11-03 08:54:12'),
(46, '123nnn@mail.com', '2021-11-16 19:13:25', '2021-11-16 19:13:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `name`, `parent_id`, `description`, `content`, `slug`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Nam', 0, 'nam', '<p>nam</p>', NULL, 1, '2021-09-28 04:00:56', '2021-09-28 04:00:56'),
(2, 'Nữ', 0, 'nữ', '<p>nữ</p>', NULL, 1, '2021-09-28 04:16:12', '2021-09-28 04:16:12'),
(3, 'Trẻ em', 0, 'tre em', '<p>tre em</p>', NULL, 1, '2021-09-28 04:16:37', '2021-09-28 04:16:37'),
(4, 'Phụ kiện', 0, 'Phụ kiện', '<p>Phụ kiện<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>', NULL, 1, '2021-09-28 04:17:08', '2021-09-28 04:17:08'),
(11, 'Thanh thiếu niên (6-12) _ trẻ Nam', 3, 'Thanh thiếu niên (8-16)', '<p>Thanh thiếu ni&ecirc;n (8-16)</p>', NULL, 1, '2021-10-02 07:03:18', '2021-10-02 09:37:46'),
(14, 'Thanh thiếu niên (6-12) _ trẻ Nữ', 3, 'Thanh thiếu niên (8-16) _ trẻ Nữ', '<p>Thanh thiếu ni&ecirc;n (8-16) _ trẻ Nữ</p>', NULL, 1, '2021-10-02 07:28:51', '2021-10-02 20:18:29'),
(15, 'Trẻ em (3-6) _ trẻ Nam', 3, 'Trẻ em (4-8) _ trẻ Nam', '<p>Trẻ em (4-8) _ trẻ Nam</p>', NULL, 1, '2021-10-02 07:29:28', '2021-10-02 20:18:46'),
(16, 'Trẻ em (3-6) _ trẻ Nữ', 3, 'Trẻ em (4-8) _ trẻ Nữ', '<p>Trẻ em (4-8) _ trẻ Nữ</p>', NULL, 1, '2021-10-02 07:29:52', '2021-10-02 20:18:58'),
(17, 'Trẻ nhỏ & trẻ mới biết đi (1-3) _ tre Nam', 3, 'Trẻ nhỏ & trẻ mới biết đi (1-4) _ tre Nam', '<p>Trẻ nhỏ &amp; trẻ mới biết đi (1-4) _ tre Nam</p>', NULL, 1, '2021-10-02 07:30:41', '2021-10-02 20:19:07'),
(18, 'Trẻ nhỏ & trẻ mới biết đi (1-3) _ tre Nữ', 3, 'Trẻ nhỏ & trẻ mới biết đi (1-4) _ tre Nữ', '<p>Trẻ nhỏ &amp; trẻ mới biết đi (1-4) _ tre Nữ</p>', NULL, 1, '2021-10-02 07:30:55', '2021-10-02 20:19:16');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_27_154538_create_menus_table', 2),
(6, '2021_09_28_162047_create_nhanhieus_table', 3),
(7, '2021_09_28_163712_create_colors_table', 4),
(8, '2021_09_28_163816_create_sizes_table', 4),
(12, '2021_09_28_172102_create_products_table', 5),
(13, '2021_10_02_070807_create_theloais_table', 6),
(14, '2021_10_04_093613_create_mail_t_t_s_table', 7),
(15, '2021_10_23_064922_create_blogs_table', 8),
(16, '2021_11_02_095148_create_gio_hangs_table', 9),
(17, '2021_11_05_041942_create_yeuthiches_table', 10),
(18, '2021_11_09_120306_create_daichi_k_h_s_table', 11),
(19, '2021_11_15_031157_create_xac_nhan_d_h_s_table', 12),
(20, '2021_11_15_093812_create_donmuas_table', 12),
(21, '2021_11_15_143854_create_thongbaos_table', 13),
(22, '2021_11_17_133724_create_hdahuys_table', 14),
(23, '2021_11_20_025948_create_layhangs_table', 15),
(24, '2021_11_22_150045_create_danggiaos_table', 16),
(27, '2021_11_22_162058_create_danhans_table', 19),
(28, '2021_11_25_145049_create_binhluan_blogs_table', 20),
(29, '2021_11_25_155912_create_binhluan_sanphams_table', 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanhieus`
--

CREATE TABLE `nhanhieus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanhieus`
--

INSERT INTO `nhanhieus` (`id`, `name`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'NIKE', '/storage/uploads/2021/09/30/nike.png', '2021-09-30 09:14:57', '2021-09-30 09:14:57'),
(2, 'ADIDAS', '/storage/uploads/2021/09/30/ADIDAS.png', '2021-09-30 09:18:02', '2021-09-30 09:18:02'),
(3, 'PUMA', '/storage/uploads/2021/09/30/PUMA.png', '2021-09-30 09:18:47', '2021-09-30 09:18:47'),
(4, 'CONVERSE', '/storage/uploads/2021/09/30/CONVERSE.png', '2021-09-30 09:19:47', '2021-09-30 09:19:47'),
(5, 'SUPREME', '/storage/uploads/2021/09/30/SUPREME.png', '2021-09-30 09:25:55', '2021-09-30 09:25:55'),
(6, 'BALENCIAGA', '/storage/uploads/2021/09/30/BALENCIAGA.jpg', '2021-09-30 09:28:53', '2021-09-30 09:28:53'),
(7, 'NEW_BALANCE', '/storage/uploads/2021/09/30/NEW_BALANCE.png', '2021-09-30 09:30:26', '2021-09-30 09:30:26'),
(8, 'VANS', '/storage/uploads/2021/09/30/VANS.jpg', '2021-09-30 09:33:28', '2021-09-30 09:33:28'),
(9, 'CHRISTIAN_LOUBOUTIN', '/storage/uploads/2021/09/30/CHRISTIAN_LOUBOUTIN.gif', '2021-09-30 09:35:11', '2021-09-30 09:35:11'),
(10, 'VALENTINO', '/storage/uploads/2021/09/30/VALENTINO.jpg', '2021-09-30 09:36:36', '2021-09-30 09:36:36'),
(11, 'JIMMY_CHOO', '/storage/uploads/2021/09/30/JIMMY_CHOO.png', '2021-09-30 09:41:11', '2021-09-30 09:41:11'),
(12, 'MANOLO_BLAHNIK', '/storage/uploads/2021/09/30/MANOLO_BLAHNIK.jpg', '2021-09-30 09:44:45', '2021-09-30 09:44:45'),
(13, 'MIZUNO', '/storage/uploads/2021/09/30/MIZUNO.png', '2021-09-30 09:48:11', '2021-09-30 09:48:11'),
(14, 'REEBOK', '/storage/uploads/2021/09/30/REEBOK.jpg', '2021-09-30 09:50:07', '2021-09-30 09:50:07'),
(15, 'BITIS', '/storage/uploads/2021/09/30/BITIS.png', '2021-09-30 09:51:42', '2021-09-30 09:51:42'),
(16, 'VINA_GIAY', '/storage/uploads/2021/09/30/VINA_GIAY.jpg', '2021-09-30 09:52:47', '2021-09-30 09:52:47');

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
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_name1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theloai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` int(11) NOT NULL,
  `money_sale` int(11) NOT NULL,
  `nhanhieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dattrung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `anh1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `menu_name1`, `theloai`, `money`, `money_sale`, `nhanhieu`, `size1`, `size2`, `size3`, `size4`, `size5`, `size6`, `dattrung`, `content`, `active`, `anh1`, `anh2`, `anh3`, `anh4`, `anh5`, `anh6`, `anh7`, `anh8`, `anh9`, `anh10`, `created_at`, `updated_at`) VALUES
(12, 'Nike React Infinity Run FK 2 Be True', 'Nam', 'thể thao', 4699000, 0, 'NIKE', '37', '38', NULL, NULL, NULL, '43', 'Màu sắc hiển thị: Đen\r\nPhong cách: DD6790-001', '<p>Bộ sưu tập Be True năm nay t&ocirc;n vinh niềm tự h&agrave;o bằng c&aacute;ch t&ocirc;n vinh cộng đồng LGBTQIA + tr&ecirc;n to&agrave;n thế giới. M&agrave;u sắc tạo n&ecirc;n một tuy&ecirc;n bố l&acirc;u d&agrave;i. Bạn muốn nhiều hơn nữa? H&atilde;y nhấp v&agrave;o li&ecirc;n kết Chi tiết Sản phẩm để biết một ch&uacute;t lịch sử về mỗi l&aacute; cờ.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-01 234625.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-01 234558.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-01 234540.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-01 234522.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-01 234640.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-01 234709.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-01 234722.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-01 234744.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-01 234823.png', NULL, '2021-10-01 20:27:23', '2021-10-01 20:27:23'),
(13, 'Nike Air Max Pre-Day Be True', 'Nam', 'thể thao', 3829000, 0, 'NIKE', NULL, '41', '42', '43', '44', '45', 'Màu sắc hiển thị: Neptune Blue\r\nPhong cách: DD3025-400', '<p>Bộ sưu tập Be True năm nay thể hiện niềm tự h&agrave;o bằng c&aacute;ch t&ocirc;n vinh cộng đồng LGBTQIA + tr&ecirc;n to&agrave;n thế giới. M&agrave;u sắc tạo n&ecirc;n một tuy&ecirc;n bố l&acirc;u d&agrave;i. Bạn muốn nhiều hơn nữa? H&atilde;y xem Chi tiết sản phẩm để biết một ch&uacute;t lịch sử về mỗi l&aacute; cờ.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 000044.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 000025.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 000012.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-01 235952.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 000100.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 000115.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 000130.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 000149.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 000210.png', NULL, '2021-10-01 20:32:50', '2021-10-01 20:32:50'),
(14, 'Nike Retro GTS', 'Nam', 'thể thao', 1909000, 0, 'NIKE', '42', '43', '44', '45', '46', '47', 'Màu sắc hiển thị: Gym Red / Black / Matte Aluminium / White\r\nPhong cách: DA1446-600', '<p>Kh&ocirc;ng cần rườm r&agrave; khi bạn l&agrave; người cổ điển. Thiết kế được cập nhật với đế thoải m&aacute;i, logo th&ecirc;u v&agrave; khoen kim loại. Đặc trưng với phần tr&ecirc;n bằng vải canvas v&agrave; đế cao su cứng với m&ocirc; h&igrave;nh lực k&eacute;o xương c&aacute; di sản, n&oacute; cho ph&eacute;p bạn quay đầu m&agrave; kh&ocirc;ng cần cố gắng.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 103930.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 001139.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 001046.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 001005.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 001022.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 001117.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 001159.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 001220.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 001239.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 001259.png', '2021-10-01 20:41:32', '2021-10-01 20:41:32'),
(15, 'Jordan Air NFH \'Bayou Boys\'', 'Nam', 'thể thao', 328300, 0, 'NIKE', '41', '42', '43', '45', '46', '47', 'Màu sắc hiển thị: Nhiều màu / Đen / Trắng / Xanh carbon\r\nPhong cách: DM3263-900', '<p>Jordan Air NFH linh hoạt kh&ocirc;ng phải để đeo v&ograve;ng, nhưng kiểu d&aacute;ng v&agrave; cảm gi&aacute;c của n&oacute; l&agrave; minh chứng cho tầm ảnh hưởng to lớn của tr&ograve; chơi đối với văn h&oacute;a gi&agrave;y thể thao v&agrave; thời trang dạo phố.&nbsp;C&aacute;c chi tiết b&oacute;ng rổ cổ điển như đệm kh&iacute; c&oacute; thể nh&igrave;n thấy, lớp phủ được kh&acirc;u v&agrave; lực k&eacute;o xương c&aacute; tương phản với c&aacute;c chất liệu, kết cấu đa dạng v&agrave; sự rung cảm của thiết bị kỹ thuật.&nbsp;Phi&ecirc;n bản camo &#39;Bayou Boys&#39; n&agrave;y được lấy cảm hứng từ m&agrave;u xanh l&aacute; c&acirc;y đầm lầy của một trong những đ&ocirc;i gi&agrave;y tr&ograve; chơi của Zion.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 001903.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 001848.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 001834.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 001820.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 001915.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 001931.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 001945.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 002003.png', NULL, NULL, '2021-10-01 20:46:09', '2021-10-01 20:46:09'),
(16, 'Nike Air Max Impact 3', 'Nam', 'thể thao', 2649000, 0, 'NIKE', '47.5', '47', '46', '45.5', '45', '44', 'Màu sắc hiển thị: Trắng / đen\r\nPhong cách: DC3725-100', '<p>G&acirc;y ảnh hưởng đến trận đấu ở cả hai đầu s&acirc;n trong Nike Air Max Impact 3. Thử th&aacute;ch d&agrave;nh cho những người chơi tạo ra sự t&aacute;ch biệt với phương thẳng đứng của họ, n&oacute; c&oacute; đệm Max Air đ&atilde; được thử nghiệm &aacute;p lực để gi&uacute;p hấp thụ lực va chạm. v&agrave; sự ổn định.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 091838.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 091824.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 091811.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 091757.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 091851.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 091907.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 091923.png', NULL, NULL, NULL, '2021-10-01 20:49:33', '2021-10-01 20:49:33'),
(17, 'Zion 1 PF', 'Nam', 'thể thao', 3519000, 2818000, 'NIKE', '40', '41', '42', '42.5', '43', '43.5', 'Màu sắc hiển thị: Đen / Trắng / Đỏ thẫm\r\nPhong cách: DA3129-006', '<p>Với một t&iacute;nh c&aacute;ch b&igrave;nh thường v&agrave; những khả năng vượt ra ngo&agrave;i thế giới n&agrave;y, Zion kh&ocirc;ng giống bất kỳ ai kh&aacute;c. d&ograve;ng chữ k&yacute; với thiết kế lấy cảm hứng từ t&iacute;nh khi&ecirc;m tốn v&agrave; khả năng si&ecirc;u ph&agrave;m của anh ấy. Đệm Air Strobel c&oacute; chiều d&agrave;i ho&agrave;n chỉnh được xếp chồng l&ecirc;n nhau với bộ phận Zoom Air ở b&agrave;n ch&acirc;n trước &mdash; một sự kết hợp th&uacute; vị giữa sự thoải m&aacute;i dưới ch&acirc;n sang trọng v&agrave; khả năng phản hồi nhanh. Nhẹ, ổn định v&agrave; mạnh mẽ, với lực k&eacute;o mạnh mẽ gi&uacute;p Zion b&aacute;m s&acirc;n v&agrave; kiểm so&aacute;t sức mạnh của m&igrave;nh. Phi&ecirc;n bản PF n&agrave;y sử dụng đế ngo&agrave;i si&ecirc;u bền được thiết kế cho c&aacute;c s&acirc;n ngo&agrave;i trời.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 105700.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 105741.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 105801.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 105815.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 105838.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 105936.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 110000.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 110023.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 110040.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 110125.png', '2021-10-01 21:02:21', '2021-10-01 21:02:21'),
(18, 'PG 5 EP', 'Nam', 'thể thao', 3239000, 0, 'NIKE', '41', '42', '42.5', '44', NULL, NULL, 'Màu sắc hiển thị: Màu xanh lá cây phát sáng\r\nPhong cách: CW3146-301', '<p>Paul George c&oacute; một trận đấu mượt m&agrave; v&agrave; ổn định một c&aacute;ch dễ d&agrave;ng. Hồ sơ Paul th&iacute;ch với đệm Nike Air Dot Weld Strobel linh hoạt. Bộ phận Air c&oacute; chiều d&agrave;i đầy đủ được kh&acirc;u trực tiếp v&agrave;o phần tr&ecirc;n, mang lại phần đệm sang trọng v&agrave; nảy ngay dưới ch&acirc;n &mdash; ho&agrave;n hảo để giữ cho PG cảm gi&aacute;c như đang di chuyển tr&ecirc;n m&acirc;y. phi&ecirc;n bản sử dụng đế ngo&agrave;i si&ecirc;u bền, l&yacute; tưởng cho c&aacute;c s&acirc;n ngo&agrave;i trời.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 111421.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 111449.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 111523.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 111538.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 111621.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 111652.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 111707.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 111723.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 111739.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 111802.png', '2021-10-01 21:18:58', '2021-10-01 21:18:58'),
(19, 'Nike Blazer Mid \'77 Vintage', 'Nam', 'thể thao', 2949000, 0, 'NIKE', '44', '44.5', '45', NULL, NULL, '46', 'Màu sắc hiển thị: Trắng / Trắng / Cánh buồm / Đội đỏ\r\nPhong cách: BQ6806-111', '<p>V&agrave;o những năm 70, Nike l&agrave; h&atilde;ng gi&agrave;y mới tr&ecirc;n khối.&nbsp;Thực tế l&agrave; rất mới mẻ, ch&uacute;ng t&ocirc;i vẫn đang th&acirc;m nhập v&agrave;o bối cảnh b&oacute;ng rổ v&agrave; thử nghiệm c&aacute;c nguy&ecirc;n mẫu tr&ecirc;n ch&acirc;n của đội địa phương của ch&uacute;ng t&ocirc;i.&nbsp;Tất nhi&ecirc;n, thiết kế đ&atilde; được cải thiện trong những năm qua, nhưng c&aacute;i t&ecirc;n vẫn bị mắc kẹt.&nbsp;Nike Blazer Mid &#39;77 Vintage - cổ điển ngay từ đầu.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 131313.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 131353.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 131445.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 131257.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 131513.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 131546.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 131600.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 132012.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 132031.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 132054.png', '2021-10-01 23:21:15', '2021-10-01 23:21:15'),
(20, 'Nike Air Zoom Alphafly NEXT%', 'Nam', 'thể thao', 8059000, 0, 'NIKE', '40', '40.5', '42', '42.5', '43', '44', 'Màu sắc hiển thị: Barely Volt / Hyper Orange / Dynamic Turquoise / Black\r\nPhong cách: CI9925-700', '<p>Chuẩn bị cho những điều tốt nhất tiếp theo của bạn với Nike Air Zoom Alphafly NEXT%. Bọt phản hồi được kết hợp với 2 đơn vị Zoom Air để th&uacute;c đẩy tr&ograve; chơi chạy bộ của bạn tiến l&ecirc;n cho cuộc đua marathon hoặc đường trường tiếp theo của bạn.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 132522.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 132459.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 132542.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 132559.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 132611.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 132705.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 132735.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 132751.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 132838.png', NULL, '2021-10-01 23:29:06', '2021-10-01 23:29:06'),
(22, 'Nike Zoom Mamba V', 'Nam', 'Thể thao', 3649000, 0, 'NIKE', '40', '40.5', '41', '42', '42.5', '43', 'Màu sắc được hiển thị: Barely Volt / Dynamic Turquoise / Photon Dust / Hyper Orange\r\nPhong cách: AJ1697-700', '<p><font style=\"vertical-align:inherit\"><font style=\"vertical-align:inherit\">Được thiết kế đặc biệt cho việc leo dốc, Nike Zoom Mamba V mang lại hiệu lực v&agrave; sự ph&ugrave; hợp an to&agrave;n trong điều kiện ẩm ướt.</font></font></p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 144052.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 144107.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 144119.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 144131.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 144149.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 144204.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 144216.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 144231.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 144246.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 144309.png', '2021-10-02 00:44:39', '2021-10-02 00:44:39'),
(23, 'Nike Revolution 6', 'Nam', 'Thể thao', 1759000, 0, 'NIKE', '47.5', '46', '45.5', '45', '44', '43', 'Màu sắc hiển thị: Đen / Xám khói đậm / Đen\r\nPhong cách: DC3728-001', '<p>Đ&acirc;y l&agrave; khởi đầu mới giữa bạn v&agrave; đường băng. H&atilde;y thắt d&acirc;y 100% t&aacute;i chế v&agrave; thiết lập tốc độ khi bắt đầu h&agrave;nh tr&igrave;nh chạy của bạn với cảm gi&aacute;c sang trọng của Nike Revolution 6 Next Nature. v&igrave; vậy ch&uacute;ng t&ocirc;i đảm bảo rằng c&aacute;c bước của bạn được đệm v&agrave; linh hoạt để c&oacute; một chuyến đi nhẹ nh&agrave;ng.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 144740.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 144757.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 144832.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 144911.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 144944.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 144957.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 145009.png', NULL, NULL, NULL, '2021-10-02 00:50:47', '2021-10-02 00:50:47'),
(24, 'Nike React Infinity Run Flyknit 2', 'Nam', 'Thể thao', 4699000, 0, 'NIKE', '45', '44.5', '43', '42.5', '42', NULL, 'Màu sắc hiển thị: Tông màu bạch kim / Sương mù xám / Xanh ngọc động / Trắng\r\nPhong cách: CT2357-005', '<p>Nike React Infinity Run Flyknit 2 tiếp tục gi&uacute;p bạn tiếp tục chạy. N&oacute; vẫn l&agrave; một trong những đ&ocirc;i gi&agrave;y được thử nghiệm nhiều nhất của ch&uacute;ng t&ocirc;i, được thiết kế để gi&uacute;p bạn cảm nhận được khả năng xảy ra khi b&agrave;n ch&acirc;n của bạn chạm v&agrave;o mặt đường.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 145634.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 145648.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 145243.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 145800.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 145824.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 145855.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 145918.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 151715.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 151845.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 151756.png', '2021-10-02 01:21:02', '2021-10-02 01:21:02'),
(25, 'NikeCourt Legacy Canvas Mid', 'Nam', 'Đi chơi', 1909000, 0, 'NIKE', '40', '41', '42', '44', '44.5', '46', 'Màu sắc hiển thị: Trắng / Đội cam / Đen\r\nPhong cách: DD0162-100', '<p>T&ocirc;n vinh lịch sử bắt nguồn từ văn h&oacute;a quần vợt, NikeCourt Legacy Canvas Mid n&acirc;ng tầm cổ điển l&ecirc;n một tầm cao mới. N&oacute; được l&agrave;m từ vải bạt bền, đường kh&acirc;u di sản v&agrave; c&oacute; một dấu Swoosh lớn ở b&ecirc;n cạnh để gi&uacute;p l&agrave;m mới v&ograve;ng quay. th&ecirc;m một lớp thoải m&aacute;i.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 152919.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 152945.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 152931.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 153003.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 153021.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 153048.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 153059.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 153113.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 153127.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 153143.png', '2021-10-02 01:32:37', '2021-10-02 01:32:37'),
(26, 'Nike Air Force 1 Mid', 'Nam', 'Đi chơi', 3519000, 0, 'NIKE', '38.5', '39', '40', NULL, NULL, NULL, 'Màu sắc hiển thị: Xám lạnh / Bạc kim loại / Trắng\r\nPhong cách: DH5622-001', '<p><span style=\"font-size:16px\"><span style=\"color:#111111\"><span style=\"font-family:&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif\"><span style=\"background-color:#ffffff\">Air Force 1 Mid &#39;07 l&agrave; tất cả những g&igrave; bạn biết r&otilde; nhất: lớp phủ sắc n&eacute;t, chi tiết t&aacute;o bạo v&agrave; lượng đ&egrave;n flash ho&agrave;n hảo để tr&ograve; chơi gi&agrave;y của bạn tỏa s&aacute;ng. - thoải m&aacute;i b&oacute;ng đ&aacute;. trang tr&iacute; tr&ecirc;n ng&oacute;n ch&acirc;n gi&uacute;p giữ cho bạn m&aacute;t mẻ.</span></span></span></span></p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 153528.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 153540.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 153554.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 153604.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 153617.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 153628.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 153646.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 153657.png', NULL, NULL, '2021-10-02 01:37:47', '2021-10-02 01:37:47'),
(27, 'Nike Air Force 1 Shadow', 'Nữ', 'Đi chơi', 3239000, 0, 'NIKE', '35.5', '36', '37', '38', '39', '40', 'Màu sắc: Cashmere / Pure Violet / Pink Oxford / Pale Coral\r\nPhong cách: CI0919-700', '<p>Nike Air Force 1 Shadow mang một n&eacute;t ph&aacute; c&aacute;ch vui tươi tr&ecirc;n thiết kế b-ball cổ điển.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 161321.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 161239.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 161254.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 161306.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 153931.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 161332.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 161344.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 161355.png', NULL, NULL, '2021-10-02 02:14:38', '2021-10-02 02:15:28'),
(28, 'Nike Air Force 1 Shadow', 'Nữ', 'Đi chơi', 3239000, 0, 'NIKE', '44.5', '44', '43', '42', '41', '39', 'Màu sắc hiển thị: Trắng / Seafoam / Gypsy Rose\r\nPhong cách: CI0919-112', '<p>Nike Air Force 1 Shadow mang một n&eacute;t ph&aacute; c&aacute;ch vui tươi tr&ecirc;n thiết kế b-ball cổ điển.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 161739.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 161844.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 161856.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 161910.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 161921.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 161932.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 161946.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 162001.png', NULL, NULL, '2021-10-02 02:20:49', '2021-10-02 02:20:49'),
(29, 'Nike Air Force 1 Shadow', 'Nữ', 'Đi chơi', 3239000, 0, 'NIKE', '40', '41', '42', '44', '45', '45.5', 'Màu sắc hiển thị: Trắng đỉnh cao / Xanh sông băng / Hóa thạch / Bóng ma\r\nPhong cách: CI0919-106', '<p>Nike Air Force 1 Shadow mang một n&eacute;t ph&aacute; c&aacute;ch vui tươi tr&ecirc;n thiết kế b-ball cổ điển.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 162123.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 162136.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 162146.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 162159.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 162210.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 162220.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 162232.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 162242.png', NULL, NULL, '2021-10-02 02:24:54', '2021-10-02 02:24:54'),
(30, 'Nike Ace Summerlite', 'Nữ', 'Thể thao', 2929000, 0, 'NIKE', '36.5', '37', '37.5', '38', '39', '40', 'Màu sắc hiển thị: Đen / Trắng / Lựu / Vàng kim loại\r\nPhong cách: DC0101-001', '<p>Ch&uacute;ng t&ocirc;i đ&atilde; mang n&oacute; trở lại v&agrave; n&oacute; tốt hơn bao giờ hết.&nbsp;Nike Ace Summerlite cập nhật thiết kế lưới ban đầu với một lớp phủ mỏng, linh hoạt gi&uacute;p tr&aacute;nh c&aacute;c mảnh vụn.&nbsp;N&oacute; thậm ch&iacute; c&ograve;n c&oacute; một lớp l&oacute;t da lộn si&ecirc;u nhỏ mịn, rất thoải m&aacute;i m&agrave; bạn c&oacute; thể mặc m&agrave; kh&ocirc;ng cần tất.&nbsp;Th&ecirc;m v&agrave;o đ&oacute;, m&ocirc; h&igrave;nh lực k&eacute;o t&iacute;ch hợp mới giữ cho thiết kế nhẹ nhất c&oacute; thể - m&agrave; kh&ocirc;ng ảnh hưởng đến độ b&aacute;m.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 162746.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 162759.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 162841.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 162852.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 162904.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 162916.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 162936.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 162947.png', NULL, NULL, '2021-10-02 02:30:41', '2021-10-02 02:30:41'),
(31, 'Nike Air Max Bella TR 4', 'Nữ', 'Thể thao', 2349000, 0, 'NIKE', '36', '36.5', '37', '38.5', '39', '40', 'Màu sắc hiển thị: Trắng / Đỏ tươi / Hồng nhạt / Hồng men\r\nPhong cách: CW3398-105', '<p>Nike Air Max Bella TR 4 l&agrave; sự kết hợp giữa độ nảy v&agrave; vẻ đẹp của đệm Max Air với đế phẳng tạo lợi thế ổn định trong khi bạn n&acirc;ng v&agrave; đi&ecirc;u khắc với trọng lượng.&nbsp;Với thiết kế gi&agrave;y sneaker truyền thống hơn, bạn c&oacute; thể c&oacute; được một đ&ocirc;i gi&agrave;y vừa vặn.&nbsp;Hỗ trợ được cập nhật xung quanh c&aacute;c b&ecirc;n gi&uacute;p giữ ch&acirc;n của bạn an to&agrave;n trong qu&aacute; tr&igrave;nh tập luyện sức mạnh.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 163313.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 163327.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 163337.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 163350.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 163402.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 163414.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 163426.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 163436.png', NULL, NULL, '2021-10-02 02:35:29', '2021-10-02 02:35:29'),
(32, 'Nike Air Max Bella TR 4', 'Nữ', 'Thể thao', 2349000, 0, 'NIKE', '36.5', '37', '38.5', '39', '40', '41', 'Màu sắc hiển thị: Xám cao đẳng / San hô nhạt / Trắng / Trang sức kim loại\r\nPhong cách: CW3398-004', '<p>Nike Air Max Bella TR 4 l&agrave; sự kết hợp giữa độ nảy v&agrave; vẻ đẹp của đệm Max Air với đế phẳng tạo lợi thế ổn định trong khi bạn n&acirc;ng v&agrave; đi&ecirc;u khắc với trọng lượng.&nbsp;Với thiết kế gi&agrave;y sneaker truyền thống hơn, bạn c&oacute; thể c&oacute; được một đ&ocirc;i gi&agrave;y vừa vặn.&nbsp;Hỗ trợ được cập nhật xung quanh c&aacute;c b&ecirc;n gi&uacute;p giữ ch&acirc;n của bạn an to&agrave;n trong qu&aacute; tr&igrave;nh tập luyện sức mạnh.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 172202.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 172228.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 172239.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 172251.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 172302.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 172315.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 172328.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 172338.png', NULL, NULL, '2021-10-02 03:26:15', '2021-10-02 03:26:15'),
(33, 'Nike Air Max Bella TR 4', 'Nữ', 'Thể thao', 2349000, 0, 'NIKE', '44', '43', '42', '40', '39', '38', 'Màu sắc hiển thị: Xám cao đẳng / San hô nhạt / Trắng / Trang sức kim loại\r\nPhong cách: CW3398-004', '<p>Nike Air Max Bella TR 4 l&agrave; sự kết hợp giữa độ nảy v&agrave; vẻ đẹp của đệm Max Air với đế phẳng tạo lợi thế ổn định trong khi bạn n&acirc;ng v&agrave; đi&ecirc;u khắc với trọng lượng.&nbsp;Với thiết kế gi&agrave;y sneaker truyền thống hơn, bạn c&oacute; thể c&oacute; được một đ&ocirc;i gi&agrave;y vừa vặn.&nbsp;Hỗ trợ được cập nhật xung quanh c&aacute;c b&ecirc;n gi&uacute;p giữ ch&acirc;n của bạn an to&agrave;n trong qu&aacute; tr&igrave;nh tập luyện sức mạnh.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 172656.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 172709.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 172721.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 172721.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 172734.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 172745.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 172759.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 172810.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 172822.png', NULL, '2021-10-02 03:30:27', '2021-10-02 03:30:27'),
(34, 'Nike Air Max Bella TR 4', 'Nữ', 'Thể thao', 2349000, 0, 'NIKE', '34', '35', '36', '37', '38', '39', 'Màu sắc hiển thị: Xám cao đẳng / San hô nhạt / Trắng / Trang sức kim loại\r\nPhong cách: CW3398-004', '<p>Nike Air Max Bella TR 4 l&agrave; sự kết hợp giữa độ nảy v&agrave; vẻ đẹp của đệm Max Air với đế phẳng tạo lợi thế ổn định trong khi bạn n&acirc;ng v&agrave; đi&ecirc;u khắc với trọng lượng.&nbsp;Với thiết kế gi&agrave;y sneaker truyền thống hơn, bạn c&oacute; thể c&oacute; được một đ&ocirc;i gi&agrave;y vừa vặn.&nbsp;Hỗ trợ được cập nhật xung quanh c&aacute;c b&ecirc;n gi&uacute;p giữ ch&acirc;n của bạn an to&agrave;n trong qu&aacute; tr&igrave;nh tập luyện sức mạnh.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 173138.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 173152.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 173204.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 173216.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 173226.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 173237.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 173248.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 173301.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 173310.png', NULL, '2021-10-02 03:33:54', '2021-10-02 03:33:54'),
(35, 'Nike Revolution 6 FlyEase Next Nature', 'Nữ', 'Thể thao', 1759000, 0, 'NIKE', '36', '36.5', '37', '38', '39', '39.5', 'Màu sắc hiển thị: Đen / Xám sắt / Hồng siêu\r\nPhong cách: DC8997-002', '<p>Đ&acirc;y l&agrave; những khởi đầu mới giữa bạn v&agrave; đường băng. Đ&oacute; l&agrave; sự ph&aacute;t triển của một m&oacute;n đồ được y&ecirc;u th&iacute;ch, với thiết kế tho&aacute;ng kh&iacute; được l&agrave;m với &iacute;t nhất 20% th&agrave;nh phần t&aacute;i chế theo trọng lượng.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 173705.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 173717.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 173728.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 173810.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 173824.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 173839.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 173853.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 173904.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 173916.png', NULL, '2021-10-02 03:40:06', '2021-10-02 03:40:06'),
(36, 'NikeCourt Legacy', 'Nữ', 'Đi chơi', 1600000, 1280000, 'NIKE', '36.5', '37.5', '38', '38.5', '39', '40', 'Màu sắc hiển thị: Kem II / Đen / Trắng\r\nPhong cách: DB3970-201', '<p>T&ocirc;n vinh lịch sử bắt nguồn từ văn h&oacute;a quần vợt, NikeCourt Legacy Mule t&aacute;i tạo lại n&eacute;t cổ điển với thiết kế dễ sử dụng v&agrave; đế xốp thoải m&aacute;i. Được l&agrave;m từ vải bạt bền v&agrave; c&oacute; đường kh&acirc;u di sản v&agrave; thiết kế Swoosh cổ điển, n&oacute; cho ph&eacute;p bạn kết hợp giữa thể thao v&agrave; thời trang.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 174057.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 174110.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 174121.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 174147.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 174201.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 174212.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 174225.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 174237.png', NULL, NULL, '2021-10-02 03:45:17', '2021-10-02 03:45:17'),
(37, 'NikeCourt Legacy', 'Nữ', 'Đi chơi', 1609000, 0, 'NIKE', '36', '36.5', '37', '38', '39', '40', 'Màu sắc hiển thị: Vừa đủ xanh lá cây / Trắng / Trắng ngọc trai / Chỉ xanh lá cây\r\nPhong cách: DB3970-300', '<p>T&ocirc;n vinh lịch sử bắt nguồn từ văn h&oacute;a quần vợt, NikeCourt Legacy Mule t&aacute;i tạo lại n&eacute;t cổ điển với thiết kế dễ sử dụng v&agrave; đế xốp thoải m&aacute;i. Được l&agrave;m từ vải bạt bền v&agrave; c&oacute; đường kh&acirc;u di sản v&agrave; thiết kế Swoosh cổ điển, n&oacute; cho ph&eacute;p bạn kết hợp giữa thể thao v&agrave; thời trang.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 174700.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 174713.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 174815.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 174900.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 174923.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 174934.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 174944.png', NULL, NULL, NULL, '2021-10-02 03:50:34', '2021-10-02 03:50:34'),
(38, 'Nike Flex Plus', 'Thanh thiếu niên (8-16) _ trẻ Nữ', 'Đi chơi', 1399000, 0, 'NIKE', '29.5', '30', '31', '32', '33.5', NULL, 'Màu sắc hiển thị: Tím nhạt / Đỏ thẫm / Trắng\r\nPhong cách: CW7429-500', '<p>Về nh&atilde;n hiệu của bạn!&nbsp;Nike Flex Plus được thiết kế d&agrave;nh cho những đứa trẻ muốn chạy v&agrave; chơi cả ng&agrave;y.&nbsp;Với cảm gi&aacute;c linh hoạt, đệm si&ecirc;u mềm v&agrave; thiết kế trượt dễ d&agrave;ng (d&acirc;y buộc tạm biệt!), Ch&uacute;ng đ&atilde; sẵn s&agrave;ng để ph&oacute;ng to v&ograve;ng quanh s&acirc;n chơi.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 175441.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 175458.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 175509.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 175521.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 175531.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 175544.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 175556.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 175606.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 175623.png', NULL, '2021-10-02 03:57:09', '2021-10-02 07:35:09'),
(39, 'Nike Flex Plus', 'Thanh thiếu niên (8-16) _ trẻ Nam', 'Đi chơi', 1399000, 0, 'NIKE', '28.5', '29.5', '30', '31', '31.5', NULL, 'Màu sắc hiển thị: Hải quân nửa đêm / Xanh hoàng gia / Trắng / Cam\r\nPhong cách: CW7429-401', '<p>Về nh&atilde;n hiệu của bạn!&nbsp;Nike Flex Plus được thiết kế d&agrave;nh cho những đứa trẻ muốn chạy v&agrave; chơi cả ng&agrave;y.&nbsp;Với cảm gi&aacute;c linh hoạt, đệm si&ecirc;u mềm v&agrave; thiết kế trượt dễ d&agrave;ng (d&acirc;y buộc tạm biệt!), Ch&uacute;ng đ&atilde; sẵn s&agrave;ng để ph&oacute;ng to v&ograve;ng quanh s&acirc;n chơi.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 175855.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 175908.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 175923.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 175934.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 175950.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 180055.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 200247.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 200308.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 200321.png', NULL, '2021-10-02 06:03:38', '2021-10-02 07:34:53'),
(40, 'Nike Flex Plus', 'Trẻ em (3-6) _ trẻ Nam', 'Đi chơi', 1399000, 0, 'NIKE', '28', '28.5', '29', '30', '31', '31.5', 'Màu sắc hiển thị: Cave Purple / Lilac / Light Lemon Twist\r\nPhong cách: CW7429-501', '<p>Về nh&atilde;n hiệu của bạn!&nbsp;Nike Flex Plus được thiết kế d&agrave;nh cho những đứa trẻ muốn chạy v&agrave; chơi cả ng&agrave;y.&nbsp;Với cảm gi&aacute;c linh hoạt, đệm si&ecirc;u mềm v&agrave; thiết kế trượt dễ d&agrave;ng (d&acirc;y buộc tạm biệt!), Ch&uacute;ng đ&atilde; sẵn s&agrave;ng để ph&oacute;ng to v&ograve;ng quanh s&acirc;n chơi.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 200458.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 200512.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 200523.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 200537.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 200549.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 200603.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 200615.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 200627.png', NULL, NULL, '2021-10-02 06:07:07', '2021-10-02 09:40:15'),
(41, 'Nike Air VaporMax 2021 FK', 'Thanh thiếu niên (8-16) _ trẻ Nam', 'Đi chơi', 4589000, 3668000, 'NIKE', '35.5', '36', '36.5', '37', '38.5', NULL, 'Màu sắc hiển thị: Wolf Grey / White / Volt / Black\r\nPhong cách: DB1550-005', '<p>Được l&agrave;m với &iacute;t nhất 40% th&agrave;nh phần t&aacute;i chế theo trọng lượng, Nike Air VaporMax 2021 FK x&aacute;c định sự thoải m&aacute;i s&aacute;ng tạo. tương lai với ch&uacute;ng t&ocirc;i v&agrave; cảm nhận những rung cảm tốt đẹp.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 201017.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 201033.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 201101.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 201113.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 201126.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 201145.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 201157.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 201209.png', NULL, NULL, '2021-10-02 06:12:57', '2021-10-02 07:32:31'),
(42, 'Nike Air VaporMax 2021 FK', 'Thanh thiếu niên (8-16) _ trẻ Nam', 'Đi chơi', 4589000, 0, 'NIKE', '35.5', '36', '36.5', '37', '38', NULL, 'Màu sắc hiển thị: Đen / Đen / Anthracite / Đen\r\nPhong cách: DB1550-001', '<p>Được l&agrave;m với &iacute;t nhất 40% th&agrave;nh phần t&aacute;i chế theo trọng lượng, Nike Air VaporMax 2021 FK x&aacute;c định sự thoải m&aacute;i s&aacute;ng tạo. tương lai với ch&uacute;ng t&ocirc;i v&agrave; cảm nhận những rung cảm tốt đẹp.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 201546.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 201600.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 201619.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 201634.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 201645.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 201657.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 201708.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 201720.png', NULL, NULL, '2021-10-02 06:18:08', '2021-10-02 07:32:13'),
(43, 'SPEEDFLOW.3', 'Thanh thiếu niên (8-16) _ trẻ Nam', 'Thể thao', 1500000, 0, 'ADIDAS', '35', '35.5', '36', '37', '38', NULL, 'Có dây giày\r\n\r\n\r\nThân giày bằng vải lưới\r\n\r\n\r\nChất liệu co giãn bốn chiều\r\n\r\n\r\nĐế ngoài bằng cao su siêu nhẹ phù hợp với sân cỏ nhân tạo\r\n\r\n\r\nMàu sản phẩm: Red / Core Black / Solar Red\r\n\r\n\r\nMã sản phẩm: FY3321', '<h5>GI&Agrave;Y Đ&Aacute; B&Oacute;NG S&Acirc;N CỎ NH&Acirc;N TẠO X SPEEDFLOW.3</h5>\r\n\r\n<h5>Đ&Ocirc;I GI&Agrave;Y Đ&Aacute; B&Oacute;NG SI&Ecirc;U NHẸ D&Agrave;NH CHO PHI&Ecirc;N BẢN TỐC ĐỘ CỦA BẠN.</h5>\r\n\r\n<p>Tr&ecirc;n s&acirc;n tập, tốc độ l&agrave; một thế mạnh. Tr&ecirc;n s&acirc;n đấu, đ&oacute; l&agrave; yếu tố quyết định. Nhanh tr&iacute;. Nhanh ch&acirc;n. H&atilde;y kiếm t&igrave;m nhịp điệu của bạn v&agrave; bỏ lại mọi thứ ph&iacute;a sau. C&agrave;n qu&eacute;t tr&ecirc;n từng sải bước với đ&ocirc;i gi&agrave;y đ&aacute; b&oacute;ng thiếu ni&ecirc;n adidas X n&agrave;y. Th&acirc;n gi&agrave;y bằng vải lưới mềm mại gi&uacute;p bạn lu&ocirc;n thoải m&aacute;i khi b&ugrave;ng nổ sức mạnh chiến đấu. B&ecirc;n dưới l&agrave; đế ngo&agrave;i bằng cao su c&oacute; đinh gi&uacute;p bạn bứt tốc tr&ecirc;n mặt s&acirc;n cỏ nh&acirc;n tạo. Thiết kế &ocirc;m ch&acirc;n vừa vặn gi&uacute;p bạn vững v&agrave;ng trong c&aacute;c pha đổi hướng v&agrave; xoay người để lu&ocirc;n nhanh hơn một bước. Sản phẩm n&agrave;y c&oacute; sử dụng chất liệu t&aacute;i chế, l&agrave; một phần quyết t&acirc;m của ch&uacute;ng t&ocirc;i hướng tới chấm dứt r&aacute;c thải nhựa. 20% th&acirc;n gi&agrave;y l&agrave;m từ chất liệu c&oacute; chứa tối thiểu 50% th&agrave;nh phần t&aacute;i chế.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 213729.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 213754.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 213822.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 213838.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 213856.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 213910.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 213925.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 214241.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 214304.png', NULL, '2021-10-02 07:51:00', '2021-10-02 07:51:24'),
(44, 'GIÀY CHẠY BỘ QUAI DÁN DÂY CO GIÃN FORTARUN', 'Trẻ nhỏ & trẻ mới biết đi (1-3) _ tre Nam', 'Thể thao', 1150000, 0, 'ADIDAS', '17', '18', '19', '20', '21', '22', 'Dáng regular fit\r\nDây giày co giãn và quai dán\r\nThân giày bằng vải dệt\r\nLót giày OrthoLite®\r\nĐế giữa bằng chất liệu EVA công nghệ Cloudfoam\r\nĐế ngoài bằng cao su không lưu dấu\r\nLớp lót bằng vải dệt\r\nPrimegreen\r\nMàu sản phẩm: Cloud White / Cloud White / Core Black\r\nMã sản phẩm: GY7602', '<h5>GI&Agrave;Y CHẠY BỘ QUAI D&Aacute;N D&Acirc;Y CO GI&Atilde;N FORTARUN</h5>\r\n\r\n<h5>Đ&Ocirc;I GI&Agrave;Y CHẠY BỘ C&Oacute; D&Acirc;Y GI&Agrave;Y CO GI&Atilde;N V&Agrave; QUAI D&Aacute;N.</h5>\r\n\r\n<p>Chuẩn bị. Sẵn s&agrave;ng. Chạy th&ocirc;i. Đ&ocirc;i gi&agrave;y chạy bộ trẻ em adidas n&agrave;y c&oacute; lớp đệm Cloudfoam &ecirc;m &aacute;i gi&uacute;p b&eacute; lu&ocirc;n thoải m&aacute;i khi chạy hết tốc lực trong c&ocirc;ng vi&ecirc;n hay chạy đuổi bắt khắp khu phố. Trẻ nhỏ hiếu động thường mang gi&agrave;y kh&ocirc;ng ch&uacute;t ki&ecirc;ng d&egrave;, vậy n&ecirc;n gi&agrave;y c&oacute; đế ngo&agrave;i bền chắc chống m&agrave;i m&ograve;n. Sản phẩm n&agrave;y may bằng vải c&ocirc;ng nghệ Primegreen, thuộc d&ograve;ng chất liệu t&aacute;i chế hiệu năng cao. Th&acirc;n gi&agrave;y chứa 50% th&agrave;nh phần t&aacute;i chế.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 215216.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 215229.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 215243.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 215256.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 215322.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 215957.png', NULL, NULL, NULL, NULL, '2021-10-02 08:00:09', '2021-10-02 09:39:22'),
(45, 'GIÀY CHẠY BỘ QUAI DÁN DÂY CO GIÃN FORTARUN', 'Trẻ nhỏ & trẻ mới biết đi (1-3) _ tre Nam', 'Thể thao', 1150000, 977500, 'ADIDAS', '17', '18', '19', '20', NULL, NULL, 'Dáng regular fit\r\nDây giày co giãn và quai dán\r\nThân giày bằng vải dệt\r\nLót giày OrthoLite®\r\nĐế giữa bằng chất liệu EVA công nghệ Cloudfoam\r\nĐế ngoài bằng cao su không lưu dấu\r\nLớp lót bằng vải dệt\r\nPrimegreen\r\nMàu sản phẩm: Victory Blue / Cloud White / Focus Blue\r\nMã sản phẩm: GY7599', '<h5>GI&Agrave;Y CHẠY BỘ QUAI D&Aacute;N D&Acirc;Y CO GI&Atilde;N FORTARUN</h5>\r\n\r\n<h5>Đ&Ocirc;I GI&Agrave;Y CHẠY BỘ C&Oacute; D&Acirc;Y GI&Agrave;Y CO GI&Atilde;N V&Agrave; QUAI D&Aacute;N.</h5>\r\n\r\n<p>Chuẩn bị. Sẵn s&agrave;ng. Chạy th&ocirc;i. Đ&ocirc;i gi&agrave;y chạy bộ trẻ em adidas n&agrave;y c&oacute; lớp đệm Cloudfoam &ecirc;m &aacute;i gi&uacute;p b&eacute; lu&ocirc;n thoải m&aacute;i khi chạy hết tốc lực trong c&ocirc;ng vi&ecirc;n hay chạy đuổi bắt khắp khu phố. Trẻ nhỏ hiếu động thường mang gi&agrave;y kh&ocirc;ng ch&uacute;t ki&ecirc;ng d&egrave;, vậy n&ecirc;n gi&agrave;y c&oacute; đế ngo&agrave;i bền chắc chống m&agrave;i m&ograve;n. Sản phẩm n&agrave;y may bằng vải c&ocirc;ng nghệ Primegreen, thuộc d&ograve;ng chất liệu t&aacute;i chế hiệu năng cao. Th&acirc;n gi&agrave;y chứa 50% th&agrave;nh phần t&aacute;i chế.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 220052.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 220106.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 220120.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 220137.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 220151.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 220208.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 220223.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 220238.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 220254.png', NULL, '2021-10-02 08:06:23', '2021-10-02 09:39:08'),
(46, 'GIÀY CHẠY BỘ QUAI DÁN DÂY CO GIÃN FORTARUN', 'Trẻ em (3-6) _ trẻ Nam', 'Thể thao', 1150000, 0, 'ADIDAS', '24', '23', '22', '21', '20', '18', 'Dáng regular fit\r\nDây giày co giãn và quai dán\r\nThân giày bằng vải dệt\r\nLót giày OrthoLite®\r\nĐế giữa bằng chất liệu EVA công nghệ Cloudfoam\r\nĐế ngoài bằng cao su không lưu dấu\r\nLớp lót bằng vải dệt\r\nPrimegreen\r\nMàu sản phẩm: Core Black / Core Black / Core Black\r\nMã sản phẩm: GY7601', '<h5>GI&Agrave;Y CHẠY BỘ QUAI D&Aacute;N D&Acirc;Y CO GI&Atilde;N FORTARUN</h5>\r\n\r\n<h5>Đ&Ocirc;I GI&Agrave;Y CHẠY BỘ C&Oacute; D&Acirc;Y GI&Agrave;Y CO GI&Atilde;N V&Agrave; QUAI D&Aacute;N.</h5>\r\n\r\n<p>Chuẩn bị. Sẵn s&agrave;ng. Chạy th&ocirc;i. Đ&ocirc;i gi&agrave;y chạy bộ trẻ em adidas n&agrave;y c&oacute; lớp đệm Cloudfoam &ecirc;m &aacute;i gi&uacute;p b&eacute; lu&ocirc;n thoải m&aacute;i khi chạy hết tốc lực trong c&ocirc;ng vi&ecirc;n hay chạy đuổi bắt khắp khu phố. Trẻ nhỏ hiếu động thường mang gi&agrave;y kh&ocirc;ng ch&uacute;t ki&ecirc;ng d&egrave;, vậy n&ecirc;n gi&agrave;y c&oacute; đế ngo&agrave;i bền chắc chống m&agrave;i m&ograve;n. Sản phẩm n&agrave;y may bằng vải c&ocirc;ng nghệ Primegreen, thuộc d&ograve;ng chất liệu t&aacute;i chế hiệu năng cao. Th&acirc;n gi&agrave;y chứa 50% th&agrave;nh phần t&aacute;i chế.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 220830.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 220846.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 220858.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 220911.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 220923.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 220933.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 220947.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 221004.png', NULL, NULL, '2021-10-02 08:10:49', '2021-10-02 09:38:51'),
(47, 'GIÀY CHẠY BỘ QUAI DÁN DÂY CO GIÃN FORTARUN', 'Trẻ nhỏ & trẻ mới biết đi (1-3) _ tre Nam', 'Thể thao', 1500000, 977500, 'ADIDAS', '17', '19', '22', '23', NULL, NULL, 'Dáng regular fit\r\nDây giày co giãn và quai dán\r\nThân giày bằng vải dệt\r\nLót giày OrthoLite®\r\nĐế giữa bằng chất liệu EVA công nghệ Cloudfoam\r\nĐế ngoài bằng cao su không lưu dấu\r\nLớp lót bằng vải dệt\r\nPrimegreen\r\nMàu sản phẩm: Violet Tone / Cloud White / Active Purple\r\nMã sản phẩm: GZ0202', '<h5>GI&Agrave;Y CHẠY BỘ QUAI D&Aacute;N D&Acirc;Y CO GI&Atilde;N FORTARUN</h5>\r\n\r\n<h5>Đ&Ocirc;I GI&Agrave;Y CHẠY BỘ C&Oacute; D&Acirc;Y GI&Agrave;Y CO GI&Atilde;N V&Agrave; QUAI D&Aacute;N.</h5>\r\n\r\n<p>Chuẩn bị. Sẵn s&agrave;ng. Chạy th&ocirc;i. Đ&ocirc;i gi&agrave;y chạy bộ trẻ em adidas n&agrave;y c&oacute; lớp đệm Cloudfoam &ecirc;m &aacute;i gi&uacute;p b&eacute; lu&ocirc;n thoải m&aacute;i khi chạy hết tốc lực trong c&ocirc;ng vi&ecirc;n hay chạy đuổi bắt khắp khu phố. Trẻ nhỏ hiếu động thường mang gi&agrave;y kh&ocirc;ng ch&uacute;t ki&ecirc;ng d&egrave;, vậy n&ecirc;n gi&agrave;y c&oacute; đế ngo&agrave;i bền chắc chống m&agrave;i m&ograve;n. Sản phẩm n&agrave;y may bằng vải c&ocirc;ng nghệ Primegreen, thuộc d&ograve;ng chất liệu t&aacute;i chế hiệu năng cao. Th&acirc;n gi&agrave;y chứa 50% th&agrave;nh phần t&aacute;i chế.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 221236.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 221248.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 221306.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 221318.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 221336.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 221348.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 221406.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 221421.png', NULL, NULL, '2021-10-02 08:15:03', '2021-10-02 09:38:29'),
(48, 'GIÀY FORUM LOW', 'Trẻ nhỏ & trẻ mới biết đi (1-3) _ tre Nữ', 'Đi chơi', 1500000, 0, 'ADIDAS', '16', '17', '18', '19', '20', '21', 'Có quai dán\r\nThân giày bằng vải dệt với khăn chấm bi\r\nLót giày OrthoLite®\r\nĐế trong theo thang đo chiều dài Adifit\r\nĐế ngoài bằng cao su\r\nMàu sản phẩm: Cloud White / Cloud White / Light Pink\r\nMã sản phẩm: Q47376', '<h5>GI&Agrave;Y FORUM LOW</h5>\r\n\r\n<h5>Đ&Ocirc;I GI&Agrave;Y PHONG C&Aacute;CH B&Oacute;NG RỔ C&Oacute; KHĂN TRANG TR&Iacute; PH&Iacute;A TR&Ecirc;N.</h5>\r\n\r\n<p>Đ&ocirc;i khi b&eacute; muốn đội tất th&agrave;nh chiếc mũ hoặc mang gi&agrave;y th&agrave;nh găng tay. Thật may cho bạn, đ&ocirc;i gi&agrave;y adidas Forum Low n&agrave;y kết hợp nhiều phong c&aacute;ch cho b&eacute; thỏa sức chơi đ&ugrave;a. Đ&ocirc;i gi&agrave;y trainer phong c&aacute;ch b&oacute;ng rổ classic n&agrave;y được t&ocirc; điểm bằng một chiếc khăn chấm bi vui nhộn mang đến n&eacute;t biến tấu mới mẻ cho phong c&aacute;ch cổ điển. Vậy n&ecirc;n h&atilde;y cứ để b&eacute; tha hồ s&aacute;ng tạo v&agrave; vui chơi. Sản phẩm n&agrave;y c&oacute; sử dụng chất liệu t&aacute;i chế, l&agrave; một phần quyết t&acirc;m của ch&uacute;ng t&ocirc;i hướng tới chấm dứt r&aacute;c thải nhựa. 20% th&acirc;n gi&agrave;y l&agrave;m từ chất liệu c&oacute; chứa tối thiểu 50% th&agrave;nh phần t&aacute;i chế.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 231827.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 231842.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 232055.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 232123.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 232136.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 232149.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 232203.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 232217.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 232232.png', NULL, '2021-10-02 09:27:44', '2021-10-02 09:38:11');
INSERT INTO `products` (`id`, `name`, `menu_name1`, `theloai`, `money`, `money_sale`, `nhanhieu`, `size1`, `size2`, `size3`, `size4`, `size5`, `size6`, `dattrung`, `content`, `active`, `anh1`, `anh2`, `anh3`, `anh4`, `anh5`, `anh6`, `anh7`, `anh8`, `anh9`, `anh10`, `created_at`, `updated_at`) VALUES
(49, 'GIÀY ULTRABOOST 21', 'Trẻ nhỏ & trẻ mới biết đi (1-3) _ tre Nam', 'Đi chơi', 5000000, 0, 'ADIDAS', '19', '20', '21', '22', '23', '25', 'Vừa vặn như đi tất:: Vừa vặn như đi tất;\r\nCó dây giày:: Có dây giày ;\r\nThân giày:: vải dệt adidas Primeknit+;\r\nĐế giữa Boost:: Đế giữa Boost;\r\nLớp lót:: vải dệt;\r\nTrọng lượng:: 310 g (size UK 8.5);\r\nChênh lệch độ cao đế giữa:: 10 mm (gót giày: 24,2 mm / mũi giày: 14,2 mm);\r\nĐế ngoài:: bằng cao su Continental™ Rubber;\r\nPrimeblue:: Primeblue;\r\nMàu sản phẩm:: Wonder White / Carbon / Solar Red;\r\nMã sản phẩm:: S23869;', '<h5>GI&Agrave;Y ULTRABOOST 21</h5>\r\n\r\n<h5>N&Acirc;NG TẦM BUỔI CHẠY CỦA BẠN VỚI Đ&Ocirc;I GI&Agrave;Y ULTRABOOST 21 N&Agrave;Y.</h5>\r\n\r\n<p>Nỗ lực v&igrave; ch&iacute;nh bản th&acirc;n bạn. Đ&ocirc;i gi&agrave;y chạy bộ adidas Ultraboost 21 n&agrave;y gi&uacute;p mọi chuyện dễ d&agrave;ng hơn. Si&ecirc;u nhẹ nhưng vẫn giữ nguy&ecirc;n độ n&acirc;ng đỡ, th&acirc;n gi&agrave;y adidas Primeknit+ th&iacute;ch ứng theo h&igrave;nh d&aacute;ng b&agrave;n ch&acirc;n khi chuyển động. Lớp đệm Boost đ&agrave;n hồi cho cảm gi&aacute;c trợ lực như lời nhắc bạn lu&ocirc;n c&oacute; thể cố gắng th&ecirc;m một sải bước, một d&atilde;y phố hay thậm ch&iacute; hẳn một dặm. (Nhớ th&ecirc;m v&agrave;i b&agrave;i h&aacute;t v&agrave;o playlist chạy bộ. Biết đ&acirc;u bạn sẽ cần đến.)</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 234725.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 234739.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 234751.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 234805.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 234817.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 234830.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 234842.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 234900.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 234918.png', NULL, '2021-10-02 09:50:19', '2021-11-01 08:40:42'),
(50, 'GIÀY ULTRABOOST 21', 'Trẻ em (3-6) _ trẻ Nam', 'Đi chơi', 5000000, 0, 'ADIDAS', '25', '27', '28', '29', NULL, NULL, 'Vừa vặn như đi tất:: Vừa vặn như đi tất;\r\nCó dây giày:: Có dây giày ;\r\nThân giày:: vải dệt adidas Primeknit+;\r\nĐế giữa Boost:: Đế giữa Boost;\r\nLớp lót:: vải dệt;\r\nTrọng lượng:: 310 g (size UK 8.5);\r\nChênh lệch độ cao đế giữa:: 10 mm (gót giày: 24,2 mm / mũi giày: 14,2 mm);\r\nĐế ngoài:: bằng cao su Continental™ Rubber;\r\nPrimeblue:: Primeblue;\r\nMàu sản phẩm:: Wonder White / Carbon / Solar Red;\r\nMã sản phẩm:: S23869;', '<h5>GI&Agrave;Y ULTRABOOST 21</h5>\r\n\r\n<h5>N&Acirc;NG TẦM BUỔI CHẠY CỦA BẠN VỚI Đ&Ocirc;I GI&Agrave;Y ULTRABOOST 21 N&Agrave;Y.</h5>\r\n\r\n<p>Nỗ lực v&igrave; ch&iacute;nh bản th&acirc;n bạn. Đ&ocirc;i gi&agrave;y chạy bộ adidas Ultraboost 21 n&agrave;y gi&uacute;p mọi chuyện dễ d&agrave;ng hơn. Si&ecirc;u nhẹ nhưng vẫn giữ nguy&ecirc;n độ n&acirc;ng đỡ, th&acirc;n gi&agrave;y adidas Primeknit+ th&iacute;ch ứng theo h&igrave;nh d&aacute;ng b&agrave;n ch&acirc;n khi chuyển động. Lớp đệm Boost đ&agrave;n hồi cho cảm gi&aacute;c trợ lực như lời nhắc bạn lu&ocirc;n c&oacute; thể cố gắng th&ecirc;m một sải bước, một d&atilde;y phố hay thậm ch&iacute; hẳn một dặm. (Nhớ th&ecirc;m v&agrave;i b&agrave;i h&aacute;t v&agrave;o playlist chạy bộ. Biết đ&acirc;u bạn sẽ cần đến.)</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 234725.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 234739.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 234751.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 234805.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 234817.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 234830.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 234842.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 234900.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 234918.png', NULL, '2021-10-02 09:52:21', '2021-11-01 08:40:31'),
(51, 'GIÀY ULTRABOOST 21', 'Trẻ em (3-6) _ trẻ Nam', 'Đi chơi', 5000000, 0, 'ADIDAS', '26', '27', '28', '29', '30', '31', 'Vừa vặn như đi tất:: Vừa vặn như đi tất;\r\nCó dây giày:: Có dây giày ;\r\nThân giày:: vải dệt adidas Primeknit+;\r\nĐế giữa Boost:: Đế giữa Boost;\r\nLớp lót:: vải dệt;\r\nTrọng lượng:: 310 g (size UK 8.5);\r\nChênh lệch độ cao đế giữa:: 10 mm (gót giày: 24,2 mm / mũi giày: 14,2 mm);\r\nĐế ngoài:: bằng cao su Continental™ Rubber;\r\nPrimeblue:: Primeblue;\r\nMàu sản phẩm:: Wonder White / Carbon / Solar Red;\r\nMã sản phẩm:: S23869;', '<h5>GI&Agrave;Y ULTRABOOST 21</h5>\r\n\r\n<h5>N&Acirc;NG TẦM BUỔI CHẠY CỦA BẠN VỚI Đ&Ocirc;I GI&Agrave;Y ULTRABOOST 21 N&Agrave;Y.</h5>\r\n\r\n<p>Nỗ lực v&igrave; ch&iacute;nh bản th&acirc;n bạn. Đ&ocirc;i gi&agrave;y chạy bộ adidas Ultraboost 21 n&agrave;y gi&uacute;p mọi chuyện dễ d&agrave;ng hơn. Si&ecirc;u nhẹ nhưng vẫn giữ nguy&ecirc;n độ n&acirc;ng đỡ, th&acirc;n gi&agrave;y adidas Primeknit+ th&iacute;ch ứng theo h&igrave;nh d&aacute;ng b&agrave;n ch&acirc;n khi chuyển động. Lớp đệm Boost đ&agrave;n hồi cho cảm gi&aacute;c trợ lực như lời nhắc bạn lu&ocirc;n c&oacute; thể cố gắng th&ecirc;m một sải bước, một d&atilde;y phố hay thậm ch&iacute; hẳn một dặm. (Nhớ th&ecirc;m v&agrave;i b&agrave;i h&aacute;t v&agrave;o playlist chạy bộ. Biết đ&acirc;u bạn sẽ cần đến.) Sản phẩm n&agrave;y may bằng vải c&ocirc;ng nghệ Primeblue, chất liệu t&aacute;i chế hiệu năng cao c&oacute; sử dụng sợi Parley Ocean Plastic. 50% th&acirc;n gi&agrave;y l&agrave;m bằng vải dệt, 75% vải dệt bằng sợi Primeblue. Kh&ocirc;ng sử dụng polyester nguy&ecirc;n sinh.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-02 235417.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 235432.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 235447.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 235459.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 235512.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 235534.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 235546.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 235602.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-02 235615.png', NULL, '2021-10-02 09:58:17', '2021-11-01 08:40:16'),
(52, 'GIÀY RUN FALCON 2.0', 'Thanh thiếu niên (6-12) _ trẻ Nữ', 'Đi chơi', 5000000, 0, 'ADIDAS', '32', '33', '34.5', '35', '36', NULL, 'Dáng regular fit\r\nCó dây buộc\r\nThân giày bằng vải lưới ba lớp\r\nCảm giác siêu nhẹ, thoáng khí\r\nĐế giữa bằng chất liệu EVA\r\nGót giày không đường may tạo độ nâng đỡ\r\nĐế ngoài bền chắc\r\nMàu sản phẩm: Cloud White / Core Black / Solar Red\r\nMã sản phẩm: G58098', '<h5>GI&Agrave;Y RUN FALCON 2.0</h5>\r\n\r\n<h5>Đ&Ocirc;I GI&Agrave;Y SNEAKER VỪA CASUAL VỪA THỂ THAO CHO NHỊP SỐNG NĂNG ĐỘNG.</h5>\r\n\r\n<p>Khi mang đ&ocirc;i gi&agrave;y chạy bộ n&agrave;y, bạn sẵn s&agrave;ng hẹn h&ograve; cafe c&ugrave;ng b&egrave; bạn ngay cả khi đ&atilde; chạy một v&ograve;ng c&ocirc;ng vi&ecirc;n. Th&acirc;n gi&agrave;y bằng vải lưới si&ecirc;u tho&aacute;ng kh&iacute; mang đến cho bạn cảm gi&aacute;c thoải m&aacute;i suốt ng&agrave;y d&agrave;i. Đế ngo&agrave;i bằng cao su bền bỉ l&agrave; bệ đỡ vững chắc cho lịch tr&igrave;nh bận rộn của bạn.</p>', 1, '/storage/uploads/2021/10/02/Screenshot 2021-10-03 000244.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-03 000259.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-03 000312.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-03 000323.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-03 000336.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-03 000357.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-03 000410.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-03 000451.png', '/storage/uploads/2021/10/02/Screenshot 2021-10-03 000519.png', NULL, '2021-10-02 10:07:34', '2021-10-02 10:07:34'),
(53, 'Alphaboost Parley', 'Nam', 'Đi chơi', 1450000, 1350000, 'ADIDAS', '40.5', NULL, '41', '42.5', '43', '44', 'Mã: EF1162', '<h5>Đ&Ocirc;I GI&Agrave;Y CHẠY ĐƯỢC THIẾT KẾ ĐỂ TĂNG CƯỜNG TỐC ĐỘ,SỨC MẠNH V&Agrave; ĐỘ LINH HOẠT</h5>\r\n\r\n<p>Thiết kế d&agrave;nh cho vận động vi&ecirc;n, đ&ocirc;i gi&agrave;y chạy n&agrave;y v&ocirc; c&ugrave;ng l&yacute; tưởng cho việc r&egrave;n luyện thể lực v&agrave; tốc độ. Đệm k&eacute;p v&agrave; g&oacute;t cố định gi&uacute;p hộ trợ th&ecirc;m cho đế giữ để tăng t&iacute;nh linh hoạt khi chuyển động nhiều hướng. Vải tr&ecirc;n th&acirc;n gi&agrave;y nhẹ v&agrave; tho&aacute;ng kh&iacute; gi&uacute;p cho việc chạy của bạn trở n&ecirc;n trơn tru v&agrave; v&ocirc; c&ugrave;ng thoải m&aacute;i.</p>\r\n\r\n<p>Cam kết h&agrave;ng ch&iacute;nh h&atilde;ng 100% bao check bao test.</p>', 1, '/storage/uploads/2021/10/03/Screenshot 2021-10-03 090339.png', '/storage/uploads/2021/10/03/Screenshot 2021-10-03 090918.png', '/storage/uploads/2021/10/03/Screenshot 2021-10-03 090958.png', '/storage/uploads/2021/10/03/Screenshot 2021-10-03 091012.png', '/storage/uploads/2021/10/03/Screenshot 2021-10-03 091027.png', '/storage/uploads/2021/10/03/Screenshot 2021-10-03 091041.png', '/storage/uploads/2021/10/03/Screenshot 2021-10-03 091144.png', '/storage/uploads/2021/10/03/Screenshot 2021-10-03 091318.png', '/storage/uploads/2021/10/03/Screenshot 2021-10-03 091414.png', NULL, '2021-10-02 19:16:27', '2021-10-03 08:55:13'),
(55, 'Túi hộp đựng giày', 'Phụ kiện', 'Phụ kiện', 1019000, 0, 'NIKE', '0', NULL, NULL, NULL, NULL, NULL, 'Màu sắc hiển thị: Đen / Đen / Đỏ đại học\r\nPhong cách: DA7337-010', 'Bảo quản và mang theo những đôi giày của bạn thật phong cách với Túi hộp đựng giày Nike. Được làm bằng chất liệu bền, phần thân chính có hai biểu tượng lớn của Nike, dây đeo chéo có thể tháo rời và nắp hộp giày thật. Ở bên trong, một túi đàn hồi bên trong và túi lưới có khóa kéo giúp giữ thêm dây buộc và các vật dụng nhỏ khác được lưu trữ và ngăn nắp.', 1, '/storage/uploads/2021/10/27/Screenshot 2021-10-27 190109.png', '/storage/uploads/2021/10/27/Screenshot 2021-10-27 190128.png', '/storage/uploads/2021/10/27/Screenshot 2021-10-27 190144.png', '/storage/uploads/2021/10/27/Screenshot 2021-10-27 190157.png', '/storage/uploads/2021/10/27/Screenshot 2021-10-27 190211.png', '/storage/uploads/2021/10/27/Screenshot 2021-10-27 190222.png', '/storage/uploads/2021/10/27/Screenshot 2021-10-27 190238.png', '/storage/uploads/2021/10/27/Screenshot 2021-10-27 190250.png', '/storage/uploads/2021/10/27/Screenshot 2021-10-27 190306.png', NULL, '2021-10-27 05:07:59', '2021-10-27 06:22:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sizes`
--

INSERT INTO `sizes` (`id`, `size`, `created_at`, `updated_at`) VALUES
(1, '10', NULL, NULL),
(2, '11', NULL, NULL),
(3, '12', NULL, NULL),
(4, '13', NULL, NULL),
(5, '14', NULL, NULL),
(6, '15', NULL, NULL),
(7, '16', NULL, NULL),
(9, '17', NULL, NULL),
(10, '18', NULL, NULL),
(11, '19', NULL, NULL),
(12, '20', NULL, NULL),
(13, '21', NULL, NULL),
(14, '22', NULL, NULL),
(15, '23', NULL, NULL),
(16, '24', NULL, NULL),
(17, '25', NULL, NULL),
(18, '26', NULL, NULL),
(19, '27', NULL, NULL),
(20, '28', NULL, NULL),
(21, '29', NULL, NULL),
(22, '30', NULL, NULL),
(23, '31', NULL, NULL),
(24, '32', NULL, NULL),
(25, '33', NULL, NULL),
(26, '34', NULL, NULL),
(27, '35', NULL, NULL),
(28, '36', NULL, NULL),
(29, '37', NULL, NULL),
(30, '38', NULL, NULL),
(31, '39', NULL, NULL),
(32, '40', NULL, NULL),
(33, '41', NULL, NULL),
(34, '42', NULL, NULL),
(35, '43', NULL, NULL),
(36, '44', NULL, NULL),
(37, '45', NULL, NULL),
(38, '46', NULL, NULL),
(39, '47', NULL, NULL),
(40, '48', NULL, NULL),
(41, '49', NULL, NULL),
(42, '50', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloais`
--

CREATE TABLE `theloais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloais`
--

INSERT INTO `theloais` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Thể thao', NULL, NULL),
(2, 'Văn phòng', NULL, NULL),
(3, 'Đi chơi', NULL, NULL),
(4, 'Phụ kiện', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongbaos`
--

CREATE TABLE `thongbaos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idKH` int(11) NOT NULL,
  `idDM` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daxem` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongbaos`
--

INSERT INTO `thongbaos` (`id`, `idKH`, `idDM`, `tieude`, `noidung`, `daxem`, `created_at`, `updated_at`) VALUES
(6, 1, 'T3303HJFDV', 'Đơn hàng \"T3303HJFDV\" đã được hủy', '\"Đinh Lâm Nghĩa\" đã hủy đơn hàng \"T3303HJFDV\"', 'rồi', '2021-11-17 06:59:39', '2021-11-17 08:53:14'),
(7, 1, 'DMH49K9Y3F', 'Đơn hàng \"DMH49K9Y3F\" đã được hủy', '\"Đinh Lâm Nghĩa\" đã hủy đơn hàng \"DMH49K9Y3F\"', 'rồi', '2021-11-17 07:43:23', '2021-11-17 08:54:52'),
(8, 1, '5WCYSX3HDJ', 'Đơn hàng \"5WCYSX3HDJ\" đã được hủy', '\"Đinh Lâm Nghĩa\" đã hủy đơn hàng \"5WCYSX3HDJ\"', 'rồi', '2021-11-17 08:16:24', '2021-11-17 08:54:48'),
(9, 1, 'CMEOFJPRTD', 'Có đơn hàng đang chờ xác nhận', '\"Đinh Lâm Nghĩa\" đã khởi tạo đơn hàng có mã: \"CMEOFJPRTD\"', 'chưa', '2021-11-19 19:47:40', '2021-11-19 19:47:40'),
(10, 1, 'XICHPK4VFJ', 'Đơn hàng \"XICHPK4VFJ\" đã được hủy', '\"Đinh Lâm Nghĩa\" đã hủy đơn hàng \"XICHPK4VFJ\"', 'chưa', '2021-11-19 19:54:06', '2021-11-19 19:54:06'),
(11, 1, 'XR59BOWGZY', 'Có đơn hàng đang chờ xác nhận', '\"Đinh Lâm Nghĩa\" đã khởi tạo đơn hàng có mã: \"XR59BOWGZY\"', 'chưa', '2021-11-19 20:06:07', '2021-11-19 20:06:07'),
(12, 3, 'XR59BOWGZY', 'Đơn hàng \"XR59BOWGZY\" đã được xác nhận', 'Người gửi đang chuẩn bị đơn hàng. Vui lòng kiểm tra thời gian nhận hàng dự kiến trong phần chi tiết đơn hàng nhé!', 'chưa', '2021-11-21 20:39:00', '2021-11-21 20:39:00'),
(13, 3, 'WHEU0U26ZS', 'Đơn hàng \"WHEU0U26ZS\" đã được xác nhận', 'Người gửi đang chuẩn bị đơn hàng. Vui lòng kiểm tra thời gian nhận hàng dự kiến trong phần chi tiết đơn hàng nhé!', 'rồi', '2021-11-22 05:41:20', '2021-11-22 07:48:51'),
(14, 1, 'XR59BOWGZY', 'Đơn hàng \"XR59BOWGZY\" đã được hủy', '\"Đinh Lâm Nghĩa\" đã hủy đơn hàng \"XR59BOWGZY\"', 'chưa', '2021-11-22 06:43:11', '2021-11-22 06:43:11'),
(15, 3, 'WHEU0U26ZS', 'Đơn hàng \"WHEU0U26ZS\" đang vận chuyển!', 'Đơn hàng \"WHEU0U26ZS\" với mã vận chuyển đã được nhân viên giao cho đơn vị vận chuyển.', 'chưa', '2021-11-22 08:05:13', '2021-11-22 08:05:13'),
(16, 1, 'AHO4YPDJOY', 'Có đơn hàng đang chờ xác nhận', '\"Đinh Lâm Nghĩa\" đã khởi tạo đơn hàng có mã: \"AHO4YPDJOY\"', 'chưa', '2021-11-22 08:13:48', '2021-11-22 08:13:48'),
(17, 2, 'F9DYCV33BZ', 'Đơn hàng \"F9DYCV33BZ\" đã được xác nhận', 'Người gửi đang chuẩn bị đơn hàng. Vui lòng kiểm tra thời gian nhận hàng dự kiến trong phần chi tiết đơn hàng nhé!', 'chưa', '2021-11-22 08:14:04', '2021-11-22 08:14:04'),
(18, 3, 'CMEOFJPRTD', 'Đơn hàng \"CMEOFJPRTD\" đã được xác nhận', 'Người gửi đang chuẩn bị đơn hàng. Vui lòng kiểm tra thời gian nhận hàng dự kiến trong phần chi tiết đơn hàng nhé!', 'chưa', '2021-11-22 08:14:08', '2021-11-22 08:14:08'),
(19, 1, 'OVDPDF1PFR', 'Có đơn hàng đang chờ xác nhận', '\"Đinh Lâm Nghĩa\" đã khởi tạo đơn hàng có mã: \"OVDPDF1PFR\"', 'chưa', '2021-11-22 08:21:07', '2021-11-22 08:21:07'),
(20, 3, 'OVDPDF1PFR', 'Đơn hàng \"OVDPDF1PFR\" đã được xác nhận', 'Người gửi đang chuẩn bị đơn hàng. Vui lòng kiểm tra thời gian nhận hàng dự kiến trong phần chi tiết đơn hàng nhé!', 'chưa', '2021-11-22 08:25:18', '2021-11-22 08:25:18'),
(21, 3, 'OVDPDF1PFR', 'Đơn hàng \"OVDPDF1PFR\" đang vận chuyển!', 'Đơn hàng \"OVDPDF1PFR\" với mã vận chuyển đã được nhân viên giao cho đơn vị vận chuyển.', 'chưa', '2021-11-22 08:27:45', '2021-11-22 08:27:45'),
(24, 3, 'CMEOFJPRTD', 'Đơn hàng \"CMEOFJPRTD\" đang vận chuyển!', 'Đơn hàng \"CMEOFJPRTD\" với mã vận chuyển đã được nhân viên giao cho đơn vị vận chuyển.', 'chưa', '2021-11-22 09:32:55', '2021-11-22 09:32:55'),
(26, 1, 'XS1BNFOH2I', 'Có đơn hàng đang chờ xác nhận', '\"Đinh Lâm Nghĩa\" đã khởi tạo đơn hàng có mã: \"XS1BNFOH2I\"', 'chưa', '2021-11-22 09:41:09', '2021-11-22 09:41:09'),
(27, 3, 'XS1BNFOH2I', 'Đơn hàng \"XS1BNFOH2I\" đã được xác nhận', 'Người gửi đang chuẩn bị đơn hàng. Vui lòng kiểm tra thời gian nhận hàng dự kiến trong phần chi tiết đơn hàng nhé!', 'chưa', '2021-11-22 09:41:35', '2021-11-22 09:41:35'),
(28, 3, 'XS1BNFOH2I', 'Đơn hàng \"XS1BNFOH2I\" đang vận chuyển!', 'Đơn hàng \"XS1BNFOH2I\" với mã vận chuyển đã được nhân viên giao cho đơn vị vận chuyển.', 'chưa', '2021-11-22 09:41:41', '2021-11-22 09:41:41'),
(32, 1, 'OVBQLPEYGM', 'Có đơn hàng đang chờ xác nhận', '\"Đinh Lâm Nghĩa\" đã khởi tạo đơn hàng có mã: \"OVBQLPEYGM\"', 'chưa', '2021-11-23 05:51:57', '2021-11-23 05:51:57'),
(33, 3, 'AHO4YPDJOY', 'Đơn hàng \"AHO4YPDJOY\" đã được xác nhận', 'Người gửi đang chuẩn bị đơn hàng. Vui lòng kiểm tra thời gian nhận hàng dự kiến trong phần chi tiết đơn hàng nhé!', 'rồi', '2021-11-23 05:52:24', '2021-11-24 01:49:02'),
(34, 1, 'VDBSTCVAFV', 'Có đơn hàng đang chờ xác nhận', '\"Phạm Quốc Quyền\" đã khởi tạo đơn hàng có mã: \"VDBSTCVAFV\"', 'chưa', '2021-11-23 05:53:51', '2021-11-23 05:53:51'),
(35, 1, 'HL0ZCPVEWJ', 'Có đơn hàng đang chờ xác nhận', '\"Phạm Quốc Quyền\" đã khởi tạo đơn hàng có mã: \"HL0ZCPVEWJ\"', 'chưa', '2021-11-23 05:54:11', '2021-11-23 05:54:11'),
(36, 1, 'HAX2RFJTBE', 'Có đơn hàng đang chờ xác nhận', '\"Phạm Quốc Quyền\" đã khởi tạo đơn hàng có mã: \"HAX2RFJTBE\"', 'chưa', '2021-11-23 05:54:37', '2021-11-23 05:54:37'),
(37, 2, 'VDBSTCVAFV', 'Đơn hàng \"VDBSTCVAFV\" đã được xác nhận', 'Người gửi đang chuẩn bị đơn hàng. Vui lòng kiểm tra thời gian nhận hàng dự kiến trong phần chi tiết đơn hàng nhé!', 'chưa', '2021-11-23 05:55:02', '2021-11-23 05:55:02'),
(38, 2, 'HL0ZCPVEWJ', 'Đơn hàng \"HL0ZCPVEWJ\" đã được xác nhận', 'Người gửi đang chuẩn bị đơn hàng. Vui lòng kiểm tra thời gian nhận hàng dự kiến trong phần chi tiết đơn hàng nhé!', 'chưa', '2021-11-23 05:55:08', '2021-11-23 05:55:08'),
(39, 2, 'HAX2RFJTBE', 'Đơn hàng \"HAX2RFJTBE\" đã được xác nhận', 'Người gửi đang chuẩn bị đơn hàng. Vui lòng kiểm tra thời gian nhận hàng dự kiến trong phần chi tiết đơn hàng nhé!', 'chưa', '2021-11-23 05:55:13', '2021-11-23 05:55:13'),
(40, 1, 'HAX2RFJTBE', 'Đơn hàng \"HAX2RFJTBE\" đã được hủy', '\"Phạm Quốc Quyền\" đã hủy đơn hàng \"HAX2RFJTBE\"', 'chưa', '2021-11-23 05:55:32', '2021-11-23 05:55:32'),
(41, 2, 'VDBSTCVAFV', 'Đơn hàng \"VDBSTCVAFV\" đang vận chuyển!', 'Đơn hàng \"VDBSTCVAFV\" với mã vận chuyển đã được nhân viên giao cho đơn vị vận chuyển.', 'chưa', '2021-11-23 05:55:56', '2021-11-23 05:55:56'),
(42, 2, 'HL0ZCPVEWJ', 'Đơn hàng \"HL0ZCPVEWJ\" đang vận chuyển!', 'Đơn hàng \"HL0ZCPVEWJ\" với mã vận chuyển đã được nhân viên giao cho đơn vị vận chuyển.', 'chưa', '2021-11-23 05:56:04', '2021-11-23 05:56:04'),
(45, 1, 'LECVSEHD48', 'Có đơn hàng đang chờ xác nhận', '\"Đinh Lâm Nghĩa\" đã khởi tạo đơn hàng có mã: \"LECVSEHD48\"', 'chưa', '2021-11-23 05:58:09', '2021-11-23 05:58:09'),
(46, 3, 'LECVSEHD48', 'Đơn hàng \"LECVSEHD48\" đã được xác nhận', 'Người gửi đang chuẩn bị đơn hàng. Vui lòng kiểm tra thời gian nhận hàng dự kiến trong phần chi tiết đơn hàng nhé!', 'rồi', '2021-11-23 05:58:25', '2021-11-24 01:48:14'),
(47, 3, 'LECVSEHD48', 'Đơn hàng \"LECVSEHD48\" đang vận chuyển!', 'Đơn hàng \"LECVSEHD48\" với mã vận chuyển đã được nhân viên giao cho đơn vị vận chuyển.', 'rồi', '2021-11-23 05:58:36', '2021-11-24 01:48:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `avt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `giotinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaysinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `avt`, `name`, `email`, `email_verified_at`, `password`, `sdt`, `giotinh`, `ngaysinh`, `token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '/storage/uploads/2021/11/15/Screenshot 2021-11-13 102916.jpg', 'Admin_AllStore', 'allstore.da2.qn@gmail.com', NULL, '$2y$10$.0MHbcMp2dvT.5Jep2QJI.ZmD0LOJ1gTmno7x8RXJTMnMxMgr.uba', '', 'Nam', '', '', NULL, NULL, '2021-11-14 18:12:20'),
(2, '/storage/uploads/2021/11/13/quyen.jpg', 'Phạm Quốc Quyền', 'pqquyen.20it5@vku.udn.vn', NULL, '$2y$10$JYmWBkHiYPvUa96JdNuO4eZFADN7YIXiIZKmInEKp/1WqbtdsYIXW', '', 'Nam', '', '', NULL, '2021-10-29 09:15:40', '2021-11-13 07:35:38'),
(3, '/storage/uploads/2021/11/11/IMG_20211004_082410.jpg', 'Đinh Lâm Nghĩa', 'dlnghia.20it5@vku.udn.vn', NULL, '$2y$10$9x2Mkhgb4dmBxw9dkmD7Lubv4oWWbIn7YB1G43PIaPXe3BOv6uru2', '', 'Nam', '2002-05-18', 'MIYKHIYXPS', NULL, '2021-10-29 09:55:48', '2021-11-25 23:42:03'),
(4, NULL, 'phan tiến quân', 'ptquan.20it3@vku.udn.vn', NULL, '$2y$10$izPWkch6x75JodQDi6PzrutrxkTQ4dzvAYCEgD4JaBf7WL9K0Xsm2', '', NULL, NULL, '', NULL, '2021-11-03 08:45:58', '2021-11-03 08:45:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xac_nhan_d_h_s`
--

CREATE TABLE `xac_nhan_d_h_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idKH` int(11) NOT NULL,
  `idDMua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idDchi` int(11) NOT NULL,
  `loinhan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `xac_nhan_d_h_s`
--

INSERT INTO `xac_nhan_d_h_s` (`id`, `idKH`, `idDMua`, `idDchi`, `loinhan`, `created_at`, `updated_at`) VALUES
(3, 2, 'VDG6TWLKJY', 8, NULL, '2021-11-16 04:45:51', '2021-11-16 04:45:51'),
(39, 3, 'OVBQLPEYGM', 3, NULL, '2021-11-23 05:51:57', '2021-11-23 05:51:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `yeuthiches`
--

CREATE TABLE `yeuthiches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_KH` int(11) NOT NULL,
  `ID_SP` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `yeuthiches`
--

INSERT INTO `yeuthiches` (`id`, `ID_KH`, `ID_SP`, `created_at`, `updated_at`) VALUES
(1, 2, 27, '2021-11-04 23:59:20', '2021-11-04 23:59:20'),
(2, 2, 28, '2021-11-05 00:42:37', '2021-11-05 00:42:37'),
(14, 2, 51, '2021-11-05 19:35:05', '2021-11-05 19:35:05'),
(35, 3, 47, '2021-11-05 23:57:09', '2021-11-05 23:57:09'),
(40, 2, 53, '2021-11-06 01:47:08', '2021-11-06 01:47:08'),
(41, 3, 51, '2021-11-06 01:47:45', '2021-11-06 01:47:45'),
(48, 2, 52, '2021-11-06 06:40:23', '2021-11-06 06:40:23'),
(49, 2, 50, '2021-11-06 06:41:08', '2021-11-06 06:41:08'),
(53, 2, 48, '2021-11-06 06:43:52', '2021-11-06 06:43:52'),
(56, 2, 32, '2021-11-06 06:54:56', '2021-11-06 06:54:56'),
(57, 2, 31, '2021-11-06 06:56:35', '2021-11-06 06:56:35'),
(70, 3, 31, '2021-11-24 09:27:47', '2021-11-24 09:27:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `đanhans`
--

CREATE TABLE `đanhans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idKH` int(11) NOT NULL,
  `idDMua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idDchi` int(11) NOT NULL,
  `loinhan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan_blogs`
--
ALTER TABLE `binhluan_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan_sanphams`
--
ALTER TABLE `binhluan_sanphams`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `daichi_k_h_s`
--
ALTER TABLE `daichi_k_h_s`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danggiaos`
--
ALTER TABLE `danggiaos`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhans`
--
ALTER TABLE `danhans`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donmuas`
--
ALTER TABLE `donmuas`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `gio_hangs`
--
ALTER TABLE `gio_hangs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hdahuys`
--
ALTER TABLE `hdahuys`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `layhangs`
--
ALTER TABLE `layhangs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mail_t_t_s`
--
ALTER TABLE `mail_t_t_s`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhanhieus`
--
ALTER TABLE `nhanhieus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `theloais`
--
ALTER TABLE `theloais`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thongbaos`
--
ALTER TABLE `thongbaos`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `xac_nhan_d_h_s`
--
ALTER TABLE `xac_nhan_d_h_s`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `yeuthiches`
--
ALTER TABLE `yeuthiches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `đanhans`
--
ALTER TABLE `đanhans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan_blogs`
--
ALTER TABLE `binhluan_blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `binhluan_sanphams`
--
ALTER TABLE `binhluan_sanphams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `daichi_k_h_s`
--
ALTER TABLE `daichi_k_h_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `danggiaos`
--
ALTER TABLE `danggiaos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `danhans`
--
ALTER TABLE `danhans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `donmuas`
--
ALTER TABLE `donmuas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `gio_hangs`
--
ALTER TABLE `gio_hangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT cho bảng `hdahuys`
--
ALTER TABLE `hdahuys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `layhangs`
--
ALTER TABLE `layhangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `mail_t_t_s`
--
ALTER TABLE `mail_t_t_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `nhanhieus`
--
ALTER TABLE `nhanhieus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `theloais`
--
ALTER TABLE `theloais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `thongbaos`
--
ALTER TABLE `thongbaos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `xac_nhan_d_h_s`
--
ALTER TABLE `xac_nhan_d_h_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `yeuthiches`
--
ALTER TABLE `yeuthiches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `đanhans`
--
ALTER TABLE `đanhans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
