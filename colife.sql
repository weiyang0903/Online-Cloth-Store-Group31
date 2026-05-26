-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2024 at 08:01 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `colife`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `Cus_ID` int(11) DEFAULT NULL,
  `categoryid` varchar(10) DEFAULT NULL,
  `productid` varchar(10) DEFAULT NULL,
  `sizeid` varchar(10) DEFAULT NULL,
  `cartquan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `Cus_ID`, `categoryid`, `productid`, `sizeid`, `cartquan`) VALUES
(15, 6, 'C002', 'MS003', 'S03', 2),
(16, 6, 'C002', 'MJ003', 'S04', 1),
(17, 7, 'C002', 'MC003', 'S04', 1),
(18, 8, 'C001', 'WJ001', 'S03', 1),
(19, 8, 'C001', 'WP003', 'S04', 1),
(20, 9, 'C002', 'MT002', 'S05', 1),
(21, 9, 'C003', 'KC002', 'S01', 1),
(22, 10, 'C001', 'WK001', 'S02', 1),
(23, 10, 'C002', 'MJ001', 'S03', 1),
(24, 10, 'C003', 'KP002', 'S01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` varchar(10) NOT NULL,
  `categoryname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `categoryname`) VALUES
('C001', 'Women'),
('C002', 'Men'),
('C003', 'Kid');

-- --------------------------------------------------------

--
-- Table structure for table `category2`
--

CREATE TABLE `category2` (
  `category2id` varchar(10) NOT NULL,
  `category2name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category2`
--

INSERT INTO `category2` (`category2id`, `category2name`) VALUES
('T01', 'Cloth'),
('T02', 'Pant'),
('T03', 'Skirt'),
('T04', 'Tie'),
('T05', 'Sock'),
('T06', 'Jacket'),
('T07', 'Belt'),
('T08', 'Doll');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contact_id` int(11) NOT NULL,
  `Cus_ID` int(11) DEFAULT NULL,
  `message` varchar(900) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cus_ID` int(5) NOT NULL,
  `Cus_Name` varchar(100) NOT NULL,
  `Cus_password` varchar(100) NOT NULL,
  `Cus_phonenumber` varchar(10) NOT NULL,
  `Cus_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cus_ID`, `Cus_Name`, `Cus_password`, `Cus_phonenumber`, `Cus_email`) VALUES
(1, 'Wei Ting', '1234abcd', '0123456789', 'weiting@gmail.com'),
(2, 'Xuan Yu', '1d25xce1', '0123233223', 'xuanyu@gmail.com'),
(3, 'Bing Shen', '998fd9s9', '0155656598', 'bingshen@gmail.com'),
(4, 'Yong Kang', '5ef5edd5', '0132123156', 'yongkang@gmail.com'),
(5, 'Qi Yang', '212cdc15', '0138984948', 'qiyang@gmail.com'),
(6, 'Jun Xu', '45fg5759', '0179855456', 'junxu@gmail.com'),
(7, 'You Zhen', 'cxdfe454', '0156665325', 'youzhen@gmail.com'),
(8, 'Bryan', '554v89d5', '0199452448', 'bryan@gmail.com'),
(9, 'Yi Ming', 'nmgfr513', '0102021854', 'yiming@gmail.com'),
(10, 'Aik Hong', '9879kofg', '0132323564', 'aikhong@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE `orderitem` (
  `orderitemid` int(11) NOT NULL,
  `orderid` int(11) DEFAULT NULL,
  `Cus_ID` int(11) DEFAULT NULL,
  `productid` varchar(10) DEFAULT NULL,
  `sizeid` varchar(10) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `productprice` decimal(10,2) DEFAULT NULL,
  `pay` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitem`
--

INSERT INTO `orderitem` (`orderitemid`, `orderid`, `Cus_ID`, `productid`, `sizeid`, `quantity`, `productprice`, `pay`) VALUES
(1, 1, 1, 'MC002', 'S03', 2, '99.90', '199.80'),
(2, 1, 1, 'MP002', 'S03', 1, '129.90', '129.90'),
(3, 2, 2, 'WK003', 'S02', 2, '14.90', '29.80'),
(4, 2, 2, 'WS002', 'S04', 1, '149.90', '149.90'),
(5, 2, 2, 'WC001', 'S04', 2, '39.90', '79.80'),
(6, 3, 3, 'MB003', 'S05', 1, '49.90', '49.90'),
(7, 3, 3, 'MT001', 'S05', 2, '65.00', '130.00'),
(8, 4, 4, 'MP001', 'S04', 1, '149.90', '149.90'),
(9, 5, 5, 'KD002', 'S05', 1, '59.90', '59.90'),
(10, 5, 5, 'KD003', 'S05', 1, '83.50', '83.50');

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `orderid` int(5) NOT NULL,
  `Cus_ID` int(11) DEFAULT NULL,
  `address` text,
  `day` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_amount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`orderid`, `Cus_ID`, `address`, `day`, `total_amount`) VALUES
(1, 1, 'No 24 Jalan Johor Jaya Taman Johor Jaya 81100 ', '2024-07-05 17:31:00', '329.70'),
(2, 2, 'No 54 Jalan Seri Alam Jalan Seri Alam 81750', '2024-07-05 17:37:29', '259.50'),
(3, 3, 'No 90 Jalan Ehsan Jaya Taman Ehsan Jaya 81100', '2024-07-05 17:41:13', '179.90'),
(4, 4, 'No 33 Jalan Putriwangsa Taman Putriwangsa 81800', '2024-07-05 17:45:06', '149.90'),
(5, 5, 'No 66 Jalan Ayer Keroh Taman Ayer Keroh 75450', '2024-07-05 17:47:38', '143.40');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_number` int(5) NOT NULL,
  `productid` varchar(10) DEFAULT NULL,
  `categoryid` varchar(10) NOT NULL,
  `category2id` varchar(10) NOT NULL,
  `sizeid` varchar(10) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `product_picture` varchar(255) DEFAULT NULL,
  `productdescription` text NOT NULL,
  `productprice` decimal(10,2) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_number`, `productid`, `categoryid`, `category2id`, `sizeid`, `productname`, `product_picture`, `productdescription`, `productprice`, `quantity`) VALUES
