-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/10/2023 às 18:45
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sites`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `sitespopulares`
--

CREATE TABLE `sitespopulares` (
  `SiteID` int(11) NOT NULL,
  `NomeSite` varchar(255) NOT NULL,
  `URL` varchar(255) NOT NULL,
  `CustoUtilizacao` decimal(10,2) DEFAULT NULL,
  `Requisitos` varchar(255) DEFAULT NULL,
  `Salario` varchar(255) DEFAULT NULL,
  `TipoTrabalho` varchar(255) DEFAULT NULL,
  `Caracteristicas` text DEFAULT NULL,
  `Vantagens` text DEFAULT NULL,
  `Desvantagens` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `sitespopulares`
--
ALTER TABLE `sitespopulares`
  ADD PRIMARY KEY (`SiteID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `sitespopulares`
--
ALTER TABLE `sitespopulares`
  MODIFY `SiteID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
