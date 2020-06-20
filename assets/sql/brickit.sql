-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 20 juin 2020 à 21:34
-- Version du serveur :  8.0.18
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `brickit`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `video` text COLLATE utf8mb4_general_ci NOT NULL,
  `is_activate` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `video`, `is_activate`) VALUES
(1, 'Harry Potter', 'Revis tes moments Harry Potter™ préférés avec ces ensembles magiques !', '1.jpg', '', 1),
(2, 'Disney', 'Tout l\'univers de Disney dans ce merveilleux thème !', '2.jpg', '', 1),
(3, 'Star Wars', 'Choisis ton camp, part à la conquête de la Galaxie et que la force soit avec toi !', '3.jpg', '', 1),
(4, 'Warcraft', 'La Horde ou l\'Alliance ? Tu pourras prochainement choisir ton camp !', '4.jpg', '', 1),
(5, 'Le Seigneur Des Anneaux', '', '5.jpg', '5.mp4', 0),
(6, 'Les Minions', '', '6.jpg', '6.mp4', 0),
(7, 'Marvel', '', '7.jpg', '7.mp4', 0),
(8, 'Warcraft', '', '8.jpg', '8.mp4', 0);

-- --------------------------------------------------------

--
-- Structure de la table `category_product`
--

DROP TABLE IF EXISTS `category_product`;
CREATE TABLE IF NOT EXISTS `category_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_product_category_id` (`category_id`),
  KEY `category_product_product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=175 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `category_product`
--

INSERT INTO `category_product` (`id`, `product_id`, `category_id`) VALUES
(78, 26, 3),
(79, 27, 3),
(80, 29, 3),
(81, 30, 3),
(82, 31, 3),
(83, 32, 3),
(84, 33, 3),
(85, 34, 3),
(86, 36, 3),
(88, 28, 3),
(89, 37, 3),
(91, 38, 3),
(92, 39, 1),
(93, 40, 1),
(94, 41, 1),
(95, 42, 1),
(96, 43, 1),
(97, 44, 1),
(98, 45, 1),
(99, 46, 1),
(100, 47, 1),
(101, 48, 1),
(102, 49, 1),
(103, 50, 2),
(104, 51, 2),
(105, 52, 2),
(106, 53, 2),
(107, 54, 2),
(108, 55, 2),
(109, 56, 2),
(110, 57, 2),
(111, 58, 2),
(112, 59, 2),
(113, 60, 2),
(114, 61, 2),
(115, 62, 2),
(116, 63, 2),
(117, 64, 2),
(118, 65, 2),
(119, 66, 2),
(127, 25, 3),
(128, 24, 1),
(129, 24, 2),
(130, 24, 3);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text COLLATE utf8mb4_general_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pseudo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `notation` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `date`, `pseudo`, `notation`, `product_id`, `username`) VALUES
(1, 'mon commentaire', '2020-06-14 22:17:44', 'un pseudo test', 0, 39, '0'),
(6, 'mon comment', '2020-06-14 22:29:18', 'Voila mon pseudo', 0, 39, 'test'),
(16, 'new comment', '2020-06-17 00:27:45', 'baba laziz', 5, 39, 'aaaa');

-- --------------------------------------------------------

--
-- Structure de la table `game`
--

DROP TABLE IF EXISTS `game`;
CREATE TABLE IF NOT EXISTS `game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '1',
  `name` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `game`
--

