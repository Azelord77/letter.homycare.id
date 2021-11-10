-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Sep 2021 pada 05.19
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_letter`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `letters`
--

CREATE TABLE `letters` (
  `id_letters` bigint(20) NOT NULL,
  `operator_id` bigint(20) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` enum('PE','TI') NOT NULL,
  `date` datetime NOT NULL,
  `assignor` varchar(255) NOT NULL,
  `assignee` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `purpose` text NOT NULL,
  `transportation` varchar(255) NOT NULL,
  `from` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `length_of_business_trip` varchar(255) NOT NULL,
  `departure` date NOT NULL,
  `return` date NOT NULL,
  `budget_assignment` varchar(255) NOT NULL,
  `etc` text NOT NULL,
  `status` enum('approved','rejected') DEFAULT NULL,
  `approved_at` datetime DEFAULT NULL,
  `rejected_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `letters`
--

INSERT INTO `letters` (`id_letters`, `operator_id`, `nomor`, `title`, `type`, `date`, `assignor`, `assignee`, `position`, `purpose`, `transportation`, `from`, `to`, `length_of_business_trip`, `departure`, `return`, `budget_assignment`, `etc`, `status`, `approved_at`, `rejected_at`, `created_at`, `updated_at`) VALUES
(1, 1, '001/PTHI-001/08/2021', 'Surat Perintah Perjalanan Dinas', 'TI', '2021-08-31 13:55:38', 'Fernando Axl Wicaksono', 'Alif Muhammad Daffa', 'Direktur', 'Menguasai desa konoha', 'Mobil', 'Magelang', 'Konoha', '10 hari', '2021-09-01', '2021-09-11', 'Rp. 1.000.000,-', 'Jika diperlukan boleh menambah hari maksimal 5 hari kerja', 'rejected', '0000-00-00 00:00:00', '2021-09-02 16:40:00', '2021-08-31 14:02:43', '0000-00-00 00:00:00'),
(2, 1, '4444', 'Perjalanan meeting Dev Jogja', 'PE', '2021-09-01 11:54:00', 'Fernando Axl Wicaksono', 'Alif Muhammad Daffa', 'Developer Frontend', 'DIscuss about homycare etc', 'Car', 'magelang', 'jakarta', '9 days', '2021-08-31', '2021-08-31', 'Rp. 2.000.000', 'Diperbolehkan untuk memperpanjang selama 3 hari kerja', 'rejected', '0000-00-00 00:00:00', '2021-09-02 16:40:00', '2021-08-31 23:25:00', '0000-00-00 00:00:00'),
(3, 1, '1690', 'Perjalanan meeting Dev Jogja', 'PE', '2021-09-01 12:02:00', 'Fernando Axl Wicaksono', 'Alif Muhammad Daffa', 'Developer Frontend', 'DIscuss about homycare', 'Car', 'magelang', 'jakarta', '9 days', '2021-09-01', '2021-09-22', 'Rp. 2.000.000', 'Diperbolehkan untuk memperpanjang selama 3 hari kerja', 'approved', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-09-01 12:02:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('superadmin','admin','operator') NOT NULL,
  `status` enum('aktif','tidak aktif','pending') NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `username`, `password`, `role`, `status`, `created_at`, `update_at`) VALUES
(1, 'Fernando', 'fernando@gmail.com', 'azelord', '25d55ad283aa400af464c76d713c07ad', 'superadmin', 'aktif', '2021-09-01 11:09:08', NULL),
(2, 'daffa', 'fernando.wicaksono@ti.ukdw.ac.id', 'daffa', '550e1bafe077ff0b0b67f4e32f29d751', 'superadmin', 'aktif', '2021-09-01 11:32:00', NULL),
(3, 'alif', 'fernando.axl.88@gmail.com', 'daffa123', '7b1e852330575c92c8d918377b30726a', 'admin', 'tidak aktif', '2021-09-02 10:17:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `letters`
--
ALTER TABLE `letters`
  ADD PRIMARY KEY (`id_letters`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `letters`
--
ALTER TABLE `letters`
  MODIFY `id_letters` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
