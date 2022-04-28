-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 28-Abr-2022 às 12:02
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dontraj`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cursos`
--

DROP TABLE IF EXISTS `tb_cursos`;
CREATE TABLE IF NOT EXISTS `tb_cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(99) NOT NULL,
  `sigla` varchar(4) NOT NULL,
  `carga_hr` varchar(99) NOT NULL,
  `tipo_ensino` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_cursos`
--

INSERT INTO `tb_cursos` (`id`, `nome`, `sigla`, `carga_hr`, `tipo_ensino`) VALUES
(1, 'Desenvolvimento de Sistemas', 'DES', 'Integral', 'Presencial'),
(2, 'Administração', 'MAD', 'Integral', 'Presencial'),
(3, 'Jogos Digitais', 'JODI', 'Manhã', 'Presencial'),
(4, 'Contabilidade', 'CONT', 'Noite', 'Presencial'),
(5, 'Administração', 'ADM', 'Noite', 'Presencial'),
(6, 'Edificações', 'EDF', 'Noite', 'Presencial'),
(7, 'Turismo Receptivo', 'TUR', 'Noite', 'Presencial');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_perguntas`
--

DROP TABLE IF EXISTS `tb_perguntas`;
CREATE TABLE IF NOT EXISTS `tb_perguntas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta` longtext NOT NULL,
  `id_curso` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
