-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Waktu pembuatan: 12 Bulan Mei 2023 pada 09.06
=======
-- Waktu pembuatan: 30 Apr 2023 pada 20.53
>>>>>>> 16789c06424094352e6374f0ecd048cdb639d855
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_gaming`
--

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Struktur dari tabel `akun_karyawan`
--

CREATE TABLE `akun_karyawan` (
  `id_login` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun_karyawan`
--

INSERT INTO `akun_karyawan` (`id_login`, `nama`, `jenis_kelamin`, `alamat`, `telepon`, `email`, `username`, `password`, `level`) VALUES
(3, 'bowo', 'Laki-laki', 'jln.wewewe', '1234567890', 'bowoganteng@gmail.com', 'bowo123', 'd992b1fbf443abf7318057bfb846aa1e', 'karyawan'),
(4, 'megawati cantik', 'Perempuan', 'jln.soekarno', '199451222', 'megachan@gmail.com', 'mega123', 'cd34f589fb25dd5d09de72df0dd83949', 'karyawan');

-- --------------------------------------------------------

--
=======
>>>>>>> 16789c06424094352e6374f0ecd048cdb639d855
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `kode_booking` varchar(255) NOT NULL,
  `id_login` int(11) NOT NULL,
  `id_ps` int(11) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `lama_sewa` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `konfirmasi_pembayaran` varchar(255) NOT NULL,
  `tgl_input` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id_booking`, `kode_booking`, `id_login`, `id_ps`, `ktp`, `nama`, `alamat`, `no_tlp`, `tanggal`, `lama_sewa`, `total_harga`, `konfirmasi_pembayaran`, `tgl_input`) VALUES
(1, '1576329294', 3, 5, '231423123', 'adit', 'bandung', '08132312321', '2019-12-28', 2, 400000, 'Pembayaran di terima', '2019-12-14'),
(2, '1576671989', 3, 5, '231423', 'bowo', 'samarinda seberang', '082391273127', '2019-12-20', 2, 400525, 'Pembayaran di terima', '2019-12-18'),
<<<<<<< HEAD
(3, '1642998828', 3, 5, '1283821832813', 'irvan', 'samarinda ilir', '089618173609', '2022-01-26', 4, 800743, 'Pembayaran di terima', '2022-01-24'),
(5, '1683610366', 6, 6, '12345678', 'M Irvan', 'jln.123456', '123456', '2023-05-09', 2, 1000191, 'Sedang di proses', '2023-05-09');
=======
(3, '1642998828', 3, 5, '1283821832813', 'irvan', 'samarinda ilir', '089618173609', '2022-01-26', 4, 800743, 'Pembayaran di terima', '2022-01-24');
>>>>>>> 16789c06424094352e6374f0ecd048cdb639d855

-- --------------------------------------------------------

--
-- Struktur dari tabel `infoweb`
--

CREATE TABLE `infoweb` (
  `id` int(11) NOT NULL,
  `nama_rental` varchar(255) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_rek` text DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `infoweb`
--

INSERT INTO `infoweb` (`id`, `nama_rental`, `telp`, `alamat`, `email`, `no_rek`, `updated_at`) VALUES
<<<<<<< HEAD
(1, 'Rental Gaming', '081298669897', 'Jln.ottista', 'Gaming123@gmail.com', 'BRI A/N JOKOWI DODI 123123213123', '2022-01-24 04:57:29');
=======
(1, 'Rental Gaming', '081298669897', 'Jln.ottista', 'fauzancodekop@gmail.com', 'BRI A/N JOKOWI DODI 123123213123', '2022-01-24 04:57:29');
>>>>>>> 16789c06424094352e6374f0ecd048cdb639d855

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(1, 'JOKOWI', 'admin', 'fe01ce2a7fbac8fafaed7c982a04e229', 'admin'),
<<<<<<< HEAD
(4, 'puan', 'puan123', '034ef97ebfc810814baad78f1311ce9c', 'pengguna'),
(5, 'irvan', 'irvan1', '4c28e3fff759aeada74427108484f8c5', 'pengguna'),
(10, 'bowo', 'bowo123', 'd992b1fbf443abf7318057bfb846aa1e', 'pelanggan'),
(12, 'mas owi', 'owi123', '676ece5b99f70dd49883cc64e5fee2b9', 'pengguna'),
(13, 'mega', 'mega123', 'cd34f589fb25dd5d09de72df0dd83949', 'pengguna');
=======
(4, 'puan', 'puan123', '034ef97ebfc810814baad78f1311ce9c', 'pengguna');
>>>>>>> 16789c06424094352e6374f0ecd048cdb639d855

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_booking` int(255) NOT NULL,
  `no_rekening` int(255) NOT NULL,
  `nama_rekening` varchar(255) NOT NULL,
  `nominal` int(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_booking`, `no_rekening`, `nama_rekening`, `nominal`, `tanggal`) VALUES
