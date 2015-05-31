-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 30 Mai 2015 à 04:18
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `trocandcroc`
--

-- --------------------------------------------------------

--
-- Structure de la table `forum_categorie`
--

CREATE TABLE IF NOT EXISTS `forum_categorie` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nom` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cat_ordre` int(11) NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `cat_ordre` (`cat_ordre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `forum_forum`
--

CREATE TABLE IF NOT EXISTS `forum_forum` (
  `forum_id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_cat_id` mediumint(8) NOT NULL,
  `forum_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `forum_desc` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `forum_ordre` mediumint(8) NOT NULL,
  `forum_last_post_id` int(11) NOT NULL,
  `forum_topic` mediumint(8) NOT NULL,
  `forum_post` mediumint(8) NOT NULL,
  `auth_view` tinyint(4) NOT NULL,
  `auth_post` tinyint(4) NOT NULL,
  `auth_topic` tinyint(4) NOT NULL,
  `auth_annonce` tinyint(4) NOT NULL,
  `auth_modo` tinyint(4) NOT NULL,
  PRIMARY KEY (`forum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `forum_membres`
--

CREATE TABLE IF NOT EXISTS `forum_membres` (
  `membre_id` int(11) NOT NULL AUTO_INCREMENT,
  `membre_pseudo` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_mdp` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_email` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_msn` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_siteweb` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_avatar` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_signature` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_localisation` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_inscrit` int(11) NOT NULL,
  `membre_derniere_visite` int(11) NOT NULL,
  `membre_rang` tinyint(4) DEFAULT '2',
  `membre_post` int(11) NOT NULL,
  PRIMARY KEY (`membre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `forum_post`
--

CREATE TABLE IF NOT EXISTS `forum_post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_createur` int(11) NOT NULL,
  `post_texte` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `post_time` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `post_forum_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `forum_topic`
--

CREATE TABLE IF NOT EXISTS `forum_topic` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_id` int(11) NOT NULL,
  `topic_titre` char(60) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `topic_createur` int(11) NOT NULL,
  `topic_vu` mediumint(8) NOT NULL,
  `topic_time` int(11) NOT NULL,
  `topic_genre` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `topic_last_post` int(11) NOT NULL,
  `topic_first_post` int(11) NOT NULL,
  `topic_post` mediumint(8) NOT NULL,
  PRIMARY KEY (`topic_id`),
  UNIQUE KEY `topic_last_post` (`topic_last_post`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_membre` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(30) CHARACTER SET utf8 NOT NULL,
  `motdepasse` text CHARACTER SET utf8 NOT NULL,
  `nom` varchar(30) CHARACTER SET utf8 NOT NULL,
  `prenom` varchar(30) CHARACTER SET utf8 NOT NULL,
  `adresse` text NOT NULL,
  `cp` varchar(5) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `telephone` varchar(10) CHARACTER SET utf8 NOT NULL,
  `photo` text CHARACTER SET utf8,
  `mail` text CHARACTER SET utf8 NOT NULL,
  `sexe` varchar(2) CHARACTER SET utf8 NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `id_panier` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_membre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_membre`, `pseudo`, `motdepasse`, `nom`, `prenom`, `adresse`, `cp`, `ville`, `telephone`, `photo`, `mail`, `sexe`, `admin`, `id_panier`) VALUES
(3, 'Camiliaa', 'ab4f63f9ac65152575886860dde480a1', 'Dahbi', 'Camilia', '29 rue Victor Hugo', '92130', 'Paris', '0614414021', NULL, 'camiliadahbi@gmail.com', 'F', 0, NULL),
(4, 'Thang', '560f6c297fa06fcddb6bf4cdcb801554', 'zertyu', 'zertyui', '0', '18000', 'Dijon', '0609090807', NULL, 'jean@hotmail.fr', 'H', 0, NULL),
(6, 'Paul', '560f6c297fa06fcddb6bf4cdcb801554', 'Arrago', 'Paul', '34hfujdfnfd', '12345', 'Paris', '0645342156', NULL, 'cizhfezufj@jrgh.com', 'H', 0, NULL),
(7, 'Camcam', '594f803b380a41396ed63dca39503542', 'Gorce ', 'Camille', '9 b promenade des anges', '78210', 'Saint Cyr l''Ecole', '0659221820', NULL, '21marrie@gmail.com', 'F', 0, NULL),
(8, 'max', '4cc5afc0baa5e53b619678295a82a35e', 'Arrago', 'Camille', '9 b promenade des anges', '78210', 'Issy-les-Moulineaux', '0614414021', NULL, 'max@gmail.com', 'H', 0, NULL),
(10, 'Cami', '560f6c297fa06fcddb6bf4cdcb801554', 'Gorce', 'Camillia', '33 jdhfndsjvndv', '34215', 'Issy-les-Moulineaux', '0614414021', NULL, 'camiliadahbi@gmail.com', 'F', 0, NULL),
(11, 'Bobo', '560f6c297fa06fcddb6bf4cdcb801554', 'Bebeb', 'Juqfhd', 'uszqd dcfbedsjfvhnediso', '12344', 'Ujfdisf', '09876543', NULL, 'cami@gmail.com', 'F', 0, NULL),
(12, 'Cams', 'd41d8cd98f00b204e9800998ecf8427e', 'Hfdihjfd', 'Cam', '33 jdhfndsjvndv', '34215', 'Issy-les-Moulineaux', '0614414021', NULL, 'camiliadahbi@gmail.com', 'H', 0, NULL),
(13, 'azerty', 'd41d8cd98f00b204e9800998ecf8427e', 'azerty', 'azerty', 'azertyu', '34215', 'Issy-les-Moulineaux', '0614414021', NULL, 'camiliadahbi@gmail.com', 'H', 0, NULL),
(14, 'azertyuio', 'ab4f63f9ac65152575886860dde480a1', 'azerty', 'azerty', 'azertyu', '34215', 'Issy-les-Moulineaux', '0614414021', NULL, 'camiliadahbi@gmail.com', 'H', 0, NULL),
(15, 'gum', 'ab4f63f9ac65152575886860dde480a1', 'Gorce', 'Camillia', '33 jdhfndsjvndv', '34215', 'Issy-les-Moulineaux', '0614414021', NULL, 'camiliadahbi@gmail.com', 'F', 0, NULL),
(16, 'user1', 'bb2a6582de3dadebe4b009bb03761233', 'Hfdihjfd', 'Cam', '33 jdhfndsjvndv', '34215', 'Issy-les-Moulineaux', '0614414021', NULL, 'camiliadahbi@gmail.com', 'F', 0, NULL),
(17, 'doriane', 'fa674118e815f6dc47c5540b35cb2585', 'Carmentier', 'Doriane', '6 rue des cerises', '21345', 'Issy-les-Moulineaux', '0614414021', NULL, 'dodo@gmail.com', 'H', 0, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
