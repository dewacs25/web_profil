-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 09, 2022 at 11:24 AM
-- Server version: 8.0.31-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id_kontak` int NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `url_facebook` text NOT NULL,
  `url_instagram` text NOT NULL,
  `url_github` text NOT NULL,
  `url_linkedin` text NOT NULL,
  `url_twitter` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_kontak`
--

INSERT INTO `tb_kontak` (`id_kontak`, `no_hp`, `no_wa`, `url_facebook`, `url_instagram`, `url_github`, `url_linkedin`, `url_twitter`, `email`) VALUES
(1, '082125246091', '082125246091', 'https://www.google.com', '', '', '', '', 'muhamadhaudy25@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_portofolio`
--

CREATE TABLE `tb_portofolio` (
  `id_portofolio` int NOT NULL,
  `judul` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_portofolio`
--

INSERT INTO `tb_portofolio` (`id_portofolio`, `judul`, `text`, `gambar`, `tgl`) VALUES
(837030689, 'Hack Nasa Dengan HTML awokawok', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique dicta natus rem maxime, provident eum consequuntur, rerum corporis vero porro maiores a ut accusantium quaerat. Dicta reprehenderit optio ad necessitatibus.</p>\r\n', '20221109101614636b1b7e23ee7.jpg', '2022-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profile`
--

CREATE TABLE `tb_profile` (
  `id_profile` int NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `my_profile` text NOT NULL,
  `my_personal_skil` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_profile`
--

INSERT INTO `tb_profile` (`id_profile`, `nama_lengkap`, `my_profile`, `my_personal_skil`, `gambar`) VALUES
(1342, 'Rm.Haudy Al-kautsar', 'Nama saya Raden Muhammad Haudy Al-Kautsar , teman-teman saya memanggil saya dengan sebutan Haudy,Dewa, Dan Jordi. Saya lahir di Kota Bogor pada tanggal 25 May 2005, umur saya 17 tahun dan saya anak Ketiga dari 4 bersaudara. Saya sedang menempuh pendidikan di SMK Adi Sanggoro, dengan paket keahlian saya yaitu Rekayasa Perangkat Lunak (RPL).', 'Sebagai anak RPL saya dapat menguasai beberapa bahasa pemrograman seperti php dan nodejs', '636b17a96fd51.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_skil`
--

CREATE TABLE `tb_skil` (
  `id_skil` int NOT NULL,
  `nama_skil` varchar(50) NOT NULL,
  `presentase` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_skil`
--

INSERT INTO `tb_skil` (`id_skil`, `nama_skil`, `presentase`) VALUES
(1, 'PHP', 30),
(2, 'NODE js', 27),
(1156369377, 'HTML', 67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tb_portofolio`
--
ALTER TABLE `tb_portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indexes for table `tb_profile`
--
ALTER TABLE `tb_profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `tb_skil`
--
ALTER TABLE `tb_skil`
  ADD PRIMARY KEY (`id_skil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id_kontak` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1146980726;

--
-- AUTO_INCREMENT for table `tb_portofolio`
--
ALTER TABLE `tb_portofolio`
  MODIFY `id_portofolio` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1856331319;

--
-- AUTO_INCREMENT for table `tb_profile`
--
ALTER TABLE `tb_profile`
  MODIFY `id_profile` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1343;

--
-- AUTO_INCREMENT for table `tb_skil`
--
ALTER TABLE `tb_skil`
  MODIFY `id_skil` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1810837905;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
