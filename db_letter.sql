-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2021 pada 09.42
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
  `number` varchar(255) NOT NULL,
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

INSERT INTO `letters` (`id_letters`, `operator_id`, `number`, `title`, `type`, `date`, `assignor`, `assignee`, `position`, `purpose`, `transportation`, `from`, `to`, `length_of_business_trip`, `departure`, `return`, `budget_assignment`, `etc`, `status`, `approved_at`, `rejected_at`, `created_at`, `updated_at`) VALUES
(1, 1, '(001/PTHI-001/09/2021)', 'Perjalanan mencari kitab suci', 'TI', '2021-09-14 15:34:00', 'Fernando Axl Wicaksono', 'Alif Muhammad Daffa', 'Developer Frontend', 'Mencari kitab suci bersama tomsamcong', 'kuda', 'timur', 'barat', '9 decade', '2021-09-15', '2111-09-15', 'Rp. 2.000.000.000.000.000.000.000', 'Diperbolehkan untuk memperpanjang selama 3 hari kerja', NULL, NULL, NULL, '2021-09-14 15:36:00', '0000-00-00 00:00:00'),
(2, 1, '002/PTHI-001/08/2021', 'Perjalanan meeting Dev Jogja', 'TI', '2021-09-08 14:45:00', 'Fernando Axl Wicaksono', 'Alif Muhammad Daffa', 'Developer Frontend', 'DIscuss about homycare etc', 'Car', 'magelang', 'jakarta', '9 days', '2021-09-09', '2021-09-18', 'Rp. 2.000.000', 'Diperbolehkan untuk memperpanjang selama 3 hari kerja', 'approved', '2021-09-10 13:56:00', '0000-00-00 00:00:00', '2021-09-08 14:45:00', '0000-00-00 00:00:00'),
(3, 1, '(003/PTHI-001/09/2021)', 'Perjalanan mencari kitab suci', 'PE', '2021-09-10 14:06:00', 'Fernando Axl Wicaksono', 'Alif Muhammad Daffa', 'Developer Frontend', 'DIscuss about DGP meet and DGP coin', 'Car', 'magelang', 'west', '9 days', '2021-09-10', '2021-09-19', 'Rp. 2.000.000', 'Diperbolehkan untuk memperpanjang selama 3 hari kerja', 'rejected', '0000-00-00 00:00:00', '2021-09-16 15:01:00', '2021-09-10 14:07:00', '0000-00-00 00:00:00'),
(4, 3, '(004/PTHI-001/09/2021)', 'Perjalanan meeting Dev bandung', 'PE', '2021-09-16 14:23:00', 'Fernando Axl Wicaksono', 'Alif Muhammad Daffa', 'Developer Frontend', 'DIscuss about DGP meet and DGP coin', 'kuda', 'magelang', 'bandung', '9 days', '2021-09-17', '2021-09-26', 'Rp. 2.000.000', 'Diperbolehkan untuk memperpanjang selama 3 hari kerja', 'approved', '2021-09-16 15:00:00', '0000-00-00 00:00:00', '2021-09-16 14:24:00', '0000-00-00 00:00:00'),
(5, 2, '(005/PTHI-001/09/2021)', 'Perjalanan meeting Dev Jakarta', 'PE', '2021-09-17 14:35:00', 'Fernando Axl Wicaksono', 'Alif Muhammad Daffa', 'Developer Frontend', 'DIscuss about DGP meet and DGP coin', 'Car', 'magelang', 'jakarta', '9 days', '2021-09-17', '2021-09-26', 'Rp. 2.000.000', 'Diperbolehkan untuk memperpanjang selama 3 hari kerja', 'approved', '2021-09-17 14:39:00', '0000-00-00 00:00:00', '2021-09-17 14:35:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE `operator` (
  `id_operator` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passwords` varchar(255) NOT NULL,
  `role` enum('operator') NOT NULL,
  `status` enum('aktif','tidak aktif','pending') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`id_operator`, `name`, `email`, `username`, `passwords`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Alif muhammad daffa', 'alif@gmail.com', 'daffaoperator1', '25d55ad283aa400af464c76d713c07ad', 'operator', 'aktif', '2021-09-16 11:37:14', NULL),
(2, 'alif muh daffa', 'fernando.axl.789@gmail.com', 'daffaoperator2', '25d55ad283aa400af464c76d713c07ad', 'operator', 'aktif', '2021-09-16 14:18:00', '0000-00-00 00:00:00'),
(3, 'alif daffa muh', 'fernando.axl.789@gmail.com', 'daffaoperator3', '25d55ad283aa400af464c76d713c07ad', 'operator', 'aktif', '2021-09-16 14:21:00', '0000-00-00 00:00:00'),
(4, 'alif muh daffa', 'fernando.axl.789@gmail.com', 'daffaoperator4', '25d55ad283aa400af464c76d713c07ad', 'operator', 'pending', '2021-09-23 10:24:00', '0000-00-00 00:00:00'),
(5, 'operator5', 'fernando.axl.9@gmail.com', 'daffaoperator5', '25d55ad283aa400af464c76d713c07ad', 'operator', 'tidak aktif', '2021-09-23 12:28:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passwords` varchar(255) NOT NULL,
  `role` enum('superadmin','admin') NOT NULL,
  `status` enum('aktif','tidak aktif','pending') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `username`, `passwords`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fernando', 'fernando@gmail.com', 'azelord', '25d55ad283aa400af464c76d713c07ad', 'superadmin', 'aktif', '2021-09-01 11:09:08', NULL),
(2, 'daffa', 'fernando.wicaksono@ti.ukdw.ac.id', 'daffaadmin', '25d55ad283aa400af464c76d713c07ad', 'admin', 'aktif', '2021-09-01 11:32:00', '0000-00-00 00:00:00'),
(3, 'Fernando Axl Wicaksono', 'fernando.axl.9@gmail.com', 'azelord123', '25d55ad283aa400af464c76d713c07ad', 'superadmin', 'tidak aktif', '2021-09-16 13:24:00', '0000-00-00 00:00:00'),
(4, 'alif muh daffa', 'fernando.axl.88@gmail.com', 'daffaadmin2', '25d55ad283aa400af464c76d713c07ad', 'admin', 'pending', '2021-09-22 17:03:00', '0000-00-00 00:00:00'),
(5, 'alif muh daffa', 'fernando.axl.9@gmail.com', 'azelordPENDING', '25d55ad283aa400af464c76d713c07ad', 'superadmin', 'pending', '2021-09-24 16:25:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `letters`
--
ALTER TABLE `letters`
  ADD PRIMARY KEY (`id_letters`),
  ADD KEY `operator_id` (`operator_id`);

--
-- Indeks untuk tabel `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id_operator`);

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
  MODIFY `id_letters` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `operator`
--
ALTER TABLE `operator`
  MODIFY `id_operator` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `letters`
--
ALTER TABLE `letters`
  ADD CONSTRAINT `letters_ibfk_1` FOREIGN KEY (`operator_id`) REFERENCES `operator` (`id_operator`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
