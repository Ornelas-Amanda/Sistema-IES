-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Dez-2021 às 23:03
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbhorario`
--

CREATE TABLE `tbhorario` (
  `id` varchar(20) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `segManha` varchar(50) NOT NULL,
  `terManha` varchar(50) NOT NULL,
  `quaManha` varchar(50) NOT NULL,
  `quiManha` varchar(50) NOT NULL,
  `sexManha` varchar(50) NOT NULL,
  `segNoite` varchar(50) NOT NULL,
  `terNoite` varchar(50) NOT NULL,
  `quaNoite` varchar(50) NOT NULL,
  `quiNoite` varchar(50) NOT NULL,
  `sexNoite` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbhorario`
--

INSERT INTO `tbhorario` (`id`, `nome`, `segManha`, `terManha`, `quaManha`, `quiManha`, `sexManha`, `segNoite`, `terNoite`, `quaNoite`, `quiNoite`, `sexNoite`) VALUES
('12359874', 'Rosangela Patrícia de Souza', 'PDM 3ºB/4ºB, SMP-ADS-M', '', 'PDM 3ºD/4ºD, SMP-ADS-M', '', '', '', '', 'PDM 3ºC/4ºC, SMP-ADS-N', '', 'PDM 3ºA/4ºA, SMP-ADS-N'),
('14526897', 'Maria do carmo da Silva', 'PW 1ºC/2ºC, ANF-ADS-M', 'PW 1ºA/2ºA, SMP-ADS-M', '', 'PW 1ºA/2ºA, ANF-CCP-M', '', '', 'PW 1ºb/2ºb, ANF-CCP-N', '', '', 'PW 1ºA/2ºA, SMP-ADS-N'),
('14987356', 'Ricardo Funayama Hiroshi', 'TE 3ºA/4ºA, SMP-ADS-M', '', '', 'TE 3ºB/4ºB, SMP-ADS-M', '', '', 'TE 3ºC/4ºC, SMP-ADS-N', '', '', 'TE 3ºD/4ºD, SMP-CCP-N'),
('16852397', 'Marcos Cassio Melo', 'SCS 3ºF/4ºF, GUA-ADS-M', '', '', 'SCS 3ºE/4ºE, GUA-ADS-M', '', '', 'SCS 3ºA/4ºA, SMP-CCP-N', 'SCS 3ºB/4ºB, SMP-ADS-N', '', 'SCS 3ºC/4ºC, GUA-ADS-N'),
('19654782', 'Antônio Fagundes Bezerra', 'ED-II 3ºF/4ºH, SAM-CCP-M', 'PW 1ºD/2ºD, SMP-ADS-M', 'ED-II 3ºA/4ºA, SAM-CCP-M', '', '', 'ED-II 3ºB/4ºB, SAM-CCP-N', 'ED-II 3ºC/4ºC, SAM-CCP-N', '', 'PW 1ºF/2ºF, SMP-ADS-N', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbhorario`
--
ALTER TABLE `tbhorario`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
