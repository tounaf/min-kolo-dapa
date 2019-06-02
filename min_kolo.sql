-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  sam. 18 mai 2019 à 16:12
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `min_kolo_dapa`
--

-- --------------------------------------------------------

--
-- Structure de la table `artistes`
--

CREATE TABLE `artistes` (
  `id` int(11) NOT NULL,
  `designationordre` varchar(50) NOT NULL,
  `dateordre` date NOT NULL,
  `designationoalc` varchar(50) NOT NULL,
  `dateoalc` date NOT NULL,
  `bassiste` varchar(50) NOT NULL,
  `solliste` varchar(50) NOT NULL,
  `clavieriste` varchar(50) NOT NULL,
  `batteur` varchar(50) NOT NULL,
  `coeurs` varchar(50) NOT NULL,
  `danseur` varchar(50) NOT NULL,
  `designationmisejour` varchar(50) NOT NULL,
  `datemisejour` date NOT NULL,
  `nom` varchar(80) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `numerounique` int(11) NOT NULL,
  `managere` varchar(50) NOT NULL,
  `groupe` varchar(50) NOT NULL,
  `discipline` varchar(50) NOT NULL,
  `instrument` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `reseauxsociaux` varchar(50) NOT NULL,
  `siteweb` varchar(50) NOT NULL,
  `typemusic` varchar(50) NOT NULL,
  `artvisuelle` varchar(50) NOT NULL,
  `artmusicaux` varchar(50) NOT NULL,
  `artscene` varchar(50) NOT NULL,
  `anneformation` date NOT NULL,
  `ecoleformation` varchar(50) NOT NULL,
  `genreformation` varchar(50) NOT NULL,
  `diplomeformation` varchar(50) NOT NULL,
  `anneactivite` date NOT NULL,
  `titreproduction` varchar(50) NOT NULL,
  `anneproduction` date NOT NULL,
  `production` varchar(50) NOT NULL,
  `titrerealisation` varchar(50) NOT NULL,
  `annerealisation` date NOT NULL,
  `lieu` varchar(50) NOT NULL,
  `partiicipation` varchar(50) NOT NULL,
  `affiliation` varchar(50) NOT NULL,
  `producteur` varchar(50) NOT NULL,
  `tourneur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `artistes`
--
ALTER TABLE `artistes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `artistes`
--
ALTER TABLE `artistes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
