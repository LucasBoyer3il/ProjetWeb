-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 08 nov. 2024 à 20:41
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jeuxdesociete`
--
CREATE DATABASE IF NOT EXISTS `jeuxdesociete` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `jeuxdesociete`;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `nom` varchar(50) NOT NULL,
  `information` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`nom`, `information`) VALUES
('Adresse', '11 Rue de l\'Abbé Bessou, 12000 Rodez'),
('Email', 'contact@lechaudronludique.fr'),
('Horaires', 'Lundi : Fermé\r\nMardi - Vendredi : 10h30 - 19h\r\nSamedi : 10h - 19h\r\nDimanche : Fermé'),
('Telephone', '05 65 68 14 77');

-- --------------------------------------------------------

--
-- Structure de la table `descriptionjeux`
--

CREATE TABLE `descriptionjeux` (
  `id` int(11) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `nombreJoueurMin` int(11) DEFAULT NULL,
  `nombreJoueurMax` int(11) DEFAULT NULL,
  `ageMinimum` int(11) DEFAULT NULL,
  `tempsJeu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `descriptionjeux`
--

INSERT INTO `descriptionjeux` (`id`, `description`, `nombreJoueurMin`, `nombreJoueurMax`, `ageMinimum`, `tempsJeu`) VALUES
(1, 'Kamisado est un pur jeu de réflexion et de stratégie !\r\nDans le jeu primé Kamisado, l’objectif est d’être le premier à placer une tour de sa couleur sur l’une des cases de la rangée de base adverse.\r\nL’astuce : les joueurs ne peuvent déplacer qu’une tour dont la couleur du symbole correspond à la couleur de la case sur laquelle son adversaire s’est arrêté au coup précédent.\r\nKamisado : des règles faciles pour un jeu d’une profondeur remarquable. Des niveaux de difficulté différents garantissent un jeu aussi passionnant pour des joueurs débutants que pour des joueurs avancé', 2, 2, 10, 20),
(2, 'Dans ce jeu de déduction où il faut sans surprise deviner un mot, tout se joue sur  le nombre d\'indices... ni trop, ni trop peu...\r\nMaudit Mot Dit est un jeu plein de malice.\r\nChacun va devoir faire deviner un mot… sans qu’il soit trouvé trop tôt !\r\nD\'abord un joueur ouvre la boite et découvre un mot à faire deviner avec un nombre précis d\'indices. Grâce à des associations d\'idées plus ou moins évidentes, il donne des mots indice un par un...\r\nLe joueur doit donner le bon nombre d\'indices, ni plus, ni moins, et si un adversaire devine le bon mot trop tôt, il lui vole les points...\r\nExemple à 3 joueurs : Irma essaye de faire deviner le mot secret Poisson en 4 indices. Après avoir dit “Astrologie” et “Lune”, elle dit ” Queue” en 3e indice. Félix propose Poisson, la manche s’arrête immédiatement et lui seul gagne 3 points !\r\nMauvais sorts et Malédiction inclus, pour le plaisir de se faire des ennemis ! Saurez-vous tourner autour du mot ?', 3, 6, 12, NULL),
(3, '\r\n\r\nJe viens de dire le mot \"Mexique\" et sur la table trois avocats proposent les lettres \" V, Y, K et D\". Trouve le plus rapidement possible un mot lié au mien qui ne contient aucune des lettres visibles...\r\nBravo tu sais jouer !\r\n\r\nAinsi donc, à tour de rôle, prononcez un mot qui ne contient aucune des lettres visibles sur la table…\r\net qui est lié au mot précédent ! Ça chauffe, car on ajoute une lettre à chaque tour !\r\n\r\nOlé Guacamolé est un jeu d\'ambiance idéal pour s\'amuser à l\'heure de l\'apéro.', 2, 8, 10, 20),
(4, '\r\n\r\nFaites vite des mots croisés avec toutes les lettres ! Tout le monde joue en même temps, pas besoin d\'attendre son tour.\r\n\r\nSans plateau, ni crayon, ni papier, juste un jeu super-marrant à emporter partout dans sa banane.\r\n', 1, 8, 7, 20),
(5, 'Chaque carte Pizza offre un choix entre trois niveaux de catégories : facile (vert), moyen (jaune) ou difficile (rouge).\r\nDès qu’un tour est lancé, chacun cherche un mot qui entre dans l’une des trois catégories ET commence par la lettre indiquée face à cette catégorie.\r\nLe premier joueur qui donne une bonne réponse à voix haute gagne le tour. Il remporte alors la carte Pizza qui contient la lettre jouée et l’ajoute à sa méga-part de pizza.\r\nEt c’est déjà parti pour le prochain tour !\r\nAu début de la partie on peut répondre à toutes les catégories : vert, jaune et rouge. Puis seulement les jaunes et rouges et enfin uniquement les rouges pour terminer sa méga-part de pizza.\r\nP comme Pizza est un jeu rapide, drôle et délicieusement simple, les combinaisons entre lettres et catégories sont toujours différentes. En famille ou entre amis, c\'est un jeu pour tout âge.', 2, 4, 8, 30),
(6, 'Issu du jeu vidéo du même nom, Dorfromantik est un jeu coopératif dans lequel les joueurs vont créer ensemble un village idyllique. Des rivières ondoyantes, des forêts bruissantes, des champs de blé se balançant dans le vent et ici et là un joli petit village - voilà votre objectif commun et votre défi tout au long des parties !\r\nDans ce jeu de placement de tuiles très accessible, chaque joueur, à son tour, consulte les autres joueurs afin de placer  au mieux la tuile piochée, dans le but de créer un paysage harmonieux et de répondre aux requêtes de la population.\r\nLe score est calculé en fin de partie selon la plus grande voie ferrée, la plus grande rivière, les différents terrains et les objectifs réalisés. Sous forme de campagne, le score atteint permet de débloquer du contenu supplémentaire (nouvelles tuiles, nouvelles cartes, pions spéciaux…) afin de marquer encore plus de points lors des parties suivantes. Quel sera votre record ?', 1, 6, 8, 45),
(7, 'Dans le jeu de société Genius Square, il existe deux modes de jeu et 5 niveaux de difficultés.\r\n\r\n- Le mode duel : Il vous permet d\'adapter la difficulté du jeu selon la différence de niveaux entre les adversaires, ou bien de corser la partie pour tous. Lancez les dés, réfléchissez rapidement et atteignez le niveau WIZARD avant votre adversaire. \r\n- Le mode solitaire : Il vous permet de battre vos propres records de rapidité.\r\n\r\nLes mécaniques de jeux sont simples : chaque joueur prend un plateau de jeu, un jeu de 9 pièces de couleurs différentes et 7 cylindres neutres. Lancez tous les dés et placez les cylindres sur les coordonnées correspondantes afin de bloquer ces cases. Le plus rapide à compléter son plateau de jeu remporte la partie !\r\n\r\n Plus de 62 000 défis à maîtriser dans 5 niveaux de difficulté.\r\n\r\nGenius Square est un jeu pour toute la famille, où petits et grands pourront s’affronter à égalité de chance de l’emporter grâce aux différents niveaux proposés.', 2, 2, 6, 10),
(8, 'aaaaa', 2, 4, 7, 10),
(9, 'Dans le jeu Pina Coladice, vous lancez les dés pour tenter de réaliser l\'une des combinaisons présentes au centre de la table. Usez de stratégie pour vous placer judicieusement avant vos adversaires et remporter de précieux points vous rapprochant de la victoire… ou réalisez un PINA COLADICE !<br />\r\n<br />\r\nChaque joueur commence la partie avec 7 pions Cocktails et un sous-verre de score.<br />\r\nÀ votre tour, lancez les 5 dés pour tenter de réaliser les meilleurs combinaisons : Brelan, Full, Carré, Yam\'s, etc... Sélectionnez les dés que vous voulez relancer pour tenter de former une meilleure combinaison, vous avez droit à un total de 3 lancers et pouvez vous arrêter après n\'importe lequel. ', 2, 4, 7, 10);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `idJeux` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `presentationjeux`
--

