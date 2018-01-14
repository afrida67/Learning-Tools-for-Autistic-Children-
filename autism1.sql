-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2016 at 06:24 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `autism1`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(4) NOT NULL,
  `cat_name` varchar(40) NOT NULL,
  `age` int(10) NOT NULL,
  UNIQUE KEY `cat_name` (`cat_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `age`) VALUES
(1, 'Question Set 1', 10),
(1, 'Question Set 2', 10),
(1, 'Question Set 3', 15);

-- --------------------------------------------------------

--
-- Table structure for table `drawing`
--

CREATE TABLE IF NOT EXISTS `drawing` (
  `name` varchar(250) NOT NULL,
  `source` varchar(300) NOT NULL,
  `pic` varchar(250) NOT NULL,
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drawing`
--

INSERT INTO `drawing` (`name`, `source`, `pic`) VALUES
('কাঠের পুতুল ', 'http://www.do2learn.com/games/coloring/native_american/kachinadoll.swf', 'images/p1.png'),
('জোড়া জুতা', 'http://www.do2learn.com/games/coloring/native_american/moccasins.swf', 'images/p2.png'),
('টোট্যাম', 'http://www.do2learn.com/games/coloring/native_american/totem.swf', 'images/p6.png'),
('পাখি', 'http://www.do2learn.com/games/coloring/native_american/thunderbird.swf', 'images/p5.png'),
('রাজকন্যা', 'http://www.do2learn.com/games/coloring/native_american/indiangirl.swf', 'images/p4.png'),
('রাজকুমার', 'http://www.do2learn.com/games/coloring/native_american/indianboy.swf', 'images/p3.png');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `name` varchar(250) NOT NULL,
  `source` varchar(300) NOT NULL,
  `ins` varchar(400) NOT NULL,
  `pic` varchar(150) NOT NULL,
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`name`, `source`, `ins`, `pic`) VALUES
('টিক টাই টো', 'Games/tic/tictac.html', 'পছন্দের ঘরটিতে মাউস  ক্লিক করো।', 'im/m5.png'),
('ড্র্যাগ করো ,ড্রপ করো', 'Games/1a/index.html', 'নামের উপর ফলগুলুকি টেনে বসাও ।', 'im/m3.png'),
('ম্যাচিং গেম', 'Games/match/aut.htm', 'নির্দেশনা  অনুযায়ী  টাইলস বা বাক্সগুলো সরাও \r\n\r\nএবং ক্রমানুসারে সাজিয়ে অর্থপূর্ণ বাক্য বাসংখ্যার\r\n ক্রম ঠিক করো।', 'im/m2.png'),
('স্পীড টেস্ট গেম', 'Games/speed/speed.html', 'কয়েনগুলো তে ক্লিক করে সময় ও স্পীড টেস্ট করে নাও।', 'im/m6.png'),
('স্মৃতিশক্তির খেলা', 'Games/memory/m1.html', 'টাইল্স গুলুকি  উঠিয়ে দেখো আর বাকীগুলি থেকে \r\n\r\nএকই  রকম টাইলসটি খুঁজে  বের করো ', 'im/m1.png');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
  `category` varchar(100) CHARACTER SET utf8 NOT NULL,
  `age` varchar(100) CHARACTER SET utf8 NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `source` varchar(200) CHARACTER SET utf8 NOT NULL,
  `lang` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`source`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`category`, `age`, `title`, `source`, `lang`) VALUES
