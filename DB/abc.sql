-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 03:32 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abc`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `art_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `cat` int(11) NOT NULL,
  `art_date` varchar(255) NOT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `States` tinyint(1) DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`art_id`, `title`, `image`, `content`, `cat`, `art_date`, `publisher`, `States`, `user_id`, `updated_by`) VALUES
(1, 'Liverpool boss Jurgen Klopp', 'images/1575968559.png', 'Today I read the top clubs want more games in the Champions League,\" said Klopp. \"I am not involved in these plans. That\'s absolute bollocks.Today I read the top clubs want more games in the Champions League,\" said Klopp. \"I am not involved in these plans. That\'s absolute bollocks.Today I read the top clubs want more games in the Champions League,\" said Klopp. \"I am not involved in these plans. That\'s absolute bollocks.Today I read the top clubs want more games in the Champions League,\" said Klopp. \"I am not involved in these plans. That\'s absolute bollocks.Today I read the top clubs want more games in the Champions League,\" said Klopp. \"I am not involved in these plans. That\'s absolute bollocks.Today I read the top clubs want more games in the Champions League,\" said Klopp. \"I am not involved in these plans. That\'s absolute bollocks.Today I read the top clubs want more games in the Champions League,\" said Klopp. \"I am not involved in these plans. That\'s absolute bollocks.Today I read the top clubs want more games in the Champions League,\" said Klopp. \"I am not involved in these plans. That\'s absolute bollocks.Today I read the top clubs want more games in the Champions League,\" said Klopp. \"I am not involved in these plans. That\'s absolute bollocks.Today I read the top clubs want more games in the Champions League,\" said Klopp. \"I am not involved in these plans. That\'s absolute bollocks.Today I read the top clubs want more games in the Champions League,\" said Klopp. \"I am not involved in these plans. That\'s absolute bollocks.Today I read the top clubs want more games in the Champions League,\" said Klopp. \"I am not involved in these plans. That\'s absolute bollocks.Today I read the top clubs want more games in the Champions League,\" said Klopp. \"I am not involved in these plans. That\'s absolute bollocks.Today I read the top clubs want more games in the Champions League,\" said Klopp. \"I am not involved in these plans. That\'s absolute bollocks.Today I read the top clubs want more games in the Champions League,\" said Klopp. \"I am not involved in these plans. That\'s absolute bollocks.Today I read the top clubs want more games in the Champions League,\" said Klopp. \"I am not involved in these plans. That\'s absolute bollocks.', 1, '2019-12-10 01:02:39', 'Refat', 1, NULL, NULL),
(3, 'new android 10', 'images/default.jpg', 'new android    new android    new android    new android    new android    new android    new android    new android    new android    new android    new android    new android    new android    new android    new android    new android    new android    ', 2, '2019-12-10 14:16:17', 'Ahmed', 1, NULL, 'Refat'),
(4, '2web2', 'images/default.jpg', 'socund web    socund web    socund web    socund web    socund web    socund web    socund web    socund web    socund web    socund web    socund web    socund web    socund web    socund web    socund web    socund web    socund web    socund web    soc', 1, '2019-12-10 14:18:57', 'Ehab', 1, NULL, 'Ahmed'),
(6, 'Flutter1', 'images/1576016177.jpg', 'Flutter   Flutter   Flutter   Flutter   Flutter   Flutter   Flutter   Flutter   Flutter   Flutter   Flutter   Flutter   Flutter   Flutter   Flutter   Flutter   Flutter   Flutter   Flutter   Flutter   Flutter   Flutter   Flutter   Flutter   Flutter   Flutt', 2, '2019-12-10 15:10:09', 'Sara', 1, NULL, 'Refat'),
(9, 'Big Data', 'images/1576024597.jpg', 'Big Data    Big Data    Big Data    Big Data    Big Data    Big Data    Big Data    Big Data    Big Data    Big Data    Big Data    Big Data    Big Data    Big Data    Big Data    Big Data    Big Data    Big Data    Big Data    Big Data    Big Data    Big', 1, '2019-12-10 16:36:37', 'Ali', 1, NULL, NULL),
(10, 'test105', 'images/default.jpg', 'testtesttesttestt  esttesttesttesttesttesttest', 1, '2019-12-14 11:32:29', 'Refat', 1, 1, 'Refat'),
(11, 'اليمن اليوم    ', 'images/1577134703.jpg', 'oioiopioiiiiioioioi oiiooioiopioiiiii  oioioioiiooioiopi oiiiiioioioioi iooioi opioii iiioioioioiiooi\r\n', 2, '2019-12-14 15:03:54', 'Ahmed', 1, 7, 'Refat'),
(14, 'lkdlfd', 'images/default.jpg', '', 1, '2019-12-15 15:16:43', 'Refat', 0, 1, NULL),
(17, 'post 8080', 'images/default.jpg', 'post 10   post 10   post 10   post 10   ', 2, '2019-12-22 04:16:21', 'Ahmed', 1, 7, NULL),
(18, 'new model', 'images/default.jpg', 'new model    new model    new model    new model    new model    ', 1, '2019-12-23 03:42:53', 'Ahmed', 0, 7, NULL),
(22, 'pppp10', 'images/1577130893.jpg', 'PPPPPPPPPPPPPPPPPPPPP', 2, '2019-12-23 10:23:01', 'Ahmed', 1, 7, 'Refat'),
(23, 'new art77', 'images/1577172530.jpg', 'new art      new art      new art      new art      new art      new art      ', 2, '2019-12-23 23:28:50', 'Refat', 1, 1, 'Refat'),
(27, 'skalsklasl', 'images/default.jpg', '', 2, '2019-12-25 03:41:56', NULL, 1, NULL, NULL),
(28, 'kjdsja', 'images/default.jpg', '', 1, '2019-12-25 03:48:46', NULL, 0, NULL, NULL),
(29, 'saoksaoisaos', 'images/default.jpg', '', 1, '2019-12-25 03:50:07', 'Refat', 0, 1, NULL),
(30, 'asa Ryaid', 'images/default.jpg', '', 1, '2019-12-25 03:51:34', 'Refat', 1, 1, 'Refat'),
(33, 'jkjkj today 10105', 'images/1577569320.jpg', 'kjjklljkljkl', 2, '2019-12-28 13:12:33', 'Refat', 1, 1, 'Refat'),
(36, 'اليوووووووووووووووووووووووووووووووووووووووووم', 'images/1577570812.jpg', 'اليوووووووووووووووووووووووووووووووووووووووووم', 1, '2019-12-28 14:04:09', 'Refat', 1, 1, 'Refat'),
(50, 'post 100', 'images/1578526231.jpg', 'slkapsa', 9, '2020-01-08 15:30:31', 'Refat7', 1, 1, NULL),
(51, 'jdksajdkjaskdjaskdjkas 12012102', 'images/1578583600.jpg', '', 1, '2020-01-09 07:26:40', 'Refat7', 0, 1, NULL),
(52, 'now post controllaer10', 'images/1578818577.jpg', 'oiipj', 2, '2020-01-12 00:42:57', 'Refat', 0, 1, 'Refat'),
(53, 'fdpof', 'images/default.jpg', '', 1, '2020-01-12 02:46:06', 'Refat', 0, 1, NULL),
(54, '5s4da', 'images/default.jpg', '', 1, '2020-01-12 02:47:42', 'Refat', 0, 1, NULL),
(56, 'asoosoakdk', 'images/1578827346.jpg', '', 1, '2020-01-12 03:09:06', 'Refat', 1, 1, 'Refat');

