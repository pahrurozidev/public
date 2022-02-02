-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2022 at 04:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nrp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `img`) VALUES
(52, 'Titin Yustika', '1901010233', 'titinyustika@gmail.com', 'Ilmu Kimia', 'img1.jpeg'),
(56, 'Muhammad Zakaria', '19010113349', 'zakaria@gmail.com', 'Teknik Informatika', 'img2.jpeg'),
(57, 'Wisnu Mahendra', '1901010238', 'wisnu@gmail.com', 'Pendidikan Pancasila', '61bb4e9c1cdb7.jpeg'),
(58, 'Hafif Nur Muhammad', '19100134839', 'hafif@gmail.com', 'Programmer ', 'img2.jpeg'),
(60, 'Lalu gilang tri arta', '29834934938', 'gilang@gmail.com', 'Ilmu Komputer', '61c281cf26978.jpeg'),
(62, 'Dodi Irwanto', '92893793', 'dodi@gmail.com', 'Teknik Informatika', 'img2.jpeg'),
(63, 'Madina Annisa Dahlia', '297498349', 'madina@gmail.com', 'Ilmu Fisika', 'img1.jpeg'),
(64, 'Nanik Hidayatul Ismayabi', '929837983579', 'ninik@gmail.com', 'Teknik Sipil', 'img1.jpeg'),
(65, 'Muhammad Yuka Erman Pratama', '829843280', 'yuka@yahoo.com', 'Matematika', '61c281e69bf9e.jpeg'),
(66, 'Thary dara Paringga', '20989379', 'thary@gmail.com', 'Sistem Informasi', 'img1.jpeg'),
(67, 'Hafif Nur Azizi', '19830294', 'azizi@gmail.com', 'Teknik Elektro', '61c281dd6a111.jpeg'),
(73, 'Pahrurozi', 'df', 'pahrurozi17@gmail.com', 'df', '61bb50a5656bb.jpeg'),
(74, 'Aqila Nurfadila', '9083294329', 'aqila@gmail.com', 'Bahasa Inggris', '61bddb885c4d9.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
