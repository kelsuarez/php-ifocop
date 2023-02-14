-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 19 août 2022 à 12:49
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `boutique2`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `id_membre` int(11) DEFAULT NULL,
  `montant` int(11) NOT NULL,
  `date_enregistrement` datetime NOT NULL,
  `etat` enum('en cours','envoyé','livré') NOT NULL DEFAULT 'en cours'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `id_membre`, `montant`, `date_enregistrement`, `etat`) VALUES
(1, NULL, 45, '2021-02-18 14:14:38', 'en cours'),
(2, 51, 30, '2021-02-18 14:14:40', 'envoyé'),
(3, NULL, 27, '2021-02-18 14:16:50', 'livré'),
(6, NULL, 69, '2021-03-14 10:43:42', 'livré'),
(7, NULL, 79, '2021-03-14 10:45:59', 'en cours'),
(8, NULL, 22, '2021-03-14 10:46:34', 'envoyé'),
(9, NULL, 7, '2021-03-14 10:47:06', 'livré'),
(10, NULL, 59, '2021-03-14 10:47:38', 'en cours'),
(11, NULL, 16, '2021-03-14 10:48:16', 'envoyé'),
(12, NULL, 11, '2021-03-14 10:50:06', 'livré'),
(13, NULL, 9, '2021-03-14 10:50:43', 'envoyé'),
(16, NULL, 119, '2021-03-18 09:58:03', 'envoyé'),
(38, 51, 423, '2021-03-28 12:52:25', 'en cours'),
(39, 51, 93, '2021-03-28 12:54:40', 'envoyé'),
(41, 51, 173, '2021-04-04 10:23:00', 'en cours'),
(42, 51, 55, '2021-04-04 10:25:23', 'livré'),
(43, 51, 131, '2021-04-04 11:01:18', 'envoyé'),
(48, 51, 214, '2021-04-10 10:16:06', 'envoyé'),
(49, NULL, 12, '2021-04-10 15:10:07', 'en cours'),
(50, NULL, 99, '2021-04-10 15:19:11', 'en cours'),
(51, NULL, 30, '2021-04-10 15:22:20', 'en cours'),
(52, NULL, 78, '2021-04-11 15:41:42', 'en cours'),
(53, 51, 70, '2021-04-11 15:44:35', 'envoyé'),
(64, 51, 44, '2021-04-12 11:44:04', 'en cours'),
(65, 51, 110, '2021-04-12 12:01:28', 'livré'),
(67, 51, 118, '2021-04-13 11:16:04', 'en cours'),
(68, 51, 28, '2021-04-13 11:16:42', 'en cours'),
(71, NULL, 58, '2021-04-19 13:52:39', 'livré'),
(72, NULL, 118, '2021-04-19 13:55:55', 'envoyé'),
(73, NULL, 24, '2021-04-19 13:57:00', 'livré'),
(74, NULL, 46, '2021-04-19 13:58:43', 'en cours'),
(75, NULL, 21, '2021-04-19 15:39:17', 'envoyé'),
(76, NULL, 14, '2021-04-22 09:24:01', 'envoyé'),
(77, NULL, 19, '2021-04-22 09:27:29', 'en cours'),
(78, NULL, 9, '2021-04-22 09:30:59', 'en cours'),
(79, NULL, 130, '2021-04-22 09:36:54', 'envoyé'),
(80, NULL, 37, '2021-04-22 09:51:54', 'en cours'),
(81, NULL, 158, '2021-04-22 09:53:55', 'livré'),
(82, NULL, 23, '2021-04-22 10:00:51', 'livré'),
(83, 51, 21, '2021-04-22 10:19:43', 'en cours'),
(84, 51, 36, '2021-04-22 10:23:03', 'envoyé'),
(85, 51, 73, '2021-04-22 10:27:52', 'envoyé'),
(86, NULL, 36, '2021-04-26 15:04:36', 'livré'),
(88, NULL, 53, '2021-04-26 15:08:50', 'livré'),
(89, NULL, 29, '2021-05-04 15:08:14', 'envoyé'),
(90, NULL, 24, '2021-05-04 15:12:43', 'envoyé'),
(91, NULL, 132, '2021-05-04 15:16:19', 'livré'),
(92, NULL, 14, '2021-05-05 14:48:57', 'livré'),
(96, 51, 150, '2021-09-04 11:30:10', 'envoyé'),
(98, 51, 138, '2021-09-10 08:09:57', 'en cours'),
(104, 51, 57, '2021-09-10 08:58:04', 'envoyé'),
(105, 51, 7, '2021-09-10 13:49:09', 'en cours'),
(106, 51, 7, '2021-09-10 13:50:12', 'livré'),
(107, 51, 5, '2021-09-10 13:52:51', 'en cours'),
(108, 51, 41, '2021-09-10 13:55:04', 'envoyé'),
(113, NULL, 34, '2021-09-18 11:08:32', 'en cours'),
(114, NULL, 61, '2021-09-20 10:49:05', 'en cours'),
(115, 51, 9, '2021-09-25 15:44:09', 'en cours'),
(116, 51, 45, '2021-09-25 15:48:37', 'en cours'),
(118, NULL, 46, '2021-10-17 11:58:38', 'envoyé'),
(119, NULL, 42, '2022-03-27 08:37:50', 'en cours'),
(120, NULL, 9, '2022-03-28 09:57:41', 'en cours'),
(121, NULL, 11, '2022-03-28 10:00:20', 'en cours'),
(122, NULL, 35, '2022-03-28 10:01:41', 'en cours'),
(123, NULL, 12, '2022-03-28 11:01:14', 'en cours');

