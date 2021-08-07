-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2021 at 04:03 PM
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
-- Database: `website_trial`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'Smart Watch', '<p>Unique watch made with stainless steel, ideal for those that prefer interative watches.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Powered by Android with built-in apps.</li>\r\n<li>Adjustable to fit most.</li>\r\n<li>Long battery life, continuous wear for up to 2 days.</li>\r\n<li>Lightweight design, comfort on your wrist.</li>\r\n</ul>', '29.99', '0.00', 10, 'watch.jpg', '2019-03-13 17:55:22'),
(2, 'Wallet', '', '14.99', '19.99', 34, 'wallet.jpg', '2019-03-13 18:52:49'),
(3, 'Headphones', '', '19.99', '0.00', 23, 'headphones.jpg', '2019-03-13 18:47:56'),
(4, 'Digital Camera', '', '69.99', '0.00', 7, 'camera.jpg', '2019-03-13 17:42:04'),
(5, 'Wireless keyboard', '', '20.99', '0.00', 10, '1.jpg', '2020-03-13 17:55:22'),
(6, 'Super watch', '', '60.00', '75.00', 34, '2.jpg', '2020-03-13 18:52:49'),
(7, 'Pet robot', '', '49.99', '0.00', 23, '3.jpg', '2020-03-13 18:47:56'),
(8, 'Smart telescope', '', '69.99', '0.00', 7, '4.jpg', '2018-03-13 17:42:04'),
(9, 'Wireless headphones', '', '49.99', '0.00', 10, '5.jpg', '2018-03-13 17:55:22'),
(10, 'Flash drive lighter', '', '25.00', '60.00', 34, '9.jpg', '2018-03-13 18:52:49'),
(11, 'Wireless mouse', '', '29.99', '0.00', 23, '10.jpg', '2018-03-13 18:47:56'),
(12, 'Power bank', '', '24.00', '0.00', 7, '6.jpg', '2019-03-13 17:42:04'),
(13, 'twisted camera', '', '35.00', '0.00', 10, '7.jpg', '2017-03-13 17:55:22'),
(14, 'Wooden back phone', '', '300.00', '350.00', 34, '8.jpg', '2016-03-13 18:52:49'),
(15, 'Mic', '', '19.99', '0.00', 23, '11.jpg', '2021-03-13 18:47:56'),
(16, 'Desktop camera', '', '30.00', '0.00', 7, '12.jpg', '2020-03-13 17:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `pwd`) VALUES
(1, 'Faizan', 'faizawarawara@gmail.com', '123456'),
(2, 'Patel_Faizan_H', 'fa1zharare@gmail.com', '123456'),
(3, 'pappa', 'hanifzw@gmail.com', '123456'),
(4, 'fatima', 'fatima@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
