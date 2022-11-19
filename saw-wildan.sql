-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 09:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saw-wildan`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil_rekomendasi`
--

CREATE TABLE `hasil_rekomendasi` (
  `id` int(11) NOT NULL,
  `kode_alternatif` varchar(3) NOT NULL,
  `hasil` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasil_rekomendasi`
--

INSERT INTO `hasil_rekomendasi` (`id`, `kode_alternatif`, `hasil`) VALUES
(2268, 'A22', 0.7),
(8430, 'A01', 0.73333333333333),
(8436, 'A02', 0.76666666666667),
(8442, 'A03', 0.75),
(8448, 'A04', 0.9),
(8454, 'A05', 0.8),
(8460, 'A06', 0.65),
(8466, 'A07', 0.86666666666667),
(8472, 'A08', 0.7),
(8478, 'A09', 0.81666666666667),
(8484, 'A10', 0.5),
(8490, 'A11', 0.71666666666667),
(8496, 'A12', 0.75),
(8502, 'A13', 0.6),
(8508, 'A14', 0.75),
(8514, 'A15', 0.6),
(8520, 'A16', 0.76666666666667),
(8526, 'A17', 0.58333333333333),
(8532, 'A18', 0.65),
(8538, 'A19', 0.8),
(8544, 'A20', 0.81666666666667),
(8550, 'A21', 0.75);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `kode_kriteria` varchar(3) NOT NULL,
  `nama_kriteria` varchar(30) NOT NULL,
  `atribut` varchar(30) NOT NULL,
  `nilai_input` varchar(15) NOT NULL,
  `nilai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`kode_kriteria`, `nama_kriteria`, `atribut`, `nilai_input`, `nilai`) VALUES
('C01', 'Pendidikan', 'Benefit', '15', '0.15'),
('C02', 'Pengalaman Kerja', 'Benefit', '15', '0.15'),
('C03', 'Penampilan', 'Benefit', '10', '0.1'),
('C04', 'Usia', 'Benefit', '15', '0.15'),
('C05', 'Wawancara', 'Benefit', '20', '0.2'),
('C06', 'Hasil Tes', 'Benefit', '25', '0.25');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_kriteria`
--

CREATE TABLE `nilai_kriteria` (
  `id` int(11) NOT NULL,
  `kode_alternatif` varchar(3) NOT NULL,
  `kode_kriteria` varchar(3) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_kriteria`
--

