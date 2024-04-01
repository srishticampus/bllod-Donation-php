-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 11:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `private_tutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `democlass`
--

CREATE TABLE `democlass` (
  `id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `request_id` int(11) NOT NULL,
  `current_date` date NOT NULL,
  `current_time` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `demo_status` int(11) NOT NULL,
  `meeting` varchar(100) NOT NULL,
  `ques_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `democlass`
--

INSERT INTO `democlass` (`id`, `stud_id`, `date`, `time`, `request_id`, `current_date`, `current_time`, `type`, `demo_status`, `meeting`, `ques_id`) VALUES
(7, 3, '2021-05-28', '08:09 am', 9, '2021-05-23', '03:07 pm', 'Demo Class', 1, 'jkdfgjkfjkkk on skype', 0);

-- --------------------------------------------------------

--
-- Table structure for table `famous`
--

CREATE TABLE `famous` (
  `famous_id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `famous`
--

INSERT INTO `famous` (`famous_id`, `name`, `subject`, `description`, `file`) VALUES
(1, 'Albert Einstein', 'Mathematics', 'Without mathematics, there’s nothing you can do. <br>Everything around you is mathematics.<br> Everything around you is numbers.', 'uploads/f1b2bbe8-3701-4e7e-9654-976d901f38a5_Albert-Einstein.jpg'),
(2, 'Marcus du Sautoy', 'Mathematics', 'To me, mathematics, computer science, and <br>the arts are insanely related.<br> They’re all creative expressions.', 'uploads/b285c1ea-20b5-4a5b-9ffc-a72d2ba30914_Marcus-du-Sautoy.jpg'),
(3, 'William Shakespeare', 'English', 'A rose by any other name would smell as sweet.', 'uploads/william-shakespeare-194895-1-402.jpg'),
(4, 'Terry Pratchett, Lords and Ladies', 'Physics', 'In the beginning there was nothing, which exploded.', 'uploads/1654.jpg'),
(5, 'Thomas Jefferson', 'Physics', 'Our civil rights have no dependence on our religious opinions any<br> more than our opinions in physics or geometry...', 'uploads/1673.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `std` varchar(300) NOT NULL,
  `file` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `pay_name` varchar(100) NOT NULL,
  `card_no` varchar(300) NOT NULL,
  `cvc` varchar(100) NOT NULL,
  `expiration_month` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `expiration_year` varchar(100) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `payment_date` varchar(100) NOT NULL,
  `payment_time` varchar(100) NOT NULL,
  `pay_status` varchar(100) NOT NULL,
  `account_no` varchar(100) NOT NULL,
  `ifsc` varchar(300) NOT NULL,
  `bank` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `pay_name`, `card_no`, `cvc`, `expiration_month`, `amount`, `expiration_year`, `stud_id`, `request_id`, `payment_date`, `payment_time`, `pay_status`, `account_no`, `ifsc`, `bank`) VALUES
