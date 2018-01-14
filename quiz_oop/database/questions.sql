-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2016 at 07:43 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz_oops`
--

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
(1, 'Which one is Butterfly আমি ?', 'bd.png', '4.png', 'cow.png', 'fv.gif', 1, 1),
(2, 'Find the Blue Circle...', 'r.png', 'b.png', 'y.png', 'g.png', 1, 1),
(3, 'Which one is fruit?', 'ff.png', 'tt.png', 'ban.png', 'pen.png', 2, 1),
(4, 'Which one is our eye?', 'lip.png', 'eye.png', 'nose.png', 'hand.png', 1, 1),
(5, 'Calculate this Sum (2+2) ?', '5.png', '3.gif', '4p.png', '99.png', 2, 1),
(6, 'Which one is our national fruit?', 'sta.png', 'jk.png', 'vv.png', 'mn.png', 1, 1),
(7, 'Find the Happy Face :)', 'cc.png', 'aa.png', 'ss.png', 'sa.png', 2, 1),
(8, 'Which one is a little boy?', 'old.png', 'boy.png', 'girl.png', 'grg.png', 1, 1),
(9, 'Which one is our National Flag?', 'sss.png', 'vn.jpg', 'kkk.png', 'ii.png', 1, 1),
(10, 'Find the little bird..', 'mm.png', 'fid.png', 'bb.jpg', 'tty.png', 2, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
