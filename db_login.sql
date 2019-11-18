-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2019 at 02:23 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adminPass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `Fname`, `email`, `adminPass`) VALUES
(1, 'Mohammad Bin Mahfuz', 'mahfuz020577@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ans1`
--

CREATE TABLE `tb_ans1` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `writer` varchar(100) NOT NULL,
  `answer` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ans1`
--

INSERT INTO `tb_ans1` (`id`, `post_id`, `userid`, `writer`, `answer`, `date`, `status`) VALUES
(16, 28, 2, 'redwan', 'we  r gooodwe  r gooodwe  r gooodwe  r gooodwe  r gooodwe  r gooodwe  r gooodwe  r gooodwe  r gooodwe  r gooodwe  r gooodwe  r gooodwe  r gooodwe  r gooodwe  r gooodwe  r gooodwe  r gooodwe  r gooodwe  r gooodwe  r gooodwe  r gooodwe  r gooodwe  r gooodwe  r goood', '2019-11-17 20:40:38', 1),
(17, 28, 2, 'red', 'we  r gooodwe  r gooodwe  r gooodwe  r php php we  r gooodwe  r gooodwe  r gooodwe  r php php we  r gooodwe  r gooodwe  r gooodwe  r php php we  r gooodwe  r gooodwe  r gooodwe  r php php we  r gooodwe  r gooodwe  r gooodwe  r php php we  r gooodwe  r gooodwe  r gooodwe  r php php we  r gooodwe  r gooodwe  r gooodwe  r php php we  r gooodwe  r gooodwe  r gooodwe  r php php ', '2019-11-17 20:40:38', 1),
(24, 28, 6, 'html', 'well u can do like this,,,,,well u can do like this,,,,,well u can do like this,,,,,well u can do like this,,,,,well u can do like this,,,,,well u can do like this,,,,,well u can do like this,,,,,well u can do like this,,,,,well u can do like this,,,,,well u can well u can do like this,,,,,well u can do like this,,,,,well u can do like this,,,,,well u can do like this,,,,,well u can do like this,,,,,well u can do like this,,,,,well u can do like this,,,,,well u can do like this,,,,,well u can do like this,,,,,well u can well u can do like this,,,,,well u can do like this,,,,,well u can do like this,,,,,well u can do like this,,,,,well u can do like this,,,,,well u can do like this,,,,,well u can do like this,,,,,well u can do like this,,,,,well u can do like this,,,,,well u can ', '2019-11-16 23:51:09', 1),
(27, 28, 2, 'css', 'sccsssccsssccsssccss sccsssccsssccsssccsssccsssccsssccsssccsssccsssccsssccsssccsssccss sccsssccsssccss', '2019-11-18 00:44:12', 1),
(37, 31, 6, 'md', 'ddddddddddddddddddddd', '2019-11-07 21:30:47', 1),
(38, 32, 6, 'JOLY', 'SUN MOONSUN MOONSUN MOONSUN MOONSUN MOONSUN MOONSUN MOONSUN MOONSUN MOON', '2019-11-06 03:16:04', 1),
(40, 36, 2, 'NOOR', 'YES ANSWER', '2019-11-15 08:51:09', 0),
(41, 37, 16, 'Nabis', 'this is this is this is this is this is this is this is this is this is this is this is this is this is this is ', '2019-11-08 21:41:10', 0),
(42, 31, 2, 'Petter', 'Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....Yes we can do .....', '2019-11-15 09:43:10', 1),
(43, 39, 2, 'salam ali', 'yes we can do like this yes we can do like this yes we can do like this yes we can do like this yes we can do like this yes we can do like this yes we can do like this yes we can do like this yes we can do like this yes we can do like this yes we can do like this yes we can do like this yes we can do like this yes we can do like this yes we can do like this yes we can do like this yes we can do like this yes we can do like this yes we can do like this yes we can do like this yes we can do like this yes we can do like this yes we can do like this yes we can do like this yes we can do like this yes we can do like this yes we can do like this yes we can do like this ', '2019-11-18 00:22:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cat`
--

CREATE TABLE `tb_cat` (
  `id` int(11) NOT NULL,
  `catName` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cat`
--

INSERT INTO `tb_cat` (`id`, `catName`) VALUES
(1, 'PHP'),
(2, 'JAVA SCRIPT'),
(3, 'CSS'),
(4, 'HTML ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_post1`
--

CREATE TABLE `tb_post1` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `author` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_post1`
--

INSERT INTO `tb_post1` (`id`, `cat_id`, `user`, `author`, `title`, `body`, `date`) VALUES
(28, 1, 2, 'mohammad bin ', 'php kool', 'wht is phpwht is phpwht is phpwht is phpwht is phpwht is phpwht is phpwht is phpwht is phpwht is phpwht is phpwht is phpwht is phpwht is phpwht is phpwht is phpwht is phpwht is phpwht is php', '2019-11-07 21:07:03'),
(31, 1, 6, 'Redwn ali', 'wht is server side lan??', 'as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask....as i know better ask.... ', '2019-11-03 11:46:16'),
(32, 4, 2, 'Tareq ZAMIL QASSEM', 'HYPER TEXT ', 'WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? WHT IS HTML TAGS ARE?? .', '2019-11-11 00:13:17'),
(33, 3, 2, 'Ahmed', 'Cascading Style Sheet', 'How to make lib with css???,....How to make lib with css???,....How to make lib with css???,....How to make lib with css???,....How to make lib with css???,....How to make lib with css???,....How to make lib with css???,.... How to make lib with css???,....How to make lib with css???,....How to make lib with css???,....How to make lib with css???,....How to make lib with css???,....How to make lib with css???,....How to make lib with css???,....How to make lib with css???,....How to make lib with css???,....How to make lib with css???,....How to make lib with css???,....How to make lib with css???,....How to make lib with css???,....How to make lib with css???,....How to make lib with css???,....', '2019-11-03 11:38:28'),
(34, 1, 2, 'Zubair', 'PHP FUNCTIONS', 'Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? Why php need functions???? ', '2019-11-03 11:39:41'),
(35, 1, 2, 'Tazkia', 'PHP BD CONNECTION', 'How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  How to establish a db connection???  .', '2019-11-03 11:41:14'),
(36, 1, 6, 'Redwan', 'Php', 'can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli...........can we get data mysqli............', '2019-11-03 11:43:10'),
(37, 2, 6, 'Riad', 'Dom element', 'how to setup event listener............... ??? how to setup event listener............... ???how to setup event listener............... ???how to setup event listener............... ???how to setup event listener............... ???how to setup event listener............... ???how to setup event listener............... ???how to setup event listener............... ??? how to setup event listener............... ???how to setup event listener............... ???how to setup event listener............... ???how to setup event listener............... ???how to setup event listener............... ???how to setup event listener............... ???how to setup event listener............... ??? how to setup event listener............... ???how to setup event listener............... ???how to setup event listener............... ???how to setup event listener............... ???how to setup event listener............... ???how to setup event listener............... ???how to setup event listener............... ??? how to setup event listener............... ???how to setup event listener............... ???how to setup event listener............... ???how to setup event listener............... ???how to setup event listener............... ???how to setup event listener............... ???', '2019-11-03 11:44:45'),
(38, 1, 6, 'Suborna', 'php', 'how to do query ??how to do query ??how to do query ??how to do query ??how to do query ??how to do query ?? how to do query ??how to do query ??how to do query ??how to do query ??how to do query ??how to do query ??how to do query ?? how to do query ??how to do query ??how to do query ??how to do query ??how to do query ??how to do query ?? how to do query ??how to do query ??how to do query ??how to do query ??how to do query ??how to do query ??how to do query ??how to do query ??how to do query ??how to do query ??how to do query ??how to do query ??how to do query ??how to do query ??', '2019-11-03 11:45:41'),
(39, 1, 2, 'robi', 'mysqql', 'why it disturbingwhy it disturbingwhy it disturbingwhy it disturbingwhy it disturbingwhy it disturbingwhy it disturbingwhy it disturbingwhy it disturbingwhy it disturbingwhy it disturbingwhy it disturbingwhy it disturbing', '2019-11-04 00:36:09'),
(43, 1, 16, 'jhgf', ',mnbvc', ',mnbg', '2019-11-08 22:06:34'),
(44, 1, 16, 'jhgf', ',mnbvc', ',mnbg', '2019-11-08 22:09:34'),
(45, 1, 16, 'jhgf', ',mnbvc', ',mnbg', '2019-11-08 22:10:58'),
(46, 1, 2, 'Salam Ali', 'php function', ' wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ? wht php fun do ?v', '2019-11-18 00:17:52');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `Uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `userPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `Uname`, `email`, `userPass`) VALUES
(1, 'umma', 'uu@gmail.com', '14e1b600b1fd579f47433b88e8d85291'),
(2, 'Tareq Ahmed', 'loop@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(3, 'Zubair', 'nav@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(4, 'Rajib Khan', 'khan67@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(5, 'Mohammad Bin Mahfuz', '0202@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'redwan', 'red@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(7, 'tazkia', 'taz@gmail.com', '202cb962ac59075b964b07152d234b70'),
(8, 'tazkia', 'taz@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(9, 'TAZKIA2', 'taz@jmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'suborna', 'su@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(11, 'Nabhan', 'nav@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(12, 'Jamal', 'jam@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(13, 'kmal', 'kam@gmail.com', '202cb962ac59075b964b07152d234b70'),
(14, 'NABHAN', 'ban@hh.com', 'e10adc3949ba59abbe56e057f20f883e'),
(15, 'Nabhan', 'zu@gmail.com', '202cb962ac59075b964b07152d234b70'),
(16, 'Harry', 'hh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(17, 'Noor', 'noor@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_ans1`
--
ALTER TABLE `tb_ans1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `tb_cat`
--
ALTER TABLE `tb_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_post1`
--
ALTER TABLE `tb_post1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_ans1`
--
ALTER TABLE `tb_ans1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tb_cat`
--
ALTER TABLE `tb_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_post1`
--
ALTER TABLE `tb_post1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_ans1`
--
ALTER TABLE `tb_ans1`
  ADD CONSTRAINT `tb_ans1_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_post1`
--
ALTER TABLE `tb_post1`
  ADD CONSTRAINT `tb_post1_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `tb_cat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_post1_ibfk_2` FOREIGN KEY (`user`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