-- --------------------------------------------------------

--
-- Structure de la table `details_commande`
--

CREATE TABLE `details_commande` (
  `id_details_commande` int(11) NOT NULL,
  `id_commande` int(11) NOT NULL,
  `id_produit` int(11) DEFAULT NULL,
  `quantite` int(11) NOT NULL,
  `prix_unite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `details_commande`
--

INSERT INTO `details_commande` (`id_details_commande`, `id_commande`, `id_produit`, `quantite`, `prix_unite`) VALUES
(1, 1, 29, 1, 45),
(2, 2, 36, 2, 15),
(3, 3, 53, 1, 22),
(14, 38, 39, 5, 79),
(15, 39, 42, 5, 7),
(16, 39, 53, 1, 58),
(18, 41, 30, 2, 12),
(19, 41, 57, 2, 69),
(20, 41, 37, 1, 11),
(21, 42, 49, 4, 12),
(22, 42, 54, 1, 7),
(23, 43, 56, 1, 115),
(24, 43, 41, 1, 16),
(29, 48, 60, 2, 8),
(30, 48, 55, 2, 99),
(31, 49, 52, 1, 12),
(32, 50, 56, 1, 99),
(33, 51, 51, 3, 6),
(34, 51, 49, 1, 12),
(35, 52, 30, 4, 12),
(36, 52, 51, 5, 6),
(37, 53, 60, 6, 8),
(38, 53, 33, 1, 22),
(53, 64, 33, 2, 22),
(54, 65, 33, 5, 22),
(56, 67, 65, 2, 59),
(60, 71, 67, 2, 29),
(61, 72, 65, 2, 59),
(62, 73, 49, 2, 12),
(63, 74, 30, 2, 12),
(64, 74, 37, 2, 11),
(65, 75, 31, 1, 9),
(66, 75, 30, 1, 12),
(67, 77, 38, 1, 19),
(68, 78, 31, 1, 9),
(69, 79, 65, 2, 59),
(70, 79, 49, 1, 12),
(71, 80, 60, 1, 8),
(72, 80, 67, 1, 29),
(73, 81, 39, 2, 79),
(74, 82, 37, 1, 11),
(75, 82, 51, 2, 6),
(76, 83, 42, 3, 7),
(77, 84, 31, 2, 9),
(78, 84, 51, 3, 6),
(79, 85, 65, 1, 59),
(80, 85, 54, 2, 7),
(81, 86, 49, 3, 12),
(83, 88, 30, 2, 12),
(84, 88, 67, 1, 29),
(85, 89, 67, 1, 29),
(86, 90, 49, 2, 12),
(87, 91, 70, 1, 14),
(88, 91, 65, 2, 59),
(90, 92, 63, 2, 14),
(96, 96, 58, 2, 75),
(99, 98, 63, 2, 14),
(100, 98, 76, 2, 55),
(108, 104, 49, 1, 12),
(109, 104, 29, 1, 45),
(110, 105, 54, 1, 7),
(111, 106, 54, 1, 7),
(112, 107, 54, 1, 7),
(113, 108, 33, 1, 22),
(114, 108, 38, 1, 19),
(122, 113, 33, 1, 22),
(123, 113, 52, 1, 12),
(124, 114, 54, 2, 7),
(125, 114, 72, 1, 47),
(126, 115, 31, 1, 9),
(127, 116, 42, 1, 7),
(128, 116, 38, 2, 19),
(131, 118, 49, 2, 12),
(132, 118, 33, 1, 22),
(133, 119, 70, 2, 14),
(134, 119, 51, 2, 7),
(135, 120, 31, 1, 9),
(136, 121, 37, 1, 11),
(137, 122, 68, 1, 35),
(138, 123, 30, 1, 12);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` int(11) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(60) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `civilite` enum('homme','femme') NOT NULL,
  `ville` varchar(20) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `statut` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `pseudo`, `mdp`, `nom`, `prenom`, `email`, `civilite`, `ville`, `code_postal`, `adresse`, `statut`) VALUES
