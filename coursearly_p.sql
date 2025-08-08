-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2025 at 08:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coursearly`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_site`
--

CREATE TABLE `about_site` (
  `id` int(11) NOT NULL,
  `email_1` varchar(50) NOT NULL,
  `email_2` varchar(50) NOT NULL,
  `phone_1` varchar(50) NOT NULL,
  `phone_2` varchar(50) NOT NULL,
  `instagram_url` varchar(50) NOT NULL,
  `facebook_url` varchar(50) NOT NULL,
  `twitter_url` varchar(50) NOT NULL,
  `location_1` varchar(500) NOT NULL,
  `location_2` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_site`
--

INSERT INTO `about_site` (`id`, `email_1`, `email_2`, `phone_1`, `phone_2`, `instagram_url`, `facebook_url`, `twitter_url`, `location_1`, `location_2`, `status`) VALUES
(1, 'coursearly@gmail.com', 'helloCoursearly@gmail.com', '09035315300', '+5493973902399', 'https://www.instagram.com/', 'https://www.facebook.com/', 'https://www.twitter.com/', '1234 East 27th Street,\r\nNew York, NY 101010', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `affiliate_course`
--

CREATE TABLE `affiliate_course` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `clicks` int(11) NOT NULL,
  `purchases` int(11) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `approved_earning`
--

CREATE TABLE `approved_earning` (
  `id` int(11) NOT NULL,
  `course_purchase_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` int(11) NOT NULL,
  `bank` varchar(500) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(1000) NOT NULL,
  `category_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `category_image`) VALUES
(1, 'Data Science', 'datascience.webp'),
(2, 'IT Certifications', 'it.webp'),
(3, 'Web Development', 'web.webp'),
(4, 'Communication', 'communication.webp'),
(5, 'Business Analytics', 'business.webp');

-- --------------------------------------------------------

--
-- Table structure for table `certificate_template`
--

