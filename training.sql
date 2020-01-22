-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 22 jan. 2020 à 16:16
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `training`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produit` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `produit`, `image`) VALUES
(5, 'Fromage', 'Media/fromage.jpg'),
(40, 'Oeuf', 'Media/Oeuf.jpg'),
(29, 'Jambon', 'Media/Jambon.png'),
(28, 'Beurre', ''),
(30, 'Lait', ''),
(34, 'Steack', ''),
(33, 'Saumon', ''),
(32, 'Huile', ''),
(31, 'Pain', ''),
(35, 'Sel', ''),
(36, 'Poivre', ''),
(37, 'Coca', ''),
(38, 'Pates', ''),
(39, 'Riz', '');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `emailConfirm` varchar(3) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `privileges` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `email`, `emailConfirm`, `password`, `avatar`, `privileges`) VALUES
(1, 'ADN', 'Powerred', 'powerred@gmail.com', 'Yes', '$argon2i$v=19$m=1024,t=2,p=2$bUhHcDYuWHhoOVNlWW1sWA$L9Cv/GKRgePvsDgMgWliCayPY1Ba18TcyQgiPcEaqv0', 'media/uploads/avatar_1.jpg', 'Admin'),
(3, 'test', 'test', 'test@test.com', 'Yes', '$argon2i$v=19$m=1024,t=2,p=2$N2VTVGV2dmFxaXNtekU0ZA$oBqiIW9uXPFbt6PW4OyELV5s2MUsTGGeJhTVrT4iYfg', 'Media/Uploads/Avatar_3.PNG', 'User'),
(7, 'test', 'test', 'email@email.com', 'Yes', '$argon2i$v=19$m=1024,t=2,p=2$Zkd2SGx2UDUxNzhXYWUwWA$wyHYDmOF9mRuSxpACFfyIKWfjjeie6cEezVQHn6qopg', '', 'User');

-- --------------------------------------------------------

--
-- Structure de la table `user_produit`
--

DROP TABLE IF EXISTS `user_produit`;
CREATE TABLE IF NOT EXISTS `user_produit` (
  `joined_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL,
  `produit_stock_reel` int(11) NOT NULL,
  `produit_stock_opti` int(11) NOT NULL,
  `produit_img` varchar(255) NOT NULL,
  PRIMARY KEY (`joined_id`),
  KEY `FK_USER_ID` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user_produit`
--

INSERT INTO `user_produit` (`joined_id`, `user_id`, `produit_id`, `produit_stock_reel`, `produit_stock_opti`, `produit_img`) VALUES
(1, 1, 5, 0, 5, 'media/uploads/Fromage_1.jpg'),
(35, 1, 8, 4, 4, ''),
(19, 1, 29, 2, 5, ''),
(59, 1, 33, 1, 2, ''),
(66, 1, 38, 1, 2, ''),
(45, 1, 30, 2, 2, 'media/uploads/Lait_1.jpg'),
(57, 1, 35, 1, 2, 'media/uploads/Sel_1.jpg'),
(36, 3, 5, 4, 2, ''),
(37, 3, 40, 4, 2, ''),
(38, 1, 40, 3, 3, ''),
(39, 7, 5, 4, 2, ''),
(40, 7, 34, 4, 2, ''),
(60, 1, 37, 2, 2, ''),
(68, 1, 34, 5, 10, ''),
(67, 1, 39, 2, 2, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
