-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 11 Août 2014 à 15:46
-- Version du serveur: 5.5.37-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `wildrider`
--
CREATE DATABASE IF NOT EXISTS `wildrider` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wildrider`;

-- --------------------------------------------------------

--
-- Structure de la table `t_adresse`
--

CREATE TABLE IF NOT EXISTS `t_adresse` (
  `id_adresse` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `type` enum('P','L') COLLATE utf8_bin NOT NULL DEFAULT 'P',
  `libadresse` varchar(70) COLLATE utf8_bin NOT NULL,
  `cp` varchar(5) COLLATE utf8_bin NOT NULL,
  `ville` varchar(70) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_adresse`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `t_adresse`
--

INSERT INTO `t_adresse` (`id_adresse`, `id_client`, `type`, `libadresse`, `cp`, `ville`) VALUES
(1, 7, 'P', '1, Rue PHP<br />', '75000', 'PARIS'),
(2, 8, 'P', '1, Rue PHP<br />', '75000', 'PARIS'),
(3, 9, 'P', '1, Rue PHP<br />', '75000', 'PARIS');

-- --------------------------------------------------------

--
-- Structure de la table `t_categorie`
--

CREATE TABLE IF NOT EXISTS `t_categorie` (
  `id_cat` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `t_client`
--

CREATE TABLE IF NOT EXISTS `t_client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(50) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `telephone` varchar(10) COLLATE utf8_bin NOT NULL,
  `refcli` varchar(16) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `t_client`
--

INSERT INTO `t_client` (`id_client`, `nom`, `prenom`, `login`, `password`, `email`, `telephone`, `refcli`) VALUES
(1, 'Motoracer', 'Antoine', 'user1', '698d51a19d8a121ce581499d7b701668', 'antoine@aaa.fr', '0606060606', ''),
(2, 'Bycle', 'Baba', 'user2', '698d51a19d8a121ce581499d7b701668', 'antoine@aaa.fr', '0606060606', ''),
(3, 'Ghostrider', 'Juju', 'user3', '698d51a19d8a121ce581499d7b701668', 'juju@aaa.fr', '0606060606', ''),
(4, 'Lebolide', 'Jean', 'user4', '698d51a19d8a121ce581499d7b701668', 'jean@aaa.fr', '0606060606', ''),
(5, 'Lefouduvolant', 'Chacha', 'user5', '698d51a19d8a121ce581499d7b701668', 'chacha@aaa.fr', '0606060606', ''),
(6, 'GIULIANI', 'Stephan', 'root', 'f82677c19736a9ca09b891e6c4e112b2', 'contact@mydomain.fr', '0102030405', '2014.00001'),
(7, 'GIULIANI', 'Stephan', 'root', 'c4ca4238a0b923820dcc509a6f75849b', 'contact@mydomain.fr', '0102030405', '2014.00002'),
(8, 'GIULIANI', 'Stephan', 'root', 'c4ca4238a0b923820dcc509a6f75849b', 'contact@mydomain.fr', '0102030405', '2014.00003'),
(9, 'GIULIANI', 'Stephan', 'root', 'c4ca4238a0b923820dcc509a6f75849b', 'contact@mydomain.fr', '0102030405', '2014.00004');

-- --------------------------------------------------------

--
-- Structure de la table `t_commande`
--

CREATE TABLE IF NOT EXISTS `t_commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `datecde` date NOT NULL,
  `etat` varchar(1) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_commande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `t_panier`
--

CREATE TABLE IF NOT EXISTS `t_panier` (
  `id_panier` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  PRIMARY KEY (`id_panier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `t_produit`
--

CREATE TABLE IF NOT EXISTS `t_produit` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id produit',
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `desc` varchar(255) COLLATE utf8_bin NOT NULL,
  `prix` float NOT NULL,
  `categorie` smallint(6) NOT NULL,
  `sscategorie` smallint(6) NOT NULL,
  `couleur` varchar(50) COLLATE utf8_bin NOT NULL,
  `image` varchar(255) COLLATE utf8_bin NOT NULL,
  `refpdt` varchar(16) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `t_produit`
--

INSERT INTO `t_produit` (`id_produit`, `nom`, `desc`, `prix`, `categorie`, `sscategorie`, `couleur`, `image`, `refpdt`) VALUES
(1, 'MOTO1', 'SUPER MOTO 1', 3000, 0, 0, 'Gris', '1', ''),
(2, 'MOTO2', 'SUPER MOTO 2', 6000, 0, 0, 'Rouge', '2', ''),
(3, 'MOTO3', 'SUPER MOTO 3', 6000, 0, 0, 'Blanc', '3', ''),
(4, 'MOTO4', 'SUPER MOTO 4', 6000, 0, 0, 'Blanc', '4', ''),
(5, 'MOTO5', 'SUPER MOTO 4', 6000, 0, 0, 'Vert', '5', ''),
(6, 'MOTO5', 'SUPER MOTO 6', 6000, 0, 0, 'Marron', '6', ''),
(7, 'MOTO7', 'SUPER MOTO 6', 6000, 0, 0, 'Noir', '7', ''),
(8, 'MOTO7', 'SUPER MOTO 6', 6000, 0, 0, 'Jaune', '8', '');

-- --------------------------------------------------------

--
-- Structure de la table `t_sscat`
--

CREATE TABLE IF NOT EXISTS `t_sscat` (
  `id_sscat` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_cat` int(11) NOT NULL,
  PRIMARY KEY (`id_sscat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `type` varchar(1) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
