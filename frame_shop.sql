-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2018 at 07:31 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frame_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deliveryType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urgent` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `address`, `deliveryType`, `urgent`) VALUES
(1, 'Pijus Pauliukonis ', 'Kepeju g. 5-3 ', 'DPD', 1),
(2, 'Jurate Nykzentaityte', 'Kurpiu g 7-1', 'DPD', NULL),
(3, 'Juozas Petronis', 'Petronio g. 13', 'LP (Lithuanian Post)', NULL),
(4, 'Jonas Baguzis', 'Jonaiciu g. 31 - 1', 'LP (Lithuanian Post)', NULL),
(5, 'Jonas Petraitis', 'Kaledu g. 11', 'DPD', 1),
(6, 'Kotryna Povilaitiene', 'Bakuzes g 13', 'DPD', 1),
(7, 'Jonas Limermanas', 'Zydu g. 15', 'LP (Lithuanian Post)', NULL),
(8, 'Petronele Petrauskiene', 'Zydu g. 14', 'DPD', 1),
(9, 'Lukas Paresius', 'testuotoju g. 1', 'LP (Lithuanian Post)', NULL),
(10, 'Marius Pockaitis', 'Milano g. 99', 'DPD', NULL),
(11, 'Pijus Balinauskas', 'Kaminkreciu g. 78-3', 'DPD', NULL),
(12, 'Petras Gerulis', 'Jonu g. 1', 'DPD', 1),
(13, 'Jurate Neimontaite', 'Nomanu g. 15', 'DPD', 1),
(14, 'Larisa Barista', 'Kerpiu g. 16', 'LP (Lithuanian Post)', 1),
(15, 'Vlada Kolinauskaite', 'Normandu g. 1 - 13', 'DPD', NULL),
(16, 'Wendy Dach', '922 Williamson Highway\nStantonburgh, NE 96447-3029', 'DPD', 1),
(17, 'Dr. Kristofer Heaney I', '8353 Hills Rest Apt. 141\nMarksside, CO 98490', 'LP (Lithuanian Post)', 0),
(18, 'Amelia Strosin', '568 Isabella Road\nRaquelfurt, NE 13982', 'LP (Lithuanian Post)', 0),
(19, 'Mr. Otis Mayer', '794 Blanda Union Apt. 086\nHilpertchester, OK 62583', 'DPD', 0),
(20, 'Dr. Lucinda Dickinson MD', '171 Dejah Forges Apt. 062\nNorvalside, AK 64852', 'DPD', 0),
(21, 'Dr. Armand Bechtelar', '37195 Leanna Well Suite 513\nNew Adolphfurt, SC 33328-7236', 'DPD', 0),
(22, 'Sandra Leuschke', '99046 Jerde Village Apt. 000\nPort Brendan, AR 06509', 'LP (Lithuanian Post)', 1),
(23, 'Major Cruickshank', '238 Weimann Vista Suite 391\nNorth Glenview, DE 26300', 'DPD', 0),
(24, 'Kaylah Harvey', '877 Krajcik Meadow Suite 620\nSouth Constantinburgh, PA 91117-8498', 'LP (Lithuanian Post)', 1),
(25, 'Mr. Gerhard Bartoletti', '85281 Brooks Trafficway Apt. 454\nKunzeville, NY 32586-8726', 'DPD', 1),
(26, 'Rashad OKeefe', '726 Maye Gateway Suite 314\nPort Patiencefurt, TX 93036-3693', 'DPD', 1),
(27, 'Pasquale Franecki', '5291 Miller Road\nSouth Emilio, AK 34671', 'LP (Lithuanian Post)', 1),
(28, 'Ricky Kub', '252 Funk Coves Suite 466\nDoviebury, ME 83918-1893', 'DPD', 0),
(29, 'Ryleigh Bergstrom', '726 Huels Mill Apt. 031\nNew Magnus, OK 53456-4338', 'DPD', 1),
(30, 'Burnice Ondricka', '146 Sim Place\nPredovicborough, MO 60642', 'LP (Lithuanian Post)', 0),
(31, 'Eloisa Hand', '2378 Patricia Harbors\nEast Emelie, NM 96868', 'DPD', 1),
(32, 'Garnett Wilderman', '32240 Oberbrunner Way Apt. 990\nAlessiaburgh, TN 39634-0300', 'DPD', 1),
(33, 'Dr. Marilyne Graham II', '319 Gerhold Villages Suite 518\nShyannhaven, IN 67788', 'LP (Lithuanian Post)', 0),
(34, 'Phyllis Zieme', '3978 Herzog Tunnel Apt. 500\nMaxiemouth, NE 92617-1870', 'LP (Lithuanian Post)', 0),
(35, 'Janessa Wilderman', '1286 Amya Center\nNew Eliasborough, IA 56523-2171', 'DPD', 0),
(36, 'Lily Connelly PhD', '1969 Gavin Ports\nSwaniawskifurt, SD 04124', 'LP (Lithuanian Post)', 0),
(37, 'Duane Smitham', '9705 Miller Court\nLilliemouth, MD 11958-4847', 'LP (Lithuanian Post)', 1),
(38, 'Mrs. Monica Hagenes', '585 Magali Spur Apt. 541\nEast Queeniestad, CA 63850-3185', 'DPD', 0),
(39, 'Barry Morar', '578 Pinkie Fort\nNicholeport, IL 39378', 'DPD', 0),
(40, 'Coty Veum', '4926 Fahey Mission\nNew Amirport, MI 89176', 'DPD', 0),
(41, 'Dr. Luciano Cartwright V', '1283 Corwin Crescent\nPort Dorriston, SD 49107-5508', 'LP (Lithuanian Post)', 0),
(42, 'Prof. Lambert Murazik', '499 Von Ridges Suite 191\nEast Verdiefurt, IL 35182-2354', 'LP (Lithuanian Post)', 0),
(43, 'Miss Emily Sipes DVM', '828 Sam Bridge\nPort Evelyn, DE 86355-8484', 'LP (Lithuanian Post)', 1),
(44, 'Kaela Walker', '89478 Pfannerstill Hollow Suite 764\nRebamouth, IL 78610-3721', 'LP (Lithuanian Post)', 1),
(45, 'Perry Vandervort', '547 Eudora Knoll Apt. 449\nLake Jackie, MD 38592', 'LP (Lithuanian Post)', 1),
(46, 'Dr. Lessie Predovic', '57597 Rosenbaum Prairie Suite 783\nNorth Zionland, NM 32190', 'LP (Lithuanian Post)', 0),
(47, 'Neoma Herzog', '99392 Gracie Passage\nCathyborough, OR 64860', 'DPD', 1),
(48, 'Mable Gibson I', '943 Jaime Shoals\nNorth Garrisonstad, MN 42499', 'DPD', 0),
(49, 'Ava Schmitt PhD', '5414 Miller Port Apt. 408\nFeilville, NE 44305-1661', 'LP (Lithuanian Post)', 1),
(50, 'Nadia Nolan', '469 Shanna Mews Suite 102\nLake Nathanaelberg, NV 40560-9090', 'DPD', 1),
(51, 'Kayli Schulist', '5161 Tito Throughway Apt. 059\nJaylontown, NC 54966', 'LP (Lithuanian Post)', 0),
(52, 'Oma Johnson', '2658 Ferry Lake Suite 430\nVonRuedenside, WA 93217-7624', 'LP (Lithuanian Post)', 1),
(53, 'Miss Bette Turcotte Sr.', '550 Soledad Lakes Apt. 428\nDorrisville, LA 85886', 'LP (Lithuanian Post)', 0),
(54, 'Mrs. Monica Koelpin', '18566 Franecki Lake Apt. 006\nNorth Reynoldside, OR 90191-4327', 'LP (Lithuanian Post)', 0),
(55, 'Mrs. Noemi Veum', '350 Ursula Mills Apt. 195\nTobinland, AR 48965-8883', 'DPD', 0),
(56, 'Lorena Turcotte', '109 Maryjane Lock\nSouth Myrl, IN 30092-3922', 'DPD', 0),
(57, 'Ms. Aubrey Becker Jr.', '8695 Johns Lodge\nSouth Natalia, CT 60576-4009', 'LP (Lithuanian Post)', 0),
(58, 'Peggie Emard', '720 Yundt Corner Suite 017\nLake Gustave, IN 45457', 'DPD', 1),
(59, 'Adrain Terry', '688 Cielo Locks Suite 761\nBennetttown, NE 15175-9981', 'LP (Lithuanian Post)', 1),
(60, 'Effie Ledner', '79081 Rolfson Well Apt. 604\nWest Jacklynshire, WY 11138-3353', 'DPD', 0),
(61, 'Dean Cronin', '61606 Jarod Neck Suite 720\nLake Velvaburgh, WY 80406-5537', 'LP (Lithuanian Post)', 1),
(62, 'Nico McClure', '2343 Jena View Apt. 170\nGerardland, MS 46813-8762', 'DPD', 0),
(63, 'Devante Moore', '46260 Johnson Square\nRicoborough, OR 16426', 'LP (Lithuanian Post)', 1),
(64, 'Vincenza Wuckert', '56167 Lowe Spur Suite 084\nKleinhaven, LA 12634', 'LP (Lithuanian Post)', 1),
(65, 'Raven Durgan', '472 Darren Roads\nSavannahaven, ND 01061', 'DPD', 1),
(66, 'Dr. Devonte Goodwin MD', '5133 Herta Mountains Apt. 857\nTerrillbury, NH 06646-7535', 'DPD', 0),
(67, 'Nelda Medhurst', '2718 Yundt Path\nHuelside, AK 88567', 'DPD', 1),
(68, 'April Wiza', '9996 Jenkins Club Suite 135\nLemkebury, MD 82720-0476', 'LP (Lithuanian Post)', 1),
(69, 'Dr. Ramona Ankunding', '18572 Dessie Land\nPort Domenick, HI 64833-8810', 'DPD', 1),
(70, 'Alexandrea Wilderman', '8476 Elisabeth Underpass Apt. 786\nPascaleville, WI 26463-6440', 'DPD', 0),
(71, 'Prof. Janelle Stanton', '6186 Gleason Alley\nJenkinschester, MD 20546-8129', 'DPD', 1),
(72, 'Mittie Fadel', '300 Joany Roads\nNew Sherman, WY 69446-2861', 'DPD', 1),
(73, 'Jocelyn Gleason', '9241 Smitham Landing\nNorth Lafayetteview, HI 95017', 'LP (Lithuanian Post)', 1),
(74, 'Dr. Art Toy', '168 Little Inlet\nNorth Bernadine, VA 05433', 'LP (Lithuanian Post)', 0),
(75, 'Jesse Ondricka', '72203 Heaney Forges Suite 316\nPort Hoseaberg, WV 19081', 'LP (Lithuanian Post)', 1),
(76, 'Howell Bergstrom DDS', '24771 Ayana Creek Apt. 445\nMossiemouth, IL 05338', 'DPD', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `design` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hook` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `width`, `height`, `price`, `color`, `design`, `hook`) VALUES
(1, 'Antique picture frame', 'Antique picture frame found in excavation site during annual excavation festival in Great Britain held by International Archaeology Federation. Sources state that the item dates back to XVIIth century.', '90', '60', 1199, 'gold', 'antique', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
