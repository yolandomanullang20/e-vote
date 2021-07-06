-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 02:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_evoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `kandidat_id` int(11) NOT NULL,
  `kandidat_kode` varchar(255) NOT NULL,
  `kandidat_nama` varchar(255) NOT NULL,
  `kandidat_tentang` text NOT NULL,
  `kandidat_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`kandidat_id`, `kandidat_kode`, `kandidat_nama`, `kandidat_tentang`, `kandidat_foto`) VALUES
(2, '1', 'Sulaiman Bailuno', '<p><strong>DATA PERORANGAN</strong></p>\r\n\r\n<p>Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Sulaiman Bailuno</p>\r\n\r\n<p>Tempat Tgl Lahir&nbsp;&nbsp;&nbsp;&nbsp; : Kumai 27 Maret 1975</p>\r\n\r\n<p>Agama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Islam</p>\r\n\r\n<p>Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Desa Amin Jaya Kec.Pangkalan Banteng<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kabupaten Kotawaringin Barat Kalteng</p>\r\n\r\n<p>Pekerjaan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Kepala Desa</p>\r\n\r\n<p>Pendidikan Trakhir&nbsp; : S2</p>\r\n\r\n<p><strong>PENGALAMAN ORGANISASI</strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Sekdes Amin Jaya 2003 S/D 2005</li>\r\n	<li>Ketua KNPI Kecamatan Pangkalan Banteng 2006 S/D 2014</li>\r\n	<li>Kepala Desa 2008 s/d 20014</li>\r\n	<li>Wakil Ketua Asosiasi Kepala Desa Se Kecamatan Pangkalan Banteng 2011 S/D 2014</li>\r\n	<li>Anggota Korwil IMI Kotawaringin Barat 2012 S/D Sekarang</li>\r\n	<li>Anggota PERBAKIN Kotawaringin Barat 2015 S/D Sekarang</li>\r\n	<li>Kepala Desa 2014 sekarang</li>\r\n</ul>\r\n\r\n<p><strong>PELATIHAN</strong></p>\r\n\r\n<ul>\r\n	<li>Pelatihan Skau Dinas kehutanan KOBAR</li>\r\n	<li>Pelatihan Aparatur pemerintah Desa</li>\r\n	<li>Dilkat PMKS Dinas Sosial Banjarmasin</li>\r\n	<li>Bintek pemetaan Fak Geografi UGM Jogjakarta</li>\r\n	<li>Pelatihan bidang berburu Perbakin angkatan 13 Semarang</li>\r\n</ul>\r\n', '2023094870_foto1.jpg'),
(3, '2', 'Rahman Anjas', '<p><strong>DATA PERORANGAN</strong></p>\r\n\r\n<p>Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rahman Anjas</p>\r\n\r\n<p>Tempat Tgl Lahir&nbsp;&nbsp;&nbsp;&nbsp; : Kumai 2 Agustus 1995</p>\r\n\r\n<p>Agama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Islam</p>\r\n\r\n<p>Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Desa Amin Jaya Kec.Pangkalan Banteng<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kabupaten Kotawaringin Barat Kalteng</p>\r\n\r\n<p>Pekerjaan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Petani</p>\r\n\r\n<p>Pendidikan Trakhir&nbsp; : S1</p>\r\n\r\n<p><strong>PENGALAMAN ORGANISASI</strong></p>\r\n\r\n<ul>\r\n	<li>Sekdes Amin Jaya 2003 S/D 2005</li>\r\n	<li>Ketua KNPI Kecamatan Pangkalan Banteng 2006 S/D 2014</li>\r\n	<li>Kepala Desa 2008 s/d 20014</li>\r\n	<li>Wakil Ketua Asosiasi Kepala Desa Se Kecamatan Pangkalan Banteng 2011 S/D 2014</li>\r\n	<li>Anggota Korwil IMI Kotawaringin Barat 2012 S/D Sekarang</li>\r\n	<li>Anggota PERBAKIN Kotawaringin Barat 2015 S/D Sekarang</li>\r\n</ul>\r\n\r\n<p><strong>PELATIHAN</strong></p>\r\n\r\n<ul>\r\n	<li>Pelatihan Skau Dinas kehutanan KOBAR</li>\r\n	<li>Pelatihan Aparatur pemerintah Desa</li>\r\n	<li>Dilkat PMKS Dinas Sosial Banjarmasin</li>\r\n	<li>Bintek pemetaan Fak Geografi UGM Jogjakarta</li>\r\n	<li>Pelatihan bidang berburu Perbakin angkatan 13 Semarang</li>\r\n	<li>Pelatihan Komputer</li>\r\n</ul>\r\n', '1181675454_6875019793_b345e09ffc_b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pemilih`
--

