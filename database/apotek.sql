-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Oct 07, 2023 at 01:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_transaksi`
--

CREATE TABLE `tb_detail_transaksi` (
  `iddetailtransaksi` int(4) NOT NULL,
  `idtransaksi` int(5) NOT NULL,
  `idobat` int(4) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `hargasatuan` double NOT NULL,
  `totalharga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_detail_transaksi`
--

INSERT INTO `tb_detail_transaksi` (`iddetailtransaksi`, `idtransaksi`, `idobat`, `jumlah`, `hargasatuan`, `totalharga`) VALUES
(1, 1, 4, 2, 2000, 4000),
(2, 2, 11, 1, 3000, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `idkaryawan` int(4) NOT NULL,
  `namakaryawan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`idkaryawan`, `namakaryawan`, `alamat`, `telp`) VALUES
(1, 'abimana', 'jl.antasura', '082340566'),
(2, 'sugraha', 'jl. nusadua', '084567893'),
(3, 'gio', 'jl. pemuda', '3455665'),
(4, 'cican', 'jl kuta', '54354345');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(65) NOT NULL,
  `leveluser` varchar(50) NOT NULL,
  `idkaryawan` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`username`, `password`, `leveluser`, `idkaryawan`) VALUES
('cio', 'kupeng', 'admin', 2),
('gdr', 'dfgdf', 'karyawan', 3),
('reddy', 'admin', 'admin', 1),
('vxcvxcv', 'xgffg', 'admin', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `idobat` int(11) NOT NULL,
  `idsupplier` int(4) NOT NULL,
  `namaobat` varchar(100) NOT NULL,
  `kategoriobat` varchar(50) NOT NULL,
  `hargajual` double NOT NULL,
  `hargabeli` double NOT NULL,
  `stokobat` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`idobat`, `idsupplier`, `namaobat`, `kategoriobat`, `hargajual`, `hargabeli`, `stokobat`, `keterangan`) VALUES
(4, 1, 'paracetamol', 'keras', 3000, 4000, 10, 'tersedia'),
(5, 1, 'matol', 'keras', 4000, 6000, 5, 'habis'),
(9, 3, 'sustol', 'ringan', 5000, 7000, 70, 'habis'),
(10, 2, 'betadine', 'ringan', 8000, 10000, 3, 'tersedia'),
(11, 2, 'megapas', 'ringan', 9000, 12000, 20000, 'habis'),
(12, 3, 'paracetamol', 'keras', 3000, 4000, 5, 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `idpelanggan` int(4) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` int(15) NOT NULL,
  `usia` int(3) NOT NULL,
  `buktifotoresep` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`idpelanggan`, `namalengkap`, `alamat`, `telp`, `usia`, `buktifotoresep`) VALUES
(1, 'agung bima', 'jl.pegangsaan timur', 89768546, 23, 'pngtree-study-desk-with-lamp-and-laptop-png-image_1074251.jpg'),
(2, 'gusti jayanegara', 'jl kuta utara', 24590021, 34, 'GettyImages-1454058933_1.jpg'),
(8, 'jfjf', 'gjfgjf', 0, 5, 'JAWA.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `idsupplier` int(4) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_supplier`
--

INSERT INTO `tb_supplier` (`idsupplier`, `perusahaan`, `telp`, `alamat`, `keterangan`) VALUES
(1, 'PT Bima Perkasa', '09865456', 'JL bima indah', 'perusahaan penjuan obat gila'),
(2, 'PT sejahtera', '06548963', 'JL Bumi jaya', 'perusahaan penjual obat sedih'),
(3, 'PT Sentosa', '06345655', 'JL santun', 'perusahaan penjual obat senang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `idtransaksi` int(5) NOT NULL,
  `idpelanggan` int(4) NOT NULL,
  `idkaryawan` int(4) NOT NULL,
  `tgltransaksi` date NOT NULL,
  `kategoripelanggan` varchar(20) NOT NULL,
  `totalbayar` double NOT NULL,
  `bayar` double NOT NULL,
  `kembali` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`idtransaksi`, `idpelanggan`, `idkaryawan`, `tgltransaksi`, `kategoripelanggan`, `totalbayar`, `bayar`, `kembali`) VALUES
(1, 2, 1, '2023-09-06', 'langganan', 20000, 30000, 10000),
(2, 1, 1, '2023-09-29', 'langganan', 30000, 40000, 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD PRIMARY KEY (`iddetailtransaksi`),
  ADD KEY `fk_detbat` (`idobat`),
  ADD KEY `fk_dettrans` (`idtransaksi`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`idkaryawan`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`username`),
  ADD KEY `fk_logkar` (`idkaryawan`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`idobat`),
  ADD KEY `FK_Supplier` (`idsupplier`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`idpelanggan`);

--
-- Indexes for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`idsupplier`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`idtransaksi`),
  ADD KEY `fk_kartrans` (`idkaryawan`),
  ADD KEY `fk_transpel` (`idpelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  MODIFY `iddetailtransaksi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `idkaryawan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_obat`
--
ALTER TABLE `tb_obat`
  MODIFY `idobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `idpelanggan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `idsupplier` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `idtransaksi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD CONSTRAINT `fk_detbat` FOREIGN KEY (`idobat`) REFERENCES `tb_obat` (`idobat`),
  ADD CONSTRAINT `fk_dettrans` FOREIGN KEY (`idtransaksi`) REFERENCES `tb_transaksi` (`idtransaksi`);

--
-- Constraints for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD CONSTRAINT `fk_logkar` FOREIGN KEY (`idkaryawan`) REFERENCES `tb_karyawan` (`idkaryawan`);

--
-- Constraints for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD CONSTRAINT `FK_Supplier` FOREIGN KEY (`idsupplier`) REFERENCES `tb_supplier` (`idsupplier`);

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `fk_kartrans` FOREIGN KEY (`idkaryawan`) REFERENCES `tb_karyawan` (`idkaryawan`),
  ADD CONSTRAINT `fk_transpel` FOREIGN KEY (`idpelanggan`) REFERENCES `tb_pelanggan` (`idpelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
