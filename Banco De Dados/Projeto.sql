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
DROP DATABASE IF EXISTS `projetointegrador`;
CREATE DATABASE IF NOT EXISTS `projetointegrador` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projetointegrador`;

-- Copiando estrutura para tabela projetointegrador.categoria
DROP TABLE IF EXISTS `categoria`;
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
DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetointegrador.ci_sessions: ~24 rows (aproximadamente)
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
	('3skttjnn6u1og1kp2cnmcc5fjhpu4j61', '127.0.0.1', 1560897397, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303839373339373B),
	('ok70fspbme2al49f8qpguso6rsfdtde7', '127.0.0.1', 1560898601, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303839383630313B),
	('c3a9jfge3oj2o96b256kud3m57qifurl', '127.0.0.1', 1560898943, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303839383934333B),
	('gjri6lnoqn83tf7s24f5qlpv2an4nn2v', '127.0.0.1', 1560899457, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303839393435373B),
	('ttdacqciemvaks6js7304gb8n1l64oaq', '127.0.0.1', 1560899926, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303839393932363B),
	('se573vo746tlj9kv0smg7timmk6q57ia', '127.0.0.1', 1560900270, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930303237303B),
	('jbgqgmgv50gqhucv413k5lb7cl49mso9', '127.0.0.1', 1560900740, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930303734303B),
	('i9pclqaup6jddea3stc5309l3i4dljpf', '127.0.0.1', 1560901047, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930313034373B),
	('oqrk687plkd2v3ku3io1k0i1caoa7ceg', '127.0.0.1', 1560901392, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930313339323B),
	('a13lv19fht6g3cpk2dkfqmvr0atn19j0', '127.0.0.1', 1560901693, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930313639333B),
	('jk4rqruuf7ntq69o370lmud8r07ctb6t', '127.0.0.1', 1560902007, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930323030373B),
	('8m2ral7ctk77id61f4v1rhl3jurotmsf', '127.0.0.1', 1560902310, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930323331303B),
	('2hrs6gdvhait72gfr7a1lm3q904kvmkg', '127.0.0.1', 1560903339, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930333333393B),
	('vcvi2d6oljncb34ng5kekoj1ufio811n', '127.0.0.1', 1560903094, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930333039343B),
	('2rvg8jvsdicv5ur956qthoh82o46u3eg', '127.0.0.1', 1560902796, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930323739363B),
	('tusk6l7b0cnrhbgceu89hk4vlgdc9rna', '127.0.0.1', 1560903475, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930333437353B),
	('gkhhrirp4kncipahjvmfjej954ocjrug', '127.0.0.1', 1560903642, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930333634323B),
	('r1ulfsk3h8cmn77tdrn79ad7odf6fqoj', '127.0.0.1', 1560904140, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930343134303B),
	('a97t2p9evshdi3p6jtv9hn5ovbqtn9tb', '127.0.0.1', 1560904085, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930343038353B),
	('eh3n6cbdaamneh6por7rgg33h4tbq63t', '127.0.0.1', 1560904389, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930343338393B),
	('plflu1kuqf54holrhj5a1h37i65rd9t2', '127.0.0.1', 1560904140, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930343134303B),
	('786rpib1ig3ospvk6tv1akmk9oig44uq', '127.0.0.1', 1560904698, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930343639383B),
	('u3q0hg82fkoke1ei4vj74bjksu56semp', '127.0.0.1', 1560904999, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930343939393B),
	('k8c07dm2jlasjetuso0nmvc7h8h2e5kb', '127.0.0.1', 1560905329, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930353332393B),
	('3ep7a8rthd4d13b8tejl62taibms7ur5', '127.0.0.1', 1560905724, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930353732343B),
	('bndhq1v8g9abp5lb41bclv9i589crm4u', '127.0.0.1', 1560906075, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930363037353B),
	('o80oijjvnc8bcqo91rat3qpbd5n92s6f', '127.0.0.1', 1560906794, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930363739343B),
	('djqcnt2h3da099i5b0ih0mvkulgrgaaj', '127.0.0.1', 1560906397, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930363339373B),
	('umu9sp1sol06bpoqgebpmoaa70net352', '127.0.0.1', 1560906529, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930363339373B),
	('sb5jje6ah5jpan6h4plg1vth1nkk3a3u', '127.0.0.1', 1560906794, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930363739343B);
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;

-- Copiando estrutura para tabela projetointegrador.jornalista
DROP TABLE IF EXISTS `jornalista`;
CREATE TABLE IF NOT EXISTS `jornalista` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `admin` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetointegrador.jornalista: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `jornalista` DISABLE KEYS */;
INSERT INTO `jornalista` (`id`, `nome`, `email`, `senha`, `admin`) VALUES
	(1, 'Marco Antonio', 'marco.rozo@aluno.sc.senac.br', 'f8e0e5f662532fe682ea129ee633d20b6b94a997', 1),
	(2, 'Mayana Willemann', 'mayana@gmail.com', '4368fdad2b21a68da4528cbc00a8b0ffca1ab01e', 0),
	(3, 'Narut', 'naruto@gmail.com', 'f8e0e5f662532fe682ea129ee633d20b6b94a997', 0);
/*!40000 ALTER TABLE `jornalista` ENABLE KEYS */;

-- Copiando estrutura para tabela projetointegrador.noticia
DROP TABLE IF EXISTS `noticia`;
CREATE TABLE IF NOT EXISTS `noticia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `cd_categoria` int(10) unsigned NOT NULL,
  `cd_jornalista` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tb_noticia_tb_categoria1_idx` (`cd_categoria`),
  KEY `fk_tb_noticia_tb_usuario1_idx` (`cd_jornalista`),
  CONSTRAINT `fk_tb_noticia_tb_categoria1` FOREIGN KEY (`cd_categoria`) REFERENCES `categoria` (`id`),
  CONSTRAINT `fk_tb_noticia_tb_usuario1` FOREIGN KEY (`cd_jornalista`) REFERENCES `jornalista` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetointegrador.noticia: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `noticia` DISABLE KEYS */;
INSERT INTO `noticia` (`id`, `titulo`, `descricao`, `texto`, `imagem`, `data`, `cd_categoria`, `cd_jornalista`) VALUES
	(10, 'Vereadores mirins realizam sessão mensal', 'Os vereadores mirins de São Miguel do Oeste realizaram nesta terça-feira, 04, o encontro mensal de junho.', '<p>Os vereadores mirins de S&atilde;o Miguel do Oeste realizaram nesta ter&ccedil;a-feira, 04, o encontro mensal de junho. A sess&atilde;o teve defesa de indica&ccedil;&otilde;es e momento cultural das escolas, em que cada vereador mirim pode trazer informa&ccedil;&otilde;es sobre as atividades que sua escola desempenha. Nesta sess&atilde;o, foi apresentada a hist&oacute;ria e as a&ccedil;&otilde;es da Escola Marechal Arthur da Costa e Silva, realizada pela vereadora mirim Camili Mocelin.</p>\r\n<p><span style="font-size: 12pt;">Na sess&atilde;o tamb&eacute;m foram apresentadas duas indica&ccedil;&otilde;es. Uma delas, de Sara Stedile, solicita &agrave; Administra&ccedil;&atilde;o Municipal que disponibilize a vacina&ccedil;&atilde;o contra a gripe para os agricultores no grupo priorit&aacute;rio. A vereadora mirim justifica que os agricultores est&atilde;o expostos a perigos, entre os quais a gripe, destacando que em nossa regi&atilde;o o inverno &eacute; rigoroso, com per&iacute;odos longos de garoa e chuva. Ela pede, ent&atilde;o, que o Munic&iacute;pio viabilize a distribui&ccedil;&atilde;o gratuita da vacina contra a gripe para todos os agricultores de S&atilde;o Miguel do Oeste. A indica&ccedil;&atilde;o foi subscrita por Kevin Ledur.</span></p>', 'ccabf8ab0b0d044096f25b30a7ccb1d0.jpg', '2019-06-18 20:46:11', 1, 1),
	(24, 'Instagram apresenta instabilidade nesta quinta-feira', 'Site do Facebook ficou fora do ar nos EUA, Europa e América do Sul, incluindo o Brasil.', '<p>&nbsp;</p>\r\n<div class="mc-column content-text active-extra-styles " data-block-type="unstyled" data-block-weight="39" data-block-id="2">\r\n<p class="content-text__container " data-track-category="Link no Texto" data-track-links=""><span style="font-size: 18pt;">O Instagram deixou de funcionar no final da tarde desta quinta-feira (13). O aplicativo saiu do ar em v&aacute;rios lugares dos Estados Unidos, Europa e na Am&eacute;rica do Sul, incluindo o Brasil, de acordo com o site Down Detector.</span></p>\r\n</div>\r\n<div class="wall protected-content">\r\n<div class="mc-column content-text active-extra-styles " data-block-type="unstyled" data-block-weight="22" data-block-id="3">\r\n<p class="content-text__container " data-track-category="Link no Texto" data-track-links=""><span style="font-size: 18pt;">A queda foi um dos assuntos mais comentados no Twitter, onde postagens com o termo "Instagram" tiveram mais de 105 mil registros.</span></p>\r\n</div>\r\n<div class="mc-column content-text active-extra-styles " data-block-type="unstyled" data-block-weight="12" data-block-id="4">\r\n<p class="content-text__container " data-track-category="Link no Texto" data-track-links=""><span style="font-size: 18pt;">No Brasil, por volta das 20h15, a situa&ccedil;&atilde;o j&aacute; estava normalizada.</span></p>\r\n</div>\r\n</div>', '8339b814ba54997b60695b28d377d0d3.jpg', '2019-06-13 00:00:00', 1, 2);
/*!40000 ALTER TABLE `noticia` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
