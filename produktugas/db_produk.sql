-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2020 pada 12.59
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_produk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `idKategori` int(11) NOT NULL,
  `nmKategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`idKategori`, `nmKategori`) VALUES
(19, 'Pakaian'),
(20, 'Tas'),
(21, 'Sepatu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `idPegawai` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `nmLengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`idPegawai`, `username`, `nmLengkap`, `email`, `password`, `level`) VALUES
(100, 'managers', 'pattrick', 'pattrick@gmail.com', '1234', 2),
(101, 'admins', 'abhaef', 'abhaef@gmail.com', '123', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `idProduk` int(11) NOT NULL,
  `nmProduk` varchar(50) NOT NULL,
  `idKategori` int(11) NOT NULL,
  `idSubKategori` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deskripsi` text NOT NULL,
  `idPegawai` int(11) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`idProduk`, `nmProduk`, `idKategori`, `idSubKategori`, `gambar`, `last_update`, `deskripsi`, `idPegawai`, `warna`, `ukuran`, `harga`) VALUES
(28, 'Arema FC', 16, 7, 'http://localhost/produk-tugas/assets/images/produk/arema1.png', '2019-10-15 05:19:15', 'https://www.aremafc.com/', 101, '1987', 'Milomir Šešlija', 145),
(29, 'Miyoshi Jeans', 19, 10, 'http://localhost:8080/produk-tugas/assets/images/produk/311.jpg', '2020-06-26 09:54:53', 'Lengkapi penampilan dengan pakaian yang berdesain stylish dan unik. Terbuat dari material berkualitas tinggi sehingga awet dan mudah dibersihkan.', 101, 'Biru, Merah, Hijau', 'S, M, L, XL ', 359910),
(30, 'Connexion', 19, 10, 'http://localhost:8080/produk-tugas/assets/images/produk/181.jpg', '2020-06-26 10:49:48', 'Lengkapi penampilan dengan pakaian yang berdesain stylish dan unik. Terbuat dari material berkualitas tinggi sehingga awet dan mudah dibersihkan.', 101, 'Biru, Merah, Kuning, Hitam', 'S, M, L, XL ', 164925),
(31, 'Nevada', 19, 10, 'http://localhost:8080/produk-tugas/assets/images/produk/211.jpg', '2020-06-26 10:50:12', 'Lengkapi penampilan dengan pakaian yang berdesain stylish dan unik. Terbuat dari material berkualitas tinggi sehingga awet dan mudah dibersihkan.', 101, 'Biru, Merah, Kuning, Hitam, Putih', 'S, M, L, XL, XXL', 174930),
(32, 'Peter Keiza', 21, 10, 'http://localhost:8080/produk-tugas/assets/images/produk/811.jpg', '2020-06-26 10:50:36', 'Lengkapi penampilan Anda dengan alas kaki yang berdesain stylish dan keren. Terbuat dari material berkualitas tinggi sehingga awet dan mudah dibersihkan.', 101, 'Biru, Merah, Kuning, Hitam', '36, 37, 38, 39, 40, 41', 269500),
(33, 'Disney', 21, 10, 'http://localhost:8080/produk-tugas/assets/images/produk/911.jpg', '2020-06-26 10:50:51', 'Lengkapi penampilan Anda dengan alas kaki yang berdesain stylish dan keren. Terbuat dari material berkualitas tinggi sehingga awet dan mudah dibersihkan.', 101, 'Biru, Merah, Kuning, Hitam', '36, 37, 38, 39, 40, 41', 159920),
(35, 'Plomino', 20, 10, 'http://localhost:8080/produk-tugas/assets/images/produk/711.jpg', '2020-06-26 10:51:31', 'Pilihan sempurna untuk aktivitas sehari-hari, tas dengan desain yang chic dan modis ini terbuat dari material kulit sintetis berkualitas.', 101, 'Merah', 'Satu ukuran = 20 cm x 12 cm x 25 cm', 764150),
(36, 'Cole', 19, 11, 'http://localhost:8080/produk-tugas/assets/images/produk/1311.jpg', '2020-06-26 10:51:49', 'Pilihan sempurna untuk aktivitas sehari-hari, celana dengan desain yang simple dan modis ini terbuat dari material yang berkualitas.', 101, 'Navy', '36, 37, 38, 39, 40, 41, 42', 159920),
(37, 'American Jeans', 19, 11, 'http://localhost:8080/produk-tugas/assets/images/produk/1111.jpg', '2020-06-26 10:52:13', 'Pilihan sempurna untuk aktivitas sehari-hari, jaket dengan desain yang modis ini terbuat dari material berkualitas.', 101, 'Hitam', 'S, M, L, XL ', 239980);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_subkategori`
--

CREATE TABLE `tbl_subkategori` (
  `idSubKategori` int(11) NOT NULL,
  `nmSubKategori` varchar(50) NOT NULL,
  `idKategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_subkategori`
--

INSERT INTO `tbl_subkategori` (`idSubKategori`, `nmSubKategori`, `idKategori`) VALUES
(10, 'Wanita', 0),
(11, 'Pria', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indeks untuk tabel `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`idPegawai`);

--
-- Indeks untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`idProduk`);

--
-- Indeks untuk tabel `tbl_subkategori`
--
ALTER TABLE `tbl_subkategori`
  ADD PRIMARY KEY (`idSubKategori`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `idKategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `idPegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `tbl_subkategori`
--
ALTER TABLE `tbl_subkategori`
  MODIFY `idSubKategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
