-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Jan-2015 às 18:01
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gestaodeclientes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
`id` int(11) NOT NULL,
  `nome` varchar(85) NOT NULL,
  `morada` varchar(40) NOT NULL,
  `contacto` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nif` varchar(25) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `morada`, `contacto`, `email`, `nif`, `data`) VALUES
(1, 'rodrigo', 'RUa banda musica de moreira', '914011743', 'rodrigophp1@hotmail.com', '8765432456', '1991-08-22'),
(74, 'rtyuiop', '', '', '', '', '0000-00-00'),
(75, '5t6y7uiop', '', '', '', '', '0000-00-00'),
(76, 'tghjklç', '', '', '', '', '0000-00-00'),
(77, 'ghjklç', '', '', '', '', '0000-00-00'),
(78, 'sfsw', '', '', '', '', '0000-00-00'),
(79, 'weewe', 'weew', 'wee', 'we', '', '0000-00-00'),
(80, 'weewe', '', '', '', '', '0000-00-00'),
(81, 'weew', '', '', '', '', '0000-00-00'),
(82, 'weweew', '', '', '', '', '0000-00-00'),
(83, 'wewee', '', '', '', '', '0000-00-00'),
(84, 'weewe', '', '', '', '', '0000-00-00'),
(85, 'wefsfd', '', '', '', '', '0000-00-00'),
(86, 'sdfsdfc', '', '', '', '', '0000-00-00'),
(87, 'sdfsdf', '', '', '', '', '0000-00-00'),
(88, 'sdfsdf', '', '', '', 'sdfsdf', '0000-00-00'),
(89, 'sdfsdf', '', '', '', 'sdfsdf', '0000-00-00'),
(90, 'sdfsdf', '', '', '', 'sdfsdf', '0000-00-00'),
(91, 'sdfsdf', '', '', '', 'sdfsdf', '0000-00-00'),
(92, 'sdfsdf', '', '', '', 'sdfsdf', '0000-00-00'),
(93, 'sdfsdf', '', '', '', 'sdfsdf', '0000-00-00'),
(94, 'sdfsdf', '', '', '', 'sdfsdf', '0000-00-00'),
(95, 'dsfsdf', '', '', '', '', '0000-00-00'),
(96, 'sfsdf', '', '', '', '', '0000-00-00'),
(97, 'sfsdf', '', '', '', '', '0000-00-00'),
(98, 'sfsdf', '', '', '', '', '0000-00-00'),
(99, 'sfsdf', '', '', '', '', '0000-00-00'),
(100, 'sfsdf', '', '', '', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
