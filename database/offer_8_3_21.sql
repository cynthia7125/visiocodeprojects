-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 02:22 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `offer`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `Item_ID` int(11) NOT NULL,
  `Item_category_ID` int(11) NOT NULL,
  `Offer_ID` int(11) NOT NULL,
  `Item_name` varchar(45) NOT NULL,
  `Item_description` varchar(45) NOT NULL,
  `Original_unit_cost` double NOT NULL,
  `Item_unit_cost` double NOT NULL,
  `Saved_percentage` double NOT NULL,
  `Item_quantity_in_stock` double NOT NULL,
  `Item_image` varchar(45) NOT NULL,
  `activation` varchar(45) NOT NULL DEFAULT '1',
  `enddate` timestamp(5) NOT NULL DEFAULT current_timestamp(5) ON UPDATE current_timestamp(5),
  `created` timestamp(5) NOT NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Item_ID`, `Item_category_ID`, `Offer_ID`, `Item_name`, `Item_description`, `Original_unit_cost`, `Item_unit_cost`, `Saved_percentage`, `Item_quantity_in_stock`, `Item_image`, `activation`, `enddate`, `created`) VALUES
(1, 1, 1, 'Asus laptop', '64GB laptop 8GB Ram', 60000, 55000, 9.09, 30, 'asus.png', '1', '2021-04-27 14:15:44.65453', '2020-01-09 21:00:00.00000'),
(11, 8, 10, 'Duckhorn Vineyards', 'Merlot 2011', 1200, 1060, 13.21, 57, 'Duckhorn.jpg', '1', '2021-04-27 14:15:44.65453', '2020-01-27 21:00:00.00000'),
(12, 2, 10, 'badroom set', ' bedroom furniture', 28000, 22600, 23.89, 13, 'bedroom set.jpg', '1', '2021-04-27 14:15:44.65453', '2020-02-13 21:00:00.00000'),
(13, 2, 11, 'office', 'office furniture', 34000, 30200, 12.58, 16, 'office set.jpg', '1', '2021-04-27 14:15:44.65453', '2020-03-20 21:00:00.00000'),
(14, 2, 14, 'dinning', 'dinning furniture', 20000, 15400, 29.87, 44, 'dinning set.jpg', '1', '2021-04-27 14:15:44.65453', '2020-03-25 21:00:00.00000'),
(15, 11, 21, 'sugar', 'bakery', 112, 101, 10.89, 456, 'kabras.jpg', '1', '2021-04-27 14:15:44.65453', '2020-03-25 21:00:00.00000'),
(16, 7, 10, 'famila', 'porriage flour', 142, 120, 18.33, 123, 'famila.jpg', '1', '2021-04-27 14:15:44.65453', '2020-04-03 21:00:00.00000'),
(17, 6, 13, 'weetabix', 'breakfast cereal', 459, 364, 26.1, 243, 'weetabix.jpg', '1', '2021-04-27 14:15:44.65453', '2020-04-03 21:00:00.00000'),
(18, 5, 17, 'tooth brush', 'tooth brush', 449, 399, 12.53, 222, 'toothB.jpg', '1', '2021-04-27 14:15:44.65453', '2020-04-04 21:00:00.00000'),
(19, 8, 16, 'Riunite', 'wine', 1499, 1349, 11.12, 45, 'toothB.jpg', '1', '2021-04-27 14:15:44.65453', '2020-04-16 21:00:00.00000'),
(20, 3, 14, 'Sunlight', 'Washing powder', 366, 314, 16.56, 456, 'sunlight.jpg', '1', '2021-04-27 14:15:44.65453', '2020-04-17 21:00:00.00000'),
(21, 7, 11, 'jogoo', 'Maize flour', 121, 100, 21, 656, 'jogoo.jpg', '1', '2021-04-27 14:15:44.65453', '2020-04-19 21:00:00.00000'),
(22, 12, 12, 'Mwea Rice', 'Packed rice', 200, 166, 20.48, 432, 'mwea pearl rice.jpg', '1', '2021-04-27 14:15:44.65453', '2020-06-22 21:00:00.00000'),
(23, 9, 21, 'berries', 'fruits', 250, 199, 25.63, 65, 'berries.jpg', '1', '2021-04-27 14:15:44.65453', '2020-07-12 21:00:00.00000'),
(24, 9, 23, 'Apples', 'fruits', 150, 119, 26.05, 130, 'apples choice.jpg', '1', '2021-04-27 14:15:44.65453', '2020-08-31 21:00:00.00000'),
(25, 9, 17, 'oranges', 'fruits', 259, 230, 12.61, 212, 'oranges.jpg', '1', '2021-04-27 14:15:44.65453', '2020-10-20 21:00:00.00000'),
(26, 10, 15, 'Nuts cake', 'cake', 749, 630, 18.89, 6, 'cake.jpg', '1', '2021-04-27 14:15:44.65453', '2020-11-30 21:00:00.00000'),
(27, 5, 11, 'Tissue paper', '10 roles of tissue', 319, 288, 10.38, 491, 'T-Paper.jpg', '1', '2021-08-01 08:05:50.41592', '2020-12-11 21:00:00.00000'),
(28, 2, 20, 'Book Shelf', 'A book shelf ', 34600, 31999, 8.13, 23, 'book shelf.jpg', '1', '2021-04-27 14:15:44.65453', '2021-01-01 21:00:00.00000'),
(29, 1, 16, 'Android', 'Blackberry', 30000, 28000, 7.14, 27, 'Android.jpg', '1', '2021-08-01 08:10:09.12693', '2021-01-22 21:00:00.00000'),
(30, 10, 16, 'bananas', 'yellow fruit', 300, 270, 11.11, 200, 'bananas.jpg', '1', '2021-04-27 14:15:44.65453', '2021-01-22 21:00:00.00000'),
(31, 9, 11, 'Berries', 'berries', 400, 330, 21.21, 20, 'berries.jpg', '1', '2021-04-27 14:15:44.65453', '2021-01-22 21:00:00.00000'),
(32, 3, 11, 'Dove soap', 'Bathing soap', 379, 300, 26.33, 200, 'dove.jpg', '2', '2021-04-27 14:15:44.65453', '2021-01-27 21:00:00.00000'),
(33, 1, 20, 'blender', 'blending machine', 12000, 11100, 8.11, 20, 'blender.jpg', '1', '2021-04-27 14:15:44.65453', '2021-01-27 21:00:00.00000'),
(34, 3, 11, 'genteel', 'genteel detergent', 540, 400, 35, 200, 'genteel.jpg', '1', '2021-05-18 15:09:17.27571', '2021-01-27 21:00:00.00000');

--
-- Triggers `item`
--
DELIMITER $$
CREATE TRIGGER `Item_offer_enddate` AFTER INSERT ON `item` FOR EACH ROW BEGIN
	INSERT INTO item(enddate) SELECT x.enddate FROM (SELECT item.created as created, offers.Offer_duration as duration, DATE_ADD(item.created, INTERVAL offers.Offer_duration DAY) as enddate FROM item LEFT JOIN offers ON item.Offer_ID = offers.Offer_ID )x;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trig_Saved_Percentage` BEFORE INSERT ON `item` FOR EACH ROW BEGIN
