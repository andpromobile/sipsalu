-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 05:30 AM
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
(12, 'Upacara Hari Pahlawan Tahun 2018', '<p>Marilah kita panjatkan puji dan syukur kehadirat Allah SWT-Tuhan Yang Maha Esa, karena atas limpahan rahmat dan karunia-Nya, bangsa Indonesia pada hari ini memperingati Hari Pahlawan Tahun 2018.</p><p>Setiap tahun pada tanggal 10 Nopember, bangsa Indonesia memperingati Hari Pahlawan untuk mengenang peristiwa pertempuran di Surabaya pada 73 tahun silam yang merupakan perang fisik pertama setelah bangsa Indonesia menyatakan kemerdekaannya.</p><p>Di bulan Nopember ingatan kolektif bangsa akan tertuju pada keberanian, semangat pantang menyerah serta pengorbanan tanpa pamrih para pahlawan yang telah gugur mendahului kita. Para syuhada bangsa tersebut telah mewariskan Negara Kesatuan Republik Indonesia yang berdiri kokoh sampai saat ini dan untuk selamanya.</p><p>&nbsp;</p><p><strong>Saudara sebangsa dan setanah air</strong></p><p>Prosesi peringatan Hari Pahlawan khususnya Upacara Pengibaran Bendera Merah Putih serta mengheningkan Cipta Secara Serantak Selama 60 Detik seperti yang saat ini kita lakukan, juga dilaksanakan di seluruh pelosok tanah air, bahkan di Perwakilan Negara Republik Indonesia di luar negeri. Seluruh rangkaian kegiatan peringatan Hari Pahlawan tersebut bertujuan untuk memperkuat nilai-nilai kepahlawanan, mempertebal rasa cinta tanah air dan meneguhkan semangat pengabdian bagi bangsa dan Negara di hati sanubari bangsa Indonesia.</p><p>Peringatan Hari Pahlawan bukan semata sebuah acara namun harus sarat makna, bukan hanya sebagai prosesi namun substansi setiap peringatan Hari Pahlawan harus dapat menggali dan memunculkan semangat baru dalam implementasi nilai-nilai kepahlawanan dalam kehidupan sehari-hari. Hal ini penting karena nilai kepahlawanan bukan bersifat statis namun dinamis, bisa menguat bahkan dapat melemah. Untuk itu, kiranya seluruh rangkaian kegiatan peringatan Hari Pahlawan harus menjadi energi dan semangat baru mewarisi nilai kejuangan dan patriotisme dalam membangun bangsa Indonesia.</p><p>&nbsp;</p><p><strong>Hadirin Sekalian</strong></p><p>Peringatan Hari Pahlawan, menjadi momentum bagi bangsa Indonesia untuk melakukan introspeksi diri. Sampai seberapa jauh setiap komponen bangsa dapat mewarisi nilai-nilai kepahlawanan, melanjutkan perjuangan, mengisi kemerdekaan demi mencapai Negara Kesatuan Republik Indonesia yang sejahtera, adil dan makmur.</p><p>Pada hakekatnya setiap perjuangan pasti ada hasilnya namun tidak ada kata akhir/berhenti untuk berjuang. Setiap etape perjuangan berlanjut pada etape perjuangan berikutnya sesuai tuntutan lingkungan strategis. Oleh karenanya peringatan Hari Pahlawan harus melahirkan ide dan gagasan mentransformasikan semangat pahlawan menjadi keuletan dalam melaksanakan pembangunan. Mentransformasikan keberanian melawan penjajah menjadi inspirasi mengusir musuh bersama bangsa saat ini antara lain kemiskinan. Selanjutnya transformasi kecerdikan para pahlawan dalam mengatur strategi, menjadikan inspirasi rakyat Indonesia untuk melakukan inovasi cerdas memperkuat daya saing bangsa dalam pergaulan dunia.</p><p>&nbsp;</p><p><strong>Hadirin yang berbahagia</strong></p><p>Setiap zaman pasti ada pahlawannya dan setiap pahlawan pasti berkiprah di eranya. Terkait dengan hal tersebut, bangsa Indonesia memerlukan pahlawan baru. Indonesia saat ini membutuhkan sosok yang berdedikasi dan berprestasi pada bidangnya untuk memajukan negeri.</p><p>Terlebih lagi dibutuhkan sosok pemuda Indonesia sebagai generasi penerus yang mempunyai jiwa patriotisme, pantang menyerah, berdisiplin, berkarakter menguasai ilmu pegetahuan dan keterampilandi bidangnya. Sadar bahwa negerinya memiliki beragam agama, suku, adat istiadat namun mampu memanfaatkan keberagaman sebagai modal sosial dipergunakan untuk keunggulan Indonesia dalam pergaulan dunia. Bukan justru untuk memanfaatkan perbedaan demi kepentingan pribadi maupun golongan yang menjadi penghambat bagi kemajuan Indonesia.</p><p>Negeri ini membutuhkan pemuda yang kokoh dengan jati dirinya, mempunyai karakter lokal yang luhur, percaya diri dan peka terhadap permasalahan sosial sehingga mampu terlibat dalam usaha-usaha kesejahteraan sosial, memberikan pelayanan sosial bagi mereka yang membutuhkan pertolongan sosial.</p><p>Negeri ini juga membutuhkan pemuda yang mempunyai pandangan global, mampu berkolaborasi untuk kemajuan bangsa dan mampu memanfaatkan kemajuan teknologi untuk menjadikan Indonesia diperhitungkan dalam bersaing dan bersanding dengan Negara lain khususnya ketika negeri ini memasuki era revolusi industri 4.0.</p><p>Pada akhirnya melalui momentum Peringatan Hari Pahlawan, saya mengajak marilah kita berbuat yang terbaik bagi bangsa ini. Mari berkontribusi bagi kemajuan bangsa. Mulai dari yang dapat kita lakukan, mulai dari lingkungan terdekat yang pada akhirnya memberikan kekuatan dan ketahanan bagi bangsa dan Negara.</p>', '2020-01-10', '20200110-upacara-hari-pahlawan-tahun-2018.jpg', 1),
(15, 'Upacara Hari Pahlawan Tahun 2019', '<p>Wanareja &ndash; SMK Negeri 1 Wanareja pada hari Minggu, 10 November 2019 walaupun bertepatan dengan hari libur tetap melaksanakan Upacara Memperingati Hari Pahlawan tahun ini. Upacara hari ini diikuti oleh semua Guru, Karyawan &amp; Siswa dengan penuh hikmad. Sebagai pembina upacara beliau Bapak Dayatudin, SP menyampaikan amanat dari Menteri Sosial Republik indonesia Juliani P Batubara.</p><p>Berikut amanat yang disampaikan pada Upacara Hari Pahlawan tahun ini :</p><p>Assalamu&rsquo;alaikum WR.Wb.<br />salam sejahtera bagi kita semua<br />Om Swasti Astu<br />Nano Buddhaya<br />Salam Kebajikan</p><p>Bapak/Ibu, sebangsa dan setanah air</p><p>Puji syukur marilah kita panjatkan kehadirat Allah SWT, Tuhan Yang Maha Kuasa, atas limpahan rahmat dan karuniaNya, pada hari ini di seluruh pelosok tanah air dan Perwakilan RI di seluruh Negeri, kita dapat melaksanakan Upacara Bendera dan mengheningkan Cipta serentak selama 60 detik untuk memperingati Hari Pahlawan 10 November 2019 dengan khidmat.</p><p>Setiap Hari Pahlawan, kita diingatkan kembali kepada peristiwa pertempuran 10 November 1945 di Surbaya sebagai salah satu momen paling bersejarah dalam merebut kemerdekaan Indonesia.</p><p>Pada pertempuran tersebut rakyat bersatu padu, berjuang, pantang menyerah melawan penjajah yang ingin menancapkan kembali kekuasaannya di Indonesia.</p><p>Peristiwa Perang mengingatkan kita bahwa kemerdekaan yang kita rasakan saat ini tidaklah datang begitu saja, namun memerlukan perjuangan dan pengorbanan yang luar biasa dari para pendahulu negeri. semangat yang ditunjukkan para pahlawan dan pejuang tersebut hendaknya perlu terus ditumbuhkembangkan di dalam hati sanubari segenap insan Warga Negara Indonesia.</p><p>Dengan Peringatan Hari Pahlwan diharapkan kita akan lebih menghargai jasa dan pengorbanan para pahlawan, sebagaimana ungkapan salah seorang The Founding Fathers kita Bung Karno yang menyatakan bahwa &ldquo;&hellip;.hanya bangsa yang menghargai jasa para pahlawannya dapat menajdi bangsa yang besar&hellip;&rdquo;. Selain itu peringatan Hari Pahlawan kita bangkitkan semangat berinovasi bagi anak &ndash; anak bangsa untuk menjadi pahlawan masa kini, sebagaimana tema peringatan hari pahlawan masa kini.</p><p>Menjadi Pahlawan Masa Kini dapat diakukan oleh siapapun warga negara Indonesia, dalam bentuk aksi &ndash; aksi nyata memperkuat keutuhan NKRI, seperti tolong menolong sesama yang terkena musibah, tidak melakukan provokasi yang dapat menggangu ketertiban umum, tidak menyebarkan berita hoax, tidak melakukan perbuatan anarkis atau merugukan orang lain dan sebagainnya.</p><p>Jika dahulu semangat kepahlawanan ditunjukkan melalui pengorbanan tenaga, harta bahakan nyawa. sekarang, untuk menajdi pahlawa, bukan hanya mereka yang berjuang mengangkat senjata mengusir penjajah, tetapi kita juga bisa, dengan cara menorehkan prestasi di berbagai bidang kehidupan, memberikan kemaslahatan bagi masyarakt, membawa harum nama bangsa di mata Internasional.</p><p>Peringatan Hari Pahlawan kiranya dapat meningkatkan kesadaran kita untuk lebih mencintai tanah air dan menjaganya sampai akhir hayat.</p><p>Jangan biarkan keutuhan NKRI yang telah dibangun para pendahulu negeri dengan tetesan darah dan air mata menjadi sia-sia. jangan biarkan tangan-tangan jahil atau pihak yang tidak bertanggungjawab merusak persatuan dan kesatuan bangsa. jangan biarkan negeri kita terkoyak, tercerai berai, terprovokasi untuk saling menghasut dan berkonflik satu sama lain.</p><p>Mari kita maknai hari pahlawan hari pahlawan ini dengan wujud nyata, bekerja dan bekerja membangun negeri menuju Indonesia maju.</p><p>Saudara sebangsa dan setanah air, hari pahlawan kiranya bukan hanya bersifat seremonial semata tetapi dapat diisi dengan berbagai akifitas yang dapat menyuburkan rasa nasionalisme dan meningkatkan rasa kepedulian untuk menolon sesama yang membutuhkan.</p><p>Dengan menjadikan diri kita sebagai Pahlawan masa kini, maka permasalahan yang melanda bangsa dewasa ini dapat teratasi. untuk itu marilah kita terus menerus berupaya memupuk nilai kepahlawanan agar tumbuh subur dalam hati sanubari segenap insan masyarakat Indonesia.</p><p>Selamat Hari Pahlawan 2019, semoga Allah SWT, Tuhan Yang Maha Kuasa senantiasa memberikan bimbingan dan kekuatan kepada bangsa Indonesia agar dapat menjaga keutuhan NKRI yang telah diperjuangkan oleh para pendahulu negeri. sekali lagi jadilah pahlawan masa kini yang membanggalkan negeri.</p><p>Sekian, Terima Kasih<br />Wassalamu&rsquo;alaikum Wr.Wb.</p>', '2020-01-10', '20200110-upacara-hari-pahlawan-tahun-2019.jpg', 2);

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
-- Table structure for table `tbl_struktur_organisasi`
--

