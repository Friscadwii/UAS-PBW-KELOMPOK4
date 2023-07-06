-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2022 pada 13.11
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `nama_lengkap`, `email`, `no`, `alamat`, `password`, `level`) VALUES
(1, 'admin', 'Rendy Enggar Bintang Pratama', 'rendienggarbintangpratama@gmail.com', '+6287717311829', 'Solo Raya', '21232f297a57a5a743894a0e4a801fc3', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(18, 'Pakaian Anak Anak'),
(19, 'Pakaian Perempuan'),
(20, 'Pakaian Laki Laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` int(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `desk` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `harga`, `status`, `foto`, `desk`) VALUES
(17, 20, 'Kaos Distro Polos', 66000, '1', 'produk1641952361.jfif', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS DISTRO SHOPPING.</li>\r\n	<li>ALL BRAND KAOS DISTRO</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(21, 20, 'Kaos Distro Lengington BROOKLYN', 87000, '1', 'produk1641952414.jfif', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS DISTRO SHOPPING.</li>\r\n	<li>ALL BRAND KAOS DISTRO</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(22, 20, 'Kaos Distro Son Goku', 68000, '1', 'produk1641952506.jfif', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS DISTRO SHOPPING.</li>\r\n	<li>ALL BRAND KAOS DISTRO</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(23, 20, 'Kaos Distro Blood', 59000, '1', 'produk1641952581.jpg', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS DISTRO SHOPPING.</li>\r\n	<li>ALL BRAND KAOS DISTRO</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(24, 20, 'Kaos ML Kadita', 70000, '1', 'produk1641952658.jpg', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS SHOPPING.</li>\r\n	<li>ALL BRAND KAOS&nbsp;</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(25, 20, 'Kaos ML Dyrroth', 70000, '1', 'produk1641952722.jpg', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS SHOPPING.</li>\r\n	<li>ALL BRAND KAOS</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(26, 20, 'Kaos Samurai Putih', 63000, '1', 'produk1641952788.jfif', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS SHOPPING.</li>\r\n	<li>ALL BRAND KAOS</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(27, 20, 'Kaos Distro You Tube', 80000, '1', 'produk1641952836.jpg', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS DISTRO SHOPPING.</li>\r\n	<li>ALL BRAND KAOS DISTRO</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(28, 20, 'Kaos Distro UPSTAIN WEAR', 7000, '1', 'produk1641952901.jfif', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS DISTRO SHOPPING.</li>\r\n	<li>ALL BRAND KAOS DISTRO</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(29, 18, 'Kaos anak laki laki', 45000, '1', 'produk1641953229.jfif', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS SHOPPING.</li>\r\n	<li>ALL BRAND KAOS</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(30, 18, 'Kaos Distro Batman', 55000, '1', 'produk1641953299.jfif', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS DISTRO SHOPPING.</li>\r\n	<li>ALL BRAND KAOS DISTRO</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(31, 18, 'Kaos Distro Quikaiver', 50000, '1', 'produk1641953402.jfif', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS DISTRO SHOPPING.</li>\r\n	<li>ALL BRAND KAOS DISTRO</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(32, 18, 'Kaos Distro UP', 56000, '1', 'produk1641953464.jpg', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS DISTRO SHOPPING.</li>\r\n	<li>ALL BRAND KAOS DISTRO</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(33, 18, 'Kaos Distro Anak Anak', 52000, '1', 'produk1641953516.jpg', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS DISTRO SHOPPING.</li>\r\n	<li>ALL BRAND KAOS DISTRO</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(34, 18, 'Kaos Distro Batman ORI', 60000, '1', 'produk1641953567.jfif', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS DISTRO SHOPPING.</li>\r\n	<li>ALL BRAND KAOS DISTRO</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(35, 18, 'Kaos Distro Anak', 50000, '1', 'produk1641953602.jfif', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS DISTRO SHOPPING.</li>\r\n	<li>ALL BRAND KAOS DISTRO</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(36, 18, 'Kaos Game Free Fire', 55000, '1', 'produk1641953675.jpeg', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS SHOPPING.</li>\r\n	<li>ALL BRAND KAOS</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(37, 18, 'Kaos Spiderman', 76000, '1', 'produk1641953827.jfif', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS SHOPPING.</li>\r\n	<li>ALL BRAND KAOS</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(38, 18, 'Kaos Distro ENJOY', 78000, '1', 'produk1641953881.jpg', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS DISTRO SHOPPING.</li>\r\n	<li>ALL BRAND KAOS DISTRO</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(39, 19, 'Good Night Tee', 70000, '1', 'produk1641953934.jfif', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS SHOPPING.</li>\r\n	<li>ALL BRAND KAOS</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(40, 19, 'Kaos Distro Three Second', 8000, '1', 'produk1641954006.jfif', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS DISTRO SHOPPING.</li>\r\n	<li>ALL BRAND KAOS DISTRO</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(41, 19, 'Kaos Distro Blood', 87000, '1', 'produk1641954042.jfif', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS DISTRO SHOPPING.</li>\r\n	<li>ALL BRAND KAOS DISTRO</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(42, 19, 'Three Second 3D', 79000, '1', 'produk1641954083.jfif', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS DISTRO SHOPPING.</li>\r\n	<li>ALL BRAND KAOS DISTRO</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(43, 19, 'Kaos Distro Pink', 89999, '1', 'produk1641954138.jpg', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS DISTRO SHOPPING.</li>\r\n	<li>ALL BRAND KAOS DISTRO</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(44, 19, 'Tshirt Tumbrl Tee Distro', 95000, '1', 'produk1641954199.jfif', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS DISTRO SHOPPING.</li>\r\n	<li>ALL BRAND KAOS DISTRO</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(45, 19, 'Kaos Distro Tumbrl Tee', 98000, '1', 'produk1641954260.jfif', '<p>Spesifikasi Kaos :</p>\r\n\r\n<ul>\r\n	<li>Bahan Katun kuat adem &amp; warna gak mudah luntur.</li>\r\n	<li>Sablon RubberNgl &amp; Plastisol elastis dan gak gambang retak retak atau gak gampang pecah.</li>\r\n	<li>Accesories lengkap - KUALITAS DISTRO SHOPPING.</li>\r\n	<li>ALL BRAND KAOS DISTRO</li>\r\n</ul>\r\n\r\n<p>SIZE</p>\r\n\r\n<ul>\r\n	<li>M L XL (Lokal)</li>\r\n	<li>M = 48cm x 67cm / Lingkar Dada = 96cm</li>\r\n	<li>L = 50cm x 69cm / Lingkar Dada = 100cm</li>\r\n	<li>XL = 52cm &times; 71cm / Lingkar Dada = 104cm</li>\r\n</ul>\r\n\r\n<p>Pemesanan dapat dilakukan dengan langsung chat kontak wa dan cek ketersediaan merk lewat fitur chat wa ok</p>\r\n'),
(46, 20, 'Baju sitro', 80000, '1', 'produk1641978268.jfif', 'zsdxfcgvhb');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