SET 
		new.Saved_percentage = round(((new.Original_unit_cost - new.Item_unit_cost) * 100 ) / new.Item_unit_cost, 2);

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `item_category`
--

CREATE TABLE `item_category` (
  `Item_category_ID` int(11) NOT NULL,
  `Item_category_name` varchar(45) NOT NULL,
  `Item_category_description` varchar(45) NOT NULL,
  `activation` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_category`
--

INSERT INTO `item_category` (`Item_category_ID`, `Item_category_name`, `Item_category_description`, `activation`) VALUES
(1, 'Electronics', 'Appliances that run on electricity', 1),
(2, 'Furniture', 'Wood products', 1),
(3, 'Detergents', 'Washing materials', 1),
(4, 'Stationery', 'Office material  ', 1),
(5, 'Toiletries', 'Personal heygine products', 2),
(6, 'Breakfast Cereals', 'Grained foods ', 1),
(7, 'Flour', 'Cooking flour', 1),
(8, 'Wines and spirits', 'Alcoholic Drinks  ', 1),
(9, 'Groceries', ' Fruits and vegetables', 1),
(10, 'Pastries', 'Bakers confectionery ', 1),
(11, 'Backing goods', ' Dry ingredients ', 1),
(12, 'Grain Cereal', 'cooking grains like beans ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notifications_ID` int(11) NOT NULL,
  `Supermarket_ID` int(11) DEFAULT 0,
  `user_ID` int(11) DEFAULT 0,
  `item_ID` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `Offer_ID` int(11) NOT NULL,
  `Supermarket_ID` int(11) NOT NULL,
  `Offer_name` varchar(50) NOT NULL,
  `Offer_duration` varchar(50) NOT NULL DEFAULT '0',
  `activation` int(11) NOT NULL DEFAULT 1,
  `created` timestamp(5) NOT NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`Offer_ID`, `Supermarket_ID`, `Offer_name`, `Offer_duration`, `activation`, `created`) VALUES
