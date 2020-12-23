-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Des 2020 pada 08.21
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `slug_berita` varchar(255) DEFAULT NULL,
  `isi_berita` text,
  `gambar_berita` varchar(30) DEFAULT NULL,
  `tgl_berita` date NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul_berita`, `slug_berita`, `isi_berita`, `gambar_berita`, `tgl_berita`, `id_user`) VALUES
(1, 'Lebaran', 'lebaran', '<p>Ora Mudik Ora Gayeng sak adoh&quot;mu ng paran ojo lali mulih ning Pangonan</p>\r\n', 'images.jpg', '2020-12-23', 1),
(3, 'Bola Dunia', 'bola-dunia', '<p>Dunia dan seiisinya yg sampe sekarang masih menjadi perdebatan ..ahahahp untuk hal melingkar atau datar</p>\r\n', 'dsffffdsf.jpg', '2020-12-23', 1),
(4, 'Senja Luka dan Kenangannya', 'senja-luka-dan-kenangannya', '<p><em>Te</em><strong>ntang senja luka dan kenangannya ya kadang cahaya sore lebih paham bagaimana cara berpamitan&nbsp;</strong></p>\r\n', 'DSFADFSAFA.jpg', '2020-12-23', 1),
(6, 'Coding Is Cool', 'coding-is-cool', '<p>Codiing Bukan Kopi dingin lur ttep semangat senajan errror menghambat , ayolah mantap&quot;</p>\r\n', 'images_(24).jpg', '2020-12-23', 1),
(7, 'Tentang Kita dan Cahaya ilmu', 'tentang-kita-dan-cahaya-ilmu', '<p>Tentang Kita dan Cahaya ilmu&nbsp;Tentang Kita dan Cahaya ilmu&nbsp;Tentang Kita dan Cahaya ilmuTentang Kita dan Cahaya ilmu&nbsp;Tentang Kita dan Cahaya ilmu&nbsp;Tentang Kita dan Cahaya ilmu&nbsp;Tentang Kita dan Cahaya ilmu&nbsp;Tentang Kita dan Cahaya ilmu</p>\r\n', 'images_(22).jpg', '2020-12-23', 1),
(8, 'Foto Clasis', 'foto-clasis', '<p>Clasic itu asikk lho broh....</p>\r\n', 'images_(23).jpg', '2020-12-23', 1),
(9, 'Anggaran', 'anggaran', '<p>Penulis Singgih Wiryono | Editor Irfan Maullana JAKARTA, KOMPAS.com - Ketua Dewan Pimpinan Wilayah (DPW) PSI Michael Victor Siagian kembali mengingatkan bahwa Anggaran Pendapatan Belanja Daerah (APBD) DKI Jakarta semestinya dibuka ke publik setelah diketahui terdapat anggaran janggal senilai Rp 580 miliar. &quot;Itu kenapa anggaran ini harus dibuka kepada publik,&quot; kata Michael saat dihubungi melalui pesan teks, Rabu (23/12/2020). Michael mengatakan, rincian APBD DKI 2021 saat ini masih belum diketahui seperti apa. Bahkan PSI sendiri, lanjut Michael ingin tahu apa isi dari APBD DKI yang sudah disetujui DPRD dan Gubernur DKI pada 7 Desember lalu.<br />\r\n<br />\r\nArtikel ini telah tayang di&nbsp;<a href=\"https://www.kompas.com/\">Kompas.com</a>&nbsp;dengan judul &quot;Anggaran Janggal Rp 580 Miliar, PSI: Harusnya Anggaran Dibuka ke Publik&quot;, Klik untuk baca:&nbsp;<a href=\"https://megapolitan.kompas.com/read/2020/12/23/08423921/anggaran-janggal-rp-580-miliar-psi-harusnya-anggaran-dibuka-ke-publik\">https://megapolitan.kompas.com/read/2020/12/23/08423921/anggaran-janggal-rp-580-miliar-psi-harusnya-anggaran-dibuka-ke-publik</a>.<br />\r\nPenulis : Singgih Wiryono<br />\r\nEditor : Irfan Maullana<br />\r\n<br />\r\nDownload aplikasi&nbsp;<a href=\"https://www.kompas.com/\">Kompas.com</a>&nbsp;untuk akses berita lebih mudah dan cepat:<br />\r\nAndroid:&nbsp;<a href=\"https://bit.ly/3g85pkA\">https://bit.ly/3g85pkA</a><br />\r\niOS:&nbsp;<a href=\"https://apple.co/3hXWJ0L\">https://apple.co/3hXWJ0L</a></p>\r\n', 'download.jpg', '2020-12-23', 1),
(10, 'Waktu Indonesia Ngopi', 'waktu-indonesia-ngopi', '<p><strong>Jakarta</strong>&nbsp;-&nbsp;</p>\r\n\r\n<p>Ternyata kepribadian seseorang bisa dilihat dari&nbsp;<a href=\"https://www.detik.com/tag/kopi\">kopi&nbsp;</a>kesukaannya. Untuk penggemar Americano, cappuccino, dan latte, seperti ini gambaran kepribadianmu.</p>\r\n\r\n<p>Kopi jadi salah satu minuman kesukaan banyak orang. Minuman yang rasanya pahit dan beraroma khas ini memiliki beragam varian.</p>\r\n\r\n<p>Ada yang dikenal dengan istilah Americano, yaitu kopi pahit yang rasanya tajam. Biasanya varian ini disajikan dingin atau hangat. Ada juga latte yang manis lembut. Beberapa varian kopi ini ternyata mampu menggambarkan kepribadian seseorang.</p>\r\n', 'images_(12).jpg', '2020-12-23', 1),
(11, 'Gubernur Kalbar Larang Pesta Kembang Api Tahun Baru, Yang Bandel Diisolasi', 'gubernur-kalbar-larang-pesta-kembang-api-tahun-baru-yang-bandel-diisolasi', '<p><strong>Jakarta</strong>&nbsp;-&nbsp;</p>\r\n\r\n<p>Gubernur Kalimantan Barat (Kalbar) Sutarmidji mengatakan kasus COVID-19 di wilayahnya meningkat. Karena itu, pesta kembang api saat&nbsp;<a href=\"https://www.detik.com/tag/tahun-baru\">tahun baru</a>&nbsp;dilarang.</p>\r\n\r\n<p>&quot;Assalamualaikum. Perkembangan COVID di Kalbar saat ini cenderung meningkat, terutama di daerah-daerah yang tidak melakukan&nbsp;<em>swab test</em>,&quot; kata Sutarmidji lewat akun media sosialnya, Sabtu (19/12/2020).</p>\r\n\r\n<p><br />\r\nSutarmidji mengingatkan warga terpapar virus COVID-19 akan semakin banyak bila tidak taat protokol kesehatan. Dia juga mengungkap hasil razia&nbsp;<em>swab</em>&nbsp;di kafe hingga warung kopi.</p>\r\n\r\n<p>&quot;Jika kita tidak taat protokol kesehatan, akan semakin banyak. Hasil&nbsp;<em>swab</em>&nbsp;razia di kafe, warkop, dan GOR, rata-rata 30 persen lebih yang positif,&quot; ujarnya.</p>\r\n', 'bggarden1.jpg', '2020-12-19', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_file`
--