INSERT INTO `game` (`id`, `user_id`, `name`, `score`) VALUES
(1, 1, 'Maxou', 55),
(2, 1, 'Vince', 55),
(3, 1, 'Isa', 55),
(4, 1, 'Domi', 55),
(5, 1, 'Jacqs', 55);

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text COLLATE utf8mb4_general_ci NOT NULL,
  `caption` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `adress` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `first_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image_secondary_1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `image_secondary_2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `image_secondary_3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `price` float NOT NULL,
  `quantity` text COLLATE utf8mb4_general_ci NOT NULL,
  `age` int(11) NOT NULL,
  `is_novelty` tinyint(4) NOT NULL DEFAULT '0',
  `is_best` tinyint(4) NOT NULL DEFAULT '0',
  `is_activate` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `image_secondary_1`, `image_secondary_2`, `image_secondary_3`, `price`, `quantity`, `age`, `is_novelty`, `is_best`, `is_activate`) VALUES
(24, 'Chasseur stellaire X-Wing™ de la tranchée ', 'Les enfants vont pouvoir revivre d’inoubliables aventures spatiales LEGO® Star Wars™ avec le Chasseur stellaire X-Wing™ de la tranchée.', '24.PNG', '', '0', '', 29.99, '5', 5, 0, 0, 1),
(25, 'L\'attaque du chasseur TIE ', 'Les enfants vont pouvoir revivre d’inoubliables aventures spatiales LEGO® Star Wars™ avec L\'attaque du chasseur TIE.', '25.PNG', '', '0', '', 19.99, '4', 5, 0, 0, 1),
(26, 'Snowspeeder™ ', 'Les enfants vont pouvoir revivre d’inoubliables aventures spatiales LEGO® Star Wars™ avec le Snowspeeder™.', '26.PNG', '', '0', '', 19.99, '12', 5, 0, 0, 1),
(27, ' Duel sur Mustafar™ ', 'Les enfants vont pouvoir revivre d’inoubliables aventures spatiales LEGO® Star Wars™ avec le  Duel sur Mustafar™.', '27.PNG', '', '0', '', 24.99, '3', 8, 0, 0, 1),
(28, 'Duel sur la base Starkiller', 'Les enfants vont pouvoir revivre d’inoubliables aventures spatiales LEGO® Star Wars™ avec le Duel sur la base Starkiller.', '28.PNG', '', '0', '', 19.99, '3', 8, 0, 1, 1),
(29, 'La course-poursuite en speeder sur Pasaana ', 'Les enfants vont pouvoir revivre d’inoubliables aventures spatiales LEGO® Star Wars™ avec La course-poursuite en speeder sur Pasaana.', '29.PNG', '', '0', '', 49.99, '7', 8, 0, 0, 1),
(30, 'AT-ST™ Raider ', 'Les enfants vont pouvoir revivre d’inoubliables aventures spatiales LEGO® Star Wars™ avec le AT-ST™ Raider .', '30.PNG', '', '0', '', 59.99, '8', 8, 0, 0, 1),
(31, 'Le Podracer™ d\'Anakin – Édition 20ème anniversaire ', 'Les enfants vont pouvoir revivre d’inoubliables aventures spatiales LEGO® Star Wars™ avec Le Podracer™ d\'Anakin – Édition 20ème anniversaire.', '31.PNG', '', '0', '', 29.99, '35', 8, 0, 0, 1),
(32, 'La navette de Kylo Ren ', 'Les enfants vont pouvoir revivre d’inoubliables aventures spatiales LEGO® Star Wars™ avec La navette de Kylo Ren .', '32.PNG', '', '0', '', 129.99, '45', 11, 1, 0, 1),
(33, 'Le chasseur X-wing de Poe Dameron ', 'Les enfants vont pouvoir revivre d’inoubliables aventures spatiales LEGO® Star Wars™ avec Le chasseur X-wing de Poe Dameron .', '33.PNG', '', '0', '', 109.99, '7', 11, 0, 0, 1),
(34, 'Le château de Dark Vador ', 'Les enfants vont pouvoir revivre d’inoubliables aventures spatiales LEGO® Star Wars™ avec Le château de Dark Vador.', '34.PNG', '', '0', '', 129.99, '6', 11, 0, 0, 1),
(35, 'AT-AP™ ', 'Les enfants vont pouvoir revivre d’inoubliables aventures spatiales LEGO® Star Wars™ avec Le AT-AP™.', '35.PNG', '', '0', '', 74.99, '8', 11, 0, 0, 1),
(36, 'Imperial Star Destroyer™ ', 'Les enfants vont pouvoir revivre d’inoubliables aventures spatiales LEGO® Star Wars™ avec l\'Imperial Star Destroyer™ .', '36.PNG', '', '0', '', 699.99, '3', 12, 0, 0, 1),
(37, 'Millennium Falcon™ ', 'Les enfants vont pouvoir revivre d’inoubliables aventures spatiales LEGO® Star Wars™ avec le Chasseur stellaire X-Wing™ de la tranchée.', '37.PNG', '', '0', '', 799.99, '4', 12, 0, 1, 1),
(38, 'L\'Étoile de la Mort™ ', 'Les enfants vont pouvoir revivre d’inoubliables aventures spatiales LEGO® Star Wars™ avec L\'Étoile de la Mort™.', '38.PNG', '', '0', '', 499.99, '2', 12, 0, 0, 1),
(39, 'Le carrosse de Beauxbâtons : l\'arrivée à Poudlard™ ', 'L\'imagination s\'envole avec Le carrosse de Beauxbâtons : l\'arrivée à Poudlard™ LEGO® Harry Potter™ 75958. ', '39.PNG', '', '0', '', 49.99, '1', 8, 0, 0, 1),
(40, 'Expecto Patronum ', 'Les fans d\'Harry Potter™ de 7 ans et plus se transportent dans un monde magique peuplé de sorciers, de Détraqueurs™ et de créatures mythiques avec l\'ensemble de construction Expecto Patronum LEGO® Harry Potter 75945.', '40.PNG', '', '0', '', 19.99, '8', 8, 0, 1, 1),
(41, 'La Résurrection de Voldemort™ ', 'Magie, aventure et action sont au programme avec La résurrection de Voldemort™ LEGO® Harry Potter™ 75965. ', '41.PNG', '', '0', '', 19.99, '2', 8, 0, 0, 1),
(42, 'Magyar à pointes du Tournoi des Trois Sorciers ', 'Les jeunes fans d\'Harry Potter™ affrontent l\'un des dragons les plus dangereux du monde des sorciers.', '42.PNG', '', '0', '', 34.99, '2', 8, 1, 0, 1),
(43, 'Le match de Quidditch™ ', 'Découverte du sport magique le plus passionnant avec cet ensemble Le match de Quidditch™ 75956 LEGO® Harry Potter™.', '43.PNG', '', '0', '', 44.99, '8', 11, 0, 0, 1),
(44, 'La cabane de Hagrid : le sauvetage de Buck ', 'Les jeunes sorciers et sorcières peuvent recréer les scènes magiques de Harry Potter™ et le Prisonnier d\'Azkaban™ avec l\'ensemble La cabane de Hagrid : le sauvetage de Buck LEGO® Harry Potter 75947.', '44.PNG', '', '0', '', 64.99, '1', 11, 0, 0, 1),
(45, 'Le Poudlard™ Express ', 'La sorcière à chariot vend des bonbons et le Détraqueur vole vers le chariot pour recréer les scènes du royaume fantastique à partir des films Harry Potter™ à succès.', '45.PNG', '', '0', '', 84.99, '8', 11, 0, 0, 1),
(46, 'Le Saule Cogneur™ du château de Poudlard™ ', 'Harry et Ron ont besoin d\'aide pour retourner à Poudlard™ dans cet ensemble Le saule cogneur™ du château de Poudlard™ LEGO® Harry Potter™ 75953, vu dans Harry Potter et la Chambre des secrets.', '46.PNG', '', '0', '', 74.99, '1', 12, 0, 0, 1),
(47, 'La tour de l\'horloge de Poudlard™ ', 'Les fans d\'Harry Potter™ de 9 ans et plus sont transportés dans un univers de magie avec l\'ensemble La tour de l\'horloge de Poudlard™ LEGO® Harry Potter 75948.', '47.PNG', '', '0', '', 99.99, '17', 12, 0, 0, 1),
(48, 'La Grande Salle du château de Poudlard™ ', 'Ce château de jeu de rôle fantastique comprend 10 figurines, les créatures Basilic et Fumseck à construire etles figurines d\'Hedwige™ et de Croûtard™.', '48.PNG', '', '0', '', 109.99, '2', 12, 0, 0, 1),
(49, 'Le château de Poudlard™ ', 'La magie prend vie avec LEGO® Harry Potter™ 71043 château Poudlard™ ! Cet ensemble LEGO Harry Potter de collection très détaillé comprend plus de 6 000 pièces et offre une expérience de construction enrichissante.', '49.PNG', '', '0', '', 419.99, '2', 12, 0, 0, 1),
(50, 'Mon premier Mickey à construire ', 'Les tout-petits vont adorer construire et reconstruire leur personnage préféré de Disney avec Mon premier Mickey à construire LEGO® DUPLO® 10898 ! ', '50.PNG', '', '0', '', 9.99, '15', 2, 0, 0, 1),
(51, 'Ma première Minnie à construire ', 'Les petit fans de Disney vont adorer Ma première Minnie à construire LEGO® DUPLO® 10897, un puzzle Minnie Mouse 3D à faire avec des grosses briques DUPLO.', '51.PNG', '', '0', '', 9.99, '14', 2, 0, 0, 1),
(52, 'La maison de vacances de Mickey ', 'Les tout-petits découvrent un univers infini de jeu et d\'imagination en compagnie de Mickey Mouse et ses amis, avec l\'ensemble La maison de vacances de Mickey LEGO® DUPLO® l Disney 10889.', '52.PNG', '', '0', '', 54.99, '3', 5, 0, 0, 1),
(53, 'La célébration au château de Cendrillon ', 'Les enfants peuvent développer leurs compétences de jeu de rôle et de créativité avec une princesse Disney et ses animaux dans ce set La célébration au château de Cendrillon.', '53.PNG', '', '0', '', 29.99, '3', 5, 0, 0, 1),
(54, 'L\'aventure de Buzz et la Bergère dans l\'aire de jeu ', 'Faites découvrir à votre enfant l’amusement et l’excitation de Toy Story 4 Disney•Pixar avec cet adorable ensemble de jeu L’aventure de Buzz et la Bergère dans l’aire de jeu.', '54.PNG', '', '0', '', 26.99, '1', 5, 0, 0, 1),
(55, 'Le train de Toy Story ', 'Exprimez votre imagination et créez des aventures avec votre petit fan de Toy Story Disney•Pixar alors que Woody et Buzz L’Eclair font un tour sur le train de Toy Story', '55.PNG', '', '0', '', 24.99, '1', 5, 0, 0, 1),
(56, 'Les aventures d\'Ariel dans un livre de contes ', 'Les enfants peuvent jouer à la vie sous-marine et sur la plage avec cet excellent set Les aventures d’Ariel dans un livre de contes LEGO® ǀ Disney (43176).', '56.PNG', '', '0', '', 16.99, '8', 5, 0, 0, 1),
(57, 'La maison sur l\'île de Vaiana ', 'Les enfants découvrent la vie insulaire avec Vaiana de Disney, Heihei et Grand-mère Tala Raie-Manta dans ce set La maison sur l\'île de Vaiana LEGO® ǀ Disney (43183).', '57.PNG', '', '0', '', 29.99, '4', 8, 0, 0, 1),
(58, 'Le terrain d\'entraînement de Mulan', 'De formidables découvertes attendent les fans de Mulan, Cri-Kee et Khan le cheval de Disney dans cet adorable set Le terrain d’entraînement de Mulan LEGO® ǀ Disney (43182).', '58.PNG', '', '0', '', 29.99, '4', 8, 0, 0, 1),
(59, 'Le château d\'Arendelle ', 'Avec Le château d’Arendelle LEGO® l Disney 41167, les fans du film La Reine des neiges II passeront des heures à inventer des jeux pleins de magie et de créativité.', '59.PNG', '', '0', '', 84.99, '4', 8, 0, 0, 1),
(60, 'Le château de la Reine des neiges ', 'Avec Anna, Elsa et Olaf, les héros de l\'ensemble Le château de la Reine des neiges LEGO® DUPLO® l Disney 10899, parents et enfants partagent des jeux pleins d\'imagination ainsi que des étapes de développement importantes.', '60.PNG', '', '0', '', 49.99, '2', 8, 0, 0, 1),
(61, 'Les vacances en camping-car Toy Story ', 'Aidez votre enfant à vivre l’aventure et l’amusement de Toy Story 4 Disney•Pixar avec l’ensemble Les vacances en camping-car Toy Story 4 LEGO® 4+ 10769 ! ', '61.PNG', '', '0', '', 34.99, '3', 8, 0, 0, 1),
(62, 'Steamboat Willie ', 'Les fans de Mickey Mouse Disney vont adorer ce jouet de construction Steamboat Willie LEGO® Ideas 21317 marquant le 90e anniversaire du plus célèbre personnage de dessin animé de l’histoire.', '62.PNG', '', '0', '', 89.99, '4', 11, 0, 0, 1),
(63, 'Le palais des glaces magique d\'Elsa ', 'Une fête givrée de Disney, dans un grand palais de glace.', '63.PNG', '', '0', '', 76.99, '25', 11, 1, 0, 1),
(64, 'La boîte à bijoux d\'Elsa ', 'Cette boîte décorative pour enfants s’inspire du palais de glace d’Elsa, ornée de flocons de neige.', '64.PNG', '', '0', '', 39.99, '77', 11, 1, 1, 1),
(65, 'Le carnaval en folie de Buzz et Woody ', 'Vous pouvez partager l’enthousiasme et la joie d’une fête foraine avec votre enfant grâce à l’ensemble Le carnaval en folie de Buzz et Woody de Toy Story de Disney.', '65.PNG', '', '0', '', 54.99, '14', 11, 0, 0, 1),
(66, 'Le train et la gare Disney ', 'L\'ensemble Le train et la gare LEGO® ǀ Disney 71044 réunit toute la famille autour d\'une fabuleuse expérience de construction et de jeu.', '66.PNG', '', '0', '', 329.99, '2', 12, 0, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
CREATE TABLE IF NOT EXISTS `product_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `images` text COLLATE utf8mb4_general_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_images_product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `adress` text COLLATE utf8mb4_general_ci NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_product_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `products_images_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
