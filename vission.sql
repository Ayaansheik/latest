-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2024 at 01:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vission`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand_profile`
--

CREATE TABLE `brand_profile` (
  `brand_id` int(11) NOT NULL,
  `bg_img` varchar(200) NOT NULL,
  `logo_img` varchar(200) NOT NULL,
  `brand_name` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `register_date` date NOT NULL,
  `location` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_phone` bigint(20) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `brand_descr` text NOT NULL,
  `fb_url` varchar(200) NOT NULL,
  `insta_url` varchar(200) NOT NULL,
  `youtube_url` varchar(200) NOT NULL,
  `website_url` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand_profile`
--

INSERT INTO `brand_profile` (`brand_id`, `bg_img`, `logo_img`, `brand_name`, `category`, `register_date`, `location`, `user_name`, `user_email`, `user_phone`, `gender`, `brand_descr`, `fb_url`, `insta_url`, `youtube_url`, `website_url`, `user_id`) VALUES
(2, 'loader-dark.png', 'logo-full.png', 'ashdlak', 'Technology', '2024-08-15', 'asjdia', 'asdasda', 'yaan@gmail.com', 2313123123131, 'Female', 'Enter Your Brand Informationasada', 'https://www.hindustantimes.com/entertainment/tv/munawar-faruqui-second-marriage-who-is-new-wife-mehzabeen-coatwala-pics-5-things-to-know-single-mom-makeup-artist-101717046567901.html', 'https://www.hindustantimes.com/entertainment/tv/munawar-faruqui-second-marriage-who-is-new-wife-mehzabeen-coatwala-pics-5-things-to-know-single-mom-makeup-artist-101717046567901.html', 'https://www.hindustantimes.com/entertainment/tv/munawar-faruqui-second-marriage-who-is-new-wife-mehzabeen-coatwala-pics-5-things-to-know-single-mom-makeup-artist-101717046567901.html', 'https://www.hindustantimes.com/entertainment/tv/munawar-faruqui-second-marriage-who-is-new-wife-mehzabeen-coatwala-pics-5-things-to-know-single-mom-makeup-artist-101717046567901.html', 14);

-- --------------------------------------------------------

--
-- Table structure for table `create-creator-profile`
--

CREATE TABLE `create-creator-profile` (
  `profile_id` int(11) NOT NULL,
  `profile_img` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `marital_status` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `country` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `bg_img` varchar(200) NOT NULL,
  `fb_url` varchar(500) NOT NULL,
  `insta_url` varchar(500) NOT NULL,
  `youtube_url` varchar(500) NOT NULL,
  `twitter_url` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `img_id` int(11) NOT NULL,
  `images` varchar(200) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `category` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_type` enum('brand','influencer') NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `username`, `email`, `phone`, `category`, `address`, `password`, `user_type`, `status`) VALUES
(14, 'admin', 'admin@gmail.com', 2313121231, 'Clothing', 'Jamshed Road Gurumandir', '$2y$10$muTkPS/d1UpKkFxvRAs5quGszDqy.yWitypey8oknjYdw4eGLq6ga', 'brand', 'admin'),
(20, 'faizan', 'ayaansheik290@gmail.com', 3182853890, 'Clothing', 'Jamshed Road Gurumandir', '$2y$10$0AjaXTTnMJ/hlJMPkIbIc.NPUU7nNpB1g9hr0jHfzby/169DHMuF.', 'brand', 'Approved'),
(21, 'AYaan', 'ayaan@gmail.com', 3182853890, 'Clothing', 'Jamshed Road Gurumandir', '$2y$10$Fzj.pSZFvwJEPdKKeE06DuQMgcJoYtgjSNlACO6Wq1QasQcvp0bpS', 'brand', 'Rejected'),
(22, 'adads', 'anila@gmail.com', 2313121231, 'Clothing', 'Jamshed Road Gurumandir', '$2y$10$DXDfrhDHGA49h2IxSayIweAzHk5FeHKlodTAOPZvR37gGLfYlfM7u', 'brand', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand_profile`
--
ALTER TABLE `brand_profile`
  ADD PRIMARY KEY (`brand_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `create-creator-profile`
--
ALTER TABLE `create-creator-profile`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `profile_id` (`profile_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand_profile`
--
ALTER TABLE `brand_profile`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `create-creator-profile`
--
ALTER TABLE `create-creator-profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `brand_profile`
--
ALTER TABLE `brand_profile`
  ADD CONSTRAINT `brand_profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `register` (`user_id`);

--
-- Constraints for table `create-creator-profile`
--
ALTER TABLE `create-creator-profile`
  ADD CONSTRAINT `create-creator-profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `register` (`user_id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand_profile` (`brand_id`),
  ADD CONSTRAINT `images_ibfk_2` FOREIGN KEY (`profile_id`) REFERENCES `create-creator-profile` (`profile_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
