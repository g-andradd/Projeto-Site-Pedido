-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Maio-2021 às 15:32
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_andrade`
--
CREATE DATABASE IF NOT EXISTS `projeto_andrade` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projeto_andrade`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nome_cliente` varchar(45) NOT NULL,
  `sobrenome_cliente` varchar(45) NOT NULL,
  `email_cliente` varchar(45) NOT NULL,
  `senha_cliente` varchar(45) NOT NULL,
  `cpf_cliente` varchar(45) NOT NULL,
  `telefone_cliente` varchar(45) NOT NULL,
  `endereco_cliente` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nome_cliente`, `sobrenome_cliente`, `email_cliente`, `senha_cliente`, `cpf_cliente`, `telefone_cliente`, `endereco_cliente`) VALUES
(1, 'Gabriel', 'Andrade', 'gabriel@gmail.com', '1234', '00000000000', '6199999999', '21344141 qr 0 conjunto 0 40 Gama');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `idpedido` int(11) NOT NULL,
  `nome_pedido` varchar(45) NOT NULL,
  `data_pedido` varchar(20) NOT NULL,
  `quantidade_pedido` int(11) NOT NULL,
  `valor_pedido` float NOT NULL,
  `cliente_idcliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`idpedido`, `nome_pedido`, `data_pedido`, `quantidade_pedido`, `valor_pedido`, `cliente_idcliente`) VALUES
(1, 'Bento Sushi', '0000-00-00', 2, 50, 1),
(2, 'Sushi Onigiri', '05/05/2021 09:22', 2, 20, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idproduto` int(11) NOT NULL,
  `classe_produto` varchar(45) NOT NULL,
  `nome_produto` varchar(45) NOT NULL,
  `valor_produto` float NOT NULL,
  `descricao_produto` varchar(200) NOT NULL,
  `img_produto` varchar(45) DEFAULT NULL,
  `tipo_img` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idproduto`, `classe_produto`, `nome_produto`, `valor_produto`, `descricao_produto`, `img_produto`, `tipo_img`) VALUES
(1, 'Sushi', 'Sushi Sashimi', 10, 'Conheça o melhor Sushi Sashimi da cidade!', 'sushi1', 'jpg'),
(2, 'Sushi', 'Sushi Onigiri', 10, 'Conheça o melhor Onigiri da cidade!', 'sushi2', 'jpg'),
(3, 'Sushi', 'Bento Sushi', 25, 'Entregamos nossas marmitas de sushi em qualquer lugar de brasília', 'sushi3', 'jpg'),
(4, 'Sashimi', 'Porção média Sashimi', 20, 'Porção media de sashimi do peixe Sauro Pacífico Sazonal.', 'sashimi1', 'png'),
(5, 'Sashimi', 'Barca de Sashimi', 50, 'Barca de sashimi', 'sashimi2', 'png'),
(6, 'Sashimi', 'Porção pequena Sashimi', 12, 'Porção pequena de sashimi do peixe Sauro Pacífico Sazonal.', 'sashimi3', 'jpg'),
(7, 'Donburi', 'Gyudon', 20, 'Gyudon, é um prato japonês que consiste em uma tigela de arroz coberta com carne bovina e cebola cozidos em um molho levemente adocicado feito de dashi, shoyu e mirin. Também pode incluir shirataki e ', 'donburi1_gyudon', 'png'),
(8, 'Donburi', 'Hamburger Steak Don', 25, 'Hamburger Steak Don Consiste em uma tigela de arroz com componentes de um hamburger simples com alface, tomate, ovo e molho.', 'donburi2_hamburger_steak_don', 'png'),
(9, 'Donburi', 'Sukiyakidon', 25, 'O sukiyakidon é uma tigela de arroz com um cozido que leva os seguintes ingredientes: carnes fatiadas bem finas, verduras, cogumelos, konnyaku e ito konnyaku, kamaboku.', 'donburi3_sukiyaki_don', 'png'),
(10, 'Donburi', 'Chaliapin Steak Don', 20, 'Chaliapin Steak é um bife com cebola, deixando sua carne bem macia e suculenta, foi um prato formado no japão e combina perfeitamente com uma tigela de arroz.', 'donburi4_chaliapin-steak-don', 'jpg'),
(11, 'Donburi', 'Tamago Tempura Don', 25, 'É um tempura de ovo de galinha com caldo de frango e uma tigela de arroz', 'donburi5_chicken_egg_tempura_don', 'png'),
(12, 'Donburi', 'Steakdon', 20, 'Uma tigela de arroz com fatias de bife de carne com tofu e gengibre para completar o sabor, com molho feito a base de shoyo.', 'donburi6', 'jpg'),
(13, 'Donburi', 'Currydon', 25, 'O Curry é uma mistura de especiarias muito utilizada na culinária de países como Índia, Tailândia e alguns outros países asiáticos. Junto com uma tigela de arroz', 'donburi7', 'png'),
(14, 'Lámen', 'Lámen de Enguia', 25, 'Lámen de enguia', 'lamen1', 'png'),
(15, 'Lámen', 'Lámen Vegano', 30, 'Lámen Vegano', 'lamen2_vegan', 'png'),
(16, 'Lámen', 'Katsulamén', 20, 'Lámen com fatias de costela de porco com ovo e shitake', 'lamen3', 'gif'),
(17, 'Lámen', 'Lámen Naruto', 20, 'Lámen simples com naruto', 'lamen4', 'jpg'),
(18, 'Tempura', ' Tempura Camarão pequeno', 10, 'Porção pequena de tempura de camarão com xuxu empanado', 'tempura1', 'png'),
(19, 'Tempura', 'Tempura Camarão grande', 30, 'Porção grande de tempura de camarão', 'tempura2', 'jpg'),
(20, 'Tempura', 'Tempuradon', 30, 'Tigela de arroz com tempura de camarão acompanhado por uma sopa de legumes', 'tempura3', 'gif'),
(21, 'Tempura', 'Okakiage', 20, 'Peixe empanado com kaki no tane. Kaki no tane são pequenos fragmentos em forma de crescente de senbei e amendoim.', 'tempura4_okakiage', 'png'),
(22, 'Omelete', 'Omelete Sufle', 20, 'Uma omelete com testura de sufle com um molho de tomate, uma ótima opção para começar seu dia', 'omelete1', 'jpg'),
(23, 'Omelete', 'Omelete com arroz', 25, 'Omelete recheada com arroz ao molho de tomate', 'omelete2', 'png'),
(24, 'Omelete', 'Tamagodon', 20, 'Uma tigela de arroz com ovo mechido e cubos de caldo de frango que ao misturado com o arroz quente, derrete e se transforma num molho de frango', 'omelete3', 'gif');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_has_pedido`
--

