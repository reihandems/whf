-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 01, 2026 at 04:31 AM
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

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id_brand`, `nama_brand`, `deskripsi`, `logo`, `created_at`) VALUES
(1, 'Thorne', '', NULL, '2026-01-31 13:25:50'),
(2, 'BulkSupplements', '', NULL, '2026-01-31 13:26:07'),
(3, 'MyProtein', '', NULL, '2026-01-31 13:28:37'),
(4, 'Transparent Labs', '', NULL, '2026-01-31 13:29:25'),
(5, 'NutraBio', '', NULL, '2026-01-31 13:29:46'),
(6, 'BXN Nutrition', '', NULL, '2026-01-31 13:29:54'),
(7, 'Evolene', '', NULL, '2026-01-31 13:30:07'),
(8, 'Muscle First', '', NULL, '2026-01-31 13:30:18'),
(9, 'BPI Sports', '', NULL, '2026-01-31 13:30:25'),
(10, 'Optimum Nutrition (ON)', '', NULL, '2026-01-31 13:30:35'),
(11, 'Ultimate Nutrition', '', NULL, '2026-01-31 13:33:25'),
(12, 'TransnasionalPome', '', NULL, '2026-01-31 13:33:35'),
(13, 'Levrone Global', '', NULL, '2026-01-31 13:33:43'),
(14, 'Provus', '', NULL, '2026-01-31 13:33:51'),
(15, 'Sports Research', '', NULL, '2026-01-31 13:35:38'),
(16, 'Trec Nutrition', '', NULL, '2026-01-31 13:36:41'),
(17, 'Magic Elements', '', NULL, '2026-01-31 13:36:53'),
(18, 'Forest Vitamin', '', NULL, '2026-01-31 13:37:02'),
(19, 'Everbuild', '', NULL, '2026-01-31 13:37:09'),
(20, 'Evolite', '', NULL, '2026-01-31 13:37:16'),
(21, 'PENCO', '', NULL, '2026-01-31 13:37:26'),
(22, 'Olimp Sport Nutrition', '', NULL, '2026-01-31 13:37:33'),
(23, 'OstroVit', '', NULL, '2026-01-31 13:37:41'),
(24, 'BioTechUSA', '', NULL, '2026-01-31 13:37:48'),
(25, 'Proteition', '', NULL, '2026-01-31 13:37:59'),
(26, 'Alli', '', NULL, '2026-01-31 13:39:26'),
(27, 'Contrave', '', NULL, '2026-01-31 13:39:32'),
(28, 'Phendimetrazine', '', NULL, '2026-01-31 13:39:47'),
(29, 'Qsymia', '', NULL, '2026-01-31 13:39:54'),
(30, 'Legion', '', NULL, '2026-01-31 13:40:06'),
(31, 'Jacked Factory', '', NULL, '2026-01-31 13:40:15'),
(32, 'Capsiplex', '', NULL, '2026-01-31 13:40:22'),
(33, 'PhenQ', '', NULL, '2026-01-31 13:40:28'),
(34, 'Vivid Health Nutrition', '', NULL, '2026-01-31 13:42:06'),
(35, 'Trexgenics', '', NULL, '2026-01-31 13:42:12'),
(36, 'Carlyle', '', NULL, '2026-01-31 13:42:19'),
(37, 'Arazo Nutrition', '', NULL, '2026-01-31 13:42:27'),
(38, 'Bliss Welness', '', NULL, '2026-01-31 13:42:35'),
(39, 'StarchLite', '', NULL, '2026-01-31 13:42:48'),
(40, 'Irwin Naturals', '', NULL, '2026-01-31 13:42:55'),
(41, 'DrFormulas', '', NULL, '2026-01-31 13:43:02'),
(42, 'Schwartz Bioresearch', '', NULL, '2026-01-31 13:43:11'),
(43, 'Double Dragon Organics', '', NULL, '2026-01-31 13:43:18'),
(44, 'HFL', '', NULL, '2026-01-31 13:44:19'),
(45, 'Superset Nutrition', '', NULL, '2026-01-31 13:44:29'),
(46, 'WRP', '', NULL, '2026-01-31 13:44:38'),
(47, 'Norvine USA', '', NULL, '2026-01-31 13:44:45'),
(48, 'Universal Nutrition', '', NULL, '2026-01-31 13:44:52'),
(49, 'Belance', '', NULL, '2026-01-31 13:45:06'),
(50, 'Genetica', '', NULL, '2026-01-31 13:45:13'),
(51, 'Kaged', '', NULL, '2026-01-31 13:45:51'),
(52, 'Cellucor', '', NULL, '2026-01-31 13:45:58'),
(53, 'LeanBean', '', NULL, '2026-01-31 13:46:18'),
(54, 'Instant Knockout', '', NULL, '2026-01-31 13:46:25'),
(55, 'PrimeShred', '', NULL, '2026-01-31 13:46:31'),
(56, 'MuscleTech', '', NULL, '2026-01-31 13:46:38'),
(57, 'PhenGold', '', NULL, '2026-01-31 13:46:52'),
(58, 'FITlife', '', NULL, '2026-01-31 13:48:23'),
(59, 'MHP', '', NULL, '2026-01-31 13:48:57'),
(60, 'NOW Sports', '', NULL, '2026-01-31 13:49:11'),
(62, 'Dymatize', '', NULL, '2026-01-31 13:49:55'),
(63, 'Isopure', '', NULL, '2026-01-31 13:50:29'),
(64, 'MusclePharm', '', NULL, '2026-01-31 13:50:35'),
(65, 'Naked Nutrition', '', NULL, '2026-01-31 13:50:43'),
(66, 'L-Men', '', NULL, '2026-01-31 13:51:18'),
(67, 'Fulfil', '', NULL, '2026-01-31 13:51:24'),
(68, 'Soyjoy', '', NULL, '2026-01-31 13:51:31'),
(69, 'Fitbar', '', NULL, '2026-01-31 13:51:37'),
(70, 'Grenade', '', NULL, '2026-01-31 13:51:43'),
(71, 'RXBar', '', NULL, '2026-01-31 13:51:50'),
(72, 'Strive', '', NULL, '2026-01-31 13:51:58'),
(73, 'Kate’s Real Food', '', NULL, '2026-01-31 13:52:06'),
(74, 'Covita', '', NULL, '2026-01-31 13:52:13'),
(75, 'Luna Bar', '', NULL, '2026-01-31 13:52:20'),
(76, 'Greenfields', '', NULL, '2026-01-31 13:52:36'),
(77, 'LALA', '', NULL, '2026-01-31 13:52:51'),
(78, 'Tropicana Slim', '', NULL, '2026-01-31 13:53:03'),
(79, 'BSN', '', NULL, '2026-01-31 13:53:35'),
(80, 'Evlution Nutrition', '', NULL, '2026-01-31 13:54:17'),
(81, 'Garden of Life', '', NULL, '2026-01-31 13:54:24'),
(82, 'Jym Supplement Science', '', NULL, '2026-01-31 13:54:32'),
(83, 'Beyond Raw', '', NULL, '2026-01-31 13:55:24'),
(84, 'Bucked Up', '', NULL, '2026-01-31 13:55:31'),
(85, 'Insane Labz', '', NULL, '2026-01-31 13:55:37'),
(86, 'Ghost', '', NULL, '2026-01-31 13:55:45'),
(87, 'Redcon1', '', NULL, '2026-01-31 13:55:59'),
(88, 'Dark Labs', '', NULL, '2026-01-31 13:56:38'),
(89, 'ASC Supplements', '', NULL, '2026-01-31 13:56:45'),
(90, 'Huge Supplements', '', NULL, '2026-01-31 13:56:53'),
(91, 'Weider', '', NULL, '2026-01-31 13:57:16'),
(92, 'Alpha Lion', '', NULL, '2026-01-31 13:57:24'),
(93, 'Apollon Nutrition', '', NULL, '2026-01-31 13:57:31'),
(94, 'Olimp', '', NULL, '2026-01-31 13:58:23'),
(95, 'Time 4 Nutrition', '', NULL, '2026-01-31 13:58:31'),
(96, 'Elit Nutrition', '', NULL, '2026-01-31 13:58:37'),
(97, 'Nutramino', '', NULL, '2026-01-31 13:58:44'),
(98, 'PurePower', '', NULL, '2026-01-31 13:58:52'),
(99, 'Descanti', '', NULL, '2026-01-31 13:58:58'),
(100, 'Viking Power', '', NULL, '2026-01-31 13:59:06'),
(101, 'Nanosupps', '', NULL, '2026-01-31 13:59:14'),
(102, 'QNT', '', NULL, '2026-01-31 13:59:22'),
(103, 'Ryse', '', NULL, '2026-01-31 14:00:18'),
(104, 'Nutricost', '', NULL, '2026-01-31 14:00:26'),
(105, 'Mutant', '', NULL, '2026-01-31 14:00:36'),
(106, 'Tailwind Nutrition', '', NULL, '2026-01-31 14:01:46'),
(107, '226ERS', '', NULL, '2026-01-31 14:02:13'),
(108, 'Kinetica Sports', '', NULL, '2026-01-31 14:02:21'),
(109, 'Scitec Nutrition', '', NULL, '2026-01-31 14:02:29'),
(110, 'NOW Foods', '', NULL, '2026-01-31 14:02:43'),
(111, 'GAT Sport', '', NULL, '2026-01-31 14:02:51'),
(112, 'Olimp Nutrition', '', NULL, '2026-01-31 14:02:58'),
(113, 'Pome CREA+', '', NULL, '2026-01-31 15:58:01');

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
  `sub_kategori` varchar(100) DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori`, `nama_kategori`, `sub_kategori`, `parent_id`, `deskripsi`, `created_at`) VALUES