(12, 'Athira Surendran', '0987654321223456789', '123', '12', '250', '2024', 3, 9, '2021-05-23', '02:46 pm', 'Payment Approved', '', '', ''),
(13, 'Athira Surendran', '0987654321223456789', '213', '12', '250', '2024', 3, 9, '2021-05-23', '03:02 pm', 'Payment Approved', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `rateing`
--

CREATE TABLE `rateing` (
  `rateing_id` int(11) NOT NULL,
  `star_count` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `rateing_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rateing`
--

INSERT INTO `rateing` (`rateing_id`, `star_count`, `tutor_id`, `stud_id`, `title`, `comment`, `date`, `rateing_status`) VALUES
(1, 4, 3, 1, 'Good', 'Gooooooooooooooooooooooooooooood', '2021-05-20', 'Yes'),
(2, 4, 2, 3, 'PROGRAMMING PERFORMANCE', 'sdffdfddfdf', '2021-05-23', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  `rateing_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `stud_id`, `tutor_id`, `status`, `payment_status`, `rateing_status`) VALUES
(9, 3, 2, 'Approved', 'Payment Approved', 'Yes'),
(10, 2, 2, 'Requested', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `stud_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `district` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `std` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`stud_id`, `name`, `email`, `phone`, `address`, `district`, `password`, `std`) VALUES
(2, 'Arathi Surendran', 'arathi@gmail.com', '8907654321', ' Thonikadavil\r\n            ', 'Pathanamthitta', 'Arathi123', 'X'),
(3, 'Adarsh', 'adarsh@gmail.com', '9087654321', 'asdfg', 'Thiruvananthapuram', 'Adarsh@123', 'X');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `description` varchar(700) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `subject`, `amount`, `description`, `image`) VALUES
(7, 'Physics', '250', 'Physics is the branch of science that deals with the structure of matter<br> and how the fundamental constituents of the universe interact', 'uploads/123.png'),
(8, 'Mathematics', '250', 'Mathematics is the science that deals with the logic of shape,<br> quantity and arrangement.', 'uploads/Branches-of-Mathematics.png'),
(9, 'Chemistry', '250', 'Chemistry is the scientific discipline involved with elements and<br> compounds composed of atoms, molecules and ions', 'uploads/download (4).jpg'),
(10, 'English', '250', 'English is a West Germanic language first spoken in early medieval England.', 'uploads/English_language_distribution.svg.png'),
(11, 'Malayalam', '200', 'The word Malayalam originated from the words mala,<br> meaning \"mountain\", and alam, meaning \"region\" or \"-ship\" (as in \"township\"); <br>Malayalam thus translates directly as \"the mountain region.\" ', 'uploads/Malayalam_Script_(Aksharamala)_letters_-_word_colud.svg.png'),
(12, 'Hindi', '200', 'The term Hindī originally was used to refer to inhabitants of the Indo-Gangetic Plain.', 'uploads/767741-731142-download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_registration`
--

CREATE TABLE `tutor_registration` (
  `tutor_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor_registration`
--

INSERT INTO `tutor_registration` (`tutor_id`, `firstname`, `lastname`, `email`, `phone`, `address`, `password`, `district`, `subject`, `status`, `amount`, `image`, `date`, `time`) VALUES
(2, 'Aarthi', 'Ashok', 'aarthi@gmail.com', '9045678321', 'dfgh', 'Arthi123', 'Thiruvananthapuram', 'English', 'Approved', 250, 'uploads/39c6fbd9522264d3b2f3e665108adbaa.png', '2021/05/22', '03:51 pm'),
(3, 'Athira', 'Surendran', 'athira@gmail.com', '7890654321', 'Thoikadavil', 'Athira123', 'Pathanamthitta', 'Mathematics', 'Approved', 300, 'uploads/2eb48020ec08e3bfca0c54be3db516f9.png', '2021/05/20', '07:08 pm');

-- --------------------------------------------------------

--
-- Table structure for table `upload_question`
--

CREATE TABLE `upload_question` (
  `ques_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL,
  `exam_status` int(11) NOT NULL,
  `answer_file` varchar(100) NOT NULL,
  `answer_up_status` int(11) NOT NULL,
  `answerdate` varchar(100) NOT NULL,
  `answertime` varchar(100) NOT NULL,
  `complete_status` int(11) NOT NULL,
  `mark` int(11) NOT NULL,
  `view_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `democlass`
--
ALTER TABLE `democlass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `famous`
--
ALTER TABLE `famous`
  ADD PRIMARY KEY (`famous_id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `rateing`
--
ALTER TABLE `rateing`
  ADD PRIMARY KEY (`rateing_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `tutor_registration`
--
ALTER TABLE `tutor_registration`
  ADD PRIMARY KEY (`tutor_id`);

--
-- Indexes for table `upload_question`
--
ALTER TABLE `upload_question`
  ADD PRIMARY KEY (`ques_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `democlass`
--
ALTER TABLE `democlass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `famous`
--
ALTER TABLE `famous`
  MODIFY `famous_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `rateing`
--
ALTER TABLE `rateing`
  MODIFY `rateing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tutor_registration`
--
ALTER TABLE `tutor_registration`
  MODIFY `tutor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `upload_question`
--
ALTER TABLE `upload_question`
  MODIFY `ques_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