CREATE TABLE `presentationjeux` (
  `id` int(11) NOT NULL,
  `nomFichier` varchar(50) DEFAULT NULL,
  `nomJeu` varchar(50) DEFAULT NULL,
  `presentationJeu` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `presentationjeux`
--

INSERT INTO `presentationjeux` (`id`, `nomFichier`, `nomJeu`, `presentationJeu`) VALUES
(1, 'kamisado', 'Kamisado', 'Kamisado est un pur jeu de réflexion et de stratégie ! Dans le jeu primé Kamisado, l’objectif est d’être le premier à placer une tour de sa couleur sur l’une des cases de la rangée de base adverse. L’astuce : les joueurs ne peuvent déplacer qu’une tour dont la couleur du symbole correspond à la couleur de la case sur laquelle son adversaire s’est arrêté au coup précédent.'),
(2, 'mauditmotdit', 'Maudit mot dit', 'Dans ce jeu de déduction où il faut sans surprise deviner un mot, tout se joue sur le nombre d\'indices... ni trop, ni trop peu... Maudit Mot Dit est un jeu plein de malice.\r\nChacun va devoir faire deviner un mot… sans qu’il soit trouvé trop tôt !'),
(3, 'oléguacamolé', 'Olé Guacamolé', 'Olé Guacamolé est un jeu d\'ambiance pour toute la famille, idéal pour s\'amuser à l\'heure de l\'apéro. Je viens de dire le mot \"Mexique\" et sur la table trois avocats proposent les lettres \" V, Y, K et D\". Trouve le plus rapidement possible un mot lié au mien qui ne contient aucune des lettres visibles.'),
(4, 'bananagrams', 'Bananagrams', 'Bananagrams Un jeu de lettres, de mots croisés, d\'anagrammes, qui se déguste à toute allure !Le jeu qui donne la banane !'),
(5, 'pcommepizza', 'P Comme Pizza', 'P comme Pizza est un jeu de rapidité dans lequel vous allez devoir trouver un mot commençant par une lettre imposée en rapport avec un thème donné !'),
(6, 'dorfromantik', 'Dorfromantik', 'Des rivières qui ondulent, des forêts qui bruissent, des champs de blé qui se balancent dans le vent et, ici et là, un mignon petit village : c\'est ça Dorfromantik !'),
(7, 'geniussquare', 'Genius Square', 'Jouez à deux en mode duel, ou bien en solitaire en complétant votre plateau de jeu le plus rapidement possible. Lancez les dés, réfléchissez rapidement et atteignez le niveau WIZARD avant votre adversaire. Plus de 62 000 défis à maîtriser dans 5 niveaux de difficulté, et toujours avec au moins une solution.');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `nomUtilisateur` varchar(50) NOT NULL,
  `motDePasse` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`nomUtilisateur`, `motDePasse`) VALUES
