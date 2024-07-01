-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 01 Tem 2024, 12:15:05
-- Sunucu sürümü: 8.3.0
-- PHP Sürümü: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ogrencı_sıstemı`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrencıler`
--

DROP TABLE IF EXISTS `ogrencıler`;
CREATE TABLE IF NOT EXISTS `ogrencıler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `isim` varchar(100) NOT NULL,
  `soyisim` varchar(100) NOT NULL,
  `yas` int NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `ogrencıler`
--

INSERT INTO `ogrencıler` (`id`, `isim`, `soyisim`, `yas`, `email`) VALUES
(2, 'ahmet', 'dursun', 20, 'ahmetdursun20@hotmail.com'),
(3, 'ali', 'demir', 22, 'alidemir22@hotmail.com'),
(4, 'can', 'yüksel', 18, 'canyksl18@hotmail.com'),
(5, 'halilcan', 'öztürk', 25, 'canoztrk25@hotmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
