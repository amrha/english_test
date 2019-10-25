-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 13 avr. 2019 à 16:22
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `id9196051_utilisateur`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `mail` varchar(255) COLLATE utf8_bin NOT NULL,
  `passe` varchar(255) COLLATE utf8_bin NOT NULL,
  `niveau` int(255) NOT NULL,
  `scorec` int(255) NOT NULL,
  `scoreg` int(255) NOT NULL,
  `scorel` int(255) NOT NULL,
  `scored` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateur`
--

/*INSERT INTO `utilisateur` (`mail`, `passe`, `niveau`, `scorec`, `scoreg`, `scorel`, `scored`) VALUES
('amrouhajji@yahoo.fr', 'a', 1, 0, 5, 0, 0),
('hou@gmail.com', 'a', 1, 0, 0, 0, 0),
('xxxx@xxx.yy', 'a', 1, 0, 0, 0, 0);*/

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
