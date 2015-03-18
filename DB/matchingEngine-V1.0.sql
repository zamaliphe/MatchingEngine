-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2015 at 05:05 PM
-- Server version: 5.6.21-69.0
-- PHP Version: 5.5.12-2ubuntu4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `matchingEngine`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
`id` int(11) NOT NULL,
  `sequence` int(11) NOT NULL DEFAULT '0',
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `iso_code_2` varchar(2) COLLATE utf8_bin NOT NULL DEFAULT '',
  `iso_code_3` varchar(3) COLLATE utf8_bin NOT NULL DEFAULT '',
  `address_format` text CHARACTER SET utf8 NOT NULL,
  `postcode_required` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '1',
  `tax` float(10,5) NOT NULL DEFAULT '0.00000'
) ENGINE=MyISAM AUTO_INCREMENT=240 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sequence`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`, `tax`) VALUES
(1, 3, 'Afghanistan', 'AF', 'AFG', '', 0, 1, 0.00000),
(2, 4, 'Albania', 'AL', 'ALB', '', 0, 1, 0.00000),
(3, 5, 'Algeria', 'DZ', 'DZA', '', 1, 1, 0.00000),
(4, 6, 'American Samoa', 'AS', 'ASM', '', 0, 1, 0.00000),
(5, 7, 'Andorra', 'AD', 'AND', '', 0, 1, 0.00000),
(6, 8, 'Angola', 'AO', 'AGO', '', 0, 1, 0.00000),
(7, 9, 'Anguilla', 'AI', 'AIA', '', 0, 1, 0.00000),
(8, 10, 'Antarctica', 'AQ', 'ATA', '', 1, 1, 0.00000),
(9, 11, 'Antigua and Barbuda', 'AG', 'ATG', '', 0, 1, 0.00000),
(10, 12, 'Argentina', 'AR', 'ARG', '', 1, 1, 0.00000),
(11, 13, 'Armenia', 'AM', 'ARM', '', 1, 1, 0.00000),
(12, 14, 'Aruba', 'AW', 'ABW', '', 0, 1, 0.00000),
(13, 15, 'Australia', 'AU', 'AUS', '', 1, 1, 0.00000),
(14, 16, 'Austria', 'AT', 'AUT', '', 1, 1, 0.00000),
(15, 17, 'Azerbaijan', 'AZ', 'AZE', '', 1, 1, 0.00000),
(16, 18, 'Bahamas', 'BS', 'BHS', '', 0, 1, 0.00000),
(17, 19, 'Bahrain', 'BH', 'BHR', '', 0, 1, 0.00000),
(18, 20, 'Bangladesh', 'BD', 'BGD', '', 1, 1, 0.00000),
(19, 21, 'Barbados', 'BB', 'BRB', '', 0, 1, 0.00000),
(20, 22, 'Belarus', 'BY', 'BLR', '', 1, 1, 0.00000),
(21, 23, 'Belgium', 'BE', 'BEL', '', 1, 1, 0.00000),
(22, 24, 'Belize', 'BZ', 'BLZ', '', 0, 1, 0.00000),
(23, 25, 'Benin', 'BJ', 'BEN', '', 0, 1, 0.00000),
(24, 26, 'Bermuda', 'BM', 'BMU', '', 0, 1, 0.00000),
(25, 27, 'Bhutan', 'BT', 'BTN', '', 0, 1, 0.00000),
(26, 28, 'Bolivia', 'BO', 'BOL', '', 0, 1, 0.00000),
(27, 29, 'Bosnia and Herzegowina', 'BA', 'BIH', '', 1, 1, 0.00000),
(28, 30, 'Botswana', 'BW', 'BWA', '', 0, 1, 0.00000),
(29, 31, 'Bouvet Island', 'BV', 'BVT', '', 1, 1, 0.00000),
(30, 32, 'Brazil', 'BR', 'BRA', '', 1, 1, 0.00000),
(31, 33, 'British Indian Ocean Territory', 'IO', 'IOT', '', 1, 1, 0.00000),
(32, 34, 'Brunei Darussalam', 'BN', 'BRN', '', 0, 1, 0.00000),
(33, 35, 'Bulgaria', 'BG', 'BGR', '', 1, 1, 0.00000),
(34, 36, 'Burkina Faso', 'BF', 'BFA', '', 0, 1, 0.00000),
(35, 37, 'Burundi', 'BI', 'BDI', '', 0, 1, 0.00000),
(36, 38, 'Cambodia', 'KH', 'KHM', '', 0, 1, 0.00000),
(37, 39, 'Cameroon', 'CM', 'CMR', '', 0, 1, 0.00000),
(38, 1, 'Canada', 'CA', 'CAN', '', 1, 1, 0.00000),
(39, 40, 'Cape Verde', 'CV', 'CPV', '', 0, 1, 0.00000),
(40, 41, 'Cayman Islands', 'KY', 'CYM', '', 0, 1, 0.00000),
(41, 42, 'Central African Republic', 'CF', 'CAF', '', 0, 1, 0.00000),
(42, 43, 'Chad', 'TD', 'TCD', '', 0, 1, 0.00000),
(43, 44, 'Chile', 'CL', 'CHL', '', 0, 1, 0.00000),
(44, 45, 'China', 'CN', 'CHN', '', 1, 1, 0.00000),
(45, 46, 'Christmas Island', 'CX', 'CXR', '', 1, 1, 0.00000),
(46, 47, 'Cocos (Keeling) Islands', 'CC', 'CCK', '', 1, 1, 0.00000),
(47, 48, 'Colombia', 'CO', 'COL', '', 0, 1, 0.00000),
(48, 49, 'Comoros', 'KM', 'COM', '', 1, 1, 0.00000),
(49, 50, 'Congo', 'CG', 'COG', '', 0, 1, 0.00000),
(50, 51, 'Cook Islands', 'CK', 'COK', '', 0, 1, 0.00000),
(51, 52, 'Costa Rica', 'CR', 'CRI', '', 0, 1, 0.00000),
(52, 53, 'Cote D''Ivoire', 'CI', 'CIV', '', 1, 1, 0.00000),
(53, 54, 'Croatia', 'HR', 'HRV', '', 1, 1, 0.00000),
(54, 55, 'Cuba', 'CU', 'CUB', '', 1, 1, 0.00000),
(55, 56, 'Cyprus', 'CY', 'CYP', '', 1, 1, 0.00000),
(56, 57, 'Czech Republic', 'CZ', 'CZE', '', 1, 1, 0.00000),
(57, 58, 'Denmark', 'DK', 'DNK', '', 1, 1, 0.00000),
(58, 59, 'Djibouti', 'DJ', 'DJI', '', 0, 1, 0.00000),
(59, 60, 'Dominica', 'DM', 'DMA', '', 0, 1, 0.00000),
(60, 61, 'Dominican Republic', 'DO', 'DOM', '', 0, 1, 0.00000),
(61, 62, 'East Timor', 'TP', 'TMP', '', 1, 1, 0.00000),
(62, 63, 'Ecuador', 'EC', 'ECU', '', 0, 1, 0.00000),
(63, 64, 'Egypt', 'EG', 'EGY', '', 0, 1, 0.00000),
(64, 65, 'El Salvador', 'SV', 'SLV', '', 0, 1, 0.00000),
(65, 66, 'Equatorial Guinea', 'GQ', 'GNQ', '', 0, 1, 0.00000),
(66, 67, 'Eritrea', 'ER', 'ERI', '', 0, 1, 0.00000),
(67, 68, 'Estonia', 'EE', 'EST', '', 1, 1, 0.00000),
(68, 69, 'Ethiopia', 'ET', 'ETH', '', 0, 1, 0.00000),
(69, 70, 'Falkland Islands (Malvinas)', 'FK', 'FLK', '', 1, 1, 0.00000),
(70, 71, 'Faroe Islands', 'FO', 'FRO', '', 1, 1, 0.00000),
(71, 72, 'Fiji', 'FJ', 'FJI', '', 0, 1, 0.00000),
(72, 73, 'Finland', 'FI', 'FIN', '', 1, 1, 0.00000),
(73, 74, 'France', 'FR', 'FRA', '', 1, 1, 0.00000),
(74, 75, 'France, Metropolitan', 'FX', 'FXX', '', 1, 1, 0.00000),
(75, 76, 'French Guiana', 'GF', 'GUF', '', 0, 1, 0.00000),
(76, 77, 'French Polynesia', 'PF', 'PYF', '', 0, 1, 0.00000),
(77, 78, 'French Southern Territories', 'TF', 'ATF', '', 1, 1, 0.00000),
(78, 79, 'Gabon', 'GA', 'GAB', '', 0, 1, 0.00000),
(79, 80, 'Gambia', 'GM', 'GMB', '', 0, 1, 0.00000),
(80, 81, 'Georgia', 'GE', 'GEO', '', 1, 1, 0.00000),
(81, 82, 'Germany', 'DE', 'DEU', '', 1, 1, 0.00000),
(82, 83, 'Ghana', 'GH', 'GHA', '', 0, 1, 0.00000),
(83, 84, 'Gibraltar', 'GI', 'GIB', '', 0, 1, 0.00000),
(84, 85, 'Greece', 'GR', 'GRC', '', 1, 1, 0.00000),
(85, 86, 'Greenland', 'GL', 'GRL', '', 1, 1, 0.00000),
(86, 87, 'Grenada', 'GD', 'GRD', '', 0, 1, 0.00000),
(87, 88, 'Guadeloupe', 'GP', 'GLP', '', 0, 1, 0.00000),
(88, 89, 'Guam', 'GU', 'GUM', '', 0, 1, 0.00000),
(89, 90, 'Guatemala', 'GT', 'GTM', '', 0, 1, 0.00000),
(90, 91, 'Guinea', 'GN', 'GIN', '', 0, 1, 0.00000),
(91, 92, 'Guinea-bissau', 'GW', 'GNB', '', 0, 1, 0.00000),
(92, 93, 'Guyana', 'GY', 'GUY', '', 0, 1, 0.00000),
(93, 94, 'Haiti', 'HT', 'HTI', '', 0, 1, 0.00000),
(94, 95, 'Heard and Mc Donald Islands', 'HM', 'HMD', '', 1, 1, 0.00000),
(95, 96, 'Honduras', 'HN', 'HND', '', 0, 1, 0.00000),
(96, 97, 'Hong Kong', 'HK', 'HKG', '', 0, 1, 0.00000),
(97, 98, 'Hungary', 'HU', 'HUN', '', 1, 1, 0.00000),
(98, 99, 'Iceland', 'IS', 'ISL', '', 1, 1, 0.00000),
(99, 100, 'India', 'IN', 'IND', '', 1, 1, 0.00000),
(100, 101, 'Indonesia', 'ID', 'IDN', '', 1, 1, 0.00000),
(101, 102, 'Iran (Islamic Republic of)', 'IR', 'IRN', '', 1, 1, 0.00000),
(102, 103, 'Iraq', 'IQ', 'IRQ', '', 0, 1, 0.00000),
(103, 104, 'Ireland', 'IE', 'IRL', '', 0, 1, 0.00000),
(104, 105, 'Israel', 'IL', 'ISR', '', 1, 1, 0.00000),
(105, 106, 'Italy', 'IT', 'ITA', '', 1, 1, 0.00000),
(106, 107, 'Jamaica', 'JM', 'JAM', '', 0, 1, 0.00000),
(107, 108, 'Japan', 'JP', 'JPN', '', 1, 1, 0.00000),
(108, 109, 'Jordan', 'JO', 'JOR', '', 0, 1, 0.00000),
(109, 110, 'Kazakhstan', 'KZ', 'KAZ', '', 1, 1, 0.00000),
(110, 111, 'Kenya', 'KE', 'KEN', '', 0, 1, 0.00000),
(111, 112, 'Kiribati', 'KI', 'KIR', '', 0, 1, 0.00000),
(112, 113, 'North Korea', 'KP', 'PRK', '', 1, 1, 0.00000),
(113, 114, 'Korea, Republic of', 'KR', 'KOR', '', 1, 1, 0.00000),
(114, 115, 'Kuwait', 'KW', 'KWT', '', 0, 1, 0.00000),
(115, 116, 'Kyrgyzstan', 'KG', 'KGZ', '', 1, 1, 0.00000),
(116, 117, 'Lao People''s Democratic Republic', 'LA', 'LAO', '', 0, 1, 0.00000),
(117, 118, 'Latvia', 'LV', 'LVA', '', 1, 1, 0.00000),
(118, 119, 'Lebanon', 'LB', 'LBN', '', 0, 1, 0.00000),
(119, 120, 'Lesotho', 'LS', 'LSO', '', 0, 1, 0.00000),
(120, 121, 'Liberia', 'LR', 'LBR', '', 0, 1, 0.00000),
(121, 122, 'Libyan Arab Jamahiriya', 'LY', 'LBY', '', 1, 1, 0.00000),
(122, 123, 'Liechtenstein', 'LI', 'LIE', '', 1, 1, 0.00000),
(123, 124, 'Lithuania', 'LT', 'LTU', '', 1, 1, 0.00000),
(124, 125, 'Luxembourg', 'LU', 'LUX', '', 1, 1, 0.00000),
(125, 126, 'Macau', 'MO', 'MAC', '', 0, 1, 0.00000),
(126, 127, 'Macedonia', 'MK', 'MKD', '', 1, 1, 0.00000),
(127, 128, 'Madagascar', 'MG', 'MDG', '', 0, 1, 0.00000),
(128, 129, 'Malawi', 'MW', 'MWI', '', 1, 1, 0.00000),
(129, 130, 'Malaysia', 'MY', 'MYS', '', 1, 1, 0.00000),
(130, 131, 'Maldives', 'MV', 'MDV', '', 0, 1, 0.00000),
(131, 132, 'Mali', 'ML', 'MLI', '', 0, 1, 0.00000),
(132, 133, 'Malta', 'MT', 'MLT', '', 0, 1, 0.00000),
(133, 134, 'Marshall Islands', 'MH', 'MHL', '', 1, 1, 0.00000),
(134, 135, 'Martinique', 'MQ', 'MTQ', '', 1, 1, 0.00000),
(135, 136, 'Mauritania', 'MR', 'MRT', '', 0, 1, 0.00000),
(136, 137, 'Mauritius', 'MU', 'MUS', '', 0, 1, 0.00000),
(137, 138, 'Mayotte', 'YT', 'MYT', '', 1, 1, 0.00000),
(138, 139, 'Mexico', 'MX', 'MEX', '', 1, 1, 0.00000),
(139, 140, 'Micronesia, Federated States of', 'FM', 'FSM', '', 1, 1, 0.00000),
(140, 141, 'Moldova, Republic of', 'MD', 'MDA', '', 1, 1, 0.00000),
(141, 142, 'Monaco', 'MC', 'MCO', '', 1, 1, 0.00000),
(142, 143, 'Mongolia', 'MN', 'MNG', '', 1, 1, 0.00000),
(143, 144, 'Montserrat', 'MS', 'MSR', '', 0, 1, 0.00000),
(144, 145, 'Morocco', 'MA', 'MAR', '', 0, 1, 0.00000),
(145, 146, 'Mozambique', 'MZ', 'MOZ', '', 0, 1, 0.00000),
(146, 147, 'Myanmar', 'MM', 'MMR', '', 1, 1, 0.00000),
(147, 148, 'Namibia', 'NA', 'NAM', '', 0, 1, 0.00000),
(148, 149, 'Nauru', 'NR', 'NRU', '', 1, 1, 0.00000),
(149, 150, 'Nepal', 'NP', 'NPL', '', 0, 1, 0.00000),
(150, 151, 'Netherlands', 'NL', 'NLD', '', 1, 1, 0.00000),
(151, 152, 'Netherlands Antilles', 'AN', 'ANT', '', 0, 1, 0.00000),
(152, 153, 'New Caledonia', 'NC', 'NCL', '', 0, 1, 0.00000),
(153, 154, 'New Zealand', 'NZ', 'NZL', '', 1, 1, 0.00000),
(154, 155, 'Nicaragua', 'NI', 'NIC', '', 0, 1, 0.00000),
(155, 156, 'Niger', 'NE', 'NER', '', 0, 1, 0.00000),
(156, 157, 'Nigeria', 'NG', 'NGA', '', 0, 1, 0.00000),
(157, 158, 'Niue', 'NU', 'NIU', '', 1, 1, 0.00000),
(158, 159, 'Norfolk Island', 'NF', 'NFK', '', 0, 1, 0.00000),
(159, 160, 'Northern Mariana Islands', 'MP', 'MNP', '', 0, 1, 0.00000),
(160, 161, 'Norway', 'NO', 'NOR', '', 1, 1, 0.00000),
(161, 162, 'Oman', 'OM', 'OMN', '', 0, 1, 0.00000),
(162, 163, 'Pakistan', 'PK', 'PAK', '', 1, 1, 0.00000),
(163, 164, 'Palau', 'PW', 'PLW', '', 1, 1, 0.00000),
(164, 165, 'Panama', 'PA', 'PAN', '', 0, 1, 0.00000),
(165, 166, 'Papua New Guinea', 'PG', 'PNG', '', 0, 1, 0.00000),
(166, 167, 'Paraguay', 'PY', 'PRY', '', 0, 1, 0.00000),
(167, 168, 'Peru', 'PE', 'PER', '', 0, 1, 0.00000),
(168, 169, 'Philippines', 'PH', 'PHL', '', 1, 1, 0.00000),
(169, 170, 'Pitcairn', 'PN', 'PCN', '', 1, 1, 0.00000),
(170, 171, 'Poland', 'PL', 'POL', '', 1, 1, 0.00000),
(171, 172, 'Portugal', 'PT', 'PRT', '', 1, 1, 0.00000),
(172, 173, 'Puerto Rico', 'PR', 'PRI', '', 1, 1, 0.00000),
(173, 174, 'Qatar', 'QA', 'QAT', '', 0, 1, 0.00000),
(174, 175, 'Reunion', 'RE', 'REU', '', 1, 1, 0.00000),
(175, 176, 'Romania', 'RO', 'ROM', '', 1, 1, 0.00000),
(176, 177, 'Russian Federation', 'RU', 'RUS', '', 1, 1, 0.00000),
(177, 178, 'Rwanda', 'RW', 'RWA', '', 0, 1, 0.00000),
(178, 179, 'Saint Kitts and Nevis', 'KN', 'KNA', '', 1, 1, 0.00000),
(179, 180, 'Saint Lucia', 'LC', 'LCA', '', 1, 1, 0.00000),
(180, 181, 'Saint Vincent and the Grenadines', 'VC', 'VCT', '', 1, 1, 0.00000),
(181, 182, 'Samoa', 'WS', 'WSM', '', 1, 1, 0.00000),
(182, 183, 'San Marino', 'SM', 'SMR', '', 1, 1, 0.00000),
(183, 184, 'Sao Tome and Principe', 'ST', 'STP', '', 1, 1, 0.00000),
(184, 185, 'Saudi Arabia', 'SA', 'SAU', '', 1, 1, 0.00000),
(185, 186, 'Senegal', 'SN', 'SEN', '', 0, 1, 0.00000),
(186, 187, 'Seychelles', 'SC', 'SYC', '', 0, 1, 0.00000),
(187, 188, 'Sierra Leone', 'SL', 'SLE', '', 0, 1, 0.00000),
(188, 189, 'Singapore', 'SG', 'SGP', '', 1, 1, 0.00000),
(189, 190, 'Slovak Republic', 'SK', 'SVK', '{firstname} {lastname}\r\n{company}\r\n{address_1}\n{address_2}\r\n{city} {postcode}\r\n{zone}\r\n{country}', 1, 1, 0.00000),
(190, 191, 'Slovenia', 'SI', 'SVN', '', 1, 1, 0.00000),
(191, 192, 'Solomon Islands', 'SB', 'SLB', '', 0, 1, 0.00000),
(192, 193, 'Somalia', 'SO', 'SOM', '', 1, 1, 0.00000),
(193, 194, 'South Africa', 'ZA', 'ZAF', '', 1, 1, 0.00000),
(194, 195, 'South Georgia &amp; South Sandwich Islands', 'GS', 'SGS', '', 1, 1, 0.00000),
(195, 196, 'Spain', 'ES', 'ESP', '', 1, 1, 0.00000),
(196, 197, 'Sri Lanka', 'LK', 'LKA', '', 1, 1, 0.00000),
(197, 198, 'St. Helena', 'SH', 'SHN', '', 1, 1, 0.00000),
(198, 199, 'St. Pierre and Miquelon', 'PM', 'SPM', '', 1, 1, 0.00000),
(199, 200, 'Sudan', 'SD', 'SDN', '', 1, 1, 0.00000),
(200, 201, 'Suriname', 'SR', 'SUR', '', 0, 1, 0.00000),
(201, 202, 'Svalbard and Jan Mayen Islands', 'SJ', 'SJM', '', 1, 1, 0.00000),
(202, 203, 'Swaziland', 'SZ', 'SWZ', '', 0, 1, 0.00000),
(203, 204, 'Sweden', 'SE', 'SWE', '', 1, 1, 0.00000),
(204, 205, 'Switzerland', 'CH', 'CHE', '', 1, 1, 0.00000),
(205, 206, 'Syrian Arab Republic', 'SY', 'SYR', '', 0, 1, 0.00000),
(206, 207, 'Taiwan', 'TW', 'TWN', '', 1, 1, 0.00000),
(207, 208, 'Tajikistan', 'TJ', 'TJK', '', 1, 1, 0.00000),
(208, 209, 'Tanzania, United Republic of', 'TZ', 'TZA', '', 0, 1, 0.00000),
(209, 210, 'Thailand', 'TH', 'THA', '', 1, 1, 0.00000),
(210, 211, 'Togo', 'TG', 'TGO', '', 0, 1, 0.00000),
(211, 212, 'Tokelau', 'TK', 'TKL', '', 1, 1, 0.00000),
(212, 213, 'Tonga', 'TO', 'TON', '', 0, 1, 0.00000),
(213, 214, 'Trinidad and Tobago', 'TT', 'TTO', '', 0, 1, 0.00000),
(214, 215, 'Tunisia', 'TN', 'TUN', '', 0, 1, 0.00000),
(215, 216, 'Turkey', 'TR', 'TUR', '', 1, 1, 0.00000),
(216, 217, 'Turkmenistan', 'TM', 'TKM', '', 1, 1, 0.00000),
(217, 218, 'Turks and Caicos Islands', 'TC', 'TCA', '', 0, 1, 0.00000),
(218, 219, 'Tuvalu', 'TV', 'TUV', '', 0, 1, 0.00000),
(219, 220, 'Uganda', 'UG', 'UGA', '', 0, 1, 0.00000),
(220, 221, 'Ukraine', 'UA', 'UKR', '', 1, 1, 0.00000),
(221, 222, 'United Arab Emirates', 'AE', 'ARE', '', 0, 1, 0.00000),
(222, 2, 'United Kingdom', 'GB', 'GBR', '', 1, 1, 0.00000),
(223, 0, 'United States', 'US', 'USA', '{firstname} {lastname}\n{company}\n{address_1}\n{address_2}\n{city}, {zone} {postcode}\n{country}', 1, 1, 0.00000),
(224, 223, 'United States Minor Outlying Islands', 'UM', 'UMI', '', 1, 1, 0.00000),
(225, 224, 'Uruguay', 'UY', 'URY', '', 1, 1, 0.00000),
(226, 225, 'Uzbekistan', 'UZ', 'UZB', '', 1, 1, 0.00000),
(227, 226, 'Vanuatu', 'VU', 'VUT', '', 0, 1, 0.00000),
(228, 227, 'Vatican City State (Holy See)', 'VA', 'VAT', '', 1, 1, 0.00000),
(229, 228, 'Venezuela', 'VE', 'VEN', '', 0, 1, 0.00000),
(230, 229, 'Viet Nam', 'VN', 'VNM', '', 1, 1, 0.00000),
(231, 230, 'Virgin Islands (British)', 'VG', 'VGB', '', 0, 1, 0.00000),
(232, 231, 'Virgin Islands (U.S.)', 'VI', 'VIR', '', 1, 1, 0.00000),
(233, 232, 'Wallis and Futuna Islands', 'WF', 'WLF', '', 0, 1, 0.00000),
(234, 233, 'Western Sahara', 'EH', 'ESH', '', 1, 1, 0.00000),
(235, 234, 'Yemen', 'YE', 'YEM', '', 0, 1, 0.00000),
(236, 235, 'Yugoslavia', 'YU', 'YUG', '', 1, 1, 0.00000),
(237, 236, 'Democratic Republic of Congo', 'CD', 'COD', '', 1, 1, 0.00000),
(238, 237, 'Zambia', 'ZM', 'ZMB', '', 0, 1, 0.00000),
(239, 238, 'Zimbabwe', 'ZW', 'ZWE', '', 0, 1, 0.00000);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` bigint(20) NOT NULL,
  `parent_id` int(11) DEFAULT '0',
  `name` varchar(45) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `description` text,
  `image_id` bigint(20) DEFAULT NULL,
  `privacy_level` int(11) DEFAULT '0',
  `root_acc` int(11) DEFAULT '0',
  `hidden_groups` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  `site_id` int(11) DEFAULT '1',
  `is_deleted` tinyint(4) DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `parent_id`, `name`, `alias`, `description`, `image_id`, `privacy_level`, `root_acc`, `hidden_groups`, `status`, `created`, `modified`, `site_id`, `is_deleted`) VALUES
(1, 0, 'root', 'root', 'root', NULL, 0, 1, 'a:0:{}', 1, 1355869320, 1355869320, 1, 0),
(2, 1, 'super admin', 'super-admin', 'super admin', NULL, 10, 0, 'a:4:{i:0;s:3:"Ads";i:1;s:8:"Products";i:2;s:7:"Content";i:3;s:6:"Orders";}', 1, 1355869960, 1355872057, 3, 0),
(3, 2, 'users', 'users', 'users', NULL, 20, 0, 'a:5:{i:0;s:9:"Customers";i:1;s:3:"Ads";i:2;s:8:"Products";i:3;s:7:"Content";i:4;s:6:"Orders";}', 1, 1355872186, 1355872186, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
`id` int(11) NOT NULL,
  `type` varchar(100) DEFAULT 'text',
  `name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `dsc` varchar(512) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `hidden` tinyint(4) DEFAULT '0',
  `options` varchar(512) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `type`, `name`, `value`, `label`, `dsc`, `order`, `hidden`, `options`, `created`, `updated`) VALUES
