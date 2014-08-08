-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 07 Août 2014 à 08:05
-- Version du serveur :  5.5.34
-- Version de PHP :  5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `wildrider`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_client`
--

CREATE TABLE IF NOT EXISTS `t_client` (
`id_client` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `telephone` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Contenu de la table `t_client`
--

INSERT INTO `t_client` (`id_client`, `nom`, `login`, `password`, `prenom`, `email`, `telephone`) VALUES
(1, 'Motoracer', 'user1', '698d51a19d8a121ce581499d7b701668', 'Antoine', 'antoine@aaa.fr', '0606060606'),
(2, 'Bycle', 'user2', '698d51a19d8a121ce581499d7b701668', 'Baba', 'antoine@aaa.fr', '0606060606'),
(3, 'Ghostrider', 'user3', '698d51a19d8a121ce581499d7b701668', 'Juju', 'juju@aaa.fr', '0606060606'),
(4, 'Lebolide', 'user4', '698d51a19d8a121ce581499d7b701668', 'Jean', 'jean@aaa.fr', '0606060606'),
(5, 'Lefouduvolant', 'user5', '698d51a19d8a121ce581499d7b701668', 'Chacha', 'chacha@aaa.fr', '0606060606');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `t_client`
--
ALTER TABLE `t_client`
 ADD PRIMARY KEY (`id_client`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `t_client`
--
ALTER TABLE `t_client`
MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
