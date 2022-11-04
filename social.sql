-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2022 at 08:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(32) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`) VALUES
(1, 'bussiness'),
(2, 'academic'),
(3, 'sports'),
(4, 'events');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_body` text NOT NULL,
  `posted_by` varchar(60) NOT NULL,
  `posted_to` varchar(60) NOT NULL,
  `date_added` datetime NOT NULL,
  `removed` varchar(3) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_body`, `posted_by`, `posted_to`, `date_added`, `removed`, `post_id`) VALUES
(39, 'hiii halooo', 'herimorn_christon', 'herimorn_christon', '2022-07-19 21:13:54', 'no', 89),
(40, 'HHFVH HERFBYREH', 'herimorn_christon', 'justina_tarimo', '2022-07-20 02:10:50', 'no', 96),
(42, 'hii its sounds so wield on this', 'justina_tarimo', '', '2022-07-20 13:36:41', '', 93),
(43, 'can we say its fine now\r\nif thats ok dont worry', 'herimorn_christon', '', '2022-07-20 15:45:01', '', 94),
(44, 'mmy its seems very wield', 'herimorn_christon', '', '2022-07-20 15:49:36', '', 93),
(45, 'we are very sad for that', 'herimorn_christon', '', '2022-07-20 15:58:26', '', 90),
(46, 'is this for business now can we see it !!!!', 'herimorn_christon', '', '2022-07-20 16:00:27', '', 91),
(47, 'ni pigo zito sana !!!', 'herimorn_christon', '', '2022-07-20 16:02:37', '', 90),
(48, 'hay', 'herimorn_christon', 'justina_tarimo', '2022-07-23 09:54:00', 'no', 96),
(49, 'this news is amaizing and gratefull', 'herimorn_christon', '', '2022-07-23 11:55:46', '', 94),
(50, 'hiiii', 'herimorn_christon', 'herimorn_christon', '2022-07-25 13:45:54', 'no', 98),
(51, 'good boy now!!!!', 'justina_tarimo', 'herimorn_christon', '2022-07-25 15:11:59', 'no', 98),
(52, 'woow this look amaizing dude', 'justina_tarimo', 'herimorn_christon', '2022-07-31 18:09:22', 'no', 119),
(53, 'this is amaing gutys\r\n', 'justina_tarimo', 'herimorn_christon', '2022-07-31 18:10:34', 'no', 119);

-- --------------------------------------------------------

--
-- Table structure for table `friend_requests`
--

CREATE TABLE `friend_requests` (
  `id` int(11) NOT NULL,
  `user_to` varchar(50) NOT NULL,
  `user_from` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend_requests`
--

INSERT INTO `friend_requests` (`id`, `user_to`, `user_from`) VALUES
(24, 'janeth_mkama', 'herimorn_christon');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `username`, `post_id`) VALUES
(57, 'justina_tarimo', 97),
(58, 'herimorn_christon', 97),
(59, 'herimorn_christon', 119),
(60, 'herimorn_christon', 116);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_to` varchar(50) NOT NULL,
  `user_from` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `date` datetime NOT NULL,
  `opened` varchar(3) NOT NULL,
  `viewed` varchar(3) NOT NULL,
  `deleted` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_to`, `user_from`, `body`, `date`, `opened`, `viewed`, `deleted`) VALUES