(5, 'MC001', 'C002', 'T01', 'S02', 'Crew Neck Short Sleeve T-Shirt\r\n', 'men_cloth1.jpg', 'Smooth, premium 100% SUPIMA cotton. Basic design styles on its own or in layered looks. Designed with meticulous attention to detail, down to the collar width and stitching. FABRIC DETAILS 100% Cotton', '59.90', 10),
(6, 'MC001', 'C002', 'T01', 'S03', 'Crew Neck Short Sleeve T-Shirt\r\n', 'men_cloth1.jpg', 'Smooth, premium 100% SUPIMA cotton. Basic design styles on its own or in layered looks. Designed with meticulous attention to detail, down to the collar width and stitching. FABRIC DETAILS 100% Cotton', '59.90', 10),
(7, 'MC001', 'C002', 'T01', 'S04', 'Crew Neck Short Sleeve T-Shirt\r\n', 'men_cloth1.jpg', 'Smooth, premium 100% SUPIMA cotton. Basic design styles on its own or in layered looks. Designed with meticulous attention to detail, down to the collar width and stitching. FABRIC DETAILS 100% Cotton', '59.90', 10),
(8, 'MC002', 'C002', 'T01', 'S02', 'Open Collar Short Sleeve Shirt', 'men_cloth2.jpg', 'Updated for reduced wrinkling. Smooth cotton-rayon blend with a moderate drape. Relaxed cut with dropped shoulders. Loose fit styles as an outer layer or on its own.FABRIC DETAILS 53% Modal, 47% Cotton', '99.90', 10),
(9, 'MC002', 'C002', 'T01', 'S03', 'Open Collar Short Sleeve Shirt', 'men_cloth2.jpg', 'Updated for reduced wrinkling. Smooth cotton-rayon blend with a moderate drape. Relaxed cut with dropped shoulders. Loose fit styles as an outer layer or on its own.FABRIC DETAILS 53% Modal, 47% Cotton', '99.90', 10),
(10, 'MC002', 'C002', 'T01', 'S04', 'Open Collar Short Sleeve Shirt', 'men_cloth2.jpg', 'Updated for reduced wrinkling. Smooth cotton-rayon blend with a moderate drape. Relaxed cut with dropped shoulders. Loose fit styles as an outer layer or on its own.FABRIC DETAILS 53% Modal, 47% Cotton', '99.90', 10),
(11, 'MC003', 'C002', 'T01', 'S02', 'STUDIO GHIBLI Long Sleeve Sweatshirt', 'men_women_cloth1.jpg', 'The design incorporates a wide variety of art featuring Ghibli best-known works, as well as the work of Thai artist Kanyada. Through this collection, we hope that the brilliance and energy of Studio Ghibli reaches each and every one of you.  FABRIC DETAILS Body: 100% Cotton/ Rib: 78% Cotton, 22% Polyester/ Exclusive of Decoration.', '129.90', 10),
(12, 'MC003', 'C002', 'T01', 'S03', 'STUDIO GHIBLI Long Sleeve Sweatshirt', 'men_women_cloth1.jpg', 'The design incorporates a wide variety of art featuring Ghibli best-known works, as well as the work of Thai artist Kanyada. Through this collection, we hope that the brilliance and energy of Studio Ghibli reaches each and every one of you.  FABRIC DETAILS Body: 100% Cotton/ Rib: 78% Cotton, 22% Polyester/ Exclusive of Decoration.', '129.90', 10),
(13, 'MC003', 'C002', 'T01', 'S04', 'STUDIO GHIBLI Long Sleeve Sweatshirt', 'men_women_cloth1.jpg', 'The design incorporates a wide variety of art featuring Ghibli best-known works, as well as the work of Thai artist Kanyada. Through this collection, we hope that the brilliance and energy of Studio Ghibli reaches each and every one of you.  FABRIC DETAILS Body: 100% Cotton/ Rib: 78% Cotton, 22% Polyester/ Exclusive of Decoration.', '129.90', 10),
(14, 'MP001', 'C002', 'T02', 'S02', 'Slim Fit Jeans', 'men_women_pant1.jpg', 'Laser-processed to create a pre-worn, vintage look.FABRIC DETAILS [63 BLUE] Body: 98% Cotton, 2% Spandex/ Pocket Lining: 65% Polyester, 35% Cotton [Other Colors] Body: 96% Cotton, 3% Polyester, 1% Spandex/ Pocket Lining: 65% Polyester, 35% Cotton.', '149.90', 10),
(15, 'MP001', 'C002', 'T02', 'S03', 'Slim Fit Jeans', 'men_women_pant1.jpg', 'Laser-processed to create a pre-worn, vintage look.FABRIC DETAILS [63 BLUE] Body: 98% Cotton, 2% Spandex/ Pocket Lining: 65% Polyester, 35% Cotton [Other Colors] Body: 96% Cotton, 3% Polyester, 1% Spandex/ Pocket Lining: 65% Polyester, 35% Cotton.', '149.90', 10),
(16, 'MP001', 'C002', 'T02', 'S04', 'Slim Fit Jeans', 'men_women_pant1.jpg', 'Laser-processed to create a pre-worn, vintage look.FABRIC DETAILS [63 BLUE] Body: 98% Cotton, 2% Spandex/ Pocket Lining: 65% Polyester, 35% Cotton [Other Colors] Body: 96% Cotton, 3% Polyester, 1% Spandex/ Pocket Lining: 65% Polyester, 35% Cotton.', '149.90', 10),
(17, 'MP002', 'C002', 'T02', 'S02', 'Ultra Stretch Color Jeans', 'men_pant1.jpg', 'Satin fabric with Ultra Stretch for a comfortable skinny fit. Made with finer yarns to achieve an elegant, glossy brushed texture. FABRIC DETAILS Body: 97% Cotton, 3% Spandex/ Pocket Lining: 65% Polyester, 35% Cotton', '129.90', 10),
(18, 'MP002', 'C002', 'T02', 'S03', 'Ultra Stretch Color Jeans', 'men_pant1.jpg', 'Satin fabric with Ultra Stretch for a comfortable skinny fit. Made with finer yarns to achieve an elegant, glossy brushed texture. FABRIC DETAILS Body: 97% Cotton, 3% Spandex/ Pocket Lining: 65% Polyester, 35% Cotton', '129.90', 10),
(19, 'MP002', 'C002', 'T02', 'S04', 'Ultra Stretch Color Jeans', 'men_pant1.jpg', 'Satin fabric with Ultra Stretch for a comfortable skinny fit. Made with finer yarns to achieve an elegant, glossy brushed texture. FABRIC DETAILS Body: 97% Cotton, 3% Spandex/ Pocket Lining: 65% Polyester, 35% Cotton', '129.90', 10),
(20, 'MP003', 'C002', 'T02', 'S02', 'Ultra Stretch Color Jeans', 'men_pant2.jpg', '2-way stretch fabric for a comfortable fit. Tapered, ankle-length cut with a slim fit. Wrinkle-resistant for easy care. Shape to dry after washing. FABRIC DETAILS Body: 67% Polyester, 29% Rayon, 4% Spandex ( 62% Uses Recycled Polyester Fiber )/ Pocket Lining: 68% Polyester, 32% Cotton', '149.90', 10),
(21, 'MP003', 'C002', 'T02', 'S03', 'Smart Ankle Pants', 'men_pant2.jpg', '2-way stretch fabric for a comfortable fit. Tapered, ankle-length cut with a slim fit. Wrinkle-resistant for easy care. Shape to dry after washing. FABRIC DETAILS Body: 67% Polyester, 29% Rayon, 4% Spandex ( 62% Uses Recycled Polyester Fiber )/ Pocket Lining: 68% Polyester, 32% Cotton', '149.90', 10),
(22, 'MP003', 'C002', 'T02', 'S04', 'Smart Ankle Pants', 'men_pant2.jpg', '2-way stretch fabric for a comfortable fit. Tapered, ankle-length cut with a slim fit. Wrinkle-resistant for easy care. Shape to dry after washing. FABRIC DETAILS Body: 67% Polyester, 29% Rayon, 4% Spandex ( 62% Uses Recycled Polyester Fiber )/ Pocket Lining: 68% Polyester, 32% Cotton', '149.90', 10),
(23, 'MB001', 'C002', 'T07', 'S05', 'Leather Wide Mesh Belt', 'men_belt1.jpg', 'Hand woven from fine strips of leather for a distinctive look that cannot be replicated by machine. Mesh design fastens at any position. Vegetable tanned, so the feel and appearance of the leather improves over time. FABRIC DETAILS Genuine Leather', '99.90', 10),
(24, 'MB002', 'C002', 'T07', 'S05', 'Fashion Leather Belt', 'men_belt2.jpg', 'Its versatile brown color complements any outfit, making it the perfect accessory for any occasion. With its sleek design and adjustable buckle, it provides a comfortable and secure fit. The rich brown color adds a touch of warmth and versatility to any outfit. ', '49.90', 10),
(25, 'MB003', 'C002', 'T07', 'S05', 'Fashion Braided Belt', 'men_belt3.jpg', 'The dark blue color adds a touch of sophistication, making it suitable for both formal and casual occasions. The braided design adds a unique and trendy twist to the classic belt, making it a standout piece in your wardrobe. Made with high-quality materials, these braided belts are not only durable but also fashionable. ', '49.90', 10),
(26, 'MT001', 'C002', 'T04', 'S05', 'Line Casual Formal Business Tie', 'men_tie1.jpg', 'Necktie Length: 59.06 inches(150cm) Necktie Width: 3.35 inches(8.5cm) Pocket Square: 9.5inches*9.5inches(24CM*24CM)', '65.00', 10),
(27, 'MT002', 'C002', 'T04', 'S05', 'Stripes Casual Formal Business Tie', 'men_tie2.jpg', '100% Polyester Size ?146 * 8 * 3.5cm Dry Clean Only Every tie is handmade by skilled craftsmen to the highest standard possible Decades of neckwear designing, and crafting skills have been passed down to assure that every tie meets our quality requirements Suitable for all occasions, including weddings, dances, gifts, formal occasions, bridegroom gifts, festivals, churches, funerals, choirs, tuxedos, uniforms, school groups', '40.00', 10),
(28, 'MT003', 'C002', 'T04', 'S05', 'Square-designed Formal Business Tie', 'men_tie3.jpg', '100% Polyester Size ?146 * 8 * 3.5cm Dry Clean Only Every tie is handmade by skilled craftsmen to the highest standard possible Decades of neckwear designing, and crafting skills have been passed down to assure that every tie meets our quality requirements Suitable for all occasions, including weddings, dances, gifts, formal occasions, bridegroom gifts, festivals, churches, funerals, choirs, tuxedos, uniforms, school groups', '50.00', 10),
(29, 'MS001', 'C002', 'T05', 'S02', 'Sports Pile Block Short Socks', 'men_women_sock1.jpg', 'Odor control and deodorizing features. Quick-drying DRY technology. Instep guard creates a comfortable fit even when paired with low cut sneakers.FABRIC DETAILS 65% Polyester, 18% Nylon, 14% Cotton, 3% Spandex', '14.90', 10),
(30, 'MS001', 'C002', 'T05', 'S03', 'Sports Pile Block Short Socks', 'men_women_sock1.jpg', 'Odor control and deodorizing features. Quick-drying DRY technology. Instep guard creates a comfortable fit even when paired with low cut sneakers.FABRIC DETAILS 65% Polyester, 18% Nylon, 14% Cotton, 3% Spandex', '14.90', 10),
(31, 'MS002', 'C002', 'T05', 'S02', 'Pile Line Socks', 'men_sock1.jpg', 'Deodorizing feature keeps odors at bay. Accented with 2 colorful lines of differing thickness. Pile cushioned soles for comfort.FABRIC DETAILS 76% Cotton, 11% Nylon, 11% Polyester, 2% Spandex', '14.90', 10),
(32, 'MS002', 'C002', 'T05', 'S03', 'Pile Line Socks', 'men_sock1.jpg', 'Deodorizing feature keeps odors at bay. Accented with 2 colorful lines of differing thickness. Pile cushioned soles for comfort.FABRIC DETAILS 76% Cotton, 11% Nylon, 11% Polyester, 2% Spandex', '14.90', 10),
(33, 'MS003', 'C002', 'T05', 'S02', 'Striped Socks', 'men_sock2.jpg', 'Deodorizing feature keeps odors at bay. Regular length socks. Non-constrictive double-layer cuffs and a snug, secure fit at the heel.FABRIC DETAILS 65% Cotton, 31% Polyester, 3% Spandex, 1% Nylon', '14.90', 10),
(34, 'MS003', 'C002', 'T05', 'S03', 'Striped Socks', 'men_sock2.jpg', 'Deodorizing feature keeps odors at bay. Regular length socks. Non-constrictive double-layer cuffs and a snug, secure fit at the heel.FABRIC DETAILS 65% Cotton, 31% Polyester, 3% Spandex, 1% Nylon', '14.90', 10),
(35, 'MJ001', 'C002', 'T06', 'S02', 'Fleece Full-Zip Long Sleeve Jacket', 'men_women_jacket1.jpg', 'Lightweight, warm fleece. Made with cozy, high-density fleece. Machine-washable for easy care.FABRIC DETAILS Body: 100% Polyester ( 100% Uses Recycled Polyester Fiber )/ Pocket Lining: 100% Polyester ( 100% Uses Recycled Polyester Fiber )', '129.90', 10),
(36, 'MJ001', 'C002', 'T06', 'S03', 'Fleece Full-Zip Long Sleeve Jacket', 'men_women_jacket1.jpg', 'Lightweight, warm fleece. Made with cozy, high-density fleece. Machine-washable for easy care.FABRIC DETAILS Body: 100% Polyester ( 100% Uses Recycled Polyester Fiber )/ Pocket Lining: 100% Polyester ( 100% Uses Recycled Polyester Fiber )', '129.90', 10),
(37, 'MJ001', 'C002', 'T06', 'S04', 'Fleece Full-Zip Long Sleeve Jacket', 'men_women_jacket1.jpg', 'Lightweight, warm fleece. Made with cozy, high-density fleece. Machine-washable for easy care.FABRIC DETAILS Body: 100% Polyester ( 100% Uses Recycled Polyester Fiber )/ Pocket Lining: 100% Polyester ( 100% Uses Recycled Polyester Fiber )', '129.90', 10),
(38, 'MJ002', 'C002', 'T06', 'S02', 'Coach Jacket', 'men_jacket1.jpg', 'Matte fabric with a natural feel. Water-repellent finish.  Roomy fit. Versatile, simple design. FABRIC DETAILS Shell: 84% Polyester, 16% Cotton ( 50% Uses Recycled Polyester Fiber )/ Lining: 100% Polyester/ Pocket Lining: 100% Polyester', '149.90', 10),
(39, 'MJ002', 'C002', 'T06', 'S03', 'Coach Jacket', 'men_jacket1.jpg', 'Matte fabric with a natural feel. Water-repellent finish.  Roomy fit. Versatile, simple design. FABRIC DETAILS Shell: 84% Polyester, 16% Cotton ( 50% Uses Recycled Polyester Fiber )/ Lining: 100% Polyester/ Pocket Lining: 100% Polyester', '149.90', 10),
(40, 'MJ002', 'C002', 'T06', 'S04', 'Coach Jacket', 'men_jacket1.jpg', 'Matte fabric with a natural feel. Water-repellent finish.  Roomy fit. Versatile, simple design. FABRIC DETAILS Shell: 84% Polyester, 16% Cotton ( 50% Uses Recycled Polyester Fiber )/ Lining: 100% Polyester/ Pocket Lining: 100% Polyester', '149.90', 10),
(41, 'MJ003', 'C002', 'T06', 'S02', 'Volume Sleeve Cocoon Blouson', 'men_jacket2.jpg', '100% cotton. Cinched at the cuffs and hem to create a rounded, cocoon silhouette. Fully lined. Front fastens with buttons and a slide fastener.FABRIC DETAILS Shell: 100% Cotton/ Lining: 100% Cotton/ Pocket Lining: 100% Cotton', '149.90', 10),
(42, 'MJ003', 'C002', 'T06', 'S03', 'Volume Sleeve Cocoon Blouson', 'men_jacket2.jpg', '100% cotton. Cinched at the cuffs and hem to create a rounded, cocoon silhouette. Fully lined. Front fastens with buttons and a slide fastener.FABRIC DETAILS Shell: 100% Cotton/ Lining: 100% Cotton/ Pocket Lining: 100% Cotton', '149.90', 10),
(43, 'MJ003', 'C002', 'T06', 'S04', 'Volume Sleeve Cocoon Blouson', 'men_jacket2.jpg', '100% cotton. Cinched at the cuffs and hem to create a rounded, cocoon silhouette. Fully lined. Front fastens with buttons and a slide fastener.FABRIC DETAILS Shell: 100% Cotton/ Lining: 100% Cotton/ Pocket Lining: 100% Cotton', '149.90', 10),
(44, 'KC001', 'C003', 'T01', 'S01', 'Short Sleeve T-Shirt', 'kid_cloth1.jpg', 'Smooth AIRism fabric with the look of cotton. Combines performance and a casual style. Moderately roomy, relaxed fit. Color block raglan sleeves add a design accent.FABRIC DETAILS 54% Cotton, 46% Polyester', '39.90', 10),
(45, 'KC002', 'C003', 'T01', 'S01', 'DRY Pique Short Sleeve Polo Shirt', 'kid_cloth2.jpg', 'Soft fabric with a casual look. Quick-drying DRY technology. Back collar seam covered with tape for comfort.FABRIC DETAILS Body: 70% Cotton, 30% Polyester/ Rib: 55% Cotton, 45% Polyester\r\n', '49.90', 10),
(46, 'KC003', 'C003', 'T01', 'S01', 'Soft Brushed Striped Ling Sleeve T-Shirt ', 'kid_cloth3.jpg', 'The sumptuously soft feel of 100% brushed cotton. Comfy, relaxed cut. Back collar seam taped for comfort. FABRIC DETAILS 100% Cotton\r\n', '24.90', 10),
(47, 'KC004', 'C003', 'T01', 'S01', 'Short Sleeve Graphic T-Shirt', 'kid_cloth4.jpg', 'mofusand is an incredibly cute and slightly surreal cat illustration series. A new collection of adorable cats wearing hats resembling sea creatures is now available. This collection also features the very popular “SAMENYAN”. FABRIC DETAILS 100% Cotton\r\n', '39.90', 10),
(48, 'KP001', 'C003', 'T02', 'S01', 'Easy Shorts ', 'kid_pant1.jpg', '100% cotton-twill fabric ensures durability. To adjust the fit, pull the elastic waistband through the opening and button at the desired location. Roomy cut from the thighs to the hems for easy movement. FABRIC DETAILS Body: 100% Cotton/ Pocket Lining: 65% Polyester, 35% Cotton\r\n', '49.90', 10),
(49, 'KP002', 'C003', 'T02', 'S01', 'Ultra Stretch Soft Jeans', 'kid_pant2.jpg', 'Ultra stretch fabric for comfort and easy movement. Blended with rayon for added softness. To adjust the fit, pull elastic waistband through the opening and button as preferred. FABRIC DETAILS Body: 61% Cotton, 25% Polyester, 12% Rayon, 2% Spandex/ Pocket Lining: 80% Polyester, 20% Cotton\r\n', '99.90', 10),
(50, 'KP003', 'C003', 'T02', 'S01', 'Wide Fit Denim Jeans', 'kid_pant3.jpg', 'Made with stretch fabric for easy movement. Slide fastener at the waist. Adjustable waist. Relaxed wide-fitting jeans. FABRIC DETAILS Body: 74% Cotton, 24% Polyester, 2% Spandex/ Pocket Lining: 80% Polyester, 20% Cotton\r\n', '99.90', 10),
(51, 'KJ001', 'C003', 'T06', 'S01', 'Full-Zip Long Sleeve Jacket', 'kid_jacket1.jpg', 'Fluffy brushed fabric that is soft to the touch. Back collar seam covered with tape for comfort. Name label inside the left side. FABRIC DETAILS 100% Polyester ( 100% Uses Recycled Polyester Fiber )\r\n', '79.90', 10),
(52, 'KJ002', 'C003', 'T06', 'S01', ' Winter Hooded Down Coat Jacket', 'kid_jacket2.jpg', 'Fashion design,100% Brand New,high quality! Material:Cotton Blend Pattern Type:Solid\r\n', '116.00', 10),
(53, 'KJ003', 'C003', 'T06', 'S01', 'Winter Light Hooded Down Coat Jacket', 'kid_jacket3.jpg', 'Filling: White duck down Down Content: 90% Style: Casual Pattern Type: Solid Clothing Length: Regular\r\n', '141.00', 10),
(54, 'KD001', 'C003', 'T08', 'S05', 'Scruff Doll A Luvs Pastel Pets', 'kid_doll1.jpg', 'NEW Scruff-a-Luvs with with beautiful pastel colours! Will you discover a dog, cat or pony? Mystery Scruff-a-Luvs inside! Will you rescue a Dog, Cat or Pony? Wash them, dry them, reveal who they are, groom & love them forever! Discover accessories including a collar, tag & comb.\r\n', '99.90', 10),
(55, 'KD002', 'C003', 'T08', 'S05', 'Dino Soft Doll', 'kid_doll2.jpg', 'soft fabric, perfect for decoration, perfect travel companion\r\n', '59.90', 10),
(56, 'KD003', 'C003', 'T08', 'S05', 'Squishmallows 12 Inch Doll', 'kid_doll3.jpg', '6x to collect in 12 scale including Bluby , Beck , Marta , Dove , Connie , and Abbitt ! Rare Limited Edition! Super Soft to hug and squish! Highly collectable!\r\n', '83.50', 10),
(57, 'WC001', 'C001', 'T01', 'S02', 'Ribbed Crew Neck Long Sleeve T-Shirt', 'women_cloth1.jpg', 'Soft cotton-blend ribbed fabric with a premium feel. FABRIC DETAILS 57% Cotton, 39% Rayon, 4% Spandex.\r\n', '39.90', 10),
(58, 'WC001', 'C001', 'T01', 'S03', 'Ribbed Crew Neck Long Sleeve T-Shirt', 'women_cloth1.jpg', 'Soft cotton-blend ribbed fabric with a premium feel. FABRIC DETAILS 57% Cotton, 39% Rayon, 4% Spandex.\r\n', '39.90', 10),
(59, 'WC001', 'C001', 'T01', 'S04', 'Ribbed Crew Neck Long Sleeve T-Shirt', 'women_cloth1.jpg', 'Soft cotton-blend ribbed fabric with a premium feel. FABRIC DETAILS 57% Cotton, 39% Rayon, 4% Spandex.\r\n', '39.90', 10),
(60, 'WC002', 'C001', 'T01', 'S02', 'Women Long Sleeve Hoodies Sweatshirt', 'women_cloth2.jpg', 'Get cozy in style with our Women Long Sleeve Hoodies Sweatshirt! The long sleeves provide extra warmth, while the hood adds a trendy touch.\r\n', '69.90', 10),
(61, 'WC002', 'C001', 'T01', 'S03', 'Women Long Sleeve Hoodies Sweatshirt', 'women_cloth2.jpg', 'Get cozy in style with our Women Long Sleeve Hoodies Sweatshirt! The long sleeves provide extra warmth, while the hood adds a trendy touch.\r\n', '69.90', 10),
(62, 'WC002', 'C001', 'T01', 'S04', 'Women Long Sleeve Hoodies Sweatshirt', 'women_cloth2.jpg', 'Get cozy in style with our Women Long Sleeve Hoodies Sweatshirt! The long sleeves provide extra warmth, while the hood adds a trendy touch.\r\n', '69.90', 10),
(63, 'WC003', 'C001', 'T01', 'S02', 'Relaxed Silhouette Long Sleeve T-Shirt', 'women_cloth3.jpg', 'Smooth and comfortable 100% cotton. Statement design featuring a generous silhouette and a longer hem at the back. A versatile styling piece. FABRIC DETAILS 100% Cotton                          \r\n', '59.90', 10),
(64, 'WP001', 'C001', 'T02', 'S02', 'Wide Straight Jeans', 'women_pant1.jpg', 'Soft 100% cotton denim. 5-pocket design. High waist.  Slightly fitted at the hips with a wide, straight cut from the thighs to the hems. FABRIC DETAILS Body: 100% Cotton/ Pocket Lining: 65% Polyester, 35% Cotton\r\n', '129.90', 10),
(65, 'WP001', 'C001', 'T02', 'S03', 'Wide Straight Jeans', 'women_pant1.jpg', 'Soft 100% cotton denim. 5-pocket design. High waist.  Slightly fitted at the hips with a wide, straight cut from the thighs to the hems. FABRIC DETAILS Body: 100% Cotton/ Pocket Lining: 65% Polyester, 35% Cotton\r\n', '129.90', 10),
(66, 'WP001', 'C001', 'T02', 'S04', 'Wide Straight Jeans', 'women_pant1.jpg', 'Soft 100% cotton denim. 5-pocket design. High waist.  Slightly fitted at the hips with a wide, straight cut from the thighs to the hems. FABRIC DETAILS Body: 100% Cotton/ Pocket Lining: 65% Polyester, 35% Cotton\r\n', '129.90', 10),
(67, 'WP002', 'C001', 'T02', 'S02', 'Women Long Pants Cargo', 'women_pant2.jpg', 'Want pants that can hold ALL your snacks? Look no further! These cargo pants are so spacious, they re practically a buffet on legs! With pockets galore, you ll never lose your phone again\r\n', '79.90', 10),
(68, 'WP003', 'C001', 'T02', 'S02', 'Women Short Pants', 'women_pant3.jpg', 'Made with high-quality materials, these pants provide comfort and durability. Stay cool and confident all day long with the breathable fabric. The sleek black color adds a touch of sophistication to any outfit, making them versatile for both casual and dressy occasions.\r\n', '39.90', 10),
(69, 'WP003', 'C001', 'T02', 'S03', 'Women Short Pants', 'women_pant3.jpg', 'Made with high-quality materials, these pants provide comfort and durability. Stay cool and confident all day long with the breathable fabric. The sleek black color adds a touch of sophistication to any outfit, making them versatile for both casual and dressy occasions.\r\n', '39.90', 10),
(70, 'WP003', 'C001', 'T02', 'S04', 'Women Short Pants', 'women_pant3.jpg', 'Made with high-quality materials, these pants provide comfort and durability. Stay cool and confident all day long with the breathable fabric. The sleek black color adds a touch of sophistication to any outfit, making them versatile for both casual and dressy occasions.\r\n', '39.90', 10),
(71, 'WS001', 'C001', 'T03', 'S02', 'Crinkle Cotton Tiered Skirt', 'women_skirt1.jpg', 'Textured crepe fabric. Lightweight, semi-sheer fabric. With underskirt. Picot stitch design above the tiered section.FABRIC DETAILS Body: 100% Cotton/ Pocket Lining: 100% Polyester/ Petticoat: 100% Polyester\r\n', '129.90', 10),
(72, 'WS001', 'C001', 'T03', 'S03', 'Crinkle Cotton Tiered Skirt', 'women_skirt1.jpg', 'Textured crepe fabric. Lightweight, semi-sheer fabric. With underskirt. Picot stitch design above the tiered section.FABRIC DETAILS Body: 100% Cotton/ Pocket Lining: 100% Polyester/ Petticoat: 100% Polyester\r\n', '129.90', 10),
(73, 'WS001', 'C001', 'T03', 'S04', 'Crinkle Cotton Tiered Skirt', 'women_skirt1.jpg', 'Textured crepe fabric. Lightweight, semi-sheer fabric. With underskirt. Picot stitch design above the tiered section.FABRIC DETAILS Body: 100% Cotton/ Pocket Lining: 100% Polyester/ Petticoat: 100% Polyester\r\n', '129.90', 10),
(74, 'WS002', 'C001', 'T03', 'S02', 'Chiffon Skirt', 'women_skirt2.jpg', 'Airy, pleated fabric makes styling easy. Fully lined for confidence. Long length with an elastic waist for easy outfit changes.FABRIC DETAILS Shell: 100% Polyester ( 100% Uses Recycled Polyester Fiber )/ Lining: 100% Polyester ( 44% Uses Recycled Polyester Fiber )/ Elastic Part: 90% Polyester, 10% Spandex\r\n', '149.90', 10),
(75, 'WS002', 'C001', 'T03', 'S03', 'Chiffon Skirt', 'women_skirt2.jpg', 'Airy, pleated fabric makes styling easy. Fully lined for confidence. Long length with an elastic waist for easy outfit changes.FABRIC DETAILS Shell: 100% Polyester ( 100% Uses Recycled Polyester Fiber )/ Lining: 100% Polyester ( 44% Uses Recycled Polyester Fiber )/ Elastic Part: 90% Polyester, 10% Spandex\r\n', '149.90', 10),
(76, 'WS002', 'C001', 'T03', 'S04', 'Chiffon Skirt', 'women_skirt2.jpg', 'Airy, pleated fabric makes styling easy. Fully lined for confidence. Long length with an elastic waist for easy outfit changes.FABRIC DETAILS Shell: 100% Polyester ( 100% Uses Recycled Polyester Fiber )/ Lining: 100% Polyester ( 44% Uses Recycled Polyester Fiber )/ Elastic Part: 90% Polyester, 10% Spandex\r\n', '149.90', 10),
(77, 'WS001', 'C001', 'T03', 'S02', 'Volume Sleeve Dress', 'women_skirt3.jpg', 'Smock stitching at the waist for a comfortable fit. Gathered neck with tie ribbon. 100% cotton poplin fabric.FABRIC DETAILS Body: 100% Cotton/ Pocket Lining: Outer Layer: 100% Polyester/ Pocket Lining: Inner Layer: 100% Cotton/ Petticoat: 100% Polyester\r\n', '179.90', 10),
(78, 'WS003', 'C001', 'T03', 'S03', 'Volume Sleeve Dress', 'women_skirt3.jpg', 'Smock stitching at the waist for a comfortable fit. Gathered neck with tie ribbon. 100% cotton poplin fabric.FABRIC DETAILS Body: 100% Cotton/ Pocket Lining: Outer Layer: 100% Polyester/ Pocket Lining: Inner Layer: 100% Cotton/ Petticoat: 100% Polyester\r\n', '179.90', 10),
(79, 'WS003', 'C001', 'T03', 'S04', 'Volume Sleeve Dress', 'women_skirt3.jpg', 'Smock stitching at the waist for a comfortable fit. Gathered neck with tie ribbon. 100% cotton poplin fabric.FABRIC DETAILS Body: 100% Cotton/ Pocket Lining: Outer Layer: 100% Polyester/ Pocket Lining: Inner Layer: 100% Cotton/ Petticoat: 100% Polyester\r\n', '179.90', 10),
(80, 'WT001', 'C001', 'T04', 'S05', 'Bowknot Bow Tie', 'women_tie1.jpg', 'Make your work day more fun and stylish with our new Bowknot Collection! A must have in your wardrobe essentials! Wear it casually with your chambray shirt!  Elastic and adjustable strap with easy to use clip on. One size fits most! Strap extender also available.\r\n', '60.00', 10),
(81, 'WT002', 'C001', 'T04', 'S05', 'Ribbon Bow Tie', 'women_tie2.jpg', 'Bow Tie Made of high quality fabric, thick and durable enough to withstand daily wear and tear, the vibrant ties come in a variety of bright, eye catching colors and glossy satin finishes that make them truly stand out. Neckties have two different ways of wearing, which are suitable for different groups of people. There are two ways of pins and adjustment straps, which will bring you a different wearing experience.\r\n', '30.00', 10),
(82, 'WT003', 'C001', 'T04', 'S05', 'Tie Ribbon Brooch Decoration Clip', 'women_tie3.jpg', 'Retro neckties decorated, silky ribbon bowknot design, skin friendly, lightweight, comfortable and beautiful, easy to use. Perfect for wedding, evening party, banquet and other formal occasions. will change the more elegant and lovely.\r\n', '40.00', 10),
(83, 'WK001', 'C001', 'T05', 'S02', 'Right Angle 3 Layer Loose Top Socks', 'women_sock1.jpg', 'Colour transfer of dark-coloured products may occur during use due to friction and when handling while wet. Wash separately. Discolouration may be caused by direct sunlight or fluorescent light. COTTON83% NYLON14% ELASTANE (UK)/SPANDEX (US)3%\r\n', '14.90', 10),
(84, 'WK001', 'C001', 'T05', 'S03', 'Right Angle 3 Layer Loose Top Socks', 'women_sock1.jpg', 'Colour transfer of dark-coloured products may occur during use due to friction and when handling while wet. Wash separately. Discolouration may be caused by direct sunlight or fluorescent light. COTTON83% NYLON14% ELASTANE (UK)/SPANDEX (US)3%\r\n', '14.90', 10),
(85, 'WK002', 'C001', 'T05', 'S02', 'Low Cut Footsies', 'women_sock2.jpg', 'Sheer material and a low cut that stays hidden even under pumps. Non-slip grips on the heels. FABRIC DETAILS This item ships with one of the below options. Note that you cannot specify a preference at this time. 469797: 49% Cotton, 42% Nylon, 5% Polyester, 4% Spandex; 460456: 50% Cotton, 40% Nylon, 5% Polyester, 5% Spandex\r\n', '39.90', 10),
(86, 'WK002', 'C001', 'T05', 'S03', 'Low Cut Footsies', 'women_sock2.jpg', 'Sheer material and a low cut that stays hidden even under pumps. Non-slip grips on the heels. FABRIC DETAILS This item ships with one of the below options. Note that you cannot specify a preference at this time. 469797: 49% Cotton, 42% Nylon, 5% Polyester, 4% Spandex; 460456: 50% Cotton, 40% Nylon, 5% Polyester, 5% Spandex\r\n', '39.90', 10),
(87, 'WK003', 'C001', 'T05', 'S02', 'Low Cut Socks', 'women_sock3.jpg', 'Special deodorizing threads neutralize and control odors. Deodorizing performance built into the threads, so the effect lasts even after repeated washing. Breathable mesh instep. FABRIC DETAILS 71% Cotton, 25% Polyester, 3% Spandex, 1% Nylon\r\n', '14.90', 10),
(88, 'WK003', 'C001', 'T05', 'S03', 'Low Cut Socks', 'women_sock3.jpg', 'Special deodorizing threads neutralize and control odors. Deodorizing performance built into the threads, so the effect lasts even after repeated washing. Breathable mesh instep. FABRIC DETAILS 71% Cotton, 25% Polyester, 3% Spandex, 1% Nylon\r\n', '14.90', 10),
(89, 'WJ001', 'C001', 'T06', 'S02', 'Full-Zip Regular Fit Long Sleeve Jacket', 'women_jacket1.jpg', 'Airy, fluffy fleece. Lightweight, warm fleece. Machine-washable for easy care. Versatile, relaxed cut. FABRIC DETAILS Body: Pocket Lining: 100% Polyester ( 100% Uses Recycled Polyester Fiber )\r\n', '129.90', 10),
(90, 'WJ001', 'C001', 'T06', 'S03', 'Full-Zip Regular Fit Long Sleeve Jacket', 'women_jacket1.jpg', 'Airy, fluffy fleece. Lightweight, warm fleece. Machine-washable for easy care. Versatile, relaxed cut. FABRIC DETAILS Body: Pocket Lining: 100% Polyester ( 100% Uses Recycled Polyester Fiber )\r\n', '129.90', 10),
(91, 'WJ001', 'C001', 'T06', 'S04', 'Full-Zip Regular Fit Long Sleeve Jacket', 'women_jacket1.jpg', 'Airy, fluffy fleece. Lightweight, warm fleece. Machine-washable for easy care. Versatile, relaxed cut. FABRIC DETAILS Body: Pocket Lining: 100% Polyester ( 100% Uses Recycled Polyester Fiber )\r\n', '129.90', 10),
(92, 'WJ002', 'C001', 'T06', 'S02', 'Ultra Light Down Jacket', 'women_jacket2.jpg', 'Made with ultra fine yarns for incredible lightness. Warm premium down with a fill power of 750*. *Measured by the IDFB method Specially constructed without down packing for an ultra light weight.FABRIC DETAILS Face: 100% Nylon/ Filling: 90% Down, 10% Waterfowl Feathers/ Back: 100% Nylon/ Pocket Lining: 100% Polyester\r\n', '299.90', 10),
(93, 'WJ002', 'C001', 'T06', 'S03', 'Ultra Light Down Jacket', 'women_jacket2.jpg', 'Made with ultra fine yarns for incredible lightness. Warm premium down with a fill power of 750*. *Measured by the IDFB method Specially constructed without down packing for an ultra light weight.FABRIC DETAILS Face: 100% Nylon/ Filling: 90% Down, 10% Waterfowl Feathers/ Back: 100% Nylon/ Pocket Lining: 100% Polyester\r\n', '299.90', 10),
(94, 'WJ002', 'C001', 'T06', 'S04', 'Ultra Light Down Jacket', 'women_jacket2.jpg', 'Made with ultra fine yarns for incredible lightness. Warm premium down with a fill power of 750*. *Measured by the IDFB method Specially constructed without down packing for an ultra light weight.FABRIC DETAILS Face: 100% Nylon/ Filling: 90% Down, 10% Waterfowl Feathers/ Back: 100% Nylon/ Pocket Lining: 100% Polyester\r\n', '299.90', 10),
(95, 'WJ003', 'C001', 'T06', 'S02', 'Jersey Relaxed Jacket', 'women_jacket3.jpg', 'Soft jersey fabric with a distinctive woven look. Versatile, casual design. Relaxed, boxy cut for easy layering. FABRIC DETAILS [09 BLACK, 30 NATURAL, 31 BEIGE, 53 GREEN] 47% Polyester, 46% Cotton, 7% Spandex ( 47% Uses Recycled Polyester Fiber ) [62 BLUE] 43% Cotton, 38% Nylon, 19% Spandex\r\n', '129.90', 10),
(96, 'WJ003', 'C001', 'T06', 'S03', 'Jersey Relaxed Jacket', 'women_jacket3.jpg', 'Soft jersey fabric with a distinctive woven look. Versatile, casual design. Relaxed, boxy cut for easy layering. FABRIC DETAILS [09 BLACK, 30 NATURAL, 31 BEIGE, 53 GREEN] 47% Polyester, 46% Cotton, 7% Spandex ( 47% Uses Recycled Polyester Fiber ) [62 BLUE] 43% Cotton, 38% Nylon, 19% Spandex\r\n', '129.90', 10),
(97, 'WJ003', 'C001', 'T06', 'S04', 'Jersey Relaxed Jacket', 'women_jacket3.jpg', 'Soft jersey fabric with a distinctive woven look. Versatile, casual design. Relaxed, boxy cut for easy layering. FABRIC DETAILS [09 BLACK, 30 NATURAL, 31 BEIGE, 53 GREEN] 47% Polyester, 46% Cotton, 7% Spandex ( 47% Uses Recycled Polyester Fiber ) [62 BLUE] 43% Cotton, 38% Nylon, 19% Spandex\r\n', '129.90', 10);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `ratenumber` int(5) NOT NULL,
  `Cus_id` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`ratenumber`, `Cus_id`, `rate`, `comment`) VALUES