-- --------------------------------------------------------

--
-- Table structure for table `breaking_news`
--

CREATE TABLE `breaking_news` (
  `id` int(11) NOT NULL,
  `s_time` time NOT NULL,
  `s_date` date DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `breaking_news`
--

INSERT INTO `breaking_news` (`id`, `s_time`, `s_date`, `content`, `publisher`, `user_id`, `updated_by`, `duration`, `status`) VALUES
(47, '11:34:10', '2020-01-09', 'خبرررررررررر عاجل', 'Refat7', 1, NULL, '', NULL),
(48, '19:58:15', '2020-01-09', 'خبر عاجل10', 'Refat7', 1, NULL, '', NULL),
(49, '20:03:03', '2020-01-09', 'dsad10', 'Refat7', 1, 'Refat', '', 1),
(51, '20:58:22', '2020-01-09', 'odv150', 'Refat', 1, 'Refat', '', 1),
(52, '14:47:05', '2020-03-04', 'oioiooio', NULL, 1, NULL, '30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(2) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `cat_status` tinyint(1) DEFAULT NULL,
  `create_by` varchar(50) DEFAULT NULL,
  `create_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_status`, `create_by`, `create_date`) VALUES
(1, 'web', 1, 'Refat', NULL),
(2, 'android', 1, 'Refat', NULL),
(9, 'new cat 100', 1, 'Refat7', '2020-01-08 15:29:18'),
(12, 'sport', 0, 'Refat', '2020-01-09 16:16:11');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `art_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `com_content` text NOT NULL,
  `com_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `art_id`, `user_name`, `com_content`, `com_date`) VALUES
