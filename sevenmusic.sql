-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 12:11 AM
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
-- Database: `sevenmusic`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='post_id will be the id of the post/music item';

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `body`, `email`, `post_id`) VALUES
(3, 'Hasan Parasteh', 'asdasd', 'test@example.com', 14),
(4, 'shahingashtlorestan.ir', 'asdasd', 'test@example.com', 14);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `lyric` longtext NOT NULL,
  `link` longtext NOT NULL,
  `image` longtext NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `artist`, `lyric`, `link`, `image`, `author`, `date`) VALUES
(14, 'بهت قول میدم', 'محسن یگانه', 'خودت میخوای بری،خاطره شی\r\n\r\nاما دلت میسوزه،تظاهر میکنی،عاشقمی\r\n\r\nاین بازی هر روزه نترس\r\n\r\nآدم دم رفتن همش دلشوره میگیره\r\n\r\nدوروز بگذره این دلشوره ها از خاطرت میده\r\n\r\n \r\n\r\nبهت قول میدم سخت نیست لااقل برا تو راحت باش\r\n\r\nدورم از تو و دنیای تو راحت باش\r\n\r\nهیشکس نمیاد جای تو\r\n\r\nدلشوره دارم من واسه فردای تو\r\n\r\n \r\n\r\nبهت قول میدم سخت نیس لااقل برای تو\r\n\r\nراحت باش\r\n\r\nدور از تو و دنیای تو راحت باش\r\n\r\nهیشکس نمیاد جای تو\r\n\r\nدلشوره دارم من واسه فردای تو\r\n\r\n \r\n\r\nاز عشق هر چیزی که میشناسمو از من گرفتی تو\r\n\r\nتو باقی مونده احساسمو از من گرفتیو\r\n\r\nمیخوای من باشی و یادت بره مایی وجود داره\r\n\r\nخود آماده رفتنیو ترست نمیزاره\r\n\r\nاصلا نترس راحت برو بی من\r\n\r\nهیشکی به جز تو من و یادش نیست\r\n\r\nفکر کردی کی از من خبر داره\r\n\r\nراحت برو هیشکی حواسش نیست\r\n\r\n \r\n\r\nبهت قول میدم سخت نیست لااقل برا تو راحت باش\r\n\r\nدورم از تو و دنیای تو راحت باش\r\n\r\nهیشکس نمیاد جای تو\r\n\r\nدلشوره دارم من واسه فردای تو\r\n\r\n \r\n\r\nهت قول میدم سخت نیس لااقل برای تو\r\n\r\nراحت باش\r\n\r\nدور از تو و دنیای تو راحت باش\r\n\r\nهیشکس نمیاد جای تو\r\n\r\nدلشوره دارم من واسه فردای تو\r\n\r\n \r\n\r\nمسیرمون با هم یکی بود ولی مقصد جدا\r\n\r\nدلگیرم وو پر بغضم خدایا …', 'uploads/musics/نامعلوم/Mohsen Yeganeh - Behet Ghol Midam (128).mp3', 'uploads/covers/photo_2017-08-30_19-39-52.jpg', 'حسن پرسته', '2020-07-05 23:51:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
