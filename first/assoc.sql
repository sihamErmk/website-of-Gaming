-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 26 mars 2024 à 00:40
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `assoc`
--

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(255) DEFAULT NULL,
  `event_desc` varchar(255) DEFAULT NULL,
  `loc` varchar(255) DEFAULT NULL,
  `organizer` varchar(255) DEFAULT NULL,
  `speakers` varchar(255) DEFAULT NULL,
  `sponsors` varchar(255) DEFAULT NULL,
  `face_url` varchar(255) DEFAULT NULL,
  `twit_url` varchar(255) DEFAULT NULL,
  `link_url` varchar(255) DEFAULT NULL,
  `insta_url` varchar(255) DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `starttime` time DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `endstime` time DEFAULT NULL,
  `deadline` datetime DEFAULT NULL,
  `event_type` varchar(50) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `formulaLink` varchar(50) DEFAULT NULL,
  `para` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_desc`, `loc`, `organizer`, `speakers`, `sponsors`, `face_url`, `twit_url`, `link_url`, `insta_url`, `startdate`, `starttime`, `enddate`, `endstime`, `deadline`, `event_type`, `img`, `formulaLink`, `para`) VALUES
(1, 'THE EVENT', 'this is a event of events', 'fstt', 'fstt', 'fstt', 'fstt', 'fstt', 'fstt', 'fstt', 'fstt', '2024-04-02', '18:29:00', '2024-04-04', '20:29:00', '2024-03-20 15:29:00', 'tournoi', 'event2.jpg', NULL, NULL),
(2, 'OUMAIMA GAME    ', 'this is a game description', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'tournoi', 'wall3.jpg', '', 'The highly anticipated gaming event, \'PixelCon 2024,\' promises an electrifying experience for gamers of all ages and backgrounds. Set against the backdrop of cutting-edge technology and immersive virtual worlds, PixelCon brings together gaming enthusiasts'),
(9, 'GAMES EVENTS ', 'our association present for u this ', 'fstt', 'fstt', 'fstt', 'fstt', 'fstt', 'fstt', 'fstt', 'fstt', '2024-03-13', '21:47:00', '2024-03-27', '20:47:00', '2024-03-29 18:51:00', 'tournoi', 'event2.jpg', '', NULL),
(80, 'GAMES EVENT ', 'THIS IS AN EVENT ABOUT GAMES \r\n', 'FSTT', 'FSTT', 'FSTT', '', '', '', '', '', '2024-03-13', '19:28:00', '2024-03-26', '20:28:00', '2024-03-14 16:29:00', 'tournoi', 'event2.jpg', 'https://forms.gle/PAghABbJvGSoTTu8A', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

CREATE TABLE `games` (
  `game_id` int(11) NOT NULL,
  `game_name` varchar(255) NOT NULL,
  `game_title` varchar(255) NOT NULL,
  `game_website` varchar(255) NOT NULL,
  `game_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `games`
--

INSERT INTO `games` (`game_id`, `game_name`, `game_title`, `game_website`, `game_img`) VALUES
(1, 'Wall Game', 'this is a game', 'web', 'wall1.jpg'),
(2, 'Racing game', 'this is a game about racing ', 'web2', 'wall2.jpg'),
(3, 'Nokio game ', 'this is gonna a game', 'web3', 'wall3.jpg'),
(4, 'Fourth Game', 'this is a game description', 'web4', 'wall4.jpg'),
(5, 'Game 4', 'this is a description', 'web5', 'wall5.jpg'),
(6, 'Game X Hunter ', 'a beautifull game about ..', 'game ', 'wall6.jpg'),
(70, 'SUBWAY SURF', 'this is subway', 'https://www.youtube.com/watch?v=1wBvuZVE7FI', '4.png');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_type`, `user_password`) VALUES
(22, 'oumaima', 'ouma@gmail.com', 'user', '8e7aef75dad24742365609c64928574c'),
(23, 'siham', 'sh@gmail.com', 'admin', 'bae58e08cdb1d0e40ea76b27cdd21fc9');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Index pour la table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`game_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8990;

--
-- AUTO_INCREMENT pour la table `games`
--
ALTER TABLE `games`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53565;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
