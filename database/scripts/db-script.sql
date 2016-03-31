-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.24 - Source distribution
-- Server OS:                    Linux
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for merakmuda_db
DROP DATABASE IF EXISTS `merakmuda_db`;
CREATE DATABASE IF NOT EXISTS `merakmuda_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `merakmuda_db`;


-- Dumping structure for table merakmuda_db.about_description
DROP TABLE IF EXISTS `about_description`;
CREATE TABLE IF NOT EXISTS `about_description` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type` enum('IL','IR','LS','NI') DEFAULT NULL COMMENT 'IL:Image Left; IR:Image Right',
  `title` varchar(60) DEFAULT NULL,
  `desc` text,
  `aktif` enum('Y','N') DEFAULT 'Y',
  `img` varchar(250) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table merakmuda_db.about_description: ~4 rows (approximately)
DELETE FROM `about_description`;
/*!40000 ALTER TABLE `about_description` DISABLE KEYS */;
INSERT INTO `about_description` (`id`, `created_at`, `updated_at`, `type`, `title`, `desc`, `aktif`, `img`, `order`) VALUES
	(2, '2016-03-13 15:59:53', '2016-03-13 16:48:06', 'IR', 'Sejarah', 'Sebagai wilayah di luar Ring I Jawa Timur yang terus berkembang, kabupaten dan kotamadya di wilayah Trenggalek, Tulungagung, Blitar, Kediri, Nganjuk, Madiun, Jombang dan Mojokerto mengalami peningkatan pembangunan yang pesat pada sektor industri, perikanan dan kesehatan.\r\n\r\nPerkembangan yang pesat harus diimbangi oleh tersedianya secara mudah berbagai sumber daya penunjang, salah satunya oksigen dan gas-gas lain, tahun 2004 Merak Muda Gas membuka stasiun pengisian gas Oksigen di Tulungagung, dimana diharapkan dapat lebih mempercepat usaha-usaha daerah untuk mengembangkan diri.\r\n\r\nTahun 2006 Merak Muda Gas mengembangkan keahlian dengan mulai melatih dan membentuk tim Instalasi Sentral dimana pada tahun tersebut melayani pemasangan instalasi sentral dan memberi service rutin kepada pelanggan khususnya Rumah Sakit supaya distribusi gas oksigen kepada pasien tidak mengganggu oleh adanya kerusakan alat penunjang.', 'Y', '743f14d43ba0148269cd7e807ae50a6f.jpg', 1),
	(5, '2016-03-13 16:07:13', '2016-03-13 16:48:02', 'NI', 'Motto', 'KAMI BERIKAN LEBIH DARI YANG ANDA BAYANGKAN', 'Y', NULL, 3),
	(8, '2016-03-13 16:13:51', '2016-03-13 16:48:06', 'IL', '', 'Tahun 2007 Merak Muda Gas menginvestasikan da untuk memperlengkapi dengan mesin penguji kelayakan tabung dengan sistem Hidrostati Tes sehingga diharapkan seluruh tabung yang beredar di pelanggan benar-benar aman dipakai.\r\n\r\nTahun 2008 Merak Muda Gas membuka Cabang Stasiun Pengisian Gas Oksigen di Jombang dengan harapan wilayah yang dapat dijangkau semakin luas dan mengamankan ketersediaan pasokan oksigen bila sewaktu-waktu terjadi hambatan. Dengan 10.000 tabung yang beredar, 10 kendaraan pengirim, 5 tangki penyimpan Oksigen dan 2 Filling Station memberi rasa aman dan nyamankepada seluruh pelanggan Merak Muda Gas\r\n\r\nMulai tahun 200+ bergerak lebih maju dikarenakan Rumah Sakit dan Industri sudah banyak yang berkembang pesat maka sistem distribusi oksigen diubah dari cylinder menjadi Tangki Cryogenic.', 'Y', 'b7b8effba571ceb0d1fb895c0db33c31.jpg', 2),
	(9, '2016-03-13 16:37:55', '2016-03-14 09:59:33', 'LS', 'Misi', '', 'Y', NULL, 6),
	(10, '2016-03-13 17:01:02', '2016-03-14 09:59:33', 'NI', 'Visi', 'Menjadi perusahaan penyedia gas dan alat-alat penunjang medis dan industri yang paling terpercaya, berkualitas unggul dan mampu bersain di pasar global.', 'Y', NULL, 5);
