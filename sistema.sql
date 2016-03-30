-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27-log
-- Versão do PHP: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `franquia`
--
CREATE DATABASE `franquia` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `franquia`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(10) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(20) NOT NULL,
  `email_cliente` varchar(50) NOT NULL,
  `telefone_cliente` varchar(15) NOT NULL,
  `id_funcionario` int(10) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `franquia`
--

CREATE TABLE IF NOT EXISTS `franquia` (
  `id_franquia` int(10) NOT NULL AUTO_INCREMENT,
  `nome_franquia` varchar(45) NOT NULL,
  `cnpj_franquia` varchar(45) NOT NULL,
  `id_funcionario` int(10) NOT NULL,
  PRIMARY KEY (`id_franquia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `id_funcionario` int(10) NOT NULL AUTO_INCREMENT,
  `nome_funcionario` varchar(45) NOT NULL,
  PRIMARY KEY (`id_funcionario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
