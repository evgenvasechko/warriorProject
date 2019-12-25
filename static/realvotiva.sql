-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 25 2019 г., 15:57
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `realvotiva`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bronze`
--

CREATE TABLE `bronze` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `fence`
--

CREATE TABLE `fence` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `img_name`) VALUES
(1, 'gallery (1).jpg'),
(2, 'gallery (2).jpg'),
(3, 'gallery (3).jpg'),
(4, 'gallery (4).jpg'),
(5, 'gallery (5).jpg'),
(6, 'gallery (6).jpg'),
(7, 'gallery (7).jpg'),
(8, 'gallery (8).jpg'),
(9, 'gallery (9).jpg'),
(10, 'gallery (10).jpg'),
(11, 'gallery (11).jpg'),
(12, 'gallery (12).jpg'),
(13, 'gallery (13).jpg'),
(14, 'gallery (14).jpg'),
(15, 'gallery (15).jpg'),
(16, 'gallery (16).jpg'),
(17, 'gallery (17).jpg'),
(18, 'gallery (18).jpg'),
(19, 'gallery (19).jpg'),
(20, 'gallery (20).jpg'),
(21, 'gallery (21).jpg'),
(22, 'gallery (22).jpg'),
(23, 'gallery (23).jpg'),
(24, 'gallery (24).jpg'),
(25, 'gallery (25).jpg'),
(26, 'gallery (26).jpg'),
(27, 'gallery (27).jpg'),
(28, 'gallery (28).jpg'),
(29, 'gallery (29).jpg'),
(30, 'gallery (30).jpg'),
(31, 'gallery (31).jpg'),
(32, 'gallery (32).jpg'),
(33, 'gallery (33).jpg'),
(34, 'gallery (34).jpg'),
(35, 'gallery (35).jpg'),
(36, 'gallery (36).jpg'),
(37, 'gallery (37).jpg'),
(38, 'gallery (38).jpg'),
(39, 'gallery (39).jpg'),
(40, 'gallery (40).jpg'),
(41, 'gallery (41).jpg'),
(42, 'gallery (42).jpg'),
(43, 'gallery (43).jpg'),
(44, 'gallery (44).jpg'),
(45, 'gallery (45).jpg'),
(46, 'gallery (46).jpg'),
(47, 'gallery (47).jpg'),
(48, 'gallery (48).jpg'),
(49, 'gallery (49).jpg'),
(50, 'gallery (50).jpg'),
(51, 'gallery (51).jpg'),
(52, 'gallery (52).jpg'),
(53, 'gallery (53).jpg'),
(54, 'gallery (54).jpg'),
(55, 'gallery (55).jpg'),
(56, 'gallery (56).jpg'),
(57, 'gallery (57).jpg'),
(58, 'gallery (58).jpg'),
(59, 'gallery (59).jpg'),
(60, 'gallery (60).jpg'),
(61, 'gallery (61).jpg'),
(62, 'gallery (62).jpg'),
(63, 'gallery (63).jpg'),
(64, 'gallery (64).jpg'),
(65, 'gallery (65).jpg'),
(66, 'gallery (66).jpg'),
(67, 'gallery (67).jpg'),
(68, 'gallery (68).jpg'),
(69, 'gallery (69).jpg'),
(70, 'gallery (70).jpg'),
(71, 'gallery (71).jpg'),
(72, 'gallery (72).jpg'),
(73, 'gallery (73).jpg'),
(74, 'gallery (74).jpg'),
(75, 'gallery (75).jpg'),
(76, 'gallery (76).jpg'),
(77, 'gallery (77).jpg'),
(78, 'gallery (78).jpg'),
(79, 'gallery (79).jpg'),
(80, 'gallery (80).jpg'),
(81, 'gallery (81).jpg'),
(82, 'gallery (82).jpg'),
(83, 'gallery (83).jpg'),
(84, 'gallery (84).jpg'),
(85, 'gallery (85).jpg'),
(86, 'gallery (86).jpg'),
(87, 'gallery (87).jpg'),
(88, 'gallery (88).jpg'),
(89, 'gallery (89).jpg'),
(90, 'gallery (90).jpg'),
(91, 'gallery (91).jpg'),
(92, 'gallery (92).jpg'),
(93, 'gallery (93).jpg'),
(94, 'gallery (94).jpg'),
(95, 'gallery (95).jpg'),
(96, 'gallery (96).jpg'),
(97, 'gallery (97).jpg'),
(98, 'gallery (98).jpg'),
(99, 'gallery (99).jpg'),
(100, 'gallery (100).jpg'),
(101, 'gallery (101).jpg'),
(102, 'gallery (102).jpg'),
(103, 'gallery (103).jpg'),
(104, 'gallery (104).jpg'),
(105, 'gallery (105).jpg'),
(106, 'gallery (106).jpg'),
(107, 'gallery (107).jpg'),
(108, 'gallery (108).jpg'),
(109, 'gallery (109).jpg'),
(110, 'gallery (110).jpg'),
(111, 'gallery (111).jpg'),
(112, 'gallery (112).jpg'),
(113, 'gallery (113).jpg'),
(114, 'gallery (114).jpg'),
(115, 'gallery (115).jpg'),
(116, 'gallery (116).jpg'),
(117, 'gallery (117).jpg'),
(118, 'gallery (118).jpg'),
(119, 'gallery (119).jpg'),
(120, 'gallery (120).jpg'),
(121, 'gallery (121).jpg'),
(122, 'gallery (122).jpg'),
(123, 'gallery (123).jpg'),
(124, 'gallery (124).jpg'),
(125, 'gallery (125).jpg'),
(126, 'gallery (126).jpg'),
(127, 'gallery (127).jpg'),
(128, 'gallery (128).jpg'),
(129, 'gallery (129).jpg'),
(130, 'gallery (130).jpg'),
(131, 'gallery (131).jpg'),
(132, 'gallery (132).jpg'),
(133, 'gallery (133).jpg'),
(134, 'gallery (134).jpg'),
(135, 'gallery (135).jpg'),
(136, 'gallery (136).jpg'),
(137, 'gallery (137).jpg'),
(138, 'gallery (138).jpg'),
(139, 'gallery (139).jpg'),
(140, 'gallery (140).jpg'),
(141, 'gallery (141).jpg'),
(142, 'gallery (142).jpg'),
(143, 'gallery (143).jpg'),
(144, 'gallery (144).jpg'),
(145, 'gallery (145).jpg'),
(146, 'gallery (146).jpg'),
(147, 'gallery (147).jpg'),
(148, 'gallery (148).jpg'),
(149, 'gallery (149).jpg'),
(150, 'gallery (150).jpg'),
(151, 'gallery (151).jpg'),
(152, 'gallery (152).jpg'),
(153, 'gallery (153).jpg'),
(154, 'gallery (154).jpg'),
(155, 'gallery (155).jpg'),
(156, 'gallery (156).jpg'),
(157, 'gallery (157).jpg'),
(158, 'gallery (158).jpg'),
(159, 'gallery (159).jpg'),
(160, 'gallery (160).jpg'),
(161, 'gallery (161).jpg'),
(162, 'gallery (162).jpg'),
(163, 'gallery (163).jpg'),
(164, 'gallery (164).jpg'),
(165, 'gallery (165).jpg'),
(166, 'gallery (166).jpg'),
(167, 'gallery (167).jpg'),
(168, 'gallery (168).jpg'),
(169, 'gallery (169).jpg'),
(170, 'gallery (170).jpg'),
(171, 'gallery (171).jpg'),
(172, 'gallery (172).jpg'),
(173, 'gallery (173).jpg'),
(174, 'gallery (174).jpg'),
(175, 'gallery (175).jpg'),
(176, 'gallery (176).jpg'),
(177, 'gallery (177).jpg'),
(178, 'gallery (178).jpg'),
(179, 'gallery (179).jpg'),
(180, 'gallery (180).jpg'),
(181, 'gallery (181).jpg'),
(182, 'gallery (182).jpg'),
(183, 'gallery (183).jpg'),
(184, 'gallery (184).jpg'),
(186, 'gallery (186).jpg'),
(187, 'gallery (187).jpg'),
(188, 'gallery (188).jpg'),
(189, 'gallery (189).jpg'),
(190, 'gallery (190).jpg'),
(191, 'gallery (191).jpg'),
(192, 'gallery (192).jpg'),
(193, 'gallery (193).jpg'),
(194, 'gallery (194).jpg'),
(195, 'gallery (195).jpg'),
(196, 'gallery (196).jpg'),
(197, 'gallery (197).jpg'),
(198, 'gallery (198).jpg'),
(199, 'gallery (199).jpg'),
(200, 'gallery (200).jpg'),
(201, 'gallery (201).jpg'),
(202, 'gallery (202).jpg'),
(203, 'gallery (203).jpg'),
(204, 'gallery (204).jpg'),
(205, 'gallery (205).jpg'),
(206, 'gallery (206).jpg'),
(207, 'gallery (207).jpg'),
(208, 'gallery (208).jpg'),
(209, 'gallery (209).jpg'),
(210, 'gallery (210).jpg'),
(211, 'gallery (211).jpg'),
(212, 'gallery (212).jpg'),
(213, 'gallery (213).jpg'),
(214, 'gallery (214).jpg'),
(215, 'gallery (215).jpg'),
(216, 'gallery (216).jpg'),
(217, 'gallery (217).jpg'),
(218, 'gallery (218).jpg'),
(219, 'gallery (219).jpg'),
(220, 'gallery (220).jpg'),
(221, 'gallery (221).jpg'),
(222, 'gallery (222).jpg'),
(223, 'gallery (223).jpg'),
(224, 'gallery (224).jpg'),
(225, 'gallery (225).jpg'),
(226, 'gallery (226).jpg'),
(227, 'gallery (227).jpg'),
(228, 'gallery (228).jpg'),
(229, 'gallery (229).jpg'),
(230, 'gallery (230).jpg'),
(231, 'gallery (231).jpg'),
(232, 'gallery (232).jpg'),
(233, 'gallery (233).jpg'),
(234, 'gallery (234).jpg'),
(235, 'gallery (235).jpg'),
(236, 'gallery (236).jpg'),
(237, 'gallery (237).jpg'),
(238, 'gallery (238).jpg'),
(239, 'gallery (239).jpg'),
(240, 'gallery (240).jpg'),
(241, 'gallery (241).jpg'),
(242, 'gallery (242).jpg'),
(243, 'gallery (243).jpg'),
(244, 'gallery (244).jpg'),
(245, 'gallery (245).jpg'),
(246, 'gallery (246).jpg'),
(247, 'gallery (247).jpg'),
(248, 'gallery (248).jpg'),
(249, 'gallery (249).jpg'),
(250, 'gallery (250).jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `gravestones`
--

CREATE TABLE `gravestones` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gravestones`
--