('admin', 'admin'),
('user', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`nom`);

--
-- Index pour la table `descriptionjeux`
--
ALTER TABLE `descriptionjeux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`idJeux`);

--
-- Index pour la table `presentationjeux`
--
ALTER TABLE `presentationjeux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`nomUtilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `descriptionjeux`
--
ALTER TABLE `descriptionjeux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `presentationjeux`
--
ALTER TABLE `presentationjeux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Base de données : `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Structure de la table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Structure de la table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Structure de la table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Structure de la table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Structure de la table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Structure de la table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Structure de la table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Déchargement des données de la table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"jeuxdesociete\",\"table\":\"presentationjeux\"},{\"db\":\"jeuxdesociete\",\"table\":\"descriptionjeux\"},{\"db\":\"jeuxdesociete\",\"table\":\"jeudesociete\"},{\"db\":\"jeuxdesociete\",\"table\":\"jeuxdesociete\"}]');

-- --------------------------------------------------------

--
-- Structure de la table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Structure de la table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Structure de la table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Déchargement des données de la table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2024-09-27 20:22:40', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"fr\"}');

-- --------------------------------------------------------

--
-- Structure de la table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Structure de la table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Index pour les tables déchargées
--

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
-- AUTO_INCREMENT pour les tables déchargées
--

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
-- Base de données : `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
