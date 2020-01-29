-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 29 Jan 2020 pada 02.48
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `latihan`
--
CREATE DATABASE `latihan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `latihan`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `umur` int(50) NOT NULL,
  `jenis_kelamin` char(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_2` (`id`),
  UNIQUE KEY `id_7` (`id`),
  KEY `id` (`id`),
  KEY `id_3` (`id`),
  KEY `id_4` (`id`),
  KEY `id_5` (`id`),
  KEY `id_6` (`id`),
  KEY `id_8` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `jabatan`, `alamat`, `umur`, `jenis_kelamin`) VALUES
(37, 'sasa', 'Mahasiswa', 'Semarang', 21, 'wanita'),
(38, 'andi', 'Mahasiswa', 'demak', 20, 'pria'),
(39, 'bella', 'Mahasiswa', 'bandung', 19, 'pria');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
