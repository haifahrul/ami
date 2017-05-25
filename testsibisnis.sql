-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.1.23-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win64
-- HeidiSQL Versi:               9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Membuang struktur basisdata untuk testsibisnis
DROP DATABASE IF EXISTS `testsibisnis`;
CREATE DATABASE IF NOT EXISTS `testsibisnis` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `testsibisnis`;

-- membuang struktur untuk table testsibisnis.account
DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Membuang data untuk tabel testsibisnis.account: ~2 rows (lebih kurang)
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` (`email`, `username`, `password`) VALUES
	('faiz.fadly@gmail.com', 'faiz fadly', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `account` (`email`, `username`, `password`) VALUES
	('faiz_fadli@yahoo.com', 'Adly', ' fe01ce2a7fbac8fafaed7c982a04e229');
/*!40000 ALTER TABLE `account` ENABLE KEYS */;

-- membuang struktur untuk table testsibisnis.city
DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `province_id` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zipcode` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `province_id` (`province_id`),
  CONSTRAINT `FK_city_province` FOREIGN KEY (`province_id`) REFERENCES `province` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Membuang data untuk tabel testsibisnis.city: ~7 rows (lebih kurang)
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` (`id`, `province_id`, `city`, `zipcode`) VALUES
	(1, 1, 'Jakarta Pusat', NULL);
INSERT INTO `city` (`id`, `province_id`, `city`, `zipcode`) VALUES
	(2, 1, 'Jakarta Timur', NULL);
INSERT INTO `city` (`id`, `province_id`, `city`, `zipcode`) VALUES
	(3, 1, 'Jakarta Barat', NULL);
INSERT INTO `city` (`id`, `province_id`, `city`, `zipcode`) VALUES
	(4, 1, 'Jakarta Utara', NULL);
INSERT INTO `city` (`id`, `province_id`, `city`, `zipcode`) VALUES
	(5, 1, 'Jakarta Selatan', NULL);
INSERT INTO `city` (`id`, `province_id`, `city`, `zipcode`) VALUES
	(6, 2, 'Kota Bogor', NULL);
INSERT INTO `city` (`id`, `province_id`, `city`, `zipcode`) VALUES
	(8, 2, 'Kab. Bogor', 16340);
/*!40000 ALTER TABLE `city` ENABLE KEYS */;

-- membuang struktur untuk table testsibisnis.pesawat
DROP TABLE IF EXISTS `pesawat`;
CREATE TABLE IF NOT EXISTS `pesawat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `d` varchar(255) NOT NULL,
  `a` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `ret_date` date NOT NULL,
  `adult` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `infant` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Membuang data untuk tabel testsibisnis.pesawat: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `pesawat` DISABLE KEYS */;
/*!40000 ALTER TABLE `pesawat` ENABLE KEYS */;

-- membuang struktur untuk table testsibisnis.province
DROP TABLE IF EXISTS `province`;
CREATE TABLE IF NOT EXISTS `province` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Membuang data untuk tabel testsibisnis.province: ~4 rows (lebih kurang)
/*!40000 ALTER TABLE `province` DISABLE KEYS */;
INSERT INTO `province` (`id`, `name`) VALUES
	(1, 'DKI Jakarta');
INSERT INTO `province` (`id`, `name`) VALUES
	(2, 'Jawa Barat');
INSERT INTO `province` (`id`, `name`) VALUES
	(3, 'Jawa TImur');
INSERT INTO `province` (`id`, `name`) VALUES
	(4, 'Jawa Tengah');
/*!40000 ALTER TABLE `province` ENABLE KEYS */;

