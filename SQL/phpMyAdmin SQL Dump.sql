-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Lun 09 Février 2015 à 23:01
-- Version du serveur :  5.5.38
-- Version de PHP :  5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `bdd_d4a`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE `adresse` (
`id_adresse` int(11) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `adresse_complementaire` varchar(255) DEFAULT NULL,
  `code_postal` int(11) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `pays` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `adresse`
--

INSERT INTO `adresse` (`id_adresse`, `adresse`, `adresse_complementaire`, `code_postal`, `ville`, `pays`) VALUES
(1, '32 avenue de la république', NULL, 94800, 'Villejuif', 'France');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
`id_contact` int(11) NOT NULL,
  `nom_contact` varchar(50) DEFAULT NULL,
  `email_contact` varchar(255) DEFAULT NULL,
  `sujet_contact` varchar(255) DEFAULT NULL,
  `message_contact` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
`id_entreprise` int(11) NOT NULL,
  `nom_entreprise` varchar(50) DEFAULT NULL,
  `email_entreprise` varchar(255) DEFAULT NULL,
  `siret_entreprise` varchar(255) DEFAULT NULL,
  `tel_entreprise` varchar(15) DEFAULT NULL,
  `fax_entreprise` varchar(15) DEFAULT NULL,
  `id_bdd_entreprise` varchar(50) DEFAULT NULL,
  `date_immat_rcs_entreprise` datetime DEFAULT NULL,
  `forme_juridique_entreprise` varchar(255) DEFAULT NULL,
  `num_tva_entreprise` varchar(50) DEFAULT NULL,
  `activite_entreprise` text,
  `id_adresse` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `entreprise`
--

INSERT INTO `entreprise` (`id_entreprise`, `nom_entreprise`, `email_entreprise`, `siret_entreprise`, `tel_entreprise`, `fax_entreprise`, `id_bdd_entreprise`, `date_immat_rcs_entreprise`, `forme_juridique_entreprise`, `num_tva_entreprise`, `activite_entreprise`, `id_adresse`) VALUES
(1, 'Efrei', 'efrei@efrei.fr', '213128372187312', '0199887765', '0188998877', NULL, NULL, 'SAS', '9839218312', 'Ecole', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
`id_user` int(11) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `login` varchar(25) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `entreprise_id_entreprise` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `password`, `login`, `role`, `entreprise_id_entreprise`) VALUES
(1, 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'efrei@efrei.fr', 2, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
 ADD PRIMARY KEY (`id_adresse`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
 ADD PRIMARY KEY (`id_entreprise`), ADD KEY `FK_entreprise_id_adresse` (`id_adresse`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`), ADD KEY `FK_user_entreprise_id_entreprise` (`entreprise_id_entreprise`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
MODIFY `id_adresse` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
MODIFY `id_entreprise` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `entreprise`
--
ALTER TABLE `entreprise`
ADD CONSTRAINT `FK_entreprise_id_adresse` FOREIGN KEY (`id_adresse`) REFERENCES `adresse` (`id_adresse`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `FK_user_entreprise_id_entreprise` FOREIGN KEY (`entreprise_id_entreprise`) REFERENCES `entreprise` (`id_entreprise`);
