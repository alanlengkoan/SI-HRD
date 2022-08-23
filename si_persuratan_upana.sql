-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 23, 2022 at 01:05 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_persuratan_upana`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_dosen`
--

CREATE TABLE `data_dosen` (
  `id_data_dosen` int(16) NOT NULL,
  `id_master_jabatan` int(16) NOT NULL,
  `id_master_departemen` int(16) NOT NULL,
  `nip_dosen` varchar(32) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `tempat_lahir` varchar(64) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_dosen` text NOT NULL,
  `telepon_dosen` varchar(16) NOT NULL,
  `email_dosen` varchar(64) NOT NULL,
  `jenis_kelamin` varchar(32) NOT NULL,
  `agama` varchar(64) NOT NULL,
  `Iat` datetime NOT NULL,
  `Uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `id_data_mahasiswa` int(10) NOT NULL,
  `nim_mahasiswa` varchar(32) NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `alamat_mahasiswa` text NOT NULL,
  `tempat_lahir` varchar(64) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email_mahasiswa` varchar(64) NOT NULL,
  `jenis_kelamin` varchar(32) NOT NULL,
  `agama` varchar(64) NOT NULL,
  `telepon_mahasiswa` varchar(16) NOT NULL,
  `status_mahasiswa` varchar(64) NOT NULL,
  `Iat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`id_data_mahasiswa`, `nim_mahasiswa`, `nama_mahasiswa`, `alamat_mahasiswa`, `tempat_lahir`, `tanggal_lahir`, `email_mahasiswa`, `jenis_kelamin`, `agama`, `telepon_mahasiswa`, `status_mahasiswa`, `Iat`, `Uat`) VALUES
(1, 'D42115320', 'Fadel Rezky Ramadhan', 'Jl. BTN Griya Maros Indah', 'Makassar', '1997-02-01', 'fadelr35@gmail.com', 'L', 'Islam', '089631837157', 'Aktif', '2022-08-23 21:01:41', '2022-08-23 13:01:41'),
(3, 'D42115010', 'Ramadhan', 'disini', '', '1997-02-01', 'ramadhan@gmail.com', 'L', '', '08123456789', '', '2022-08-23 21:01:41', '2022-08-23 13:01:41'),
(4, 'D42115321', 'Fadel Rezky', 'disini', '', '1997-02-01', 'aiji@gmail.com', 'P', '', '08123456789', '', '2022-08-23 21:01:41', '2022-08-23 13:01:41');

-- --------------------------------------------------------

--
-- Table structure for table `data_suratinvoice`
--

