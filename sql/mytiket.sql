-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2016 at 05:54 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `boking`
--

CREATE TABLE IF NOT EXISTS `boking` (
  `id_boking` int(10) unsigned NOT NULL,
  `id_seminar` int(11) NOT NULL,
  `kode_boking` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `img` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `tgl_boking` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE IF NOT EXISTS `fakultas` (
  `id_fakultas` int(10) unsigned NOT NULL,
  `nm_fakultas` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nm_fakultas`, `img`, `link`) VALUES
(1, 'MANAJEMEN', 'intro-bg.jpg', ''),
(2, 'AKUNTANSI', '', ''),
(3, 'Teknik Informatika', 'sublime.jpg', ''),
(4, 'Teknik Elektro', 'banner-bg.jpg', ''),
(5, 'Teknik Industri', 'intro-bg.jpg', ''),
(6, 'Teknik Mesin', 'intro-bg.jpg', ''),
(7, 'Sastra Indonesia', 'sublime.jpg', ''),
(8, 'Sastra Inggris', 'banner-bg.jpg', ''),
(9, 'Ilmu Hukum', 'intro-bg.jpg', ''),
(10, 'MATEMATIKA', 'sublime.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE IF NOT EXISTS `identitas` (
  `id_identitas` int(11) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `publis` varchar(200) NOT NULL,
  `kaprodi` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `id_fakultas`, `visi`, `misi`, `publis`, `kaprodi`) VALUES
(1, 1, 'Menjadikan Program Studi Manajemen terdepan dan berkualitas sehingga dapat menghasilkan lulusan yang berdaya saing tinggi dan mampu memenuhi kebutuhan stakeholders di lingkungan Propinsi Banten, yang dilandasi dengan keimanan dan ketaqwaan kepada Tuhan Yang Maha Esa.\r\n ', ' Melaksanakan proses pendidikan dan pembelajaran berdasarkan prinsip-prinsip Tri Dharma Perguruan Tinggi; # Melaksanakan proses pendidikan dan pembelajaran yang berdasarkan kurikulum ilmu ekonomi berbasis kompetensi; # Melaksanakan proses pendidikan dan pembelajaran berdasarkan pengembangan ilmu ekonomi yang berskala lokal, nasional maupun global; # Melaksanakan proses pendidikan dan pembelajaran yang dilandasi dengan pendalaman rasa cinta terhadap masyarakat, tanah air, bangsa dan Negara.', 'Pamulang, 03 November 2013', 'Zaenal Abidin, S.Pd,. M.Si'),
(2, 3, '<ol>\r\n<li>Menjadi program unggulan dalam bidang informatika di Indonesia pada tahun 2017 yang dilandasi iman dan takwa.</li>\r\n</ol>', '<ol>\r\n<li>menyelenggarakan pendidikan yang berstandar nasional.</li>\r\n<li>menyelenggarakan berbagai kegiatan penelitian dan pengembangan, pengkajian dan kerjasama dengan pihak stakeholder.</li>\r\n<li>mengembangkan penguasaan iptek bidang informatika dan menerapkannya dalam kehidupan masyarakat.</li>\r\n</ol>', 'lasdlkasd', ''),
(3, 7, 'Menjadikan program studi Sastra Indonesia yang berkualitas dan mempunyai daya saing tinggi, dengan dasar  keimanan dan ketakwaan kepada Tuhan Yang Maha Esa.', 'Melaksanakan proses pendidikan dan pembelajaran berdasarkan prinsip-prinsip Tri Dharma Perguruan Tinggi.\r\n# Melaksanakan proses pendidikan dan pembelajaran berdasarkan kurikulum   ilmu sastra Indonesia berbasis kompetensi.\r\n# Melaksanakan proses pendidikan dan pembelajaran berdasarkan pengembangan ilmu sastra Indonesia yang berskala local, nasional, dan internasional.', '', ''),
(4, 4, 'Menjadi program studi yang menghasilkan lulusan Teknik Elektro yang unggul, terdepan, modern, mandiri, profesional, inovatif, produktif, dan handal serta mempunyai etika profesi yang dilandasi iman & taqwa dalam menunjang Pembangunan Nasional.', 'Menyelenggarakan program pendidikan tinggi dan pembelajaran yang didasarkan kepada kurikulum yang berbasis kompetensi di bidang Teknik Elektro sehingga berdaya guna secara konsisten dalam bidang Teknik Elektronika dan Teknik Energi Listrik. # Mengembangkan ilmu pengetahuan, sikap, dan keterampilan yang memadai dalam bidang Teknik Elektro. # Melaksanakan Tridarma Perguruan Tinggi yang mampu mengembangkan diri dalam bidang Teknik Elektro.', 'Tangerang Selatan, 28 Juni 2012', ''),
(5, 9, 'Menjadikan Program Studi Ilmu Hukum yang bermutu dan berkualitas dibidang penguasaan dan penerapan Hukum Perdata, Pidana, Hukum Tata Negara serta Hukum Internasional yang terjangkau oleh seluruh lapisan masyarakat serta mampu bersaing ditingkat nasional maupun internasional pada Tahun 2025 berdasarkan ridha Tuhan Yang Maha Esa.\r\n\r\n ', 'Menyelenggarakan pembelajaran keilmuan keterampilan serta penelitian dan pengabdian masyarakat dibidang hukum Perdata, Pidana, Hukum Tata Negara serta Hukum Internasional untuk kepentingan akademik maupun pembangunan hukum nasional, yang berkualitas dengan mempertimbangkan daya jangkau semua kalangan. # Melakukan kerjasama lintas lembaga yang menunjang sinergitas dan motivasi, serta kompetitif kajian dan implementasi Tri Dharma Perguruan Tinggi. # Mengintensifkan studi ilmu hukum dalam nilai-nilai dan norma religius terkait ketuhanan, peribadatan, akhlak mulia, keilmuan, dan kehidupan yang hasilnya diintegrasikan mengarah kedalam mata kuliah secara relevan. # Meningkatkan kualitas pelayanan menggapai tata kelola Program Studi Ilmu Hukum yang modern pada tahun 2025.', '', ''),
(6, 5, 'Menjadi Program Studi yang menghasilkan lulusan Sarjana yang unggul dan handal dalam bidang Teknik Industri, baik dalam bidang ilmu pengetahuan dan teknologi, penelitian dan pengembangan, serta mempunyai etika profesi yang dilandasi Iman dan Taqwa dalam menunjang Pembangunan Nasional\r\n ', 'Melaksanakan Program Pendidikan Tinggi di bidang teknik industri yang berdasarkan keilmuan khususnya teknik produksi dan manajemen kualitas melalui simulasi dan komputasi.# Melaksanakan dan menghasilkan kegiatan penelitian yang bermanfaat bagi kemajuan dan perkembangan keilmuan dibidang teknik industri. # Melaksanakan pengabdian kepada masyarakat supaya mampu mengembangkan potensi masyarakat guna meningkatkan taraf hidup kesejahteraan masyarakat.', '', ''),
(7, 8, 'Menjadikan Program Studi Bahasa dan Sastra Inggris yang berkualitas dan unggul dalam penyelenggaraan dan penerapan ilmu bahasa dan sastra Inggris  serta  mempunyai daya saing yang tinggi dalam menghasilkan lulusan yang profesional, bermoral, dan beretos kerja tinggi dengan dasar keimanan dan ketakwaan kepada Tuhan Ynag Maha Esa.', 'Melaksanakan proses pendidikan akademik dan professional di bidang bahasa dan sastra Inggris berdasarkan prinsip-prinsip Tri Dharma Perguruan Tinggi. # Melaksanakan kegiatan penelitian untuk menghasilkan inovasi di bidang bahasa dan sastra Inggris. # Menyelenggarakan kegiatan pengabdian masyarakat untuk membantu memecahkan masalah dan meningkatkan kualitas masyarakat di bidang bahasa dan sastra Inggris. # Memelihara dan meningkatkan kerjasama dengan berbagai pihak di tingkat lokal, nasional, dan internasional dalam pengembangan ilmu bahasa dan sastra Inggris di bidang Tri Dharma Perguruan Tinggi.', '', ''),
(8, 6, 'Menjadi Program Studi yang menghasilkan lulusan Teknik Mesin yang unggul dan handal  khususnya dalam rancang bangun bidang Kontruksi Mesin dan Mesin Konversi Energi yang mempunyai etika profesi yang dilandasi Iman dan Taqwa dalam menunjang Pembangunan Nasional', 'Menyelenggarakan Program Pendidikan Tinggi di bidang Teknik Mesin yang  berorientasi pada kebutuhan dan perkembangan ilmu pengetahuan untuk penghasilkan lulusan dengan kualitas tinggi. # Melaksanakan Tridarma Perguruan Tinggi yang mampu mengembangkan diri dalam bidang Teknik mesin.\r\n# Menghasilkan lulusan sarjana yang berahlak mulia dan mampu meningkatkan intensitas dan kualitas penelitian bidang ilmu dan terapannya seiring dengan perkembangan ilmu pengetahuan dan teknologi.', '', ''),
(9, 10, 'Menjadi Program Studi yang unggul dalam pengembangan Matematika yang berkualitas, yang tanggap terhadap perkembangan IPTEK dan memberi arah pada perubahan yang dilandasi Iman & Taqwa', 'Menghasilkan lulusan yang berkemampuan mengembangkan Matematika secara tepat dan berdaya guna serta siap untuk studi lanjut. # Menyelenggarakan proses pembelajaran yang berorientasi pada perkembangan dan penerapan Matematika.\r\n# Meningkatkan kegiatan penelitian Matematika yang bernilai, baik secara keilmuan, ekonomi dan social. # Memasyarakatkan Matematika melalui kerjasama dengan pihak lain, publikasi hasil penelitian dan pengabdian pada masyarakat berbasis Matematika terapan.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `id_jabatan` int(10) unsigned NOT NULL,
  `nm_jabatan` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nm_jabatan`) VALUES
(1, 'Ketua Panitia'),
(2, 'Panitia');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id_mahasiswa` int(11) unsigned NOT NULL,
  `id_shift` int(11) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `namalengkap` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `semester` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `jk` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `kelas` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `kontak` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(33) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2011142223 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `id_shift`, `id_fakultas`, `namalengkap`, `semester`, `jk`, `kelas`, `kontak`, `email`, `password`, `created_at`, `updated_at`) VALUES
(495349583, 4, 0, 'jafri', '', 'L', '', '099923928899', 'jefri@gmail.com', 'c710857e9b674843afc9b54b7ae2032d', '2016-01-23 19:38:56', '2016-01-23 19:38:56'),
(1837982322, 4, 0, 'sukron J', '', 'L', '', '0888293877', 'sukronj@gmail.com', 'b9467905a80535adafadb5da529ab7ae', '2016-01-20 21:00:35', '2016-01-20 21:00:35'),
(2011142121, 2, 3, 'ahmad Bazzar', '9', 'L', '9TMLPD', '08816199183', 'bazzar40@yahoo.co.id', '67a0133579d0567a5e5de7f54bc086ed', '2015-10-12 01:20:25', '2015-10-12 01:20:25'),
(2011142146, 1, 3, 'Ahmad Sukron', '10', 'L', '10TPLPD', '0881194519', 'ahmadsukron@gmail.com', 'ad6815afe028034250bae91ce885c9b7', '2015-10-12 01:12:52', '2015-12-06 15:17:03'),
(2011142160, 1, 3, 'inu dola', '7', 'L', '10TPLPD', '08816199180', 'inu@gmail.com', 'dcf6d094d08fe12efbb66b688859a8e6', '2015-10-12 01:38:47', '2016-01-27 07:47:00'),
(2011142164, 1, 3, 'Sukron Mamun', '8', 'L', '8TPLPD', '0881194519', '888sukron@gmail.com', 'ad6815afe028034250bae91ce885c9b7', '2015-10-10 06:43:22', '2015-10-10 06:43:22'),
(2011142166, 1, 3, 'ahmad sukron', '9', 'L', '9TPLPD', '08816199183', 'ahmadsukron40@yahoo.co.id', '61243c7b9a4022cb3f8dc3106767ed12', '2015-10-12 01:20:25', '2015-10-12 01:20:25'),
(2011142222, 2, 3, 'IIS', '9', 'P', '9TPLPA', '08816199122', 'iis@gmail.com', '48d99b6895062a50ad02d6e3a9a9417e', '2015-12-22 10:42:48', '2015-12-22 10:42:48');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `id_pseminar` int(11) unsigned NOT NULL,
  `id_seminar` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kd_trans` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `kelas` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `semester` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pseminar`, `id_seminar`, `id_mahasiswa`, `id_user`, `kd_trans`, `status`, `kelas`, `semester`, `tgl_daftar`) VALUES
(2, 1, 2011142160, 1, '20111421603507', 'Lunas', '10TPLPD', '10', '2015-12-14 11:02:13'),
(3, 2, 2011142160, 1, '20111421601129', 'Lunas', '10TPLPD', '10', '2015-12-14 11:02:28'),
(4, 3, 2011142160, 1, '20111421601635', 'Lunas', '10TPLPD', '10', '2015-12-19 18:04:27'),
(7, 2, 2011142164, 1, '9823666', 'Lunas', '8TPLPD', '8', '2016-01-20 20:23:59'),
(10, 1, 1837982322, 1, '18379823221837', 'Lunas', '', '', '2016-01-20 21:00:36'),
(11, 2, 495349583, 1, '04953495830495', 'Lunas', '', '', '2016-01-23 19:38:57'),
(12, 6, 2011142160, 1, '20111421601436', 'Lunas', '10TPLPD', '7', '2016-01-26 07:47:59');

-- --------------------------------------------------------

--
-- Table structure for table `seminar`
--

CREATE TABLE IF NOT EXISTS `seminar` (
  `id_seminar` int(10) unsigned NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `id_shift` int(11) NOT NULL,
  `tema` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `pembahasan` text COLLATE utf8_unicode_ci NOT NULL,
  `pembicara` text COLLATE utf8_unicode_ci NOT NULL,
  `biaya` double(8,2) NOT NULL,
  `kuota` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `batasan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modul` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seminar`
--

INSERT INTO `seminar` (`id_seminar`, `id_fakultas`, `id_shift`, `tema`, `pembahasan`, `pembicara`, `biaya`, `kuota`, `tanggal`, `batasan`, `modul`, `img`, `created_at`, `update_at`) VALUES
(1, 3, 1, 'Laravel', 'Wrap buttons or secondary text in .panel-footer. Note that panel footers do not inherit colors and borders when using contextual variations as they are not meant to be in the foreground.', 'Sukron Mamun#Inu Dola#Bana', 70000.00, 2500, '2016-01-26 02:00:00', '0000-00-00 00:00:00', 'myUNPAM - Kartuujianreguler.pdf', 'sublime.jpg', '2015-12-14 19:35:03', '2015-12-20 16:00:24'),
(2, 3, 4, 'CSS UI', 'Like other components, easily make a panel more meaningful to a particular context by adding any of the contextual state classes.', 'Ahmad Sukron#Rendi Maulana', 60000.00, 2500, '2015-12-15 02:00:00', '0000-00-00 00:00:00', 'modul.pdf', 'intro-bg.jpg', '2015-12-07 10:44:48', '0000-00-00 00:00:00'),
(3, 3, 1, 'Bootstrap', 'Wrap buttons or secondary text in .panel-footer. Note that panel footers do not inherit colors and borders when using contextual variations as they are not meant to be in the foreground.', 'Sukron Ma''mun#Inu Dola#Risqi', 40000.00, 2500, '2015-12-21 02:00:00', '0000-00-00 00:00:00', 'document.doc', 'banner-bg.jpg', '2015-12-23 19:46:03', '2015-12-23 19:46:03'),
(4, 3, 1, 'Jquery', 'Like other components, easily make a panel more meaningful to a particular context by adding any of the contextual state classes.', 'Ahmad Sukron#Rendi Maulana#Rizal', 60000.00, 2500, '2015-10-18 02:00:00', '0000-00-00 00:00:00', 'modul.pdf', 'intro-bg.jpg', '2015-10-13 10:44:48', '0000-00-00 00:00:00'),
(5, 1, 4, 'Manajement System', 'Like other components, easily make a panel more meaningful to a particular context by adding any of the contextual state classes.', 'Ahmad Sukron#Rendi Maulana#Aulia', 60000.00, 2500, '2015-10-18 02:00:00', '0000-00-00 00:00:00', 'modul.pdf', 'banner-bg.jpg', '2016-01-21 10:44:48', '0000-00-00 00:00:00'),
(6, 3, 1, 'UML', 'Wrap buttons or secondary text in .panel-footer. Note that panel footers do not inherit colors and borders when using contextual variations as they are not meant to be in the foreground.', 'Sukron Ma''mun#Inu Dola#Aisyah', 50000.00, 2500, '2016-02-16 02:00:00', '0000-00-00 00:00:00', 'document.doc', 'intro-bg.jpg', '2016-02-16 02:00:00', '2016-02-16 02:00:00'),
(7, 3, 1, 'Angular Js', 'Like other components, easily make a panel more meaningful to a particular context by adding any of the contextual state classes.', 'Ahmad Sukron#Rizal', 60000.00, 2500, '2015-10-18 02:00:00', '0000-00-00 00:00:00', 'modul.pdf', 'banner-bg.jpg', '2015-12-15 10:44:48', '2015-12-21 16:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE IF NOT EXISTS `shift` (
  `id_shift` int(10) unsigned NOT NULL,
  `nm_shift` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`id_shift`, `nm_shift`) VALUES
(1, 'Shift A / Kelas Pagi'),
(2, 'Shift B / Kelas Malam'),
(3, 'Shift C / Kelas Eksekutiv'),
(4, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) unsigned NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `nama_dpn` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nama_blk` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `kontak` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_jabatan`, `id_fakultas`, `nama_dpn`, `nama_blk`, `password`, `kontak`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'sukron', 'ma''mun', 'ad6815afe028034250bae91ce885c9b7', '81314334660', 'sukron@gmail.com', 'aktive', '2015-10-11 07:01:08', '2015-10-11 07:01:08'),
(2, 1, 3, 'krisna ', 'singgih', '948f5cc9f8c6c3b86a070beaca7d20bf', '81314334600', 'krisna@gmail.com', 'aktive', '2016-01-25 04:01:08', '2016-01-25 04:01:08'),
(3, 2, 3, 'tajul', 'aripin', '94ec22686583224a342b7fb5047947c8', '888293811', 'tajul@gmail.com', 'non', '2016-02-04 04:56:12', '2016-02-04 04:56:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boking`
--
ALTER TABLE `boking`
  ADD PRIMARY KEY (`id_boking`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pseminar`);

--
-- Indexes for table `seminar`
--
ALTER TABLE `seminar`
  ADD PRIMARY KEY (`id_seminar`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id_shift`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boking`
--
ALTER TABLE `boking`
  MODIFY `id_boking` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2011142223;
--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pseminar` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `seminar`
--
ALTER TABLE `seminar`
  MODIFY `id_seminar` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `id_shift` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
