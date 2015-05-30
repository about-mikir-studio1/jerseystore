-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2015 pada 00.23
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `jersey`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `ussername` varchar(10) NOT NULL,
  `pass` int(10) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE IF NOT EXISTS `toko` (
  `idtoko` int(11) NOT NULL AUTO_INCREMENT,
  `namaToko` varchar(15) NOT NULL,
  `namaKlub` varchar(15) NOT NULL,
  `liga` varchar(10) NOT NULL,
  `ukuran` varchar(8) NOT NULL,
  `harga` int(12) NOT NULL,
  `stok` int(11) NOT NULL,
  `nohptoko` varchar(15) NOT NULL,
  `foto` varchar(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`idtoko`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`idtoko`, `namaToko`, `namaKlub`, `liga`, `ukuran`, `harga`, `stok`, `nohptoko`, `foto`) VALUES
(1, 'heri store', 'mancherter unit', 'inggris', 'M', 120000, 12, '', 'Screenshot_1.jpg'),
(2, 'heri store', 'mu', 'k', 'k', 120000, 12, '085643464', ''),
(3, 'sd', 'd', 'd', 'd', 0, 0, '085643464', '3.jpg'),
(4, 'qwq', 'q', 'q', 'Q', 0, 0, 'qw', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(15) NOT NULL,
  `alamat` varchar(15) NOT NULL,
  `kodepos` varchar(8) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `ussername` varchar(12) NOT NULL,
  `pass` varchar(11) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `nama`, `alamat`, `kodepos`, `nohp`, `ussername`, `pass`) VALUES
(1, 'Heri Purnama', 'solodiran', '4578', '085643464703', 'heri', 'heri');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
