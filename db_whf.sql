-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 31, 2026 at 10:33 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_whf`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto_profil` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `nama_lengkap`, `username`, `email`, `password`, `foto_profil`, `created_at`, `updated_at`) VALUES
(1, 'Admin WHF', 'admin01', 'admin@whf.com', '$2y$10$gmhCWLbleqrZqqpOqYa8y.Xeu8WK.7C6NlkpcYmXHBko8fiKftJP.', NULL, '2026-01-31 10:25:10', '2026-01-31 10:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id_banner` int NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `urutan` int DEFAULT '0',
  `is_active` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `foto_cover` varchar(255) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `views` int DEFAULT '0',
  `is_published` tinyint(1) DEFAULT '1',
  `tanggal_publish` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking_trainer`
--

CREATE TABLE `booking_trainer` (
  `id_booking` int NOT NULL,
  `kode_booking` varchar(50) NOT NULL,
  `id_customer` int NOT NULL,
  `id_trainer` int NOT NULL,
  `id_paket` int DEFAULT NULL,
  `nama_trainee` varchar(100) NOT NULL,
  `email_trainee` varchar(100) NOT NULL,
  `no_hp_trainee` varchar(20) NOT NULL,
  `alamat_trainee` text,
  `tanggal_booking` date NOT NULL,
  `jumlah_sesi` int NOT NULL,
  `harga_per_sesi` decimal(10,2) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `diskon` decimal(10,2) DEFAULT '0.00',
  `total` decimal(10,2) NOT NULL,
  `status_booking` enum('menunggu_pembayaran','terkonfirmasi','berlangsung','selesai','dibatalkan') DEFAULT 'menunggu_pembayaran',
  `tanggal_booking_dibuat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_pembayaran` timestamp NULL DEFAULT NULL,
  `tanggal_selesai` timestamp NULL DEFAULT NULL,
  `catatan` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id_brand` int NOT NULL,
  `nama_brand` varchar(100) NOT NULL,
  `deskripsi` text,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int NOT NULL,
  `id_customer` int NOT NULL,
  `id_produk` int NOT NULL,
  `jumlah` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id_customer` int NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `foto_profil` varchar(255) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `kelurahan` varchar(50) DEFAULT NULL,
  `kode_pos` varchar(10) DEFAULT NULL,
  `alamat_lengkap` text,
  `detail_alamat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id_customer`, `nama_lengkap`, `username`, `email`, `password`, `no_hp`, `foto_profil`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `kode_pos`, `alamat_lengkap`, `detail_alamat`, `created_at`, `updated_at`) VALUES
(1, 'Budi Santoso', 'customer01', 'customer@whf.com', '$2y$10$oHL./7wnrz5yXrUMsR6GUetHsUnuXouhiaISOt2xPQ7paPkUWPFZa', '081234567890', NULL, 'DKI Jakarta', 'Jakarta Selatan', 'Kebayoran Baru', 'Senayan', '12190', 'Jl. Sudirman No. 123', 'Dekat dengan Mall Senayan City', '2026-01-31 10:25:10', '2026-01-31 10:26:12');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `id_detail` int NOT NULL,
  `id_pesanan` int NOT NULL,
  `id_produk` int NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `jumlah` int NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int NOT NULL,
  `pertanyaan` text NOT NULL,
  `jawaban` text NOT NULL,
  `urutan` int DEFAULT '0',
  `is_active` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_sesi`
--

CREATE TABLE `jadwal_sesi` (
  `id_jadwal` int NOT NULL,
  `id_booking` int NOT NULL,
  `sesi_ke` int NOT NULL,
  `tanggal_sesi` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `status_sesi` enum('dijadwalkan','selesai','dibatalkan') DEFAULT 'dijadwalkan',
  `catatan` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `parent_id` int DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `id_kurir` int NOT NULL,
  `nama_kurir` varchar(100) NOT NULL,
  `tipe_layanan` varchar(50) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `estimasi_hari` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `id_metode` int NOT NULL,
  `nama_metode` varchar(100) NOT NULL,
  `tipe` enum('transfer_bank','e-wallet','qris','cod') NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `nomor_rekening` varchar(50) DEFAULT NULL,
  `atas_nama` varchar(100) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paket_trainer`
--

CREATE TABLE `paket_trainer` (
  `id_paket` int NOT NULL,
  `id_trainer` int NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `jumlah_sesi` int NOT NULL,
  `harga_total` decimal(10,2) NOT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_booking`
--

CREATE TABLE `pembayaran_booking` (
  `id_pembayaran` int NOT NULL,
  `id_booking` int NOT NULL,
  `id_metode` int NOT NULL,
  `jumlah_bayar` decimal(10,2) NOT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `status_pembayaran` enum('menunggu','berhasil','gagal') DEFAULT 'menunggu',
  `tanggal_bayar` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `verified_at` timestamp NULL DEFAULT NULL,
  `verified_by` int DEFAULT NULL,
  `catatan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_pesanan`
--

CREATE TABLE `pembayaran_pesanan` (
  `id_pembayaran` int NOT NULL,
  `id_pesanan` int NOT NULL,
  `id_metode` int NOT NULL,
  `jumlah_bayar` decimal(10,2) NOT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `status_pembayaran` enum('menunggu','berhasil','gagal') DEFAULT 'menunggu',
  `tanggal_bayar` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `verified_at` timestamp NULL DEFAULT NULL,
  `verified_by` int DEFAULT NULL,
  `catatan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int NOT NULL,
  `kode_pesanan` varchar(50) NOT NULL,
  `id_customer` int NOT NULL,
  `id_kurir` int DEFAULT NULL,
  `id_promo` int DEFAULT NULL,
  `nama_penerima` varchar(100) NOT NULL,
  `no_hp_penerima` varchar(20) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `detail_alamat` varchar(255) DEFAULT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `diskon` decimal(10,2) DEFAULT '0.00',
  `ongkir` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `status_pesanan` enum('menunggu_pembayaran','diproses','dikirim','selesai','dibatalkan') DEFAULT 'menunggu_pembayaran',
  `resi_pengiriman` varchar(100) DEFAULT NULL,
  `estimasi_sampai` date DEFAULT NULL,
  `tanggal_pesanan` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_pembayaran` timestamp NULL DEFAULT NULL,
  `tanggal_dikirim` timestamp NULL DEFAULT NULL,
  `tanggal_selesai` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int NOT NULL,
  `id_kategori` int NOT NULL,
  `id_brand` int NOT NULL,
  `id_supplier` int DEFAULT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `deskripsi` text,
  `harga` decimal(10,2) NOT NULL,
  `stok` int DEFAULT '0',
  `berat` int DEFAULT NULL,
  `ukuran` varchar(50) DEFAULT NULL,
  `flavour` varchar(50) DEFAULT NULL,
  `foto_produk` varchar(255) DEFAULT NULL,
  `rating` decimal(2,1) DEFAULT '0.0',
  `jumlah_review` int DEFAULT '0',
  `is_active` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk_foto`
--

CREATE TABLE `produk_foto` (
  `id_foto` int NOT NULL,
  `id_produk` int NOT NULL,
  `url_foto` varchar(255) NOT NULL,
  `is_primary` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id_promo` int NOT NULL,
  `kode_promo` varchar(50) NOT NULL,
  `nama_promo` varchar(100) NOT NULL,
  `tipe_diskon` enum('persentase','nominal') NOT NULL,
  `nilai_diskon` decimal(10,2) NOT NULL,
  `minimal_pembelian` decimal(10,2) DEFAULT '0.00',
  `maksimal_diskon` decimal(10,2) DEFAULT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `kuota` int DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review_produk`
--

CREATE TABLE `review_produk` (
  `id_review` int NOT NULL,
  `id_produk` int NOT NULL,
  `id_customer` int NOT NULL,
  `id_pesanan` int NOT NULL,
  `rating` int NOT NULL,
  `komentar` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ;

-- --------------------------------------------------------

--
-- Table structure for table `review_trainer`
--

CREATE TABLE `review_trainer` (
  `id_review` int NOT NULL,
  `id_trainer` int NOT NULL,
  `id_customer` int NOT NULL,
  `id_booking` int NOT NULL,
  `rating` int NOT NULL,
  `komentar` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id_supplier` int NOT NULL,
  `nama_supplier` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `alamat` text,
  `foto_profil` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id_supplier`, `nama_supplier`, `username`, `email`, `password`, `no_hp`, `alamat`, `foto_profil`, `created_at`, `updated_at`) VALUES
(1, 'PT Nutrisi Sehat Indonesia', 'supplier01', 'supplier@whf.com', '$2y$10$/AAkRwYrzZY.zeOe1EX4Nu9UEXZpdH7Mwz7Xd.NQBHreuzt93S7tW', '081298765432', 'Jl. Raya Industri No. 45, Tangerang, Banten', NULL, '2026-01-31 10:25:10', '2026-01-31 10:26:33');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id_trainer` int NOT NULL,
  `nama_trainer` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `harga_per_sesi` decimal(10,2) NOT NULL,
  `pengalaman_tahun` int DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `foto_profil` varchar(255) DEFAULT NULL,
  `rating` decimal(2,1) DEFAULT '0.0',
  `jumlah_review` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id_trainer`, `nama_trainer`, `username`, `email`, `password`, `no_hp`, `jenis_kelamin`, `kategori`, `harga_per_sesi`, `pengalaman_tahun`, `lokasi`, `deskripsi`, `foto_profil`, `rating`, `jumlah_review`, `created_at`, `updated_at`) VALUES
(1, 'John Fitness', 'trainer01', 'trainer@whf.com', '$2y$10$JeWZS/vfCmY2HSnCMgUv3uqXOk.Ht20c5diddfxW.7vz7q3Ptl7Km', '081234509876', 'Laki-laki', 'Muscle Building', 250000.00, 5, 'Jakarta Selatan', 'Berpengalaman dalam muscle building dan strength training selama 5 tahun. Telah melatih lebih dari 100 klien dengan hasil yang memuaskan.', NULL, 4.8, 0, '2026-01-31 10:25:10', '2026-01-31 10:26:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `booking_trainer`
--
ALTER TABLE `booking_trainer`
  ADD PRIMARY KEY (`id_booking`),
  ADD UNIQUE KEY `kode_booking` (`kode_booking`),
  ADD KEY `id_paket` (`id_paket`),
  ADD KEY `idx_booking_customer` (`id_customer`),
  ADD KEY `idx_booking_trainer` (`id_trainer`),
  ADD KEY `idx_booking_status` (`status_booking`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD UNIQUE KEY `unique_cart` (`id_customer`,`id_produk`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id_customer`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_pesanan` (`id_pesanan`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `jadwal_sesi`
--
ALTER TABLE `jadwal_sesi`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_booking` (`id_booking`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id_kurir`);

--
-- Indexes for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`id_metode`);

--
-- Indexes for table `paket_trainer`
--
ALTER TABLE `paket_trainer`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `id_trainer` (`id_trainer`);

--
-- Indexes for table `pembayaran_booking`
--
ALTER TABLE `pembayaran_booking`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_booking` (`id_booking`),
  ADD KEY `id_metode` (`id_metode`);

--
-- Indexes for table `pembayaran_pesanan`
--
ALTER TABLE `pembayaran_pesanan`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_pesanan` (`id_pesanan`),
  ADD KEY `id_metode` (`id_metode`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD UNIQUE KEY `kode_pesanan` (`kode_pesanan`),
  ADD KEY `id_kurir` (`id_kurir`),
  ADD KEY `id_promo` (`id_promo`),
  ADD KEY `idx_pesanan_customer` (`id_customer`),
  ADD KEY `idx_pesanan_status` (`status_pesanan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_supplier` (`id_supplier`),
  ADD KEY `idx_produk_kategori` (`id_kategori`),
  ADD KEY `idx_produk_brand` (`id_brand`);

--
-- Indexes for table `produk_foto`
--
ALTER TABLE `produk_foto`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`),
  ADD UNIQUE KEY `kode_promo` (`kode_promo`);

--
-- Indexes for table `review_produk`
--
ALTER TABLE `review_produk`
  ADD PRIMARY KEY (`id_review`),
  ADD UNIQUE KEY `unique_review` (`id_produk`,`id_customer`,`id_pesanan`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_pesanan` (`id_pesanan`);

--
-- Indexes for table `review_trainer`
--
ALTER TABLE `review_trainer`
  ADD PRIMARY KEY (`id_review`),
  ADD UNIQUE KEY `unique_review` (`id_trainer`,`id_customer`,`id_booking`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_booking` (`id_booking`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id_supplier`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id_trainer`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id_banner` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_trainer`
--
ALTER TABLE `booking_trainer`
  MODIFY `id_booking` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id_brand` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id_customer` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  MODIFY `id_detail` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal_sesi`
--
ALTER TABLE `jadwal_sesi`
  MODIFY `id_jadwal` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kurir`
--
ALTER TABLE `kurir`
  MODIFY `id_kurir` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  MODIFY `id_metode` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paket_trainer`
--
ALTER TABLE `paket_trainer`
  MODIFY `id_paket` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran_booking`
--
ALTER TABLE `pembayaran_booking`
  MODIFY `id_pembayaran` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran_pesanan`
--
ALTER TABLE `pembayaran_pesanan`
  MODIFY `id_pembayaran` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk_foto`
--
ALTER TABLE `produk_foto`
  MODIFY `id_foto` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review_produk`
--
ALTER TABLE `review_produk`
  MODIFY `id_review` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review_trainer`
--
ALTER TABLE `review_trainer`
  MODIFY `id_review` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id_supplier` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id_trainer` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_trainer`
--
ALTER TABLE `booking_trainer`
  ADD CONSTRAINT `booking_trainer_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id_customer`) ON DELETE RESTRICT,
  ADD CONSTRAINT `booking_trainer_ibfk_2` FOREIGN KEY (`id_trainer`) REFERENCES `trainers` (`id_trainer`) ON DELETE RESTRICT,
  ADD CONSTRAINT `booking_trainer_ibfk_3` FOREIGN KEY (`id_paket`) REFERENCES `paket_trainer` (`id_paket`) ON DELETE SET NULL;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id_customer`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE;

--
-- Constraints for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD CONSTRAINT `detail_pesanan_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_pesanan_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE RESTRICT;

--
-- Constraints for table `jadwal_sesi`
--
ALTER TABLE `jadwal_sesi`
  ADD CONSTRAINT `jadwal_sesi_ibfk_1` FOREIGN KEY (`id_booking`) REFERENCES `booking_trainer` (`id_booking`) ON DELETE CASCADE;

--
-- Constraints for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD CONSTRAINT `kategori_produk_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `kategori_produk` (`id_kategori`) ON DELETE SET NULL;

--
-- Constraints for table `paket_trainer`
--
ALTER TABLE `paket_trainer`
  ADD CONSTRAINT `paket_trainer_ibfk_1` FOREIGN KEY (`id_trainer`) REFERENCES `trainers` (`id_trainer`) ON DELETE CASCADE;

--
-- Constraints for table `pembayaran_booking`
--
ALTER TABLE `pembayaran_booking`
  ADD CONSTRAINT `pembayaran_booking_ibfk_1` FOREIGN KEY (`id_booking`) REFERENCES `booking_trainer` (`id_booking`) ON DELETE CASCADE,
  ADD CONSTRAINT `pembayaran_booking_ibfk_2` FOREIGN KEY (`id_metode`) REFERENCES `metode_pembayaran` (`id_metode`) ON DELETE RESTRICT;

--
-- Constraints for table `pembayaran_pesanan`
--
ALTER TABLE `pembayaran_pesanan`
  ADD CONSTRAINT `pembayaran_pesanan_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`) ON DELETE CASCADE,
  ADD CONSTRAINT `pembayaran_pesanan_ibfk_2` FOREIGN KEY (`id_metode`) REFERENCES `metode_pembayaran` (`id_metode`) ON DELETE RESTRICT;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id_customer`) ON DELETE RESTRICT,
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`id_kurir`) REFERENCES `kurir` (`id_kurir`) ON DELETE SET NULL,
  ADD CONSTRAINT `pesanan_ibfk_3` FOREIGN KEY (`id_promo`) REFERENCES `promo` (`id_promo`) ON DELETE SET NULL;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_produk` (`id_kategori`) ON DELETE RESTRICT,
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`id_brand`) REFERENCES `brands` (`id_brand`) ON DELETE RESTRICT,
  ADD CONSTRAINT `produk_ibfk_3` FOREIGN KEY (`id_supplier`) REFERENCES `suppliers` (`id_supplier`) ON DELETE SET NULL;

--
-- Constraints for table `produk_foto`
--
ALTER TABLE `produk_foto`
  ADD CONSTRAINT `produk_foto_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE;

--
-- Constraints for table `review_produk`
--
ALTER TABLE `review_produk`
  ADD CONSTRAINT `review_produk_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE,
  ADD CONSTRAINT `review_produk_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id_customer`) ON DELETE CASCADE,
  ADD CONSTRAINT `review_produk_ibfk_3` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`) ON DELETE CASCADE;

--
-- Constraints for table `review_trainer`
--
ALTER TABLE `review_trainer`
  ADD CONSTRAINT `review_trainer_ibfk_1` FOREIGN KEY (`id_trainer`) REFERENCES `trainers` (`id_trainer`) ON DELETE CASCADE,
  ADD CONSTRAINT `review_trainer_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id_customer`) ON DELETE CASCADE,
  ADD CONSTRAINT `review_trainer_ibfk_3` FOREIGN KEY (`id_booking`) REFERENCES `booking_trainer` (`id_booking`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
