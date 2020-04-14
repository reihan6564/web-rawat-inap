-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 07:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rawat_inap`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_pasien`
--

CREATE TABLE `tb_detail_pasien` (
  `id_detail_pasien` varchar(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `ket` text NOT NULL,
  `ketentuan_dirawat` enum('ya','tidak') NOT NULL,
  `lama_inap` int(5) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detail_pasien`
--

INSERT INTO `tb_detail_pasien` (`id_detail_pasien`, `id_pasien`, `ket`, `ketentuan_dirawat`, `lama_inap`, `tanggal`) VALUES
('PSN001', 4, 'asdasd', 'ya', 5, '2020-04-07'),
('PSN002', 14, 'Pasien ini sakit tipes harus dirawat kira kira 1 minggu', 'ya', 7, '2020-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_d` varchar(50) NOT NULL,
  `id_spesialis` int(11) NOT NULL,
  `jam_praktek` varchar(20) NOT NULL,
  `jenis_kelamin_d` enum('laki-laki','perempuan') NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nama_d`, `id_spesialis`, `jam_praktek`, `jenis_kelamin_d`, `tanggal`) VALUES
(1, 'Dr.Syaiful Rohman. Ag.sl', 4, '19:00 - 22:00', 'laki-laki', '2020-03-01'),
(2, 'Dr.Ridhwan. if.so', 8, '14:00 - 16:00', 'laki-laki', '2020-02-01'),
(3, 'Dr.Irawan Septiani Ar.GGs', 9, '09:00 - 10:00', 'laki-laki', '2020-03-02'),
(4, 'Dr.Suci Wulandari .Sat', 12, '09:30 - 10:30', 'perempuan', '2020-04-01'),
(6, 'Dr.Anggi Kumalaningrum', 4, '09:30 - 11:00', 'perempuan', '2020-04-02'),
(7, 'Dr.Riantie NoorAzizah.Cn.TK', 10, '07:00 - 12:00', 'perempuan', '2020-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kamar`
--

CREATE TABLE `tb_kamar` (
  `id_kamar` int(11) NOT NULL,
  `no_k` varchar(15) NOT NULL,
  `nama_k` varchar(50) NOT NULL,
  `kelas_k` varchar(20) NOT NULL,
  `status_k` enum('terisi','kosong') NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kamar`
--

INSERT INTO `tb_kamar` (`id_kamar`, `no_k`, `nama_k`, `kelas_k`, `status_k`, `tanggal`) VALUES
(1, '1', 'Bunga Mawar', '1', 'kosong', '2020-03-01'),
(2, '2', 'Roselia', '1', 'kosong', '2020-03-01'),
(3, '3', 'Garaga', '3', 'terisi', '2020-03-15'),
(4, '4', 'Catiwa', '2', 'kosong', '2020-03-15'),
(5, '55eu', 'Najwa', '2', 'kosong', '2020-04-01'),
(7, '20ef', 'Meria', '3', 'kosong', '2020-04-02'),
(8, '55RF', 'Wirdahun Pole', '1', 'terisi', '2020-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_p` varchar(50) NOT NULL,
  `umur_p` int(5) NOT NULL,
  `tanggal_lahir_p` date NOT NULL,
  `alamat_p` text NOT NULL,
  `notelp_p` varchar(15) NOT NULL,
  `jenis_kelamin_p` enum('laki-laki','perempuan') NOT NULL,
  `kota_p` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nama_p`, `umur_p`, `tanggal_lahir_p`, `alamat_p`, `notelp_p`, `jenis_kelamin_p`, `kota_p`, `tanggal`) VALUES
(1, 'Samiun', 10, '2020-02-21', 'Jalan tengah tengah jalan', '08821256564', 'laki-laki', 'Leuwi Sadeng', '2020-03-01'),
(2, 'Samian', 10, '2020-02-21', 'Jalan tengah tengah jalan', '08821256564', 'laki-laki', 'Leuwi Sadeng', '2020-03-02'),
(4, 'Sumyana', 14, '2020-02-25', 'Depan Mesjid Nurul Iman', '177777777', 'perempuan', 'Sabang', '2020-03-03'),
(5, 'Sumiya', 23, '2022-07-20', 'Jalan China Azean', '087881252', 'laki-laki', 'Leuwi Kambangan', '2020-03-04'),
(6, 'Sumiya', 23, '2022-07-20', 'Jalan China Azean', '087881252', 'laki-laki', 'Leuwi Kambangan', '2020-03-05'),
(8, 'Samiyun', 18, '2020-03-05', 'asdfffffff', '07777777777', 'perempuan', 'Lui', '2020-03-06'),
(9, 'Suryana', 35, '1981-01-30', 'jalan tenggiri no 32 jasuke', '08885456', 'laki-laki', 'Pabangbon', '2020-02-01'),
(10, 'Saya', 16, '2001-02-05', 'Jalan Keramat Hati no 32 RT 01/11', '08857587895', 'laki-laki', 'Panangtung', '2020-04-07'),
(12, 'Ronan', 15, '2020-04-29', 'czvxcvxc', '08857587895', 'laki-laki', 'Panangtung', '2020-04-07'),
(13, 'Roki', 25, '1984-11-06', 'Jalan Kesang 74, no 21 RT 01/11', '089858256473', 'laki-laki', 'Leuwirangu', '2020-04-07'),
(14, 'Rogue', 16, '2004-06-11', 'komplek rumah ninggal RT 02/11', '0887898520', 'laki-laki', 'batoksuhu', '2020-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_detail_pasien` varchar(11) NOT NULL,
  `jenis_tindakan` enum('rawat inap','periksa') NOT NULL,
  `jumlah_p_tindakan` int(10) NOT NULL,
  `jumlah_p_inap` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `id_detail_pasien`, `jenis_tindakan`, `jumlah_p_tindakan`, `jumlah_p_inap`, `total`, `tanggal`) VALUES
(5, 'PSN002', 'rawat inap', 15000, 520000, 535000, '2020-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rawat`
--

CREATE TABLE `tb_rawat` (
  `id_rawat` int(11) NOT NULL,
  `id_detail_pasien` varchar(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `lama_inap` int(5) NOT NULL,
  `tanggal_inap` date NOT NULL,
  `tanggal_selesai_inap` date NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rawat`
--

INSERT INTO `tb_rawat` (`id_rawat`, `id_detail_pasien`, `id_dokter`, `id_kamar`, `lama_inap`, `tanggal_inap`, `tanggal_selesai_inap`, `tanggal`) VALUES
(4, 'PSN002', 2, 8, 7, '2020-04-07', '2020-04-14', '2020-04-07'),
(6, 'PSN001', 4, 3, 5, '2020-04-08', '2020-04-13', '2020-04-08'),
(7, 'PSN001', 4, 3, 5, '2020-04-08', '2020-04-13', '2020-04-08'),
(8, 'PSN001', 4, 3, 5, '2020-04-08', '2020-04-13', '2020-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_spesialis`
--

CREATE TABLE `tb_spesialis` (
  `id_spesialis` int(11) NOT NULL,
  `nama_spesialis` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_spesialis`
--

INSERT INTO `tb_spesialis` (`id_spesialis`, `nama_spesialis`, `tanggal`) VALUES
(1, 'Mata', '2020-03-01'),
(2, 'Hidung', '2020-03-02'),
(3, 'Telinga', '2020-03-03'),
(4, 'Umum', '2020-03-04'),
(5, 'Syaraf', '2020-03-01'),
(6, 'Otot', '2020-03-02'),
(7, 'Penyakit Dalam', '2020-03-03'),
(8, 'Kulit', '2020-03-04'),
(9, 'Penyakit Lambung', '2020-02-12'),
(10, 'Kulamanikum', '0000-00-00'),
(12, 'Kelaparan', '2020-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama_u` varchar(50) NOT NULL,
  `jenis_kelamin_u` enum('laki-laki','perempuan') NOT NULL,
  `tanggal_lahir_u` date NOT NULL,
  `email_u` varchar(30) NOT NULL,
  `alamat_u` text NOT NULL,
  `notelp_u` varchar(15) NOT NULL,
  `jabatan_u` enum('ka puskesmas','administrator') NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama_u`, `jenis_kelamin_u`, `tanggal_lahir_u`, `email_u`, `alamat_u`, `notelp_u`, `jabatan_u`, `tanggal`) VALUES
(20, 'admin', '$2y$10$RfZ6hxEqhCIaZrXlV56pfeOCYFda..Aldel0gUFpF/l9oRs.N/RfW', 'Marsupi', 'laki-laki', '2020-02-27', 'kuproy@gmail.com', 'sdsdd', '078888', 'administrator', '0000-00-00'),
(21, 'kapukesmas', '$2y$10$mWrG7WrwWxGbfa3aUkNCJOZuxDabdkbf3GM33Kmru.uTF7H1G1tju', 'maruska', 'laki-laki', '2020-05-05', 'kuproy@gmail.com', 'testing', '078888', 'ka puskesmas', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail_pasien`
--
ALTER TABLE `tb_detail_pasien`
  ADD PRIMARY KEY (`id_detail_pasien`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_detail_pasien` (`id_detail_pasien`);

--
-- Indexes for table `tb_rawat`
--
ALTER TABLE `tb_rawat`
  ADD PRIMARY KEY (`id_rawat`),
  ADD KEY `id_detail_pasien` (`id_detail_pasien`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indexes for table `tb_spesialis`
--
ALTER TABLE `tb_spesialis`
  ADD PRIMARY KEY (`id_spesialis`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_rawat`
--
ALTER TABLE `tb_rawat`
  MODIFY `id_rawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_spesialis`
--
ALTER TABLE `tb_spesialis`
  MODIFY `id_spesialis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detail_pasien`
--
ALTER TABLE `tb_detail_pasien`
  ADD CONSTRAINT `tb_detail_pasien_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`);

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `tb_pembayaran_ibfk_1` FOREIGN KEY (`id_detail_pasien`) REFERENCES `tb_detail_pasien` (`id_detail_pasien`);

--
-- Constraints for table `tb_rawat`
--
ALTER TABLE `tb_rawat`
  ADD CONSTRAINT `tb_rawat_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `tb_dokter` (`id_dokter`),
  ADD CONSTRAINT `tb_rawat_ibfk_2` FOREIGN KEY (`id_detail_pasien`) REFERENCES `tb_detail_pasien` (`id_detail_pasien`),
  ADD CONSTRAINT `tb_rawat_ibfk_3` FOREIGN KEY (`id_kamar`) REFERENCES `tb_kamar` (`id_kamar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
