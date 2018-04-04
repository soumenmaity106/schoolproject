-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2018 at 01:23 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_apkaschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email_address` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_role_name` varchar(50) NOT NULL,
  `admin_role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email_address`, `admin_password`, `admin_role_name`, `admin_role`) VALUES
(1, 'Arjun Prasad Yadav', 'apysan@gmail.com', 'edf1009903090813acdf58478797a61f', 'Admin', 1),
(2, 'Binay singh', 'binay@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Student', 2),
(3, 'Sangeeta Yadav', 'sangeeta@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Parent', 3),
(4, 'Admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', 0),
(5, 'Student', 'student@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Student', 0),
(6, 'Parent', 'parent@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Parent', 0),
(7, 'Teacher', 'teacher@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Teacher', 0),
(8, 'Librarian', 'librarian@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Librarian', 0),
(9, 'Receptionist', 'receptionist@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Receptionist', 0),
(10, 'Transporter', 'transporter@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Transporter', 0),
(11, 'Staff', 'staff@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Staff', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assignment`
--

CREATE TABLE `tbl_assignment` (
  `assignment_id` int(11) NOT NULL,
  `assignment_title` varchar(100) NOT NULL,
  `assignment_description` text NOT NULL,
  `assignment_deadline` varchar(20) NOT NULL,
  `assignment_class` varchar(100) NOT NULL,
  `assignment_section` varchar(10) NOT NULL,
  `assignment_subject` varchar(50) NOT NULL,
  `assignment_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_assignment`
--

INSERT INTO `tbl_assignment` (`assignment_id`, `assignment_title`, `assignment_description`, `assignment_deadline`, `assignment_class`, `assignment_section`, `assignment_subject`, `assignment_photo`) VALUES
(1, 'Mathamatic Assignment for class 5', 'This is Math Assignment', '03/29/2018', 'Five', 'B', 'Math', 'image/assignment_image/server_details.txt'),
(2, 'Prctical Accounting', 'A horough study of Accounts.   A horough study of Accounts.   A horough study of Accounts.   A horough study of Accounts.   A horough study of Accounts.   A horough study of Accounts.   A horough study of Accounts.   A horough study of Accounts.   ', '03/29/2018', 'Eight', 'B', 'Hindi', 'image/assignment_image/zzz.txt'),
(3, 'Sara Akash', 'A Novel in Hindi Literature must learn', '03/30/2018', 'Ten', 'Select Sec', 'Hindi', 'image/assignment_image/links.txt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `book_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_category` varchar(50) NOT NULL,
  `book_author` varchar(50) NOT NULL,
  `subject_code` varchar(20) NOT NULL,
  `book_price` decimal(10,2) NOT NULL,
  `book_qty` decimal(5,0) NOT NULL,
  `book_rack` varchar(20) NOT NULL,
  `book_publisher_name` varchar(100) NOT NULL,
  `book_publication_year` varchar(20) NOT NULL,
  `book_class` varchar(10) NOT NULL,
  `issue_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `return_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `d2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`book_id`, `category_id`, `book_name`, `book_category`, `book_author`, `subject_code`, `book_price`, `book_qty`, `book_rack`, `book_publisher_name`, `book_publication_year`, `book_class`, `issue_date`, `return_date`, `status`, `d2`) VALUES
(1, 0, 'The Ramayana in simple English', 'Mythological Books', 'Willium P. Dyne', 'MY001', '1500.00', '2', 'R001', 'Tata Mcgraw-Hill', '2018', 'IX', '2018-03-16 08:24:10', '0000-00-00 00:00:00', 1, 0),
(2, 0, 'Clash of Titans', 'Fiction', '', 'F002', '1650.00', '2', 'R005', '', '', '', '2018-03-16 08:58:57', '0000-00-00 00:00:00', 1, 0),
(3, 0, 'The Glory of Watson', 'Fiction', '', 'F002', '1800.00', '5', 'R006', '', '', '', '2018-03-16 09:01:55', '0000-00-00 00:00:00', 1, 0),
(4, 0, 'Sara Aakash', 'Fiction', 'Mahadevi |Verma', 'H126', '850.00', '10', 'R007', '', '', '', '2018-03-16 09:06:44', '0000-00-00 00:00:00', 1, 0),
(5, 0, 'My Experiment with Truth', 'Non-Fiction', 'Pt. Jawahar Lal Nehru', 'F008', '2900.00', '5', 'R008', '', '', '', '2018-03-16 09:08:20', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_category`
--

CREATE TABLE `tbl_book_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_book_category`
--

INSERT INTO `tbl_book_category` (`category_id`, `category_name`, `category_description`, `publication_status`) VALUES
(1, 'Childrens Book', 'Adventure of Hary bPoter', 1),
(2, 'Childrens Book', 'আন্তর্জাতিক খেলা', 1),
(3, 'English Literature', 'The Merchant Of Venice', 1),
(4, 'Ancient History', '<p>Ancient History</p>\r\n', 1),
(5, 'Modern History', '<p>Modern History</p>\r\n', 1),
(6, 'Science Fiction Hindi', '<p>SCience fiction Hindi   SCience fiction Hindi   SCience fiction Hindi   SCience fiction Hindi   SCience fiction Hindi   SCience fiction Hindi   SCience fiction Hindi   SCience fiction Hindi   SCience fiction Hindi   SCience fiction Hindi   SCience fiction Hindi   SCience fiction Hindi   SCience fiction Hindi   </p>\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `city_code` varchar(5) NOT NULL,
  `dummy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`city_id`, `city_name`, `city_code`, `dummy`) VALUES
