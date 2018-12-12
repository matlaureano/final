-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Dez-2018 às 21:05
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chute`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontos`
--

CREATE TABLE `pontos` (
  `login` varchar(200) NOT NULL,
  `rodada` int(11) NOT NULL,
  `pontos` int(11) NOT NULL,
  `pontos_mod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultado`
--

CREATE TABLE `resultado` (
  `rodada1` int(20) NOT NULL,
  `rodada2` int(20) NOT NULL,
  `rodada3` int(20) NOT NULL,
  `rodada4` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `resultado`
--

INSERT INTO `resultado` (`rodada1`, `rodada2`, `rodada3`, `rodada4`) VALUES
(1, 20, 10, 5),
(2, 19, 9, 4),
(3, 18, 8, 3),
(4, 17, 7, 2),
(5, 16, 6, 1),
(6, 15, 5, 10),
(7, 14, 4, 9),
(8, 13, 3, 8),
(9, 12, 2, 7),
(10, 11, 1, 6),
(11, 10, 20, 15),
(12, 9, 19, 14),
(13, 8, 18, 13),
(14, 7, 17, 12),
(15, 6, 16, 11),
(16, 5, 15, 16),
(17, 4, 14, 20),
(18, 3, 13, 19),
(19, 2, 12, 18),
(20, 1, 11, 17);

-- --------------------------------------------------------

--
-- Estrutura da tabela `times`
--

CREATE TABLE `times` (
  `idTime` int(11) NOT NULL,
  `nomeTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `times`
--

INSERT INTO `times` (`idTime`, `nomeTime`) VALUES
(1, 'Palmeiras'),
(2, 'Flamengo'),
(3, 'São Paulo'),
(4, 'Internacional'),
(5, 'Gremio'),
(6, 'Atletico Mineiro'),
(7, 'Cruzeiro'),
(8, 'Botafogo'),
(9, 'Santos'),
(10, 'Bahia'),
(11, 'Corithinas'),
(12, 'Ceará'),
(13, 'Fluminense'),
(14, 'Vasco'),
(15, 'Chapecoense'),
(16, 'Vitoria'),
(17, 'Paraná'),
(18, 'Sport Recife'),
(19, 'America-MG'),
(20, 'Fortaleza');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nivel` int(11) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  `rodada1` int(1) NOT NULL,
  `rodada2` int(1) NOT NULL,
  `rodada3` int(1) NOT NULL,
  `rodada4` int(1) NOT NULL,
  `ativo_rodada1` int(11) NOT NULL,
  `ativo_rodada2` int(11) NOT NULL,
  `ativo_rodada3` int(11) NOT NULL,
  `ativo_rodada4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `login`, `email`, `senha`, `nivel`, `data_cadastro`, `rodada1`, `rodada2`, `rodada3`, `rodada4`, `ativo_rodada1`, `ativo_rodada2`, `ativo_rodada3`, `ativo_rodada4`) VALUES
(12, 'teste', 'teste', 'teste123@hotmail.com', '123', 1, '2018-12-03 23:08:47', 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'ADM', 'ADM', 'tiodobrunogay@gmail.com', '123', 2, '2018-12-12 11:41:30', 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'kayo', 'kayo', 'kayo.saunders@gmail.com', '123', 1, '2018-12-12 14:37:28', 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`rodada1`,`rodada2`,`rodada3`,`rodada4`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`idTime`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `idTime` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