(2, 'Iron_man', '$2y$10$BVHDnVn4vmcggZsXBwR46OmNdZ0jZjoKAw10VfTzTR8Nh3gaEMHBK', 'Stark', 'Tony', 'ironman@gmail.com', 'homme', 'Poissy', 78300, '10 Av au bout', 0),
(3, 'Spidey', '$2y$10$BVHDnVn4vmcggZsXBwR46OmNdZ0jZjoKAw10VfTzTR8Nh3gaEMHBK', 'Parker', 'Peter', 'spiderman@gmail.com', 'homme', 'Créteil', 94000, '46 Bld la bas', 0),
(4, 'Black_Widow', '$2y$10$BVHDnVn4vmcggZsXBwR46OmNdZ0jZjoKAw10VfTzTR8Nh3gaEMHBK', 'Romanoff', 'Natasha', 'blackwidow@gmail.com', 'femme', 'Paris', 75015, '85 Impasse du rien', 0),
(5, 'Hulk', '$2y$10$BVHDnVn4vmcggZsXBwR46OmNdZ0jZjoKAw10VfTzTR8Nh3gaEMHBK', 'Banner', 'Bruce', 'hulk@gmail;com', 'homme', 'Marseille', 13000, '6 Quai plouf', 0),
(51, 'Tobb', '$2y$10$BVHDnVn4vmcggZsXBwR46OmNdZ0jZjoKAw10VfTzTR8Nh3gaEMHBK', 'Tobbal', 'Aziz', 'tobb@gmail.com', 'homme', 'Créteil', 94000, '9 avenue au bout', 1);

-- --------------------------------------------------------

--
-- Structure de la table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Structure de la table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Structure de la table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Structure de la table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Structure de la table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Structure de la table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Structure de la table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

-- --------------------------------------------------------

--
-- Structure de la table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Structure de la table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Structure de la table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Structure de la table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `reference` varchar(20) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `couleur` enum('bleu','rouge','vert','jaune','blanc','noir','marron') NOT NULL,
  `taille` enum('small','medium','large','xlarge') NOT NULL,
  `public` enum('enfant','femme','homme','mixte') NOT NULL,
  `photo` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `reference`, `categorie`, `titre`, `description`, `couleur`, `taille`, `public`, `photo`, `prix`, `stock`) VALUES
