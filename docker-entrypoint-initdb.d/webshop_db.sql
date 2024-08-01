-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Generation Time: Aug 01, 2024 at 08:40 PM
-- Server version: 11.2.2-MariaDB-1:11.2.2+maria~ubu2204
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Phones'),
(2, 'Laptops'),
(3, 'TVs'),
(4, 'VR');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(1000) NOT NULL,
  `onsale` tinyint(1) NOT NULL,
  `newprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `image`, `onsale`, `newprice`) VALUES
(1, 'Test', '', 15.25, 'https://letsenhance.io/static/8f5e523ee6b2479e26ecc91b9c25261e/1015f/MainAfter.jpg', 0, 0),
(2, 'Test 1', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum harum obcaecati laboriosam tenetur. Nihil pariatur voluptates odio quasi quaerat animi delectus aut est id facilis velit rerum debitis veniam ab aspernatur reiciendis, adipisci, at expedita optio! Tenetur alias laborum corrupti architecto voluptatem sint repellat hic accusantium voluptatum. Doloremque reprehenderit nam soluta repellat architecto. Omnis fugit vel', 15.25, 'https://media.macphun.com/img/uploads/customer/how-to/608/15542038745ca344e267fb80.28757312.jpg?q=85&w=1340', 1, 12),
(3, 'Test 2', '', 15.25, 'https://letsenhance.io/static/8f5e523ee6b2479e26ecc91b9c25261e/1015f/MainAfter.jpg', 1, 0),
(4, 'product', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum harum obcaecati laboriosam tenetur. Nihil pariatur voluptates odio quasi quaerat animi delectus aut est id facilis velit rerum debitis veniam ab aspernatur reiciendis, adipisci, at expedita optio! Tenetur alias laborum corrupti architecto voluptatem sint repellat hic accusantium voluptatum. Doloremque reprehenderit nam soluta repellat architecto. Omnis fugit vel ', 123, 'https://letsenhance.io/static/8f5e523ee6b2479e26ecc91b9c25261e/1015f/MainAfter.jpg', 1, 0),
(5, 'product', '', 123, 'https://letsenhance.io/static/8f5e523ee6b2479e26ecc91b9c25261e/1015f/MainAfter.jpg', 0, 0),
(6, 'Handmade Pipe Bomb', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum harum obcaecati laboriosam tenetur. Nihil pariatur voluptates odio quasi quaerat animi delectus aut est id facilis velit rerum debitis veniam ab aspernatur reiciendis, adipisci, at expedita optio! Tenetur alias laborum corrupti architecto voluptatem sint repellat hic accusantium voluptatum. Doloremque reprehenderit nam soluta repellat architecto. Omnis fugit vel', 40, 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9b/Flickr_-_Israel_Defense_Forces_-_14_Year_Old_Palestinian_Stopped_with_Pipe_Bomb.jpg/1280px-Flickr_-_Israel_Defense_Forces_-_14_Year_Old_Palestinian_Stopped_with_Pipe_Bomb.jpg', 1, 30);

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE `productcategory` (
  `productid` int(11) DEFAULT NULL,
  `categoryid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productcategory`
--

INSERT INTO `productcategory` (`productid`, `categoryid`) VALUES
(1, 1),
(2, 2),
(3, 1),
(4, 3),
(5, 4),
(6, 1),
(1, 1),
(2, 2),
(3, 2),
(5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `author` varchar(30) NOT NULL,
  `content` varchar(200) NOT NULL,
  `pfp` varchar(200) NOT NULL,
  `rating` float NOT NULL,
  `productid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `author`, `content`, `pfp`, `rating`, `productid`) VALUES
(1, 'Liam', 'This product is amazing!!', 'https://static.tvtropes.org/pmwiki/pub/images/the_two_faces_of_squidward.png', 4, 2),
(2, 'Liam', 'This product is amazing!!', 'https://static.tvtropes.org/pmwiki/pub/images/the_two_faces_of_squidward.png', 4.5, 2),
(3, 'Liam', 'This product is amazing!!', 'https://static.tvtropes.org/pmwiki/pub/images/the_two_faces_of_squidward.png', 5, 2),
(4, 'Liam', 'This product is amazing!!', 'https://static.tvtropes.org/pmwiki/pub/images/the_two_faces_of_squidward.png', 2.5, 2),
(5, 'Liam', 'This product is amazing!!', 'https://static.tvtropes.org/pmwiki/pub/images/the_two_faces_of_squidward.png', 1.5, 2),
(6, 'Liam', 'This product is amazing!!', 'https://static.tvtropes.org/pmwiki/pub/images/the_two_faces_of_squidward.png', 5, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD KEY `productid` (`productid`),
  ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productid` (`productid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD CONSTRAINT `productcategory_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `productcategory_ibfk_2` FOREIGN KEY (`categoryid`) REFERENCES `category` (`id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
