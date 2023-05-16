-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 03:45 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipsalu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akreditasi`
--

CREATE TABLE `tbl_akreditasi` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alumni`
--

CREATE TABLE `tbl_alumni` (
  `id` int(11) NOT NULL,
  `nama_alumni` varchar(100) DEFAULT NULL,
  `id_jurusan` int(11) DEFAULT NULL,
  `angkatan` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `isi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_alumni`
--

INSERT INTO `tbl_alumni` (`id`, `nama_alumni`, `id_jurusan`, `angkatan`, `foto`, `isi`) VALUES
(1, 'Andi Nataniel Depo ', 16, '2012', 'andi-nataniel-depo-.jpg', '<p>&ldquo;Thank you Stelk for such a great and memorable studying experience&rdquo;</p>'),
(3, 'ISMANDIADY', 8, '2011', 'ismandiady.jpg', '<p>Di SMK telkom kita belajar lebih banyak dr siswa biasa, waktu lebih panjang dr siswa biasa, presure lebih berat dr siswa biasa. Sehingga mencetak kita menjadi sesuatu yg luar biasa. Sehingga membentuk mental dan kepribadian Positif hingga saya bisa berada di titik ini.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `tanggal` date DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id`, `judul`, `isi`, `tanggal`, `foto`, `id_kategori`) VALUES
(16, 'ANBK', '', '2023-05-14', '20230514-anbk.jpg', 2),
(17, 'Etgen17', '', '2023-05-14', '20230514-etgen17.jpg', 2),
(18, 'Graduation', '', '2023-05-14', '20230514-graduation.jpg', 2),
(19, 'Pelatihan Sumpah Pemuda', '', '2023-05-14', '20230514-pelatihan-sumpah-pemuda.jpg', 2),
(20, 'Pelantikan dan Sumpah Jabatan', '<p>Selamat dan Sukses atas pelantikan dan sumpah jabatan sebagai kepala Upt Smkn 6 Luwu Utara Bpk Masling ,SP guru produktif agribisnis tanaman perkebunan Smkn 1 Luwu Utara</p>', '2023-01-31', '20230514-pelantikan-dan-sumpah-jabatan.jpg', 1),
(21, 'Latih tanding UNDIPA Goes to School 2022', '<p>Allhamdulillah dapat 2 .<br />Juara 1 .Lomba Fotografer&nbsp;<a href=\"https://www.instagram.com/fdlanmaulana_/\">@fdlanmaulana_</a><br />Juara 2. Lomba kreatif Poster&nbsp;<a href=\"https://www.instagram.com/suciindhri_17/\">@suciindhri_17</a><br /><a href=\"https://www.instagram.com/undipamks/\">@undipamks</a><br /><a href=\"https://www.instagram.com/osismpkoskasa_lutra/\">@osismpkoskasa_lutra</a><br /><a href=\"https://www.instagram.com/explore/tags/smkn1lutra/\">#smkn1lutra</a><br /><a href=\"https://www.instagram.com/explore/tags/smkn1lutrastory/\">#smkn1lutrastory</a><br /><a href=\"https://www.instagram.com/explore/tags/smkn1luwuutara/\">#smkn1luwuutara</a><br /><a href=\"https://www.instagram.com/explore/tags/luwuutara/\">#luwuutara</a><br /><a href=\"https://www.instagram.com/usa_12tkj/\">@usa_12tkj</a></p>', '2022-12-23', '20230514-latih-tanding-undipa-goes-to-school-2022.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bukutamu`
--

CREATE TABLE `tbl_bukutamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(80) DEFAULT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(90) DEFAULT NULL,
  `subjek` varchar(80) NOT NULL,
  `isi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bukutamu`
--

INSERT INTO `tbl_bukutamu` (`id`, `nama`, `telepon`, `email`, `subjek`, `isi`) VALUES
(3, 'Fakhrul Fanani Nugroho', '', 'fakhrulnugroho@gmail.com', '', 'Websitenya sangat bagus dan menarik!'),
(4, 'saa', '', 'arfan@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fasilitas`
--

CREATE TABLE `tbl_fasilitas` (
  `id` int(11) NOT NULL,
  `nama_fasilitas` varchar(100) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fasilitas`
--

INSERT INTO `tbl_fasilitas` (`id`, `nama_fasilitas`, `keterangan`) VALUES
(1, 'arfan.jpg', 'arfan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `id` int(11) NOT NULL,
  `nama_jurusan` varchar(255) DEFAULT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id`, `nama_jurusan`, `isi`) VALUES
(8, 'Teknik Komputer dan Jaringan', '<p>TKJ Adalah singkatan dari Teknik Komputer Jaringan. TKJ merupakan sebuah kejuruan yang mempelajari tentang cara merakit komputer, mengenal dan mempelajari komponen hardware apa saja yang ada di dalam komputer, merakit komputer serta fokus mempelajari jaringan dasar. Tidak hanya itu selama tiga tahun belajar di TKJ anda akan belajar sistem kerja jaringan dan pemograman web serta meng-administrasi komputer jaringan. Kejuruan TKJ hanya ada di STM/SMK, sampai saat ini jurusan TKJ merupakan jurusan yang sangat populer dan banyak diminati.</p>'),
(11, 'Teknik Bisnis Sepeda Motor', ''),
(12, 'Agribisnis Tanaman Perkebunan', ''),
(13, 'Teknik Kendaraan Ringan', ''),
(15, 'Agribisnis Tanaman Pangan dan Holtikultura', ''),
(16, 'Agribisnis Pengolahan Hasil Pertanian (APHP)', ''),
(17, 'Agribisnis Ternak Unggas', ''),
(18, 'Desain Permodelan dan Informasi Bangunan', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_artikel`
--

CREATE TABLE `tbl_kategori_artikel` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori_artikel`
--

INSERT INTO `tbl_kategori_artikel` (`id`, `nama_kategori`) VALUES
(1, 'Berita Terbaru'),
(2, 'Galeri Sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id`, `nama`, `username`, `password`, `level`) VALUES
(4, 'arfan bandi', 'aa', '$2y$10$LWtHAdbjsMDC99rAcNaSrOAXmuGcWZzTcu9ZEHGecE9Ts9kKkv2ua', 1),
(5, 'Alief', 'alief123', '$2y$10$6cxsBWXR2FgxwwYlZ.8b9erOZGF0PF3/VoUsTaqf3aJc0po7F/7fe', 2),
(8, 'admin', 'admin', '$2y$10$/49tQ9GJS.dlVqp/qYq81eofWfB.MU2rWQLaWv0BufM.EUB8jrzXG', 1),
(14, 'admin', 'admin4', '$2y$10$XfmpkvsWX90IK/nxh29IO.GrD1Z72dGRQOi3B5SbQl0vNFM8Dx.xG', 1),
(18, 'dilah', 'dilah', '$2y$10$RF94F8ZOgBXZQM8HLOdg6Odx1QoS5eDlkjmClWRXa.dH4AMOXl6se', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `id` int(11) NOT NULL,
  `nama_siswa` varchar(80) DEFAULT NULL,
  `kelas` varchar(10) NOT NULL,
  `nama_orang_tua` varchar(80) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(90) DEFAULT NULL,
  `tujuan` varchar(80) NOT NULL,
  `saran` varchar(255) DEFAULT NULL,
  `solusi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`id`, `nama_siswa`, `kelas`, `nama_orang_tua`, `telepon`, `email`, `tujuan`, `saran`, `solusi`) VALUES
(3, 'Fakhrul Fanani Nugroho', '', '', '', 'fakhrulnugroho@gmail.com', '', 'Websitenya sangat bagus dan menarik!', ''),
(4, 'saa', '', '', '', 'arfan@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prestasi`
--

CREATE TABLE `tbl_prestasi` (
  `id` int(11) NOT NULL,
  `nama_prestasi` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sejarah_singkat`
--

CREATE TABLE `tbl_sejarah_singkat` (
  `id` int(11) NOT NULL,
  `sejarah_singkat` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sejarah_singkat`
--

INSERT INTO `tbl_sejarah_singkat` (`id`, `sejarah_singkat`) VALUES
(1, '<p>SMK Negeri 1 Luwu Utara sebelumnya dikenal dengan nama SMK Negeri 1 Bone-Bone. Salah satu Sekolah Menengah Kejuruan Negeri di Kabupaten Luwu Utara, Sulawesi Selatan. Diresmikan pada bulan April 2006, oleh H. M. Luthfi A. Mutty, bupati Kabupaten Luwu Utara pada saat itu.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_struktur_organisasi`
--

CREATE TABLE `tbl_struktur_organisasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_struktur_organisasi`
--

INSERT INTO `tbl_struktur_organisasi` (`id`, `judul`, `foto`) VALUES
(1, 'Struktur Organisasi', '20230516-struktur-organisasi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visi_misi`
--

CREATE TABLE `tbl_visi_misi` (
  `id` int(11) NOT NULL,
  `visi` text,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_visi_misi`
--

INSERT INTO `tbl_visi_misi` (`id`, `visi`, `misi`) VALUES
(1, '<p>Mewujudkan SMK berkarakter, berkompeten dan unggul</p>', '<ol><li>Menanamkan keimanan, ketaqwaan dan akhlak mulia.</li><li>Menyelenggarakan pendidikan yang memadukan aspek agama, iptek dan budaya</li><li>Menumbuhkan budaya literasi dan kecakapan hidup</li><li>Menciptakan sumber daya yang kompeten, mandiri dan mampu beradaptasi</li><li>Mewujudkan lingkungan yang bersih, indah dan nyaman</li></ol>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_akreditasi`
--
ALTER TABLE `tbl_akreditasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_bukutamu`
--
ALTER TABLE `tbl_bukutamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kategori_artikel`
--
ALTER TABLE `tbl_kategori_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sejarah_singkat`
--
ALTER TABLE `tbl_sejarah_singkat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_struktur_organisasi`
--
ALTER TABLE `tbl_struktur_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_visi_misi`
--
ALTER TABLE `tbl_visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_akreditasi`
--
ALTER TABLE `tbl_akreditasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_bukutamu`
--
ALTER TABLE `tbl_bukutamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_kategori_artikel`
--
ALTER TABLE `tbl_kategori_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_sejarah_singkat`
--
ALTER TABLE `tbl_sejarah_singkat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_struktur_organisasi`
--
ALTER TABLE `tbl_struktur_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_visi_misi`
--
ALTER TABLE `tbl_visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  ADD CONSTRAINT `tbl_alumni_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `tbl_jurusan` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