CREATE TABLE `tbl_file` (
  `id_file` int(11) NOT NULL,
  `ket_file` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_file`
--

INSERT INTO `tbl_file` (`id_file`, `ket_file`, `file`) VALUES
(2, 'MATERI IPS', '154-P02.pdf'),
(3, 'silabus bsi', '154-P01.pdf'),
(4, 'MATERI IPA', '851-P03.pdf'),
(5, 'Materi Matematika', '851-P13.pdf'),
(6, 'Materi Fisika', '916-P02.pdf'),
(7, 'Materi Bahasa Arab', '916-P14.pdf'),
(8, 'Materi Bahasa Indonesia', '916-P09.pdf'),
(9, 'Materi Bahasa Inggris', '916-P07.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_foto`
--

CREATE TABLE `tbl_foto` (
  `id_foto` int(11) NOT NULL,
  `id_gallery` int(11) NOT NULL,
  `ket_foto` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_foto`
--

INSERT INTO `tbl_foto` (`id_foto`, `id_gallery`, `ket_foto`, `foto`) VALUES
(5, 4, 'barisan', 'download_(2).jpg'),
(6, 4, 'testrets', 'images_(18).jpg'),
(7, 4, 'tidaurr', 'images_(13).jpg'),
(8, 4, 'pramuka', 'images_(21).jpg'),
(9, 2, 'Cekungkrung', 'images_(23).jpg'),
(10, 2, 'Coding is Cool', 'images_(1).jpg'),
(11, 1, 'bobok', 'IMG_LAPORAN.png'),
(12, 1, 'opik', 'privasiku.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_gallery` int(11) NOT NULL,
  `nama_gallery` text NOT NULL,
  `sampul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `nama_gallery`, `sampul`) VALUES
(1, 'Gallery Kartun', 'images_(6).jpg'),
(2, 'Kegiatas Mos', 'foto1.jpg'),
(4, 'Galeri Sekolah', 'images_(7).jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nama_guru` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(25) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `id_mapel` int(2) DEFAULT NULL,
  `pendidikan` varchar(5) DEFAULT NULL,
  `foto_guru` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`id_guru`, `nip`, `nama_guru`, `tempat_lahir`, `tgl_lahir`, `id_mapel`, `pendidikan`, `foto_guru`) VALUES
(3, '1321312', 'Eka', 'Jakarta', '2020-11-24', 3, 'S1', 'images_(18).jpg'),
(4, '22222344', 'Rahmat', 'wonogiri', '2020-11-24', 2, 'S1', 'images_(29).jpg'),
(16, '1234124324', 'Matir', 'Lampung123', '2020-12-16', 4, 'S1', 'download_(2).jpg'),
(17, '12190341', 'Adi Prawira', 'wonogiri', '2020-12-11', 5, 'S1', 'adi.jpg'),
(18, '12190213', 'Hanif', 'Tangerang', '2020-12-31', 4, 'S1', 'images_(1).jpg'),
(19, '132122313', 'Hendy pk', 'wonogiri', '1997-12-12', 4, 'S1', 'ilmu_islami.jpg'),
(20, '1213213123', 'Perdana Sastra', 'Jakarta', '1997-12-12', 2, 'S1', 'pria4.png'),
(21, '15678903818', 'Hamidah Spd', 'Surakarta', '1997-11-10', 1, 'S1', 'wanita1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `id_mapel` int(2) NOT NULL,
  `nama_mapel` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`id_mapel`, `nama_mapel`) VALUES
(1, 'Matematika'),
(2, 'Bahasa Indonesia '),
(3, 'Bahasa Inggris'),
(4, 'Bahasa Arab'),
(5, 'TIK'),
(6, 'Fisika'),
(7, 'Agama'),
(8, 'Sejaraht'),
(9, 'Kenangan'),
(10, 'tester'),
(12, 'kenanang'),
(13, 'Psikolog'),
(25, 'Akuntansi dasaar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul_pengumuman` varchar(255) DEFAULT NULL,
  `isi_pengumuman` text,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `tgl`) VALUES
(1, 'UTS', 'Diberitahukan kepada siswa - siswi SMK Agak Pintar bahwa ulangan tengah semester akan diadakan pada tanggal 1 Januari 2021', '2020-11-26'),
(7, 'libur semester', 'libur telah tiba dari tanggal sekian dan terimakasih', '2020-11-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(20) DEFAULT NULL,
  `nama_siswa` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(25) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `foto_siswa` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nis`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `kelas`, `foto_siswa`) VALUES
(2, '13213', 'Prawira', 'wonogiri', '2020-11-26', 'XII', 'IMG20170805210151.jpg'),
(3, '1111', 'Nurul', 'wonogiri', '2020-11-26', 'XII', 'wanita3.png'),
(4, '1111213', 'alex satria', 'wonogiri', '2020-11-26', 'IX', 'DSFADFSAFA.jpg'),
(6, '123213', 'Anggara Maruta', 'wonogiri', '2020-11-26', 'VIII', 'IMG_20170714_205127.jpg'),
(7, '1224', 'Danendra Azka', 'wonogiri', '2020-11-26', 'VIII', 'IMG-20170912-WA0052.jpg'),
(8, '189009', 'Perdana Hanif', 'Tangerang', '1997-01-02', 'IX', 'pria1.png'),
(9, '19092', 'Adi Prawira', 'wonogiri', '2000-10-11', 'XI', 'pria4.png'),
(10, '1209876', 'Santoso', 'wonogiri', '1999-04-14', 'XI', 'IMG20170906191956.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(2) NOT NULL,
  `nama_user` varchar(25) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `level` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'Adi Prawira', 'admin', 'admin', 1),
(2, 'prawira', 'user', 'user', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `tbl_foto`
--
ALTER TABLE `tbl_foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_foto`
--
ALTER TABLE `tbl_foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  MODIFY `id_mapel` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
