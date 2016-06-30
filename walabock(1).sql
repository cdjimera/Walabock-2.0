-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 17 Juin 2016 à 12:10
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `walabock`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idCategorie` int(11) NOT NULL,
  `libelleCat` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `libelleCat`) VALUES
(1, 'informatique'),
(2, 'Electromenager'),
(3, 'console/jeux'),
(4, 'telephonie'),
(5, 'dvd/film'),
(6, 'vehicule'),
(7, 'bricolage'),
(8, 'jardinage'),
(9, 'ameublement'),
(10, 'inclassable');

-- --------------------------------------------------------

--
-- Structure de la table `gestionnaire`
--

CREATE TABLE `gestionnaire` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `gestionnaire`
--

INSERT INTO `gestionnaire` (`id`, `nom`, `prenom`, `mail`, `login`, `mdp`) VALUES
(1, 'DUKURAY', 'Aboulaye', 'abou@walabock.fr', 'abou', 'abou'),
(2, 'SABLATOU', 'Daniel', 'dan@walabock.fr', 'dan', 'dan'),
(3, 'DJIMERA', 'CHEIKHOU', 'cheikh@walabok.fr', 'cheikh', 'cheikh');

-- --------------------------------------------------------

--
-- Structure de la table `offretroc`
--

CREATE TABLE `offretroc` (
  `idOffre` int(11) NOT NULL,
  `libelleOffre` varchar(50) DEFAULT NULL,
  `descriptif` varchar(200) DEFAULT NULL,
  `valeur` int(11) DEFAULT NULL,
  `idCategorie` int(11) DEFAULT NULL,
  `idUtilisateur` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `publie` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `offretroc`
--

INSERT INTO `offretroc` (`idOffre`, `libelleOffre`, `descriptif`, `valeur`, `idCategorie`, `idUtilisateur`, `image`, `publie`) VALUES
(1, 'Iphone 6', 'je met a disposition mon Iphone 6 contre un samsung Galaxys S6', 700, 4, 1, './img/test.png', 1),
(2, '1', 'DepotDannonce', 0, 1, 1, NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `troc`
--

CREATE TABLE `troc` (
  `idOffre1` int(11) NOT NULL,
  `idOffre2` int(11) NOT NULL,
  `Etat` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `sexe` varchar(5) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `dateNaiss` varchar(10) NOT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `sexe`, `nom`, `prenom`, `dateNaiss`, `mail`, `login`, `mdp`, `tel`) VALUES
(1, '', 'DUKURAY', 'Aboulaye', '16/02/1995', 'test@test.fr', 'ad', 'ad', '0122958475'),
(2, '', 'Lodbrock', 'bjorn', '', 'bjorn@hotmail.fr', 'bjorn', 'bjorn', '0140409533'),
(3, '', 'poulsen', 'youssouf', '', 'poulsen@hotmail.fr', 'poulsen', 'poulsen', '0145390601'),
(4, '', 'Latoure', 'Yaya', '', 'yaya@hotmail.fr', 'yaya', 'yaya', '0142479035'),
(12, '', 'ad', 'ad', '', 'ada@sad.fr', 'ad', 'pp', '000'),
(14, 'H', 'aa', 'aa', '25/11/2005', 'aaa@aa.ss', 'aaaa', 'aaaa', '0511448855'),
(15, 'H', 'dan', 'lapud', '25/02/2005', 'ad@hv.gt', 'test', 'test', '0254896385');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idCategorie`);

--
-- Index pour la table `gestionnaire`
--
ALTER TABLE `gestionnaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `offretroc`
--
ALTER TABLE `offretroc`
  ADD PRIMARY KEY (`idOffre`),
  ADD KEY `idCategorie` (`idCategorie`),
  ADD KEY `idUtilisateur` (`idUtilisateur`);

--
-- Index pour la table `troc`
--
ALTER TABLE `troc`
  ADD PRIMARY KEY (`idOffre1`,`idOffre2`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `gestionnaire`
--
ALTER TABLE `gestionnaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `offretroc`
--
ALTER TABLE `offretroc`
  MODIFY `idOffre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