(1, 2, 'By one get one', '28', 1, '2020-08-29 21:00:00.00000'),
(10, 7, 'Monsoon Sale', '21', 1, '2020-09-08 21:00:00.00000'),
(11, 1, 'Summer ', '30', 1, '2020-09-13 21:00:00.00000'),
(12, 4, 'Black friday', '30', 1, '2020-09-29 21:00:00.00000'),
(13, 2, 'Back to school', '14', 1, '2020-10-19 21:00:00.00000'),
(14, 3, 'Jamuhuri sale', '4', 1, '2020-10-22 21:00:00.00000'),
(15, 5, 'Pastry offers', '7', 1, '2020-10-27 21:00:00.00000'),
(16, 1, 'Valentine offers', '15', 1, '2020-11-02 21:00:00.00000'),
(17, 7, 'End month offers', '5', 1, '2020-11-09 21:00:00.00000'),
(18, 2, 'Valentines treats', '7', 1, '2020-11-29 21:00:00.00000'),
(19, 8, 'Chrisy deals', '21', 1, '2020-12-10 21:00:00.00000'),
(20, 4, 'Christmas deals', '20', 1, '2020-12-25 21:00:00.00000'),
(21, 3, 'Chrisy deals', '14', 1, '2020-12-30 21:00:00.00000'),
(22, 1, 'Winter sales', '26', 1, '2020-12-31 21:00:00.00000'),
(23, 2, 'Mashujaa offers', '10', 1, '2021-01-01 21:00:00.00000'),
(29, 2, 'choppers sale', '21', 1, '2021-01-23 10:13:30.82483'),
(30, 1, 'house sale', '7', 1, '2021-01-23 10:17:33.76723'),
(31, 1, 'back to school', '21', 1, '2021-01-28 09:23:17.08944'),
(32, 1, 'Stock Clearing', '14', 1, '2021-08-01 08:32:25.36415');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `permissions` int(11) NOT NULL,
  `permission_name` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`permissions`, `permission_name`) VALUES
(0, 'Supermarket'),
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `supermarkets`
--

