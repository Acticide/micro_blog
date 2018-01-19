-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 19 Janvier 2018 à 21:44
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `micro_blog_dessingue`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `contenu` varchar(60) NOT NULL,
  `date` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `contenu`, `date`) VALUES
(18, 'G', '1516390776'),
(12, 'A', '1516390648'),
(13, 'B', '1516390650'),
(14, 'C', '1516390652'),
(15, 'D', '1516390653'),
(16, 'E', '1516390668'),
(19, 'H', '1516390778'),
(20, 'I', '1516390781'),
(21, 'J', '1516390784'),
(22, 'K', '1516390788');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `sid` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `email`, `mdp`, `sid`) VALUES
(1, 'toto@gmail.com', 'toto62', '4d705bfbd17d61fde5f9c8dba75bbd03'),
(2, 'user@gmail.com', 'user123', 'addadadzad'),
(6, 'toto2@gmail.com', 'toto622', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