CREATE TABLE `certificate_template` (
  `id` int(11) NOT NULL,
  `html_code` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `iso` varchar(2) NOT NULL,
  `iso3` varchar(3) NOT NULL,
  `dial` varchar(5) NOT NULL,
  `currency` varchar(3) DEFAULT NULL,
  `currency_name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `iso`, `iso3`, `dial`, `currency`, `currency_name`) VALUES
(1, 'Afghanistan', 'AF', 'AFG', '93', 'AFN', 'Afghani'),
(2, 'Albania', 'AL', 'ALB', '355', 'ALL', 'Lek'),
(3, 'Algeria', 'DZ', 'DZA', '213', 'DZD', 'Algerian Dinar'),
(4, 'American Samoa', 'AS', 'ASM', '1-684', 'USD', 'US Dollar'),
(5, 'Andorra', 'AD', 'AND', '376', 'EUR', 'Euro'),
(6, 'Angola', 'AO', 'AGO', '244', 'AOA', 'Kwanza'),
(7, 'Anguilla', 'AI', 'AIA', '1-264', 'XCD', 'East Caribbean Dollar'),
(8, 'Antarctica', 'AQ', 'ATA', '672', NULL, NULL),
(9, 'Antigua and Barbuda', 'AG', 'ATG', '1-268', 'XCD', 'East Caribbean Dollar'),
(10, 'Argentina', 'AR', 'ARG', '54', 'ARS', 'Argentine Peso'),
(11, 'Armenia', 'AM', 'ARM', '374', 'AMD', 'Armenian Dram'),
(12, 'Aruba', 'AW', 'ABW', '297', 'AWG', 'Aruban Florin'),
(13, 'Australia', 'AU', 'AUS', '61', 'AUD', 'Australian Dollar'),
(14, 'Austria', 'AT', 'AUT', '43', 'EUR', 'Euro'),
(15, 'Azerbaijan', 'AZ', 'AZE', '994', 'AZN', 'Azerbaijanian Manat'),
(16, 'Bahamas', 'BS', 'BHS', '1-242', 'BSD', 'Bahamian Dollar'),
(17, 'Bahrain', 'BH', 'BHR', '973', 'BHD', 'Bahraini Dinar'),
(18, 'Bangladesh', 'BD', 'BGD', '880', 'BDT', 'Taka'),
(19, 'Barbados', 'BB', 'BRB', '1-246', 'BBD', 'Barbados Dollar'),
(20, 'Belarus', 'BY', 'BLR', '375', 'BYR', 'Belarussian Ruble'),
(21, 'Belgium', 'BE', 'BEL', '32', 'EUR', 'Euro'),
(22, 'Belize', 'BZ', 'BLZ', '501', 'BZD', 'Belize Dollar'),
(23, 'Benin', 'BJ', 'BEN', '229', 'XOF', 'CFA Franc BCEAO'),
(24, 'Bermuda', 'BM', 'BMU', '1-441', 'BMD', 'Bermudian Dollar'),
(25, 'Bhutan', 'BT', 'BTN', '975', 'INR', 'Indian Rupee'),
(26, 'Bolivia, Plurinational State of', 'BO', 'BOL', '591', 'BOB', 'Boliviano'),
(27, 'Bonaire, Sint Eustatius and Saba', 'BQ', 'BES', '599', 'USD', 'US Dollar'),
(28, 'Bosnia and Herzegovina', 'BA', 'BIH', '387', 'BAM', 'Convertible Mark'),
(29, 'Botswana', 'BW', 'BWA', '267', 'BWP', 'Pula'),
(30, 'Bouvet Island', 'BV', 'BVT', '47', 'NOK', 'Norwegian Krone'),
(31, 'Brazil', 'BR', 'BRA', '55', 'BRL', 'Brazilian Real'),
(32, 'British Indian Ocean Territory', 'IO', 'IOT', '246', 'USD', 'US Dollar'),
(33, 'Brunei Darussalam', 'BN', 'BRN', '673', 'BND', 'Brunei Dollar'),
(34, 'Bulgaria', 'BG', 'BGR', '359', 'BGN', 'Bulgarian Lev'),
(35, 'Burkina Faso', 'BF', 'BFA', '226', 'XOF', 'CFA Franc BCEAO'),
(36, 'Burundi', 'BI', 'BDI', '257', 'BIF', 'Burundi Franc'),
(37, 'Cambodia', 'KH', 'KHM', '855', 'KHR', 'Riel'),
(38, 'Cameroon', 'CM', 'CMR', '237', 'XAF', 'CFA Franc BEAC'),
(39, 'Canada', 'CA', 'CAN', '1', 'CAD', 'Canadian Dollar'),
(40, 'Cape Verde', 'CV', 'CPV', '238', 'CVE', 'Cabo Verde Escudo'),
(41, 'Cayman Islands', 'KY', 'CYM', '1-345', 'KYD', 'Cayman Islands Dollar'),
(42, 'Central African Republic', 'CF', 'CAF', '236', 'XAF', 'CFA Franc BEAC'),
(43, 'Chad', 'TD', 'TCD', '235', 'XAF', 'CFA Franc BEAC'),
(44, 'Chile', 'CL', 'CHL', '56', 'CLP', 'Chilean Peso'),
(45, 'China', 'CN', 'CHN', '86', 'CNY', 'Yuan Renminbi'),
(46, 'Christmas Island', 'CX', 'CXR', '61', 'AUD', 'Australian Dollar'),
(47, 'Cocos (Keeling) Islands', 'CC', 'CCK', '61', 'AUD', 'Australian Dollar'),
(48, 'Colombia', 'CO', 'COL', '57', 'COP', 'Colombian Peso'),
(49, 'Comoros', 'KM', 'COM', '269', 'KMF', 'Comoro Franc'),
(50, 'Congo', 'CG', 'COG', '242', 'XAF', 'CFA Franc BEAC'),
(51, 'Congo, the Democratic Republic of the', 'CD', 'COD', '243', NULL, NULL),
(52, 'Cook Islands', 'CK', 'COK', '682', 'NZD', 'New Zealand Dollar'),
(53, 'Costa Rica', 'CR', 'CRI', '506', 'CRC', 'Costa Rican Colon'),
(54, 'Croatia', 'HR', 'HRV', '385', 'HRK', 'Croatian Kuna'),
(55, 'Cuba', 'CU', 'CUB', '53', 'CUP', 'Cuban Peso'),
(56, 'Curaçao', 'CW', 'CUW', '599', 'ANG', 'Netherlands Antillean Guilder'),
(57, 'Cyprus', 'CY', 'CYP', '357', 'EUR', 'Euro'),
(58, 'Czech Republic', 'CZ', 'CZE', '420', 'CZK', 'Czech Koruna'),
(59, 'Côte d\'Ivoire', 'CI', 'CIV', '225', 'XOF', 'CFA Franc BCEAO'),
(60, 'Denmark', 'DK', 'DNK', '45', 'DKK', 'Danish Krone'),
(61, 'Djibouti', 'DJ', 'DJI', '253', 'DJF', 'Djibouti Franc'),
(62, 'Dominica', 'DM', 'DMA', '1-767', 'XCD', 'East Caribbean Dollar'),
(63, 'Dominican Republic', 'DO', 'DOM', '1-809', 'DOP', 'Dominican Peso'),
(64, 'Ecuador', 'EC', 'ECU', '593', 'USD', 'US Dollar'),
(65, 'Egypt', 'EG', 'EGY', '20', 'EGP', 'Egyptian Pound'),
(66, 'El Salvador', 'SV', 'SLV', '503', 'USD', 'US Dollar'),
(67, 'Equatorial Guinea', 'GQ', 'GNQ', '240', 'XAF', 'CFA Franc BEAC'),
(68, 'Eritrea', 'ER', 'ERI', '291', 'ERN', 'Nakfa'),
(69, 'Estonia', 'EE', 'EST', '372', 'EUR', 'Euro'),
(70, 'Ethiopia', 'ET', 'ETH', '251', 'ETB', 'Ethiopian Birr'),
(71, 'Falkland Islands (Malvinas)', 'FK', 'FLK', '500', 'FKP', 'Falkland Islands Pound'),
(72, 'Faroe Islands', 'FO', 'FRO', '298', 'DKK', 'Danish Krone'),
(73, 'Fiji', 'FJ', 'FJI', '679', 'FJD', 'Fiji Dollar'),
(74, 'Finland', 'FI', 'FIN', '358', 'EUR', 'Euro'),
(75, 'France', 'FR', 'FRA', '33', 'EUR', 'Euro'),
(76, 'French Guiana', 'GF', 'GUF', '594', 'EUR', 'Euro'),
(77, 'French Polynesia', 'PF', 'PYF', '689', 'XPF', 'CFP Franc'),
(78, 'French Southern Territories', 'TF', 'ATF', '262', 'EUR', 'Euro'),
(79, 'Gabon', 'GA', 'GAB', '241', 'XAF', 'CFA Franc BEAC'),
(80, 'Gambia', 'GM', 'GMB', '220', 'GMD', 'Dalasi'),
(81, 'Georgia', 'GE', 'GEO', '995', 'GEL', 'Lari'),
(82, 'Germany', 'DE', 'DEU', '49', 'EUR', 'Euro'),
(83, 'Ghana', 'GH', 'GHA', '233', 'GHS', 'Ghana Cedi'),
(84, 'Gibraltar', 'GI', 'GIB', '350', 'GIP', 'Gibraltar Pound'),
(85, 'Greece', 'GR', 'GRC', '30', 'EUR', 'Euro'),
(86, 'Greenland', 'GL', 'GRL', '299', 'DKK', 'Danish Krone'),
(87, 'Grenada', 'GD', 'GRD', '1-473', 'XCD', 'East Caribbean Dollar'),
(88, 'Guadeloupe', 'GP', 'GLP', '590', 'EUR', 'Euro'),
(89, 'Guam', 'GU', 'GUM', '1-671', 'USD', 'US Dollar'),
(90, 'Guatemala', 'GT', 'GTM', '502', 'GTQ', 'Quetzal'),
(91, 'Guernsey', 'GG', 'GGY', '44', 'GBP', 'Pound Sterling'),
(92, 'Guinea', 'GN', 'GIN', '224', 'GNF', 'Guinea Franc'),
(93, 'Guinea-Bissau', 'GW', 'GNB', '245', 'XOF', 'CFA Franc BCEAO'),
(94, 'Guyana', 'GY', 'GUY', '592', 'GYD', 'Guyana Dollar'),
(95, 'Haiti', 'HT', 'HTI', '509', 'USD', 'US Dollar'),
(96, 'Heard Island and McDonald Islands', 'HM', 'HMD', '672', 'AUD', 'Australian Dollar'),
(97, 'Holy See (Vatican City State)', 'VA', 'VAT', '39-06', 'EUR', 'Euro'),
(98, 'Honduras', 'HN', 'HND', '504', 'HNL', 'Lempira'),
(99, 'Hong Kong', 'HK', 'HKG', '852', 'HKD', 'Hong Kong Dollar'),
(100, 'Hungary', 'HU', 'HUN', '36', 'HUF', 'Forint'),
(101, 'Iceland', 'IS', 'ISL', '354', 'ISK', 'Iceland Krona'),
(102, 'India', 'IN', 'IND', '91', 'INR', 'Indian Rupee'),
(103, 'Indonesia', 'ID', 'IDN', '62', 'IDR', 'Rupiah'),
(104, 'Iran, Islamic Republic of', 'IR', 'IRN', '98', 'IRR', 'Iranian Rial'),
(105, 'Iraq', 'IQ', 'IRQ', '964', 'IQD', 'Iraqi Dinar'),
(106, 'Ireland', 'IE', 'IRL', '353', 'EUR', 'Euro'),
(107, 'Isle of Man', 'IM', 'IMN', '44', 'GBP', 'Pound Sterling'),
(108, 'Israel', 'IL', 'ISR', '972', 'ILS', 'New Israeli Sheqel'),
(109, 'Italy', 'IT', 'ITA', '39', 'EUR', 'Euro'),
(110, 'Jamaica', 'JM', 'JAM', '1-876', 'JMD', 'Jamaican Dollar'),
(111, 'Japan', 'JP', 'JPN', '81', 'JPY', 'Yen'),
(112, 'Jersey', 'JE', 'JEY', '44', 'GBP', 'Pound Sterling'),
(113, 'Jordan', 'JO', 'JOR', '962', 'JOD', 'Jordanian Dinar'),
(114, 'Kazakhstan', 'KZ', 'KAZ', '7', 'KZT', 'Tenge'),
(115, 'Kenya', 'KE', 'KEN', '254', 'KES', 'Kenyan Shilling'),
(116, 'Kiribati', 'KI', 'KIR', '686', 'AUD', 'Australian Dollar'),
(117, 'Korea, Democratic People\'s Republic of', 'KP', 'PRK', '850', 'KPW', 'North Korean Won'),
(118, 'Korea, Republic of', 'KR', 'KOR', '82', 'KRW', 'Won'),
(119, 'Kuwait', 'KW', 'KWT', '965', 'KWD', 'Kuwaiti Dinar'),
(120, 'Kyrgyzstan', 'KG', 'KGZ', '996', 'KGS', 'Som'),
(121, 'Lao People\'s Democratic Republic', 'LA', 'LAO', '856', 'LAK', 'Kip'),
(122, 'Latvia', 'LV', 'LVA', '371', 'EUR', 'Euro'),
(123, 'Lebanon', 'LB', 'LBN', '961', 'LBP', 'Lebanese Pound'),
(124, 'Lesotho', 'LS', 'LSO', '266', 'ZAR', 'Rand'),
(125, 'Liberia', 'LR', 'LBR', '231', 'LRD', 'Liberian Dollar'),
(126, 'Libya', 'LY', 'LBY', '218', 'LYD', 'Libyan Dinar'),
(127, 'Liechtenstein', 'LI', 'LIE', '423', 'CHF', 'Swiss Franc'),
(128, 'Lithuania', 'LT', 'LTU', '370', 'EUR', 'Euro'),
(129, 'Luxembourg', 'LU', 'LUX', '352', 'EUR', 'Euro'),
(130, 'Macao', 'MO', 'MAC', '853', 'MOP', 'Pataca'),
(131, 'Macedonia, the Former Yugoslav Republic of', 'MK', 'MKD', '389', 'MKD', 'Denar'),
(132, 'Madagascar', 'MG', 'MDG', '261', 'MGA', 'Malagasy Ariary'),
(133, 'Malawi', 'MW', 'MWI', '265', 'MWK', 'Kwacha'),
(134, 'Malaysia', 'MY', 'MYS', '60', 'MYR', 'Malaysian Ringgit'),
(135, 'Maldives', 'MV', 'MDV', '960', 'MVR', 'Rufiyaa'),
(136, 'Mali', 'ML', 'MLI', '223', 'XOF', 'CFA Franc BCEAO'),
(137, 'Malta', 'MT', 'MLT', '356', 'EUR', 'Euro'),
(138, 'Marshall Islands', 'MH', 'MHL', '692', 'USD', 'US Dollar'),
(139, 'Martinique', 'MQ', 'MTQ', '596', 'EUR', 'Euro'),
(140, 'Mauritania', 'MR', 'MRT', '222', 'MRO', 'Ouguiya'),
(141, 'Mauritius', 'MU', 'MUS', '230', 'MUR', 'Mauritius Rupee'),
(142, 'Mayotte', 'YT', 'MYT', '262', 'EUR', 'Euro'),
(143, 'Mexico', 'MX', 'MEX', '52', 'MXN', 'Mexican Peso'),
(144, 'Micronesia, Federated States of', 'FM', 'FSM', '691', 'USD', 'US Dollar'),
(145, 'Moldova, Republic of', 'MD', 'MDA', '373', 'MDL', 'Moldovan Leu'),
(146, 'Monaco', 'MC', 'MCO', '377', 'EUR', 'Euro'),
(147, 'Mongolia', 'MN', 'MNG', '976', 'MNT', 'Tugrik'),
(148, 'Montenegro', 'ME', 'MNE', '382', 'EUR', 'Euro'),
(149, 'Montserrat', 'MS', 'MSR', '1-664', 'XCD', 'East Caribbean Dollar'),
(150, 'Morocco', 'MA', 'MAR', '212', 'MAD', 'Moroccan Dirham'),
(151, 'Mozambique', 'MZ', 'MOZ', '258', 'MZN', 'Mozambique Metical'),
(152, 'Myanmar', 'MM', 'MMR', '95', 'MMK', 'Kyat'),
(153, 'Namibia', 'NA', 'NAM', '264', 'ZAR', 'Rand'),
(154, 'Nauru', 'NR', 'NRU', '674', 'AUD', 'Australian Dollar'),
(155, 'Nepal', 'NP', 'NPL', '977', 'NPR', 'Nepalese Rupee'),
(156, 'Netherlands', 'NL', 'NLD', '31', 'EUR', 'Euro'),
(157, 'New Caledonia', 'NC', 'NCL', '687', 'XPF', 'CFP Franc'),
(158, 'New Zealand', 'NZ', 'NZL', '64', 'NZD', 'New Zealand Dollar'),
(159, 'Nicaragua', 'NI', 'NIC', '505', 'NIO', 'Cordoba Oro'),
(160, 'Niger', 'NE', 'NER', '227', 'XOF', 'CFA Franc BCEAO'),
(161, 'Nigeria', 'NG', 'NGA', '234', 'NGN', 'Naira'),
(162, 'Niue', 'NU', 'NIU', '683', 'NZD', 'New Zealand Dollar'),
(163, 'Norfolk Island', 'NF', 'NFK', '672', 'AUD', 'Australian Dollar'),
(164, 'Northern Mariana Islands', 'MP', 'MNP', '1-670', 'USD', 'US Dollar'),
(165, 'Norway', 'NO', 'NOR', '47', 'NOK', 'Norwegian Krone'),
(166, 'Oman', 'OM', 'OMN', '968', 'OMR', 'Rial Omani'),
(167, 'Pakistan', 'PK', 'PAK', '92', 'PKR', 'Pakistan Rupee'),
(168, 'Palau', 'PW', 'PLW', '680', 'USD', 'US Dollar'),
(169, 'Palestine, State of', 'PS', 'PSE', '970', NULL, NULL),
(170, 'Panama', 'PA', 'PAN', '507', 'USD', 'US Dollar'),
(171, 'Papua New Guinea', 'PG', 'PNG', '675', 'PGK', 'Kina'),
(172, 'Paraguay', 'PY', 'PRY', '595', 'PYG', 'Guarani'),
(173, 'Peru', 'PE', 'PER', '51', 'PEN', 'Nuevo Sol'),
(174, 'Philippines', 'PH', 'PHL', '63', 'PHP', 'Philippine Peso'),
(175, 'Pitcairn', 'PN', 'PCN', '870', 'NZD', 'New Zealand Dollar'),
(176, 'Poland', 'PL', 'POL', '48', 'PLN', 'Zloty'),
(177, 'Portugal', 'PT', 'PRT', '351', 'EUR', 'Euro'),
(178, 'Puerto Rico', 'PR', 'PRI', '1', 'USD', 'US Dollar'),
(179, 'Qatar', 'QA', 'QAT', '974', 'QAR', 'Qatari Rial'),
(180, 'Romania', 'RO', 'ROU', '40', 'RON', 'New Romanian Leu'),
(181, 'Russian Federation', 'RU', 'RUS', '7', 'RUB', 'Russian Ruble'),
(182, 'Rwanda', 'RW', 'RWA', '250', 'RWF', 'Rwanda Franc'),
(183, 'Réunion', 'RE', 'REU', '262', 'EUR', 'Euro'),
(184, 'Saint Barthélemy', 'BL', 'BLM', '590', 'EUR', 'Euro'),
(185, 'Saint Helena, Ascension and Tristan da Cunha', 'SH', 'SHN', '290', 'SHP', 'Saint Helena Pound'),
(186, 'Saint Kitts and Nevis', 'KN', 'KNA', '1-869', 'XCD', 'East Caribbean Dollar'),
(187, 'Saint Lucia', 'LC', 'LCA', '1-758', 'XCD', 'East Caribbean Dollar'),
(188, 'Saint Martin (French part)', 'MF', 'MAF', '590', 'EUR', 'Euro'),
(189, 'Saint Pierre and Miquelon', 'PM', 'SPM', '508', 'EUR', 'Euro'),
(190, 'Saint Vincent and the Grenadines', 'VC', 'VCT', '1-784', 'XCD', 'East Caribbean Dollar'),
(191, 'Samoa', 'WS', 'WSM', '685', 'WST', 'Tala'),
(192, 'San Marino', 'SM', 'SMR', '378', 'EUR', 'Euro'),
(193, 'Sao Tome and Principe', 'ST', 'STP', '239', 'STD', 'Dobra'),
(194, 'Saudi Arabia', 'SA', 'SAU', '966', 'SAR', 'Saudi Riyal'),
(195, 'Senegal', 'SN', 'SEN', '221', 'XOF', 'CFA Franc BCEAO'),
(196, 'Serbia', 'RS', 'SRB', '381', 'RSD', 'Serbian Dinar'),
(197, 'Seychelles', 'SC', 'SYC', '248', 'SCR', 'Seychelles Rupee'),
(198, 'Sierra Leone', 'SL', 'SLE', '232', 'SLL', 'Leone'),
(199, 'Singapore', 'SG', 'SGP', '65', 'SGD', 'Singapore Dollar'),
(200, 'Sint Maarten (Dutch part)', 'SX', 'SXM', '1-721', 'ANG', 'Netherlands Antillean Guilder'),
(201, 'Slovakia', 'SK', 'SVK', '421', 'EUR', 'Euro'),
(202, 'Slovenia', 'SI', 'SVN', '386', 'EUR', 'Euro'),
(203, 'Solomon Islands', 'SB', 'SLB', '677', 'SBD', 'Solomon Islands Dollar'),
(204, 'Somalia', 'SO', 'SOM', '252', 'SOS', 'Somali Shilling'),
(205, 'South Africa', 'ZA', 'ZAF', '27', 'ZAR', 'Rand'),
(206, 'South Georgia and the South Sandwich Islands', 'GS', 'SGS', '500', NULL, NULL),
(207, 'South Sudan', 'SS', 'SSD', '211', 'SSP', 'South Sudanese Pound'),
(208, 'Spain', 'ES', 'ESP', '34', 'EUR', 'Euro'),
(209, 'Sri Lanka', 'LK', 'LKA', '94', 'LKR', 'Sri Lanka Rupee'),
(210, 'Sudan', 'SD', 'SDN', '249', 'SDG', 'Sudanese Pound'),
(211, 'Suriname', 'SR', 'SUR', '597', 'SRD', 'Surinam Dollar'),
(212, 'Svalbard and Jan Mayen', 'SJ', 'SJM', '47', 'NOK', 'Norwegian Krone'),
(213, 'Swaziland', 'SZ', 'SWZ', '268', 'SZL', 'Lilangeni'),
(214, 'Sweden', 'SE', 'SWE', '46', 'SEK', 'Swedish Krona'),
(215, 'Switzerland', 'CH', 'CHE', '41', 'CHF', 'Swiss Franc'),
(216, 'Syrian Arab Republic', 'SY', 'SYR', '963', 'SYP', 'Syrian Pound'),
(217, 'Taiwan, Province of China', 'TW', 'TWN', '886', 'TWD', 'New Taiwan Dollar'),
(218, 'Tajikistan', 'TJ', 'TJK', '992', 'TJS', 'Somoni'),
(219, 'Tanzania, United Republic of', 'TZ', 'TZA', '255', 'TZS', 'Tanzanian Shilling'),
(220, 'Thailand', 'TH', 'THA', '66', 'THB', 'Baht'),
(221, 'Timor-Leste', 'TL', 'TLS', '670', 'USD', 'US Dollar'),
(222, 'Togo', 'TG', 'TGO', '228', 'XOF', 'CFA Franc BCEAO'),
(223, 'Tokelau', 'TK', 'TKL', '690', 'NZD', 'New Zealand Dollar'),
(224, 'Tonga', 'TO', 'TON', '676', 'TOP', 'Pa’anga'),
(225, 'Trinidad and Tobago', 'TT', 'TTO', '1-868', 'TTD', 'Trinidad and Tobago Dollar'),
(226, 'Tunisia', 'TN', 'TUN', '216', 'TND', 'Tunisian Dinar'),
(227, 'Turkey', 'TR', 'TUR', '90', 'TRY', 'Turkish Lira'),
(228, 'Turkmenistan', 'TM', 'TKM', '993', 'TMT', 'Turkmenistan New Manat'),
(229, 'Turks and Caicos Islands', 'TC', 'TCA', '1-649', 'USD', 'US Dollar'),
(230, 'Tuvalu', 'TV', 'TUV', '688', 'AUD', 'Australian Dollar'),
(231, 'Uganda', 'UG', 'UGA', '256', 'UGX', 'Uganda Shilling'),
(232, 'Ukraine', 'UA', 'UKR', '380', 'UAH', 'Hryvnia'),
(233, 'United Arab Emirates', 'AE', 'ARE', '971', 'AED', 'UAE Dirham'),
(234, 'United Kingdom', 'GB', 'GBR', '44', 'GBP', 'Pound Sterling'),
(235, 'United States', 'US', 'USA', '1', 'USD', 'US Dollar'),
(236, 'United States Minor Outlying Islands', 'UM', 'UMI', '1', 'USD', 'US Dollar'),
(237, 'Uruguay', 'UY', 'URY', '598', 'UYU', 'Peso Uruguayo'),
(238, 'Uzbekistan', 'UZ', 'UZB', '998', 'UZS', 'Uzbekistan Sum'),
(239, 'Vanuatu', 'VU', 'VUT', '678', 'VUV', 'Vatu'),
(240, 'Venezuela, Bolivarian Republic of', 'VE', 'VEN', '58', 'VEF', 'Bolivar'),
(241, 'Viet Nam', 'VN', 'VNM', '84', 'VND', 'Dong'),
(242, 'Virgin Islands, British', 'VG', 'VGB', '1-284', 'USD', 'US Dollar'),
(243, 'Virgin Islands, U.S.', 'VI', 'VIR', '1-340', 'USD', 'US Dollar'),
(244, 'Wallis and Futuna', 'WF', 'WLF', '681', 'XPF', 'CFP Franc'),
(245, 'Western Sahara', 'EH', 'ESH', '212', 'MAD', 'Moroccan Dirham'),
(246, 'Yemen', 'YE', 'YEM', '967', 'YER', 'Yemeni Rial'),
(247, 'Zambia', 'ZM', 'ZMB', '260', 'ZMW', 'Zambian Kwacha'),
(248, 'Zimbabwe', 'ZW', 'ZWE', '263', 'ZWL', 'Zimbabwe Dollar'),
(249, 'Åland Islands', 'AX', 'ALA', '358', 'EUR', 'Euro');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_title` longtext NOT NULL,
  `course_subtitle` longtext NOT NULL,
  `course_description` longtext NOT NULL,
  `course_image` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `promotional_video` longtext NOT NULL,
  `level_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `course_tags` longtext NOT NULL,
  `currency_id` int(11) NOT NULL,
  `course_price` float NOT NULL,
  `course_tot_students` int(11) NOT NULL,
  `course_earnings` float NOT NULL,
  `course_clicks` int(11) NOT NULL,
  `course_purchases` int(11) NOT NULL,
  `course_status` int(11) NOT NULL,
  `course_reject_description` longtext NOT NULL,
  `course_rating` int(11) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `user_id`, `course_title`, `course_subtitle`, `course_description`, `course_image`, `category_id`, `subcategory_id`, `promotional_video`, `level_id`, `language_id`, `course_tags`, `currency_id`, `course_price`, `course_tot_students`, `course_earnings`, `course_clicks`, `course_purchases`, `course_status`, `course_reject_description`, `course_rating`, `date`) VALUES
(1, 1, 'Mastering ChatGPT for AI Tasks', 'Unlock AI with ChatGPT', 'Learn prompt engineering…', 'chatgbt.webp', 1, 1, 'https://www.youtube.com/watch?v=UFQRvb0GpTQ', 1, 1, 'chatgpt, ai, prompts', 1, 49.99, 120, 5998.8, 400, 120, 1, '', 5, '2025-08-04 05:26:57'),
(2, 1, 'Python for Data Science', 'Full course: Data Science with Python', 'Guide to Python, Pandas & NumPy…', 'python.webp', 1, 2, 'https://www.youtube.com/watch?v=CMEWVn1uZpQ', 1, 1, 'python, data science, numpy', 1, 59.99, 180, 10798.2, 450, 180, 1, '', 5, '2025-08-04 05:26:57'),
(3, 1, 'AWS Full Course 2025', 'AWS Cloud Computing Tutorial for Beginners', 'From basics to real‑world AWS architecture and exam prep.', 'cloud.webp', 2, 3, 'https://www.youtube.com/watch?v=UmQnenLf_Cs', 1, 1, 'aws, cloud, beginners', 1, 69.99, 110, 7598.9, 260, 110, 1, '', 1, '2025-08-04 05:26:57'),
(4, 1, 'AWS Developer Associate Guide', 'Prepare for AWS Developer – Associate', 'End‑to‑end walkthrough to pass AWS Developer Associate.', 'aws.webp', 2, 4, 'https://www.youtube.com/watch?v=ttyh6kPdaK8', 1, 1, 'aws, certification, developer', 1, 79.99, 90, 6299.1, 230, 90, 1, '', 5, '2025-08-04 05:26:57'),
(5, 1, 'JavaScript Full Course 2025', 'Complete JavaScript Course for Beginners', 'Learn JS fundamentals to project building.', 'javascript.webp', 3, 5, 'https://www.youtube.com/watch?v=ogdtB_m6G5g', 1, 1, 'javascript, web, basics', 1, 39.99, 200, 7998, 420, 200, 1, '', 5, '2025-08-04 05:26:57'),
(6, 1, 'React JS Crash Course', 'React JS Full Course 2024', 'Core React topics, hooks, routing, app deployment.', 'react.webp', 3, 6, 'https://www.youtube.com/watch?v=RVFAyFWO4go', 1, 1, 'react, frontend, javascript', 2, 44.99, 150, 6748.5, 300, 150, 1, '', 5, '2025-08-04 05:26:57'),
(7, 1, 'Learn Angular A–Z', 'Complete Tutorial for Angular Beginners', 'Angular fundamentals, components, routing.', 'angular.webp', 3, 7, 'https://www.youtube.com/watch?v=JWhRMyyF7nc', 1, 1, 'angular, typescript, frontend', 1, 42.99, 130, 5588.7, 270, 130, 1, '', 5, '2025-08-04 05:26:57'),
(8, 1, 'Public Speaking For Beginners', 'Communicate with Confidence', 'Practical tips to overcome fears and master speaking.', 'public.webp', 4, 8, 'https://www.youtube.com/watch?v=i5mYphUoOCs', 1, 1, 'public speaking, communication', 1, 34.99, 170, 5948.3, 310, 170, 1, '', 5, '2025-08-04 05:26:57'),
(9, 1, 'Excel for Business Analytics', 'Business Analysis with Excel Full Course', 'Pivot tables, dashboards, formulas in real‑case usage.', 'excel.webp', 5, 9, 'https://www.youtube.com/watch?v=X88Rbk_ZDkY', 1, 1, 'excel, analytics, business', 1, 24.99, 300, 7497, 500, 300, 1, '', 5, '2025-08-04 05:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `course_max_price`
--

CREATE TABLE `course_max_price` (
  `id` int(11) NOT NULL,
  `currency_id` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_ownership_duration`
--

CREATE TABLE `course_ownership_duration` (
  `id` int(11) NOT NULL,
  `duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_purchase`
--

CREATE TABLE `course_purchase` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `affiliate_percent` int(11) NOT NULL,
  `company_percent` int(11) NOT NULL,
  `instructor_percent` int(11) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `currency_id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `currecy` varchar(500) NOT NULL,
  `symbol` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`currency_id`, `code`, `currecy`, `symbol`) VALUES
(1, 'USD', 'US Dollar', '$'),
(2, 'NGN', 'Nigerian Naira', '₦'),
(3, 'EUR', 'Euro', '€'),
(4, 'GBP', 'British Pound', '£'),
(5, 'JPY', 'Japanese Yen', '¥'),
(6, 'CAD', 'Canadian Dollar', 'C$'),
(7, 'AUD', 'Australian Dollar', 'A$'),
(8, 'INR', 'Indian Rupee', '₹'),
(9, 'CNY', 'Chinese Yuan', '¥'),
(10, 'ZAR', 'South African Rand', 'R');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `language` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `language`) VALUES
(1, 'English'),
(2, 'French');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `course_level` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `modes_of_verification`
--

CREATE TABLE `modes_of_verification` (
  `id` int(11) NOT NULL,
  `mode_of_verification` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `modules_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `module_name` varchar(1000) NOT NULL,
  `video_link` longtext NOT NULL,
  `text_content` longtext NOT NULL,
  `file_attached` longtext NOT NULL,
  `module_position` int(11) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`modules_id`, `course_id`, `module_name`, `video_link`, `text_content`, `file_attached`, `module_position`, `date`) VALUES
(1, 1, 'Introduction to Photoshop UI', 'https://www.youtube.com/watch?v=Z1c8LZ7yEjQ', 'Getting started with Photoshop UI', '', 1, '2025-08-05 04:56:23'),
(2, 1, 'Layering & Tools', 'https://www.youtube.com/watch?v=Zp7Zs9XG0Eo', 'How to use layers, shapes, and effects', 'docs/photoshop_layers.pdf', 2, '2025-08-05 04:56:23'),
(3, 1, 'Creating a Web UI Mockup', 'https://www.youtube.com/watch?v=1FVxKffXkJs', 'Real project-based UI design', '', 3, '2025-08-05 04:56:23'),
(4, 2, 'JavaScript Basics', 'https://www.youtube.com/watch?v=W6NZfCO5SIk', 'Variables, Data Types, and Functions', '', 1, '2025-08-05 04:56:23'),
(5, 2, 'DOM Manipulation', 'https://www.youtube.com/watch?v=0ik6X4DJKCc', 'Manipulating HTML with JS', '', 2, '2025-08-05 04:56:23'),
(6, 2, 'Mini Project: Calculator', 'https://www.youtube.com/watch?v=j59qQ7YWLxw', 'Build a calculator using JS', 'docs/js_calculator.pdf', 3, '2025-08-05 04:56:23'),
(7, 3, 'HTML & CSS Fundamentals', 'https://www.youtube.com/watch?v=mU6anWqZJcc', 'Structure and styling of web pages', '', 1, '2025-08-05 04:56:23'),
(8, 3, 'Responsive Design with Flexbox', 'https://www.youtube.com/watch?v=fYq5PXgSsbE', 'Creating responsive layouts', 'docs/responsive_web.pdf', 2, '2025-08-05 04:56:23'),
(9, 3, 'Deploy Your Website', 'https://www.youtube.com/watch?v=nhBVL41-_Cw', 'Host your first site on Netlify', '', 3, '2025-08-05 04:56:23'),
(10, 4, 'Marketing Funnels Explained', 'https://www.youtube.com/watch?v=1DmGR8DWutI', 'Understanding customer journey', '', 1, '2025-08-05 04:56:23'),
(11, 4, 'SEO Basics', 'https://www.youtube.com/watch?v=Z8r3oD8tdUQ', 'Optimizing your content for Google', 'docs/seo_basics.pdf', 2, '2025-08-05 04:56:23'),
(12, 4, 'Email Campaigns', 'https://www.youtube.com/watch?v=UoU1hW3J2IA', 'Crafting a high-converting email', '', 3, '2025-08-05 04:56:23'),
(13, 5, 'Getting Started with Canva', 'https://www.youtube.com/watch?v=1QZL1rZz7nU', 'Overview of Canva interface', '', 1, '2025-08-05 04:56:23'),
(14, 5, 'Brand Kits & Templates', 'https://www.youtube.com/watch?v=rY4xU8kJJ68', 'Using templates and brand kit', 'docs/canva_templates.pdf', 2, '2025-08-05 04:56:23'),
(15, 5, 'Create a Social Media Banner', 'https://www.youtube.com/watch?v=YyFqJHb4_C8', 'Design a Facebook/Instagram banner', '', 3, '2025-08-05 04:56:23'),
(16, 6, 'Introduction to React', 'https://www.youtube.com/watch?v=SqcY0GlETPk', 'JSX, Components, and Props', '', 1, '2025-08-05 04:56:23'),
(17, 6, 'State & Events', 'https://www.youtube.com/watch?v=RkBfu-W7tt0', 'Manage state and handle events', '', 2, '2025-08-05 04:56:23'),
(18, 6, 'Build a To-do App', 'https://www.youtube.com/watch?v=pCA4qpQDZD8', 'Hands-on project: To-do List', 'docs/react_todo.pdf', 3, '2025-08-05 04:56:23'),
(19, 7, 'Python Basics', 'https://www.youtube.com/watch?v=_uQrJ0TkZlc', 'Variables, Loops, and Data Types', '', 1, '2025-08-05 04:56:23'),
(20, 7, 'Functions and Modules', 'https://www.youtube.com/watch?v=NSbOtYzIQI0', 'Creating reusable code in Python', 'docs/python_functions.pdf', 2, '2025-08-05 04:56:23'),
(21, 7, 'Mini Project: CLI App', 'https://www.youtube.com/watch?v=ZDa-Z5JzLYM', 'Build a Command-line Calculator', '', 3, '2025-08-05 04:56:23'),
(22, 8, 'Intro to Flutter & Dart', 'https://www.youtube.com/watch?v=VPvVD8t02U8', 'Setup and first app', '', 1, '2025-08-05 04:56:23'),
(23, 8, 'Widgets & Navigation', 'https://www.youtube.com/watch?v=x0uinJvhNxI', 'Building navigation and custom UI', '', 2, '2025-08-05 04:56:23'),
(24, 8, 'Firebase Integration', 'https://www.youtube.com/watch?v=1gDhl4leEzA', 'Connect your app to Firebase', 'docs/flutter_firebase.pdf', 3, '2025-08-05 04:56:23'),
(25, 9, 'Excel Formulas & Functions', 'https://www.youtube.com/watch?v=EXxONI3NyBc', 'Master SUM, IF, VLOOKUP', '', 1, '2025-08-05 04:56:23'),
(26, 9, 'Data Visualization with Charts', 'https://www.youtube.com/watch?v=3lF3YjR6_gM', 'Create beautiful dashboards', 'docs/excel_charts.pdf', 2, '2025-08-05 04:56:23'),
(27, 9, 'Pivot Tables & Reports', 'https://www.youtube.com/watch?v=9NUjHBNWe9M', 'Summarize and analyze data', '', 3, '2025-08-05 04:56:23');

-- --------------------------------------------------------

--
-- Table structure for table `pending_earning`
--

CREATE TABLE `pending_earning` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_purchase_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_approval_duration`
--

CREATE TABLE `purchase_approval_duration` (
  `id` int(11) NOT NULL,
  `usertype` varchar(500) NOT NULL,
  `duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quizz`
--

CREATE TABLE `quizz` (
  `quizz_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `questions` longtext NOT NULL,
  `options` longtext NOT NULL,
  `answer` longtext NOT NULL,
  `explanation` longtext NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quizz_results`
--

CREATE TABLE `quizz_results` (
  `id` int(11) NOT NULL,
  `quizz_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `student_answer` longtext NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(10) UNSIGNED NOT NULL,
  `currency_id` int(10) UNSIGNED NOT NULL,
  `rate` decimal(15,6) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `currency_id`, `rate`, `updated_at`) VALUES
