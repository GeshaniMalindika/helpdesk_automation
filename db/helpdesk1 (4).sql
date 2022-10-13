-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2022 at 12:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdesk1`
--

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

CREATE TABLE `asset` (
  `devision` varchar(255) NOT NULL,
  `office` varchar(255) NOT NULL,
  `asset_id` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `serial_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`devision`, `office`, `asset_id`, `brand`, `model`, `serial_no`) VALUES
('Finance', 'G1', 'TA/C1/COM/03', 'dell', 'DELL VOSTRO-260', '4W8DD2S'),
('Admin', 'HO', 'TA/C1/COM/05', 'STC', 'HP ProDesk 400 G4 MT', 'SGH7430S05'),
('Finance', 'C1', 'TA/C1/COM/06', 'Beyond', 'HP ProDesk 400 G4 MT', 'SGH649TRBK'),
('Operation', 'C1', 'TA/C1/COM/07', 'Beyond', 'HP ProDesk 400 G4 MT', 'SGH649TRBD'),
('Finance', 'Ariyarathne(813)', 'TA/C1/COM/08', 'dell', 'Dell Vostro 3670', 'J3N2LQ2'),
('Admin', 'Gunasili(831)', 'TA/C1/COM/09', 'Finco', 'Dell Vostro 3670', 'J3M4LQ2'),
('Finance', '', 'TA/C1/COM/10', 'dell', 'Dell Vostro 3670', 'J3L1LQ2'),
('IT Division', 'HO', 'TA/C1/CPU/04', '', 'DELL OPTIPLEX 980', 'FFSK82S'),
('Admin', 'C2', 'TA/C2/COM/07', '', 'Acer -Veriton', 'DZVGYSG00432604A689600'),
('Operation', 'C2', 'TA/C2/COM/08', 'Beyond', 'HP ProDesk 400 G4 MT', 'SGH649TR95'),
('Finance', 'C2', 'TA/C2/COM/09', 'Beyond', 'HP ProDesk 400 G4 MT', 'SGH649TR8H'),
('Operation', 'Rasika', 'TA/C2/COM/10', 'Finco', 'Dell Vostro 3670', 'J3PILQ2'),
('Admin', 'Nayomi', 'TA/C2/COM/11', 'Finco', 'Dell Vostro 3670', 'J3QOLQ2'),
('Admin', 'Pathma', 'TA/C2/COM/12', 'Finco', 'Dell Vostro 3670', 'J3QZKQ2'),
('Operation', 'Tharuka', 'TA/C2/COM/13', 'Finco', 'Dell Vostro 3670', 'J3T3LQ2'),
('Operation', 'C3', 'TA/C3/COM/03', 'STC', 'HP ProDesk 400 G3 MT', '2UA2161XW1'),
('Admin', 'C3', 'TA/C3/COM/04', '', 'DELL OPTIPLEX 980', 'GGSK82S'),
('Finance -Fine', 'C3', 'TA/C3/COM/05', '', 'DELL VOSTRO-260', '7Y8DD2S'),
('Finance -Cashier', 'C3', 'TA/C3/COM/07', 'STC', 'HP ProDesk 400 G3 MT', '800247-001'),
('Operation - Permit', 'C3', 'TA/C3/COM/08', 'Beyond', 'HP ProDesk 400 G4 MT', 'SGH649TRB9'),
('Finance', 'Samitha', 'TA/C3/COM/09', 'Finco', 'Dell Vostro 3670', 'J3V2LQ2'),
('Finance', 'Nandani', 'TA/C3/COM/10', 'Finco', 'Dell Vostro 3670', 'J3V3LQ2'),
('Admin', 'Suren', 'TA/C3/COM/11', 'Finco', 'Dell Vostro 3670', 'J3X5LQ2'),
('Area Manager', 'Samanmali', 'TA/C3/COM/12', 'Finco', 'Dell Vostro 3670', 'J3Z2LQ5'),
('Admin', 'C4', 'TA/C4/COM/03', '', 'DELL OPTIPLEX 980', '26955421156'),
('Admin', 'C4', 'TA/C4/COM/07', '', 'DELL VOSTRO-260', '38893811572'),
('Manager', 'Chanaka', 'TA/C4/COM/10', 'Finco', 'Dell Vostro 3670', 'J44KQ2'),
('Admin', 'Kusum', 'TA/C4/COM/11', 'Finco', 'Dell Vostro 3670', 'J411LQ2'),
('Finance', 'Jayarani', 'TA/C4/COM/12', 'Finco', 'Dell Vostro 3670', 'J427LQ2'),
('Operation', 'unknown', 'TA/C4/COM/13', 'Finco', 'Dell Vostro 3670', 'J437LQ2'),
('Finance', 'G1', 'TA/G1/COM/04', '', 'DELL VOSTRO-260', 'FDSK825'),
('Operation', 'G1', 'TA/G1/COM/05', '', 'DELL VOSTRO-260', '4Y8DD25'),
('Operation', 'Madushani', 'TA/G1/COM/08', 'Finco', 'Dell Vostro 3670', 'J487LQ2'),
('Admin', 'Priyadarshani', 'TA/G1/COM/09', 'Finco', 'Dell Vostro 3670', 'J452LQ2'),
('Operation', 'madumali', 'TA/G1/COM/10', 'Finco', 'Dell Vostro 3670', 'J471LQ2'),
('Finance', 'Account', 'TA/G1/COM/11', 'Finco', 'Dell Vostro 3670', 'J477LQ2'),
('Finnance', 'G2', 'TA/G2/COM/03', '', 'DELL VOSTRO-260', 'DDSK82S'),
('Opercation', 'G2', 'TA/G2/COM/05', '', 'DELL VOSTRO-260', 'FY8DD2S'),
('Opercation', 'Janeththri', 'TA/G2/COM/08', 'Finco', 'Dell Vostro 3670', 'J496LQ2'),
('Finnance', 'Krishani', 'TA/G2/COM/09', 'Finco', 'Dell Vostro 3670', 'J4B4LQ2'),
('Finnance', 'Manori', 'TA/G2/COM/10', 'Finco', 'Dell Vostro 3670', 'J4C1LQ2'),
('Opercation', 'Channa', 'TA/G2/COM/11', 'Finco', 'Dell Vostro 3670', 'J4D3LQ2'),
('Operation', 'HO', 'TA/HO/COM/06', '', 'DELL OPTIPLEX 980', 'GN1R82S'),
('IT Division', 'HO', 'TA/HO/COM/33', '', 'DELL OPTIPLEX 980', 'BDSK82S'),
('Admin', 'HO', 'TA/HO/COM/34', '', 'DELL OPTIPLEX 980', '7GSK82S'),
('IT Division', 'HO', 'TA/HO/COM/35', '', 'DELL OPTIPLEX 980', '5FSK82S'),
('Audit', 'HO', 'TA/HO/COM/36', '', 'DELL OPTIPLEX 990', '9tvp82s'),
('Finance', 'HO', 'TA/HO/COM/41', '', 'DELL VOSTRO-260', '6X8DD2S'),
('Finance', 'HO', 'TA/HO/COM/42', '', 'DELL OPTIPLEX 980', '3W8DD2S'),
('Finance', 'HO', 'TA/HO/COM/43', '', 'DELL VOSTRO-260', 'HY8DD28'),
('Admin', 'HO', 'TA/HO/COM/51', '', 'Acer -Veriton', 'DZVGYSG00132801CD59600'),
('Threewheel', 'HO', 'TA/HO/COM/52', '', 'Acer -Veriton', 'DZVGYSG00132801D1E9600'),
('Chairman', 'HO', 'TA/HO/COM/53', 'STC', 'HP ProDesk 400 G3 MT', 'SGH649TR7X'),
('Finance', 'HO', 'TA/HO/COM/54', 'STC', 'HP ProDesk 400 G3 MT', 'SGH649TRB4'),
('Finance', 'HO', 'TA/HO/COM/55', 'STC', 'HP ProDesk 400 G3 MT', 'SGH649TRBM'),
('Admin', 'HO', 'TA/HO/COM/56', 'STC', 'HP ProDesk 400 G3 MT', 'SGH649TR9G'),
('Threewheel', 'HO', 'TA/HO/COM/57', 'STC', 'HP ProDesk 400 G3 MT', 'SGH649TRBF'),
('Operation', 'HO', 'TA/HO/COM/58', 'STC', 'HP ProDesk 400 G3 MT', 'SGH649TRBQ'),
('Project', 'HO', 'TA/HO/COM/59', 'STC', 'HP ProDesk 400 G3 MT', 'SGH649TRBN'),
('Project', 'HO', 'TA/HO/COM/60', 'STC', 'HP ProDesk 400 G3 MT', 'SGH649TR7W'),
('Driving School', 'HO', 'TA/HO/COM/61', 'STC', 'HP ProDesk 400 G3 MT', 'SGH649TR9B'),
('Finance', 'HO', 'TA/HO/COM/64', 'STC', 'HP ProDesk 400 G3 MT', 'SGH738RMTS'),
('Finance', 'HO', 'TA/HO/COM/65', 'STC', 'HP ProDesk 400 G3 MT', 'SGH738RMTH'),
('Threewheel', 'HO', 'TA/HO/COM/66', 'Beyond', 'HP ProDesk 400 G4 MT', 'SGH738RMT8'),
('Threewheel', 'HO', 'TA/HO/COM/67', 'Beyond', 'HP ProDesk 400 G4 MT', 'SGH738RMT3'),
('Audit', 'HO', 'TA/HO/COM/68', 'Beyond', 'HP ProDesk 400 G4 MT', 'SGH738RMV2'),
('IT Division', 'HO', 'TA/HO/COM/69', 'Beyond', 'HP ProDesk 400 G4 MT', 'SGH738RMTT'),
('General Manager-Lap', 'Jagath', 'TA/HO/COM/70', 'Beyond', 'Dell-Latitude-3480', '183DKJ2'),
('Audit-Lap', 'Kulunu', 'TA/HO/COM/72', 'STC', 'Dell-Vostro-15-3578', '3HR5FL2'),
('Admin-Lap', 'Ashoka', 'TA/HO/COM/73', 'STC', 'Dell-Vostro-15-3578', '4GR5FL2'),
('Operation-Lap', 'Rathnayaka', 'TA/HO/COM/74', 'STC', 'Dell-Vostro-15-3578', '1GR5FL2'),
('Operation', 'Chulani', 'TA/HO/COM/75', 'Finco', 'Dell Vostro 3670', 'J4NZKQ2'),
('Operation', 'Udeshika', 'TA/HO/COM/76', 'Finco', 'Dell Vostro 3670', 'J4LZKQ2'),
('Operation', 'Saranga', 'TA/HO/COM/77', 'Finco', 'Dell Vostro 3670', 'J4VZKQ2'),
('Operation', 'Chinthaka', 'TA/HO/COM/78', 'Finco', 'Dell Vostro 3670', 'J4S3LQ2'),
('Operation', 'Shihan', 'TA/HO/COM/79', 'Finco', 'Dell Vostro 3670', 'J4T6LQ2'),
('IT LAB', 'IT LAB/Kushan', 'TA/HO/COM/80', 'Finco', 'Dell Vostro 3670', 'J4Y2LQ2'),
('Admin', 'IT LAB/Admin_procu', 'TA/HO/COM/81', 'Finco', 'Dell Vostro 3670', 'J4WZKQ2'),
('IT LAB', 'IT LAB/Nipuna', 'TA/HO/COM/82', 'Finco', 'Dell Vostro 3670', 'J5G4LQ2'),
('Admin', 'IT LAB/Admin_procu', 'TA/HO/COM/83', 'Finco', 'Dell Vostro 3670', 'J4Y2LQ2'),
('IT LAB', 'IT LAB/Kaluthara', 'TA/HO/COM/84', 'Finco', 'Dell Vostro 3670', 'J520LQ2'),
('Finance', 'Dhananjani', 'TA/HO/COM/85', 'Finco', 'Dell Vostro 3670', 'J562LQ2'),
('Finance', 'Pushpa', 'TA/HO/COM/86', 'Finco', 'Dell Vostro 3670', 'J551LQ2'),
('Finance', 'Subashini', 'TA/HO/COM/87', 'Finco', 'Dell Vostro 3670', 'J531LQ2'),
('Finance', 'Prasanna', 'TA/HO/COM/88', 'Finco', 'Dell Vostro 3670', 'J540LQ2'),
('Admin', 'Kalum', 'TA/HO/COM/89', 'Finco', 'Dell Vostro 3670', 'J573LQ2'),
('Admin', 'Dilki', 'TA/HO/COM/90', 'Finco', 'Dell Vostro 3670', 'J595LQ2'),
('Admin', 'Ayesha', 'TA/HO/COM/91', 'Finco', 'Dell Vostro 3670', 'J586LQ2'),
('Admin', 'Nishanthi', 'TA/HO/COM/92', 'Finco', 'Dell Vostro 3670', 'J5B6LQ2'),
('Tranning', 'Sanjeewa', 'TA/HO/COM/93', 'Finco', 'Dell Vostro 3670', 'J5C5LQ2'),
('Project', 'Vipuli', 'TA/HO/COM/94', 'Finco', 'Dell Vostro 3670', 'J5D4LQ2'),
('Audit', 'Kanchana', 'TA/HO/COM/95', 'Finco', 'Dell Vostro 3670', 'J5F4LQ2'),
('IT Division', 'Iyesha', 'TA/HO/COM/96', 'Finco', 'Dell Vostro 3670', 'J3S2LQ2'),
('Admin', 'Ureshaa', 'TA/HO/COM/97', 'Finco', 'Dell Vostro 3670', 'J4Z2LQ2'),
('Operation', 'KLT', 'TA/KLT/COM/04', '', 'DELL VOSTRO-260', '9FSK82S'),
('Finance', 'KLT', 'TA/KLT/COM/05', '', 'DELL VOSTRO-260', 'GW8DD2S36777495412'),
('Admin', 'KLT', 'TA/KLT/COM/06', 'Beyond', 'HP ProDesk 400 G4 MT', 'SGH7430RY9'),
('Admin', 'Nadeeka', 'TA/KLT/COM/08', 'Finco', 'Dell Vostro 3670', 'J4F3LQ2'),
('Finance', 'Kanchana', 'TA/KLT/COM/09', 'Finco', 'Dell Vostro 3670', 'J4G6LQ2'),
('Admin', 'Ranjani', 'TA/KLT/COM/10', 'Finco', 'Dell Vostro 3670', 'J427LQ2'),
('Finance', 'Pawani', 'TA/KLT/COM/11', 'Finco', 'Dell Vostro 3670', 'J4J6LQ2');

