-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2019 pada 10.43
-- Versi server: 5.7.24
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_persuratan_upana`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_dosen`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_dosen`
--

INSERT INTO `data_dosen` (`id_data_dosen`, `id_master_jabatan`, `id_master_departemen`, `nip_dosen`, `nama_dosen`, `tempat_lahir`, `tanggal_lahir`, `alamat_dosen`, `telepon_dosen`, `email_dosen`, `jenis_kelamin`, `agama`, `Iat`, `Uat`) VALUES
(1, 1, 1, '10001111222', 'Billy Ukim, S.T', 'Indonesia', '1977-10-28', 'Jl. Kariango', '0800112233', 'billy.billy@gmail.com', 'L', 'Islam', '0000-00-00 00:00:00', '2018-10-29 14:10:10'),
(2, 2, 1, '0011001223', 'Pujo Satrianto', 'Tenggarong', '1988-10-01', 'Dekat lapangan pemuda', '09991112222', 'pujojo@gmail.com', 'L', 'Islam', '0000-00-00 00:00:00', '2018-10-29 14:10:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mahasiswa`
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
  `Iat` datetime NOT NULL,
  `Uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`id_data_mahasiswa`, `nim_mahasiswa`, `nama_mahasiswa`, `alamat_mahasiswa`, `tempat_lahir`, `tanggal_lahir`, `email_mahasiswa`, `jenis_kelamin`, `agama`, `telepon_mahasiswa`, `status_mahasiswa`, `Iat`, `Uat`) VALUES
(1, 'D42115320', 'Fadel Rezky Ramadhan', 'Jl. BTN Griya Maros Indah', 'Makassar', '1997-02-01', 'fadelr35@gmail.com', 'L', 'Islam', '089631837157', 'Aktif', '0000-00-00 00:00:00', '2018-11-06 06:15:17'),
(3, 'D42115010', 'Ramadhan', 'disini', '', '0000-00-00', 'ramadhan@gmail.com', 'L', '', '08123456789', '', '0000-00-00 00:00:00', '2018-11-21 04:03:47'),
(4, 'D42115321', 'Fadel Rezky', 'disini', '', '0000-00-00', 'aiji@gmail.com', 'P', '', '08123456789', '', '0000-00-00 00:00:00', '2018-11-21 05:25:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_suratinvoice`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_suratinvoice`
--

INSERT INTO `data_suratinvoice` (`id_data_suratinvoice`, `nomor_surat`, `pengirim`, `projek`, `tanggal_selesai`, `deskripsi`, `harga`, `status`, `iat`, `uat`) VALUES
(1, '0001/INV/USI/XII/2018', '', '', '0000-00-00', '', '0', 'SELESAI', '0000-00-00 00:00:00', '2018-12-13 09:12:25'),
(2, '0002/INV/USI/XII/2018', '', '', '0000-00-00', '', '0', '', '0000-00-00 00:00:00', '2018-12-19 04:57:17'),
(3, '0001/INV/USI/VI/2019', 'tes', 'tes', '2222-02-22', 'tes', 'tes', '', '0000-00-00 00:00:00', '2019-06-24 08:40:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_suratspk01`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_suratspk01`
--

INSERT INTO `data_suratspk01` (`id_data_suratspk01`, `pemohon`, `nomor_surat`, `perusahaan`, `jabatan_pemohon`, `alamat`, `pesanan`, `waktu_kerja`, `harga`, `terbilang`, `bank`, `no_rekening`, `pemilik_rekening`, `status`, `iat`, `uat`) VALUES
(1, 'Billa Armani Abdullah', '0001/SPK-01/USI/XII/2018', 'PT. Billa Tiba Masanya', 'Pemimpin Redaksi PT. Billa Tiba Masanya', 'Jl. Dirgantara, Kec. Pallanga, Kab. Gowa', 'Sistem Informasi Pegawai PT. Billa Tiba Masanya', '120 Hari Kerja', '10000000', 'seratus lima puluh ribu', 'Bank Sendiri', '1221110021', 'Saya Sendiri', '', '0000-00-00 00:00:00', '2019-07-05 11:26:59'),
(2, 'Fadel Rezky', '0002/SPK01/USI/XII/2018', 'PT. Dimanapun Berada', 'Anggota', 'disini', 'Game Harvest Moon', '120 hari', '100000', 'seratus lima puluh ribu', 'btpn', '11121222222112', 'saya', '', '0000-00-00 00:00:00', '2019-07-05 11:27:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_suratspk02`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
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
  `Iat` datetime NOT NULL,
  `Uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_user`