(1, 1, 1.000000, '2025-08-08 14:51:28'),
(2, 2, 1500.000000, '2025-08-08 14:51:28'),
(3, 3, 15.500000, '2025-08-08 14:51:28');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `rating_1_to_5` int(11) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `comment` longtext NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `user_id`, `course_id`, `module_id`, `comment`, `date`) VALUES
(1, 1, 1, 1, 'Great intro to Photoshop, easy to follow indeed.', '2025-08-05'),
(2, 2, 1, 2, 'Layering was fast but helpful and well done......', '2025-08-05'),
(3, 3, 1, 3, 'UI mockup demo was clean and well guided.......', '2025-08-05'),
(4, 1, 2, 4, 'JS basics clearly explained with examples today', '2025-08-05'),
(5, 2, 2, 5, 'DOM manipulation taught in a simple clear way.', '2025-08-05'),
(6, 3, 2, 6, 'Calculator project made learning very fun now.', '2025-08-05'),
(7, 1, 3, 7, 'HTML CSS basics were clear for beginners now..', '2025-08-05'),
(8, 2, 3, 8, 'Flexbox layout examples were new and helpful..', '2025-08-05'),
(9, 3, 3, 9, 'Netlify deploy was smooth and well explained..', '2025-08-05'),
(10, 1, 4, 10, 'Funnels section was insightful and easy too..', '2025-08-05'),
(11, 2, 4, 11, 'SEO part gave great insights and strategies..', '2025-08-05'),
(12, 3, 4, 12, 'Email marketing was explained well with tips.', '2025-08-05'),
(13, 1, 5, 13, 'Canva was easier to use than I thought........', '2025-08-05'),
(14, 2, 5, 14, 'Templates and shortcuts were very helpful too', '2025-08-05'),
(15, 3, 5, 15, 'Social banner design was simple and awesome..', '2025-08-05'),
(16, 1, 6, 16, 'React intro was clean, clear, and helpful.....', '2025-08-05'),
(17, 2, 6, 17, 'State management now makes more sense to me..', '2025-08-05'),
(18, 3, 6, 18, 'Todo app helped me learn React very fast.....', '2025-08-05'),
(19, 1, 7, 19, 'Python basics were easy and clear to follow..', '2025-08-05'),
(20, 2, 7, 20, 'Functions now seem much less confusing to me.', '2025-08-05'),
(21, 3, 7, 21, 'CLI app project was a fun one to do..........', '2025-08-05'),
(22, 1, 8, 22, 'Flutter looks promising with great UI tools..', '2025-08-05'),
(23, 2, 8, 23, 'Widgets and navigation were explained very well', '2025-08-05'),
(24, 3, 8, 24, 'Firebase worked perfectly as shown in class..', '2025-08-05'),
(25, 1, 9, 25, 'Excel formulas were finally clear and useful.', '2025-08-05'),
(26, 2, 9, 26, 'Charts module gave work-related ideas and tips', '2025-08-05'),
(27, 3, 9, 27, 'Pivot tables simplified and now easy to use..', '2025-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `rules_and_regulations`
--

CREATE TABLE `rules_and_regulations` (
  `id` int(11) NOT NULL,
  `usertype` varchar(500) NOT NULL,
  `rules` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_courses`
--

CREATE TABLE `student_courses` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_module_id` int(11) NOT NULL,
  `course_start_date` varchar(500) NOT NULL,
  `course_end_date` varchar(500) NOT NULL,
  `course_done_status` int(11) NOT NULL,
  `course_payment_end_date` varchar(500) NOT NULL,
  `course_certificate` longtext NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `category_id`, `subcategory`) VALUES
(1, 1, 'ChatGBT'),
(2, 1, 'Python'),
(3, 2, 'Amazon AWS'),
(4, 2, 'AWS Certified Developer - Associate'),
(5, 3, 'JavaScript'),
(6, 3, 'React JS'),
(7, 3, 'Angular'),
(8, 4, 'Public Speaking'),
(9, 5, 'Microsoft Excel');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(500) NOT NULL,
  `user_type` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `wallet_balance` float NOT NULL,
  `mode_of_verification` int(11) NOT NULL,
  `uploaded_document` longtext NOT NULL,
  `verification_video` longtext NOT NULL,
  `withdrawal_bank` int(11) NOT NULL,
  `withdrawal_acc_no` int(11) NOT NULL,
  `withdrawal_acc_name` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL,
  `date` varchar(1000) NOT NULL,
  `email_otp` varchar(10) DEFAULT NULL,
  `otp_verified` enum('0','1') DEFAULT '0',
  `otp_generated_at` datetime DEFAULT NULL,
  `social_id` varchar(100) DEFAULT NULL,
  `login_method` varchar(20) DEFAULT 'manual'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`user_id`, `full_name`, `user_type`, `email`, `password`, `wallet_balance`, `mode_of_verification`, `uploaded_document`, `verification_video`, `withdrawal_bank`, `withdrawal_acc_no`, `withdrawal_acc_name`, `status`, `date`, `email_otp`, `otp_verified`, `otp_generated_at`, `social_id`, `login_method`) VALUES
