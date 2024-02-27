-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2024 at 05:47 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moffe`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id_admin` char(15) NOT NULL,
  `nrn_admin` char(150) NOT NULL,
  `sexo` enum('Mane','Feto') NOT NULL,
  `data_moris` date NOT NULL,
  `hela_fatin` varchar(100) NOT NULL,
  `no_tlp` char(15) NOT NULL,
  `img_admin` text NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `level` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nrn_admin`, `sexo`, `data_moris`, `hela_fatin`, `no_tlp`, `img_admin`, `username`, `password`, `level`) VALUES
('1', 'Adriana M Lopes Magno', 'Feto', '2024-02-01', 'Delta', '75281758', 'download.png', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'admin'),
('2', 'Brito  Lazaro  da Conceicao', 'Mane', '2024-02-07', 'Patai Kelapa', '7568434', 'logo.png', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_aktividade`
--

CREATE TABLE IF NOT EXISTS `tb_aktividade` (
  `id_aktividade` char(15) NOT NULL,
  `nrn_aktividade` text NOT NULL,
  `id_admin` char(15) NOT NULL,
  `id_kat_aktividade` char(15) NOT NULL,
  `data_publika` text NOT NULL,
  `images` text NOT NULL,
  `obs_aktividade` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kat_aktividade`
--

CREATE TABLE IF NOT EXISTS `tb_kat_aktividade` (
  `id_kat_aktividade` char(15) NOT NULL,
  `nrn_kat_aktividade` varchar(100) NOT NULL,
  `obs_kat_aktividade` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kat_aktividade`
--

INSERT INTO `tb_kat_aktividade` (`id_kat_aktividade`, `nrn_kat_aktividade`, `obs_kat_aktividade`) VALUES
('1', 'Promosaun Sensibilizasaun', 'diak'),
('2', 'Formasaun Lideransa', 'diak'),
('3', 'Empoderamentu Ekonomika', 'diak'),
('4', 'Advokasia Politika', 'diak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profile`
--

CREATE TABLE IF NOT EXISTS `tb_profile` (
  `id_profile` char(15) NOT NULL,
  `nrn_profile` varchar(100) NOT NULL,
  `content_profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profile`
--

INSERT INTO `tb_profile` (`id_profile`, `nrn_profile`, `content_profile`) VALUES
('1', 'Historia', 'MOFFE Timor-Leste ka Movimentu Feto Foin Sae Timor-Leste hanesan Organizasaun nasional iha Timor-Leste ne’ebe servisu atu haforsa lideransa feto foin sae no organiza eduksaun no kapasitasaun ba labarik, foin sae no feto sira iha Timor-Leste. MOFFE Timor-Leste hari’I iha loron 29 de Maio 2010 hodi halibur labarik, foin sae no feto iha teritoriu tomak hodi suporta, haforsa, kordena no fasilita kapasitasaun ba sira.'),
('2', 'Vizaun', '	Sosiadade Timor-Leste moris iha demokrasia Igualidade no saudavel'),
('3', 'Misaun', '	Promove implemetasaun no protesaun direitu feto, labarik feto foinsa’e.                                                                  	Promove partisipasaun feto iha foti desizaun iha nivel suku, governu lokal no nasional.        	Kapasita feto liu husi trinamentu formasaun no sensibilizasaun.                  	Haforsa ekonomia familia liu husi produtu intergrade.'),
('4', 'Estrutura', 'Movimentu Feto Foin Sa’e Timor-Leste (MOFFE-TL)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_aktividade`
--
ALTER TABLE `tb_aktividade`
  ADD PRIMARY KEY (`id_aktividade`),
  ADD KEY `id_kat_aktividade` (`id_kat_aktividade`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `tb_kat_aktividade`
--
ALTER TABLE `tb_kat_aktividade`
  ADD PRIMARY KEY (`id_kat_aktividade`);

--
-- Indexes for table `tb_profile`
--
ALTER TABLE `tb_profile`
  ADD PRIMARY KEY (`id_profile`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
