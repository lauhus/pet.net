-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Sam 06 Juin 2020 à 15:39
-- Version du serveur :  5.7.30-0ubuntu0.18.04.1
-- Version de PHP :  7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pet_net`
--

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id_events` int(11) NOT NULL,
  `date` date NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `updated_at` date NOT NULL,
  `pet_id_pet` int(11) NOT NULL,
  `pet_user_id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id_events`, `date`, `start`, `end`, `created_by`, `created_at`, `updated_by`, `updated_at`, `pet_id_pet`, `pet_user_id_user`) VALUES
(1, '2020-06-04', '10:00:00', '10:30:00', 'laurine', '2020-06-03', 'laurine', '2020-06-03', 1, 1),
(2, '2020-06-04', '16:49:00', '17:19:00', '1', '2020-06-03', '1', '2020-06-03', 2, 1),
(3, '2020-06-06', '17:00:00', '17:30:00', '1', '2020-06-03', '1', '2020-06-03', 2, 1),
(4, '2020-06-20', '16:30:00', '17:00:00', '1', '2020-06-05', '1', '2020-06-05', 2, 1),
(5, '2020-06-06', '09:00:00', '09:30:00', 'laurine', '2020-06-05', 'laurine', '2020-06-05', 3, 2),
(6, '2020-06-27', '19:40:00', '20:10:00', '2', '2020-06-05', '2', '2020-06-05', 3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `pet`
--

CREATE TABLE `pet` (
  `id_pet` int(11) NOT NULL,
  `name_pet` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `identification` varchar(255) NOT NULL,
  `veterinaire` date DEFAULT NULL,
  `soins` varchar(255) DEFAULT NULL,
  `nourriture` varchar(255) NOT NULL,
  `eau` varchar(255) NOT NULL,
  `box` varchar(255) NOT NULL,
  `remarque` longtext,
  `date_entree` date DEFAULT NULL,
  `date_sortie` date DEFAULT NULL,
  `gps_longitude` float NOT NULL,
  `gps_latitude` float NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `updated_at` date NOT NULL,
  `user_id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `pet`
--

INSERT INTO `pet` (`id_pet`, `name_pet`, `genre`, `type`, `identification`, `veterinaire`, `soins`, `nourriture`, `eau`, `box`, `remarque`, `date_entree`, `date_sortie`, `gps_longitude`, `gps_latitude`, `created_by`, `created_at`, `updated_by`, `updated_at`, `user_id_user`) VALUES
(1, 'chouchou', 'male', 'chien', '10000', NULL, NULL, 'croquette', 'robinet', '1', 'aime les longues promenades', '2020-06-02', '2020-06-09', 6.13527, 49.1938, 'laurine', '2020-06-02', 'laurine', '2020-06-02', 1),
(2, 'loulou', 'femelle', 'chat', '20000', NULL, NULL, 'pate', 'minerale', '20', 'Craintif', '2020-06-02', '2020-06-09', 3.46505, 43.5188, 'laurine', '2020-06-02', 'laurine', '2020-06-02', 1),
(3, 'Hermes', 'male', 'chat', '123456', '2020-06-01', 'Toilettage 03/06/2020 ', 'croquette', 'robinet', '21', 'Perd ses poils , bien le brossé', '2020-06-01', '2020-06-13', 6.66062, 49.0569, 'laurine', '2020-06-05', 'laurine', '2020-06-05', 2);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `firstname_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `phone_user` int(4) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `firstname_user`, `email_user`, `phone_user`, `mot_de_passe`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Dupont', 'Paul', 'dupont.paul.fr', 600000000, 'motdepasse', 'laurine', '2020-06-02', 'laurine', '2020-06-02'),
(2, 'Huss', 'Elsa', 'elsa.huss.fr', 600000000, 'elsa', 'laurine', '2020-06-05', 'laurine', '2020-06-05');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_events`),
  ADD KEY `pet_user_id_user` (`pet_user_id_user`),
  ADD KEY `pet_id_pet` (`pet_id_pet`);

--
-- Index pour la table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`id_pet`),
  ADD UNIQUE KEY `ind` (`identification`),
  ADD KEY `user_id_user` (`user_id_user`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `login` (`email_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id_events` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `pet`
--
ALTER TABLE `pet`
  MODIFY `id_pet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `pet`
--
ALTER TABLE `pet`
  ADD CONSTRAINT `pet_ibfk_1` FOREIGN KEY (`user_id_user`) REFERENCES `user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
