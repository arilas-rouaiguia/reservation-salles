-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 22 fév. 2021 à 12:53
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
-- Base de données : `reservationsalles`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `debut` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `titre`, `description`, `debut`, `fin`, `id_utilisateur`) VALUES
(40, 'Test 2', 'Test 2', '2021-01-29 08:00:00', '2021-01-29 09:00:00', 28),
(39, 'OuiOk', '2021-01-27 08:00:00', '2021-01-27 10:00:00', '2021-01-27 11:00:00', 27);

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
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(23, 'TRUMP', '$2y$10$Fmx0CTxQL1Dmdr8x0VrGM.pxdY6MW3v75cRc2OOoVHMkUon.AlPtm'),
(24, 'Joris', '$2y$10$.L7y0Ia5HV9SrykbkjXCl.J/JVJAb1dIlzZCEQ9LOHpQt6BBurgYe'),
(26, 'HARDJOJO', '$2y$10$tZVdoENWEHDt0WnHzbWSRuHqoz8/i1Rb5YM5sWlJsVLL25K5MxD5q'),
(25, 'JeanemarreJeanemarre', '$2y$10$Tvh42CbTdE6SFx5dCn8wa.0TRscYCUVelEw.3Aplrdj9gix2lrLx6'),
(27, 'Test', '$2y$10$mVNSsL3DcYvjN3aMnHQK/.ioikkr8To7ojgdlRKAIOrT7KBln09u.'),
(28, 'test1', '$2y$10$UXob1BZbDSAJrR51l.CGMO/ogM37dnkxOI1jZKKu1RX5CGaRKN5VO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