--

INSERT INTO `data_user` (`id_data_user`, `username`, `nama`, `password_admin`, `level_akses`, `remember_me`, `session_id`, `email_admin`, `telepon_admin`, `alamat_admin`, `Iat`, `Uat`) VALUES
(1, 'D42115320', 'Fadel Rezky Ramadhan', '202cb962ac59075b964b07152d234b70', 'mahasiswa', 0, '7d023nm57vn8r41u5borr0gqmk7i50hl', 'fadelr35@gmail.com', '089631837157', 'Jl. BTN Griya Maros Indah', '0000-00-00 00:00:00', '2019-07-07 07:26:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_departemen`
--

CREATE TABLE `master_departemen` (
  `id_master_departemen` int(16) NOT NULL,
  `nama_departemen` varchar(64) NOT NULL,
  `jurusan` varchar(64) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `master_departemen`
--

INSERT INTO `master_departemen` (`id_master_departemen`, `nama_departemen`, `jurusan`, `iat`, `uat`) VALUES
(1, 'Teknik Informatika', 'Teknik Elektro', '0000-00-00 00:00:00', '2018-10-28 17:41:11'),
(2, 'Teknik Elektro', 'Teknik Elektro', '0000-00-00 00:00:00', '2018-10-28 17:41:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_jabatan`
--

CREATE TABLE `master_jabatan` (
  `id_master_jabatan` int(16) NOT NULL,
  `nama_jabatan` varchar(64) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `master_jabatan`
--

INSERT INTO `master_jabatan` (`id_master_jabatan`, `nama_jabatan`, `iat`, `uat`) VALUES
(1, 'Ketua Program Studi Teknik Informatika', '0000-00-00 00:00:00', '2018-10-28 17:42:19'),
(2, 'Sekretaris Mahasiswa Teknik Informatika', '0000-00-00 00:00:00', '2018-10-28 17:42:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_surat`
--

CREATE TABLE `master_surat` (
  `id_master_surat` int(16) NOT NULL,
  `jenis` varchar(64) NOT NULL,
  `kode` varchar(16) NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `master_surat`
--

INSERT INTO `master_surat` (`id_master_surat`, `jenis`, `kode`, `iat`, `uat`) VALUES
(1, 'Surat Invoice', 'INV', '0000-00-00 00:00:00', '2018-12-19 04:36:21'),
(2, 'Surat SPK 01', 'SPK01', '0000-00-00 00:00:00', '2018-12-20 07:04:41'),
(3, 'Surat SPK 02', 'SPK02', '0000-00-00 00:00:00', '2018-12-20 07:04:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `template_header_surat`
--

CREATE TABLE `template_header_surat` (
  `id_template_header_surat` int(16) NOT NULL,
  `id_master_departemen` int(16) NOT NULL,
  `header_surat1` text NOT NULL,
  `header_surat2` text NOT NULL,
  `header_surat3` text NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `template_surat_aktifkuliah`
--

CREATE TABLE `template_surat_aktifkuliah` (
  `id_template_surat_aktifkuliah` int(16) NOT NULL,
  `id_data_dosen` int(16) NOT NULL,
  `isi_pertama` text NOT NULL,
  `isi_kedua` text NOT NULL,
  `isi_ketiga` text NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `template_surat_kerjapraktek`
--

CREATE TABLE `template_surat_kerjapraktek` (
  `id_template_surat_kerjapraktek` int(16) NOT NULL,
  `id_data_dosen` int(16) NOT NULL,
  `isi_pertama` text NOT NULL,
  `isi_kedua` text NOT NULL,
  `isi_ketiga` text NOT NULL,
  `iat` datetime NOT NULL,
  `uat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `template_surat_spk01`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `template_surat_spk01`
--

INSERT INTO `template_surat_spk01` (`id_template_surat_izinpenelitian`, `id_data_dosen`, `isi_pertama`, `isi_kedua`, `isi_ketiga`, `isi_keempat`, `iat`, `uat`) VALUES
(1, 2, 'Dalam pelaksanaan kerjasama tersebut, <span class=\"c1\">PARA PIHAK</span> sepakat bahwa seluruh informasi baik mengenai hasil-hasil yang dicapai maupun segala sesuatu yang atau dipertukarkan oleh <span class=\"c1\">PARA PIHAK</span> baik pada saat sebelum, selama maupun sesudah proses pelaksanaan kerjasama ini, wajib diperlakukan sebagai rahasia selama 2 (dua) tahun terhitung sejak tanggal berakhirnya Perjanjian Kerjasama ini karena sebab apapun, kecuali ditentukan lain secara tertulis oleh pihak yang memberi informasi.', '<ol class=\"c6 lst-kix_list_7-8 start\" start=\"1\">\n    <li class=\"c12 c14\">\n        <span class=\"c4\">Keadaan memaksa adalah keadaan atau kejadian di luar kekuasaan</span> <span class=\"c7 c1\">PIHAK PERTAMA</span><span class=\"c4\">&nbsp;dan </span><span class=\"c7 c1\">PIHAK KEDUA</span> <span class=\"c4\">&nbsp;yang mengakibatkan terhentinya atau tertundanya pelaksanaan perjanjian, yaitu bencana alam (banjir, gempa bumi, angin, topan, petir) serta huru-hara, kebakaran dan hal-hal lain di luar kekuasaan kedua belah pihak yang oleh pejabat berwenang dinyatakan sebagai keadaan memaksa.</span>\n    </li>\n    <li class=\"c12 c14\">\n        <span class=\"c1 c7\">PIHAK PERTAMA</span><span class=\"c4\">&nbsp;dapat meminta pertimbangan dari </span><span class=\"c7 c1\">PIHAK KEDUA</span><span class=\"c4\">&nbsp;secara tertulis selambat-lambatnya dalam waktu 2 (satu) hari sejak terjadinya keadaan memaksa dan dilampirkan bukti-bukti yang sah untuk menyelesaikan pekerjaan akibat keadaan memaksa berdasarkan penyelidikan yang seksama.</span>\n    </li>\n</ol>', 'Hal-hal lain yang ada hubungannya dengan perjanjian ini dan belum cukup diatur dalam pasal-pasal dari surat perjanjian ini akan ditentukan lebih lanjut oleh kedua belah pihak secara musyawarah dan mufakat dan dituangkan dalam Surat Perjanjian Tambahan/Addendum dan merupakan bagian yang tidak terpisahkan dari perjanjian ini.', '<ol class=\"c6 lst-kix_list_5-8 start\" start=\"1\">\n    <li class=\"c12 c49 c14\">\n        <span class=\"c4\">Surat Perjanjian ini dinyatakan sah dan mengikat kedua belah pihak dan mulai berlaku setelah ditandatangani oleh kedua belah pihak.</span>\n    </li>\n    <li class=\"c42 c49 c14\">\n        <span class=\"c4\">Surat Perjanjian ini dibuat 2 (dua) rangkap masing-masing bermaterai cukup dan mempunyai kekuatan hukum yang sama.</span>\n    </li>\n</ol>', '2019-07-18 00:00:00', '2019-07-07 10:04:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD PRIMARY KEY (`id_data_dosen`),
  ADD KEY `id_master_jabatan` (`id_master_jabatan`,`id_master_departemen`),
  ADD KEY `id_master_departemen` (`id_master_departemen`),
  ADD KEY `id_master_jabatan_2` (`id_master_jabatan`);

--
-- Indeks untuk tabel `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`id_data_mahasiswa`),
  ADD UNIQUE KEY `nim_mahasiswa` (`nim_mahasiswa`);

--
-- Indeks untuk tabel `data_suratinvoice`
--
ALTER TABLE `data_suratinvoice`
  ADD PRIMARY KEY (`id_data_suratinvoice`);

--
-- Indeks untuk tabel `data_suratspk01`
--
ALTER TABLE `data_suratspk01`
  ADD PRIMARY KEY (`id_data_suratspk01`);

--
-- Indeks untuk tabel `data_suratspk02`
--
ALTER TABLE `data_suratspk02`
  ADD PRIMARY KEY (`id_data_suratspk02`);

--
-- Indeks untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id_data_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `master_departemen`
--
ALTER TABLE `master_departemen`
  ADD PRIMARY KEY (`id_master_departemen`);

--
-- Indeks untuk tabel `master_jabatan`
--
ALTER TABLE `master_jabatan`
  ADD PRIMARY KEY (`id_master_jabatan`);

--
-- Indeks untuk tabel `master_surat`
--
ALTER TABLE `master_surat`
  ADD PRIMARY KEY (`id_master_surat`);

--
-- Indeks untuk tabel `template_header_surat`
--
ALTER TABLE `template_header_surat`
  ADD PRIMARY KEY (`id_template_header_surat`);

--
-- Indeks untuk tabel `template_surat_aktifkuliah`
--
ALTER TABLE `template_surat_aktifkuliah`
  ADD PRIMARY KEY (`id_template_surat_aktifkuliah`),
  ADD KEY `id_data_dosen` (`id_data_dosen`);

--
-- Indeks untuk tabel `template_surat_kerjapraktek`
--
ALTER TABLE `template_surat_kerjapraktek`
  ADD PRIMARY KEY (`id_template_surat_kerjapraktek`),
  ADD KEY `id_data_dosen` (`id_data_dosen`);

--
-- Indeks untuk tabel `template_surat_spk01`
--
ALTER TABLE `template_surat_spk01`
  ADD PRIMARY KEY (`id_template_surat_izinpenelitian`),
  ADD KEY `id_data_dosen` (`id_data_dosen`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_dosen`
--
ALTER TABLE `data_dosen`
  MODIFY `id_data_dosen` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  MODIFY `id_data_mahasiswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_suratinvoice`
--
ALTER TABLE `data_suratinvoice`
  MODIFY `id_data_suratinvoice` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_suratspk01`
--
ALTER TABLE `data_suratspk01`
  MODIFY `id_data_suratspk01` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_suratspk02`
--
ALTER TABLE `data_suratspk02`
  MODIFY `id_data_suratspk02` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id_data_user` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `master_departemen`
--
ALTER TABLE `master_departemen`
  MODIFY `id_master_departemen` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `master_jabatan`
--
ALTER TABLE `master_jabatan`
  MODIFY `id_master_jabatan` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `master_surat`
--
ALTER TABLE `master_surat`
  MODIFY `id_master_surat` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `template_header_surat`
--
ALTER TABLE `template_header_surat`
  MODIFY `id_template_header_surat` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `template_surat_aktifkuliah`
--
ALTER TABLE `template_surat_aktifkuliah`
  MODIFY `id_template_surat_aktifkuliah` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `template_surat_kerjapraktek`
--
ALTER TABLE `template_surat_kerjapraktek`
  MODIFY `id_template_surat_kerjapraktek` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `template_surat_spk01`
--
ALTER TABLE `template_surat_spk01`
  MODIFY `id_template_surat_izinpenelitian` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD CONSTRAINT `data_dosen_ibfk_1` FOREIGN KEY (`id_master_jabatan`) REFERENCES `master_jabatan` (`id_master_jabatan`),
  ADD CONSTRAINT `data_dosen_ibfk_2` FOREIGN KEY (`id_master_departemen`) REFERENCES `master_departemen` (`id_master_departemen`);

--
-- Ketidakleluasaan untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD CONSTRAINT `data_user_ibfk_1` FOREIGN KEY (`username`) REFERENCES `data_mahasiswa` (`nim_mahasiswa`);

--
-- Ketidakleluasaan untuk tabel `template_surat_aktifkuliah`
--
ALTER TABLE `template_surat_aktifkuliah`
  ADD CONSTRAINT `template_surat_aktifkuliah_ibfk_1` FOREIGN KEY (`id_data_dosen`) REFERENCES `data_dosen` (`id_data_dosen`);

--
-- Ketidakleluasaan untuk tabel `template_surat_kerjapraktek`
--
ALTER TABLE `template_surat_kerjapraktek`
  ADD CONSTRAINT `template_surat_kerjapraktek_ibfk_1` FOREIGN KEY (`id_data_dosen`) REFERENCES `data_dosen` (`id_data_dosen`);

--
-- Ketidakleluasaan untuk tabel `template_surat_spk01`
--
ALTER TABLE `template_surat_spk01`
  ADD CONSTRAINT `template_surat_spk01_ibfk_1` FOREIGN KEY (`id_data_dosen`) REFERENCES `data_dosen` (`id_data_dosen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
