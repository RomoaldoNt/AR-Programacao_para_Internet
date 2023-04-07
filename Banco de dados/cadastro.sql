-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Abr-2023 às 01:48
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadas_pess`
--

CREATE TABLE `cadas_pess` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadas_pess`
--

INSERT INTO `cadas_pess` (`id`, `nome`, `email`, `senha`) VALUES
(17, 'romo', 'ado@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadas_produto`
--

CREATE TABLE `cadas_produto` (
  `id` int(11) NOT NULL,
  `nome_p` varchar(200) DEFAULT NULL,
  `descricao` varchar(500) NOT NULL,
  `codigo` int(11) NOT NULL,
  `fabricante` varchar(200) NOT NULL,
  `validade` date NOT NULL,
  `preco` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadas_produto`
--

INSERT INTO `cadas_produto` (`id`, `nome_p`, `descricao`, `codigo`, `fabricante`, `validade`, `preco`) VALUES
(4, 'Whey Protein', 'proteína ideal para quem treina hipertrofia', 626262551, 'Growth', '2025-11-10', 99),
(5, 'Pasta de amendoim', 'Pasta de amendoin integral torrado', 2147483647, 'Growth', '2026-12-10', 25);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadas_pess`
--
ALTER TABLE `cadas_pess`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cadas_produto`
--
ALTER TABLE `cadas_produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadas_pess`
--
ALTER TABLE `cadas_pess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `cadas_produto`
--
ALTER TABLE `cadas_produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
