-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2024 pada 21.30
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_mapel` int(10) NOT NULL,
  `id_guru` varchar(10) NOT NULL,
  `nama_guru` varchar(35) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `ttl` date NOT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_mapel`, `id_guru`, `nama_guru`, `alamat`, `gender`, `ttl`, `telp`) VALUES
(4, '110', 'wewe', 'adassa', 'L', '1990-09-12', '082396315624'),
(5, '111', 'nurul', 'bantul', 'P', '1988-09-16', '081399675679'),
(4, '113', 'suswanta', 'sleman', 'P', '1989-09-02', '083456789033'),
(3, '114', 'murdi', 'sanden', 'L', '2020-04-30', '089634681167'),
(2, '198', 'moo', 'sleman', 'P', '2024-10-03', '08765156781681'),
(1, '212', 'badrul', 'bantul', 'P', '2024-05-09', '08273616376127'),
(10, '219', 'wwwrue', 'sleman', 'L', '2023-12-08', '085177894172'),
(10, '222', 'dewi', 'bantul', 'P', '2023-12-02', '085631872164'),
(4, '233', 'saz', 'bantul', 'P', '2024-10-05', '085623185679'),
(1, '677', 'endah', 'sleman', 'P', '2024-10-04', '084738175178');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(10) NOT NULL,
  `nama_kelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
('1', 'xi rpl 3'),
('2', 'xi rpl 1'),
('3', 'xi akl 1'),
('4', 'xi akl 2'),
('5', 'xi akl 3'),
('6', 'X MP 2'),
('7', 'XI akl 5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` varchar(10) NOT NULL,
  `nama_mapel` varchar(35) NOT NULL,
  `id_guru` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`, `id_guru`) VALUES
('1', 'bahasa jepang', '1'),
('10', 'seni budaya', ''),
('2', 'pjok', '212'),
('3', 'bahasa jawa', '1'),
('4', 'Bahasa Indonesia', '110'),
('5', 'Matematika', '110'),
('6', 'Sejarah', '119'),
('7', 'PPKN', '114'),
('8', 'PAI', '115'),
('9', 'ppkn', '211');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(10) NOT NULL,
  `nama_siswa` varchar(35) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `ttl` date NOT NULL,
  `gender` varchar(1) NOT NULL,
  `id_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nisn`, `nama_siswa`, `alamat`, `ttl`, `gender`, `id_kelas`) VALUES
('1127', 'moot', 'bantul', '2023-11-03', 'P', '6'),
('1211', 's', 's', '2024-10-02', 'P', '3'),
('1229', 'hdsjas', 'sleman', '2024-10-05', 'L', '5'),
('1345', 'sbyu', 'aaa', '2024-10-05', 'P', '7'),
('1456', 'sas', 'bantul', '2024-10-04', 'L', '5'),
('17223', 'wuteuw', 'sanden', '2000-07-07', 'L', '6'),
('17224', 'mimin', 'bantul', '2002-04-12', 'P', '3'),
('17225', 'Dzulfikar Lintang Setyaji', 'bantul', '2024-10-03', 'L', '2'),
('17888', 'ada', 'bantul', '2023-08-16', 'L', '2'),
('1797', 'mutt', 'bantul', '2024-05-03', 'P', '2'),
('2121', 'fikri', 'sanden', '2024-01-03', 'L', '3'),
('2221', 'jarot', 'bantul', '2024-02-02', 'L', '2'),
('23243', 'david', 'bantul', '2024-10-05', 'L', '2'),
('3333', 's', 's', '2024-10-05', 'P', '1'),
('4444', 'sadd', 'bantul', '2023-12-08', 'P', '1'),
('458', 'xss', 'bantul', '2024-10-03', 'P', '1'),
('5555', 'q', 'a', '2024-10-03', 'L', '7'),
('5646', 'wahyu', 'sleman', '1886-02-28', 'L', '4'),
('6543', 'dwi', 'bantul', '2023-11-02', 'L', '3'),
('6766', 'asa', 'sleman', '2024-10-05', 'P', '1'),
('875', 'hiuh', 'sanden', '2024-10-05', 'L', '4');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
