-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 06:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `newproducut`
--

CREATE TABLE `newproducut` (
  `phoneName` varchar(100) NOT NULL,
  `phonePrice` int(6) NOT NULL,
  `imageLink` varchar(100) NOT NULL,
  `ProductId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newproducut`
--

INSERT INTO `newproducut` (`phoneName`, `phonePrice`, `imageLink`, `ProductId`) VALUES
('phone 1', 12000, 'https://picsum.photos/200/300', 7),
('phone 1', 12000, 'https://picsum.photos/200/300', 8),
('phone 1', 12000, 'https://picsum.photos/200/300', 9);

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `phId` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `dep` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `thumbnail` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`phId`, `title`, `dep`, `price`, `thumbnail`) VALUES
(1, 'iPhone 9', 'An apple mobile which is nothing like apple', 549, 'https://i.dummyjson.com/data/products/1/thumbnail.jpg'),
(2, 'iPhone X', 'SIM-Free, Model A19211 6.5-inch Super Retina HD display with OLED technology A12 Bionic chip with ...', 899, 'https://i.dummyjson.com/data/products/2/thumbnail.jpg'),
(3, 'Orange Essence Food Flavou', 'Specifications of Orange Essence Food Flavour For Cakes and Baking Food Item', 14, 'https://i.dummyjson.com/data/products/23/thumbnail.jpg'),
(4, 'cereals muesli fruit nuts', 'original fauji cereal muesli 250gm box pack original fauji cereals muesli fruit nuts flakes breakfast cereal break fast faujicereals cerels cerel foji fouji', 46, 'https://i.dummyjson.com/data/products/24/thumbnail.jpg'),
(5, 'Gulab Powder 50 Gram', 'Dry Rose Flower Powder Gulab Powder 50 Gram • Treats Wounds', 70, 'https://i.dummyjson.com/data/products/25/thumbnail.jpg'),
(6, 'Plant Hanger For Home', 'Boho Decor Plant Hanger For Home Wall Decoration Macrame Wall Hanging Shelf', 41, 'https://i.dummyjson.com/data/products/26/thumbnail.jpg'),
(7, 'Flying Wooden Bird', 'Package Include 6 Birds with Adhesive Tape Shape: 3D Shaped Wooden Birds Material: Wooden MDF, Laminated 3.5mm', 51, 'https://i.dummyjson.com/data/products/27/thumbnail.webp'),
(8, '3D Embellishment Art Lamp', '3D led lamp sticker Wall sticker 3d wall art light on/off button  cell operated (included)', 20, 'https://i.dummyjson.com/data/products/28/thumbnail.jpg'),
(9, 'Handcraft Chinese style', 'Handcraft Chinese style art luxury palace hotel villa mansion home decor ceramic vase with brass fruit plate', 60, 'https://i.dummyjson.com/data/products/29/thumbnail.webp'),
(29, 'HP Pavilion 15-DK1056WM', 'HP Pavilion 15-DK1056WM Gaming Laptop 10th Gen Core i5, 8GB, 256GB SSD, GTX 1650 4GB, Windows 10', 1099, 'https://i.dummyjson.com/data/products/10/thumbnail.jpeg'),
(30, 'perfume Oil', 'Mega Discount, Impression of Acqua Di Gio by GiorgioArmani concentrated attar perfume Oil', 13, 'https://i.dummyjson.com/data/products/11/thumbnail.jpg'),
(31, 'Brown Perfume', 'Royal_Mirage Sport Brown Perfume for Men & Women - 120ml', 40, 'https://i.dummyjson.com/data/products/12/thumbnail.jpg'),
(32, 'Fog Scent Xpressio Perfume', 'Product details of Best Fog Scent Xpressio Perfume 100ml For Men cool long lasting perfumes for Men', 13, 'https://i.dummyjson.com/data/products/13/thumbnail.webp'),
(33, 'Non-Alcoholic Concentrated Perfume Oil', 'Original Al Munakh® by Mahal Al Musk | Our Impression of Climate | 6ml Non-Alcoholic Concentrated Perfume Oil', 120, 'https://i.dummyjson.com/data/products/14/thumbnail.jpg'),
(34, 'Eau De Perfume Spray', 'Genuine  Al-Rehab spray perfume from UAE/Saudi Arabia/Yemen High Quality', 30, 'https://i.dummyjson.com/data/products/15/thumbnail.jpg'),
(35, 'Tree Oil 30ml', 'Tea tree oil contains a number of compounds, including terpinen-4-ol, that have been shown to kill certain bacteria,', 12, 'https://i.dummyjson.com/data/products/17/thumbnail.jpg'),
(36, 'Oil Free Moisturizer 100ml', 'Dermive Oil Free Moisturizer with SPF 20 is specifically formulated with ceramides, hyaluronic acid & sunscreen.', 40, 'https://i.dummyjson.com/data/products/18/thumbnail.jpg'),
(37, 'Skin Beauty Serum.', 'Product name: rorec collagen hyaluronic acid white face serum riceNet weight: 15 m', 46, 'https://i.dummyjson.com/data/products/19/thumbnail.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `UserID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`UserName`, `Password`, `UserID`) VALUES
('testUser', '123', 127),
('123444', 'asdasdas', 128);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newproducut`
--
ALTER TABLE `newproducut`
  ADD PRIMARY KEY (`ProductId`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`phId`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newproducut`
--
ALTER TABLE `newproducut`
  MODIFY `ProductId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
  MODIFY `phId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `UserID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
