-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 04:53 PM
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
(7, 3, '2021-05-28', '08:09 am', 9, '2021-05-23', '03:07 pm', 'Demo Class', 1, 'jkdfgjkfjkkk on skype', 0),
(8, 2, '2021-07-16', '01:00 pm', 12, '2021-07-12', '04:18 pm', 'Demo Class', 1, 'jkdfgjkfjkkk on skype', 0),
(9, 5, '2021-07-16', '01:00 pm', 13, '2021-07-12', '04:18 pm', 'Demo Class', 1, 'jkdfgjkfjkkk on skype', 0),
(10, 2, '2021-07-30', '10:30 am-01:30 pm', 12, '2021-07-12', '04:21 pm', 'Exam', 0, '', 4),
(12, 6, '2021-07-22', '02:14 pm', 14, '2021-07-21', '11:14 am', 'Demo Class', 1, 'sdfdsffd on skype', 0),
(13, 6, '2021-07-31', '08:41 am-10:41 am', 14, '2021-07-22', '04:42 pm', 'Exam', 0, '', 6);

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

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `tutor_id`, `subject`, `std`, `file`, `date`, `time`) VALUES
(3, 5, 'Physics', 'X', 'uploads/Android Humanoid robot.docx', '2021-07-12', '04:29 pm'),
(4, 6, 'Physics', 'IV', 'uploads/UITextField.pdf', '2021-07-22', '04:34 pm');

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
(13, 'Athira Surendran', '0987654321223456789', '213', '12', '250', '2024', 3, 9, '2021-05-23', '03:02 pm', 'Payment Approved', '', '', ''),
(14, 'Athira Surendran', '0000000000000000000', '123', '12', '200', '2022', 4, 11, '2021-06-07', '10:08 am', 'Payment Approved', '', '', ''),
(15, 'arathysurendran', '0999767544444444444', '312', '12', '200', '2022', 2, 12, '2021-07-06', '04:58 pm', 'Payment Approved', '', '', ''),
(16, 'Nithin P J sdsdsdsd', '9087656543221211333', '123', '12', '200', '2024', 5, 13, '2021-07-12', '04:17 pm', 'Payment Approved', '', '', ''),
(17, 'Athira Surendran', '5555555555555555555', '123', '12', '200', '2027', 6, 14, '2021-07-21', '11:13 am', 'Payment Approved', '', '', ''),
(18, 'arathysurendran', '9999999999999999999', '234', '09', '200', '2024', 6, 14, '2021-07-28', '03:35 pm', 'Payment Approved', '', '', '');

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
(2, 4, 2, 3, 'PROGRAMMING PERFORMANCE', 'sdffdfddfdf', '2021-05-23', 'Yes'),
(3, 4, 5, 5, 'Good Tutor', 'Gooooood', '2021-07-12', 'Yes');

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
(10, 2, 2, 'Requested', '', ''),
(11, 4, 5, 'Approved', 'Payment Approved', ''),
(12, 2, 5, 'Approved', 'Payment Approved', ''),
(13, 5, 5, 'Approved', 'Payment Approved', 'Yes'),
(14, 6, 6, 'Approved', 'Payment Approved', ''),
(16, 4, 2, 'Requested', '', '');

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
  `std` varchar(50) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`stud_id`, `name`, `email`, `phone`, `address`, `district`, `password`, `std`, `gender`, `dob`) VALUES
(2, 'Arathi Surendran', 'arathi@gmail.com', '8907654321', ' Thonikadavil\r\n            ', 'Pathanamthitta', 'Arathi123', 'X', '', ''),
(3, 'Adarsh', 'adarsh@gmail.com', '9087654321', 'asdfg', 'Thiruvananthapuram', 'Adarsh@123', 'X', '', ''),
(4, 'athi', 'athi@gmail.com', '9886756544', 'abcd', 'Pathanamthitta', 'athi@123', 'X', 'Female', '1994-06-08'),
(5, 'Nithin Pj', 'nithin@gmail.com', '90876544321', 'asdfg', 'Kollam', '1234', 'X', 'Male', '2006-07-12'),
(6, 'pravitha', 'pravitha@gmail.com', '9656124249', 'fds', 'Thrissur', '123', 'X', 'Female', '2009-01-21');

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
  `time` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor_registration`
--

INSERT INTO `tutor_registration` (`tutor_id`, `firstname`, `lastname`, `email`, `phone`, `address`, `password`, `district`, `subject`, `status`, `amount`, `image`, `date`, `time`, `gender`, `dob`) VALUES
(2, 'Aarthi', 'Ashok', 'aarthi@gmail.com', '9045678321', 'dfgh', 'Arthi123', 'Thiruvananthapuram', 'English', 'Approved', 250, 'uploads/39c6fbd9522264d3b2f3e665108adbaa.png', '2021/05/22', '03:51 pm', '', ''),
(3, 'Athira', 'Surendran', 'athira@gmail.com', '7890654321', 'Thoikadavil', 'Athira123', 'Pathanamthitta', 'Mathematics', 'Approved', 300, 'uploads/2eb48020ec08e3bfca0c54be3db516f9.png', '2021/05/20', '07:08 pm', '', ''),
(4, 'Suja', 'Surendran', 'suja@gmail.com', '9087654320', 'asddd', 'suja123', 'Pathanamthitta', 'Malayalam', 'Approved', 250, 'uploads/2eb48020ec08e3bfca0c54be3db516f9.png', '2021/06/01', '09:57 am', 'Female', '1994-06-07'),
(5, 'Adarsh', 'M', 'adarsh@gmail.com', '9087654321', 'asdfg', '1234', 'Thiruvananthapuram', 'Physics', 'Approved', 200, 'uploads/3cf9e92a9b84222dde8de71c20342a7e.png', '2021/06/07', '09:41 am', 'Male', '1996-09-19'),
(6, 'Sindhu', 'Prasad', 'sindhu@gmail.com', '9087654321', 'anbggg', '123', 'Pathanamthitta', 'English', 'Approved', 200, 'uploads/2eb48020ec08e3bfca0c54be3db516f9.png', '2021/07/21', '11:08 am', 'Female', '1992-06-21'),
(7, 'neethu', 'pj', 'neethu@gmailcom', '9087654342', 'advbbhhh', '1234', 'Thiruvananthapuram', 'Physics', 'Approved', 200, 'uploads/2eb48020ec08e3bfca0c54be3db516f9.png', '2021/07/28', '03:29 pm', 'Female', '2010-08-02');

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
-- Dumping data for table `upload_question`
--

INSERT INTO `upload_question` (`ques_id`, `date`, `time`, `stud_id`, `tutor_id`, `request_id`, `subject`, `file`, `end_time`, `exam_status`, `answer_file`, `answer_up_status`, `answerdate`, `answertime`, `complete_status`, `mark`, `view_status`) VALUES
(4, '2021-07-12', '04:25 pm', 2, 5, 12, 'Physics', 'uploads/Artificial Intelligence In Humanoid Robots.docx', '01:30 pm', 0, '', 0, '', '', 0, 0, 1),
(6, '2021-07-31', '08:41 am', 6, 6, 14, 'English', 'uploads/UITextFieldDelegate.pdf', '10:41 am', 0, '', 0, '', '', 0, 0, 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `famous`
--
ALTER TABLE `famous`
  MODIFY `famous_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `rateing`
--
ALTER TABLE `rateing`
  MODIFY `rateing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tutor_registration`
--
ALTER TABLE `tutor_registration`
  MODIFY `tutor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `upload_question`
--
ALTER TABLE `upload_question`
  MODIFY `ques_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
