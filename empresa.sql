-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Jun-2018 às 14:59
-- Versão do servidor: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empresa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `ID` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `sobrenome` varchar(40) NOT NULL,
  `CPF` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `logradouro` varchar(200) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `CEP` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`ID`, `nome`, `sobrenome`, `CPF`, `telefone`, `logradouro`, `numero`, `bairro`, `cidade`, `CEP`) VALUES
(6, 'Marcelo', 'Ferreira', '02502502525', '(41)99619-6729', 'Rua Antenor Alves De Souza', '597', 'Roça Grande', 'Colombo', '83402330'),
(7, 'Luiz Guilherme', 'Luize Pereira', '02502502555', '41-99171-6710', 'Rua Theodoro Gbur', '130 CS 2', 'tingui', 'curitiba', '82600-280'),
(8, 'Arno Paulo', 'Schimtz', '02502502555', '41-99999-9898', 'Avenida João Leopoldo Jacomel', '1354', 'Emiliano Perneta', 'Pinhais', '89999-980');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `ID` int(11) NOT NULL,
  `produto` varchar(20) NOT NULL,
  `codigoproduto` varchar(10) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `origem` varchar(20) NOT NULL,
  `precoc` text NOT NULL,
  `precov` text NOT NULL,
  `quantidade` int(10) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`ID`, `produto`, `codigoproduto`, `marca`, `modelo`, `origem`, `precoc`, `precov`, `quantidade`, `url`) VALUES
(37, 'Guitarra', '4A456', 'Fender', 'American Special Str', 'EUA', '5.800,00', '9.800,00', 9, 'img/fender.jpg'),
(38, 'Guitarra', '4A457', 'Gibson', 'Les Paul \'60s Tribut', 'EUA', '4.850,00', '7.399,00', 12, 'img/gibson.jpg'),
(39, 'Guitarra', '4C456', 'Ibanez', 'SV Séries - Azul', 'Indonesia', '2.700,00', '4.300,00', 20, 'img/ibanez2.jpg'),
(40, 'Guitarra', '789', 'Ibanez', 'S-56', 'USA', '4.159,99', '7.000,00', 3, 'img/ibanez.jpg'),
(41, 'Guitarra', '956', 'Gibson', '67 Flying V - Ebony', 'USA', '7.159,99', '12.000,00', 3, 'img/DSVREBCH-Finish-Shot.jpg'),
(42, 'Guitarra', '955', 'Gibson', 'Robot Les Paul', 'USA', '4.159,99', '7.000,00', 3, 'img/LPRGWRCH.jpg'),
(43, 'Guitarra', '940', 'Squier', 'Bullet Mustang', 'UK', '4.159,99', '6.000,00', 5, 'img/squier-bullet-mustang-electric-guitar-black-415178.jpg'),
(44, 'Guitarra', '850', 'Ibanez', 'GRX20-CA Candy Apple', 'USA', '7.159,99', '12.500,00', 2, 'img/ibanez-grx20-ca-candy-apple-electric-guitar.jpg'),
(48, 'Guitarra', '458', 'Fender', 'Stratocaster Squier ', 'USA', '27.159,99', '42.599,20', 1, 'img/guitarra-fender-032-1670-squier-standard-stratocaster-fmt-520-amber-burst-0-p3039.jpg'),
(50, 'Guitarra', '777', 'Ibanez', 'GRX70 - transparent ', 'USA', '7.159,99', '12.399.99', 2, 'img/ibanez-grx70-trb-transparent-blue-burst-electric-guitar.jpg'),
(51, 'Guitarra', '756', 'Ibanez', 'GRX20-P Pink', 'USA', '1.159,99', '3.199.99', 5, 'img/lg_8d93a4ffc3e18119bb2acd95ea82130b.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedor`
--

CREATE TABLE `vendedor` (
  `ID` int(11) NOT NULL,
  `nomevendedor` varchar(200) NOT NULL,
  `codigovendedor` varchar(10) NOT NULL,
  `comissao` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendedor`
--

INSERT INTO `vendedor` (`ID`, `nomevendedor`, `codigovendedor`, `comissao`) VALUES
(3, 'Marcelo Ferreira', 'MF123', '3.00'),
(4, 'Luiz Guilherme Luize Pereira', 'LG255', '3.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `ID_2` (`ID`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