INSERT INTO `gravestones` (`id`, `name`, `origin`, `material`, `size`, `img`) VALUES
(1, 'rec1', 'China', 'Marble', '180х120х150', 'afford-1.png'),
(2, 'rec2', 'Russia', 'Marble', '180х120х150', 'promo-1.png'),
(3, 'rec3', 'Poland', 'Granite', '180х120х150', 'promo-2.png'),
(4, 'rec4', 'Belarus', 'Granite', '180х120х150', 'promo-3.png');

-- --------------------------------------------------------

--
-- Структура таблицы `lamps_vases`
--

CREATE TABLE `lamps_vases` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Структура таблицы `monuments`
--

CREATE TABLE `monuments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `descriptin` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `stones`
--

CREATE TABLE `stones` (
  `id` int(11) NOT NULL,
  `material` varchar(255) DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bronze`
--
ALTER TABLE `bronze`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fence`
--
ALTER TABLE `fence`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gravestones`
--
ALTER TABLE `gravestones`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lamps_vases`
--
ALTER TABLE `lamps_vases`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `monuments`
--
ALTER TABLE `monuments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `stones`
--
ALTER TABLE `stones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bronze`
--
ALTER TABLE `bronze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `fence`
--
ALTER TABLE `fence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT для таблицы `gravestones`
--
ALTER TABLE `gravestones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `lamps_vases`
--
ALTER TABLE `lamps_vases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `monuments`
--
ALTER TABLE `monuments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `stones`
--
ALTER TABLE `stones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
