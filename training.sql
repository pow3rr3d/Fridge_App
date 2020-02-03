-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 03 fév. 2020 à 08:37
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
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `produit`, `image`) VALUES
(5, 'Fromage', 'Media/fromage.jpg'),
(40, 'Oeuf', 'Media/Oeuf.jpg'),
(29, 'Jambon', 'Media/Jambon.png'),
(41, 'Rape', ''),
(34, 'Steack', 'media/Steack.jpg'),
(33, 'Saumon', ''),
(32, 'Huile', ''),
(31, 'Pain', ''),
(37, 'Coca', ''),
(38, 'Pates', ''),
(39, 'Riz', ''),
(45, 'Steack Hache', ''),
(42, 'ChÃ¨vre', ''),
(43, 'Jambon cru', ''),
(44, 'Jambon sec', ''),
(46, 'Pommes de terre', ''),
(47, 'Vignaire', ''),
(48, 'Sel', ''),
(49, 'Poivre', ''),
(50, 'Eau minerale', ''),
(51, 'Eau Gazeuse', ''),
(52, 'Ketchup', ''),
(53, 'Mayonnaise', ''),
(54, 'Moutarde', ''),
(55, 'Pain de mie', ''),
(56, 'Pain', ''),
(57, 'Baguette', ''),
(58, 'Colin', ''),
(59, 'Cabillot', ''),
(60, 'Farine', ''),
(61, 'Sucre (morceaux)', ''),
(62, 'Sucre (poudre)', ''),
(63, 'Cereales', ''),
(64, 'Saucisson', ''),
(65, 'Raviolli', ''),
(66, 'Pizza', ''),
(67, 'Creme fraiche', ''),
(68, 'Beurre', ''),
(69, 'Bouillon', ''),
(70, 'Pommes chips', ''),
(71, 'Bretzels', ''),
(72, 'Glace', ''),
(73, 'Cookies', ''),
(74, 'Brioches', ''),
(75, 'Madeleines', ''),
(76, 'Gateau', ''),
(77, 'Boeuf', ''),
(78, 'Volaille', ''),
(79, 'Jambon', ''),
(80, 'Fruits de mer', ''),
(81, 'Charcuterie', ''),
(82, 'Boissons gazeuses', ''),
(83, 'Jus', ''),
(84, 'Cafe', ''),
(85, 'The', ''),
(86, 'Oranges', ''),
(87, 'Pommes', ''),
(88, 'Bananes', ''),
(89, 'Laitue', ''),
(90, 'Tomates', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `email`, `emailConfirm`, `password`, `avatar`, `privileges`) VALUES
(1, 'ADN', 'Powerred', 'powerred@gmail.com', 'Yes', '$argon2i$v=19$m=1024,t=2,p=2$bUhHcDYuWHhoOVNlWW1sWA$L9Cv/GKRgePvsDgMgWliCayPY1Ba18TcyQgiPcEaqv0', 'media/uploads/avatar_1.jpg', 'Admin'),
(3, 'test', 'test', 'test@test.com', 'Yes', '$argon2i$v=19$m=1024,t=2,p=2$N2VTVGV2dmFxaXNtekU0ZA$oBqiIW9uXPFbt6PW4OyELV5s2MUsTGGeJhTVrT4iYfg', 'Media/Uploads/Avatar_3.PNG', 'User'),
(8, 'THE', 'AGREGRATOR', 'greg@a-gregator.fr', '', '$argon2i$v=19$m=1024,t=2,p=2$bUhHcDYuWHhoOVNlWW1sWA$L9Cv/GKRgePvsDgMgWliCayPY1Ba18TcyQgiPcEaqv0', 'media/uploads/avatar_8.png', 'Admin');

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
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user_produit`
--

INSERT INTO `user_produit` (`joined_id`, `user_id`, `produit_id`, `produit_stock_reel`, `produit_stock_opti`, `produit_img`) VALUES
(1, 1, 5, 1, 5, 'media/uploads/Fromage_1.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
