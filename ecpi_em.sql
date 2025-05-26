-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 26 mai 2025 à 11:00
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecpi_em`
--

-- --------------------------------------------------------

--
-- Structure de la table `auth_token`
--

CREATE TABLE `auth_token` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(1000) NOT NULL,
  `created_at` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `auth_token`
--

INSERT INTO `auth_token` (`id`, `user_id`, `token`, `created_at`) VALUES
(1, 1, 'd890424f3f9879c55f86f18132dbf9fce88338f562fb215ca68098b0546fbf87', 2147483647),
(2, 1, '631112a343f099801e076762edf69d5b841e70f163e9bcbf90fbbca065543adb', 2147483647),
(3, 1, '679b4e41a38b47eadbe4a3bc728d9ec916e0ac60955cb117326827f9769202ff', 2147483647),
(4, 1, 'c3310c2a73f19ee7aad5c76de0d45c3edd2b7b16b24c5c355386c4778dcb2597', 2147483647);

-- --------------------------------------------------------

--
-- Structure de la table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `amount` double NOT NULL,
  `expense_date` date DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `expense`
--

INSERT INTO `expense` (`id`, `label`, `description`, `amount`, `expense_date`, `created_at`) VALUES
(1, 'Fataya', '', 1500, '2025-05-26', '2025-05-26 10:41:52');

-- --------------------------------------------------------

--
-- Structure de la table `income`
--

CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `amount` double NOT NULL,
  `income_date` date DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `income`
--

INSERT INTO `income` (`id`, `label`, `description`, `amount`, `income_date`, `created_at`) VALUES
(1, 'Salaire mois d\'Avril', '', 90000, '2025-05-24', '2025-05-26 10:09:56');

-- --------------------------------------------------------

--
-- Structure de la table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(1000) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `password_reset`
--

INSERT INTO `password_reset` (`id`, `user_id`, `token`, `created_at`) VALUES
(NULL, 2, '304ff465c96b6f6c7a5edb9024347305d81f74f1cb5992915bbb1310c1ba8dbd', '2025-05-20 15:17:44'),
(NULL, 2, 'f955b800f4ac93b8b116fd3520fb27f21ee581421775b9e6e140a696429e911d', '2025-05-20 15:18:17'),
(NULL, 2, '8f4c1d7b4bee4a361e4409a582d0627ef495737523b597062c73e0b090479c44', '2025-05-20 15:20:35'),
(NULL, 2, '8ce66815361eb1c277330a9be1f61e4fa53a5fa9e84f45bec95961bd4cc01092', '2025-05-26 09:10:14');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `picture`, `password`) VALUES
(1, 'admin', 'gildasngouabira@gmail.com', NULL, '$2y$10$yawyjxMO0juhk/ej2WZywOeu8N2mlpwR6Clzq2iTBK7NkMRbhFR/m');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `auth_token`
--
ALTER TABLE `auth_token`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `auth_token`
--
ALTER TABLE `auth_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
