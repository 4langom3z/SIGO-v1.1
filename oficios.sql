-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 30-Jan-2019 às 15:10
-- Versão do servidor: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `member`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `oficios`
--

CREATE TABLE `oficios` (
  `id` int(11) NOT NULL,
  `data` varchar(25) NOT NULL,
  `hora` varchar(15) NOT NULL,
  `oficio` varchar(10) NOT NULL,
  `setor` varchar(50) NOT NULL,
  `assunto` varchar(40) NOT NULL,
  `anexo` varchar(150) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `oficios`
--

INSERT INTO `oficios` (`id`, `data`, `hora`, `oficio`, `setor`, `assunto`, `anexo`, `status`) VALUES
(41, '29/01/2019', '17:58:49', '', 'RH - Recursos Humanos', '777777777777777', 'bc3464f66b3709d75cdb6c3cbecef4d9.pdf', 'cancelado'),
(42, '29/01/2019', '17:58:57', '', 'TI - Tecnologia da Informação', '', '', ''),
(43, '29/01/2019', '19:56:22', '', 'TI - Tecnologia da Informação', '', '', 'cancelado'),
(44, '30/01/2019', '10:42:49', '', 'RH - Recursos Humanos', 'MUITOS', '', ''),
(45, '30/01/2019', '10:43:56', '', 'TI - Tecnologia da Informação', 'alsdkalskdak', '', ''),
(46, '30/01/2019', '10:45:04', '', 'TI - Tecnologia da Informação', '888888888888888888888', '', 'cancelado'),
(47, '30/01/2019', '11:01:27', '', 'TI - Tecnologia da Informação', 'aklsjdheufcgyh', '7cf3790050bc82cb8063f582248be754.pdf', ''),
(48, '30/01/2019', '11:02:05', '', 'TI - Tecnologia da Informação', 'kkkkkkk', '9a3aec9515f95276d5f80b72ad1cbb44.pdf', 'cancelado'),
(49, '30/01/2019', '11:28:24', '', 'RH - Recursos Humanos', 'kkcodsvkp', '', ''),
(50, '30/01/2019', '11:28:30', '', 'DP - Departamento Pessoal', 'ckodkcop', '', ''),
(51, '30/01/2019', '11:28:44', '', 'DP - Departamento Pessoal', 'kcdkokvwpdk', '531b57571280eadd561c1bd422180b47.pdf', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oficios`
--
ALTER TABLE `oficios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oficios`
--
ALTER TABLE `oficios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