('ecademics', '1-5', 'বাংলাদেশ নিয়ে শেখা ', 'addvdo.MP4', 'bangla'),
('social skill', '6-15', 'অনুভূতি  উন্নয়ন করা', 'emotions.mp4', 'english'),
('ecademics', '1-5', 'ফুলের নাম শেখা', 'flowers.mp4', 'english'),
('ecademics', '1-5', 'ফুলের নাম শেখা', 'flowers1.mp4', 'english'),
('ecademics', '1-5', 'ফলের নাম শেখা', 'fruits.mp4', 'english'),
('ecademics', '1-5', 'ফলের নাম শেখা', 'fruits1.mp4', 'english'),
('ecademics', '1-5', 'ফলের নাম শেখা', 'fruits2.mp4', 'english'),
('ecademics', '6-15', 'Twinkle Twinkle ছড়া', 'https://www.youtube.com/embed/-JRJibhgwUQ', 'english'),
('ecademics', '6-15', '1 2 3 নাম্বার শেখার গান ', 'https://www.youtube.com/embed/4sHOH_zsRl4?list=RD75p-N9YKqNo', 'english'),
('ecademics', '1-5', 'বাংলাদেশ', 'https://www.youtube.com/embed/68kxTNB3DCY', 'bangla'),
('ecademics', '6-15', 'ABC শেখার গান', 'https://www.youtube.com/embed/75p-N9YKqNo', 'english'),
('ecademics', '1-5', 'বর্ণমালা শেখার গান', 'https://www.youtube.com/embed/AmixXC-7K9U?list=PLxJHHliM3_gK7UUdbeRJbR0NuKXQ4jf2m', 'bangla'),
('general knowledge', '1-5', 'শরীরের বিভিন্ন অঙ্গ', 'https://www.youtube.com/embed/aMXbuq6WnAM', 'bangla'),
('ecademics', '1-5', 'হাত্তিমাতিম তিম', 'https://www.youtube.com/embed/EHzMz5RABFs', 'bangla'),
('ecademics', '6-15', 'নম্বর শেখা', 'https://www.youtube.com/embed/eP8BqxKvm9U?list=PLHQGeMgsZrGjmhRNcIleqkhRBF1CdMlnm', 'bangla'),
('ecademics', '6-15', '1 2 3 শেখার গান', 'https://www.youtube.com/embed/HOWt5un1-Ts?list=PL9bsPVRSg1sn_Op6yAQ54Rr1fniByD8UI', 'english'),
('ecademics', '6-15', 'মাসের নাম', 'https://www.youtube.com/embed/JABPMyXTZcs', 'english'),
('ecademics', '6-15', 'খাবারের নাম', 'https://www.youtube.com/embed/lkRyszrv9fg?list=PLHQGeMgsZrGjmhRNcIleqkhRBF1CdMlnm', 'bangla'),
('ecademics', '6-15', 'ভোর হল দোর খোল', 'https://www.youtube.com/embed/P6BNCKROqfk', 'bangla'),
('ecademics', '1-5', 'ফলের নাম ', 'https://www.youtube.com/embed/PbUK6hRu22w?list=PLHQGeMgsZrGjmhRNcIleqkhRBF1CdMlnm', 'bangla'),
('social skill', '6-15', 'ভালো অভ্যাস', 'https://www.youtube.com/embed/Qj9cH5c2xHs?list=PLHQGeMgsZrGjmhRNcIleqkhRBF1CdMlnm', 'bangla'),
('ecademics', '1-5', 'বাংলা ছড়া', 'https://www.youtube.com/embed/RGUEsqqK2Mc', 'bangla'),
('ecademics', '6-15', 'বিভিন্ন আকার', 'https://www.youtube.com/embed/ssEGA7GgKWY?list=PLHQGeMgsZrGjmhRNcIleqkhRBF1CdMlnm', 'bangla'),
('ecademics', '6-15', 'সপ্তাহের নাম', 'https://www.youtube.com/embed/t9TE7-pafPE?list=PLHQGeMgsZrGjmhRNcIleqkhRBF1CdMlnm', 'bangla'),
('general knowledge', '6-15', 'যানবাহন', 'https://www.youtube.com/embed/XvMEtmEcv2s?list=PLHQGeMgsZrGjmhRNcIleqkhRBF1CdMlnm', 'bangla'),
('general knowledge', '6-15', 'বিভিন্ন রঙ', 'https://www.youtube.com/embed/ZJ-zOYWJvYU?list=PLHQGeMgsZrGjmhRNcIleqkhRBF1CdMlnm', 'bangla');

-- --------------------------------------------------------

--
-- Table structure for table `picturetool`
--

