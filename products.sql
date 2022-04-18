-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 01:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `constructionstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `manufacturer_id` int(10) NOT NULL,
  `product_title` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_url` text NOT NULL,
  `product_img` text NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `cat_id`, `manufacturer_id`, `product_title`, `product_price`, `product_url`, `product_img`, `product_desc`) VALUES
(0, 3, 9, 'Perla béton 10kg', 30, 'perla-beton', 'perla-beton.jpg', 'C’est une perlite expansée  pour renforcer les propriétés du béton léger isolant.\r\nLa présence des granulats légers dans PERLA béton® réduit sensiblement le coefficient de conductivité thermique comparé aux granulats lourds, l’air occlus dans la perlite freine en effet sensiblement le transfert de chaleur.'),
(1, 0, 0, 'Brique 3 Trous', 3, 'brique-3-trous', 'brique-platriere.jpg', 'brique à trois trous'),
(2, 0, 0, 'Brique Hourdis 19', 5, 'brique-hourdis-19', 'brique-HOURDIS-19.jpg', ''),
(3, 0, 5, 'Ciment portland noir', 50, 'ciment-portland-noir', 'Ciment-portland-noir.jpg', ''),
(4, 0, 5, 'ِChaux hydrolique artificielle', 50, 'chaux-hydrolique-artificielle', 'chaux-hydrolique-artificielle.jpg', ''),
(5, 0, 0, 'Brique 6 trous', 2, 'brique-6-trous', 'brique-6-trous.jpg', ''),
(6, 1, 3, 'Truelle Langue de chat', 10, 'truelle-langue-de-chat', 'truelle-langue-chat.jpg', ''),
(7, 1, 3, 'Frottoir spongieux', 12, 'frottoir-spongieux', 'frottoir-spongieux.jpg', ''),
(8, 1, 3, 'Boite à outils flex\r\n', 50, 'boite-outils-flex', 'boite-outils-flex.jpg', ''),
(9, 1, 0, 'Arrache-clous à charpentier\r\n', 12, 'arrache-clous-a-charpentier-2', 'arrache-clous-de-charpentier.jpg', ''),
(10, 1, 0, 'Marteau de charpentier coffreur', 15, 'marteau-de-charpentier-coffreur', 'marteau-de-charpentier-coffreur.jpg', ''),
(11, 0, 4, 'Fer à Béton STTM\r\n', 100, 'fer-sttm', 'fer-sttm.jpg', ''),
(13, 0, 6, 'Colle spéciale piscine 25kg', 60, 'colle-speciale-piscine', 'colle-speciale-piscine.jpg', ''),
(14, 0, 6, 'Carocol 6kg\r\n', 25, 'carocol', 'carocol.jpg', ''),
(15, 0, 6, 'Cimencol 25kg\r\n', 70, 'cimencol', 'cimencol.jpg', ''),
(16, 2, 0, 'Néapolis H6\r\n', 4, 'neapolis-h6', 'neapolis-h6.jpg', ''),
(17, 2, 0, 'Gravier 4/15 coloré\r\n', 20, 'gravier-415-colore', 'GRAVIER-4-15-COLOREE.jpg', ''),
(18, 2, 0, 'Pierre décorée marbre noir\r\n', 40, 'galet-noir', 'galet-noir.jpg', ''),
(19, 2, 0, 'Carrelage Mosaique Rouge', 6, 'carrelage-mosaique-rouge', 'carrelage-mosaique-rouge.jpg', ''),
(20, 2, 0, 'Carrelage Marbre Vert Grec', 10, 'carrelage-marbre-grec-vert', 'carrelage-marbre-vert-grec.jpg', ''),
(21, 2, 7, 'Galet de marbre blanc GranDiose 20kg', 40, 'galet-blanc-grandiose', 'galet-blanc.png', ''),
(22, 2, 7, 'Galet de marbre vert GranDiose 20kg', 50, 'galet-vert-grandiose', 'galet-vert.png', ''),
(23, 2, 7, 'Galet de marbre rose GranDiose 20kg', 60, 'galet-rose-grandiose', 'galet-rose.png', ''),
(24, 3, 6, 'Derbiflex 20kg', 40, 'derbiflex', 'derbiFLEX.jpg', ''),
(25, 3, 6, 'DERBIETANCHE 20kg', 45, 'derbietanche', 'DERBIETANCHE.jpg', ''),
(26, 3, 6, 'EXTRALATEX 20 LITRES', 70, 'extralatex', 'EXTRALATEX.jpg', 'Résine à l’eau pour mortiers qui permet de réduire les fissures et améliorer l’adhérence , l’imperméabilité et la cohésion de surface.'),
(27, 3, 6, 'AZYL 5 LITRES', 14, 'azyl-adjuvant', 'AZYL2.jpg', 'AZYL confère aux supports traités une protection invisible et durable contre les méfaits des agents atmosphériques.\r\n\r\nAZYL forme une barrière efficace contre la pénétration de l’eau sans empêcher les échanges gazeux: le mur «respire».\r\n\r\nLe traitement avec AZYL ne modifie en rien l’aspect des surfaces traitées.'),
(29, 3, 8, 'Polystyrène extrude « URSA XPS® N III L »', 50, 'polystyrene-extrude', 'polystyrene-extrude-ursa-xps.jpg', 'Les plaques de polystyrène extrudé URSA XPS® N III LS s’adressent à un public recherchant un isolant facile à manipuler et à poser, et présentant un haut niveau de résistance mécanique en compression.\r\nAdapté pour tous les travaux d’isolation, URSA XPS® N III LS est particulièrement recommandé pour certaines applications spécifiques : toitures-terrasses, toiture inversée…'),
(30, 3, 9, 'Perla Béton', 30, 'perla-beton', 'perla-beton.jpg', 'C’est une perlite expansée  pour renforcer les propriétés du béton léger isolant.\r\nLa présence des granulats légers dans PERLA béton® réduit sensiblement le coefficient de conductivité thermique comparé aux granulats lourds, l’air occlus dans la perlite freine en effet sensiblement le transfert de chaleur.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
