-- --------------------------------------------------------
-- Servidor:                     beta.macaepop.com.br
-- Versão do servidor:           5.5.37-0+wheezy1 - (Debian)
-- OS do Servidor:               debian-linux-gnu
-- HeidiSQL Versão:              8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para admin_macaepop
CREATE DATABASE IF NOT EXISTS `admin_macaepop` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `admin_macaepop`;


-- Copiando estrutura para tabela admin_macaepop.candidato
CREATE TABLE IF NOT EXISTS `candidato` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `visto` enum('publico','privado') COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(380) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` text COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` text COLLATE utf8_unicode_ci NOT NULL,
  `estado` text COLLATE utf8_unicode_ci NOT NULL,
  `pais` text COLLATE utf8_unicode_ci NOT NULL,
  `profissional` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `formacao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `experiencia` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `idioma` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `cursos` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `outros` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `candidato_user_id_foreign` (`user_id`),
  CONSTRAINT `candidato_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela admin_macaepop.candidato: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `candidato` DISABLE KEYS */;
INSERT INTO `candidato` (`id`, `user_id`, `visto`, `foto`, `descricao`, `telefone`, `celular`, `url`, `endereco`, `numero`, `bairro`, `cep`, `cidade`, `estado`, `pais`, `profissional`, `formacao`, `experiencia`, `idioma`, `cursos`, `outros`, `status`, `created_at`, `updated_at`) VALUES
	(1, 19, 'publico', 'images/profile/16-09-2014-Marvio-MTk=-foto.jpg', '<p>&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis aliquid iusto quas, eius, nesciunt exercitationem minima ipsa culpa voluptatem voluptatum est ad optio, asperiores fuga consequuntur, sit hic similique veritatis?</p>', '(22) 2759-0988', '(22) 99922-5702', 'marviorocha', 'Governador Roberto Silveira', '238', 'Centro', '27910-000', 'Macaé', 'Rio de Janeiro', 'Brasil', 'Desenvolvedor web', '<ul>\r\n<li>Escola estadual Luiz Red</li>\r\n<li>Maca&eacute; - RJ</li>\r\n</ul>', '<p>Trabalho em alvenaria desenvolvimento logistica...</p>', 'curriculum, vitar', 'RH Centro de Formações Profissionais', 'Especializado em Master Mind', 17, '0000-00-00 00:00:00', '2014-09-23 02:00:31'),
	(2, 20, 'publico', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2014-09-21 03:18:42', '2014-09-21 03:18:42');
/*!40000 ALTER TABLE `candidato` ENABLE KEYS */;


-- Copiando estrutura para tabela admin_macaepop.groups
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `groups_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela admin_macaepop.groups: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;


-- Copiando estrutura para tabela admin_macaepop.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela admin_macaepop.migrations: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2012_12_06_225921_migration_cartalyst_sentry_install_users', 1),
	('2012_12_06_225929_migration_cartalyst_sentry_install_groups', 1),
	('2012_12_06_225945_migration_cartalyst_sentry_install_users_groups_pivot', 1),
	('2012_12_06_225988_migration_cartalyst_sentry_install_throttle', 1),
	('2014_08_29_004937_create_posts_table', 2),
	('2014_09_04_153715_candidato', 3),
	('2014_09_05_225126_social', 3),
	('2014_09_11_171015_status', 4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Copiando estrutura para tabela admin_macaepop.status
CREATE TABLE IF NOT EXISTS `status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `status` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `status_user_id_foreign` (`user_id`),
  CONSTRAINT `status_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela admin_macaepop.status: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
/*!40000 ALTER TABLE `status` ENABLE KEYS */;


-- Copiando estrutura para tabela admin_macaepop.throttle
CREATE TABLE IF NOT EXISTS `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela admin_macaepop.throttle: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `throttle` DISABLE KEYS */;
INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
	(1, 4, '::1', 4, 0, 0, '2014-09-01 14:43:07', NULL, NULL),
	(2, 3, '::1', 5, 1, 0, '2014-08-30 22:26:46', '2014-08-30 22:26:46', NULL),
	(3, 5, '::1', 1, 0, 0, '2014-08-31 17:27:15', NULL, NULL),
	(4, 6, '::1', 0, 0, 0, NULL, NULL, NULL),
	(5, 7, '::1', 0, 0, 0, NULL, NULL, NULL),
	(6, 8, '::1', 0, 0, 0, NULL, NULL, NULL),
	(7, 9, '::1', 0, 0, 0, NULL, NULL, NULL),
	(8, 10, '::1', 0, 0, 0, NULL, NULL, NULL),
	(9, 11, '::1', 0, 0, 0, NULL, NULL, NULL),
	(10, 13, '::1', 0, 0, 0, NULL, NULL, NULL),
	(11, 18, '::1', 0, 0, 0, NULL, NULL, NULL),
	(12, 19, '::1', 0, 0, 0, NULL, NULL, NULL),
	(13, 19, '177.100.195.85', 0, 0, 0, NULL, NULL, NULL),
	(14, 20, '177.100.195.85', 0, 0, 0, NULL, NULL, NULL);
/*!40000 ALTER TABLE `throttle` ENABLE KEYS */;


-- Copiando estrutura para tabela admin_macaepop.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_activation_code_index` (`activation_code`),
  KEY `users_reset_password_code_index` (`reset_password_code`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela admin_macaepop.users: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
	(19, 'marviorocha@marviorocha.com', '$2y$10$YgjzG4Fs/7N/5AgbwbkUkOUrEk1Jm9MjFGZvq8Uw6dD97VWAIKH6W', NULL, 1, NULL, NULL, '2014-09-23 02:00:30', '$2y$10$fG6mY2PwUetrfPgm7JfhveEp0H2zWOW3hBKESBqgiXYp3mSBWFoU6', NULL, 'Marvio', 'Rocha', '2014-09-06 15:32:44', '2014-09-23 02:00:30'),
	(20, 'demo@tester.com', '$2y$10$4oHmQbuTu.JHOKRFzOk3Qu8hqa4GBFbhrWFRS7eU/Ec1Y0GCa3voa', NULL, 1, NULL, NULL, '2014-09-21 03:19:19', '$2y$10$iWIGVc/cqz3yLyyTrvzmLeonQVYSDm7mfZICjR/CG/KxTvvOS6qy.', NULL, 'Demo', 'Tester', '2014-09-21 03:18:42', '2014-09-21 03:19:19');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Copiando estrutura para tabela admin_macaepop.users_groups
CREATE TABLE IF NOT EXISTS `users_groups` (
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela admin_macaepop.users_groups: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
