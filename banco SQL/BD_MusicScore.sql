-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Nov-2022 às 20:35
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
-- Banco de dados: `bd_musicscore_1`
--
CREATE DATABASE IF NOT EXISTS `bd_musicscore_1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_musicscore_1`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `sigla` char(4) DEFAULT NULL,
  `nome` varchar(25) NOT NULL,
  `curso` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `materias`
--

INSERT INTO `materias` (`id`, `sigla`, `nome`, `curso`) VALUES
(5, 'VH', 'Harmonia', 'Curso de Violão'),
(6, 'VT', 'Tablatura', 'Curso de Violão'),
(8, 'GI', 'Cordas', 'Curso de Guitarra');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas`
--

CREATE TABLE `notas` (
  `id` int(11) NOT NULL,
  `id_usuario` varchar(12) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `faltas` int(11) NOT NULL DEFAULT 0,
  `p1` float NOT NULL DEFAULT 0,
  `p2` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `notas`
--

INSERT INTO `notas` (`id`, `id_usuario`, `id_materia`, `faltas`, `p1`, `p2`) VALUES
(1, 'Pietro', 5, 2, 5, 7),
(2, 'Ana32', 6, 2, 5, 7),
(3, 'Fabiana', 5, 0, 0, 0),
(4, 'Ana32', 5, 0, 0, 0),
(5, 'AnaPaula', 6, 0, 0, 0),
(6, 'Fabiana', 8, 0, 0, 0),
(7, 'AnaPaula', 5, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `login` varchar(12) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tipo` smallint(6) NOT NULL,
  `ativo` smallint(6) DEFAULT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`login`, `nome`, `email`, `tipo`, `ativo`, `senha`) VALUES
('admin', 'admin', 'admin@admin', 0, 1, 'admin'),
('Bruno', 'Bruno', 'Bruno@bruno', 1, 1, 'asd'),
('Ana32', 'Ana32', 'Ana32@Ana32', 2, 1, '159'),
('Pietro', 'Pietro', 'Pietro@Pietro', 2, 1, 'Pietro'),
('AnaPaula', 'AnaPaula', 'AnaPaula@AnaPaula', 2, 1, '123'),
('Fabiana', 'Fabiana', 'Fabiana@Fabiana', 2, 1, '147');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_materia` (`id_materia`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`login`),
  ADD UNIQUE KEY `indexemail` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `notas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`login`),
  ADD CONSTRAINT `notas_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id`);