(1, 1, 5, 'It is the best shopping website.\r\n'),
(2, 10, 3, 'Overall is good but the product is expensive.\r\n'),
(3, 2, 4, 'It is very clear for me to shop.\r\n'),
(4, 3, 3, 'Have a good decoration but also have improvement.\r\n'),
(5, 4, 5, 'Very good.\r\n'),
(6, 5, 4, 'I can buy the product easily.\r\n'),
(7, 6, 5, 'Giving the simple and full information of the product.\r\n'),
(8, 7, 5, 'I can easily change my profile information.\r\n'),
(9, 8, 4, 'Having a good experience.\r\n'),
(10, 9, 5, 'Nice main page.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `sizeid` varchar(10) NOT NULL,
  `sizename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`sizeid`, `sizename`) VALUES
('S01', 'XS'),
('S02', 'S'),
('S03', 'M'),
('S04', 'L'),
('S05', 'No size');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `St_ID` int(5) NOT NULL,
  `St_Name` varchar(100) NOT NULL,
  `St_password` varchar(100) NOT NULL,
  `St_phonenumber` varchar(10) NOT NULL,
  `St_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`St_ID`, `St_Name`, `St_password`, `St_phonenumber`, `St_email`) VALUES
(1, 'Wei Yang', '12345678', '0176265223', 'weiyang@gmail.com'),
(2, 'Kenneth', '12212085', '0149403937', 'kenneth@gmail.com'),
(3, 'Zheng Wei', '23487348', '0182291312', 'zhengwei@gmail.com'),
(4, 'Ben', '12345455', '0196825462', 'ben@gmail.com'),
(5, 'Siti', '77575675', '0158462144', 'siti@gmail.com'),
(6, 'Wei Yu', '64543535', '0102222654', 'weiyu@gmail.com'),
(7, 'Roy', '35453534', '0176262012', 'roy@gmail.com'),
(8, 'Ryan', '67577577', '0143114987', 'ryan@gmail.com'),
(9, 'Ali', '89878644', '0163245815', 'ali@gmail.com'),
(10, 'Mutu', '95234243', '0129873513', 'mutu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `totalprofit`
--

CREATE TABLE `totalprofit` (
  `noprofit` int(5) DEFAULT NULL,
  `totalprice` decimal(10,2) DEFAULT NULL,
  `day` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `totalprofit`
--

INSERT INTO `totalprofit` (`noprofit`, `totalprice`, `day`) VALUES
(1, '329.70', '2024-07-05 17:31:00'),
(2, '259.50', '2024-07-05 17:37:29'),
(3, '179.90', '2024-07-05 17:41:13'),
(4, '149.90', '2024-07-05 17:45:06'),
(5, '143.40', '2024-07-05 17:47:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `Cus_ID` (`Cus_ID`),
  ADD KEY `sizeid` (`sizeid`),
  ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `category2`
--
ALTER TABLE `category2`
  ADD PRIMARY KEY (`category2id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `Cus_ID` (`Cus_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cus_ID`);

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`orderitemid`),
  ADD KEY `orderid` (`orderid`),
  ADD KEY `sizeid` (`sizeid`),
  ADD KEY `Cus_ID` (`Cus_ID`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `Cus_ID` (`Cus_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_number`),
  ADD KEY `categoryid` (`categoryid`),
  ADD KEY `sizeid` (`sizeid`),
  ADD KEY `category2id` (`category2id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`ratenumber`),
  ADD KEY `Cus_id` (`Cus_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`sizeid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`St_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Cus_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `orderitemid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_number` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `ratenumber` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `St_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`Cus_ID`) REFERENCES `customer` (`Cus_ID`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`sizeid`) REFERENCES `size` (`sizeid`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`categoryid`) REFERENCES `category` (`categoryid`);

--
-- Constraints for table `contactus`
--
ALTER TABLE `contactus`
  ADD CONSTRAINT `contactus_ibfk_1` FOREIGN KEY (`Cus_ID`) REFERENCES `customer` (`Cus_ID`);

--
-- Constraints for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD CONSTRAINT `orderitem_ibfk_1` FOREIGN KEY (`orderid`) REFERENCES `ordertable` (`orderid`),
  ADD CONSTRAINT `orderitem_ibfk_2` FOREIGN KEY (`sizeid`) REFERENCES `size` (`sizeid`),
  ADD CONSTRAINT `orderitem_ibfk_3` FOREIGN KEY (`Cus_ID`) REFERENCES `customer` (`Cus_ID`);

--
-- Constraints for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD CONSTRAINT `ordertable_ibfk_1` FOREIGN KEY (`Cus_ID`) REFERENCES `customer` (`Cus_ID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `category` (`categoryid`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`sizeid`) REFERENCES `size` (`sizeid`),
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`category2id`) REFERENCES `category2` (`category2id`);

--
-- Constraints for table `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`Cus_id`) REFERENCES `customer` (`Cus_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
