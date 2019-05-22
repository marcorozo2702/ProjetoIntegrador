-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.13 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para portalnoticia
DROP DATABASE IF EXISTS `portalnoticia`;
CREATE DATABASE IF NOT EXISTS `portalnoticia` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `portalnoticia`;

-- Copiando estrutura para tabela portalnoticia.tb_assinante
DROP TABLE IF EXISTS `tb_assinante`;
CREATE TABLE IF NOT EXISTS `tb_assinante` (
  `id_assinante` int(11) NOT NULL AUTO_INCREMENT,
  `tx_nome` varchar(100) NOT NULL,
  `tx_senha` varchar(30) NOT NULL,
  `tx_email` varchar(100) NOT NULL,
  `tx_cidade` varchar(100) NOT NULL,
  `tx_estado` varchar(30) NOT NULL,
  `tx_telefone` varchar(30) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `cd_plano` int(11) NOT NULL,
  PRIMARY KEY (`id_assinante`),
  KEY `planoassinante` (`cd_plano`),
  CONSTRAINT `planoassinante` FOREIGN KEY (`cd_plano`) REFERENCES `tb_plano` (`id_plano`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela portalnoticia.tb_assinante: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_assinante` DISABLE KEYS */;
INSERT INTO `tb_assinante` (`id_assinante`, `tx_nome`, `tx_senha`, `tx_email`, `tx_cidade`, `tx_estado`, `tx_telefone`, `dt_nascimento`, `cd_plano`) VALUES
	(1, 'Igor Oliveira', 'igor123', 'igoroliveira@gmail.com', 'São Miguel do Oeste', 'SC', '49991707070', '2003-10-10', 1),
	(2, 'Rafael', 'rafa123', 'rafael@gmail.com', 'São Miguel do Oeste', 'SC', '49991000000', '1994-02-13', 2),
	(3, 'Pedro', 'pedro123', 'pedro@gmail.com', 'SJ Cedro', 'SC', '4991555555', '2002-05-07', 3),
	(4, 'Elaine', 'ela123', 'ela@gmail.com', 'São Paulo', 'SP', '49991666666', '2009-05-07', 4),
	(5, 'Neusa', 'neu123', 'neu@gmail.coi', 'Florianopolix', 'SC', '49991111111', '2000-05-07', 5);
/*!40000 ALTER TABLE `tb_assinante` ENABLE KEYS */;

-- Copiando estrutura para tabela portalnoticia.tb_categoria
DROP TABLE IF EXISTS `tb_categoria`;
CREATE TABLE IF NOT EXISTS `tb_categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `tx_nome` varchar(40) NOT NULL,
  `tx_descricao` varchar(150) NOT NULL,
  `cd_noticia` int(11) NOT NULL,
  PRIMARY KEY (`id_categoria`),
  KEY `noticiacategoria` (`cd_noticia`),
  CONSTRAINT `notociacategoria` FOREIGN KEY (`cd_noticia`) REFERENCES `tb_noticia` (`id_noticia`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela portalnoticia.tb_categoria: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_categoria` DISABLE KEYS */;
INSERT INTO `tb_categoria` (`id_categoria`, `tx_nome`, `tx_descricao`, `cd_noticia`) VALUES
	(1, 'eSports', 'Fique por dentro das últimas notícias de eSports e da cobertura de torneios profissionais.', 1),
	(2, 'Policial', 'Noticial policias ', 2);
/*!40000 ALTER TABLE `tb_categoria` ENABLE KEYS */;

-- Copiando estrutura para tabela portalnoticia.tb_comentario
DROP TABLE IF EXISTS `tb_comentario`;
CREATE TABLE IF NOT EXISTS `tb_comentario` (
  `id_comentario` int(11) NOT NULL AUTO_INCREMENT,
  `cd_noticia` int(11) NOT NULL,
  PRIMARY KEY (`id_comentario`),
  KEY `noticiacomentario` (`cd_noticia`),
  CONSTRAINT `noticiacomentario` FOREIGN KEY (`cd_noticia`) REFERENCES `tb_noticia` (`id_noticia`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela portalnoticia.tb_comentario: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_comentario` DISABLE KEYS */;
INSERT INTO `tb_comentario` (`id_comentario`, `cd_noticia`) VALUES
	(1, 1),
	(2, 2);
/*!40000 ALTER TABLE `tb_comentario` ENABLE KEYS */;

-- Copiando estrutura para tabela portalnoticia.tb_filial
DROP TABLE IF EXISTS `tb_filial`;
CREATE TABLE IF NOT EXISTS `tb_filial` (
  `id_filial` int(11) NOT NULL AUTO_INCREMENT,
  `tx_endereco` varchar(100) NOT NULL,
  `tx_descricao` varchar(200) NOT NULL,
  PRIMARY KEY (`id_filial`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela portalnoticia.tb_filial: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_filial` DISABLE KEYS */;
INSERT INTO `tb_filial` (`id_filial`, `tx_endereco`, `tx_descricao`) VALUES
	(1, 'São Miguel do Oeste', 'Matriz'),
	(2, 'Salvador', 'Filial 01'),
	(3, 'New York', 'Filial 02'),
	(4, 'Amsterdã', 'Filial 03'),
	(5, 'Sydney', 'Filial 04');
/*!40000 ALTER TABLE `tb_filial` ENABLE KEYS */;

-- Copiando estrutura para tabela portalnoticia.tb_foto
DROP TABLE IF EXISTS `tb_foto`;
CREATE TABLE IF NOT EXISTS `tb_foto` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `tx_titulo` varchar(20) DEFAULT NULL,
  `tx_descricao` varchar(60) DEFAULT NULL,
  `cd_noticia` int(11) NOT NULL,
  PRIMARY KEY (`id_foto`),
  KEY `noticiafoto` (`cd_noticia`),
  CONSTRAINT `noticiafoto` FOREIGN KEY (`cd_noticia`) REFERENCES `tb_noticia` (`id_noticia`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela portalnoticia.tb_foto: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_foto` DISABLE KEYS */;
INSERT INTO `tb_foto` (`id_foto`, `tx_titulo`, `tx_descricao`, `cd_noticia`) VALUES
	(1, 'GC', 'Logo GC', 1),
	(2, 'Strada apreendida', 'Camionete', 2);
/*!40000 ALTER TABLE `tb_foto` ENABLE KEYS */;

-- Copiando estrutura para tabela portalnoticia.tb_jornalista
DROP TABLE IF EXISTS `tb_jornalista`;
CREATE TABLE IF NOT EXISTS `tb_jornalista` (
  `id_jornalista` int(11) NOT NULL AUTO_INCREMENT,
  `tx_nome` varchar(100) NOT NULL,
  `tx_login` varchar(20) NOT NULL,
  `tx_senha` varchar(20) NOT NULL,
  `tx_cpf` varchar(15) NOT NULL,
  `cd_filial` int(11) NOT NULL,
  PRIMARY KEY (`id_jornalista`),
  KEY `filialjornalista` (`cd_filial`),
  CONSTRAINT `filialjornalista` FOREIGN KEY (`cd_filial`) REFERENCES `tb_filial` (`id_filial`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela portalnoticia.tb_jornalista: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_jornalista` DISABLE KEYS */;
INSERT INTO `tb_jornalista` (`id_jornalista`, `tx_nome`, `tx_login`, `tx_senha`, `tx_cpf`, `cd_filial`) VALUES
	(1, 'Marco Antonio', 'marco777', 'marco123', '000.000.000-00', 1),
	(2, 'Joao', 'joao0', 'joao123', '000.000.000-00', 2);
/*!40000 ALTER TABLE `tb_jornalista` ENABLE KEYS */;

-- Copiando estrutura para tabela portalnoticia.tb_noticia
DROP TABLE IF EXISTS `tb_noticia`;
CREATE TABLE IF NOT EXISTS `tb_noticia` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `tx_titulo` varchar(100) NOT NULL,
  `tx_descricao` varchar(400) NOT NULL,
  `dt_data` date NOT NULL,
  `tx_texto` text NOT NULL,
  `cd_jornalista` int(11) NOT NULL,
  `cd_plano` int(11) NOT NULL,
  `cd_filial` int(11) NOT NULL,
  PRIMARY KEY (`id_noticia`),
  KEY `jornalistanoticia` (`cd_jornalista`),
  KEY `planonoticia` (`cd_plano`),
  KEY `filialnoticia` (`cd_filial`),
  CONSTRAINT `filialnoticia` FOREIGN KEY (`cd_filial`) REFERENCES `tb_filial` (`id_filial`),
  CONSTRAINT `jornalistanoticia` FOREIGN KEY (`cd_jornalista`) REFERENCES `tb_jornalista` (`id_jornalista`),
  CONSTRAINT `planonoticia` FOREIGN KEY (`cd_plano`) REFERENCES `tb_plano` (`id_plano`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela portalnoticia.tb_noticia: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_noticia` DISABLE KEYS */;
INSERT INTO `tb_noticia` (`id_noticia`, `tx_titulo`, `tx_descricao`, `dt_data`, `tx_texto`, `cd_jornalista`, `cd_plano`, `cd_filial`) VALUES
	(1, 'Immortals compra Gamers Club', 'Após receber investimento de 30 milhões de dólares, Immortals compra Gamers Club', '2019-05-01', '...', 1, 1, 1),
	(2, 'Strada da fuga na PF', 'Apreendida strada com 12k de mços de cigarros contrabandeados que tentou fugir da PF', '2019-04-06', '...', 2, 2, 2),
	(3, 'Team Liquid tira MiBR da IEM Sydnei', 'Em uma partida acirrada, MiBR perde para Liquid por 2 mapas a 0  ', '2001-05-01', '...', 1, 1, 2),
	(4, 'Aluno do senac quebra pc por se estressar com MySql', 'O aluno X quebrou o pc por se estressar com um programa usado no cuurso técnico de Informática para internet nessa terça-feira', '2020-05-07', '...', 2, 1, 2),
	(5, 'Milagre! Liverpool 4 x Barcelona 0', 'Liverpool faz história, goleia Barcelona e vai a final da Champinha', '2019-05-07', '...', 1, 2, 1);
/*!40000 ALTER TABLE `tb_noticia` ENABLE KEYS */;

-- Copiando estrutura para tabela portalnoticia.tb_plano
DROP TABLE IF EXISTS `tb_plano`;
CREATE TABLE IF NOT EXISTS `tb_plano` (
  `id_plano` int(11) NOT NULL AUTO_INCREMENT,
  `vl_valor` float NOT NULL,
  `tx_descricao` varchar(200) NOT NULL,
  `tx_nome` varchar(100) NOT NULL,
  `cd_filial` int(11) NOT NULL,
  PRIMARY KEY (`id_plano`),
  KEY `filialplano` (`cd_filial`),
  CONSTRAINT `filialplano` FOREIGN KEY (`cd_filial`) REFERENCES `tb_filial` (`id_filial`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela portalnoticia.tb_plano: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_plano` DISABLE KEYS */;
INSERT INTO `tb_plano` (`id_plano`, `vl_valor`, `tx_descricao`, `tx_nome`, `cd_filial`) VALUES
	(1, 90, 'Acesso completo', 'Pacote premium deluxe supremo top pika das galaxias', 1),
	(2, 30, 'Sem materias exclusivas', 'Pacote prata', 2),
	(3, 20, 'Basicão', 'Pacote básico', 3),
	(4, 55.5, 'Esportes', 'Pacote esportes', 5),
	(5, 35, 'Vizinha chata', 'Pacote fofoca', 4);
/*!40000 ALTER TABLE `tb_plano` ENABLE KEYS */;

-- Copiando estrutura para tabela portalnoticia.tb_vencimentoplano
DROP TABLE IF EXISTS `tb_vencimentoplano`;
CREATE TABLE IF NOT EXISTS `tb_vencimentoplano` (
  `id_vencimentoplano` int(11) NOT NULL AUTO_INCREMENT,
  `dt_inicio` date NOT NULL,
  `dt_vencimento` date NOT NULL,
  `cd_plano` int(11) NOT NULL,
  `cd_assinante` int(11) NOT NULL,
  PRIMARY KEY (`id_vencimentoplano`),
  KEY `planovencimentoplano` (`cd_plano`),
  KEY `assinantevencimentoplano` (`cd_assinante`),
  CONSTRAINT `assinantevencimentoplano` FOREIGN KEY (`cd_assinante`) REFERENCES `tb_assinante` (`id_assinante`),
  CONSTRAINT `planovencimentoplano` FOREIGN KEY (`cd_plano`) REFERENCES `tb_plano` (`id_plano`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela portalnoticia.tb_vencimentoplano: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_vencimentoplano` DISABLE KEYS */;
INSERT INTO `tb_vencimentoplano` (`id_vencimentoplano`, `dt_inicio`, `dt_vencimento`, `cd_plano`, `cd_assinante`) VALUES
	(1, '2018-12-03', '2019-12-03', 1, 1),
	(2, '2018-10-20', '2019-04-20', 2, 2),
	(3, '2019-06-07', '2019-05-01', 3, 3),
	(4, '2019-02-17', '2019-08-07', 4, 4),
	(5, '2017-05-07', '2020-05-07', 5, 5);
/*!40000 ALTER TABLE `tb_vencimentoplano` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
