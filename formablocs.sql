-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 15 sep. 2021 à 14:34
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
  `purchased_date` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `stripe_id`, `formations`, `passw`, `purchased_date`, `username`) VALUES
(10, 'Carlo Cilento', 'ccarlo@hotmail.it', 'cus_KE3KnzbIZtQ7yA', NULL, '$2y$10$dbas9qpewcr4GYkEjUVrUe8rI9.kZmNkR1dE.6R7DICe3VVPbwVYK', NULL, 'ccilento');

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
  `picto` varchar(1000) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`id`, `formation`, `price`, `description`, `price_id`, `picto`, `link`) VALUES
(1, 'Formateur Professionnel d\'Adultes', '2500.00', 'Par sa double expertise, pédagogique et technique, le formateur contribue au développement des compétences favorisant l’insertion sociale et professionnelle, l’accès à la qualification, la professionnalisation et l’accès ou le maintien dans l’emploi.\nAfin de permettre l’adaptation aux évolutions techniques et professionnelles, le formateur analyse des demandes de formation d’origine et de nature variées. Il identifie les compétences à acquérir ou à développer et détermine les situations d’apprentissage et les modalités pédagogiques. Il organise la progression des apprentissages et définit les étapes clés des séquences. Il choisit, adapte ou crée les activités d’apprentissage et les ressources pédagogiques. Il anime les temps de formation en présence ou à distance et évalue les acquis des apprenants. <br>\nPour en savoir plus <a href=\"https://www.francecompetences.fr/recherche/rncp/247/\">cliquez ici</a>', 'price_1JXplgFXn081ePt8kRuMbLc7', 'ICONE FORMATION 2 - PROFIL.svg', 'forma1'),
(2, 'Conseiller en Insertion Professionnelle', '2500.00', 'Le conseiller en insertion professionnelle (CIP) favorise par des réponses individualisées l’insertion sociale et professionnelle des jeunes ou des adultes rencontrant des difficultés d’insertion ou de reconversion (en prenant en compte les dimensions multiples de l’insertion : emploi, formation, logement, santé, mobilité, accès aux droits…). Son action vise à les aider à construire et à s’approprier un parcours d’accès à l’emploi et à surmonter progressivement les freins rencontrés.\nLe CIP accueille les personnes individuellement ou en groupe et facilite leur accès à des informations concernant l’emploi, la formation et les services dématérialisés. Il appréhende la personne dans sa globalité et analyse ses besoins. Il identifie ses atouts, ses freins, ses motivations et ses compétences pour élaborer avec elle progressivement un diagnostic partagé de sa situation. <br>\nPour en savoir plus <a href=\"https://www.francecompetences.fr/recherche/rncp/403/\">cliquez ici</a>', 'price_1JXpnjFXn081ePt8bIZh09AL', 'ICONE FORMATION 1 - PROFIL.svg', 'forma2');

-- --------------------------------------------------------

--
-- Structure de la table `modules_formation_adultes`
--

