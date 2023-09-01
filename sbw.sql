-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 01 sep. 2023 à 13:13
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sbw`
--

-- --------------------------------------------------------

--
-- Structure de la table `portinfo`
--

DROP TABLE IF EXISTS `portinfo`;
CREATE TABLE IF NOT EXISTS `portinfo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `emoji` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `plateforme` text NOT NULL,
  `lien` text NOT NULL,
  `langages` text NOT NULL,
  `dependances` text NOT NULL,
  `objectif` text NOT NULL,
  `couleur` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recreation_cours_chapitres`
--

DROP TABLE IF EXISTS `recreation_cours_chapitres`;
CREATE TABLE IF NOT EXISTS `recreation_cours_chapitres` (
  `id` int NOT NULL AUTO_INCREMENT,
  `matiere` text NOT NULL,
  `nom` text NOT NULL,
  `numero` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recreation_cours_contenus`
--

DROP TABLE IF EXISTS `recreation_cours_contenus`;
CREATE TABLE IF NOT EXISTS `recreation_cours_contenus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `matiere` text NOT NULL,
  `numero` int NOT NULL,
  `contenu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recreation_matieres`
--

DROP TABLE IF EXISTS `recreation_matieres`;
CREATE TABLE IF NOT EXISTS `recreation_matieres` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `emoji` text NOT NULL,
  `couleur` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL DEFAULT 'valide',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
