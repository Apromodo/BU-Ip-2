-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 30 May 2020, 13:31:44
-- Sunucu sürümü: 5.7.24
-- PHP Sürümü: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `stok`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `stoktable`
--

CREATE TABLE `stoktable` (
  `no` int(11) NOT NULL,
  `isim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tur` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` double NOT NULL,
  `miktar` int(11) NOT NULL,
  `aciklama` tinytext COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `stoktable`
--

INSERT INTO `stoktable` (`no`, `isim`, `tur`, `fiyat`, `miktar`, `aciklama`) VALUES
(9, 'Bilim ve Teknik', 'Dergi', 5.5, 132, '    dergi aciklamasidir'),
(10, 'Atlas', 'Dergi', 15, 55, 'Atlas dergisi'),
(13, 'Chip', 'Dergi', 7.9, 99, 'Chip dergisi'),
(14, 'National Geographic (TR)', 'Dergi', 10, 10, 'Belgesel Dergisi'),
(17, 'Need For Speed Rivals ', 'Oyun', 200, 0, 'Yaris oyunu'),
(19, 'Fifa 14', 'Oyun', 199.99, 2, 'Spor'),
(24, 'Pro Evoluton Soccer 2014', 'Oyun', 189.99, 500, 'Pes'),
(35, 'Assassins Creed IV ', 'Oyun', 230.99, 53, 'Oyun'),
(42, 'Levlanin Hikayesi', 'Album', 55, 55, 'Film'),
(45, 'Doktor Faustus', 'Kitap', 22.5, 22, ' Kitap aciklamasi');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `stoktable`
--
ALTER TABLE `stoktable`
  ADD PRIMARY KEY (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