(29, 'WKTZ', 'Vestes', 'Cuir', 'Vintage, Simili', 'marron', 'medium', 'mixte', 'WKTZ_blouson.jpg', 45, 0),
(30, 'AZPR', 'Pantalons', 'Jogging', 'Taille basse', 'bleu', 'small', 'homme', 'AZPM_pantalon.jpg', 12, 0),
(31, 'DCER', 'Pulls', 'Stretch', 'Col rond', 'rouge', 'medium', 'femme', 'DCER_pull.jpg', 9, 0),
(33, 'VFUT', 'Jupes', 'Longue', 'Evasée', 'rouge', 'xlarge', 'femme', 'VFUT_jupe.jpg', 22, 57),
(36, 'IPON', 'Manteaux', 'Capeline', 'Poches latérales', 'marron', 'medium', 'femme', 'IPON_manteau.jpg', 49, 78),
(37, 'MMOP', 'Robes', 'Eté', 'Sans manche', 'blanc', 'large', 'femme', 'MMOP_robe.jpg', 11, 0),
(38, 'BGYR', 'Vestes', 'Jean', 'Cintrée', 'marron', 'small', 'mixte', 'BGYR_veste.jpg', 19, 43),
(39, 'DDFY', 'Manteaux', 'Anorak', 'Spéciale Ski', 'jaune', 'large', 'homme', 'DDFY_anorak.jpg', 79, 58),
(41, 'NBUH', 'Pantalons', 'Ensemble', 'Coordonné', 'blanc', 'medium', 'enfant', 'NBUH_ensemble.jpg', 16, 23),
(42, 'VYHR', 'Pulls', 'Polo', 'Mignon', 'bleu', 'small', 'enfant', 'VYHR_polo.jpg', 8, 41),
(49, 'VIVO', 'Pulls', 'Col rond', 'Moulant, sexy', 'bleu', 'medium', 'homme', 'VIVO_pull_homme.jpg', 12, 0),
(51, 'LOPI', 'Sous-Vetements', 'Boxer', 'Confortable', 'bleu', 'xlarge', 'homme', 'LOPI_boxer.jpg', 7, 94),
(52, 'DFUJ', 'Sous-Vetements', '3 Culottes', 'Vendu en lot', 'rouge', 'medium', 'femme', 'DFUJ_3culottes.webp', 12, 36),
(53, 'OPTC', 'Sous-Vetements', 'Gaine', 'Amincissante', 'noir', 'large', 'femme', 'OPTC_culotte_gaine.jpg', 58, 58),
(54, 'NYDM', 'Sous-Vetements', 'Boxer', 'Féminin', 'bleu', 'small', 'femme', 'NYDM_boxer_femme.webp', 7, 78),
(55, 'DDFR', 'Manteaux', 'Droit', 'Classe et chic', 'noir', 'small', 'homme', 'DDFR_manteau4.webp', 99, 23),
(56, 'NHUP', 'Manteaux', 'Trois Quart', 'Beige, poches', 'marron', 'large', 'femme', 'NHUP_manteau2.webp', 115, 69),
(57, 'HYIT', 'Manteaux', 'Cintré', 'Gris chiné', 'noir', 'medium', 'femme', 'HYIT_manteau3.webp', 69, 43),
(58, 'YTOP', 'Robes', 'de Soirée', 'Chic', 'noir', 'medium', 'femme', 'YTOP_robe2.webp', 75, 78),
(60, 'CCUV', 'Pantalons', 'Elastique', 'Tout-terrain', 'jaune', 'small', 'enfant', 'CCUV_pantalon2.webp', 8, 47),
(63, 'GYJU', 'Pantalons', 'Corsaire', 'Léger', 'marron', 'medium', 'femme', 'GYJU pantalonCorsaire.webp', 14, 98),
(64, 'ZZAT', 'Manteaux', 'Chaud', 'Fausse fourrure', 'rouge', 'large', 'femme', 'ZZAT manteau5.jpg', 63, 65),
(65, 'HYVE', 'Manteaux', 'Mi-saison', 'Capuche', 'noir', 'xlarge', 'homme', 'HYVE manteau6.jpg', 59, 69),
(66, 'KOLM', 'Manteaux', 'Hooded', 'Capuche', 'marron', 'small', 'femme', 'KOLM manteau7.jpg', 139, 58),
(67, 'XXUG', 'Jupes', 'Courte', 'Fraiche', 'bleu', 'medium', 'femme', 'XXUG_jupe2.webp', 29, 50),
(68, 'GGNU', 'Pantalons', 'Salopette', 'Jean', 'noir', 'medium', 'mixte', 'GGNU_salopette2.jpg', 35, 0),
(69, 'CDEX', 'Vestes', 'Bomber', 'Coupe-vent', 'bleu', 'large', 'mixte', 'CDEX_blousonBomber.jpg', 89, 69),
(70, 'BAZT', 'Pantalons', 'Salopette', 'Short', 'bleu', 'medium', 'enfant', 'BAZT_salopette1.jpg', 14, 1),
(72, 'KIOP', 'Jupes', 'Short', 'Unisexe', 'marron', 'large', 'mixte', 'KIOP jupeShort.webp', 47, 62),
(73, 'VLIG', 'Jupes', 'Mi-longue', 'Style écossais', 'marron', 'medium', 'femme', 'VLIG jupeEcossais.webp', 28, 44),
(74, 'ZUGA', 'Pulls', 'Sweat', 'Capuche', 'noir', 'medium', 'homme', 'ZUGU_sweat.webp', 27, 54),
(76, 'GDAO', 'Robes', 'Classique', 'Manches longues', 'noir', 'medium', 'femme', 'GDAO_robeClassique.webp', 55, 80),
(79, 'NOLI', 'Robes', 'Longue', 'Légère', 'noir', 'small', 'femme', 'NOLI_robeLongue.webp', 15, 58),
(80, 'CRIA', 'Vestes', 'Blazer', 'Unisex', 'noir', 'medium', 'mixte', 'CRIA_blazer.webp', 65, 45),
(82, 'HITO', 'Vestes', 'Blouson', 'Moto', 'marron', 'medium', 'homme', 'HITO blousonMoto.webp', 49, 73),
(94, 'CTYR', 'Sportswear', 'Jogging', 'kugvkuyvi', 'blanc', 'large', 'homme', 'CTYR_AZPM_pantalon.jpg', 29, 90);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `id_membre` (`id_membre`);

--
-- Index pour la table `details_commande`
--
ALTER TABLE `details_commande`
  ADD PRIMARY KEY (`id_details_commande`),
  ADD KEY `id_produit` (`id_produit`),
  ADD KEY `id_commande` (`id_commande`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- Index pour la table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Index pour la table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Index pour la table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Index pour la table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Index pour la table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Index pour la table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Index pour la table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Index pour la table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Index pour la table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Index pour la table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Index pour la table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Index pour la table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Index pour la table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Index pour la table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT pour la table `details_commande`
--
ALTER TABLE `details_commande`
  MODIFY `id_details_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT pour la table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id_membre`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `details_commande`
--
ALTER TABLE `details_commande`
  ADD CONSTRAINT `details_commande_ibfk_1` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `details_commande_ibfk_2` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