-- --------------------------------------------------------

--
-- Table structure for table `asset_user`
--

CREATE TABLE `asset_user` (
  `emp_id` varchar(11) NOT NULL,
  `title` varchar(10) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `contact_no` text NOT NULL,
  `username` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `devision` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL,
  `user_type` enum('','it_officer','data_enter','procurement','finance','gm','subject','supplier') NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asset_user`
--

INSERT INTO `asset_user` (`emp_id`, `title`, `emp_name`, `contact_no`, `username`, `address`, `devision`, `password`, `user_type`) VALUES
('0090', 'Miss.', 'Geshani Malindika', '0776563979', 'geshanimc@gmail.com', 'no.319/Karandana szouth, Karandana', 'head office', '123', 'finance'),
('12378', 'Miss.', 'Gimni Kavindika', '0342266452', 'gimni@gmail.com', 'horana rd, Ingiriya', 'head office', '123', 'data_enter'),
('1295', 'Miss.', 'Isuri Pabasara', '0714545896', 'isuriofficial@gmail.com', 'No.1, Mattagoda, ambagaspitiya.', 'head office', '123', 'data_enter'),
('1290', 'Mr.', 'Jagath Perera', '0714598755', 'jagathp@gmail.com', 'Horana', 'head office', '123', 'gm'),
('14785', 'Mrs.', 'Keshani Arundika', '0769498800', 'keshani@gmail.com', 'Epitawala, Idangoda', 'colombo', 'Keshani#123', 'data_enter'),
('4569', 'Mr.', 'Kushan Niroshana', '0774545761', 'kushan@gmail.com', 'Padukka', 'head office', '123', 'subject'),
('1399', 'Mr.', 'Nipuna Ekanayaka', '712428111', 'nipunae@gmail.com', '118/7, Himalaya rd, Battaramulla.', 'head office', '123456', 'it_officer'),
('7894', 'Mr.', 'Sanduni madushika', '0112266013', 'sanduni@gmail.com', 'Battaramulla', 'head office', '123', 'procurement');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `subject` varchar(15) NOT NULL,
  `msg` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `subject`, `msg`) VALUES
(1, '', 'isuri@gmail.com', 'Desktop', 'ssff'),
(2, '', 'gesh99@gmail.com', 'it', 'fgrvd'),
(3, '', 'gesh99@gmail.com', 'it', 'your service is excellent!!!!!!!!');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `complain_id` int(11) NOT NULL,
  `emp_id` varchar(11) NOT NULL,
  `title` varchar(10) NOT NULL,
  `emp_name` varchar(20) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `unit` varchar(15) NOT NULL,
  `asset_id` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `change` tinyint(4) NOT NULL DEFAULT 0,
  `checkout` enum('noted','not noted') NOT NULL DEFAULT 'not noted',
  `refference_no` int(11) NOT NULL,
  `pdf` varchar(20) NOT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`complain_id`, `emp_id`, `title`, `emp_name`, `contact_no`, `username`, `unit`, `asset_id`, `description`, `date`, `change`, `checkout`, `refference_no`, `pdf`, `no`) VALUES
(1, '4569', 'Mr.', 'Kushan', 774545761, 'kushan@gmail.com', 'Operation', 'TA/HO/COM/80', '   sdff                     ', '2022-07-29 10:50:38', 0, 'noted', 123, '', 0),
(2, '0090', 'Miss.', 'Geshani', 776563979, 'geshanimc@gmail.com', 'Finance', 'TA/HO/COM/96', ' keyboard                       ', '2022-09-29 11:17:38', 1, 'noted', 52361, '', 0),
(3, '1399', 'Mr.', 'Nipuna', 712428111, 'nipunae@gmail.com', 'IT', 'TA/HO/COM/96', ' ram                       ', '2022-09-29 11:20:17', 0, 'noted', 963, '', 0),
(4, '4569', 'Mr.', 'Kushan', 774545761, 'kushan@gmail.com', 'Admin', 'TA/HO/COM/80', ' asaasas                       ', '2022-09-29 15:27:22', 0, 'noted', 123, '', 0),
(5, '4569', 'Mr.', 'Kushan', 774545761, 'kushan@gmail.com', 'Admin', 'aaaa', 'computer not turn on            ', '2022-10-01 12:44:22', 0, 'noted', 789, '', 0),
(6, '4569', 'Mr.', 'Kushan', 774545761, 'kushan@gmail.com', 'Admin', 'da', ' mouse does not working', '2022-10-01 21:42:16', 0, 'noted', 698, '', 0),
(7, '4569', 'Mr.', 'Kushan', 774545761, 'kushan@gmail.com', 'Admin', 'aaaa', 'keyboard ', '2022-10-01 22:37:30', 0, 'noted', 0, '', 0),
(8, '1295', 'Miss.', 'Isuri', 714545896, 'isuriofficial@gmail.com', 'It', 'TA/HO/COM/80', '   my keyboard is not working. please note this.                     ', '2022-10-04 10:36:40', 0, 'not noted', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file_name` varchar(255) NOT NULL,
  `complain_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `f_invoice`
--

CREATE TABLE `f_invoice` (
  `complain_id` int(11) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `recomendation` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f_invoice`
--

INSERT INTO `f_invoice` (`complain_id`, `pdf`, `amount`, `date`, `recomendation`, `status`) VALUES
(2, 'Final Project Report (Individual).pdf', '1000', '2022-10-06 14:18:05', 1, 1),
(3, 'Final Project Report (Individual).pdf', '6000', '2022-10-07 09:40:28', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `complain_id` int(11) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `pdf1` varchar(255) NOT NULL,
  `purch` varchar(20) NOT NULL,
  `amount` decimal(20,0) NOT NULL,
  `rec1` tinyint(4) NOT NULL DEFAULT 0,
  `approve` tinyint(4) NOT NULL DEFAULT 0,
  `recomend` tinyint(4) NOT NULL DEFAULT 0,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `reason` varchar(100) NOT NULL,
  `recomend_by` enum('','nipuna ekanayaka','isuru shanaka') NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`complain_id`, `pdf`, `pdf1`, `purch`, `amount`, `rec1`, `approve`, `recomend`, `date`, `reason`, `recomend_by`, `title`) VALUES
(2, 'Er diagram.pdf', '', '', '6000', 1, 1, 1, '2022-10-01 22:47:35', '', 'nipuna ekanayaka', ''),
(3, 'sequence diagram.pdf', '', '', '123', 1, 0, 1, '2022-10-01 23:31:16', '', 'nipuna ekanayaka', ''),
(4, 'Untitled (1).pdf', '', '', '0', 0, 0, 1, '2022-10-01 23:33:16', '', 'nipuna ekanayaka', ''),
(5, 'class.pdf', '', '', '0', 0, 0, 0, '2022-10-01 23:39:39', '', '', ''),
(6, 'Final Project Report (Individual).pdf', '', '', '0', 0, 0, 0, '2022-10-06 14:53:21', '', '', ''),
(7, 'Individual project report final version-GAM-IT-F-2019-0024.pdf', '', '', '0', 0, 0, 0, '2022-10-06 14:58:07', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `it_officer`
--

CREATE TABLE `it_officer` (
  `emp_id` varchar(8) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `devision` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` varchar(255) NOT NULL,
  `name` varchar(30) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `fax` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `name`, `company_name`, `address`, `contact_no`, `email`, `fax`) VALUES
('A009', 'Chamod', 'abans', 'No.319/1,Karandana south', 776563979, 'geshanimc@gmail.com', '1234587035'),
('S0085', 'geshani', 'e soft', 'dhiwala', 112266013, 'geshani@gmail.com', '1234587038'),
('S3214', 'Rishmi Jayathunga', 'abans', 'battaramulla', 711881266, 'abans@gmail.com', '14725836953');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('user','it_officer','supplier','procurement','finance','gm','recomend') NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `code` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`asset_id`);

--
-- Indexes for table `asset_user`
--
ALTER TABLE `asset_user`
  ADD PRIMARY KEY (`username`) USING BTREE;

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`complain_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`complain_id`);

--
-- Indexes for table `f_invoice`
--
ALTER TABLE `f_invoice`
  ADD PRIMARY KEY (`complain_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`complain_id`);

--
-- Indexes for table `it_officer`
--
ALTER TABLE `it_officer`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `complain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
