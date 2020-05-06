-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 06, 2020 at 11:46 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `E-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `src` varchar(255) NOT NULL,
  `src_small` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id`, `name`, `description`, `price`, `src`, `src_small`, `is_active`) VALUES
(1, 'T-Shirt Summer Vibes', 'White Summer Vibes T-shirt in the uiKit line with a colorful print.\r\nMade of jersey cotton. T-shirt fits perfectly with jeans, pants or shorts.', 120, 'img/product-img/AdobeStock_236655481@2x.jpg', 'img/product-img/AdobeStock_236655481.jpg', 1),
(2, 'T-Shirt Summer Vibes', 'White Summer Vibes T-shirt in the uiKit line with a colorful print.\r\nMade of jersey cotton. T-shirt fits perfectly with jeans, pants or shorts.', 120, 'img/product-img/AdobeStock_236655481@2x.jpg', 'img/product-img/AdobeStock_236655481.jpg', 1),
(3, 'T-Shirt Summer Vibes', 'White Summer Vibes T-shirt in the uiKit line with a colorful print.\r\nMade of jersey cotton. T-shirt fits perfectly with jeans, pants or shorts.', 120, 'img/product-img/AdobeStock_236655481@2x.jpg', 'img/product-img/AdobeStock_236655481.jpg', 1),
(4, 'T-Shirt Summer Vibes', 'White Summer Vibes T-shirt in the uiKit line with a colorful print.\r\nMade of jersey cotton. T-shirt fits perfectly with jeans, pants or shorts.', 120, 'img/product-img/AdobeStock_236655481@2x.jpg', 'img/product-img/AdobeStock_236655481.jpg', 1),
(5, 'T-Shirt Summer Vibes', 'White Summer Vibes T-shirt in the uiKit line with a colorful print.\r\nMade of jersey cotton. T-shirt fits perfectly with jeans, pants or shorts.', 120, 'img/product-img/AdobeStock_236655481@2x.jpg', 'img/product-img/AdobeStock_236655481.jpg', 1),
(6, 'T-Shirt Summer Vibes', 'White Summer Vibes T-shirt in the uiKit line with a colorful print.\r\nMade of jersey cotton. T-shirt fits perfectly with jeans, pants or shorts.', 120, 'img/product-img/AdobeStock_236655481@2x.jpg', 'img/product-img/AdobeStock_236655481.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