(1, 0, 'Refat', 'rrrrr', '2020-01-09 07:03:29'),
(2, 3, 'Refat', 'lkoi', '2020-01-09 07:03:29'),
(3, 1, 'Refat', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2020-01-09 07:03:29'),
(4, 10, 'Refat', 'jeporoidfopigpoisgk lsdfmlsdklf sdkpfoskfpo sdkofsdofksdkofksd', '2020-01-09 07:03:29'),
(5, 9, 'Ahmed', 'lokggi', '2020-01-09 07:03:29'),
(6, 1, 'Ahmed', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2020-01-09 07:03:29'),
(7, 4, 'Refat', 'new comment', '2020-01-09 07:03:29'),
(8, 1, 'Refat', 'new comeent', '2020-01-09 07:03:29'),
(9, 6, 'Refat', 'nice tree', '2020-01-09 07:03:29'),
(11, 39, 'Refat', 'hhh', '2020-01-09 07:03:29'),
(12, 3, 'Refat', 'jj', '2020-01-09 07:03:29'),
(13, 11, 'Refat', 'lklklk', '2020-01-09 07:03:29'),
(14, 37, 'Ahmed', 'jsaksj', '2020-01-09 07:03:29'),
(15, 37, 'Refat', 'lksalkdaskds', '2020-01-09 07:03:29'),
(16, 37, 'Refat', 'kkasdjas', '2020-01-09 07:03:29'),
(17, 38, 'Refat', 'fhisdhfs', '2020-01-09 07:03:29'),
(18, 1, 'Refat', 'oasdiopiaspodiasodiasodpiasodiaopsidasdopiasdpoasi', '2020-01-09 07:03:29'),
(19, 33, 'Refat', 'oks', '2020-01-09 07:03:29'),
(20, 1, 'Refat', 'ijuauedashd', '2020-01-09 07:03:29'),
(21, 20, 'R', 'dssa', '2020-01-09 07:03:29'),
(22, 36, 'Refat', 'asjhiui', '2020-01-09 07:03:29'),
(23, 36, 'Refat', 'Helllllll', '2020-01-09 07:03:29'),
(24, 36, 'Refat', 'kssksksksk', '2020-01-09 07:03:29'),
(25, 36, 'Refat', 'lkkl', '2020-01-09 07:03:29'),
(26, 36, 'Refat', 'lio', '2020-01-09 07:03:29'),
(27, 50, 'Refat', 'oio', '2020-01-09 07:03:29'),
(28, 6, 'Ahmed', 'comkoas', '2020-01-09 07:03:29'),
(29, 50, 'Ahmed', 'popodas', '2020-01-09 07:03:29'),
(30, 50, 'Refat', 'lkdaskjdo', '2020-01-09 07:32:52'),
(31, 22, 'Ahmed', 'jhdas', '2020-01-08 22:50:42'),
(32, 50, 'new user', 'kdpas', '2020-01-08 23:24:06'),
(33, 23, 'Ahmed', 'podoas', '2020-01-08 23:25:26'),
(34, 3, 'Amar', 'gfd', '2020-01-09 12:02:04'),
(35, 1, 'Refat', 'kdjas', '2020-03-04 05:39:05'),
(36, 1, 'Refat', 'oio', '2020-03-04 05:39:11'),
(37, 11, 'Refat', 'pp', '2020-03-04 05:39:47');

-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

CREATE TABLE `polls` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `polls`
--

INSERT INTO `polls` (`id`, `title`, `desc`) VALUES
(1, 'What\'s your favorite programming language?', ''),
(3, 'Best major is ?', 'major'),
(6, 'vote_10', 'vote_10'),
(7, 'kdsa', 'dspoai');

-- --------------------------------------------------------

--
-- Table structure for table `poll_answers`
--

CREATE TABLE `poll_answers` (
  `id` int(11) NOT NULL,
  `poll_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `votes` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `poll_answers`
--

INSERT INTO `poll_answers` (`id`, `poll_id`, `title`, `votes`) VALUES
(1, 1, 'PHP', 8),
(2, 1, 'Python', 2),
(3, 1, 'C#', 2),
(4, 1, 'Java', 3),
(5, 3, 'IS', 4),
(6, 3, 'CS', 2),
(7, 3, 'IT', 1),
(12, 6, 'vote_10_1', 0),
(13, 6, 'vote_10_2', 0),
(14, 0, 'osa', 0),
(15, 0, 'sadi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `AdminUserName` varchar(255) NOT NULL,
  `AdminPassword` varchar(255) NOT NULL,
  `AdminEmailId` varchar(255) NOT NULL,
  `Is_Active` int(11) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `AdminUserName`, `AdminPassword`, `AdminEmailId`, `Is_Active`, `CreationDate`, `UpdationDate`) VALUES
(1, 'Refat7', '$2y$12$i4LMfeFPQpGSNPTaccIkKuwxAkJ4PhBr3JND7FpXwWFjRvchQn17C', 'refatalwajeeh2017@gmail.com', 1, '2018-05-28 06:51:00', '2020-01-08 07:09:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_Id` int(11) NOT NULL,
  `User_Name` varchar(40) NOT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `User_Password` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `States` tinyint(1) NOT NULL,
  `Image_Profile` varchar(120) NOT NULL,
  `Type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_Id`, `User_Name`, `Gender`, `User_Password`, `Email`, `States`, `Image_Profile`, `Type`) VALUES
(1, 'Refat', 'Male', '777964955', 'refatalwajeeh2017@gmail.com', 1, 'ProfileUserImage/9b6922c76647860702f2ff2e54cb1cf0.jpg', 'Admin'),
(7, 'Ahmed', 'Male', '123', 'Ahmed@gmail.com', 1, 'images/default.jpg', 'Admin'),
(9, 'ayman', 'Male', '123', 'ayman@gmail.com', 1, 'images/default.jpg', 'user'),
(10, 'sara', 'Female', '123', 'sara@gmail.com', 1, 'images/1575976964.jpg', 'user'),
(18, 'Ehab', 'Male', '123', 'ehab@gmail.com', 1, 'images/1576016003.jpeg', 'user'),
(19, 'Amar', 'Male', '123', 'Amar@gmail.com', 1, 'images/1576060497.jpg', 'user'),
(20, 'new user', 'Male', '123', 'new@gmail.com', 1, 'images/1578553757.png', 'user'),
(21, 'user10', 'Male', '123', 'user10@gmail.com', 0, '../images/1578556477.jpg', 'user'),
(22, 'User controller', 'Male', '123', 'con@gmail.com', 1, '../images/1578819922.jpg', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`art_id`);

--
-- Indexes for table `breaking_news`
--
ALTER TABLE `breaking_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poll_answers`
--
ALTER TABLE `poll_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `breaking_news`
--
ALTER TABLE `breaking_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `polls`
--
ALTER TABLE `polls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `poll_answers`
--
ALTER TABLE `poll_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