(1, 'prosper Ortese', 'admin', 'prosperortese12@gmail.com', '12334', 0, 0, '', '', 0, 0, '', 1, '', NULL, '0', NULL, NULL, 'manual'),
(2, 'Legend Coder', 'student', 'prosperortese15@gmail.com', '12334', 0, 0, '', '', 0, 0, '', 2, '', NULL, '0', NULL, NULL, 'manual'),
(27, 'prosper', 'student', 'prosperortese@gmail.com', '', 0, 0, '', '', 0, 0, '', 1, '2025-08-06 15:02:08', '205533', '0', '2025-08-07 17:20:29', NULL, 'manual'),
(29, 'prosper delegend', 'student', 'prosperdelegend12@gmail.com', '', 0, 0, '', '', 0, 0, '', 1, '2025-08-07 16:13:11', NULL, '0', NULL, '102404710965254149314', 'google');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal_history`
--

CREATE TABLE `withdrawal_history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_site`
--
ALTER TABLE `about_site`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `affiliate_course`
--
ALTER TABLE `affiliate_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approved_earning`
--
ALTER TABLE `approved_earning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate_template`
--
ALTER TABLE `certificate_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `countries_name_iso_iso3_dial_unique` (`name`,`iso`,`iso3`,`dial`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_max_price`
--
ALTER TABLE `course_max_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_ownership_duration`
--
ALTER TABLE `course_ownership_duration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_purchase`
--
ALTER TABLE `course_purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`currency_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modes_of_verification`
--
ALTER TABLE `modes_of_verification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`modules_id`);

--
-- Indexes for table `pending_earning`
--
ALTER TABLE `pending_earning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_approval_duration`
--
ALTER TABLE `purchase_approval_duration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizz`
--
ALTER TABLE `quizz`
  ADD PRIMARY KEY (`quizz_id`);

--
-- Indexes for table `quizz_results`
--
ALTER TABLE `quizz_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `currency_id` (`currency_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `rules_and_regulations`
--
ALTER TABLE `rules_and_regulations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_courses`
--
ALTER TABLE `student_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `withdrawal_history`
--
ALTER TABLE `withdrawal_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_site`
--
ALTER TABLE `about_site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `affiliate_course`
--
ALTER TABLE `affiliate_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `approved_earning`
--
ALTER TABLE `approved_earning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `certificate_template`
--
ALTER TABLE `certificate_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `course_max_price`
--
ALTER TABLE `course_max_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_ownership_duration`
--
ALTER TABLE `course_ownership_duration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_purchase`
--
ALTER TABLE `course_purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `currency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modes_of_verification`
--
ALTER TABLE `modes_of_verification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `modules_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pending_earning`
--
ALTER TABLE `pending_earning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_approval_duration`
--
ALTER TABLE `purchase_approval_duration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quizz`
--
ALTER TABLE `quizz`
  MODIFY `quizz_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quizz_results`
--
ALTER TABLE `quizz_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `rules_and_regulations`
--
ALTER TABLE `rules_and_regulations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_courses`
--
ALTER TABLE `student_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `withdrawal_history`
--
ALTER TABLE `withdrawal_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rates`
--
ALTER TABLE `rates`
  ADD CONSTRAINT `rates_ibfk_1` FOREIGN KEY (`currency_id`) REFERENCES `currencies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