CREATE TABLE `supermarkets` (
  `Supermarket_ID` int(11) NOT NULL,
  `Supermarket_name` varchar(45) NOT NULL,
  `Supermarket_address` varchar(45) NOT NULL,
  `activation` varchar(45) NOT NULL DEFAULT '1',
  `created` timestamp(5) NOT NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supermarkets`
--

INSERT INTO `supermarkets` (`Supermarket_ID`, `Supermarket_name`, `Supermarket_address`, `activation`, `created`) VALUES
(1, 'QuickMart', 'P.O Box 234 - 00610 fedha road ', '1', '2020-11-01 21:00:00.00000'),
(2, 'Naivas', 'P.O Box 133 - 00610 Gate B', '1', '2020-11-09 21:00:00.00000'),
(3, 'Waecon', 'P.O Box 100 - 00100 Tasia complex     ', '2', '2020-11-15 21:00:00.00000'),
(4, 'Tumaini', 'P.O Box 302 - 00200 Outering road', '1', '2020-12-12 21:00:00.00000'),
(5, 'Uchumi', 'P.O Box 1404 - 00200 Jogoo road', '1', '2020-12-21 21:00:00.00000'),
(7, 'Ukwala', 'P.O. BOX 34667-00200 ', '1', '2020-12-31 21:00:00.00000'),
(8, 'EastMatt', 'P.O Box 1985 - 00200 Next To Mfangano Trade C', '1', '2021-01-01 21:00:00.00000'),
(46, 'Choppies', 'MVG8+MG9, Nairobi', '1', '2021-08-03 07:49:48.32069'),
(49, 'Fresh point', 'Nyayo Estate Embakasi, Gate D junction, Nairo', '1', '2021-08-03 08:49:10.62721'),
(50, 'Western mart ', ' 7d Desai Rd, Nairobi', '1', '2021-08-03 08:52:26.47656'),
(51, 'Karibu mart', 'Njema Court, Raphta Road, Nairobi ', '1', '2021-08-03 08:55:36.38204');

--
-- Triggers `supermarkets`
--
DELIMITER $$
CREATE TRIGGER `supermarkets_after_insert` AFTER INSERT ON `supermarkets` FOR EACH ROW BEGIN

	insert into users(username, address, email, permissions) 
		values (NEW.Supermarket_name, NEW.Supermarket_address, concat(REPLACE(NEW.Supermarket_name, ' ', ''), "@gmail.com"), 0);


END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_ID` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `address` varchar(50) NOT NULL DEFAULT 'Kenya',
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL DEFAULT 'kenya@123',
  `permissions` int(11) NOT NULL,
  `activation` int(11) NOT NULL DEFAULT 1,
  `created` timestamp(5) NOT NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `username`, `address`, `email`, `password`, `permissions`, `activation`, `created`) VALUES
