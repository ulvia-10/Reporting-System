-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Feb 2021 pada 20.05
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sikonwil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'ideologi'),
(2, 'politik'),
(3, 'ekonomi'),
(4, 'sosial'),
(5, 'budaya'),
(6, 'pertahanan'),
(7, 'keamanan'),
(8, 'covid 19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapor`
--

CREATE TABLE `lapor` (
  `id_lapor` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `id_user` int(50) DEFAULT NULL,
  `status_lapor` enum('diperiksa','disetujui','ditolak') DEFAULT NULL,
  `nama_lapor` varchar(50) NOT NULL,
  `kecamatan` enum('Lowokwaru','Klojen','Blimbing','KedungKandang','Sukun') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tgl_tragedi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `foto_tragedi` varchar(75) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lapor`
--

INSERT INTO `lapor` (`id_lapor`, `id_kategori`, `id_user`, `status_lapor`, `nama_lapor`, `kecamatan`, `alamat`, `tgl_tragedi`, `judul`, `keterangan`, `foto_tragedi`, `created_at`) VALUES
(3, 1, 1, 'diperiksa', 'Ulvia Yulianti', 'Lowokwaru', 'asd', '2021-02-01 00:00:00', 'Demonstrasi Program PKL', 'asd', 'logo_bakesbangpol-removebg-preview_(1).png', '2021-02-01 15:33:40'),
(4, 4, 1, 'diperiksa', 'dwinuray edit', 'Lowokwaru', 'tgg edit', '2021-02-03 00:00:00', 'Demonstrasi Program PKL edit', 'ffgg edit', 'logo_bakesbangpol-removebg-preview_(1)1.png', '2021-02-01 15:35:12'),
(5, 2, 1, 'diperiksa', 'Ulvia Yulianti', 'Blimbing', 'Jalanjsjndjdqidqidjedejdhe', '2021-02-03 00:00:00', 'Unjuk rasa', 'ddwqdqdqdq', 'Flowchart_diagram_(3)-WBS.png', '2021-02-03 00:26:46'),
(6, 7, 2, 'diperiksa', 'Dwi Nur Cahyo', 'Lowokwaru', 'Medeni meresahkan warga', '2021-02-03 00:00:00', 'Onok dentuman', 'sik digolek i', 'Sertifikat_Prastudy.jpeg', '2021-02-03 16:22:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` enum('admin','user') NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `foto` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `no_telp`, `password`, `role_id`, `nama_lengkap`, `jenis_kelamin`, `is_active`, `created_at`, `foto`) VALUES
(1, 'via', 'ulvia.yulianti@gmail.com', '081678797', '$2y$10$R6S2cRw.zXawO4cje3wB0O3lf8DA2nBYtBsGsfv8ewc4LmP/BH3TK', 'admin', 'via yulianti', 'L', 1, '0000-00-00 00:00:00', NULL),
(2, 'dwinuray', 'lusi@gmail.com', '081', '$2y$10$R6S2cRw.zXawO4cje3wB0O3lf8DA2nBYtBsGsfv8ewc4LmP/BH3TK', 'user', NULL, NULL, 1, NULL, NULL),
(3, 'dwinuray', 'test@gmail.com', '08816255060', '$2y$10$yYm5DqQyjkf7J2lQE1TdOulwuRsiGlbmBd3MaA0poRA3EVTkKNBJm', 'user', 'test', 'L', 1, NULL, 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `lapor`
--
ALTER TABLE `lapor`
  ADD PRIMARY KEY (`id_lapor`),
  ADD KEY `FK_lapor_kategori` (`id_kategori`),
  ADD KEY `FK_lapor_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `lapor`
--
ALTER TABLE `lapor`
  MODIFY `id_lapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `lapor`
--
ALTER TABLE `lapor`
  ADD CONSTRAINT `FK_lapor_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `FK_lapor_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