(1, 'select', 'settings_limit', '100', 'Items per page', 'settings_limit', 1, 0, ' {"options":{"10":10,"50":50,"100":100,"1000":1000}} ', '2012-06-17 19:10:39', '2013-01-16 22:47:25'),
(2, 'select', 'system_offline', '0', 'System Offline', 'system_offline', 2, 0, ' {"options":{"0":"Online","1":"Offline"}} ', '2012-06-17 19:11:32', '2013-01-16 22:47:26'),
(3, 'textarea', 'system_offline_message', 'the site is down please come back later thank you', 'System Offline Message', 'system_offline_message', 3, 0, ' {"cols":30,"rows":8} ', '2012-06-17 19:11:59', '2013-01-16 22:47:26'),
(4, 'text', 'session_time', '7600', 'Session Timeout (in minutes)', 'session_time', 4, 0, NULL, '2012-06-17 19:12:48', '2013-01-16 22:47:26'),
(5, 'text', 'fb_apikey', '224460107443', 'Facebook API Key', 'fb_apikey', 5, 0, NULL, '2012-07-01 15:48:23', '2013-01-16 22:47:26'),
(6, 'text', 'fb_apipass', '194a6e8c1f0e00346b3925a194be5991', 'Facebook API Pass', 'fb_apipass', 1, 0, NULL, '2012-07-01 15:48:23', '2013-01-16 22:47:25'),
(7, 'text', 'fb_appname', 'zbookmarks', 'Facebook App Name', 'fb_appname', 1, 0, NULL, '2012-07-01 15:49:00', '2013-01-16 22:47:26'),
(8, 'text', 'tw_appname', 'tw_appname', 'Twitter App Name', 'tw_appname', 1, 0, NULL, '2012-07-01 15:49:00', '2013-01-16 22:47:26'),
(9, 'text', 'tw_oauth_token', 'jjGklotJ3Xcevbyi7Ubn3w', 'Twitter Auth Token', 'tw_oauth_token', 1, 0, NULL, '2012-07-01 15:49:26', '2013-01-16 22:47:26'),
(10, 'text', 'tw_oauth_token_secret', 'OCLKtNyYMy1njO7MbWkUv5WyAeqFuituDI5ETI', 'Twitter Auth Token Secret', 'tw_oauth_token_secret', 1, 0, NULL, '2012-07-01 15:49:26', '2013-01-16 22:47:26'),
(11, 'text', 'site_email', 'Your Name <email@yourdomain.com>', 'Site Email', 'The email used to send emails ', 1, 0, NULL, '2012-08-19 00:48:01', '2013-01-16 22:47:26'),
(12, 'text', 'site_domain', 'zam2.com', 'Site Domain', 'The main site domain', 1, 0, NULL, '2012-08-19 00:48:01', '2013-01-16 22:47:26');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
`id` tinyint(4) NOT NULL,
  `abv` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1 COMMENT='States';

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `abv`, `name`) VALUES
(1, 'AL', 'Alabama'),
(2, 'AK', 'Alaska'),
(3, 'AZ', 'Arizona'),
(4, 'AR', 'Arkansas'),
(5, 'CA', 'California'),
(6, 'CO', 'Colorado'),
(7, 'CT', 'Connecticut'),
(8, 'DE', 'Delaware'),
(9, 'DC', 'District Of Columbia'),
(10, 'FL', 'Florida'),
(11, 'GA', 'Georgia'),
(12, 'HI', 'Hawaii'),
(13, 'ID', 'Idaho'),
(14, 'IL', 'Illinois'),
(15, 'IN', 'Indiana'),
(16, 'IA', 'Iowa'),
(17, 'KS', 'Kansas'),
(18, 'KY', 'Kentucky'),
(19, 'LA', 'Louisiana'),
(20, 'ME', 'Maine'),
(21, 'MD', 'Maryland'),
(22, 'MA', 'Massachusetts'),
(23, 'MI', 'Michigan'),
(24, 'MN', 'Minnesota'),
(25, 'MS', 'Mississippi'),
(26, 'MO', 'Missouri'),
(27, 'MT', 'Montana'),
(28, 'NE', 'Nebraska'),
(29, 'NV', 'Nevada'),
(30, 'NH', 'New Hampshire'),
(31, 'NJ', 'New Jersey'),
(32, 'NM', 'New Mexico'),
(33, 'NY', 'New York'),
(34, 'NC', 'North Carolina'),
(35, 'ND', 'North Dakota'),
(36, 'OH', 'Ohio'),
(37, 'OK', 'Oklahoma'),
(38, 'OR', 'Oregon'),
(39, 'PA', 'Pennsylvania'),
(40, 'RI', 'Rhode Island'),
(41, 'SC', 'South Carolina'),
(42, 'SD', 'South Dakota'),
(43, 'TN', 'Tennessee'),
(44, 'TX', 'Texas'),
(45, 'UT', 'Utah'),
(46, 'VT', 'Vermont'),
(47, 'VA', 'Virginia'),
(48, 'WA', 'Washington'),
(49, 'WV', 'West Virginia'),
(50, 'WI', 'Wisconsin'),
(51, 'WY', 'Wyoming'),
(53, 'OUTUS', 'Outside of United States');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` bigint(20) NOT NULL,
  `site_id` int(11) DEFAULT '0',
  `email` varchar(45) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `screen_name` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `is_admin` int(11) DEFAULT '0',
  `group_id` int(11) NOT NULL,
  `profile_imageid` bigint(20) DEFAULT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `phone_code` varchar(5) DEFAULT '001',
  `phone` varchar(20) DEFAULT '',
  `city` varchar(45) DEFAULT NULL,
  `state_id` bigint(20) DEFAULT NULL,
  `country_id` bigint(20) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `login_attempts` int(11) DEFAULT NULL,
  `last_login_date_time` int(11) DEFAULT NULL,
  `last_login_ip` varchar(20) DEFAULT NULL,
  `terms` tinyint(4) DEFAULT '0',
  `created` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `is_deleted` tinyint(4) DEFAULT '0',
  `facebook_id` bigint(20) unsigned NOT NULL,
  `blog_url` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `gallery_type` int(11) DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `site_id`, `email`, `username`, `screen_name`, `password`, `is_admin`, `group_id`, `profile_imageid`, `first_name`, `last_name`, `phone_code`, `phone`, `city`, `state_id`, `country_id`, `zip`, `login_attempts`, `last_login_date_time`, `last_login_ip`, `terms`, `created`, `modified`, `status`, `is_deleted`, `facebook_id`, `blog_url`, `youtube`, `twitter`, `gallery_type`) VALUES
(1, 1, 'zam@zam.cc', 'admin', NULL, '5d4e5e342ba57f099966d08ef83e6e41871413da', 1, 1, NULL, 'admin', 'admin', '83', '(234)234-2342', 'dasd', 1, 63, 11111, NULL, NULL, NULL, 0, 1342099165, 1356931120, 1, 0, 0, NULL, NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`), ADD KEY `group_image_id` (`image_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD KEY `profile_image_id` (`profile_imageid`), ADD KEY `state_id` (`state_id`), ADD KEY `country_id` (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=240;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
