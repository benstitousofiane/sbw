-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : sql304.infinityfree.com
-- Généré le :  Dim 10 sep. 2023 à 17:28
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP :  7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `if0_34965844_sbw`
--

-- --------------------------------------------------------

--
-- Structure de la table `descartes_cartes`
--

CREATE TABLE `descartes_cartes` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `proprietaire` text NOT NULL,
  `question` text NOT NULL,
  `reponse` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `descartes_projets`
--

CREATE TABLE `descartes_projets` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `proprietaire` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `portinfo`
--

CREATE TABLE `portinfo` (
  `id` int(11) NOT NULL,
  `titre` text COLLATE utf8_unicode_ci NOT NULL,
  `emoji` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `plateforme` text COLLATE utf8_unicode_ci NOT NULL,
  `lien` text COLLATE utf8_unicode_ci NOT NULL,
  `langages` text COLLATE utf8_unicode_ci NOT NULL,
  `dependances` text COLLATE utf8_unicode_ci NOT NULL,
  `objectif` text COLLATE utf8_unicode_ci NOT NULL,
  `couleur` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recreation_cours_chapitres`
--

CREATE TABLE `recreation_cours_chapitres` (
  `id` int(11) NOT NULL,
  `matiere` text COLLATE utf8_unicode_ci NOT NULL,
  `nom` text COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recreation_cours_contenus`
--

CREATE TABLE `recreation_cours_contenus` (
  `id` int(11) NOT NULL,
  `nom` text COLLATE utf8_unicode_ci NOT NULL,
  `matiere` text COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `contenu` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recreation_devoirs_contenus`
--

CREATE TABLE `recreation_devoirs_contenus` (
  `id` int(11) NOT NULL,
  `matiere` text COLLATE utf8_unicode_ci NOT NULL,
  `date` text COLLATE utf8_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recreation_devoirs_dates`
--

CREATE TABLE `recreation_devoirs_dates` (
  `id` int(11) NOT NULL,
  `matiere` text COLLATE utf8_unicode_ci NOT NULL,
  `date` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recreation_exercices_contenus`
--

CREATE TABLE `recreation_exercices_contenus` (
  `id` int(11) NOT NULL,
  `matiere` text COLLATE utf8_unicode_ci NOT NULL,
  `date` text COLLATE utf8_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recreation_exercices_dates`
--

CREATE TABLE `recreation_exercices_dates` (
  `id` int(11) NOT NULL,
  `matiere` text COLLATE utf8_unicode_ci NOT NULL,
  `date` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recreation_matieres`
--

CREATE TABLE `recreation_matieres` (
  `id` int(11) NOT NULL,
  `nom` text COLLATE utf8_unicode_ci NOT NULL,
  `emoji` text COLLATE utf8_unicode_ci NOT NULL,
  `couleur` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'valide'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `descartes_cartes`
--
ALTER TABLE `descartes_cartes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `descartes_projets`
--
ALTER TABLE `descartes_projets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `portinfo`
--
ALTER TABLE `portinfo`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recreation_cours_chapitres`
--
ALTER TABLE `recreation_cours_chapitres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recreation_cours_contenus`
--
ALTER TABLE `recreation_cours_contenus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recreation_devoirs_contenus`
--
ALTER TABLE `recreation_devoirs_contenus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recreation_devoirs_dates`
--
ALTER TABLE `recreation_devoirs_dates`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recreation_exercices_contenus`
--
ALTER TABLE `recreation_exercices_contenus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recreation_exercices_dates`
--
ALTER TABLE `recreation_exercices_dates`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recreation_matieres`
--
ALTER TABLE `recreation_matieres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `descartes_cartes`
--
ALTER TABLE `descartes_cartes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `descartes_projets`
--
ALTER TABLE `descartes_projets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `portinfo`
--
ALTER TABLE `portinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recreation_cours_chapitres`
--
ALTER TABLE `recreation_cours_chapitres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recreation_cours_contenus`
--
ALTER TABLE `recreation_cours_contenus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recreation_devoirs_contenus`
--
ALTER TABLE `recreation_devoirs_contenus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recreation_devoirs_dates`
--
ALTER TABLE `recreation_devoirs_dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recreation_exercices_contenus`
--
ALTER TABLE `recreation_exercices_contenus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recreation_exercices_dates`
--
ALTER TABLE `recreation_exercices_dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recreation_matieres`
--
ALTER TABLE `recreation_matieres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
