-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Ago-2018 às 11:56
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbphp7`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_usuarios_insert` (`pdeslogin` VARCHAR(256), `pdessenha` VARCHAR(64))  BEGIN

INSERT INTO tb_usuarios (deslogin,dessenha) VALUES(pdeslogin,pdessenha);

SELECT * FROM tb_usuarios WHERE idusuario = LAST_INSERT_ID();

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `idusuario` int(11) NOT NULL,
  `deslogin` varchar(256) NOT NULL,
  `dessenha` varchar(64) NOT NULL,
  `dtcadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`idusuario`, `deslogin`, `dessenha`, `dtcadastro`) VALUES
(1, 'João', '164864', '2018-08-21 00:41:04'),
(2, 'João', '164864', '2018-08-21 00:41:26'),
(3, 'João', '164864', '2018-08-21 00:41:28'),
(4, 'João', '164864', '2018-08-21 00:41:29'),
(5, 'João', '164864', '2018-08-21 00:41:29'),
(6, 'João', '164864', '2018-08-21 00:41:29'),
(7, 'Ratao', '164864', '2018-08-21 01:46:12'),
(8, 'Ratao', '164864', '2018-08-21 02:53:31'),
(9, 'Ratao', '164864', '2018-08-21 02:53:32'),
(10, 'Ratao', '164864', '2018-08-21 02:53:32'),
(11, 'Ratao', '164864', '2018-08-21 02:53:32'),
(12, 'swdwd', 'daiowdjawoijd', '2018-08-21 03:19:18'),
(13, 'swdwd', 'daiowdjawoijd', '2018-08-21 03:19:20'),
(14, 'swdwd', 'daiowdjawoijd', '2018-08-21 03:19:21'),
(15, 'swdwd', 'daiowdjawoijd', '2018-08-21 03:19:21'),
(16, 'swdwd', 'daiowdjawoijd', '2018-08-21 03:19:22'),
(17, 'swdwd', 'daiowdjawoijd', '2018-08-21 03:19:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