(3, 1, 2131241, 'Aldi ', 400000, '2019-12-14'),
(4, 2, 2131241, 'Aldi', 400525, '2019-12-18'),
<<<<<<< HEAD
(5, 3, 13213, 'megachan', 800743, '2022-01-24'),
(7, 5, 12345, 'M Irvan', 100000, '2023-05-09');
=======
(5, 3, 13213, 'megachan', 800743, '2022-01-24');
>>>>>>> 16789c06424094352e6374f0ecd048cdb639d855

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `kode_booking` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `denda` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `playstation`
--

CREATE TABLE `playstation` (
  `id_ps` int(11) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `playstation`
--

INSERT INTO `playstation` (`id_ps`, `merk`, `harga`, `deskripsi`, `status`, `gambar`) VALUES
<<<<<<< HEAD
(6, 'PlayStation 3', 500000, 'Baru', 'Tersedia', 'WhatsApp Image 2023-04-30 at 16.05.17.jpeg'),
(7, 'PS4 Controller ', 80000, 'PS4 Controller Skin Galaxy Starry Stickers Vinyl Decal Sticker Cover for Sony PlayStation 4 DualShock 4 Wireless Controller', 'Tidak tersedia', '1682878585.jpg'),
(8, 'Playstation 4', 550000, 'Baru', 'Tersedia', 'ps4.png'),
(9, 'PS4-Controller', 70000, 'PS4-Controller-Skin-Galaxy-Starry-Stickers-Vinyl-Decal-Sticker-Cover-for-Sony-PlayStation-4-DualShock-4', 'Tersedia', '1682877793.jpg');
=======
(5, 'PlayStation 5', 200000, 'bebas', 'Tidak Tersedia', 'ps5.png'),
(6, 'PlayStation 3', 500000, 'Baru', 'Tersedia', 'WhatsApp Image 2023-04-30 at 16.05.17.jpeg'),
(7, 'PS4 Controller ', 80000, 'PS4 Controller Skin Galaxy Starry Stickers Vinyl Decal Sticker Cover for Sony PlayStation 4 DualShock 4 Wireless Controller', 'Tersedia', '1682878585.jpg');
>>>>>>> 16789c06424094352e6374f0ecd048cdb639d855

--
-- Indexes for dumped tables
--

--
<<<<<<< HEAD
-- Indeks untuk tabel `akun_karyawan`
--
ALTER TABLE `akun_karyawan`
  ADD PRIMARY KEY (`id_login`);

--
=======
>>>>>>> 16789c06424094352e6374f0ecd048cdb639d855
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`);

--
-- Indeks untuk tabel `playstation`
--
ALTER TABLE `playstation`
  ADD PRIMARY KEY (`id_ps`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
<<<<<<< HEAD
-- AUTO_INCREMENT untuk tabel `akun_karyawan`
--
ALTER TABLE `akun_karyawan`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
=======
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
>>>>>>> 16789c06424094352e6374f0ecd048cdb639d855

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
<<<<<<< HEAD
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
=======
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
>>>>>>> 16789c06424094352e6374f0ecd048cdb639d855

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
<<<<<<< HEAD
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
=======
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
>>>>>>> 16789c06424094352e6374f0ecd048cdb639d855

--
-- AUTO_INCREMENT untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `playstation`
--
ALTER TABLE `playstation`
<<<<<<< HEAD
  MODIFY `id_ps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
=======
  MODIFY `id_ps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
>>>>>>> 16789c06424094352e6374f0ecd048cdb639d855
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
