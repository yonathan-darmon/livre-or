-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 29 nov. 2021 à 09:39
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `livreor`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_utilisateur`, `date`) VALUES
(2, 'yooooooooooooooooooooooo', 1, '2021-11-26 13:37:11'),
(16, 'hihi je suis un gateau de riz', 4, '2021-11-26 14:50:53'),
(5, 'mon pere, ma mere', 1, '2021-11-26 13:59:50'),
(13, 'j\'aime les fruits aux sirop d\'erable et la planete Terre ', 1, '2021-11-26 14:21:08'),
(15, 'TOP!', 3, '2021-11-26 14:46:19'),
(14, 'Yo Ã§a va ?', 1, '2021-11-26 14:22:26'),
(17, 'YOOOOOOOOOOO', 4, '2021-11-26 14:54:15'),
(18, 'Salut les terriens!', 1, '2021-11-26 14:56:16'),
(38, 'z', 1, '2021-11-29 10:36:24'),
(37, 'apparemment Ã§a marche essayons encore un ', 1, '2021-11-29 10:08:10'),
(31, 'Et Voila le livre d\'or', 1, '2021-11-26 15:01:47'),
(36, 'apparemment Ã§a marche essayons encore un ', 1, '2021-11-29 10:07:25'),
(35, 'Tentative de com', 1, '2021-11-29 10:06:58'),
(34, 'Salut les terriens', 1, '2021-11-27 19:18:09');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(1, 'koobiak', 'yo'),
(2, 'test', 'test'),
(3, 'meriem', '123456'),
(4, 'yaya', 'a'),
(5, 'oli', '1234'),
(6, 'Oli', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
