-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 04:54 AM
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
(9, 'Information Technology', '94_download.jpg'),
(10, 'Sport', '68_download (6).jpg'),
(11, 'War', '19_download (4).jpg'),
(12, 'Business', '61_download (5).jpg'),
(13, 'Education', '86_1.png'),
(14, 'KBTC University', '80_Bg.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `primary` varchar(255) NOT NULL DEFAULT '#007bff',
  `secondary` varchar(255) NOT NULL DEFAULT '#6c757d',
  `danger` varchar(255) NOT NULL DEFAULT '#dc3545',
  `success` varchar(255) NOT NULL DEFAULT '#28a745',
  `warning` varchar(255) NOT NULL DEFAULT '#ffc107',
  `info` varchar(255) NOT NULL DEFAULT '#17a2b8'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `primary`, `secondary`, `danger`, `success`, `warning`, `info`) VALUES
(1, '#007bff', '#6c757d', '#dc3545', '#28a745', '#ffc107', '#17a2b8');

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
(1, 'Copyright © Love with Thaw Zin Soe');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `logo` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`logo`) VALUES
('5_Thaw Zinlogo.jpg');

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
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `author` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `keywords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`author`, `description`, `keywords`) VALUES
('Thaw Zin Soe', '  A content management system is a computer software used to manage the creation and modification of digital content. A CMS is typically used for enterprise content management and web content management  ', '  CMS ,  Thaw Zin Soe , PHP , MySQL , HTML , CSS , Bootstrap , Content Management System , Customize , Blog  , blog , blog system , Blog System  , System , system  ');

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
-- Table structure for table `text_style`
--

CREATE TABLE `text_style` (
  `id` int(11) NOT NULL,
  `h1_style_color` varchar(255) NOT NULL,
  `h2_style_color` varchar(255) NOT NULL,
  `h3_style_color` varchar(255) NOT NULL,
  `h4_style_color` varchar(255) NOT NULL,
  `h5_style_color` varchar(255) NOT NULL,
  `h6_style_color` varchar(255) NOT NULL,
  `p_style_color` varchar(255) NOT NULL,
  `a_style_color` varchar(255) NOT NULL,
  `p_style` varchar(255) NOT NULL,
  `body_style` varchar(255) NOT NULL,
  `footer_style` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `text_style`
--

INSERT INTO `text_style` (`id`, `h1_style_color`, `h2_style_color`, `h3_style_color`, `h4_style_color`, `h5_style_color`, `h6_style_color`, `p_style_color`, `a_style_color`, `p_style`, `body_style`, `footer_style`) VALUES
(1, 'black', 'black', 'black', 'black', 'black', 'black', 'black', 'black', 'black', 'white', 'white');

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
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `text_style`
--
ALTER TABLE `text_style`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `socail_media`
--
ALTER TABLE `socail_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `text_style`
--
ALTER TABLE `text_style`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
