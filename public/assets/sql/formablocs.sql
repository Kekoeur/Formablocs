-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 10 sep. 2021 à 16:03
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `formablocs`
--

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `stripe_id` varchar(150) NOT NULL,
  `formations` varchar(500) DEFAULT NULL,
  `passw` varchar(255) DEFAULT NULL,
  `purchased_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `stripe_id`, `formations`, `passw`, `purchased_date`) VALUES
(9, 'Carlo Cilento', 'ccarlo@hotmail.it', 'cus_KCWBs7EqMkpTZ5', 'Module - Préparer et animer des actions de formation  collectives en intégrant des environnements numériques (bac+2), Module - Préparer et animer des actions de formation  collectives en intégrant des environnements numériques (bac+2), Module - Préparer et animer des actions de formation  collectives en intégrant des environnements numériques (bac+2), ', '$2y$10$uYXPP7gXxsfggVx80ws88.RwZLgM4hd7q7JWmGf4baV6zxX87IzdO', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `id` int(6) NOT NULL,
  `formation` varchar(500) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` varchar(10000) DEFAULT NULL,
  `price_id` varchar(255) DEFAULT NULL,
  `picto` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`id`, `formation`, `price`, `description`, `price_id`, `picto`) VALUES
(1, 'Formation - Formateur Professionnel d\'Adultes (bac+2)', '2500.00', 'Lorem Ipsum', 'price_1JXplgFXn081ePt8kRuMbLc7', 'ICONE FORMATION 2 - PROFIL.svg'),
(2, 'Formation - Conseiller en Insertion Professionnelle (bac+2)', '2500.00', 'Lorem Ipsum', 'price_1JXpnjFXn081ePt8bIZh09AL', 'ICONE FORMATION 1 - PROFIL.svg'),
(3, 'Préparer et animer des actions de formation collectives en intégrant des environnements numériques (bac+2)', '1000.00', 'Lorem Ipsum', 'price_1JXpvfFXn081ePt8tJKhH5XO', 'ICONE FORMATION 2 - PROFIL.svg'),
(4, 'Construire des parcours individualisés et  accompagner les apprenants (bac+2)', '1000.00', 'Lorem Ipsum', 'price_1JXpxeFXn081ePt8bkncllI1', 'ICONE FORMATION 2 - PROFIL.svg'),
(5, 'Accueillir pour analyser la demande des \npersonnes et poser les bases d\'un diagnostic partagé (bac+2)', '1000.00', 'Lorem Ipsum', 'price_1JXq00FXn081ePt8nGT1NcVY', 'ICONE FORMATION 2 - PROFIL.svg'),
(6, 'Accompagner les personnes dans leur parcours d\'insertion sociale et professionnelle (bac+2)', '1000.00', 'Lorem Ipsum', 'price_1JXq1vFXn081ePt83mIsenWO', 'ICONE FORMATION 2 - PROFIL.svg'),
(7, 'Mettre en œuvre une offre de services auprès des employeurs pour  favoriser l\'insertion professionnelle) (bac+2)', '1000.00', 'Lorem Ipsum', 'price_1JXq2uFXn081ePt8cGdo9Yfr', 'ICONE FORMATION 2 - PROFIL.svg');

-- --------------------------------------------------------

--
-- Structure de la table `prestations`
--

CREATE TABLE `prestations` (
  `id` int(6) NOT NULL,
  `prestation` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `price_id` varchar(255) DEFAULT NULL,
  `picto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `prestations`
--

INSERT INTO `prestations` (`id`, `prestation`, `price`, `price_id`, `picto`) VALUES
(1, 'Digitalisation - accompagnement à la méthodologie de passage d’une formation en présentiel au format distanciel', '2000.00', 'price_1JXq6KFXn081ePt8FBVcufIG', 'ICONE ACCOMPAGNEMENT - PROFIL.svg'),
(2, 'Qualité - accompagnement à la certification Qualiopi', '2000.00', 'price_1JXq7XFXn081ePt8QgP49o76', 'ICONE ACCOMPAGNEMENT - PROFIL.svg'),
(3, 'RNCP - accompagnement à l’obtention d’un titre RNCP dispensable dans son organisme', '1500.00', 'price_1JXq8MFXn081ePt8oeg5Taql', 'ICONE ACCOMPAGNEMENT - PROFIL.svg'),
(4, 'Gestion - Ingénierie financière : mise en place de grilles de coût, calcul de rentabilité, identification des charges fixes et variable, fixation du prix', '1000.00', 'price_1JXq96FXn081ePt8I9iEyOPP', 'ICONE ACCOMPAGNEMENT - PROFIL.svg'),
(5, 'Gestion - Bilan pédagogique annuel - accompagnement à la rédaction du BPA obligatoire', '900.00', 'price_1JXq9hFXn081ePt81CCe8hkY', 'ICONE ACCOMPAGNEMENT - PROFIL.svg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `prestations`
--
ALTER TABLE `prestations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `prestations`
--
ALTER TABLE `prestations`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