/*!40000 ALTER TABLE `about_description` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.about_description_list_item
DROP TABLE IF EXISTS `about_description_list_item`;
CREATE TABLE IF NOT EXISTS `about_description_list_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `about_description_id` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__about_description` (`about_description_id`),
  CONSTRAINT `FK__about_description` FOREIGN KEY (`about_description_id`) REFERENCES `about_description` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table merakmuda_db.about_description_list_item: ~4 rows (approximately)
DELETE FROM `about_description_list_item`;
/*!40000 ALTER TABLE `about_description_list_item` DISABLE KEYS */;
INSERT INTO `about_description_list_item` (`id`, `created_at`, `updated_at`, `about_description_id`, `title`, `content`) VALUES
	(1, '2016-03-13 16:10:22', '2016-03-13 16:10:22', 9, 'MEWUJUDKAN KOMITMEN', 'untuk menjadi perusahaan yang terpercayam, aman, jujur dan berdedikasi bagi pelanggan, supplier dan masyarakat sekitar.'),
	(2, '2016-03-13 16:10:22', '2016-03-13 16:10:22', 9, 'MENJAGA KEMAJUAN', 'minat belajar dan meningkatkan kemampuan terhadap kemajuan teknologi baik dari dalam maupun luar negeri untuk mendukung layanan terhadap pelanggan sampai selamanya.'),
	(3, '2016-03-13 16:10:22', '2016-03-13 16:10:22', 9, 'BELAJAR & MENINGKATKAN KEMAMPUAN', 'demi mencapai kinerja layanan yang unggul, kualitas produk yang prima dan selalu membangun kepercayaan pelanggan atas kualitas layanan dan kualitas produk.'),
	(4, '2016-03-13 16:10:22', '2016-03-13 16:10:22', 9, 'MENGEMBANGKAN LINI PRODUK', 'yang saling menunjang supaya mitra kerja bisa mendapatkan solusi menyeluruh terkait gas medis, gas industri dan instalasinya.');
/*!40000 ALTER TABLE `about_description_list_item` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.about_page
DROP TABLE IF EXISTS `about_page`;
CREATE TABLE IF NOT EXISTS `about_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section_title` varchar(60) DEFAULT NULL,
  `img_1` varchar(250) DEFAULT NULL,
  `img_2` varchar(250) DEFAULT NULL,
  `first_line_desc` text,
  `second_line_desc` text,
  `motto` text,
  `visi` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table merakmuda_db.about_page: ~0 rows (approximately)
DELETE FROM `about_page`;
/*!40000 ALTER TABLE `about_page` DISABLE KEYS */;
INSERT INTO `about_page` (`id`, `section_title`, `img_1`, `img_2`, `first_line_desc`, `second_line_desc`, `motto`, `visi`) VALUES
	(1, 'About Us', NULL, NULL, 'sebagai wilayah di luar Ring I Jawa Timur yang terus berkembang, kabupaten dan kotamadya di wilayah Trenggalek, Tulungagung, Blitar, Kediri, Nganjuk, Madiun, Jombang dan Mojokerto mengalami peningkatan pembangunan yang pesat pada sektor industri, perikanan dan kesehatan.\r\n\r\nPerkembangan yang pesat harus diimbangi oleh tersedianya secara mudah berbagai sumber daya penunjang, salah satunya oksigen dan gas-gas lain, tahun 2004 Merak Muda Gas membuka stasiun pengisian gas Oksigen di Tulungagung, dimana diharapkan dapat lebih mempercepat usaha-usaha daerah untuk mengembangkan diri.\r\n\r\nTahun 2006 Merak Muda Gas mengembangkan keahlian dengan mulai melatih dan membentuk tim Instalasi Sentral dimana pada tahun tersebut melayani pemasangan instalasi sentral dan memberi service rutin kepada pelanggan khususnya Rumah Sakit supaya distribusi gas oksigen kepada pasien tidak mengganggu oleh adanya kerusakan alat penunjang.', 'Tahun 2007 Merak Muda Gas menginvestasikan da untuk memperlengkapi dengan mesin penguji kelayakan tabung dengan sistem Hidrostati Tes sehingga diharapkan seluruh tabung yang beredar di pelanggan benar-benar aman dipakai.\r\n\r\nTahun 2008 Merak Muda Gas membuka Cabang Stasiun Pengisian Gas Oksigen di Jombang dengan harapan wilayah yang dapat dijangkau semakin luas dan mengamankan ketersediaan pasokan oksigen bila sewaktu-waktu terjadi hambatan. Dengan 10.000 tabung yang beredar, 10 kendaraan pengirim, 5 tangki penyimpan Oksigen dan 2 Filling Station memberi rasa aman dan nyamankepada seluruh pelanggan Merak Muda Gas\r\n\r\nMulai tahun 200+ bergerak lebih maju dikarenakan Rumah Sakit dan Industri sudah banyak yang berkembang pesat maka sistem distribusi oksigen diubah dari cylinder menjadi Tangki Cryogenic.', 'KAMI BERIKAN LEBIH DARI YANG ANDA BAYANGKAN', 'Menjadi perusahaan penyedia gas dan alat-alat penunjang medis dan industri yang paling terpercaya, berkualitas unggul dan mampu bersain di pasar global.');
