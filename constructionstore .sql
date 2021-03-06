-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 01:56 PM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_email` text NOT NULL,
  `admin_pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'Bob the builder', 'bob@builder.net', 'bob');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `p_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`, `p_price`) VALUES
(2, '::1', 456, 5),
(7, '::1', 45, 12),
(11, '::1', 12, 100),
(17, '::1', 3, 20),
(22, '::1', 4, 50);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_img`) VALUES
(0, 'Gros Oeuvre', ''),
(1, 'Quincallerie', ''),
(2, 'RevĂȘtement', ''),
(3, 'Isolation', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` text NOT NULL,
  `customer_pass` text NOT NULL,
  `customer_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_address`) VALUES
(1, 'Pepe', 'pepe@pepe.com', 'salvia', '13 Av de la RĂ©publique, Hammam-Lif'),
(2, 'Picasso', 'picasso@picasso.com', 'picasso', '11 Rue de Rome, Tunis Centre-Ville');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `invoice_no` int(100) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`invoice_no`, `customer_id`, `product_id`, `qty`, `subtotal`, `date`) VALUES
(667211732, 0, 7, 3, 36, '2022-04-17 21:32:52'),
(1041625359, 1, 555, 500, 1500, '2022-04-17 16:14:14'),
(1714918456, 0, 11, 1, 100, '2022-04-17 21:29:00'),
(1714918456, 0, 17, 3, 60, '2022-04-17 21:29:01'),
(1714918456, 0, 24, 3, 120, '2022-04-17 21:29:01'),
(1744774525, 1, 888, 5, 125, '2022-04-17 15:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `manufacturer_id` int(10) NOT NULL,
  `manufacturer_name` text NOT NULL,
  `manufacturer_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`manufacturer_id`, `manufacturer_name`, `manufacturer_img`) VALUES
(0, 'Sans marque', ''),
(1, 'Kaufmann', 'kaufmann.jpg'),
(2, 'Boscaro', 'boscaro.tmp'),
(3, 'Mob Peddinghaus', 'mob-peddinghaus.jpg'),
(4, 'Ste Tunisie transformation du MĂ©tal', 'sttm.jpg'),
(5, 'Comptoir Hammami', 'hammami-comptoir.png'),
(6, 'Derbigum Africa', 'derbigum.jpg'),
(7, 'GranDiose', 'GranDiose.png'),
(8, 'URSA', 'ursa-insulation'),
(9, 'Perla Group', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `invoice_no` int(10) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `due_amount` decimal(10,0) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_status` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(0, 3, 9, 'Perla bĂ©ton 10kg', 30, 'perla-beton', 'perla-beton.jpg', 'Câest une perlite expansĂ©e  pour renforcer les propriĂ©tĂ©s du bĂ©ton lĂ©ger isolant.\r\nLa prĂ©sence des granulats lĂ©gers dans PERLA bĂ©tonÂź rĂ©duit sensiblement le coefficient de conductivitĂ© thermique comparĂ© aux granulats lourds, lâair occlus dans la perlite freine en effet sensiblement le transfert de chaleur.'),
(1, 0, 0, 'Brique 3 Trous', 3, 'brique-3-trous', 'brique-platriere.jpg', 'brique Ă  trois trous'),
(2, 0, 0, 'Brique Hourdis 19', 5, 'brique-hourdis-19', 'brique-HOURDIS-19.jpg', ''),
(3, 0, 5, 'Ciment portland noir', 50, 'ciment-portland-noir', 'Ciment-portland-noir.jpg', ''),
(4, 0, 5, 'ÙChaux hydrolique artificielle', 50, 'chaux-hydrolique-artificielle', 'chaux-hydrolique-artificielle.jpg', ''),
(5, 0, 0, 'Brique 6 trous', 2, 'brique-6-trous', 'brique-6-trous.jpg', ''),
(6, 1, 3, 'Truelle Langue de chat', 10, 'truelle-langue-de-chat', 'truelle-langue-chat.jpg', ''),
(7, 1, 3, 'Frottoir spongieux', 12, 'frottoir-spongieux', 'frottoir-spongieux.jpg', ''),
(8, 1, 3, 'Boite Ă  outils flex\r\n', 50, 'boite-outils-flex', 'boite-outils-flex.jpg', ''),
(9, 1, 0, 'Arrache-clous Ă  charpentier\r\n', 12, 'arrache-clous-a-charpentier-2', 'arrache-clous-de-charpentier.jpg', ''),
(10, 1, 0, 'Marteau de charpentier coffreur', 15, 'marteau-de-charpentier-coffreur', 'marteau-de-charpentier-coffreur.jpg', ''),
(11, 0, 4, 'Fer Ă  BĂ©ton STTM\r\n', 100, 'fer-sttm', 'fer-sttm.jpg', ''),
(13, 0, 6, 'Colle spĂ©ciale piscine 25kg', 60, 'colle-speciale-piscine', 'colle-speciale-piscine.jpg', ''),
(14, 0, 6, 'Carocol 6kg\r\n', 25, 'carocol', 'carocol.jpg', ''),
(15, 0, 6, 'Cimencol 25kg\r\n', 70, 'cimencol', 'cimencol.jpg', ''),
(16, 2, 0, 'NĂ©apolis H6\r\n', 4, 'neapolis-h6', 'neapolis-h6.jpg', ''),
(17, 2, 0, 'Gravier 4/15 colorĂ©\r\n', 20, 'gravier-415-colore', 'GRAVIER-4-15-COLOREE.jpg', ''),
(18, 2, 0, 'Pierre dĂ©corĂ©e marbre noir\r\n', 40, 'galet-noir', 'galet-noir.jpg', ''),
(19, 2, 0, 'Carrelage Mosaique Rouge', 6, 'carrelage-mosaique-rouge', 'carrelage-mosaique-rouge.jpg', ''),
(20, 2, 0, 'Carrelage Marbre Vert Grec', 10, 'carrelage-marbre-grec-vert', 'carrelage-marbre-vert-grec.jpg', ''),
(21, 2, 7, 'Galet de marbre blanc GranDiose 20kg', 40, 'galet-blanc-grandiose', 'galet-blanc.png', ''),
(22, 2, 7, 'Galet de marbre vert GranDiose 20kg', 50, 'galet-vert-grandiose', 'galet-vert.png', ''),
(23, 2, 7, 'Galet de marbre rose GranDiose 20kg', 60, 'galet-rose-grandiose', 'galet-rose.png', ''),
(24, 3, 6, 'Derbiflex 20kg', 40, 'derbiflex', 'derbiFLEX.jpg', ''),
(25, 3, 6, 'DERBIETANCHE 20kg', 45, 'derbietanche', 'DERBIETANCHE.jpg', ''),
(26, 3, 6, 'EXTRALATEX 20 LITRES', 70, 'extralatex', 'EXTRALATEX.jpg', 'RĂ©sine Ă  lâeau pour mortiers qui permet de rĂ©duire les fissures et amĂ©liorer lâadhĂ©rence , lâimpermĂ©abilitĂ© et la cohĂ©sion de surface.'),
(27, 3, 6, 'AZYL 5 LITRES', 14, 'azyl-adjuvant', 'AZYL2.jpg', 'AZYL confĂšre aux supports traitĂ©s une protection invisible et durable contre les mĂ©faits des agents atmosphĂ©riques.\r\n\r\nAZYL forme une barriĂšre efficace contre la pĂ©nĂ©tration de lâeau sans empĂȘcher les Ă©changes gazeux: le mur Â«respireÂ».\r\n\r\nLe traitement avec AZYL ne modifie en rien lâaspect des surfaces traitĂ©es.'),
(29, 3, 8, 'PolystyrĂšne extrude Â« URSA XPSÂź N III L Â»', 50, 'polystyrene-extrude', 'polystyrene-extrude-ursa-xps.jpg', 'Les plaques de polystyrĂšne extrudĂ© URSA XPSÂź N III LS sâadressent Ă  un public recherchant un isolant facile Ă  manipuler et Ă  poser, et prĂ©sentant un haut niveau de rĂ©sistance mĂ©canique en compression.\r\nAdaptĂ© pour tous les travaux dâisolation, URSA XPSÂź N III LS est particuliĂšrement recommandĂ© pour certaines applications spĂ©cifiques : toitures-terrasses, toiture inversĂ©eâŠ'),
(30, 3, 9, 'Perla BĂ©ton', 30, 'perla-beton', 'perla-beton.jpg', 'Câest une perlite expansĂ©e  pour renforcer les propriĂ©tĂ©s du bĂ©ton lĂ©ger isolant.\r\nLa prĂ©sence des granulats lĂ©gers dans PERLA bĂ©tonÂź rĂ©duit sensiblement le coefficient de conductivitĂ© thermique comparĂ© aux granulats lourds, lâair occlus dans la perlite freine en effet sensiblement le transfert de chaleur.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`invoice_no`,`product_id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`invoice_no`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