(1, 'Kolkata', '', 0),
(2, 'Delhi', '', 0),
(3, 'Mumbai', '', 0),
(4, 'Chennai', '', 0),
(5, 'Patna', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class`
--

CREATE TABLE `tbl_class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(10) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `class_numeric` int(10) NOT NULL,
  `class_teacher_name` varchar(100) NOT NULL,
  `class_note` text NOT NULL,
  `class_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_class`
--

INSERT INTO `tbl_class` (`class_id`, `class_name`, `teacher_id`, `teacher_name`, `class_numeric`, `class_teacher_name`, `class_note`, `class_status`) VALUES
(1, 'ONE', 11, '2B-FETCHED', 1, '2bd', 'pkd --------------- 11', 1),
(2, 'TWO', 9, '2B-FETCHED', 2, '2bd', 'DT ------------------------------ 9', 1),
(3, 'THREE', 10, '2B-FETCHED', 3, '2bd', 'KU --------------- >>  10', 1),
(4, 'FOUR', 12, '2B-FETCHED', 4, '2bd', 'SANDEEP SAHA -------------------------------&gt; 12', 0),
(5, 'FIVE', 13, '2B-FETCHED', 5, '2bd', '                                4                            ', 1),
(6, 'SIX', 9, '2B-FETCHED', 6, '2bd', '                                6                            ', 1),
(7, 'SEVEN', 10, '2B-FETCHED', 7, '2bd', '                                7                            ', 1),
(8, 'EIGHT', 11, '2B-FETCHED', 8, '2bd', 'CLASS IS ==============  EIGHT\r\nNUMERIC IS ===========   8\r\nTEACHER NAME IS P K DEWDY\r\nTEACHER ID IS ----------------------------------------------11  ', 1),
(10, 'NINE', 12, '2B-FETCHED', 9, '2bd', 'class 9', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(50) NOT NULL,
  `country_code` varchar(5) NOT NULL,
  `dummy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`country_id`, `country_name`, `country_code`, `dummy`) VALUES
(1, 'India', '', 0),
(2, 'Bangladesh', '', 0),
(3, 'Nepal', '', 0),
(4, 'Sri Lanka', '', 0),
(5, 'Bhutan', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email`
--

CREATE TABLE `tbl_email` (
  `email_id` int(11) NOT NULL,
  `to` varchar(100) NOT NULL,
  `cc_to` varchar(100) NOT NULL,
  `bcc_to` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `user_role_name` varchar(50) NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `from_email` varchar(100) NOT NULL,
  `from_name` varchar(100) NOT NULL,
  `from_phone` varchar(100) NOT NULL,
  `from_web` varchar(11) NOT NULL,
  `from_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_email`
--

INSERT INTO `tbl_email` (`email_id`, `to`, `cc_to`, `bcc_to`, `subject`, `message`, `user_role_name`, `send_date`, `from_email`, `from_name`, `from_phone`, `from_web`, `from_message`) VALUES
(1, 'apysan@rediffmail.com', 'apysan@gmail.com', 'arjunkumaryadav@sitsolution.net', 'test1', 'test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  ', 'Admin', '2018-03-15 09:48:02', '0', '0', '0', '0', ''),
(2, 'arjunkumaryadav@sitsolution.net', 'apysan@gmail.com', 'apysan@rediffmail.com', 'TESTING2', 'TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     TESTING2     ', 'Admin', '2018-03-15 09:51:44', '0', '0', '0', '0', ''),
(3, 'apysan@rediffmail.com', 'apysan@gmail.com', 'arjunkumaryadav@sitsolution.net', 'TESTING333333333333333333', 'TESTING333333333333333333   TESTING333333333333333333   TESTING333333333333333333   TESTING333333333333333333   TESTING333333333333333333   TESTING333333333333333333   TESTING333333333333333333   TESTING333333333333333333   TESTING333333333333333333   TESTING333333333333333333   TESTING333333333333333333   TESTING333333333333333333   TESTING333333333333333333   TESTING333333333333333333   TESTING333333333333333333   TESTING333333333333333333   TESTING333333333333333333   TESTING333333333333333333   TESTING333333333333333333   TESTING333333333333333333   TESTING333333333333333333   TESTING333333333333333333   TESTING333333333333333333   ', 'Admin', '2018-03-15 09:54:24', '0', '0', '0', '0', ''),
(4, 'apysan@rediffmail.com', '', '', 'A quick brown fox', '• Subscription system &#40;This should be interlink with above point &#41; - As per the subscription user can get the features in their dashboard and at any point of time Super admin can add or delete features to the same user. If user is under trial period then before someday of expiration user can get email and push notification regarding subscription. If trial period over then user will not be access anything but user can see a popup where it will mention the subscription plan and button for payment. After payment user can see the details. In case user wants to increase their trial subscription then super admin has all rights to do that and even if super admin has given the permission to make any user’s subscription increase or decrease the particular admin can do that for the user.', 'Admin', '2018-03-15 09:59:18', '0', '0', '0', '0', ''),
(5, 'apysan@rediffmail.com', 'apysan@gmail.com', 'arjunkumaryadav@sitsolution.net', 'kolkata', 'kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    kolkata    ', 'Admin', '2018-03-15 10:00:32', '0', '0', '0', '0', ''),
(6, '', '', '', '', '', '', '2018-03-22 11:59:08', 'apysan@gmail.com', 'arjun prasad yadav', '1234567899', 'apysan@gmai', 'Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.'),
(7, '', '', '', '', '', '', '2018-03-22 12:21:00', 'apysan@gmail.com', 'arjun prasad yadav', '1234567899', 'apysan@gmai', 'Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.'),
(8, '', '', '', '', '', '', '2018-03-22 12:24:03', 'apysan@rediffmail.com', 'SANJAY KUMAR YADAV', '8100455586', 'apysan.in', 'Hoffman Parkway, P.O Box 154 Mountain View.\r\nUnited States of America.'),
(9, '', '', '', '', '', '', '2018-03-22 12:27:54', 'apysan@rediffmail.com', 'SANJAY KUMAR YADAV', '1234567899', 'apysan.in', 'nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.'),
(10, '', '', '', '', '', '', '2018-03-22 12:29:03', 'apysan@gmail.com', 'SANJAY KUMAR YADAV', '8100455586', 'apysan.in', 'estibulum purus, sit amet viverra diam nulla ac nisi rhoncus.'),
(11, '', '', '', '', '', '', '2018-03-22 12:52:20', 'apysan@gmail.com', 'SANJAY KUMAR YADAV', '1234567899', 'apysan.in', 'aaaaaaaaaaaaaa'),
(12, '', '', '', '', '', '', '2018-03-22 13:01:23', 'dilip@gmail.com', 'dilip kumar vrajak', '5656565656', 'mysite.com', 'qwert'),
(13, '', '', '', '', '', '', '2018-03-22 13:03:52', 'dilip@gmail.com', 'dilip kumar vrajak', '8100455586', 'mysite.com', 'aaaaaaaaaaaaaaaaaa'),
(14, '', '', '', '', '', '', '2018-03-22 13:06:20', 'apysan@gmail.com', 'SANJAY KUMAR YADAV', '8100455586', 'mysite.com', 'qqqqqqqqqqqqqqqqq'),
(15, '', '', '', '', '', '', '2018-03-22 13:08:53', 'dilip@gmail.com', 'dilip kumar vrajak', '5656565656', 'mysite.com', 'qqqqqqqqqqqqqqqqqq wwwwwwwwwwwww eeeeeeeeeeee rrrrrrrrrrrrrrrr ttttttttttttt'),
(16, '', '', '', '', '', '', '2018-03-22 13:12:21', 'dilip@gmail.com', 'SANJAY KUMAR YADAV', '8100455586', 'apysan@gmai', 'qqqqqqqqqqqqqqqqq'),
(17, '', '', '', '', '', '', '2018-03-22 13:14:20', 'dilip@gmail.com', 'SANJAY KUMAR YADAV', '1234567899', 'apysan@gmai', 'wqwqwqwqwqw'),
(18, '', '', '', '', '', '', '2018-03-22 13:22:20', 'apysan@gmail.com', 'SANJAY KUMAR YADAV', '1234567899', 'apysan.in', 'qwqwqwqwqwqqww'),
(19, '', '', '', '', '', '', '2018-03-22 13:23:30', 'apysan@gmail.com', 'SANJAY KUMAR YADAV', '1234567899', 'apysan@gmai', 'wqwqwqwwqwqww'),
(20, '', '', '', '', '', '', '2018-03-22 13:26:22', 'apysan@gmail.com', 'SANJAY KUMAR YADAV', '1234567899', 'apysan@gmai', 'wqwqwqwq'),
(21, '', '', '', '', '', '', '2018-03-22 13:29:53', 'apysan@gmail.com', 'SANJAY KUMAR YADAV', '1234567899', 'apysan@gmai', 'fhdkljfhjkdhfjksdhfjkhsdfjklhdjkfhjksadhfjhsdaljkfh kdjshfjkhdjkfhjksdhfkjhsdfjkhdsfh'),
(22, '', '', '', '', '', '', '2018-03-22 13:32:18', 'apysan@gmail.com', 'SANJAY KUMAR YADAV', '1234567899', 'apysan@gmai', 'wqwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww'),
(23, '', '', '', '', '', '', '2018-03-22 13:36:40', 'rabindra@bajaj.com', 'RABINDRA BAJAJ', '8100455586', 'apysan.in', 'Thi s is my message'),
(24, '', '', '', '', '', '', '2018-03-22 13:39:05', 'anjan@gmail.com', 'ANJAN CHOUDHURY', '8787654345', 'www.mywebsi', 'qwert'),
(25, '', '', '', '', '', '', '2018-03-22 13:54:23', 'arnab@gmail.com', 'ARNAB GOSWAMY', '7676767676', 'apysan.in', 'qwert'),
(26, '', '', '', '', '', '', '2018-03-23 07:43:16', 'rabindra@bajaj.com', 'SANJAY KUMAR YADAV', '1234567899', 'apysan.in', 'qqqqqqqqqqqq'),
(27, '', '', '', '', '', '', '2018-03-23 07:59:28', 'apysan@gmail.com', 'SANJAY KUMAR YADAV', '1234567899', 'mysite.com', 'DROP US A LINE'),
(28, '', '', '', '', '', '', '2018-03-23 08:02:11', 'dilip@gmail.com', 'qwert', '8100455586', 'apysan.in', 'qwert'),
(29, '', '', '', '', '', '', '2018-03-23 08:17:35', 'dilip@gmail.com', 'chirag', '8100455586', 'apysan@gmai', 'DROP US A LINE'),
(30, '', '', '', '', '', '', '2018-03-23 08:19:29', 'dilip@gmail.com', 'RABINDRA BAJAJ', '1234567899', 'mysite.com', 'qqqqqqqqqqqqqqq'),
(31, '', '', '', '', '', '', '2018-03-23 11:11:07', 'apysan@gmail.com', 'SANJAY KUMAR YADAV just entered', '1234567899', 'apysan.in', 'qqqqqqqqqqqqqqqqqq'),
(32, 'apysan@rediffmail.com', '', '', 'no subject', 'test ', 'Admin', '2018-04-02 05:55:49', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exam`
--

CREATE TABLE `tbl_exam` (
  `exam_id` int(11) NOT NULL,
  `exam_name` varchar(50) NOT NULL,
  `exam_date` varchar(50) NOT NULL,
  `exam_note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_exam`
--

INSERT INTO `tbl_exam` (`exam_id`, `exam_name`, `exam_date`, `exam_note`) VALUES
(1, 'Exam1', '03/20/2018', 'Best of luck for examination'),
(2, 'Semester-Exam1', '03/21/2018', 'All the best for your examination'),
(3, 'Semester-Exam3', '03/09/2018', 'Semester iii exam will be over by tuesday.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exam_grade`
--

CREATE TABLE `tbl_exam_grade` (
  `exam_id` int(11) NOT NULL,
  `exam_grade_name` varchar(50) NOT NULL,
  `exam_grade_point` varchar(50) NOT NULL,
  `exam_mark_from` int(50) NOT NULL,
  `exam_mark_upto` int(50) NOT NULL,
  `exam_note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_exam_grade`
--

INSERT INTO `tbl_exam_grade` (`exam_id`, `exam_grade_name`, `exam_grade_point`, `exam_mark_from`, `exam_mark_upto`, `exam_note`) VALUES
(1, 'A+', '5.00', 80, 100, 'note'),
(2, 'A', '4.00', 70, 79, 'note'),
(3, 'B+', '3.00', 60, 69, 'note'),
(4, 'B', '2.50', 50, 59, 'note'),
(5, 'C+', '2.00', 40, 49, 'note'),
(6, 'D+', '1.00', 33, 39, 'note'),
(7, 'F', '0.00', 0, 32, 'note');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exam_schedule`
--

CREATE TABLE `tbl_exam_schedule` (
  `exam_id` int(11) NOT NULL,
  `exam_name` varchar(50) NOT NULL,
  `exam_date` varchar(50) NOT NULL,
  `exam_note` text NOT NULL,
  `exam_class` varchar(50) NOT NULL,
  `exam_section` varchar(50) NOT NULL,
  `exam_subject` varchar(50) NOT NULL,
  `exam_time_from` varchar(20) NOT NULL,
  `exam_time_to` varchar(20) NOT NULL,
  `exam_room` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_exam_schedule`
--

INSERT INTO `tbl_exam_schedule` (`exam_id`, `exam_name`, `exam_date`, `exam_note`, `exam_class`, `exam_section`, `exam_subject`, `exam_time_from`, `exam_time_to`, `exam_room`) VALUES
(1, 'Exam1', '03/21/2018', '', 'Five', 'B', 'Bengali', '12:30', '02:30', '5'),
(2, 'Exam4', '03/14/2018', '', 'Five', 'A', 'Math', '12:30', '02:30', '8');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hostel`
--

CREATE TABLE `tbl_hostel` (
  `hostel_id` int(11) NOT NULL,
  `hostel_name` varchar(100) NOT NULL,
  `hostel_type` varchar(50) NOT NULL,
  `hostel_address` text NOT NULL,
  `hostel_note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_hostel`
--

INSERT INTO `tbl_hostel` (`hostel_id`, `hostel_name`, `hostel_type`, `hostel_address`, `hostel_note`) VALUES
(1, '0', 'Combine', 'dfdfdf', 'rererererer'),
(2, '0', 'Girls', 'wwwwwwwwww', 'eeeeeeeeeeeeee'),
(3, 'sutaoopur high school jhostel', 'Boys', 'sssssssssssss', 'ddddddddddd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hostel_cat`
--

CREATE TABLE `tbl_hostel_cat` (
  `hostel_id` int(11) NOT NULL,
  `hostel_name` int(11) NOT NULL,
  `hostel_class_type` varchar(10) NOT NULL,
  `hostel_fees` text NOT NULL,
  `hostel_note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_library_book`
--

CREATE TABLE `tbl_library_book` (
  `lib_book_id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `author` varchar(100) NOT NULL,
  `subject_code` int(5) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `qty` decimal(12,0) NOT NULL,
  `rack_no` int(5) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_library_memb`
--

CREATE TABLE `tbl_library_memb` (
  `lib_mem_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` text NOT NULL,
  `dummy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mail_sms`
--

CREATE TABLE `tbl_mail_sms` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL,
  `users` varchar(50) NOT NULL,
  `template` text NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_media`
--

CREATE TABLE `tbl_media` (
  `media_id` int(11) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `class_id` int(11) NOT NULL,
  `class_name` varchar(10) NOT NULL,
  `section_id` int(11) NOT NULL,
  `section_name` varchar(10) NOT NULL,
  `student_register_no` varchar(25) NOT NULL,
  `video_photo` varchar(100) NOT NULL,
  `uploaded_by` varchar(100) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `upload_date` date NOT NULL,
  `short_description` text NOT NULL,
  `long_description` text NOT NULL,
  `total_view` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_media`
--

INSERT INTO `tbl_media` (`media_id`, `media_type`, `student_name`, `class_id`, `class_name`, `section_id`, `section_name`, `student_register_no`, `video_photo`, `uploaded_by`, `role_name`, `upload_date`, `short_description`, `long_description`, `total_view`) VALUES
(1, 'Image', 'SANJANA CHOUDHARY', 3, '2b Fetched', 3, '2b Fetched', 'Rs27318181848', 'image/video_image/Best_Short_Video.mp4', '', '', '0000-00-00', '', '', '0'),
(2, 'Image', 'NEW STUDENT', 5, '2b Fetched', 2, '2b Fetched', 'RN27318182357', 'image/student_image/mastercard2.png', '', '', '0000-00-00', '', '', '0'),
(3, 'Image', 'SOUGATA SANYAL', 2, '2b Fetched', 4, '2b Fetched', 'Rs2731818355', 'image/video_image/Best_Short_Video.mp4', '', '', '0000-00-00', '', '', '0'),
(4, 'Video', 'GOLU YADAV', 10, '2b Fetched', 11, '2b Fetched', 'Rg2931818390', 'image/student_image/avatar.png', '', '', '0000-00-00', '', '', '0'),
(5, 'Image', 'STUDENT_NAME', 0, 'class_name', 0, 'section_na', '', 'image/video_image/Best_Short_Video.mp4', '', '', '0000-00-00', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parent`
--

CREATE TABLE `tbl_parent` (
  `parent_id` int(11) NOT NULL,
  `parent_name` varchar(50) NOT NULL,
  `parent_father_name` varchar(100) NOT NULL,
  `parent_mother_Name` varchar(100) NOT NULL,
  `parent_father_profession` varchar(50) NOT NULL,
  `parent_mother_profession` varchar(50) NOT NULL,
  `parent_email` varchar(100) NOT NULL,
  `parent_phone` varchar(100) NOT NULL,
  `parent_address` text NOT NULL,
  `parent_photo` varchar(100) NOT NULL,
  `parent_status` varchar(3) NOT NULL DEFAULT '1',
  `parent_username` varchar(50) NOT NULL,
  `parent_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_parent`
--

INSERT INTO `tbl_parent` (`parent_id`, `parent_name`, `parent_father_name`, `parent_mother_Name`, `parent_father_profession`, `parent_mother_profession`, `parent_email`, `parent_phone`, `parent_address`, `parent_photo`, `parent_status`, `parent_username`, `parent_password`) VALUES
(10, '111111111111', '111111111', '1111111', '111111', '111111111', 'ram_parent@gmail.com', '111111', '11111111', 'image/parent_image/PIZZA_11.jpg', '0', 'apysan@gmail.com', '123456'),
(11, '2222222222', '22222222', '222222222', '22222222', '2222', 'gurdian@gmail.com', '222222', '222222', 'image/parent_image/PIZZA_17.jpg', '1', 'apysan@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

CREATE TABLE `tbl_question` (
  `question_id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `full_mark` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question_bank`
--

CREATE TABLE `tbl_question_bank` (
  `q_bank_id` int(11) NOT NULL,
  `q_group` varchar(50) NOT NULL,
  `q_difficulty` varchar(50) NOT NULL,
  `question` text NOT NULL,
  `explanation` text NOT NULL,
  `upload` varchar(100) NOT NULL,
  `hints` varchar(50) NOT NULL,
  `mark` int(10) NOT NULL,
  `qtype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_question_bank`
--

INSERT INTO `tbl_question_bank` (`q_bank_id`, `q_group`, `q_difficulty`, `question`, `explanation`, `upload`, `hints`, `mark`, `qtype`) VALUES
(1, 'Reasoning', 'Easy', '<p>Easy Question</p>\r\n', '<p>Explanation of easy Question</p>\r\n', '', 'easiness hint', 40, 'Multi Answer'),
(2, 'Math', 'Medium', '<p>Hard Question</p>\r\n', '<p>Hard question Explanation</p>\r\n', '', 'hard Hints', 50, 'Fill in the blanks'),
(3, 'Math', 'Please Select', '<p>Math Question</p>\r\n\r\n<p><img alt=\"CBSE Class 10 Maths Previous Year Question Paper 2017 part-1\" src=\"https://seo-manager.s3.amazonaws.com/prod/content-images/5a0d4558e4b0ee6379b8afb6/1.png\"></p>\r\n', '<p>Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  </p>\r\n', '', 'hints of the question', 45, 'Single Answer'),
(4, 'Math', 'Please Select', '<p>Math Question</p>\r\n\r\n<p><img alt=\"CBSE Class 10 Maths Previous Year Question Paper 2017 part-1\" src=\"https://seo-manager.s3.amazonaws.com/prod/content-images/5a0d4558e4b0ee6379b8afb6/1.png\"></p>\r\n', '<p>Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  Explanation of the Question  </p>\r\n', '', 'hints of the question', 45, 'Single Answer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question_group`
--

CREATE TABLE `tbl_question_group` (
  `q_group_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_question_group`
--

INSERT INTO `tbl_question_group` (`q_group_id`, `title`) VALUES
(1, 'Reasoning'),
(2, 'Math'),
(3, 'Computer knowledge');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question_instruction`
--

CREATE TABLE `tbl_question_instruction` (
  `q_instruct_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_question_instruction`
--

INSERT INTO `tbl_question_instruction` (`q_instruct_id`, `title`, `content`) VALUES
(1, 'General Instructions for the students', '1. Login into the system using your respective Username and Password.\r\n2. You will be able to view the courses for which you have registered/enrolled.\r\n\r\n3. For example, Click on the course/subject for which you have the exam.\r\n\r\n4. Then you will reach the screen for the online exam, instructions page. Then click the “Start Attempt” button below to start answering the exam.'),
(2, 'Normal Instructions for the student', 'Please read these instructions carefully. A candidate who breaches any of the Examination Regulations will be liable to disciplinary action including (but not limited to) suspension or expulsion from the University.\r\n\r\nTimings\r\n\r\n·         Examinations will be conducted during the allocated times shown in the examination timetable.\r\n\r\n·         The examination hall will be open for admission 10 minutes before the time scheduled for the commencement of the examination. You are to find your allocated seat but do NOT turn over the question paper until instructed at the time of commencement of the examination.\r\n\r\n·         You will not be admitted for the examination after one hour of the commencement of the examination.\r\n\r\n\r\nPersonal Belongings\r\n\r\n    \r\nAll your personal belongings (such as bags, pouches, ear/headphones, laptops etc.) must be placed at the designated area outside the examination hall. Please do not bring any valuable belongings except the essential materials required for the examinations.     \r\n        \r\nAny unauthorised materials, such as books, paper, documents, pictures and electronic devices with communication and/or storage capabilities such as tablet PC, laptop, smart watch, portable audio/video/gaming devices etc. are not to be brought into the examination hall.\r\n\r\n·         Handphones brought into the examination hall must be switched off at ALL times. If your handphone is found to be switched on in the examination hall, the handphone will be confiscated and retained for investigation of possible violation of regulations.\r\n\r\n·         Photography is NOT allowed in the examination hall at ALL times.\r\n\r\n·         All materials and/or devices which are found in violation of any examination regulations will be confiscated.\r\n\r\n·         The University will not be responsible for the loss or damage of any belongings in or outside the examination hall.\r\n\r\n\r\nAt the Start of the Examination\r\n\r\n·     Do NOT turn over the question paper placed on your desk until instructed to do so at the time of commencement of the examination.\r\n\r\n·         Please place your identification documents (such as matric card, identity card, passport, driving licence or EZ-Link concession card) at the top right corner of your examination desk for the marking of attendance and verification of identity during the examination.\r\n\r\n·         Please check that you have the correct question paper and read the instructions printed on your examination question paper carefully.\r\n\r\n·         All examinations are anonymous. Therefore, do not write your name on the answer book. You should write only your matriculation number, correctly and legibly, in the space provided on the cover of each answer book. Providing incorrect/illegible matriculation number could risk your answer book being considered void.          \r\n\r\n\r\nDuring Examination\r\n\r\nYou are not allowed to communicate by word of mouth or otherwise with other candidates (this includes the time when answer scripts are being collected).\r\n\r\nPlease raise your hand if you wish to communicate with an invigilator.\r\n·         Unless granted permission by an invigilator, you are not allowed to leave your seat.\r\n\r\nOnce you have entered the examination hall, you will not be allowed to leave the hall until one hour\r\nafter the examination has commenced.\r\nIf, for any reason, you are given permission to leave the hall temporarily, you must be accompanied\r\nby an invigilator throughout your absence from the examination hall. You are required to leave\r\nyour handphone on your desk when you leave the hall temporarily.\r\n\r\n\r\n·         All answers, with the exception of graphs, sketches, diagrams, etc. should be written in black or blue pen, unless otherwise specified. Answers written in pencil will not be marked. The blank pages in the answer book are to be used only for candidates\' rough work. Solutions or any other materials written on these blank pages will not be marked.\r\n\r\n·         Do not write on, mark, highlight or deface any reference materials provided for the examination. If found doing so, the reference materials will be removed from your use for the rest of the examination and you will be made to pay for the cost of the materials that have to be replaced.\r\n\r\n\r\nAt the End of the Examination\r\n\r\n·       You are NOT allowed to leave the examination hall during the last 15 minutes of the examination and during the collection of the answer scripts. All candidates must remain seated throughout this period for invigilators to properly account for all answer scripts to be collected.\r\n\r\n·      Do NOT continue to write after the examination has ended. You are to remain seated quietly while your answer scripts are being collected and counted.\r\n\r\n·       No papers, used or unused, may be removed from the examination hall. You may take your own question paper with you unless otherwise instructed.\r\n\r\n·       You are to stay in the examination hall until the Chief Invigilator has given the permission to leave. Do NOT talk until you are outside of the examination hall.\r\n\r\n·       You are responsible to ensure that your answer scripts are submitted at the end of the examination. If you are present for the examination and do not submit your answer script, you will be deemed to have sat for and failed the examination concerned. Any unauthorised removal of answer script or part of answer script from the examination hall would deem the answer script as null and void.\r\n\r\n·      Once dismissed, you should leave the examination hall quickly and quietly. Remember to take your personal belongings with you.'),
(3, 'One import Instruction for the Student of Semester II', '<ul>\r\n <li>One import Instruction for the Student of Semester II</li>\r\n <li>One import Instruction for the Invigilator of Semester II</li>\r\n</ul>\r\n\r\n<p><strong>One import Instruction for the Staffs of Semester II</strong></p>\r\n\r\n<h3><tt><strong>All the Best</strong></tt></h3>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question_level`
--

CREATE TABLE `tbl_question_level` (
  `q_level_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_question_level`
--

INSERT INTO `tbl_question_level` (`q_level_id`, `title`) VALUES
(1, 'Easy'),
(2, 'Medium'),
(3, 'Hard');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_routine`
--

CREATE TABLE `tbl_routine` (
  `routine_id` int(11) NOT NULL,
  `routine_school_year` varchar(50) NOT NULL,
  `routine_class` varchar(50) NOT NULL,
  `routine_section` varchar(50) NOT NULL,
  `routine_subject` varchar(50) NOT NULL,
  `routine_day` varchar(40) NOT NULL,
  `routine_teacher` varchar(50) NOT NULL,
  `routine_start_time` varchar(20) NOT NULL,
  `routine_end_time` varchar(20) NOT NULL,
  `routine_room` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_routine`
--

INSERT INTO `tbl_routine` (`routine_id`, `routine_school_year`, `routine_class`, `routine_section`, `routine_subject`, `routine_day`, `routine_teacher`, `routine_start_time`, `routine_end_time`, `routine_room`) VALUES
(1, '2018-2019', 'Four', 'D', 'Math', 'THURSDAY', 'Teacher4', '04:30', '06:30', '4'),
(2, '2017-2018', 'Four', 'A', 'Bengali', 'FRIDAY', 'Teacher1', '2:30', '5:30', '8'),
(3, '2017-2018', 'Four', 'D', 'Math', 'FRIDAY', 'Teacher2', '1:30', '4:30', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_section`
--

CREATE TABLE `tbl_section` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(10) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `class_id` int(11) NOT NULL,
  `class_name` varchar(10) NOT NULL,
  `section_category` varchar(50) NOT NULL,
  `section_capacity` varchar(50) NOT NULL,
  `section_class` varchar(10) NOT NULL,
  `section_teacher_name` varchar(100) NOT NULL,
  `section_note` text NOT NULL,
  `section_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_section`
--

INSERT INTO `tbl_section` (`section_id`, `section_name`, `teacher_id`, `teacher_name`, `class_id`, `class_name`, `section_category`, `section_capacity`, `section_class`, `section_teacher_name`, `section_note`, `section_status`) VALUES
(9, 'A', 12, 'not reqd field', 1, '', 'acat', '50', '2bd', 'not reqd field', 'notes', 1),
(10, 'B', 11, 'not reqd field', 1, '', 'cat2', '45', '2bd', 'not reqd field', 'notes', 1),
(11, 'C', 10, 'not reqd field', 0, '', 'ccc', '60', '2bd', 'not reqd field', 'class 9 section c', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sms`
--

CREATE TABLE `tbl_sms` (
  `sms_id` int(11) NOT NULL,
  `to_phone` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `user_role_name` varchar(50) NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_sms`
--

INSERT INTO `tbl_sms` (`sms_id`, `to_phone`, `message`, `user_role_name`, `send_date`) VALUES
(1, '8100455586, 9007282656', 'this is sms one', 'Admin', '2018-03-15 11:29:54'),
(2, '8100455586, 9007282656', 'this is second SMs', 'Admin', '2018-03-15 11:31:30'),
(3, '8100455586, 9007282656', 'TESTING  TESTING  TESTING  TESTING  TESTING  TESTING  TESTING  TESTING  TESTING  ', 'Admin', '2018-03-15 11:37:23'),
(4, '8100455586, 9007282656', 'TESTING  ADMIN SMS   TESTING  ADMIN SMS   TESTING  ADMIN SMS   TESTING  ADMIN SMS   TESTING  ADMIN SMS   TESTING  ADMIN SMS   TESTING  ADMIN SMS   TESTING  ADMIN SMS   ', 'Admin', '2018-03-15 11:38:16'),
(5, '8100455586, 9007282656', 'A quick brown fox jumps right over the lazy Dog.', 'Admin', '2018-03-15 11:48:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `staff_phone` varchar(100) NOT NULL,
  `staff_email` varchar(100) NOT NULL,
  `staff_address` text NOT NULL,
  `staff_pan` varchar(20) NOT NULL,
  `staff_aadhar` varchar(20) NOT NULL,
  `staff_designation` varchar(20) NOT NULL,
  `staff_salary` decimal(12,2) NOT NULL,
  `staff_doj` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `staff_photo` varchar(100) NOT NULL,
  `staff_status` tinyint(1) NOT NULL DEFAULT '1',
  `staff3` int(11) NOT NULL,
  `saff4` int(11) NOT NULL,
  `staff5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`staff_id`, `staff_name`, `staff_phone`, `staff_email`, `staff_address`, `staff_pan`, `staff_aadhar`, `staff_designation`, `staff_salary`, `staff_doj`, `staff_photo`, `staff_status`, `staff3`, `saff4`, `staff5`) VALUES
(1, 'Ashok Donnie', '8199766654', 'ashok@gmail.com', 'Address1\r\nAddress2\r\nAddress3\r\nAddress4\r\n', 'AP76578APY', '7654 8765 2345', 'Accountant', '17500.00', '2018-03-26 11:13:48', '', 1, 0, 0, 0),
(2, 'Anup Bera', '1234567890', 'anup@gmail.com', 'address1\r\naddress2\r\naddress3\r\naddress4\r\n', 'PAN1234567890', '7876 6666 7645', 'Clerk', '12500.00', '2018-03-26 11:13:52', '03/14/2018', 1, 0, 0, 0),
(3, 'shankar singh', '4444444444', 'shankar@gmail.com', '4444444444', '4444444444', '4444444444', 'Clerk', '12500.00', '2018-03-26 12:42:16', '03/14/2018', 0, 0, 0, 0),
(4, 'Dilip Paul', '1234567890', 'anup@gmail.com', 'qqqqqqqqqqqqqqqq\r\neeeeeeeeee\r\nrrrrrrrrrr\r\n', 'PAN1234567890', '7876 6666 7645', 'Accountant', '26000.00', '2018-03-26 11:39:19', 'image/staff_image/user6-128x128.jpg', 1, 0, 0, 0),
(5, 'arjun', '1234567890', 'anup@gmail.com', '                                aaa                            ', 'aaaa', 'aaaa', 'Clerk', '26000.00', '2018-03-26 12:42:12', '', 1, 0, 0, 0),
(6, 'very new staff', '4444444444', 'anup@gmail.comeeee', 'aaaaaaaaaaa\r\nssssssssss\r\ndddddddddddd\r\nffffffffffffffffff', 'PAN1234567890', '7876 6666 7645', 'Driver', '12000.00', '0000-00-00 00:00:00', 'image/staff_image/user4-128x128.jpg', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(50) NOT NULL,
  `state_code` varchar(5) NOT NULL,
  `dummy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`state_id`, `state_name`, `state_code`, `dummy`) VALUES
(1, 'Bihar', '', 0),
(2, 'Uttar Pradesh', '', 0),
(3, 'West Bengal', '', 0),
(4, 'Gujarat', '', 0),
(5, 'Karnataka', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `class_id` int(11) NOT NULL,
  `class_name` varchar(10) NOT NULL,
  `section_id` int(11) NOT NULL,
  `section_name` varchar(10) NOT NULL,
  `student_gurdian` varchar(100) NOT NULL,
  `student_dob` varchar(50) NOT NULL,
  `student_gender` varchar(10) NOT NULL,
  `student_blood_group` varchar(5) NOT NULL,
  `student_relegion` varchar(20) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `student_phone` varchar(50) NOT NULL,
  `student_address` text NOT NULL,
  `student_state` varchar(20) NOT NULL,
  `student_country` varchar(20) NOT NULL,
  `student_city` varchar(20) NOT NULL,
  `student_class` varchar(10) NOT NULL,
  `student_section` varchar(5) NOT NULL,
  `student_group` varchar(25) NOT NULL,
  `student_opt_subject` varchar(20) NOT NULL,
  `student_register_no` varchar(25) NOT NULL,
  `student_roll_no` varchar(5) NOT NULL,
  `student_photo` varchar(100) NOT NULL,
  `student_extra_curr` varchar(25) NOT NULL,
  `student_remark` text NOT NULL,
  `student_username` varchar(50) NOT NULL,
  `student_password` varchar(50) NOT NULL,
  `student_status` tinyint(1) NOT NULL DEFAULT '1',
  `student_added_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `student_updated_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`student_id`, `student_name`, `class_id`, `class_name`, `section_id`, `section_name`, `student_gurdian`, `student_dob`, `student_gender`, `student_blood_group`, `student_relegion`, `student_email`, `student_phone`, `student_address`, `student_state`, `student_country`, `student_city`, `student_class`, `student_section`, `student_group`, `student_opt_subject`, `student_register_no`, `student_roll_no`, `student_photo`, `student_extra_curr`, `student_remark`, `student_username`, `student_password`, `student_status`, `student_added_time`, `student_updated_time`) VALUES
(1, 'Shivam Yadav', 0, '', 0, '', 'The Gurdian Name', '03/14/2018', 'Male', 'A+', 'Hinduism', 'apysan@gmail.com', '8100455586', 'aaaaaaaaaaaa\r\n\r\n\r\n\r\n\r\n', 'West Bengal', 'India', 'Kolkata', 'Eight', 'A', 'Commerce', 'Math', 'RS1331816321', '20', 'image/student_image/avatar1.png', 'Yoga', 'rem', 'sitsolution', '12345', 0, '2018-03-13 10:35:00', '2018-04-02 14:23:51'),
(2, 'Shankari sharma', 0, '', 0, '', 'Vinod Kumar', '02/10/2010', 'Female', 'O+', 'Hinduism', 'golu@gmail.com', '6576876578', 'aaaaaaaaaaaaaa', 'West Bengal', 'India', 'Kolkata', 'Seven', 'C', 'Science', 'Hindi', 'RS1331816541', '11', 'image/student_image/avatar3.png', 'Playing Cricket', 'rrrrrrrrrrrrr', 'shankari', '123456', 0, '2018-03-13 10:37:15', '2018-04-02 14:23:46'),
(4, 'SHANKAR DAYAL SHARMA JUST EDITED', 0, '', 0, '', 'THE CURDIAN OF S D SHARMA JUST EDITED', '10/11/2000', 'Female', 'AB+', 'Islam', 'shankar@yahoo.JUST_EDITED', '4209211999JUST EDITED', 'JUST EDITED                              ADDRESS11111111111111111111111111111111111111111111\r\nADDRESS22222222222222222222222222222222222222222222\r\nADDRESS33333333333333333333333333333333333333333333\r\nADDRESS44444444444444444444444444444444444444444444                            ', 'West Bengal', 'Bhutan', 'Kolkata', 'Five', 'D', 'Science', 'Bengali', 'RS1931818290', '250', 'image/student_image/avatar5.png', 'YogaJUST EDITED', 'JUST EDITED                               REMARK1111111111111111111111111111111111111111111111111111111\r\nREMARK2222222222222222222222222222222222222222222222222222222\r\nREMAKR3333333333333333333333333333333333333333333333333333333\r\nREMARK4444444444444444444444444444444444444444444444444444444                            ', 'SHANKARJUST EDITED', 'sharmaJUST EDITED', 1, '2018-03-19 13:01:26', '2018-04-02 14:24:07'),
(6, 'SHANKAR DAYAL SHARMA EDIT', 0, '', 0, '', 'Vinod Kumar', '03/13/2018', 'Male', 'B+', 'Islam', 'apysan@gmail.com', '8100455586', 'sssssssssss', 'Bihar', 'India', 'Patna', 'not req', 'B', 'Art', 'Bengali', 'RS2731817303', '45', 'image/student_image/paypal4.png', 'Yoga', 'rerrererererer', 'sitsolution@gmail.com', 'jjlkjklj', 1, '2018-03-27 12:15:59', '2018-03-27 12:15:59'),
(7, 'ANIKET YADAV', 4, '2b Fetched', 0, '', 'a p  yadav', '03/08/2018', 'Male', 'A+', 'Hinduism', 'tanya@gmail.com', '6565656565, 8787878787, 4242424242', 'sasasa', 'West Bengal', 'India', 'Kolkata', 'not req', 'B', 'Commerce', 'Bengali', 'Ra2731817514', '45', 'image/student_image/paypal21.png', 'Yoga', 'rerererer', 'apysan@gmail.comqq', '2121212', 1, '2018-03-27 12:23:01', '2018-03-27 12:23:01'),
(8, 'SANJANA CHOUDHARY', 3, '2b Fetched', 3, '2b Fetched', 'Vinod Kumar', '03/13/2018', 'Male', 'A+', 'Hinduism', 'tanya@gmail.com', '8100455586', 'qqqqqqqqqqqqq\r\nwwwwwwwwwwwww\r\neeeeeeeeeeeee\r\nrrrrrrrrrrrrrrrrrrrr', 'West Bengal', 'India', 'Kolkata', 'not req', 'not r', 'Commerce', 'Bengali', 'Rs27318181848', '25', 'image/student_image/mastercard1.png', 'Yoga', 'remmmmmmmmmmmmmmmmmmmmmmmmmmmm', 'sanjana@gmail.com', '6765434567', 1, '2018-03-27 12:50:15', '2018-03-28 11:31:12'),
(9, 'NEW STUDENT', 5, '2b Fetched', 2, '2b Fetched', 'The Gurdian Name', '03/06/2018', 'Female', 'O+', 'Jainism', 'sanjana@gmail.com', '6565656565, 8787878787, 4242424242', 'ADDEWSS', 'Bihar', 'India', 'Patna', 'not req', 'not r', 'Commerce', 'Math', 'RN27318182357', '22', 'image/student_image/mastercard2.png', 'playing chess', 'REMARKS', 'newstudent@gmail.com', '56789', 1, '2018-03-27 12:55:41', '2018-03-27 12:55:41'),
(10, 'SOUGATA SANYAL', 2, '2b Fetched', 4, '2b Fetched', 'wqwq', '03/13/2018', 'Male', 'A-', 'Buddhism', 'golu@gmail.com', '55555555555', 'sasasas', 'Bihar', 'India', 'Delhi', 'not req', 'not r', 'Science', 'Bengali', 'Rs2731818355', '56', 'image/student_image/visa.png', 'Playing Cricket', 'rererererrere', 'apysan@gmail.com', '123456111111111111111111', 1, '2018-03-27 13:05:59', '2018-03-27 13:05:59'),
(11, 'GOLU YADAV', 10, '2b Fetched', 11, '2b Fetched', 's yadav', '03/06/2018', 'Male', 'A+', 'Hinduism', 'golu@gmail.com', '7654323456', 'address of golu', 'West Bengal', 'India', 'Kolkata', 'not req', 'not r', 'Commerce', 'Hindi', 'Rg2931818390', '10', 'image/student_image/avatar.png', 'Yoga', 'rem', 'apysan@gmail.com', '123456', 0, '2018-03-29 13:10:50', '2018-04-04 08:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_attendence`
--

CREATE TABLE `tbl_student_attendence` (
  `stud_atten_id` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `class_id` int(11) NOT NULL,
  `class_name` varchar(10) NOT NULL,
  `section_id` int(11) NOT NULL,
  `section_name` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_student_attendence`
--

INSERT INTO `tbl_student_attendence` (`stud_atten_id`, `student_name`, `class_id`, `class_name`, `section_id`, `section_name`, `date`, `status`) VALUES
(2, 'Shankari sharma', 0, '', 0, '', '2018-03-29 05:24:10', 0),
(7, 'ANIKET YADAV', 4, '2b Fetched', 0, '', '2018-03-29 05:24:10', 0),
(9, 'NEW STUDENT', 5, '2b Fetched', 2, '2b Fetched', '2018-03-29 05:24:10', 0),
(10, 'SOUGATA SANYAL', 2, 'FIVE', 3, 'A', '2018-03-29 05:29:37', 1),
(11, 'SOUGATA SANYAL', 2, 'FIVE', 3, 'A', '2018-03-29 05:29:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `subject_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_name` varchar(20) NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  `subject_type` varchar(50) NOT NULL,
  `pass_mark` int(11) NOT NULL,
  `final_mark` int(11) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `subject_author` varchar(50) NOT NULL,
  `subject_code` varchar(20) NOT NULL,
  `subject_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`subject_id`, `class_id`, `teacher_id`, `class_name`, `teacher_name`, `subject_type`, `pass_mark`, `final_mark`, `subject_name`, `subject_author`, `subject_code`, `subject_status`) VALUES
(1, 8, 9, '2bretr', '2bretr', 'Optional', 99, 100, 'Hindi2', 'Baccha Publication2222', 'sh012222', 1),
(2, 2, 11, '2bfetched', '2bfetched', 'Mandatory', 40, 100, 'English', 'K. Banerjee', 'eee', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_syllabus`
--

CREATE TABLE `tbl_syllabus` (
  `syllabus_id` int(11) NOT NULL,
  `syllabus_title` varchar(100) NOT NULL,
  `class_id` int(11) NOT NULL,
  `syllabus_description` text NOT NULL,
  `syllabus_class` varchar(20) NOT NULL,
  `syllabus_photo` varchar(100) NOT NULL,
  `syllabus_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_syllabus`
--

INSERT INTO `tbl_syllabus` (`syllabus_id`, `syllabus_title`, `class_id`, `syllabus_description`, `syllabus_class`, `syllabus_photo`, `syllabus_status`) VALUES
(12, 'abcdefghijklmnopqurstuvwxyz', 7, 'A quick brown fox jumps right over ', '2bfetched', 'image/syllabus_image/visa.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE `tbl_teacher` (
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `teacher_designation` varchar(100) NOT NULL,
  `teacher_DOB` varchar(50) NOT NULL,
  `teacher_gender` varchar(10) NOT NULL,
  `teacher_religion` varchar(50) NOT NULL,
  `teacher_email` varchar(100) NOT NULL,
  `teacher_phone` varchar(100) NOT NULL,
  `teacher_address` varchar(100) NOT NULL,
  `teacher_DOJ` varchar(50) NOT NULL,
  `teacher_photo` varchar(100) NOT NULL,
  `teacher_status` tinyint(1) NOT NULL DEFAULT '1',
  `teacher_username` varchar(50) NOT NULL,
  `teacher_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`teacher_id`, `teacher_name`, `teacher_designation`, `teacher_DOB`, `teacher_gender`, `teacher_religion`, `teacher_email`, `teacher_phone`, `teacher_address`, `teacher_DOJ`, `teacher_photo`, `teacher_status`, `teacher_username`, `teacher_password`) VALUES
(9, 'Dinesh Tiwari', 'Math Teacher', '03/19/1980', 'Male', 'Hinduism', 'dineshtiwari@gmail.com', '1234567899', 'address of dinesh tiwari', '10/10/1990', 'image/teacher_image/user6-128x128.jpg', 1, 'dinesh@gmail.com', 'bharatindia4209211'),
(10, 'K. Upadhyay', 'Hindi Teacher', '10/10/2009', 'Male', 'Hinduism', 'ku@gmail.com', '8765434567', 'k upadhyaya', '03/07/2018', 'image/teacher_image/Best_Short_Video.mp4', 1, 'ku@gmail.com', 'ku123456'),
(11, 'Pradip Kumar Dwedy', 'Science Teacher', '02/28/2018', 'Male', 'Hinduism', 'pkd@gmail.com', '8765358537', 'address of pkd', '03/06/2018', 'image/teacher_image/avatar.png', 1, 'pkd@gmail.com', 'pkd123456'),
(12, 'sandeep Saha', 'Histry Teacher', '03/13/2018', 'Male', 'Buddhism', 'sandeep@gmail.com', '2345676546', 'address1\r\naddress2\r\naddress3\r\naddress4', '10/10/2010', 'image/teacher_image/avatar04.png', 1, 'sandeep@gmail.com', '123456789'),
(13, 'Teacher of Class FOUR', 'English Teacher', '03/05/2018', 'Male', 'Hinduism', 'four@gmail.com', '7676765434', 'address of 44444444444', '03/17/2018', 'image/teacher_image/user1-128x128.jpg', 1, 'four@gmail.com', 'four123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transport`
--

CREATE TABLE `tbl_transport` (
  `transport_id` int(11) NOT NULL,
  `transport_route_name` varchar(100) NOT NULL,
  `transport_no_of_vehicle` decimal(4,0) NOT NULL,
  `transport_route_fare` decimal(10,2) NOT NULL,
  `transport_note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_transport`
--

INSERT INTO `tbl_transport` (`transport_id`, `transport_route_name`, `transport_no_of_vehicle`, `transport_route_fare`, `transport_note`) VALUES
(1, 'Howrah to Bhowanipore', '3', '1250.00', 'qwert'),
(2, 'kalighat to barabazar', '1', '1560.00', 'sasasassasasas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trans_memb`
--

CREATE TABLE `tbl_trans_memb` (
  `trans_memb_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `student_section` varchar(5) NOT NULL,
  `student_class` varchar(10) NOT NULL,
  `section_name` varchar(20) NOT NULL,
  `roll` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_trans_memb`
--

INSERT INTO `tbl_trans_memb` (`trans_memb_id`, `name`, `student_section`, `student_class`, `section_name`, `roll`, `email`, `photo`) VALUES
(1, '2', '', '', '', 22, 'tanisha0801@rediffmail.com', 'photo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_role_name` varchar(50) NOT NULL,
  `user_role_numeric` varchar(10) NOT NULL,
  `user_DOB` varchar(50) NOT NULL,
  `user_gender` varchar(10) NOT NULL,
  `user_religion` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone` varchar(100) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_DOJ` varchar(50) NOT NULL,
  `user_photo` varchar(100) NOT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT '1',
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_role_name`, `user_role_numeric`, `user_DOB`, `user_gender`, `user_religion`, `user_email`, `user_phone`, `user_address`, `user_DOJ`, `user_photo`, `user_status`, `user_username`, `user_password`) VALUES
(2, 'Admin', 'Admin', '1', '', 'Male', 'Hinduism', 'admin@gmail.com', '1111111111', 'kol', '03/23/2018', 'image/user_image/avatar2.png', 0, 'sitsolution', 'e10adc3949ba59abbe56e057f20f883e'),
(24, 'Student', 'Student', '2', '10/10/1965', 'Male', 'Hinduism', 'student@gmail.com', '3455555555', 'howrah wb', '10/10/2007', 'image/user_image/avatar514.png', 0, '', 'e10adc3949ba59abbe56e057f20f883e'),
(28, 'New User45eeeeeeeeeeeeeeee', 'Teacher', '', '10/10/1998', 'Male', 'Hinduism', 'user@gmail.com', '4209877776', '                             address1111111111111111\r\n22222222222222222\r\n333333333333333333\r\n4444444', '03/10/2018', '', 0, 'librarian', 'e10adc3949ba59abbe56e057f20f883e'),
(34, 'priyankar', 'Individual', '2', '', '', '', 'priyankar.3110@gmail.com', '', '', '', '', 1, '', '123456'),
(38, '', 'Organisation', '1', '', '', '', 'apysan@rediffmail.com', '', '', '', '', 1, '', 'edf1009903090813acdf58478797a61f');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `user_role_id` int(11) NOT NULL,
  `user_role_name` varchar(50) NOT NULL,
  `a` int(11) NOT NULL,
  `b` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user_role`
--

INSERT INTO `tbl_user_role` (`user_role_id`, `user_role_name`, `a`, `b`) VALUES
(1, 'Teacher', 0, 0),
(2, 'Student', 0, 0),
(3, 'Parent', 0, 0),
(4, 'Librarian', 0, 0),
(5, 'Accountant', 0, 0),
(6, 'Staff', 0, 0),
(7, 'Transporter', 0, 0),
(8, 'Admin', 0, 0),
(9, 'Moderator', 0, 0),
(10, 'Peon', 0, 0),
(11, 'Sales Person', 0, 0),
(12, 'Support', 0, 0),
(13, 'Developer', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visitor`
--

CREATE TABLE `tbl_visitor` (
  `visitor_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `visitor_name` varchar(100) NOT NULL,
  `visitor_email` varchar(20) NOT NULL,
  `visitor_phone` varchar(50) NOT NULL,
  `visitor_company` varchar(100) NOT NULL,
  `visitor_comingfrom` varchar(50) NOT NULL,
  `visitor_tomeet` varchar(50) NOT NULL,
  `visitor_tomeet_usertype` varchar(50) NOT NULL,
  `visitor_to_meet_name` varchar(100) NOT NULL,
  `visitor_checkin` varchar(20) NOT NULL,
  `visitor_checkout` varchar(20) NOT NULL,
  `visitor_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_visitor`
--

INSERT INTO `tbl_visitor` (`visitor_id`, `user_id`, `visitor_name`, `visitor_email`, `visitor_phone`, `visitor_company`, `visitor_comingfrom`, `visitor_tomeet`, `visitor_tomeet_usertype`, `visitor_to_meet_name`, `visitor_checkin`, `visitor_checkout`, `visitor_status`) VALUES
(1, 0, 'Ashok Donnie', 'ashok@gmail.com', '1234567899 / 8765432123 / 7654320987', 'Godrej Ind', 'Godrej Ind', 'Mr Director', 'Official', '', '12:50', '1:30', 'Y'),
(2, 0, 'The Seles representative', 'sales@gmail.com', '1234567899 / 7654356782 / 6252423267', 'Godrej Industry', '', 'Prof . S. K Das', 'Teacher', '', '12:50', '01:50', 'Y'),
(3, 0, 'Visitor Name', 'sales@gmail.com', '1234567899 / 7654356782 / 6252423267', 'Godrej Industry', '', 'Prof . S. K Majumdar', 'Librarian', '', '12:50', '02:50', 'Y'),
(4, 0, 'Event Manager', 'event@gmail.com', '8877656549', 'Godrej Industry', '', 'Prof . S. K Das', 'Admin', '', '12:50', '02:50', 'yes'),
(5, 0, 'The Visitor Name', '', '', '', '', '', 'Select Role', '', '', '', ''),
(6, 0, 'abcd', '', '', '', '', '', 'Select Role', '', '', '', ''),
(7, 0, 'xyz', '', '', '', '', '', 'Select Role', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_xgurdian`
--

CREATE TABLE `tbl_xgurdian` (
  `Gurdian_id` int(11) NOT NULL,
  `Gurdian_name` varchar(50) NOT NULL,
  `Father_name` varchar(100) NOT NULL,
  `Mother_Name` varchar(100) NOT NULL,
  `Father_Profession` varchar(50) NOT NULL,
  `Mother_Profession` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Address` text NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `gurdian_username` varchar(50) NOT NULL,
  `gurdian_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_assignment`
--
ALTER TABLE `tbl_assignment`
  ADD PRIMARY KEY (`assignment_id`);

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tbl_book_category`
--
ALTER TABLE `tbl_book_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `tbl_email`
--
ALTER TABLE `tbl_email`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `tbl_exam`
--
ALTER TABLE `tbl_exam`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `tbl_exam_grade`
--
ALTER TABLE `tbl_exam_grade`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `tbl_exam_schedule`
--
ALTER TABLE `tbl_exam_schedule`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `tbl_hostel`
--
ALTER TABLE `tbl_hostel`
  ADD PRIMARY KEY (`hostel_id`);

--
-- Indexes for table `tbl_hostel_cat`
--
ALTER TABLE `tbl_hostel_cat`
  ADD PRIMARY KEY (`hostel_id`);

--
-- Indexes for table `tbl_library_book`
--
ALTER TABLE `tbl_library_book`
  ADD PRIMARY KEY (`lib_book_id`);

--
-- Indexes for table `tbl_library_memb`
--
ALTER TABLE `tbl_library_memb`
  ADD PRIMARY KEY (`lib_mem_id`);

--
-- Indexes for table `tbl_mail_sms`
--
ALTER TABLE `tbl_mail_sms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_media`
--
ALTER TABLE `tbl_media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `tbl_parent`
--
ALTER TABLE `tbl_parent`
  ADD PRIMARY KEY (`parent_id`);

--
-- Indexes for table `tbl_question`
--
ALTER TABLE `tbl_question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `tbl_question_bank`
--
ALTER TABLE `tbl_question_bank`
  ADD PRIMARY KEY (`q_bank_id`);

--
-- Indexes for table `tbl_question_group`
--
ALTER TABLE `tbl_question_group`
  ADD PRIMARY KEY (`q_group_id`);

--
-- Indexes for table `tbl_question_instruction`
--
ALTER TABLE `tbl_question_instruction`
  ADD PRIMARY KEY (`q_instruct_id`);

--
-- Indexes for table `tbl_question_level`
--
ALTER TABLE `tbl_question_level`
  ADD PRIMARY KEY (`q_level_id`);

--
-- Indexes for table `tbl_routine`
--
ALTER TABLE `tbl_routine`
  ADD PRIMARY KEY (`routine_id`);

--
-- Indexes for table `tbl_section`
--
ALTER TABLE `tbl_section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `tbl_sms`
--
ALTER TABLE `tbl_sms`
  ADD PRIMARY KEY (`sms_id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tbl_student_attendence`
--
ALTER TABLE `tbl_student_attendence`
  ADD PRIMARY KEY (`stud_atten_id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `tbl_syllabus`
--
ALTER TABLE `tbl_syllabus`
  ADD PRIMARY KEY (`syllabus_id`);

--
-- Indexes for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `tbl_transport`
--
ALTER TABLE `tbl_transport`
  ADD PRIMARY KEY (`transport_id`);

--
-- Indexes for table `tbl_trans_memb`
--
ALTER TABLE `tbl_trans_memb`
  ADD PRIMARY KEY (`trans_memb_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD PRIMARY KEY (`user_role_id`);

--
-- Indexes for table `tbl_visitor`
--
ALTER TABLE `tbl_visitor`
  ADD PRIMARY KEY (`visitor_id`);

--
-- Indexes for table `tbl_xgurdian`
--
ALTER TABLE `tbl_xgurdian`
  ADD PRIMARY KEY (`Gurdian_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_assignment`
--
ALTER TABLE `tbl_assignment`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_book_category`
--
ALTER TABLE `tbl_book_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_class`
--
ALTER TABLE `tbl_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_email`
--
ALTER TABLE `tbl_email`
  MODIFY `email_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_exam`
--
ALTER TABLE `tbl_exam`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_exam_grade`
--
ALTER TABLE `tbl_exam_grade`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_exam_schedule`
--
ALTER TABLE `tbl_exam_schedule`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_hostel`
--
ALTER TABLE `tbl_hostel`
  MODIFY `hostel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_hostel_cat`
--
ALTER TABLE `tbl_hostel_cat`
  MODIFY `hostel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_library_book`
--
ALTER TABLE `tbl_library_book`
  MODIFY `lib_book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_library_memb`
--
ALTER TABLE `tbl_library_memb`
  MODIFY `lib_mem_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_mail_sms`
--
ALTER TABLE `tbl_mail_sms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_media`
--
ALTER TABLE `tbl_media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_parent`
--
ALTER TABLE `tbl_parent`
  MODIFY `parent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_question`
--
ALTER TABLE `tbl_question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_question_bank`
--
ALTER TABLE `tbl_question_bank`
  MODIFY `q_bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_question_group`
--
ALTER TABLE `tbl_question_group`
  MODIFY `q_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_question_instruction`
--
ALTER TABLE `tbl_question_instruction`
  MODIFY `q_instruct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_question_level`
--
ALTER TABLE `tbl_question_level`
  MODIFY `q_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_routine`
--
ALTER TABLE `tbl_routine`
  MODIFY `routine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_section`
--
ALTER TABLE `tbl_section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_sms`
--
ALTER TABLE `tbl_sms`
  MODIFY `sms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_student_attendence`
--
ALTER TABLE `tbl_student_attendence`
  MODIFY `stud_atten_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_syllabus`
--
ALTER TABLE `tbl_syllabus`
  MODIFY `syllabus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_transport`
--
ALTER TABLE `tbl_transport`
  MODIFY `transport_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_trans_memb`
--
ALTER TABLE `tbl_trans_memb`
  MODIFY `trans_memb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `user_role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_visitor`
--
ALTER TABLE `tbl_visitor`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_xgurdian`
--
ALTER TABLE `tbl_xgurdian`
  MODIFY `Gurdian_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