/*!40000 ALTER TABLE `about_page` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.appsetting
DROP TABLE IF EXISTS `appsetting`;
CREATE TABLE IF NOT EXISTS `appsetting` (
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table merakmuda_db.appsetting: ~10 rows (approximately)
DELETE FROM `appsetting`;
/*!40000 ALTER TABLE `appsetting` DISABLE KEYS */;
INSERT INTO `appsetting` (`name`, `value`) VALUES
	('about_page_description_img_path', 'frontend/img/about/desc'),
	('about_page_section_title', 'Sejarah'),
	('footer_partner_img_path', 'frontend/img/footer/partner'),
	('gallery_img_path', 'frontend/img/gallery'),
	('homepage_blog_displayed_item_number', '8'),
	('homepage_blog_section_title', 'BLOGS'),
	('homepage_gallery_img_path', 'frontend/img/homepage/gallery'),
	('homepage_gallery_section_title', 'AKTIFITAS KAMI'),
	('homepage_layanan_img_path', 'frontend/img/homepage/layanan'),
	('homepage_layanan_title', 'LAYANAN KITA'),
	('homepage_slider_img_path', 'frontend/img/homepage'),
	('portofolio_img_path', 'frontend/img/portofolio'),
	('product_img_path', 'frontend/img/product'),
	('product_price_enable', '0');
/*!40000 ALTER TABLE `appsetting` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.career
DROP TABLE IF EXISTS `career`;
CREATE TABLE IF NOT EXISTS `career` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `title` varchar(100) DEFAULT NULL,
  `desc` text,
  `aktif` enum('Y','N') DEFAULT 'Y',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table merakmuda_db.career: ~1 rows (approximately)
DELETE FROM `career`;
/*!40000 ALTER TABLE `career` DISABLE KEYS */;
INSERT INTO `career` (`id`, `created_at`, `updated_at`, `title`, `desc`, `aktif`) VALUES
	(2, '2016-03-28 22:00:50', '2016-03-28 22:00:50', 'Graphic Design', '<p><b>Job Description</b><br></p><p></p><div><ul><li>Mengolah file mentah dari client menjadi file yang siap di cetak untuk di output di image setter</li><li>Merubah layout/setting/design dan text menjadi hasil dengan standard kualitas tinggi</li><li>Merubah design dan warna menjadi lebih menarik</li><li>Membuat proffprint kepada client untuk di acc sebelum naik cetak</li><li>Memastikan design dan warna yang dicetak sesuai dengan proffprint yang telah di acc client</li></ul><div>&nbsp;</div><div><strong>Requirements:</strong></div><div>&nbsp;</div><ul><li>Pendidikan SMA/SMK</li><li>Usia maksimal 35 tahun</li><li>Pengalaman minimal 5 tahun sebagai Supervisor / Leader</li><li>Menguasai program photoshop, illustrator, freehand, corel, indesign dan sebagainya</li><li>Menguasai dan paham tentang pengolahan warna dan cmyk sebelum dan sesudah cetak</li><li>Menguasai setting dan design</li><li>Mampu bekerja sama dalam tim dan di bawah tekanan</li><li>Mau bekerja shift</li><li>Teliti, rajin dan jujur</li></ul></div><b><br></b><p></p>', 'Y');
/*!40000 ALTER TABLE `career` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.contact_office
DROP TABLE IF EXISTS `contact_office`;
CREATE TABLE IF NOT EXISTS `contact_office` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama_cabang` varchar(60) DEFAULT NULL,
  `alamat` varchar(60) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `show_map` enum('Y','N') DEFAULT 'Y',
  `lat` varchar(50) DEFAULT NULL,
  `long` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table merakmuda_db.contact_office: ~3 rows (approximately)
DELETE FROM `contact_office`;
/*!40000 ALTER TABLE `contact_office` DISABLE KEYS */;
INSERT INTO `contact_office` (`id`, `created_at`, `updated_at`, `nama_cabang`, `alamat`, `phone`, `fax`, `email`, `order`, `show_map`, `lat`, `long`) VALUES
	(1, '2016-03-31 08:10:24', '2016-03-31 08:25:36', 'Kediri', 'Jl. Letjen Suprapto 1/24, Kediri, Jawa Timur', '0354-689402 ', '0354-689402', 'ljsuprapto@merakmudagas.com', 1, 'Y', NULL, NULL),
	(3, '2016-03-31 08:23:09', '2016-03-31 09:46:32', 'Jombang', 'Jl. Raya Perak-Jombang km. 08  Jombang, Jawa Timur ', '0321-874041, 081-259143005', '0321-874041', 'jombang@merakmudagas.com', 2, 'Y', NULL, NULL),
	(5, '2016-03-31 09:39:46', '2016-03-31 09:46:32', 'Kediri', 'Jl. Banjaran 1 ', '', '', '', 3, 'Y', '-7.820646', '112.023867');
