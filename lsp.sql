-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Feb 2023 pada 09.47
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(225) DEFAULT NULL,
  `pengarang` varchar(225) DEFAULT NULL,
  `penerbit` varchar(225) DEFAULT NULL,
  `gambar` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `gambar`, `created_at`, `update_at`) VALUES
(1, 'Kelabu Merah Muda', 'Sinar Muda', 'Gramedia', 'Screenshot (7).png', '2023-02-09 02:10:18', '2023-02-09 02:10:18'),
(2, 'Sinarsssuuu', 'Sinar', 'Gramedia', 'jangan.jpg', '2023-02-09 02:10:18', '2023-02-09 02:10:18'),
(3, 'Sinar Matahari', 'Sinar Matahari', 'Gramedia', 'Buku3.jpg', '2023-02-09 02:10:18', '2023-02-09 02:10:18'),
(8, 'Aku si[apa', 'Saya', 'Bintang', '058395000_1605759618-shutterstock_1461537431.webp', '2023-02-09 03:09:52', '2023-02-09 03:09:52'),
(11, 'Aku Sang Pengarang', 'Saya', 'Bintang terang', 'fem.png', '2023-02-09 06:09:53', '2023-02-09 06:09:53'),
(12, 'Siapa Kamu', 'Sang ilahi', 'Bintang', 'maketime.jpg', '2023-02-09 06:10:50', '2023-02-09 06:10:50'),
(13, 'Bintang', 'Sang ilahi', 'Bintang', 'maketime.jpg', '2023-02-09 06:11:12', '2023-02-09 06:11:12'),
(14, 'APA COBA', 'Sang ilahi', 'po', '1200px-Pac_Man.svg2.png', '2023-02-09 06:11:52', '2023-02-09 06:11:52'),
(15, 'Kelabu Merah Muda', 'Sang ilahi', 'Bintang', 'tireenemy.png', '2023-02-09 07:33:00', '2023-02-09 07:33:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `level` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin123', 'admin'),
(2, 'user', 'user123', 'user'),
(3, 'guest', 'guest123', 'guest'),
(4, 'd', 'sdf', 'guest');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
