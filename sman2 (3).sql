-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2019 at 07:10 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sman2`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(128) NOT NULL,
  `jk` varchar(128) NOT NULL,
  `nip` varchar(5) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `id_user_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `jk`, `nip`, `alamat`, `no_hp`, `foto`, `id_user_fk`) VALUES
(1, 'Enny Nurmawati SP.d', 'perempuan', '123', 'Jl.hana', '081224', 'ps.jpg', 2),
(2, 'Erwin Joko Susanto ', 'perempuan', ' 6772', 'jl.mangga', '   081224612', 'ayat3.jpg', 3),
(3, 'Edy Susanto', 'laki-laki', ' 6701', 'jl.aceh', ' 08122461240', 'photo_2.jpg', 4),
(4, 'Dety Purwantini', 'Perempuan', '67014', 'jl.banda', '081224612470', '', 5),
(5, 'Supariyanto', 'Laki-laki', '67015', 'jl.angkasa', '081230230565', '', 6),
(6, 'Wiwik Andayani SP.d', 'perempuan', '67017', 'jl.laut', '081230230555', 'ps1.jpg', 7),
(7, 'Idham Jauhari Priyambodo Wirawan', 'Laki-laki', '67018', 'jl.kakan', '081224612407', '', 23),
(8, 'Miftahul Mujtahidin', 'Laki-laki', '67019', 'jl.nangka', '081230230567', '', 8),
(9, 'Dinar Wirantika', 'Perempuan', '67020', 'jl.gagak', '081224612400', '', 9),
(10, 'Sunarto', 'Laki-laki', '67021', 'jl.bekasi', '081230230566', '', 10),
(11, 'Djohan Arifin', 'Laki-laki', '67027', 'Jl.langit', '081224612444', '', 25),
(12, 'Kikie Andriani', 'Perempuan', '67023', 'Jl.danau', '087743781416', '', 28),
(13, 'Indah Kristina', 'Perempuan', '67026', 'jl.gagak', '081224612499', '', 27),
(14, 'Luqman Hakim', 'Laki-laki', '67025', 'jl.ikan', '087743781415', '', 16),
(21, 'Erna Widyawati', 'perempuan', '67029', ' jl hongkong', ' 08122461241', '', 11),
(22, 'Agus Nur Sofan', 'laki-laki', '67030', ' jl.hayati', ' 08122461222', '', 12),
(23, 'Mohammad Fihir', 'laki-laki', '67031', ' jl.nagrek', ' 08774378141', '', 13),
(24, 'Utono', 'laki-laki', '67037', '  jl.hanamasa ', ' 08122461245', '', 15),
(25, 'Martiningsih', 'perempuan', '67033', 'Jl.Songgat', ' 08122461222', '', 14),
(26, 'Tri Hartatik', 'laki-laki', '67035', ' jl.mangga', '  0812929211', '', 17),
(27, 'Heri Purwaningsih', 'laki-laki', '67040', ' jl.macan', '08122212604', '', 24),
(28, 'Rani Asmara', 'perempuan', '67042', ' jl.naga', ' 08122461244', '', 19),
(29, 'Akhmad Qomarudin', 'laki-laki', '67043', ' jl.apel', ' 08122461240', '', 20),
(30, 'Fatimah', 'perempuan', '67044', ' jl.anggur', ' 08122461240', '', 21),
(31, 'Wiwik Windarti SP.d', 'perempuan', '67045', ' jl.bebek', ' 08122461241', '', 29),
(32, 'Rr. Supeningsih', 'perempuan', '67046', ' jl.hartono', ' 08122461240', '', 30);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pelajaran`
--

CREATE TABLE `jadwal_pelajaran` (
  `id_jadwal` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam_pelajaran` varchar(10) NOT NULL,
  `kd_mapel_fk` varchar(10) NOT NULL,
  `id_kelas_fk` int(11) NOT NULL,
  `id_guru_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_pelajaran`
--

