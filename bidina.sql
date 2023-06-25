-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 02 mai 2023 à 14:26
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bidina`
--

-- --------------------------------------------------------

--
-- Structure de la table `command`
--

CREATE TABLE `command` (
  `id_command` int(11) NOT NULL,
  `img` varchar(222) NOT NULL,
  `titre` varchar(222) NOT NULL,
  `prix` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `command`
--

INSERT INTO `command` (`id_command`, `img`, `titre`, `prix`, `quantity`, `id_user`, `id_product`) VALUES
(86, 'Copie IMG-20220428-WA0052.jpg', 'Table', 1200, 3, 19, 54),
(87, '75.jpg', 'Table Radi', 200, 3, 19, 45),
(89, 'Copie IMG-20220428-WA0052.jpg', 'Table', 1200, 1, 19, 54),
(90, 'Copie IMG-20220428-WA0008.jpg', 'TAble Armo', 700, 2, 19, 46),
(91, 'Copie IMG-20220428-WA0024.jpg', 'Table AZ', 1200, 1, 19, 51),
(93, 'Copie IMG-20220428-WA0008.jpg', 'TAble Armo', 700, 1, 20, 46),
(94, 'Copie IMG-20220428-WA0008.jpg', 'TAble Armo', 700, 1, 19, 46),
(95, 'man.png', 'lll', 12, 1, 19, 81),
(96, 'Copie IMG-20220428-WA0008.jpg', 'TAble Armo', 700, 2, 19, 46),
(97, '71H+DQCEbbL._AC_SX425_.jpg', 'Pouf', 500, 1, 19, 47),
(99, '71uB8qznI9L._AC_SY550_.jpg', 'Poufs', 541, 1, 19, 48);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `subject`, `email`, `message`) VALUES
(1, 'nouhaila', 'abaoubida', 'abaoubida@gmail.com', 'text'),
(2, 'chaima', 'laroubi', 'laroubi@gmail.com', 'test'),
(3, 'imane', 'fahmi', 'fahmi@gmail.com', 'refuse'),
(4, 'salma', 'barada', 'barada@gmail.com', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id_panier` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `sold` int(11) NOT NULL,
  `allPrix` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `sold` varchar(255) NOT NULL,
  `allPrix` varchar(255) NOT NULL,
  `remise` int(255) NOT NULL,
  `new` varchar(255) NOT NULL,
  `categoris` varchar(255) NOT NULL,
  `date_Prod` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id_product`, `img`, `titre`, `sold`, `allPrix`, `remise`, `new`, `categoris`, `date_Prod`) VALUES
(45, '75.jpg', 'Table Radi', '200', '6040', 10, 'new', 'Table', '0000-00-00 00:00:00'),
(46, 'Copie IMG-20220428-WA0008.jpg', 'TAble Armo', '700', '900', 0, 'new', 'Table', '0000-00-00 00:00:00'),
(47, '71H+DQCEbbL._AC_SX425_.jpg', 'Pouf', '500', '650', 5, 'new', 'Poufs', '0000-00-00 00:00:00'),
(48, '71uB8qznI9L._AC_SY550_.jpg', 'Poufs', '540.99', '600', 0, 'old', 'Poufs', '0000-00-00 00:00:00'),
(49, 'Copie IMG-20220428-WA0015.jpg', 'Soucle XXX', '1200', '1300', 10, 'new', 'Table', '0000-00-00 00:00:00'),
(50, 'Copie IMG-20220428-WA0083.jpg', 'Soucle ZZZ', '1900', '2000', 0, 'old', 'soucle', '0000-00-00 00:00:00'),
(51, 'Copie IMG-20220428-WA0024.jpg', 'Table AZ', '1200', '1300', 10, 'old', 'Table', '0000-00-00 00:00:00'),
(52, 'Copie IMG-20220428-WA0034.jpg', 'Tabla', '1200', '1300', 0, 'new', 'Table', '0000-00-00 00:00:00'),
(53, 'Copie IMG-20220428-WA0067.jpg', 'table', '1209', '1300', 0, 'new', 'Table', '0000-00-00 00:00:00'),
(54, 'Copie IMG-20220428-WA0052.jpg', 'Table', '1200', '2000', 5, 'new', 'Table', '0000-00-00 00:00:00'),
(57, '56e85adca2ed9cd961e02abcf81fd0ad.jpg', 'Chair', '1200', '1300', 0, 'new', 'Chair', '0000-00-00 00:00:00'),
(63, 'Copie IMG-20220428-WA0063.jpg', 'biblio ZE', '1200', '1300', 0, 'old', 'Bibliothéque', '0000-00-00 00:00:00'),
(65, 'Copie IMG-20220428-WA0020.jpg', 'Biblio', '1200', '1400', 0, 'new', 'Bibliothéque', '0000-00-00 00:00:00'),
(66, 'Copie IMG-20220428-WA0057.jpg', 'biblio', '123', '1234', 0, 'old', 'Bibliothéque', '0000-00-00 00:00:00'),
(67, 'Copie IMG-20220428-WA0096.jpg', 'GGG', '3445', '6778', 0, 'new', 'Bibliothéque', '0000-00-00 00:00:00'),
(69, 'Copie IMG-20220428-WA0067.jpg', 'Table artistique', '2990', '3900', 12, 'new', 'Table', '0000-00-00 00:00:00'),
(71, '61+Jjl2tJsL._AC_SX522_.jpg', 'Poufa', '1200', '1300', 0, 'new', 'Poufs', '0000-00-00 00:00:00'),
(72, 'Copie IMG-20220428-WA0084.jpg', 'Soucle', '1230', '1300', 5, 'new', 'soucle', '0000-00-00 00:00:00'),
(73, '1 (1).jpg', 'poufs AZIZ', '1200', '1300', 5, 'new', 'Poufs', '0000-00-00 00:00:00'),
(74, '81NvSP-0MGL._AC_SX522_.jpg', 'bbb', '1287', '1345', 0, 'new', 'Poufs', '0000-00-00 00:00:00'),
(76, 'Copie IMG-20220428-WA0011.jpg', 'chaise', '1200', '1230', 0, 'new', 'Chair', '0000-00-00 00:00:00'),
(77, 'Copie IMG-20220428-WA0002.jpg', 'Table', '1100', '1300', 6, 'new', 'Table', '0000-00-00 00:00:00'),
(78, '3.jpg', 'Poufat', '12', '123', 3, 'new', 'Table', '2022-06-26 11:36:42'),
(79, '1.jpg', 'ff', '1234', '12345', 123, 'new', 'Poufs', '2022-06-26 11:39:28'),
(80, 'man.png', 'lll', '12', '123', 0, 'new', 'Table', '2022-06-27 12:02:47'),
(81, 'man.png', 'lll', '12', '123', 0, 'new', 'Table', '2022-06-27 12:05:43'),
(82, 'man.png', 'lll', '12', '123', 0, 'new', 'Table', '2022-06-27 12:05:48');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(222) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `adress` varchar(225) NOT NULL,
  `role` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `fullName`, `email`, `phone`, `adress`, `role`, `password`, `confirm_password`) VALUES
(13, 'Admin', 'admin@gmail.com', '0999999999', '', 'admin', 'admin', 'admin'),
(19, 'Boubker', 'bob@gmail.com', '09999999', 'Youssoufia', '', 'bob', 'bob'),
(20, 'boubker ennaqar', 'boubker@gmail.com', '09999999999', 'Youssoufia', '', 'bob', 'bob');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `command`
--
ALTER TABLE `command`
  ADD PRIMARY KEY (`id_command`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id_panier`),
  ADD KEY `fk_product` (`id_product`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `command`
--
ALTER TABLE `command`
  MODIFY `id_command` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id_panier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
