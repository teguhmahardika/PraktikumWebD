-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Bulan Mei 2020 pada 10.17
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
-- Database: `kampus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(30) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `jk` enum('P','L') DEFAULT NULL,
  `jabatan_terakhir` varchar(20) DEFAULT NULL,
  `Status` enum('Verifikasi','Mutasi','Meninggal','Putus Kontrak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `email`, `jk`, `jabatan_terakhir`, `Status`) VALUES
('196401141994022001', 'Dra. Luh Gede Astuti,M.Kom.', 'lg.astuti[@]cs.unud.ac.id', 'P', 'LEKTOR', 'Mutasi'),
('196704141992031002', 'Drs. I Wayan Santiyasa,M.Si.', 'santiyasa67[@]gmail.com', 'L', 'LEKTOR KEPALA', 'Verifikasi'),
('197201102008121001', 'Dr. Ir. I Ketut Gede Suhartana, S.Kom., M.Kom', 'ikg.suhartana[@]unud.ac.id', 'L', 'LEKTOR', 'Verifikasi'),
('197404071998022001', 'Dr. Anak Agung Istri Ngurah Eka Karyawati, S.Si.,M.Eng.', 'eka.karyawati[@]unud.ac.id', 'P', 'LEKTOR', 'Verifikasi'),
('197511052005011004', 'I Made Widhi Wirawan, S.Si., M.Si., M.Cs.', 'made_widhi[@]yahoo.com', 'L', 'ASISTEN AHLI', 'Verifikasi'),
('197803212005011001', 'Dr. Ngurah Agus Sanjaya ER, S.Kom., M.Kom.', 'agus_sanjaya[@]unud.ac.id', 'L', 'LEKTOR', 'Verifikasi'),
('197806212006041002', 'Cokorda Rai Adi Pramartha,ST., MM., PhD.', 'cokorda[@]cs.unud.ac.id', 'L', 'LEKTOR', 'Verifikasi'),
('198006162005011001', 'Agus Muliantara, S.Kom, M.Kom', 'muliantara[@]gmail.com', 'L', 'LEKTOR', 'Verifikasi'),
('198006212008121002', 'Ida Bagus Made Mahendra, S.Kom., M.Kom.', 'ibm.mahendra[@]unud.ac.id', 'L', 'ASISTEN AHLI', 'Verifikasi'),
('198012062006041003', 'I Gede Santi Astawa, S.T., M.Cs.', 'santi.astawa[@]cs.unud.ac.id', 'L', 'LEKTOR', 'Verifikasi'),
('198201242005021002', 'I MADE AGUS SETIAWAN, S.Kom., M.Kom', 'madeagus[@]unud.ac.id', 'L', 'LEKTOR', 'Verifikasi'),
('198209182008122002', 'Luh Arida Ayu Rahning Putri, S.Kom., M.Cs.', 'luh.arida[@]cs.unud.ac.id', 'P', 'ASISTEN AHLI', 'Verifikasi'),
('198212202008011008', 'I Made Widiartha, S.Si., M.Kom.', 'madewidiartha[@]unud.ac.id', 'L', 'LEKTOR', 'Verifikasi'),
('198310222008121001', 'I Gede Arta Wibawa, S.T., M.KOM.', 'gede.arta[@]unud.ac.id', 'L', 'ASISTEN AHLI', 'Verifikasi'),
('198403172019031005', 'I Gusti Ngurah Anom Cahyadi Putra, ST., M.Cs', 'anom.cp[@]unud.ac.id', 'L', 'TENAGA PENGAJAR', 'Verifikasi'),
('198409242008011007', 'I Komang Ari Mogi, S.Kom., M.Kom.', 'arimogi[@]unud.ac.id', 'L', 'ASISTEN AHLI', 'Verifikasi'),
('198501302015041003', 'I Gusti Agung Gede Arya Kadyanan, S.Kom, M.Kom', 'gungde[@]unud.ac.id', 'L', 'LEKTOR', 'Verifikasi'),
('198503152010121007', 'Ida Bagus Gede Dwidasmara, S.Kom., M.Cs.', 'dwidasmara[@]unud.ac.id', 'L', 'LEKTOR', 'Verifikasi'),
('198812282014041001', 'I PUTU GEDE HENDRA SUPUTRA, S.Kom.,M.Kom.', 'hendra.suputra[@]unud.ac.id', 'L', 'ASISTEN AHLI', 'Verifikasi'),
('198901272012121001', 'I Dewa Made Bayu Atmaja Darmawan,S.Kom.,M.Cs.', 'dwbayu[@]gmail.com', 'L', 'LEKTOR', 'Verifikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `KodeKelas` int(11) NOT NULL,
  `KodeMK` int(20) NOT NULL,
  `Jam` varchar(10) NOT NULL,
  `Hari` varchar(10) NOT NULL,
  `Status` enum('Tersedia','Tidak Tersedia','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`KodeKelas`, `KodeMK`, `Jam`, `Hari`, `Status`) VALUES
(1, 1, '08:00', 'Senin', 'Tersedia'),
(2, 2, '08:00', 'Selasa', 'Tersedia'),
(3, 3, '13:00', 'Rabu', 'Tersedia'),
(4, 4, '10:00', 'Kamis', 'Tersedia'),
(5, 5, '15:00', 'Kamis', 'Tersedia'),
(6, 6, '08:00', 'Rabu', 'Tersedia'),
(7, 2, '11:00', 'Senin', 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` enum('P','L') DEFAULT NULL,
  `tmp_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `agama` enum('Islam','Protestan','Katolik','Hindu','Buddha','Kong Hu Cu') DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `fakultas` enum('FIB','FK','FH','FT','FP','FEB','FAPET','FMIPA','FKH','FTP','FPAR','FISIP','FKP') DEFAULT NULL,
  `prodi` varchar(50) DEFAULT NULL,
  `Status` enum('Verifikasi','Meninggal','Belum Bayar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jk`, `tmp_lahir`, `tgl_lahir`, `alamat`, `agama`, `no_telp`, `fakultas`, `prodi`, `Status`) VALUES
