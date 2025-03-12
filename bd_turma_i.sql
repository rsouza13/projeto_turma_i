-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Mar-2025 às 00:01
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_turma_i`
--
CREATE DATABASE IF NOT EXISTS `bd_turma_i` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_turma_i`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(90) DEFAULT NULL,
  `altura` decimal(3,2) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `altura`, `data_nascimento`, `sexo`, `data_cadastro`) VALUES
(2, 'Wayner Wever', '1.80', '1992-04-25', 'M', '2025-02-24 19:59:36'),
(3, 'Sarah Simão', '1.63', '1994-06-21', 'F', '2025-02-24 19:59:36'),
(11, 'Ingrid Moreira', '1.52', '2006-12-20', 'F', '2025-02-24 19:59:36'),
(14, 'teste1', '1.80', '1945-01-01', 'M', '2025-02-24 19:59:36'),
(15, 'Wilsom Magalhães Fererira', '2.00', '1985-09-18', 'M', '2025-02-24 19:59:36'),
(17, 'Vitor Guilherme', '1.78', '2005-07-11', 'M', '2025-02-24 20:14:02'),
(18, 'Yasmin Matos', '1.55', '2008-05-30', 'F', '2025-02-24 20:15:28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