CREATE TABLE `modules_formation_adultes` (
  `id` int(6) NOT NULL,
  `module` varchar(300) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `price_id` varchar(255) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `modules_formation_adultes`
--

INSERT INTO `modules_formation_adultes` (`id`, `module`, `price`, `price_id`, `description`, `link`) VALUES
(1, 'Préparer et animer des actions de formation collectives en intégrant des environnements numériques (bac+2)', '1000.00', 'price_1JXpvfFXn081ePt8tJKhH5XO', 'Elaborer la progression pédagogique d’une action de formation à partir d’une demande.\nConcevoir le scénario pédagogique d’une séquence de formation intégrant différentes modalités pédagogiques.\nConcevoir les activités d’apprentissage et les ressources pédagogiques d’une séquence en prenant en compte l’environnement numérique.\nAnimer un temps de formation collectif en présence ou à distance.\nEvaluer les acquis de formation des apprenants.\nInscrire ses actes professionnels dans le cadre réglementaire et dans une démarche de responsabilité sociale, environnementale et professionnelle.\nMaintenir son niveau d’expertise et de performance en tant que formateur et professionnel dans sa spécialité.', 'forma3'),
(2, 'Construire des parcours individualisés et  accompagner les apprenants (bac+2)', '1000.00', 'price_1JXpxeFXn081ePt8bkncllI1', 'Concevoir l’ingénierie et les outils d’individualisation des parcours en utilisant les technologies numériques.\nAccueillir les apprenants en formation et coconstruire leurs parcours.\nFormer et accompagner les apprenants dans des parcours individualisés.\nRemédier aux difficultés individuelles d’apprentissage.\nAccompagner les apprenants dans la consolidation de leur projet professionnel.\nAnalyser ses pratiques professionnelles.', 'forma4');

-- --------------------------------------------------------

--
-- Structure de la table `modules_formation_conseiller`
--

CREATE TABLE `modules_formation_conseiller` (
  `id` int(6) NOT NULL,
  `module` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `price_id` varchar(255) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `modules_formation_conseiller`
--

INSERT INTO `modules_formation_conseiller` (`id`, `module`, `price`, `price_id`, `description`, `link`) VALUES
(1, 'Accueillir pour analyser la demande des personnes et poser les bases d\'un diagnostic partagé (bac+2)\n', '1000.00', 'price_1JXq00FXn081ePt8nGT1NcVY', 'Informer une personne ou un groupe sur les ressources en matière d’insertion et les services dématérialisés ;\r\nAnalyser la demande de la personne et poser les bases d’un diagnostic partagé ;\r\nExercer une veille informationnelle, technique et prospective pour adapter son activité au public et au contexte ;\r\nTravailler en équipe, en réseau et dans un cadre partenarial pour optimiser la réponse aux besoins des personnes accueillies ;\r\nRéaliser le traitement administratif et les écrits professionnels liés à l’activité dans un environnement numérique.', 'forma5'),
(2, 'Accompagner les personnes dans leur parcours d\'insertion sociale et professionnelle (bac+2)', '1000.00', 'price_1JXq1vFXn081ePt83mIsenWO', 'Contractualiser et suivre avec la personne son parcours d’insertion professionnelle ;\r\nAccompagner une personne à l’élaboration de son projet professionnel ;\r\nAccompagner la réalisation des projets professionnels ;\r\nConcevoir des ateliers thématiques favorisant l’insertion professionnelle des publics ;\r\nPréparer et animer des ateliers thématiques favorisant l’insertion ;\r\nAnalyser sa pratique professionnelle.', 'forma6'),
(3, 'Mettre en œuvre une offre de services auprès des employeurs pour  favoriser l\'insertion professionnelle) (bac+2)', '1000.00', 'price_1JXq2uFXn081ePt8cGdo9Yfr', 'Déployer, dans une démarche projet, des actions de prospection avec les employeurs du territoire pour favoriser l’insertion professionnelle ;\r\nApporter un appui technique aux employeurs en matière de recrutement ;\r\nFaciliter l’intégration et le maintien du salarié dans son environnement professionnel ;\r\nInscrire ses actes professionnels dans une démarche de développement durable.\r\nCompétences transversales de l’emploi (le cas échéant) :\r\nIntégrer la prévention des risques professionnels dans son travail.', 'forma7');

-- --------------------------------------------------------

--
-- Structure de la table `prestations`
--

CREATE TABLE `prestations` (
  `id` int(6) NOT NULL,
  `prestation` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `price_id` varchar(255) DEFAULT NULL,
  `picto` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `prestations`
--

INSERT INTO `prestations` (`id`, `prestation`, `price`, `price_id`, `picto`, `description`) VALUES
(1, 'Digitalisation', '2000.00', 'price_1JXq6KFXn081ePt8FBVcufIG', 'ICONE ACCOMPAGNEMENT - PROFIL.svg', NULL),
(2, 'Qualité', '2000.00', 'price_1JXq7XFXn081ePt8QgP49o76', 'ICONE ACCOMPAGNEMENT - PROFIL.svg', NULL),
(3, 'RNCP', '1500.00', 'price_1JXq8MFXn081ePt8oeg5Taql', 'ICONE ACCOMPAGNEMENT - PROFIL.svg', NULL),
(4, 'Ingénierie financière', '1000.00', 'price_1JXq96FXn081ePt8I9iEyOPP', 'ICONE ACCOMPAGNEMENT - PROFIL.svg', NULL),
(5, 'Bilan pédagogique', '900.00', 'price_1JXq9hFXn081ePt81CCe8hkY', 'ICONE ACCOMPAGNEMENT - PROFIL.svg', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `toutes_formations`
--

CREATE TABLE `toutes_formations` (
  `id` int(6) NOT NULL,
  `formation` varchar(300) NOT NULL,
  `price_id` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `picto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `toutes_formations`
--

INSERT INTO `toutes_formations` (`id`, `formation`, `price_id`, `link`, `picto`) VALUES
(1, 'Formateur Professionnel d\'Adultes', 'price_1JXplgFXn081ePt8kRuMbLc7', 'forma1', 'ICONE FORMATION 2 - PROFIL.svg'),
(2, 'Conseiller en Insertion Professionnelle', 'price_1JXpnjFXn081ePt8bIZh09AL', 'forma2', 'ICONE FORMATION 1 - PROFIL.svg'),
(3, 'Préparer et animer des actions de formation collectives en intégrant des environnements numériques (bac+2)', 'price_1JXpvfFXn081ePt8tJKhH5XO', 'forma3', 'ICONE FORMATION 2 - PROFIL.svg'),
(4, 'Construire des parcours individualisés et  accompagner les apprenants (bac+2)', 'price_1JXpxeFXn081ePt8bkncllI1', 'forma4', 'ICONE FORMATION 2 - PROFIL.svg'),
(5, 'Accueillir pour analyser la demande des personnes et poser les bases d\'un diagnostic partagé (bac+2)\r\n', 'price_1JXq00FXn081ePt8nGT1NcVY', 'forma5', 'ICONE FORMATION 1 - PROFIL.svg'),
(6, 'Accompagner les personnes dans leur parcours d\'insertion sociale et professionnelle (bac+2)', 'price_1JXq1vFXn081ePt83mIsenWO', 'forma6', 'ICONE FORMATION 1 - PROFIL.svg'),
(7, 'Mettre en œuvre une offre de services auprès des employeurs pour  favoriser l\'insertion professionnelle) (bac+2)', 'price_1JXq2uFXn081ePt8cGdo9Yfr', 'forma7', 'ICONE FORMATION 1 - PROFIL.svg'),
(8, 'Digitalisation', 'price_1JXq6KFXn081ePt8FBVcufIG', 'Digitalisation', 'ICONE ACCOMPAGNEMENT - PROFIL.svg'),
(9, 'Qualité', 'price_1JXq7XFXn081ePt8QgP49o76', 'quality', 'ICONE ACCOMPAGNEMENT - PROFIL.svg'),
(10, 'RNCP', 'price_1JXq8MFXn081ePt8oeg5Taql', 'RNCP', 'ICONE ACCOMPAGNEMENT - PROFIL.svg'),
(11, 'Ingénierie financière', 'price_1JXq96FXn081ePt8I9iEyOPP', 'inge', 'ICONE ACCOMPAGNEMENT - PROFIL.svg'),
(12, 'Bilan pédagogique', 'price_1JXq9hFXn081ePt81CCe8hkY', 'bilan', 'ICONE ACCOMPAGNEMENT - PROFIL.svg');

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
-- Index pour la table `modules_formation_adultes`
--
ALTER TABLE `modules_formation_adultes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `modules_formation_conseiller`
--
ALTER TABLE `modules_formation_conseiller`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `prestations`
--
ALTER TABLE `prestations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `toutes_formations`
--
ALTER TABLE `toutes_formations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `modules_formation_adultes`
--
ALTER TABLE `modules_formation_adultes`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `modules_formation_conseiller`
--
ALTER TABLE `modules_formation_conseiller`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `prestations`
--
ALTER TABLE `prestations`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `toutes_formations`
--
ALTER TABLE `toutes_formations`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
