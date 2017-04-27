-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 27 Avril 2017 à 21:10
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_web`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `id` int(11) NOT NULL,
  `nom_activite` varchar(255) NOT NULL,
  `module_associe` int(11) NOT NULL,
  `nb_etape` int(11) NOT NULL,
  `description` text NOT NULL,
  `responsable` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `activite`
--

INSERT INTO `activite` (`id`, `nom_activite`, `module_associe`, `nb_etape`, `description`, `responsable`) VALUES
(1, 'Test', 1, 10, 'Activité test de 10 étapes', 8),
(2, 'Test2', 5, 20, 'un deuxième test', 8);

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id_module` int(11) NOT NULL,
  `nom_module` varchar(30) NOT NULL,
  `id_moderateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `module`
--

INSERT INTO `module` (`id_module`, `nom_module`, `id_moderateur`) VALUES
(1, 'Informatique', 8),
(2, 'Mathématique', 8);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `no_personne` int(11) NOT NULL,
  `login` varchar(20) NOT NULL COMMENT 'login de l''utilisateur',
  `mdp` varchar(30) NOT NULL COMMENT 'mot de passe associe',
  `nom_personne` varchar(30) NOT NULL,
  `prenom_personne` varchar(30) NOT NULL,
  `mail_personne` varchar(50) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `personne`
--

INSERT INTO `personne` (`no_personne`, `login`, `mdp`, `nom_personne`, `prenom_personne`, `mail_personne`, `type`) VALUES
(7, 'loulou', 'pp', 'Renault', 'Loic', 'renault.loic.35@gmail.com', 1),
(8, 'batou', 'papy', 'Pesquet', 'Baptiste', 'Batou@gmail.com', 2);

-- --------------------------------------------------------

--
-- Structure de la table `realiser_activite`
--

CREATE TABLE `realiser_activite` (
  `id_activite` int(11) NOT NULL,
  `id_personne` int(11) NOT NULL,
  `avancement` int(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `realiser_activite`
--

INSERT INTO `realiser_activite` (`id_activite`, `id_personne`, `avancement`) VALUES
(1, 1, 5),
(1, 3, 0),
(1, 7, 0),
(2, 3, 12),
(2, 7, 0);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `no_type` int(11) NOT NULL,
  `fonction` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`no_type`, `fonction`) VALUES
(1, 'Etudiant'),
(2, 'Enseignant');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id_module`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`no_personne`);

--
-- Index pour la table `realiser_activite`
--
ALTER TABLE `realiser_activite`
  ADD PRIMARY KEY (`id_activite`,`id_personne`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`no_type`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id_module` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `no_personne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `no_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