INSERT INTO `jadwal_pelajaran` (`id_jadwal`, `hari`, `jam_pelajaran`, `kd_mapel_fk`, `id_kelas_fk`, `id_guru_fk`) VALUES
(1, 'Senin', 'jam ke-1', '001', 3, 1),
(2, 'Senin', 'jam ke-2', '001', 3, 1),
(3, 'Senin', 'jam ke-3', '006', 3, 6),
(6, 'Senin', 'jam ke-4', '006', 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `jurusan` varchar(10) NOT NULL,
  `tingkat_kelas` varchar(10) NOT NULL,
  `ruangan` varchar(10) NOT NULL,
  `id_wali_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `jurusan`, `tingkat_kelas`, `ruangan`, `id_wali_fk`) VALUES
(3, 'XII IPS 3', 'IPS', '12', 'XII-IPS3', 7),
(4, 'XII IPS 4', 'IPS', '12', 'XII-IPS4', 8),
(6, 'XII MIPA 2', 'IPA', '12', 'XII-IPA2', 10),
(8, 'XII MIPA 4', 'IPA', '12', 'XII-IPA4', 12);

-- --------------------------------------------------------

--
-- Table structure for table `keterangan_presensi`
--

CREATE TABLE `keterangan_presensi` (
  `kd_keterangan` varchar(2) NOT NULL,
  `nama_keterangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keterangan_presensi`
--

INSERT INTO `keterangan_presensi` (`kd_keterangan`, `nama_keterangan`) VALUES
('A', 'Absen'),
('I', 'Izin'),
('D', 'Dispensasi'),
('S', 'Sakit'),
('H', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `kd_mapel` varchar(10) NOT NULL,
  `nama_pelajaran` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`kd_mapel`, `nama_pelajaran`) VALUES
('001', 'Geografi'),
('002', 'Bahasa dan Sastra Inggris'),
('003', 'Sosiologi'),
('004', 'Sejarah'),
('005', 'Pendidikan Jasmani, Olahr'),
('006', 'Ekonomi'),
('007', 'Matematika (Umum)'),
('008', 'Pendidikan Agama Islam da'),
('009', 'Muatan Lokal Bahasa Daera'),
('010', 'Seni Budaya'),
('011', 'Pendidikan Pancasila dan '),
('012', 'Prakarya dan Kewirausahaa'),
('013', 'Matematika (Peminatan)'),
('014', 'Bahasa Indonesia'),
('015', 'Fisika'),
('016', 'Biologi'),
('017', 'Kimia');

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id_presensi` int(11) NOT NULL,
  `tgl` varchar(20) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `kd_keterangan_fk` varchar(2) NOT NULL,
  `id_jadwal_fk` int(11) NOT NULL,
  `id_siswa_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`id_presensi`, `tgl`, `foto`, `kd_keterangan_fk`, `id_jadwal_fk`, `id_siswa_fk`) VALUES
(153, '2019-11-18', '', 'H', 1, 1),
(154, '2019-11-18', '', 'H', 1, 4),
(159, '2019-11-20', '', 'A', 1, 1),
(160, '2019-11-20', '', 'A', 1, 4),
(161, '2019-11-23', '', 'A', 2, 1),
(162, '2019-11-23', '', 'A', 2, 4),
(163, '2019-11-24', '', 'A', 3, 1),
(164, '2019-11-24', '', 'A', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(128) NOT NULL,
  `nipd` int(5) NOT NULL,
  `jk` varchar(128) NOT NULL,
  `nisn` int(10) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nik` varchar(50) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp_ortu` varchar(25) NOT NULL,
  `id_kelas_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `nipd`, `jk`, `nisn`, `tempat_lahir`, `tgl_lahir`, `nik`, `agama`, `alamat`, `no_hp_ortu`, `id_kelas_fk`) VALUES
