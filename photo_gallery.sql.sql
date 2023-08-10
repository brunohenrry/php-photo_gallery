-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Ago-2023 às 10:33
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gallery`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `image_filename` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tweet_count` int(11) NOT NULL,
  `like_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `photos`
--

INSERT INTO `photos` (`id`, `image_filename`, `title`, `tweet_count`, `like_count`) VALUES
(1, 'foto1.jpg', 'Nome do Álbum Lorem Ipsum Dolor Sit Amet', 0, 0),
(2, 'foto2.jpg', 'Nome do Álbum Lorem Ipsum Dolor Sit Amet', 0, 0),
(3, 'foto3.jpg', 'Nome do Álbum Lorem Ipsum Dolor Sit Amet', 0, 0),
(4, 'foto4.jpg', 'Nome do Álbum Lorem Ipsum Dolor Sit Amet', 0, 0),
(5, 'foto5.jpg', 'Nome do Álbum Lorem Ipsum Dolor Sit Amet', 0, 0),
(6, 'foto6.jpg', 'Nome do Álbum Lorem Ipsum Dolor Sit Amet', 0, 0),
(7, 'foto7.jpg', 'Nome do Álbum Lorem Ipsum Dolor Sit Amet', 0, 0),
(8, 'foto8.jpg', 'Nome do Álbum Lorem Ipsum Dolor Sit Amet', 0, 0),
(9, 'foto9.jpg', 'Nome do Álbum Lorem Ipsum Dolor Sit Amet', 0, 0),
(10, 'foto10.jpg', 'Nome do Álbum Lorem Ipsum Dolor Sit Amet', 0, 0),
(11, 'foto11.jpg', 'Nome do Álbum Lorem Ipsum Dolor Sit Amet', 0, 0),
(12, 'foto12.jpg', 'Nome do Álbum Lorem Ipsum Dolor Sit Amet', 0, 0),
(13, 'foto13.jpg', 'Nome do Álbum Lorem Ipsum Dolor Sit Amet', 0, 0),
(14, 'foto14.jpg', 'Nome do Álbum Lorem Ipsum Dolor Sit Amet', 0, 0),
(15, 'foto15.jpg', 'Nome do Álbum Lorem Ipsum Dolor Sit Amet', 0, 0),
(16, 'foto16.jpg', 'Nome do Álbum Lorem Ipsum Dolor Sit Amet', 0, 0),
(17, 'foto17.jpg', 'Nome do Álbum Lorem Ipsum Dolor Sit Amet', 0, 0),
(18, 'foto18.jpg', 'Nome do Álbum Lorem Ipsum Dolor Sit Amet', 0, 0),
(19, 'foto19.jpg', 'Nome do Álbum Lorem Ipsum Dolor Sit Amet', 0, 0),
(20, 'foto20.jpg', 'Nome do Álbum Lorem Ipsum Dolor Sit Amet', 0, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