CREATE TABLE `produto_has_pedido` (
  `produto_idproduto` int(11) NOT NULL,
  `pedido_idpedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto_has_pedido`
--

INSERT INTO `produto_has_pedido` (`produto_idproduto`, `pedido_idpedido`) VALUES
(2, 2),
(3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nome_usuario` varchar(45) NOT NULL,
  `senha_usuario` varchar(45) NOT NULL,
  `email_usuario` varchar(45) NOT NULL,
  `cpf_usuario` varchar(45) NOT NULL,
  `telefone_usuario` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome_usuario`, `senha_usuario`, `email_usuario`, `cpf_usuario`, `telefone_usuario`) VALUES
(1, 'Gabriel Almeida', '123', 'gabriel@gmail.com', '00011100011', '61900001111');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`),
  ADD UNIQUE KEY `cpf_cliente_UNIQUE` (`cpf_cliente`),
  ADD UNIQUE KEY `senha_cliente_UNIQUE` (`senha_cliente`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idpedido`),
  ADD KEY `fk_pedido_cliente_idx` (`cliente_idcliente`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idproduto`);

--
-- Índices para tabela `produto_has_pedido`
--
ALTER TABLE `produto_has_pedido`
  ADD PRIMARY KEY (`produto_idproduto`,`pedido_idpedido`),
  ADD KEY `fk_produto_has_pedido_pedido1_idx` (`pedido_idpedido`),
  ADD KEY `fk_produto_has_pedido_produto1_idx` (`produto_idproduto`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_pedido_cliente` FOREIGN KEY (`cliente_idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produto_has_pedido`
--
ALTER TABLE `produto_has_pedido`
  ADD CONSTRAINT `fk_produto_has_pedido_pedido1` FOREIGN KEY (`pedido_idpedido`) REFERENCES `pedido` (`idpedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produto_has_pedido_produto1` FOREIGN KEY (`produto_idproduto`) REFERENCES `produto` (`idproduto`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
