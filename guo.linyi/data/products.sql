-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2020 at 11:26 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linyi_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(64) NOT NULL,
  `price` decimal(9,0) NOT NULL,
  `category` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `image_main` varchar(256) NOT NULL,
  `image_other` varchar(512) NOT NULL,
  `image_thumb` varchar(256) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `category`, `description`, `quantity`, `image_main`, `image_other`, `image_thumb`, `date_create`, `date_modify`) VALUES
(1, 'Everyday Face cleanser', 28, 'skincare', 'Brightening Glycolic Acid & Sea Kelp\r\n\r\n', 10, 'everyday_face_cleanser.jpg', 'everyday_face_cleanser.jpg', 'everyday_face_cleanser.jpg', '2020-11-09 00:39:30', '2020-11-09 00:39:30'),
(2, 'Everyday Face oil', 48, 'skincare', 'Hydrate and protect your skin from daily pollutants with our lightweight Everyday Face Moisturizer. ', 8, 'everyday_face_oil.jpg', 'everyday_face_oil.jpg', 'everyday_face_oil.jpg', '2020-11-09 00:39:30', '2020-11-09 00:39:30'),
(3, 'Brightening Face Mask', 46, 'skincare', 'Fine Line Reducing Hyaluronic Acid & Sea Fennel', 12, 'brightening_face_mask.jpg', 'brightening_face_mask.jpg', 'brightening_face_mask.jpg', '2020-11-09 00:47:10', '2020-11-09 00:47:10'),
(4, 'The Body wash', 34, 'skincare', 'A daily multi-vitamin cleanser for skin health—available in fragrance-free and in essential oil blends: Eucalyptus and Sandalwood.', 9, 'the_body_wash.jpg', 'the_body_wash.jpg', 'the_body_wash.jpg', '2020-11-09 00:47:10', '2020-11-09 00:47:10'),
(5, 'Everyday Face Moisturizer', 58, 'skincare', 'Hydrate and protect your skin from daily pollutants with our lightweight Everyday Face Moisturizer. ', 5, 'everyday_face_moisturizer.jpg', 'everyday_face_moisturizer.jpg', 'everyday_face_moisturizer.jpg', '2020-11-09 00:55:37', '2020-11-09 00:55:37'),
(6, 'Everyday Face Serum', 78, 'skincare', 'Reduce fine lines and wrinkles, balance and control oil, and even skin pigmentation with our flash absorbing hydro serum. ', 8, 'everyday_face_serum.jpg', 'everyday_face_serum.jpg', 'everyday_face_serum.jpg', '2020-11-09 00:55:37', '2020-11-09 00:55:37'),
(7, 'Detox Dry Shampoo', 65, 'hair', 'A super-absorbent formula that eliminates oils and impurities, leaving hair looking and feeling clean and refreshed with extra volume and a matte finish.', 8, 'detox_dry_shampoo.jpg', 'detox_dry_shampoo.jpg', 'detox_dry_shampoo.jpg', '2020-11-09 01:02:47', '2020-11-09 01:02:47'),
(8, 'Hand and Nail Cream', 15, 'skincare', 'An antioxidant-rich, moisturizing cream for the hands and nails that provides a silky finish and lasting comfort.', 8, 'hand_and_nail_cream.jpg', 'hand_and_nail_cream.jpg', 'hand_and_nail_cream.jpg', '2020-11-09 01:02:47', '2020-11-09 01:02:47'),
(9, 'Overnight Recovery Treatment for Lightened Hair\r\n', 55, 'hair', 'An overnight leave-in serum with hyaluronic acid and edelweiss flower to hydrate and recover hair damaged from lightening treatments.\r\n', 11, 'overnight_recovery_hair_treatment.jpg', 'overnight_recovery_hair_treatment.jpg', 'overnight_recovery_hair_treatment.jpg', '2020-11-09 01:08:34', '2020-11-09 01:08:34'),
(10, 'Texturizing Hair Spray\r\n', 26, 'hair', 'An ultra-lightweight product that combines the best parts of dry shampoo and hair spray, to build incredible volume and texture.', 6, 'texturizing_hair_spray.jpg', 'texturizing_hair_spray.jpg', 'texturizing_hair_spray.jpg', '2020-11-09 01:08:34', '2020-11-09 01:08:34'),
(11, 'The Rose Hair Body Oil', 32, 'skincare', 'This protective hair oil and hydrating moisturizer that doubles as a perfume does it all. A fusion of rose hip oil, shea oil, and absinthium oil restores moisture, adds a dewy glow, silences frizz, and leaves you smelling like our velvety-rich rose fragrance Melrose Place Eau de Parfum.', 15, 'rosehair_bodyoil.jpg', 'rosehair_bodyoil.jpg', 'rosehair_bodyoil.jpg', '2020-11-09 01:12:50', '2020-11-09 01:12:50'),
(12, 'Sugar Lemon Body Lotion', 32, 'skincare', 'A sweet, lemon-scented luxury body moisturizing lotion.', 6, 'sugar_lemon_body_lotion.jpg', 'sugar_lemon_body_lotion.jpg', 'sugar_lemon_body_lotion.jpg', '2020-11-09 01:12:50', '2020-11-09 01:12:50'),
(28, 'The Body wash', 9, 'skincare', 'A daily multi-vitamin cleanser for skin health—available in fragrance-free and in essential oil blends: Eucalyptus and Sandalwood.', 9, '', 'the_body_wash.jpg', 'the_body_wash.jpg', '2020-12-16 10:57:29', '2020-12-16 10:57:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
