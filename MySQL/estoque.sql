-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Mar-2021 às 11:12
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud-products-php`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id_estoque` int(11) NOT NULL,
  `numproduto` float NOT NULL,
  `nomeproduto` varchar(200) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `fornecedor` varchar(100) NOT NULL,
  `descricaoproduto` varchar(255) NOT NULL,
  `origem` varchar(255) NOT NULL,
  `datacompra` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`id_estoque`, `numproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`, `descricaoproduto`, `origem`, `datacompra`) VALUES
(18, 250.45, 'ps4', 'Acessórios', 15, 'Manaus Distribuidora', '', 'Nacional', '2021-03-22'),
(19, 79.78, 'ps4', 'Acessórios', 7, 'Manaus Distribuidora', '', 'Nacional', '2021-03-22'),
(20, 189.78, 'galao', 'Acessórios', 18, 'Manaus Distribuidora', '', '', '2021-03-22'),
(21, 777.48, 'Fiat Uno completo', 'Acessórios', 2, 'Manaus Distribuidora', 'TOpppppper', 'Nacional', '2021-03-22'),
(23, 478.99, 'Luneta', 'Mouse Gamer', 6, 'Sonsmar', 'Luneta top', 'Importado', '2021-03-22');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id_estoque`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id_estoque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