(1, 'AAN', 12344, 'laki-laki', 192292222, 'Banjar', '2000-02-01', '1234567888', 'islam', ' jl.hayati', ' 081224612411', 3),
(4, 'Yulia', 12345, 'perempuan', 192292223, 'Sulawesi', '1999-04-05', '1234567888', 'kristen', ' jl.klaten', ' 081224612402', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id_fk` int(1) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role_id_fk`, `is_active`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1),
(2, 'enny_nur', '202cb962ac59075b964b07152d234b70', 2, 1),
(3, 'erwin_joko', '7363a0d0604902af7b70b271a0b96480', 2, 1),
(4, 'edy_susanto', '7363a0d0604902af7b70b271a0b96480', 2, 1),
(5, 'dety_purwantini', '202cb962ac59075b964b07152d234b70', 2, 1),
(6, 'supariyanto', '202cb962ac59075b964b07152d234b70', 2, 1),
(7, 'wiwik_andayani', '202cb962ac59075b964b07152d234b70', 3, 1),
(8, 'miftahul_mujtahidin', '202cb962ac59075b964b07152d234b70', 2, 1),
(9, 'dinar_wirantika', '202cb962ac59075b964b07152d234b70', 2, 1),
(10, 'sunarto', '202cb962ac59075b964b07152d234b70', 3, 1),
(11, 'erna_widyawati', '202cb962ac59075b964b07152d234b70', 2, 1),
(12, 'agus_nursofan', '202cb962ac59075b964b07152d234b70', 2, 1),
(13, 'mohamad_fihir', '202cb962ac59075b964b07152d234b70', 2, 1),
(14, 'martiningsih', '202cb962ac59075b964b07152d234b70', 2, 1),
(15, 'utono', '202cb962ac59075b964b07152d234b70', 2, 1),
(16, 'luqman_hakim', '202cb962ac59075b964b07152d234b70', 2, 1),
(17, 'tri_hartatik', '77e69c137812518e359196bb2f5e9bb9', 2, 1),
(19, 'rani_asmara', '202cb962ac59075b964b07152d234b70', 2, 1),
(20, 'akhmad_qomarudin', '202cb962ac59075b964b07152d234b70', 2, 1),
(21, 'fatimah', '202cb962ac59075b964b07152d234b70', 2, 1),
(23, 'idham_jauhari_priyambodo_wirawan', '202cb962ac59075b964b07152d234b70', 2, 1),
(24, 'heri_purwaningsih', '202cb962ac59075b964b07152d234b70', 2, 1),
(25, 'djohan_arifin', '202cb962ac59075b964b07152d234b70', 2, 1),
(26, 'siti_maisyaroh', '202cb962ac59075b964b07152d234b70', 2, 1),
(27, 'indah_kristina', '202cb962ac59075b964b07152d234b70', 2, 1),
(28, 'kikie_andriani', '202cb962ac59075b964b07152d234b70', 2, 1),
(29, 'wiwik_windarti', '202cb962ac59075b964b07152d234b70', 2, 1),
(30, 'rr_supeningsih', '202cb962ac59075b964b07152d234b70', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id_role`, `role`) VALUES
(1, 'admin'),
(2, 'guru'),
(3, 'walikelas');

-- --------------------------------------------------------

--
-- Table structure for table `wali_kelas`
--

CREATE TABLE `wali_kelas` (
  `id_wali` int(11) NOT NULL,
  `id_guru_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wali_kelas`
--

INSERT INTO `wali_kelas` (`id_wali`, `id_guru_fk`) VALUES
(7, 6),
(8, 8),
(10, 22),
(12, 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD UNIQUE KEY `nama_guru` (`nama_guru`),
  ADD KEY `id_user_fk` (`id_user_fk`);

--
-- Indexes for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `kd_mapel_fk` (`kd_mapel_fk`),
  ADD KEY `id_kelas_fk` (`id_kelas_fk`),
  ADD KEY `id_guru_fk` (`id_guru_fk`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_wali_fk` (`id_wali_fk`);

--
-- Indexes for table `keterangan_presensi`
--
ALTER TABLE `keterangan_presensi`
  ADD KEY `kd_keterangan` (`kd_keterangan`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD UNIQUE KEY `nama_pelajaran` (`nama_pelajaran`),
  ADD KEY `kd_mapel` (`kd_mapel`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id_presensi`),
  ADD KEY `id_siswa_fk` (`id_siswa_fk`),
  ADD KEY `id_jadwal_fk` (`id_jadwal_fk`),
  ADD KEY `kd_keterangan_fk` (`kd_keterangan_fk`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_kelas_fk` (`id_kelas_fk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role_id_fk` (`role_id_fk`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  ADD PRIMARY KEY (`id_wali`),
  ADD KEY `id_guru_fk` (`id_guru_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id_presensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  MODIFY `id_wali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`id_user_fk`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  ADD CONSTRAINT `jadwal_pelajaran_ibfk_1` FOREIGN KEY (`kd_mapel_fk`) REFERENCES `mata_pelajaran` (`kd_mapel`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `jadwal_pelajaran_ibfk_2` FOREIGN KEY (`id_kelas_fk`) REFERENCES `kelas` (`id_kelas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `jadwal_pelajaran_ibfk_3` FOREIGN KEY (`id_guru_fk`) REFERENCES `guru` (`id_guru`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_wali_fk`) REFERENCES `wali_kelas` (`id_wali`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_ibfk_1` FOREIGN KEY (`id_siswa_fk`) REFERENCES `siswa` (`id_siswa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `presensi_ibfk_2` FOREIGN KEY (`id_jadwal_fk`) REFERENCES `jadwal_pelajaran` (`id_jadwal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `presensi_ibfk_3` FOREIGN KEY (`kd_keterangan_fk`) REFERENCES `keterangan_presensi` (`kd_keterangan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas_fk`) REFERENCES `kelas` (`id_kelas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id_fk`) REFERENCES `user_role` (`id_role`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  ADD CONSTRAINT `wali_kelas_ibfk_1` FOREIGN KEY (`id_guru_fk`) REFERENCES `guru` (`id_guru`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
