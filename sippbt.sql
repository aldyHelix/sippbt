-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 02:53 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sippbt`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telpon` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nip` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `jenis_kelamin`, `umur`, `alamat`, `no_telpon`, `tempat_lahir`, `tanggal_lahir`, `nip`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'Wahyu', 'laki-laki', 0, 'Markoni', '085783621784', 'Bontang', '1996-02-12', '199602122020030002', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(20) NOT NULL,
  `id_pendaftaran` int(20) NOT NULL,
  `no_pendaftaran` int(20) NOT NULL,
  `id_pasien` int(16) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `id_ruangan` int(20) NOT NULL,
  `nama_ruangan` varchar(20) NOT NULL,
  `pelayanan` varchar(255) NOT NULL,
  `poli` varchar(255) NOT NULL,
  `id_dokter` int(20) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `hasil_diagnosa` text NOT NULL,
  `no_jamkes` varchar(255) DEFAULT NULL,
  `nama_jamkes` varchar(255) DEFAULT NULL,
  `id_obat` int(11) DEFAULT NULL,
  `nama_obat` varchar(255) DEFAULT NULL,
  `dosis_obat` varchar(10) DEFAULT NULL,
  `satuan_dosis` varchar(10) DEFAULT NULL,
  `harga_obat` int(10) DEFAULT NULL,
  `id_rekam_medis` int(20) DEFAULT NULL,
  `no_rekam_medis` int(20) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `golongan_obat` varchar(255) NOT NULL,
  `jenis_obat` varchar(255) NOT NULL,
  `dosis_obat` varchar(255) NOT NULL,
  `satuan_dosis` varchar(10) NOT NULL,
  `satuan_obat` varchar(255) NOT NULL,
  `harga_beli` varchar(255) NOT NULL,
  `sisa_obat` int(11) NOT NULL,
  `harga_obat` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `golongan_obat`, `jenis_obat`, `dosis_obat`, `satuan_dosis`, `satuan_obat`, `harga_beli`, `sisa_obat`, `harga_obat`, `created_at`, `updated_at`, `deleted_at`) VALUES
(15, 'asdadsas', 'sdfsadgasdfsadf', 'sadfsagsdsf', ' fasdasdgsdfasd', ' sdfasdgas', '1', '123', 44444, '123123124123', '2021-01-16', '2021-01-16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nik`, `nama_pasien`, `jenis_kelamin`, `alamat`, `pekerjaan`, `status`, `tempat_lahir`, `tanggal_lahir`, `gol_darah`, `created_at`, `updated_at`, `deleted_at`) VALUES
(28, '8127986128764919', 'Yudi', 'laki-laki', 'Segara Sari', 'Guru', 'belum_kawin', 'Samarinda', '1996-10-07', 'a', '2021-01-13', '2021-01-13', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `id_pemeriksaan` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `gol_darah` varchar(255) NOT NULL,
  `pelayanan` varchar(255) NOT NULL,
  `poli` varchar(255) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `id_ruangan` varchar(255) NOT NULL,
  `id_rekam_medis` int(11) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nik` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `gol_darah` varchar(1) NOT NULL,
  `pelayanan` varchar(255) NOT NULL,
  `poli` varchar(255) DEFAULT NULL,
  `no_jamkes` varchar(255) DEFAULT NULL,
  `nama_jamkes` varchar(20) DEFAULT NULL,
  `no_rekam_medis` varchar(255) DEFAULT NULL,
  `keluhan` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `nama_pasien`, `tempat_lahir`, `tanggal_lahir`, `nik`, `jenis_kelamin`, `alamat`, `pekerjaan`, `status`, `gol_darah`, `pelayanan`, `poli`, `no_jamkes`, `nama_jamkes`, `no_rekam_medis`, `keluhan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Alexander', 'Blitar', '1995-05-05', '2147483648928900', 'laki-laki', 'Mertojoyo', 'Mahasiswa', 'belum_kawin', 'o', 'bpjs', 'poli_umum', NULL, 'bpjs_kesehatan', NULL, 'Sakit kepala', '2021-01-06', '2021-01-12', '0000-00-00'),
(2, 'Rafif', 'Banjarmasin', '1996-02-24', '2147483647', 'laki-laki', 'Sengkaling', 'Mahasiswa', 'belum_kawin', 'b', 'umum', 'poli_gigi', NULL, '-', NULL, 'Sakit Gigi', '2021-01-09', '2021-01-09', '0000-00-00'),
(3, 'Tama', 'Banjarbaru', '1996-07-18', '2147483647', 'laki-laki', 'Joyo Utomo', 'Musisi', 'belum_kawin', 'a', 'umum', 'poli_umum', NULL, '-', NULL, 'Maag', '2021-01-09', '2021-01-09', '0000-00-00'),
(4, 'Zul', 'Samarinda', '1996-10-12', '8916754718238146', 'laki-laki', 'MT Haryono', 'PNS', 'belum_kawin', 'o', 'umum', 'poli_gigi', NULL, '-', NULL, 'Nyeri tenggorokan', '2021-01-09', '2021-01-09', '0000-00-00'),
(5, 'Riadi', 'Palangkaraya', '1995-11-04', '9872169386881234', 'laki-laki', 'Slamet Riadi', 'BUMN', 'kawin', 'a', 'bpjs', 'poli_gigi', '71826498737189369', 'bpjs_kesehatan', NULL, 'Pembersihan karang gigi', '2021-01-12', '2021-01-12', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `rekam medis`
--

CREATE TABLE `rekam medis` (
  `id_rekam_medis` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `diagnosa_dokter` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id_resep` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal_ambil` date NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `jenis_obat` varchar(255) NOT NULL,
  `gol_obat` varchar(255) NOT NULL,
  `dosis_obat` int(11) NOT NULL,
  `dosis_satuan` int(11) NOT NULL,
  `harga_obat` int(11) NOT NULL,
  `no_rekam_medis` int(11) NOT NULL,
  `diagnosa_dokter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `nama_ruangan` varchar(255) NOT NULL,
  `jumlah_ruangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_password` varchar(200) DEFAULT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_created_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$hTsYrMjLo/1gY08USseMSOQFT5GjTIauDWWcx7nE.jZ47n8D4NBsK', '2021-01-17 04:47:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `rekam medis`
--
ALTER TABLE `rekam medis`
  ADD PRIMARY KEY (`id_rekam_medis`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rekam medis`
--
ALTER TABLE `rekam medis`
  MODIFY `id_rekam_medis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
