-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 20-Set-2019 às 05:37
-- Versão do servidor: 5.6.34
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lennus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_acessibilidade`

CREATE DATABASE db_lennus:

USE db_lennus;
--

CREATE TABLE `tb_acessibilidade` (
  `cd_acessibilidade` int(11) NOT NULL,
  `nm_acessibilidade` varchar(100) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_acessibilidade`
--

INSERT INTO `tb_acessibilidade` (`cd_acessibilidade`, `nm_acessibilidade`) VALUES
(1, 'Quartos acessíveis para cadeira de rodas'),
(2, 'Banheiro Acessível'),
(3, 'Equipamento de Acessibilidade para Deficientes Auditivos'),
(4, 'Estacionamento Acessível'),
(5, 'Placas em Braille ou Relevo'),
(6, 'Rampa'),
(7, 'Corredores com Acessibilidade'),
(8, 'Tecnologia Assistiva'),
(9, 'Hospitalidade Inclusiva'),
(10, 'Hotelaria Adaptada'),
(11, 'Cozinha Adequada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_avaliacao`
--

CREATE TABLE `tb_avaliacao` (
  `cd_avaliacao` int(11) NOT NULL,
  `nr_assunto` int(11) NOT NULL,
  `ds_comentario` text NOT NULL,
  `nr_estrela` int(11) NOT NULL,
  `id_hotel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_avaliacao`
--

INSERT INTO `tb_avaliacao` (`cd_avaliacao`, `nr_assunto`, `ds_comentario`, `nr_estrela`, `id_hotel`) VALUES
(1, 1, 'Qualidade duvidosa', 3, 1),
(2, 2, 'Poderia ser melhor', 3, 1),
(3, 6, 'Rampa esburacada', 2, 2),
(4, 2, 'Falto umas coisas', 3, 4),
(5, 11, 'Excelente', 5, 6),
(6, 5, 'Maravilhoso, vocÃªs estÃ£o de parabÃ©ns', 5, 3),
(7, 3, 'sfadfddfQFDSSDFSFSDDFS', 5, 19);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_hotel`
--

CREATE TABLE `tb_hotel` (
  `cd_hotel` int(11) NOT NULL,
  `nm_tipo` varchar(50) NOT NULL,
  `nm_hotel` varchar(50) DEFAULT NULL,
  `nm_cidade` varchar(50) DEFAULT NULL,
  `nm_bairro` varchar(50) DEFAULT NULL,
  `nm_logradouro` varchar(50) DEFAULT NULL,
  `nr_logradouro` int(11) DEFAULT NULL,
  `ds_email` varchar(50) DEFAULT NULL,
  `nr_telefone` varchar(11) DEFAULT NULL,
  `ds_img` varchar(255) DEFAULT NULL,
  `id_avaliacao` int(11) NOT NULL,
  `sg_corredor` int(11) NOT NULL,
  `sg_banho` int(11) NOT NULL,
  `sg_equipamento` int(11) NOT NULL,
  `sg_estacionamento` int(11) NOT NULL,
  `sg_placa` int(11) NOT NULL,
  `sg_quarto` int(11) NOT NULL,
  `sg_tecnologia` int(11) NOT NULL,
  `sg_hospitalidade` int(11) NOT NULL,
  `sg_hotelaria` int(11) NOT NULL,
  `sg_cozinha` int(11) NOT NULL,
  `sg_rampa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_hotel`
--

INSERT INTO `tb_hotel` (`cd_hotel`, `nm_tipo`, `nm_hotel`, `nm_cidade`, `nm_bairro`, `nm_logradouro`, `nr_logradouro`, `ds_email`, `nr_telefone`, `ds_img`, `id_avaliacao`, `sg_corredor`, `sg_banho`, `sg_equipamento`, `sg_estacionamento`, `sg_placa`, `sg_quarto`, `sg_tecnologia`, `sg_hospitalidade`, `sg_hotelaria`, `sg_cozinha`, `sg_rampa`) VALUES
(1, '', 'Hotel Ibizu', 'Bertioga', NULL, NULL, NULL, 'ibizu@hotbert.com', '13984739843', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, '', 'Hotel Mari', 'GuarujÃ¡', NULL, NULL, NULL, 'mari@hotelbe.com', '13984375847', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '', 'Lakeview Hotel', 'MongaguÃ¡', NULL, NULL, NULL, 'lake@view.com', '13984738475', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '', 'Hotel Bates', 'Bertioga', NULL, NULL, NULL, 'bates@bert.com', '13945848977', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, '', 'Hotel Casa Branca', 'Santos', NULL, NULL, NULL, 'brlanca@coco.com', '13948374857', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'Hotel', 'dsaasd', 'MongaguÃ¡', NULL, NULL, NULL, 'asd@asdsad.com', '12123123234', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'Mercados', 'Krill', 'PeruÃ­be', NULL, NULL, NULL, 'cuca@gmail.com', '123221343', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'Restaurantes', 'Coco', 'SÃ£o Vicente', NULL, NULL, NULL, 'agua@mail.com', '13234234', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'Restaurantes', 'dsaasd', 'MongaguÃ¡', NULL, NULL, NULL, 'asd@asdsad.com', '12123123234', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'Hotel', 'dsaasd', 'MongaguÃ¡', NULL, NULL, NULL, 'asd@asdsad.com', '12123123234', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'Ponto Turistico', 'dsaasd', 'SÃ£o Vicente', NULL, NULL, NULL, 'cuca@gmail.com', '12123123234', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'Restaurantes', 'fffd', 'MongaguÃ¡', NULL, NULL, NULL, 'asd@asdsad.com', '12123123234', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'Restaurantes', 'Mano', 'MongaguÃ¡', NULL, NULL, NULL, 'asd@asdsad.com', '12123123234', NULL, 0, 0, 2, 3, 0, 0, 1, 0, 0, 0, 11, 0),
(16, 'Hotel', 'Krill', 'Bertioga', NULL, NULL, NULL, 'asd@asdsad.com', '12123123234', NULL, 0, 0, 2, 0, 4, 0, 0, 8, 9, 0, 0, 6),
(17, 'Restaurantes', 'ASDDSA', 'MongaguÃ¡', NULL, NULL, NULL, 'asd@asdsad.com', '12123123234', NULL, 0, 7, 2, 3, 4, 5, 1, 8, 9, 10, 11, 6),
(18, 'Mercados', 'Krill', '', NULL, NULL, NULL, 'asd@asdsad.com', '12123123234', NULL, 0, 0, 0, 0, 0, 0, 1, 0, 0, 10, 0, 6),
(19, 'Restaurantes', 'JoÃ£o Paulo Moreira Santos', '', NULL, NULL, NULL, 'joaojpmoreira25@gmail.com', '1335077867', NULL, 0, 7, 2, 3, 4, 5, 1, 8, 9, 10, 11, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_status`
--

CREATE TABLE `tb_status` (
  `cd_status` int(11) NOT NULL,
  `id_hotel` int(11) DEFAULT NULL,
  `id_acessibilidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_status`
--

INSERT INTO `tb_status` (`cd_status`, `id_hotel`, `id_acessibilidade`) VALUES
(1, 3, 1),
(2, 3, 2),
(3, 7, 2),
(4, 7, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `cd_usuario` int(11) NOT NULL,
  `nm_usuario` varchar(50) NOT NULL,
  `ds_senha` varchar(25) NOT NULL,
  `ds_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`cd_usuario`, `nm_usuario`, `ds_senha`, `ds_email`) VALUES
(1, 'admin', '123', 'joaojpmoreira25@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_acessibilidade`
--
ALTER TABLE `tb_acessibilidade`
  ADD PRIMARY KEY (`cd_acessibilidade`);

--
-- Indexes for table `tb_avaliacao`
--
ALTER TABLE `tb_avaliacao`
  ADD PRIMARY KEY (`cd_avaliacao`),
  ADD KEY `id_hotel` (`id_hotel`);

--
-- Indexes for table `tb_hotel`
--
ALTER TABLE `tb_hotel`
  ADD PRIMARY KEY (`cd_hotel`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`cd_status`),
  ADD KEY `id_hotel` (`id_hotel`),
  ADD KEY `id_acessibilidade` (`id_acessibilidade`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`cd_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_acessibilidade`
--
ALTER TABLE `tb_acessibilidade`
  MODIFY `cd_acessibilidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_avaliacao`
--
ALTER TABLE `tb_avaliacao`
  MODIFY `cd_avaliacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_hotel`
--
ALTER TABLE `tb_hotel`
  MODIFY `cd_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `cd_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `cd_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_avaliacao`
--
ALTER TABLE `tb_avaliacao`
  ADD CONSTRAINT `tb_avaliacao_ibfk_1` FOREIGN KEY (`id_hotel`) REFERENCES `tb_hotel` (`cd_hotel`);

--
-- Limitadores para a tabela `tb_status`
--
ALTER TABLE `tb_status`
  ADD CONSTRAINT `tb_status_ibfk_1` FOREIGN KEY (`id_hotel`) REFERENCES `tb_hotel` (`cd_hotel`),
  ADD CONSTRAINT `tb_status_ibfk_2` FOREIGN KEY (`id_acessibilidade`) REFERENCES `tb_acessibilidade` (`cd_acessibilidade`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
