-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Agu 2020 pada 14.23
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dpcovid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `odp`
--

CREATE TABLE `odp` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `usia` varchar(255) NOT NULL,
  `kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_konfirmasi` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `odp`
--

INSERT INTO `odp` (`id`, `nama`, `usia`, `kelamin`, `alamat`, `tgl_konfirmasi`, `status`, `keterangan`) VALUES
(5, 'salih ning', '22', 'Wanita', 'jl pasir', '2020-08-08', 'ODP', 'Sembuh'),
(6, 'amar', '22', 'Pria', 'jl kayu', '2020-08-21', 'ODP', 'Dalam Pemantuan'),
(7, 'jefry', '25', 'Pria', 'jl beton', '2020-08-20', 'ODP', 'Dalam Pemantuan'),
(8, 'ivan', '25', 'Pria', 'sedayu', '2020-08-27', 'ODP', 'Meninggal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pdp`
--

CREATE TABLE `pdp` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `usia` varchar(255) NOT NULL,
  `kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_konfirmasi` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pdp`
--

INSERT INTO `pdp` (`id`, `nama`, `usia`, `kelamin`, `alamat`, `tgl_konfirmasi`, `status`, `keterangan`) VALUES
(5, 'mariana', '30', 'Wanita', 'pongangan', '2020-08-07', 'PDP', 'Dalam Pemantuan'),
(6, 'linda', '19', 'Wanita', 'jl beton', '2020-08-12', 'PDP', 'Selesai Pemantuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `positif`
--

CREATE TABLE `positif` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `usia` varchar(255) NOT NULL,
  `kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_konfirmasi` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `positif`
--

INSERT INTO `positif` (`id`, `nama`, `usia`, `kelamin`, `alamat`, `tgl_konfirmasi`, `status`, `keterangan`) VALUES
(4, 'amar', '20', 'Pria', 'pongangan', '2020-08-08', 'POSITIF', 'Sembuh'),
(5, 'rudi', '22', 'Pria', 'jl kh syafii', '2020-08-16', 'POSITIF', 'Selesai Pemantuan'),
(6, 'darlina', '18', 'Wanita', 'jl kh syafii', '2020-08-16', 'POSITIF', 'Dalam Pemantuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rs`
--

CREATE TABLE `rs` (
  `id` bigint(20) NOT NULL,
  `nama_rs` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nomor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `rs`
--

INSERT INTO `rs` (`id`, `nama_rs`, `alamat`, `nomor`) VALUES
(1, 'RSUD Ibnu Sina', 'Jl. Dr. Wahidin Sudiro Husodo 243-B', '031- 3951246 | 0313951239 | 3955217'),
(2, 'RS Muhamadiyah Gresik', 'Jl. KH.Kholil 88. Kebungson', '031- 3981275 | 3981561 | 3991268'),
(3, 'RS Petrokimia Gresik (RSPG)', 'Jl. Jendral Ahmad Yani No. 69	', '031- 3978658 | 3977666'),
(4, 'RS Semen Gresik', 'Jl. RA. Kartini 280. Sidomoro. Kebomas	', '031- 3987841 | 3987840 | 3973477'),
(5, 'Rumah Sakit Denisa', 'Jl. Dr. Wahidin Sudirohusodo No. 736. Kawisanyar. Kebomas.', '031- 3950552 | 70952823\r\n'),
(6, 'Cahaya Medika Health Center', 'Jl. KH. Syafi\'i No.16. Suci-Manyar-Gresik', '031-3956132'),
(7, 'Klinik Satelit RSPG', 'Jl. Kalimantan No.29-31. GKB-Gresik', '031-3959889'),
(10, 'Bumi Husada Prima', 'Jl. Jawa No.79-81 GKB-Gresik', '031-3957448');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$JTnM6WPgcpveT9nHXP.xZOk10y4mY2C6iNchQ6yTASx7aHBLqj/UC', NULL, '2020-08-03 14:00:15', '2020-08-03 14:00:15'),
(2, 'rizqi', 'rizqisamawa11@gmail.com', NULL, '$2y$10$GJTo2rDIInVItqSXeRJDI.saRBqCCOutcNNF9WifVLUvQb.SzSUKK', NULL, '2020-08-03 14:08:30', '2020-08-03 14:08:30'),
(4, 'rudi', 'rudirudi122@gmail.com', NULL, '$2y$10$ZLkugmxAJBHzu4SgCPhmpeAm.drJwkI9mMtNzPGL1Kng7.B4g/QK2', NULL, '2020-08-15 23:46:16', '2020-08-15 23:46:16');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `odp`
--
ALTER TABLE `odp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pdp`
--
ALTER TABLE `pdp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `positif`
--
ALTER TABLE `positif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rs`
--
ALTER TABLE `rs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `odp`
--
ALTER TABLE `odp`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pdp`
--
ALTER TABLE `pdp`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `positif`
--
ALTER TABLE `positif`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `rs`
--
ALTER TABLE `rs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