CREATE TABLE `tbl_struktur_organisasi` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visi_misi`
--

CREATE TABLE `tbl_visi_misi` (
  `id` int(11) NOT NULL,
  `visi_misi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_visi_misi`
--

INSERT INTO `tbl_visi_misi` (`id`, `visi_misi`) VALUES
(1, '<p><strong>Visi SMK Negeri 1 Wanareja</strong></p><p>Mewujudkan SMK berkarakter, berkompeten dan unggul</p><p><strong>Misi SMK Negeri 1 Wanareja</strong></p><ol><li>Menanamkan keimanan, ketaqwaan dan akhlak mulia.</li><li>Menyelenggarakan pendidikan yang memadukan aspek agama, iptek dan budaya</li><li>Menumbuhkan budaya literasi dan kecakapan hidup</li><li>Menciptakan sumber daya yang kompeten, mandiri dan mampu beradaptasi</li><li>Mewujudkan lingkungan yang bersih, indah dan nyaman</li></ol><p><strong>Tujuan SMK Negeri 1 Wanareja</strong></p><p>Tujuan penyelenggaraan pendidikan di SMK Negeri 1 Wanareja adalah</p><ol><li>Sekolah menghasilkan lulusan yang beriman, bertaqwa, berakhak mulia dengan kompetensi yang bersaing di era global.</li><li>Sekolah menghasilkan dan menerapkan kurikulum sekolah yang mampu mencapai Standar Kompetensi Lulusan (SKL) Pendidikan Menengah Kejuruan (PMK).</li><li>Sekolah meraih nilai &rdquo;A&rdquo; pada akreditasi nasional dengan mengimplementasikan Penjamin Mutu Pendidikan (PMP).</li><li>Sekolah melaksanakan proses pembelajaran yang inovatif, kreatif, komunikatif, kolaboratif dan berbasis IT dengan menerapkan pembelajaran bilingual pada mata pelajaran peminatan.</li><li>Sekolah menyediakan sarana dan prasarana pendidikan yang relevan dan memenuhi standar sarana dan prasarana pendidikan menengah kejuruan.</li><li>Sekolah melaksanakan kegiatan pengembangan diri dalam rangka membentuk karakter peserta didik.</li><li>Sekolah menerapkan budaya etos kerja pendidik dan tenaga kependidikan yang tangguh, disiplin dan profesional.</li><li>Sekolah meraih prestasi bidang akademik dan nonakademik pada tingkat nasional dan internasional.</li><li>Sekolah mengembangkan budaya literasi, budaya bersih dan budaya sopan santun.</li><li>Sekolah mewujudkan lingkungan sekolah yang bersih, indah dan nyaman sesuai dengan konsep sekolah adiwiyata.</li></ol>');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
-- AUTO_INCREMENT for table `tbl_struktur_organisasi`
--
ALTER TABLE `tbl_struktur_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
