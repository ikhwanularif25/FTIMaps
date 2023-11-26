-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2023 pada 14.16
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
-- Database: `ftimaps`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gedung`
--

CREATE TABLE `gedung` (
  `id_gedung` varchar(50) NOT NULL,
  `keterangan tempat` text NOT NULL,
  `gmaps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gedung`
--

INSERT INTO `gedung` (`id_gedung`, `keterangan tempat`, `gmaps`) VALUES
('Fakultas Teknologi Informasi', 'Gedung Fakultas Teknologi berada menyatu dengan Gedung E, dekat dengan Gedung Pascasarjana. Pada Fakultas Teknologi Informasi terdapat ruang administrasi, kantor dekan dan staf administratif fakultas, PKM (Pusat Kegiatan Mahasiswa), ruang rapat FTI, ruang Baca, mushala, toilet, serta laboratorium-laboratorium setiap departemen yang ada di Fakultas Teknologi Informasi yaitu Departemen Teknik Komputer, Sistem Informasi, dan Informatika.\r\n', 'src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3091786493746!2d100.45847837590176!3d-0.9153454353351366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b7963e1ea631%3A0x452d09b61f76d6ec!2sFaculty%20of%20Information%20Technology!5e0!3m2!1sen!2sid!4v1700993283989!5m2!1sen!2sid\"'),
('Gedung Kuliah H', 'Di Gedung H terdapat ruang perkuliahan makasiswa-mahasiswa FTI yang berada di lantai 2. Ruang H2.1 sampai H2.10, digunakan untuk kegiatan perkuliahan mahasiswa Fakultas Teknologi Informasi\r\n', 'src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d597.3490260935719!2d100.46184714724784!3d-0.914105783856268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b7e03a473565%3A0x12058efa21768eb3!2sGedung%20H%20Universitas%20Andalas!5e0!3m2!1sen!2sid!4v1700993338144!5m2!1sen!2sid\"'),
('Gedung PKM Fakultas Teknologi Informasi', '[value-2f]', 'src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.33181994553732!2d100.4610476419704!3d-0.9153989387504241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b7493081ae99%3A0xac1d322cd525652f!2sPusat%20Kegiatan%20Mahasiswa%20(PKM)%20FTI%20Unand!5e0!3m2!1sen!2sid!4v1700993535038!5m2!1sen!2sid\"'),
('Ruang Dosen Teknik Komputer', '[value-2c]', 'src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.33181994553732!2d100.4610476419704!3d-0.9153989387504241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b7f3d42ca00b%3A0xbbd2ac52f2747de7!2sRuang%20Dosen%20Departemen%20Teknik%20Komputer!5e0!3m2!1sen!2sid!4v1700993427747!5m2!1sen!2sid\"'),
('Ruang Jurusan Teknik Komputer', '[value-2d]', 'src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.33181994553732!2d100.4610476419704!3d-0.9153989387504241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b7cb32c231fd%3A0x926b67435799f763!2sComputer%20Engineering%20Department!5e0!3m2!1sen!2sid!4v1700993483735!5m2!1sen!2sid\"');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`id_gedung`),
  ADD UNIQUE KEY `gmaps` (`gmaps`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
