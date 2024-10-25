-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/11/2023 às 22:27
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sislogin`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `nomeMaterno` varchar(255) NOT NULL,
  `dataNasc` date NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `telefoneFixo` varchar(20) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `adm` char(1) NOT NULL,
  `dono` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `nomeMaterno`, `dataNasc`, `sexo`, `cpf`, `celular`, `telefoneFixo`, `endereco`, `login`, `senha`, `adm`, `dono`) VALUES
(4, 'Kauã Silva Bomfim', 'Kauã Silva Bomfim', '2003-04-03', '', '132.323.204-33', '', '(21) 9788-5432', 'Rua Sul América 8821', 'moitaOFC', 'ksksksks', '1', '1'),
(129, 'marcos', 'carmem lucia de souza', '1969-12-03', '', '354.232.342-34', '', '(21) 5343-2423', 'Rua', 'msbsir', 'msmsmsms', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