CREATE TABLE `data_suratinvoice` (
  `id_data_suratinvoice` int(16) NOT NULL,
  `nomor_surat` varchar(32) NOT NULL,
  `pengirim` varchar(64) NOT NULL,
  `projek` varchar(128) NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(255) NOT NULL,
  `status` varchar(64) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `data_suratspk01`
--

CREATE TABLE `data_suratspk01` (
  `id_data_suratspk01` int(16) NOT NULL,
  `pemohon` varchar(64) NOT NULL,
  `nomor_surat` varchar(32) NOT NULL,
  `perusahaan` varchar(64) NOT NULL,
  `jabatan_pemohon` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `pesanan` text NOT NULL,
  `waktu_kerja` varchar(32) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `terbilang` varchar(100) NOT NULL,
  `bank` varchar(128) NOT NULL,
  `no_rekening` varchar(32) NOT NULL,
  `pemilik_rekening` varchar(64) NOT NULL,
  `status` varchar(32) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `data_suratspk02`
--

CREATE TABLE `data_suratspk02` (
  `id_data_suratspk02` int(16) NOT NULL,
  `nomor_surat` varchar(32) NOT NULL,
  `status` varchar(32) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pemohon` varchar(64) NOT NULL,
  `tempat_lahir` varchar(64) NOT NULL,
  `tanggal_lahir` varchar(64) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(32) NOT NULL,
  `no_ktp` varchar(32) NOT NULL,
  `tugas` varchar(128) NOT NULL,
  `waktu_kerja` varchar(64) NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id_data_user` int(16) NOT NULL,
  `username` varchar(32) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password_admin` varchar(64) NOT NULL,
  `level_akses` varchar(32) NOT NULL,
  `remember_me` int(16) NOT NULL,
  `session_id` varchar(64) NOT NULL,
  `email_admin` varchar(64) NOT NULL,
  `telepon_admin` varchar(16) NOT NULL,
  `alamat_admin` text NOT NULL,
  `Iat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id_data_user`, `username`, `nama`, `password_admin`, `level_akses`, `remember_me`, `session_id`, `email_admin`, `telepon_admin`, `alamat_admin`, `Iat`, `Uat`) VALUES
(1, 'D42115320', 'Alan Lengkoan', '202cb962ac59075b964b07152d234b70', 'mahasiswa', 0, 'qlsf5q8o0qets3govgj8jmkgfek7gse4', 'fadelr35@gmail.com', '089631837157', 'Jl. BTN Griya Maros Indah', '2022-08-23 21:01:45', '2022-08-23 13:05:32');

-- --------------------------------------------------------

--
-- Table structure for table `master_departemen`
--

CREATE TABLE `master_departemen` (
  `id_master_departemen` int(16) NOT NULL,
  `nama_departemen` varchar(64) NOT NULL,
  `jurusan` varchar(64) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `master_jabatan`
--

CREATE TABLE `master_jabatan` (
  `id_master_jabatan` int(16) NOT NULL,
  `nama_jabatan` varchar(64) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `master_surat`
--

CREATE TABLE `master_surat` (
  `id_master_surat` int(16) NOT NULL,
  `jenis` varchar(64) NOT NULL,
  `kode` varchar(16) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `template_header_surat`
--

CREATE TABLE `template_header_surat` (
  `id_template_header_surat` int(16) NOT NULL,
  `id_master_departemen` int(16) NOT NULL,
  `header_surat1` text NOT NULL,
  `header_surat2` text NOT NULL,
  `header_surat3` text NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `template_surat_aktifkuliah`
--

CREATE TABLE `template_surat_aktifkuliah` (
  `id_template_surat_aktifkuliah` int(16) NOT NULL,
  `id_data_dosen` int(16) NOT NULL,
  `isi_pertama` text NOT NULL,
  `isi_kedua` text NOT NULL,
  `isi_ketiga` text NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `template_surat_kerjapraktek`
--

CREATE TABLE `template_surat_kerjapraktek` (
  `id_template_surat_kerjapraktek` int(16) NOT NULL,
  `id_data_dosen` int(16) NOT NULL,
  `isi_pertama` text NOT NULL,
  `isi_kedua` text NOT NULL,
  `isi_ketiga` text NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `template_surat_spk01`
--

CREATE TABLE `template_surat_spk01` (
  `id_template_surat_izinpenelitian` int(16) NOT NULL,
  `id_data_dosen` int(16) NOT NULL,
  `isi_pertama` text NOT NULL,
  `isi_kedua` text NOT NULL,
  `isi_ketiga` text NOT NULL,
  `isi_keempat` text NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD PRIMARY KEY (`id_data_dosen`) USING BTREE,
  ADD KEY `id_master_jabatan` (`id_master_jabatan`,`id_master_departemen`) USING BTREE,
  ADD KEY `id_master_departemen` (`id_master_departemen`) USING BTREE,
  ADD KEY `id_master_jabatan_2` (`id_master_jabatan`) USING BTREE;

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`id_data_mahasiswa`) USING BTREE,
  ADD UNIQUE KEY `nim_mahasiswa` (`nim_mahasiswa`) USING BTREE;

--
-- Indexes for table `data_suratinvoice`
--
ALTER TABLE `data_suratinvoice`
  ADD PRIMARY KEY (`id_data_suratinvoice`) USING BTREE;

--
-- Indexes for table `data_suratspk01`
--
ALTER TABLE `data_suratspk01`
  ADD PRIMARY KEY (`id_data_suratspk01`) USING BTREE;

--
-- Indexes for table `data_suratspk02`
--
ALTER TABLE `data_suratspk02`
  ADD PRIMARY KEY (`id_data_suratspk02`) USING BTREE;

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id_data_user`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- Indexes for table `master_departemen`
--
ALTER TABLE `master_departemen`
  ADD PRIMARY KEY (`id_master_departemen`) USING BTREE;

--
-- Indexes for table `master_jabatan`
--
ALTER TABLE `master_jabatan`
  ADD PRIMARY KEY (`id_master_jabatan`) USING BTREE;

--
-- Indexes for table `master_surat`
--
ALTER TABLE `master_surat`
  ADD PRIMARY KEY (`id_master_surat`) USING BTREE;

--
-- Indexes for table `template_header_surat`
--
ALTER TABLE `template_header_surat`
  ADD PRIMARY KEY (`id_template_header_surat`) USING BTREE;

--
-- Indexes for table `template_surat_aktifkuliah`
--
ALTER TABLE `template_surat_aktifkuliah`
  ADD PRIMARY KEY (`id_template_surat_aktifkuliah`) USING BTREE,
  ADD KEY `id_data_dosen` (`id_data_dosen`) USING BTREE;

--
-- Indexes for table `template_surat_kerjapraktek`
--
ALTER TABLE `template_surat_kerjapraktek`
  ADD PRIMARY KEY (`id_template_surat_kerjapraktek`) USING BTREE,
  ADD KEY `id_data_dosen` (`id_data_dosen`) USING BTREE;

--
-- Indexes for table `template_surat_spk01`
--
ALTER TABLE `template_surat_spk01`
  ADD PRIMARY KEY (`id_template_surat_izinpenelitian`) USING BTREE,
  ADD KEY `id_data_dosen` (`id_data_dosen`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_dosen`
--
ALTER TABLE `data_dosen`
  MODIFY `id_data_dosen` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  MODIFY `id_data_mahasiswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_suratinvoice`
--
ALTER TABLE `data_suratinvoice`
  MODIFY `id_data_suratinvoice` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_suratspk01`
--
ALTER TABLE `data_suratspk01`
  MODIFY `id_data_suratspk01` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_suratspk02`
--
ALTER TABLE `data_suratspk02`
  MODIFY `id_data_suratspk02` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id_data_user` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_departemen`
--
ALTER TABLE `master_departemen`
  MODIFY `id_master_departemen` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_jabatan`
--
ALTER TABLE `master_jabatan`
  MODIFY `id_master_jabatan` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_surat`
--
ALTER TABLE `master_surat`
  MODIFY `id_master_surat` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `template_header_surat`
--
ALTER TABLE `template_header_surat`
  MODIFY `id_template_header_surat` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `template_surat_aktifkuliah`
--
ALTER TABLE `template_surat_aktifkuliah`
  MODIFY `id_template_surat_aktifkuliah` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `template_surat_kerjapraktek`
--
ALTER TABLE `template_surat_kerjapraktek`
  MODIFY `id_template_surat_kerjapraktek` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `template_surat_spk01`
--
ALTER TABLE `template_surat_spk01`
  MODIFY `id_template_surat_izinpenelitian` int(16) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD CONSTRAINT `data_dosen_ibfk_1` FOREIGN KEY (`id_master_jabatan`) REFERENCES `master_jabatan` (`id_master_jabatan`),
  ADD CONSTRAINT `data_dosen_ibfk_2` FOREIGN KEY (`id_master_departemen`) REFERENCES `master_departemen` (`id_master_departemen`);

--
-- Constraints for table `data_user`
--
ALTER TABLE `data_user`
  ADD CONSTRAINT `data_user_ibfk_1` FOREIGN KEY (`username`) REFERENCES `data_mahasiswa` (`nim_mahasiswa`);

--
-- Constraints for table `template_surat_aktifkuliah`
--
ALTER TABLE `template_surat_aktifkuliah`
  ADD CONSTRAINT `template_surat_aktifkuliah_ibfk_1` FOREIGN KEY (`id_data_dosen`) REFERENCES `data_dosen` (`id_data_dosen`);

--
-- Constraints for table `template_surat_kerjapraktek`
--
ALTER TABLE `template_surat_kerjapraktek`
  ADD CONSTRAINT `template_surat_kerjapraktek_ibfk_1` FOREIGN KEY (`id_data_dosen`) REFERENCES `data_dosen` (`id_data_dosen`);

--
-- Constraints for table `template_surat_spk01`
--
ALTER TABLE `template_surat_spk01`
  ADD CONSTRAINT `template_surat_spk01_ibfk_1` FOREIGN KEY (`id_data_dosen`) REFERENCES `data_dosen` (`id_data_dosen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