/*!40000 ALTER TABLE `contact_office` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.contact_setting
DROP TABLE IF EXISTS `contact_setting`;
CREATE TABLE IF NOT EXISTS `contact_setting` (
  `id` tinyint(4) DEFAULT NULL,
  `main_email` varchar(150) DEFAULT NULL,
  `cc_email` varchar(150) DEFAULT NULL,
  `bcc_email` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table merakmuda_db.contact_setting: ~0 rows (approximately)
DELETE FROM `contact_setting`;
/*!40000 ALTER TABLE `contact_setting` DISABLE KEYS */;
INSERT INTO `contact_setting` (`id`, `main_email`, `cc_email`, `bcc_email`) VALUES
	(1, 'info@merakmudagas.com', 'sonny@merakmudagas.com', '');
/*!40000 ALTER TABLE `contact_setting` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.footer_emergency
DROP TABLE IF EXISTS `footer_emergency`;
CREATE TABLE IF NOT EXISTS `footer_emergency` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `subtitle` varchar(150) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table merakmuda_db.footer_emergency: ~0 rows (approximately)
DELETE FROM `footer_emergency`;
/*!40000 ALTER TABLE `footer_emergency` DISABLE KEYS */;
INSERT INTO `footer_emergency` (`id`, `title`, `subtitle`, `telp`) VALUES
	(1, 'KEPERLUAN DARURAT', 'Jika anda membutuhkan penanganan darurat, hubungi kami siap 24 jam', '0355-335571');
/*!40000 ALTER TABLE `footer_emergency` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.footer_partner
DROP TABLE IF EXISTS `footer_partner`;
CREATE TABLE IF NOT EXISTS `footer_partner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama` varchar(60) DEFAULT NULL,
  `img` varchar(150) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `aktif` enum('Y','N') DEFAULT 'Y',
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table merakmuda_db.footer_partner: ~4 rows (approximately)
DELETE FROM `footer_partner`;
/*!40000 ALTER TABLE `footer_partner` DISABLE KEYS */;
INSERT INTO `footer_partner` (`id`, `created_at`, `updated_at`, `nama`, `img`, `link`, `aktif`, `order`) VALUES
	(3, '2016-03-11 17:44:46', '2016-03-11 19:44:01', 'Danfoss', '0c76fda89be1dabc5814ae9bea94c34b.jpg', 'www.danfoss.com', 'Y', 1),
	(4, '2016-03-11 17:44:56', '2016-03-11 19:23:52', 'Elpijis', '4388c978331bd74349210ee8b2877d72.png', 'www.pertamina.co.id/elpiji', 'Y', 2),
	(5, '2016-03-11 19:18:09', '2016-03-11 19:18:09', 'CIGWELD', '674e48ba863e03fcb8dc6d1f1e6f9667.png', 'www.cigweld.com', 'Y', 3),
	(6, '2016-03-11 19:18:39', '2016-03-11 19:20:26', 'C&U Japan', '0e68cd009eae921d09dc7785512be635.png', 'www.cnu.com', 'Y', 4);
/*!40000 ALTER TABLE `footer_partner` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.gallery
DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kategori_id` int(11) DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  `youtube_url` varchar(250) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `subtitle` varchar(30) DEFAULT NULL,
  `type` enum('I','V') DEFAULT 'I',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table merakmuda_db.gallery: ~2 rows (approximately)
DELETE FROM `gallery`;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` (`id`, `created_at`, `updated_at`, `kategori_id`, `img`, `youtube_url`, `title`, `subtitle`, `type`) VALUES
	(1, '2016-03-26 07:13:04', '2016-03-26 07:37:58', 7, 'a7d0dfa814f1ad7fc0f700a4679f139b.jpg', NULL, 'Foto Bersama', '', 'I'),
	(2, '2016-03-26 07:37:46', '2016-03-27 18:44:58', 9, 'https://i.ytimg.com/vi/sVvMR0_uEVo/hqdefault.jpg', 'https://www.youtube.com/watch?v=sVvMR0_uEVo', 'KTM 85 SX', '', 'V');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.gallery_kategori
DROP TABLE IF EXISTS `gallery_kategori`;
CREATE TABLE IF NOT EXISTS `gallery_kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Dumping data for table merakmuda_db.gallery_kategori: ~4 rows (approximately)
DELETE FROM `gallery_kategori`;
/*!40000 ALTER TABLE `gallery_kategori` DISABLE KEYS */;
INSERT INTO `gallery_kategori` (`id`, `created_at`, `updated_at`, `nama`) VALUES
	(7, '2016-03-17 11:16:48', '2016-03-17 11:16:48', 'purging'),
	(8, '2016-03-17 11:16:51', '2016-03-17 11:16:51', 'semproting'),
	(9, '2016-03-18 10:53:43', '2016-03-18 10:53:43', 'Dirt BIke'),
	(10, '2016-03-18 10:55:22', '2016-03-27 16:45:06', 'Cars'),
	(11, '2016-03-18 11:27:30', '2016-03-18 11:27:30', 'Animals');