CREATE TABLE `pemilih` (
  `pemilih_id` int(11) NOT NULL,
  `pemilih_kode` varchar(255) NOT NULL,
  `pemilih_tgl_daftar` date NOT NULL,
  `pemilih_ktp` varchar(255) NOT NULL,
  `pemilih_nama` varchar(255) NOT NULL,
  `pemilih_umur` int(11) NOT NULL,
  `pemilih_alamat` text NOT NULL,
  `pemilih_jk` varchar(10) NOT NULL,
  `pemilih_username` varchar(255) NOT NULL,
  `pemilih_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pemilih`
--

INSERT INTO `pemilih` (`pemilih_id`, `pemilih_kode`, `pemilih_tgl_daftar`, `pemilih_ktp`, `pemilih_nama`, `pemilih_umur`, `pemilih_alamat`, `pemilih_jk`, `pemilih_username`, `pemilih_password`) VALUES
(1, 'P-001', '2019-12-06', '08882828223', 'Sulaiman', 28, 'Jl. Tengkulak', 'Laki-Laki', 'pemilih1', '661fa44f674d52474df109b8f881800d'),
(2, 'P-002', '2019-12-13', '082727262623', 'Yahya Waloni', 45, 'jl. angrek no.27,bandung', 'Laki-Laki', 'pemilih2', '3307b01b0f89bb953bb601c9df3d185a'),
(4, 'P-003', '2019-12-14', '0862272277', 'Sukiman', 44, 'Jl. Merpati. no.76, bandung', 'Laki-Laki', 'pemilih3', 'c72686411349769367289efcca020b85'),
(6, 'p-004', '2019-12-21', '92834234234234', 'Jefri Nikolas', 23, 'Jl. Plangkaraya no.1 ', 'Laki-Laki', 'pemilih4', '61533aa8c725dcca7350677ff2ec10e3'),
(205, 'P-005', '2019-12-22', '12838337341', 'Karja Narpati S.Psi', 25, 'Dk. Bhayangkara No. 842, Bogor 23323, SumSel', 'Laki-Laki', 'pemilih5', '9064baa0d50a161d38806a473755889a'),
(206, 'P-006', '2019-12-22', '12838337342', 'Rika Febi Prastuti', 20, 'Dk. Diponegoro No. 705, Kendari 97512, JaBar', 'Perempuan', 'pemilih6', 'ecab0f7d9ca74fa5c3bfb93330aa1325'),
(207, 'P-007', '2019-12-22', '12838337343', 'Oman Xanana Waskita', 49, 'Jr. Wahidin Sudirohusodo No. 384, Dumai 71583, Lampung', 'Laki-Laki', 'pemilih7', 'f3fa4c3ff6511a2c0b5659cf77d9bf07'),
(208, 'P-008', '2019-12-22', '12838337344', 'Nasab Narpati', 24, 'Dk. Labu No. 958, Palu 34350, SulSel', 'Perempuan', 'pemilih8', 'aa1386baf483ef2d108e86d223e0d1c7'),
(209, 'P-009', '2019-12-22', '12838337345', 'Banara Marbun S.E.', 32, 'Psr. Tentara Pelajar No. 658, Balikpapan 65938, SulUt', 'Laki-Laki', 'pemilih9', 'c144bab3226be72bd3cacdc1aba9c9e2'),
(210, 'P-0010', '2019-12-22', '12838337346', 'Kurnia Bajragin Wibowo S.I.Kom', 46, 'Ds. Bagas Pati No. 281, Solok 39999, Aceh', 'Perempuan', 'pemilih10', '390e32d37319ddf1d56d9b6d4cab5671'),
(211, 'P-0011', '2019-12-22', '12838337347', 'Ajeng Andriani S.Gz', 20, 'Psr. Jambu No. 941, Malang 63573, Gorontalo', 'Perempuan', 'pemilih11', '8a6e0188f86e67704a496e60b494521e'),
(212, 'P-0012', '2019-12-22', '12838337348', 'Slamet Tirtayasa Pranowo', 40, 'Psr. Honggowongso No. 162, Mataram 30294, Gorontalo', 'Laki-Laki', 'pemilih12', '3c06a8d7c23de9419d92b552db77ca7b'),
(213, 'P-0013', '2019-12-22', '12838337349', 'Zamira Mayasari S.I.Kom', 50, 'Gg. Yosodipuro No. 255, Padangsidempuan 35939, KepR', 'Perempuan', 'pemilih13', '55e914de3dad9acba7a6812b8e1def0e'),
(214, 'P-0014', '2019-12-22', '128383373410', 'Dadap Narpati', 34, 'Gg. Diponegoro No. 37, Mojokerto 18041, SulSel', 'Perempuan', 'pemilih14', '56f242894eda25a96e7c9252d8e44650'),
(215, 'P-0015', '2019-12-22', '128383373411', 'Makara Jailani', 23, 'Ds. Acordion No. 74, Bengkulu 28314, Bali', 'Laki-Laki', 'pemilih15', '59621b21a8ecce70d2f2870bd8c5db46'),
(216, 'P-0016', '2019-12-22', '128383373412', 'Victoria Suryatmi', 45, 'Dk. Bakit  No. 63, Denpasar 27753, SulUt', 'Perempuan', 'pemilih16', 'bf26fd2e6c55be28d3cf53703dd03d5d'),
(217, 'P-0017', '2019-12-22', '128383373413', 'Ratna Maimunah Pudjiastuti', 40, 'Jr. Yoga No. 690, Tanjungbalai 43915, SulBar', 'Laki-Laki', 'pemilih17', 'daef001ec5757e9c263ef84578ccfc78'),
(218, 'P-0018', '2019-12-22', '128383373414', 'Cornelia Vanesa Rahimah M.Farm', 25, 'Dk. Dago No. 864, Bekasi 61416, Aceh', 'Perempuan', 'pemilih18', '0653ab0989b324a791a8d189656f5101'),
(219, 'P-0019', '2019-12-22', '128383373415', 'Ayu Jane Mulyani', 30, 'Kpg. Ciumbuleuit No. 305, Sorong 63706, DIY', 'Perempuan', 'pemilih19', '655fb4376833f8e4f9faf96cf26897ae'),
(220, 'P-0020', '2019-12-22', '128383373416', 'Nadine Aryani', 18, 'Psr. Babadak No. 439, Samarinda 60349, DIY', 'Perempuan', 'pemilih20', '06b84f287071bb5c7afa04772d792caa'),
(221, 'P-0021', '2019-12-22', '128383373417', 'Damu Pangestu', 47, 'Jr. Baing No. 79, Bandung 26128, SulSel', 'Perempuan', 'pemilih21', 'aa57e11f0e69a215250b52cb3217a364'),
(222, 'P-0022', '2019-12-22', '128383373418', 'Queen Hastuti', 22, 'Jr. Basoka Raya No. 554, Tanjungbalai 70301, SumUt', 'Laki-Laki', 'pemilih22', 'be70dbe30bb223704b9b25d62c64e50d'),
(223, 'P-0023', '2019-12-22', '128383373419', 'Ira Yolanda', 48, 'Psr. Agus Salim No. 51, Sungai Penuh 93090, Lampung', 'Perempuan', 'pemilih23', 'cec042b23c39a8075574eb769d0b924f'),
(224, 'P-0024', '2019-12-22', '128383373420', 'Hadi Prasetyo', 38, 'Psr. Jaksa No. 888, Tanjungbalai 44238, KalSel', 'Perempuan', 'pemilih24', 'cdac798e9f43802949898e062dd4c748'),
(225, 'P-0025', '2019-12-22', '128383373421', 'Safina Namaga', 50, 'Dk. Babakan No. 588, Pekalongan 95787, KalBar', 'Laki-Laki', 'pemilih25', '6beae02db6b8e808ea5824dea7122928'),
(226, 'P-0026', '2019-12-22', '128383373422', 'Setya Iswahyudi', 47, 'Jr. Ir. H. Juanda No. 970, Malang 20198, KalBar', 'Laki-Laki', 'pemilih26', 'e76ec582a74606bee8a9658bd0713d97'),
(227, 'P-0027', '2019-12-22', '128383373423', 'Tiara Widiastuti', 27, 'Ki. Bagonwoto  No. 51, Batam 22564, Bali', 'Perempuan', 'pemilih27', '9b029f2fee6122727676fd11602716fd'),
(228, 'P-0028', '2019-12-22', '128383373424', 'Irma Kusmawati', 23, 'Ki. Babakan No. 692, Cilegon 52819, SulTra', 'Laki-Laki', 'pemilih28', '83e4a98d46ca2eeed6bbb56b9b9dc48c'),
(229, 'P-0029', '2019-12-22', '128383373425', 'Kiandra Aisyah Wijayanti S.Ked', 47, 'Gg. Sudiarto No. 331, Lhokseumawe 37998, Gorontalo', 'Laki-Laki', 'pemilih29', '1b0581701f09cb81bdfd666423275322'),
(230, 'P-0030', '2019-12-22', '128383373426', 'Cakrabirawa Dadi Anggriawan M.M.', 32, 'Ki. Tubagus Ismail No. 832, Madiun 34309, JaBar', 'Perempuan', 'pemilih30', 'a1fb8e6cb7c4daf29a39d6be3550488f'),
(231, 'P-0031', '2019-12-22', '128383373427', 'Gangsa Maheswara', 37, 'Ki. Kyai Mojo No. 12, Lubuklinggau 87228, Bali', 'Perempuan', 'pemilih31', '0b9f86fd9dc1e3f40460377a3843cbed'),
(232, 'P-0032', '2019-12-22', '128383373428', 'Natalia Usada S.I.Kom', 46, 'Jln. Bhayangkara No. 470, Tangerang Selatan 45163, KalTeng', 'Laki-Laki', 'pemilih32', '1259de162828a3794a6a83cb2ba91e47'),
(233, 'P-0033', '2019-12-22', '128383373429', 'Ghaliyati Andriani', 22, 'Gg. R.M. Said No. 826, Bau-Bau 33697, KalBar', 'Perempuan', 'pemilih33', 'cc3bf1bd5afb974fa6886daed5294504'),
(234, 'P-0034', '2019-12-22', '128383373430', 'Adinata Hidayat', 20, 'Psr. Pattimura No. 935, Administrasi Jakarta Timur 11642, KalTeng', 'Perempuan', 'pemilih34', 'a948178f8e55947f4f72ddf4a26392ab'),
(235, 'P-0035', '2019-12-22', '128383373431', 'Karman Sinaga', 45, 'Dk. Ciwastra No. 642, Bogor 33440, KalTeng', 'Laki-Laki', 'pemilih35', '0bad29a573d25f3297fd8e6b665bed23'),
(236, 'P-0036', '2019-12-22', '128383373432', 'Nadine Purnawati', 47, 'Kpg. Tentara Pelajar No. 971, Bogor 12669, KalTeng', 'Perempuan', 'pemilih36', '29da605da64405b99caec3bcba7698c6'),
(237, 'P-0037', '2019-12-22', '128383373433', 'Ilsa Rika Kusmawati S.Psi', 41, 'Kpg. Sutoyo No. 338, Palembang 85952, Aceh', 'Laki-Laki', 'pemilih37', 'c17098ee28bd9dc603b8114b90c57ee9'),
(238, 'P-0038', '2019-12-22', '128383373434', 'Michelle Widya Usamah M.TI.', 28, 'Kpg. Surapati No. 119, Denpasar 31044, NTT', 'Laki-Laki', 'pemilih38', '88c70f7d3ba2b1ca868924e7cd0810cd'),
(239, 'P-0039', '2019-12-22', '128383373435', 'Zelda Pertiwi', 28, 'Kpg. Flores No. 628, Blitar 30740, PapBar', 'Laki-Laki', 'pemilih39', '095cb5ffa22d20114dca293829b4aa29'),
(240, 'P-0040', '2019-12-22', '128383373436', 'Asmianto Ramadan', 19, 'Kpg. Baranang No. 413, Payakumbuh 10215, PapBar', 'Perempuan', 'pemilih40', '3193ae86980c513fe1965b1a9955d0ee'),
(241, 'P-0041', '2019-12-22', '128383373437', 'Farhunnisa Rahayu', 43, 'Psr. Haji No. 378, Magelang 53251, KalSel', 'Perempuan', 'pemilih41', '55ad9e9af5e777e1fa212b020e93fcc7'),
(242, 'P-0042', '2019-12-22', '128383373438', 'Gabriella Nasyiah', 28, 'Jln. Reksoninten No. 172, Surabaya 52529, SulSel', 'Perempuan', 'pemilih42', 'b88709147a2abc4aeb18b48f3dbd6abc'),
(243, 'P-0043', '2019-12-22', '128383373439', 'Taswir Vero Rajata M.M.', 46, 'Ki. Bak Air No. 509, Pontianak 82596, DIY', 'Perempuan', 'pemilih43', '679fe423fdc19566407e5eb7e3c0de55'),
(244, 'P-0044', '2019-12-22', '128383373440', 'Jaga Siregar', 20, 'Ki. Supomo No. 235, Sabang 90369, SulSel', 'Perempuan', 'pemilih44', '58f6950066ee6edede151047624a28e1'),
(245, 'P-0045', '2019-12-22', '128383373441', 'Radit Irwan Situmorang S.Sos', 23, 'Jln. Gading No. 619, Administrasi Jakarta Timur 11119, PapBar', 'Laki-Laki', 'pemilih45', '56458a094b18d993de767a266a1aa648'),
(246, 'P-0046', '2019-12-22', '128383373442', 'Yessi Salsabila Yulianti M.Pd', 33, 'Dk. Dr. Junjunan No. 778, Pasuruan 74122, Riau', 'Laki-Laki', 'pemilih46', '3e93a2fd6e1ec8a3df1618c32b0e015b'),
(247, 'P-0047', '2019-12-22', '128383373443', 'Makuta Jarwa Maheswara S.Gz', 46, 'Ki. Labu No. 518, Batam 42465, KalBar', 'Laki-Laki', 'pemilih47', '04e5bae55f75273c7915d2f56133e9b7'),
(248, 'P-0048', '2019-12-22', '128383373444', 'Laila Hartati', 30, 'Jln. Krakatau No. 284, Palangka Raya 51300, JaTeng', 'Perempuan', 'pemilih48', '000967e8119d8dd17e99733e764f014a'),
(249, 'P-0049', '2019-12-22', '128383373445', 'Vera Laila Purnawati', 50, 'Dk. Sugiyopranoto No. 686, Banjar 61992, KalTim', 'Perempuan', 'pemilih49', '1bd3672ee77594303f9f42a61e9f074f'),
(250, 'P-0050', '2019-12-22', '128383373446', 'Samiah Widiastuti S.Gz', 39, 'Kpg. Batako No. 766, Bandung 42170, SulBar', 'Laki-Laki', 'pemilih50', '79ca44731157413c199e74526e7ff7fa'),
(251, 'P-0051', '2019-12-22', '128383373447', 'Elma Palastri', 35, 'Ki. Setia Budi No. 274, Pariaman 32315, Papua', 'Perempuan', 'pemilih51', '80ed3e0b2a7713d1f7f97350e1ad364c'),
(252, 'P-0052', '2019-12-22', '128383373448', 'Tania Kartika Nurdiyanti', 40, 'Jln. Imam No. 300, Sibolga 80765, Bali', 'Perempuan', 'pemilih52', 'ee318c3d8ec84e7202947b4f2307d05b'),
(253, 'P-0053', '2019-12-22', '128383373449', 'Dinda Amalia Susanti', 30, 'Jln. Acordion No. 960, Tegal 76993, Bali', 'Perempuan', 'pemilih53', 'ca01cf4a8a3377854903dd55861fb719'),
(254, 'P-0054', '2019-12-22', '128383373450', 'Rahmi Novitasari', 24, 'Gg. Adisucipto No. 803, Sibolga 40999, Maluku', 'Perempuan', 'pemilih54', '973aeb43be50b427fbb344acdfac76e7'),
(255, 'P-0055', '2019-12-22', '128383373451', 'Galak Sabri Marpaung S.E.', 29, 'Psr. Jaksa No. 327, Sorong 30925, SulTra', 'Perempuan', 'pemilih55', '705f3e40eb17471eaa2806bc12dc95ca'),
(256, 'P-0056', '2019-12-22', '128383373452', 'Hilda Pratiwi M.TI.', 31, 'Psr. Eka No. 233, Lubuklinggau 61448, KalSel', 'Laki-Laki', 'pemilih56', '1ed8b37dc621026ad6949557a8650f8d'),
(257, 'P-0057', '2019-12-22', '128383373453', 'Maras Cawisadi Hidayat', 28, 'Psr. Suryo Pranoto No. 141, Bau-Bau 85696, SumSel', 'Perempuan', 'pemilih57', '84a2749290c6dc04f7c521c0d1792ffc'),
(258, 'P-0058', '2019-12-22', '128383373454', 'Nadia Sudiati', 25, 'Dk. Bayan No. 915, Medan 34913, JaTeng', 'Perempuan', 'pemilih58', 'f3555707a5a3f90016f5d82adee7a223'),
(259, 'P-0059', '2019-12-22', '128383373455', 'Rina Kezia Mardhiyah M.Kom.', 32, 'Ki. Astana Anyar No. 937, Bandar Lampung 73701, BaBel', 'Perempuan', 'pemilih59', 'e231fda3f3707fec76b2cbc8c4d79651'),
(260, 'P-0060', '2019-12-22', '128383373456', 'Surya Luwar Dabukke M.Kom.', 44, 'Ds. Bayan No. 405, Pagar Alam 90497, KalUt', 'Perempuan', 'pemilih60', '6c0939ac6c02b448aaad27b8787de605'),
(261, 'P-0061', '2019-12-22', '128383373457', 'Puput Elma Lailasari', 23, 'Ki. Cihampelas No. 811, Padangsidempuan 31869, SulUt', 'Perempuan', 'pemilih61', 'dd0f54c1fb32a52be40c95ddfe77524b'),
(262, 'P-0062', '2019-12-22', '128383373458', 'Ratna Vera Purwanti', 30, 'Ds. Kali No. 505, Tanjungbalai 99646, Bali', 'Laki-Laki', 'pemilih62', 'eb3eb5ddf0f763b372fd04822b673daf'),
(263, 'P-0063', '2019-12-22', '128383373459', 'Okto Adriansyah', 27, 'Kpg. Gardujati No. 4, Binjai 84035, KepR', 'Laki-Laki', 'pemilih63', 'a20180913f3504b1aa9e645de5bddc03'),
(264, 'P-0064', '2019-12-22', '128383373460', 'Embuh Budiman', 34, 'Gg. Banda No. 199, Semarang 59410, KepR', 'Perempuan', 'pemilih64', '6839eb7279bb0a9001512264a8d42b2f'),
(265, 'P-0065', '2019-12-22', '128383373461', 'Darsirah Saefullah', 44, 'Ds. Pahlawan No. 361, Singkawang 59744, KalSel', 'Laki-Laki', 'pemilih65', 'a598f17740b1a2f98d68360980fd22ec'),
(266, 'P-0066', '2019-12-22', '128383373462', 'Irma Lailasari S.Psi', 43, 'Psr. Villa No. 155, Serang 89658, Bengkulu', 'Laki-Laki', 'pemilih66', '4bb32d1038c1dfbfaf6a848e8dc02ccf'),
(267, 'P-0067', '2019-12-22', '128383373463', 'Dadap Nashiruddin', 26, 'Jr. S. Parman No. 971, Administrasi Jakarta Pusat 56995, SumUt', 'Laki-Laki', 'pemilih67', 'c612ca15d97b9d35d0ebfc67d2188abc'),
(268, 'P-0068', '2019-12-22', '128383373464', 'Betania Fujiati', 26, 'Dk. Bagas Pati No. 987, Kupang 20489, Papua', 'Laki-Laki', 'pemilih68', '5258d54a39283b5a437f7d57924e2fd1'),
(269, 'P-0069', '2019-12-22', '128383373465', 'Karsa Najib Dabukke S.Farm', 18, 'Gg. Bakit  No. 386, Administrasi Jakarta Utara 99056, SumBar', 'Laki-Laki', 'pemilih69', '7c3c8aad7d9099948dda3f27b8a52fa6'),
(270, 'P-0070', '2019-12-22', '128383373466', 'Latika Aryani S.Sos', 19, 'Gg. Pacuan Kuda No. 960, Kendari 82258, Lampung', 'Perempuan', 'pemilih70', '424302eddbf16409e4779ad64d5712f6'),
(271, 'P-0071', '2019-12-22', '128383373467', 'Violet Haryanti S.Farm', 48, 'Jln. Lumban Tobing No. 474, Batu 89703, KalTeng', 'Perempuan', 'pemilih71', '04dc83cd93756e720257935f9fa3411b'),
(272, 'P-0072', '2019-12-22', '128383373468', 'Putri Yulianti', 21, 'Ds. Veteran No. 938, Tasikmalaya 30675, Bali', 'Laki-Laki', 'pemilih72', 'daf6d4f4a425b261e7f8dd07cc929ee9'),
(273, 'P-0073', '2019-12-22', '128383373469', 'Rahmat Utama M.Pd', 49, 'Kpg. Cikapayang No. 50, Padangpanjang 81190, KepR', 'Laki-Laki', 'pemilih73', 'f4064e615b44a022e9b63a8989576a00'),
(274, 'P-0074', '2019-12-22', '128383373470', 'Eko Wasita S.IP', 28, 'Dk. Casablanca No. 99, Sabang 81237, JaTeng', 'Laki-Laki', 'pemilih74', 'b9701d931b071962b6177f47cc36f651'),
(275, 'P-0075', '2019-12-22', '128383373471', 'Ina Puspita', 18, 'Jr. Aceh No. 798, Batam 90264, JaBar', 'Laki-Laki', 'pemilih75', 'db7f3a93750b1236fc8236fc6da63389'),
(276, 'P-0076', '2019-12-22', '128383373472', 'Galiono Aditya Hakim', 18, 'Dk. Achmad No. 42, Langsa 25148, Banten', 'Perempuan', 'pemilih76', '67aa675622b33504bf66e951dd5ea843'),
(277, 'P-0077', '2019-12-22', '128383373473', 'Karta Saputra', 50, 'Jln. Tentara Pelajar No. 923, Cirebon 75622, SulTeng', 'Perempuan', 'pemilih77', '8de611cd38d54de8e2600a535b40859f'),
(278, 'P-0078', '2019-12-22', '128383373474', 'Padmi Halimah S.Pt', 23, 'Jln. Badak No. 850, Bandar Lampung 22387, Lampung', 'Perempuan', 'pemilih78', '917e44364379b02baafdf529f9b12364'),
(279, 'P-0079', '2019-12-22', '128383373475', 'Dadi Rajasa', 49, 'Gg. Yogyakarta No. 250, Lhokseumawe 68629, Gorontalo', 'Laki-Laki', 'pemilih79', '01022960ef3db0e7814f5f177bd7a97c'),
(280, 'P-0080', '2019-12-22', '128383373476', 'Usyi Lailasari', 49, 'Psr. Kartini No. 839, Sibolga 92851, Aceh', 'Laki-Laki', 'pemilih80', 'fc75ad2b1dd4cdaa518daae499f84a02'),
(281, 'P-0081', '2019-12-22', '128383373477', 'Ami Agustina', 37, 'Ki. Baung No. 147, Tomohon 33014, SulTra', 'Laki-Laki', 'pemilih81', '90138a47fb2ad02c129c944e50e1bf98'),
(282, 'P-0082', '2019-12-22', '128383373478', 'Widya Zamira Susanti', 49, 'Ds. R.M. Said No. 968, Parepare 36039, SumBar', 'Laki-Laki', 'pemilih82', '5eb9a45a5940acbec50d9501958dc9b1'),
(283, 'P-0083', '2019-12-22', '128383373479', 'Vanesa Suartini', 47, 'Jr. Bakit  No. 872, Sawahlunto 15580, KalBar', 'Laki-Laki', 'pemilih83', '11b42008ca3dc300433d286c616e4791'),
(284, 'P-0084', '2019-12-22', '128383373480', 'Dartono Halim Ardianto S.Ked', 21, 'Jln. Ters. Jakarta No. 297, Administrasi Jakarta Utara 36336, SulBar', 'Perempuan', 'pemilih84', 'f2ebe4f6f64fb33d6529f28442e7a8bd'),
(285, 'P-0085', '2019-12-22', '128383373481', 'Estiono Teguh Budiyanto', 20, 'Ki. Basmol Raya No. 745, Padang 46501, JaBar', 'Perempuan', 'pemilih85', 'a660dc696a8953ac8d52d81925aa560f'),
(286, 'P-0086', '2019-12-22', '128383373482', 'Zamira Unjani Uyainah', 50, 'Jr. Dipatiukur No. 801, Bandar Lampung 83635, KalSel', 'Laki-Laki', 'pemilih86', '7f01177e0b3297b6875ad71a3e830c49'),
(287, 'P-0087', '2019-12-22', '128383373483', 'Kariman Wasita', 40, 'Dk. Abdul No. 460, Administrasi Jakarta Selatan 67914, KalBar', 'Laki-Laki', 'pemilih87', '5e866907684cba5e0f06507ab0f87413'),
(288, 'P-0088', '2019-12-22', '128383373484', 'Lukita Laksana Firgantoro', 23, 'Ki. Panjaitan No. 907, Dumai 89798, SulTeng', 'Perempuan', 'pemilih88', '852540f4fee6053386807ad2c8f1b5f9'),
(289, 'P-0089', '2019-12-22', '128383373485', 'Emong Widodo', 33, 'Ki. Diponegoro No. 145, Tangerang 97144, BaBel', 'Laki-Laki', 'pemilih89', '5fb66cf6403c8beed7e5432997e1c47e'),
(290, 'P-0090', '2019-12-22', '128383373486', 'Ajimin Budi Wasita S.Pt', 43, 'Dk. Kalimantan No. 607, Medan 22506, KalBar', 'Laki-Laki', 'pemilih90', '516dde52f421609e8f58dc3ab80c201d'),
(291, 'P-0091', '2019-12-22', '128383373487', 'Lukita Saptono', 48, 'Kpg. Soekarno Hatta No. 115, Malang 17206, Lampung', 'Perempuan', 'pemilih91', 'eac3a4e1bcb81382c09d1bd9cad78924'),
(292, 'P-0092', '2019-12-22', '128383373488', 'Gaiman Megantara', 47, 'Kpg. Ronggowarsito No. 30, Mataram 40445, DIY', 'Laki-Laki', 'pemilih92', '7e528a025dfbeaef55705baffef395bd'),
(293, 'P-0093', '2019-12-22', '128383373489', 'Zaenab Maryati', 32, 'Ki. Gardujati No. 86, Padang 69465, Papua', 'Perempuan', 'pemilih93', '24e70b7d0e02c72c1038b8903ab972b4'),
(294, 'P-0094', '2019-12-22', '128383373490', 'Kayla Pudjiastuti', 25, 'Ds. Sugiyopranoto No. 933, Sabang 31269, KalTim', 'Laki-Laki', 'pemilih94', '9f8f063432a8f55f900bbbd1ce32d81a'),
(295, 'P-0095', '2019-12-22', '128383373491', 'Jelita Siska Mayasari', 36, 'Gg. Abdul No. 124, Probolinggo 69244, NTB', 'Perempuan', 'pemilih95', 'fe2af5395bc80067b8b78eba8932d247'),
(296, 'P-0096', '2019-12-22', '128383373492', 'Among Adriansyah', 20, 'Dk. Pelajar Pejuang 45 No. 242, Administrasi Jakarta Pusat 23567, Bengkulu', 'Perempuan', 'pemilih96', '6e6a170e1c708597d567ba3026d66a87'),
(297, 'P-0097', '2019-12-22', '128383373493', 'Ika Uyainah S.Sos', 44, 'Ds. Baan No. 173, Batu 13376, DKI', 'Laki-Laki', 'pemilih97', '53b374b475a6696259b29bcdefab744b'),
(298, 'P-0098', '2019-12-22', '128383373494', 'Silvia Namaga S.Ked', 36, 'Jln. Yoga No. 516, Banjarmasin 11146, Gorontalo', 'Perempuan', 'pemilih98', 'ccba98d86c1fed1058279709ba1e18e2'),
(299, 'P-0099', '2019-12-22', '128383373495', 'Kezia Hariyah', 23, 'Psr. Padang No. 862, Madiun 74118, SumUt', 'Perempuan', 'pemilih99', 'c29ae06a05871446e52be755e3f8d9c7'),
(300, 'P-00100', '2019-12-22', '128383373496', 'Indah Rahmi Andriani S.Pt', 24, 'Ki. Basoka No. 931, Metro 26610, KalTim', 'Laki-Laki', 'pemilih100', '9d914233876cda7068237a3f1dfc3ff5'),
(301, 'P-00101', '2019-12-22', '128383373497', 'Panji Sinaga', 47, 'Gg. Wahidin Sudirohusodo No. 163, Pangkal Pinang 47080, SumSel', 'Perempuan', 'pemilih101', 'd1f06fffbb5c2130ddc6e59f25d8a652'),
(302, 'P-00102', '2019-12-22', '128383373498', 'Bagus Rama Haryanto', 23, 'Gg. Jamika No. 644, Banjarmasin 50624, KalTim', 'Laki-Laki', 'pemilih102', 'b6015795910f84565d646633a5e1af75'),
(303, 'P-00103', '2019-12-22', '128383373499', 'Lili Ilsa Nuraini S.Ked', 20, 'Dk. Bakaru No. 901, Mataram 38992, KepR', 'Perempuan', 'pemilih103', 'fe554eb1c2cd055e749ccb8c9d3ee0fa'),
(305, 'P-00104', '2019-12-22', '928347293829384', 'Jakaria Jack', 34, 'jl. merpati no.80', 'Laki-Laki', 'pemilih104', 'd328158ca489661e9a10d863e6f2a33e');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(255) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_level` varchar(255) NOT NULL,
  `user_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_level`, `user_foto`) VALUES
(1, 'Sandy Prakoso', 'admin', '0192023a7bbd73250516f069df18b500', 'administrator', ''),
(2, 'Muhammad Irsyad', 'panitia', 'd32b1673837a6a45f795c13ea67ec79e', 'panitia', '1304270755_admin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

CREATE TABLE `voting` (
  `voting_id` int(11) NOT NULL,
  `voting_waktu` datetime NOT NULL,
  `voting_pemilih` int(11) NOT NULL,
  `voting_kandidat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `voting`
--

INSERT INTO `voting` (`voting_id`, `voting_waktu`, `voting_pemilih`, `voting_kandidat`) VALUES
(2, '2019-12-15 09:45:20', 1, 3),
(3, '2019-12-15 09:59:45', 4, 2),
(4, '2019-12-21 13:39:42', 6, 2),
(5, '2019-12-22 10:39:42', 205, 3),
(6, '2019-12-22 10:39:42', 206, 2),
(7, '2019-12-22 10:39:42', 207, 2),
(8, '2019-12-22 10:39:42', 208, 3),
(9, '2019-12-22 10:39:42', 209, 3),
(10, '2019-12-22 10:39:42', 210, 3),
(11, '2019-12-22 10:39:42', 211, 2),
(12, '2019-12-22 10:39:42', 212, 3),
(13, '2019-12-22 10:39:42', 213, 3),
(14, '2019-12-22 10:39:42', 214, 2),
(15, '2019-12-22 10:39:42', 215, 3),
(16, '2019-12-22 10:39:42', 216, 3),
(17, '2019-12-22 10:39:42', 217, 3),
(18, '2019-12-22 10:39:42', 218, 3),
(19, '2019-12-22 10:39:42', 219, 3),
(20, '2019-12-22 10:39:42', 220, 2),
(21, '2019-12-22 10:39:42', 221, 2),
(22, '2019-12-22 10:39:42', 222, 2),
(23, '2019-12-22 10:39:42', 223, 3),
(24, '2019-12-22 10:39:42', 224, 2),
(25, '2019-12-22 10:39:42', 225, 2),
(26, '2019-12-22 10:39:42', 226, 3),
(27, '2019-12-22 10:39:42', 227, 2),
(28, '2019-12-22 10:39:42', 228, 3),
(29, '2019-12-22 10:39:42', 229, 2),
(30, '2019-12-22 10:39:42', 230, 3),
(31, '2019-12-22 10:39:42', 231, 2),
(32, '2019-12-22 10:39:42', 232, 2),
(33, '2019-12-22 10:39:42', 233, 3),
(34, '2019-12-22 10:39:42', 234, 2),
(35, '2019-12-22 10:39:42', 235, 2),
(36, '2019-12-22 10:39:42', 236, 2),
(37, '2019-12-22 10:39:42', 237, 2),
(38, '2019-12-22 10:39:42', 238, 3),
(39, '2019-12-22 10:39:42', 239, 2),
(40, '2019-12-22 10:39:42', 240, 2),
(41, '2019-12-22 10:39:42', 241, 2),
(42, '2019-12-22 10:39:42', 242, 3),
(43, '2019-12-22 10:39:42', 243, 2),
(44, '2019-12-22 10:39:42', 244, 2),
(45, '2019-12-22 10:39:42', 245, 2),
(46, '2019-12-22 10:39:42', 246, 3),
(47, '2019-12-22 10:39:42', 247, 3),
(48, '2019-12-22 10:39:42', 248, 3),
(49, '2019-12-22 10:39:42', 249, 2),
(50, '2019-12-22 10:39:42', 250, 3),
(51, '2019-12-22 10:39:42', 251, 3),
(52, '2019-12-22 10:39:42', 252, 3),
(53, '2019-12-22 10:39:42', 253, 2),
(54, '2019-12-22 10:39:42', 254, 2),
(55, '2019-12-22 10:39:42', 255, 3),
(56, '2019-12-22 10:39:42', 256, 3),
(57, '2019-12-22 10:39:42', 257, 2),
(58, '2019-12-22 10:39:42', 258, 2),
(59, '2019-12-22 10:39:42', 259, 2),
(60, '2019-12-22 10:39:42', 260, 2),
(61, '2019-12-22 10:39:42', 261, 3),
(62, '2019-12-22 10:39:42', 262, 2),
(63, '2019-12-22 10:39:42', 263, 2),
(64, '2019-12-22 10:39:42', 264, 3),
(65, '2019-12-22 10:39:42', 265, 3),
(66, '2019-12-22 10:39:42', 266, 3),
(67, '2019-12-22 10:39:42', 267, 3),
(68, '2019-12-22 10:39:42', 268, 3),
(69, '2019-12-22 10:39:42', 269, 3),
(70, '2019-12-22 10:39:42', 270, 3),
(71, '2019-12-22 10:39:42', 271, 3),
(72, '2019-12-22 10:39:42', 272, 3),
(73, '2019-12-22 10:39:42', 273, 3),
(74, '2019-12-22 10:39:42', 274, 3),
(75, '2019-12-22 10:39:42', 275, 3),
(76, '2019-12-22 10:39:42', 276, 3),
(77, '2019-12-22 10:39:42', 277, 3),
(78, '2019-12-22 10:39:42', 278, 3),
(79, '2019-12-22 10:39:42', 279, 2),
(80, '2019-12-22 10:39:42', 280, 2),
(81, '2019-12-22 10:39:42', 281, 3),
(82, '2019-12-22 10:39:42', 282, 3),
(83, '2019-12-22 10:39:42', 283, 2),
(84, '2019-12-22 06:06:06', 303, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`kandidat_id`);

--
-- Indexes for table `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`pemilih_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `voting`
--
ALTER TABLE `voting`
  ADD PRIMARY KEY (`voting_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `kandidat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pemilih`
--
ALTER TABLE `pemilih`
  MODIFY `pemilih_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `voting`
--
ALTER TABLE `voting`
  MODIFY `voting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
