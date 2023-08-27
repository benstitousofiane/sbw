-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 27 août 2023 à 12:45
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
  `image` text NOT NULL,
  `description` text NOT NULL,
  `plateforme` text NOT NULL,
  `lien` text NOT NULL,
  `langages` text NOT NULL,
  `dependances` text NOT NULL,
  `objectif` text NOT NULL,
  `couleur` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `state`) VALUES
(4, 'sofiane0', '$2y$12$.MEY9ig5Ez7OibLrq8A5SOr0EGPgZhnYaxhrDXK98Qc8EYJv5jgqK', 'admin'),
(5, 'bob477', '$2y$12$eGwr/1uuHm9M7vjgEj.MY.IqNZswvhrs3o7zZ0rX47YOr3kVDYF9S', 'valide'),
(6, 'hakimi67', '$2y$12$xvbX5dJk9C2PekeItsFWY.TESRQJe4ousgL3lgDq/yUKW/QskP00W', 'valide'),
(7, 'melik68', '$2y$12$qJsj6AT31.mNamSyaEE8i.oCfD6/tFSvB1Usq/soZqa7o.TWiwBf.', 'valide');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
