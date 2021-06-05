-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 03 juin 2021 à 15:39
-- Version du serveur :  8.0.19
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionorganisatio(php)`
--

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`id`, `nom`, `description`) VALUES
(3, 'Administrateur', 'c est la personne qui a tous les droits'),
(18, 'Etudiant', 'Il ne peut que se faire inscrire');

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `nom`, `prenoms`, `telephone`, `email`, `adresse`, `organisations_name`) VALUES
(1, 'DIALLO', 'Abdoul Karim ', '781659948', 'fooly@gmail.com', 'Dakar Leona', 'Pour la promotion des femmes'),
(3, 'DIALLO', 'Abdoul', '781659948', 'foolggy@gmail.com', 'dakar', 'Pour la promotion des femmes');

--
-- Déchargement des données de la table `organisations`
--

INSERT INTO `organisations` (`id`, `nom`, `ZoneIntervention`, `theme`, `contact`, `adresse`, `type_organisations`) VALUES
(2, 'Pour la promotion des femmes', 'Dakar', 'mutilation geitale', '781659948', 'khar yallah leona', 'Organisation non gouvernementale');

--
-- Déchargement des données de la table `typeorganisation`
--

INSERT INTO `typeorganisation` (`id`, `libelle`) VALUES
(3, 'Organisation non gouvernementale'),
(4, 'ONG Africa consulting');

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `Groupe_User`, `nom`, `Prenoms`, `genre`, `username`, `password`) VALUES
(17, 'Administrateur', 'DIALLO', 'Abdoul Karim', 'Masculin', 'jabbar@gmail.com', 'Fooly@1251'),
(37, 'Administrateur', 'DIALLO', 'Abdourahmane', 'Masculin', 'abdourahmane@gmail.com', '1234'),
(39, 'Etudiant', 'DIALLO', 'Abdoul', 'Masculin', 'fool20y@gmail.com', '1234'),
(40, 'Etudiant', 'DIALLO', 'Abdoul', 'Masculin', 'fool1234y@gmail.com', '1234'),
(42, 'Etudiant', 'DIALLO', 'Abdourahmane', 'Masculin', 'rahmane@gmail.com', '1234'),
(43, 'Etudiant', 'DIALLO', 'Abdoul', 'Masculin', 'fooly555@gmail.com', '1234'),
(44, 'Etudiant', 'DIALLO', 'Abdoul', 'Masculin', 'foolywww@gmail.com', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
