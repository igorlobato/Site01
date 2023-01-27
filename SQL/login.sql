-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jan-2023 às 17:12
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

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `id_post`, `nome`, `comentario`, `data`, `hora`) VALUES
(1, 25, 'Usuario de Teste', '        teste', '22/01/2023', '17:17:59'),
(2, 26, 'Usuario de Teste', '        aaiaia', '23/01/2023', '21:09:47'),
(3, 26, 'Usuario de Teste', '        cccccc', '23/01/2023', '21:10:44'),
(4, 26, 'Usuario de Teste', '        aaaaaaa', '23/01/2023', '21:10:47'),
(5, 26, 'Usuario de Teste', '        kkkkkkkkkk', '23/01/2023', '21:10:51'),
(6, 1, 'Usuario de Teste2', '        Qualquer coisa', '26/01/2023', '22:15:01'),
(7, 1, 'Usuario de Teste2', '        Nehuma coisa', '26/01/2023', '22:15:08'),
(8, 1, 'Usuario de Teste2', '        Nehuma coisa', '26/01/2023', '22:15:26'),
(9, 33, 'Usuario de Teste2', '        Tá tudo bugado kkkkkkkk', '26/01/2023', '22:46:57'),
(10, 40, 'eu', '        Que demais', '27/01/2023', '12:45:22'),
(11, 42, 'Usuario de Teste2', '        Não faço ideia meu nobre.', '27/01/2023', '13:01:30'),
(12, 44, 'oi', '        Agora é comprar uma casa nova.', '27/01/2023', '13:10:13'),
(13, 44, 'oi', '        Agora é comprar uma casa nova.', '27/01/2023', '13:10:21'),
(14, 43, 'oi', '        Vende no mercado livre.', '27/01/2023', '13:10:51');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curtidas`
--

CREATE TABLE `curtidas` (
  `id` int(20) NOT NULL,
  `id_post` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curtidas`
--

INSERT INTO `curtidas` (`id`, `id_post`) VALUES
(1, 17),
(2, 25),
(3, 25),
(4, 25),
(5, 25),
(6, 25),
(7, 26),
(8, 26),
(9, 26),
(10, 17),
(11, 1),
(12, 33),
(13, 35),
(14, 39),
(15, 40),
(16, 36),
(17, 42),
(18, 44),
(19, 43);

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
  `postador` varchar(200) DEFAULT NULL,
  `topico` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `titulo`, `descricao`, `imagem`, `data`, `hora`, `postador`, `topico`) VALUES
(1, 'Primeira postagem', 'Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa Qualquer coisa ', '', '04/12/2022', '18:11', 'oi', NULL),
(42, 'Como colocar mais ram no pc?', 'Titulo auto-explicativo', 'imagens/uploads/2016-07-19-memoria-ram-1.webp', '27/01/2023', '13:01:14', 'Usuario de Teste2', 'Hardware'),
(43, 'Comprei o processador pra placa mãe errada e agora?', 'Esqueci de ver na hora.', 'imagens/uploads/download.jfif', '27/01/2023', '13:08:15', 'Usuario de Teste2', 'Intel'),
(44, 'Eu já sabia que Amd esquentava, mas isso é passar dos limites', 'Tocou fogo na casa.', 'imagens/uploads/vga-esquentando.jpg', '27/01/2023', '13:09:32', 'Usuario de Teste2', 'Radeon');

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
(1, 'Usuario de Teste2', 'teste@teste.com', 'teste'),
(15, 'oi', 'oi@oi.com', 'oi');

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `curtidas`
--
ALTER TABLE `curtidas`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
