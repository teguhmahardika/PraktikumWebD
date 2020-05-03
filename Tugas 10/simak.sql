-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2020 pada 16.36
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `namauser` varchar(30) NOT NULL,
  `nim` int(10) NOT NULL,
  `kelamin` varchar(30) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `asal` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `namalengkap`, `namauser`, `nim`, `kelamin`, `tempat`, `tanggal`, `asal`, `jurusan`, `pass`, `jam`) VALUES
(1588516413, 'Teguh Mahardika', 'teguhmahardika', 1708561069, 'Laki-Laki', 'Denpasar', '1999-05-28', 'SMK TI BALI GLOBAL', 'Teknik Informatika', 'teguhganteng', '04:33:33'),
(1588516447, 'w', 'w', 0, 'Laki-Laki', 'wew', '0222-02-22', '22', 'Matematika', '222', '04:34:07'),
(1588516494, 'w', 'e', 0, 'Laki-Laki', 'qweqe', '2121-12-21', 'qweqwe', 'Teknik Informatika', 'weqew', '04:34:54'),
(1588516515, 'qweq', 'qweqwe', 0, 'Laki-Laki', 'wqeq', '2000-12-13', '2312wqeqwe', 'Matematika', 'qweqeqw', '04:35:15'),
(1588516532, 'qeqweqw', 'qweqweqw', 0, 'Laki-Laki', 'qweqweq', '2000-12-31', 'qwe', 'Teknik Informatika', 'qeqweq', '04:35:32');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1588516533;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
