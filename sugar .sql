-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 11 juin 2021 à 11:52
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sugar`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idclient` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idclient`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idclient`, `username`, `mail`, `password`) VALUES
(1, 'romane', 'romane@romane.com', '$2y$10$QLsCw1Y3vSsHhQ7Gxq8w3u0nvhLeqEdLxiztaR88u2kihP9xpiX3W'),
(2, 'adam', 'adam@adam.com', 'user2');

-- --------------------------------------------------------

--
-- Structure de la table `consumption`
--

DROP TABLE IF EXISTS `consumption`;
CREATE TABLE IF NOT EXISTS `consumption` (
  `idconsumption` int(11) NOT NULL AUTO_INCREMENT,
  `productquantity` int(11) NOT NULL,
  `sugarquantity` int(11) NOT NULL,
  `dtconsumption` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idclient` int(11) NOT NULL,
  `idproduct` int(11) NOT NULL,
  PRIMARY KEY (`idconsumption`),
  KEY `idclient` (`idclient`),
  KEY `idproduct` (`idproduct`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `consumption`
--

INSERT INTO `consumption` (`idconsumption`, `productquantity`, `sugarquantity`, `dtconsumption`, `idclient`, `idproduct`) VALUES
(1, 300, 120, '2021-06-05 00:00:00', 1, 1),
(2, 600, 162, '2021-06-05 00:00:00', 1, 2),
(3, 550, 200, '2021-06-05 00:00:00', 1, 1),
(4, 460, 130, '2021-06-05 00:00:00', 1, 1),
(5, 300, 120, '2021-06-07 00:00:00', 1, 1),
(6, 220, 162, '2021-06-07 00:00:00', 1, 2),
(7, 135, 30, '2021-06-08 00:00:00', 2, 1),
(8, 220, 45, '2021-06-08 00:00:00', 2, 2),
(9, 135, 32, '2021-06-09 00:00:00', 2, 1),
(10, 500, 245, '2021-06-09 00:00:00', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `idproduct` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sugarthousand` int(11) NOT NULL,
  `codebar` char(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dtupdate` datetime DEFAULT NULL,
  PRIMARY KEY (`idproduct`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`idproduct`, `name`, `picture`, `sugarthousand`, `codebar`, `dtupdate`) VALUES
(1, 'nutella', '18295.jpg', 300, '3017620422003', NULL),
(2, 'prince', '18295.jpg', 405, '7622210449283', NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `consumption`
--
ALTER TABLE `consumption`
  ADD CONSTRAINT `consumption_ibfk_1` FOREIGN KEY (`idclient`) REFERENCES `client` (`idclient`),
  ADD CONSTRAINT `consumption_ibfk_2` FOREIGN KEY (`idproduct`) REFERENCES `product` (`idproduct`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
