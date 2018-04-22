-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2018 at 09:06 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`id`, `name`, `phone`, `email`, `message`) VALUES
(1, '', '', '', ''),
(2, 'sdjiiidsv', '8985349058', 'vsnc@jisd.ve', ' fieehi hgier iir eiiMessage:'),
(3, 'nope', 'nope', 'nope', 'nope'),
(4, 'ksjdkgn', '98908325', 'dfgk@krve.dgj', 'vMessage:'),
(5, 'dfjj', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `street` text NOT NULL,
  `locality` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `street`, `locality`, `city`, `state`, `mobile`, `email`, `password`) VALUES
(1, 'ganesh', 'ceeri road', 'indian', 'pilani', 'rajsthan', '7062962017', 'jangid.ganesh8824@gm', '123456789'),
(4, 'ksdjfi', 'kjsidojg', 'msvk', 'kfdmvkdm', 'kdmfb', 'kfmdf', 'jivan', '1234'),
(5, 'ganesh', 'xyz', 'uy', 'ty', 'dfs', 'sf', 'abcd', '1234'),
(6, 'gulshan', 'bkbiet', 'pilani', 'pilani', 'rajashan', '12345', 'gulshan@gmail.com', '12345'),
(7, 'jisadonv', 'divikn', 'nikfndivfn', 'jiofdfjiojb', 'kjifdjib', '123', 'test@b2c.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(20) NOT NULL,
  `order_id` varchar(20) NOT NULL,
  `feedback_txt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `order_id`, `feedback_txt`) VALUES
(1, '3', 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) DEFAULT NULL,
  `product_id` int(10) DEFAULT NULL,
  `payment_method` varchar(25) NOT NULL,
  `datetime` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `product_id`, `payment_method`, `datetime`, `status`) VALUES
(5, 7, 10, 'COD', NULL, 'Delivered'),
(6, 7, 10, 'COD', NULL, 'In deliver'),
(7, 7, 10, 'COD', NULL, 'In deliver'),
(8, 7, 10, 'COD', '2018-04-22 23:45:58', 'placed');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `img_url` varchar(100) NOT NULL,
  `price` int(6) NOT NULL,
  `type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `description`, `img_url`, `price`, `type`) VALUES
(10, 'Peppy paneer', 'Chunky paneer with crisp capsicum and spicy red pepper - quite a mouthful! This just struck in my mind, so I thought to make one for you all as well! Not only the tikka but the pizza', 'Peppy_Paneer veg pizza.jpg', 200, 'vegpizza'),
(11, 'Deluxe veggie', 'For a vegetarian looking for a BIG treat that goes easy on the spices, this one\'s got it all.. The onions, the capsicum, those delectable mushrooms - with paneer and golden corn to top it all.', 'Deluxe_Veggie veg.jpg', 220, 'vegpizza'),
(12, 'Mexican Green Wave', 'A pizza loaded with crunchy onions, crisp capsicum, juicy tomatoes and jalapeno with a liberal sprinkling of exotic Mexican herbs.', 'Mexican_Green_Wave veg pizza.jpg', 210, 'vegpizza'),
(13, 'Chicken Sausage', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia impedit possimus architecto repellat enim velit alias quis  harum veritatis. Autem quaerat obcaecati quos corporis quasi voluptatum dolores velit laboriosam.', 'Chicken_Sausage.jpg', 240, 'nonvegpizz'),
(14, 'CHICKEN SAUSAGE', 'Bite into supreme delight of Black Olives, Onions, Grilled Mushrooms, Pepper BBQ Chicken, Peri-Peri Chicken, Grilled Chicken Rashers', 'Chicken_Tikka.jpg', 220, 'nonvegpizz'),
(15, 'PEPPER BARBECUE CHICKEN', 'Treat your taste buds with Double Pepper Barbecue Chicken, Peri-Peri Chicken, Chicken Tikka & Grilled Chicken Rashers', 'Pepper_Barbeque.jpg', 220, 'nonvegpizz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