/*!40000 ALTER TABLE `gallery_kategori` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.header_contact
DROP TABLE IF EXISTS `header_contact`;
CREATE TABLE IF NOT EXISTS `header_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type` enum('TL','ML','BB','WA') DEFAULT NULL COMMENT 'TL:Telpon, ML:Mail, BB=BBM.WA=Whatsapp',
  `value` varchar(50) DEFAULT NULL,
  `aktif` enum('Y','N') DEFAULT 'Y',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table merakmuda_db.header_contact: ~2 rows (approximately)
DELETE FROM `header_contact`;
/*!40000 ALTER TABLE `header_contact` DISABLE KEYS */;
INSERT INTO `header_contact` (`id`, `created_at`, `updated_at`, `type`, `value`, `aktif`) VALUES
	(1, '2016-03-11 10:26:47', '2016-03-11 10:52:16', 'TL', '(0354) 7418597', 'Y'),
	(2, '2016-03-11 10:37:14', '2016-03-11 10:52:18', 'ML', 'info@merakmudagas.com', 'Y'),
	(3, '2016-03-11 10:37:31', '2016-03-11 10:52:06', 'BB', '53AB65', 'Y');
/*!40000 ALTER TABLE `header_contact` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.header_social_media
DROP TABLE IF EXISTS `header_social_media`;
CREATE TABLE IF NOT EXISTS `header_social_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(100) DEFAULT NULL,
  `value` varchar(100) DEFAULT NULL,
  `aktif` enum('Y','N') DEFAULT 'Y',
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table merakmuda_db.header_social_media: ~5 rows (approximately)
DELETE FROM `header_social_media`;
/*!40000 ALTER TABLE `header_social_media` DISABLE KEYS */;
INSERT INTO `header_social_media` (`id`, `created_at`, `updated_at`, `name`, `value`, `aktif`, `order`) VALUES
	(1, '2016-03-11 06:54:46', '2016-03-11 17:32:37', 'Facebook', 'merakmudagas', 'Y', 1),
	(2, '2016-03-11 06:54:54', '2016-03-11 17:29:58', 'Twitter', '@merakmudagas', 'Y', 2),
	(3, '2016-03-11 06:55:02', '2016-03-11 17:29:59', 'Google Plus', 'merak_muda_gas', 'N', 3),
	(4, '2016-03-11 06:55:14', '2016-03-11 17:30:00', 'Instagram', 'merakmudagas', 'N', 4),
	(5, '2016-03-11 06:55:23', '2016-03-11 17:30:02', 'Youtube', 'ytb_merakmudagas', 'Y', 5);
/*!40000 ALTER TABLE `header_social_media` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.homepage_gallery
DROP TABLE IF EXISTS `homepage_gallery`;
CREATE TABLE IF NOT EXISTS `homepage_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `img_no` int(11) DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table merakmuda_db.homepage_gallery: ~6 rows (approximately)
DELETE FROM `homepage_gallery`;
/*!40000 ALTER TABLE `homepage_gallery` DISABLE KEYS */;
INSERT INTO `homepage_gallery` (`id`, `created_at`, `updated_at`, `img_no`, `img`) VALUES
	(1, '2016-03-09 09:41:38', '2016-03-10 08:08:47', 1, '62fa0a39e078ee1d0048c7932edf5bd1.jpg'),
	(2, '2016-03-09 09:41:43', '2016-03-10 08:08:41', 2, '53d183d34a964e0dab9e29329709a07e.jpg'),
	(3, '2016-03-09 09:41:49', '2016-03-10 08:09:14', 3, 'b79b1b9b9485ea7985a939d660959a77.jpg'),
	(4, '2016-03-09 09:41:54', '2016-03-10 08:25:19', 4, '9a49bc3101446580cf9ef430a777cefb.jpg'),
	(5, '2016-03-09 09:41:57', '2016-03-10 08:24:43', 5, '180226e900989724ee44bbc9dcb9ee1c.jpg'),
	(6, '2016-03-09 09:42:03', '2016-03-10 08:30:23', 6, '255595c93d6845863ceaef80155a3e24.jpg');
