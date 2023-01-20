-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Jan-2023 às 03:02
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
-- Banco de dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(20) NOT NULL,
  `id_post` int(100) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `comentario` varchar(500) NOT NULL,
  `data` varchar(200) NOT NULL,
  `hora` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curtidas`
--

CREATE TABLE `curtidas` (
  `id` int(20) NOT NULL,
  `id_post` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(20) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `data` varchar(200) DEFAULT NULL,
  `hora` varchar(200) DEFAULT NULL,
  `postador` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `titulo`, `descricao`, `imagem`, `data`, `hora`, `postador`) VALUES
(1, 'Primeira postagem', 'Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa ', '', '04/12/2022', '18:11', 'oi'),
(17, 'aaaaaaaaaaaaaaaaa', 'bb', '', NULL, NULL, NULL),
(18, 'bbbbbbbb', 'bb', '', NULL, NULL, NULL),
(19, 'ccccccccc', 'ccc', '', NULL, NULL, 'Usuario de Teste'),
(20, 'ddddddddddd', 'ddd', '', '17/01/2023', '22:33:14', 'Usuario de Teste'),
(21, 'yyyyyyyyyyyyy', 'yy', '', '17/01/2023', '22:34:32', 'Usuario de Teste'),
(22, 'vvv', 'vv', '', '17/01/2023', '22:47:29', 'Usuario de Teste'),
(23, 'Teste de imagem ', 'testando', 'imagens/uploads/i1.jpg', '17/01/2023', '22:58:38', 'Usuario de Teste'),
(24, 'Teste sem foto', 'aaaaa', 'imagens/uploads/', '17/01/2023', '22:58:50', 'Usuario de Teste'),
(25, 'Teste com foto', ' kkkkkkkkkk', 'imagens/uploads/i2.jpg', '17/01/2023', '22:59:25', 'Usuario de Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(140) DEFAULT NULL,
  `email` varchar(140) NOT NULL,
  `senha` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Usuario de Teste', 'teste@teste.com', 'teste'),
(2, 'oi', 'oi@oi.com', '3c5f37e6c2d333ce'),
(4, 'b', 'a', 'c'),
(6, '', '', ''),
(7, '', 'xoxo@gmail.com', '104bef45beb79ea4'),
(8, 'eu', 'eu@gmail.com', 'eu');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `curtidas`
--
ALTER TABLE `curtidas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `curtidas`
--
ALTER TABLE `curtidas`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
