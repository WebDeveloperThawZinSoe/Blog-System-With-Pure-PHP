-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 04:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogsystem1`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`) VALUES
(3, 'War', '92_download (4).jpg'),
(4, 'Business 1', '48_download.jpg'),
(5, 'Technology', '89_rs4492_177531624-low.jpg'),
(6, 'Sport', '11_download (6).jpg'),
(8, 'Education', '45_Bg.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `contact_address`
--

CREATE TABLE `contact_address` (
  `phone` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_address`
--

INSERT INTO `contact_address` (`phone`, `id`, `email`, `address`, `map`) VALUES
('09403077739 , 09251016448 , 095194698', 1, 'tzs@gmail.com', 'No 9/689\r\nShwepadar Street , East Dagon 1', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15275.56261783114!2d96.16330505!3d16.8317798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ecb513265eb7%3A0x1b5bc3fb87e20b49!2sHotel%20Shwe%20Eain%20Taw!5e0!3m2!1sen!2smm!4v1647072151968!5m2!1sen!2smm\" width=\"100%\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `developer_mode`
--

CREATE TABLE `developer_mode` (
  `client_mode` int(11) NOT NULL DEFAULT 0,
  `admin_mode` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `developer_mode`
--

INSERT INTO `developer_mode` (`client_mode`, `admin_mode`) VALUES
(0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `footer_credit`
--

CREATE TABLE `footer_credit` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT 'none'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `footer_credit`
--

INSERT INTO `footer_credit` (`id`, `name`) VALUES
(1, 'Copyright © Power By Thaw Zin Soe');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `create_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `category`, `author`, `featured_image`, `description`, `create_date`) VALUES
(4, 'Russia Today', '3', '09403077739', '72_images.jpg', '<p>his is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniquehis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniquehis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniquehis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniquehis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniquehis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniquehis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniquehis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique</p><p>&nbsp;</p>', '2022-03-10'),
(5, 'Bitcoin market crach', '4', '09403077739', '7_Doomsday Book (2012).jpg', '<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique</p><ul><li>HTML</li><li>CSS</li><li>JavaScript</li><li>jQuery</li><li>PHP</li><li>MySQL</li></ul>', '2022-03-10'),
(6, 'NCC Exam', '8', '09403077739', '39_MicrosoftTeams-image (1).png', '<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique</p><p><a href=\"https://google.com\">https://google.com</a></p>', '2022-03-10'),
(7, 'Tester 123', '6', '09403077739', '95_Bg.PNG', '<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique</p>', '2022-03-10'),
(8, 'rrwer', '8', '09403077739', '50_wrapped_WebDeveloperThawZinSoe.png', '<p>2e423423423rwefsfwrf</p>', '2022-03-10'),
(9, 'Hay ay', '5', '09403077739', '85_MicrosoftTeams-image (1).png', '<p>234234235345LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5</p>', '2022-03-10'),
(10, 'ot345ioweritrtwgg', '4', '09403077739', '1_MicrosoftTeams-image (2).png', '<p>LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5LIMIT 5</p>', '2022-03-10'),
(11, '111', '3', '09403077739', '17_MicrosoftTeams-image (2).png', '<p>111</p>', '2022-03-10'),
(12, 'tester', '8', '09403077739', '95_58e91afdeb97430e81906504.png', '<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more uniqueThis is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique</p>', '2022-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `post_pagination`
--

CREATE TABLE `post_pagination` (
  `count` int(255) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post_pagination`
--

INSERT INTO `post_pagination` (`count`) VALUES
(10);

-- --------------------------------------------------------

--
-- Table structure for table `socail_media`
--

CREATE TABLE `socail_media` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `socail_media`
--

INSERT INTO `socail_media` (`id`, `title`, `icon`, `link`) VALUES
(3, 'Github', '59_download.png', 'https://github.com/WebDeveloperThawZinSoe'),
(4, 'LinkedIn', '2_58e91afdeb97430e81906504.png', 'https://www.linkedin.com/in/thaw-zin-soe-0b92b61a5/'),
(5, 'Facebook', '69_fb_icon_325x325.png', 'https://www.facebook.com/thawzin.soe.12/');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phone`, `password`, `created_date`) VALUES
(9, 'Thaw Zin Soe', '09403077739', 'We7vCSi4ZzIfU', '2022-03-07'),
(10, 'Thiri San', '09251016448', 'We7vCSi4ZzIfU', '2022-03-07'),
(15, '123', '123', 'We7vCSi4ZzIfU', '2022-03-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `contact_address`
--
ALTER TABLE `contact_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_credit`
--
ALTER TABLE `footer_credit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socail_media`
--
ALTER TABLE `socail_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_address`
--
ALTER TABLE `contact_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer_credit`
--
ALTER TABLE `footer_credit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `socail_media`
--
ALTER TABLE `socail_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