/*!40000 ALTER TABLE `homepage_gallery` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.homepage_layanan
DROP TABLE IF EXISTS `homepage_layanan`;
CREATE TABLE IF NOT EXISTS `homepage_layanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type` enum('1','2') COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `img_bottom` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_side` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aktif` enum('Y','N') COLLATE utf8_unicode_ci DEFAULT 'Y',
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table merakmuda_db.homepage_layanan: ~0 rows (approximately)
DELETE FROM `homepage_layanan`;
/*!40000 ALTER TABLE `homepage_layanan` DISABLE KEYS */;
INSERT INTO `homepage_layanan` (`id`, `created_at`, `updated_at`, `type`, `title`, `content`, `img_bottom`, `img_side`, `aktif`, `order`) VALUES
	(23, '2016-03-09 06:06:21', '2016-03-14 09:05:29', '1', 'GAS & PERALATAN INDUSTRISs', 'Kami menyediakan gas dan peralatan industri untuk industris', '6fd43c66948c1f25be20acd775bfa549.jpg', 'c437c2104160c54e2cc38563a81c580b.jpg', 'Y', 1),
	(24, '2016-03-14 07:27:14', '2016-03-14 09:05:17', '2', 'Medic Oxygen', 'medical oxygen', NULL, NULL, 'Y', 2);
/*!40000 ALTER TABLE `homepage_layanan` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.homepage_menu
DROP TABLE IF EXISTS `homepage_menu`;
CREATE TABLE IF NOT EXISTS `homepage_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama` varchar(100) NOT NULL,
  `position` enum('TP','BT','TB') NOT NULL,
  `order` int(11) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  `url` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table merakmuda_db.homepage_menu: ~8 rows (approximately)
DELETE FROM `homepage_menu`;
/*!40000 ALTER TABLE `homepage_menu` DISABLE KEYS */;
INSERT INTO `homepage_menu` (`id`, `created_at`, `updated_at`, `nama`, `position`, `order`, `aktif`, `url`) VALUES
	(1, '2016-03-11 11:23:48', '2016-03-31 13:27:47', 'HOME', 'TP', 1, 'Y', 'home'),
	(2, '2016-03-11 11:23:58', '2016-03-31 13:27:48', 'ABOUT US', 'BT', 2, 'Y', 'about'),
	(3, '2016-03-11 11:24:19', '2016-03-31 13:27:48', 'PRODUCTS', 'BT', 3, 'Y', 'products'),
	(4, '2016-03-11 11:24:31', '2016-03-31 11:33:02', 'GALLERY', 'TP', 4, 'Y', 'gallery'),
	(5, '2016-03-11 11:24:42', '2016-03-31 11:33:09', 'BLOG', 'BT', 5, 'Y', 'blog'),
	(6, '2016-03-11 11:24:54', '2016-03-31 11:33:15', 'PORTOFOLIO', 'TP', 6, 'Y', 'portfolio'),
	(7, '2016-03-11 11:25:04', '2016-03-31 11:33:18', 'CAREER', 'TB', 7, 'Y', 'career'),
	(8, '2016-03-14 10:00:02', '2016-03-31 11:33:21', 'CONTACT US', 'TB', 8, 'Y', 'contact');
/*!40000 ALTER TABLE `homepage_menu` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.homepage_midcontent
DROP TABLE IF EXISTS `homepage_midcontent`;
CREATE TABLE IF NOT EXISTS `homepage_midcontent` (
  `position` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` varchar(175) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  UNIQUE KEY `position` (`position`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table merakmuda_db.homepage_midcontent: ~3 rows (approximately)
DELETE FROM `homepage_midcontent`;
/*!40000 ALTER TABLE `homepage_midcontent` DISABLE KEYS */;
INSERT INTO `homepage_midcontent` (`position`, `title`, `content`, `img`) VALUES
	('left', 'Merak Muda Gas', 'merupakan perusahaan yang bergerak dalam bidang distribusi gas dan cairan cryogenic, installasi sentral, alat kesehatan dan alat industri pendukung aplikasi gas.', 'f9f41a8f63c2aacffd4e4e3afa3820ea.jpg'),
	('mid', 'MALAM BIRU', 'Di malam yang dingin dan sesunyi ini, aku sendiris.', ''),
	('right', 'KUPU KUPU MALAM DINGIN', 'di hari itu yang selalu pilu', '');
