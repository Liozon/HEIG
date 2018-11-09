-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 27 Février 2017 à 19:22
-- Version du serveur :  5.7.17-0ubuntu0.16.04.1-log
-- Version de PHP :  5.6.30-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sami.othmane`
--

-- --------------------------------------------------------

--
-- Structure de la table `reviews`
--

CREATE TABLE `reviews` (
  `nom` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `note` int(2) NOT NULL,
  `avis` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reviews`
--

INSERT INTO `reviews` (`nom`, `date`, `note`, `avis`) VALUES
('Fifa 17', '2017-02-17', 7, 'La ligue des champions a repris, le canapé est chaud et vous piaffez d\'impatience à l\'idée d\'humilier votre pote sur une bonne partie de football virtuel : Toutes les conditions sont réunies pour accueillir FIFA 17, dernier-né de la longue série de simulations de football signée par Electronic Arts. Affublé d\'un moteur digne de ce nom et d\'un mode aventure retraçant l\'histoire fictive d\'un jeune footballeur, cet épisode prometteur - au regard de nos premières séquences manette en main - a-t-il su confirmer ses bonnes dispositions sur le long terme ?'),
('For Honor', '2017-02-27', 7, ' For Honor est un TPS à l\'ère médiévale, où les joueurs peuvent incarner un chevalier, un viking ou un samouraï et affronter leurs adversaires dans un mode solo ou un multijoueur compétitif. Chaque faction possède ses propres particularités et avantages.'),
('GTA V', '2017-02-25', 9, 'Très bon jeu, un mode histoire intéressant avec un nombre impressionnant de missions ! Le fait de pouvoir choisir entre 3 personnages est vraiment une bonne chose ! \r\n\r\nLe mode multijoueur est bien pensé et très complet. Cependant, il y a énormément de temps de chargement et le système de connexion a des limites..\r\n\r\nRockstar nous a habitué a des jeux de qualité et, une fois de plus, elle tient sa promesse avec cette nouvelle version e sa série Grand Theft Auto !'),
('Hearthstone : Heroes of Warcraft', '2017-02-16', 10, 'Très bon jeu de cartes + version mobile cool. \r\n\r\nJeu de cartes à collectionner en ligne, HearthStone : Heroes of Warcraft est un free-to-play qui se fonde sur l\'univers de Warcraft et World of Warcraft. Le joueur peut incarner de nombreuses classes (Voleur, druide, etc) qui ont chacunes un style de jeu particulier. Armes, sorts, serviteurs seront à votre disposition pour élaborer des stratégies plus folles les unes que les autres. Votre objectif : Creer vos decks en fonction des spécificités de votre classe et des cartes à votre disposition afin de réduire les points de vie de l\'adversaire à 0 !'),
('Super Mario Bros.', '2017-01-25', 10, 'Super Mario est une série de jeux vidéo de plates-formes créée par Nintendo et mettant en scène sa mascotte Mario ainsi que, dans beaucoup de jeux, son frère Luigi. Il s\'agit de la première série de la franchise Mario. Au moins un jeu Super Mario est sorti sur chaque console majeure de Nintendo depuis le premier épisode, Super Mario Bros., sorti en 1985 sur Nintendo Entertainment System.');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `npa` int(4) NOT NULL,
  `date_naissance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`user`, `password`, `email`, `pays`, `npa`, `date_naissance`) VALUES
('Sami Othmane', 'ef', 'edv@vdf.com', 'dwv', 557, '2017-02-02'),
('samivnt', 'mot', 'sami.othmane@heig-vd.ch', 'Suisse', 1400, '2017-02-01'),
('samix', 'psw', 'sami.othmane@heig-vd.ch', 'Suisse', 1400, '1993-03-28');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`nom`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
