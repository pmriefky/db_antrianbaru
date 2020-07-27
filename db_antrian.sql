-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jul 2020 pada 19.08
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_antrian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bookinglist`
--

CREATE TABLE `tb_bookinglist` (
  `id` int(11) NOT NULL,
  `kode_service` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_bookinglist`
--

INSERT INTO `tb_bookinglist` (`id`, `kode_service`, `email`, `date`) VALUES
(8, '1001', 'hafifi1202@gmail.com', '2020-07-26 21:15:00'),
(9, '1002', 'hidayatul@gmail.com', '2020-07-26 18:11:00'),
(10, '1003', 'pm@gmail.com', '2020-07-26 18:11:00'),
(11, '1003', 'zul@gmail.com', '2020-07-27 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_service`
--

CREATE TABLE `tb_service` (
  `kode` int(11) NOT NULL,
  `nama_service` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_service`
--

INSERT INTO `tb_service` (`kode`, `nama_service`, `keterangan`, `harga`) VALUES
(1001, 'Kanan Basic Hair Cut', 'Basic', 10000),
(1002, 'Kanan Enjoy Treatment', 'Basic', 13000),
(1003, 'Kanan Full Service', 'Basic', 15000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `no_hp`, `email`, `password`, `token`) VALUES
(6, 'Farhan', 'hafifi1202', '085264139999', 'hafifi1202@gmail.com', '7b8d7b98dbca7e1b3e3cdc7d82ce0ccf', 'XzX70apvffLvj0aGut68rfdsAwfqMf'),
(7, 'Fadil', 'hidayatul18', '085264139999', 'hidayatul@gmail.com', '7b8d7b98dbca7e1b3e3cdc7d82ce0ccf', 'zkzbusm0Fb503jmdxAwqn9sAaNfa2h'),
(8, 'PM Riefky', 'pmriefky7', '085264139999', 'pm@gmail.com', '7b8d7b98dbca7e1b3e3cdc7d82ce0ccf', 'ayY0L4y082F2rrQ52fR0tTef2l36Gv'),
(9, 'Zulmaidi', 'zule', '04544', 'zul@gmail.com', '7b8d7b98dbca7e1b3e3cdc7d82ce0ccf', 'k5300h3AC9xv3KkEJfx3a9VYh0Tg6y');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_bookinglist`
--
ALTER TABLE `tb_bookinglist`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_service`
--
ALTER TABLE `tb_service`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_bookinglist`
--
ALTER TABLE `tb_bookinglist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
