-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 16, 2020 at 05:16 AM
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
(1, 'Everyday Face cleanser', 28, 'skincare', 'Brightening Glycolic Acid & Sea Kelp\r\n\r\n', 1, 'everyday_face_cleanser_main.jpg', 'img/everyday_face_cleanser_other.jpg', 'img/everyday_face_cleanser_thumb.jpg', '2020-11-09 00:39:30', '2020-11-09 00:39:30'),
(2, 'Everyday Face oil', 48, 'skincare', 'Hydrate and protect your skin from daily pollutants with our lightweight Everyday Face Moisturizer. ', 1, 'everyday_face_oil_main.jpg', 'img/everyday_face_oil_other.jpg', 'img/everyday_face_oil_thumb.jpg', '2020-11-09 00:39:30', '2020-11-09 00:39:30'),
(3, 'Brightening Face Mask', 46, 'skincare', 'Fine Line Reducing Hyaluronic Acid & Sea Fennel', 1, 'brightening_Face_Mask_main.jpg', 'img/brightening_Face_Mask_other.jpg', 'img/brightening_Face_Mask_thumb.jpg', '2020-11-09 00:47:10', '2020-11-09 00:47:10'),
(4, 'The Body wash', 34, 'skincare', 'A daily multi-vitamin cleanser for skin health—available in fragrance-free and in essential oil blends: Eucalyptus and Sandalwood.', 1, 'the_body_wash_main.jpg', 'img/the_body_wash_other.jpg', 'img/the_body_wash_thumb.jpg', '2020-11-09 00:47:10', '2020-11-09 00:47:10'),
(5, 'Everyday Face Moisturizer', 58, 'skincare', 'Hydrate and protect your skin from daily pollutants with our lightweight Everyday Face Moisturizer. ', 1, 'everyday_face moisturizer_main.jpg', 'img/everyday_face moisturizer_other.jpg', 'img/everyday_face moisturizer_thumb.jpg', '2020-11-09 00:55:37', '2020-11-09 00:55:37'),
(6, 'Everyday Face Serum', 78, 'skincare', 'Reduce fine lines and wrinkles, balance and control oil, and even skin pigmentation with our flash absorbing hydro serum. ', 1, 'everyday_face_Serum_main.jpg', 'img/everyday_face_Serum_other.jpg', 'img/everyday_face_Serum_thumb.jpg', '2020-11-09 00:55:37', '2020-11-09 00:55:37'),
(7, 'Detox Dry Shampoo', 34, 'hair', 'A super-absorbent formula that eliminates oils and impurities, leaving hair looking and feeling clean and refreshed with extra volume and a matte finish.', 1, 'detox_dry_Shampoo_main.jpg', 'img/detox_dry_Shampoo_other.jpg', 'img/detox_dry_Shampoo_thumb.jpg', '2020-11-09 01:02:47', '2020-11-09 01:02:47'),
(8, 'Hand and Nail Cream', 15, 'skincare', 'An antioxidant-rich, moisturizing cream for the hands and nails that provides a silky finish and lasting comfort.', 1, 'hand_and_nail_cream_main.jpg', 'img/hand_and_nail_cream_other.jpg', 'img/hand_and_nail_cream_thumb.jpg', '2020-11-09 01:02:47', '2020-11-09 01:02:47'),
(9, 'Overnight Recovery Treatment for Lightened Hair\r\n', 55, 'hair', 'An overnight leave-in serum with hyaluronic acid and edelweiss flower to hydrate and recover hair damaged from lightening treatments.\r\n', 1, 'overnight_recovery_hair_treatment_main.jpg', 'img/overnight_recovery_hair_treatment_other.jpg', 'img/overnight_recovery_hair_treatment_thumb.jpg', '2020-11-09 01:08:34', '2020-11-09 01:08:34'),
(10, 'Texturizing Hair Spray\r\n', 26, 'hair', 'An ultra-lightweight product that combines the best parts of dry shampoo and hair spray, to build incredible volume and texture.', 1, 'texturizing_hair_ spray_main.jpg', 'img/texturizing_hair_ spray_other.jpg', 'img/texturizing_hair_ spray_thumb.jpg', '2020-11-09 01:08:34', '2020-11-09 01:08:34'),
(11, 'Rose Hair & Body Oil', 32, 'skincare', 'A multitasking oil for hair and body that’s perfect for those on the go.', 1, 'rosyhair_bodyoil_main.jpg', 'img/rosyhair_bodyoil_other.jpg', 'img/rosyhair_bodyoil_thumb.jpg', '2020-11-09 01:12:50', '2020-11-09 01:12:50'),
(12, 'Sugar Lemon Body Lotion', 32, 'skincare', 'A sweet, lemon-scented luxury body moisturizing lotion.', 1, 'sugar_lemon_body_lotion_main.jpg', 'img/sugar_lemon_body_lotion_other.jpg', 'img/sugar_lemon_body_lotion_thumb.jpg', '2020-11-09 01:12:50', '2020-11-09 01:12:50');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
