-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 08 Jul 2024 pada 15.19
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `core`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_menus`
--

CREATE TABLE `master_menus` (
  `id` varchar(5) NOT NULL,
  `controller` varchar(255) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `parent` varchar(255) NOT NULL,
  `order` tinyint(4) NOT NULL COMMENT 'list menu asc berdasarkan order',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 = non active, 1 = active',
  `created_by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_menus`
--

INSERT INTO `master_menus` (`id`, `controller`, `menu_name`, `icon`, `parent`, `order`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_at`) VALUES
('1', 'dashboard', 'Dashboard', 'fa fa-home', '0', 1, 1, 'SYSTEM', '2023-11-03 16:10:14', 'SYSTEM', '2024-06-03 08:37:50', NULL),
('2', 'master', 'Data Master', 'bi bi-database-fill-gear', '0', 8, 1, 'SYSTEM', '2024-01-06 10:52:25', 'SYSTEM', '2024-06-03 07:16:05', NULL),
('3', 'users', 'Users', 'fa fa-users', '2', 1, 1, 'SYSTEM', '2024-06-03 08:21:29', '', '2024-06-04 03:00:52', NULL),
('4', 'social_media', 'Social Media', 'fa fa-thumbs-up', '0', 4, 1, 'SYSTEM', '2024-07-08 12:42:24', '', '2024-07-08 12:44:50', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_users_access_menu`
--

CREATE TABLE `master_users_access_menu` (
  `id` char(45) NOT NULL,
  `master_menu_id` varchar(100) NOT NULL,
  `users_id` varchar(100) NOT NULL,
  `view` int(11) DEFAULT 0,
  `insert` int(11) DEFAULT 0,
  `update` int(11) DEFAULT 0,
  `delete` int(11) DEFAULT 0,
  `import` int(11) DEFAULT 0,
  `export` int(11) DEFAULT 0,
  `created_by` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(45) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` varchar(45) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_users_access_menu`
--

INSERT INTO `master_users_access_menu` (`id`, `master_menu_id`, `users_id`, `view`, `insert`, `update`, `delete`, `import`, `export`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`) VALUES
('20860649-5c1e-4651-a75a-23cb13fbd838', '1', '27', 1, 0, 0, 0, 0, 0, '2024-06-09 01:26:34', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
('4b52f342-00e6-44ae-b1cf-26e0618d4d05', '3', '1', 1, 1, 1, 1, 0, 0, '2024-06-07 08:37:09', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
('4b52f342-00e6-44ae-b1cf-26e0618d4d09', '1', '1', 1, 0, 0, 0, 0, 0, 'SYSTEM', '2024-06-09 09:37:29', NULL, NULL, NULL, NULL),
('93f8e9b5-5588-4e46-8656-aa5d946537a5', '4', '1', 1, 1, 1, 1, 0, 0, '2024-06-07 08:37:38', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `social_media`
--

CREATE TABLE `social_media` (
  `id` varchar(100) NOT NULL,
  `instagram_url` varchar(255) NOT NULL,
  `facebook_url` varchar(255) NOT NULL,
  `tiktok_url` varchar(255) NOT NULL,
  `youtube_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 = non active, 1 = active',
  `remember_token` varchar(255) NOT NULL COMMENT 'ketika pertama kali di create terisi oleh string password, ketika login di update ke generate session_id',
  `role_url` varchar(10) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `status`, `remember_token`, `role_url`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin Vzuu', 'admin@gmail.com', '$2y$10$t8VAjeykfQA3MKzvvSErb.33fJigAozepPSkZsiSNS5ldvc9CTGvG', 1, 'a7juBFPybVxGKodmfXt8vY2DlZSC5pWhkA4gczTsNi9QOM6nwqILU1R0eHJ3Er', 'admins', 'SYSTEM', '2023-11-03 16:10:14', 'N', '2024-07-08 12:21:38', NULL),
(25, 'admin2', 'admin2@gmail.com', '$2y$10$a.gNDHtBpd0DaNVHttd4YOegWalOxPA2587N9insVaIJMrbh41WR.', 0, 'cALlvfiMyVGwNHao1E5PRF0ItBh37Od4U9YJnXKD6SxsTQrpkZmgz8qeu2jCWb', '', '1', '2024-06-04 06:26:19', '1', '2024-06-05 04:32:57', NULL),
(26, 'ubahh dah', 'as@g.com', '$2y$10$WwCDdH8eJOEHkzbxJCz.JuoM9mYDZfGaIuIrce65i8Vz2qiHyUMRW', 1, '9oy5xlMkrPeSnNtIDXm2vA74KFY8TpbQ3uwzRj6dqcCEGZLsH0UfO1haVgJBWi', '', '1', '2024-06-06 02:50:59', '1', '2024-06-08 18:11:24', NULL),
(27, 'aaa', 'aa@gmail.com', '$2y$10$78TlP5cs4wFcWtwa0/hkxuQHOz7hc8ZD2e2PW/36JfJQOKsffCuIi', 1, 'wFVNeMQkiT1W6JZ2oKCB5hdHU4PqOjfb9rxAvRul8yaE0SzmDL7tIXGng3cYps', '', '1', '2024-06-08 18:26:34', '1', '2024-06-08 18:26:34', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_ms_companys`
--

CREATE TABLE `users_ms_companys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_code` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users_ms_companys`
--

INSERT INTO `users_ms_companys` (`id`, `company_code`, `company_name`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_at`) VALUES
(1, 'GCI', 'Admin', 1, 'SYSTEM', '2023-11-03 16:10:16', 'SYSTEM', '2023-11-03 16:46:35', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_ms_menus`
--

CREATE TABLE `users_ms_menus` (
  `id` varchar(5) NOT NULL,
  `controller` varchar(255) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `parent` varchar(255) NOT NULL,
  `order` tinyint(4) NOT NULL COMMENT 'list menu asc berdasarkan order',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 = non active, 1 = active',
  `device_type` int(11) NOT NULL DEFAULT 1,
  `created_by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users_ms_menus`
--

INSERT INTO `users_ms_menus` (`id`, `controller`, `menu_name`, `icon`, `parent`, `order`, `status`, `device_type`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_at`) VALUES
('A', 'dashboard', 'Dashboard', 'fonticon-house', '0', 1, 1, 1, 'SYSTEM', '2023-11-03 16:10:14', 'SYSTEM', '2023-11-03 16:10:14', NULL),
('B', 'authentications', 'Authentications', 'fonticon-password', '0', 9, 1, 1, 'SYSTEM', '2023-11-03 16:10:14', 'SYSTEM', '2023-11-03 16:10:21', NULL),
('B.1', 'users', 'Users', 'fonticon-house', 'B', 1, 1, 1, 'SYSTEM', '2023-11-03 16:10:14', 'SYSTEM', '2023-11-03 16:10:14', NULL),
('B.2', 'rolepermissions', 'Role & Permissions', 'fonticon-house', 'B', 2, 1, 1, 'SYSTEM', '2023-11-03 16:10:14', 'SYSTEM', '2023-11-03 16:10:14', NULL),
('C', 'master_date', 'Master Siswa', 'bi bi-people-fill', '0', 2, 1, 1, 'SYSTEM', '2023-11-03 16:10:14', 'SYSTEM', '2023-11-03 16:38:37', NULL),
('C.1', 'students', 'Data Siswa', 'bi bi-person-fill-add', 'C', 1, 1, 1, 'SYSTEM', '2023-11-03 16:10:14', 'SYSTEM', '2023-11-03 16:40:37', NULL),
('D', 'registration', 'Registrasi', 'bi bi-person-fill-add', '0', 3, 1, 1, '', '2023-11-09 03:53:54', '', '2023-11-09 03:53:54', NULL),
('D.1', 'registration_process', 'Registrasi', 'none', 'D', 1, 1, 1, '', '2023-11-09 03:53:54', '', '2023-11-09 03:53:54', NULL),
('E', 'master', 'Data Master', 'bi bi-database-fill-gear', '0', 4, 1, 1, 'SYSTEM', '2024-01-06 10:49:42', 'SYSTEM', '2024-01-06 10:49:42', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_ms_roles`
--

CREATE TABLE `users_ms_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_ms_companys_id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 = non active, 1 = active',
  `created_by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users_ms_roles`
--

INSERT INTO `users_ms_roles` (`id`, `users_ms_companys_id`, `role_name`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Administrator', 1, 'SYSTEM', '2023-11-03 16:10:16', 'SYSTEM', '2023-11-03 16:10:16', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `master_menus`
--
ALTER TABLE `master_menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_controller` (`controller`),
  ADD UNIQUE KEY `unique_menu_admins` (`menu_name`,`deleted_at`);

--
-- Indeks untuk tabel `master_users_access_menu`
--
ALTER TABLE `master_users_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_remember_token_unique` (`remember_token`),
  ADD UNIQUE KEY `admins_email_deleted_at_unique` (`email`,`deleted_at`);

--
-- Indeks untuk tabel `users_ms_companys`
--
ALTER TABLE `users_ms_companys`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_ms_companys_company_name_unique` (`company_name`);

--
-- Indeks untuk tabel `users_ms_menus`
--
ALTER TABLE `users_ms_menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_controller` (`controller`),
  ADD UNIQUE KEY `unique_menu_users` (`menu_name`,`deleted_at`);

--
-- Indeks untuk tabel `users_ms_roles`
--
ALTER TABLE `users_ms_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_ms_roles_unique` (`users_ms_companys_id`,`role_name`,`deleted_at`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `users_ms_companys`
--
ALTER TABLE `users_ms_companys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users_ms_roles`
--
ALTER TABLE `users_ms_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users_ms_roles`
--
ALTER TABLE `users_ms_roles`
  ADD CONSTRAINT `users_ms_roles_users_ms_companys_id_foreign` FOREIGN KEY (`users_ms_companys_id`) REFERENCES `users_ms_companys` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
