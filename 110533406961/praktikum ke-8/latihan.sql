-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 27. Nopember 2013 jam 15:35
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` double NOT NULL,
  `kd_prodi` int(3) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `kd_prodi`, `nama`, `alamat`) VALUES
(110533406961, 34, 'Armanda Prastiyan Pratama', 'Palembang'),
(110533406962, 34, 'Eka Hafilah', 'Palembang'),
(110533206931, 32, 'Prastiyano Ronaldo', 'Malang'),
(110533206957, 32, 'Safira Eka', 'Malang'),
(110533406959, 33, 'Elsa Dwi', 'Situbondo'),
(110533406971, 33, 'Indri Widyarti', 'Lumajang'),
(110533406972, 33, 'Ifanatun .N', 'Malang'),
(110533406974, 33, 'Sigma Akhiria', 'Ponorogo'),
(110534406980, 34, 'Novi Adi', 'Batu'),
(110534406981, 34, 'Adhitya .N', 'Malang'),
(110535406990, 35, 'Nona Nugraha', 'Sulawesi'),
(110535406991, 35, 'Novita Dewi', 'Malang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa2`
--

CREATE TABLE IF NOT EXISTS `mahasiswa2` (
  `nim` double NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa2`
--

INSERT INTO `mahasiswa2` (`nim`, `nama`, `alamat`, `nama_prodi`) VALUES
(0, '', '', ''),
(110533406961, 'Armanda Prastiyan Pratama', 'Palembang','Pendidikan Teknik Informatika' ),
(110533406962, 'Eka Hafilah', 'Palembang','Pendidikan Teknik Informatika'),
(110533206931, 'Prastiyano Ronaldo', 'Malang','Teknik Psikologi'),
(110533206957, 'Safira Eka', 'Malang','Teknik Psikologi'),
(110533406959, 'Elsa Dwi', 'Situbondo', 'Pendidikan Teknik Informatika'),
(110533406971, 'Indri Widyarti', 'Lumajang', 'Pendidikan Teknik Informatika'),
(110533406972, 'Ifanatun .N', 'Malang', 'Pendidikan Teknik Informatika'),
(110533406974, 'Sigma Akhiria', 'Ponorogo', 'Pendidikan Teknik Informatika'),
(110534406980, 'Novi Adi', 'Batu', 'Pendidikan Teknik Elektro'),
(110534406981, 'Adhitya .N', 'Malang', 'Pendidikan Teknik Elektro'),
(110535406990, 'Nona Nugraha', 'Sulawesi', 'Pendidikan Teknik Sipil'),
(110535406991, 'Novita Dewi', 'Malang', 'Pendidikan Teknik Sipil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE IF NOT EXISTS `prodi` (
  `kd_prodi` int(3) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL,
  PRIMARY KEY (`kd_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`kd_prodi`, `nama_prodi`) VALUES
(32, 'Teknik Psikologi'),
(33, 'Pendidikan Teknik Informatika'),
(34, 'Pendidikan Teknik Elektro'),
(35, 'Pendidikan Teknik Sipil');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