('1708561069', 'I Gede Teguh Mahardika', 'L', 'Denpasar', '1999-05-28', 'Jln Sahadewa Gg. I No.1', 'Hindu', '085847900908', 'FMIPA', 'Informatika', 'Belum Bayar'),
('1708561071', 'Pingkan Anggriani Pitoy', 'P', 'Denpasar', '1999-12-31', 'Bukit Jimbaran', 'Protestan', '086545323444', 'FMIPA', 'Informatika', 'Verifikasi'),
('1708561072', 'Gede Bakti Pernata', 'L', 'Denpasar', '1999-12-31', 'Bukit Jimbaran', 'Hindu', '081888928398', 'FMIPA', 'Informatika', 'Verifikasi'),
('1708561073', 'Ni Putu Mira Novita Dewi', 'P', 'Denpasar', '1998-04-28', 'Jalan Paku Sari III No. 38', 'Hindu', '082146452927', 'FMIPA', 'Informatika', 'Verifikasi'),
('1708561074', 'Zhaqy Hikkammi Gullam Ramadhan', 'L', 'Denpasar', '1999-12-31', 'Bukit Jimbaran', 'Islam', '089765345265', 'FMIPA', 'Informatika', 'Verifikasi'),
('1708561075', 'Putu Pasek Wahyu Chandra Putra', 'L', 'Denpasar', '1999-12-31', 'Bukit Jimbaran', 'Hindu', '081453278666', 'FMIPA', 'Informatika', 'Verifikasi'),
('1708561077', 'Ni Putu Vidya Vira Prashanti', 'P', 'Klungkung', '1999-05-12', 'Jln. Warapsari, Br. Tangkas, Ds. Gelgel', 'Hindu', '085203511423', 'FMIPA', 'Informatika', 'Verifikasi'),
('1708561078', 'I Kadek Agus Andika Putra', 'L', 'Denpasar', '1999-12-31', 'Bukit Jimbaran', 'Hindu', '081777656434', 'FMIPA', 'Informatika', 'Verifikasi'),
('1708561079', 'Agus Prayogo', 'L', 'Denpasar', '1999-12-31', 'Denpasar', 'Islam', '089767564545', 'FMIPA', 'Informatika', 'Verifikasi'),
('1708561081', 'Gregorius Ericco Jansen', 'L', 'Denpasar', '1999-12-31', 'Bukit Jimbaran', 'Islam', '082324324333', 'FMIPA', 'Informatika', 'Verifikasi'),
('1708561082', 'Ni Made Sinta Wahyuni', 'P', 'Denpasar', '1999-03-22', 'Bukit Jimbaran Badung', 'Hindu', '087675453265', 'FMIPA', 'Informatika', 'Verifikasi'),
('1708561085', 'Winda Rianty', 'P', 'Denpasar', '1999-04-29', 'Bukit Jimbaran', 'Islam', '086756453454', 'FMIPA', 'Informatika', 'Verifikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `KodeMK` int(11) NOT NULL,
  `NamaMK` varchar(50) NOT NULL,
  `Dosen` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`KodeMK`, `NamaMK`, `Dosen`) VALUES
