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


-- Dumping structure for table merakmuda_db.appsetting
DROP TABLE IF EXISTS `appsetting`;
CREATE TABLE IF NOT EXISTS `appsetting` (
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table merakmuda_db.appsetting: ~8 rows (approximately)
DELETE FROM `appsetting`;
/*!40000 ALTER TABLE `appsetting` DISABLE KEYS */;
INSERT INTO `appsetting` (`name`, `value`) VALUES
	('footer_partner_img_path', 'frontend/img/footer/partner'),
	('homepage_blog_displayed_item_number', '8'),
	('homepage_blog_section_title', 'BLOGS'),
	('homepage_gallery_img_path', 'frontend/img/homepage/gallery'),
	('homepage_gallery_section_title', 'AKTIFITAS KAMI'),
	('homepage_layanan_img_path', 'frontend/img/homepage/layanan'),
	('homepage_layanan_title', 'LAYANAN KITA'),
	('homepage_slider_img_path', 'frontend/img/homepage');
/*!40000 ALTER TABLE `appsetting` ENABLE KEYS */;


-- Dumping structure for table merakmuda_db.footer_emergency
DROP TABLE IF EXISTS `footer_emergency`;
CREATE TABLE IF NOT EXISTS `footer_emergency` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `subtitle` varchar(150) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table merakmuda_db.footer_emergency: ~1 rows (approximately)
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table merakmuda_db.footer_partner: ~0 rows (approximately)
DELETE FROM `footer_partner`;
/*!40000 ALTER TABLE `footer_partner` DISABLE KEYS */;
INSERT INTO `footer_partner` (`id`, `created_at`, `updated_at`, `nama`, `img`, `link`, `aktif`, `order`) VALUES
	(3, '2016-03-11 17:44:46', '2016-03-11 19:44:01', 'Danfoss', '0c76fda89be1dabc5814ae9bea94c34b.jpg', 'www.danfoss.com', 'Y', 1),
	(4, '2016-03-11 17:44:56', '2016-03-11 19:23:52', 'Elpijis', '4388c978331bd74349210ee8b2877d72.png', 'www.pertamina.co.id/elpiji', 'Y', 2),
	(5, '2016-03-11 19:18:09', '2016-03-11 19:18:09', 'CIGWELD', '674e48ba863e03fcb8dc6d1f1e6f9667.png', 'www.cigweld.com', 'Y', 3),
	(6, '2016-03-11 19:18:39', '2016-03-11 19:20:26', 'C&U Japan', '0e68cd009eae921d09dc7785512be635.png', 'www.cnu.com', 'Y', 4);
/*!40000 ALTER TABLE `footer_partner` ENABLE KEYS */;


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

-- Dumping data for table merakmuda_db.header_contact: ~3 rows (approximately)
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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table merakmuda_db.homepage_layanan: ~0 rows (approximately)
DELETE FROM `homepage_layanan`;
/*!40000 ALTER TABLE `homepage_layanan` DISABLE KEYS */;
INSERT INTO `homepage_layanan` (`id`, `created_at`, `updated_at`, `type`, `title`, `content`, `img_bottom`, `img_side`, `aktif`, `order`) VALUES
	(23, '2016-03-09 06:06:21', '2016-03-11 05:54:56', '1', 'GAS & PERALATAN INDUSTRIS', 'Kami menyediakan gas dan peralatan industri untuk industris', '6fd43c66948c1f25be20acd775bfa549.jpg', 'c437c2104160c54e2cc38563a81c580b.jpg', 'Y', 1);
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table merakmuda_db.homepage_menu: ~7 rows (approximately)
DELETE FROM `homepage_menu`;
/*!40000 ALTER TABLE `homepage_menu` DISABLE KEYS */;
INSERT INTO `homepage_menu` (`id`, `created_at`, `updated_at`, `nama`, `position`, `order`, `aktif`) VALUES
	(1, '2016-03-11 11:23:48', '2016-03-11 14:20:51', 'HOME', 'TP', 1, 'Y'),
	(2, '2016-03-11 11:23:58', '2016-03-11 14:20:53', 'ABOUT US', 'BT', 2, 'Y'),
	(3, '2016-03-11 11:24:19', '2016-03-11 14:20:53', 'PRODUCTS', 'BT', 3, 'Y'),
	(4, '2016-03-11 11:24:31', '2016-03-11 14:06:41', 'GALLERY', 'TP', 4, 'Y'),
	(5, '2016-03-11 11:24:42', '2016-03-11 14:20:17', 'BLOG', 'BT', 5, 'Y'),
	(6, '2016-03-11 11:24:54', '2016-03-11 14:20:18', 'PORTOFOLIO', 'TP', 6, 'Y'),
	(7, '2016-03-11 11:25:04', '2016-03-11 14:14:10', 'CAREER', 'TB', 7, 'Y');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table merakmuda_db.homepage_slider: ~1 rows (approximately)
DELETE FROM `homepage_slider`;
/*!40000 ALTER TABLE `homepage_slider` DISABLE KEYS */;
INSERT INTO `homepage_slider` (`id`, `created_at`, `updated_at`, `img`, `aktif`, `order`, `type`, `title`, `title_color`, `second_title`, `second_title_color`, `subtitle`, `subtitle_color`, `list_item_1`, `list_item_1_color`, `list_item_2`, `list_item_2_color`, `list_item_3`, `list_item_3_color`, `list_item_4`, `list_item_4_color`, `list_item_5`, `list_item_5_color`) VALUES
	(1, '2016-03-11 17:12:02', '2016-03-11 17:12:02', 'a7f606df50c621cf06db09ea01765baa.jpg', 'Y', 1, '1', 'KAMI BERIKAN', '#f95c06', 'LEBIH DARI YANG ANDA BAYANGKAN', '#ffff00', 'Merak Muda Gas merupakan perusahaan yang bergerak dalam bidang distribusi gas.', '#ffffff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `homepage_slider` ENABLE KEYS */;


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
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