INSERT INTO `nilai_kriteria` (`id`, `kode_alternatif`, `kode_kriteria`, `nilai`) VALUES
(153, 'A01', 'C01', 3),
(154, 'A01', 'C02', 1),
(155, 'A01', 'C03', 2),
(156, 'A01', 'C04', 2),
(157, 'A02', 'C01', 2),
(158, 'A02', 'C02', 3),
(159, 'A02', 'C03', 3),
(160, 'A02', 'C04', 2),
(161, 'A03', 'C01', 3),
(162, 'A03', 'C02', 2),
(163, 'A03', 'C03', 3),
(164, 'A03', 'C04', 2),
(165, 'A04', 'C01', 2),
(166, 'A04', 'C02', 3),
(167, 'A04', 'C03', 3),
(168, 'A04', 'C04', 2),
(169, 'A05', 'C01', 2),
(170, 'A05', 'C02', 3),
(171, 'A05', 'C03', 3),
(172, 'A05', 'C04', 3),
(173, 'A06', 'C01', 3),
(174, 'A06', 'C02', 3),
(175, 'A06', 'C03', 1),
(176, 'A06', 'C04', 2),
(177, 'A07', 'C01', 3),
(178, 'A07', 'C02', 2),
(179, 'A07', 'C03', 3),
(180, 'A07', 'C04', 3),
(181, 'A08', 'C01', 1),
(182, 'A08', 'C02', 2),
(183, 'A08', 'C03', 2),
(184, 'A08', 'C04', 2),
(185, 'A09', 'C01', 2),
(186, 'A09', 'C02', 2),
(187, 'A09', 'C03', 3),
(188, 'A09', 'C04', 3),
(189, 'A10', 'C01', 1),
(190, 'A10', 'C02', 2),
(191, 'A10', 'C03', 3),
(192, 'A10', 'C04', 2),
(193, 'A11', 'C01', 2),
(194, 'A11', 'C02', 2),
(195, 'A11', 'C03', 3),
(196, 'A11', 'C04', 1),
(197, 'A12', 'C01', 2),
(198, 'A12', 'C02', 2),
(199, 'A12', 'C03', 3),
(200, 'A12', 'C04', 3),
(201, 'A13', 'C01', 2),
(202, 'A13', 'C02', 3),
(203, 'A13', 'C03', 3),
(204, 'A13', 'C04', 2),
(205, 'A14', 'C01', 2),
(206, 'A14', 'C02', 1),
(207, 'A14', 'C03', 2),
(208, 'A14', 'C04', 3),
(209, 'A15', 'C01', 3),
(210, 'A15', 'C02', 1),
(211, 'A15', 'C03', 1),
(212, 'A15', 'C04', 3),
(213, 'A16', 'C01', 3),
(214, 'A16', 'C02', 3),
(215, 'A16', 'C03', 2),
(216, 'A16', 'C04', 2),
(217, 'A17', 'C01', 1),
(218, 'A17', 'C02', 2),
(219, 'A17', 'C03', 2),
(220, 'A17', 'C04', 3),
(221, 'A18', 'C01', 2),
(222, 'A18', 'C02', 3),
(223, 'A18', 'C03', 2),
(224, 'A18', 'C04', 2),
(225, 'A19', 'C01', 2),
(226, 'A19', 'C02', 2),
(227, 'A19', 'C03', 2),
(228, 'A19', 'C04', 3),
(229, 'A20', 'C01', 3),
(230, 'A20', 'C02', 3),
(231, 'A20', 'C03', 2),
(232, 'A20', 'C04', 3),
(233, 'A21', 'C01', 2),
(234, 'A21', 'C02', 3),
(235, 'A21', 'C03', 3),
(236, 'A21', 'C04', 2),
(237, 'A22', 'C01', 2),
(238, 'A22', 'C02', 1),
(239, 'A22', 'C03', 3),
(240, 'A22', 'C04', 3),
(283, 'A01', 'C05', 3),
(284, 'A01', 'C06', 2),
(285, 'A02', 'C05', 1),
(286, 'A02', 'C06', 3),
(287, 'A03', 'C05', 2),
(288, 'A03', 'C06', 2),
(289, 'A04', 'C05', 3),
(290, 'A04', 'C06', 3),
(291, 'A05', 'C05', 2),
(292, 'A05', 'C06', 2),
(293, 'A06', 'C05', 2),
(294, 'A06', 'C06', 1),
(295, 'A07', 'C05', 3),
(296, 'A07', 'C06', 2),
(297, 'A08', 'C05', 2),
(298, 'A08', 'C06', 3),
(299, 'A09', 'C05', 3),
(300, 'A09', 'C06', 2),
(301, 'A10', 'C05', 1),
(302, 'A10', 'C06', 1),
(303, 'A11', 'C05', 3),
(304, 'A11', 'C06', 2),
(305, 'A12', 'C05', 2),
(306, 'A12', 'C06', 2),
(307, 'A13', 'C05', 1),
(308, 'A13', 'C06', 1),
(309, 'A14', 'C05', 2),
(310, 'A14', 'C06', 3),
(311, 'A15', 'C05', 2),
(312, 'A15', 'C06', 1),
(313, 'A16', 'C05', 2),
(314, 'A16', 'C06', 2),
(315, 'A17', 'C05', 2),
(316, 'A17', 'C06', 1),
(317, 'A18', 'C05', 1),
(318, 'A18', 'C06', 2),
(319, 'A19', 'C05', 2),
(320, 'A19', 'C06', 3),
(321, 'A20', 'C05', 2),
(322, 'A20', 'C06', 2),
(323, 'A21', 'C05', 2),
(324, 'A21', 'C06', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE `pelamar` (
  `id` int(11) NOT NULL,
  `kode_pelamar` varchar(3) NOT NULL,
  `nama_pelamar` varchar(50) NOT NULL,
  `telp_pelamar` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelamar`
--

INSERT INTO `pelamar` (`id`, `kode_pelamar`, `nama_pelamar`, `telp_pelamar`, `alamat`) VALUES
(24, 'A01', 'Arip Budiman', '089748347283', 'Serang'),
(25, 'A02', 'Rusman Witono', '089362738716', 'Pandeglang'),
(26, 'A03', 'Pujo Priyatno', '087162573618', 'Cilegon'),
(27, 'A04', 'Edy Sulistyo', '085728374828', 'Serang'),
(28, 'A05', 'Rini', '085988875243', 'Serang'),
(29, 'A06', 'Eka Ratna', '0879335263785', 'Cilegon'),
(30, 'A07', 'Aswani', '089544328883', 'Cilegon'),
(31, 'A08', 'Fikri Alwi', '087875566565', 'Rangkasbitung'),
(32, 'A09', 'Halim Nasir', '087266389710', 'Serang'),
(33, 'A10', 'Hendrianto', '085673482712', 'Serang'),
(34, 'A11', 'Nike Nurhandayani', '089726354781', 'Cilegon'),
(35, 'A12', 'Mustopa Husein', '089563412090', 'Pandeglang'),
(36, 'A13', 'Rini Ika', '089873208452', 'Pandeglang'),
(37, 'A14', 'Febriana', '087592837110', 'Pandeglang'),
(38, 'A15', 'Ahyar Dedi', '085677839910', 'Rangkasbitung'),
(39, 'A16', 'Helmi Suhairi', '089779923410', 'Cilegon'),
(40, 'A17', 'Muhamad Choirudin', '081283992911', 'Serang'),
(41, 'A18', 'Pandu Sahrial', '085233875489', 'Cilegon'),
(42, 'A19', 'Linda Sari', '087384979911', 'Serang'),
(43, 'A20', 'Harip Syah Safiudin', '0895627875103', 'Serang'),
(44, 'A21', 'Arman Soleh', '081275883920', 'Rangkasbitung');

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE `subkriteria` (
  `kode_subkriteria` varchar(4) NOT NULL,
  `nama_subkriteria` varchar(50) NOT NULL,
  `kode_kriteria` varchar(3) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `bobot` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`kode_subkriteria`, `nama_subkriteria`, `kode_kriteria`, `keterangan`, `bobot`) VALUES
('CK01', 'Strata 2 (S2)', 'C01', 'Sangat Baik', 3),
('CK02', 'Strata 1 (S1)', 'C01', 'Baik', 2),
('CK03', 'Diploma 3 (D3)', 'C01', 'Cukup', 1),
('CK04', '>=2 Tahun', 'C02', 'Sangat Baik', 3),
('CK05', '1 Tahun', 'C02', 'Baik', 2),
('CK06', '0 Tahun', 'C02', 'Cukup', 1),
('CK07', 'Sangat Rapih', 'C03', 'Sangat Baik', 3),
('CK08', 'Rapih', 'C03', 'Baik', 2),
('CK09', 'Cukup Rapih', 'C03', 'Cukup', 1),
('CK10', '21 – 23 Tahun', 'C04', 'Sangat Baik', 3),
('CK11', '24 – 26 Tahun', 'C04', 'Baik', 2),
('CK12', '27 – 28 Tahun', 'C04', 'Cukup', 1),
('CK13', 'Komunikasi', 'C05', 'Sangat Baik', 3),
('CK14', 'Kesiapan Kerja', 'C05', 'Baik', 2),
('CK15', '41 - 60', 'Ple', 'Cukup', 1),
('CK16', 'Kesopanan', 'C05', 'Cukup', 1),
('CK17', '81 - 100', 'C06', 'Sangat Baik', 3),
('CK18', '61 - 80', 'C06', 'Baik', 2),
('CK19', '41 - 60', 'C06', 'Cukup', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_login` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_login`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'pimpinan', '827ccb0eea8a706c4c34a16891f84e7b', 'pimpinan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil_rekomendasi`
--
ALTER TABLE `hasil_rekomendasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`kode_kriteria`);

--
-- Indexes for table `nilai_kriteria`
--
ALTER TABLE `nilai_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`kode_subkriteria`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil_rekomendasi`
--
ALTER TABLE `hasil_rekomendasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8551;

--
-- AUTO_INCREMENT for table `nilai_kriteria`
--
ALTER TABLE `nilai_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=325;

--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
