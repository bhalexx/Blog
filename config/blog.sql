-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 30 Août 2017 à 08:33
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `blogpost`
--

CREATE TABLE `blogpost` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `hook` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `author` varchar(255) NOT NULL,
  `dateInsert` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mainPicture` varchar(255) NOT NULL,
  `nbLikes` int(11) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `commentsEnabled` tinyint(1) NOT NULL,
  `nbComments` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `blogPostId` int(11) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `dateInsert` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déclencheurs `comment`
--
DELIMITER $$
CREATE TRIGGER `after_delete_comment` AFTER DELETE ON `comment` FOR EACH ROW BEGIN
  UPDATE blogpost SET nbComments = nbComments - 1
    WHERE id = OLD.blogPostId;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_insert_comment` AFTER INSERT ON `comment` FOR EACH ROW BEGIN
  UPDATE blogpost SET nbComments = nbComments + 1
    WHERE id = NEW.blogPostId;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tag_blogpost`
--

CREATE TABLE `tag_blogpost` (
  `tagId` int(11) NOT NULL,
  `blogPostId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `blogpost`
--
ALTER TABLE `blogpost`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogPostId` (`blogPostId`);

--
-- Index pour la table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tag_blogpost`
--
ALTER TABLE `tag_blogpost`
  ADD KEY `tagId` (`tagId`),
  ADD KEY `blogPostId` (`blogPostId`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `blogpost`
--
ALTER TABLE `blogpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT pour la table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_blogpostid_fk` FOREIGN KEY (`blogPostId`) REFERENCES `blogpost` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Contraintes pour la table `tag_blogpost`
--
ALTER TABLE `tag_blogpost`
  ADD CONSTRAINT `tbp_blogpostid_fk` FOREIGN KEY (`blogPostId`) REFERENCES `blogpost` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbp_tagid_fk` FOREIGN KEY (`tagId`) REFERENCES `tag` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
