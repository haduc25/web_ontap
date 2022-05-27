-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 01:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_sp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nhasx`
--

CREATE TABLE `tbl_nhasx` (
  `ma_nhasx` int(11) NOT NULL,
  `ten_nhasx` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nhasx`
--

INSERT INTO `tbl_nhasx` (`ma_nhasx`, `ten_nhasx`) VALUES
(1, 'Logitech'),
(2, 'Dareu'),
(3, 'Apple'),
(4, 'Samsung');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `ma_sp` int(11) NOT NULL,
  `ten_sp` varchar(100) NOT NULL,
  `ma_nhasx` int(11) NOT NULL,
  `hinhanh` text NOT NULL,
  `ngaysanxuat` varchar(50) NOT NULL,
  `dongia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `mausac` varchar(100) NOT NULL,
  `khuyenmai` varchar(100) NOT NULL,
  `thongtinthem` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`ma_sp`, `ten_sp`, `ma_nhasx`, `hinhanh`, `ngaysanxuat`, `dongia`, `soluong`, `mausac`, `khuyenmai`, `thongtinthem`) VALUES
(1, 'Iphone 13 Pro Max 256gb', 3, 'uploads/1653652011-iphone-13-pro-max-3.png', '15/09/1996', 23500, 28, 'Trắng, Đen, Xanh dương', '10%', ''),
(2, 'Iphone 12 Pro Max 64gb', 3, 'uploads/1653652068-iphone-12-pro-max-3.png', '31/10/2022', 22500, 16, 'Vàng', '20%', ''),
(3, 'Bàn phím Gaming DAREU EK880 RGB', 2, 'uploads/1653652124-Bàn-phím-Gaming-DAREU-EK880-RGB-2.png', '12/09/2014', 14000, 16, 'Đen', '10%', ''),
(4, 'Galaxy S22 Ultra Burgundy', 4, 'uploads/1653652168-Galaxy-S22-Ultra-Burgundy-600x600.jpg', '10/10/2018', 32500, 7, 'Đen, Đỏ', 'Bảo hành 1 năm', ''),
(5, 'Chuột gaming Logitech G102', 1, 'uploads/1653652259-mouse_g102_white.jpg', '19/08/2011', 9000, 12, 'Trắng', '10%', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`ma_sp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `ma_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
