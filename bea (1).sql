-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 05, 2022 at 08:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bea`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_comment`
--

CREATE TABLE `table_comment` (
  `comment_id` int(10) NOT NULL,
  `comment_status` int(10) NOT NULL,
  `comment_nama` varchar(100) NOT NULL,
  `comment_email` varchar(100) NOT NULL,
  `comment_isi` text NOT NULL,
  `comment_content_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_comment`
--

INSERT INTO `table_comment` (`comment_id`, `comment_status`, `comment_nama`, `comment_email`, `comment_isi`, `comment_content_id`) VALUES
(52, 0, 'Harliman', 'rianto@gmail.com', 'yang saya kasih waran tolong di koreksi', 5),
(53, 52, 'Hendri Aji Pangestu', 'ajipangestu@gmial.com', 'siap bapak', 5),
(54, 0, 'Harliman', 'rianto@gmail.com', 'itu perbaiki yang saya kasih tanda', 7),
(55, 54, 'Danny', 'scdbipdn@gmail.com', 'ok siap bapak', 7),
(56, 0, 'Harliman', 'rianto@gmail.com', 'Perbaiki yang saya kasih warna merah', 8),
(57, 56, 'Harliman Krida Laksana', 'harliman@gmail.com', 'Siap bapak', 8);

-- --------------------------------------------------------

--
-- Table structure for table `table_content`
--

CREATE TABLE `table_content` (
  `content_id` int(11) NOT NULL,
  `content_title` varchar(100) NOT NULL,
  `content_body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biaya_denda`
--

CREATE TABLE `tbl_biaya_denda` (
  `id_biaya_denda` int(11) NOT NULL,
  `harga_denda` varchar(255) NOT NULL,
  `stat` varchar(255) NOT NULL,
  `tgl_tetap` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_biaya_denda`
--

INSERT INTO `tbl_biaya_denda` (`id_biaya_denda`, `harga_denda`, `stat`, `tgl_tetap`) VALUES
(1, '4000', 'Aktif', '2019-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id_buku` int(11) NOT NULL,
  `buku_id` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_rak` int(11) NOT NULL,
  `sampul` varchar(255) DEFAULT NULL,
  `isbn` varchar(255) DEFAULT NULL,
  `lampiran` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `penerbit` varchar(255) DEFAULT NULL,
  `pengarang` varchar(255) DEFAULT NULL,
  `thn_buku` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `jml` int(11) DEFAULT NULL,
  `tgl_masuk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `buku_id`, `id_kategori`, `id_rak`, `sampul`, `isbn`, `lampiran`, `title`, `penerbit`, `pengarang`, `thn_buku`, `isi`, `jml`, `tgl_masuk`) VALUES
(8, 'BK008', 2, 1, '0', '132-123-234-231', '0', 'CARA MUDAH BELAJAR PEMROGRAMAN C++', 'INFORMATIKA BANDUNG', 'BUDI RAHARJO ', '2012', '<table class=\"table table-bordered\" style=\"background-color: rgb(255, 255, 255); width: 653px; color: rgb(51, 51, 51);\"><tbody><tr><td style=\"padding: 8px; line-height: 1.42857; border-color: rgb(244, 244, 244);\">Tipe Buku</td><td style=\"padding: 8px; line-height: 1.42857; border-color: rgb(244, 244, 244);\">Kertas</td></tr><tr><td style=\"padding: 8px; line-height: 1.42857; border-color: rgb(244, 244, 244);\">Bahasa</td><td style=\"padding: 8px; line-height: 1.42857; border-color: rgb(244, 244, 244);\">Indonesia</td></tr></tbody></table>', 23, '2019-11-23 11:49:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_denda`
--

CREATE TABLE `tbl_denda` (
  `id_denda` int(11) NOT NULL,
  `pinjam_id` varchar(255) NOT NULL,
  `denda` varchar(255) NOT NULL,
  `lama_waktu` int(11) NOT NULL,
  `tgl_denda` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_denda`
--

INSERT INTO `tbl_denda` (`id_denda`, `pinjam_id`, `denda`, `lama_waktu`, `tgl_denda`) VALUES
(3, 'PJ001', '0', 0, '2020-05-20'),
(5, 'PJ009', '0', 0, '2020-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_essay`
--

CREATE TABLE `tbl_essay` (
  `id_essay` int(10) NOT NULL,
  `id_praja` int(10) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_essay`
--

INSERT INTO `tbl_essay` (`id_essay`, `id_praja`, `judul`, `isi`) VALUES
(1, 1, 'Test 123', '<h1>Ini essay pertama saya</h1>\r\n'),
(3, 4, 'test 1', '<p>hendri aji pangestu</p>\r\n'),
(4, 2, 'test', '<p style=\"text-align:center\"><strong>Hendri</strong></p>\r\n\r\n<p><span style=\"color:#e74c3c\"><strong>Hendri Aji Pangestu</strong></span><sup data-footnote-id=\"7paq6\"><a href=\"#footnote-1\" id=\"footnote-marker-1-1\" rel=\"footnote\">[1]</a></sup></p>\r\n\r\n<section class=\"footnotes\">\r\n<header>\r\n<h2>Catatan kaki</h2>\r\n</header>\r\n\r\n<ol>\r\n	<li data-footnote-id=\"7paq6\" id=\"footnote-1\"><sup><a href=\"#footnote-marker-1-1\">^</a> </sup><cite><em><strong>footnote pertama</strong></em></cite></li>\r\n</ol>\r\n</section>\r\n'),
(5, 8, 'Judul Essay', '<p style=\"text-align:center\"><em><strong><span style=\"color:#000000\">ini esssay saya</span></strong></em></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><em><strong><span style=\"color:#000000\"><span style=\"background-color:#2ecc71\">ini salah disni</span></span></strong></em></p>\r\n'),
(6, 9, 'Esay Pertama Saya', '<p style=\"text-align:center\"><s><em><span style=\"color:#e67e22\"><u><strong>Ini adalah essay pertama saya</strong></u></span></em></s></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:#e74c3c\"><strong><em><u>Ini ada koreksi tolong di benarkan</u></em></strong></span></p>\r\n'),
(7, 10, 'Essay 1', '<p style=\"text-align:center\"><strong>Pesona Bali</strong></p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Siapa tak kenal Bali, pulau kecil di seberang ujung Timur Jawa ini? Pulau indah nan menawan yang dijuluki pulau dewata ini bagai magnet yang menarik wisatawan, baik domestik maupun mancanegara. Bahkan sebelum mengenal nama Indonesia, banyak wisatawan asing lebih dulu mengenal nama Bali.</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"text-align:justify\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ada banyak hal yang dapat dinikmati ketika mengunjungi Bali, mulai dari wisata pantai, gunung, budaya, dan lain sebagainya. Jutaan wisatawan mengunjungi Bali setiap tahunnya karena keramahan masyarakatnya, keindahan panoramanya, dan keunikan budayanya.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"text-align:justify\">&nbsp; &nbsp; &nbsp; &nbsp; </span>Pertama, Bali menjadi tujuan wisata dunia karena keramahan masyarakatnya. Sesaat setelah wisatawan menginjakkan kaki di bumi seribu pura ini, senyum ramah penduduk Bali akan menyambut mereka.<br />\r\n<br />\r\nMasyarakat Bali yang taat menjalankan agama Hindu dan adat-istiadat mereka ini sangat terbuka dan menghargai para pendatang. Sistem pemerintahan desa yang kuat dengan ribuan banjar di seluruh Bali juga memberi suasana damai dan tentram bagi para wisatawan. Dengan masyarakat yang taat adat, Bali memberikan segala keramahan bagi wisatawan.<br />\r\n<br />\r\nDisamping keramahan masyarakatnya, wisatawan jatuh cinta dengan Bali karena keindahan panoramanya. Wisatawan dapat memanjakan diri dengan berjemur di pantai dengan sinar matahari yang hangat di sepanjang garis pantainya.<br />\r\n<br />\r\nBagi mereka yang menyukai olah raga pantai seperti surfing, snorkeling, dan diving, Bali adalah surganya. Ombak Pantai Kuta yang bisa mencapai 2-3 meter memberikan tantangan tersendiri bagi para peselancar.<br />\r\n<br />\r\nYang paling mengesankan adalah keunikan budaya Bali yang sudah terkenal ke seluruh dunia. Adat istiadat yang kuat dan tidak pudar dengan derasnya industri pariwisata merupakan daya tarik tersendiri.<br />\r\n<br />\r\nPerayaan dan festival, baik yang bersifat keagamaan maupun adat selalu mewarnai kehidupan masyarakat Bali. Beberapa acara keagamaan seperti Galungan, Kuningan, Nyepi, Purnama, Ngaben, dan banyak lagi lainnya mampu menghipnotis para wisatawan.<br />\r\n<br />\r\nDengan pesona yang dimiliki Bali, tidaklah mengherankan bila Bali dikunjungi jutaan wisatawan setiap tahunnya. Banyak diantara mereka, sepulang liburan di Bali, mendapatkan pengalaman unik yang sering menjadi inspirasi dan semangat hidup. Jadi, kalau Anda bingung menentukan kemana akan liburan tahun ini, mengapa tidak ke Bali?</p>\r\n'),
(8, 11, 'Judul Essay', '<p><span style=\"font-size:14px\"><span style=\"color:#1abc9c\"><em><strong>Ini adalah essay pertama </strong></em></span><span style=\"color:#e74c3c\"><em><strong>saya</strong></em></span></span></p>\r\n'),
(9, 12, 'Judul Essay', '<p><strong>Ini</strong> essay pertama saya<sup data-footnote-id=\"sqfmt\"><a href=\"#footnote-1\" id=\"footnote-marker-1-1\" rel=\"footnote\">[1]</a></sup></p>\r\n\r\n<section class=\"footnotes\">\r\n<header>\r\n<h2>Footnotes</h2>\r\n</header>\r\n\r\n<ol>\r\n	<li data-footnote-id=\"sqfmt\" id=\"footnote-1\"><sup><a href=\"#footnote-marker-1-1\">^</a> </sup><cite>Catatn kaki</cite></li>\r\n</ol>\r\n</section>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'Pemrograman');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id_login` int(11) NOT NULL,
  `anggota_id` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `jenkel` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tgl_bergabung` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id_login`, `anggota_id`, `user`, `pass`, `level`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenkel`, `alamat`, `telepon`, `email`, `tgl_bergabung`, `foto`) VALUES
(1, 'AG001', 'hendri', '202cb962ac59075b964b07152d234b70', 'Petugas', 'Hendri Admin', 'Solo', '2000-05-10', 'Laki-Laki', 'Yogyakarta', '081234567890', 'rianto@gmail.com', '2019-11-20', 'user_1630303496.png'),
(8, 'AG002', 'aji', '202cb962ac59075b964b07152d234b70', 'Praja', 'Hendri Aji Pangestu', 'Garut', '1997-07-21', 'Laki-Laki', 'test', '085223661144', 'ajipangestu@gmial.com', '2022-12-02', 'user_1669920753.jpeg'),
(9, 'AG009', 'firman', '7eda9a0d45d4dbfa99e06d4f402c2e67', 'Praja', 'Firman', 'BaoBao', '1997-07-21', 'Laki-Laki', 'Bao bao sumatra tenggara', '085223661144', 'anwarsptr@gmail.com', '2022-12-02', 'user_1669942156.jpeg'),
(10, 'AG0010', 'danny', 'd4e17a9b560c652ba56e912bfb37cf87', 'Praja', 'Danny', 'Garut', '1997-07-21', 'Laki-Laki', 'Kalimantan', '085223661144', 'scdbipdn@gmail.com', '2022-12-02', 'user_1669949818.jpeg'),
(11, 'AG0011', 'harliman', 'c838cf04331d3b4e9b0df1682e9f5d2c', 'Praja', 'Harliman Krida Laksana', 'Garut', '1997-07-21', 'Laki-Laki', 'Griya Pamoyanan 3 Garut', '085223661144', 'harliman@gmail.com', '2022-12-03', 'user_1670032141.jpeg'),
(12, 'AG0012', 'shanum', 'ea937caa4cde05de01a85f8042d914d5', 'Praja', 'Shanum Aqila', 'Garut', '1997-07-21', 'Perempuan', 'Garut', '085223661144', 'shanum@gmial.com', '2022-12-03', 'user_1670036766.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinjam`
--

CREATE TABLE `tbl_pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `pinjam_id` varchar(255) NOT NULL,
  `anggota_id` varchar(255) NOT NULL,
  `buku_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tgl_pinjam` varchar(255) NOT NULL,
  `lama_pinjam` int(11) NOT NULL,
  `tgl_balik` varchar(255) NOT NULL,
  `tgl_kembali` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pinjam`
--

INSERT INTO `tbl_pinjam` (`id_pinjam`, `pinjam_id`, `anggota_id`, `buku_id`, `status`, `tgl_pinjam`, `lama_pinjam`, `tgl_balik`, `tgl_kembali`) VALUES
(8, 'PJ001', 'AG002', 'BK008', 'Di Kembalikan', '2020-05-19', 1, '2020-05-20', '2020-05-20'),
(10, 'PJ009', 'AG002', 'BK008', 'Di Kembalikan', '2020-05-20', 1, '2020-05-21', '2020-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rak`
--

CREATE TABLE `tbl_rak` (
  `id_rak` int(11) NOT NULL,
  `nama_rak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rak`
--

INSERT INTO `tbl_rak` (`id_rak`, `nama_rak`) VALUES
(1, 'Rak Buku 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_comment`
--
ALTER TABLE `table_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `table_content`
--
ALTER TABLE `table_content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `tbl_biaya_denda`
--
ALTER TABLE `tbl_biaya_denda`
  ADD PRIMARY KEY (`id_biaya_denda`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tbl_denda`
--
ALTER TABLE `tbl_denda`
  ADD PRIMARY KEY (`id_denda`);

--
-- Indexes for table `tbl_essay`
--
ALTER TABLE `tbl_essay`
  ADD PRIMARY KEY (`id_essay`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `tbl_rak`
--
ALTER TABLE `tbl_rak`
  ADD PRIMARY KEY (`id_rak`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_comment`
--
ALTER TABLE `table_comment`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `table_content`
--
ALTER TABLE `table_content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_biaya_denda`
--
ALTER TABLE `tbl_biaya_denda`
  MODIFY `id_biaya_denda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_denda`
--
ALTER TABLE `tbl_denda`
  MODIFY `id_denda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_essay`
--
ALTER TABLE `tbl_essay`
  MODIFY `id_essay` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_rak`
--
ALTER TABLE `tbl_rak`
  MODIFY `id_rak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
