-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2020 at 06:48 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `namegenrator`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(200) NOT NULL,
  `user_name` varchar(200) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`) VALUES
(2, 'newbranduser', '$2y$10$TcggOjNFpHTZ0Qj.YCgjUOX6Gd6FUWsSCwBysUEIC1r5z./xLOzdW');

-- --------------------------------------------------------

--
-- Table structure for table `babyNames`
--

CREATE TABLE `babyNames` (
  `id` int(11) NOT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `yourfirstname` varchar(100) DEFAULT NULL,
  `begingwith` varchar(100) DEFAULT NULL,
  `religion` varchar(100) DEFAULT NULL,
  `filmstar` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `babyNames`
--

INSERT INTO `babyNames` (`id`, `gender`, `surname`, `yourfirstname`, `begingwith`, `religion`, `filmstar`, `country`, `name`) VALUES
(1, '2', 'O\'Ryan', 'Emiliano', 'H', 'Hindu', 'Sidney Poitier', 'American', 'Hina'),
(13, '1', '', 'Abdo', 'A', 'Muslim', '', 'Afghan', 'Abdo'),
(14, '1', '', '', 'A', 'Muslim', '', 'Afghan', 'Abin'),
(15, '1', '', '', 'A', '', '', 'Austrailian', 'Ad'),
(16, '1', '', '', 'A', '', '', 'Austrailian', 'Aat'),
(17, '1', '', '', 'A', '', '', 'Austrailian', 'Abe'),
(18, '1', '', '', 'A', '', '', 'Austrailian', 'Abo'),
(19, '1', '', '', 'A', '', '', 'Austrailian', 'Abu'),
(20, '1', '', '', 'A', '', '', 'Austrailian', 'Aby'),
(21, '1', '', '', 'A', '', '', 'Austrailian', 'Ace'),
(22, '1', '', '', 'A', '', '', 'Austrailian', 'Aco'),
(23, '1', '', '', 'A', '', '', 'Austrailian', 'Adb'),
(24, '1', '', '', 'A', '', '', 'Austrailian', 'Ado'),
(25, '1', '', '', 'A', '', '', 'Austrailian', 'Ady'),
(26, '1', '', '', 'B', '', '', 'Austrailian', 'Ba'),
(27, '1', '', '', 'B', '', '', 'Austrailian', 'Bai'),
(28, '1', '', '', 'B', '', '', 'Austrailian', 'Ban'),
(29, '1', '', '', 'B', '', '', 'Austrailian', 'Bau'),
(30, '1', '', '', 'B', '', '', 'Austrailian', 'Bay'),
(31, '1', '', '', 'B', '', '', 'Austrailian', 'Baz'),
(32, '1', '', '', 'B', '', '', 'Austrailian', 'Bei'),
(33, '1', '', '', 'B', '', '', 'Austrailian', 'Ben'),
(34, '1', '', '', 'B', '', '', 'Austrailian', 'Bil'),
(35, '1', '', '', 'B', '', '', 'Austrailian', 'Bim'),
(36, '1', '', '', 'B', '', '', 'Austrailian', 'Bin'),
(37, '1', '', '', 'C', '', '', 'Austrailian', 'Co'),
(38, '1', '', '', 'C', '', '', 'Austrailian', 'Cai'),
(39, '1', '', '', 'C', '', '', 'Austrailian', 'Cal'),
(40, '1', '', '', 'C', '', '', 'Austrailian', 'Cam'),
(41, '1', '', '', 'C', '', '', 'Austrailian', 'Can'),
(42, '1', '', '', 'C', '', '', 'Austrailian', 'Cas'),
(43, '1', '', '', 'C', '', '', 'Austrailian', 'Cat'),
(44, '1', '', '', 'C', '', '', 'Austrailian', 'Cei'),
(45, '1', '', '', 'C', '', '', 'Austrailian', 'Cem'),
(46, '1', '', '', 'C', '', '', 'Austrailian', 'Ces'),
(47, '1', '', '', 'C', '', '', 'Austrailian', 'Coe'),
(48, '1', '', '', 'D', '', '', 'Austrailian', 'Da'),
(49, '1', '', '', 'D', '', '', 'Austrailian', 'Dac'),
(50, '1', '', '', 'D', '', '', 'Austrailian', 'Dal'),
(51, '1', '', '', 'D', '', '', 'Austrailian', 'Dam'),
(52, '1', '', '', 'D', '', '', 'Austrailian', 'Dan'),
(53, '1', '', '', 'D', '', '', 'Austrailian', 'Dat'),
(54, '1', '', '', 'D', '', '', 'Austrailian', 'Dav'),
(55, '1', '', '', 'D', '', '', 'Austrailian', 'Dax'),
(56, '1', '', '', 'D', '', '', 'Austrailian', 'Dee'),
(57, '1', '', '', 'D', '', '', 'Austrailian', 'Del'),
(58, '1', '', '', 'D', '', '', 'Austrailian', 'Den');

-- --------------------------------------------------------

--
-- Table structure for table `BandNames`
--

CREATE TABLE `BandNames` (
  `id` int(11) NOT NULL,
  `adjective` varchar(100) DEFAULT NULL,
  `leadfirstName` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `noun` varchar(100) DEFAULT NULL,
  `names` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `BandNames`
--

INSERT INTO `BandNames` (`id`, `adjective`, `leadfirstName`, `place`, `noun`, `names`) VALUES
(1, 'won', 'f', 'dehradun', 'dehradun', 'jok band'),
(2, ' n mn', 'sfsd', 'dfsd', 'sds', 'sdvs');

-- --------------------------------------------------------

--
-- Table structure for table `blogNames`
--

CREATE TABLE `blogNames` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `adjective` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogNames`
--

INSERT INTO `blogNames` (`id`, `fname`, `lname`, `adjective`, `name`, `place`) VALUES
(2, 'first', 'last', 'won', 'first middle last', 'Dubai');

-- --------------------------------------------------------

--
-- Table structure for table `businessNames`
--

