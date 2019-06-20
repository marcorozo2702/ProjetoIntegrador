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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetointegrador.categoria: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`id`, `nome`) VALUES
	(1, 'Esportes'),
	(4, 'E-sports');
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

-- Copiando dados para a tabela projetointegrador.ci_sessions: ~29 rows (aproximadamente)
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
	('sb5jje6ah5jpan6h4plg1vth1nkk3a3u', '127.0.0.1', 1560906794, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303930363739343B),
	('gpi75q9va3b16rpmdadmcrdfahcv8id2', '127.0.0.1', 1560983138, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303938333133383B),
	('4864ipgpfecmtn9tq4ejbq6um2slhj8v', '127.0.0.1', 1560983515, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303938333531353B),
	('0sps3j4cm33d2027f1vp4crgbuf1pp8n', '127.0.0.1', 1560983916, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303938333931363B),
	('47if2rgsvn2lsav2fgs4d9o71669ig3o', '127.0.0.1', 1560984244, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303938343234343B),
	('avdpcfh95tr8epqcn2h4d30mnt4a7ufg', '127.0.0.1', 1560984566, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303938343536363B6D656E736167656D7C733A35363A223C64697620636C6173733D22616C65727420616C6572742D73756363657373223E4E6F746963696120696E73657269646F2E3C2F6469763E223B5F5F63695F766172737C613A313A7B733A383A226D656E736167656D223B733A333A226F6C64223B7D),
	('kirl6c9sahb1mqopg3mhr3m9alouqrtq', '127.0.0.1', 1560985397, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303938353339373B),
	('j4buebunhd5emrmuk4b3lshn29gofrmk', '127.0.0.1', 1560985882, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303938353838323B),
	('4a8tcmbhlges4o3an073nmeh74m9gqmi', '127.0.0.1', 1560986330, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303938363333303B),
	('vmffb9e2mg5uuncve2ua5vqpamcpfunj', '127.0.0.1', 1560987266, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303938373236363B),
	('3fc3q19gjs68b77istl6ur9ret7carbk', '127.0.0.1', 1560987929, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303938373932393B),
	('dnf3ef9ium6340hbf5slu4d1b9tq6is7', '127.0.0.1', 1560988237, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303938383233373B),
	('rkibmeg6o8gms86a5g4rkcc9ep2r0ii4', '127.0.0.1', 1560988589, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303938383538393B),
	('vc18ir5m4pvqi14t2jndfq3psp61kgv4', '127.0.0.1', 1560988965, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303938383936353B),
	('3qlvga4ss4ar197v1k1m7b9nakkmv7gs', '127.0.0.1', 1560989609, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303938393630393B),
	('9cpg1fq4317lbejd0au0vuicd684uq4e', '127.0.0.1', 1560989941, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303938393934313B69645573756172696F7C733A313A2231223B656D61696C7C733A32383A226D6172636F2E726F7A6F40616C756E6F2E73632E73656E61632E6272223B6C6F6761646F7C623A313B61646D696E7C733A313A2231223B),
	('9ck8mbhj3o5b0smqbnl0urhnmudojrvb', '127.0.0.1', 1560990262, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303939303236323B69645573756172696F7C733A313A2231223B656D61696C7C733A32383A226D6172636F2E726F7A6F40616C756E6F2E73632E73656E61632E6272223B6C6F6761646F7C623A313B61646D696E7C733A313A2231223B),
	('0runq1mqqcnkqqfjgt2cmoasepan2bd9', '127.0.0.1', 1560990602, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303939303630323B69645573756172696F7C733A313A2231223B656D61696C7C733A32383A226D6172636F2E726F7A6F40616C756E6F2E73632E73656E61632E6272223B6C6F6761646F7C623A313B61646D696E7C733A313A2231223B6D656E736167656D7C733A35383A223C64697620636C6173733D22616C65727420616C6572742D73756363657373223E5375636573736F20616F2064656C657461722E3C2F6469763E223B5F5F63695F766172737C613A313A7B733A383A226D656E736167656D223B733A333A226F6C64223B7D),
	('b26atbtup74r616fej9rn65g4c1scjri', '127.0.0.1', 1560991227, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303939313232373B69645573756172696F7C733A313A2231223B656D61696C7C733A32383A226D6172636F2E726F7A6F40616C756E6F2E73632E73656E61632E6272223B6C6F6761646F7C623A313B61646D696E7C733A313A2231223B6D656E736167656D7C733A35383A223C64697620636C6173733D22616C65727420616C6572742D73756363657373223E5375636573736F20616F2064656C657461722E3C2F6469763E223B5F5F63695F766172737C613A313A7B733A383A226D656E736167656D223B733A333A226F6C64223B7D),
	('sjdbv9r1k5ji2p3dl0pk49ti04cltp7n', '127.0.0.1', 1560991537, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303939313533373B69645573756172696F7C733A313A2231223B656D61696C7C733A32383A226D6172636F2E726F7A6F40616C756E6F2E73632E73656E61632E6272223B6C6F6761646F7C623A313B61646D696E7C733A313A2231223B),
	('11seaes1ouasd336909uk723m99m5pan', '127.0.0.1', 1560991959, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303939313935393B69645573756172696F7C733A313A2231223B656D61696C7C733A32383A226D6172636F2E726F7A6F40616C756E6F2E73632E73656E61632E6272223B6C6F6761646F7C623A313B61646D696E7C733A313A2231223B),
	('emfo6dmc5cnc48u747r86t1lp5k0ngn1', '127.0.0.1', 1560992320, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303939323332303B69645573756172696F7C733A313A2231223B656D61696C7C733A32383A226D6172636F2E726F7A6F40616C756E6F2E73632E73656E61632E6272223B6C6F6761646F7C623A313B61646D696E7C733A313A2231223B),
	('qjeo67kjtpi9pmdauqebpfpb41vbfd4g', '127.0.0.1', 1560992630, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303939323633303B69645573756172696F7C733A313A2231223B656D61696C7C733A32383A226D6172636F2E726F7A6F40616C756E6F2E73632E73656E61632E6272223B6C6F6761646F7C623A313B61646D696E7C733A313A2231223B),
	('246j37oobd0s9h21nkm5mehoo722j570', '127.0.0.1', 1560992710, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313536303939323633303B69645573756172696F7C733A313A2231223B656D61696C7C733A32383A226D6172636F2E726F7A6F40616C756E6F2E73632E73656E61632E6272223B6C6F6761646F7C623A313B61646D696E7C733A313A2231223B);
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
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `cd_categoria` int(10) unsigned NOT NULL,
  `cd_jornalista` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tb_noticia_tb_categoria1_idx` (`cd_categoria`),
  KEY `fk_tb_noticia_tb_usuario1_idx` (`cd_jornalista`),
  CONSTRAINT `fk_tb_noticia_tb_categoria1` FOREIGN KEY (`cd_categoria`) REFERENCES `categoria` (`id`),
  CONSTRAINT `fk_tb_noticia_tb_usuario1` FOREIGN KEY (`cd_jornalista`) REFERENCES `jornalista` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetointegrador.noticia: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `noticia` DISABLE KEYS */;
INSERT INTO `noticia` (`id`, `titulo`, `descricao`, `texto`, `imagem`, `data`, `hora`, `cd_categoria`, `cd_jornalista`) VALUES
	(29, 'MIBR elimina Luminosity e enfrentará North na Pro League', 'Em embate de brasileiros, melhor para a MIBR, que segue viva no torneio disputado na França', '', '5c2c3d02f6ffaeefd53b407658635479.jpg', '2019-06-19', '21:34:26', 4, 1),
	(30, 'Counter-Strike: DETONA é eliminada das finais da ESL Pro League', 'Equipe brasileira perdeu para a Cloud9 e acabou dando adeus ao torneio realizado na França', '', 'b4b8d437e1369f77405c11b20d2faa1d.jpg', '2019-06-19', '21:34:28', 4, 2),
	(31, 'LoL: Pelo Circuitão, Falkol e Rensga buscam primeira vitória nesta terça', 'Circuito Desafiante terá corrida acirrada pela liderança com RED Kalunga e ProGaming ainda invictos', '<p>O Circuito Desafiante de League of Legends tem continuidade nesta ter&ccedil;a-feira (18), &agrave;s 21h, com mais tr&ecirc;s jogos v&aacute;lidos pela segunda semana de disputa. Dividindo a lideran&ccedil;a, ProGaming e RED Canids Kalunga buscam a ponta isolada da tabela, enquanto que Falkol e Rensga querem a primeira vit&oacute;ria no torneio.</p>\r\n<p>&Agrave;s 21h, o duelo dos desesperados. Ainda sem conseguir triunfos no torneio, Falkol e Rensga se enfrentam. As duas equipes n&atilde;o tiveram um bom desempenho na &uacute;ltima segunda (17), quando foram massacradas por Red Kalunga e ProGaming, respectivamente.</p>\r\n<p>Logo na sequ&ecirc;ncia, &agrave;s 22h, o duelo das duas equipes que desceram do CBLoL. ProGaming e Vivo Keyd se enfrentam em situa&ccedil;&otilde;es distintas na tabela. Invicta, tendo tr&ecirc;s vit&oacute;rias at&eacute; aqui, a ProGaming busca a lideran&ccedil;a isolada. J&aacute; a Keyd, totalmente renovada, quer igualar as condi&ccedil;&otilde;es com os advers&aacute;rios desta ter&ccedil;a, j&aacute; que possui duas vit&oacute;rias e uma derrota.</p>\r\n<p>Fechando a noite, a RED Kalunga, empatada na lideran&ccedil;a do torneio com tr&ecirc;s vit&oacute;rias, encara a Havan Liberty Gaming, que s&oacute; venceu uma partida at&eacute; aqui.&nbsp;</p>\r\n<p><strong>Circuit&atilde;o 2019 - 2&ordf; Etapa</strong></p>\r\n<p>Semana 2, Dia 2 | Ter&ccedil;a-feira (18/06)&nbsp;</p>', 'd8da9b49bff1f1005fe5752a041994cb.jpg', '2019-06-19', '21:34:29', 4, 2),
	(32, 'Jovens viram profissionais no Fifa e cobram por dicas', 'Brasileiros cobram até R$ 300 por dicas, que vão desde vendas de conteúdos, como manuais, a aulas particulares', '<p>&nbsp;</p>\r\n<div id="content-teadstv" class="">&nbsp;</div>\r\n<p>O m&eacute;todo de Vinicius consiste em enfrentar os usu&aacute;rios que o contratam algumas vezes para identificar pontos fortes e pontos fracos e, ent&atilde;o, orient&aacute;-los sobre como corrigir os erros e potencializar caracter&iacute;sticas. "Durante a aula, eu vou fazendo v&aacute;rios amistosos e, em cada jogo, vou trabalhando a parte do ataque e depois a defesa, separados. Depois, juntamos os dois", explica o jogador. "No final, eu envio um documento com todas as dicas que eu passei para a pessoa memorizar e praticar."<br /><br />Allan Castello, 28, jogador profissional de FIFA, quatro vezes campe&atilde;o carioca, vice-campe&atilde;o da ESW 15 e vencedor da Manchester City Cup, tem um m&eacute;todo semelhante ao de Vinicius. Ele cobra R$ 200 por aula e tem em m&eacute;dia 13 alunos por m&ecirc;s, o que lhe d&aacute; uma renda m&eacute;dia de R$ 2.6 mil. "Comecei a viver somente do jogo no Fifa 15. Antes, no Fifa 14 eu j&aacute; tirava uma renda melhor do que no meu pr&oacute;prio trabalho, mas ainda tinha medo de largar a carteira assinada", conta o profissional, que come&ccedil;ou a dar aulas h&aacute; quatro anos.<br /><br />Allan faz parte de uma equipe chama MFT (Metralhas FIFA Team). Ele tem contrato com o time at&eacute; junho, recebe sal&aacute;rio mensal e b&ocirc;nus por classifica&ccedil;&otilde;es para eventos oficiais da EA (Electronic Arts, empresa desenvolvedora de jogos).&nbsp;<br />Matheus Overbeck, 21, come&ccedil;ou a ganhar dinheiro com o jogo aos 16 anos, disputando torneios online. Hoje, vende videoaulas, que custam de R$ 10 a R$ 50 reais, e junto com um amigo gerencia um grupo fechado no Whatsapp. O acesso custa R$ 15 por m&ecirc;s. Nele, Matheus envia dicas para um modo espec&iacute;fico do Fifa, o Ultimate Team.<br /><br />Esse modo do jogo permite aos usu&aacute;rios criarem equipes virtuais com jogadores das principais ligas do mundo. Para montar um time, &eacute; preciso acumular moedas atrav&eacute;s das partidas, objetivos alcan&ccedil;ados e, principalmente, com as transa&ccedil;&otilde;es no mercado de transfer&ecirc;ncias. "O mercado do Fifa &eacute; como o mercado de a&ccedil;&otilde;es. Existem fatores externos que fazem as a&ccedil;&otilde;es, nesse caso os jogadores, subirem ou descerem de pre&ccedil;o. Nossa fun&ccedil;&atilde;o &eacute; analisar esses fatores e prever essa movimenta&ccedil;&atilde;o para investir nos jogadores quando eles est&atilde;o em baixa", explica Matheus.<br /><br />O grupo criado por ele tem 110 pessoas. Neste m&ecirc;s, o faturamento ser&aacute; de R$ 1.730. A pr&aacute;tica citada &eacute; o que os usu&aacute;rios chamam de "trade" (negocia&ccedil;&atilde;o, em ingl&ecirc;s). Ao comprar uma carta por valor mais baixo do que ela vale e vender por seu valor real ou superior, eles acumulam moedas para comprar os jogadores desejados. Nomes como Cristiano Ronaldo, Messi e Neymar chegam a custar milh&otilde;es na moeda do jogo.<br /><br />Em m&eacute;dia, cada usu&aacute;rio recebe 400 moedas por partida jogada. Por isso, o mercado de transfer&ecirc;ncia &eacute; o m&eacute;todo mais r&aacute;pido para acumular o valor necess&aacute;rio para formar um time forte. Renato Figueiredo Jr, 25, come&ccedil;ou a fazer trade justamente com a motiva&ccedil;&atilde;o de refor&ccedil;ar a sua equipe no Fifa.<br />"Eu era uma dessas pessoas que queriam ter um tima&ccedil;o, com Cristiano Ronaldo, Messi e grandes jogadores. Ent&atilde;o, comecei a aprender [a fazer trade] acompanhando canais no Youtube", diz.<br /><br />Depois de oito anos jogando por lazer, Renato decidiu criar no ano passado o seu grupo no Whatsapp para enviar dicas de trade. O grupo que ele gerencia atualmente conta com 225 membros, que o faz ter um faturamento m&eacute;dio de R$ 2.000 -ele cobra uma mensalidade de R$ 10.<br /><br />"O valor arrecadado varia muito. Tem gente que paga o servi&ccedil;o, tem gente que simplesmente n&atilde;o paga e tem pessoas no grupo que acabaram virando meus amigos e eu n&atilde;o cobro delas", explica Renato, que j&aacute; foi atendente de balc&atilde;o, vendedor e mec&acirc;nico antes de se dedicar ao trabalho de coach.<br />"Eu comecei a ganhar bem mais que meus pais e mais do que qualquer emprego que eu j&aacute; tinha tido", afirma.</p>\r\n<p>"&gt;</p>', '390adfaa9e5c5deccea6d9c59e7d9e5f.jpg', '2019-06-19', '21:34:30', 4, 3),
	(33, 'CS:GO: Após saída de peu, W7M Gaming anuncia Gio como novo coach', 'A W7M Gaming anunciou em suas redes sociais hoje (19), que Giovanni “Gio” Deniz é o novo coach do elenco de CS:GO da organização.', '<p>Gio tem uma grande experi&ecirc;ncia dentro do CS:GO como coach, representando equipes como a Team Innova, INTZ, Furious Gaming e a NyZe Gaming nos anos de 2016 e 2017, ano que inclusive, recebeu um pr&ecirc;mio da Gamers Club como melhor coach do ano na Gamers Club Awards 2017.</p>\r\n<p>Ap&oacute;s a sua sa&iacute;da da NyZe, Gio dedicou o seu tempo a carreira no ramo de an&aacute;lises e narra&ccedil;&otilde;es no cen&aacute;rio nacional de CS:GO, al&eacute;m de produzir conte&uacute;do para o&nbsp;<a href="https://www.youtube.com/channel/UCs01wYqAP7dwr6bMAlv4Vzw" target="_blank" rel="noopener">seu canal no YouTube</a>.</p>\r\n<p>O coach comentou sobre a sua nova jornada na W7M:</p>\r\n<p>"Estou feliz demais, primeiro por voltar a competir, e segundo porque o W7M fez, simplesmente, de tudo pra contar comigo no elenco e eu enxergo essa responsabilidade como a maior oportunidade da minha carreira como treinador. J&aacute; atuei com os melhores, eu sei o caminho de um time vencedor e agora mais maduro, mais experiente e mais profissional, acredito que vou levar os meninos de volta pro topo!"</p>\r\n<blockquote>\r\n<p>Estou feliz demais, primeiro por voltar a competir, e segundo porque o W7M fez, simplesmente, de tudo pra contar comigo no elenco e eu enxergo essa responsabilidade como a maior oportunidade da minha carreira como treinador. J&aacute; atuei com os melhores, eu sei o caminho de um time vencedor e agora mais maduro, mais experiente e mais profissional, acredito que vou levar os meninos de volta pro topo!</p>\r\n</blockquote>\r\n<p>A estreia de Gio pela W7M ser&aacute; no dia 27 de junho, onde a sua equipe disputar&aacute; a Gamers Club Masters III, campeonato que ter&aacute; a participa&ccedil;&atilde;o de 6 times e 60 mil reais em premia&ccedil;&otilde;es.</p>', 'b164fa0523abaf7dd7d0e23230571228.jpg', '2019-06-19', '21:32:07', 4, 1);
/*!40000 ALTER TABLE `noticia` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