(55, 'justina_tarimo', 'justina_tarimo', 'trdthdtrtr', '2022-07-18 07:24:51', 'yes', 'yes', 'no'),
(56, 'herimorn_christon', 'justina_tarimo', 'trtrdrrttrtty', '2022-07-18 07:25:47', 'yes', 'yes', 'no'),
(57, 'herimorn_christon', 'justina_tarimo', 'RFSDFTGYVAEB CFHFUHGB', '2022-07-20 02:13:41', 'yes', 'yes', 'no'),
(58, 'justina_tarimo', 'herimorn_christon', 'this news is an amaizing news', '2022-07-25 15:04:25', 'yes', 'yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_to` varchar(50) NOT NULL,
  `user_from` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `link` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL,
  `opened` varchar(3) NOT NULL,
  `viewed` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_to`, `user_from`, `message`, `link`, `datetime`, `opened`, `viewed`) VALUES
(55, 'justina_tarimo', 'herimorn_christon', 'Herimorn Christon commented on your post', 'post.php?id=96', '2022-07-20 02:10:50', 'yes', 'yes'),
(56, 'justina_tarimo', 'herimorn_christon', 'Herimorn Christon commented on your post', 'post.php?id=96', '2022-07-23 09:54:00', 'yes', 'yes'),
(57, 'herimorn_christon', 'justina_tarimo', 'Justina Tarimo liked your post', 'post.php?id=97', '2022-07-25 15:11:24', 'yes', 'yes'),
(58, 'herimorn_christon', 'justina_tarimo', 'Justina Tarimo liked your post', 'post.php?id=97', '2022-07-25 15:11:31', 'yes', 'yes'),
(59, 'herimorn_christon', 'justina_tarimo', 'Justina Tarimo liked your post', 'post.php?id=97', '2022-07-25 15:11:33', 'yes', 'yes'),
(60, 'herimorn_christon', 'justina_tarimo', 'Justina Tarimo commented on your post', 'post.php?id=98', '2022-07-25 15:11:59', 'no', 'yes'),
(61, 'herimorn_christon', 'justina_tarimo', 'Justina Tarimo commented on your post', 'post.php?id=119', '2022-07-31 18:09:22', 'yes', 'yes'),
(62, 'herimorn_christon', 'justina_tarimo', 'Justina Tarimo commented on your post', 'post.php?id=119', '2022-07-31 18:10:34', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `body` text NOT NULL,
  `added_by` varchar(60) NOT NULL,
  `user_to` varchar(60) NOT NULL,
  `date_added` datetime NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `deleted` varchar(3) NOT NULL,
  `likes` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `added_by`, `user_to`, `date_added`, `user_closed`, `deleted`, `likes`, `image`, `category_id`) VALUES
(84, 'hiii', 'herimorn_christon', 'none', '2022-07-17 23:38:14', 'no', 'yes', 0, 'assets/images/posts/62d48f56c2a59download (1).jpg', 1),
(85, 'mzumbe tarent show<br /> ', 'herimorn_christon', 'none', '2022-07-17 23:38:46', 'no', 'yes', 0, '', 1),
(86, 'mzumbe tarent show<br /> ', 'herimorn_christon', 'none', '2022-07-17 23:38:58', 'no', 'yes', 0, '', 2),
(87, 'mzumbe tarent show<br /> ', 'herimorn_christon', 'none', '2022-07-17 23:39:04', 'no', 'yes', 0, '', 2),
(88, 'mzumbe talent show', 'herimorn_christon', 'none', '2022-07-17 23:40:02', 'no', 'no', 0, 'assets/images/posts/62d48fc2c0803download (1).jpg', 3),
(89, 'cocacola matangazo', 'herimorn_christon', 'none', '2022-07-17 23:40:47', 'no', 'no', 0, 'assets/images/posts/62d48fef2661fimages (2).jpg', 3),
(90, 'death of magufuri', 'zainabu_ruhumba', 'none', '2022-07-08 00:00:00', 'no', 'no', 0, 'download.jpg', 1),
(91, 'workshop ', 'zainabu_ruhumba', 'none', '2022-07-19 00:00:00', 'no', 'no', 0, 'WhatsApp-Image-2019-07-13-at-18.40.50-300x300.jpeg', 1),
(93, 'this is amaizing posts', 'perez_john', 'none', '2022-07-14 00:00:00', 'no', 'no', 0, 'download (5).jpg', 2),
(94, 'lets says we have been greatly thanks to say good by to the final year', 'perez_john', 'none', '2022-07-09 00:00:00', 'no', 'no', 0, 'images.jpg', 2),
(95, 'hehwDFHVHBVL BG', 'herimorn_christon', 'none', '2022-07-20 02:08:38', 'no', 'no', 0, 'assets/images/posts/62d75596b0b3aimages.jpg', 3),
(96, 'CFAsACDGJCV QYACYEFCV gqwdyfcv uvuqefycg qwVUCF', 'justina_tarimo', 'none', '2022-07-20 02:10:23', 'no', 'no', 0, 'assets/images/posts/62d755ffc4c03download (5).jpg', 3),
(97, 'https://youtu.be/ceqqHY5E4-w', 'herimorn_christon', 'none', '2022-07-23 10:00:52', 'no', 'no', 2, '', 2),
(98, 'unyama saana !!!! mshua', 'herimorn_christon', 'none', '2022-07-23 10:02:35', 'no', 'yes', 0, 'assets/images/posts/62dbb92b2a850download (2).jpg', 1),
(99, 'these are the news', 'herimorn_christon', 'none', '2022-07-25 15:18:48', 'no', 'no', 0, 'assets/images/posts/62dea64815a5fdownload (3).jpg', 1),
(100, 'https://youtu.be/4Uv0KUyWhp0', 'herimorn_christon', 'none', '2022-07-28 23:48:09', 'no', 'yes', 0, '', 0),
(101, '<br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed/4Uv0KUyWhp0\'></iframe><br>', 'herimorn_christon', 'none', '2022-07-28 23:48:21', 'no', 'yes', 0, '', 0),
(102, '<br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed/4Uv0KUyWhp0\'></iframe><br>', 'herimorn_christon', 'none', '2022-07-28 23:48:52', 'no', 'yes', 0, '', 0),
(103, '<br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed/4Uv0KUyWhp0\'></iframe><br>', 'herimorn_christon', 'none', '2022-07-28 23:48:59', 'no', 'yes', 0, '', 0),
(104, 'https://www.youtube.com/results?search_query=mazishi+ya+magufuri', 'herimorn_christon', 'none', '2022-07-28 23:51:27', 'no', 'yes', 0, '', 0),
(105, '<br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed/w8QB8jPNAag\'></iframe><br>', 'herimorn_christon', 'none', '2022-07-28 23:52:19', 'no', 'yes', 0, '', 0),
(106, '<br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed/w8QB8jPNAag\'></iframe><br>', 'herimorn_christon', 'none', '2022-07-28 23:52:45', 'no', 'yes', 0, '', 0),
(107, '<br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed/w8QB8jPNAag\'></iframe><br>', 'herimorn_christon', 'none', '2022-07-28 23:52:50', 'no', 'yes', 0, '', 0),
(108, '<br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed/w8QB8jPNAag\'></iframe><br>', 'herimorn_christon', 'none', '2022-07-28 23:52:56', 'no', 'yes', 0, '', 0),
(109, 'mazishi ya hayati john pombe magufuri<br /> <br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed/w8QB8jPNAag\'></iframe><br>', 'herimorn_christon', 'none', '2022-07-28 23:54:01', 'no', 'yes', 0, '', 0),
(110, 'mazishi ya hayati john pombe magufuri<br /> <br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed/w8QB8jPNAag\'></iframe><br>', 'herimorn_christon', 'none', '2022-07-28 23:55:33', 'no', 'yes', 0, '', 0),
(111, 'mazishi ya hayati john pombe magufuri<br /> <br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed/w8QB8jPNAag\'></iframe><br>', 'herimorn_christon', 'none', '2022-07-28 23:55:37', 'no', 'yes', 0, '', 0),
(112, 'mazishi ya hayati john pombe magufuri<br /> <br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed/w8QB8jPNAag\'></iframe><br>', 'herimorn_christon', 'none', '2022-07-28 23:55:42', 'no', 'yes', 0, '', 0),
(113, 'mazishi ya hayati john pombe magufuri<br /> <br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed/w8QB8jPNAag\'></iframe><br>', 'herimorn_christon', 'none', '2022-07-28 23:55:46', 'no', 'yes', 0, '', 0),
(114, 'mazishi ya hayati john pombe magufuri<br /> <br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed/w8QB8jPNAag\'></iframe><br>', 'herimorn_christon', 'none', '2022-07-28 23:55:50', 'no', 'yes', 0, '', 0),
(115, 'mazishi ya hayati john pombe magufuri<br /> <br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed/w8QB8jPNAag\'></iframe><br>', 'herimorn_christon', 'none', '2022-07-28 23:55:56', 'no', 'yes', 0, '', 0),
(116, 'prof lugano kasifia chuo kikuu mzumbe https://youtu.be/K77vp2YvTmY<br /> ', 'herimorn_christon', 'none', '2022-07-28 23:57:46', 'no', 'no', 1, '', 0),
(117, 'profesor lugano asifia chuo kikuu mzumbe<br /> <br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed/K77vp2YvTmY\'></iframe><br>', 'herimorn_christon', 'none', '2022-07-28 23:58:42', 'no', 'no', 0, '', 0),
(118, 'this is amaizing song', 'herimorn_christon', 'none', '2022-07-31 18:07:45', 'no', 'no', 0, '', 0),
(119, 'this amaing song<br /> <br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed/bLF90M96m2Q\'></iframe><br>', 'herimorn_christon', 'none', '2022-07-31 18:08:02', 'no', 'no', 1, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `trends`
--

CREATE TABLE `trends` (
  `title` varchar(50) NOT NULL,
  `hits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trends`
--

INSERT INTO `trends` (`title`, `hits`) VALUES
('Hiii', 1),
('Mzumbe', 4),
('Tarent', 3),
('Showbr', 3),
('Talent', 1),
('Cocacola', 1),
('Matangazo', 1),
('HehwDFHVHBVL', 1),
('BG', 1),
('CFAsACDGJCV', 1),
('QYACYEFCV', 1),
('Gqwdyfcv', 1),
('Uvuqefycg', 1),
('QwVUCF', 1),
('Unyama', 1),
('Saana', 1),
('Mshua', 1),
('News', 1),
('Amaizing', 1),
('Song', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `signup_date` date NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `num_posts` int(11) NOT NULL,
  `num_likes` int(11) NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `friend_array` text NOT NULL,
  `user_role` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `signup_date`, `profile_pic`, `num_posts`, `num_likes`, `user_closed`, `friend_array`, `user_role`) VALUES
(12, 'Herimorn', 'Christon', 'herimorn_christon', 'Herimornix@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-06-29', 'assets/images/profile_pics/defaults/head_deep_blue.png', 8, 4, 'no', ',justina_tarimo,', 'students'),
(13, 'Justina', 'Tarimo', 'justina_tarimo', 'Justina@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2022-06-29', 'assets/images/profile_pics/defaults/head_deep_blue.png', 1, 0, 'no', ',janeth_mkama,herimorn_christon,', 'students'),
(14, 'Janeth', 'Mkama', 'janeth_mkama', 'Janeth@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-06-30', 'assets/images/profile_pics/defaults/head_deep_blue.png', 0, 0, 'no', ',justina_tarimo,', 'students'),
(15, 'Zainabu', 'Ruhumba', 'zainabu_ruhumba', 'Zainabu@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-06-30', 'assets/images/profile_pics/defaults/head_emerald.png', 0, 0, 'no', ',', 'staff'),
(17, 'Amos', 'Abdallah', 'amos_abdallah', 'Amos@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-07-02', 'assets/images/profile_pics/defaults/head_deep_blue.png', 0, 0, 'no', ',', 'students'),
(18, 'Jonas', 'Joseph', 'jonas_joseph', 'Jonas@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-07-02', 'assets/images/profile_pics/defaults/head_deep_blue.png', 0, 0, 'no', ',', 'students'),
(19, '', '', 'jose', 'jose@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', '', 0, 0, '', '', ''),
(20, 'Perez', 'John', 'perez_john', 'Perez@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2022-07-19', 'assets/images/profile_pics/defaults/head_emerald.png', 0, 0, 'no', ',', 'muso'),
(22, '', '', 'konz', 'konz@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', '', 0, 0, '', '', 'staff'),
(23, '', '', 'joseph', 'joseph@gmail.com', '202cb962ac59075b964b07152d234b70', '0000-00-00', '', 0, 0, '', '', 'muso');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `friend_requests`
--
ALTER TABLE `friend_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes` (`likes`),
  ADD KEY `likes_2` (`likes`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `friend_requests`
--
ALTER TABLE `friend_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
