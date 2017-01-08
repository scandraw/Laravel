-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Jan 2017 pada 16.22
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datas`
--

CREATE TABLE `datas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_paket` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `harga_paket` int(11) NOT NULL,
  `isi_paket` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `datas`
--

INSERT INTO `datas` (`id`, `nama_paket`, `harga_paket`, `isi_paket`, `created_at`, `updated_at`) VALUES
(1, 'one day tour lembang', 500000, 'dusun bambu', '2017-01-05 13:40:00', '2017-01-05 13:40:00'),
(4, 'one day tour lembang', 500000, 'dusun bambu', '2017-01-05 13:43:32', '2017-01-05 13:43:32'),
(5, 'one day tour lembang', 500000, 'dusun bambu', '2017-01-05 13:44:06', '2017-01-05 13:44:06'),
(6, 'one day tour lembang', 560000, 'paket lmnb', '2017-01-05 13:44:33', '2017-01-05 13:44:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `holidays`
--

CREATE TABLE `holidays` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_paket` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `harga_paket` int(11) NOT NULL,
  `isi_paket` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `holidays`
--

INSERT INTO `holidays` (`id`, `nama_paket`, `harga_paket`, `isi_paket`, `created_at`, `updated_at`) VALUES
(8, 'one day tour lembang', 350000, 'Mengunjungi Gunung Tangkuban Perahu, Sari Ater Hot Spring Water, Floating Market Lembang / Dusun Bambu / De’Ranch / Farmhouse Lembang', '2017-01-06 09:52:53', '2017-01-08 05:19:54'),
(9, 'one day tour ciwidey', 400000, 'mengunjungi Kawah Putih,  Situ Patenggang dan perkebunan Teh Ciwalini, Gedung Sate, Gedung Merdeka, Alun-alun Bandung dan Jl. Braga untuk foto stop', '2017-01-07 15:45:12', '2017-01-08 05:20:05'),
(10, 'one day rafting', 300000, 'rafting', '2017-01-08 08:01:16', '2017-01-08 08:01:16'),
(12, 'one day tour cimahi', 250000, 'padalarang', '2017-01-08 08:17:45', '2017-01-08 08:17:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_01_01_020321_CreatePaketTable', 2),
(4, '2017_01_02_063119_create_table_categories', 3),
(5, '2017_01_02_144008_create_table_tours', 3),
(6, '2017_01_05_193539_CreateDataTable', 4),
(7, '2017_01_05_215702_CreateWisataTable', 5),
(8, '2017_01_05_220127_CreateHolidayTable', 6),
(9, '2017_01_06_172925_CreatePilihTable', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakets`
--

CREATE TABLE `pakets` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `isi_paket` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pakets`
--

INSERT INTO `pakets` (`id`, `nama`, `isi_paket`, `created_at`, `updated_at`) VALUES
(1, 'gghggh', NULL, '2017-01-02 11:37:41', '2017-01-02 11:37:41'),
(2, 'fadasdas', NULL, '2017-01-02 11:46:01', '2017-01-02 11:46:01'),
(3, 'one day tour bandung barat', NULL, '2017-01-02 13:30:59', '2017-01-02 13:30:59'),
(4, 'ONE DAY TOUR LEMBANG', NULL, '2017-01-02 15:04:13', '2017-01-02 15:04:13'),
(5, 'bandung', NULL, '2017-01-02 17:09:39', '2017-01-02 17:09:39'),
(6, 'majalnegka', NULL, '2017-01-02 18:48:15', '2017-01-02 18:48:15'),
(7, 'lembang', NULL, '2017-01-04 12:49:20', '2017-01-04 12:49:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pilihs`
--

CREATE TABLE `pilihs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `holiday_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pilihs`
--

INSERT INTO `pilihs` (`id`, `nama`, `holiday_id`, `tanggal`, `created_at`, `updated_at`) VALUES
(3, 'ina', 8, '2017-01-05', '2017-01-06 13:23:53', '2017-01-06 13:23:53'),
(4, 'inu', 8, '2017-01-18', '2017-01-06 13:29:54', '2017-01-06 13:29:54'),
(5, 'ana', 8, '2017-01-07', '2017-01-08 04:02:44', '2017-01-08 04:02:44'),
(6, 'ineu', 8, '2017-01-18', '2017-01-08 05:09:48', '2017-01-08 05:09:48'),
(7, 'dasd', 8, '2012-12-12', '2017-01-08 06:17:15', '2017-01-08 06:17:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tours`
--

CREATE TABLE `tours` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isi_paket` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tours`
--

INSERT INTO `tours` (`id`, `nama`, `isi_paket`, `created_at`, `updated_at`) VALUES
(1, 'ban', '1', '2017-01-02 08:39:00', '2017-01-02 17:46:39'),
(2, 'mjk', '1', '2017-01-02 08:42:54', '2017-01-02 08:42:54'),
(3, 'ONE DAY TOUR LEMBANG', '1', '2017-01-02 09:14:04', '2017-01-02 09:14:04'),
(4, 'ghggh', '1', '2017-01-02 11:31:36', '2017-01-02 11:31:36'),
(5, 'one day tour purwakarta', '1', '2017-01-02 18:55:21', '2017-01-02 18:55:21'),
(6, 'majalengka', '1', '2017-01-02 18:57:06', '2017-01-02 18:57:06'),
(7, 'ciwidey', '1', '2017-01-05 12:09:19', '2017-01-05 12:09:19'),
(8, 'cigobang', '1', '2017-01-05 12:12:14', '2017-01-05 12:12:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sri', 'sricandra.w@gmail.com', '$2y$10$jwsWDMK.Fe2mcUDW9kLId.CZJMukF9p.B4Cbj7U8GiMWGocKf49Qq', 'ST3Bj8tlSd2ioH91MNWYNzw5T4YF19ve3OunHtaeDltOKPtxpy00oTXlN2JK', '2016-12-29 17:28:55', '2017-01-08 08:19:08'),
(2, 'yuni', 'yuza_scw@ymail.com', '$2y$10$y8G71y.pbIigsQvEDk5TF.YWvNO1W3d7wMXb7v/jidc2uWYXUSaBq', 'sT0jbKIK77VADQAM9P2kpxJjbYQWS2UZLcjH5zyqC3NXsAPeuziGVMudJrbs', '2017-01-01 20:37:33', '2017-01-01 21:03:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisatas`
--

CREATE TABLE `wisatas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_paket` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `harga_paket` int(11) NOT NULL,
  `isi_paket` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakets`
--
ALTER TABLE `pakets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pilihs`
--
ALTER TABLE `pilihs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `holiday_id` (`holiday_id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wisatas`
--
ALTER TABLE `wisatas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datas`
--
ALTER TABLE `datas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pakets`
--
ALTER TABLE `pakets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pilihs`
--
ALTER TABLE `pilihs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `wisatas`
--
ALTER TABLE `wisatas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