(1, 'Matematika', '196704141992031002'),
(2, 'Jaringan', '198006162005011001'),
(3, 'Praktikum Web', '198006162005011001'),
(4, 'Pemrograman Berbasis Objek', '198812282014041001'),
(5, 'Kewirausahaan', '198012062006041003'),
(6, 'Basis Data', '198503152010121007');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mkmahasiswa`
--

CREATE TABLE `mkmahasiswa` (
  `KodeMhsMK` int(11) NOT NULL,
  `KodeMK` int(11) NOT NULL,
  `NIM` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mkmahasiswa`
--

INSERT INTO `mkmahasiswa` (`KodeMhsMK`, `KodeMK`, `NIM`) VALUES
(1, 3, '1708561069'),
(2, 5, '1708561073'),
(3, 1, '1708561077'),
(4, 2, '1708561069'),
(5, 1, '1708561069'),
(6, 5, '1708561069'),
(7, 6, '1708561069');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembimbing`
--

CREATE TABLE `pembimbing` (
  `KodePembimbing` int(11) NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `NIM` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembimbing`
--

INSERT INTO `pembimbing` (`KodePembimbing`, `NIP`, `NIM`) VALUES
(1, '198503152010121007', '1708561069'),
(2, '196704141992031002', '1708561071'),
(3, '198310222008121001', '1708561072'),
(4, '197511052005011004', '1708561073'),
(5, '198503152010121007', '1708561074'),
(6, '198310222008121001', '1708561075'),
(7, '198812282014041001', '1708561077'),
(8, '198409242008011007', '1708561078'),
(9, '198901272012121001', '1708561079'),
(10, '198201242005021002', '1708561081'),
(11, '198006162005011001', '1708561082'),
(12, '198901272012121001', '1708561085');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `KodeUser` varchar(20) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Pwd` varchar(20) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Otoritas` enum('Dosen','Mahasiswa','Staff') NOT NULL,
  `Status` enum('Verifikasi','Meninggal','Putus Kontrak','Belum Bayar','Mutasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`KodeUser`, `Username`, `Pwd`, `Nama`, `Otoritas`, `Status`) VALUES
('123232', 'qedqw', 'qweqw', 'weq', 'Mahasiswa', 'Verifikasi'),
('12345', 'agung', 'agung', 'Pak Agung', 'Staff', 'Verifikasi'),
('1708561069', 'teguh', 'teguh', 'Teguh', 'Mahasiswa', 'Verifikasi'),
('1708561077', 'vira', 'vidya', 'vidya', 'Mahasiswa', 'Verifikasi'),
('198006162005011001', 'gusmul', 'gusmul123', 'Agus Muliantara', 'Dosen', 'Verifikasi'),
('4', 'wewe', '1234', 'wewe', 'Mahasiswa', 'Verifikasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`KodeKelas`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`KodeMK`);

--
-- Indeks untuk tabel `mkmahasiswa`
--
ALTER TABLE `mkmahasiswa`
  ADD PRIMARY KEY (`KodeMhsMK`);

--
-- Indeks untuk tabel `pembimbing`
--
ALTER TABLE `pembimbing`
  ADD PRIMARY KEY (`KodePembimbing`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`KodeUser`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `KodeKelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `KodeMK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `mkmahasiswa`
--
ALTER TABLE `mkmahasiswa`
  MODIFY `KodeMhsMK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pembimbing`
--
ALTER TABLE `pembimbing`
  MODIFY `KodePembimbing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