(1, 'Creatine', 'Advance Stack', NULL, '', '2026-01-31 14:13:30'),
(2, 'Creatine', 'Monohydrate', NULL, '', '2026-01-31 14:14:00'),
(3, 'Creatine', 'Tri Creatine', NULL, '', '2026-01-31 14:14:29'),
(4, 'Fat Burner', 'Appetite', NULL, '', '2026-01-31 14:15:11'),
(5, 'Fat Burner', 'Carb Blocker', NULL, '', '2026-01-31 14:15:20'),
(6, 'Fat Burner', 'Fat Blocker', NULL, '', '2026-01-31 14:15:36'),
(7, 'Fat Burner', 'Thermogenic', NULL, '', '2026-01-31 14:15:48'),
(8, 'Protein', 'Isolate', NULL, '', '2026-01-31 14:16:16'),
(9, 'Protein', 'Protein Bars', NULL, '', '2026-01-31 14:16:28'),
(10, 'Protein', 'Real Food', NULL, '', '2026-01-31 14:16:39'),
(11, 'Protein', 'Whey', NULL, '', '2026-01-31 14:16:49'),
(12, 'Pre-Workout', 'Focus', NULL, '', '2026-01-31 14:17:02'),
(13, 'Pre-Workout', 'Pump', NULL, '', '2026-01-31 14:17:12'),
(14, 'Pre-Workout', 'Shots', NULL, '', '2026-01-31 14:17:21'),
(15, 'Pre-Workout', 'Straight', NULL, '', '2026-01-31 14:17:33'),
(16, 'Recovery', 'Recovery', NULL, '', '2026-01-31 14:17:56');

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

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `id_brand`, `id_supplier`, `nama_produk`, `deskripsi`, `harga`, `stok`, `berat`, `ukuran`, `flavour`, `foto_produk`, `rating`, `jumlah_review`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 9, 3, 'Micronized Creatine', 'Micronized creatine murni yang dirancang untuk meningkatkan kekuatan, pertumbuhan otot, dan pemulihan. Produk ini mudah larut dan membantu meningkatkan performa atletik secara keseluruhan.', 250000.00, 20, 600, NULL, NULL, '1769871629_fc1629c26ad0bfb87bf7.png', 0.0, 0, 1, '2026-01-31 08:00:29', '2026-01-31 08:00:29'),
(2, 1, 7, 2, 'Crevolene', 'Suplemen creatine monohydrate lokal dengan standar Creapure yang memiliki tingkat kemurnian 99,9%. Efektif untuk meledakkan tenaga dan menebalkan massa otot.', 385000.00, 20, 330, NULL, NULL, '1769872870_9b9929d60a3592b9d35e.png', 0.0, 0, 1, '2026-01-31 08:21:10', '2026-01-31 08:21:10'),
(3, 1, 8, 4, 'Pro Creatine', 'Suplemen kreatin murni yang diformulasikan untuk menambah tenaga, ketahanan (durabilitas) saat latihan, serta memperjelas definisi otot.', 180000.00, 20, 360, NULL, NULL, '1769873017_7413d6f347e587e98de3.png', 0.0, 0, 1, '2026-01-31 08:23:37', '2026-01-31 08:23:37'),
(4, 1, 1, 8, 'Creatine Monohydrate', 'Kreatin monohidrat kualitas tinggi yang sudah tersertifikasi NSF Certified for Sport, memastikan kemurnian dan keamanan dari zat terlarang.', 550000.00, 20, 250, NULL, NULL, '1769873157_6405771c077cb3b1d9cb.png', 0.0, 0, 1, '2026-01-31 08:25:57', '2026-01-31 08:25:57'),
(5, 1, 10, 3, 'Amino Energy', 'Kombinasi asam amino esensial dan kafein dari sumber alami (teh hijau dan kopi hijau) untuk meningkatkan energi, fokus, serta membantu pemulihan otot.', 379000.00, 20, 270, NULL, NULL, '1769873247_e793a3f99acd980988d3.png', 0.0, 0, 1, '2026-01-31 08:27:27', '2026-01-31 08:27:27'),
(6, 1, 6, 6, 'Xtreme Creatine', 'Mengandung Creatine Nitrate dan Creatine Magna Powder untuk penyerapan yang lebih cepat dan membantu pemulihan otot pasca cedera.', 300.00, 20, 300, NULL, NULL, '1769873312_2a9ced27156b378baa5b.png', 0.0, 0, 1, '2026-01-31 08:28:32', '2026-01-31 08:28:32'),
(7, 1, 2, 5, 'Creatine Monohydrate', 'Kreatin murni tanpa tambahan bahan lain (unflavored), sangat ekonomis dan cocok bagi yang menginginkan suplemen dasar tanpa campuran perasa atau pemanis.', 250000.00, 20, 500, NULL, NULL, '1769873385_7eb24201af4c6c5d05d2.png', 0.0, 0, 1, '2026-01-31 08:29:45', '2026-01-31 08:29:45'),
(8, 1, 5, 5, 'Extreme Mass', 'Menggunakan PharmaPure™ Creatine yang diuji HPLC untuk memastikan kemurnian maksimal guna mendukung energi otot dan kekuatan.', 400000.00, 20, 500, NULL, NULL, '1769873497_37697530b57629448a74.png', 0.0, 0, 1, '2026-01-31 08:31:37', '2026-01-31 08:31:37'),
(9, 1, 4, 5, 'Creatine HMB', 'Formula canggih yang menggabungkan Creatine Monohydrate dengan HMB untuk meningkatkan kekuatan sekaligus mencegah penyusutan otot (muscle breakdown).', 750000.00, 20, 210, NULL, NULL, '1769873613_0a2fe24005def1e789fa.png', 0.0, 0, 1, '2026-01-31 08:33:33', '2026-01-31 08:33:33'),
(10, 1, 3, 5, 'Impact Creatine', 'Salah satu suplemen kreatin monohidrat yang paling populer di dunia, terbukti secara ilmiah mampu meningkatkan performa fisik dalam latihan intensitas tinggi.', 300000.00, 20, 250, NULL, NULL, '1769873673_df2591dd77e800479462.png', 0.0, 0, 1, '2026-01-31 08:34:33', '2026-01-31 08:34:33'),
(11, 2, 11, 5, 'Micronized Creatine Monohydrate', 'Kreatin monohidrat murni yang diproses secara micronized untuk penyerapan yang lebih baik. Berfungsi untuk meningkatkan ukuran sel otot, memberikan tenaga eksplosif, dan meningkatkan stamina saat latihan intensitas tinggi.', 225000.00, 20, 300, NULL, NULL, '1769874993_9c945a80366c6fd37115.png', 0.0, 0, 1, '2026-01-31 08:56:33', '2026-01-31 08:56:33'),
(12, 2, 113, 5, 'Gummy', 'Suplemen kreatin unik dalam bentuk gummy yang mengandung Creapure (kreatin monohidrat kualitas tinggi). Diperkaya dengan Vitamin B12, D3, dan Zinc untuk mendukung performa atletik dan mempercepat pemulihan.', 159000.00, 20, 264, NULL, NULL, '1769875159_d817bbb7662e937813c8.png', 0.0, 0, 1, '2026-01-31 08:59:19', '2026-01-31 08:59:19'),
(13, 2, 13, 8, 'Gold Creatine', 'Bagian dari seri Gold milik binaragawan legendaris Kevin Levrone. Produk ini menyediakan kreatin monohidrat murni tanpa rasa (unflavored) yang dirancang untuk mendukung peningkatan kekuatan dan massa otot tanpa lemak.', 265000.00, 20, 300, NULL, NULL, '1769875293_66dee50f6090eb0e7daa.png', 0.0, 0, 1, '2026-01-31 09:01:33', '2026-01-31 09:01:33'),
(14, 2, 14, 4, 'Whey Matrix', 'Suplemen kreatin lokal berkualitas pharmaceutical grade yang sudah tersertifikasi BPOM. Membantu meningkatkan hidrasi sel otot dan mendukung sintesis protein tubuh.', 175000.00, 20, 300, NULL, NULL, '1769875383_ffb6623634b664173f88.png', 0.0, 0, 1, '2026-01-31 09:03:03', '2026-01-31 09:03:03'),
(15, 2, 2, 6, 'Bulk Protein', 'Kreatin monohidrat murni tanpa bahan tambahan (clean & pure). Sangat populer karena harganya yang ekonomis dan kualitasnya yang teruji untuk membantu performa olahraga.', 261000.00, 20, NULL, NULL, NULL, '1769875552_bbae743b8b61970c5774.png', 0.0, 0, 1, '2026-01-31 09:04:35', '2026-01-31 09:05:52'),
(16, 2, 10, 3, 'Micronized Creatine Powder', 'Salah satu standar emas suplemen kreatin dunia yang menggunakan kreatin micronized agar mudah larut dalam air atau shake protein. Sangat efektif untuk mendukung kekuatan dan pemulihan otot pasca latihan.', 450000.00, 20, 360, NULL, NULL, '1769875524_17169c5298a56c31a6f6.png', 0.0, 0, 1, '2026-01-31 09:05:24', '2026-01-31 09:05:24'),
(17, 2, 7, 2, 'Crevolene', 'Produk kreatin monohidrat lokal pertama di Indonesia yang menggunakan bahan baku Creapure dari Jerman. Didesain khusus untuk membantu menebalkan massa otot dan meningkatkan ATP sebagai sumber energi.', 115000.00, 20, 165, NULL, NULL, '1769875624_ed3dda6804b828da7735.png', 0.0, 0, 1, '2026-01-31 09:07:04', '2026-01-31 09:07:04'),
(18, 3, 16, 5, 'CM3', 'Suplemen Tri-Creatine Malate yang dirancang untuk meningkatkan kekuatan dan daya tahan otot tanpa menyebabkan retensi air yang berlebihan. Produk ini sangat populer di kalangan binaragawan karena stabilitas dan kelarutannya yang tinggi.', 450000.00, 20, 250, NULL, NULL, '1769875976_bf39f9228c7a951055a9.png', 0.0, 0, 1, '2026-01-31 09:12:56', '2026-01-31 09:12:56'),
(19, 3, 22, 5, 'Olimp TCM', 'Menyediakan dosis tinggi Tri-Creatine Malate dalam bentuk kapsul \"Mega Caps\" yang praktis. Membantu regenerasi energi ATP lebih cepat untuk sesi latihan yang lebih intens.', 350000.00, 20, 120, NULL, NULL, '1769876071_d3435d98d5a5a0731686.png', 0.0, 0, 1, '2026-01-31 09:14:31', '2026-01-31 09:14:31'),
(20, 3, 23, 5, 'Tri-Creatine Malate', 'Dikenal karena kemurniannya dan tersedia dalam berbagai rasa (True Taste). Produk ini menggabungkan kreatin dengan asam malat untuk meningkatkan bioavailabilitas dan penyerapan oleh otot.', 250000.00, 20, 300, NULL, NULL, '1769876144_0bacb532300de494257f.png', 0.0, 0, 1, '2026-01-31 09:15:44', '2026-01-31 09:15:44'),
(21, 3, 24, 5, 'Tri-Creatine Malate', 'Formula powder tanpa rasa yang mudah dicampur dengan minuman lain. Fokus pada peningkatan performa fisik dalam latihan singkat dengan intensitas tinggi.', 450000.00, 20, 300, NULL, NULL, '1769876268_3614c28efe6c4ac182e3.png', 0.0, 0, 1, '2026-01-31 09:17:48', '2026-01-31 09:17:48'),
(22, 3, 19, 2, 'Tri-Creatine Malate 3000', 'Produk ini dirancang untuk memaksimalkan performa atletik dengan meningkatkan kekuatan ledak dan mempercepat pemulihan antar set latihan.', 250000.00, 20, 200, NULL, NULL, '1769876308_5c42a16739e878b5e7c4.png', 0.0, 0, 1, '2026-01-31 09:18:28', '2026-01-31 09:18:28'),
(23, 3, 20, 2, 'Tri-Creatine Malate', 'Sangat cocok untuk atlet kekuatan dan daya tahan yang ingin menghindari perut kembung (bloating) yang sering dikaitkan dengan kreatin biasa.', 350000.00, 20, 300, NULL, NULL, '1769876372_ec6809aee71b2cdb2418.png', 0.0, 0, 1, '2026-01-31 09:19:32', '2026-01-31 09:19:32'),
(24, 3, 25, 5, 'Elite Tri-Creatine', 'Campuran mutakhir yang diformulasikan untuk penyerapan maksimum guna mendukung pertumbuhan otot yang berkelanjutan.', 380000.00, 20, NULL, NULL, NULL, '1769876432_f6ebdb891f6897eb05d2.png', 0.0, 0, 1, '2026-01-31 09:20:32', '2026-01-31 09:20:51'),
(25, 4, 14, 8, 'Oxyburn', 'Suplemen natural thermogenic fat burner yang dirancang untuk meningkatkan metabolisme, membakar lemak, dan menambah energi selama proses penurunan berat badan. Produk ini sudah memiliki izin BPOM.', 120000.00, 20, 100, NULL, NULL, '1769876688_a031517f01f86ea82c98.png', 0.0, 0, 1, '2026-01-31 09:24:48', '2026-01-31 09:24:48'),
(26, 4, 26, 5, 'Orlistat (Weight Loss Aid)', 'Obat pembantu penurunan berat badan yang bekerja dengan cara menghambat penyerapan lemak dari makanan di saluran pencernaan. Lemak yang tidak terserap kemudian dikeluarkan melalui feses.', 1436000.00, 20, 120, NULL, NULL, '1769876748_8f03f3533093f5c2bae4.png', 0.0, 0, 1, '2026-01-31 09:25:48', '2026-01-31 09:25:48'),
(27, 4, 4, 5, 'Recomp (Body Recomp)', 'Suplemen fat burner non-stimulan (atau rendah stimulan) yang berfokus pada perubahan komposisi tubuh (mengurangi lemak sekaligus menjaga massa otot) dengan bahan-bahan yang teruji secara klinis.', 1450000.00, 10, NULL, NULL, NULL, '1769876813_bca3658981a5b899d311.png', 0.0, 0, 1, '2026-01-31 09:26:37', '2026-01-31 09:26:53'),
(28, 4, 30, 8, 'Phoenix (Fat Burner)', 'Pembakar lemak alami yang tersedia dalam varian dengan kafein atau tanpa kafein (stim-free). Dirancang untuk meningkatkan laju metabolisme basal dan mengurangi rasa lapar tanpa menyebabkan efek gelisah (jitters).', 1300000.00, 10, 100, NULL, NULL, '1769876902_54485c2eb150b1e8f24b.png', 0.0, 0, 1, '2026-01-31 09:28:22', '2026-01-31 09:28:22'),
(29, 4, 31, 4, 'Burn-XT', 'Pembakar lemak termogenik populer yang mengandung ekstrak teh hijau, acetyl L-carnitine, dan ekstrak cabai rawit (cayenne pepper) untuk meningkatkan pembakaran kalori dan menekan nafsu makan.', 846000.00, 20, 90, NULL, NULL, '1769876961_3456294c688bdd3566b8.png', 0.0, 0, 1, '2026-01-31 09:29:21', '2026-01-31 09:29:21'),
(30, 4, 33, 4, 'PhenQ', 'Pil diet \"5-in-1\" yang berfungsi sebagai pembakar lemak, penahan nafsu makan, penghambat produksi lemak, serta penambah energi dan suasana hati (mood booster).', 500000.00, 10, 100, NULL, NULL, '1769877026_c1a870851f418e21d64f.png', 0.0, 0, 1, '2026-01-31 09:30:27', '2026-01-31 09:30:27'),
(31, 5, 34, 5, 'Carb Block Ultra', 'Suplemen starch blocker yang mengandung ekstrak white kidney bean untuk membantu menghambat penyerapan karbohidrat dan pati, serta membantu metabolisme lemak.', 545000.00, 10, 100, NULL, NULL, '1769877620_1ad992c7e6644f6d6510.png', 0.0, 0, 1, '2026-01-31 09:40:20', '2026-01-31 09:40:20'),
(32, 5, 36, 5, 'White Kidney Bean Carb Blocker', 'Formula ekstra kuat, non-GMO, dan bebas gluten yang dirancang untuk mendukung program pengelolaan berat badan dengan cara memblokir penyerapan karbohidrat.', 545000.00, 10, 1000, NULL, NULL, '1769877703_ae97ffafb852b69c4872.png', 0.0, 0, 1, '2026-01-31 09:41:43', '2026-01-31 09:41:43'),
(33, 5, 37, 5, 'White Kidney Bean Extract', 'Penghambat karbohidrat murni yang bekerja dengan mencegat penyerapan pati dan lemak, mencegahnya pecah menjadi gula dan lemak di dalam tubuh.', 625000.00, 20, 100, NULL, NULL, '1769877835_8d2f7a6c65442c86ea60.png', 0.0, 0, 1, '2026-01-31 09:43:55', '2026-01-31 09:43:55'),
(34, 5, 40, 5, 'Maximum Strength 3-in-1 Carb Blocker', 'Formula \"3-in-1\" yang bekerja menetralisir enzim karbohidrat, mendukung pencernaan dengan enzim lipase dan protease, serta membantu metabolisme melalui kandungan chromium dan kayu manis.', 312000.00, 10, 100, NULL, NULL, '1769877877_a3152317e84dc5a2af76.png', 0.0, 0, 1, '2026-01-31 09:44:37', '2026-01-31 09:44:37'),
(35, 5, 41, 8, 'White Kidney Bean Extract', 'Membantu mengontrol nafsu makan dan menghambat enzim pencernaan karbohidrat sehingga kelebihan karbohidrat tidak diserap tubuh.', 312000.00, 20, 100, NULL, NULL, '1769877925_f4a56e057f4a49f86213.png', 0.0, 0, 1, '2026-01-31 09:45:25', '2026-01-31 09:45:25'),
(36, 5, 38, 8, 'Carb Controller (Carb Bliss)', 'Produk berbasis tanaman yang menggabungkan ekstrak white kidney bean dan chromium untuk mengatur kadar gula darah dan mengurangi dampak kalori dari pati.', 1400000.00, 10, 100, NULL, NULL, '1769878007_bfd40e92c0600af12311.png', 0.0, 0, 1, '2026-01-31 09:46:47', '2026-01-31 09:46:47');

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
(2, 'PT Evolene Nutrition Indonesia', 'evolene_supply', 'supplier@evolene.co.id', '$2y$10$lzJJj2Hy9rYLWXUSp3EoWuYEKG0szbhlU7jAW4xHXsySWsE449WXC', '021-5551235', 'Jl. Sudirman No. 125, Jakarta Pusat, DKI Jakarta 10220', 'evolene_logo.png', '2026-01-31 14:24:44', '2026-01-31 14:25:24'),
(3, 'PT Optimum Nutrition Asia', 'optimum_supply', 'supplier@optimumnutrition.id', '$2y$10$Uvw8qw0bHfmEAUtoO9ar3uJ2/aVTTAQXMQa79WXLUK2U.yqsIsb4y', '021-5555678', 'Jl. Gatot Subroto Kav. 52, Jakarta Selatan, DKI Jakarta 12950', 'optimum_logo.png', '2026-01-31 14:24:44', '2026-01-31 14:25:37'),
(4, 'CV Muscletech Distribution', 'muscletech_supply', 'supplier@muscletech.co.id', '$2y$10$TnTiM/TYvbpOdYgN2n4qO.JvWDxevhrY/lKepdt3kZobBLtkOvJUe', '021-5559876', 'Jl. TB Simatupang No. 88, Jakarta Selatan, DKI Jakarta 12430', 'muscletech_logo.png', '2026-01-31 14:24:44', '2026-01-31 14:25:52'),
(5, 'PT Ultimate Nutrition Indonesia', 'ultimate_supply', 'supplier@ultimatenutrition.id', '$2y$10$.qB3mbsVXAWWY9Vu1Es5qOMLQZ5AZO0KlBsn9CmAtbdJEzID0HACa', '021-5554321', 'Jl. Rasuna Said Kav. C-22, Jakarta Selatan, DKI Jakarta 12940', 'ultimate_logo.png', '2026-01-31 14:24:44', '2026-01-31 14:26:07'),
(6, 'CV BSN Fitness Supplement', 'bsn_supply', 'supplier@bsn.co.id', '$2y$10$Egd5sPtjpwz81yBVj7d6r.PkCdq2JHIvZoe1qUi2N054QLgzyP0Nq', '021-5558765', 'Jl. Thamrin No. 59, Jakarta Pusat, DKI Jakarta 10350', 'bsn_logo.png', '2026-01-31 14:24:44', '2026-01-31 14:26:32'),
(7, 'PT Dymatize Indonesia', 'dymatize_supply', 'supplier@dymatize.id', '$2y$10$6JnWX63YITlEfutBhjN58ujSICR9Em1FpvEGXXHrp8EJFKemZKUXW', '021-5552468', 'Jl. Kuningan Barat No. 26, Jakarta Selatan, DKI Jakarta 12710', 'dymatize_logo.png', '2026-01-31 14:24:44', '2026-01-31 14:26:45'),
(8, 'CV MyProtein Asia Pacific', 'myprotein_supply', 'supplier@myprotein.id', '$2y$10$/JqXi429V8RQNHLInN1Zv.IJ2ncAotz7hkInIkWMXy8Iyi2Hk9qVG', '021-5553691', 'Jl. Casablanca Kav. 88, Jakarta Selatan, DKI Jakarta 12870', 'myprotein_logo.png', '2026-01-31 14:24:44', '2026-01-31 14:26:59'),
(9, 'PT Nutrex Indonesia', 'nutrex_supply', 'supplier@nutrex.co.id', '$2y$10$cCIQOH3pxIM3SLm93Jj6ueYwMQOgdPxp1vbQt/0yKaN4tg7Px19oW', '021-5557412', 'Jl. MT Haryono Kav. 10, Jakarta Timur, DKI Jakarta 13330', 'nutrex_logo.png', '2026-01-31 14:24:44', '2026-01-31 14:27:08'),
(10, 'PT JNX Sports Indonesia', 'jnx_supply', 'supplier@jnxsports.id', '$2y$10$/.VhxQFXYVvK4ds5TF4sVOQvhVbj87lOHlrGkS5sB9OliDtEnBS3K', '021-5559999', 'Jl. Senopati No. 45, Jakarta Selatan, DKI Jakarta 12190', NULL, '2026-01-31 14:24:44', '2026-01-31 14:25:02');

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
  MODIFY `id_brand` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id_customer` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `id_produk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
  MODIFY `id_supplier` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
