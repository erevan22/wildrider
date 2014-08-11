-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 11, 2014 at 11:33 AM
-- Server version: 5.5.37-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wildrider`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_adresse`
--

DROP TABLE IF EXISTS `t_adresse`;
CREATE TABLE IF NOT EXISTS `t_adresse` (
  `id_adresse` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `type` enum('P','L') COLLATE utf8_bin NOT NULL DEFAULT 'P',
  `libadresse` varchar(70) COLLATE utf8_bin NOT NULL,
  `cp` varchar(5) COLLATE utf8_bin NOT NULL,
  `ville` varchar(70) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_adresse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `t_categorie`
--

DROP TABLE IF EXISTS `t_categorie`;
CREATE TABLE IF NOT EXISTS `t_categorie` (
  `id_cat` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `t_client`
--

DROP TABLE IF EXISTS `t_client`;
CREATE TABLE IF NOT EXISTS `t_client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `telephone` varchar(10) COLLATE utf8_bin NOT NULL,
  `refcli` varchar(16) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `t_client`
--

INSERT INTO `t_client` (`id_client`, `nom`, `login`, `password`, `prenom`, `email`, `telephone`, `refcli`) VALUES
(1, 'Motoracer', 'user1', '698d51a19d8a121ce581499d7b701668', 'Antoine', 'antoine@aaa.fr', '0606060606', ''),
(2, 'Bycle', 'user2', '698d51a19d8a121ce581499d7b701668', 'Baba', 'antoine@aaa.fr', '0606060606', ''),
(3, 'Ghostrider', 'user3', '698d51a19d8a121ce581499d7b701668', 'Juju', 'juju@aaa.fr', '0606060606', ''),
(4, 'Lebolide', 'user4', '698d51a19d8a121ce581499d7b701668', 'Jean', 'jean@aaa.fr', '0606060606', ''),
(5, 'Lefouduvolant', 'user5', '698d51a19d8a121ce581499d7b701668', 'Chacha', 'chacha@aaa.fr', '0606060606', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_commande`
--

DROP TABLE IF EXISTS `t_commande`;
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
-- Table structure for table `t_panier`
--

DROP TABLE IF EXISTS `t_panier`;
CREATE TABLE IF NOT EXISTS `t_panier` (
  `id_panier` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  PRIMARY KEY (`id_panier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `t_produit`
--

DROP TABLE IF EXISTS `t_produit`;
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
-- Dumping data for table `t_produit`
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
-- Table structure for table `t_sscat`
--

DROP TABLE IF EXISTS `t_sscat`;
CREATE TABLE IF NOT EXISTS `t_sscat` (
  `id_sscat` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_cat` int(11) NOT NULL,
  PRIMARY KEY (`id_sscat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

DROP TABLE IF EXISTS `t_user`;
CREATE TABLE IF NOT EXISTS `t_user` (
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `type` varchar(1) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
