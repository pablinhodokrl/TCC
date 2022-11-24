-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Nov-2022 às 01:44
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `nome` varchar(50) NOT NULL,
  `empresa` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `cpfcnpj` varchar(45) NOT NULL,
  `senha` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastroproduto`
--

CREATE TABLE `cadastroproduto` (
  `id` int(11) NOT NULL,
  `NomeProduto` varchar(25) NOT NULL,
  `Validade` date DEFAULT NULL,
  `Marca` varchar(45) DEFAULT NULL,
  `PreçoQTD` float DEFAULT NULL,
  `PreçoEGD` float DEFAULT NULL,
  `Fornecedor` varchar(45) DEFAULT NULL,
  `Lote` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastroproduto`
--

INSERT INTO `cadastroproduto` (`id`, `NomeProduto`, `Validade`, `Marca`, `PreçoQTD`, `PreçoEGD`, `Fornecedor`, `Lote`) VALUES
(8, 'coca cola', '2022-12-10', 'cioca ciola', 120, 240, 'coca cola ltda', 79879831),
(9, '456345', '0000-00-00', '10', 5220, 0, '', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`cpfcnpj`);

--
-- Índices para tabela `cadastroproduto`
--
ALTER TABLE `cadastroproduto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastroproduto`
--
ALTER TABLE `cadastroproduto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