(2, 'rey', 'Kenya', 'rey@gmail.com', 'd2b3ea2dfddc40efdc6941359436c847', 1, 2, '2020-08-10 21:00:00.00000'),
(8, 'chela', 'Kenya', 'chela@gmail.com', 'ce6a77f33145648e4773fa6804fc52da', 2, 1, '2020-08-10 21:00:00.00000'),
(9, 'QuickMart', 'P.O Box 234 - 00610 fedha road ', 'QuickMart@gmail.com', 'b35a4cc86b40c58250602223d42812e0', 0, 1, '2020-08-09 21:00:00.00000'),
(10, 'Daya', 'Kenya', 'Daya@gmail.com', 'd2e33c390f33f40ba401350c96d03779', 2, 1, '2020-09-30 21:00:00.00000'),
(11, 'Judy', 'Kenya', 'Judy@gmail.com', 'c6a1ca47b645f4c4b786ce951f8d26a7', 2, 1, '2020-10-08 21:00:00.00000'),
(12, 'Luther Vandross', 'Kenya', 'LutherVandross@Yahoo.com', '3d5472bd7c3bf89f53191058e2ed89be', 2, 1, '2020-10-29 21:00:00.00000'),
(13, 'Naivas', 'P.O Box 133 - 00610 Gate B', 'Naivas@gmail.com', 'a514857347b9db7147b9a4f1a9cefa67', 0, 1, '2020-11-19 21:00:00.00000'),
(14, 'Weacon', 'P.O Box 100 - 00100 Tasia complex     ', 'Weacon@gmail.com', 'a49f4cce8db677c35fa0cd4201d3c2d1', 0, 1, '2020-11-29 21:00:00.00000'),
(15, 'Tumaini', 'P.O Box 302 - 00200 Outering road', 'Tumaini@gmail.com', '164b9c8ac711a3e97e59221521cb8a92', 0, 1, '2020-12-29 21:00:00.00000'),
(16, 'Uchumi', 'P.O Box 1404 - 00200 Jogoo road', 'uchumi@gmail.com', 'c16de8bf581b4bd108138dca4b709d62', 0, 1, '2020-12-31 21:00:00.00000'),
(17, 'Ukwala', 'P.O. BOX 34667-00200 ', 'ukwala@gmail.com', 'ab92a6a2295e1c49ec21b7dc1ef9d28a', 0, 1, '2021-01-01 21:00:00.00000'),
(18, 'Kingston Town', 'Kenya', 'kingston@gmail.com', '790579ae630011b42b110f84c67a9ae6', 12, 1, '2021-01-21 07:45:48.16794'),
(19, 'Gambler', 'Kenya', 'gambler@gmail.com', '66f512ed9627988bc7bbb4ce1f1aeb83', 2, 1, '2021-01-21 07:52:09.59109'),
(20, 'Chemos', 'Kenya', 'chemos@gmail.com', '5179b806ebce42d342876df02b4db1cd', 2, 1, '2021-01-21 07:54:29.35078'),
(21, 'Jean', 'Kenya', 'jean@gmail.com', 'f24103f7f64271df3571e29107f18344', 2, 1, '2021-01-21 07:59:31.56681'),
(22, 'Dom', 'Kenya', 'dom@gmail.com', 'd377ed6c49be1e2877817fd431b96503', 2, 1, '2021-01-21 08:04:41.80951'),
(23, 'Morris', 'Kenya', 'morris@gmail.com', 'ec726fd938bbf930b86581442b18bec7', 2, 1, '2021-01-23 08:03:27.17953'),
(28, 'Ed', 'Kenya', 'ed@gmail.com', 'b5f3729e5418905ad2b21ce186b1c01d', 2, 1, '2021-08-01 08:39:23.14822'),
(65, 'Fresh point', 'Nyayo Estate Embakasi, Gate D junction, Nairo', 'Freshpoint@gmail.com', 'kenya@123', 0, 1, '2021-08-03 08:49:10.62721'),
(81, 'Western mart ', '7d Desai Rd, Nairobi', 'Westernmart@gmail.com', 'kenya@123', 0, 1, '2021-08-03 08:52:26.47656'),
(87, 'Karibu mart', 'Njema Court, Raphta Road, Nairobi ', 'Karibumart@gmail.com', 'kenya@123', 0, 1, '2021-08-03 08:55:36.38204');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`Item_ID`),
  ADD KEY `fk_Offers_ID_idx` (`Offer_ID`),
  ADD KEY `fk_Item_category_ID_idx` (`Item_category_ID`);

--
-- Indexes for table `item_category`
--
ALTER TABLE `item_category`
  ADD PRIMARY KEY (`Item_category_ID`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notifications_ID`),
  ADD KEY `user_ID` (`user_ID`),
  ADD KEY `item_ID` (`item_ID`),
  ADD KEY `Supermarket_ID` (`Supermarket_ID`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`Offer_ID`),
  ADD KEY `Supermarket_ID` (`Supermarket_ID`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`permissions`);

--
-- Indexes for table `supermarkets`
--
ALTER TABLE `supermarkets`
  ADD PRIMARY KEY (`Supermarket_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`),
  ADD KEY `permissions` (`permissions`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `Item_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `item_category`
--
ALTER TABLE `item_category`
  MODIFY `Item_category_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notifications_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `Offer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `supermarkets`
--
ALTER TABLE `supermarkets`
  MODIFY `Supermarket_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `FK_Item_category_ID` FOREIGN KEY (`Item_category_ID`) REFERENCES `item_category` (`Item_category_ID`),
  ADD CONSTRAINT `FK_Offer_ID` FOREIGN KEY (`Offer_ID`) REFERENCES `offers` (`Offer_ID`);

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `FK_item_ID` FOREIGN KEY (`item_ID`) REFERENCES `item` (`Item_ID`),
  ADD CONSTRAINT `FK_superm` FOREIGN KEY (`Supermarket_ID`) REFERENCES `supermarkets` (`Supermarket_ID`),
  ADD CONSTRAINT `FK_user_ID` FOREIGN KEY (`user_ID`) REFERENCES `users` (`user_ID`);

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `super_ID_foreign` FOREIGN KEY (`Supermarket_ID`) REFERENCES `supermarkets` (`Supermarket_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
