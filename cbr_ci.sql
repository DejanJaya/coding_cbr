-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Sep 2021 pada 15.00
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbr_ci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(17) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `nik`, `email`, `password`) VALUES
(3, 'ronikun', '32147483647', 'roni@gmail.com', '$2y$10$GBbLU5FzI.UVX4ceVCWdL.8t4EOg9YE7UYlZn5UzpBfEp0mjn9hKu'),
(4, 'sanjaya', '3275053403960005', 'sanjaya@gmail.com', '$2y$10$q./6TzztQklh3/Ks9IEnluv8CpvUH98p61vz5tFsazvX31UynDo.S');

-- --------------------------------------------------------

--
-- Struktur dari tabel `analisa_hasil`
--

CREATE TABLE `analisa_hasil` (
  `id` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelamin` char(10) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kd_penyakit` char(4) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `analisa_hasil`
--

INSERT INTO `analisa_hasil` (`id`, `nama`, `kelamin`, `umur`, `alamat`, `kd_penyakit`, `tanggal`) VALUES
(1, 'Mutiara', 'Wanita', '22', 'Jogja', 'P04', '2021-07-06 15:58:58'),
(2, 'Mutiara', 'Wanita', '22', 'Jogja', 'P03', '2021-07-06 15:58:58'),
(3, 'Mutiara', 'Wanita', '22', 'Jogja', 'P05', '2021-07-06 15:58:58'),
(4, 'Mutiara', 'Wanita', '22', 'Jogja', 'P02', '2021-07-06 15:58:58'),
(5, 'Mutiara', 'Wanita', '22', 'Jogja', 'P01', '2021-07-06 15:58:58'),
(6, 'Mutiara', 'Wanita', '22', 'Jogja', 'P06', '2021-07-06 15:58:58'),
(7, 'Bumi', 'Laki-laki', '18', 'Solo', 'P07', '2021-07-06 17:59:09'),
(8, 'Bumi', 'Laki-laki', '18', 'Solo', 'P01', '2021-07-06 17:59:09'),
(9, 'Bumi', 'Laki-laki', '18', 'Solo', 'P03', '2021-07-06 17:59:09'),
(10, 'Bumi', 'Laki-laki', '18', 'Solo', 'P02', '2021-07-06 17:59:09'),
(11, 'Bumi', 'Laki-laki', '18', 'Solo', 'P04', '2021-07-06 17:59:09'),
(12, 'Bumi', 'Laki-laki', '18', 'Solo', 'P05', '2021-07-06 17:59:09'),
(13, 'Bumi', 'Laki-laki', '18', 'Solo', 'P07', '2021-07-06 17:59:09'),
(14, 'Bumi', 'Laki-laki', '18', 'Solo', 'P05', '2021-07-06 17:59:09'),
(15, 'Bumi', 'Laki-laki', '18', 'Solo', 'P01', '2021-07-06 17:59:09'),
(16, 'Bumi', 'Laki-laki', '18', 'Solo', 'P03', '2021-07-06 17:59:09'),
(17, 'Bumi', 'Laki-laki', '18', 'Solo', 'P02', '2021-07-06 17:59:09'),
(18, 'Bumi', 'Laki-laki', '18', 'Solo', 'P04', '2021-07-06 17:59:09'),
(19, 'Bumi', 'Laki-laki', '18', 'Solo', 'P07', '2021-07-06 17:59:09'),
(20, 'Bumi', 'Laki-laki', '18', 'Solo', 'P03', '2021-07-06 17:59:09'),
(21, 'Bumi', 'Laki-laki', '18', 'Solo', 'P04', '2021-07-06 17:59:09'),
(22, 'Bumi', 'Laki-laki', '18', 'Solo', 'P05', '2021-07-06 17:59:09'),
(23, 'Bumi', 'Laki-laki', '18', 'Solo', 'P01', '2021-07-06 17:59:09'),
(24, 'Bumi', 'Laki-laki', '18', 'Solo', 'P02', '2021-07-06 17:59:09'),
(25, 'Vika Amalia', 'Wanita', '43', 'Jakarta', 'P03', '2021-07-06 18:16:23'),
(26, 'Vika Amalia', 'Wanita', '43', 'Jakarta', 'P04', '2021-07-06 18:16:23'),
(27, 'Vika Amalia', 'Wanita', '43', 'Jakarta', 'P05', '2021-07-06 18:16:23'),
(28, 'Vika Amalia', 'Wanita', '43', 'Jakarta', 'P02', '2021-07-06 18:16:23'),
(29, 'Vika Amalia', 'Wanita', '43', 'Jakarta', 'P01', '2021-07-06 18:16:23'),
(30, 'Vika Amalia', 'Wanita', '43', 'Jakarta', 'P06', '2021-07-06 18:16:23'),
(31, 'Vika Amalia', 'Wanita', '43', 'Jakarta', 'P04', '2021-07-06 18:16:23'),
(32, 'Vika Amalia', 'Wanita', '43', 'Jakarta', 'P03', '2021-07-06 18:16:23'),
(33, 'Vika Amalia', 'Wanita', '43', 'Jakarta', 'P05', '2021-07-06 18:16:23'),
(34, 'Vika Amalia', 'Wanita', '43', 'Jakarta', 'P02', '2021-07-06 18:16:23'),
(35, 'Vika Amalia', 'Wanita', '43', 'Jakarta', 'P01', '2021-07-06 18:16:23'),
(36, 'Vika Amalia', 'Wanita', '43', 'Jakarta', 'P06', '2021-07-06 18:16:23'),
(37, 'Mutiara', 'Wanita', '22', 'Jogja', 'P04', '2021-07-06 19:24:48'),
(38, 'Mutiara', 'Wanita', '22', 'Jogja', 'P03', '2021-07-06 19:24:48'),
(39, 'Mutiara', 'Wanita', '22', 'Jogja', 'P05', '2021-07-06 19:24:48'),
(40, 'Mutiara', 'Wanita', '22', 'Jogja', 'P02', '2021-07-06 19:24:48'),
(41, 'Mutiara', 'Wanita', '22', 'Jogja', 'P01', '2021-07-06 19:24:48'),
(42, 'Mutiara', 'Wanita', '22', 'Jogja', 'P06', '2021-07-06 19:24:48'),
(43, 'Mutiara', 'Wanita', '22', 'Jogja', 'P04', '2021-07-06 19:49:00'),
(44, 'Mutiara', 'Wanita', '22', 'Jogja', 'P03', '2021-07-06 19:49:00'),
(45, 'Mutiara', 'Wanita', '22', 'Jogja', 'P05', '2021-07-06 19:49:00'),
(46, 'Mutiara', 'Wanita', '22', 'Jogja', 'P02', '2021-07-06 19:49:00'),
(47, 'Mutiara', 'Wanita', '22', 'Jogja', 'P01', '2021-07-06 19:49:00'),
(48, 'Mutiara', 'Wanita', '22', 'Jogja', 'P06', '2021-07-06 19:49:00'),
(49, 'roni', 'Laki-laki', '15', 'rawa bengkok', 'P04', '2021-09-21 21:17:20'),
(50, 'roni', 'Laki-laki', '15', 'rawa bengkok', 'P01', '2021-09-21 21:17:20'),
(51, 'roni', 'Laki-laki', '15', 'rawa bengkok', 'P02', '2021-09-21 21:17:20'),
(52, 'roni', 'Laki-laki', '15', 'rawa bengkok', 'P03', '2021-09-21 21:17:20'),
(53, 'roni', 'Laki-laki', '15', 'rawa bengkok', 'P05', '2021-09-21 21:17:20'),
(54, 'roni', 'Laki-laki', '15', 'rawa bengkok', 'P06', '2021-09-21 21:17:20'),
(55, 'iyangs', 'Wanita', '18', 'rawa rawa', 'P03', '2021-09-21 22:19:14'),
(56, 'iyangs', 'Wanita', '18', 'rawa rawa', 'P06', '2021-09-21 22:19:14'),
(57, 'iyangs', 'Wanita', '18', 'rawa rawa', 'P04', '2021-09-21 22:19:14'),
(58, 'iyangs', 'Wanita', '18', 'rawa rawa', 'P05', '2021-09-21 22:19:14'),
(59, 'iyangs', 'Wanita', '18', 'rawa rawa', 'P02', '2021-09-21 22:19:14'),
(60, 'iyangs', 'Wanita', '18', 'rawa rawa', 'P01', '2021-09-21 22:19:14'),
(61, 'latif', 'Laki-laki', '23', 'babelan', 'P02', '2021-09-24 14:11:45'),
(62, 'latif', 'Laki-laki', '23', 'babelan', 'P06', '2021-09-24 14:11:45'),
(63, 'latif', 'Laki-laki', '23', 'babelan', 'P01', '2021-09-24 14:11:45'),
(64, 'latif', 'Laki-laki', '23', 'babelan', 'P04', '2021-09-24 14:11:45'),
(65, 'latif', 'Laki-laki', '23', 'babelan', 'P03', '2021-09-24 14:11:45'),
(66, 'latif', 'Laki-laki', '23', 'babelan', 'P05', '2021-09-24 14:11:45'),
(67, 'latif', 'Laki-laki', '23', 'babelan', 'P02', '2021-09-24 14:11:45'),
(68, 'latif', 'Laki-laki', '23', 'babelan', 'P06', '2021-09-24 14:11:45'),
(69, 'latif', 'Laki-laki', '23', 'babelan', 'P01', '2021-09-24 14:11:45'),
(70, 'latif', 'Laki-laki', '23', 'babelan', 'P04', '2021-09-24 14:11:45'),
(71, 'latif', 'Laki-laki', '23', 'babelan', 'P03', '2021-09-24 14:11:45'),
(72, 'latif', 'Laki-laki', '23', 'babelan', 'P05', '2021-09-24 14:11:45'),
(73, 'latif', 'Laki-laki', '23', 'babelan', 'P01', '2021-09-24 14:11:45'),
(74, 'latif', 'Laki-laki', '23', 'babelan', 'P02', '2021-09-24 14:11:45'),
(75, 'latif', 'Laki-laki', '23', 'babelan', 'P03', '2021-09-24 14:11:45'),
(76, 'latif', 'Laki-laki', '23', 'babelan', 'P04', '2021-09-24 14:11:45'),
(77, 'latif', 'Laki-laki', '23', 'babelan', 'P05', '2021-09-24 14:11:45'),
(78, 'latif', 'Laki-laki', '23', 'babelan', 'P06', '2021-09-24 14:11:45'),
(79, 'latifah', 'Wanita', '15', 'rawa bengkok', 'P02', '2021-09-25 10:26:07'),
(80, 'latifah', 'Wanita', '15', 'rawa bengkok', 'P03', '2021-09-25 10:26:07'),
(81, 'latifah', 'Wanita', '15', 'rawa bengkok', 'P04', '2021-09-25 10:26:07'),
(82, 'latifah', 'Wanita', '15', 'rawa bengkok', 'P05', '2021-09-25 10:26:07'),
(83, 'latifah', 'Wanita', '15', 'rawa bengkok', 'P06', '2021-09-25 10:26:07'),
(84, 'latifah', 'Wanita', '15', 'rawa bengkok', 'P07', '2021-09-25 10:26:07'),
(85, 'ronay', 'Laki-laki', '21', 'rawa bengkoks', 'P18', '2021-09-26 12:56:53'),
(86, 'ronay', 'Laki-laki', '21', 'rawa bengkoks', 'P19', '2021-09-26 12:56:53'),
(87, 'ronay', 'Laki-laki', '21', 'rawa bengkoks', 'P14', '2021-09-26 12:56:53'),
(88, 'ronay', 'Laki-laki', '21', 'rawa bengkoks', 'P15', '2021-09-26 12:56:53'),
(89, 'ronay', 'Laki-laki', '21', 'rawa bengkoks', 'P16', '2021-09-26 12:56:53'),
(90, 'ronay', 'Laki-laki', '21', 'rawa bengkoks', 'P17', '2021-09-26 12:56:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `kd_gejala` char(4) NOT NULL,
  `gejala` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`kd_gejala`, `gejala`) VALUES
('ML01', 'Teflon panas saat adonan dituang'),
('ML02', 'Teflon terlalu panas saat adonan dituang'),
('ML03', 'Teflon belum panas saat adonan dituang'),
('ML04', 'Teflon tidak ditutup ketika memasak'),
('ML05', 'Nyala api diawal besar saat memasak'),
('ML06', 'Nyala api diawal sedang saat memasak'),
('ML07', 'Nyala api di awal kecil saat memasak'),
('ML08', 'Nyala api besar saat adonan sudah ditaburi gula'),
('ML09', 'Nyala api sedang saat adonan sudah ditaburi gula'),
('ML10', 'Nyala api kecil saat adonan sudah ditaburi gula'),
('ML11', 'Kelamaan memasak'),
('ML12', 'Takaran bahan-bahan adonan benar'),
('ML13', 'Takaran bahan-bahan adonan salah'),
('ML14', 'Lamanya adukan dalam membuat adonan'),
('ML15', 'Kurang Lamanya adukan dalam membuat adonan'),
('ML16', 'Kekentalan adonan cukup	'),
('ML17', 'Adonan terlalu encer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id` int(11) NOT NULL,
  `kd_penyakit` char(4) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit_solusi`
--

CREATE TABLE `penyakit_solusi` (
  `kd_penyakit` char(4) NOT NULL,
  `nama_penyakit` varchar(30) DEFAULT NULL,
  `definisi` text DEFAULT NULL,
  `solusi` text DEFAULT NULL,
  `foto` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyakit_solusi`
--

INSERT INTO `penyakit_solusi` (`kd_penyakit`, `nama_penyakit`, `definisi`, `solusi`, `foto`) VALUES
('P01', 'Martabak gosong 0%', 'Martabak dengan hasil yang paling baik.', 'Mempertahankan hasil adonan dengan baik dan menambah dengan mengutamakan cita rasa dengan berbagai topping', 'martabak_gosong0%.jpg'),
('P02', 'Martabak gosong 3%', 'Martabak bisa dimakan dan bisa dijual', 'Memperhatikan lama waktu dalam memasak`', 'martabak_gosong3%.jpg'),
('P03', 'Martabak gosong 5%', 'Martabak bisa dimakan dan bisa dijual', 'Memperhatikan lama waktu dalam memasak', 'martabak_gosong5%.jpg'),
('P20', 'Martabak Bantet', 'Martabak tidak mengembang, hasilnya kurang bagus dan tidak dapat dijual', 'Melakukan proses pembuatan adonan dengan benar', 'martabak_bantett.jpg'),
('P04', 'Martabak gosong 10%', 'Martabak bisa dimakan dan bisa dijual', 'Memperhatikan lama waktu dalam memasak', 'martabak_gosong10%.jpg'),
('P17', 'Martabak gosong 80%', 'Kulit martabak gosong, bagian dalam nya masih bisa dimakan tetapi hasilnya tidak dapat dijual', 'Mengatur besar kecilnya api dan lama waktu memasak', 'martabak_gosong80%.jpg'),
('P18', 'Martabak gosong 90%', 'Kulit martabak gosong, bagian dalam nya masih bisa dimakan tetapi hasilnya tidak dapat dijual', 'Mengatur besar kecilnya api dan lama waktu memasak', 'martabak_gosong90%.jpg'),
('P19', 'Martabak gosong 100%', 'Warna kulit martabak hitam, tidak bisa dimakan karena rasanya yang pahit dan tidak dapat dijual	', 'Lebih diperhatikan dalam proses memasak', 'martabak_gosong100%.jpg'),
('P05', 'Martabak gosong 15%', 'Martabak bisa dimakan dan bisa dijual', 'Memperhatikan lama waktu dalam memasak', 'martabak_gosong15%.jpg'),
('P15', 'Martabak gosong 60%', 'Kulit martabak gosong, bagian dalam nya masih bisa dimakan tetapi hasilnya tidak dapat dijua', 'Mengatur besar kecilnya api dan lama waktu memasak', 'martabak_gosong60%.jpg'),
('P16', 'Martabak gosong 70%', 'Kulit martabak gosong, bagian dalam nya masih bisa dimakan tetapi hasilnya tidak dapat dijual', 'Mengatur besar kecilnya api dan lama waktu memasak', 'martabak_gosong70%.jpg'),
('P06', 'Martabak gosong 20%', 'Martabak bisa dimakan dan bisa dijual	', 'Memperhatikan lama waktu dalam memasak', 'martabak_gosong20%.jpg'),
('P11', 'Martabak gosong 35%', 'Martabak bisa dimakan dan bisa dijual', 'Memperhatikan lama waktu dalam memasak', 'martabak_gosong35%.jpg'),
('P12', 'Martabak gosong 40%', 'Martabak bisa dimakan dan bisa dijual', 'Memperhatikan lama waktu dalam memasak', 'martabak_gosong40%.jpg'),
('P13', 'Martabak gosong 45%', 'Martabak bisa dimakan dan bisa dijual', 'Memperhatikan lama waktu dalam memasak', 'martabak_gosong45%.jpg'),
('P14', 'Martabak gosong 50%', 'Kulit martabak gosong, bagian dalam nya masih bisa dimakan tetapi hasilnya tidak dapat dijual', 'Mengatur besar kecilnya api dan lama waktu memasak', 'martabak_gosong50%.jpg'),
('P07', 'Martabak gosong 22%', 'Martabak bisa dimakan dan bisa dijual', 'Memperhatikan lama waktu dalam memasak', 'martabak_gosong22%.jpg'),
('P08', 'Martabak gosong 25%', 'Martabak bisa dimakan dan bisa dijual', 'Memperhatikan lama waktu dalam memasak', 'martabak_gosong25%.jpg'),
('P09', 'Martabak gosong 30%', 'Martabak bisa dimakan dan bisa dijual', 'Memperhatikan lama waktu dalam memasak', 'martabak_gosong30%.jpg'),
('P10', 'Martabak gosong 32%', 'Martabak bisa dimakan dan bisa dijual', 'Memperhatikan lama waktu dalam memasak', 'martabak_gosong32%.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `relasi`
--

CREATE TABLE `relasi` (
  `id_relasi` int(4) NOT NULL,
  `kd_gejala` char(4) NOT NULL,
  `kd_penyakit` char(4) NOT NULL,
  `nilai_kemiripan` varchar(60) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `relasi`
--

INSERT INTO `relasi` (`id_relasi`, `kd_gejala`, `kd_penyakit`, `nilai_kemiripan`, `bobot`) VALUES
(1, 'ML16', 'P01', '1', 7),
(2, 'ML12', 'P01', '1', 7),
(3, 'ML14', 'P01', '1', 7),
(4, 'ML01', 'P01', '1', 5),
(5, 'ML06', 'P01', '1', 5),
(6, 'ML10', 'P01', '1', 5),
(7, 'ML01', 'P02', '0', 5),
(8, 'ML06', 'P02', '1', 5),
(9, 'ML10', 'P02', '1', 5),
(10, 'ML11', 'P02', '1', 7),
(11, 'ML01', 'P03', '0', 5),
(12, 'ML06', 'P03', '1', 5),
(14, 'ML10', 'P03', '1', 5),
(15, 'ML11', 'P03', '1', 7),
(16, 'ML01', 'P04', '0', 5),
(17, 'ML06', 'P04', '1', 5),
(18, 'ML10', 'P04', '1', 5),
(19, 'ML11', 'P04', '1', 7),
(20, 'ML01', 'P05', '0', 5),
(21, 'ML06', 'P05', '1', 5),
(28, 'ML10', 'P05', '1', 5),
(27, 'ML11', 'P05', '1', 7),
(26, 'ML01', 'P06', '0', 5),
(25, 'ML06', 'P06', '1', 5),
(24, 'ML10', 'P06', '1', 5),
(22, 'ML11', 'P06', '1', 7),
(23, 'ML01', 'P07', '0', 5),
(29, 'ML06', 'P07', '1', 5),
(30, 'ML10', 'P07', '1', 5),
(31, 'ML11', 'P07', '1', 7),
(32, 'ML01', 'P08', '0', 5),
(33, 'ML06', 'P08', '1', 5),
(34, 'ML10', 'P08', '1', 5),
(35, 'ML11', 'P08', '1', 7),
(36, 'ML01', 'P09', '0', 5),
(37, 'ML06', 'P09', '1', 5),
(38, 'ML10', 'P09', '1', 5),
(43, 'ML11', 'P09', '1', 7),
(45, 'ML01', 'P10', '0', 5),
(46, 'ML06', 'P10', '1', 5),
(44, 'ML10', 'P10', '1', 5),
(48, 'ML11', 'P10', '1', 7),
(49, 'ML01', 'P11', '0', 5),
(50, 'ML06', 'P11', '1', 5),
(51, 'ML10', 'P11', '1', 5),
(52, 'ML11', 'P11', '1', 7),
(53, 'ML01', 'P12', '0', 5),
(54, 'ML06', 'P12', '1', 5),
(55, 'ML09', 'P12', '1', 5),
(56, 'ML11', 'P12', '1', 7),
(57, 'ML01', 'P13', '0', 5),
(58, 'ML06', 'P13', '1', 5),
(59, 'ML09', 'P13', '1', 5),
(60, 'ML11', 'P13', '1', 7),
(61, 'ML01', 'P14', '1', 5),
(62, 'ML05', 'P14', '1', 5),
(63, 'ML09', 'P14', '1', 5),
(64, 'ML11', 'P14', '1', 7),
(65, 'ML04', 'P14', '0', 3),
(66, 'ML01', 'P15', '1', 5),
(67, 'ML05', 'P15', '1', 5),
(68, 'ML09', 'P15', '1', 5),
(69, 'ML11', 'P15', '1', 7),
(70, 'ML04', 'P15', '0', 3),
(71, 'ML01', 'P16', '1', 5),
(72, 'ML05', 'P16', '1', 5),
(73, 'ML09', 'P16', '1', 5),
(74, 'ML11', 'P16', '1', 7),
(75, 'ML04', 'P16', '0', 3),
(76, 'ML01', 'P17', '1', 5),
(77, 'ML05', 'P17', '1', 5),
(78, 'ML09', 'P17', '1', 5),
(79, 'ML11', 'P17', '1', 7),
(80, 'ML04', 'P17', '0', 3),
(81, 'ML02', 'P18', '1', 7),
(82, 'ML05', 'P18', '1', 5),
(83, 'ML09', 'P18', '1', 5),
(84, 'ML11', 'P18', '1', 7),
(85, 'ML04', 'P18', '0', 3),
(86, 'ML02', 'P19', '1', 7),
(87, 'ML05', 'P19', '1', 5),
(88, 'ML08', 'P19', '1', 5),
(89, 'ML04', 'P19', '0', 3),
(90, 'ML11', 'P19', '1', 7),
(91, 'ML17', 'P20', '1', 7),
(92, 'ML13', 'P20', '1', 7),
(93, 'ML15', 'P20', '1', 7),
(94, 'ML03', 'P20', '0', 3),
(95, 'ML07', 'P20', '1', 5),
(96, 'ML10', 'P20', '1', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `password` varchar(255) NOT NULL,
  `berat_badan` varchar(12) NOT NULL,
  `tinggi_badan` varchar(12) NOT NULL,
  `indeks` double(3,1) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `no_telp`, `password`, `berat_badan`, `tinggi_badan`, `indeks`, `keterangan`) VALUES
(7, 'zafran', 'zafran@gmail.com', '089238978902', '$2y$10$0FWnSTj5HAq4bwUI0VmjX.YqDnNeG.gVoV2tl7rMD/9vC4TUEBDZu', '89', '180', 27.5, 'Obesitas'),
(8, 'maya', 'maya@gmail.com', '089798687902', '$2y$10$xB1BsU341rhdjXGwu195KOt635cvFPrBL0drc48KmBCEzsYTNngZy', '57', '160', 22.3, 'Normal'),
(9, 'sonia', 'sonia@gmail.com', '087978986234', '$2y$10$0yJ0dtSAcPEHK7D3nyXoTee73y6DPZDgb4rCcFY3Dy1va2eTdnENq', '57', '160', 22.3, 'Normal'),
(10, 'arif', 'arif@gmail.com', '089865242552', '$2y$10$D7MI8hXwxj9wEfIX7DhmserLSWeSXEKkF9bKPIR.A0WJe6sAFx0DG', '55', '165', 20.2, 'Normal'),
(11, 'riki', 'riki@gmail.com', '0673838930930', '$2y$10$r18uFyEffNbtrhgmG.7Fyun4C/XECpRJtc3YffYfCAKM3SYnF2SwO', '80', '173', 26.7, 'Obesitas'),
(12, 'hanabi', 'hanabi@gmail.com', '087865463738', '$2y$10$dhRJpKw0Kh.7ifN1w7xbhOaT3a2E55jmDyDY8kF/vHpCvn7zSCukG', '76', '172', 25.7, 'Obesitas'),
(13, 'miya', 'miya@gmail.com', '098292374834', '$2y$10$U6cENcWI8mJcMuvXQxaROuJdJNUNonQG1mnoZmCWYeacDijWr6cW6', '65', '160', 25.4, 'Obesitas'),
(14, 'andi', 'andi@gmail.com', '0875698746382', '$2y$10$ft6zE6qF5atBOSFbJzX7FegBMd3JUZiqXRwR2Ei3iIcSO.8reCuiG', '65', '170', 22.5, 'Normal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_analisa`
--

CREATE TABLE `tmp_analisa` (
  `noip` varchar(30) NOT NULL,
  `kd_penyakit` char(4) NOT NULL,
  `kd_gejala` char(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_gejala`
--

CREATE TABLE `tmp_gejala` (
  `noip` int(3) NOT NULL,
  `kd_gejala` char(4) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tmp_gejala`
--

INSERT INTO `tmp_gejala` (`noip`, `kd_gejala`, `bobot`) VALUES
(185, 'ML02', 0),
(186, 'ML03', 0),
(187, 'ML04', 0),
(188, 'ML05', 0),
(189, 'ML06', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_pasien`
--

CREATE TABLE `tmp_pasien` (
  `id` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelamin` char(10) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `noip` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tmp_pasien`
--

INSERT INTO `tmp_pasien` (`id`, `nama`, `kelamin`, `umur`, `alamat`, `noip`, `tanggal`) VALUES
(125, 'ronay', 'Laki-laki', '21', 'rawa bengkoks', '::1', '2021-09-26 12:56:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_penyakit`
--

CREATE TABLE `tmp_penyakit` (
  `noip` varchar(30) NOT NULL,
  `kd_penyakit` char(4) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tmp_penyakit`
--

INSERT INTO `tmp_penyakit` (`noip`, `kd_penyakit`, `nilai`) VALUES
('', 'P01', 0.13888888888889),
('', 'P02', 0.22727272727273),
('', 'P03', 0.22727272727273),
('', 'P04', 0.22727272727273),
('', 'P05', 0.22727272727273),
('', 'P06', 0.22727272727273),
('', 'P07', 0.22727272727273),
('', 'P08', 0.22727272727273),
('', 'P09', 0.22727272727273),
('', 'P10', 0.22727272727273),
('', 'P11', 0.22727272727273),
('', 'P12', 0.22727272727273),
('', 'P13', 0.22727272727273),
('', 'P14', 0.32),
('', 'P15', 0.32),
('', 'P16', 0.32),
('', 'P17', 0.32),
('', 'P18', 0.55555555555556),
('', 'P19', 0.55555555555556),
('', 'P20', 0.088235294117647);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `analisa_hasil`
--
ALTER TABLE `analisa_hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kd_gejala`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `penyakit_solusi`
--
ALTER TABLE `penyakit_solusi`
  ADD PRIMARY KEY (`kd_penyakit`);

--
-- Indeks untuk tabel `relasi`
--
ALTER TABLE `relasi`
  ADD PRIMARY KEY (`id_relasi`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tmp_analisa`
--
ALTER TABLE `tmp_analisa`
  ADD PRIMARY KEY (`noip`);

--
-- Indeks untuk tabel `tmp_gejala`
--
ALTER TABLE `tmp_gejala`
  ADD PRIMARY KEY (`noip`);

--
-- Indeks untuk tabel `tmp_pasien`
--
ALTER TABLE `tmp_pasien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `analisa_hasil`
--
ALTER TABLE `analisa_hasil`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `relasi`
--
ALTER TABLE `relasi`
  MODIFY `id_relasi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tmp_gejala`
--
ALTER TABLE `tmp_gejala`
  MODIFY `noip` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT untuk tabel `tmp_pasien`
--
ALTER TABLE `tmp_pasien`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
