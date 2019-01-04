-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2018 at 11:52 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `prod_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `prod_det` varchar(1000) NOT NULL,
  `number_of_stock` int(11) NOT NULL,
  `prod_price` int(100) NOT NULL,
  `prod_pic1` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`prod_id`, `name`, `category`, `prod_det`, `number_of_stock`, `prod_price`, `prod_pic1`) VALUES
(1, 'asus zenfone max pro m1', 'mobile', ' Asus ZenFone Max Pro M1 smartphone has a 5.99-inch touchscreen display with 1080 x 2160 pixels resolution. Under the hood, the device is powered by an octa-core Snapdragon 636 processor with 3GB of RAM and 32GB of internal storage expandable via a microSD card.', 13, 13000, 'asus.jpg'),
(2, 'google pixel 2 xl ', 'mobile', 'The phone comes with a 6.00-inch touchscreen display with a resolution of 1440 pixels by 2880 pixels at a PPI of 538 pixels per inch. Google Pixel 2 XL price in India starts from Rs. 39,997. The Google Pixel 2 XL is powered by 1.9GHz octa-core processor and it comes with 4GB of RAM.', 10, 40000, '104201774205PM_635_google_pixel_2_xl.jpeg'),
(50, 'honor play ', 'mobile', 'Kirin 970 AI Flagship Octa-Core Processor , 3750mAH lithium Polymer battery with 9V 2A Fast Charge technology.', 12, 18000, 'honor-play-g1.jpg'),
(51, 'Iphone Xr', 'mobile', 'All-new Liquid Retina display â€” the most advanced LCD in the industry.', 5, 74000, 'compare_iphoneXR_blue_large.jpg'),
(46, 'redmi note 4 ', 'mobile', 'redmi note 4 comes with Qualcomm\'s 14nm Snapdragon 625, and comes with 4GB of RAM and 64GB storage.', 10, 12000, 'redminote 4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'keviv', 'keviv@gmail.com', '6e056e513c734a013126312022a43c3a'),
(2, 'max', 'max@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `prod_id` (`prod_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