CREATE TABLE `businessNames` (
  `id` int(11) NOT NULL,
  `b_type` varchar(100) DEFAULT NULL,
  `b_activity` varchar(100) DEFAULT NULL,
  `b_based` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `businessNames`
--

INSERT INTO `businessNames` (`id`, `b_type`, `b_activity`, `b_based`, `name`) VALUES
(3, 'Souless Corporation', 'Cooking', 'Australia', 'Cooking Grove'),
(4, 'small family run', 'Baking', 'Australia', 'Yummy Banking');

-- --------------------------------------------------------

--
-- Table structure for table `catNames`
--

CREATE TABLE `catNames` (
  `id` int(11) NOT NULL,
  `color` varchar(100) DEFAULT NULL,
  `pattern` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `catNames`
--

INSERT INTO `catNames` (`id`, `color`, `pattern`, `gender`, `name`) VALUES
(1, 'dfvfd', 'dv', '2', 'dfvf');

-- --------------------------------------------------------

--
-- Table structure for table `charactersName`
--

CREATE TABLE `charactersName` (
  `id` int(11) NOT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `flavour` varchar(100) DEFAULT NULL,
  `characters` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `charactersName`
--

INSERT INTO `charactersName` (`id`, `gender`, `title`, `flavour`, `characters`, `country`, `name`) VALUES
(7, '1', 'Mr', 'human', '', 'Austrailian', 'Sam Lawson'),
(8, '1', 'Mr', 'human', '', 'Austrailian', 'Nicholas Lynes'),
(9, '1', 'Mr', 'human', '', 'Austrailian', 'Archer Miller'),
(10, '1', 'Mr', 'human', '', 'Austrailian', 'Marcus McNeil'),
(11, '1', 'Mr', 'human', '', 'Austrailian', 'Cameron Weaving'),
(12, '1', 'Mr', 'human', '', 'Austrailian', 'Eli Ellis'),
(13, '1', 'Mr', 'human', '', 'Austrailian', 'Sebastian Price'),
(14, '1', 'Mr', 'human', '', 'Austrailian', 'Levi Black'),
(15, '1', 'Mr', 'human', '', 'Austrailian', 'Luke Horner'),
(16, '1', 'Mr', 'human', '', 'Austrailian', 'Seth O\'Brien');

-- --------------------------------------------------------

--
-- Table structure for table `Citynames`
--

CREATE TABLE `Citynames` (
  `id` int(11) NOT NULL,
  `kindof` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `beginwith` varchar(100) DEFAULT NULL,
  `endwith` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Citynames`
--

INSERT INTO `Citynames` (`id`, `kindof`, `region`, `beginwith`, `endwith`, `name`) VALUES
(1, 'Real', 'CA', 'a', 'j', 'aj');

-- --------------------------------------------------------

--
-- Table structure for table `countryNames`
--

CREATE TABLE `countryNames` (
  `id` int(11) NOT NULL,
  `kindofname` varchar(100) DEFAULT NULL,
  `beginwith` varchar(100) DEFAULT NULL,
  `endwith` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countryNames`
--

INSERT INTO `countryNames` (`id`, `kindofname`, `beginwith`, `endwith`, `name`) VALUES
(2, 'Real', 'A', '', 'Algeria'),
(3, 'Real', 'A', '', 'Albania'),
(4, 'Real', 'A', '', 'Argentina'),
(5, 'Real', 'A', '', 'Austria'),
(6, 'Real', 'A', '', 'Australia'),
(7, 'Real', 'A', '', 'Andorra'),
(8, 'Real', 'A', '', 'Aland Islands'),
(9, 'Real', 'A', '', 'Afghanistan'),
(10, 'Real', 'A', '', 'Armenia'),
(11, 'Real', 'A', '', 'Angola'),
(12, 'Real', 'A', '', 'Aruba'),
(13, 'Real', 'A', '', 'Azerbaijan'),
(14, 'Real', 'A', '', 'Antigua and Barbuda'),
(15, 'Real', 'A', '', 'American Samoa'),
(16, 'Real', 'A', '', 'Anguilla'),
(17, 'Real', 'B', '', 'Brazil'),
(18, 'Real', 'B', '', 'Belize'),
(19, 'Real', 'B', '', 'Bolivia'),
(20, 'Real', 'B', '', 'Botswana'),
(21, 'Real', 'B', '', 'Barbados'),
(22, 'Real', 'B', '', 'Belgium'),
(23, 'Real', 'B', '', 'Benin'),
(24, 'Real', 'B', '', 'Bangladesh'),
(25, 'Real', 'B', '', 'Burkina Faso'),
(27, 'Real', 'B', '', 'Burundi'),
(28, 'Real', 'B', '', 'Bonaire'),
(29, 'Real', 'B', '', 'Bosnia and Herzegovina'),
(30, 'Real', 'B', '', 'Belarus'),
(31, 'Real', 'B', '', 'Brunei'),
(32, 'Real', 'B', '', 'Brunei'),
(33, 'Real', 'B', '', 'Bhutan'),
(34, 'Real', 'B', '', 'Bahrain'),
(35, 'Real', 'B', '', 'British Indian Ocean Territory'),
(36, 'Real', 'C', '', 'Canada'),
(37, 'Real', 'C', '', 'Cook Islands'),
(38, 'Real', 'C', '', 'Cambodia'),
(39, 'Real', 'C', '', 'Chile'),
(40, 'Real', 'C', '', 'Chad'),
(41, 'Real', 'C', '', 'Croatia'),
(42, 'Real', 'C', '', 'Cuba'),
(43, 'Real', 'C', '', 'Cameroon'),
(44, 'Real', 'C', '', 'Colombia'),
(45, 'Real', 'C', '', 'Christmas Island'),
(46, 'Real', 'C', '', 'China'),
(47, 'Real', 'C', '', 'Cape Verde'),
(48, 'Real', 'C', '', 'Czech Republic'),
(49, 'Real', 'C', '', 'Comoros'),
(50, 'Real', 'C', '', 'Cyprus'),
(51, 'Real', 'C', '', 'Cocos (Keeling) Islands'),
(52, 'Real', 'C', '', 'Cayman Islands'),
(53, 'Real', 'C', '', 'Curacao'),
(54, 'Real', 'C', '', 'Central African Republic'),
(55, 'Real', 'C', '', 'Costa Rica'),
(56, 'Real', 'D', '', 'Dominican Republic'),
(57, 'Real', 'D', '', 'Democratic Republic of the Congo'),
(58, 'Real', 'D', '', 'Denmark'),
(59, 'Real', 'D', '', 'Dominica'),
(60, 'Real', 'D', '', 'Djibouti'),
(66, 'Real', 'E', '', 'Ecuador'),
(67, 'Real', 'E', '', 'Ethiopia'),
(68, 'Real', 'E', '', 'Estonia'),
(69, 'Real', 'E', '', 'East Timor'),
(70, 'Real', 'E', '', 'Equatorial Guinea'),
(71, 'Real', 'E', '', 'England'),
(72, 'Real', 'E', '', 'El Salvador'),
(73, 'Real', 'E', '', 'Eritrea'),
(74, 'Real', 'E', '', 'Egypt'),
(75, 'Real', 'F', '', 'Falkland Islands'),
(76, 'Real', 'F', '', 'French Southern and Antarctic Lands'),
(77, 'Real', 'F', '', 'Fiji'),
(78, 'Real', 'F', '', 'Faroe Islands'),
(79, 'Real', 'F', '', 'Federated States of Micronesia'),
(80, 'Real', 'F', '', 'Finland'),
(81, 'Real', 'F', '', 'French Polynesia'),
(82, 'Real', 'F', '', 'France'),
(83, 'Real', 'F', '', 'French Guiana'),
(84, 'Real', 'G', '', 'Guernsey'),
(85, 'Real', 'G', '', 'Georgia'),
(86, 'Real', 'G', '', 'Germany'),
(87, 'Real', 'G', '', 'Gibraltar'),
(88, 'Real', 'G', '', 'Guinea-Bissau'),
(89, 'Real', 'G', '', 'Guadeloupe'),
(90, 'Real', 'G', '', 'Guyana'),
(91, 'Real', 'G', '', 'Greece'),
(92, 'Real', 'G', '', 'Gabon'),
(93, 'Real', 'G', '', 'Greenland'),
(94, 'Real', 'G', '', 'Guatemala'),
(95, 'Real', 'H', '', 'Holy See'),
(96, 'Real', 'H', '', 'Hong Kong'),
(97, 'Real', 'H', '', 'Haiti'),
(98, 'Real', 'H', '', 'Hungary'),
(99, 'Real', 'H', '', 'v'),
(100, 'Real', 'H', '', 'Honduras'),
(101, 'Real', 'I', '', 'Italy'),
(102, 'Real', 'I', '', 'India'),
(103, 'Real', 'I', '', 'Israel'),
(104, 'Real', 'I', '', 'Iceland'),
(105, 'Real', 'I', '', 'Iraq'),
(106, 'Real', 'I', '', 'Iran'),
(107, 'Real', 'I', '', 'Indonesia'),
(108, 'Real', 'I', '', 'Isle of Man'),
(109, 'Real', 'I', '', 'Ivory Coast'),
(110, 'Real', 'J', '', 'Jersey'),
(111, 'Real', 'J', '', 'Jamaica'),
(112, 'Real', 'J', '', 'Jordan'),
(113, 'Real', 'J', '', 'Japan'),
(114, 'Real', 'K', '', 'Kazakhstan'),
(115, 'Real', 'K', '', 'Kuwait'),
(116, 'Real', 'K', '', 'Kyrgyzstan'),
(117, 'Real', 'K', '', 'Kiribati'),
(118, 'Real', 'K', '', 'Kenya'),
(119, 'Real', 'L', '', 'Liechtenstein'),
(120, 'Real', 'L', '', 'Lithuania'),
(121, 'Real', 'L', '', 'Libya'),
(122, 'Real', 'L', '', 'Lesotho'),
(123, 'Real', 'L', '', 'Luxembourg'),
(124, 'Real', 'L', '', 'Lebanon'),
(125, 'Real', 'L', '', 'Laos'),
(126, 'Real', 'L', '', 'Latvia'),
(127, 'Real', 'L', '', 'Liberia'),
(128, 'Real', 'M', '', 'Mali'),
(129, 'Real', 'M', '', 'Maldives'),
(130, 'Real', 'M', '', 'Malaysia'),
(131, 'Real', 'M', '', 'Malta'),
(132, 'Real', 'M', '', 'Marshall Islands'),
(133, 'Real', 'M', '', 'Morocco'),
(134, 'Real', 'M', '', 'Martinique'),
(135, 'Real', 'M', '', 'Mauritania'),
(136, 'Real', 'M', '', 'Malawi'),
(137, 'Real', 'M', '', 'Myanmar'),
(138, 'Real', 'M', '', 'Montenegro'),
(139, 'Real', 'M', '', 'Monaco'),
(140, 'Real', 'M', '', 'Mayotte'),
(141, 'Real', 'M', '', 'Mauritius'),
(142, 'Real', 'M', '', 'Mexico'),
(143, 'Real', 'M', '', 'Macau'),
(144, 'Real', 'M', '', 'Mongolia'),
(145, 'Real', 'M', '', 'Montserrat'),
(146, 'Real', 'M', '', 'Madagascar'),
(147, 'Real', 'M', '', 'Moldova'),
(148, 'Real', 'M', '', 'Mozambique'),
(149, 'Real', 'N', '', 'Nauru'),
(150, 'Real', 'N', '', 'Norway'),
(151, 'Real', 'N', '', 'Northern Ireland'),
(152, 'Real', 'N', '', 'Nepal'),
(153, 'Real', 'N', '', 'Norfolk Island'),
(154, 'Real', 'N', '', 'Niger'),
(155, 'Real', 'N', '', 'Nicaragua'),
(156, 'Real', 'N', '', 'Netherlands'),
(157, 'Real', 'N', '', 'Nigeria'),
(158, 'Real', 'N', '', 'Northern Mariana Islands'),
(159, 'Real', 'N', '', 'Niue'),
(160, 'Real', 'N', '', 'New Caledonia'),
(161, 'Real', 'N', '', 'New Zealand'),
(162, 'Real', 'N', '', 'North Korea'),
(163, 'Real', 'N', '', 'Namibia'),
(164, 'Real', 'O', '', 'Oman'),
(165, 'Real', 'P', '', 'Puerto Rico'),
(166, 'Real', 'P', '', 'Palau'),
(167, 'Real', 'P', '', 'Peru'),
(168, 'Real', 'P', '', 'Palestine'),
(169, 'Real', 'P', '', 'Papua New Guinea'),
(170, 'Real', 'P', '', 'Pakistan'),
(171, 'Real', 'P', '', 'Panama'),
(172, 'Real', 'P', '', 'Paraguay'),
(173, 'Real', 'P', '', 'Pitcairn Islands'),
(174, 'Real', 'P', '', 'Poland'),
(175, 'Real', 'P', '', 'Philippines'),
(176, 'Real', 'P', '', 'Portugal'),
(177, 'Real', 'Q', '', 'Qatar'),
(178, 'Real', 'R', '', 'Republic of the Congo'),
(179, 'Real', 'R', '', 'Republic of Macedonia'),
(180, 'Real', 'R', '', 'Reunion'),
(181, 'Real', 'R', '', 'Rwanda'),
(182, 'Real', 'R', '', 'Republic of Ireland'),
(183, 'Real', 'R', '', 'Romania'),
(184, 'Real', 'R', '', 'Republic of Kosovo'),
(185, 'Real', 'R', '', 'Russia'),
(186, 'Real', 'S', '', 'South Korea'),
(187, 'Real', 'S', '', 'Spain'),
(188, 'Real', 'S', '', 'Swaziland'),
(189, 'Real', 'S', '', 'Samoa'),
(190, 'Real', 'S', '', 'Svalbard and Jan Mayen'),
(191, 'Real', 'S', '', 'Sint Maarten'),
(192, 'Real', 'S', '', 'Serbia'),
(193, 'Real', 'S', '', 'South Sudan'),
(194, 'Real', 'S', '', 'Sao Tome and Principe'),
(195, 'Real', 'S', '', 'Senegal'),
(196, 'Real', 'S', '', 'Solomon Islands'),
(197, 'Real', 'S', '', 'San Marino'),
(198, 'Real', 'S', '', 'Switzerland'),
(199, 'Real', 'S', '', 'Somalia'),
(200, 'Real', 'S', '', 'Saint Barthelemy'),
(201, 'Real', 'S', '', 'Sudan'),
(202, 'Real', 'S', '', 'Suriname'),
(203, 'Real', 'S', '', 'South Georgia'),
(204, 'Real', 'S', '', 'South Africa'),
(205, 'Real', 'S', '', 'Saint Vincent and the Grenadines'),
(206, 'Real', 'S', '', 'Saint Kitts and Nevis'),
(207, 'Real', 'S', '', 'Saint Martin'),
(208, 'Real', 'S', '', 'Sri Lanka'),
(209, 'Real', 'S', '', 'Saint Pierre and Miquelon'),
(210, 'Real', 'S', '', 'Saint Pierre and Miquelon'),
(211, 'Real', 'S', '', 'Saudi Arabia'),
(212, 'Real', 'S', '', 'Slovakia'),
(213, 'Real', 'S', '', 'Saint Helena'),
(214, 'Real', 'S', '', 'Seychelles'),
(215, 'Real', 'S', '', 'Scotland'),
(216, 'Real', 'S', '', 'Syria'),
(217, 'Real', 'S', '', 'Sierra Leone'),
(218, 'Real', 'S', '', 'Sweden'),
(219, 'Real', 'S', '', 'Saint Lucia'),
(220, 'Real', 'S', '', 'Singapore'),
(221, 'Real', 'T', '', 'Tajikistan'),
(222, 'Real', 'T', '', 'The Gambia'),
(223, 'Real', 'T', '', 'Thailand'),
(224, 'Real', 'T', '', 'Tonga'),
(225, 'Real', 'T', '', 'Togo'),
(226, 'Real', 'T', '', 'Tanzania'),
(227, 'Real', 'T', '', 'Turkmenistan'),
(228, 'Real', 'T', '', 'Tuvalu'),
(229, 'Real', 'T', '', 'Tunisia'),
(230, 'Real', 'T', '', 'Turks and Caicos Islands'),
(231, 'Real', 'T', '', 'Turkey'),
(232, 'Real', 'T', '', 'Tokelau'),
(233, 'Real', 'T', '', 'Trinidad and Tobago'),
(234, 'Real', 'T', '', 'The Bahamas'),
(235, 'Real', 'T', '', 'Taiwan'),
(236, 'Real', 'U', '', 'Uganda'),
(237, 'Real', 'U', '', 'United Arab Emirates'),
(238, 'Real', 'U', '', 'United Kingdom'),
(239, 'Real', 'U', '', 'Uzbekistan'),
(240, 'Real', 'U', '', 'Uruguay'),
(241, 'Real', 'U', '', 'United States Minor Outlying Island'),
(242, 'Real', 'U', '', 'United States'),
(243, 'Real', 'U', '', 'Ukraine'),
(244, 'Real', 'V', '', 'Vanuatu'),
(245, 'Real', 'V', '', 'Virgin Islands (U.S.)'),
(246, 'Real', 'V', '', 'Virgin Islands (British)'),
(247, 'Real', 'V', '', 'Vietnam'),
(248, 'Real', 'V', '', 'Venezuela'),
(249, 'Real', 'W', '', 'Wales'),
(250, 'Real', 'W', '', 'Western Sahara'),
(251, 'Real', 'W', '', 'Wallis and Futuna'),
(252, 'Real', 'Y', '', 'Yemen'),
(253, 'Real', 'Z', '', 'Zimbabwe'),
(254, 'Real', 'Z', '', 'Zambia');

-- --------------------------------------------------------

--
-- Table structure for table `couplenames`
--

CREATE TABLE `couplenames` (
  `id` int(11) NOT NULL,
  `afname` varchar(100) DEFAULT NULL,
  `asname` varchar(100) DEFAULT NULL,
  `bfname` varchar(100) DEFAULT NULL,
  `bsname` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `couplenames`
--

INSERT INTO `couplenames` (`id`, `afname`, `asname`, `bfname`, `bsname`, `name`) VALUES
(1, 'scs', 'sc', 'sc', 'sc', 'scvsdvsd');

-- --------------------------------------------------------

--
-- Table structure for table `fantacyNames`
--

CREATE TABLE `fantacyNames` (
  `id` int(11) NOT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `typeofname` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fantacyNames`
--

INSERT INTO `fantacyNames` (`id`, `gender`, `typeofname`, `name`) VALUES
(1, '1', 'first', 'dscsdcds');

-- --------------------------------------------------------

--
-- Table structure for table `femaleNames`
--

CREATE TABLE `femaleNames` (
  `id` int(11) NOT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `birthyear` text DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `religion` varchar(100) DEFAULT NULL,
  `beginwith` varchar(100) DEFAULT NULL,
  `name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `femaleNames`
--

INSERT INTO `femaleNames` (`id`, `surname`, `birthyear`, `country`, `religion`, `beginwith`, `name`) VALUES
(1, 'sc', 'c', 'Austrailian', 'sdcsd', 'sdcds', 'zc');

-- --------------------------------------------------------

--
-- Table structure for table `firstNames`
--

CREATE TABLE `firstNames` (
  `id` int(11) NOT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `birthyear` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `religion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `firstNames`
--

INSERT INTO `firstNames` (`id`, `surname`, `gender`, `birthyear`, `name`, `country`, `religion`) VALUES
(2, 'last', '1', 'league name', 'john', 'Austrailian', 'Christian');

-- --------------------------------------------------------

--
-- Table structure for table `foodNames`
--

CREATE TABLE `foodNames` (
  `id` int(11) NOT NULL,
  `typeoffood` varchar(100) DEFAULT NULL,
  `ingredients` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `lifestyle` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foodNames`
--

INSERT INTO `foodNames` (`id`, `typeoffood`, `ingredients`, `name`, `lifestyle`) VALUES
(2, 'Starters', 'angelica', 'Label Competition', 'Vegan');

-- --------------------------------------------------------

--
-- Table structure for table `gamingNames`
--

CREATE TABLE `gamingNames` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `adjective` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gamingNames`
--

INSERT INTO `gamingNames` (`id`, `firstname`, `adjective`, `country`, `name`) VALUES
(1, 'f', 'dscc', 'American', 'Label Competition');

-- --------------------------------------------------------

--
-- Table structure for table `heroNames`
--

CREATE TABLE `heroNames` (
  `id` int(11) NOT NULL,
  `kindofcharacter` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `adjective` varchar(100) DEFAULT NULL,
  `likeanimal` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `heroNames`
--

INSERT INTO `heroNames` (`id`, `kindofcharacter`, `gender`, `adjective`, `likeanimal`, `name`) VALUES
(1, 'superhero', '1', 'c ', 's s', 'ss'),
(2, 'superhero', '1', 'hbjkbj', 'bbbb', 'vjvjhv');

-- --------------------------------------------------------

--
-- Table structure for table `houseNames`
--

CREATE TABLE `houseNames` (
  `id` int(11) NOT NULL,
  `location` varchar(100) DEFAULT NULL,
  `size` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `houseNames`
--

INSERT INTO `houseNames` (`id`, `location`, `size`, `color`, `street`, `name`) VALUES
(1, 'd', 'sd', 'sd', 'sv', 'dscds');

-- --------------------------------------------------------

--
-- Table structure for table `lastNames`
--

CREATE TABLE `lastNames` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `birthyear` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `religion` varchar(100) DEFAULT NULL,
  `typeofcharcter` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lastNames`
--

INSERT INTO `lastNames` (`id`, `fname`, `country`, `birthyear`, `name`, `religion`, `typeofcharcter`) VALUES
(2, 'first', 'American', 'league name', 'sdcd', 'Hindu', 'virtuous');

-- --------------------------------------------------------

--
-- Table structure for table `malenames`
--

CREATE TABLE `malenames` (
  `id` int(11) NOT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `birthyear` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `religion` varchar(100) DEFAULT NULL,
  `beginwith` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `malenames`
--

INSERT INTO `malenames` (`id`, `surname`, `birthyear`, `country`, `religion`, `beginwith`, `name`) VALUES
(1, 'sdcs', 'ds', 'Canadian', 'sdcs', 'sdcs', 'csdc');

-- --------------------------------------------------------

--
-- Table structure for table `middlenames`
--

CREATE TABLE `middlenames` (
  `id` int(11) NOT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `birthyear` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `middlenames`
--

INSERT INTO `middlenames` (`id`, `surname`, `gender`, `birthyear`, `name`) VALUES
(1, 'last', '1', 'league name', 'acsdc');

-- --------------------------------------------------------

--
-- Table structure for table `nickNames`
--

CREATE TABLE `nickNames` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nickNames`
--

INSERT INTO `nickNames` (`id`, `fname`, `mname`, `lname`, `gender`, `name`) VALUES
(1, 'xc ', 'cxv', 'xcv', '2', 'xcv');

-- --------------------------------------------------------

--
-- Table structure for table `penNames`
--

CREATE TABLE `penNames` (
  `id` int(11) NOT NULL,
  `positiveAdjective` varchar(100) DEFAULT NULL,
  `weapon` varchar(100) DEFAULT NULL,
  `firstChar` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `language` varchar(100) DEFAULT NULL,
  `names` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penNames`
--

INSERT INTO `penNames` (`id`, `positiveAdjective`, `weapon`, `firstChar`, `gender`, `language`, `names`) VALUES
(1, 'won', 'pistol', 'f', '1', 'Hindi', 'fan');

-- --------------------------------------------------------

--
-- Table structure for table `pirateNames`
--

CREATE TABLE `pirateNames` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `adjective` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pirateNames`
--

INSERT INTO `pirateNames` (`id`, `fname`, `color`, `adjective`, `name`, `place`) VALUES
(2, 'first', 'dfvfd', 'dscc', 'test competition ', 'America');

-- --------------------------------------------------------

--
-- Table structure for table `quickName`
--

CREATE TABLE `quickName` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quickName`
--

INSERT INTO `quickName` (`id`, `name`, `gender`, `country`) VALUES
(1, 'jitendra kumar ', '1', 'Canadian'),
(2, 'andrew', '1', 'Armenian'),
(3, 'dfvf', '1', 'American Samoan'),
(4, 'sdcsdc', '1', 'American Samoan'),
(5, 'bknb', '1', 'American'),
(6, 'sddsfsd', '2', 'American'),
(7, 'scvsdvsd', '2', 'American'),
(8, 'sdsfs sdds', '3', 'American'),
(9, 'dscsdcds', '3', 'American'),
(10, 'sdcsdsd', '3', 'American'),
(11, 'dsdv sfsdv ', '3', 'American'),
(12, 'jitendra kumar ', '1', 'Indian'),
(13, 'Audace Tomassini', '1', 'Italian'),
(14, 'Bardo Gotti', '1', 'Italian'),
(15, 'Sicuro Spoto', '1', 'Italian'),
(16, 'Adalfredo Adalfredo', '1', 'Italian'),
(17, 'Brando Di Toro', '1', ''),
(18, 'Magno Soldan', '1', 'Italian'),
(19, 'Ludovico Scaccia', '1', 'Italian'),
(20, 'Stefano Longobardi', '1', 'Italian'),
(21, 'Nicezio Nicezio ', '1', 'Italian'),
(22, 'Valtena Cappella', '1', 'Italian'),
(23, 'Valtena Cappella', '1', 'Italian'),
(24, 'Prisco Marzo', '1', 'Italian'),
(25, 'Vitalico Zangari', '1', 'Italian'),
(26, 'Richelmo Famiglietti', '1', 'Italian'),
(27, 'Richelmo Famiglietti', '1', 'Italian'),
(28, 'Paolo Di Pilato', '1', 'Italian'),
(29, 'Uguccione Rutigliano', '1', 'Italian'),
(30, 'Isacco Trubiano', '1', 'Italian'),
(31, 'Ugo Gugino', '1', 'Italian'),
(32, 'Isacco Cerro', '1', 'Italian'),
(33, 'Alvaro Travisano', '1', 'Italian'),
(34, 'Gualtiero Di Maio', '1', 'Italian'),
(35, 'Valfredo Ianniello', '1', 'Italian'),
(36, 'Bonavita De Felice', '1', 'Italian'),
(37, 'Plinio Elmo', '1', 'Italian'),
(38, 'Carmelo Rana', '1', 'Italian'),
(39, 'Spagnuolo Arminio ', '1', 'Italian'),
(40, 'Placido La Morte', '1', ''),
(41, 'Giobbe Sapienza', '1', 'Italian'),
(42, 'Callum Fox', '1', 'Australian'),
(43, 'Nathan Beck', '1', 'Austrailian'),
(44, 'Connor Dry', '1', 'Austrailian'),
(45, 'Declan Griffin', '1', 'Austrailian'),
(46, 'Isaiah Connell', '1', 'Austrailian'),
(47, 'Theodore Taylor', '1', 'Austrailian'),
(48, 'Maxwell Fry', '1', 'Austrailian'),
(49, 'Mitchell Bergen', '1', 'Austrailian'),
(50, 'Christopher Carter', '1', 'Austrailian'),
(51, 'Vincent Johnson', '1', 'Austrailian'),
(52, 'Jack Samuel', '1', 'Austrailian'),
(53, 'Eli Robinson', '1', 'Austrailian'),
(54, 'Vincent Bell', '1', 'Austrailian'),
(55, 'Matthew Johnson', '1', 'Austrailian'),
(56, 'Andrew Blair', '1', 'Austrailian'),
(57, 'Luke Horner', '1', 'Austrailian'),
(58, 'Marcus Griffin', '1', 'Austrailian'),
(59, 'Bailey Knight', '1', 'Austrailian'),
(60, 'Benjamin Vinson', '1', 'Austrailian'),
(61, 'Charlie Webb', '2', 'Austrailian'),
(62, 'Aurora Coleman', '2', 'Austrailian'),
(63, 'Lilly Colling', '2', 'Austrailian'),
(64, 'Abigail Tran', '2', 'Austrailian'),
(65, 'Luna Gill', '2', 'Austrailian'),
(66, 'Summer Watson', '2', 'Austrailian'),
(67, 'Poppy Thompson', '2', 'Austrailian'),
(68, 'Sophia Fry', '2', 'Austrailian'),
(69, 'Harlow Porter', '2', 'Austrailian'),
(70, 'Eliana Newman', '2', 'Austrailian'),
(71, 'Lola Beck', '2', 'Austrailian'),
(72, 'Isabella Hill', '2', 'Austrailian'),
(73, 'Molly Lynes', '2', 'Austrailian'),
(74, 'Maya Larkins', '2', 'Austrailian'),
(75, 'Ivy Thompson', '2', 'Austrailian'),
(76, 'Willow Ross', '2', 'Austrailian'),
(77, 'Alana Ryan', '2', 'Austrailian'),
(78, 'Claire Wheelwright', '2', 'Austrailian'),
(79, 'Sarah Kennedy', '2', 'Austrailian'),
(80, 'Summer Goodrem', '2', 'Austrailian'),
(81, 'Nate Bergen', '1', 'Austrailian'),
(82, 'Hayden Duncan', '1', 'Austrailian'),
(83, 'Jake Wheelwright', '1', 'Austrailian'),
(84, 'Arthur Campbell', '1', 'Austrailian'),
(85, 'William Mussett', '1', 'Austrailian'),
(86, 'Levi Stone', '1', 'Austrailian'),
(87, 'Sonny Lawson', '1', 'Austrailian'),
(88, 'Charlie Watson', '1', 'Austrailian'),
(89, 'Kai Simpson', '1', 'Austrailian'),
(90, 'Riley Griffith', '1', 'Austrailian'),
(91, 'Marcus Black', '1', 'Austrailian'),
(92, 'Charles Ramsay', '1', 'Austrailian'),
(93, 'Braxton Bailey', '1', 'Austrailian'),
(94, 'Hudson Burke', '1', 'Austrailian'),
(95, 'Angus Davis', '1', 'Austrailian'),
(96, 'Jett Taylor', '1', 'Austrailian'),
(97, 'Sam Lucas', '1', 'Austrailian'),
(98, 'Cameron Beck', '1', 'Austrailian'),
(99, 'Dominic Madden', '1', 'Austrailian'),
(100, 'Joel Fox', '1', 'Austrailian'),
(101, 'Nathaniel Evison', '1', 'Austrailian'),
(102, 'Hunter Fisher', '1', 'Austrailian'),
(103, 'Louis Samuel', '1', 'Austrailian'),
(104, 'Isaiah Whitford', '1', 'Austrailian'),
(105, 'Callum Nevin', '1', 'Austrailian'),
(106, 'Blake Young', '1', 'Austrailian'),
(107, 'Lucas Clemens', '1', 'Austrailian'),
(108, 'Ryder Clare', '1', 'Austrailian'),
(109, 'Lincoln Graham', '1', 'Austrailian'),
(110, 'Sam Lawson', '1', 'Austrailian'),
(111, 'Aiden Newman', '1', 'Austrailian'),
(112, 'Ethan Russell', '1', 'Austrailian'),
(113, 'Louis Morris', '1', 'Austrailian'),
(114, 'Flynn Johnston', '1', 'Austrailian'),
(115, 'Flynn Johnston', '1', 'Austrailian'),
(116, 'Mason Adams', '1', 'Austrailian'),
(117, 'Leo Gill', '1', 'Austrailian'),
(118, 'Sam Kelly', '1', 'Austrailian'),
(119, 'Nicholas Jackson', '1', 'Austrailian'),
(120, 'Kai Ellis', '1', 'Austrailian'),
(121, 'Michael Burke', '1', 'Austrailian'),
(122, 'Arthur Harrison', '1', 'Austrailian'),
(123, 'Charles Lewis', '1', 'Austrailian'),
(124, 'Leo Wynter', '1', 'Austrailian'),
(125, 'Arlo Wall', '1', 'Austrailian'),
(126, 'Finn Terrell', '1', 'Austrailian'),
(127, 'Isaac Evans', '1', 'Austrailian'),
(128, 'Matthew Mussett', '1', 'Austrailian'),
(129, 'Sam Clarke', '1', 'Austrailian'),
(130, 'Joshua Wheaton', '1', 'Austrailian'),
(131, 'Nixon Kidman', '1', 'Austrailian'),
(132, 'Jonathan Turner', '1', 'Austrailian'),
(133, 'Charles Fry', '1', 'Austrailian'),
(134, 'Noah Vinson', '1', 'Austrailian'),
(135, 'Samuel Barrett', '1', 'Austrailian'),
(136, 'Chase Blair', '1', 'Austrailian'),
(137, 'Toby Weaver', '1', 'Austrailian'),
(138, 'Flynn Connell', '1', 'Austrailian'),
(139, 'Luke Morgan', '1', 'Austrailian'),
(140, 'Marcus McNeil', '1', 'Austrailian'),
(141, 'Harry Horne', '1', 'Austrailian'),
(142, 'Bailey Ryan', '1', 'Austrailian'),
(143, 'Nathaniel Wood', '1', 'Austrailian'),
(144, 'Charles Noble', '1', 'Austrailian'),
(145, 'Archer Knight', '1', 'Austrailian'),
(146, 'Arthur Dawson', '1', 'Austrailian'),
(147, 'Felix Watson', '1', 'Austrailian'),
(148, 'Christian Flanagan', '1', 'Austrailian'),
(149, 'Jonathan Lowe', '1', 'Austrailian'),
(150, 'Lincoln Dry', '1', 'Austrailian'),
(151, 'Lewis Griffin', '1', 'Austrailian'),
(152, 'Louis Barrett', '1', 'Austrailian'),
(153, 'Levi Black', '1', 'Austrailian'),
(154, 'Sebastian Price', '1', 'Austrailian'),
(155, 'Cameron Weaving', '1', 'Austrailian'),
(156, 'Seth O\'Brien', '1', 'Austrailian'),
(157, 'Cody Gray', '1', 'Austrailian'),
(158, 'Ashton Watson', '1', 'Austrailian'),
(159, 'Charlie Wyatt', '1', 'Austrailian'),
(160, 'Bailey Cox', '1', 'Austrailian'),
(161, 'Eli Coleman', '1', 'Austrailian'),
(162, 'Bailey Johnston', '1', 'Austrailian'),
(163, 'Archer Turner', '1', 'Austrailian'),
(164, 'Sebastian Gray', '1', 'Austrailian'),
(165, 'David McLean', '1', 'Austrailian'),
(166, 'Harry Beahan', '1', 'Austrailian'),
(167, 'Bodhi Elliott', '1', 'Austrailian'),
(168, 'Sam Magrath', '1', 'Austrailian'),
(169, 'Samuel Baker', '1', 'Austrailian'),
(170, 'Samuel Baker', '1', 'Austrailian'),
(171, 'Koby Hamilton', '1', 'Austrailian'),
(172, 'Harrison Webb', '1', 'Austrailian'),
(173, 'Jasper Kane', '1', 'Austrailian'),
(174, 'Sam Stone', '1', 'Austrailian'),
(175, 'Eli Ellis', '1', 'Austrailian'),
(176, 'Anthony Glenn', '1', 'Austrailian'),
(177, 'Ashton Parker', '1', 'Austrailian'),
(178, 'Justin Hamilton', '1', 'Austrailian'),
(179, 'Beau Dawson', '1', 'Austrailian'),
(180, 'Logan Knight', '1', 'Austrailian'),
(181, 'Andrew Adams', '1', 'Austrailian'),
(182, 'Theodore Walsh', '1', 'Austrailian'),
(183, 'Jacob Fry', '1', 'Austrailian'),
(184, 'John Hood', '1', 'Austrailian'),
(185, 'Jaxon White', '1', 'Austrailian'),
(186, 'Xavier Smith', '1', 'Austrailian'),
(187, 'Xavier Smith', '1', 'Austrailian'),
(188, 'Levi Bishop', '1', 'Austrailian'),
(189, 'Jett Wheaton', '1', 'Austrailian'),
(190, 'Charlie Adams', '1', 'Austrailian'),
(191, 'Aidan Barrett', '1', 'Austrailian'),
(192, 'Logan Holt', '1', 'Austrailian'),
(193, 'Nathan Otto', '1', 'Austrailian'),
(194, 'Nixon Nevin', '1', 'Austrailian'),
(195, 'Austin Wall', '1', 'Austrailian'),
(196, 'Zac Bailey', '1', 'Austrailian'),
(197, 'Christian McDonald', '1', 'Austrailian'),
(198, 'Marcus Elliott', '1', 'Austrailian'),
(199, 'Joel Robinson', '1', 'Austrailian'),
(200, 'Xavier Kaplan', '1', 'Austrailian'),
(201, 'Jett Lachman', '1', 'Austrailian'),
(202, 'Nathan Hayes', '1', 'Austrailian'),
(203, 'Flynn Kidman', '1', 'Austrailian'),
(204, 'Jake Cooper', '1', 'Austrailian'),
(205, 'Carter Crowe', '1', 'Austrailian'),
(206, 'Justin Richards', '1', 'Austrailian'),
(207, 'Eli King', '1', 'Austrailian'),
(208, 'Felix Blair', '1', 'Austrailian'),
(209, 'Joshua Shaw', '1', 'Austrailian'),
(210, 'Liam McNeil', '1', 'Austrailian'),
(211, 'Andrew Whitford', '1', 'Austrailian'),
(212, 'Owen Bell', '1', 'Austrailian'),
(213, 'Patrick Monson', '1', 'Austrailian'),
(214, 'Archer Philips', '1', 'Austrailian'),
(215, 'Christopher Lowe', '1', 'Austrailian'),
(216, 'Luca Taylor', '1', 'Austrailian'),
(217, 'Patrick Fowler', '1', 'Austrailian'),
(218, 'Hudson Robbinson', '1', 'Austrailian'),
(219, 'Toby Morris', '1', 'Austrailian'),
(220, '', '1', 'Austrailian'),
(221, 'Nathan Edwards', '1', 'Austrailian'),
(222, 'Jett Hughes', '1', 'Austrailian'),
(223, 'Arthur Wall', '1', 'Austrailian'),
(224, 'Angus Ryan', '1', 'Austrailian'),
(225, 'Joseph Mason', '1', 'Austrailian'),
(226, 'Carter Young', '1', 'Austrailian'),
(227, 'Beau Irwin', '1', 'Austrailian'),
(228, 'Bodhi Richardson', '1', 'Austrailian'),
(229, 'Archer Miller', '1', 'Austrailian'),
(230, 'Justin Harrison', '1', 'Austrailian'),
(231, 'Owen Hughes', '1', 'Austrailian'),
(232, 'Isaac Wood', '1', 'Austrailian'),
(233, 'William Spencer', '1', 'Austrailian'),
(234, 'Toby Horne', '1', 'Austrailian'),
(235, 'Charlie Weaving', '1', 'Austrailian'),
(236, 'Anthony Sacks', '1', 'Austrailian'),
(237, 'Liam Harvey', '1', 'Austrailian'),
(238, 'Hamish Rogers', '1', 'Austrailian'),
(239, 'Tyson Cook', '1', 'Austrailian'),
(240, 'Harvey Hood', '1', 'Austrailian'),
(241, 'Nixon Tanner', '1', 'Austrailian'),
(242, 'Alex Weaver', '1', 'Austrailian'),
(243, 'Cameron Johnson', '1', 'Austrailian'),
(244, 'Kai Evans', '1', 'Austrailian'),
(245, 'Gabriel Wyatt', '1', 'Austrailian'),
(246, 'Braxton Burt', '1', 'Austrailian'),
(247, 'Louis Fern', '1', 'Austrailian'),
(248, 'Arlo Bennett', '1', 'Austrailian'),
(249, 'Leo Weaving', '1', 'Austrailian'),
(250, 'Logan Fisher', '1', 'Austrailian'),
(251, 'Lewis Hamblin', '1', 'Austrailian'),
(252, 'Sam Ward', '1', 'Austrailian'),
(253, 'Dominic Allen', '1', 'Austrailian'),
(254, 'Nixon Coleman', '1', 'Austrailian'),
(255, 'Andrew Fielding', '1', 'Austrailian'),
(256, 'Jayden Hood', '1', 'Austrailian'),
(257, 'Oliver Ronin', '1', 'Austrailian'),
(258, 'Marcus Wilson', '1', 'Austrailian'),
(259, 'Leon Phillips', '1', 'Austrailian'),
(260, 'Luke Burt', '1', 'Austrailian'),
(261, 'Elijah Stewart', '1', 'Austrailian'),
(262, 'Daniel Barrett', '1', 'Austrailian'),
(263, 'Thomas Clanton', '1', 'Austrailian'),
(264, 'Declan Walsman', '1', 'Austrailian'),
(265, 'Charlie Jackson', '1', 'Austrailian'),
(266, 'Lucas Helman', '1', 'Austrailian'),
(267, 'Sonny Irwin', '1', 'Austrailian'),
(268, 'Cameron Larkins', '1', 'Austrailian'),
(269, 'Levi Price', '1', 'Austrailian'),
(270, 'Nicholas Lynes', '1', 'Austrailian'),
(271, 'Dylan Harman', '1', 'Austrailian'),
(272, 'Koby Stewart', '1', 'Austrailian'),
(273, 'Christian Lowe', '1', 'Austrailian'),
(274, 'Daniel Whelan', '1', 'Austrailian'),
(275, 'Bailey Harrison', '1', 'Austrailian'),
(276, 'Seth Harvey', '1', 'Austrailian'),
(277, 'Benjamin Taylor', '1', 'Austrailian'),
(278, 'Archer Redding', '1', 'Austrailian'),
(279, 'Aaron Clanton', '1', 'Austrailian'),
(280, 'Oliver Griffith', '1', 'Austrailian'),
(281, 'Christian Turner', '1', 'Austrailian'),
(282, 'Charlie Mason', '1', 'Austrailian'),
(283, 'Nixon Gray', '1', 'Austrailian'),
(284, 'Luke Jacobs', '1', 'Austrailian'),
(285, 'Lauren Williams', '2', 'Austrailian'),
(286, 'Aurora Wenham', '2', 'Austrailian'),
(287, 'Rose Kennedy', '2', 'Austrailian'),
(288, 'Natalie Fowler', '2', 'Austrailian'),
(289, 'Eden Turner', '2', 'Austrailian'),
(290, 'Eleanor Wright', '2', 'Austrailian'),
(291, 'Lillian Green', '2', 'Austrailian'),
(292, 'Peyton Smith', '2', 'Austrailian'),
(293, 'Ruby Harvey', '2', 'Austrailian'),
(294, 'Lilly Burt', '2', 'Austrailian'),
(295, 'Evie Turner', '2', 'Austrailian'),
(296, 'Florence Kaplan', '2', 'Austrailian'),
(297, 'Mila Jackman', '2', 'Austrailian'),
(298, 'Freya Hamilton', '2', 'Austrailian'),
(299, 'Poppy Jackson', '2', 'Austrailian'),
(300, 'Stella Graham', '2', 'Austrailian'),
(301, 'Willow Ryan', '2', 'Austrailian'),
(302, 'Piper Hansen', '2', 'Austrailian'),
(303, 'Lucy Sacks', '2', 'Austrailian'),
(304, 'Emma Marshall', '2', 'Austrailian'),
(305, 'Josephine Russell', '2', 'Austrailian'),
(306, 'Penelope Allen', '2', 'Austrailian'),
(307, 'Mackenzie Scott', '2', 'Austrailian'),
(308, 'Indiana Fowler', '2', 'Austrailian'),
(309, 'Emilia Turner', '2', 'Austrailian'),
(310, 'Bella Blair', '2', 'Austrailian'),
(311, 'Ashley Baker', '2', 'Austrailian'),
(312, 'Peyton Wall', '2', 'Austrailian'),
(313, 'Harper Bell', '2', 'Austrailian'),
(314, 'Stephanie Wheelwright', '2', 'Austrailian'),
(315, 'Stephanie Wheelwright', '2', 'Austrailian'),
(316, 'Mila Shaw', '2', 'Austrailian'),
(317, 'Sophia Knight', '2', 'Austrailian'),
(318, 'Sadie Porter', '2', 'Austrailian'),
(319, 'Hazel Terrell', '2', 'Austrailian'),
(320, 'Sarah Rigg', '2', 'Austrailian'),
(321, 'Erin Kidman', '2', 'Austrailian'),
(322, 'Eden Cook', '2', 'Austrailian'),
(323, 'Ava Wood', '2', 'Austrailian'),
(324, 'Bella Liane', '2', 'Austrailian'),
(325, 'Georgia Spencer', '2', 'Austrailian'),
(326, 'Florence Fox', '2', 'Austrailian'),
(327, 'Alexandra Cooper', '2', 'Austrailian'),
(328, 'Isabella Stewart', '2', 'Austrailian'),
(329, 'Isabel Goodrem', '2', 'Austrailian'),
(330, 'Piper Kane', '2', 'Austrailian'),
(331, 'Eliana Ross', '2', 'Austrailian'),
(332, 'Alyssa Kaplan', '2', 'Austrailian'),
(333, 'Zara Lynes', '2', 'Austrailian'),
(334, 'Imogen Hall', '2', 'Austrailian'),
(335, 'Imogen Hall', '2', 'Austrailian'),
(336, 'Freya Watson', '2', 'Austrailian'),
(337, 'Sophie Davis', '2', 'Austrailian'),
(338, 'Mila Holt', '2', 'Austrailian'),
(339, 'Olive Clark', '2', 'Austrailian'),
(340, 'Jasmine Philips', '2', 'Austrailian'),
(341, 'Amy Baker', '2', 'Austrailian'),
(342, 'Isabella Clanton', '2', 'Austrailian'),
(343, 'Milla Davies', '2', 'Austrailian'),
(344, 'Maya Parker', '2', 'Austrailian'),
(345, 'Eloise Harman', '2', 'Austrailian'),
(346, 'Lola Adams', '2', 'Austrailian'),
(347, 'Isabel Holt', '2', 'Austrailian'),
(348, 'Elise Kane', '2', 'Austrailian'),
(349, 'Ruby Robinson', '2', 'Austrailian'),
(350, 'Rose Gill', '2', 'Austrailian'),
(351, 'Elsie Clanton', '2', 'Austrailian'),
(352, 'Addison Lee', '2', 'Austrailian'),
(353, 'Addison Lee', '2', 'Austrailian'),
(354, 'Grace Wood', '2', 'Austrailian'),
(355, 'Aaliyah Harrison', '2', 'Austrailian'),
(356, 'Charlie Walsman', '2', 'Austrailian'),
(357, 'Zoey Parker', '2', 'Austrailian'),
(358, 'Evelyn Richards', '2', 'Austrailian'),
(359, 'Ava Campbell', '2', 'Austrailian'),
(360, 'Eden Ward', '2', 'Austrailian'),
(361, 'Isabel Kidman', '2', 'Austrailian'),
(362, 'Claire Brown', '2', 'Austrailian'),
(363, 'Frankie Hayes', '2', 'Austrailian'),
(364, 'Chelsea Goodrem', '2', 'Austrailian'),
(365, 'Eva McDonald', '2', 'Austrailian'),
(366, 'Florence Vinson', '2', 'Austrailian'),
(367, 'Charlie Dines', '2', 'Austrailian'),
(368, 'Harlow Fox', '2', 'Austrailian'),
(369, 'Angelina Murphy', '2', 'Austrailian'),
(370, 'Alexis Gill', '2', 'Austrailian'),
(371, 'Aaliyah Young', '2', 'Austrailian'),
(372, 'Chloe Webb', '2', 'Austrailian'),
(373, 'Kayla Kelly', '2', 'Austrailian'),
(374, 'Penelope Connell', '2', 'Austrailian'),
(375, 'Mia Shaw', '2', 'Austrailian'),
(376, 'Eloise Wheaton', '2', 'Austrailian'),
(377, 'Ellie Russell', '2', 'Australian'),
(378, 'Audrey Coleman', '2', 'Austrailian'),
(379, 'Caitlin Wheelwright', '2', 'Austrailian'),
(380, 'Angelina Dines', '2', 'Austrailian'),
(381, 'Mia Ellis', '2', 'Austrailian'),
(382, 'Aaliyah Thompson', '2', 'Austrailian'),
(383, 'Amber Simpson', '2', 'Austrailian'),
(384, 'Sienna Fisher', '2', 'Austrailian'),
(385, 'Claire Reid', '2', 'Austrailian'),
(386, 'Amy Irwin', '2', 'Austrailian'),
(387, 'Millie Tanner', '2', 'Austrailian'),
(388, 'Piper Porter', '2', 'Austrailian'),
(389, 'Piper Porter', '2', 'Austrailian'),
(390, 'Piper Porter', '2', 'Austrailian'),
(391, 'Piper Porter', '2', 'Austrailian'),
(392, 'Piper Porter', '2', 'Austrailian'),
(393, 'Sarah Larkins', '2', 'Austrailian'),
(394, 'Sarah Larkins', '2', 'Austrailian'),
(395, 'Zoe Baker', '2', 'Austrailian'),
(396, 'Zoe Baker', '2', 'Austrailian'),
(397, 'Phoebe Collins', '2', 'Austrailian'),
(398, 'Amber Rigg', '2', 'Austrailian'),
(399, 'Georgia King', '2', 'Austrailian'),
(400, 'Daisy Horner', '2', 'Austrailian'),
(401, 'Addison Price', '2', 'Austrailian'),
(402, 'Alexandra Weaving', '2', 'Austrailian'),
(403, 'Mariam Taylor', '2', 'Austrailian'),
(404, 'Mila Lynes', '2', 'Austrailian'),
(405, 'Paige Redding', '2', 'Austrailian'),
(406, 'Grace Webb', '2', 'Austrailian'),
(407, 'Annabelle Murphy', '2', 'Austrailian'),
(408, 'Skye Marshall', '2', 'Austrailian'),
(409, 'Eve Harrison', '2', 'Austrailian'),
(410, 'Gabriella Baker', '2', 'Austrailian'),
(411, 'Kayla Crowe', '2', 'Austrailian'),
(412, 'Matilda Jason', '2', 'Austrailian'),
(413, 'Abigail Richards', '2', 'Austrailian'),
(414, 'Violet Hamblin', '2', 'Austrailian'),
(415, 'Evelyn Clarkson', '2', 'Austrailian'),
(416, 'Grace Clare', '2', 'Austrailian'),
(417, 'Willow Gibson', '2', 'Austrailian'),
(418, 'Evelyn Carter', '2', 'Austrailian'),
(419, 'Claire Mason', '2', 'Austrailian'),
(420, 'Sarah Chapman', '2', 'Austrailian'),
(421, 'Ellie Ronin', '1', 'Austrailian'),
(422, 'Eleanor Whitworth', '2', 'Austrailian'),
(423, 'Emilia Wall', '2', 'Austrailian'),
(424, 'Aurora Kelly', '2', 'Austrailian'),
(425, 'Penelope Collins', '2', 'Austrailian'),
(426, 'Mila Jackson', '2', 'Austrailian'),
(427, 'Audrey Cooper', '2', 'Austrailian'),
(428, 'Maya Kaplan', '2', 'Austrailian'),
(429, 'Poppy Glenn', '2', 'Austrailian'),
(430, 'Victoria Helman', '2', 'Austrailian'),
(431, 'Eve Johnson', '2', 'Austrailian'),
(432, 'Aurora Harman', '2', 'Austrailian'),
(433, 'Aurora Harman', '2', 'Austrailian'),
(434, 'Maryam Fielding', '2', 'Austrailian'),
(435, 'Ayla Ellis', '2', 'Austrailian'),
(436, 'Ella Tran', '2', 'Austrailian'),
(437, 'Eloise Davis', '2', 'Austrailian'),
(438, 'Eden Helman', '2', 'Austrailian'),
(439, 'Audrey Murphy', '2', 'Austrailian'),
(440, 'Madeline Thompson', '2', 'Austrailian'),
(441, 'Charli Edwards', '2', 'Austrailian'),
(442, 'Zoey Dines', '2', 'Austrailian'),
(443, 'Violet Thomson', '2', 'Austrailian'),
(444, 'Lillian Porter', '2', 'Austrailian'),
(445, 'Gabriella Bailey', '2', 'Austrailian'),
(446, 'Aaliyah Adams', '2', 'Austrailian'),
(447, 'Zoey McKenzie', '2', 'Austrailian'),
(448, 'Aria Evison', '2', 'Austrailian'),
(449, 'Hayley Weaving', '2', 'Austrailian'),
(450, 'Hayley Weaving', '2', 'Austrailian'),
(451, 'Charli Tran', '2', 'Austrailian'),
(452, 'Mackenzie Porter', '2', 'Austrailian'),
(453, 'Violet Murphy', '2', 'Austrailian'),
(454, 'Jasmine Eaton', '2', 'Austrailian'),
(455, 'Ashley Taylor', '2', 'Austrailian'),
(456, 'Layla Johnston', '2', 'Austrailian'),
(457, 'Phoebe Ross', '2', 'Austrailian'),
(458, 'Elise Cox', '2', 'Austrailian'),
(459, 'Eliana Quin', '2', 'Austrailian'),
(460, 'Gabriella Lee', '2', 'Austrailian'),
(461, 'Sophie Bergen', '2', 'Austrailian'),
(462, 'Sophie Bergen', '2', 'Austrailian'),
(463, 'Ruby Thomas', '2', 'Austrailian'),
(464, 'Elena Crowe', '2', 'Austrailian'),
(465, 'Ashley Horner', '2', 'Austrailian'),
(466, 'Emma Butler', '2', 'Austrailian'),
(467, 'Georgia Burke', '2', 'Austrailian'),
(468, 'Isabel Turner', '2', 'Austrailian'),
(469, 'Florence Cooper', '2', 'Austrailian'),
(470, 'Sienna Baker', '2', 'Austrailian'),
(471, 'Erin Lawson', '2', 'Austrailian'),
(472, 'Harper Gibson', '2', 'Austrailian'),
(473, 'Rose Ronin', '2', 'Austrailian'),
(474, 'Rose Ronin', '2', 'Austrailian'),
(475, 'Rose Ronin', '2', 'Austrailian'),
(476, 'Willow Newman', '2', 'Austrailian'),
(477, 'Amelia Tran', '2', 'Austrailian'),
(478, 'Aaliyah Gilbert', '2', 'Austrailian'),
(479, 'Matilda Phillips', '2', 'Austrailian'),
(480, 'Matilda Phillips', '2', 'Austrailian'),
(481, 'Madeleine Wood', '2', 'Austrailian'),
(482, 'Claire Shaw', '2', 'Austrailian'),
(483, 'Harper Anderson', '2', 'Austrailian'),
(484, 'Gabriella McDonald', '2', 'Austrailian'),
(485, 'Gabriella McDonald', '2', 'Austrailian'),
(486, 'Freya Collins', '2', 'Austrailian'),
(487, 'Stella Ross', '2', 'Austrailian'),
(488, 'Emily Lachman', '2', 'Austrailian'),
(489, 'Billie Brown', '2', 'Austrailian'),
(490, 'Eden Davis', '2', 'Austrailian'),
(491, 'Lexi Tran', '2', 'Austrailian'),
(492, 'Lexi Tran', '2', 'Austrailian'),
(493, 'Skye Walker', '2', 'Austrailian'),
(494, 'Josephine Wenham', '2', 'Austrailian'),
(495, 'Eleanor Harman', '2', 'Austrailian'),
(496, 'Harriet Hewson', '2', 'Austrailian'),
(497, 'Amy Dry', '2', 'Austrailian'),
(498, 'Sadie Terrell', '2', 'Austrailian'),
(499, 'Lily Fox', '2', 'Austrailian'),
(500, 'Isabelle Kennedy', '2', 'Austrailian'),
(501, 'Annabelle Edwards', '2', 'Austrailian'),
(502, 'Savannah Stewart', '2', 'Austrailian'),
(503, 'Caitlin Turner', '2', 'Austrailian'),
(504, 'Matilda Gilbert', '2', 'Austrailian'),
(505, 'Peyton Matthews', '2', 'Austrailian'),
(506, 'Poppy Clare', '2', 'Austrailian');

-- --------------------------------------------------------

--
-- Table structure for table `rapperNames`
--

CREATE TABLE `rapperNames` (
  `id` int(11) NOT NULL,
  `ftvcharchacter` varchar(100) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `adjective` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rapperNames`
--

INSERT INTO `rapperNames` (`id`, `ftvcharchacter`, `fname`, `lname`, `adjective`, `name`) VALUES
(1, 'jbbj', 'first', 'last', 'vjbhjvn', 'first middle last');

-- --------------------------------------------------------

--
-- Table structure for table `Streetnames`
--

CREATE TABLE `Streetnames` (
  `id` int(11) NOT NULL,
  `likethem` varchar(100) DEFAULT NULL,
  `beginwith` varchar(100) DEFAULT NULL,
  `endwith` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Streetnames`
--

INSERT INTO `Streetnames` (`id`, `likethem`, `beginwith`, `endwith`, `name`) VALUES
(1, 'Average', 'a', 'v', ' av');

-- --------------------------------------------------------

--
-- Table structure for table `teamNames`
--

CREATE TABLE `teamNames` (
  `id` int(11) NOT NULL,
  `color` varchar(100) DEFAULT NULL,
  `adjective` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `animal` varchar(100) DEFAULT NULL,
  `group` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teamNames`
--

INSERT INTO `teamNames` (`id`, `color`, `adjective`, `place`, `name`, `animal`, `group`) VALUES
(3, 'dfvfd', 'dscc', 'Dubai', 'sdcsdsd', 'horse', 'teachers');

-- --------------------------------------------------------

--
-- Table structure for table `titleNames`
--

CREATE TABLE `titleNames` (
  `id` int(11) NOT NULL,
  `adjective` varchar(100) DEFAULT NULL,
  `planet` varchar(100) DEFAULT NULL,
  `plural` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `power_word` varchar(100) DEFAULT NULL,
  `number` varchar(100) DEFAULT NULL,
  `industry` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `titleNames`
--

INSERT INTO `titleNames` (`id`, `adjective`, `planet`, `plural`, `name`, `power_word`, `number`, `industry`) VALUES
(2, 'dscc', 'acs', 'jhbbhj', 'bbjkb', 'bkbk', 'kbkb', 'bkjbbk');

-- --------------------------------------------------------

--
-- Table structure for table `twinNames`
--

CREATE TABLE `twinNames` (
  `id` int(11) NOT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `birthyear` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `twinNames`
--

INSERT INTO `twinNames` (`id`, `gender`, `surname`, `birthyear`, `name`, `country`) VALUES
(2, '1', 'last', 'league name', 'test competition ', 'British');

-- --------------------------------------------------------

--
-- Table structure for table `userNames`
--

CREATE TABLE `userNames` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userNames`
--

INSERT INTO `userNames` (`id`, `fname`, `mname`, `lname`, `gender`, `name`) VALUES
(1, 'c', 'sd', 'sd', '1', 'sdsfs sdds');

-- --------------------------------------------------------

--
-- Table structure for table `Villainnames`
--

CREATE TABLE `Villainnames` (
  `id` int(11) NOT NULL,
  `kindofcharacter` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `adjective` varchar(100) DEFAULT NULL,
  `likeanimal` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Villainnames`
--

INSERT INTO `Villainnames` (`id`, `kindofcharacter`, `gender`, `adjective`, `likeanimal`, `name`) VALUES
(1, 'supervillain', '1', 'dscc', 'c', 'sdcd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `babyNames`
--
ALTER TABLE `babyNames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `BandNames`
--
ALTER TABLE `BandNames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogNames`
--
ALTER TABLE `blogNames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `businessNames`
--
ALTER TABLE `businessNames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catNames`
--
ALTER TABLE `catNames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `charactersName`
--
ALTER TABLE `charactersName`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Citynames`
--
ALTER TABLE `Citynames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countryNames`
--
ALTER TABLE `countryNames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `couplenames`
--
ALTER TABLE `couplenames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fantacyNames`
--
ALTER TABLE `fantacyNames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `femaleNames`
--
ALTER TABLE `femaleNames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `firstNames`
--
ALTER TABLE `firstNames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodNames`
--
ALTER TABLE `foodNames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gamingNames`
--
ALTER TABLE `gamingNames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heroNames`
--
ALTER TABLE `heroNames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houseNames`
--
ALTER TABLE `houseNames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lastNames`
--
ALTER TABLE `lastNames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `malenames`
--
ALTER TABLE `malenames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `middlenames`
--
ALTER TABLE `middlenames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nickNames`
--
ALTER TABLE `nickNames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penNames`
--
ALTER TABLE `penNames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pirateNames`
--
ALTER TABLE `pirateNames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quickName`
--
ALTER TABLE `quickName`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rapperNames`
--
ALTER TABLE `rapperNames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Streetnames`
--
ALTER TABLE `Streetnames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teamNames`
--
ALTER TABLE `teamNames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titleNames`
--
ALTER TABLE `titleNames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `twinNames`
--
ALTER TABLE `twinNames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userNames`
--
ALTER TABLE `userNames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Villainnames`
--
ALTER TABLE `Villainnames`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `babyNames`
--
ALTER TABLE `babyNames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `BandNames`
--
ALTER TABLE `BandNames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogNames`
--
ALTER TABLE `blogNames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `businessNames`
--
ALTER TABLE `businessNames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `catNames`
--
ALTER TABLE `catNames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `charactersName`
--
ALTER TABLE `charactersName`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `Citynames`
--
ALTER TABLE `Citynames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countryNames`
--
ALTER TABLE `countryNames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT for table `couplenames`
--
ALTER TABLE `couplenames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fantacyNames`
--
ALTER TABLE `fantacyNames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `femaleNames`
--
ALTER TABLE `femaleNames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `firstNames`
--
ALTER TABLE `firstNames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `foodNames`
--
ALTER TABLE `foodNames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gamingNames`
--
ALTER TABLE `gamingNames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `heroNames`
--
ALTER TABLE `heroNames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `houseNames`
--
ALTER TABLE `houseNames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lastNames`
--
ALTER TABLE `lastNames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `malenames`
--
ALTER TABLE `malenames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `middlenames`
--
ALTER TABLE `middlenames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nickNames`
--
ALTER TABLE `nickNames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penNames`
--
ALTER TABLE `penNames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pirateNames`
--
ALTER TABLE `pirateNames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quickName`
--
ALTER TABLE `quickName`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=507;

--
-- AUTO_INCREMENT for table `rapperNames`
--
ALTER TABLE `rapperNames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Streetnames`
--
ALTER TABLE `Streetnames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teamNames`
--
ALTER TABLE `teamNames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `titleNames`
--
ALTER TABLE `titleNames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `twinNames`
--
ALTER TABLE `twinNames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userNames`
--
ALTER TABLE `userNames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Villainnames`
--
ALTER TABLE `Villainnames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
