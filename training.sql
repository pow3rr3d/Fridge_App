-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 20 déc. 2019 à 10:06
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
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PRODUIT` varchar(255) NOT NULL,
  `IMAGE` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`ID`, `PRODUIT`, `IMAGE`) VALUES
(5, 'Fromage', ''),
(8, 'Oeuf', ''),
(29, 'Jambon', ''),
(28, 'Beurre', ''),
(30, 'Lait', ''),
(34, 'Steack', ''),
(33, 'Saumon', ''),
(32, 'Huile', ''),
(31, 'Pain', ''),
(35, 'Sel', ''),
(36, 'Poivre', ''),
(37, 'Coca', ''),
(38, 'Pâtes', ''),
(39, 'Riz', '');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(255) NOT NULL,
  `PRENOM` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `EMAIL_CONFIRM` varchar(3) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `AVATAR` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`ID`, `NOM`, `PRENOM`, `EMAIL`, `EMAIL_CONFIRM`, `PASSWORD`, `AVATAR`) VALUES
(1, 'Messager-diaz', 'Adrien', 'powerred@gmail.com', 'Yes', '$argon2i$v=19$m=1024,t=2,p=2$b1d1UUc5cXM5RXF1ZkZyMg$wZPB57MlzfMmAhdvFP/DCN9Ai8R8CAFKhRfFWioXvgg', ''),
(3, 'test', 'test', 'test@test.com', 'Yes', '$argon2i$v=19$m=1024,t=2,p=2$N2VTVGV2dmFxaXNtekU0ZA$oBqiIW9uXPFbt6PW4OyELV5s2MUsTGGeJhTVrT4iYfg', ''),
(5, 'test', 'test', 'email@email.fr', 'Yes', '$argon2i$v=19$m=1024,t=2,p=2$M0JRWEdHVktTQ210MmtqaA$BZdehD4JoOLr/obE2oKv26vDPoOZIUoJlSInXWcSs3c', '');

-- --------------------------------------------------------

--
-- Structure de la table `user_produit`
--

DROP TABLE IF EXISTS `user_produit`;
CREATE TABLE IF NOT EXISTS `user_produit` (
  `JOINED_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(11) NOT NULL,
  `PRODUIT_ID` int(11) NOT NULL,
  `PRODUIT_STOCK_REEL` int(11) NOT NULL,
  `PRODUIT_STOCK_OPTIMAL` int(11) NOT NULL,
  `PRODUIT_IMG` varchar(255) NOT NULL,
  PRIMARY KEY (`JOINED_ID`),
  KEY `FK_USER_ID` (`USER_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user_produit`
--

INSERT INTO `user_produit` (`JOINED_ID`, `USER_ID`, `PRODUIT_ID`, `PRODUIT_STOCK_REEL`, `PRODUIT_STOCK_OPTIMAL`, `PRODUIT_IMG`) VALUES
(1, 1, 5, 5, 5, ''),
(2, 1, 8, 0, 5, ''),
(19, 1, 29, 1, 5, ''),
(34, 1, 39, 1, 1, ''),
(33, 1, 38, 1, 1, ''),
(32, 1, 37, 5, 6, ''),
(31, 1, 36, 1, 1, ''),
(30, 1, 35, 1, 1, ''),
(29, 1, 31, 1, 2, ''),
(28, 1, 32, 1, 1, ''),
(27, 1, 33, 1, 2, ''),
(26, 1, 34, 5, 10, ''),
(25, 1, 30, 2, 6, ''),
(23, 1, 28, 0, 2, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