/*!40000 ALTER TABLE `homepage_midcontent` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.homepage_slider
DROP TABLE IF EXISTS `homepage_slider`;
CREATE TABLE IF NOT EXISTS `homepage_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `img` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aktif` enum('Y','N') COLLATE utf8_unicode_ci DEFAULT 'Y',
  `order` int(11) DEFAULT NULL,
  `type` enum('1','2','3') COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_color` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `second_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `second_title_color` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subtitle` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subtitle_color` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `list_item_1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `list_item_1_color` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `list_item_2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `list_item_2_color` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `list_item_3` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `list_item_3_color` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `list_item_4` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `list_item_4_color` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `list_item_5` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `list_item_5_color` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table merakmuda_db.homepage_slider: ~0 rows (approximately)
DELETE FROM `homepage_slider`;
/*!40000 ALTER TABLE `homepage_slider` DISABLE KEYS */;
INSERT INTO `homepage_slider` (`id`, `created_at`, `updated_at`, `img`, `aktif`, `order`, `type`, `title`, `title_color`, `second_title`, `second_title_color`, `subtitle`, `subtitle_color`, `list_item_1`, `list_item_1_color`, `list_item_2`, `list_item_2_color`, `list_item_3`, `list_item_3_color`, `list_item_4`, `list_item_4_color`, `list_item_5`, `list_item_5_color`) VALUES
	(1, '2016-03-11 17:12:02', '2016-03-11 17:12:02', 'a7f606df50c621cf06db09ea01765baa.jpg', 'Y', 1, '1', 'KAMI BERIKAN', '#f95c06', 'LEBIH DARI YANG ANDA BAYANGKAN', '#ffff00', 'Merak Muda Gas merupakan perusahaan yang bergerak dalam bidang distribusi gas.', '#ffffff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(2, '2016-03-14 07:20:18', '2016-03-14 09:04:05', '0026a9150b2521ae10e4c55a5a984805.jpg', 'Y', 2, '2', 'dfgfdgfd', '#ffffff', 'dfgfdgdfg', '#ffffff', 'dfsgfdss', '#ffffff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `homepage_slider` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.kategori
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama` varchar(100) DEFAULT NULL,
  `aktif` enum('Y','N') DEFAULT 'Y',
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table merakmuda_db.kategori: ~6 rows (approximately)
DELETE FROM `kategori`;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` (`id`, `created_at`, `updated_at`, `nama`, `aktif`, `order`) VALUES
	(1, '2016-03-14 07:36:59', '2016-03-14 10:04:00', 'Gas & Cairan Cryogenic', 'Y', 1),
	(2, '2016-03-14 07:37:52', '2016-03-14 10:04:15', 'Alat Kesehatan non Elektro Medik non Steril', 'Y', 2),
	(3, '2016-03-14 07:38:00', '2016-03-14 10:04:53', 'Alat Industri', 'Y', 3),
	(4, '2016-03-14 07:38:17', '2016-03-31 08:20:30', 'Jasa & Penjualan', 'Y', 4),
	(10, '2016-03-14 09:57:48', '2016-03-31 08:20:31', 'Perdaganan Lain', 'Y', 5);
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.permissions
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table merakmuda_db.permissions: ~0 rows (approximately)
DELETE FROM `permissions`;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.portofolio
DROP TABLE IF EXISTS `portofolio`;
CREATE TABLE IF NOT EXISTS `portofolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `title` varchar(100) DEFAULT NULL,
  `subtitle` varchar(100) DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table merakmuda_db.portofolio: ~1 rows (approximately)
DELETE FROM `portofolio`;
/*!40000 ALTER TABLE `portofolio` DISABLE KEYS */;
/*!40000 ALTER TABLE `portofolio` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.produk
DROP TABLE IF EXISTS `produk`;
CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama` varchar(25) DEFAULT NULL,
  `sub_desc` varchar(80) DEFAULT NULL,
  `desc` text,
  `price` int(11) DEFAULT NULL,
  `aktif` enum('Y','N') DEFAULT 'Y',
  `kategori_id` int(11) DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_produk_kategori` (`kategori_id`),
  CONSTRAINT `FK_produk_kategori` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table merakmuda_db.produk: ~0 rows (approximately)
DELETE FROM `produk`;
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table merakmuda_db.roles: ~3 rows (approximately)
DELETE FROM `roles`;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `created_at`, `updated_at`, `nama`, `description`) VALUES
	(1, '2016-02-10 08:24:43', '2016-02-10 08:24:43', 'sysadmin', 'System Administrator'),
	(2, '2016-02-10 08:25:00', '2016-02-10 08:25:00', 'inv', 'Inventory Control'),
	(3, '2016-02-10 08:25:11', '2016-02-10 08:25:11', 'ksr', 'Kasir');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.role_permission
DROP TABLE IF EXISTS `role_permission`;
CREATE TABLE IF NOT EXISTS `role_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `permission_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__roles` (`role_id`),
  KEY `FK__permissions` (`permission_id`),
  CONSTRAINT `FK__permissions` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  CONSTRAINT `FK__roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table merakmuda_db.role_permission: ~0 rows (approximately)
DELETE FROM `role_permission`;
/*!40000 ALTER TABLE `role_permission` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_permission` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `verified` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table merakmuda_db.users: ~3 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `verified`) VALUES
	(2, '', 'ADMIN', '', 'W6ph5Mm5Pz8GgiULbPgzG37mj9g=', NULL, '2016-02-10 08:26:12', '2016-02-10 08:26:12', 1),
	(4, '', 'ERIES', '', 'w9eYPkexlQEhGxtjKMf5dEr50K0=', NULL, '2016-02-10 08:27:28', '2016-02-10 08:27:28', 1),
	(5, '', 'HERMAN', '', 'w9eYPkexlQEhGxtjKMf5dEr50K0=', NULL, '2016-02-10 08:27:35', '2016-02-10 08:27:35', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.user_role
DROP TABLE IF EXISTS `user_role`;
CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_user_role_users` (`user_id`),
  KEY `FK_user_role_roles` (`role_id`),
  CONSTRAINT `FK_user_role_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  CONSTRAINT `FK_user_role_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table merakmuda_db.user_role: ~3 rows (approximately)
DELETE FROM `user_role`;
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `user_role` (`id`, `created_at`, `updated_at`, `user_id`, `role_id`) VALUES
	(1, '2016-02-10 08:26:13', '2016-02-10 08:26:13', 2, 1),
	(2, '2016-02-10 08:27:28', '2016-02-10 08:27:42', 4, 2),
	(3, '2016-02-10 08:27:35', '2016-02-10 08:27:35', 5, 3);
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;


-- Dumping structure for view merakmuda_db.VIEW_GALLERY
DROP VIEW IF EXISTS `VIEW_GALLERY`;
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `VIEW_GALLERY` (
	`id` INT(11) NOT NULL,
	`created_at` DATETIME NULL,
	`updated_at` DATETIME NULL,
	`kategori_id` INT(11) NULL,
	`kategori` VARCHAR(100) NULL COLLATE 'utf8_general_ci',
	`img` VARCHAR(250) NULL COLLATE 'utf8_general_ci',
	`youtube_url` VARCHAR(250) NULL COLLATE 'utf8_general_ci',
	`title` VARCHAR(30) NULL COLLATE 'utf8_general_ci',
	`subtitle` VARCHAR(30) NULL COLLATE 'utf8_general_ci',
	`type` ENUM('I','V') NULL COLLATE 'utf8_general_ci'
) ENGINE=MyISAM;


-- Dumping structure for view merakmuda_db.VIEW_PRODUK
DROP VIEW IF EXISTS `VIEW_PRODUK`;
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `VIEW_PRODUK` (
	`id` INT(11) NOT NULL,
	`created_at` DATETIME NULL,
	`updated_at` DATETIME NULL,
	`aktif` ENUM('Y','N') NULL COLLATE 'utf8_general_ci',
	`nama` VARCHAR(25) NULL COLLATE 'utf8_general_ci',
	`sub_desc` VARCHAR(80) NULL COLLATE 'utf8_general_ci',
	`desc` TEXT NULL COLLATE 'utf8_general_ci',
	`price` INT(11) NULL,
	`kategori_id` INT(11) NULL,
	`kategori` VARCHAR(100) NULL COLLATE 'utf8_general_ci'
) ENGINE=MyISAM;


-- Dumping structure for view merakmuda_db.VIEW_GALLERY
DROP VIEW IF EXISTS `VIEW_GALLERY`;
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `VIEW_GALLERY`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `VIEW_GALLERY` AS select `gallery`.`id` AS `id`,`gallery`.`created_at` AS `created_at`,`gallery`.`updated_at` AS `updated_at`,`gallery`.`kategori_id` AS `kategori_id`,`gallery_kategori`.`nama` AS `kategori`,`gallery`.`img` AS `img`,`gallery`.`youtube_url` AS `youtube_url`,`gallery`.`title` AS `title`,`gallery`.`subtitle` AS `subtitle`,`gallery`.`type` AS `type` from (`gallery` join `gallery_kategori` on((`gallery`.`kategori_id` = `gallery_kategori`.`id`)));


-- Dumping structure for view merakmuda_db.VIEW_PRODUK
DROP VIEW IF EXISTS `VIEW_PRODUK`;
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `VIEW_PRODUK`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `VIEW_PRODUK` AS select `produk`.`id` AS `id`,`produk`.`created_at` AS `created_at`,`produk`.`updated_at` AS `updated_at`,`produk`.`aktif` AS `aktif`,`produk`.`nama` AS `nama`,`produk`.`sub_desc` AS `sub_desc`,`produk`.`desc` AS `desc`,`produk`.`price` AS `price`,`produk`.`kategori_id` AS `kategori_id`,`kategori`.`nama` AS `kategori` from (`produk` join `kategori` on((`produk`.`kategori_id` = `kategori`.`id`)));
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
