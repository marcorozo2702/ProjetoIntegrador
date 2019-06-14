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


-- Copiando estrutura do banco de dados para projetointegrador
CREATE DATABASE IF NOT EXISTS `projetointegrador` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projetointegrador`;

-- Copiando estrutura para tabela projetointegrador.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetointegrador.categoria: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`id`, `nome`) VALUES
	(1, 'Esportes');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Copiando estrutura para tabela projetointegrador.ci_sessions
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetointegrador.ci_sessions: ~21 rows (aproximadamente)
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
	('j3e61c40uf43m2o4vlqd5ommuk1pu275', '127.0.0.1', 1560465025, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303436353032353B),
	('9hcs4t2l9erp5ttqvrnps9ocjo89megn', '127.0.0.1', 1560465326, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303436353332363B),
	('108muler4aul2kn2uvr4nkbgepb4qepj', '127.0.0.1', 1560465627, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303436353632373B),
	('too78opunc8ol0i006430lhl2mu0tf6a', '127.0.0.1', 1560465969, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303436353936393B),
	('qd8nubhkplbve81oa345kfi5epskstov', '127.0.0.1', 1560466400, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303436363430303B),
	('bdm9kd2jgmrdslu4gasa7aa6821ne6qa', '127.0.0.1', 1560466735, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303436363733353B),
	('4uq23nrqp9q7mmsvdeld7540luu708td', '127.0.0.1', 1560467048, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303436373034383B),
	('pvhe3ld88or1ehdjt8m0kmktlmt8n2pc', '127.0.0.1', 1560467413, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303436373431333B),
	('4a6gkvb0jpslr6ikk6l4ckifjknl0n9p', '127.0.0.1', 1560467808, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303436373830383B),
	('fpt9qnbrka075h88gidktd6fctt1asfc', '127.0.0.1', 1560468247, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303436383234373B),
	('v2p9k57tqoeoue2f95gvunop40ju7mni', '127.0.0.1', 1560468579, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303436383537393B),
	('2nic71plare26s8uno37nmol7fn0vpj9', '127.0.0.1', 1560468916, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303436383931363B),
	('ciss7m5uebaik46ie0fqf06aa3hi4f79', '127.0.0.1', 1560470111, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303437303131313B),
	('3bgeu8kpcfn0l18i4e98lqpqr90iee9m', '127.0.0.1', 1560470483, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303437303438333B),
	('qe4baesn5dnh49jmntug89reh8a88eu1', '127.0.0.1', 1560470843, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303437303834333B),
	('c6j843q0ggbr5aask0jiv1hsa48069d3', '127.0.0.1', 1560471251, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303437313235313B),
	('7bp5b2hra8663vqdagm91fvfp736ve5v', '127.0.0.1', 1560471563, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303437313536333B),
	('8mpcvu2v74k7pomlsl2hosk3agg4nc9h', '127.0.0.1', 1560471994, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303437313939343B),
	('rk64v1d06nuouso10c3o4qpkst6k60l6', '127.0.0.1', 1560472735, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303437323733353B),
	('tb756p2j5efmb3dj9ilb4vj4cqn38b59', '127.0.0.1', 1560473211, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303437333231313B),
	('e4i4pic8m259e5ac3u9pkfi8rrd0l486', '127.0.0.1', 1560473289, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303437333231313B);
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;

-- Copiando estrutura para tabela projetointegrador.jornalista
CREATE TABLE IF NOT EXISTS `jornalista` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetointegrador.jornalista: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `jornalista` DISABLE KEYS */;
INSERT INTO `jornalista` (`id`, `nome`, `email`, `senha`) VALUES
	(1, 'Marco Antonio', 'marco.rozo@aluno.sc.senac.br', '580ad6484c05966c07368862bd70a46404bcf36d'),
	(2, 'Mayana Willemann', 'mayana@gmail.com', '580ad6484c05966c07368862bd70a46404bcf36d');
/*!40000 ALTER TABLE `jornalista` ENABLE KEYS */;

-- Copiando estrutura para tabela projetointegrador.noticia
CREATE TABLE IF NOT EXISTS `noticia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `cd_categoria` int(10) unsigned NOT NULL,
  `cd_jornalista` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tb_noticia_tb_categoria1_idx` (`cd_categoria`),
  KEY `fk_tb_noticia_tb_usuario1_idx` (`cd_jornalista`),
  CONSTRAINT `fk_tb_noticia_tb_categoria1` FOREIGN KEY (`cd_categoria`) REFERENCES `categoria` (`id`),
  CONSTRAINT `fk_tb_noticia_tb_usuario1` FOREIGN KEY (`cd_jornalista`) REFERENCES `jornalista` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetointegrador.noticia: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `noticia` DISABLE KEYS */;
INSERT INTO `noticia` (`id`, `titulo`, `descricao`, `texto`, `imagem`, `data`, `cd_categoria`, `cd_jornalista`) VALUES
	(1, 'a', 'a', 'a', NULL, '2019-01-13', 1, 2),
	(2, 'b', 'b', 'b', NULL, '2018-06-13', 1, 1),
	(3, 'c', 'c', 'c', NULL, '2017-06-13', 1, 1),
	(10, 'Vereadores mirins realizam sessão mensal', 'Os vereadores mirins de São Miguel do Oeste realizaram nesta terça-feira, 04, o encontro mensal de junho.', '<p><span style="font-size: 12pt;">Os vereadores mirins de S&atilde;o Miguel do Oeste realizaram nesta ter&ccedil;a-feira, 04, o encontro mensal de junho. A sess&atilde;o teve defesa de indica&ccedil;&otilde;es e momento cultural das escolas, em que cada vereador mirim pode trazer informa&ccedil;&otilde;es sobre as atividades que sua escola desempenha. Nesta sess&atilde;o, foi apresentada a hist&oacute;ria e as a&ccedil;&otilde;es da Escola Marechal Arthur da Costa e Silva, realizada pela vereadora mirim Camili Mocelin.</span></p>\r\n<p><span style="font-size: 12pt;">Na sess&atilde;o tamb&eacute;m foram apresentadas duas indica&ccedil;&otilde;es. Uma delas, de Sara Stedile, solicita &agrave; Administra&ccedil;&atilde;o Municipal que disponibilize a vacina&ccedil;&atilde;o contra a gripe para os agricultores no grupo priorit&aacute;rio. A vereadora mirim justifica que os agricultores est&atilde;o expostos a perigos, entre os quais a gripe, destacando que em nossa regi&atilde;o o inverno &eacute; rigoroso, com per&iacute;odos longos de garoa e chuva. Ela pede, ent&atilde;o, que o Munic&iacute;pio viabilize a distribui&ccedil;&atilde;o gratuita da vacina contra a gripe para todos os agricultores de S&atilde;o Miguel do Oeste. A indica&ccedil;&atilde;o foi subscrita por Kevin Ledur.</span></p>\r\n<p style="text-align: right;"><span style="font-size: 12pt;">04/06/2019</span></p>\r\n<p>"&gt;</p>', NULL, '2019-06-11', 1, 1),
	(24, 'Instagram apresenta instabilidade nesta quinta-feira', 'Site do Facebook ficou fora do ar nos EUA, Europa e América do Sul, incluindo o Brasil.', '<p>&nbsp;</p>\r\n<div class="mc-column content-text active-extra-styles " data-block-type="unstyled" data-block-weight="39" data-block-id="2">\r\n<p class="content-text__container " data-track-category="Link no Texto" data-track-links=""><span style="font-size: 18pt;">O Instagram deixou de funcionar no final da tarde desta quinta-feira (13). O aplicativo saiu do ar em v&aacute;rios lugares dos Estados Unidos, Europa e na Am&eacute;rica do Sul, incluindo o Brasil, de acordo com o site Down Detector.</span></p>\r\n</div>\r\n<div class="wall protected-content">\r\n<div class="mc-column content-text active-extra-styles " data-block-type="unstyled" data-block-weight="22" data-block-id="3">\r\n<p class="content-text__container " data-track-category="Link no Texto" data-track-links=""><span style="font-size: 18pt;">A queda foi um dos assuntos mais comentados no Twitter, onde postagens com o termo "Instagram" tiveram mais de 105 mil registros.</span></p>\r\n</div>\r\n<div class="mc-column content-text active-extra-styles " data-block-type="unstyled" data-block-weight="12" data-block-id="4">\r\n<p class="content-text__container " data-track-category="Link no Texto" data-track-links=""><span style="font-size: 18pt;">No Brasil, por volta das 20h15, a situa&ccedil;&atilde;o j&aacute; estava normalizada.</span></p>\r\n</div>\r\n</div>', '8339b814ba54997b60695b28d377d0d3.jpg', '2019-06-13', 1, 2),
	(25, 'a', 'Honda', '<p>uahsuahsuahsuahsuahsuas&nbsp;<span style="font-size: 24pt;"><strong> testeazsasas</strong></span></p>\r\n<p>&nbsp;</p>\r\n<p><img src="https://s2.glbimg.com/bwNYSd_OsiWwW2E8c73ZvRoP6N4=/0x0:1000x708/1000x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2019/6/V/gcPlU9T1GREritFzJpLA/instagram-silhuetas-reuters.jpg" alt="" width="405" height="287" /></p>', NULL, '2019-06-13', 1, 1),
	(26, 'a', 'Honda', '<p><strong> testeazsasas</strong></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>lkansjkasasaskjabkjsassasakjsvyusadfkahgd</p>\r\n<p style="padding-left: 480px;"><img style="color: #626262;" src="https://fotos.jornaldocarro.estadao.com.br/uploads/2018/07/17143304/gol-mil-1160x773.jpg" alt="" width="275" height="183" /></p>\r\n<p><img src="https://s2.glbimg.com/bwNYSd_OsiWwW2E8c73ZvRoP6N4=/0x0:1000x708/1000x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2019/6/V/gcPlU9T1GREritFzJpLA/instagram-silhuetas-reuters.jpg" alt="" width="405" height="287" /></p>\r\n<p>&nbsp;</p>\r\n<p><a title="image" href="http://prntscr.com/o1ls92">http://prntscr.com/o1ls92</a></p>', NULL, '2019-06-13', 1, 1);
/*!40000 ALTER TABLE `noticia` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