-- membuang struktur untuk table testsibisnis.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `province_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `zipcode` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `province_id` (`province_id`),
  KEY `city_id` (`city_id`),
  CONSTRAINT `FK_user_city` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_user_province` FOREIGN KEY (`province_id`) REFERENCES `province` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Membuang data untuk tabel testsibisnis.user: ~30 rows (lebih kurang)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(30, 'Ahmad', 'Fakhrurozi Syah', '085710568571', 'haifahrul@gmail.com', '1', '1992-01-26', 'WIKA Blok A10/37', 1, 2, 16340);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(31, 'Dwi', 'Satrio', '08125002877', 'dwisatrio@gmail.com', '1', '2017-10-19', 'Komp. Tamansari', 1, 5, 12345);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(32, 'Mabarun ', 'Ali', '081210002000', 'ali@gmail.com', '1', '2015-10-11', 'Bumi Pertiwi Indah', 1, 4, 14455);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(33, 'Tri', 'Avianto', '085810411041', 'tri@gmail.com', '0', '2017-05-24', 'Bumi Serpong Damai', 2, 6, 16778);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(34, 'Nur', 'Fatma', '0899227734762', 'pety@gmail.com', '0', '2017-05-24', 'Jl. Lenteng Agung', 1, 3, 87740);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(35, 'Ahmad', 'Fakhrurozi Syah', '085710568571', 'haifahrul@gmail.com', '0', '2017-05-24', 'adasdadaddasdas', 1, 1, 15350);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(36, 'Ahmad', 'Fakhrurozi Syah', '085710568571', 'haifahrul@gmail.com', '0', '2017-05-24', 'adasdadaddasdas', 1, 2, 16340);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(37, 'Ahmad', 'Fakhrurozi Syah', '085710568571', 'haifahrul@gmail.com', '0', '2017-05-24', 'adasdadaddasdas', 1, 1, 15350);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(38, 'Ahmad', 'Fakhrurozi Syah', '085710568571', 'haifahrul@gmail.com', '0', '2017-05-24', 'adasdadaddasdas', 1, 2, 16340);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(39, 'Ahmad', 'Fakhrurozi Syah', '02142456142', 'haifahrul@gmail.com', '0', '2017-05-24', 'adasdadaddasdas', 1, 1, 15350);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(40, 'Ahmad', 'Fakhrurozi Syah', '085710568571', 'haifahrul@gmail.com', '0', '2017-05-24', 'adasdadaddasdas', 1, 2, 16340);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(41, 'Ahmad', 'Fakhrurozi Syah', '085710568571', 'haifahrul@gmail.com', '1', '2017-05-24', 'adasdadaddasdas', 1, 1, 15350);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(42, 'Ahmad', 'Fakhrurozi Syah', '085710568571', 'haifahrul@gmail.com', '1', '2017-05-24', 'adasdadaddasdas', 1, 2, 16340);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(43, 'Ahmad', 'Fakhrurozi Syah', '085710568571', 'haifahrul@gmail.com', '1', '2017-05-24', 'adasdadaddasdas', 1, 1, 15350);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(44, 'Ahmad', 'Fakhrurozi Syah', '085710568571', 'haifahrul@gmail.com', '1', '2017-05-24', 'adasdadaddasdas', 1, 2, 16340);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(45, 'Ahmad', 'Fakhrurozi Syah', '085710568571', 'haifahrul@gmail.com', '1', '2017-05-24', 'adasdadaddasdas', 1, 1, 15350);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(46, 'Ahmad', 'Fakhrurozi Syah', '085710568571', 'haifahrul@gmail.com', '0', '2017-05-24', 'adasdadaddasdas', 1, 2, 16340);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(47, 'Ahmad', 'Fakhrurozi Syah', '085710568571', 'haifahrul@gmail.com', '0', '2017-05-24', 'adasdadaddasdas', 1, 1, 15350);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(48, 'Ahmad', 'Fakhrurozi Syah', '085710568571', 'haifahrul@gmail.com', '0', '2017-05-24', 'adasdadaddasdas', 1, 2, 16340);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(50, 'Ahmad', 'Fakhrurozi Syah', '085710568571', 'haifahrul@gmail.com', '0', '2017-05-24', 'adasdadaddasdas', 1, 2, 16340);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(51, 'Ahmad', 'Fakhrurozi Syah', '085710568571', 'haifahrul@gmail.com', '0', '2017-05-24', 'adasdadaddasdas', 1, 1, 15350);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(52, 'Ahmad', 'Fakhrurozi Syah', '085710568571', 'haifahrul@gmail.com', '0', '2017-05-24', 'adasdadaddasdas', 1, 2, 16340);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(53, 'Ahmad', 'Fakhrurozi Syah', '085710568571', 'haifahrul@gmail.com', '0', '2017-05-24', 'adasdadaddasdas', 1, 1, 15350);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(54, 'Ahmad', 'Fakhrurozi Syah', '085710568571', 'haifahrul@gmail.com', '0', '2017-05-24', 'adasdadaddasdas', 1, 2, 16340);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(55, 'Ahmad', 'Fakhrurozi Syah', '085710568571', 'haifahrul@gmail.com', '0', '2017-05-24', 'adasdadaddasdas', 1, 1, 15350);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(56, 'Ahmad', 'Fakhrurozi Syah', '085710568571', 'haifahrul@gmail.com', '0', '2017-05-24', 'adasdadaddasdas', 1, 2, 16340);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(57, 'Ahmad', 'Fakhrurozi Syah', '085710568571', 'haifahrul@gmail.com', '0', '2017-05-24', 'adasdadaddasdas', 1, 1, 15350);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(64, 'Ahmad', 'Fakhrurozi Syah', '085710568571', 'haifahrul@gmail.com', '0', '2017-05-24', 'adasdadaddasdas', 1, 2, 16340);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(65, 'Ahmad', 'Fakhrurozi Syah', '085710568571', 'haifahrul@gmail.com', '0', '2017-05-24', 'adasdadaddasdas', 1, 2, 16340);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `birthday`, `address`, `province_id`, `city_id`, `zipcode`) VALUES
	(66, 'Zihan', 'Fauziah', '0818765890765', 'zihan@gmail.com', '0', '2017-05-25', 'Kabupaten Bogor', 2, 8, 16350);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