CREATE TABLE IF NOT EXISTS `picturetool` (
  `category` varchar(150) NOT NULL,
  `age` varchar(150) NOT NULL,
  `topics` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `tag` varchar(150) NOT NULL,
  `source` varchar(150) NOT NULL,
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `picturetool`
--

INSERT INTO `picturetool` (`category`, `age`, `topics`, `name`, `tag`, `source`) VALUES
('ecademics', '1-5', 'কখগ শেখা', ' ক', 'কখগ', 'assetsp/img/tmp/k1.jpg'),
('ecademics', '1-5', 'কখগ শেখা', ' খ', 'কখগ', 'assetsp/img/tmp/k2.jpg'),
('ecademics', '1-5', 'কখগ শেখা', ' গ', 'কখগ ', 'assetsp/img/tmp/k3.jpg'),
('ecademics', '1-5', 'কখগ শেখা', ' ঘ', 'কখগ ', 'assetsp/img/tmp/k4.jpg'),
('ecademics', '1-5', 'কখগ শেখা', ' চ', 'কখগ ', 'assetsp/img/tmp/k5.jpg'),
('ecademics', '1-5', 'কখগ শেখা', ' হ ', 'কখগ', 'assetsp/img/tmp/k6.jpg'),
('ecademics', '1-5', '123 শেখা', '1', '123', 'assetsp/img/tmp/p7.jpg'),
('ecademics', '1-5', '123 শেখা', '2', '123', 'assetsp/img/tmp/p8.jpg'),
('ecademics', '1-5', '123 শেখা', '3', '123', 'assetsp/img/tmp/p9.jpg'),
('ecademics', '1-5', '123 শেখা', '4', '123', 'assetsp/img/tmp/p10.jpg'),
('ecademics', '1-5', '123 শেখা', '5', '123', 'assetsp/img/tmp/p11.jpg'),
('ecademics', '1-5', '123 শেখা', '6', '123', 'assetsp/img/tmp/p12.jpg'),
('ecademics', '1-5', 'ABC শেখা', 'A', 'ABC', 'assetsp/img/tmp/b0.jpg'),
('ecademics', '6-15', 'ফুলের নাম শেখা', 'aa', 'Flowers', 'assetsp/img/tmp/f1.jpg'),
('ecademics', '6-15', 'ফলের নাম শেখা', 'Apple', 'Fruits', 'assetsp/img/tmp/r1.jpg'),
('ecademics', '1-5', 'ABC শেখা', 'B', 'ABC', 'assetsp/img/tmp/b1.jpg'),
('ecademics', '6-15', 'ফলের নাম শেখা', 'Banana', 'Fruits', 'assetsp/img/tmp/r2.jpg'),
('ecademics', '1-5', 'ABC শেখা', 'C', 'ABC', 'assetsp/img/tmp/b2.jpg'),
('ecademics', '6-15', 'ফুলের নাম শেখা', 'cc', 'Flowers', 'assetsp/img/tmp/f2.jpg'),
('ecademics', '1-5', 'ABC শেখা', 'D', 'ABC', 'assetsp/img/tmp/b3.jpg'),
('ecademics', '6-15', 'ফুলের নাম শেখা', 'df', 'Flowers', 'assetsp/img/tmp/f3.jpg'),
('ecademics', '1-5', 'ABC শেখা', 'E', 'ABC', 'assetsp/img/tmp/b4.jpg'),
('ecademics', '1-5', 'ABC শেখা', 'F', 'ABC', 'assetsp/img/tmp/b5.jpg'),
('ecademics', '6-15', 'ফুলের নাম শেখা', 'fj', 'Fruits', 'assetsp/img/tmp/f4.jpg'),
('ecademics', '6-15', 'ফলের নাম শেখা', 'Jackfruit', 'Fruits', 'assetsp/img/tmp/r3.jpg'),
('ecademics', '6-15', 'ফলের নাম শেখা', 'Lichi', 'Fruits', 'assetsp/img/tmp/r4.jpg'),
('ecademics', '6-15', 'ফলের নাম শেখা', 'Mango', 'Fruits', 'assetsp/img/tmp/r5.jpg'),
('ecademics', '6-15', 'ফুলের নাম শেখা', 'oo', 'Flowers', 'assetsp/img/tmp/f5.jpg'),
('ecademics', '6-15', 'ফলের নাম শেখা', 'Orange', 'Fruits', 'assetsp/img/tmp/r6.jpg'),
('ecademics', '1-5', 'অনুভুতি শেখা', 'Twinky', 'অনুভুতি', 'assetsp/img/tmp/v6.jpg'),
('ecademics', '6-15', 'ফুলের নাম শেখা', 'vv', 'Flowers', 'assetsp/img/tmp/f6.jpg'),
('ecademics', '6-15', 'দেশের নাম শিখা', 'ইন্ডিয়া', 'দেশের নাম ', 'assetsp/img/tmp/d5.jpg'),
('ecademics', '6-15', 'অনুভুতি শেখা', 'খুশি', 'অনুভুতি', 'assetsp/img/tmp/v1.jpg'),
('ecademics', '6-15', 'দেশের নাম শিখা', 'জাপান', 'দেশের নাম', 'assetsp/img/tmp/d1.jpg'),
('ecademics', '6-15', 'অনুভুতি শেখা', 'জ্ঞানী', 'অনুভুতি', 'assetsp/img/tmp/v2.jpg'),
('ecademics', '6-15', 'অনুভুতি শেখা', 'দুঃখিত\r\n', 'অনুভুতি', 'assetsp/img/tmp/v5.jpg'),
('ecademics', '6-15', 'দেশের নাম শিখা', 'নেপাল', 'দেশের নাম', 'assetsp/img/tmp/d2.jpg'),
('ecademics', '6-15', 'দেশের নাম শিখা', 'পাকিস্তান', 'দেশের নাম', 'assetsp/img/tmp/d3.jpg'),
('ecademics', '6-15', 'দেশের নাম শিখা', 'বাংলাদেশ', 'দেশের নাম', 'assetsp/img/tmp/d0.jpg'),
('ecademics', '6-15', 'অনুভুতি শেখা', 'মন খারাপ', 'অনুভুতি', 'assetsp/img/tmp/v3.jpg'),
('ecademics', '6-15', 'দেশের নাম শিখা', 'মা্লায়শিয়া\r\n', 'দেশের নাম', 'assetsp/img/tmp/d4.jpg'),
('ecademics', '6-15', 'অনুভুতি শেখা', 'রাগী\r\n', 'অনুভুতি', 'assetsp/img/tmp/v4.jpg'),
('ecademics', '1-5', '১২৩ শেখা', '১', '১২৩', 'assetsp/img/tmp/o1.jpg'),
('ecademics', '1-5', '১২৩ শেখা', '২', '১২৩ ', 'assetsp/img/tmp/o2.jpg'),
('ecademics', '1-5', '১২৩ শেখা', '৩ ', '১২৩ ', 'assetsp/img/tmp/o3.jpg'),
('ecademics', '1-5', '১২৩ শেখা', '৪', '১২৩', 'assetsp/img/tmp/o4.jpg'),
('ecademics', '1-5', '১২৩ শেখা', '৫', '১২৩ ', 'assetsp/img/tmp/o5.jpg'),
('ecademics', '1-5', '১২৩ শেখা', '৬', '১২৩', 'assetsp/img/tmp/o6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `ans1` varchar(100) NOT NULL,
  `ans2` varchar(100) NOT NULL,
  `ans3` varchar(100) NOT NULL,
  `ans4` varchar(100) NOT NULL,
  `ans` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `cat_id`) VALUES
(1, 'Which one is Butterfly ?', 'bd.png', '4.png', 'cow.png', 'fv.gif', 1, 1),
(2, 'Find the Blue Circle...', 'r.png', 'b.png', 'y.png', 'g.png', 1, 1),
(3, 'Which one is fruit?', 'ff.png', 'tt.png', 'ban.png', 'pen.png', 2, 1),
(4, 'Which one is our eye?', 'lip.png', 'eye.png', 'nose.png', 'hand.png', 1, 1),
(5, 'Calculate this Sum (2+2) ?', '5.png', '3.gif', '4p.png', '99.png', 2, 1),
(6, 'Which one is our national fruit?', 'sta.png', 'jk.png', 'vv.png', 'mn.png', 1, 1),
(7, 'Find the Happy Face :)', 'cc.png', 'aa.png', 'ss.png', 'sa.png', 2, 1),
(8, 'Which one is a little boy?', 'old.png', 'boy.png', 'girl.png', 'grg.png', 1, 1),
(9, 'Which one is our National Flag?', 'sss.png', 'vn.jpg', 'kkk.png', 'ii.png', 1, 1),
(10, 'Find the little bird..', 'mm.png', 'fid.png', 'bb.jpg', 'tty.png', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `enum` int(11) NOT NULL,
  `quesno` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `age`, `email`, `pass`, `img`, `enum`, `quesno`) VALUES
(1, 'Afrida Anzum Aesha', 7, 'aesha@gmail.com', 'aesha', 'quiz_oop/img/sf.jpg', 7, 'Question Set 1'),
(2, 'Lameya Afroz', 8, 'lameya@gmail.com', 'lameya', 'sg.jpg', 8, ''),
(3, 'Afsana Khan', 10, 'afsana@gmail.com', 'afsana', 'sc.jpg', 9, ''),
(4, 'Ashratuz Zavin', 9, 'asha@gmail.com', 'asha', 'sb.jpg', 6, ''),
(5, 'Juthi Sarkar', 5, 'juthi@gmail.com', 'juthi', 'se.jpg', 9, ''),
(6, 'Pranti Afrin Khan', 11, 'pranti@gmail.com', 'pranti', 'sd.jpg', 7, ''),
(7, 'Md Badal Rahman ', 10, 'bb@gmail.com', 'bb', 'quiz_oop/img/sc.jpg', 0, 'Question Set''1'),
(8, 'Md Badal Rahman ', 10, 'bb@gmail.com', 'bb', '40.jpg', 50, 'Question Set''2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `posting` varchar(150) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `username` (`username`,`password`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `username`, `password`, `gender`, `posting`) VALUES
('1', 'aaa@gmail.com', 'cc', 'cc', 'Male', 'Teacher'),
('aa', 'afsana@gmail.com', 'asasa', '123', 'Female', 'Teacher'),
('akaid', 'aka@gmail.com', 'aa', '123', 'Male', 'Teacher'),
('aa', 'ashzavin@gmail.com', 'asha', 'basha', 'Female', 'Admin'),
('bb', 'bb@gmail.com', 'bb', 'bb', 'Male', 'Teacher');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
